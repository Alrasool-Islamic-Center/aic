<?php

namespace App\Http\Controllers;

use App\Donation;
use App\ECMember;
use App\DonationReceiver;
use App\DonationTransaction;
use App\DonationProject;
use App\MoneyTransfer;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class DonationsController extends Controller
{
    /**
     * Recieve Donation
     *
     * @return \Illuminate\Http\Response
     */
    public function recieveDonation(Request $request)
    {
        $from = $request->input("From");
        $body = $request->input("Body");
        $elements = array_filter(explode(" ", $body), function($k) {
            return $k !== "";
        });
        [$transType] = $elements;
        $transType = strtoupper($transType);
        $receiver = DonationReceiver::where('phone_number', $from)->first();
        if (is_null($receiver))
            return $this->sendMessage("not an authorized phone number, please contact alrasool islamic center support team", $from);
        $respBody = "sorry, the messaging service is under maintainance at the mean time, we appreciate your patience";
        $phoneMessageMap = [];
        if ($transType == "RCVD") {
            [, $donorPhone, $donationAmount, $projectId] = $elements;
            $donationProject = DonationProject::where('id', $projectId)->first();
            if (is_null($donationProject))
                return $this->sendMessage("Invalid Project ID, please enter a valid project ID", $from);
            if (!is_numeric($donationAmount))
                return $this->sendMessage("Invalid amount, please enter only a number for donation amount", $from);

            $contact = Contact::updateOrCreate(['type' => 'phone', 'value' => $donorPhone]);
            $donation = Donation::create([
                'donation_receiver_id'  => $receiver->id,
                'contact_id'            => $contact->id,
                'donation_project_id'   => $donationProject->id,
                'amount'                => $donationAmount,
                'ec_notified'           => true,
            ]);
            DonationTransaction::create([
                'donation_receiver_id'  => $receiver->id,
                'donation_id'           => $donation->id,
                'type'                  => $transType,
                'amount'                => $donationAmount,
            ]);

            $ec_members = ECMember::where('is_active', true)
                ->where('phone_number', '!=', $receiver->phone_number)
                ->where('is_active', true)
                ->get();
            foreach ($ec_members as $ec) {
                $phoneMessageMap[$ec->phone_number] = $receiver->first_name . " " . $receiver->last_name . "  has just received $" . $donationAmount . " from " . $donorPhone; 
            }
            $respBody = "money recieved, thank you!";
        } elseif ($transType == "DEPO") {
            [, $depositAmount] = $elements;
            DonationTransaction::create([
                'donation_receiver_id'  => $receiver->id,
                'type'                  => $transType,
                'amount'                => $depositAmount,
            ]);
            $ec_members = ECMember::where('is_active', true)
                ->where('phone_number', '!=', $receiver->phone_number)
                ->where('is_active', true)
                ->get();
            foreach ($ec_members as $ec) {
                $phoneMessageMap[$ec->phone_number] = $receiver->first_name . " " . $receiver->last_name . "  has just deposited $" . $depositAmount; 
            }
            $respBody = "you have deposited " . $depositAmount . ". Thank you";
        } elseif ($transType == "MY$$") {
            // $transfers_out = DB::table('money_transfers')
            //     ->where('state', 'accepted')
            //     ->where('transferor_phone', $receiver->phone_number)
            //     ->sum('amount');
            // $transfers_in = DB::table('money_transfers')
            //     ->where('state', 'accepted')
            //     ->where('transferee_phone', $receiver->phone_number)
            //     ->sum('amount');
            $depositSum = DB::table('donation_transactions')
                ->where('donation_receiver_id', $receiver->id)
                ->where('type', 'DEPO')
                ->sum('amount');
            $donationSum = DB::table('donation_transactions')
                ->where('donation_receiver_id', $receiver->id)
                ->where('type', 'RCVD')
                ->sum('amount');
            $respBody = "you owe AIC: $" . (($donationSum ) - ($depositSum));
        } elseif (in_array($transType, ["XFRI", "XFRR", "XFRA"])) {
            // transfer transactions section
            $transferor = $receiver;
            $uniqueID = $this->uniqueID();
            $codeToStateMap = [
                'XFRI' => 'initiated',
                'XFRR' => 'rejected',
                'XFRA' => 'accepted',
            ];
            if ($transType == "XFRI") {
                [ , $phoneNumber, $amount] = $elements;
                $phoneNumber = '+1' . $phoneNumber;
                $transferee = DonationReceiver::where('phone_number', $phoneNumber)->first();
                
                if (is_null($transferee)) {
                    return $this->sendMessage("Please provide a phone number of an authorized transferee", $from);
                }
                MoneyTransfer::create([
                    'amount' => $amount,
                    'state' => $codeToStateMap[$transType],
                    'transferee_phone' => $phoneNumber,
                    'transferor_phone' => $from,
                    'unique_id' => $uniqueID,
                ]);
                $phoneMessageMap[$phoneNumber] = $transferor->first_name . " " . $transferor->last_name . " has initiated a transfer of $" . $amount . " to you. You can either accept: XFRA " . $uniqueID . ". Or you can reject: XFRR " . $uniqueID;
            } elseif ($transType == "XFRA" || $transType == "XFRR") {
                [ , $uniqueId] = $elements;
                $transfer = MoneyTransfer::where('unique_id', $uniqueId)
                    ->first();
                $transferee = DonationReceiver::where('phone_number', $transfer->transferee_phone)->first();
                if (is_null($transfer)) {
                    return $this->sendMessage("There hasn't been a transfer initiated with that ID, please double check the transfer ID.", $from);
                }
                if ($transfer->transferee_phone != $from) {
                    return $this->sendMessage("you are not authorized to do this operation. the only person authorized to accept or reject this transfer is" . $transferee->first_name . " " . $transferee->last_name, $from);
                }
                $transfer->update(['state' => $codeToStateMap[$transType]]);
                $uniqueID = $uniqueId;
                $phoneMessageMap[$transfer->transferor_phone] = $transferee->first_name . " " . $transferee->last_name . " has " . $codeToStateMap[$transType] . " a transfer of $" . $transfer->amount . " initiated by you.";
            }
            $respBody = "A transfer with the ID: " . $uniqueID . " has been " . $codeToStateMap[$transType] . ".";
        } else {
            $respBody = "sorry but this is not a valid transaction";
        };
        foreach ($phoneMessageMap as $phone => $message) {
            $this->sendMessage($message, $phone);
        }
        return $this->sendMessage($respBody, $from);
    }

     /**
     * Sends sms to user using Twilio's programmable SMS client
     * @param String $message Body of sms
     * @param Number $recipients string or array of phone number of recepient
     */
    private function sendMessage($message, $recipient)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($recipient, ['from' => $twilio_number, 'body' => $message]);
    }

    private function uniqueID($length = 6) {
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($length / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $length);
    }
}

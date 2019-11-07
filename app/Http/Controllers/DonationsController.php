<?php

namespace App\Http\Controllers;

use App\Donation;
use App\ECMember;
use App\DonationReceiver;
use App\DonationTransaction;
use App\DonationProject;
use App\Contact;
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
            // return $this->sendMessage($projectId, $from);
            DonationTransaction::create([
                'donation_receiver_id'  => $receiver->id,
                'donation_id'           => $donation->id,
                'type'                  => $transType,
                'amount'                => $donationAmount,
            ]);

            $ec_members = ECMember::where('is_active', true)
                ->where('phone_number', '!=', $receiver->phone_number)
                ->get();
            foreach ($ec_members as $ec) {
                $phoneMessageMap[$ec->phone_number] = $receiver->first_name . " " . $receiver->last_name . "  has just received $" . $donationAmount . " from " . $donorPhone; 
            }
            $respBody = "money recieved, thank you!";
        } elseif ($transType == "DEPO") {
            $respBody = "depositing money";
        } elseif ($transType == "MY$$") {
            $respBody = "here is your cash balance";
        } else {
            $respBody = "sorry but this is not a valid transaction";
        };

        // parse the body of the message here
        // $to = ['+16086181996', $from];
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
}

<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Phone;
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
        // parse the body of the message here
        return $this->sendMessage("HELLO", $from);
    }

     /**
     * Sends sms to user using Twilio's programmable SMS client
     * @param String $message Body of sms
     * @param Number $recipients string or array of phone number of recepient
     */
    private function sendMessage($message, $recipients)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($recipients, ['from' => $twilio_number, 'body' => $message]);
    }
}

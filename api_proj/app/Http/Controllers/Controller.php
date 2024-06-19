<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function sendSms(Request $request){

        $receiver_phone=$request->phone;
        $receiver_message=$request->message;
                
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $senderNumber=getenv("TWILIO_PHONE");
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
                        ->create($receiver_phone, // to
                                [
                                    "body" => $receiver_message,
                                    "from" => $senderNumber,
                                ]
                        );

                        dd("message sent successfully");

            }

            function form(){
                return view('form');
            }
}



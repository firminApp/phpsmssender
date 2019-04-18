<?php

namespace utic\phpsmssender;
/**
 * Created by PhpStorm.
 * User: firmin
 * Date: 18/04/19
 * Time: 19:50
 */
abstract  class SmsUtils
{

    public static function SendMessageToNumber($phone, $message, $from='sms' )
    {


        $urlSmsApi = "https://notifier.keamedical.net/api/v1/notifs";
        $headers = array( 'Content-Type' => 'application/json' );

        $myBody['body'] = $message;
        $myBody['phone_to_user'] = $phone;
        $myBody['title'] = $from;

        $body = Unirest\Request\Body::json($myBody);


        return Unirest\Request::post($urlSmsApi, $headers, $body );

    }

}
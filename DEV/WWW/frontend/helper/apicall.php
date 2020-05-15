<?php
require_once "../settings.php";
class APICall
{
    public static function send($pPOST, $pHEAD)
    {
        //API Url
        $url = BACKEND - URL . $pApiFunc;

        //Initiate cURL.
        $ch = curl_init($pHEAD);

        //The JSON data.

        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($pPOST);

        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);

        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        //Execute the request
        $result = curl_exec($ch);
        return $result;
    }
}

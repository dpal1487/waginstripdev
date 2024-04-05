<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(Request $request){

        //     $data =  ['email' => $request->email];
        //     $json = json_encode($data);
        //     $url = 'https://www.wagnistrip.com/logins';
        //     $ch = curl_init($url);
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        //     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //         'Content-Type: application/json',
        //         'Content-Length: ' . strlen($json)
        //     ));
             
        // echo   $response = curl_exec($ch);
        // die();
        //     if(curl_errno($ch)) {
        //         echo 'Error: ' . curl_error($ch);
        //     } else {
        //         echo $response;
        //     }
        //     curl_close($ch);
    }
}

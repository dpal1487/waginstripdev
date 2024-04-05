<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent\Agent;
use App\Http\Controllers\Agent\Booking\Galelio\TicketingController;

class cashfreeprocess extends Controller
{
    function process (Request $request){
        $input = $request->all();
        // dd($input);
        $customerEmail = $customerName = $customerPhone = "";
       
        $postData = array(
            "appId" => "1661862c982a09f6d5f1d93900681661",
            "orderId" => $input['uniqueid'],
            "orderAmount" => $input['data-amount'] ,
            "orderCurrency" => 'INR',
            "orderNote" => 'Wallet',
            "customerName" => $input['customerName'],
            "customerPhone" => $input['customerPhone'],
            "customerEmail" => $input['customerEmail'],
            "returnUrl" =>  route('galileo-returnurl'),
            "notifyUrl" => route('galileo-returnurl'),
            'secretKey' => "781827d26290a6ea98559e65ec895029923b5fa7",
        );
        
        //dd($input,$customerEmail,$postData);
        
        
           return view('flight-pages.oneway-flight-pages.confirm')->with($postData);
        
    }
    function processround (Request $request){

    $input = $request->all();
    if(isset($input['showprice'])){
            $showprice = $input['showprice'];
    }else{
            $showprice = 'unchecked';
    }
    $amount = session('totalAmount') ?? session('total_fare');
    
        if(isset($input['IsAgent'])){
            if($input['agent']== 'agent'){
                $Agent = Session()->get("Agent");
                if($Agent != null){
                    $mail = $Agent->email;
                    $Agent = Agent::where('email', '=', $mail)->first();
                    if($Agent->state >= $amount){
                        $Agent->state =  $Agent->state - $amount;
                        $Agent->save();
                        $tnxid = $input['txnid'];
                        $cratePnr = new TicketingController;
                        $saveBooking = $cratePnr->DomGalBooking($tnxid, $showprice);
                        
                        return view('flight-pages.booking-confirm.Round-Gal-Dom')->with('bookings', $saveBooking);
                    }else{
                        dd("Add Amount");
                    }
                }    
            }else{
                return back();
            }
        }
    
    
    
    $DcAmount = $CcAmount = '';
    if($input['payment_mode']=="DC"){
        $DcAmount = (($amount *1)/100);
        $amount += $DcAmount;
    }elseif($input['payment_mode']=="CC"){
        $CcAmount = (($amount *2)/100);
        $amount += $CcAmount;
    }
    
    $postData = array(
        "key" => 'FW09Z922O6',
        "txnid" => $input['txnid'],
        "amount" =>$input['amount'],
        "productinfo" => 'Hotel Booking',
        "firstname" => $input['customerName'],
        "email" => $input['customerEmail'],
        "udf1" => $request['udf1'],
        "udf2" => '',
        "udf3" => '',
        "udf4" => '',
        "udf5" => '',
        "udf6" => '',
        "udf7" => '',
        "udf8" => '',
        "udf9" => '',
        "udf10" => '',
        'request_flow' => 'SEAMLESS',
    );

    $SALT = '734VHA2I97';
    $MERCHANT_KEY = 'FW09Z922O6';
    $BuzzData = [
        'key' => 'FW09Z922O6',
        'salt' => '734VHA2I97',
    ];
    $surl = route('bookingsroundtrip');
    $furl = route('bookingsroundtrip');
    // $amount = number_format((float)$input['amount'], 1, '.', '');
    $amount =  $postData['amount'];

    $hash_sequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

    // make an array or split into array base on pipe sign.
    $hash_sequence_array = explode('|', $hash_sequence);
    $hash = null;

    // prepare a string based on hash sequence from the $params array.
    foreach ($hash_sequence_array as $value) {
        $hash .= isset($postData[$value]) ? $postData[$value] : '';
        $hash .= '|';
    }

    $hash .= '734VHA2I97';


    $signatureBuzzHash = strtolower(hash('sha512', $hash));
    //////////////////////////////////////////////////////
    //////////////////////////////////////////////////////
    $cURL = curl_init();

    // Set multiple options for a cURL transfer.
    curl_setopt_array( 
        $cURL, 
        array ( 
            CURLOPT_URL => 'https://pay.easebuzz.in/payment/initiateLink', 
            CURLOPT_POSTFIELDS =>  'key=FW09Z922O6&txnid=' . $postData["txnid"] . '&amount='.$postData["amount"].'&productinfo='.$postData["productinfo"].'&firstname='.$postData["firstname"].'&email='.$postData["email"].'&udf1='.$request['udf1'].'&udf2=&udf3=&udf4=&udf5=&udf6=&udf7=&udf8=&udf9=&udf10=&hash=' . $signatureBuzzHash . '&phone=9632587410&surl='.$surl.'&furl='.$furl.'&request_flow=SEAMLESS',
            CURLOPT_POST => true, 
            CURLOPT_RETURNTRANSFER => true, 
            CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 
            CURLOPT_SSL_VERIFYHOST => 0, 
            CURLOPT_SSL_VERIFYPEER => 0 
        ) 
    );

    $result = curl_exec($cURL);

    // check there is any error or not in curl execution.
    if( curl_errno($cURL) ){
        $cURL_error = curl_error($cURL);
        if( empty($cURL_error) )
            $cURL_error = 'Server Error';
        
        return array(
            'status' => 0, 
            'data' => $cURL_error
        );
    }

    $result = trim($result);
    $result_response = json_decode($result);
    ///////////////////////////////////////////////////////////////////
    $method = "aes-256-cbc";
    $key = substr(hash('sha256', $MERCHANT_KEY), 0, 32);
    $iv = substr(hash('sha256', $SALT), 0, 16);

    $encrypted_card_number = "";
    if (!empty($_POST['card_number'])) {
        $encrypted_card_number = $_POST['card_number'];
        $encrypted_card_number = openssl_encrypt($encrypted_card_number, $method, $key, 0, $iv);
    }

    $encrypted_card_holder_name = "";
    if (!empty($_POST['card_holder_name'])) {
        $encrypted_card_holder_name = $_POST['card_holder_name'];
        $encrypted_card_holder_name = openssl_encrypt($encrypted_card_holder_name, $method, $key, 0, $iv);
    }

    $encrypted_card_cvv = "";
    if (!empty($_POST['card_cvv'])) {
        $encrypted_card_cvv = $_POST['card_cvv'];
        $encrypted_card_cvv = openssl_encrypt($_POST['card_cvv'], $method, $key, 0, $iv);
    }

    $encrypted_card_expiry_date = "";
    if (!empty($_POST['card_expiry_date'])) {
        $encrypted_card_expiry_date = $_POST['card_expiry_date'];
        $encrypted_card_expiry_date = openssl_encrypt($_POST['card_expiry_date'], $method, $key, 0, $iv);
    }

    $card_token = "";
    if (!empty($_POST['card_token'])) {
        $card_token = $_POST['card_token'];
        $card_token = openssl_encrypt($_POST['card_token'], $method, $key, 0, $iv);
    }

    $cryptogram = "";
    if (!empty($_POST['cryptogram'])) {
        $cryptogram = $_POST['cryptogram'];
        $cryptogram = openssl_encrypt($_POST['cryptogram'], $method, $key, 0, $iv);
    }

    $token_expiry_date = "";
    if (!empty($_POST['token_expiry_date'])) {
        $token_expiry_date = $_POST['token_expiry_date'];
        $token_expiry_date = openssl_encrypt($_POST['token_expiry_date'], $method, $key, 0, $iv);
    }
    $token_requester_id = "";
    if (!empty($_POST['token_requester_id'])) {
        $token_requester_id = $_POST['token_requester_id'];
    }

    // dd($data ,$_POST['payment_mode'] , $_POST['bank_code'] , $encrypted_card_number , $encrypted_card_holder_name , $encrypted_card_cvv ,$encrypted_card_expiry_date , $card_token , $cryptogram , $token_expiry_date , $token_expiry_date , $_POST['upi_va'] ,$input);
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <style>
            input, button {
                width: 35%;
                padding: 5px;
                margin: 5px;
            }
        </style>
    </head>
    <body>
    <form id='seamless_auto_submit_form' method='POST' action='https://pay.easebuzz.in/initiate_seamless_payment/'>
    <h2>Click on Submit if not redirecting</h2>
                    <input type='submit' name='submit' value='Submit'></input><br>
                    <input type='hidden' name='access_key' value='".$result_response->data."'></input><br>
                    <input type='hidden' name='payment_mode' value='".$_POST['payment_mode']."'></input><br>
                    <input type='hidden' name='bank_code' value='".$_POST['bank_code']."'></input><br>
                    <input type='hidden' name='card_number' value='".$encrypted_card_number."'></input><br>
                    <input type='hidden' name='card_holder_name' value='".$encrypted_card_holder_name."'></input><br>
                    <input type='hidden' name='card_cvv' value='".$encrypted_card_cvv."'></input><br>
                    <input type='hidden' name='card_expiry_date' value='".$encrypted_card_expiry_date."'></input><br>
                    <input type='hidden' name='card_token' value='".$card_token."'></input><br>
                    <input type='hidden' name='cryptogram' value='".$cryptogram."'></input><br>
                    <input type='hidden' name='token_expiry_date' value='".$token_expiry_date."'></input><br>
                    <input type='hidden' name='token_requester_id' value='".$token_requester_id."'></input><br>
                    <input type='hidden' name='upi_va' value='".$_POST['upi_va']."'></input><br>
                    </form>
                    <script type='text/javascript'>
                      document.getElementById('seamless_auto_submit_form').submit();
                    </script>
            </body>
    </html>
    ";
    }
}

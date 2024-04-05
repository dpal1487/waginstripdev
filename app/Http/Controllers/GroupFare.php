<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\airbook;
use App\Models\Group_fare;
use App\Models\Group_Fare_flight;
use App\Models\Agent\Agent;
use App\Http\Requests\airbookingrequest;

class GroupFare extends Controller
{
    public function Group_fare_submite(Request $request){
        if(empty(session()->get('Agent'))){
            return redirect()->back()->withErrors(['msg'=>'Agent Not Login']);
        }
        $numberOfTraveller = count($request->adultTitle);
        if(isset($request->childTitle)){
            $numberOfTraveller = $numberOfTraveller+count($request->childTitle);
        }
        $adultTitle = (object) $request->adultTitle;
        $adultFirstName =(object) $request->adultFirstName;
        $adultLastName = (object)$request->adultLastName;
        
        $childTitle = (object) $request->childTitle;
        $childFirstName =(object) $request->childFirstName;
        $childLastName = (object)$request->childLastName;
        
        $countryCode2 =$request->countryCode2;
        $phoneNumber=$request->phoneNumber;
        $email=$request->email;
        $price = (integer) $request->price;
        if($request->charity_check == 'checked'){
        $Charity = (integer) session()->get('Charity');
        }else{
         $Charity=0;    
        }
        $totalPrice = $price*$numberOfTraveller+$Charity;
        $TicketNumber = '52';
        $passport = '123456';
        $passanger = json_encode(['adulttittle'=> $adultTitle, 'adultFirstName'=> $adultFirstName, 'adultLastName'=> $adultLastName,'childtittle'=> $childTitle, 'childFirstName'=> $childFirstName, 'childLastName'=> $childLastName, 'passport'=>$passport, 'TicketNumber'=>$TicketNumber]);
        
        $data = new Group_fare();
        $data->name = 'guest';
        $data->email = $email;
        $data->phone = $phoneNumber;
        $data->price = $totalPrice;
        $data->passenger = $passanger;
        $data->amount_status = 0;
        $data->easepayid = '0';
        $agent_id = session()->get('Agent')->id;
        $agg = new Agent();
        $agg = $agg->find($agent_id);
        $data->agent_id = $agent_id;
        $pass = json_decode($passanger, true);
        $group_fare_flight = new Group_Fare_flight();
        $group_fare_flight_id=$request->group_fare_flight_id;
        $group_fare_flight = $group_fare_flight->find($group_fare_flight_id);
        $leftseatn = json_decode($group_fare_flight->itinerary, true)['leftSeatn']-$numberOfTraveller;
        $arr = json_decode($group_fare_flight->itinerary, true);
        $arr['leftSeatn'] = "$leftseatn";
        $arr['leftSeat'] = "$leftseatn Seat Left";
        $arr = json_encode($arr);
        $data->itinerary = $group_fare_flight->itinerary;
        $group_fare_flight->itinerary = $arr;
        $group_fare_flight->save();
        if($data->save()){
            $result = ['data'=>$data, 'totalprice'=>$totalPrice, 'price'=>$price, 'group_fare_flight'=>$group_fare_flight, 'Agent'=>$agg, 'pass'=>$pass, 'numberOfTraveller'=>$numberOfTraveller];
            return view('flight-pages.group-fare.payment_details', $result);  
        }
        }
        
    public function Group_fare_seatselect(Request $request, $id){
        if($id == '1' || $id == '2'){
            $data = new Group_Fare_flight();
            $data = $data->find($id);
            $Charity = 10;
            $request->session()->put('Charity', '10');
            $result = ['Charity'=>$Charity, 'data'=>$data];
            return view('flight-pages.group-fare.group_fare_seat_seletect', $result);
        }else{
            return redirect('/group-fare');
        }
    }
    public function group_fare_payment(Request $request ){
        
        
        $input = $request->all();
         $payData = Group_fare::where('id', $input['txnid'])->first();
        //  dd($payData , $input);
        
        $data =  $payData->price;
        
        
        $DcAmount = $CcAmount = '';
        if($input['payment_mode']=="DC"){
            $DcAmount = (($data*1)/100);
            $data += $DcAmount;
        }elseif($input['payment_mode']=="CC"){
            $CcAmount = (($data*2)/100);
            $data += $CcAmount;
        }
        
        $postData = array(
            "key" => 'FW09Z922O6',
            "txnid" => "Flight-Group-Fare".$payData->id,
            "amount" => $data,
            "productinfo" => 'Group fare',
            "firstname" => $payData->name,
            "email" =>  $payData->email,
            "udf1" => '',
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
        $phone = $payData->phone;

        $SALT = '734VHA2I97';
        $MERCHANT_KEY = 'FW09Z922O6';
        $BuzzData = [
            'key' => 'FW09Z922O6',
            'salt' => '734VHA2I97',
        ];
        $surl = url('/group_fare_get_payment');
        $furl = url('/group_fare_get_payment');
        
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
                CURLOPT_POSTFIELDS =>  'key=FW09Z922O6&txnid=' . $postData["txnid"] . '&amount='.$postData["amount"].'&productinfo='.$postData["productinfo"].'&firstname='.$postData["firstname"].'&email='.$postData["email"].'&udf1=&udf2=&udf3=&udf4=&udf5=&udf6=&udf7=&udf8=&udf9=&udf10=&hash=' . $signatureBuzzHash . '&phone='.$phone.'&surl='.$surl.'&furl='.$furl.'&request_flow=SEAMLESS',
                CURLOPT_POST => true, 
                CURLOPT_RETURNTRANSFER => true, 
                CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 
                CURLOPT_SSL_VERIFYHOST => 0, 
                CURLOPT_SSL_VERIFYPEER => 0 
            ) 
        );

        // Perform a cURL session
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
        // dd($result_response,$furl , $surl,$postData,$input ,$hash);
        ///////////////////////////////////////////////////////////////////
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
                    <input type='hidden' name='access_key' value='".$result_response->data ."'></input><br>
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
    public function group_fare_get_payment(Request $request){
        $txnid = $request->txnid;
        $group_fare_id = substr($txnid, 17);
        $group_fare = new Group_fare();
        $data = $group_fare->find($group_fare_id);
        $agent_id = $data->agent_id;
        $data->amount_status = $request->status;
        $data->easepayid = $request->easepayid;
        $data->save();
        $agent = new Agent();
        $agent_detail = $agent->find($agent_id);
        $request->session()->put('Agent', $agent_detail);
        if($request->status == 'success'){
          return redirect('/Agent/Dashboard')->withErrors(['msg'=>'Payment Success']);
        }elseif($request->status == 'dropped'){
          return redirect('/Agent/Dashboard')->withErrors(['msg'=>'Payment Faile']);
        }else{
          return redirect('/Agent/Dashboard')->withErrors(['msg'=>'Payment Faile']);
        }
        dd($agent_detail);
        dd($request->all());
    }
    
    public function Payment_page(){
        dd();
        return view('flight-pages.group-fare.payment_details');
    }
    
    public function Group_fare_remove_amount(Request $request){
        $group_id = $request->group_id;
        $agent_id = $request->agent_id;
        $group_fare = new Group_fare();
        $data = $group_fare->find($group_id);
        $data->amount_status = 'success';
        $data->easepayid = 'from agent account';
        $data->save();
        $agent = new Agent();
        $agent_detail = $agent->find($agent_id);
        $agent_amount = $agent_detail->state;
        $amount = $data->price;
        $agent_detail->state = $agent_amount - $amount;
        $agent_detail->save();
          return redirect('/Agent/Dashboard')->withErrors(['msg'=>'Payment Success']);
        
    }
    
    public function Group_fare_Page()
    {
        $flight = new Group_Fare_flight();
        $data = $flight->All();
        
        return view('flight-pages.group-fare.GroupFare', ['data'=>$data]);
    }
    
}

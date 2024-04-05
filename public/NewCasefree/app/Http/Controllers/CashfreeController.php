<?php

namespace App\Http\Controllers;
use Config;
use Illuminate\Http\Request;
use Validator;
use AppOrder;
use DateTime;
use App\Models\Order;

class CashfreeController extends Controller
{
       
    public function __construct() {
           
        // $this[
        //     $APP_ID = env('APP_ID'),
        //     $SECRET_KEY = env('SECRET_KEY')
        // ];
        
        // $this->APP_ID = "{{ env('APP_ID') }}";
        // $this->SECRET_KEY = "{{ env('SECRET_KEY') }}";
        $this->APP_ID = "1661862c982a09f6d5f1d93900681661";
        $this->SECRET_KEY = "781827d26290a6ea98559e65ec895029923b5fa7";
          
    }
        
    function cashfree_payment_gateway (){
        return View('cashfree_payment_gateway');
    }
    
    function order (Request $request){
        $this->validate($request, [
            'customerName' => 'required',
            'customerPhone' => 'required',
            'customerEmail' => 'required|email',
            'amount' => 'required|numeric',
        ]);
                
        $customerName = $request->customerName;
        $customerPhone = $request->customerPhone;
        $customerEmail = $request->customerEmail;
        $amount = $request->amount;
        $now = new DateTime();
        $ctime = $now->format('Y-m-d H:i:s');

        $orderId = Order::insertGetId([
            'customerName' => $customerName,
            'customerPhone' => $customerPhone,
            'customerEmail' => $customerEmail,
            'amount' => $amount,
            'created_at' => $ctime,
            'status_id' => 3,
        ]);
     
        $secretKey =  $this->SECRET_KEY;
                
        $postData = array(
            "appId" => $this->APP_ID,
            "orderId" => $orderId,
            "orderAmount" => $amount,
            "orderCurrency" => 'INR',
            "orderNote" => 'Wallet',
            "customerName" => $customerName,
            "customerPhone" => $customerPhone,
            "customerEmail" => $customerEmail,
            "returnUrl" => url('return-url'),
            "notifyUrl" => url('notify-url'),
            'secretKey' => $secretKey,
        );
        return view('cashfree_confirmation')->with($postData);
    }

    function return_url (Request $request){
        // print_r($request->all());
        $orderId = $request->orderId;
        $orderAmount = $request->orderAmount;
        $referenceId = $request->referenceId;
        $txStatus = $request->txStatus;
        $paymentMode = $request->paymentMode;
        $txMsg = $request->txMsg;
        $txTime = $request->txTime;
        $signature = $request->signature;
        $secretkey = $this->SECRET_KEY;
        $data = $orderId . $orderAmount . $referenceId . $txStatus . $paymentMode . $txMsg . $txTime;
        $hash_hmac = hash_hmac('sha256', $data, $secretkey, true);
        $computedSignature = base64_encode($hash_hmac);
        if ($signature == $computedSignature) {
            if ($txStatus == 'SUCCESS'){
                // success query
                Order::where('id', $orderId)->update(['status_id' => 1]);
                return redirect('cashfree-payment-gateway')->with('successMessage', $txTime);
            }else{
                // rejected query
                Order::where('id', $orderId)->update(['status_id' => 2]);
                return redirect('cashfree-payment-gateway')->with('errorMessage', $txTime);
            }
        }else{
            return redirect('cashfree-payment-gateway')->with('errorMessage', 'Signature not match');
        }
    }
}
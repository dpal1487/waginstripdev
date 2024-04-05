@extends('layouts.master')
@section('title', 'WAGNISTRIP')
@section('body')

<!--<script defer src="{{url('assets/js/welcomeblade.js')}}"></script>-->
<style>

.w-Custom86 {
    width: 86%;
}

.card-elem {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 0.25rem;
}

.bank-selector {
    /*  max-height: 140px;  set a fixed height for the container */
    /* overflow-y: auto;  add a scrollbar when content overflows */
}

.bank-selector label.hide {
    display: none;
    margin-bottom: 10px;
    margin-left: -5rem;
    margin-top: 10px;
}

.bank-selector label.show {
    display: block;
    margin-bottom: 10px;
    margin-left: 5rem;
    margin-top: 10px;
}

.bank-selector img {
    float: left;
    margin-top: -6px;
    width: 36px;
    margin-left: -3rem;
}

.bank-selector input[type="radio"] {
    float: left;
    margin-left: -91px;
    width: 10%;
}

.bankName {
    float: left;
}

.mybuttonstyle {
    position: absolute;
    top: 0;
    right: 0;
    padding: 7px;
    background: #0164a3;
    margin: 0;
    color: #fff;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

.card-not-active {
    display: none;
}

/*2nd */
.bank-selector2 {
    /*  max-height: 140px;  set a fixed height for the container */
    /* overflow-y: auto;  add a scrollbar when content overflows */
}

.bank-selector2 label.hide {
    display: none;
    margin-bottom: 10px;
    margin-left: -5rem;
    margin-top: 10px;
}

.bank-selector2 label.show {
    display: block;
    margin-bottom: 10px;
    margin-left: -5rem;
    margin-top: 10px;
}

.bank-selector2 img {
    /*vertical-align: middle;*/
    float: left;
    margin-top: -16px;
    margin-left: -5rem;
}

.bank-selector2 input[type="radio"] {
    float: left;
}

.bankName {
    float: left;
}



/*\\\\\\\\\\\*/
.upicss {
    font-size: 1.2rem;
    text-align: left;
}

.smalltextupi {
    margin-left: 7rem;
    font-size: 1rem;
}

.card-upi-class {
    margin-top: 0.7rem;
    border-radius: 15px;
    text-align: center;
    border-color: antiquewhite;
    width: 85%;
    height: 40px;
}

.upiNote {
    font-size: 1rem;
    margin: 3px 95px auto;
    width: 80%;
}

li {
    float: left;
}

.smallNote {
    border: 1px solid #0164a3;
    background: #0164a3d1;
    color: #fff;
}

/*hotel payment css*/
.hotel-payment-css {
    height: 37rem !important;
    margin-top: 8px;
}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.inputClasscss {
    outline: none;
    border: none;
    display: inline-block;
}

.spanClasscss {
    text-transform: uppercase;
    display: inline-block;
    font-size: 12px;
}


/*'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.*/
.card-number-css {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.card-number-css span {
    margin-right: 292px;
    margin-bottom: 5px;
}

.card-number-css input {
    border-radius: 50px;
    padding: 5px 15px;
    /*width: 100%;*/
    border: 1px solid #0164a3;
}

.card-holder-css {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card-holder-css span {
    margin-right: 292px;
    margin-bottom: 5px;
}

.card-holder-css input {
    border-radius: 50px;
    padding: 5px 15px;
    width: 100%;
    border: 1px solid #0164a3;
}

.expire-css {
    display: flex;
}

.expire-css span {
    font-size: 10px;
    margin-left: 12px;
}

.expire-css select {
    border-radius: 50px;
    padding: 0px 5px;
    border: 1px solid #0164a3;
}

.cvv-no-css input {
    width: 50%;
    height: 4vh;
    border-radius: 50px;
    border: 1px solid #0164a3;
    text-align: center;
}

.flexing {
    display: flex;
}

.payCard {
    width: 11rem;
    height: 28px;
    text-align: center;
    border-radius: 10px;
    border: 1px solid #0164a3;
    box-shadow: 1px 1px 4px 0px gray;
}

/*'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.*/
/****** Payment Form Validation Styling Starts *******/
/*.containing {*/
/*    min-height: 100vh;*/
/*    background: #eee;*/
/*    display: flex;*/
/*    align-items: center;*/
/*    justify-content: center;*/
/*    flex-flow: column;*/
/*    padding-bottom: 60px;*/
/*}*/

.containing form {
    background: #fff;
    border-radius: 5px;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, .1);
    width: 600px;
    padding-top: 160px;
}

.containing form .inputBox {
    margin: 20px;
}

.containing form .inputBox span {
    color: #999;
    padding-bottom: 5px;
}

.containing form .inputBox input,
.containing form .inputBox select {
    width: 100% !important;
    padding: 10px !important;
    border-radius: 10px !important;
    border: 1px solid rgba(0, 0, 0, .3) !important;
    color: #444 !important;
}

.containing form .flexing {
    display: flex;
    gap: 15px;
}

.containing form .flexing .inputBox {
    flex: 1 1 150px;
}

.containing form .submit-btn {
    width: 94% !important;
    background: linear-gradient(45deg, blueviolet, deeppink) !important;
    padding: 10px !important;
    font-size: 20px !important;
    color: #fff !important;
    cursor: pointer !important;
    transition: .2s linear !important;
    margin: 20px !important;
    border-radius: 10px !important;
}

.containing form .submit-btn:hover {
    letter-spacing: 2px !important;
    opacity: .8 !important;
    ;
}

.containing .card-containing {
    position: relative;
    height: 150px;
    width: 270px;
    margin-bottom: 20px;
}

.containing .card-containing .front {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: linear-gradient(45deg, blueviolet, deeppink);
    border-radius: 5px;
    backface-visibility: hidden;
    box-shadow: 0px 15px 25px rgba(0, 0, 0, .2);
    padding: 20px;
    transform: perspective(1000px) rotateY(0deg);
    transition: transform .4s ease-out;
}

.containing .card-containing .front .image {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 10px;
}

.containing .card-containing .front .image img {
    height: 25px;
}

.containing .card-containing .front .card-number-box {
    padding: 30px 0px;
    font-size: 15px;
    color: #fff;
}

.containing .card-containing .front .flexing {
    display: flex;
    margin-top: -25px;
}

.containing .card-containing .front .flexing .box:nth-child(1) {
    margin-right: auto;
}

.containing .card-containing .front .flexing .box {
    font-size: 15px;
    color: #fff;
}

.containing .card-containing .front .flexing .box .card-holder-name {
    text-transform: uppercase;
    font-size: 12px;
}

.containing .card-containing .back {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: linear-gradient(45deg, blueviolet, deeppink);
    border-radius: 5px;
    padding: 20px 0px;
    text-align: right;
    backface-visibility: hidden;
    transform: perspective(1000px) rotateY(180deg);
    transition: transform .4s ease-out;
    box-shadow: 0px 15px 25px rgba(0, 0, 0, .2);
}

.containing .card-containing .back .stripe {
    background: #000;
    width: 100%;
    margin: 10px 0px;
    height: 50px;
}

.containing .card-containing .back .box {
    padding: 0px 20px;
}

.containing .card-containing .back .box span {
    color: #fff;
    font-size: 15px;
}

.containing .card-containing .back .box .cvv-box {
    height: 50px;
    padding: 10px;
    margin-top: 5px;
    color: #333;
    background: #fff;
    border-radius: 5px;
    width: 100%;
}

.containing .card-containing .back .box img {
    margin-top: 30px;
    height: 30px;
}

.inputBox:nth-child(1),
.inputBox:nth-child(2),
.inputBox:nth-child(3) {
    margin-bottom: 15px;
}

.cvv-box {
    height: 27px !important;
}

/****** Payment Form Validation Styling Ends   *******/







.card-upi-classNew {
    margin-top: 0.7rem;
    border-radius: 10px;
    text-align: left;
    width: 100%;
    padding: 10px;
    border: 2px solid #000;
}


.smalltextupiNew {
    margin: 0;
    font-size: 20px;
    padding-bottom: 11px;
    display: inline-block;
}

.smalltextupiNew i {
    font-size: 30px;
    vertical-align: bottom;
}

.verifyBrnNew {
    width: 100%;
    font-size: 17px;
    border-radius: 10px;
    box-shadow: unset;
    padding: 8px 39px;
}


.payCard,
.inputFileds {
    border-radius: 6px;
    border: 1px solid #0164a3;
    box-shadow: 1px 1px 4px 0px gray;
    text-align: left;
    width: 86%;
    padding: 10px;
    height: auto;
    margin-bottom: 10px;
}


.inputFileds {
    border-radius: 6px;
    border: 1px solid #0164a3;
    box-shadow: 1px 1px 4px 0px gray;
    text-align: left;
    width: 86%;
    padding: 10px;
    height: auto;
    margin-bottom: 10px;
}

.activePay.activeRemover{
    border:0;
    background-color: transparent !important;
}


select{
    cursor:pointer;
}

.payCard, .inputFileds{
    border-radius: 6px !important;
    border: 1px solid #0164a3 !important;
    box-shadow: 1px 1px 4px 0px gray !important;
    text-align: left;
    width: 100% !important;
    padding: 10px !important;
    height: auto;
    margin-bottom: 10px;
}


.inputFileds:nth-child(1), .inputFileds:nth-child(2), .inputFileds:nth-child(3){
    margin-bottom:0;
}

.spanTextAsLAbel{
    margin-bottom: 8px !important;
    margin-right: 0 !important;
    text-align: left;
    width: 100%;
    font-size: 16px !important;
    text-transform: capitalize;
}

.expiryFlexMianDiv{
    flex-wrap: wrap;
}

.expiryFlexMianDiv .inputBox.expire-css{
    flex-wrap: wrap;
    width:100%;
    justify-content:space-between;
}

.expiryFlexMianDiv .SelectDateDrp{
    width: 49%;
    padding: 10px;
    border-radius: 10px;
}
.expiryFlexMianDiv .expire-css span{
    margin-left:0;
}



.bank-selector .searchBank {
    position: relative;
}

.bank-selector .searchBank i {
    position: absolute;
    top: 50%;
    transform: translate(9px, -65%);
}

.bank-selector #bank_search {
    padding: 6px 10px;
    width: 100%;
    border-radius: 6px;
    border: 2px solid #0164a3;
    padding-left: 32px;
}


.bank-selector input[type="radio"]{
        margin-left: -78px;
        height: 20px;
}


@media only screen and (min-device-width: 275px) and (max-device-width: 576px) {
    .border-Rmv-Class-mb{
        border:0 !important;
    }
    .paybuton{
            padding: 29px;
            margin-bottom: 29px;
    }
    .smalltextupiNew{
        font-size: 52px;
    }
    
    .verifyBrnNew {;
        font-size: 50px;
        padding: 28px 39px;
    }
    .card-upi-classNew{
        margin:8px 0 30px 0;
        padding: 28px;
        height: auto !important;
    }
    h4.upicss {
       font-size: 46px;
    }
    small.smallNote{
        font-size: 48px;
    }
    ul.upiNote{
        width: 98%;
        font-size: 55px !important;
        margin: 0 0 0 14px;
    }
    
    .payCard{
        margin: 13px 0 13px 0;
        height: auto !important;
        padding: 22px !important;
    }
    .inputFileds{
        padding: 22px !important;
    }
    .inputFileds:nth-child(1), .inputFileds:nth-child(2), .inputFileds:nth-child(3){
        margin: 13px 0 13px 0;
        height: auto !important;
    }
    .spanTextAsLAbel{
            font-size: 52px !important;
    }
    
    .expiryFlexMianDiv .SelectDateDrp {
        width: 100%;
        padding: 27px;
        border-radius: 10px;
        height: auto !important;
        margin: 13px 0;
    }
    .cvv-no-css input {
        width: 100% !important;
        height: auto !important;
        border-radius: 6px;
        border: 1px solid #0164a3;
        text-align: center;
        margin: 18px 0;
    }
    
    .bank-selector #bank_search{
        height: auto !important;
        padding: 24px 0 24px 80px;
    }
    .bank-selector .searchBank i {
        transform: translate(37px, -65%);
    }
    .card-elem{
        margin-left:0;
    }
    .bank-selector input[type="radio"]{
            height: 59px !important;
            width: 53px !important;
            margin-right: 20px;
    }
    .mybuttonstyle{
        display:none;
    }
    .bankName{
        margin-top: 0 !important;
        font-size: 44px;
    }
    .bank-selector img {
       margin: 0 0rem 0 1em;
        height: 58px;
        width: auto;
    }
    .card.border-Rmv-Class-mb .card-body.text-center{
        padding:0;
    }
}




@media screen and (max-width: 425px) {

    .bankName {
        margin-top: 12px;
        margin-left: 15px;
    }

    .bank-selector img {
        margin-top: 7px;
        margin-left: 0rem;
    }

    .bank-selector input[type="radio"] {
        margin-left: -47px;
        width: 2%;
    }

}



</style>

        @php
        use App\Http\Controllers\Airline\AirportiatacodesController;
        use App\Models\Agent\Agent;
        $code = !empty($code) ? $code : 'INR';
        $cvalue = !empty($cvalue) ? $cvalue : 1;
        $icon = __('common.'.$code); 
        @endphp

<section class="bgcolor pt-6p">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="boxunder">
                        <div class="row row_inneer">
                            <div class="col-sm-2">
                                <i class="fa fa-cc-visa" style="font-size:55px;color:#0164a3ed; margin-left: 15px;"></i>
                            </div>
                            <div class="col-sm-7">
                                <span class="fontsize-22">Get additional discounts</span><br>
                                <span class="owstitle">Login to access saved payments and discounts!</span>
                            </div>
                                <div class="col-sm-3 mt-10">
                                    <a href="https://www.wagnistrip.com/user/profile">
                                        <button class="btn btn-sm btn-info fontsize-22">LOGIN NOW</button>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    @php
                        $Agent = Session()->get("Agent");
                    @endphp
                    @if($Agent != null)
                        @php
                            $mail = $Agent->email;
                            $Agent = Agent::where('email', '=', $mail)->first();
                        @endphp
                    {{--if Agent is Loged in --}}
                    <div class="boxunder">
                        <div class="row row_inneer">
                           
                            <div class="col-sm-7">
                                <span class="fontsize-22">Amount in you Agent Account is :  {{$Agent->state}} /-</span>
                                <!--<span class="owstitle">Login to access saved payments and discounts!</span>-->
                            </div>
                                
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 pt-20">
                    <div class="pb-10">
                        <div class="boxunder">
                            <div class="row p-2">
                                <div class="col-sm-4 p-btns">
                                {{--if Agent is Loged in --}}
                                    @if($Agent != null)
                                    @php
                                        $mail = $Agent->email;
                                        $Agent = Agent::where('email', '=', $mail)->first();
                                    @endphp
                   
                                    <div class="paybuton  p-btn" id="AGENT" data-btn-num="1">
                                        <span class="fonts-16 "> <i class="fa fa-credit-card"></i> Hi {{$Agent->name}} </span>
                                        <div class="onwfnt-11 pl30-mt-7 ">Pay Directly From Your Agent Account</div>
                                    </div>
                                    @endif
                                {{--End if Agent is Loged in --}}
                                    
                                    <div class="paybuton p-btn" id="UPIS" data-btn-num="2">
                                        <span class="fonts-16 "> <img src="{{ asset('assets/images/upi.png') }}" alt="" width="25"> UPI </span>
                                        <div class="onwfnt-11 pl30-mt-7 ">Pay Directly From Your Bank Account</div>
                                    </div>
                                    <div class="paybuton p-btn" id="CREADITATM(disable)" data-btn-num="3">
                                        <span class="fonts-16 "> <i class="fa fa-credit-card"></i> Credit/Debit/ATM
                                            Card </span>
                                        <div class="onwfnt-11 pl30-mt-7 ">Visa, MasterCard, Amex, Rupay And More</div>
                                    </div>
                                    <div class="paybuton p-btn" id="PAYLATERS" data-btn-num="4">
                                        <span class="fonts-16 "> <img src="{{ asset('assets/images/netb.jpg') }}"
                                                alt="Net Banking" >Net Banking</span>
                                        <div class="onwfnt-11 pl30-mt-7 "> All Major Banks Available </div>
                                    </div>
                                    @if(!empty($redirect))
                                    <div class="paybuton p-btn mt-2">
                                        <a href="{{$redirect}}">
                                        <span class="fonts-16 font_img"> <img src="{{ asset('assets/images/netb.jpg') }}" alt=""> Paypal </span>
                                        </a>
                                    </div>
                                    @endif                                    
                                </div>
                                <div class="col-sm-8">
                                    <div class="ranjepp">
                                        <span class="onwfnt-11 smalltextupiNew"> <i class="fa fa-mobile" > </i> Keep your phone handy !</span>
                                            <div class="card border-Rmv-Class-mb">
                                                <div class="card-body text-center">
                                                    @php
                                                        $totalfare = $data['fare'];
                                                        $fare = $totalfare * 100;
                                                        $Adult = json_decode($sDetail->travllername);
                                                    @endphp
                                                    <!--<div class="fontsize-22 pb-20"> <i class="fa fa-inr"></i>-->
                                                    <!--    {{ number_format($totalfare) }}  DUE NOW</div>-->
                                                    @if ($trip == 'DomesticRoundTrip')
                                                    
                                                    
                                                    @if($Agent != null)
                                                    <div id="AGENT" class="card-c1 p-btn--1 card-not-active activeRemover">
                                                        @if($totalfare <= $Agent->state)
                                                            <form action="{{url('cart/galelio-traveller-details-buzz')}}" method="post">
                                                            @csrf
                                                            <div class="col-md-12 mt-3">
                                                            <label for="showprice">    
                                                            <input type="checkbox" id="showprice" name="showprice" class="text-18" style="width: 25px;height: 20px;" value="checked" />
                                                            Check This Box To Hide Ticket Price</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="hidden" name="furl" value="flight/booking-roundtrip-domestic">
                                                                <input type="hidden" name="surl" value="flight/booking-roundtrip-domestic">
                                                                <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                                <input type="hidden" name="IsAgent" value="yes">
                                                                <input class="form-check-input" type="checkbox" name="agent" value="agent" id="flexCheckIndeterminate">
                                                                <label class="form-check-label" for="flexCheckIndeterminate">
                                                                    Use My Agent Amount.
                                                                </label>
                                                                <button type="submit" id="Agent" class="searchbtn btn btn-lg verifyBrnNew">VERIFY & PAY</button><br/><br/>
                                                              <h6 class="upicss">
                                                                  If you click on this checkbox, your money will be deducted from your agent's account.
                                                              </h6>
                                                            </div>   
                                                        </form>
                                                        @else
                                                        <form action="{{url('/Agent/add/amount')}}" method="get">
                                                            @csrf
                                                            <div class="form-check">
                                                              <h6 class="upicss">
                                                                   It shows there is not enough money in your account so
                                                                   add funds to your account or use a different mode of payment to book it
                                                                </h6>
                                                            </div>
                                                            <button type="submit" id="Agent" class="searchbtn btn btn-lg verifyBrnNew">VERIFY & PAY</button>
                                                        </form>   
                                                        @endif
                                                    </div>
                                                    @endif
                                                        
                                                    <div id="UPI" class="card-c1 p-btn--2 ">
                                                        
                                                        <h4 class="upicss">Enter UPI ID</h4>
                                                         <form action="{{url('cart/galelio-traveller-details-buzz')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="payment_mode" value="UPI">
                                                            <input type="hidden" name="bank_code" value="">
                                                            <input type="hidden" name="amount" value="{{$totalfare}}">
                                                            <input type="hidden" name="customerPhone" value="{{$sDetail['phonenumber']}}">  
                                                            <input type="hidden" name="customerName" value=" {{$Adult->adults->fistName[0] }} {{$Adult->adults->lastName[0] }}">
                                                            <input type="hidden" name="customerEmail" value="{{$sDetail['email']}}"> 
                                                           
                                                            
                                                            <input type="hidden" name="card_number" id="card_number">
                                                            <input type="hidden" name="card_holder_name" id="card_holder_name">
                                                            <input type="hidden" name="card_cvv" id="card_cvv">
                                                            <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                                                            
                                                            <input type="hidden" name="upi_va" id="upi_va"><br>
                                                            <input type="text" name="upi_va" id="upi_va" class="card-upi-class" placeholder="mobileNumber@upi" required>
                                                            
                                                            <input type="hidden" name="upi_qr" id="upi_qr"><br>
                                                            
                                                            <input type="hidden" name="pay_later_app" id="pay_later_app">
                                                            
                                                            <input type="hidden" name="request_mode" id="request_mode"><br>
                                                            <button type="submit" id="paymentbutton" class="searchbtn btn btn-lg verifyBrnNew">VERIFY & PAY</button>
                                                            <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                            <input type="hidden" name="firstname" value="{{$Adult->adults->fistName[0]}}">
                                                            <input type="hidden" name="email" value="{{$sDetail['email']}}"> 
                                                            <input type="hidden" name="furl" value="flight/booking-roundtrip-domestic"> 
                                                            <input type="hidden" name="surl" value="flight/booking-roundtrip-domestic"> 
                                                            <input type="hidden" name="udf1" value="data">
                                                            <div class="border" style="margin-top: 1rem;"></div>
                                                            <br>
                                                            <div><small class="smallNote">NOTE </small></div>
                                                            <ul class="upiNote">
                                                                <li>Enter your registered VPA</li>
                                                                <li>Receive payment request on bank app</li>
                                                                <li>Authorize payment request</li>
                                                            </ul>
                                                            
                                                        </form>
                                                        
                                                        
                                                    </div>
                                                     <div id="CREADITATM" class="moods card-c1 p-btn--3 card-not-active activeRemover">
                                                            <form action="{{url('cart/galelio-traveller-details-buzz')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="bank_code" value="">
                                                            <input type="hidden" name="amount" value="{{$totalfare}}">
                                                            <input type="hidden" name="customerPhone" value="{{$sDetail['phonenumber']}}">  
                                                            <input type="hidden" name="customerName" value=" {{$Adult->adults->fistName[0] }} {{$Adult->adults->lastName[0] }}">
                                                            <input type="hidden" name="customerEmail" value="{{$sDetail['email']}}"> 
                                                            <select name="payment_mode" id="payment_mode" class="payCard">
                                                                <option >Select</option>
                                                                <option value="DC">Debit Card</option>
                                                                <option value="CC">Credit Card</option>
                                                            </select><br>
                                                            
                                                            <div class="containing">
                                                                
                                                                    <div class="InputBoxes card-number-css">
                                                                        <span class="spanClasscss">card number</span>
                                                                        <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;"
                                                                            name="card_number" id="card_number" placeholder="Enter your card no." class="card-number-input inputFileds" required>
                                                                    </div>
                                                                    <div class="InputBoxes card-holder-css">
                                                                        <span class="spanClasscss card-holder-css">card holder</span>
                                                                        <input type="text" name="card_holder_name" id="card_holder_name" placeholder="Enter card holder name" class="card-holder-input inputFileds"
                                                                            required>
                                                                    </div>
                                                                    <div class="flexing">
                                                                        <div class="inputBox expire-css">
                                                                            <span class="spanClasscss">expiry date</span>
                                                                            <input type="hidden" name="card_expiry_date" class="card-expiry-class inputFileds" id="card_expiry_date">
                                                                            <select name="month" id="month" class="month-input">
                                                                                <option value="00" selected disabled>month</option>
                                                                                <option value="01">01</option>
                                                                                <option value="02">02</option>
                                                                                <option value="03">03</option>
                                                                                <option value="04">04</option>
                                                                                <option value="05">05</option>
                                                                                <option value="06">06</option>
                                                                                <option value="07">07</option>
                                                                                <option value="08">08</option>
                                                                                <option value="09">09</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                            </select>
                                                                            <select name="year" id="year" class="year-input">
                                                                                <option value="year" selected disabled>year</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2025">2025</option>
                                                                                <option value="2026">2026</option>
                                                                                <option value="2027">2027</option>
                                                                                <option value="2028">2028</option>
                                                                                <option value="2029">2029</option>
                                                                                <option value="2030">2030</option>
                                                                                <option value="2031">2031</option>
                                                                                <option value="2032">2032</option>
                                                                                <option value="2033">2033</option>
                                                                                <option value="2034">2034</option>
                                                                                <option value="2035">2035</option>
                                                                                <option value="2036">2036</option>
                                                                                <option value="2037">2037</option>
                                                                                <option value="2038">2038</option>
                                                                                <option value="2039">2039</option>
                                                                                <option value="2040">2040</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="inputBox cvv-no-css">
                                                                            <span class="spanClasscss">cvv</span>
                                                                            <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;"
                                                                                name="card_cvv" id="card_cvv" class="cvv-number-input" required>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <input type="hidden" name="card_number" id="card_number">
                                                            <input type="hidden" name="card_holder_name" id="card_holder_name">
                                                            <input type="hidden" name="card_cvv" id="card_cvv">
                                                            <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                                                            <input type="hidden" name="upi_va" id="upi_va">
                                                            <input type="hidden" name="upi_qr" id="upi_qr">
                                                            <input type="hidden" name="pay_later_app" id="pay_later_app">
                                                            <input type="hidden" name="request_mode" id="request_mode">
                                                            <br><br><br>
                                                            <button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore searchbtn" style="width:auto;margin: -67px auto -16px;">Pay Now</button>
                                                            <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                            <input type="hidden" name="firstname" value="{{$Adult->adults->fistName[0]}}">
                                                            <input type="hidden" name="email" value="{{$sDetail['email']}}"> 
                                                            <input type="hidden" name="furl" value="flight/booking-roundtrip-domestic"> 
                                                            <input type="hidden" name="surl" value="flight/booking-roundtrip-domestic"> 
                                                            <input type="hidden" name="udf1" value="data">
                                                            
                                                        </form>
                                                 
                                                 
                                                    </div>
                                             
                                                    <div id="PAYLATER" class="moods card-c1 p-btn--4 card-not-active">
                                                        
                                                        <form action="{{url('cart/galelio-traveller-details-buzz')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="payment_mode" value="UPI">
                                                            <input type="hidden" name="amount" value="{{$totalfare}}">
                                                            <input type="hidden" name="customerPhone" value="{{$sDetail['phonenumber']}}">  
                                                            <input type="hidden" name="customerName" value=" {{$Adult->adults->fistName[0] }} {{$Adult->adults->lastName[0] }}">
                                                            <input type="hidden" name="customerEmail" value="{{$sDetail['email']}}"> 
                                                           
                                                            <div class="bank-selector" style=" margin: 10px; padding: 5px;">
                                                              <input type="text" id="bank_search" placeholder="Search for a bank" style="width: 100%;">
                                                              @foreach ($bankData as $index => $bank)
                                                                  <div class="card-elem">
                                                                      <label class="{{ $index > 0 && $index < 5 ? 'show' : 'hide' }}">
                                                                          <input type="radio" name="bank_code" value="{{$bank->BankCode}}" class="bank_code_class" required>
                                                                          <img src="{{url('assets/images/BankNames/' . $bank->BankCode . '.png')}}" alt="">
                                                                          <span class="bankName">{{$bank->BankName}}</span>
                                                                      </label>
                                                                  </div>
                                                              @endforeach
                                                            </div>
                                                            
                                                            <br>
                                                            <input type="hidden" name="card_number" id="card_number">
                                                            <input type="hidden" name="card_holder_name" id="card_holder_name">
                                                            <input type="hidden" name="card_cvv" id="card_cvv">
                                                            <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                                                            <input type="hidden" name="upi_va" id="upi_va">
                                                            <input type="hidden" name="upi_qr" id="upi_qr">
                                                            <input type="hidden" name="pay_later_app" id="pay_later_app">
                                                            <input type="hidden" name="request_mode" id="request_mode">
                                                            <br><br><br>
                                                            <button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore searchbtn" style="width:auto;margin: -67px auto -16px;">Pay Now</button>
                                                            <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                            <input type="hidden" name="firstname" value="{{$Adult->adults->fistName[0]}}">
                                                            <input type="hidden" name="email" value="{{$sDetail['email']}}"> 
                                                            <input type="hidden" name="furl" value="flight/booking-roundtrip-domestic"> 
                                                            <input type="hidden" name="surl" value="flight/booking-roundtrip-domestic"> 
                                                            <input type="hidden" name="udf1" value="data">
                                                            
                                                        </form>
                                                        
                                                    </div>
                                                    @elseif($trip == 'MixDomRou')
                                                    
                                                    
                                                    @if($Agent != null)
                                                    <div id="AGENT" class="card-c1 p-btn--1 card-not-active activeRemover">
                                                         @if($totalfare <= $Agent->state)
                                                           <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                            @csrf
                                                            <div class="col-md-12 mt-3">
                                                            <label for="showprice">    
                                                            <input type="checkbox" id="showprice" name="showprice" class="text-18" style="width: 25px;height: 20px;" value="checked" />
                                                            Are You show price On Ticket Form</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="hidden" name="furl" value="{{$url['furl'] ?? $requsData['furl']}}">
                                                                <input type="hidden" name="surl" value="{{$url['surl']?? $requsData['surl']}}">
                                                                <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                                <input type="hidden" name="txnid1" value="{{$sDetail->uniqueid}}">
                                                                <input type="hidden" name="IsAgent" value="yes">
                                                                <input class="form-check-input" type="checkbox" name="agent" value="agent" id="flexCheckIndeterminate">
                                                                <label class="form-check-label" for="flexCheckIndeterminate">
                                                                    Use My Agent Amount.
                                                                </label>
                                                            </div>   
                                                            <button type="submit" id="Agent" class="searchbtn btn btn-lg verifyBrnNew">Book your Ticket</button><br/><br/>
                                                            <h6 class="upicss">
                                                                  If you click on this checkbox, your money will be deducted from your agent's account.
                                                             </h6>
                                                        </form>
                                                        @else
                                                        <form action="{{url('/Agent/add/amount')}}" method="get">
                                                            @csrf
                                                            <div class="form-check">
                                                              <h6 class="upicss">
                                                                   It shows there is not enough money in your account so
                                                                   add funds to your account or use a different mode of payment to book it
                                                                </h6>
                                                            </div>
                                                           <button type="submit" id="Agent" class="searchbtn btn btn-lg verifyBrnNew">VERIFY & PAY</button>
                                                        </form>   
                                                        @endif
                                                    </div>
                                                    @endif
                                                    
                                                    <div id="Payment" class="card-c1 p-btn--2 ">  
                                                        {{--<span class="onwfnt-11 "><i class="fa fa-mobile" style="font-size: 22px;"> </i> Keep phone handly ! </span>--}}
                                                        
                                                                <h4 class="upicss">Enter UPI ID</h4>
                                                                                
                                                         <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                        @csrf
                                                           
                                                            
                                                            <input type="hidden" name="furl" value="{{$url['furl'] ?? $requsData['furl']}}">
                                                            <input type="hidden" name="surl" value="{{$url['surl']?? $requsData['surl']}}">
                                                            <input type="hidden" name="card_number" id="card_number">
                                                            <input type="hidden" name="card_holder_name" id="card_holder_name">
                                                            <input type="hidden" name="card_cvv" id="card_cvv">
                                                            <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                                                            <input type="text" name="upi_va" id="upi_va" class="card-upi-class" placeholder="mobileNumber@upi" required>
                                                            <input type="hidden" name="upi_qr" id="upi_qr"><br>
                                                            <input type="hidden" name="pay_later_app" id="pay_later_app">
                                                            <input type="hidden" name="request_mode" id="request_mode">
                                                            <button type="submit" id="paymentbutton" class="searchbtn btn btn-lg verifyBrnNew">VERIFY & PAY</button>
                                                            <input type="hidden" name="bank_code" value=" ">
                                                            <input type="hidden" name="payment_mode" value="UPI">
                                                            <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                            <input type="hidden" name="firstname" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}">
                                                            <input type="hidden" name="email" value="{{$requsData['email']??$sDetail['email']??''}}"> 
                                                            <input type="hidden" name="amount" value="{{$totalfare}}"> 
                                                            <input type="hidden" name="customerName" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}"> 
                                                            <input type="hidden" name="customerEmail" value="{{$requsData['email']??$sDetail['email']??''}}"> 
                                                            <div class="border" style="margin-top: 1rem;"></div>
                                                            <input type="hidden" name="udf1" value="{{$sDetail->uniqueid}}">
                                                            <br>
                                                            <div><small class="smallNote">NOTE </small></div>
                                                            <ul class="upiNote">
                                                                <li>Enter your registered VPA</li>
                                                                <li>Receive payment request on bank app</li>
                                                                <li>Authorize payment request</li>
                                                            </ul>
                                                        </form>
                                                    
                                                    </div>
                                                    <!--/////////////////////////////////////////////////////////////////////-->
                                                    <div id="CREADITATM" class="moods card-c1 p-btn--3 card-not-active">
                                                
                                                        <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                        @csrf
                                                            <select name="payment_mode" id="payment_mode" class="payCard">
                                                                <option value="DC">Debit Card</option>
                                                                <option value="CC">Credit Card</option>
                                                            </select><br>
                                                            <div class="containing">
                                                                    <div class="inputBox card-number-css">
                                                                        <span class="spanClasscss">card number</span>
                                                                        <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;"
                                                                            name="card_number" id="card_number" placeholder="Enter your card no." class="card-number-input inputFileds" required>
                                                                    </div>
                                                                    <div class="inputBox card-holder-css">
                                                                        <span class="spanClasscss">card holder</span>
                                                                        <input type="text" name="card_holder_name" id="card_holder_name" placeholder="Enter card holder name" class="card-holder-input inputFileds"
                                                                            required>
                                                                    </div>
                                                                    <div class="flexing">
                                                                        <div class="inputBox expire-css">
                                                                            <span class="spanClasscss">expiry date</span><br>
                                                                            <input type="hidden" name="card_expiry_date" class="card-expiry-class expire-datanew" id="card_expiry_date">
                                                                            <select name="month" id="month" class="month-input">
                                                                                <option value="00" selected disabled>month</option>
                                                                                <option value="01">01</option>
                                                                                <option value="02">02</option>
                                                                                <option value="03">03</option>
                                                                                <option value="04">04</option>
                                                                                <option value="05">05</option>
                                                                                <option value="06">06</option>
                                                                                <option value="07">07</option>
                                                                                <option value="08">08</option>
                                                                                <option value="09">09</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                            </select>
                                                                            <select name="year" id="year" class="year-input">
                                                                                <option value="year" selected disabled>year</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2025">2025</option>
                                                                                <option value="2026">2026</option>
                                                                                <option value="2027">2027</option>
                                                                                <option value="2028">2028</option>
                                                                                <option value="2029">2029</option>
                                                                                <option value="2030">2030</option>
                                                                                <option value="2031">2031</option>
                                                                                <option value="2032">2032</option>
                                                                                <option value="2033">2033</option>
                                                                                <option value="2034">2034</option>
                                                                                <option value="2035">2035</option>
                                                                                <option value="2036">2036</option>
                                                                                <option value="2037">2037</option>
                                                                                <option value="2038">2038</option>
                                                                                <option value="2039">2039</option>
                                                                                <option value="2040">2040</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="inputBox cvv-no-css">
                                                                            <span class="spanClasscss">cvv</span>
                                                                            <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;"
                                                                                name="card_cvv" id="card_cvv" class="cvv-number-input" required>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                                            <input type="hidden" name="upi_va" id="upi_va">
                                                            <input type="hidden" name="upi_qr" id="upi_qr">
                                                            <input type="hidden" name="pay_later_app" id="pay_later_app">
                                                            <input type="hidden" name="request_mode" id="request_mode">
                                                            <button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore  searchbtn" style="margin: auto; width: auto;">Pay Now</button>
                                                            {{--<button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore continue-payment">Continue to Payment</button>--}}
                                                            <input type="hidden" name="bank_code" value=" ">
                                                            
                                                                <input type="hidden" name="furl" value="{{$url['furl'] ?? $requsData['furl']}}">
                                                                <input type="hidden" name="surl" value="{{$url['surl']?? $requsData['surl']}}">
                                                                
                                                            <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                            <input type="hidden" name="firstname" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}">
                                                            <input type="hidden" name="email" value="{{$requsData['email']??$sDetail['email']??''}}"> 
                                                            <input type="hidden" name="amount" value="{{$totalfare}}"> 
                                                            <input type="hidden" name="customerName" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}"> 
                                                            <input type="hidden" name="customerEmail" value="{{$requsData['email']??$sDetail['email']??''}}">
                                                            
                                                        </form>
                                                        <script>
                                                                //  =========date validation ==========================================
                                                                    var expireDateInputtwo = document.getElementById("card_expiry_date");
                                                                    var monthSelecttwo = document.getElementById("month");
                                                                    var yearSelecttwo = document.getElementById("year");
                                                            
                                                                    // Add an event listener to the year select element
                                                                    yearSelecttwo.addEventListener("change", updateExpireDatee);
                                                                    // Add an event listener to the month select element
                                                                    monthSelecttwo.addEventListener("change", updateExpireDatee);
                                                                    
                                                                    // Function to update the expire date input based on the selected month and year
                                                                    function updateExpireDatee() {
                                                                    // Get the selected month and year
                                                                    var selectedMonth1 = monthSelecttwo.value;
                                                                    var selectedYear1 = yearSelecttwo.value;
                                                            
                                                                    // Update the expire date input with the selected month and year
                                                                    expireDateInputtwo.value = selectedMonth1 + "/" + selectedYear1;
                                                                    }
                                                            
                                                                    // Initialize the expire date input with the current month and year
                                                                    updateExpireDatee();
                                                            
                                                                    var expireDateInputt1 = document.querySelector(".expire-datanew");
                                                                    var monthSelectt1 = document.getElementById("month");
                                                                    var yearSelectt1 = document.getElementById("year");
                                                                        
                                                                    // Add an event listener to the year select element
                                                                    yearSelectt1.addEventListener("change", updateExpireDatee1);
                                                                    // Add an event listener to the month select element
                                                                    monthSelectt1.addEventListener("change", updateExpireDatee1);
                                                            
                                                                    // Function to update the expire date input based on the selected month and year
                                                                    function updateExpireDatee1() {
                                                                    // Get the selected month and year
                                                                    var selectedMonth1 = monthSelectt1.value;
                                                                    var selectedYear1 = yearSelectt1.value;
                                                            
                                                                    // Update the expire date input with the selected month and year
                                                                    expireDateInputt1.value = selectedMonth1 + "/" + selectedYear1;
                                                                    }
                                                            
                                                                    // Initialize the expire date input with the current month and year
                                                                    updateExpireDatee1();
                                                            
                                                            
                                                                // ==============================
                                                        </script>
                                                    </div>
                                                    <!--/////////////////////////////////////////////////////////////////////-->
                                                    <div id="PAYLATER" class="moods card-c1 p-btn--4 card-not-active">
                                                    <!--<h1>Net banking</h1>-->
                                                    <!--<i class="fa fa-mobile" style="font-size: 22px;"> </i> <span class="onwfnt-11"> Keep phone handly !</span>-->
                                                            <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                            @csrf
                                                                <div class="bank-selector" style=" margin: 10px; padding: 5px;">
                                                                    <input type="text" id="bank_searchTwo"  placeholder="Search for a bank" style="width: 100%;">
                                                                    @foreach ($bankData as $index => $bank)
                                                                        <div class="card-elem">
                                                                        <label class="{{ $index > 0 && $index < 5 ? 'show' : 'hide' }}">
                                                                            <input type="radio" name="bank_code" value="{{$bank->BankCode}}" class="bank_code_class" required>
                                                                            <img src="{{url('assets/images/BankNames/' . $bank->BankCode . '.png')}}" alt="{{$bank->BankName}}">
                                                                            <span class="bankName">{{$bank->BankName}}</span>
                                                                        </label>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            <script>
                                                                        
                                                            
                                                                const searchInputTwo = document.querySelector('#bank_searchTwo');
                                                                const radioLabelss = document.querySelectorAll('.bank-selector label');
                                                                let numShowntwo = 4;
                                                            
                                                                searchInputTwo.addEventListener('input', () => {
                                                                    const searchText = searchInputTwo.value.trim().toLowerCase();
                                                                    let numMatches = 0;
                                                            
                                                                    radioLabelss.forEach((label, index) => {
                                                                        if (index > 0) {
                                                                            const bankName = label.querySelector('.bankName').textContent.trim().toLowerCase();
                                                                            const match = bankName.includes(searchText);
                                                            
                                                                            if (match && numMatches < 4) {
                                                                                label.classList.add('show');
                                                                                numMatches++;
                                                                            } else {
                                                                                label.classList.add('hide');
                                                                                label.classList.remove('show');
                                                                            }
                                                                        }
                                                                    });
                                                                });
                                                            
                                                                if (numShowntwo < radioLabelss.length) {
                                                                    const showMoreButtonTwo = document.createElement('div');
                                                                    showMoreButtonTwo.textContent = 'Show more banks';
                                                                    showMoreButtonTwo.classList.add('mybuttonstyle');
                                                                    showMoreButtonTwo.addEventListener('click', () => {
                                                                        for (let i = numShowntwo; i < numShowntwo + 4 && i < radioLabelss.length; i++) {
                                                                            const label = radioLabelss[i];
                                                                            label.classList.add('show');
                                                                        }
                                                                        numShowntwo += 4;
                                                                        if (numShowntwo >= radioLabelss.length) {
                                                                            showMoreButtonTwo.style.display = 'none';
                                                                        }
                                                                    });
                                                                    searchInputTwo.parentElement.appendChild(showMoreButtonTwo);
                                                                }
                                                                
                                                                
                                                                </script>
                                                                {{-- <select name="bank_code" id="bank_code">
                                                                @foreach ($bankData as $index => $bank)
                                                                    <option value="{{$bank->BankCode}}">$bank->BankName</option>
                                                                @endforeach
                                                                </select>
                                                                <br>--}}
                                                                
                                                                <input type="hidden" name="card_number" id="card_number"><br>
                                                                <input type="hidden" name="furl" value="{{$url['furl'] ?? $requsData['furl']}}">
                                                                <input type="hidden" name="surl" value="{{$url['surl']?? $requsData['surl']}}">
                                                                <input type="hidden" name="card_holder_name" id="card_holder_name"><br>
                                                                <input type="hidden" name="card_cvv" id="card_cvv"><br>
                                                                <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                                                                <input type="hidden" name="upi_va" id="upi_va">
                                                                <input type="hidden" name="upi_qr" id="upi_qr">
                                                                <input type="hidden" name="pay_later_app" id="pay_later_app"><br>
                                                                <input type="hidden" name="request_mode" id="request_mode">
                                                                <button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore searchbtn" style="width:auto;margin: -67px auto -16px;">Pay Now</button>
                                                                <input type="hidden" name="payment_mode" value="NB">
                                                                <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                                <input type="hidden" name="firstname" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}">
                                                                <input type="hidden" name="email" value="{{$requsData['email'] ?? $sDetail['email'] ?? ''}}"> 
                                                                <input type="hidden" name="amount" value="{{$totalfare}}"> 
                                                                <input type="hidden" name="customerName" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}"> 
                                                                <input type="hidden" name="customerEmail" value="{{$requsData['email'] ?? $sDetail['email']??'' }}">
                                                            </form>
                                    
                                                        </div>
                                                    <!--/////////////////////////////////////////////////////////////////////-->
                                                    <!--/////////////////////////////////////////////////////////////////////-->
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    @else
                                                    
                                                     @if($Agent != null)
                                                    <div id="AGENT" class="card-c1 p-btn--1 card-not-active activeRemover">
                                                        @if($totalfare <= $Agent->state)
                                                        <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                            @csrf
                                                            <div class="form-check">
                                                                <input type="hidden" name="furl" value="{{$url['furl'] ?? $requsData['furl']}}">
                                                                <input type="hidden" name="surl" value="{{$url['surl']?? $requsData['surl']}}">
                                                                <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                                <input type="hidden" name="IsAgent" value="yes">
                                                                <input class="form-check-input" type="checkbox" name="agent" value="agent" id="flexCheckIndeterminate">
                                                                <label class="form-check-label" for="flexCheckIndeterminate">
                                                                    Use My Agent Amount.
                                                                </label>
                                                            </div> 
                                                            <button type="submit" id="Agent" class="searchbtn btn btn-lg verifyBrnNew">Book your Ticket</button><br/><br/>
                                                            <h6 class="upicss">
                                                                  If you click on this checkbox, your money will be deducted from your agent's account.
                                                             </h6>
                                                        </form>
                                                        @else
                                                        <form action="{{url('/Agent/add/amount')}}" method="get">
                                                            @csrf
                                                            <div class="form-check">
                                                                <h6 class="upicss">
                                                                   It shows there is not enough money in your account so
                                                                   add funds to your account or use a different mode of payment to book it
                                                                </h6>
                                                            </div>
                                                           <button type="submit" id="Agent" class="searchbtn btn btn-lg verifyBrnNew">VERIFY & PAY</button>
                                                           
                                                        </form>
                                                        @endif
                                                    </div>
                                                @endif
                                                
                                                    <div id="Payment" class="card-c1 p-btn--2 "> 
                                                        <h4 class="upicss">Enter UPI ID</h4>
                                                         <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="furl" value="{{$url['furl'] ?? $requsData['furl']}}">
                                                            <input type="hidden" name="surl" value="{{$url['surl']?? $requsData['surl']}}">
                                                            <input type="hidden" name="card_number" id="card_number">
                                                            <input type="hidden" name="card_holder_name" id="card_holder_name">
                                                            <input type="hidden" name="card_cvv" id="card_cvv">
                                                            <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                                                            <input type="text" name="upi_va" id="upi_va" class="card-upi-class card-upi-classNew" placeholder="mobileNumber@upi" required>
                                                            <input type="hidden" name="upi_qr" id="upi_qr"><br>
                                                            <input type="hidden" name="pay_later_app" id="pay_later_app">
                                                            <input type="hidden" name="request_mode" id="request_mode">
                                                            <button type="submit" id="paymentbutton" class="searchbtn btn btn-lg verifyBrnNew">VERIFY & PAY</button>
                                                            <input type="hidden" name="bank_code" value=" ">
                                                            <input type="hidden" name="payment_mode" value="UPI">
                                                            <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                            <input type="hidden" name="firstname" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}">
                                                            <input type="hidden" name="email" value="{{$requsData['email']??$sDetail['email']??''}}"> 
                                                            <input type="hidden" name="amount" value="{{$totalfare}}"> 
                                                            <input type="hidden" name="customerName" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}"> 
                                                            <input type="hidden" name="customerEmail" value="{{$requsData['email']??$sDetail['email']??''}}"> 
                                                            <div class="border" style="margin-top: 1rem;"></div>
                                                            <br>
                                                            <div><small class="smallNote">NOTE </small></div>
                                                            <ul class="upiNote">
                                                                <li>Enter your registered VPA</li>
                                                                <li>Receive payment request on bank app</li>
                                                                <li>Authorize payment request</li>
                                                            </ul>
                                                        </form>
                                                    
                                                        </div>
                                                    <div id="CREADITATM" class="moods card-c1 p-btn--3 card-not-active activeRemover">
                                                        <!--<h1>CREADITATM</h1>-->
                                                        <!--<i class="fa fa-mobile" style="font-size: 22px;"> </i> <span class="onwfnt-11"> Keep phone handly !</span>-->
                                                
                                                        <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                        @csrf
                                                            <select name="payment_mode" id="payment_mode" class="payCard">
                                                                <option disable>Select Card</option>
                                                                <option value="DC">Debit Card</option>
                                                                <option value="CC">Credit Card</option>
                                                            </select><br>
                                                            <div class="containing">
                                                                    <div class="inputBox card-number-css">
                                                                        <span class="spanTextAsLAbel">card number</span>
                                                                        <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;"
                                                                            name="card_number" id="card_number" placeholder="Enter your card no." class="card-number-input inputFileds" required>
                                                                    </div>
                                                                    <div class="inputBox card-holder-css">
                                                                        <span class="spanTextAsLAbel">card holder</span>
                                                                        <input type="text" name="card_holder_name" id="card_holder_name" placeholder="Enter card holder name" class="card-holder-input inputFileds"
                                                                            required>
                                                                    </div>
                                                                    <div class="flexing expiryFlexMianDiv">
                                                                        <div class="inputBox expire-css">
                                                                            <span class="spanTextAsLAbel">expiry date</span><br>
                                                                            <input type="hidden" name="card_expiry_date" class="card-expiry-class expire-datanew" id="card_expiry_date">
                                                                            <select name="month" id="month" class="month-input SelectDateDrp">
                                                                                <option value="00" selected disabled>month</option>
                                                                                <option value="01">01</option>
                                                                                <option value="02">02</option>
                                                                                <option value="03">03</option>
                                                                                <option value="04">04</option>
                                                                                <option value="05">05</option>
                                                                                <option value="06">06</option>
                                                                                <option value="07">07</option>
                                                                                <option value="08">08</option>
                                                                                <option value="09">09</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                            </select>
                                                                            <select name="year" id="year" class="year-input SelectDateDrp">
                                                                                <option value="year" selected disabled>year</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2025">2025</option>
                                                                                <option value="2026">2026</option>
                                                                                <option value="2027">2027</option>
                                                                                <option value="2028">2028</option>
                                                                                <option value="2029">2029</option>
                                                                                <option value="2030">2030</option>
                                                                                <option value="2031">2031</option>
                                                                                <option value="2032">2032</option>
                                                                                <option value="2033">2033</option>
                                                                                <option value="2034">2034</option>
                                                                                <option value="2035">2035</option>
                                                                                <option value="2036">2036</option>
                                                                                <option value="2037">2037</option>
                                                                                <option value="2038">2038</option>
                                                                                <option value="2039">2039</option>
                                                                                <option value="2040">2040</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="inputBox cvv-no-css w-100">
                                                                            <!--<span class="spanTextAsLAbel">cvv</span>-->
                                                                            <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;"
                                                                                name="card_cvv" id="card_cvv" class="cvv-number-input w-100" placeholder="cvv" required>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                                            <input type="hidden" name="upi_va" id="upi_va">
                                                            <input type="hidden" name="upi_qr" id="upi_qr">
                                                            <input type="hidden" name="pay_later_app" id="pay_later_app">
                                                            <input type="hidden" name="request_mode" id="request_mode">
                                                            <button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore  searchbtn verifyBrnNew">Pay Now</button>
                                                            
                                                            <input type="hidden" name="bank_code" value=" ">
                                                            
                                                                <input type="hidden" name="furl" value="{{$url['furl'] ?? $requsData['furl']}}">
                                                                <input type="hidden" name="surl" value="{{$url['surl']?? $requsData['surl']}}">
                                                                
                                                            <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                            <input type="hidden" name="firstname" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}">
                                                            <input type="hidden" name="email" value="{{$requsData['email']??$sDetail['email']??''}}"> 
                                                            <input type="hidden" name="amount" value="{{$totalfare}}"> 
                                                            <input type="hidden" name="customerName" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}"> 
                                                            <input type="hidden" name="customerEmail" value="{{$requsData['email']??$sDetail['email']??''}}">
                                                        </form>
                                                    </div>
                                                
                                                <div id="PAYLATER" class="moods card-c1 p-btn--4 card-not-active activeRemover">
                                                    <!--<h1>Net banking</h1>-->
                                                    <!--<i class="fa fa-mobile" style="font-size: 22px;"> </i> <span class="onwfnt-11"> Keep phone handly !</span>-->
                                                            <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                            @csrf
                                                                <div class="bank-selector" style=" margin: 10px; padding: 5px;">
                                                                    <div class="searchBank">
                                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                                        <input type="text" id="bank_search" placeholder="Search for a bank" class="w-100" >
                                                                    </div>
                                                                    
                                                                    @foreach ($bankData as $index => $bank)
                                                                        <div class="card-elem">
                                                                        <label class="{{ $index > 0 && $index < 5 ? 'show' : 'hide' }}">
                                                                            <input type="radio" name="bank_code" value="{{$bank->BankCode}}" class="bank_code_class" required>
                                                                            <img src="{{url('assets/images/BankNames/' . $bank->BankCode . '.png')}}" alt="{{$bank->BankName}}">
                                                                            <span class="bankName">{{$bank->BankName}}</span>
                                                                        </label>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                
                                                                <input type="hidden" name="card_number" id="card_number"><br>
                                                                <input type="hidden" name="furl" value="{{$url['furl'] ?? $requsData['furl']}}">
                                                                <input type="hidden" name="surl" value="{{$url['surl']?? $requsData['surl']}}">
                                                                <input type="hidden" name="card_holder_name" id="card_holder_name"><br>
                                                                <input type="hidden" name="card_cvv" id="card_cvv"><br>
                                                                <input type="hidden" name="card_expiry_date" id="card_expiry_date">
                                                                <input type="hidden" name="upi_va" id="upi_va">
                                                                <input type="hidden" name="upi_qr" id="upi_qr">
                                                                <input type="hidden" name="pay_later_app" id="pay_later_app">
                                                                <input type="hidden" name="request_mode" id="request_mode">
                                                                <button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore searchbtn verifyBrnNew">Pay Now</button>
                                                                <input type="hidden" name="payment_mode" value="NB">
                                                                <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                                <input type="hidden" name="firstname" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}">
                                                                <input type="hidden" name="email" value="{{$requsData['email'] ?? $sDetail['email'] ?? ''}}"> 
                                                                <input type="hidden" name="amount" value="{{$totalfare}}"> 
                                                                <input type="hidden" name="customerName" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}"> 
                                                                <input type="hidden" name="customerEmail" value="{{$requsData['email'] ?? $sDetail['email']??'' }}">
                                                            </form>
                                    
                                                        </div>
                                                    
                                                    @endif
                                                    
                                                </div>
                                        </div>
                                        {{-- <div>
                                            <i class="fa fa-mobile" style="font-size: 22px;"> </i> <span class="onwfnt-11"> Keep phone handly !</span>
                                            <div class="card">
                                                <div class="card-body text-center">
                                                        <form action="{{ route('booking.roundIntpay') }}" method="post">
                                                        @csrf
                                                            <select name="payment_mode" id="payment_mode">
                                                                <option value="NB">Net Banking</option>
                                                                <option value="DC">Debit Card</option>
                                                                <option value="CC">Credit Card</option>
                                                                <option value="DAP">Debit ATM Pin</option>
                                                                <option value="MW">Mobile Wallet</option>
                                                                <option value="UPI">UPI</option>
                                                                <option value="OM">Ola Money</option>
                                                                <option value="PL">Pay Later</option>
                                                            </select><br>
                                                            <select name="bank_code" id="bank_code">
                                                                <option value="KTB">KTB</option>
                                                            </select><br>
                                                            <label for="card_number">card_number</label>
                                                            <input type="text" name="card_number" id="card_number"><br>
                                                            <label for="card_holder_name">card_holder_name</label>
                                                            <input type="text" name="card_holder_name" id="card_holder_name"><br>
                                                            <label for="card_cvv">card_cvv</label>
                                                            <input type="text" name="card_cvv" id="card_cvv"><br>
                                                            <label for="card_expiry_date">card_expiry_date</label>
                                                            <input type="text" name="card_expiry_date" id="card_expiry_date"><br>
                                                            <label for="upi_va">upi_va</label>
                                                            <input type="text" name="upi_va" id="upi_va"><br>
                                                            <label for="upi_qr">upi_qr</label>
                                                            <input type="text" name="upi_qr" id="upi_qr"><br>
                                                            <label for="pay_later_app">pay_later_app</label>
                                                            <input type="text" name="pay_later_app" id="pay_later_app"><br>
                                                            <label for="request_mode">request_mode</label>
                                                            <input type="text" name="request_mode" id="request_mode"><br>
                                                            <button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore continue-payment">Continue to Payment</button>
                                                            <input type="hidden" name="txnid" value="{{$data['uniqueid']}}">
                                                            <input type="hidden" name="firstname" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}">
                                                            <input type="hidden" name="email" value="{{$requsData['email']??$sDetail['email']??''}}"> 
                                                            <input type="hidden" name="amount" value="{{$totalfare}}"> 
                                                             <input type="hidden" name="customerName" value="{{$requsData['adultFirstName'][0]??$Adult->adults->fistName[0]??''}}"> 
                                                            <input type="hidden" name="customerEmail" value="{{$requsData['email']??$sDetail['email']??''}}"> 
                                                        </form>
                                                        <div class="text-center pt-20">
                                                            <img src="{{ asset('assets/images/alupi.png') }}" alt="" class="imgonewayw-70per">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>--}}
                                            
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pt-20">
                    <div class="boxunder">
                        {{-- @php
                            $travllername = json_decode($carts->travllername);
                        @endphp --}}
                        {{-- @foreach (json_decode($carts->travllername) as $travllername) --}}
                            <span class="fontsize-22">Your booking</span>
                            <span class="onwfnt-11 float-right pb-10"> ONE WAY FLIGHT</span>
                        <div class="p-2">
                       
                                @if(isset($input['AmdFlight']))
                                
                                @php
                                
                                    $AmdFlight = json_decode($input['AmdFlight'],true);
                                    
                                    $leght1 = 0 ;
                                    if(count($AmdFlight[0])== 3){
                                        $leght1 = 0;
                                    }else{
                                        $leght1 = count($AmdFlight[0])-1;
                                    }
                                    
                                    $leght2 = 0;
                                    if(count($AmdFlight[1])== 3){
                                        $leght2 = 0;
                                    }else{
                                        $leght2 = count($AmdFlight[1])-1;
                                    }
                                @endphp
                                
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$AmdFlight[0][0]['flightDetails']['companyDetails']['marketingCompany'] ?? $AmdFlight[0]['flightDetails']['companyDetails']['marketingCompany']}}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$AmdFlight[0][0]['flightDetails']['companyDetails']['marketingCompany'] ?? $AmdFlight[0]['flightDetails']['companyDetails']['marketingCompany']}}</span><br>
                                        <span class="fontsize-22">{{getTime_fn( $AmdFlight[0][0]['flightDetails']['flightDate']['departureTime']??$AmdFlight[0]['flightDetails']['flightDate']['departureTime'])}}</span><br>
                                        <span class="onwfnt-11">{{$AmdFlight[0][0]['flightDetails']['boardPointDetails']['trueLocationId'] ??$AmdFlight[0]['flightDetails']['boardPointDetails']['trueLocationId'] }}</span>
                                   
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    {{-- <span class="onwfnt-11">{{getTime_fn($AmdFlight[0][0]['flightDetails']['flightDate']['departureTime']??$AmdFlight[0]['flightDetails']['flightDate']['departureTime'])}}</span>--}}
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$leght1 ??''}} stops</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per"> 
                                        <img src="{{ asset('assets/images/flight/') }}/{{$AmdFlight[1][0]['flightDetails']['companyDetails']['marketingCompany'] ?? $AmdFlight[1]['flightDetails']['companyDetails']['marketingCompany']}}.png" alt="" width="50" > 
                                    </div>
                                    <span class="fontsize-12">{{$AmdFlight[1][0]['flightDetails']['companyDetails']['marketingCompany'] ?? $AmdFlight[1]['flightDetails']['companyDetails']['marketingCompany']}}</span><br>
                                    <span class="fontsize-22">{{getTime_fn($AmdFlight[0][$leght1]['flightDetails']['flightDate']['arrivalTime']??$AmdFlight[0]['flightDetails']['flightDate']['arrivalTime'])}}</span><br>
                                    <span class="onwfnt-11">{{$AmdFlight[0][$leght1]['flightDetails']['offpointDetails']['trueLocationId'] ??$AmdFlight[0]['flightDetails']['offpointDetails']['trueLocationId'] }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$AmdFlight[0][0]['flightDetails']['companyDetails']['marketingCompany']?? $AmdFlight[0]['flightDetails']['companyDetails']['marketingCompany']}}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$AmdFlight[0][0]['flightDetails']['companyDetails']['marketingCompany']?? $AmdFlight[0]['flightDetails']['companyDetails']['marketingCompany']}}</span><br>
                                        <span class="fontsize-22">{{ getTime_fn($AmdFlight[1][$leght2]['flightDetails']['flightDate']['departureTime']??$AmdFlight[1]['flightDetails']['flightDate']['departureTime'])}}</span><br>
                                        <span class="onwfnt-11">{{$AmdFlight[1][$leght2]['flightDetails']['boardPointDetails']['trueLocationId'] ??$AmdFlight[1]['flightDetails']['boardPointDetails']['trueLocationId']}}</span>
                                    
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    {{-- <span class="onwfnt-11">{{getTime_fn($AmdFlight[1][0]['flightDetails']['flightDate']['departureTime']??$AmdFlight[1]['flightDetails']['flightDate']['departureTime'])}}</span>--}}
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$leght2 ??''}} stops</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per"> 
                                        <img src="{{ asset('assets/images/flight/') }}/{{$AmdFlight[0][0]['flightDetails']['companyDetails']['marketingCompany']?? $AmdFlight[0]['flightDetails']['companyDetails']['marketingCompany']}}.png" alt="" width="50" >
                                    </div>
                                    <span class="fontsize-12">{{$AmdFlight[0][0]['flightDetails']['companyDetails']['marketingCompany']?? $AmdFlight[0]['flightDetails']['companyDetails']['marketingCompany']}}</span><br>
                                    <span class="fontsize-22">{{getTime_fn($AmdFlight[1][$leght1]['flightDetails']['flightDate']['arrivalTime']??$AmdFlight[1]['flightDetails']['flightDate']['arrivalTime'])}}</span><br>
                                    <span class="onwfnt-11">{{ $AmdFlight[1][0]['flightDetails']['offpointDetails']['trueLocationId'] ??$AmdFlight[1]['flightDetails']['offpointDetails']['trueLocationId'] }}</span>
                                </div>
                            </div>
                            @elseif(isset($input['IntRoundFlight']))
                                @php
                                $IntRouFlights = json_decode($input['IntRoundFlight'], true);
                                $inBound = -1;
                                $outBound = 0;
                                foreach($IntRouFlights as $flight){
                                    if($flight['Flight'] == 1 ){
                                        $inBound++;
                                    }
                                    if($flight['Flight'] == 2 ){
                                        $outBound++;
                                    }
                                }
                                $outBound += $inBound;
                                @endphp
                                
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$IntRouFlights[0]['AirLine']['Code']??''}}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$IntRouFlights[0]['AirLine']['Code']??''}}</span><br>
                                        <span class="fontsize-22">{{getTimeFormat( $IntRouFlights[0]['Origin']['DateTime']) ??''}}</span><br>
                                        <span class="fontsize-12">{{getDateFormat( $IntRouFlights[0]['Origin']['DateTime']) ??''}}</span><br>
                                        <span class="onwfnt-11">{{$IntRouFlights[0]['Origin']['CityName']?? ''}}</span>
                                    
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    <span class="onwfnt-11">{{ $IntRouFlights[0]['Duration'] ??''}}</span>
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$IntRouFlights[0]['StopCount']??''}}</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per"> 
                                        <img src="{{ asset('assets/images/flight/') }}/{{$IntRouFlights[0]['AirLine']['Code']??''}}.png" alt="" width="50" >
                                    </div>
                                    <span class="fontsize-12">{{$IntRouFlights[0]['AirLine']['Code']??''}}</span><br>
                                    <span class="fontsize-22">{{ getTimeFormat($IntRouFlights[$inBound]['Destination']['DateTime']) ??''}}</span><br>
                                    <span class="fontsize-12">{{ getDateFormat($IntRouFlights[$inBound]['Destination']['DateTime']) ??''}}</span><br>
                                    <span class="onwfnt-11">{{$IntRouFlights[$inBound]['Destination']['CityName']?? ''}}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$IntRouFlights[$inBound+1]['AirLine']['Code']??''}}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$IntRouFlights[$inBound+1]['AirLine']['Code']??''}}</span><br>
                                        <span class="fontsize-22">{{ getTimeFormat($IntRouFlights[$inBound+1]['Origin']['DateTime']) ??''}}</span><br>
                                        <span class="fontsize-12">{{ getDateFormat($IntRouFlights[$inBound+1]['Origin']['DateTime']) ??''}}</span><br>
                                        <span class="onwfnt-11">{{$IntRouFlights[$inBound+1]['Origin']['CityName']?? ''}}</span>
                                   
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    <span class="onwfnt-11">{{ $IntRouFlights[$inBound+1]['Duration'] ??''}}</span>
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$IntRouFlights[$inBound+1]['StopCount']??''}}</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$IntRouFlights[$outBound]['AirLine']['Code']??''}}.png" alt="" width="50" >
                                    </div>
                                    <span class="fontsize-12">{{$IntRouFlights[$outBound]['AirLine']['Code']??''}}</span><br>
                                    <span class="fontsize-22">{{ getTimeFormat($IntRouFlights[$outBound]['Destination']['DateTime']) ??''}}</span><br>
                                    <span class="fontsize-12">{{ getDateFormat($IntRouFlights[$outBound]['Destination']['DateTime']) ??''}}</span><br>
                                    <span class="onwfnt-11">{{$IntRouFlights[$outBound]['Destination']['CityName']?? ''}}</span>
                                </div>
                            </div>
                                
                        @elseif(isset($input['itineraryData']))
                            @php
                                $itineraryData = json_decode($input['itineraryData'], true);
                                
                                $leght1 = 0 ;
                                    if(count($itineraryData[0]['segmentInformation'])== 3){
                                        $leght1 = 0;
                                    }else{
                                        $leght1 = count($itineraryData[0]['segmentInformation'])-1;
                                    }
                                    
                                    $leght2 = 0;
                                    if(count($itineraryData[1]['segmentInformation'])== 3){
                                        $leght2 = 0;
                                    }else{
                                        $leght2 = count($itineraryData[1]['segmentInformation'])-1;
                                    }
                            @endphp
                            
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                         <img src="{{ asset('assets/images/flight/') }}/{{$itineraryData[0]['segmentInformation'][0]['flightDetails']['companyDetails']['marketingCompany']??$itineraryData[0]['segmentInformation']['flightDetails']['companyDetails']['marketingCompany']??''}}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$itineraryData[0]['segmentInformation'][0]['flightDetails']['companyDetails']['marketingCompany']??$itineraryData[0]['segmentInformation']['flightDetails']['companyDetails']['marketingCompany']??''}}</span><br>
                                        <span class="fontsize-22">{{getTime_fn($itineraryData[0]['segmentInformation']['flightDetails']['flightDate']['departureTime']??$itineraryData[0]['segmentInformation'][0]['flightDetails']['flightDate']['departureTime'])??''}}</span><br>
                                        <span class="onwfnt-11">{{$itineraryData[0]['originDestination']['origin']??''}}</span>
                                   
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    {{-- <span class="onwfnt-11">{{getTime_fn($itineraryData[0]['segmentInformation']['flightDetails']['flightDate']['departureTime'])??''}}</span>--}}
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$leght1 ??''}} Stop's</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per"> 
                                        <img src="{{ asset('assets/images/flight/') }}/{{$itineraryData[0]['segmentInformation'][0]['flightDetails']['companyDetails']['marketingCompany']??$itineraryData[0]['segmentInformation']['flightDetails']['companyDetails']['marketingCompany']??''}}.png" alt="" width="50" >
                                    </div>
                                    <span class="fontsize-12">{{$itineraryData[0]['segmentInformation'][0]['flightDetails']['companyDetails']['marketingCompany']??$itineraryData[0]['segmentInformation']['flightDetails']['companyDetails']['marketingCompany']??''}}</span><br>
                                    <span class="fontsize-22">{{getTime_fn($itineraryData[0]['segmentInformation']['flightDetails']['flightDate']['arrivalTime']??$itineraryData[0]['segmentInformation'][$leght1]['flightDetails']['flightDate']['arrivalTime'])??''}}</span><br>
                                    <span class="onwfnt-11">{{$itineraryData[0]['originDestination']['destination']??''}}</span>
                                </div>
                            </div>
                                
                             <hr>
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                         <img src="{{ asset('assets/images/flight/') }}/{{$itineraryData[1]['segmentInformation']['flightDetails']['companyDetails']['marketingCompany']??$itineraryData[1]['segmentInformation'][0]['flightDetails']['companyDetails']['marketingCompany']??''}}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$itineraryData[1]['segmentInformation']['flightDetails']['companyDetails']['marketingCompany']??$itineraryData[1]['segmentInformation'][0]['flightDetails']['companyDetails']['marketingCompany']??''}}</span><br>
                                        <span class="fontsize-22">{{getTime_fn($itineraryData[1]['segmentInformation']['flightDetails']['flightDate']['departureTime']??$itineraryData[1]['segmentInformation'][0]['flightDetails']['flightDate']['departureTime'])??''}}</span><br>
                                        <span class="onwfnt-11">{{$itineraryData[1]['originDestination']['origin']??''}}</span>
                                    
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    {{-- <span class="onwfnt-11">{{getTime_fn($itineraryData[1]['segmentInformation']['flightDetails']['flightDate']['departureTime']??$itineraryData[1]['segmentInformation'][0]['flightDetails']['flightDate']['departureTime'])??''}}</span>--}}
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$leght2 ??''}} Stop's</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per"> 
                                        <img src="{{ asset('assets/images/flight/') }}/{{$itineraryData[1]['segmentInformation']['flightDetails']['companyDetails']['marketingCompany']??$itineraryData[1]['segmentInformation'][0]['flightDetails']['companyDetails']['marketingCompany']??''}}.png" alt="" width="50" >
                                    </div>
                                    <span class="fontsize-12">{{$itineraryData[1]['segmentInformation']['flightDetails']['companyDetails']['marketingCompany']??$itineraryData[1]['segmentInformation'][0]['flightDetails']['companyDetails']['marketingCompany']??''}}</span><br>
                                    <span class="fontsize-22">{{getTime_fn($itineraryData[1]['flightDetails']['flightDate']['arrivalTime']??$itineraryData[1]['segmentInformation'][$leght2]['flightDetails']['flightDate']['arrivalTime']??'')??''}}</span><br>
                                    <span class="onwfnt-11">{{$itineraryData[1]['originDestination']['destination']??''}}</span>
                                </div>
                            </div>
                        @elseif (isset($input['amdflightdata']))
                            @php
                                $departData = json_decode($input['amdflightdata'], true);
                            @endphp
                         <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$departData[0]['flightDetails']['companyDetails']['marketingCompany']??$departData['flightDetails']['companyDetails']['marketingCompany']??''}}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$departData[0]['flightDetails']['companyDetails']['marketingCompany']??$departData['flightDetails']['companyDetails']['marketingCompany']??''}} - 
                                        {{$departData[0]['flightDetails']['flightIdentification']['flightNumber']??$departData['flightDetails']['flightIdentification']['flightNumber']??''}}</span><br>
                                        <span class="fontsize-22">{{ getTime_fn($input['time1']) ??''}}</span><br>
                                        <span class="onwfnt-11">{{AirportiatacodesController::getCity($input['city1'])??''}}</span><br>
                                        <span class="onwfnt-11">{{getDate_fn($departData[0]['flightDetails']['flightDate']['departureDate'] ?? $departData['flightDetails']['flightDate']['departureDate'])??''}}</span>
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    <span class="onwfnt-11">{{$triveltime??''}}</span>
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$input['stop']??''}}</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per"> 
                                        <img src="{{ asset('assets/images/flight/') }}/{{$departData[1]['flightDetails']['companyDetails']['marketingCompany']??$departData['flightDetails']['companyDetails']['marketingCompany']??''}}.png" alt="" width="50" >
                                    </div>
                                    <span class="fontsize-12">{{$departData[1]['flightDetails']['companyDetails']['marketingCompany']??$departData['flightDetails']['companyDetails']['marketingCompany']??''}} - 
                                    {{$departData[1]['flightDetails']['flightIdentification']['flightNumber']??$departData['flightDetails']['flightIdentification']['flightNumber']??''}}</span><br>
                                    <span class="fontsize-22">{{getTime_fn($input['time2'])??'' }}</span><br>
                                    <span class="onwfnt-11">{{AirportiatacodesController::getCity($input['city2']??'')}}</span><br>
                                    <span class="onwfnt-11">{{getDate_fn($departData[1]['flightDetails']['flightDate']['arrivalDate'] ?? $departData['flightDetails']['flightDate']['arrivalDate'])??''}}</span>
                                    
                                </div>
                            </div>
                            @elseif(isset($input["flightData"]))
                            @php 
                                $isFfAmd= $isFfGal = false;
                                $flightdata = json_decode($input["flightData"] , true);
                                if ( (isset($flightdata[0]['StopCount'] ) ) || ( isset($flightdata[0][0]['StopCount'] ) ) ){
                                    $isFfAmd = true;
                                }else{
                                    $isFfGal = true;
                                }
                            @endphp
                            @if(!$isFfAmd)
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                      <img src="{{ asset('assets/images/flight/') }}/{{ $flightdata[0][0]['flightDetails']['companyDetails']['marketingCompany'] ??$flightdata[0]['flightDetails']['companyDetails']['marketingCompany'] ?? '' }}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{ $flightdata[0][0]['flightDetails']['companyDetails']['marketingCompany'] ??$flightdata[0]['flightDetails']['companyDetails']['marketingCompany'] ?? '' }} - 
                                        {{ $flightdata[0][0]['flightDetails']['flightIdentification']['flightNumber'] ??$flightdata[0]['flightDetails']['flightIdentification']['flightNumber'] ?? '' }}</span><br>
                                        <span class="fontsize-10">{{getTime_fn($flightdata[0][0]['flightDetails']['flightDate']['departureTime'] ??$flightdata[0]['flightDetails']['flightDate']['departureTime'])?? ""}}</span><br>
                                        <span class="fontsize-10">{{AirportiatacodesController::getCity($flightdata[0][0]['flightDetails']['boardPointDetails']['trueLocationId'] ?? $flightdata[0]['flightDetails']['boardPointDetails']['trueLocationId']) ?? ""}}</span><br>
                                        <span class="fontsize-11" style="font-size: 11px;">{{getDate_fn($flightdata[0][0]['flightDetails']['flightDate']['departureDate'] ??$flightdata[0]['flightDetails']['flightDate']['departureDate'])?? ""}}</span>
                                
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    <span class="onwfnt-11" style="padding: 15px;">{{$flightdata[0][0]['Duration'] ??  ""}}</span>
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11" style="padding: 14px;">{{$flightdata[0][0]['StopCount'] ??  ""}}</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{ $flightdata[0][1]['flightDetails']['companyDetails']['marketingCompany'] ??$flightdata[0][0]['flightDetails']['companyDetails']['marketingCompany']??$flightdata[0]['flightDetails']['companyDetails']['marketingCompany']?? '' }}.png" alt="">
                                    </div>
                                    <span class="fontsize-12">{{ $flightdata[0][1]['flightDetails']['companyDetails']['marketingCompany'] ??$flightdata[0][0]['flightDetails']['companyDetails']['marketingCompany']??$flightdata[0]['flightDetails']['companyDetails']['marketingCompany']?? '' }} - 
                                    {{ $flightdata[0][1]['flightDetails']['flightIdentification']['flightNumber'] ??$flightdata[0][0]['flightDetails']['flightIdentification']['flightNumber']??$flightdata[0]['flightDetails']['flightIdentification']['flightNumber']?? '' }}</span><br>
                                    <span class="fontsize-10">{{ getTime_fn($flightdata[0][1]['flightDetails']['flightDate']['arrivalTime']??$flightdata[0][0]['flightDetails']['flightDate']['arrivalTime'] ?? $flightdata[0]['flightDetails']['flightDate']['arrivalTime'])??""}}</span><br>
                                    <span class="fontsize-10">{{AirportiatacodesController::getCity($flightdata[0][1]['flightDetails']['offpointDetails']['trueLocationId'] ?? $flightdata[0][0]['flightDetails']['offpointDetails']['trueLocationId'] ?? $flightdata[0]['flightDetails']['offpointDetails']['trueLocationId']) ??""}}</span><br>
                                    <span class="fontsize-11" style="font-size: 12px;">{{ getDate_fn($flightdata[0][1]['flightDetails']['flightDate']['arrivalDate']??$flightdata[0][0]['flightDetails']['flightDate']['arrivalDate'] ?? $flightdata[0]['flightDetails']['flightDate']['arrivalDate'])??""}}</span>
                                </div>
                            </div>
                            @else
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$flightdata[0][1]['AirLine']['Code']??$flightdata[0][0]['AirLine']['Code']??$flightdata[0]['AirLine']['Code']??'' }}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$flightdata[0][1]['AirLine']['Code']??$flightdata[0][0]['AirLine']['Code']??'' }} - 
                                        {{$flightdata[0][1]['AirLine']['Identification']??$flightdata[0][0]['AirLine']['Identification']??'' }}</span><br>
                                        <span class="fontsize-22">{{  getTime_fn($flightdata[0][0]['Origin']['DateTime']??  $flightdata[0]['Origin']['DateTime'] )??""}}</span><br>
                                        <span class="onwfnt-11">{{$flightdata[0][0]['Origin']['CityName'] ??$flightdata[0]['Origin']['CityName']?? ""}}</span><br>
                                        <span class="fontsize-11">{{  getDateFormat($flightdata[0][0]['Origin']['DateTime']??  $flightdata[0]['Origin']['DateTime'] )??""}}</span>
                                  
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    <span class="onwfnt-11">{{$flightdata[0][0]['Duration'] ?? $flightdata[0]['Duration']?? ""}}</span>
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$flightdata[0][0]['StopCount'] ?? $flightdata[0]['StopCount'] ?? ""}}</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$flightdata[1][0]['AirLine']['Code']?? $flightdata[1][0]['flightDetails']['companyDetails']['marketingCompany'] ?? $flightdata[1]['flightDetails']['companyDetails']['marketingCompany']?? ''}}.png" alt="" width="50">
                                   </div>
                                    <span class="fontsize-12">{{$flightdata[1][0]['AirLine']['code']?? $flightdata[1][0]['flightDetails']['companyDetails']['marketingCompany'] ?? $flightdata[1]['flightDetails']['companyDetails']['marketingCompany']?? ''}} - 
                                        {{$flightdata[0][1]['AirLine']['Identification']??$flightdata[0][0]['AirLine']['Identification']??'' }}</span><br>
                                    <span class="fontsize-22">{{  getTime_fn($flightdata[0][1]['Destination']['DateTime']??  $flightdata[0][0]['Destination']['DateTime']??  $flightdata[0]['Destination']['DateTime']) ??""}}</span><br>
                                    <span class="onwfnt-11">{{$flightdata[0][1]['Destination']['CityName'] ??$flightdata[0][0]['Destination']['CityName'] ??$flightdata[0]['Destination']['CityName'] ?? ""}}</span><br>
                                    <span class="fontsize-11">{{  getDateFormat($flightdata[0][1]['Destination']['DateTime']??  $flightdata[0][0]['Destination']['DateTime']??  $flightdata[0]['Destination']['DateTime']) ??""}}</span>
                                </div>
                            </div>
                            @endif
                            
                            
                            <hr>
                            
                            
                            
                            @if($isFfAmd)
                            
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$flightdata[1][0]['AirLine']['Code']??$flightdata[1][1]['AirLine']['Code']?? $flightdata[1][0]['flightDetails']['companyDetails']['marketingCompany']?? $flightdata[1]['flightDetails']['companyDetails']['marketingCompany']??'' }}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-10">{{$flightdata[1][0]['AirLine']['Code']??$flightdata[1][1]['AirLine']['Code']?? $flightdata[1][0]['flightDetails']['companyDetails']['marketingCompany']?? $flightdata[1]['flightDetails']['companyDetails']['marketingCompany']??'' }} - 
                                        {{$flightdata[1][0]['AirLine']['Identification']??$flightdata[1][1]['AirLine']['flightIdentification']?? $flightdata[1][0]['flightDetails']['flightIdentification']['flightNumber']?? $flightdata[1]['flightDetails']['flightIdentification']['flightNumber']??'' }}</span><br>
                                        <span class="fontsize-22">{{getTime_fn( $flightdata[1][0]['flightDetails']['flightDate']['departureTime'] ?? $flightdata[1]['flightDetails']['flightDate']['departureTime'])??  ""}}</span><br>
                                        <span class="onwfnt-11">{{$flightdata[1][0]['Origin']['CityName'] ?? $flightdata[1]['flightDetails']['boardPointDetails']['trueLocationId'] ?? ""}}</span><br>
                                        <span class="fontsize-11">{{getDate_fn( $flightdata[1][0]['flightDetails']['flightDate']['departureDate'] ?? $flightdata[1]['flightDetails']['flightDate']['departureDate'])??  ""}}</span>
                                 
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    <span class="onwfnt-11">{{$flightdata[1][0]['Duration'] ?? $flightdata[1]['Duration']?? ""}}</span>
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$flightdata[1][0]['StopCount'] ?? $flightdata[1]['StopCount'] ?? ""}}</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$flightdata[1][0]['AirLine']['Code']?? $flightdata[1][0]['flightDetails']['companyDetails']['marketingCompany'] ?? $flightdata[1]['flightDetails']['companyDetails']['marketingCompany']?? ''}}.png" alt="" width="50">
                                   </div>
                                    <span class="fontsize-10">{{$flightdata[1][0]['AirLine']['Code']?? $flightdata[1][0]['flightDetails']['companyDetails']['marketingCompany'] ?? $flightdata[1]['flightDetails']['companyDetails']['marketingCompany']?? ''}} - 
                                    {{$flightdata[1][0]['AirLine']['Identification']?? $flightdata[1][0]['flightDetails']['flightIdentification']['flightNumber'] ?? $flightdata[1]['flightDetails']['flightIdentification']['flightNumber']?? ''}}</span><br>
                                    <span class="fontsize-22">{{getTime_fn($flightdata[1][1]['flightDetails']['flightDate']['arrivalTime'] ?? $flightdata[1][0]['flightDetails']['flightDate']['arrivalTime'] ?? $flightdata[1]['flightDetails']['flightDate']['arrivalTime'])??  ""}}</span><br>
                                    <span class="onwfnt-11">{{ $flightdata[1]['flightDetails']['offpointDetails']['trueLocationId'] ?? ""}}</span><br>
                                    <span class="fontsize-11">{{getDate_fn($flightdata[1][1]['flightDetails']['flightDate']['arrivalDate'] ?? $flightdata[1][0]['flightDetails']['flightDate']['arrivalDate'] ?? $flightdata[1]['flightDetails']['flightDate']['arrivalDate'])??  ""}}</span>
                                </div>
                            </div>
                            @else
                            <div class="row roe_sum">
                                <div class="col-sm-4 col_sum">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$flightdata[1][0]['AirLine']['Code']??$flightdata[1][1]['AirLine']['Code']?? $flightdata[1][0]['flightDetails']['companyDetails']['marketingCompany']?? $flightdata[1]['flightDetails']['companyDetails']['marketingCompany']??'' }}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-12">{{$flightdata[1][0]['AirLine']['Code']??$flightdata[1][1]['AirLine']['Code']?? $flightdata[1][0]['flightDetails']['companyDetails']['marketingCompany']?? $flightdata[1]['flightDetails']['companyDetails']['marketingCompany']??'' }} - 
                                        {{$flightdata[1][0]['AirLine']['Identification']??$flightdata[1][1]['AirLine']['Identification']?? $flightdata[1][0]['flightDetails']['flightIdentification']['flightNumber']?? $flightdata[1]['flightDetails']['flightIdentification']['flightNumber']??'' }}</span><br>
                                        <span class="fontsize-10">{{ getTimeFormat($flightdata[1][0]['Origin']['DateTime'])  ?? ""}}</span><br>
                                        <span class="fontsize-10">{{$flightdata[1][0]['Origin']['CityName'] ?? ""}}</span><br>
                                        <span class="fontsize-11" style="font-size: 12px;">{{ getDateFormat($flightdata[1][0]['Origin']['DateTime'])  ?? ""}}</span>
                                   
                                </div>
                                <div class="col-sm-4 col-ok1">
                                    <span class="onwfnt-11" style="padding: 15px;">{{$flightdata[1][0]['Duration'] ??  ""}}</span>
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11" style="padding: 14px;">{{$flightdata[1][0]['StopCount'] ??  ""}}</span>
                                </div>
                                <div class="col-sm-4 col_ok">
                                    <div class="imgonewayw-70per">
                                        <img src="{{ asset('assets/images/flight/') }}/{{$flightdata[1][1]['AirLine']['Code']?? $flightdata[1][0]['AirLine']['Code']??$flightdata[1]['AirLine']['Code']?? ''}}.png" alt="" >
                                   </div>
                                    <span class="fontsize-12">{{$flightdata[1][1]['AirLine']['Code']?? $flightdata[1][0]['AirLine']['Code']??$flightdata[1]['AirLine']['Code']?? ''}} - 
                                    {{$flightdata[1][1]['AirLine']['Identification']?? $flightdata[1][0]['AirLine']['Identification']??$flightdata[1]['AirLine']['Identification']?? ''}}</span><br>
                                    <span class="fontsize-10" >{{getTimeFormat($flightdata[1][1]['Destination']['DateTime']??$flightdata[1][0]['Destination']['DateTime'] ??$flightdata[1]['Destination']['DateTime'])??"" }}</span><br>
                                    <span class="fontsize-10">{{$flightdata[1][1]['Destination']['CityName'] ??$flightdata[1][0]['Destination']['CityName']??$flightdata[1]['Destination']['CityName'] ?? ""}}</span><br>
                                    <span class="fontsize-6" style="font-size: 12px;">{{getDateFormat($flightdata[1][1]['Destination']['DateTime']??$flightdata[1][0]['Destination']['DateTime'] ??$flightdata[1]['Destination']['DateTime'])??"" }}</span>
                                </div>
                            </div>
                            @endif
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            @else
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="imgonewayw-70per">
                                       <img src="{{ asset('assets/images/flight/') }}/{{$flightdata['marketingCompany_1']??'' }}.png" alt="" width="50">
                                    </div>
                                        <span class="fontsize-22">{{ $input['time1'] ??''}}</span><br>
                                        <span class="onwfnt-11">{{$input['city1']??''}}</span>
                                 
                                </div>
                                <div class="col-sm-4">
                                    @php
                                        if($input['stop']?? '' =='NO STOP'){
                                            $triveltime = getTime_fn($input['triveltime']);
                                        }else{
                                            $triveltime =$input['triveltime'] ?? '';}
                                    @endphp
                                    <span class="onwfnt-11">{{$triveltime}}</span>
                                    <div class="borderbotum">Aviation</div>
                                    <span class="onwfnt-11">{{$input['stop']??''}}</span>
                                </div>
                                <div class="col-sm-4">
                                    <div class="imgonewayw-70per"> 
                                         {{  $flightdata['marketingCompany_1']??$otherInformations['otherInfoOutbound']['marketingCompany']; }}
                                   {{--     <img src="{{ asset('assets/images/flight/') }}/{{$flightdata['marketingCompany_1']??$otherInformations['otherInfoOutbound']['marketingCompany']}}.png" alt="" width="50" >--}} 
                                    </div>
                                    <span class="fontsize-22">{{$input['time2']??'' }}</span><br>
                                    <span class="onwfnt-11">{{$input['city2']?? ''}}</span>
                                </div>
                                
                            </div>
                            @endif
                            <div class="borderbotum p-2 pb-10"></div>
                            <span class="fontsize-22"> <i class="fa fa-user"></i>Traveler(s) </span>
                            @if(isset($travller[0]['FirstName']))
                                @foreach($travller as $key => $value)
                                <div class="onwfnt-11">{{$key+1}}. {{$value['Title'] }} {{$value['FirstName'] }} {{$value['LastName']}}
                                @endforeach
                            </div>
                            <div class="onwfnt-11">{{$sDetail['email']}} | +91 {{$sDetail['phonenumber']}} </div>
                            
                            @else
                            @php
                                $adults = 1;
                            @endphp
                            @if(isset($Adult->adults->title))
                                @foreach($Adult->adults->title as $key  => $AdT)
                                <div class="onwfnt-11">{{ $adults++}}. {{$AdT }} {{$Adult->adults->fistName[$key] }} {{$Adult->adults->lastName[$key] }} (adult)
                                @endforeach
                            @endif
                            
                            @if(isset($Adult->childs->title))
                                @foreach($Adult->childs->title as $key  => $AdT)
                                <div class="onwfnt-11">{{ $adults++}}. {{$AdT }} {{$Adult->childs->fistName[$key] }} {{$Adult->childs->lastName[$key] }} (childs)
                                @endforeach
                            @endif
                            
                            
                            @if(isset($Adult->infants->title))
                            
                                @foreach($Adult->infants->title as $key  => $AdT)
                                <div class="onwfnt-11">{{ $adults++ }}. {{$AdT }} {{$Adult->infants->fistName[$key] }} {{$Adult->infants->lastName[$key] }} (infant)
                                @endforeach
                            @endif
                            <!--<div class="onwfnt-11">1. {{$Adult->adults->fistName[0] }} {{$Adult->adults->lastName[0] }}-->
                            </div>
                            <div class="onwfnt-11">{{$sDetail['email']}} | +91 {{$sDetail['phonenumber']}} </div>
                            @endif
                        </div>
                        <div class="pb-10"></div>
                        <div class="boxunder">
                            <div class="p-2">
                                <span class="owstitle"> FARE SUMMERY </span>
                                {{-- <span class="onwfnt-11 float-right"> View Details </span> --}}
                                {{-- <div class="borderbotum pb-10"></div>
                            <span class="owstitle"> FARE </span>
                            <span class="onwfnt-11 float-right"> <i class="fa fa-inr"></i> 6500</span><br>
                            <span class="owstitle"> OTHERS </span>
                            <span class="onwfnt-11 float-right"> <i class="fa fa-inr"></i> 500</span>
                            <div class="borderbotum pb-10"></div> --}}
                                <span class="fontsize-22"> Total Due </span>
                                @php 
                                $totfare = $Tfare??$totalfare;
                                @endphp 
                                <span class="fontsize-22 float-right ">{!! $icon !!}<span class ="fareincard">&nbsp;{{ ceil($totfare*$cvalue) }}</span></span>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
            </div>
    </section>
    <!-- FLIGHT MOBILE VIEW START -->
    <div id="flightofmobileview">
        <header class="stickyheader">
            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                <div class="container">
                    <span class="menubar" onclick="openNav()"><i class="fa fa-bars"
                            aria-hidden="true"></i></span>
                    <a href="" class="float-left img-fluid">
                        <img src="{{ asset('assets/images/logo.png') }}" class="img-responsive">
                    </a>
                    <span class="usericon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#"> <i class="fa fa-user-circle-o"></i> <span class="spaceicon"> Login | Sign up
                            Now</span>
                    </a>
                    <a href="#"> <i class="fa fa-plane"></i> <span class="spaceicon">Flights</span> </a>
                    <a href="#"> <i class="fa fa-building-o"></i> <span class="spaceicon"> Hotels </span> </a>
                    <a href="#"> <i class="fa fa-yelp"></i> <span class="spaceicon"> Holidays </span></a>
                    <a href="#"> <i class="fa fa-bus"></i> <span class="spaceicon"> Bus </span></a>
                    <a href="#"> <i class="fa fa-cab"></i> <span class="spaceicon"> Cabs </span></a>
                    <a href="#"> <i class="fa fa-ship"></i> <span class="spaceicon"> Cruise </span></a>
                    <a href="#"> <i class="fa fa-book"></i> <span class="spaceicon"> Visa </span></a>
                </div>
            </nav>
        </header>
    </div>
    <!-- FLIGHT MOBILE VIEW END -->
    <div class="dpnr">
        <x-footer />
    </div>
    <div class="ddn">
        <x-mobilefooter />
    </div>
    
    <script>
    
const amountEls = $(".fareincard");
const paymentModeEl = $("#payment_mode");
const upiOriginalValue = $("#UPIS");
const netbankingValue =$("#PAYLATERS");
const agent =$("#AGENT");


amountEls.each(function() {
  $(this).attr("data-original-value", $(this).html());
});

paymentModeEl.change(function() {
  const currentValue = $(this).val();
  for (let i = 0; i < amountEls.length; i++) {
    const originalValue = $(amountEls[i]).attr("data-original-value");
    if (currentValue === "DC") {
      const parsedAmount = parseFloat(originalValue);
      const newAmount = parsedAmount * 1.01;
      $(amountEls[i]).html(newAmount.toFixed(2)); 
    } else if (currentValue === "CC") {
      const parsedAmount = parseFloat(originalValue);
      const newAmount = parsedAmount * 1.02;
      $(amountEls[i]).html(newAmount.toFixed(2)); 
    } else if (currentValue === "AB") {
      const parsedAmount = parseFloat(originalValue);
      const newAmount = parsedAmount;
      $(amountEls[i]).html(newAmount.toFixed(2)); 
    } 
  }
});

agent.click(function() {
  amountEls.each(function() {
    const originalValue = $(this).attr("data-original-value");
    $(this).html(originalValue);
  });
   $("#payment_mode").val("Select");
});
upiOriginalValue.click(function() {
  amountEls.each(function() {
    const originalValue = $(this).attr("data-original-value");
    $(this).html(originalValue);
  });
   $("#payment_mode").val("Select");
});

netbankingValue.click(function() {
  amountEls.each(function() {
    const originalValue = $(this).attr("data-original-value");
    $(this).html(originalValue);
  });
   $("#payment_mode").val("Select");
});

    
    
        // ==================================
        //  Header button section
        // ==================================

        const p_btns = document.querySelector(".p-btns");
        const card123 = document.querySelectorAll(".card-c1");
        
        p_btns.addEventListener("click", (e) => {
          const p_btn_clicked = e.target.closest(".p-btn");
          if (!p_btn_clicked) return;
        
          const p_btns = document.querySelectorAll(".p-btn");
          p_btns.forEach((curElem) => curElem.classList.remove("activePay"));
          p_btn_clicked.classList.add("activePay");
        
          const btn_num = p_btn_clicked.dataset.btnNum;
          const cardActive = document.querySelectorAll(`.p-btn--${btn_num}`);
          card123.forEach((curElem) => curElem.classList.add("card-not-active"));
          cardActive.forEach((curElem) => curElem.classList.remove("card-not-active"));
        });

///////////////////////////////////////////////////////////////////////////////////////////////////

//  =========date validation by vikas==========================================
        var expireDateInput = document.getElementById("card_expiry_date");
        var monthSelect = document.getElementById("month");
        var yearSelect = document.getElementById("year");

        // Add an event listener to the year select element
        yearSelect.addEventListener("change", updateExpireDate);
        // Add an event listener to the month select element
        monthSelect.addEventListener("change", updateExpireDate);

        // Function to update the expire date input based on the selected month and year
        function updateExpireDate() {
        // Get the selected month and year
        var selectedMonth = monthSelect.value;
        var selectedYear = yearSelect.value;

        // Update the expire date input with the selected month and year
        expireDateInput.value = selectedMonth + "/" + selectedYear;
        }

        // Initialize the expire date input with the current month and year
        updateExpireDate();

        var expireDateInput1 = document.querySelector(".expire-datanew");
        var monthSelect1 = document.getElementById("month");
        var yearSelect1 = document.getElementById("year");

        // Add an event listener to the year select element
        yearSelect1.addEventListener("change", updateExpireDate1);
        // Add an event listener to the month select element
        monthSelect1.addEventListener("change", updateExpireDate1);

        // Function to update the expire date input based on the selected month and year
        function updateExpireDate1() {
        // Get the selected month and year
        var selectedMonth = monthSelect1.value;
        var selectedYear = yearSelect1.value;

        // Update the expire date input with the selected month and year
        expireDateInput1.value = selectedMonth + "/" + selectedYear;
        }

        // Initialize the expire date input with the current month and year
        updateExpireDate1();


// ==============================
// ====bank code=================

    const searchInput = document.querySelector('#bank_search');
    const radioLabels = document.querySelectorAll('.bank-selector label');
    let numShown = 4;

    searchInput.addEventListener('input', () => {
        const searchText = searchInput.value.trim().toLowerCase();
        let numMatches = 0;

        radioLabels.forEach((label, index) => {
            if (index > 0) {
                const bankName = label.querySelector('.bankName').textContent.trim().toLowerCase();
                const match = bankName.includes(searchText);

                if (match && numMatches < 4) {
                    label.classList.add('show');
                    numMatches++;
                } else {
                    label.classList.add('hide');
                    label.classList.remove('show');
                }
            }
        });
    });

    if (numShown < radioLabels.length) {
        const showMoreButton = document.createElement('div');
        showMoreButton.textContent = 'Show more banks';
        showMoreButton.classList.add('mybuttonstyle');
        showMoreButton.addEventListener('click', () => {
            for (let i = numShown; i < numShown + 4 && i < radioLabels.length; i++) {
                const label = radioLabels[i];
                label.classList.add('show');
            }
            numShown += 4;
            if (numShown >= radioLabels.length) {
                showMoreButton.style.display = 'none';
            }
        });
        searchInput.parentElement.appendChild(showMoreButton);
    }
    
    
    
    
    </script>
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <script>
       window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
   
    // Handle page restore.
    window.location.reload();
  }
});
      
    </script>
@endsection

@endsection

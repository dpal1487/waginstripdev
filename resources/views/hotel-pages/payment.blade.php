{{--@extends('hotel-pages.master')
@section('title','pay')--}}

@extends('layouts.master')
@section('title','pay')

@section('cityCode', $HotelCityCode)
@section('city', $HotelCityCode)
@section('start', $showdepartDate)
@section('end', $showreturnDate)

@section("body")
<br>
<br>
<br>
<br>
<br>
<br>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="pb-10">
                    <div class="borderfadshow">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-cc-visa" style="font-size:55px;color:#0164a3ed; margin-left: 15px;"></i>
                            </div>
                            <div class="col-sm-7">
                                <span class="fontsize-22">Get additional discounts</span><br>
                                <span class="owstitle">Login to access saved payments and discounts!</span>
                            </div>
                            <div class="col-sm-3 mt-10">
                                <button class="btn btn-sm btn-info fontsize-22">LOGIN NOW</button>
                            </div>
                        </div>
                        <div class="row p-2" style="height: 410px">
                            <div class="col-sm-4">
                                <div class="paybuton activePay" id="RAZORPAY">
                                    <span class="fonts-16"> <img src="{{ asset('assets/images/razorpay.png') }}"
                                            alt="" width="50%"> </span>
                                    <div class="onwfnt-11 pl30-mt-7">Pay Directly From Your Bank Account</div>
                                </div>
                                <div class="paybuton" id="UPI(disable)">
                                    <span class="fonts-16"> <img src="{{ asset('assets/images/upi.png') }}" alt=""
                                            width="25"> UPI </span>
                                    <div class="onwfnt-11 pl30-mt-7">Pay Directly From Your Bank Account</div>
                                </div>
                                <div class="paybuton" id="CREADITATM(disable)">
                                    <span class="fonts-16"> <i class="fa fa-credit-card"></i> Credit/Debit/ATM
                                        Card </span>
                                    <div class="onwfnt-11 pl30-mt-7">Visa, MasterCard, Amex, Rupay And More</div>
                                </div>
                                <div class="paybuton" id="PAYLATER(disable)">
                                    <span class="fonts-16"> <img src="{{ asset('assets/images/netb.jpg') }}"
                                            alt="" width="25"> Net Banking </span>
                                    <div class="onwfnt-11 pl30-mt-7"> All Major Banks Available </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="ranjepp">
                                    <div id="RAZORPAY">
                                        <i class="fa fa-mobile" style="font-size: 22px;"> </i> <span
                                            class="onwfnt-11"> Keep phone handly ! </span>
                                        <div class="card">
                                            <div class="card-body text-center">
                                                @php
                                                // dd($data);
                                                    if($data['Checkbasefare'] == "AED"){
                                                        $totalfare = round($data['amount']) * 20;
                                                    }else{
                                                        $totalfare = $data['amount'];
                                                    }
                                                    $fare = $totalfare * 100;
                                                    $postvalue = base64_encode(serialize($data))
                                                @endphp
                                                <div class="pb-20" style="font-size: 30px; font-weight: 700; font-family: sans-serif;"> <i class="fa fa-inr"></i>
                                                    {{ number_format($totalfare) }} DUE NOW
                                                </div>
                                                    {{-- <form action="{{ route('hotel-fare') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" name="data"
                                                            value="{{ $postvalue }}">
                                                        <input type="hidden" name="state"
                                                            value="{{ $HotelCityCode }}">
                                                        <input type="hidden" name="data"
                                                            value="{{ $postvalue }}"> --}}
                                                        {{-- <script src="https://checkout.razorpay.com/v1/checkout.js" 
                                                         data-key="{{ env('RAZORPAY_KEY') }}"
                                                         data-amount="{{ $fare }}"
                                                         data-buttontext="VERIFY & PAY"
                                                         data-name="WAGNISTRIP (OPC) PRIVATE LIMITED."
                                                         data-description="Hotel Booking"
                                                         data-image="https://wagnistrip.com/images/logo.png"
                                                         data-prefill.name="Wagnistrip" 
                                                         data-prefill.email="customersupport@wagnistrip.com"
                                                         data-theme.color="#0164a3">
                                                        </script> --}}
                                                        <form action="https://test.cashfree.com/billpay/checkout/post/submit" method="post">
                                                            <input type="hidden" name="appId" value="{{$postData['appId']}}"/>
                                                            <input type="hidden" name="orderId" value="{{$postData['orderId']}}"/>
                                                            <input type="hidden" name="orderAmount" value="{{$postData['orderAmount']}}"/>
                                                            <input type="hidden" name="orderCurrency" value="{{$postData['orderCurrency']}}"/>
                                                            <input type="hidden" name="orderNote" value="{{$postData['orderNote']}}"/>
                                                            <input type="hidden" name="customerName" value="{{$postData['customerName']}}"/>
                                                            <input type="hidden" name="customerEmail" value="{{$postData['customerEmail']}}"/>
                                                            <input type="hidden" name="customerPhone" value="{{$postData['customerPhone']}}"/>
                                                            <input type="hidden" name="returnUrl" value="{{$postData['returnUrl']}}"/>
                                                            <input type="hidden" name="notifyUrl" value="{{$postData['notifyUrl']}}"/>
                                                            <input type="hidden" name="signature" value="{{$signature}}"/>
                                                            <button type="submit" id="paymentbutton" class="btn btn-block btn-lg bg-ore continue-payment">Continue to Payment</button>
                                                        </form>
                                                    {{-- </form>  --}}
                                                <div class="text-center pt-20">
                                                    <img src="{{ asset('assets/images/alupi.png') }}" alt="" class="imgonewayw-70per">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <input type="submit" value="VERIFY &amp; PAY" class="razorpay-payment-button"> -->
            <div class="col-sm-4 borderfadshow" style="line-height: 30px">
                <div class="p-2">
                    <img src="{{ asset('assets/images/hotel/h2.jpg') }}" alt="flight"
                                        style="width:100%; height:120px; border-radius: 10px;">
                    
                    <?php
                    $dateStart = date_create($data['checkin']);
                    $dateEnd = date_create($data['checkout']);
                    $diff = $dateEnd->diff($dateStart);
                    $dayCount = $diff->format('%a');
                    ?>
                    <h5 class="fontsizehotel14 text-center pt-10"> {{ $data['hotelname'] }} </h5>
                    <h6 class="onwfnt-11 text-center"> {{ $data['address'] }} </h6>
                    <div class="borderbotum pb-10"></div>
                    <div class="row pt-10">
                        <div class="col-sm-5">
                            <h6 class="onwfnt-11 colorgrey"> CHECK IN </h6>
                            <h6 class="fontsizehotel14">{{ date_format($dateStart, 'd M Y') }}</h6>
                            <h6 class="onwfnt-11 colorgrey"> 2 PM</h6>
                        </div>
                        <div class="col-sm-2">
                            <span class="onwfnt-11 text-center"> {{ $dayCount }} N </span>
                        </div>
                        <div class="col-sm-5">
                            <h6 class="onwfnt-11 colorgrey"> CHECK OUT </h6>
                            <h6 class="fontsizehotel14">{{ date_format($dateEnd, 'd M Y') }}</h6>
                            <h6 class="onwfnt-11 colorgrey"> 12 PM</h6>
                        </div>
                    </div>
                    <div class="borderbotum pb-10"></div>
                    <span class="fontsize-22"> <i class="fa fa-user"></i> Traveler(s) </span>
                    <div class="onwfnt-11">1. {{ $data['adultFirstName'][0] .' '. $data['adultLastName'][0] }} </div>
                    <div class="onwfnt-11"> {{ $data['email'] }} | +91 - {{ $data['phoneNumber'] }}</div>
                </div>
               
                <div class="pb-10"></div>
                <div class="borderfadshow">
                    <div class="p-2">
                        <h6 class="owstitle"> FARE SUMMERY </h6>
                        <span class="fontsize-22"> Pay Amount Now </span>
                        <span class="fontsize-22 float-right"> <i class="fa fa-inr"></i> {{ number_format($totalfare) }} </span>
                    </div>
                </div>
                <h6 class="pb-10"></h6>
            </div>
        </div>
    </div>
</section>
<script>
    $(documnet).ready(function()
{
  $('#order').on('click', function(){
    var price = $('#price').val();
    var amount = $('#amount').val();
    var currency = $('#currency').val();
    var product_id=$('#product_id').val();
    $.ajax({
             type:'POST',
             url:'/order',
             data:{
               '_token = ',
               price:price,
               amount:amount,
               currency:currency,
               product_id:product_id,
             }
             success:function(data) {
                $(".payment").appent(data);
                ('.redirectForm').submit();
             }
          });
  });

});
</script>

<div class="pt-6p"></div>

<footer class="bg-footer">
        <div class="container">
            <span class="footext">Copyright © 2021 XYZ PVT. LTD.</span>
            <span class="footext float-right">
                We Accept |
                <img src="{{asset('assets/images/payment1.png')}}" class="imgw-30" alt="">
                <img src="{{asset('assets/images/payment2.png')}}" class="imgw-30" alt="">
                <img src="{{asset('assets/images/payment3.png')}}" class="imgw-30" alt="">
                <img src="{{asset('assets/images/payment4.png')}}" class="imgw-30" alt="">
            </span>
        </div>
    </footer>
@endsection










@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;height: 4100px;">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1 class="heading-1">
                                <span class="spn-1">Full Itinerary & Trip Details</span> </h1>
                        </div>
                        <div class="col-sm-5">
                            <img src="{{ URL::to('/assets/images/package-image/85555.png') }}" alt="" style="width: 260px;">
                            <img src="{{ URL::to('/assets/images/package-image/IATA.png') }}" alt="" style="width: 70px; margin-left:100px">
                        </div>
                    </div>
                    <h6 class="spn-2">Shimla & Manali tour
                        ( Private)
                        </h6>
                        <p>
                            <span class="seven">5N/6D</span> Flexi Package
                            <span class="sp-3">Amazing Shimla & Manali  Tour Inclusive Deal 5N</span>
                        </p>
                   
                        <div class="pvt-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="blr-23">BEST SELECTION</p>

                                </div>
                                <div class="col-sm-4">
                                    <p class="blr-23">BEST PRICES</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="blr-23">TRUSTED PAYMENTS</p>

                                </div>

                            </div>
                        </div>
                        <div class="container" style="padding-top: 10px;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="head-09">Contents</h4>
                                    <ol>
                                            <a href="#iti">   <li>1. Your itinerary</li></a>
                                    <a href="#wise">    <li>2. Day wise details</li></a>
                                      <a href="#book">  <li>3. Why Book with us</li></a>
                                      <a href="#booking"><li>4. How to book</li></a>
                                      
                                    </ol>
                                </div>
                                <div class="col-sm-6">
                                    <div class="brdr-1">
                                        <h6 class="head-05">Curated by</h6>
                                        <h3 class="heading-three">WAGNISTRIP (OPC) Holidays</h3>
                                        <h6 class="psd-1">Email: customercare@wagnistrip.com</h6>
                                        <h6 class="psd-1">Call Us: +91 7669988012 </h6>
                                        <p class="pth-65 ">
                                            Quotation Created on this date Valid till this
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- next-page -->
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/shimla-manali.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹50,099.91
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">6 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 10 to 90 year olds                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">New Delhi <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            New Delhi 
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-10" style="width: 670px;">
                                        <h6 class="htpvp">OPERATED IN
                                        </h6>
                                        <h6 class="htpvp1">EnglishItalianFrenchSpanish
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="bd-12">
                                        <h6 class="htpvp">OPERATOR</h6>
                                        <p class="htpvp1">Trek India tours
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#215675
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- next-page -->
                        <!-- second-page -->
                        <div id="iti">
                        <div class="container">
                            <h4 class="heading-30">Itinerary</h4>
                            <h3 class="head-1">Introduction</h3>
                            <p class="para-67">Explore the mighty Himalayas in Himachal Pradesh, North India. Bring your winter gear and
                                prepare for a trip of a lifetime through the snow-capped mountainous region. Try your hand at
                                paragliding, skiing, or river rafting while you're here.                                                                                                   
                            </p>
                            </div>
                            </div>
                            <div id="wise">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 1:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> New Delhi to Shimla (270 km 8 hrs drive)
                                </div>
                                </div>
                                </div>

                                <!-- next-page -->
                                <div class="container">
                                    <div class="bd-12">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h4 class="head-632">Start Point</h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="hkl">we will pick all guest from Delhi airport or their desired
                                                    location in Delhi,
                                                    New Delhi, Delhi, India
                                                </h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div> -->
                                        </div>
                                        <p class="para-6771">Arrival from delhi airport or station proseed to shimla . En route visit pinjore garden and timber trail.
                                            Then drive to shimla. Overnight in Hotel.
                                            
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 80px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Shimla Local                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">After breakfast drive to Kufri. Kufri which is 20km from Shimla where you can enjoy some horse
                                        riding. Afterwards you will visit Fagu Zoo at Kufri. Return in the evening visit to the Mall Road,
                                        Sankat Mochan Temple and Indian institute of Advanced Studies.
                                        Overnight in Shimla Hotel.
                                    </p>
                                </div>
                                <hr>
                                <!-- page- -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 3:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Shimla to Manali - (250 km / 7 hrs drive)                                            </h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After breakfast proceed from Shimla to Manali via Mandi. Enroute visit Kullu Valley where you can
                                        partake in some river rafting or paragliding. Kullu is famous for woollen goods so shop til you drop
                                        before driving back to Manali.
                                        Overnight in Manali Hotel.
                                        
                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09"> Manali Rohtang pass                                        </h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Early Morning Half-day excursion to Rohtang Pass area where you can expect snow all year
                                        round. On The Way Back visit Solang Valley, then Return to Hotel.
                                        Overnight in Manali Hotel.
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09"> Manali local </h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After Breakfast start local tour of Manali with optional visit to Hadimba Temple. Visit Vashist hot
                                        water spring and afterwards visit Clubhouse,Tibetan monastery ,van Vihar and mall road.
                                        Overnight in Manali Hotel.
                                    </p>
                                </div>
                                <hr>
                                <!-- page-4 -->
                                                           
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Manali to Delhi (550 km 12 hrs drive)</h4>                                                                                
                                        </div>
                                    </div>
                                    <div class="bd-12">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h4 class="head-632">End Point </h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="hkl">we will drop all guest in Delhi,
                                                    New Delhi, Delhi, India</h6>                                                    
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">After Breakfast drive to Delhi where your driver will drop you at your onwards destination. <br>
                                        End of tour.
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">05 Nights in twin-share deluxe rooms at 3-star hotels</p>
                   
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <p class="prvr">
                                        Experienced English-speaking driver-guide throughout tour. Other languages are available on request.

                                        </p>
                                    
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">05 Breakfasts
                                        Other meals are not included to give you the maximum flexibility in deciding where, what and with
                                        whom to eat.
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Private vehicle throughout tour <br>
                                    1-2 people: Sedan car <br>
                                    3-4 people: Toyota Innova Crysta <br>
                                    5-10 people: Mini bus or Tempoo Traveller
                                    
                                    </p>
                                    <h6 class="head-876">Others
                                    </h6>
                                    <p  class="prvr">Arrival and departure transfers
                                        Bottled water
                                        Wi-fi in vehicle</p>
                                   
                                </div>
                                <!-- NEXT PAGE -->

                                <!-- NEXT PAGE -->
                                <div id="book">
                                <div class="container  " >
                                    <h4 class="headerrr1">Why Book with us?</h4>
                                    <div class="row mt-5">
                                        <div class="col-sm-6">
                                            <h6 class="head-876">No Booking Fees</h6>
                                            <p class="prvr">We charge 0% booking fees and 0% credit card
                                                fees. You won`t find any hidden fees.
                                                #BoycottBookingFees</p>

                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="head-876">Earn Unlimited Travel Credits</h6>
                                            <p class="prvr">You can use Travel Credit towards your next tour
                                                booking on TourRadar.TourRadar Credits do not
                                                expire.</p>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="head-876">Flexible Payment Options</h6>
                                            <p class="prvr">You can pay with a credit card or PayPal account to
                                                ensure that your booking are always easy.
                                            </p>

                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="head-876">Safely book online</h6>
                                            <p class="prvr">All your details are safely protected by a secure
                                                connection.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div id="booking">
                                <button class="btn btvn" style="background-color:  rgb(234, 100, 10); color: #fff; margin-left: 270px !important; margin-top: 50px !important; border: 1px solid  rgb(234, 100, 10);">BOOK NOW</button>
                                    </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    
<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

</script>
<div class="borderbotum"></div>
{{-- <x-footer-tag /> --}}
<x-footer />
@endsection

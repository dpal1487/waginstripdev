@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none; padding-top:80px; height: 3600px;">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1 class="heading-1">
                                <span class="spn-1 main-txt">Full Itinerary & Trip Details</span> </h1>
                        </div>
                        <div class="col-sm-5">
                            <img src="{{ URL::to('/assets/images/package-image/85555.png') }}" alt="" style="width: 260px;">
                            <img src="{{ URL::to('/assets/images/package-image/IATA.png') }}" alt="" style="width: 70px; margin-left:100px">
                        </div>
                    </div>
                    <h6 class="spn-2 txt-shimla">Shimla - 4 days</h6>
                        <p class="para3n">
                            <span class="seven">3N/4D</span> Flexi Package
                            <span class="sp-3">Amazing Shimla Tour Inclusive Deal 3N</span>
                        </p>
                   
                        <div class="pvt-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="blr-23 best-section">BEST SELECTION</p>

                                </div>
                                <div class="col-sm-4">
                                    <p class="blr-23 best-section">BEST PRICES</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="blr-23 trust-txt">TRUSTED PAYMENTS</p>

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
                                <div class="col-sm-7 blue-box">
                                    <div class="brdr-1">
                                        <h6 class="head-05 box">Curated by</h6>
                                        <h3 class="heading-three name-box">WAGNISTRIP (OPC) Holidays</h3>
                                        <h6 class="psd-1 email-box">Email: customercare@wagnistrip.com</h6>
                                        <h6 class="psd-1 num-box">Call Us: +91 7669988012 </h6>
                                        <p class="pth-65 quota-box">
                                            Quotation Created on this date Valid till this
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- next-page -->
                        <div class="container trip-shimla">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/shimla.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-6 price-shimla">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹45,197.71
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 dure-box">
                                    <div class="bd-12 cus-dure">
                                        <h6 class="htpvp190 pt-4">DURATION
                                        </h6>
                                        <h6 class="htpvp1">4 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 5 to 90 year olds    </h6>
                                    </div>
                                </div> -->

                            </div>
                            <div class="row start-shimla">
                                <div class="bd-12">
                                    <div class="col-sm-12 border-start" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">New Delhi<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            New Delhi
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row start-shimla">
                                <div class="bd-12">
                                    <div class="col-sm-10 border-start" style="width: 670px;">
                                        <h6 class="htpvp">OPERATED IN
                                        </h6>
                                        <h6 class="htpvp1">English
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-7 operator-shimla">
                                    <div class="bd-12 opt-shimla">
                                        <h6 class="htpvp">OPERATOR</h6>
                                        <p class="htpvp1">Go Travelling LTD
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5 tour-shimla">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#8393
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
                            <p class="para-67">PRIVATE TOUR: Shimla, was the ‘summer capital’ of British India. The natural beauty of Shimla
                                will enchant you, being famous for its stunning sunsets and verdant woods, contrasted with the
                                intriguing English look of the town.                             
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
                                        <h4 class="hd09">Delhi

                                </div>
                                </div>
                                </div>

                                <!-- next-page -->
                                <div class="container">
                                    <div class="bd-12 start-box">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h4 class="head-632 h6-start">Start Point</h4>
                                            </div>
                                            <div class="col-sm-1 loc-icon">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="hkl">New Delhi,
                                                    India
                                                </h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:00 - 18:00</h6>
    
                                            </div> -->
                                        </div>
                                        <p class="para-6771">Delhi - Shimla. Early morning transfer from our hotel to the Shatabdi Express train to Kalka and
                                            then transfer to the Himalayan Queen toy train to Kandaghat. On arrival into Kandaghat you'll be
                                            met and transferred to your hotel in Shimla by road. Rest of the day is at leisure.                                    
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 120px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2-3:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09 name-para">Shimla</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777 para12">Free time to explore the city. The ‘summer capital’ of British India sprawls along a crescent-shaped
                                        ridge at an altitude of over 2100m in southern Himachal Pradesh. This was the most important hill
                                        station in India before independence. The famous main street, The Mall, still runs along the crest of
                                        the ridge and is lined with stately English-looking houses. Christ Church, Gorton Castle and the
                                        fortress-like former Viceroyal Lodge reinforce the English favour.                                        
                                    </p>
                                </div>
                                <hr>
                               
                           
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Delhi
                                        </div>
                                    </div>
                                    <div class="bd-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 class="head-632">End Point </h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-5">
                                                <h6 class="hkl">
                                                    New Delhi,
                                                    India                
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:00 - 18:00                                                </h6>
    
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677 para3">Shimla - Delhi. Morning is at leisure and later we drive to Kalka Railway Station to connect with
                                        your train for Delhi. On arrival to Delhi you will be met and taken to your hotel or to the airport in
                                        time to connect with your onward fight. If you'd like to extend your stay, we offer a variety of hotels,
                                        short stays and add-ons for you to choose from. Please read our best places to visit or [[best
                                        things to see each month|126647]] for suggested places to visit on your holiday. If you can’t find
                                        what you’re looking for, please let us know so we can accommodate your request. For information
                                        about visas, top travel tips, best time to travel and much more, browse our [[travel guide|126581]].
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">3 nights STANDARD hotels. SUPERIOR and DELUXE hotel options are also available upon
                                    request. Accommodation rating – See Trip Notes for details
                                    
                                    </p>                    
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <!-- <h6 class="head-876">Guide</h6>
                                    <p class="prvr">Service of English speaking tour guide on sightseeing days (local guide in each city), as per
                                        program. (Other language guide can be organized on request at additional cost)
                                        </p> -->
                                    <h6 class="head-876 comman-style">Meals</h6>
                                    <p class="prvr comman-style">Breakfast daily
                                    </p>

                                    <h6 class="head-876 comman-style">Transport
                                    </h6>
                                  <p class="prvr para-txt">All relevant transfer and transportation in private modern Chauffeur driven air-conditioned
                                    vehicles                                                                   
                                    </p>
                                    <h6 class="head-876 comman-style">Others</h6>
                                    <p class="prvr para-txt2">One way Himalayan Queen toy train journey Kalka to Kandaghat (1st class non air-conditioned) <br>
                                        Train journey from Delhi to Kalka (air-conditioned chair car) <br>
                                        Train journey from Kalka to Delhi (air-conditioned chair car)      
                                        </p>
                                </div>
                                <!-- NEXT PAGE -->

                                <!-- NEXT PAGE -->
                                <div id="book">
                                <div class="container  " >
                                    <h4 class="headerrr1 comman-style">Why Book with us?</h4>
                                    <div class="row mt-5">
                                        <div class="col-sm-6">
                                            <h6 class="head-876 comman-style">No Booking Fees</h6>
                                            <p class="prvr comman-style">We charge 0% booking fees and 0% credit card
                                                fees. You won`t find any hidden fees.
                                                #BoycottBookingFees</p>

                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="head-876 down-txt">Earn Unlimited Travel Credits</h6>
                                            <p class="prvr para-text3">You can use Travel Credit towards your next tour
                                                booking on TourRadar.TourRadar Credits do not
                                                expire.</p>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="head-876 comman-style">Flexible Payment Options</h6>
                                            <p class="prvr comman-style">You can pay with a credit card or PayPal account to
                                                ensure that your booking are always easy.
                                            </p>

                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="head-876 down-txt">Safely book online</h6>
                                            <p class="prvr">All your details are safely protected by a secure
                                                connection.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div id="booking">
                                <button class="btn btvn" >BOOK NOW</button>
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

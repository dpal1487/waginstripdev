@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;height: 4200px;">
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
                    <h6 class="spn-2">Mysore - Ooty -
                        Coorg Package
                        </h6>
                        <p>
                            <span class="seven">6N/7D</span> Flexi Package
                            <span class="sp-3">Amazing Mysore - Ooty Tour Inclusive Deal 7N</span>
                        </p>
                    <!-- <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Visit Humayun's Tomb in Delhi

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Explore the marble mausoleum of Itmad-ud-Daulah
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Tour the Amber Fort, City Palace & Hawa Mahal in Jaipur
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Tour Udaipur - the city of sunrise </h6> -->
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
                                        <h6 class="psd-1">Email: customercare@wagnistrip.com
                                        </h6>
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
                            <img src="{{ URL::to('/assets/images/package-image/mysore-ooty.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹29,500.00
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">7 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp1">From 1 to 70 year olds    </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Bangalore<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Bangalore
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-10" style="width: 670px;">
                                        <h6 class="htpvp">OPERATED IN
                                        </h6>
                                        <h6 class="htpvp1">English
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="bd-12">
                                        <h6 class="htpvp">OPERATOR</h6>
                                        <p class="htpvp1">Pack N Go Holidays Pvt Ltd
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#183351
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
                                
                                
                              <p class="para-6777">This packages covers 6 Nights stay in South India staring from Bangalore then visit Mysore -
                                Historical place and royal palace, Ooty - Hill station of Tamilnadu, Later we will cover Coorg - Hill
                                station in Karnataka                                         
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
                                        <h4 class="hd09">Bangalore to Mysore
                                </div>
                                

                                </div>
                                </div>

                                <!-- next-page -->
                                <div class="container">
                                    <div class="bd-1">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 class="head-632">Start Point</h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-5">
                                                <h6 class="hkl">Arrival point of Airport,
                                                    Kempegowda International Airport,
                                                    Devanahalli, Bengaluru, Karnataka,
                                                    India
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>07:00 - 16:00</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771 mt-5">On Arrival at Bangalore airport, after completing all the formality, you will proceed to Mysore. En
                                            route visit Srirangapatna(Dariya Daulat Bagh, Gumbaz, Tippu Fort and Temple). On arrival check
                                            in to hotel. Evening free for leisure. Overnight Stay at Mysore.                                                                                        
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 170px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Mysore Sightseeing</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">After Breakfast, you can proceed for sightseeing of Mysore covering Chamundi Hill, Big Bull &
                                        Mysore Zoo,Maharaja Palace, Brindavan Palace.. Return back to hotel and Overnight Stay at
                                        Mysore.         
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
                                            <h6 class="hd09">Mysore to Ooty</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After Breakfast, checkout from hotel and proceed to Ooty. Enroute you can visit Bandipur National
                                        park and do Jungle safari and other activities on direct payment basis. Later on start your onward
                                        journey to Ooty. On arrival check in to hotel. Evening visit to Local market in Ooty. Overnight Stay
                                        at Ooty.                                        
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Ooty Sightseeing</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After Breakfast at hotel, you can proceed to Coonoor. In Coonor, you will cover Sim’s Park, Lam’s
                                        Rock, Dolphin Nose, Tea factory and Tea Gardens and Doddabetta Peak. Return back to ooty and
                                        evening visit to Ooty Lake and Botanical Garden if time allows. Overnight Stay at Ooty
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Ooty to Coorg</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After Breakfast, checkout from hotel and proceed to Coorg. On arrival check in to hotel. Evening
                                        visit to Local market in Coorg. Overnight Stay at Coorg.                                           
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Coorg Sightseeing </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast take a full day tour of Bylekuppe, the Tibetan Settlement. throughout the 1950's
                                        when Dalal Lama fled to india and was given political asylum he was offered a small piece of land
                                        in Coorg for temporary settlement and However, that Tibetan settlement became permanent and
                                        now houses many faculties, Universities and Monasteries. do not leave without a visit to the
                                        Namdroling religious residence or golden temple. within the evening return to the hotel & Stay
                                        overnight at the hotel.                      
                                    </p>
                                </div>
                                <hr>
                               
                                
                                <!-- page-5 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Coorg to Bangalore

                                        </div>
                                    </div>
                                    <div class="bd-1">
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
                                                    Departure Point of Airport,
                                                    Kempegowda International Airport,
                                                    Devanahalli, Bengaluru, Karnataka,
                                                    India                                         
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>14:00 - 20:00
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">After Breakfast at hotel and checkout, you can start your trip to Bangalore for your Onward
                                        Journey.                                        
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">Hotel Category : 3 Star <br>
                                    Mysore : National Residency / Rio Meridian / Crystal Park<br>
                                    Ooty : Lakeview Resort / Ponmari Residency / Vinayaga Inn<br>
                                    Coorg : Woodstock Villa / Palm Era / Minister Kourt</p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <!-- <h6 class="head-876">Guide</h6>
                                   <p class="prvr">Daily Breakfast at Hotel ( Except on the day of Arrival )
                                    </p> -->
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Daily Breakfast at Hotel ( Except on the day of Arrival )                                  
                                      
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">All Tour and Transfers by A/c Vehicle
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Driver Allowance, Toll, Parking Charges
                                        GST                                       
                                        </p>
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

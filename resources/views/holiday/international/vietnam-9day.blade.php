@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 5500px;padding-top:80px;">
                   <div class="row">
                    <div class="col-sm-7">
                        <h1 class="heading-1">
                            <span class="spn-1">Full Itinerary & Trip Details</span> </h1>

                    </div>
                    <div class="col-sm-5">
                        <img src="{{ URL::to('/assets/images/85555.png') }}" alt="" style="width: 260px;">
                            <img src="{{ URL::to('/assets/images/IATA.png') }}" alt="" style="width: 70px; margin-left:100px">

                    </div>

                   </div>
                    <h6 class="spn-2">Vietnam Intro 9 Day </h6>
                    <p>
                        <span class="seven">8N/9D</span> Flexi Package
                        <span class="sp-3">Amazing Vietnam Tour Inclusive Deal 8N</span>
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
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Save Now, Travel Later with Unlimited Date Changes                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>An amazing itinerary with all activities included
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Sail the magical Ha Long Bay
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Learn to cook delicious Vietnamese food
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Bicycle and Riverboat tour of Ninh Binh
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Experience local life

                    </h6>
                    
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/package-image/vietnam.jpg') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹80,742.66
                                    </h6>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">DURATION
                                    </h6>
                                    <h6 class="htpvp1">9 days</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Hanoi  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                         Hoi An
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
                                    <h6 class="htpvp12">Multi
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#91425
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
                        <h3 class="head-1">Introduction:</h3> 
                      
                        <!-- <p><i class="fa-solid fa-quote-left"></i></p> -->
                        <p class="para-67">Vietnam Intro is the most amazing way to experience Vietnam! You’ll discover crazy Hanoi,
                            experience the stunning Ha Long Bay, go kayaking, crab fishing with traditional fisherman, soak up
                            fascinating local culture, learn to cook delicious Vietnamese food, relax on beautiful beaches, party
                            the night away and much more. And you’ll have an awesome group leader with you from the
                            moment you step off the plane, an instant group of friends to share your adventure with and help
                            with all your onward travel. Get ready for the trip of a lifetime! <br>
                            + We'll plant 10 trees for every INTRO Travel tour booking!
                            
                        </p>
                        </div>
                        <hr>
                        <div id="wise">
                        <div class="container">
                            <h4 class="heading-30">Day Wise Details</h4>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 1:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h6 class="hd09">Vietnam Intro Begins!
                                        </h6>
                                </div>
                            </div>

                            <!-- next-page -->
                            <div class="container">
                                <div class="bd-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="head-632">Start Point</h4>
                                        </div>
                                        <div class="col-sm-1">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-5">
                                            <h6 class="hkl">
                                                Hanoi,
                                                Vietnam
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">Landing in Hanoi, we’ll meet you at the airport and take you to your accommodation in the heart of
                                        the old town. Meet up with your travel crew and get excited for the adventures to come.
                                    </p>
                                </div>
                            </div>
                    </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 150px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Discover Hanoi </h4>
                                    </div>
                                    </div>
                                          <p class="para-677">We’ll jump straight into the hustle and bustle of Hanoi today with a walking and rickshaw tour of the
                                            city. Soak in daily life in the chaotic capital and fill up on spicy spring rolls and tasty street food.
                                            This evening we’ll be heading out for dinner and drinks to see what Hanoi has to offer after dark.
                                            </p>
                               
                            </div>
                           
                          
                            <hr>

                            <!-- page-3 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Ha Long Bay Overnight Boat
                                        </h4>
                                    </div>
                                </div>
                                <p class="para-677">From Hanoi we’ll travel to Ha Long Bay, where we’ll cruise the emerald green waters surrounded
                                    by limestone mountains, feeling like we’re not quite on this planet. The secret caves and coves will
                                    prove too much to resist, so we’ll jump into kayaks to explore further before settling down for the
                                    evening on our overnight boat complete with hot tub and bar.      
                                </p>
                            </div>
                            <hr>


                            <!-- page-4 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 4:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Ha Long Bay & Ninh Binh Homestay
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">The rice paddies and vast limestone mountains of Ninh Binh await us today, where we’ll be staying
                                    at a local homestay in traditional bungalows right by the rive
                                </p>
                            </div>
                            <hr>
                            <!-- page-5 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Ninh Binh & Overnight Train</h4>
                                    </div>
                                </div>
                                <p class="para-677">Heading out to explore the countryside retreat of Ninh Binh, we’ll take to two wheels to weave
                                    through the rice paddies before taking a local row boat through the network of rivers and caves.
                                    We’ll finish our time here with a sunset hike to the Dragon Mountain viewpoint, before boarding our
                                    overnight train bound for Hoi An.
                                </p>
                            </div>
                            <hr>
                            <!-- page-6 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Arrive in Hoi An</h4>
                                    </div>
                                </div>
                                <p class="para-677">Beautiful, historical Hoi An will win you over in an instant as we arrive this morning. We’ll check in
                                    to our hotel, then this afternoon you’ll have time to explore, go shopping, or perhaps visit a local
                                    tailor to get a custom suit or dress made
                                </p>
                            </div>
                            <hr>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Hoi An, Basket Boat Tour with Crab Fishing & Cooking Class</h4>
                                    </div>
                                </div>
                                <p class="para-677">Local fishermen will be our guides today as we weave through coconut groves, teaching
                                    us the art of crab fishing. We’ll then take part in a hands on cooking class to become masters of all
                                    things Vietnamese cuisine.                                    
                                </p>
                            </div>
                            <hr>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Lantern Making Class & Beach Day</h4>
                                    </div>
                                </div>
                                <p class="para-677">This morning we’ll learn how to make lanterns. We’ll then hop on bicycles for a short ride to the
                                    beach for a chilled day at a beach club. We’ll have dinner and drinks by the sea!
                                </p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 9:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Head home or stay on longer in Hoi An</h4>
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
                                        <div class="col-sm-7">
                                            <h6 class="hkl">
                                                Hoi An,
                                                Vietnam
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <p class="para-677">Your unforgettable 9 day adventure will come to an end here. Those flying home will make their
                                    way to the airport, or keep living the dream and extend your stay in Vietnam or South East Asia
                                    with our help and the new friends you’ve made.                                    
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-6777">2 Nights Hanoi - Twin, Double Share Hotel <br>
                                        1 Night Ha Long Bay - Twin, Double, Triple Share Overnight Boat<br>
                                        1 Night Ninh Binh - Twin, Double, Triple Share Local Homestay<br>
                                        1 Night Overnight Train - Multi-Share Train Cabin<br>
                                        3 Nights Hoi An - Twin, Double, Triple Share Hotel<br>
                                        2 Nights Ho Chi Minh City - Twin, Double, Triple Share Hotel<br>
                                        1 Night Mekong Delta - Twin, Double Triple Share Local Homestay
                                        
                                        </p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">You'll get an awesome group leader and local guides to provide 24/7 support during & after your
                                    trip, as well as help with all of your onward travel.
                                    </p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">7 Breakfasts, 3 Lunches, 3 Dinners.                                </p>
                                
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Airport pickup <br>
                                    Minivan<br>
                                    Bus<br>
                                    Boat<br>
                                    Overnight Train<br>
                                    </p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">Walking & Rickshaw Tour of Hanoi<br>
                                    Local Markets<br>
                                    Hanoi Nightlife
                                    Overnight Ha Long Bay Boat trip<br>
                                    Sea Kayaking<br>
                                    Local Homestay in Ninh Binh<br>
                                    Bicycle Tour<br>
                                    River Boat Cruise<br>
                                    Dragon Mountain Viewpoint<br>
                                    Cooking Class<br>
                                    Crab Fishing Basket Boat Tour<br>
                                    + We'll plant 10 trees for every INTRO Travel tour booking!
                                    </p>
                            </div>
                            <!-- NEXT PAGE -->

                            <!-- NEXT PAGE -->
                            <div id="book">
                            <div class="container">
                                <h4 class="headerrr1">Why Book with us?</h4>
                                <div class="row">
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

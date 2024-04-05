@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px; height: 5000px;">
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
                    <h6 class="spn-2">7 Days Bali and Gili
                        Islands Epic
                        Experience</h6>
                        <p>
                            <span class="seven">9N/10D</span> Flexi Package
                            <span class="sp-3">Amazing Bali and Gili Tour Inclusive Deal 6N</span>
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
                    <div class="container mt-2">
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
                    <div class="container"">
                        <h4 class="spn-2">Trip Overview</h4>
                        <img src="{{ URL::to('/assets/images/package-image/BalitoGiliMeno1.webp') }}" alt=""
                            style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹51,975.42
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="bd-12">
                                    <h6 class="htpvp3">DURATION
                                    </h6>
                                    <h6 class="htpvp1">7 days</h6>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="bd-12">
                                    <h6 class="htpvp">IDEAL AGE
                                    </h6>
                                    <h6 class="htpvp1">From 3 to 99 year olds</h6>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Denpasar<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Gili Trawangan
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
                                    <p class="htpvp1">PT. Bali Mitra Hutama Wisata
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#160266
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- next-page -->
                    <!-- second-page -->
                    <div id="iti">
                    <div class="container mt-5">
                        <h4 class="heading-30">Itinerary</h4>
                        <h3 class="head-1">Introduction</h3>
                        <p class="para-67">Our Bali and Gili islands experience of 7 Days and 6 Nights is the best
                            package if you like to do an
                            island hopping to the most beautiful island of Indonesia. Start from Bali for 4 Days and end
                            in Gili
                            Air for 3 Days that will cover various highlights across the island’s incredible sights,
                            included;
                            Temples, Waterfalls, Ubud, Rice Terraces, Gili Air, Snorkeling with Turtles and Gili
                            Trawangan
                            included accommodation, tour leader, transportation and much more.                               
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
                                    <h4 class="hd09"> Airport pick up - Spa - Welcome Beach Dinner
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
                                                <h6 class="hkl">
                                                    Pick up Point ,
                                                    Ngurah Rai International Airport (DPS),
                                                    Jalan Airport Ngurah Rai, Badung, Bali
                                                    80361, Indonesia
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00 -
                                                    13:00
                                                </h6>

                                            </div>
                                        </div>
                                        <p class="para-6771 mt-5">Arrival in Bali, meet and greet with your tour leader
                                            then check-in afterwards we will head down to
                                            Reborn Spa for a 2 hour relaxing Balinese massage after the long flights to
                                            Bali, you can then relax
                                            or wandering around Kuta or Seminyak areas. In the afternoon with the rest
                                            of your group, we will
                                            head on to Jimbaran Bay famous with its fresh seafood dinner served right on
                                            the beach, it’s time
                                            to relax and enjoy your unforgettable dinner by the beach while listening to
                                            the sounds of crashing
                                            waves.
                                        </p>
                                    </div>
                                </div>
                                
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 150px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> South Bali Beaches – Uluwatu</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">On this second day is a beach day! Pick up time 08:00 am the
                                        first destination to Nusa Dua
                                        translates literally as 'Two Islands' and a center of water sports and beach
                                        activities, continue to
                                        Melasti Beach a beautiful cliff beach with amazing views afterwards visit the
                                        Single Fin bar for an
                                        afternoon drink and overlooking the Blue Point Beach visit the Uluwatu Temple or
                                        Pura Luhur
                                        Uluwatu is incredible cliff temple in Bali.
                                    </p>

                                </div>

                                <!-- page-3 -->
                                <div class="container " style="padding-top: 10px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 3:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Waterfall - Ubud - Volcano Viewpoint </h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After breakfast at the hotel, we will go around 08:30 am, trip
                                        duration today about 11 hours. First
                                        visit to Tegenungan Waterfall one of the popular waterfalls in Bali then visit
                                        Monkey Forest a
                                        beautiful forest with hundreds of monkeys inside, then we will visiting a Coffee
                                        plantation for a
                                        walking tour of the local Coffee we'll then continue to Kintamani to see the
                                        Batur volcano, its located
                                        in the plateau area enjoy the volcano views and lunch here afterwards go to
                                        Tegalalang Rice
                                        Terraces, one of the most beautiful views of Bali's rice terraces before
                                        returning to your hotel.
                                    </p>
                                </div>
                                <!-- page-4 -->
                                <div class="container " style="padding-top: 10px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Ocean Temple – Canggu</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today we will go around 09:30 am take a window seat to enjoy a
                                        beautiful ride to Bali's
                                        rice fields, our first destination Taman Ayun Temple then continue to taste some
                                        local
                                        fruits. After this second location, continue to Tanah Lot Temple the iconic
                                        ocean temple
                                        in Bali afterwards visit Canggu with its exotic black sand beach swim, learn to
                                        surf or to
                                        soak up a stunning sunset on the beach, drinks, and music
                                    </p>
                                </div>
                                <div class="container " style="padding-top: 10px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Off to Gili Island for Unlimited Fun!</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">It’s time to head to the Gili islands! Check out early today
                                        pick up around 6 - 7 am and we'll go to
                                        Padang Bay port it will take around 1 hour 30 minute to get to Gili Trawangan
                                        Island after check-in,
                                        lunch and take some rest after the boat ride gets ready for an afternoon ride
                                        around the island by
                                        Bicycle tour. Afterward, we'll get ready for an afternoon beachside sunset
                                        drinks located just by
                                        walking distance from our hotel.

                                    </p>
                                </div>
                                <div class="container " style="padding-top: 10px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Snorkeling the 3 Islands - Visit Gili Air Island</h4>
                                        </div>
                                    </div>
                                    <p class="para-677"> After breakfast, hop into our snorkeling boat. This second day
                                        we will experience the amazing
                                        crystal waters of the Gili Islands from Turtles, School of fish to the amazing
                                        Underwater Sculptures
                                        of Gili Meno Island. Next stop is the Gili Air Island to enjoy some beachside
                                        lunch, after lunch
                                        continues to have a look around the island by only a walking distance, at around
                                        3 - 4 pm back to
                                        the snorkeling boat enjoy the way back to the island while watching the sunset
                                        over the ocean.
                                        We’ll then head out for a delicious farewell dinner before partying the night
                                        away there is range
                                        beach bar with live music on the beachside and party until late.
                                    </p>
                                </div>

                                <!-- page-5 -->
                                <div class="container" style="padding-top: 10px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Beach Relaxing - Check Out
                                        </div>
                                    </div>
                                    <div class="bd-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4 class="head-632">End Point </h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <h6 class="hkl">
                                                    Drop of Point ,
                                                    Gili Trawangan, Lombok Utara, West
                                                    Nusa Tenggara 83352, Indonesia
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>01:00 - 00:00</h6>

                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">As this is your last day. After breakfast don’t miss on another
                                        beach swim, hang out by the beach,
                                        walk along the beach or take some snap-on those famous beach swing. Check out
                                        Time! The fun
                                        doesn't have to stop here if you need to continue to stay on the island or
                                        return to the airport to
                                        catch a flight or even visiting another island in Indonesia we will happy to
                                        help and assist your
                                        travel need around beautiful Indonesia. .

                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                    <ul>
                                        <li>
                                            6 Nights accommodation at 3* Hotel in Bali and Gili Islands, and Nusa Penida
                                            Island (Grandmas
                                            Plus Seminyak Bali, Tir na Nog Gili Trawangan, Lucy's Garden or similiar
                                            class) <br>
                                            * Please note exact accommodation and details are re-confirmed at time of
                                            booking and subject to
                                            change up to 6 weeks prior to departure.
                                        </li>
                                    </ul>
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <ul>
                                        <li>A charming Tour Leader/Guide from The Bali trip Mate
                                        </li>
                                    </ul>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">6x Breakfast <br>
                                        2x Dinner <br>
                                        1x Lunch <br>
                                        To give you maximum flexibility in deciding where, what and with whom to eat
                                        other meals are not
                                        included. Vegetarian and Vegan food options on reques
                                    </p>
                                    <h6 class="head-876">Transport
                                    </h6>
                                    <ul>
                                        <li>All transport included based on tours itinerary <br>
                                            Fastboat to the Gili Island
                                        </li>
                                    </ul>
                                    <h6 class="head-876">Others</h6>
                                    <ul>
                                        <li>Spa</li>
                                    </ul>

                                    <!-- NEXT PAGE -->

                                    <!-- NEXT PAGE -->
                                    <div id="book">
                                    <div class="container">
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

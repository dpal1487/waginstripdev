@extends('layouts.master')
@section('title','WAGNISTRIP')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 4700px;padding-top:80px;">
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
                    <h6 class="spn-2">Highlights of Nepal -
                        9 days
                        </h6>
                        <p>
                            <span class="seven">8N/9D</span> Flexi Package
                            <span class="sp-3">Amazing  Nepal
                                Valle  Tour Inclusive Deal 8N</span>
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
                            <img src="{{ URL::to('/assets/images/package-image/kathmandu.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹109,884.34
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">9 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 5 to 85 year olds    </h6>
                                    </div>
                                </div> -->

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Kathmandu<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Kathmandu
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
                                        <p class="htpvp1">Go Travelling LTD
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#107368
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
                            <p class="para-67">Combine exploration of ancient cities, temples and palaces, breathtaking mountain ranges and
                                more. Go wild in one of Asia's finest game parks and immerse yourself in local life and culture. Get
                                to know the real Nepal!                  
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
                                        <h4 class="hd09"> Kathmandu</h4>
                                </div>
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
                                                <h6 class="hkl">Kathmandu,
                                                    Nepal
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00 - 23:00</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771 mt-2">Friday. Welcome to Kathmandu and the start of your holiday! You’ll be met and transferred to your
                                            hotel where you will receive a welcome drink and a briefing about your trip.                                                           
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 90px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Patan </h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Nepal's capital Kathmandu is a fascinating blend of old and new and the largest and most
                                        cosmopolitan city in Nepal. This morning we visit Bodhnath stupa, a beautiful Buddhist worship site
                                        with spinning prayer wheels and prostrating pilgrims. Our next stop is the ancient city of Bhaktapur,
                                        Nepal’s cultural gem which has maintained its traditional lifestyle and is famous for its pottery. We
                                        explore Bhaktapur’s beautiful Durbar Square and visit Pottery Square we can try our hand at
                                        pottery making. Our final stop is Patan, the old Newari city with a historic Durbar Square full of
                                        temples. This evening enjoy dinner and a cultural Nepali dance performance.                                        
                                    </p>
                                </div>
                                <hr>
                                <!-- page- -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 3-4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Chitwan National Park</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Kathmandu – Chitwan. On day 3 we travel by road to Chitwan National Park (approx 5 hr drive),
                                        arriving in time for lunch. Chitwan is hailed as one of Asia’s finest game parks, home to more than
                                        500 species including the endangered one horned rhino and the elusive Bengal tiger. Over the next
                                        two days we enjoy a selection of activities offered by the lodge including a jeep safari, hoping to
                                        encounter the one horned rhino, various types of deer, boar, monkey, leopard and if we're very
                                        fortunate the Bengal tiger. Other activities at the lodge include a local village walk and nature walks
                                        in the jungle, a scenic dugout canoe ride down the Rapti River, bird watching and a visit to the
                                        Crocodile Breeding Centre. We'll also watch a traditional Tharu dance performance one evening
                                        with dinne                               
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Pokhara</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Chitwan National Park – Pokhara. Today we take a short flight from Chitwan to Pokhara. Arriving
                                        early afternoon the rest of the day is free to relax and take a stroll around this scenic lakeside town,
                                        which is the gateway to the magnificent Annapurna Range.
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Pokhara</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">This morning we watch a beautiful sunrise at the hill top World Peace Pagoda which offers
                                        spectacular views of the Annapurna range. After a short walk, we will take in the panoramic views
                                        of mountains and Pokhara valley while we have breakfast at the Raniban Retreat Resort. Then we
                                        take a scenic 2 hour walk through Raniban forest back down to Lake Phewa where we enjoy a
                                        boat ride across the lake. Later this morning we will visit Tashiling Tibetan refugee camp, giving an
                                        insight into the life of Tibetan refugees in Pokhara. This afternoon we visit the large and tranquil
                                        Jangchub Choeling Monastery located in Hemja, where we will watch the monk's daily prayer.
                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Pokhara</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Today is free day for you to explore Pokhara and participate in optional activities such as
                                        paragliding, ultra-light flight, zip line, bungy jump, mountain biking, cycling, boating and horse riding,
                                        or if you prefer, simply relax down by the lake.
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Pokhara</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Pokhara - Kathmandu. This morning we take the short flight back to Kathmandu and in the
                                        afternoon we explore more of the city. After visiting the beautiful Swayambhunath stupa which
                                        offers wonderful views of the city, we walk to Kathmandu Durbar Square, which is home to over 50
                                        stunning temples and shrines. We’ll also enjoy a rickshaw ride from Hanuman Dhoka to Thamel,
                                        through the bustling back streets of the city which is a great way to observe the everyday life of the
                                        locals. This evening is free for you to wander around the Thamel market, where you can pick up
                                        some last minute souvenirs.                                        
                                    </p>
                                </div>
                                <hr>
                                <!-- page-4 -->
                                                           
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 9:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Kathmandu</h4>
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
                                                <h6 class="hkl">
                                                    Kathmandu,
                                                    Nepal
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Saturday. Our tour comes to an end today with a transfer to the airport.
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">8 nights 4 star hotels
                                </p>
                   
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <p class="prvr">
                                        Escorted by English speaking local tour guides
                                        </p>
                                    
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">8 breakfasts, 2 lunches and 3 dinners including dinner at a Nepali cultural evening
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Airport arrival and departure transfer day 1 and day 9
                                    All relevant transfers and transportation in private air conditioned vehicles
                                    
                                    </p>
                                    <h6 class="head-876">Others
                                    </h6>
                                  <p class="prvr">Touring of Kathmandu, Patan, Bhaktapur and Pokhara
                                    Chitwan National Park jeep safari in the buffer zone, jungle activities and park fees
                                    Rickshaw ride in Kathmandu
                                    Boating on Lake Phewa in Pokhara
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

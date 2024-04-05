@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 5700px;padding-top:80px;">
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
                    <h6 class="spn-2">Hanoi to Hoi An - 8
                        days</h6>
                        <p>
                            <span class="seven">7N/8D</span> Flexi Package
                            <span class="sp-3">Amazing >Hanoi to Hoi An Tour Inclusive Deal 7N</span>
                        </p>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Rickshaw ride through the French Quarter and explore the "36 Streets" of Hanoi
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Ride bicycles into the countryside and enjoy a hands-on cooking lesson from the locals

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Kayak, swim and explore the remarkable caves of the beautiful UNESCO Halong Bay
                    </h6>
                    <!-- <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span></h6> -->
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
                            <img src="{{ URL::to('/assets/images/package-image/vietnam.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-7">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹77,955.68

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">8 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp1">From 2 to 85 year olds    </h6>
                                    </div>
                                </div> -->

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Hanoi<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Hanoi
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
                                        <h6 class="htpvp1">#89438

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
                            <p class="para-67">Travel between two of Vietnam's most charming destinations from the fading colonial chic of Hanoi
                                to the attractive riverside merchant town of Hoi An with a night spent cruising the jade waters of
                                Halong Bay and time spent exploring the royal citadel of imperial Hue, all in just 8 days.                                      
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
                                        <h4 class="hd09"> Hanoi
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
                                                <h6 class="hkl">
                                                    Hanoi,
                                                    Vietnam                                                    
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771 mt-5">Xin Chao! Welcome to Hanoi, one of the region's most charming cities where French colonial
                                            elegance meets Asian spirit with attractive lakes, colourful pagodas and atmospheric streets. On
                                            arrival you will be met by our local representative and transferred to our joining hotel where the
                                            remainder of the day is at leisure for you to relax or head out and explore. For those able to arrive
                                            very early today or the day prior, why not get off the beaten track and explore Hanoi with us on our
                                            optional Back Streets of Hanoi add-on, which explores the quaint districts of Cho Buoi, Hoang Hoa
                                            Tham and Vinh Phuc, and also includes an exhilarating local experience - riding pillion, on taximotorbikes through a maze of tiny streets and along the shore of beautiful Ho Tay Lake
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 200px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Halong Bay</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Hanoi – Halong Bay. After breakfast this morning we leave Hanoi and transfer to the jewel in
                                        Vietnam's scenic crown - the incredibly beautiful Halong Bay. Board a comfortable junk boat to
                                        explore the emerald waters of the bay, dotted with green islets, and enjoy lunch with a view
                                        onboard. This afternoon we visit Trinh Nu Cave, one of the finest caves in Halong Bay, covering an
                                        area of 2,000m² with a stunning array of stalactites and stalagmites. There's also the opportunity to
                                        go kayaking and enjoy a refreshing swim. Later this evening back on board, watch a Vietnamese
                                        cooking demonstration held on the sundeck before settling down for a sumptuous seafood dinner.                                           
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
                                            <h6 class="hd09">Caves & Hanoi cyclo ride</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Halong Bay - Hanoi - Hue. Early birds can enjoy a beautiful sunrise and test their Tai Chi skills on
                                        the sundeck or enjoy a traditional massage - the perfect way to start the day. Before heading back
                                        to port this morning we explore the beautiful Sung Sot cave (Surprise Grotto), which is 10,000m²
                                        and consists of two major chambers. These spectacular chambers are spacious enough to hold
                                        thousands of people. On arrival back into Hanoi mid-afternoon we’ll explore the maze of streets in
                                        the French Quarter by cyclo (rickshaw), taking in highlights such as the Opera house and Ly Thai
                                        To Park. We then swap our wheels for a leisurely walk through ‘36 streets of the old quarter’,
                                        named after the numerous guilds that once set up shop on a particular street, from silk tailors to
                                        traditional medicine shops. Later this evening there's a chance to freshen up before boarding the
                                        overnight train (4 berth sleeper cabin, basic standard) on the ‘Reunification Express’ railway line to
                                        Hue. An option to fly from Hanoi to Hue is also available.                      
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Hue</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Arriving into imperial Hue this morning, we enjoy a guided sightseeing tour of the 19th-century
                                        capital. Visit the iconic Thien Mu Pagoda with its 21-metre-tall tower, and explore the walled
                                        fortress of the Imperial Purple Palace, ringed by a moat with elaborate arches and impressive
                                        ramparts, some of which lie in ruin. Later we travel into the countryside to visit the ancient
                                        mausoleum of Emperor Tu Duc, one of the wonderfully ornamental Royal Tombs of the Nguyen
                                        kings. This evening there is an optional sunset cruise on the Perfume River. Travelling by longboat,
                                        it's the perfect way to enjoy the city skyline
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Hoi An</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Hue - Road of the Ocean Clouds - Hoi An. Bidding farewell to Hue we take a scenic drive along the
                                        coast via the Hai Van Pass (Road of the Ocean Clouds) to Hoi An. We stop en route for a stroll
                                        along My Khe beach, nicknamed 'China Beach' by the Americans during the war. The beach is
                                        famous for being in Francis Ford Coppola’s movie ‘Apocalypse Now’. We arrive into the charming,
                                        old-world trading port of Hoi An later this afternoon. A short walking tour will introduce you to the
                                        highlights of this enchanting and historical town with highlights including the Chua Ong Pagoda,
                                        Chinese Assembly Hall, 200-year-old Tam Ky house, former merchants’ homes and the 400 yearold Japanese Covered Bridge. During your stay in Hoi An, we offer a unique optional Hoi An Street
                                        Eats add-on, which explores the city’s most popular local haunts. Cruise the city the way the locals
                                        do, by vintage Vespa and enjoy lots of tasty Vietnamese Cuisine. Book early with your reservation
                                        consultant, as numbers are limited.                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Rural Life in Vietnam</h4>
                                    </div>
                                    <p class="para-677">Today will be spent out in the countryside learning all about the rural way of life in Vietnam. We'll
                                        reach Tra Que village by bicycle, a leisurely ride on flat roads that take us through ride paddies and
                                        farm land. The option of a taxi is available locally for those not keen on bike riding (payable locally).
                                        Once at the village we'll get our hands dirty learning about age-old farming practices and putting
                                        our knowledge to use by tending the fields and gardens. Lunch is a home-cooked affair with
                                        everyone mucking in. Later this afternoon return back to Hoi An on your bikes
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Hoi An - at leisure
                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today is completely free for you to enjoy Hoi An as you wish. Lose yourself in the cobbled streets
                                        lined with boutique restaurants, hip cafes, delightful craft shops and some of Asia’s best bespoke
                                        tailors (whose services come at a nominal price). If you prefer some R&R, lounge by the hotel pool
                                        or head to the beach. Alternatively you can opt for an excursion to the UNESCO-listed My Son
                                        sanctuary or enjoy a day trip to the popular Ba Na Hills mountain resort, where you will ride the
                                        second longest cable car in the world and walk along the striking Golden Bridge (book and pay
                                        locally).
                                    </p>
                                </div>
                                <hr>

                                
                                <!-- page-5 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Hoi An

                                        </div>
                                    </div>
                                    <div class="bd-1">
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
                                                    Hoi An,
                                                    Vietnam                                             
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Saturday. Today marks the end of your time in Vietnam. A departure transfer will be provided to
                                        take you to Danang airport in time for your onward flight.                                        
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">5 nights 4 star and special class hotels and 1 night aboard deluxe junk boat (private en suite
                                    cabin)
                                    </p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">Guided sightseeing - Hanoi, Halong Bay, Hue and Hoi An <br>
                                    Escorted by an English speaking Vietnamese tour guide
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Breakfast daily, 3 lunches and 1 dinner                                   
                                      
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Airport arrival transfer day 1 and departure transfer day 8 <br>
                                    All relevant transfers and transportation in private air-conditioned vehicles
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Halong Bay Junk boat cruise - opt to swim, kayak and explore caves <br>
                                        1 overnight sleeper train Hanoi to Hue in basic 4 berth cabin (or opt to fly - see Add-ons for
                                        details) <br>
                                        Bicycle ride to Tra Que village and cooking demonstration
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

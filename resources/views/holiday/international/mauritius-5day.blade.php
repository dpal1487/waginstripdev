@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 4600px;padding-top:80px;">
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
                    <h6 class="spn-2">Mauritius Experience
                        5Days 4 Nights</h6>
                    <p>
                        <span class="seven">4N/5D</span> Flexi Package
                        <span class="sp-3">Amazing Mauritius Tour Inclusive Deal 4N</span>
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
                                    <a href="#iti">
                                        <li>1. Your itinerary</li>
                                    </a>
                                    <a href="#wise">
                                        <li>2. Day wise details</li>
                                    </a>
                                    <a href="#book">
                                        <li>3. Why Book with us</li>
                                    </a>
                                    <a href="#booking">
                                        <li>4. How to book</li>
                                    </a>

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
                        <img src="{{ URL::to('/assets/images/package-image/mauritius.png') }}" alt=""
                            style="width: 600px; margin-left: 20px; margin-top: 40px;">
                        <div class="row mt-5">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹119,323.41
                                    </p>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">DURATION
                                    </h6>
                                    <h6 class="htpvp1">5 days</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Île aux Cerfs <i class="fa fa-arrow-right"
                                            aria-hidden="true"></i>
                                        Cap Malheureux
                                    </h6>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-10" style="width: 670px;">
                                    <h6 class="htpvp">OPERATED IN
                                    </h6>
                                    <h6 class="htpvp1">EnglishGermanItalianPortugueseFrenchSpanish
                                    </h6>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">OPERATOR</h6>
                                    <p class="htpvp1">Across Africa Tours & Travel
                                        .

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#175812
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
                            <p class="para-67">
                                The island of Mauritius, stationed in the calm cool waters of the Indian Ocean, is home
                                to some of
                                the world’s most pristine beaches and lush landscapes. It’s a nation with a culture as
                                diverse as its
                                landscape is beautiful. A trip to this far-off destination is a perfect way to
                                rejuvenate, 5 days
                                exploring the island you will experience the history , local cuisine , deep toes in the
                                sand and head
                                out into the water
                            </p>
                            <h6 class="highlight">Highlights:</h6>
                            <ul>
                                <li>visit the Grand River South East Waterfall</li>
                                <li>Have a memorable adventure at private Ile aux Cerfs lagoon</li>
                                <li>Discover the south region of Mauritius with great historical/ geological sites
                                </li>
                                <li>Explore black river National Park</li>
                                <li>Witness the magical Chamarel sWaterfall</li>
                                <li>Discover the capital Port Louis and the culture
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="wise">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 1:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09">MRU Airport- Arrival</h4>
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
                                        <h6 class="hkl">
                                            Île aux Cerfs,
                                            Mauritius,

                                        </h6>

                                    </div>


                                </div>
                                <p class="para-6771">Upon arrival, our guide will welcome you at the hall of the MRU
                                    airport. Later be transferred to the
                                    hotel for dinner and overnight Coral Azur Beach Resort
                                </p>
                            </div>
                        </div>

                        <!-- page-2 -->
                        <div class="container " style="padding-top: 100px;">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 2:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09"> Full Day Catamaran Ile Aux Cerfs</h4>
                                </div>
                            </div>
                            <p class="para-677">You day 2 exploration begins with accommodation pick-up at 0730 after
                                brekafast.You will visit the
                                Grand River South East Waterfall located in the historic village in the south East of
                                Mauritius . Have
                                camera at your hand as you will see impressive ravines and a spectacular waterfall. You
                                will enjoy
                                snorkeling and swimming . Later in the afternoon you will visit Ile aux Cerfs a private
                                lagoon that
                                offers luxuriant vegetation and preserved, white, sandy beaches. Cruise to return to the
                                hotel Coral
                                Azur Beach Resort where you will be spending the night after dinne</p>

                        </div>

                        <!-- page-3 -->
                        <div class="container ">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 3:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09">Exotic South Tour</h4>
                                </div>
                            </div>
                            <p class="para-677">Rise up early as today is an epic day jam full of activities .You will
                                be meeting tour guide after your
                                breakfast at 0830hrs to start visit at Trou aux Cerf a dormant volcano with a well r.
                                Trou aux Cerfs
                                (also known as Murr’s Volcano) is a dormant volcano with a well-defined cone and crater.
                                It is
                                605m (1,985 ft) high and located in Curepipe, Mauritius. Later you will visit ship model
                                factory to
                                share the passion of the vessel which sailed the ocean in the past. You will discover
                                exceptionally
                                well handcrafted ship models made in Mauritius. A great number of models may be bought
                                at very
                                competitive prices. Visit a crater lake situated in a secluded mountain area. Grand
                                Bassin is
                                considered the most sacred hindu place in Mauritius. Temple dedicated to Lord Shiva. the
                                island
                                converge, barefooted, to the lake. You will continue to Bllack River Gorges on the high
                                plateau with
                                beautiful panoramic view defined endemic flora and fauna . Late afternoon you will get a
                                chance to
                                see the highest waterfall best known as Chamarel Waterfalls surrounded by lush
                                vegetation of the
                                Black River Gorges. You can enjoy a vivid view of the waterfalls form both a lower and
                                upper
                                viewpoint from the Black River National Park. The St Denis River flows through fields,
                                gorges and
                                green spaces seawards and provides a splendid view. You will walk around at the seven
                                colored
                                earth a geological site , a natural phenomenon whose colors evolved through conversion
                                of
                                basaltic lava to clay minerals . You will be transferred to your accommodation where you
                                will have
                                dinner and spend the overnight Coral Azur Beach Resort

                                .</p>

                        </div>


                        <!-- page-4 -->
                        <div class="container ">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 4:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09">Full Day North Tour </h4>
                                </div>
                            </div>
                            <p class="para-677">Today is sure a memorable day you will enjoy to visit of Port Louis the
                                capital of Mauritius. You will
                                get a chance to shop in a buzzling central market and walk around enjoy the local
                                delicacies( not
                                included) . Prepare your palate as we will make a stop at Caudan Waterfront shopping
                                mall that is
                                uniquely Mauritian, combining a modern architectural design with a rich historical
                                background •
                                after your lunch ( not included ) you will enjoy the beautiful greenery around Marie
                                Reine de la Paix
                                Hundreds of locals and tourists daily visit to pray and enjoy the beautiful greenery
                                around. Later
                                you will be visiting the Famous Hindu temple in Port Louis . You will be driven around
                                to see
                                magnificent Pamplemousses Botanical private Garden. The garden is home to dozens of
                                varieties
                                of palm trees, medicinal plants, fish ponds and other endemic plants . To mark your end
                                of the day
                                trip you will be visiting the Red Church – Cap Malheureux keep you camera ready to take
                                photos
                                of spectacular views of the beautiful church facing amazing lagoon and come environment
                                .overnight and dinner at Coral Azur Beach Resort
                            </p>

                        </div>
                        <!-- page-5 -->

                        <!-- page-7 -->
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 5:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09"> MRU Airport- Departure</h4>
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
                                    <div class="col-sm-6">
                                        <h6 class="hkl">
                                            Cap Malheureux,
                                            Mauritius
                                        </h6>

                                    </div>

                                </div>
                            </div>
                            <p class="para-677">You journey comes to an end today. After breakfast you will checkout
                                from the accommodation .
                                Our driver will transfer you to the airport. We wish you safe travels for the rest of
                                your journey.

                            </p>
                        </div>
                    </div>

                    <!-- nxt-page -->
                    <div class="container">
                        <h4 class="headerrr">What’s Included</h4>
                        <h4 class="headerr">Accommodation</h4>
                        <ul>
                            <li>
                                4 nights accommodation
                            </li>


                        </ul>
                    </div>

                    <!-- NEXT PAGE -->
                    <div class="container">
                        <h6 class="head-876">Guide</h6>
                        <p class="prvr">English speaking driver guide and his vehicle from Tana to Tamatave.
                        </p>

                        <h6 class="head-876">Transport
                        </h6>
                        <ul>
                            <li>Modern air conditioned coach with reclining seats, TV for showing DVDs, and toilet</li>
                            <li>Any public transport used as part of the tour (excludes free days)</li>
                        </ul>
                        <h6 class="head-876">Others</h6>
                        <ul>
                            <li>Verification of flight
                            </li>
                            <li>24 hour emergency contact</li>
                            <li>Departure message in room one day before departure</li>
                            <li>3 days excursion</li>
                            <li>Entrance fees</li>

                        </ul>
                    </div>

                    <div id="book">
                        <div class="container  ">
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
                            <button class="btn btvn"
                                style="background-color:  rgb(234, 100, 10); color: #fff; margin-left: 270px !important; margin-top: 50px !important; border: 1px solid  rgb(234, 100, 10);">BOOK
                                NOW</button>
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

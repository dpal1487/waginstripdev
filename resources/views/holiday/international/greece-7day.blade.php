@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 5000px;padding-top:80px;">
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
                    <h6 class="spn-2">Athens+2 Island
                        Explorer</h6>
                        <p>
                            <span class="seven">6N/7D</span> Flexi Package
                            <span class="sp-3">Amazing Athens+2 Island Tour Inclusive Deal 6N</span>
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
                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Explore the historic Athens and visit the Acropolis</h6>
                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Savour delicious Greek food and enjoy the nightlife
                        </h6>
                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Discover Mykonos and Santorini on your free days
                        </h6>
                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Go for a swim and admire the beautiful sunsets
                        </h6>
                        
    

                        <!-- next-page -->
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/greece.webp') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹117,328.99
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
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
                                        <h6 class="htpvp190">From 18 to 50 year olds    </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Athens<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Santorini
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
                                        <p class="htpvp1">Travel Talk Tours
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#66216
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
                            <p class="para-67">Take time exploring Athens, the Greek capital, and experience the culture and history, before you
                                hit the most popular Greek Islands. Ferries are organised to take you from Athens to the
                                picturesque island of Mykonos to roam the twisting streets or crazy beach parties and lively
                                nightlife and then to Santorini, for beaches of all colours and breathtaking sunsets.                                                            
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
                                        <h4 class="hd09">  Athens</h4>
                                </div>
                                </div>
                                </div>

                                <!-- next-page -->
                                <div class="container">
                                    <div class="bd-1">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h4 class="head-632">Start Point</h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="hkl">Athens,
                                                    Greece</h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div> -->
                                        </div>
                                        <p class="para-6771 mt-5">Welcome to Greece! Meet in the lobby around 7:00pm for an informal meeting with your guide and
                                            other tour members. Afterwards, join us for an optional group dinner to get to know your new travel
                                            mates. Accommodation The President Hotel - 4 Star Included Activities Welcome Meeting
                                            Optional Activities Group Dinner                                                     
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
                                            <h4 class="hd09">Athens</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Let's start our tour in Greece's capital, Athens, which is one of the world's oldest cities with history
                                        spanning back over 3000 years and is considered the birthplace of Western Civilization. Take a
                                        step back in time and explore an amazing array of historical and cultural sites in our city tour
                                        including: the National Library, the Academy, Constitutional Square and Parliament, The Temple of
                                        Zeus, and of course, the iconic Parthenon and Acropolis. The night is free for you to explore more
                                        of this incredible city. Accommodation The President Hotel - 4 Star Meals Included Breakfast
                                        Included Activities Athens City Tour Entrance Fees Acropolis - EUR 20
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
                                            <h6 class="hd09">Mykonos</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Rise and shine, we have an early start to catch the ferry from Athens to Mykonos. In the afternoon,
                                        you will meet with your tour leader and your fellow travellers to explore Mykonos town, and its
                                        white washed houses. Accommodation Giannoulaki Hotel - 4 Star Meals Included Breakfast
                                        Included Activities Orientation Walk in Mykonos Town Optional Activities Group Dinner                 
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Mykonos</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">The day is yours to soak up the sunshine, swim in the sea or chew through your memory card
                                        taking pics of cute windmills and quaint streets. Or discover the birthplace of Apollo by taking an
                                        optional tour to Delos Island. Tonight, hit the bars and restaurants and dance the night away!
                                        Accommodation Giannoulaki Hotel - 4 Star Meals Included Breakfast Optional Activities Delos
                                        Island Tour - EUR 50                                                                            
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Mykonos/Íos</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Next up: Santorini! After our ferry ride, we will wander through the town of Fira to get our bearings.
                                        See why the blue door houses, white church domes make Santorini the iconic postcard town of
                                        Greece. Santorini is formed from volcanic activity, and from the caldera witness the most epic
                                        sunset and breath-taking views. Accommodation New Haroula Hotel - 3 Star Meals Included
                                        Breakfast Included Activities Orientation Walk in Santorini                            
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Santorini</h4>
                                    </div>
                                    <p class="para-677">We’ve got a free day today. Relax on the red or black sand beaches, wander the streets and
                                        browse through the shops of the main town or take an optional quad biking tour! Explore the
                                        island’s volcano and check out an active crater and hot springs in our optional volcano tour. The
                                        choices are endless! Accommodation New Haroula Hotel - 3 Star Meals Included Breakfast
                                        Optional Activities Quad Biking - EUR 35-55 Wine Tasting - EUR 30 Volcano Tour - EUR 20                                        
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
                                            <h4 class="hd09"> Santorini</h4>

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
                                                    Santorini,
                                                    Greece                                 
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Our trip will end here (11:00am) in Santorini. Fill up on your last breakfast with the Travel Talk crew
                                        and say goodbye to your new friends. Meals Included Breakfast                                                                                            
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">4 & 3 star hotels</p>
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">Services of experienced Travel Talk tour leader                       
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">6 breakfasts
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Economy class ferry
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Transfers from the ferry ports to the hotels and from hotels to the ferry ports <br>
                                        Services of experienced Travel Talk local tour leaders <br>
                                        Complimentary hotel Wi-Fi access ( where available )                             
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

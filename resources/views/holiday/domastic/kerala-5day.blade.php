@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <!--<link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px; height: 4000px;">
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
                    <h6 class="spn-2">Blissful Kerala</h6>
                    <p>
                        <span class="seven">4N/5D</span> Flexi Package
                        <span class="sp-3">Amazing Kerala Tour Inclusive Deal 4N</span>
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
                            <img src="{{ URL::to('/assets/images/package-image/kerala.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹17,500.00


                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">5 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 1 to 99 year olds </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Munna<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Kochi (Cochin) 
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
                                        <h6 class="htpvp1">#162514
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
                                <p class="para-67">Blissful Kerala is a product of Kerala Holiday Club designed to cover Hill Station, Wildlife and
                                    Backwater of Kerala
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
                                        <h4 class="hd09">  Cochin - Munnar
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
                                                Arrival Terminal,
                                                Cochin International Airport (COK),
                                                Nedumbassery, Alwaye, Kerala, India
                                            </h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>07:00 - 18:00</h6>

                                        </div>
                                    </div>
                                    <p class="para-6771 mt-5">Arrive Cochin Airport or Ernakulam Railway Station, assisting all arrival formalities, and you will be
                                        transferred to Munnar. En route, visit Spice Plantations and Valara/Cheeyappara Falls. Once you
                                        reach Munnar, check in at the hotel. Spend a leisurely evening and stay overnight in Munnar
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
                                        <h4 class="hd09">Munnar Sightseeing</h4>
                                    </div>
                                </div>
                                <p class="para-6777">In the morning, head out for a full-day sightseeing tour of Munnar visiting Mattupetty Dam/Lake,
                                    Echo Point, Nursery Garden, Photo Point, Tata Tea Museum, Rajamalai National Park. In the
                                    evening, enjoy Spice Tea trailing at Munnar. Stay overnight at the hotel, in Munnar.
                                </p>
                            </div>
                            <hr>
                            <!-- page- -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h6 class="hd09">Munnar - Thekkady & Thekkady Sightseeing</h6>
                                    </div>
                                </div>

                                <p class="para-677">In the morning, drive to Thekkady. On arrival, check in at the hotel and refresh yourself. Later, head
                                    out for a half-day sightseeing tour of Thekkady. Enjoy the boat safari(direct payment) on the Periyar
                                    Lake through Periyar Tiger Reserve. Later, visit the spice plantations. In the evening, stroll along
                                    the colorful Spice Market in the Kumili Village. Enjoy a comfortable overnight stay at the hotel, in
                                    Thekkady.                     
                                </p>
                            </div>
                            <hr>
                            <!-- page-4 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 4:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Thekkady - Alleppey & Alleppey Houseboat Experience
                                </div>
                                <p class="para-677">Morning proceed to Alleppey. Alleppey a charming village on the Vembanadu Lake. The land which
                                    is known for its azure backwaters, swaying palms, and floating houseboats. A 4 hour scenic drives
                                    through typical Kerala Village, Paddy Field. Visit Paddy Field, Kuttanadan Region the only region
                                    cultivate rice below sea level. Overnight at Houseboat in Alleppey.
                                    
                                </p>
                            </div>
                            <hr>
                            
                            <!-- page-5 -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Kochi (Cochin) Departure

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
                                                Departure Terminal,
                                                Cochin International Airport (COK),
                                                Nedumbassery, Alwaye, Kerala, India                                                
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>10:00 - 18:00                                            </h6>

                                        </div>
                                    </div>
                                </div>
                                <p class="para-677">Later proceed to Cochin. Bid farewell to this serene land as your holidays comes to an end as you
                                    get transferred to Cochin Airport or Railway Station for your onward journey back to home.
                                    
                                </p>

                            </div>
                        </div>
                        <!-- nxt-page -->
                        <div class="container">
                            <h4 class="headerrr">What’s Included</h4>
                            <h6 class="headerr">Accommodation</h6>
                            <p class="para-6777">Munnar : Misty Lake Resort / Lake N Hills Resort / ATwood Resort / Great Escape Resort
                                Thekkady : Karar Garden / Grand Thekkady / Jungle Park
                                Alleppey : Deluxe Houseboat ( A/c works between 09:00pm to 06:00am )</p>

                        </div>
                        <!-- NEXT PAGE -->
                        <div class="container">
                         
                            <h6 class="head-876">Meals</h6>
                            <p class="prvr">Daily Breakfast at Hotel ( Except on the day of Arrival )
                                All Meals in Houseboa
                            </p>

                            <h6 class="head-876">Transport
                            </h6>
                            <p class="prvr">All Tours and Transfers by A/c Vehicle

                            </p>
                            <h6 class="head-876">Others</h6>
                            <p class="prvr">Driver Allowance, Toll, Parking Charges
                                GST
                            </p>
                        </div>
                        <!-- NEXT PAGE -->
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

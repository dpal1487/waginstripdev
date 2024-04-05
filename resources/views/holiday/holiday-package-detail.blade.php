@extends('layouts.master')
@section('title','Wagnistrip')
@section("body")
<!-- DESKTOP VIEW START  -->

<div class="container-29">
    <div class="contain-29">
        <div class="top-heading-1">
            <h2>Amazing Spain Flight Inclusive Deal 3N</h2>
            <div class="left-29">
                <p>3N4D</p>
            </div>
            <div class="center-29">
                <p>Flexi Package</p>
            </div>
            <div class="right-29">
                <p>3N Spain</p>
            </div>
        </div>

        <div class="slider-container">
            <div class="left-slider">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/holiday/pk1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/pk2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/pk3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/pk1.jpg" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="right-slider">
                <img src="{{ URL::to('/assets/images/package-image/pk1.jpg') }}" alt="First slide">
                <img src="{{ URL::to('/assets/images/package-image/pk2.jpg') }}" alt="First slide">
                <img src="{{ URL::to('/assets/images/package-image/pk3.jpg') }}" alt="First slide">
                <img src="assets/images/holiday/hotel1.jpg" alt="First slide">
            </div>
        </div>

    </div>
</div>

<div class="container-30 mb-4">
    <div class="contain-30">
        <section id="tabs">
            <div class="container p-0">
                <div class="row contain-30">
                    <div class="col-xs-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item col-2 nav-link active" id="nav-home-tab" data-toggle="tab"
                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                    aria-selected="true">ITINERARY</a>
                                <a class="nav-item col-2 nav-link" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">POLICIES</a>
                                <a class="nav-item col-2 nav-link" id="nav-contact-tab" data-toggle="tab"
                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">SUMMARY</a>
                            </div>
                        </nav>
                        <div class="fare">
                            <div class="box-30">
                                <div class="top-fare">
                                    <span
                                        style="padding:5px 10px; background-color:green; float:right; margin:10px; color:#fff;">20%OFF</span>
                                    <p
                                        style="float:left; margin-top:45px; margin-left:22px; font-size:14px; color:grey;">
                                        <del>₹18,599</del></p>
                                    <h5
                                        style="float:left; margin-top:60px; margin-left:-55px; font-weight:700; font-size:25px;">
                                        ₹15,596 <span style="margin-top:85px; font-size:12px;">per person*</span></h5>
                                    <p style="float:left; margin-top:90px; margin-left:-165px; font-size:10px;">
                                        *Excluding applicable taxes</p>
                                </div>
                                <div class="date-time">
                                    <h6
                                        style="float:left; font-size:18px; line-height:60px; margin-left:25px; font-weight:700;">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> 05 Jan-10 Jan</h6>
                                    <p
                                        style="float:right; font-size:18px; line-height:60px; margin-right:25px; font-weight:700; color:blue;">
                                        Modify</p>
                                </div>
                                <div class="bookBtn">
                                    <button>Book Now</button>
                                </div>
                                <div class="offersTab">
                                    <h6>Offer</h6>
                                    <p style="font-weight:700;">No cost EMI @ ₹2,408</p>
                                    <p style="font-size:10px;">Book your holidays with Easy <span
                                            style="font-weight:700;">EMI OPTIONS.</span></p>
                                    <div id="main">
                                        <div class="accordion" id="faq">
                                            <div class="card">
                                                <div class="card-header" id="faqhead3">
                                                    <span class="btn btn-header-link collapsed" data-toggle="collapse"
                                                        data-target="#faq3" aria-expanded="true"
                                                        aria-controls="faq3">View All Offers
                                                        Applied</span>
                                                </div>
                                                <div id="faq3" class="collapse" aria-labelledby="faqhead3"
                                                    data-parent="#faq">
                                                    <div class="card-body">
                                                        <h6
                                                            style="float:left; font-size:16px; font-weight:normal; color:blue; margin-bottom:-20px;">
                                                            NEWGREATDEALS</h6>
                                                        <h6
                                                            style="float:right; font-size:16px; font-weight: normal; color:blue;">
                                                            ₹4,484</h6>
                                                        <p style="font-size:12px; margin-top:-10px;">Coupon applied
                                                            successfully</p>
                                                        <hr>
                                                        <h6
                                                            style="float:left; font-size:16px; font-weight:700; color:blue; margin-top:-20px;">
                                                            Total Savings <span style="font-size:10px; color:#000;">Per
                                                                person</span></h6>
                                                        <h6
                                                            style="float:right; font-size:16px; font-weight: normal; color:blue; margin-top:-20px;">
                                                            ₹4,484</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bestDeal">
                                <h6>Best Deals For You</h6>
                                <div class="log-details">
                                    <h5>For maximum benefits</h5>
                                    <span>LOGIN NOW &#8594; </span>
                                </div>
                                <ul class="detailsFare">
                                    <li>Redeem wallet</li>
                                    <li>Book faster</li>
                                    <li>Get special deals</li>
                                    <li>Continue in any device</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade p-4 show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{ URL::to('/assets/images/package-image/team1.jpg') }}" style="width:170px; height:220px;"
                                            alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <p style="font-style: italic; font-size:13px;  line-height:1.2;"><i
                                                class="fa fa-quote-left" aria-hidden="true"></i>
                                            A flight and hotel only package. Customize the package from a pool of
                                            optional activities to
                                            make your holiday memorable! From adventure activities to heritage walks,
                                            your beach vacay comes with a host of optional activities.
                                        </p>
                                        <div class="row mt-lg-5">
                                            <div class="col-sm-6">
                                                <img src="{{ URL::to('/assets/images/package-image/travel-bag.png') }}" alt=""
                                                    style="widht:40px; height:40px; float:left;">
                                                <h6 style=" text-transform: uppercase; font-weight:700;">what to expect
                                                </h6>
                                                <p style="font-size:11px;  line-height:1.2; margin-left:40px;">Pleasant
                                                    weather, clear skies and cool sea breeze in the mornings and
                                                    evenings in Goa.</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{ URL::to('/assets/images/package-image/star.png') }}" alt=""
                                                    style="widht:40px; height:40px; float:left;">
                                                <h6
                                                    style=" font-size:14px; font-weight:700; text-transform: uppercase;">
                                                    things you will love</h6>
                                                <p style="font-size:11px;  line-height:1.2; margin-left:40px;">Beaches,
                                                    water sports and nightlife in Goa.</p>
                                            </div>
                                            <div class="col-sm-12">
                                                <h6 style="font-size:12px; margin:0px; font-style: italic;">Curated by
                                                </h6>
                                                <p style="font-size:12px;"><span
                                                        style="font-weight:700; font-size:18px; color:#262424;">Pintar
                                                        Sharma </span> WT Travel Expert 8+ Years Experience</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 row-contain-30">
                                    <div class="col-12">
                                        <div class="container mt-3">

                                            <ul class="nav nav-tabs" id="tab-bar-12">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home">4 Day
                                                        Plan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menu1">2 Flights</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menu2">1 Hotel</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#menu3">2 Transfers</a>
                                                </li>
                                            </ul>


                                            <div class="tab-content col-10">
                                                <div id="home" class="container tab-pane active"><br>
                                                    <div class="section-30">
                                                        <div class="left-section-30">
                                                            <h4>Day Plan</h4>
                                                            <ul>
                                                                <li><a href="#dya-1">20 Feb, Sun</a></li>
                                                                <li><a href="#">21 Feb, Mon</a></li>
                                                                <li><a href="#">22 Feb, Tue</a></li>
                                                                <li><a href="#">23 Feb, Wed</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-section-31">
                                                            <div class="top-sec-1">
                                                                <ul>
                                                                    <li>Day 1 - Arrival in Spain</li>
                                                                    <li><i class="fa fa-plane" aria-hidden="true"></i>
                                                                        Flights</li>
                                                                    <li><i class="fa fa-building"
                                                                            aria-hidden="true"></i> Hotels</li>
                                                                    <li><i class="fa fa-car" aria-hidden="true"></i>
                                                                        Transfers</li>
                                                                </ul>
                                                            </div>
                                                            <div class="flight-1" id="dya-1">
                                                                <div class="flight-sec-left">
                                                                    <h6 style="font-weight:normal;">Flight from New
                                                                        Delhi to Goa <span style="font-weight:700;"> 02h
                                                                            25m</span></h6>
                                                                    <img src="assets/images/holiday/SG.png" alt=""
                                                                        style="margin-top:20px; float:left; margin-right:20px;">
                                                                    <h5 style="margin-top:30px; float:left;">12:00</h5>
                                                                    <p
                                                                        style="margin-top:50px; margin-left:-45px; float:left; font-size:12px;">
                                                                        New Delhi</p>
                                                                    <i class="fa fa-plane" aria-hidden="true"
                                                                        style="margin-top:40px; margin-left:100px;"></i>
                                                                    <h5
                                                                        style="margin-top:30px; float:right; margin-right:20px;">
                                                                        15:00</h5>
                                                                    <p
                                                                        style="font-size:12px; margin-top:50px; float:right; margin-right:-45px;">
                                                                        Goa</p>
                                                                </div>
                                                                <div class="flight-sec-right">
                                                                    <span
                                                                        style="float:left; color:#090979;">Remove</span>
                                                                    <span
                                                                        style="float:right; color:#090979;">Change</span>
                                                                    <h6
                                                                        style="font-size:16px; padding-top:40px; font-weight:700;">
                                                                        Baggage</h6>
                                                                    <p
                                                                        style="font-size:12px; letter-spacing: -1px; margin:0px;">
                                                                        <strong>Cabin :</strong> 7 kgs (1 piece only)
                                                                    </p>
                                                                    <p style="font-size:12px; letter-spacing: -1px;">
                                                                        <strong>Check-in :</strong> 15 Kgs (1 piece
                                                                        only)</p>
                                                                </div>
                                                            </div>
                                                            <div class="cab-section">
                                                                <h6 style="font-weight:normal;">Airport to hotel in Goa
                                                                    <span style="font-weight:700;"> 1 hrs</span></h6>
                                                                <span
                                                                    style="float:left; margin-top:-30px; margin-left:400px; color:#090979;">Remove</span>
                                                                <span
                                                                    style="float:right; color:#090979; margin-top:-30px;">Change</span>
                                                                <div class="left-cab-img">
                                                                    <img src="assets/images/holiday/car.png" alt=""
                                                                        style="transform: rotateY(130deg); width:150px; height:80px; margin-top:30px;">
                                                                </div>
                                                                <div class="right-cab-details">
                                                                    <h6 style="margin:0px; margin-top:10px;">
                                                                        <strong>Swift, Etios</strong>(or Similar)</h6>
                                                                    <p style="margin:0px;">Private Transfer/Sedan - AC
                                                                    </p>
                                                                    <p style="font-size:10px;  line-height: 1.2;">
                                                                        One-way arrival transfer
                                                                        from Goa International Airport to the hotel in
                                                                        any
                                                                        location in North and South Goa in a private
                                                                        car.<span id="dots">...</span><span id="more">
                                                                            The pick-up timings will
                                                                            be as per the landing time of your booked
                                                                            flight
                                                                            and shall be communicated to you by the
                                                                            local vendor.</p>
                                                                    <button onclick="myFunction()" id="myBtn">Read
                                                                        more</button>
                                                                    <p
                                                                        style="font-size:14px; padding-top:5px; font-weight:700;">
                                                                        <span style="color:grey;">Facilities </span> 3
                                                                        Seater | 2 Luggage Bags | AC | First Aid</p>
                                                                </div>
                                                            </div>
                                                            <div class="hotel-section">
                                                                <h6>Check-in to Hotel in Candolim <span
                                                                        style="font-weight:700;"> @ 2 PM</span></h6>
                                                                <span
                                                                    style="float:right; color:#090979; margin-top:-30px;">Change</span>
                                                                <div class="hotel-img">
                                                                    <img src="assets/images/holiday/hotel1.jpg" alt=""
                                                                        style="width:190px; height:150px; padding:10px;">
                                                                </div>
                                                                <div class="right-cab-details">
                                                                    <h6
                                                                        style="margin:0px; margin-top:10px; font-weight:700;">
                                                                        Evoke Lifestyle Candolim 4/5&#10025;</h6>
                                                                    <p style="margin:0px;">Candolim</p>
                                                                    <p style="font-size:12px;margin:0px;"><span
                                                                            style="color:grey;">1.4 km from Candolim
                                                                            Beach</p>
                                                                    <p style="font-size:12px;"><i
                                                                            class="fa fa-calendar-check-o"
                                                                            aria-hidden="true"></i> Sun, 20 Feb 2022 -
                                                                        Wed, 23 Feb 2022</p>
                                                                    <p style="font-size:14px; margin:0px;"><span
                                                                            style="color:grey;">Includes</span>
                                                                        Breakfast</p>
                                                                    <p
                                                                        style="font-size:14px; margin:0px;  font-weight:700;">
                                                                        <span style="color:grey;">Room Type </span>
                                                                        DELUXE - MMT SPECIAL <span
                                                                            style="color:rgb(55, 55, 243);">CHANGE
                                                                            ROOM</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="day-activities">
                                                                <div class="endDay">
                                                                    <p><span
                                                                            style="font-weight:700;  text-align: center;">End
                                                                            Of Day</span> - Spend time at Leisure or add
                                                                        an activity to your day</p>
                                                                </div>
                                                                <div class="activitiesBtn">
                                                                    <p>ADD ACTIVITY TO DAY</p>
                                                                </div>
                                                            </div>
                                                            <div class="day-activities-1">
                                                                <div class="top-sec-1">
                                                                    <ul>
                                                                        <li>Day 3 - Goa</li>
                                                                        <li><i class="fa fa-building"
                                                                                aria-hidden="true"></i> Hotels</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="endDay">
                                                                    <p><span
                                                                            style="font-weight:700;  text-align: center;">End
                                                                            Of Day</span> - Spend time at Leisure or add
                                                                        an activity to your day</p>
                                                                </div>
                                                                <div class="activitiesBtn">
                                                                    <p>ADD ACTIVITY TO DAY</p>
                                                                </div>
                                                            </div>
                                                            <div class="day-activities-2">
                                                                <div class="top-sec-1">
                                                                    <ul>
                                                                        <li>Day 4 - Departure from Goa</li>
                                                                        <li><i class="fa fa-building"
                                                                                aria-hidden="true"></i> Hotels</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="cab-section">
                                                                    <h6 style="font-weight:normal;">Hotel in Goa to
                                                                        Airport
                                                                        <span style="font-weight:700;"> 1 hrs</span>
                                                                    </h6>
                                                                    <span
                                                                        style="float:left; margin-top:-30px; margin-left:400px; color:#090979;">Remove</span>
                                                                    <span
                                                                        style="float:right; color:#090979; margin-top:-30px;">Change</span>
                                                                    <div class="left-cab-img">
                                                                        <img src="assets/images/holiday/car.png" alt=""
                                                                            style="transform: rotateY(130deg); width:150px; height:80px; margin-top:30px;">
                                                                    </div>
                                                                    <div class="right-cab-details">
                                                                        <h6 style="margin:0px; margin-top:10px;">
                                                                            <strong>Swift, Etios</strong>(or Similar)
                                                                        </h6>
                                                                        <p style="margin:0px;">Private Transfer/Sedan -
                                                                            AC
                                                                        </p>
                                                                        <p style="font-size:10px;  line-height: 1.2;">
                                                                            One-way arrival transfer
                                                                            from Goa International Airport to the hotel
                                                                            in
                                                                            any
                                                                            location in North and South Goa in a private
                                                                            car.<span id="dots1">...</span><span
                                                                                id="more">
                                                                                The pick-up timings will
                                                                                be as per the landing time of your
                                                                                booked
                                                                                flight
                                                                                and shall be communicated to you by the
                                                                                local vendor.</p>
                                                                        <p
                                                                            style="font-size:14px; padding-top:5px; font-weight:700;">
                                                                            <span style="color:grey;">Facilities </span>
                                                                            3
                                                                            Seater | 2 Luggage Bags | AC | First Aid</p>
                                                                    </div>
                                                                </div>

                                                                <div class="flight-1" id="dya-1">
                                                                    <div class="flight-sec-left">
                                                                        <h6 style="font-weight:normal;">Flight from New
                                                                            Goa to Delhi <span style="font-weight:700;">
                                                                                02h
                                                                                25m</span></h6>
                                                                        <img src="assets/images/holiday/SG.png" alt=""
                                                                            style="margin-top:20px; float:left; margin-right:20px;">
                                                                        <h5 style="margin-top:30px; float:left;">12:00
                                                                        </h5>
                                                                        <p
                                                                            style="margin-top:50px; margin-left:-45px; float:left; font-size:12px;">
                                                                            Goa</p>
                                                                        <i class="fa fa-plane" aria-hidden="true"
                                                                            style="margin-top:40px; margin-left:100px;"></i>
                                                                        <h5
                                                                            style="margin-top:30px; float:right; margin-right:20px;">
                                                                            15:00</h5>
                                                                        <p
                                                                            style="font-size:12px; margin-top:50px; float:right; margin-right:-45px;">
                                                                            New Delhi</p>
                                                                    </div>
                                                                    <div class="flight-sec-right">
                                                                        <span
                                                                            style="float:left; color:#090979;">Remove</span>
                                                                        <span
                                                                            style="float:right; color:#090979;">Change</span>
                                                                        <h6
                                                                            style="font-size:16px; padding-top:40px; font-weight:700;">
                                                                            Baggage</h6>
                                                                        <p
                                                                            style="font-size:12px; letter-spacing: -1px; margin:0px;">
                                                                            <strong>Cabin :</strong> 7 kgs (1 piece
                                                                            only)
                                                                        </p>
                                                                        <p
                                                                            style="font-size:12px; letter-spacing: -1px;">
                                                                            <strong>Check-in :</strong> 15 Kgs (1 piece
                                                                            only)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="menu1" class="container tab-pane fade"><br>
                                                    <div class="container" style="">
                                                        <div class="row" style="border-bottom:1px solid #ccc;">
                                                            <div class="col-8" style="background-color:;">
                                                                <div class="row">
                                                                    <div class="col-2 p-0">
                                                                        <img src="assets/images/holiday/SG.png" alt="">
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p style="float:left; margin:0px; padding:0px;">
                                                                            12:00</p>
                                                                        <p
                                                                            style="font-size:12px; margin:0px; padding:0px;">
                                                                            New Delhi</p>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <i class="fa fa-plane" aria-hidden="true"
                                                                            style="margin-left:30px; margin-top:20px;"></i>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p
                                                                            style="float:right; margin:0px; padding:0px; text-align: right;">
                                                                            15:00</p>
                                                                        <p
                                                                            style="font-size:12px; margin:0px; padding:0px; text-align: right;">
                                                                            Goa</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2" style="">
                                                                <div class="row">
                                                                    <div class="col-6 p-0">
                                                                        <span style="color: #0164a3;">Remove</span>
                                                                    </div>
                                                                    <div class="col-6 p-0">
                                                                        <span style="color: #0164a3;">Change</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <br>
                                                                    <h6
                                                                        style="font-weight:700; margin:0px; float:left;">
                                                                        Baggage:
                                                                    </h6>
                                                                    <p
                                                                        style="font-size:12px; margin:0px; float:left; padding-left:20px;">
                                                                        <span style="font-weight:700;">Cabin:</span> 7
                                                                        Kgs (1 piece only)</p>
                                                                    <p
                                                                        style="font-size:12px; margin:0px; float:left; padding-left:20px;">
                                                                        <span style="font-weight:700;">Check-in:</span>
                                                                        15 Kgs (1 piece only)</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container mt-5" style="">
                                                        <div class="row" style="border-bottom:1px solid #ccc;">
                                                            <div class="col-8" style="background-color:;">
                                                                <div class="row">
                                                                    <div class="col-2 p-0">
                                                                        <img src="assets/images/holiday/SG.png" alt="">
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p style="float:left; margin:0px; padding:0px;">
                                                                            12:00</p>
                                                                        <p
                                                                            style="font-size:12px; margin:0px; padding:0px;">
                                                                            New Delhi</p>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <i class="fa fa-plane" aria-hidden="true"
                                                                            style="margin-left:30px; margin-top:20px;"></i>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <p
                                                                            style="float:right; margin:0px; padding:0px; text-align: right;">
                                                                            15:00</p>
                                                                        <p
                                                                            style="font-size:12px; margin:0px; padding:0px; text-align: right;">
                                                                            Goa</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2" style="">
                                                                <div class="row">
                                                                    <div class="col-6 p-0">
                                                                        <span style="color: #0164a3;">Remove</span>
                                                                    </div>
                                                                    <div class="col-6 p-0">
                                                                        <span style="color: #0164a3;">Change</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <br>
                                                                    <h6
                                                                        style="font-weight:700; margin:0px; float:left;">
                                                                        Baggage:
                                                                    </h6>
                                                                    <p
                                                                        style="font-size:12px; margin:0px; float:left; padding-left:20px;">
                                                                        <span style="font-weight:700;">Cabin:</span> 7
                                                                        Kgs (1 piece only)</p>
                                                                    <p
                                                                        style="font-size:12px; margin:0px; float:left; padding-left:20px;">
                                                                        <span style="font-weight:700;">Check-in:</span>
                                                                        15 Kgs (1 piece only)</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="menu2" class="container tab-pane fade"><br>
                                                    <div class="container p-0" style="">
                                                        <h6>Check-in to Hotel in Candolim @ 2 PM</h6>
                                                        <div class="row p-0" style="border-bottom:1px solid #ccc;">
                                                            <div class="col-6">
                                                                <img src="assets/images/holiday/hotel1.jpg" alt=""
                                                                    style="width:260px; height:180px; padding:20px;">
                                                            </div>
                                                            <div class="col-6">
                                                                <h6
                                                                    style="font-weight:700; margin:0px; float:left; padding-top:15px;">
                                                                    Evoke Lifestyle Candolim 4/5✩</h6>
                                                                <p
                                                                    style="font-weight:normal; margin:0px; font-size:16px;">
                                                                    Candolim</p>
                                                                <span
                                                                    style="font-weight:normal; margin:0px; font-size:12px;">1.4
                                                                    km from Candolim Beach</span>
                                                                <p
                                                                    style="font-weight:normal; margin:0px; font-size:12px;">
                                                                    <i class="fa fa-calendar-check-o"
                                                                        aria-hidden="true"></i> Sun, 20 Feb 2022 - Wed,
                                                                    23 Feb 2022</p>
                                                                <p style="font-weight:normal; font-size:16px;">Includes:
                                                                    Breakfast</p>
                                                                <p
                                                                    style="font-weight:normal; margin:0px; font-size:10px;">
                                                                    Room Type DELUXE - MMT SPECIAL <span
                                                                        style="font-weight:700; color:#0164a3;">CHANGE
                                                                        ROOM</span></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="menu3" class="container tab-pane fade"><br>
                                                    <div class="container" style="">
                                                        <h6>Airport to hotel in Goa 1 hrs</h6>
                                                        <div class="row p-0" style="border-bottom:1px solid #ccc;">
                                                            <div class="col-6">
                                                                <img src="assets/images/holiday/car.png" alt=""
                                                                    style="width:260px; height:180px; padding:20px;">
                                                            </div>
                                                            <div class="col-6">
                                                                <h6
                                                                    style="font-weight:700; margin:0px; padding-top:60px;">
                                                                    Swift, Etios(or Similar)</h6>
                                                                <p
                                                                    style="font-weight:normal; margin:0px; font-size:12px;">
                                                                    Private Transfer/Sedan - AC</p>
                                                            </div>
                                                            <div class="col-12 p-0" style="margin-top:-40px;">
                                                                <p
                                                                    style="font-weight:normal; margin:0px; font-size:12px;">
                                                                    One-way arrival transfer from Goa International
                                                                    Airport to the hotel in any
                                                                    location in North and South Goa in a private car.
                                                                    The pick-up timings will
                                                                    be as per the landing time of your booked flight and
                                                                    shall
                                                                    be communicated to you by the local vendor.</p>
                                                                <p>Facilities3 Seater | 2 Luggage Bags | AC | First Aid
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container mt-5" style="">
                                                        <h6>Airport to hotel in Goa 1 hrs</h6>
                                                        <div class="row p-0" style="border-bottom:1px solid #ccc;">
                                                            <div class="col-6">
                                                                <img src="assets/images/holiday/car.png" alt=""
                                                                    style="width:260px; height:180px; padding:20px;">
                                                            </div>
                                                            <div class="col-6">
                                                                <h6
                                                                    style="font-weight:700; margin:0px; padding-top:60px;">
                                                                    Swift, Etios(or Similar)</h6>
                                                                <p
                                                                    style="font-weight:normal; margin:0px; font-size:12px;">
                                                                    Private Transfer/Sedan - AC</p>
                                                            </div>
                                                            <div class="col-12 p-0" style="margin-top:-40px;">
                                                                <p
                                                                    style="font-weight:normal; margin:0px; font-size:12px;">
                                                                    One-way arrival transfer from Goa International
                                                                    Airport to the hotel in any
                                                                    location in North and South Goa in a private car.
                                                                    The pick-up timings will
                                                                    be as per the landing time of your booked flight and
                                                                    shall
                                                                    be communicated to you by the local vendor.</p>
                                                                <p>Facilities3 Seater | 2 Luggage Bags | AC | First Aid
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4 m-0" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="container">
                                    <h5>CANCELLATION & DATE CHANGE</h5>
                                    <p>How much will it cost to cancel or change the start date after making a booking?
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>CANCELLATION</h5>
                                            <h6>Till 9th Feb</h6>
                                        </div>
                                        <div class="col-6">
                                            <h5>DATE CHANGE</h5>
                                            <h6>After 9th Feb</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>₹7,000</h5>
                                            <p>Per person</p>
                                            <p>Cancellation Charge</p>
                                        </div>
                                        <div class="col-6">
                                            <h5>Non Refundable</h5>
                                            <p>Cancellation is not allowed</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <ul>
                                                <li>These are non-refundable amounts as per the current components
                                                    attached. In the case of
                                                    component change/modifications, the policy will change accordingly.
                                                </li>
                                                <li>Please check the exact cancellation and date change policy on the
                                                    review page before proceeding further.</li>
                                                <li>Date Change fees don't include any fare change in the components on
                                                    the new date. Fare difference as applicable will be charged
                                                    separately.</li>
                                                <li>Date Change will depend on the availability of the components on the
                                                    new requested date.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h5>Exclusions</h5>
                                        <ul class="col-12">
                                            <li>Expenses of personal nature</li>
                                            <li>Mentioned cost is not valid between 6 pm and 8 am</li>
                                            <li>Anything not mentioned under inclusions</li>
                                            <li>Package price does not include Gala dinner charges applicable on
                                                Christmas and New Year's Eve</li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <h5>Terms and Conditions</h5>
                                        <ul class="col-12">
                                            <li>Standard check-in time at the hotel is normally 2:00 pm and check-out is
                                                11:00 am. An early check-in,
                                                or a late check-out is solely based on the discretion of the hotel.</li>
                                            <li>A maximum of 3 adults are allowed in one room. The third occupant shall
                                                be provided a mattress/rollaway bed.</li>
                                            <li>The itinerary is fixed and cannot be modified. Transportation shall be
                                                provided as per the itinerary and will not be at disposal.For any paid
                                                activity which is non-operational due to any unforeseen reason, we will
                                                process refund &
                                                same should reach the guest within 30 days of processing the refund.
                                            </li>
                                            <li>Also, for any activity which is complimentary and not charged to MMT &
                                                guest, no refund will be processed.</li>
                                            <li>AC will not be functional anywhere in cool or hilly areas.</li>
                                            <li>Entrance fee, parking and guide charges are not included in the
                                                packages.</li>
                                            <li>If your flights involve a combination of different airlines, you may
                                                have to collect
                                                your luggage on arrival at the connecting hub and register it again
                                                while
                                                checking in for the onward journey to your destination.</li>
                                            <li>Booking rates are subject to change without prior notice.</li>
                                            <li>Airline seats and hotel rooms are subject to availability at the time of
                                                booking.</li>
                                            <li>Pricing of the booking is based on the age of the passengers. Please
                                                make sure you enter the correct
                                                age of passengers at the time of booking. Passengers
                                                furnishing incorrect age details may incur penalty at the time of
                                                travelling.</li>
                                            <li>In case of unavailability in the listed hotels, arrangement for an
                                                alternate accommodation will be made in a hotel of similar standard.
                                            </li>
                                            <li>In case your package needs to be cancelled due to any natural calamity,
                                                weather conditions etc. Wagnistrip shall strive to give you the maximum
                                                possible refund subject to the agreement made with our trade
                                                partners/vendors.</li>
                                            <li>MMT reserves the right to modify the itinerary at any point, due to
                                                reasons including but not limited to: Force Majeure events, strikes,
                                                fairs, festivals, weather conditions, traffic problems, overbooking of
                                                hotels / flights, cancellation / re-routing of flights, closure of
                                                /entry restrictions at a place of visit, etc. While we will do our best
                                                to make suitable alternate arrangements, we would not be held liable for
                                                any refunds/compensation claims arising out of this.</li>
                                            <li>Certain hotels may ask for a security deposit during check-in, which is
                                                refundable at check-out subject to the hotel?s policy.</li>
                                            <li>The booking price does not include: Expenses of personal nature, such as
                                                laundry, telephone calls, room service, alcoholic beverages, mini bar
                                                charges, tips, portage, camera fees etc.</li>
                                            <li>Any other items not mentioned under Inclusions are not included in the
                                                cost of the booking.</li>
                                            <li>The package price doesn?t include special dinner or mandatory charges at
                                                time levied by the hotels especially during New Year and Christmas or
                                                any special occasions. Wagnistrip shall try to communicate the same
                                                while
                                                booking the package. However Wagnistrip may not have this information
                                                readily available all the time.</li>
                                            <li>Cost of deviation and cost of extension of the validity on your ticket
                                                is not included.</li>
                                            <li>For queries regarding cancellations and refunds, please refer to our
                                                Cancellation Policy.</li>
                                            <li>Disputes, if any, shall be subject to the exclusive jurisdiction of the
                                                courts in New Delhi.</li>
                                            <li>Dudhsagar Waterfalls is closed in the monsoon (June - September).</li>
                                            <li>Activities related to water sports are subject to weather and wind
                                                conditions on the ground.</li>
                                            <li>The cost of mentioned tours and transfer is not valid between 6 pm ? 8
                                                am.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="container">
                                    <div class="row">
                                        <ul class="col-12">
                                            <li><i class="fa fa-plane" aria-hidden="true"></i> Arrival in Goa by
                                                Spicejet Flight SG-8171</li>
                                            <li><i class="fa fa-taxi" aria-hidden="true"></i> Airport to hotel in Goa
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 bgcolor" style="color:#fff;">
                                            <h5>Goa - 3 Nights Stay</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4" style="">
                                            <p>Day 1 20 Feb, Sun</p>
                                        </div>
                                        <div class="col-8" style="">
                                            <p><i class="fa fa-building" aria-hidden="true"></i> Check in to Evoke
                                                Lifestyle Candolim, 4 Star</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4" style="">
                                            <p>Day 2 20 Feb, Sun</p>
                                        </div>
                                        <div class="col-8" style="">
                                            <p><i class="fa fa-building" aria-hidden="true"></i> Check in to Evoke
                                                Lifestyle Candolim, 4 Star</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4" style="">
                                            <p>Day 3 20 Feb, Sun</p>
                                        </div>
                                        <div class="col-8" style="">
                                            <p><i class="fa fa-building" aria-hidden="true"></i> Check in to Evoke
                                                Lifestyle Candolim, 4 Star</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4" style="">
                                            <p>Day 4 20 Feb, Sun</p>
                                        </div>
                                        <div class="col-8" style="">
                                            <p><i class="fa fa-building" aria-hidden="true"></i> Check in to Evoke
                                                Lifestyle Candolim, 4 Star</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <ul class="col-12">
                                            <li><i class="fa fa-taxi" aria-hidden="true"></i> Hotel in Goa to Airport
                                            </li>
                                            <li><i class="fa fa-plane" aria-hidden="true"></i> Departure from Goa by
                                                Spicejet Flight SG-8646 </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
<!--- Desktop End View -->
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

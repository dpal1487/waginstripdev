@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <!--<link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;height: 5500px;">
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
                    <h6 class="spn-2">Kashmir
                        Extravaganza</h6>
                    <p>
                        <span class="seven">4N/5D</span> Flexi Package
                        <span class="sp-3">Amazing Kashmir
                            Extravaganza Tour Inclusive Deal 4N</span>
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
                            <img src="{{ URL::to('/assets/images/package-image/kasmir.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹51,853.41
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
                                        <h6 class="htpvp190">From 10 to 70 year olds </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">New Delhi<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            New Delhi
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
                                        <p class="htpvp1">MCI GETS HOLIDAYS Pvt Ltd

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#111998
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
                                <p class="para-67">A famous thirteenth century Indian poet and scholar Amir Khusro described the beauty of Kashmir
                                    thus, “If there is a paradise on earth, it is this, it is this, it is this”. The climate of Kashmir has been
                                    linked to that of Switzerland until end of May and Southern France in July and August. But it is
                                    impossible to speak of Kashmir as possessing only one climate or group of characteristics. Every
                                    hundred feet of elevation brings some new phase of climate and vegetation. Kashmir is nothing
                                    short of awe-inspiring beauty with stunning valleys, spectacular snow-clad mountains, magical
                                    meadows, winding rivers, serene lakes, romantic gardens and more thus making Kashmir blessed
                                    with nature’s abundance. This ‘3 nights and 4 days’ tour will take you through the mesmerizing
                                    natural wonders of Kashmir. <br>
                                    HIGHLIGHTS: <br>
                                    1. Get spectacular views of the valleys of Srinagar, Gulmarg and Pahalgam. <br>
                                    2. Visit the royal gardens of the Mughals in Srinagar. <br>
                                    3. Enjoy the magnificent vistas of the snow-clad Himalayan peaks as you ride on a Shikara boat 
                                    on the Dal Lake. <br>
                                    4. Discover ruins of ancient Hindu temples enroute Srinagar to Pahalgam. <br>
                                    5. Get sweeping views of the Himalayan valley on the world’s tompmost cable car ride in Gulmarg. <br>
                                    6. Transport in a private chauffeur driven air-conditioned vehicle including hotel pick-up and dropoff.
                                    
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
                                        <h4 class="hd09"> Arrival in Delhi
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
                                                New Delhi,
                                                India
                                            </h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>07:00 - 18:00</h6>

                                        </div>
                                    </div>
                                    <p class="para-6771 mt-5">Upon arrival, our representative will greet you at the Delhi Airport, and then transfer you to your
                                        hotel.
                                        Overnight in Delhi.                                        
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
                                        <h4 class="hd09">Delhi - Srinagar (By Morning Flight</h4>
                                    </div>
                                </div>
                                <p class="para-6777">Board your early morning flight to Srinagar.
                                    On arrival at Srinagar Airport, our company representative will greet you with a warm welcome and
                                    then escort you to your Houseboat in Srinagar. Check-in.
                                    After a quick wash and change, proceed for Srinagar sightseeing tour. Srinagar located 5,200 ft, is
                                    also known as "Paradise on Earth" and is one of Indias top tourist draws. Explore the famous
                                    Mughal Gardens portraying fine example of Mughal style of garden design and architecture. The
                                    Mughal gardens are a combination of three renowned gardens developed over a period of time
                                    during the seventeenth century. The Shalimar bagh (the Abode of Love) - the largest was laid by
                                    Emperor Jehangir in 1619, Nishat bagh (the Garden of Pleasure) - a beautiful terraced garden with
                                    a backdrop of the beautiful mountains, and the Chashme-Shahi (the Royal Spring) - one of the
                                    most charming of the gardens along the banks of the Dal Lake, was laid by emperor Shah Jahan in
                                    1632.
                                    In the afternoon, enjoy a Shikara ride (a traditional Kashmir-style boat) on the Dal Lake. Dinner and
                                    overnight stay in Srinagar Houseboat.                                    
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
                                        <h6 class="hd09">Srinagar - Pahalgam - Srinagar (92 KM/2.5 HRS ONE SIDE)</h6>
                                    </div>
                                </div>

                                <p class="para-677">After Breakfast, check-out of the houseboat and make a day trip of Pahalgam (7,200 ft) or "Valley
                                    of Shepherds". Pahalgam is a scenic hill station and a popular shooting location for the Indian film
                                    Industry (Bollywood). It is also famous for its trekking routes and is the base camp for Amarnath
                                    Pilgrimage.
                                    On the way to Pahalgam, youll cover places such as the world-famous saffron growing fields,
                                    Awantipura ruins (dating to 9th Century) with remnants of number of ancient Hindu temples built
                                    during the reign of King Awanti Varman who ruled Kashmir during the 9th century, and Martand
                                    Temple (Sun temple).
                                    On arrival in Pahalgam, take a Jeep ride to Baisaran meadows. Visit Aru Valley, Chandanwadi and
                                    Betaab valley, which are the three angelic valleys of Pahalgam blessed with fine meadows of
                                    picturesque scenery.
                                    Return Srinagar by night. Arrive and check-in at hotel.
                                    Dinner and overnight stay at hotel in Srinagar       
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
                                        <h4 class="hd09">Srinagar - Gulmarg - Srinagar (55 KM/2 HRS ONE SIDE)
                                </div>
                                <p class="para-677">After breakfast, proceed for day trip of Gulmarg (8,500 ft) popularly known as the "Meadow of
                                    Flowers". During summers it has a functional 18-hole golf course, probably the highest in the world
                                    and in winters, a premier Ski resort. Get ready for a Gondola ride, the worlds second highest
                                    operating cable car ride that goes up to the height of 13,780 ft. from the base of Mt. Apharwat,
                                    which has the Gondola's ticket office.
                                    From here you are ferried to Phase II. You need to take another gondola lift to get to Phase II. The
                                    gondola passes over the beautiful pine forests, over lush green hilly terrain offering a panoramic
                                    view of the picturesque surroundings.
                                    Return to Srinagar hotel by night.
                                    Dinner and overnight stay in Srinagar.                                    
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
                                        <h4 class="hd09">Srinagar - Delhi By Flight Depart Delhi

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
                                                New Delhi,
                                                India
                                                                                             
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>10:00 - 18:00                                            </h6>

                                        </div>
                                    </div>
                                </div>
                                <p class="para-677">After breakfast, check-out from the hotel and proceed to Srinagar Airport to board a flight to Delhi.
                                    On arrival, take internal transit to reach international terminal to board your international flight.
                                    
                                    
                                </p>

                            </div>
                        </div>
                        <!-- nxt-page -->
                        <div class="container">
                            <h4 class="headerrr">What’s Included</h4>
                            <h6 class="headerr">Accommodation</h6>
                            <p class="para-6777">04 Nights accommodation at good 3 star hotels / houseboat on Twin / Double Sharing basis.
                                • Check-in Time : <br>
                                Throughout the trip, we request all our hotels prepare rooms in time as per your arrival time,
                                especially if you are reaching the hotel prior to normal check-in time. (In India, normal check-in is at
                                14 :00 hrs, check-out is at 10:00 hrs). <br>This may not be always possible to manage early check-in
                                for you; in that case you won't be able to check-in immediately on arrival at some hotels. Instead,
                                you can store your luggage and explore the new destination.<br>
                                • Pre/Post Accommodation :<br>
                                If you've purchased pre-trip or post-trip accommodation (if available), you may be required to
                                change rooms from your trip accommodation for these extra nights.<br>
                                Internet : Depending on the areas in which you travel, you may have limited access to the
                                Internet. Hoteliers often charge for the connection (hourly or daily).<br>
                                • The style of accommodation indicated is a guideline. On rare occasions, if the suggested hotels
                                are not available because of high demand, we book the alternate similar hotels for you.
                                </p>

                        </div>
                        <!-- NEXT PAGE -->
                        <div class="container">
                         
                            <h6 class="head-876">Meals</h6>
                            <p class="prvr">Breakfast at Delhi Hotel.
                                Daily Breakfast & Dinner at all the Hotels in Kashmir                                
                            </p>

                            <h6 class="head-876">Transport
                            </h6>
                            <p class="prvr">All transfers and sightseeing by an air-conditioned vehicle with an English speaking driver.
                                Drivers of our private vehicles are experienced with good knowledge of the road conditions and
                                well trained. The type of vehicles provided are as follows : <br>
                                Passenger Vehicle type <br>
                                • 1-2 persons Air-conditioned medium car such as Tata Indigo or similar <br>
                                • 3-4 persons Air-conditioned large car such as Toyota Innova or similar <br>
                                • 5-10 persons Air-conditioned mini-van such as Tempo Traveler or similar 

                            </p>
                            <h6 class="head-876">Others</h6>
                            <p class="prvr">04 Nights accommodation at good 3 star hotels / houseboat on Twin / Double Sharing basis.
                                Assistance at airports during arrivals and departures by GeTS Holidays Representative.
                                Daily Breakfast & Dinner at all the <br>
                                One time Shikara ride in Dal Lake, Srinagar<br>
                                Jeep ride for visiting Aru, Betab valley and Chandanwadi in Pahalgam<br>
                                Gondola ride upto second phase in Gulmarg<br>
                                Transportation in a Private Air-conditioned vehicle, with professional driver<br>
                                Bottled water in the car<br>
                                All currently Applicable taxes, tolls . parking charges, driver’s allowances
                                
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

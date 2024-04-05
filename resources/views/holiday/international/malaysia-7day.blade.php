<!--<!DOCTYPE html>-->
<!--<html lang="en">-->



<!--<head>-->
<!--    <meta charset="UTF-8" />-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
<!--    <title>Document</title>-->
<!--    <link rel="stylesheet" href="./style.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css"-->
<!--        integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"-->
<!--        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"-->
<!--        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />-->
<!--    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"-->
<!--        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">-->
<!--    </script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"-->
<!--        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">-->
<!--    </script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"-->
<!--        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">-->
<!--    </script>-->
<!--</head>-->

<!--<body>-->
<!--    <div class="container mt-5">-->
        
        
        @extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 5300px;padding-top:80px;">
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
                    <h6 class="spn-2">One Week Private
                        Malaysia Tour</h6>
                    <p>
                        <span class="seven">6N/7D</span> Flexi Package
                        <span class="sp-3">Amazing Malaysia Tour Inclusive Deal 6N</span>
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
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/package-image/malaysia.jpg') }}" alt="" style="margin-left: 50px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹199,913.12
                                    </h6>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">DURATION
                                    </h6>
                                    <h6 class="htpvp1">7 days</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Kuala Lumpur <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Pulau Langkawi
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
                                    <h6 class="htpvp12">Xian Marco Polo International Travel
                                        Service Co.,Ltd.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#233366
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
                        <p class="para-67">
                            Get an authentic feel for Malaysia as you travel with us through Kuala Lumpur, Malacca and
                            Langkawi. During this one week private tour, you will experience this country's
                            multi-cultures,
                            stunning beaches and vibrant cities, savor yummy foods and meet real locals. All the hotels
                            and
                            transfers are well organized so that you just enjoy yourself.
                        </p>
                        <hr>
                        <div id="wise">
                        <div class="container">
                            <h4 class="heading-30">Day Wise Details</h4>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 1:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09">Arrival in Kuala Lumpur, Private transfer to Malacca</h4>
                                </div>
                            </div>

                            <!-- next-page -->
                            <div class="container mt-5 mb-5">
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
                                            <h4 class="hkl">
                                                Kuala Lumpur,
                                                Malaysia
                                            </h4>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">Your English-speaking driver will pick you up at the airport
                                        with a placard and drive for about 2 hour
                                        (145km) to take you to the oldest city in Malaysia, Malacca. Upon arrival, check
                                        in the hotel.
                                    </p>
                                </div>
                            </div>
                    </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 80px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Malacca city tour, Private transfer back to Kuala Lumpur</h4>
                                    </div>
                                </div>
                                <p class="para-677">Today your driver will take you to visit Malacca. We will drive to
                                    visit the oldest Chinese temple in
                                    Malacca, Cheng Hoon Teng Temple. You can spend the visit time here freely. Then
                                    we'll go to the
                                    Stadthuys (Dutch Red Square) to have a free photo tour. Afterwards, walk by the St.
                                    Paul's Church
                                    and the Fortress Porta de Santiago and stroll around Jonker Street. You can taste
                                    the local snacks
                                    in Jonker Street. Lunch is on your own, and the driver will recommend the proper
                                    restaurant based
                                    on your preference <br>
                              In the afternoon we will go to Taman Rempah Jetty to take Malacca
                                    River Cruise for about 45
                                    minutes. After the visit, your driver will take you back to Kuala Lumpur and check
                                    in the hotel. <br>
                               <strong>Meals:</strong> Breakfast <br>
                                Accommodation: Traders Hotel Kuala Lumpur by Shangri-La (4 stars) or
                                    similar
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
                                        <h4 class="hd09">Kuala Lumpur tour with Batu Caves</h4>
                                    </div>
                                </div>
                                <p class="para-677">In the morning your driver will pick you up at the hotel and drive
                                    out of the city to visit the famous
                                    Hinduism holy site, the Batu Caves. To reach the main cave, also the Temple Cave,
                                    you need to
                                    climb the colorful 272 stairs and then have a free visit. After the visit, we will
                                    go back to Kula
                                    Lumpur by car and start the Kula Lumpur city tour. First we will go to the
                                    Independence Square and
                                    visit freely and take photos. Here you can see the appearance of Sultan Abdul Samad
                                    Building.
                                    Lunch is on your own. Your driver will recommend restaurants to you based on your
                                    preference. <br>
                                   In the afternoon we will move forward to the National Mosque. On the
                                    way your driver will introduce
                                    the spot for you, and you will visit by yourself. The last destination of today is
                                    the Petronas Towers.
                                    We will overlook the whole Kuala Lumpur city on the Sky Bridge on the 41st floor.
                                    The ticket to the
                                    observation deck is included. <br>
                                   <strong>Meals:</strong> Breakfast <br>
                              Accommodation: Traders Hotel Kuala Lumpur by Shangri-La (4 stars) or
                                    similar
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
                                        <h4 class="hd09">Fly to Langkawi with a stop at the King's Palace</h4>
                                    </div>
                                </div>
                                <p class="para-677">Your driver will send you to the airport to fly to Langkawi. On the
                                    way we will take a look at the
                                    outside of the King's Palace and leave you enough time to take photos. After the one
                                    hour flight,
                                    you will arrive at Langkawi. Your local driver there will pick you up with a placard
                                    and send you to
                                    the hotel. The rest of time is free for you. <br>
                               <strong>Meals:</strong> Breakfast <br>
                              Accommodation: Casa del Mar Langkawi (4 stars) or similar

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
                                        <h4 class="hd09"> Langkawi Tour</h4>
                                    </div>
                                </div>
                                <p class="para-677">Your driver will pick you up from the hotel at the appointed time
                                    and send you to Oriental Village.
                                    Upon arrival, you will take Langkawi Cable Car to reach Langkawi Sky Bridge, to
                                    enjoy the
                                    beautiful scene and take photos. After the visit, go back to Oriental Village. There
                                    are several
                                    restaurants and a duty-free shop. If time permits, you can spend some time at the
                                    duty-free shop.
                                    Lunch is on your own. The driver will recommend you proper restaurants based on your
                                    preference. <br>
                               In the afternoon your driver will send you to the dock at Kilim
                                    Geoforest Park to have a Mangrove
                                    River Cruise tour for about 2 hours. When the tourist boat floats in the Geoforest,
                                    you will see the
                                    eagles being fed and explore the caves full of bats, and visit the floating fish
                                    farm. After the cruise,
                                    we will send you back to the hotel. <br>
                               <strong>Meals:</strong> Breakfast <br>
                              Accommodation: Casa del Mar Langkawi (4 stars) or similar
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
                                        <h4 class="hd09">Free time at Langkawi</h4>
                                    </div>
                                </div>
                                <p class="para-677">This day is free for your to explore Langkawi. You can enjoy
                                    yourself on the beach, swim, have
                                    sunbath and appreciate the sunset. <br>

                                <strong>Meals:</strong> Breakfast <br>
                               Accommodation: Casa del Mar Langkawi (4 stars) or similar
                                </p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Airport see-off</h4>
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
                                            <h4 class="hkl">
                                                Pulau Langkawi,
                                                Malaysia
                                            </h4>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">Here comes the last day. Your driver will transfer you to the
                                    airport and see you off.
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-67">   6 overnight accommodation at the following well-selected hotels: <br>
                                  
                                        Ramada Plaza by Wyndham Malacca (5 stars) or similar <br>
                                   
                                   Traders Hotel Kuala Lumpur by Shangri-La (4 stars) or similar <br>
                                   Casa del Mar Langkawi (4 stars) or similar <br>
                                   Please note that the hotel supplement for public holidays and festivals is not
                                        included in the tour <br>
                                        price. If your travel date happens to meet any holidays, please contact us for
                                        the tour quotation</p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">You'll be escorted with English-speaking driver throughout the tour. The
                                    driver will explain
                                    attractions to you. Sometimes, the driver will explain beforehand, for you have to
                                    enter the spot by
                                    yourselves. For some attractions, they have their own guides to lead tourists to
                                    visit.</p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">6 breakfasts at hotels.</p>
                                <h6 class="head-876">Flights</h6>
                                <p class="prvr">Economy class airfare of Kuala Lumpur - Langkawi</p>
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Modern air conditioned coach with reclining seats, TV for showing DVDs, and toilet <br>
                                    Any public transport used as part of the tour (excludes free days)</p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">All taxes and fees <br>
                                    15 Experiences (including guided walking tours, orientation walks, driving tours of cities plus
                                    other exciting experiences) <br>
                                    Free Expat Explore tour souvenir – a memorable gift of your once in a lifetime trip </p>
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

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
                <div class="card shadow" style="border: none;  height: 7200px;padding-top:80px;">
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
                    <h6 class="spn-2">Hiking Utah's Big 5</h6>
                    <p>
                        <span class="seven">8N/9D</span> Flexi Package
                        <span class="sp-3">Amazing US Tour Inclusive Deal 8N</span>
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
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Pay your respects at the Dachau Concentration Camp</h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Visit the enchanting Christmas museum in Rothenburg
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Gaze at the awe-inspiring golden gates of Brandenburg
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Soak up the storybook atmosphere at Neuschwanstein

                    </h6>
                    
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/package-image/usa.jpg') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
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
                                    <h6 class="htpvp1">Las Vegas  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Las Vegas
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
                                    <h6 class="htpvp12">G Adventures Inc.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#176373
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
                        <p class="para-67">Utah is home to five of America's most compelling national parks. This nine-day tour will take you
                            through Utah's Big 5, as they're affectionately called, with incredible experiences in each. Boulder
                            over rocks to reach pinnacle views in Arches National Park, discover prehistoric petroglyphs, take
                            a dip in waterfalls that end in a natural swimming pool, and trek through the famous Narrows in
                            Zion National Park. If that all doesn't take your breath away, the stunning views certainly will.
                            
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
                                    <h6 class="hd09">Las Vegas
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
                                                Las Vegas,
                                                USA
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">Arrive at any time.
                                        There are no planned activities today until the evening welcome meeting, so check out the strip or
                                        Fremont Street.
                                        This tour leaves Las Vegas in the morning on Day 2; if you would like to spend any additional time
                                        here, we recommend booking pre-tour accommodation.
                                        Included Activities:
                                        - Welcome Meeting - Meet Your CEO and Group
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
                                        <h4 class="hd09">Las Vegas/Capitol Reef National Park (1D)                                        </h4>
                                    </div>
                                    </div>
                                          <p class="para-677"> Travel to Capitol Reef National Park. Known for its geologic monocline, discover the cliffs, canyons,
                                            petroglyphs and orchards that make up the park. Learn about the geology and the ancient
                                            inhabitants who created the petroglyphs still visible on the cliff walls. After dark, look up at Capitol<br>
                                            Reef’s starry night, designated a Gold Tier "International Dark Sky Park". <br>Meals Included:
                                            - Dinner <br>
                                            Transport:<br>
                                            - Private Vehicle 07:00 Hr(s)<br>
                                            Included Activities:<br>
                                            - Petroglyphs at Capitol Reef National Park<br>
                                            - Stargazing in a Dark Sky Park<br>
                                            Additional Notes: Please note several of the trails we use do not have water accessible. Please
                                            bring a bottles/bladder with a capacity of 3 litres. Unexpected trail or road closures may prevent
                                            hiking on some of the listed routes. Should this event arise, we will substitute with an alternative
                                            hike.
                                            
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
                                        <h4 class="hd09">Capitol Reef National Park/Moab (1B, 1L, 1D)
                                        </h4>
                                    </div>
                                </div>
                                <p class="para-677">Set off in the morning to hike through the Waterpocket Fold, an 87 mile "wrinkle" in the earth's
                                    surface. Climb through canyons and narrows to reach Cassidy Arch and panoramic views of this
                                    natural wonder. In the afternoon, continue to Moab, an adventure capital of the southwest and the
                                    gateway to both Canyonlands and Arches National Parks. Depending on the season and if you still
                                    have energy, head to Dead Horse State Park to take in the views from one of the most
                                    photographed spots in the region. <br>
                                    Meals Included: <br>
                                    - Breakfast <br>
                                    - Lunch <br>
                                    - Dinner <br>
                                    Transport: <br>
                                    - Private Vehicle 03:30 Hr(s) <br>
                                    Included Activities: <br>
                                    - Capitol Reef National Park Visit <br>
                                    - Waterpocket Fold and Cassidy Arch Hike <br>
                                    - Dead Horse Point State Park Visit <br>
                                    Additional Notes: Please note that weather, in particular the heat, can affect the order in which we
                                    do the activities of the day. Your CEO will be checking daily on local conditions and will alter the
                                    itinerary if the heat poses a risk to the health and safety of the group.                
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
                                        <h4 class="hd09">Canyonlands National Park (1B, 1L)
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">Travel to the Needles District of Canyonlands National Park. Stop at Newspaper Rock State
                                    Historical Monument, the largest known collection of petroglyphs in the Southwest. Spend the day
                                    hiking through desert lands to explore eroded towers of sandstone and fissures in the ground on
                                    the Joint Trail to Chesler Park. Return to Moab for a night in the town.<br>
                                    Meals Included: <br>
                                    - Breakfast<br>
                                    - Lunch<br>
                                    Transport:<br>
                                    - Private Vehicle 02:00 Hr(s)<br>
                                    Included Activities:<br>
                                    - Newspaper Rock State Historical Monument Visit<br>
                                    - Canyonlands National Park VIsit<br>
                                    - Joint Trail and Chesler Park Hike
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
                                        <h4 class="hd09">Arches National Park (1B, 1L, 1D)</h4>
                                    </div>
                                </div>
                                <p class="para-677">Rise early for sunrise from Delicate Arch Viewpoint. Enjoy breakfast in the park before exploring
                                    the densest concentration of arches in the world. Stand in awe at the over 2,000 sandstone arches
                                    ranging in size and shape that make up this park. Take a hike through Devils Garden to Landscape
                                    Arch, passing fins and spires en route. Continue to Double O Arch, bouldering over rocks to to
                                    reach the pinnacle views. Pass by the famous Balanced Rock, The Windows and Double Arches
                                    before heading west to camp for the night.<br>
                                    Meals Included:<br>
                                    - Breakfast<br>
                                    - Lunch<br>
                                    - Dinner<br>
                                    Transport:<br>
                                    - Private Vehicle 04:00 Hr(s)<br>
                                    Included Activities:<br>
                                    - Arches National Park Visit<br>
                                    - Devils Garden Hike<br>
                                    Additional Notes: Please note that weather, in particular the heat, can affect the order in which we
                                    do the activities of the day. Your CEO will be checking daily on local conditions and will alter the
                                    itinerary if the heat poses a risk to the health and safety of the group.
                                    
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
                                        <h4 class="hd09">Grand Staircase-Escalante National Monument/Bryce Canyon
                                            National Park (1B, 1L, 1D)</h4>
                                    </div>
                                </div>
                                <p class="para-677">Hit the road again, to travel along the scenic highway through the Grand Staircase-Escalante
                                    National Monument. Take in the mesas, canyons and arches that make up this diverse geological
                                    region. Set off on a hike and discover prehistoric petroglyphs and stunning waterfalls. Opt to cool
                                    off in the refreshing waters falling 38m (126 ft) to a natural swimming pool fed from Calf Creek
                                    Falls. Continue to Bryce Canyon National Park for the night. After the sun goes down, don't forget
                                    to look up to check out this renowned night sky while enjoying s'mores around the fire.<br>
                                    Meals Included:<br>
                                    - Breakfast<br>
                                    - Lunch<br>
                                    - Dinner<br>
                                    Transport:<br>
                                    - Private Vehicle 02:00 Hr(s)<br>
                                    Included Activities:<br>
                                    - Lower Calf Creek Falls Hike
                                </p>
                            </div>
                            <hr>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Bryce Canyon National Park/Zion National Park (1B, 1L, 1D)</h4>
                                    </div>
                                </div>
                                <p class="para-677">Set off early in Bryce Canyon National Park, and stare in wonder at the largest collection of
                                    hoodoos in the world as the sun rises! Take a hike into the amphitheater of Queen's Garden and
                                    Navajo Loop to walk amongst the hoodoos, walls and fins that make up this geological wonder.
                                    Continue to Zion National Park, traveling past towering cliffs and massive canyon walls, stopping at
                                    several viewpoints along the way. Once in Zion the group will hike along the Watchman Trail,
                                    located near the Zion Canyon Visitor Center. Enjoy panoramic views of the Springdale area.<br>
                                    Meals Included:<br>
                                    - Breakfast<br>
                                    - Lunch<br>
                                    - Dinner<br>
                                    Transport:<br>
                                    - Private Vehicle 02:30 Hr(s)<br>
                                    Included Activities:<br>
                                    - Bryce Canyon National Park Visit<br>
                                    - Queen's Garden and Navajo Loop Hike<br>
                                    - Watchman Trail Hike
                                </p>
                            </div>
                            <hr>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Zion National Park (1B, 1L)</h4>
                                    </div>
                                </div>
                                <p class="para-677">Spend the day discovering Zion National Park. First hike to Scout Lookout, a challenging, but
                                    rewarding 4 mile hike which passes through the iconic Walter's Wiggles before reaching the
                                    lookout point along a flat saddle with incredible views of the Zion Canyon.
                                    Head to the valley floor to trek through the river on one of the most popular hikes in the park, the
                                    Narrows. Admire monumental sandstone cliffs of cream, pink, and red that tower into the sky and
                                    opt to turn around at any point. Experience diverse plant and animal life in this narrow slot canyon
                                    as the park transitions from desert to forest. Gaze at the awe-inspiring beauty of the high plateaus,
                                    striking towers, temples, mesas, and the earth's tallest-known sheer sandstone walls. After
                                    returning to camp, head into the charming town of Springdale to celebrate the accomplishments of
                                    the last week. <br>
                                    Meals Included:<br>
                                    - Breakfast<br>
                                    - Lunch<br>
                                    Included Activities:<br>
                                    - Zion National Park Visit<br>
                                    - Scout Lookout Trail<br>
                                    - The Narrows Hike<br>
                                    Additional Notes: Please note that unexpected trail closures due to risk of flooding may arise in
                                    The Narrows. Should this happen, we will substitute with an alternative hike.<br>
                                    While water shoes are available to rent you may have to carry them with your for the remainder of
                                    the day. We recommend bringing your own lightweight water shoe/hiking shoe that you would also
                                    be comfortable hiking in for the rest of the day
                                </p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 9:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">  Zion National Park/Las Vegas (1B)</h4>
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
                                                Las Vegas,
                                                USA
                                                
                                            </h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">Take the short drive from Zion to Las Vegas. Tour ends on arrival. Onward travel should be booked <br>
                                    no earlier than 3pm.n <br>
                                    Meals Included:<br>
                                    - Breakfast<br>
                                    Transport:<br>
                                    - Private Vehicle 03:30 Hr(s)<br>
                                    Included Activities:<br>
                                    - Departure Day
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-6777"> Hotel (1 nt), participation camping (7 nts).
                                        </p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">1 CEO (Chief Experience Officer) throughout. </p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">7 breakfasts, 6 lunches, 5 dinners</p>
                                
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Air-conditioned private vehicle, hiking, walking.
                                    </p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">Your Welcome Moment: Welcome Meeting - Meet Your CEO and Group. Petroglyphs at Capitol
                                    Reef National Park. Stargazing in a Dark Sky Park. Newspaper Rock State Historical Monument
                                    Visit. Lower Calf Creek Falls Hike. Queen's Garden and Navajo Loop Hike. Watchman's Trail Hike.
                                    Scout Lookout Hike. The Narrows Hike. Entrance fees to all national parks and monuments with
                                    hiking and walking excursions. Self-inflating mattresses and dome tents. All transport between
                                    destinations and to/from included activities.
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

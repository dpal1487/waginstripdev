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
                <div class="card shadow" style="border: none;  height: 7000px;padding-top:80px;">
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
                    <h6 class="spn-2">Vietnam at a Glance -
                        7 Days</h6>
                        <p>
                            <span class="seven">6N/7D</span> Flexi Package
                            <span class="sp-3">Amazing Vietnam Tour Inclusive Deal 6N</span>
                        </p>

                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Challenge yourself and crawl through the Cu Chi Tunnels
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>LExplore the striking limestone cliffs and caves in Halong Bay
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Be entertained by a performance at a water puppet theatre
                    </h6>

                    <div class="pvt-6 mt-5">
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
                            <div class="col-sm-5">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹52,755.06
                                    </p>
                                </div>

                            </div>
                            <div class="col-sm-3">
                                <div class="bd-12">
                                    <h6 style="padding-left: 6px; color: black; padding-top: 15px;">DURATION
                                    </h6>
                                    <h6 class="htpvp1">7 days</h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">IDEAL AGE
                                    </h6>
                                    <h6 class="htpvp1">From 6 to 96 year olds</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Ho Chi Minh City  <i class="fa fa-arrow-right" aria-hidden="true"></i>
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
                                    <p class="htpvp1">Indochina Legend Travel Company Limited
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#95481
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
                        <p><i class="fa-solid fa-quote-left"></i></p>
                        <p class="para-67">
                           <strong> Ho Chi Minh City:</strong> City tour including entry to the War Remnants Museum & Cu Chi Tunnels. <br>
                           <strong> Mekong Delta:</strong> Take an excursion to Mekong Delta, with a boat trip on the Mekong River to visit
                            Cat Be floating market. <br>
                           <strong> Hanoi:</strong> Hanoi, a city of lakes, shaded boulevards and public parks, is the capital of Vietnam. It is a
                            very attractive city with French-style architecture. Take part in Water Puppet show. <br>
                           <strong> Halong Bay:</strong> Overnight cruise in a traditional Junk boat, discover caves & fishing villages, explore
                            the lagoon. <br>
                          <strong> Mai Chau: </strong> Escape from City to Bakhan Village Resort - the best brand new Mountain resort in the
                            Northwest of Vietnam
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
                                    <h4 class="hd09">Arrive in Ho Chi Minh City</h4>
                                </div>
                            </div>
                            </div>

                            <!-- next-page -->
                            <div class="container ">
                                <div class="bd-12">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h4 class="head-632">Start Point</h4>
                                        </div>
                                        <div class="col-sm-1">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="hkl">
                                                Airport pick up,
                                                Tan Son Nhat International Airport, Trường Sơn, Quận Tân
                                                Bình, Hồ Chí Minh 736900, Vietnam

                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-6771 mt-5">Our driver picks up you at Tan Son Nhat airport and transfers you to the hotel for check-in.
                                        Stay overnight in Ho Chi Minh city (meals not included for this day).
                                     
                                    </p>
                                    <p style="font-style: italic; padding-left: 15px;">Distance: Tan Son Nhat Airport Saigon centre: 7 8km (~30-minute drive) <br>
                                        --------------------------------------------------- <br>
                                        Option 1:Accommodation: Liberty Parkview Saigon Hotel 3* or similar <br>
                                        --------------------------------------------------- <br>
                                        Option 2: Accommodation: Majestic Saigon Hotel 5* or similar</p>


                                </div>
                            </div>

                            <!-- page-2 -->
                            <div class="container " style="padding-top: 300px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Cu Chi - Ho Chi Minh City (B, L)
                                        </h4>
                                    </div>
                                </div>
                                <p class="para-677">8:30 am This morning enjoy a city tour that includes the Reunification Hall, formerly known as the
                                    Presidential Palace. It was towards this modern building that Communist tanks rolled on the
                                    morning of April 30, 1975, as Saigon fell. This fascinating building is filled with history still fresh in
                                    the minds of many. The tour also includes the Old Post Office, the Notre Dame Cathedral, the Jade
                                    Emperor Pagoda or War museum. Next, we visit the Cu Chi Tunnels, the incredible network of
                                    tunnels that once stretched for 210 miles. This underground complex was built by guerilla fighters
                                    beginning in 1940 and construction continued throughout the Vietnam War. Stay overnight in Ho Chi
                                    Minh city. (Breakfast, Lunch included)
                                </p>
                                <p style="font-style: italic; padding-left: 15px;">Distance: Saigon Cu Chi Tunnel: 75 km (~ 1.5 hour drive)<br>
                                    --------------------------------------------------- <br>
                                    Option 1: Accommodation: Liberty Parkview Saigon Hotel 3* or similar <br>
                                    --------------------------------------------------- <br>
                                    Option 2: Option 2: Accommodation: Majestic Saigon Hotel 5* or similar</p>

                            </div>

                            <!-- page-3 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Ho Chi Minh City - Hanoi (B) </h4>
                                    </div>
                                </div>
                                <p class="para-677">TAfter breakfast at the hotel, you will have free time until leaving for Hanoi by flight (Pick-up at the
                                    hotel at around 3 hours before departure flight time)
                                    Upon arrival in Noi Bai airport, be warmly welcomed and transfer to visit the capital of Vietnam -
                                    the city of lakes, of peace and historical sites. The out-side trip from the car covers Hanoi
                                    Westlake, Flower Market Quang Ba Truc Bach Lake, Hoan Kiem Lake, and cultural city landmarks
                                    as Temple of literature, Ho Chi Minh mausoleum (all outside view, sitting on the car).
                                    Later we walk through the busy traffic to the water puppet theatre and enjoy a performance of the
                                    famed traditional art form created by village farmers around the Red River Delta region. (Optional)
                                    Stay overnight in Hanoi. (Breakfast included)
                                    
                                </p>
                                <p style="font-style: italic; padding-left: 15px;">Distance: Noi Bai airport - Hanoi city center: 30 km (~ 45 minute drive)<br>
                                    --------------------------------------------------- <br>
                                    Option 1: Accommodation: TK-123 Hanoi Hotel 3* or similar
                                    <br>
                                    --------------------------------------------------- <br>
                                    Option 2: Accommodation: Hilton Opera Hanoi Hotel 5* or similar</p>


                            </div>


                            <!-- page-4 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 4:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Hanoi - Halong Bay (B, L, D)s</h4>
                                    </div>
                                </div>
                                <p class="para-677">08:00 - 08:30 Pick up at your hotel. Enjoy the interesting scenery on the 3.5 hours-way drive to
                                    Halong Bay. 12:30 pm: Embark the cruise for check-in and have lunch. Enjoy the buffet lunch
                                    onboard while the cruise sails passing by magnificent sceneries of the World Heritage Site.
                                    Explore Sung Sot Cave Hiking up and down 600 steps to the magnificent limestone formations of
                                    the biggest and most marvellous cave in Halong Bay. Then, back to the vessel and continue
                                    sailing. Enjoy your relaxing time aboard, among the magnificence of the UNESCO World Heritage
                                    Site. A wide range of fine wines or spirits is served in the open-air bar on the sundeck. Participate
                                    in cooking class under the attentive instruction of our top chef, to discover the Vietnamese cuisine
                                    of traditional spring rolls. Time for dinner and evening entertainments: bar, spa, squid fishing and
                                    overnight on the cruise. Stay overnight on Halong Bay Cruise (Deluxe Cabin).
                                    (Breakfast, Lunch, Dinner included)                                    
                                </p>
                                <p style="font-style: italic; padding-left: 15px;">Distance: Hanoi central Halong Bay: 180 km (~ 3.5 hour drive)                                    <br>
                                    --------------------------------------------------- <br>
                                    Option 1: Accommodation: Garden Bay Cruises 3* or similar

                                    <br>
                                    --------------------------------------------------- <br>
                                    Option 2: Accommodation: Paradise Sails 5* or similar</p>


                            </div>
                            <!-- page-5 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Halong - Hanoi (B, L)</h4>
                                    </div>
                                </div>
                                <p class="para-677">Wake up early to enjoy the stunning sunrise on the Bay. Begin a new day with a Tai Chi session on
                                    the sundeck. Coffee & tea with assorted homemade pastries will be served onboard. Relax or visit
                                    Titop Island. You can take part in an array of exciting activities: swimming, kayaking, trekking, etc.
                                    Passengers enjoy Vietnamese breakfast while the cruise passing by other beautiful parts of the
                                    Bay. Check out & back to the Tourist Wharf. Return back to Hanoi, stop on the way for restroom
                                    and go shopping with a variety of local hand-made products. Arrive in Hanoi. Check in hotel and
                                    stay in Hanoi.                                    

                                </p>
                                <p style="font-style: italic; padding-left: 15px;"><br>
                                    --------------------------------------------------- <br>
                                    Option 1: Accommodation: TK-123 Hanoi Hotel 3* or similar
                                    <br>
                                    --------------------------------------------------- <br>
                                    Option 2: Accommodation: Hilton Opera Hanoi Hotel 5* or similar</p>


                            </div>
                            <!-- page-6 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">: Hanoi - Mai Chau Valley - Ba Khan Village Resort (B, L, D)
                                        </h4>
                                    </div>
                                </div>
                                <p class="para-677">08h30. Depart from Hanoi. Enjoy a scenic drive along one of the most beautiful country road to the
                                    peaceful Bakhan Village via Hoa Binh City.
                                    10:30: Take a short break for tea/coffee in the middle way.
                                    12h00. Lunch at Bakhan Village Restaurant. Check-in room.
                                    15h00. Afternoon walk around the Muong Village of Khan Ha and village’s West hill for a breath
                                    taking view of the valley.
                                    19h00. Dinner time at Bakhan Restaurant.
                                    20h00 -21h00. Enjoy the unique traditional dance by Villagers (Optional) </p>
                                  
                                    <p style="font-style: italic; padding-left: 15px;">  Overnight at Bakhan Village Resort<br>
                                        --------------------------------------------------- <br>
                                        Accommodation: Bakhan Village Resorts 3* (Local best)

                                        <br>
                                        --------------------------------------------------- <br>
                                        </p>
                               


                            </div>
                            <!-- page-7 -->
                            <div class="container" >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Bakhan Village - Hanoi/Concludes (B, L)</h4>
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
                                        <div class="col-sm-4">
                                            <h6 class="hkl">
                                                Trip ends in Hanoi Old Quarter,
                                                Quận Hoàn Kiếm, Hanoi, Vietnam
                                            </h6>

                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>08:00 - 17:00</h6>

                                        </div>


                                    </div>
                                </div>
                                <p class="para-677">Day: Bakhan Village - Hanoi (B, L) <br>
                                    09h00. Take another great workout in nature with our East Mountain trek route. <br>
                                    11h00. Back to the resort. Rest and relax <br>
                                    12h00. Check out. Enjoy lunch at the resort <br>
                                    13h30. Depart for Hanoi. <br>
                                    17h00. Arrive Hanoi Old Quarter. Trip ends at your hotel (arranged by your own). Good bye and
                                    see you again! <br>
                                    

                                </p>

                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h4 class="headerr">Accommodation</h4>
                                <p style="font-style: italic; padding-left: 15px;"> Accommodations based on twin/double sharing with daily buffet breakfast. All taxes and service
                                    charges included.
                                    <br>
                                    --------------------------------------------------- <br>
                                    Basic 3 stars Hotels Accommodation:<br>
                                    Saigon: Liberty Parkview Saigon Hotel 3* or similar<br>
                                    Hanoi: TK-123 Hanoi Hotel 3* or similar<br>
                                    Mai Chau: Bakhan Village Resorts 3*<br>
                                    Halong Bay: Garden Bay Cruises 3* or similar<br>
                                    --------------------------------------------------- <br>
                                    --------------------------------------------------- <br>
                                    Upgrade to Luxury 5 stars Hotels Accommodation: <br>
                                    Saigon: Majestic Saigon Hotel 5* or similar <br>
                                    Hanoi: Hilton Opera Hanoi Hotel 5* or similar <br>
                                    Mai Chau: Bakhan Village Resorts (Local best) <br>
                                    Halong Bay: Paradise Sails 5* or similar <br>
                                    --------------------------------------------------- <br>
                                    Please be aware that all accommodations are subject to change until 4-6 weeks before the
departure date. Final accommodation details will be provided to you with your finalised travel
documents.
 
                                    </p>
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container">
                                <h6 class="head-876">Guide</h6>
                                <ul>
                                    <li >Experienced English-speaking driver and guide throughout tour
                                        </li>
                                </ul>
                              
                                <h6 class="head-876">Meals</h6>
                                <ul>
                                    <li>6 Breakfasts.
                                        </li>
                                        <li> 4 Lunches.</li>
                                        <li>2 Dinners</li>
                                        <li>Other meals are not included to give you the maximum flexibility in deciding where, what and with
                                            whom to eat.</li>
                                </ul>
                               
                                <h6 class="head-876">Flights
                                </h6>
                                <ul>
                                    <li>Domestic Flight Ticket: Ho Chi Minh City - Hanoi. (Economic Class, all taxes and service
                                        charges included) - 20kg packed luggage + 7kg handed luggage</li>
                                </ul>
                                <h6 class="head-876">Transport
                                </h6>
                              <ul>
                                <li>Air-conditioned coach throughout tour.
                                    </li>
                              </ul>
                                <h6 class="head-876">Others</h6>
                                <ul>
                                    <li> Arrival transfer</li>
                                        <li> Entrance fees & sightseeing tickets</li>
                                            <li> Vietnam Visa Approval Letter</li>
                                                <li> All taxes & services charge</li>
                                        </li>

                                </ul>
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

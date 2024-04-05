@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">

        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;  height: 4300px;">
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
                    <h6 class="spn-2">Lonavala & Khandala
                        Hills & Caves (3
                        Days)</h6>
                        <p>
                            <span class="seven">2N/3D</span> Flexi Package
                            <span class="sp-3">Amazing  Lonavala & Khandala Tour Inclusive Deal 2N</span>
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
                                        <h6 class="psd-1">Call Us: +91 7669988012</h6>
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
                            <img src="{{ URL::to('/assets/images/package-image/lonavala-highway-01.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹33,266.00
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp190 pt-4">DURATION
                                        </h6>
                                        <h6 class="htpvp1">3 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 5 to 90 year olds    </h6>
                                    </div>
                                </div> -->

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Mumbai <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Mumbai
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
                                        <p class="htpvp1">Agora Voyages OPC Pvt. Ltd.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#194761
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
                            <p class="para-67">On this package tour enjoy mesmerizing glimpses of Lonavla & Khandala and visit some
                                prominent spots of the location. Visit the Karla Caves & the Bhaja Caves the ancient Buddhist
                                shrines carved out of the rock. Explore the Lohagad an ancient fort rises to an elevation of 1,033m
                                above sea level. Private transport from mumbai will remain on disposal at your services during the
                                trip. We provide local English speaking guide during sightseeing visit to Cave & Fort.                                
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
                                        <h4 class="hd09"> Mumbai - Lonavala / Khandala (85kms/ 2hrs approx)</h4>
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
                                                <h6 class="hkl">As per flight schedule arrival transfer from airport to
                                                    hotel.,
                                                    Chhatrapati Shivaji International Airport, Western Express
                                                    Hwy, Mumbai, Maharashtra, India
                                                    
                                                </h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div> -->
                                        </div>
                                        <p class="para-6771 mt-5">Pick up from your Mumbai city hotel or airport and drive to Lonavala / Khandala. Check in at hotel. <br>
                                            Rest time free and easy to relax and explore the surrounding nature. Overnight at hotel.
                                            Lonavala - a part of the Sahyadri hills, offers an alluring and bewitching experience of nature's most
                                            gifted region. Surrounded by dense forests, waterfalls, dam alongside lakes, Lonavala is a mustvisit if you admire nature and want a gateway to having a soulful weekend. <br>
                                            Khandala - another beautiful hill station that’s actually found just a few miles away from Lonavala.
                                            This town is found at an elevated height, overlooking a scenic, green, and misty valley. It’s a real
                                            favorite for those from the nearby cities who are looking to enjoy a spot of hiking; there are some
                                            great walking routes that lead to panoramic viewpoints.
                                                                                      
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 260px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Lonavala / Khandala</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Breakfast at hotel, sightseeing in Lonavala & Khandala visitKarla Cave - a complex of ancient Buddhist Indian rock-cut caves at Karli near Lonavala. It is just
                                        10.9 Kilometers away from Lonavala. The shrines were developed over the period – from the 2nd
                                        century BC to the 5th century AD. <br>
                                        Bhaja Cave - a group of rock-cut caves dating back to the 2nd century BC close to Karla Caves.
                                        The caves are 400 feet above the village of Bhaja, on an important ancient trade route running from
                                        the Arabian Sea eastward into the Deccan Plateau (the division between North India and South
                                        India). The inscriptions and the cave temple are protected as a National Monument, by the
                                        Archaeological Survey of India. It belongs to the Hinayana Buddhism sect in Maharashtra. The
                                        caves have a number of stupas.<br>
                                        Lohagad (Iron Fort) - one of the many hill forts of Maharashtra Lohagad rises to an elevation of
                                        1,033 m (3,389 ft) above sea level. The fort is connected to the neighboring Visapur fort by a small
                                        range. Lohagad has a long history with several dynasties occupying it at different periods of time:
                                        Satavahanas, Chalukyas, Rashtrakutas, Yadavas, Bahamanis, Nizams, Mughals and Marathas.
                                        Rest time free and easy to relax and enjoy the nature. Overnight at hotel.<br>
                                        
                                    </p>
                                </div>
                                <hr>
                                <!-- page- -->
                              

                                <!-- page-4 -->
                                
                               
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 3:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Lonavala / Khandala - Mumbai (85kms/ 2hrs approx)</h4>
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
                                                    As per flight schedule departure transfer from hotel to
                                                    airport.,
                                                    Chhatrapati Shivaji International Airport, Western Express
                                                    Hwy, Mumbai, Maharashtra, India
                                                                          
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Breakfast at hotel. Drive to Mumbai and drop off to your hotel or airport.
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">Hotels used or similar for 2 nights accommodation <br>
                                    Lonavala x 2 nights <br> 
                                    3* - Chandralok Hotel/ Viola Beacon Resort <br>
                                    4* - Countryside - Resort by Meritas/ Citrus Hotel <br>
                                    5* - Fariyas Resort Lonavala/ The Machan
                                    </p>                    
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <p class="prvr">Private English speaking guide in each cities on sightseeing days</p>
                                    <!-- <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Daily breakfast in the hotel
                                    </p> -->

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Private Chauffer driven air-conditioned deluxe car for airport transfers, sightseeing & excursion as
                                    per program.
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">1 Time monuments entrances of sightseeing mentioned in the itinerary. <br>
                                        Bottled water in car <br>
                                        Applicable GST (government taxes).
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

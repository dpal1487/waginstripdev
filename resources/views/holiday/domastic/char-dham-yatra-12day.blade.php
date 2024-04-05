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
                    <h6 class="spn-2">12 Days Char Dham
                        Yatra ( Pilgrimage
                        Sites in India)</h6>
                        <p>
                            <span class="seven">11N/12D</span> Flexi Package
                            <span class="sp-3">Amazing Char Dham Yatra Tour Inclusive Deal 5N</span>
                        </p>
                    <!-- <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Rickshaw ride through the French Quarter and explore the "36 Streets" of Hanoi
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Ride bicycles into the countryside and enjoy a hands-on cooking lesson from the locals

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Kayak, swim and explore the remarkable caves of the beautiful UNESCO Halong Bay
                    </h6> -->
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
                            <img src="{{ URL::to('/assets/images/package-image/char-dham-yatra-11route.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row ">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹137,747.89

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 class="htpvp190 pt-3">DURATION
                                        </h6>
                                        <h6 class="htpvp1">12 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 5 to 90 year olds    </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Delhi<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Delhi
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
                                        <p class="htpvp1">Avtar india tours
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#215493
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
                            <p class="para-67">The four temples that comprise Char Dham are Yamunotri Dham, Gangotri Dham, Badrinath
                                Dham and Kedarnath Dham. Yamunotri Dham, named after the Goddess Yamuna, is the first
                                Dham en route the yatra.                                                   
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
                                        <h4 class="hd09">Arrival Delhi</h4>
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
                                                    Client Own Ward Location Airport,
                                                    Railway Station ,
                                                    Indira Gandhi International Airport
                                                    (DEL), Airport Rd, New Delhi, Delhi,
                                                    India                        
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00 - 00:00</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771">Welcome to New Delhi! You will be picked up from your point of arrival at the Delhi Airport, Train
                                            Station .tranfer to Hotel , Hotel Night Stay in Delhi Hotel.                                            
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
                                            <h4 class="hd09">Delhi to Haridwar 225 km 5 hrs drive</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">after breakfast pick-up from Delhi Hotel proceed to Haridwar,Afternoon you reach in Haridwar,after
                                        Check in evening time you visit ganga Arti at Har Ki Poudi Thousands of people from all round the
                                        world do make a point to attend this prayer on their visit to Hardwar.after arti return to Hotel Night
                                        Stay in Hotel.
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
                                            <h6 class="hd09">Haridwar To Barkot 200 km 8 hrs drive</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Early morning wake up call for ganges bathing and Surya Namaskar at Saptrishi Ghat, breakfast
                                        and later leave for journey to first of your Dham, Yamunotri, daughter of the Sun god, Surya and
                                        consciousness, Sangya. The Yamuna, like the Ganges,en route eat lunch in best Reasturant,after
                                        check in the hotel you The rest of the day is free to relax and store your energy for the Hill Yatra of
                                        Yamunotri the next day. Overnight stay at Barkot.                                                 
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
                                            <h4 class="hd09">Barkot - Yamunotri – Barkot 36 km drive & 5 km Trek (one side)</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Early morning, Drive to Jankichatti/Phoolchatti, trek start from here to Yamunotri (6kms). Either by
                                        walk or by horse or by Doli at own cost. The trek passes through a lush green valley, a profusion of
                                        conifers, rhododendrons, cacti, and several species of Himalayan shrubs.Return time take lunch at
                                        jankichatti,after lunch back to hotel Barkot,dinner in hotel Night Halt in Barkot Hotel
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Barkot to Uttarkashi 90km 4 hrs drive</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After brakfast check out from Hotel and Drive to Uttarkashi. Visit Vishwanath Temple & Others.
                                        Check-in Hotel. Rest day at leisure.Dinner in Hotel Night Halt in uttarkashi
                                    </p>
                                </div>
                                <hr>
                              
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Uttarkashi - Gangotri - Uttarkashi 100km 3-4 hrs each side</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Early morning drive to Gangotri, en route at Gangnani take a holy dip in Garam Kund, further drive
                                        to Gangotri via beautiful Harsil Valley. Harsil is famous for its natural beauty and for the majestic
                                        views of the Deodar trees, and mountains. On arrival at Shree Gangotri, take a holy dip in the
                                        sacred river Ganges which is also called Bhagirathi at its origin. Perform Pooja and Darshan, after
                                        that relax for some time in the lovely surroundings. Return back to Uttarkashi. Overnight stay at
                                        Uttarkashi.                                        
                                    </p>
                                </div>
                                <hr>
                              
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Uttarkashi to Sitapur/ Rampur 250 km 7 hrs drive</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">early morning check out from hotel with post brekfast drive to Rampur to Srinagar 100 km where
                                        you take lunch, after lunch continue drive for Rampur,Check in Hotel Dinner in hotel overnight stay
                                        in Rampur Hotel.
                                    </p>
                                </div>
                                <hr>
                              
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Rampur- Gaurikund-Kedarnath 32 km drive +19 km Trek 8 hrs</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">The morning after breakfast drive to Gaurikund, start your trek from Gaurikund to Kedarnath (by
                                        Pony / Doli / Helicopter at your own cost). Visit Kedarnath Temple. After temple Darshan trek down
                                        to Gaurikund. Later, drive to Rampur. Overnight stay at Rampur.                                        
                                    </p>
                                </div>
                                <hr>
                              
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 9:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Rampur to Badrinath 218 km 6 hrs drive</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">The morning after breakfast, drive to Badrinath. Check in to the hotel in Badrinath. Pilgrims after
                                        having a bath in the Taptkund have the Darshan of Badrivishal & Aarti in the evening.
                                        Brahamakapal is significant for Pinddan Shraddh of ancestors (Pitrus). There are other interesting
                                        sightseeing spots like Mana village, Vyas Gufa, Mata Murti Temple, Charanpaduka, Bhimkund and
                                        the "Mukh" of the Saraswati River. Just within the three km of Badrinath Ji. Overnight stay at
                                        Badrinath.                                        
                                    </p>
                                </div>
                                <hr>
                              
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 10:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Badrinath to Rudraprayag 160 km 6 hrs drive</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Morning after breakfast, driver for Rudraprayag via Joshimath. Visit on the way Narsingh Temple in
                                        Joshimath later drive to Rudaraprayag . Check into the hotel arrival in .Dinner in Rudaraprayag
                                        Hotel Overnight stay at Rudaraprayag.                                        
                                    </p>
                                </div>
                                <hr>
                              
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 11:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Rudrapryag to Haridwar 120 km 5 hrs drive</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">The morning after breakfast, drive for Haridwar via Rishikesh. Rishikesh 'place of sages' is a
                                        celebrated spiritual town on the bank of Ganga and is surrounded by Shivalik range of the
                                        Himalayas on three sides. It is said that when Raibhya Rishi did hard penances,Later visit –
                                        Laxman Jhulla, Ram Jhulla. drive to Haridwar,Night halt in Haridwar
                                    </p>
                                </div>
                                <hr>
                              
                              
                                
                              
                                <!-- page-5 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 12:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Haridwar to Delhi 225 km 5 hrs drive                                            </h4>

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
                                                    Client Own Ward Location Airport, Railway Station or
                                                    Hotel,
                                                    Delhi, India                                      
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast Drive to Delhi,Driver drop you ownword your destination Hotel,Station or Airport.           
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">3 Star Hotel or Budght Hotel
                                    </p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <!-- <h6 class="head-876">Guide</h6>
                                   <p class="prvr">Breakfast and Dinner at Hotel
                                    </p> -->
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Breakfast and Dinner at Hotel
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Sedan Car 1 to 3 People<br>
                                    SUV Car 4 to 6 People<br>
                                    Tempoo Travller 7 to 12 people
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Arrival and departure transfers <br>
                                        Bottled water<br>
                                        Wi-fi in vehicle
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

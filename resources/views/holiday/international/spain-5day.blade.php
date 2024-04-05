@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 4100px;padding-top:80px;">
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
                    <h6 class="spn-2">Andalucia & Toledo, 5
                        days on Thursdays</h6>
                        <p>
                            <span class="seven">4N/5D</span> Flexi Package
                            <span class="sp-3">Amazing Andalucia & Toledo Tour Inclusive Deal 4N</span>
                        </p>
                    <!-- <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Admire the terracotta wonder of the Palace of the Winds
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>SMarvel at the City Palace, Jantar Mantar and Hawa Mahal

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Fall in love with the scattered pink hues of Jaipur
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Marvel at the glorious monument of love, the Taj Mahal -->
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
                            <img src="{{ URL::to('/assets/images/package-image/spain.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹50,731.88
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">5 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp1">From 2 to 85 year olds    </h6>
                                    </div>
                                </div> -->

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Madrid<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Madrid
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
                                        <p class="htpvp1">Transvia Madrid SL
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#209249
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
                            <!-- <p class="para-67">Savour shared moments with locals enjoying sangria in sun-dappled courtyards, zesty paella and
                                the sounds of the Spanish guitar. On this journey, you’ll explore the wonders of Spain, from the
                                ornate walls of the Alhambra to the Gothic Cathedral and Giralda Bell Tower in Seville.                
                            </p> -->
                            </div>
                            </div>
                            <div id="wise">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 1:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">(THURSDAY) MADRID- CACERES-SEVILLE (560kms)
</h4>
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
                                                    Please be ready on time waiting inside
                                                    the local operator office,
                                                    Calle De Ferraz 3, 28008 Madrid,
                                                    Madrid, Spain
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>07:45</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771 mt-5">Departure from our bus terminal at 7:45/8:00am towards the region of Extremadura and arrival to
                                            Caceres. Time at leisure to know its Plaza Mayor and to walk through the old city and its famous
                                            medieval quarter, very well preserved and considered as World Heritage place. Lunch at your own.
                                            Continuation southwards to Andalucia and arrival to Seville.
                                            Dinner and accommodations.                                            
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 120px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> (FRIDAY) SEVILLE</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Breakfast. Morning sightseeing tour including Maria Luisa Park, Plaza de España, the exterior of
                                        the city stunning Cathedral and its bell tower called Giralda and the typical neighbourhood of Santa
                                        Cruz with its streets squares and narrow alleys. If yoy wish, you can optionally navigate the
                                        Guadalquivir river, during which you will enjoy a panoramic view of the Gold Tower and Expo 92 or
                                        visit to the Maestranza bullring.
                                        Lunch at a restaurant. In the evening also as an optional activity you can attend a flamenco show.                            
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
                                            <h6 class="hd09"> (SATURDAY) SEVILLE -RONDA-COSTA DEL SOL (190kms)</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Breakfast. Then departure to the Route of the White Villages and Ronda. Free time. Continuation
                                        to Costa del Sol. Dinner and accommodations.
                                        .                                        
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
                                            <h4 class="hd09"> (SUNDAY) COSTA DEL SOL-GRANADA (180kms)</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Breakfast. Departure to Granada. Visit to the spectacular group of the monuments of the
                                        Alhambra and Generalife, former residence of the Moorish kings with its magnificent fountains,
                                        gardens and arches.
                                        Dinner and accommodations.
                                        Optional visit to the caves of Sacromonte and attend a typical show of flamenco.                                                           
                                    </p>
                                </div>
                                <hr>
                               
                             
                             
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> (MONDAY) GRANADA-TOLEDO-MADRID (446kms)
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
                                                    End of the tour at the bus terminal in Ferraz 3,
                                                    Calle De Ferraz 3, 28008 Madrid, Madrid, Spain                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Breakfast and departure towards the Imperial city of Toledo, full of history and monuments. Lunch
                                        and city sightseeing throughout its narrow streets and alleys.
                                        Continuation back to Madrid. Arrival and end of our services.
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                    
                                    <p class="prvr">    Hotels in: <br>
                                        Seville: Silken Al Andalus Palace **** or similar<br>
                                        Costa del Sol: Sol Principe (Torremolinos) **** or similar<br>
                                        Granada: Los Angeles**** or similar
                                        
                                    </p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">Guide in English and Spanish. <br>
                                    •Sightseeing tour with local guide in Seville, Granada and Toledo
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Daily buffet breakfast (except first day) <br>
                                        2 lunches + 3 dinners
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Transportation by air conditioned coach with free WIFI onboard
                                    </p>
                                    <h6 class="head-876">Insurance</h6>
                                    <p class="prvr">Travel insurance included

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

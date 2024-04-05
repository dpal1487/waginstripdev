@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <!--<link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;height: 4300px;">
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
                    <h6 class="spn-2">Dharamsala Transfers+Hotel+Sightseeing</h6>
                        <p>
                            <span class="seven">2N/3D</span> Flexi Package
                            <span class="sp-3">Amazing Dharamsala Tour Inclusive Deal 3N</span>
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
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/dharamsala.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹23,344.00
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
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
                                        <h6 class="htpvp1">Dharamsala <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Dharamsala
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
                                        <h6 class="htpvp1">#184563

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
                            <p class="para-67">This package is specially designed for the travelers who would like to book the city tour with airport
                                transfers, sightseeing and accommodation. This tour include private airport transfer with
                                assistance, 2 Nights hotels accommodation with breakfast, 1 full day guided city tour with
                                monuments entrances and activities charges mentioned in the itinerary.                                
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
                                        <h4 class="hd09">Dharamsala

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
                                                <h6 class="hkl">As per flight schedule arrival transfer
                                                    from airport to hotel.,
                                                    Dharamsala-Kangra/Gaggal Airport
                                                    (DHM), Dharamsala, Shahpur,
                                                    Himachal Pradesh, India
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:00 - 18:00</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771">On arrival at Dharamsala airport meet with our office executive assistance and transfer to hotel
                                            (hotels check in time 1200hr afternoon, early check in subject to rooms availability). Rest time free
                                            for personal activities relax. Overnight at hotel                                        
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
                                            <h4 class="hd09"> Dharamsala</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Breakfast at hotel. Visit McLeodganj, which is home to most of the Tibetan exiles. At McLeodganj,
                                        the Tibetans have established many monasteries, schools and temples. McLeodganj has a
                                        distinctly different character, with its brightly painted buildings, Buddhist temples, prayer flags
                                        fluttering in the air and saffron monks and nuns hurrying along the streets. The main Buddhist
                                        temple or Tsuglagkhang (cathedral) is a five-minute walk from the main bazaar. Said to resemble
                                        the one in Lhasa, the temple is surrounded by red and gold prayer wheels that are set in motion by
                                        devotees to scatter prayers in the air. <br>
                                        Dal Lake: lake surrounded by Deodar trees, with temple of Durgeshwara Mahadev by the
                                        lakeside. <br>
                                        Bhagsunath Temple old temple of Bhagsunath with a fresh waterspring. Further, about 0.5 km is
                                        beautiful Bhagsunath waterfall which is enough to sooth one’s eyes and mind. <br>
                                        Church of St. John in the Wilderness, built in 1860, worth a visit for its beautiful stained glass
                                        windows, the church was severely damaged in a major earthquake that rocked the region in 1905.
                                        Rebuilt subsequently, the church has old bells that had been cast in London and installed in 1915.
                                        Lord Elgin, one of the few Viceroys of India who died in office, lies buried here. Overnight at Hotel.
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
                                            <h4 class="hd09">Dharamsala
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
                                                    As per flight schedule departure transfer
                                                    from hotel to airport.,
                                                    Dharamsala-Kangra/Gaggal Airport
                                                    (DHM), Dharamsala, Shahpur,
                                                    Himachal Pradesh, India                       
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:00 - 18:00                                                </h6>
    
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Breakfast at hotel. As per flight schedule transfer to airport to board flight for onward destination.
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">Hotel used or similar for 2 nights accommodation <br>
                                    Dharamsala x 2 nights <br>
                                    3* - Grace Hotel/ Shiva Sanctuary - An Amritara Private Hideaway<br>
                                    4* - Fortune Park Moksha/ The Divine Hima<br>
                                    5* - Radisson Blu Resort/ Hyatt Regency Resort
                                    
                                    </p>                    
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <p class="prvr">Service of English speaking tour guide on sightseeing days (local guide in each city), as per
                                        program. (Other language guide can be organized on request at additional cost)
                                        </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Only breakfast included at hote
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Transport by private air conditioned deluxe car for airport transfer, sightseeing and excursion as
                                    per program.                                    
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Entrances to monuments mentioned in the itinerary (almost all places of tourist interest) <br>
                                        Bottled drinking water in vehicle <br>
                                        All applicable taxes       
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

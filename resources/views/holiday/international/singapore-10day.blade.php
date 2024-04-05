
@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 4500px;padding-top:80px;">
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
                    <h6 class="spn-2">Singapore Explorer</h6>
                    <p>
                        <span class="seven">3N/4D</span> Flexi Package
                        <span class="sp-3">Amazing SingaporeTour Inclusive Deal 3N</span>
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
                        <img src="{{ URL::to('/assets/images/package-image/singapore.png') }}" alt=""
                            style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                        <div class="row mt-5">
                            <div class="col-sm-5">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹159,531.31

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">DURATION
                                    </h6>
                                    <h6 class="htpvp1">4 days</h6>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="bd-12">
                                    <h6 class="htpvp">IDEAL AGE
                                    </h6>
                                    <h6 class="htpvp11">From 5 to 90 year olds
                                    </h6>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Singapore <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Singapore
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
                                    <p class="htpvp1">Sherpa Expedition Teams

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#192205

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
                        <p class="para-67">Singapore is a vibrant and modern country that offers tourists non-stop
                            entertainment and places
                            to visit. On this tour you will get to see Parliament House, the Victoria Theater and the
                            Old
                            Supreme Court Building. You will also take a guided city tour and experience Singapore’s
                            various
                            ethnicities, such as Chinese, Malay, Indian and Peranakan societies that have widely
                            influenced
                            Singapore’s reputation for exotic foods and customs. A feature of this tour is a visit to
                            the
                            magnificent botanic gardens with its massive 60,000 plus display of orchids.
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
                                    <h4 class="hd09">Arrival in Singapore</h4>
                                </div>
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
                                                Airport Pick up by private car,
                                                Singapore Changi Airport (SIN), Airport
                                                Boulevard, Singapore, South East,
                                                Singapore
                                            </h6>
                                        </div>
                                        <div class="col-sm-3 mt-5">
                                            <h6><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                00:00 - 23:00</h6>

                                        </div>
                                    </div>

                                    <p class="para-6771">On arrival at Changi Airport you will be met by our
                                        representative and taken to your city hotel. Your
                                        first impression will be how remarkably clean and green this island country is.
                                        Singapore is also a
                                        dynamic business centre in South East Asia. It also has an extensive and modern
                                        transport
                                        system that connects all points of the island.
                                        .
                                    </p>

                                </div>
                            </div>

                            <!-- page-2 -->
                            <div class="container " style="padding-top: 150px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Singapore Sightseeing</h4>
                                    </div>
                                </div>

                                <p class="para-677">Your city tour begins at Raffles Landing Site, where Sir Stamford
                                    Raffles first landed in 1819 in
                                    search of a new trading port for the British East India Company. As you walk through
                                    the heart of
                                    Singapore you will be in awe at the remarkable architecture, ranging from its
                                    colonial buildings in
                                    contrast with some of the world’s most modern buildings. Colonial architecture is
                                    apparent in the
                                    former Parliament House, the Victoria Theatre (originally built as the Town Hall in
                                    1862) and the Old
                                    Supreme Court Building. Our next port of call is a visit to the bustling localities
                                    of Chinatown and
                                    Little India, with a smorgasbord of smells emanating from the foods and spices. Next
                                    on the tour is
                                    a visit to the UNESCO listed Singapore Botanic Gardens where you can wander through
                                    the
                                    National Orchid Garden that features more than 60,000 orchids. If you are feeling
                                    energetic, you
                                    may wish to attend the (optional) Night Safari, a rare and unique experience in a
                                    jungle
                                    atmosphere.

                                </p>


                            </div>

                            <!-- page-3 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Sightseeing around singapore</h4>
                                    </div>
                                </div>
                                <p class="para-677">Singapore is famous for its food. Singaporeans regularly eat out.
                                    This morning you can get to
                                    sample a selection of the city’s array of foods that include Malay, Chinese, Indian,
                                    Pakistani and
                                    Peranakan. An interesting place we visit is the exclusively Malay Geylang Serai
                                    market where you
                                    can enjoy such popular dishes as Roti, Prata and Thosai with a frothy glass of the
                                    local drink - Teh
                                    Tarik. We then continue to the communities of Joo Chiat and Katong with their
                                    distinct pre-war shop
                                    houses. If you keep your eyes peeled you may see the popiah masters who stand over
                                    hot
                                    griddles twirling dollops of dough in mid-air to make paper-thin wrappers for fresh
                                    spring rolls. This
                                    evening you may wish to join a group heading out for a 'Night Out at Marina Bay'.
                                    Another option
                                    tonight is to head to the Gardens by the Bay for its unique Rhapsody of Lights Show.
                                    From here
                                    you can visit the Marina Bay Sands Skypark where you will have some stunning views
                                    of
                                    Singapore at nigh

                                </p>


                            </div>
                        <div class="container" >
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 4:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09">Final Departure from Singapore</h4>
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
                                            Airport drop by private car,
                                            Singapore Changi Airport (SIN), Airport
                                            Boulevard, Singapore, South East,
                                            Singapore
                                        </h6>

                                    </div>
                                    <div class="col-sm-3 mt-5">
                                        <h6><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            00:00 - 23:00</h6>

                                    </div>


                                </div>
                            </div>

                            <p class="para-677">After your whirlwind tour of Singapore you will be taken to Changi
                                Airport for your onward flight.
                                Singapore is a showcase and represents the best of east and west. We look forward to
                                hearing
                                from you in the future and a return trip to this prosperous country.

                            </p>

                        </div>
                        </div>
                    

                        <!-- nxt-page -->
                        <div class="container >
                            <h4 class="headerrr">What’s Included</h4>
                            <h4 class="headerr">Accommodation</h4>
                            <ul>
                                <li>
                                    3 nights of hotel accommodation in (3-star category hotel)
                                </li>

                            </ul>
                        </div>

                        <!-- NEXT PAGE -->
                        <div class="container" >
                            <h6 class="head-876">Guide</h6>
                            <p class="prvr">City tour Guide</p>
                            <h6 class="head-876">Meals</h6>
                            <p class="prvr2">3 meals a day during the tour</p>
                            <h6 class="head-876">Transport
                            </h6>
                            <ul>
                                <li>Luxury air-conditioned coach or alternative transportation (such as rail journeys)</li>
                                <li> Airport transfers on the first and last day of your guided holiday</li>
                            </ul>
                            <h6 class="head-876">Others
                            </h6>
                            <ul>
                                <li>Audio Headsets for flexible sightseeing</li>
                                    <li>  Optional Experiences and free time</li>
                                        <li>  All porterage and restaurant gratuities</li>
                                            <li>  Must-see sightseeing and surprise extras</li>
                                                <li>  An expert Travel Director and separate Driver</li>
                                                    <li>  Handcrafted Highlights</li>
                            </ul>

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
                            <button class="btn btvn" style="background-color:  rgb(234, 100, 10); color: #fff; margin-left: 270px !important; margin-top: 50px !important; border: 1px solid  rgb(234, 100, 10);">BOOK NOW</button>
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

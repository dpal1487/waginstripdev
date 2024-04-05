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
                <div class="card shadow" style="border: none;  height: 4600px;padding-top:80px;">
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
                    <h6 class="spn-2">Christmas on the
                        Elbe</h6>
                    <p>
                        <span class="seven">6N/7D</span> Flexi Package
                        <span class="sp-3">Amazing Germany Tour Inclusive Deal 6N</span>
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
                                    <h3 class="heading-three">Wagnistrip Holidays</h3>
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
                        <img src="{{ URL::to('/assets/images/package-image/germany.jfif') }}" alt=""
                            style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹247,674.18
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
                                    <h6 class="htpvp1">Berlin <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Dresden
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
                                    <h6 class="htpvp12">CroisiEurope Alsace Croisieres

                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#97103
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
                            <p class="para-67">Embark on a cruise along the Elbe this Christmas. You will pass through
                                tremendous cities such
                                as Berlin with its numerous Christmas markets, and Dresden where you will be able to
                                attend an
                                unforgettable Christmas Mass. You will also be surprised by the charming cities of
                                Magdeburg,
                                Wittenberg or Meissen which are dotted with the most authentic Christmas markets.

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
                                        <h6 class="hd09">20 December: BERLIN TEGEL(3)
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
                                                    Berlin,
                                                    Germany
                                                </h6>

                                            </div>

                                        </div>
                                        <p class="para-677 mt-5">Passengers are welcome to board our ship at 6:00 p.m.
                                            After comfortably settling into your cabins,
                                            we'll introduce our crew at a welcome cocktail before dinner.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 100px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">21 December: BERLIN TEGEL</h4>
                                    </div>
                                </div>
                                <p class="para-677"> Join us for a tour of Berlin to catch a glimpse of all the must-see
                                    sites and visit the city's Christmas
                                    market. In the afternoon, join us for a tour of Cecilienhof Palace. After the end of
                                    World War II in
                                    Europe, the Potsdam Conference - attended by Stalin, Churchill and Truman - was held
                                    in the
                                    palace
                                </p>

                            </div>


                            <hr>

                            <!-- page-3 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> 22 December: MAGDEBURG</h4>
                                    </div>
                                </div>
                                <p class="para-677">We'll spend the morning cruising the river. This afternoon, take a
                                    guided tour of Magdeburg. Enjoy
                                    some free time on your own at the local Christmas market before returning to the
                                    ship.
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
                                        <h4 class="hd09">23 December: LUTHERSTADT WITTENBERG
                                        </h4>
                                    </div>
                                </div>
                                <p class="para-677">We'll leave on a guided tour of Meissen, famous for its trademark
                                    porcelain. We'll then spend some
                                    time browsing the magnificent Christmas market in the old town. We'll return to the
                                    ship and spend
                                    the afternoon cruising to Dresden. This evening, revel in our festive Christmas Eve
                                    dinner on
                                    board. Midnight Mass will be celebrated in Dresden(1-2).
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
                                        <h4 class="hd09">24 December: MEISSEN - DRESDEN</h4>
                                    </div>
                                </div>
                                <p class="para-677">We'll leave on a guided tour of Meissen, famous for its trademark
                                    porcelain. We'll then spend some
                                    time browsing the magnificent Christmas market in the old town. We'll return to the
                                    ship and spend
                                    the afternoon cruising to Dresden. This evening, revel in our festive Christmas Eve
                                    dinner on
                                    board. Midnight Mass will be celebrated in Dresden(1-2)
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">: 25 December: DRESDEN</h4>
                                    </div>
                                </div>
                                <p class="para-677">Christmas day services will take place at the Dresden Frauenkirche
                                    for those who would like to
                                    attend. The afternoon will be dedicated to a tour of Dresden on foot. Tonight, we'll
                                    enjoy a
                                    symphony of the music of Johann Sebastian Bach at the Dresden Frauenkirche.
                                </p>
                            </div>
                            <hr>
                            <!-- page-6 -->


                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> 26 December: DRESDEN(3)</h4>
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
                                                Dresden,
                                                Germany
                                                Berlin, Germany
                                            </h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">Enjoy one last buffet breakfast on board before disembarking at 9:00
                                    a.m. End of our services.
                                </p>
                            </div>
                        </div>

                        <!-- nxt-page -->
                        <div class="container">
                            <h4 class="headerrr">What’s Included</h4>
                            <h6 class="headerr">Accommodation</h6>

                            <p class="para-6777"> Double-occupancy cabin with shower in bathroom
                            </p>

                        </div>

                        <!-- NEXT PAGE -->
                        <div class="container">
                            <h6 class="head-876">Guide</h6>
                            <p class="prvr">Official welcome from the captain and crew
                            </p>
                            <h6 class="head-876">Meals</h6>
                            <p class="prvr">7 Your cruise with all meals from dinner the first evening to breakfast on
                                the final day
                                Onboard drinks included (except for drinks from our special lists)
                                Welcome cocktail <br>
                                Gala dinner <br>
                                Christmas Eve dinner including wine <br>
                                All meals included - DRINKS INCLUDED with meals and at the bar <br>
                                Refined French cuisine - Gala dinner and evening - Welcome cocktail</p>

                            <h6 class="head-876">Transport
                            </h6>
                            <p class="prvr">Ship
                            </p>
                            <h6 class="head-876">Others</h6>
                            <p class="prvr">Double-occupancy cabin with shower in bathroom <br>
                                All entertainment<br>
                                Excursions mentioned in the program<br>
                                Assistance from our onboard multi-lingual host/hostess<br>
                                Christmas present<br>
                                Concert at the Dresden Frauenkirche<br>
                                Travel assistance and repatriation insurance<br>
                                All port fees.<br>
                                Free Wi-Fi onboard<br>
                                Headsets are included for excursions<br>
                                Onboard activities<br>
                                All port fees included<br>
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

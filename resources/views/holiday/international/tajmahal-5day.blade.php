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
                <div class="card shadow" style="border: none;  height: 4700px; padding-top:80px;">
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
                    <h6 class="spn-2">India's Top Selling
                        Golden Triangle India
                        Tour w/ Meals and
                        Sunrise Taj Mahal</h6>
                    <p>
                        <span class="seven">4N/5D</span> Flexi Package
                        <span class="sp-3">Amazing Taj Mahal Tour Inclusive Deal 4N</span>
                    </p>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Admire India's first
                        marble tomb
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Visit the fascinating
                        Taj Mahal

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Enjoy traditional
                        Indian cuisine
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Explore the Palace of
                        Winds</h6>
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
                            <img src="{{ URL::to('/assets/images/taj-mahal.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹17,117.47

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
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
                                        <h6 class="htpvp190">From 5 to 99 year olds </h6>
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
                                        <p class="htpvp1">Swastik India Journeys
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#88881
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
                                <p class="para-67">Visit India and follow the famous Golden Triangle. Enjoy the perfect
                                    introduction to India's three
                                    most popular destinations - Delhi, Agra and Jaipur - as we explore the icons and
                                    discover the
                                    secrets of this fascinating region. Experience the history of massive forts, the
                                    opulence and
                                    splendour of Rajasthan's palaces, the bustle and buzz of markets and bazaars, and
                                    the traditions
                                    of a heritage homestay. Travel through a land full of contrasts on this compact
                                    India tour, jampacked with unforgettable highlights.
                                    This tour is a guaranteed departure, so even if you are the only one booked onto
                                    this tour, you will
                                    still be guaranteed to depart!
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
                                        <h4 class="hd09"> Delhi:
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
                                                Hotel Florence,
                                                2719, Bank Street, Behind Karol Bagh
                                                Police Station, Karol Bagh, New Delhi,
                                                Delhi 110005, India
                                            </h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>09:00</h6>

                                        </div>
                                    </div>
                                    <p class="para-6771 mt-5">Your private driver in an air-conditioned car will pick you up
                                        from the hotel you are staying in. Meet
                                        your private tour guide and begin your sightseeing tour of Delhi. Enjoy visit to
                                        Jama Mosque.When
                                        you reach the mosque,explore the interior with your guide. Next, visit Raj Ghat
                                        the place where the
                                        father of the Nation, Mahatama Gandhi was cremated. Next, Visit Qutub Minar,a
                                        UNESCO World
                                        Heritage Site. Qutub Minar is an excellent example of Afghan Architecture
                                        constructed with marble
                                        and red sandstone. And then stop at UNESCO World Heritage-listed Humayuns Tomb.
                                        Next, visit
                                        India Gate, memorial built in the year 1931 to commemorate the Indian soldiers.
                                    </p>
                                </div>
                            </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 250px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Delhi - Agra:</h4>
                                    </div>
                                </div>
                                <p class="para-6777">After breakfast at the hotel, drive to Agra. Once you've settled in
                                    at your hotel, enjoy lunch and then
                                    meet your private tour guide. Start your sightseeing with a visit to the Agra Fort,
                                    one of the finest
                                    Mughal forts in India. Agra Fort, built by Emperor Akbar in 1565, is a massive red
                                    sandstone fort
                                    on the bank of Yamuna River. Your guide will explain the history of Agra Fort. Next,
                                    visit Itmad-udDaulah, a tomb that has a special place in the chronicles of both
                                    histories as well as architecture.
                                    Itmad-ud-Daulah is actually a mausoleum that overlooks the Yamuna River. Admire the
                                    very first
                                    tomb in India that was made entirely out of Marble. Next, visit Mehtab Bagh, which
                                    is a series of 11
                                    parks on the Yamuna's east bank. <br>
                                    Overnight stay at hotel in Agra.
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
                                        <h6 class="hd09">Agra - Jaipur:</h6>
                                    </div>
                                </div>

                                <p class="para-677">Today enjoy Sunrise view of fascinating Taj Mahal - A Symbol of
                                    Love. Your guide in Agra will meet
                                    you at the Taj Mahal and will show you around the monument. Take time to admire the
                                    majestic
                                    and the most beautiful buildings in the world. Return to the hotel and have
                                    breakfast. After breakfast
                                    drive to Jaipur. Check-in at your hotel upon arrival in Jaipur, and enjoy your
                                    evening at leisure.
                                    Overnight stay at hotel in Jaipu
                                </p>
                            </div>
                            <!-- page-4 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 4:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Jaipur Sightseeing:</h4>
                                    </div>
                                </div>
                                <p class="para-677">After breakfast at the hotel, meet your private tour guide and start
                                    sightseeing of Jaipur by visiting
                                    Amber Fort. Your guide will explain about the rich history of Amber Fort. Next,
                                    visit City Palace in
                                    the heart of Jaipur is known for its blend of Rajasthani and Mughal architecture.
                                    Enjoy fine
                                    collection of textiles, costumes and armor at the City Palace.Next, visit Hawa Mahal
                                    or the Palace
                                    of Winds. It was constructed for the royal ladies to watch the royal processions
                                    without being seen.
                                    Finally, view the stargazing observatory of Jantar Mantar, built by the renowned
                                    astronomer,
                                    Maharaja Jai Singh. Overnight stay at hotel in Jaipur
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
                                        <h4 class="hd09"> Jaipur - Delhi:
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
                                                Hotel Florence,
                                                2719, Bank Street, Behind Karol Bagh
                                                Police Station, Karol Bagh, New Delhi,
                                                Delhi 110005, India
                                        </div>
                                    </div>
                                </div>
                                <p class="para-677">After breakfast at the hotel, you'll be taken back to Delhi and
                                    directly transferred to the airport.
                                </p>

                            </div>
                        </div>
                        <!-- nxt-page -->
                        <div class="container">
                            <h4 class="headerrr">What’s Included</h4>
                            <h6 class="headerr">Accommodation</h6>
                            <p class="para-6777">Accommodation using deluxe room in 3 star or 4 star hotels</p>

                        </div>
                        <!-- NEXT PAGE -->
                        <div class="container">
                            <h6 class="head-876">Guide</h6>
                            <p class="prvr">English Speaking Guide during sightseeing at all cities
                            </p>
                            <h6 class="head-876">Meals</h6>
                            <p class="prvr">Daily breakfast at hotels <br>
                                Lunch during Jaipur sightseeing <br>
                                Lunch En-route Agra to Jaipur

                            </p>

                            <h6 class="head-876">Transport
                            </h6>
                            <p class="prvr">Surface Transportation by air-conditioned Toyota Etios with experienced
                                chauffeur as per the
                                itinerary
                            </p>
                            <h6 class="head-876">Others</h6>
                            <p class="prvr">Sightseeing as per the itinerary ( However you have the flexibility to
                                explore more ) <br>
                                Personal assistance by our representative & Offices during arrival and departure <br>
                                All interstate taxes, permits, parking, road tax, toll taxes and fuel charges etc are
                                included <br>
                                All government applicable taxes and service charges <br>
                                This tour is a guaranteed departure, so even if you are the only one booked onto this
                                tour, you
                                will still be guaranteed to depart!
                            </p>
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

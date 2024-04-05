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
                <div class="card shadow" style="border: none; height: 4800px;padding-top:80px;">
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
                    <h6 class="spn-2">England Discovery</h6>
                    <p>
                        <span class="seven">4N/6D</span> Flexi Package
                        <span class="sp-3">Amazing England Tour Inclusive Deal 5N</span>
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
                        <img src="{{ URL::to('/assets/images/package-image/england.jpeg') }}" alt=""
                            style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹107,846.83

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">DURATION
                                    </h6>
                                    <h6 class="htpvp1">6 days</h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">IDEAL AGE
                                    </h6>
                                    <h6 class="htpvp1">From 6 to 80 year olds </h6>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">London<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        London
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
                                    <p class="htpvp12">Magellan ltd

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#224943
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- next-page -->
                    <!-- second-page -->
                    <div class="container mt-5">
                        <h4 class="heading-30">Itinerary</h4>
                        <h3 class="head-1">Introduction</h3>
                        <p class="para-67">Discover the best of England in just six days.
                            You will visit the most interesting spots of the city of London and discover some unique
                            sites in the
                            vicinity.
                        </p>
                        <div class="container mt-5 mb-5">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 1:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09"> Arrival
                                    </h4>
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
                                            <h6 class="hkl">
                                                London,
                                                England
                                            </h6>
                                        </div>
                                    </div>
                                    <p class="para-677">Independent transfer to your hotel
                                        The rest of the day is at leisure.
                                        Overnight in London

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
                                        <h4 class="hd09">The Best of London</h4>
                                    </div>
                                </div>

                                <p class="para-677">Today, reach Victoria Square and meet your guide. <br>
                                    Start your quintessential London tour off with an amazing panoramic tour into the
                                    city’s most iconic
                                    locations. Passing Parliament Square where you’ll see the famous Westminster Abbey,
                                    Big Ben
                                    and the Houses of Parliament and many more of London’s most prominent landmarks. You
                                    will visit
                                    St Paul’s Cathedral. Dating back to the 17th century, St Paul’s is a real sight to
                                    behold. Learn
                                    London’s tremendous religious history and take in the sights of the crypts and
                                    majestic paintings as
                                    you uncover all that St Paul’s has to offer.
                                    ( On Sunday, Due to church services, there will be no guiding inside the cathedral)
                                    Continue to Buckingham Palace and enjoy the iconic Changing of the Guard ceremony
                                    from a
                                    privileged position. Finally, enjoy an Extended Visit to the Tower of London. The
                                    impressive Tower
                                    of London is one of the capital’s most iconic milestones with its magnificent
                                    history making the city
                                    what it is today.
                                    Overnight in London
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
                                        <h4 class="hd09">Stratford, Oxford, Cotswolds and Warwick Castle</h4>
                                    </div>
                                </div>

                                <p class="para-677">Immerse yourself in the most iconic landscape of England, visiting
                                    the birthplace of Shakespeare,
                                    the Cotswolds and the magic Warwick Castle. <br>
                                    Start from the Cotswolds, the ideal English countryside with rolling hills, sleepy
                                    villages, and
                                    market towns dotting the landscape as far as the eye can see. Continue to the
                                    fabulous Warwick
                                    Castle, a stronghold dated back to 1068, offering an authentic medieval experience
                                    in the 21st
                                    century. <br>
                                    The next stop is at Stratford-Upon-Avon, William Shakespeare's city, where you will
                                    visit the poet's
                                    birthplace and the house where he grew up. Finally, reach Oxford for a walking tour.
                                    Oxford is renowned for its university, the oldest university in the English speaking
                                    world. During this
                                    guided walking tour, you will see the great Bodleian Library and discover unspoilt
                                    narrow alleyways,
                                    ancient squares, towering spires, and the 13th-century University Church of St Mary
                                    the Virgin.
                                    After visiting Oxford, you will leave the university city and return to London.
                                    Overnight in London
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
                                        <h4 class="hd09">Windsor Castle, Stonehenge and City of Bath</h4>
                                    </div>
                                </div>
                                <p class="para-677">Reach the meeting point and motor comfortably out of London.
                                    Your first stop will be at Windsor Castle, the largest and oldest occupied castle in
                                    the world, dating
                                    back almost 1000 years and one of the official residences of Her Majesty Queen
                                    Elizabeth II.
                                    During your visit, you can see the elegant Royal State Apartments. You will also see
                                    St George’s
                                    Chapel, the final resting place of 10 monarchs and the royal wedding venue for
                                    Prince Harry and
                                    Meghan Markle. <br>
                                    Continue to the mysterious Stonehenge, a place that has to be viewed to be believed.
                                    Standing on
                                    Salisbury Plains for approximately 5,000 years, these stones are surrounded by
                                    thousands of
                                    theories about its function and meaning. A religious temple? A Bronze Age burial
                                    ground? Possibly
                                    it was an astronomical clock? <br>
                                    After lunch, visit the city of Bath, located on the banks of the River Avon and the
                                    first city in
                                    England to be declared a UNESCO World Heritage Site. Have the opportunity to
                                    discover more
                                    about the exquisite city of Bath with a walking tour. Led by an expert guide
                                    throughout, you will
                                    learn of Bath’s rich history and get to venture down the idyllic streets whilst you
                                    discover
                                    fascinating facts about the city.
                                    Overnight in London
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
                                        <h4 class="hd09"> Visit Kent, The Garden of England
                                        </h4>
                                    </div>
                                </div>

                                <p class="para-677">The Kent, known as the 'Garden of England', is a trove of history,
                                    experiences, landscape and good
                                    food. <br>
                                    You will start with a private visit to Leeds Castle. Surrounded by 500 acres of
                                    parkland and a
                                    glossy lake, you couldn't imagine a castle in a more beautiful setting! Home of the
                                    Tudors, Henry
                                    VIII once lived here with Catherine of Aragon.
                                    Later you will visit the magnificent Canterbury where the Romans built walls,
                                    Chaucer wrote
                                    medieval tales, and Marlowe penned Elizabethan plays. Or follow pilgrim steps
                                    through silent
                                    cloisters at the towering cathedral, a UNESCO World Heritage Site. Here, you'll
                                    visit the high
                                    cathedral and learn the stories of the pilgrims who flocked to the church following
                                    Thomas Becket's
                                    murder in 1170. <br>
                                    Finally, reach the White Cliffs of Dover, a truly iconic landmark.
                                    The white chalk face symbolises home and wartime defence, but they have so much more
                                    to
                                    offer; stunning views, a quiet walk, a wealth of wildlife, and extraordinary
                                    history. <br>
                                    Before returning to London, you will reach Greenwich. This World Heritage Site is
                                    packed with
                                    intriguing maritime history. The legendary tea clipper ship Cutty Sark, for example,
                                    is moored here.
                                    You will also see the outstanding Christopher Wren-designed Old Royal Naval College.
                                    End your day on a relaxing note and see some top London landmarks during this River
                                    Thames
                                    boat ride. Before disembarking at Embankment Pier, you'll float past iconic Tower
                                    Bridge and the
                                    soaring St Paul's Cathedral along the route.
                                    Overnight in London

                                </p>
                            </div>
                            <hr>
                            <!-- page-6 -->

                            <!-- page-7 -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">London</h4>
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
                                        <div class="col-sm-6">
                                            <h6 class="hkl">
                                                London,
                                                England
                                            </h6>

                                        </div>


                                    </div>
                                </div>

                                <p class="para-677">Independent departure transfe
                                </p>
                            </div>

                            <!-- nxt-page -->
                            <!-- <div class="container mt-5">
                                <h4 class="headerrr">What’s Included</h4>
                                <h4 class="headerr">Accommodation</h4>
                                <ul>
                                    <li>
                                        5 Night accommodation in 3 Star Hotel
                                    </li>
                                    
                                </ul>
                            </div> -->

                            <!-- NEXT PAGE -->
                            <!-- <div class="container" style="padding-top: 10px;">
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">Partially guided</p>
                                <p class="prvr">Half-Day Dubai Guided City Tour</p>
                                <p class="prvr">Full-Day Abu Dhabi Guided City Tour</p>
                                <p class="prvr">Desert Safari driver cum guide</p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr2">Daily Breakfast in Hotel</p>
                                <h6 class="prvr1">Buffet Dinner in Dhow Cruise

                                </h6>
                                <h6 style="padding-left: 26px;">Buffet Dinner in Desert Safari</h6>
                                <h6 class="head-876">Transport
                                </h6>
                                <ul>
                                    <li>Return Airport Transfer on Private basis</li>
                                        <li> Desert Safari in 4x4 sharing basis land cruiser</li>
                                            <li>Dinner Cruise transfer in sharing basis vehicle</li>
                                                <li>Dubai City Tour in sharing basis vehicle</li>
                                                    <li>Abu Dhabi City Tour in sharing basis vehicle</li>
                                                        <li> Burj Khalifa two way transfer in Private basis vehicle</li>
                                </ul>
                                
                            </div> -->
                            <!-- NEXT PAGE -->

                            <!-- NEXT PAGE -->
                            <div id="book">
                                <div class="container">
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

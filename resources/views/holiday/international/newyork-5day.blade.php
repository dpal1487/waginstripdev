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
                <div class="card shadow" style="border: none; background: rgb(240, 243, 245); height: 4400px;padding-top:80px;">
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
                    <h6 class="spn-2">Spotlight on New
                        York City Holiday
                        (Holiday)</h6>
                        <p>
                            <span class="seven">4N/5D</span> Flexi Package
                            <span class="sp-3">Amazing New
                                York Tour Inclusive Deal 6N</span>
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
                    <div class="container" >
                        <h4 class="spn-2">Trip Overview</h4>
                        <img src="{{ URL::to('/assets/images/package-image/new-york.jpg') }}" alt=""
                            style="width: 600px; margin-left: 50px; margin-top: 40px; height: 400px;">
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹209,157.13

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
                           
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">New York City<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        New York City
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
                                    <p class="htpvp1">Collette Travel Services
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#100541

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
                        <p class="para-67"> Experience the “the Big Apple” alive with the holiday spirit on this spectacular tour. From
                            Rockefeller Center to Greenwich Village, New York City shines even brighter during the holiday
                            season. Spend four nights in the heart of Midtown close to Central Park’s skating rink and Times
                            Square all dressed up for the holidays. Take your seat and watch the curtain rise for an exciting
                            Broadway show. See the Christmas Spectacular at Radio City Music Hall, featuring the worldfamous Rockettes! Ferry to the Statue of Liberty and Ellis Island. See the Empire State Building
                            and Central Park. Visit the poignant 9/11 Museum and 9/11 Memorial. Enjoy plenty of free time on
                            your own to shop and see the elaborate 5th Avenue holiday window displays and the Christmas
                            tree at Rockefeller Center. Get ready to “start spreading the news!”                                                  
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
                                    <h4 class="hd09">New York City, New York - Tour Begins</h4>
                                </div>
                            </div>
                            </div>

                            <!-- next-page -->
                            <div class="container mt-5 mb-5">
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
                                                New York City,
                                                USA                                                
                                            </h6>
                                        </div>
                                    </div>                               
                                    <p class="para-6771">"Start spreading the news,” because today you arrive in America’s most exciting metropolis as it
                                        shines during the holiday season. Your New York City getaway is filled with shopping, sightseeing,
                                        endless entertainment and holiday cheer.                                                                                           
                                    </p>
                                </div>
                            </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 80px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> New York City</h4>
                                    </div>
                                </div>
                                <p class="para-677">This morning, the day begins with breakfast at a local eatery, before setting out to embrace the
                                    energy of this fascinating city on a locally guided tour of the “Big Apple.” You’ll see Greenwich
                                    Village, the Wall Street district, Chinatown, the Empire State Building, Central Park and other timehonored landmarks decorated for the season. This afternoon enjoy time at leisure to discover “the
                                    city that never sleeps” at your own pace. Your Tour Manager has countless suggestions on how to
                                    spend your time. Maybe you are up for skating at Rockefeller Center or Central Park. Be sure to
                                    take a picture in front of the colossal Christmas tree at Rockefeller Center and gaze at the
                                    elaborate 5th Avenue holiday window displays. After dinner at a local restaurant, you’re in for the
                                    sweetest holiday treat – Radio City Music Hall and the incredible Christmas Spectacular featuring
                                    the high-kicking Rockettes – a short walk from your hotel!                                    
                                </p>                             

                            </div>

                            <!-- page-3 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">New York City</h4>
                                    </div>
                                </div>
                             
                                <p class="para-677">Another exciting day begins with a fun-filled breakfast at the famous Ellen’s Stardust Diner, a 50sthemed restaurant featuring a singing wait staff. Then, board a ferry for a cruise of New York
                                    Harbor. Take in the incredible views of the towering Statue of Liberty. Dock and get up-close to
                                    “Lady Liberty.” She has welcomed immigrants and visitors to New York Harbor since 1886.
                                    Created as a token of friendship between the U.S. and France, the Statue of Liberty has become a
                                    global symbol of freedom. Then it’s on to Ellis Island. Step back in time on a self-guided tour of the
                                    museum. Come to know the personal stories of the immigration boom of 1892-1924 when 12
                                    million people passed through this station on their journey to America. Enjoy some time at leisure
                                    to partake in New York’s fabulous holiday shopping at the world’s most famous department stores
                                    including Macy’s, Bloomingdale’s and Saks Fifth Avenue, all dressed up in their holiday best, or
                                    choose to join an optional walking tour of Greenwich Village including dinner.                                    
                                </p>                                
                            </div>


                            <!-- page-4 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 4:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">New York City</h4>
                                    </div>
                                </div>
                                <p class="para-677">Today enjoy breakfast at a local diner. Reflect at the 9/11 Memorial and take a self-guided tour at
                                    the 9/11 Museum - two poignant tributes to the lives lost. This evening, join your fellow travelers for
                                    a final toast as we gather for dinner at a local restaurant. Then, it’s off to exhilarating Times Square
                                    to take your seat at an included Broadway show! You’ll choose from a selection of Broadway’s
                                    biggest hits.*
                                                                     
                                </p>                           
                            </div>
                          
                            <!-- page-5 -->
                            <div class="container" >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> New York City - Tour Ends
                                </div>
                                </div>
                                <div class="bd-12">
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
                                                New York City,
                                                USA
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                        <p class="para-677">Your tour comes to a close with many pleasant memories of your exciting tour of fabulous “New
                                            York, New York” during the holiday season.                                                    
                                        </p>
                            
                            </div>
                            </div>
                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h4 class="headerr">Accommodation</h4>
                                <ul>
                                    <li>
                                        Day 1 to 4: Sheraton New York Times Square
                                    </li>
                                </ul>
                               
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container">
                             
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">3 breakfasts, 2 dinners                                    
                                </p>

                                <h6 class="head-876">Transport
                                </h6>
                                <ul>
                                    <li>Transport is included
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

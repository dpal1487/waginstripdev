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
                <div class="card shadow" style="border: none;  height: 6500px;padding-top:80px;">
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
                    <h6 class="spn-2">Marvel Egypt 7 Days (
                        Cairo , Nile Cruise &
                        Sleeper Train Round
                        Trip )</h6>
                        <p>
                            <span class="seven">6N/7D</span> Flexi Package
                            <span class="sp-3">Amazing  Egypt Tour Inclusive Deal 6N</span>
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
                    <div class="container">
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
                    <div class="container" >
                        <h4 class="spn-2">Trip Overview</h4>
                        <img src="{{ URL::to('/assets/images/package-image/egypt.webp') }}" alt="" style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                        <div class="row mt-5">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹58,832.44

                                    </p>
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
                                    <h6 class="htpvp1">Cairo <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Cairo
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
                                    <p class="htpvp1">Egypt Best Holidays

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#155685

                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- next-page -->
                    <!-- second-page -->
                    <div id="iti">
                    <div class="container mt-5">
                        <h4 class="heading-30">Itinerary</h4>
                        <h3 class="head-1">Introduction</h3>
                   
                        <h6 class="ico-3">  Explore the inspiring Great pyramids at Giza and visit the Egyptian museum</h6>
                        <h6 class="ico-3">  Enjoy a 5-star luxury Nile River cruise
                        </h6>
                        <h6 class="ico-3">  Experience the Sleeper Train travel between Cairo / Aswan - Luxor / Cairo
                        </h6>
                        <h6 class="ico-3">  See the Philae Temple and the High Dam in Aswan
                        </h6>
                        <h6 class="ico-3"> Visit the Valley of the Kings in Luxor</h6>
                        <h6 class="ico-3"> Adventure all of your tours and transfers in a comfort</h6>
                        </div>
                        </div>
                        <div id="wise">
                        <div class="container mt-5 mb-5">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 1:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09">Cairo : Pick up from Cairo airport to your hotel</h4>
                                </div>
                            </div>
                            </div>

                            <!-- next-page -->
                            <div class="container ">
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
                                                Pick up from Cairo airport anytime
                                                during the day or night time , Please
                                                send us your flight details to arrange it
                                                for you,
                                                Cairo International Airport (CAI), Airport
                                                Rd, Al Shorouk, Al Qahirah 11, Egypt

                                            </h6>
                                            
                                        </div>
                                        <div class="col-sm-3 mt-5">
                                            <h6>00:05 - 23:55</h6>
                                        </div>
                                    </div>
                                    <p class="para-6771">Pick up by our tour guide and enjoy a safe ride from Cairo airport to your hotel in Giza , The
                                        transfer length will be approximately 1 hour. Transfers are available year-round and 24-hours a day.
                                        ( Please send us your flight details )
                                        Once you get to your hotel , Meet your guide who will give you a short briefing for your tour around
                                        Egypt with all the need advices and recommendation  <br>                                      
                                    <strong>Overnight at Giza Hotel ( Private room with Breakfast ) most likely Pyramid View Room if
                                        available
                                        </strong></p>
                                </div>
                            </div>

                            <!-- page-2 -->
                            <div class="container " style="padding-top: 200px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Cairo : Guided day tour to ( Giza Pyramids & Sphinx and
                                            Egyptian Museum ) , Sleeper train ( Breakfast and dinner )</h4>
                                    </div>
                                </div>
                                <p class="para-677">After Breakfast at your hotel , Our friendly Guide will accompany you to start your day to travel to
                                    the Giza Plateau. On this tour you’ll visit the Great Pyramids & Sphinx and the Egyptian Museum
                                    .When you reach the Giza Plateau, your Egyptology guide will introduce you to the famous
                                    Pyramids of Cheops, Chephren and Mycerinus. Marvel at the Great Sphinx statue and visit the
                                    Valley Temple, which is a part of the same ancient complex. Learn about the burial rites of the
                                    pharaohs. Continue your tour to the famous Egyptian Museum for visiting the master pieces and
                                    see Tutankhamen tomb <br>
                                  EVENING transfer to Cairo train station to take the overnight sleeper train to Aswan
                                        Sleeper train includes Dinner and Breakfast</p>

                            </div>

                            <!-- page-3 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Arrive Aswan , Pick up and Aswan Guided Day tour ( Lunch
                                            and dinner )</h4>
                                    </div>
                                </div>
                                <p class="para-677">Arrive Aswan train station and be picked up and transferred to your 5 stars Nile Cruise to fresh up
                                    Start your tour in Aswan to Visit High Dam , Unfinished Obelisk and Philae temple by Motorboat <br>

                                   <strong>Overnight in the Nile Cruise ( Private room , Upper deck ) 5 Stars Nile Cruise</strong></p>

                            </div>


                            <!-- page-4 -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 4:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Cruise Sailing and visiting Kom Ombo temple ( Breakfast ,
                                            Lunch and Dinner )</h4>
                                    </div>
                                </div>
                                <p class="para-677">n the early morning ( Optional tour to Abu Simbel )
                                    Enjoy the free time on the cruise then the cruise sails in the River Nile in the afternoon ,, Later the
                                    cruise will stop to visit the Temple of Kom Ombo where you will visit the temple with your friendly
                                    guide
                                    The Nile Cruise continue the sailing towards Edfu Temple <br>
                               <strong>Overnight in the Nile Cruise ( Private room , Upper deck ) 5 Stars Nile Cruise
                                </strong></p>

                            </div>
                            <!-- page-5 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Visiting Edfu Temple and Continue sailing and reach Luxor (
                                            Breakfast , Lunch and Dinner )</h4>
                                    </div>
                                </div>
                                <p class="para-677">Enjoy the free time while the cruise sails in the River Nile ,, Later the cruise will stop in Edfu to visit
                                    the Temple of God Horus where you will visit the temple with your friendly guide
                                    The Nile Cruise continue the sailing towards Luxor and arrive Luxor in the afternoon <br>
                               <strong>Enjoy the free time while the cruise sails in the River Nile ,, Later the cruise will stop in Edfu to visit
                                    the Temple of God Horus where you will visit the temple with your friendly guide
                                    The Nile Cruise continue the sailing towards Luxor and arrive Luxor in the afternoon</strong></p>

                            </div>
                            <!-- page-6 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Visiting Luxor East & West banks ( Breakfast and Dinner ) +
                                            Overnight Sleeper train</h4>
                                    </div>
                                </div>
                                <p class="para-677">After Breakfast , start your tour with your friendly tour guide to visit the west Bank of Luxor ( Valley
                                    of the Kings , Hatshipsut Temple and Colossi of Memnon statues )
                                    Followed By east bank tour to visit ( Karnak temple and Luxor temple )
                                </p>
                                <p class="para-677"><strong>Evening transfer to Luxor train station to take the sleeper train back to Cairo <br>
                                    Overnight in the Sleeper train <br>
                                    Sleeper train includes Dinner and Breakfast</strong></p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">: Arrive Cairo , Transfer to Cairo airport</h4>
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
                                        <div class="col-sm-6">
                                            <h6 class="hkl">
                                                Transfer to Cairo airport at anytime
                                                during the day of the night , Please send
                                                us your flight details to arrange it for
                                                you,
                                                Cairo International Airport (CAI), Airport
                                                Rd, Al Shorouk, Al Qahirah 11, Egypt
                                                
                                            </h6>

                                        </div>
                                        <div class="col-sm-2 mt-5">
                                            <h6>00:05 - 23:55</h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">Arrive Cairo train station by 7 AM and be picked up from the train station to Cairo airport <br>
                              <strong>( We can change the drop off point to be to your hotel in Cairo , Giza or any other drop off
                                    point you prefer )</strong></p>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h4 class="headerr">Accommodation</h4>
                                <ul>
                                    <li>
                                        - One nights accommodation in Giza Hotel bases on bed and Breakfast ( Pyramids View Room if
                                        available )
                                        
                                    </li>
                                    <li>
                                        -Three nights accommodation on a 5-star cruise ship bases on Breakfast , Lunch and Dinner
                                    </li>
                                    <li>-Two nights accommodation on Sleeper train bases on Dinner and Breakfast</li>

                                </ul>
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container">
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">Qualified tour guide in Cairo , Aswan , Kom Ombo , Edfu and Luxor ( different languages available )</p>
                                <p class="prvr">All the tours are guided ones</p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr2">Cairo : One night accommodation with Breakfast</p>
                                <h6 class="prvr1">5 Stars Nile Cruise : Breakfast , Lunch and Dinner excluding Drinks</h6>
                                <h6 style="padding-left: 26px;">Sleeper train rounded trip : Dinner and breakfast each way</h6>
                                <h6 class="head-876">Transport
                                </h6>
                                <ul>
                                   <li>Pick up from Cairo airport</li>
                                    <li> All transfers by modern air-conditioned vehicle</li>
                                        <li> All Pick ups and transfers in Cairo , Aswan and Luxor train stations</li>
                                            <li> All tours in the itinerary</li>
                                                <li> Transfer to Cairo airport</li>
                                                    <li>  All service charges and taxes</li>
                                                        <li>   Fuel surcharge</li>
                                                            <li>  Landing and facility fees</li>
                                </ul>
                                <h6 class="head-876">Others</h6>
                                <ul>
                                   <li>Pick up from Cairo airport to your hotel in Cairo or Giza</li>
                                    <li>One nights accommodation in Giza Hotel bases on bed and Breakfast ( Pyramids View Room if
                                    available ) </li>
                                    <li> Three Nights accommodation on a 5-star cruise ship bases on Breakfast , Lunch and Dinner</li>
                                        <li> Two night accommodation in Sleeper train Cairo - Aswan - Luxor - Cairo bases on Dinner and
                                    Breakfast </li>
                                    <li> Sleeper train tickets Cairo - Aswan - Luxor - Cairo </li>
                                        <li> Guided Day Tour to Giza Pyramids & Sphinx and the Egyptian Museum</li>
                                            <li>Guided Day Tour to Aswan sightseeing </li>
                                                <li> Guided Tour to the East and West Banks of Luxor</li>
                                       <li> Guided Tour to Kom Ombo and Edfu temples</li>
                                        <li>Expert tour guide for all the tours</li>
                                            <li> All transfers by modern air-conditioned vehicle</li>
                                                <li> All Pick ups and transfers in Cairo , Aswan and Luxor train stations </li>
                                                    <li> Transfer to Cairo airport</li>
                                                        <li> All service charges and taxes , Fuel surcharge , Landing and facility fees   <li>
                                </ul>
                            </div>
                            <!-- NEXT PAGE -->

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

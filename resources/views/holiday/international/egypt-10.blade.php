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
                <div class="card shadow" style="border: none;  height: 5800px;padding-top:80px;">
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
                    <h6 class="spn-2">Egypt Explorer -
                        Felucca cruise & Red
                        Sea</h6>
                    <p>
                        <span class="seven">9N/10D</span> Flexi Package
                        <span class="sp-3">Amazing Egypt Tour Inclusive Deal 9N</span>
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
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Visit the Pyramids of Giza and see the mythical Sphinx</h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Enjoy the scenery as you sail along the Nile on felucca
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Explore the stunning Aswan and the West Bank of Luxor
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Go sightseeing in Cairo and experience the open market

                    </h6>
                    
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/package-image/germany.jfif') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹56,890.77
                                    </h6>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">DURATION
                                    </h6>
                                    <h6 class="htpvp1">10 days</h6>
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
                                    <h6 class="htpvp12">Timeless Tours Ltd

                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#45554
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
                        <p class="para-67">Discover this ancient civilisation steeped in the history of the grand temples of the Gods and their
                            tales of the past. This journey through Egypt packs in awe-inspiring culture and adventure in ten
                            energetic days.
                            But still manage to relax, at the Red Sea. Dive deep into the clear, warm waters.
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
                                    <h6 class="hd09">Airport pick up to hotel in Cairo
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
                                                Airport prick up on the first day,
                                                Cairo International Airport (CAI), Airport Rd, Al Shorouk,
                                                Al Qahirah 11, Egypt
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">Arrive at Cairo airport where you will be met by our representative who will assist you through the
                                        formalities.
                                        Transfer to your hotel to meet your guide for a briefing explaining the tour itinerary. Overnight stay
                                        at your hotel innCairo.                                        
                                    </p>
                                </div>
                            </div>
                    </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 150px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Cairo, Giza</h4>
                                    </div>
                                    </div>
                                          <p class="para-677"> After breakfast we start the tour by visiting the awe-inspiring Great Pyramids and the Sphinx at the
                                            Giza Plateau,
                                            before heading to Sakkara to visit the Step Pyramid – the first completed pyramid in Egypt – as
                                            well as ancient
                                            Pharonic tombs. Overnight on A/C bus to Aswan.
                                            Breakfast included.
                                            *Optional extra: upgrade to flight from Cairo to Aswan
                                            </p>
                               
                            </div>
                           
                          
                            <hr>
                            <!-- page-3 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">  Aswan</h4>
                                    </div>
                                </div>
                                <p class="para-677">Arrive in Aswan. You will be met by our representative who will transfer you to your hotel. We begin
                                    the day with a tour of the romantic Philae Temple – perched atop a picturesque island, its beautiful
                                    location is reached by small motor boat, making a truly magnificent approach to the site.
                                    Overnight stay at your hotel in Aswan.                                                      
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
                                        <h4 class="hd09">Felucca Cruise
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">After breakfast, step aboard your Nile Felucca. Watch the world go by as you sail down the Nile
                                    observing rural life on the shores and taking in the changing landscape of the mighty river.
                                    Overnight on the Felucca.
                                    Breakfast, lunch and dinner included.
                                    *Optional extra: Visit Abu Simbel – the stupendous Sun Temple of Ramses the Great, located at
                                    the southernmost tip of ancient Egypt’s borders.
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
                                        <h4 class="hd09">Kom Ombo, Luxor</h4>
                                    </div>
                                </div>
                                <p class="para-677">After breakfast we travel on an A/C bus to the city of Luxor, often described as the world’s greatest
                                    open-air
                                    museum and home to some of the grandest monuments that have survived from ancient Thebes.
                                    On the way we visit the temple of Kom Ombo – its perfectly symmetrical twin entrances overlook
                                    the spectacular riverside. In the afternoon we tour of the East Bank of the Nile. Here you will
                                    experience the immense Karnak Temple, considered by some as Egypt’s most important Pharonic
                                    site – the country’s powerhouse of ancient times; as well as the magnificent Luxor Temple where
                                    visitors are greeted by the impressive Avenue of Sphinxes. Overnight stay at your hotel in Luxor.
                                    Breakfast included.
                                </p>
                            </div>
                            <hr>
                            <!-- page-6 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Luxor to Hurghada, Red Sea</h4>
                                    </div>
                                </div>
                                <p class="para-677">After breakfast we explore the West Bank of Luxor, starting the tour with the world famous Valley of
                                    the Kings, the richest archaeological site on earth. Then on to the breathtaking Temple of
                                    Hatshepsut (Deir al-Bahri), built for the only woman to reign over Egypt as pharaoh. Finally we visit
                                    the great Colossi of Memnon – the last remains of Amenophis III’s temple. We then take the A/C
                                    bus to Hurghada, Red Sea. Overnight stay at your hotel in Hurghada.
                                    Breakfast and dinner included.
                                    
                                    
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Hurghada, Red Sea</h4>
                                    </div>
                                </div>
                                <p class="para-677">This is a free day to be spent at your leisure. With snorkeling, swimming, scuba diving and good
                                    food and drink
                                    available you will find much to do; or simply relax and enjoy the sun. Overnight stay at your hotel in
                                    Hurghada.
                                    Breakfast, lunch and dinner included.                                    
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Hurghada, Red Sea</h4>
                                    </div>
                                </div>
                                <p class="para-677">This is another free day to be spent at your leisure. With snorkeling, swimming, scuba diving and
                                    good food and
                                    drink available you will find much to do; or simply relax and enjoy the sun. Overnight on A/C bus to
                                    Cairo.
                                    Breakfast, lunch and dinner include                                 
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 9:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Cairo</h4>
                                    </div>
                                </div>
                                <p class="para-677">TArrive in Cairo where you will be transferred to your hotel. Today we tour the City of Cairo,
                                    beginning with the
                                    Egyptian Museum where you may view the treasures of King Tutankhamun’s tomb. From there we
                                    head to the
                                    Coptic area of old Cairo to visit the hanging church, so named as it is suspended above two
                                    Roman gate towers. Then on to the Mosque of Mohamed Ali, also known as the Alabaster
                                    Mosque, which sits majestically on the summit of the Citadel of Saladin. Afterwards we make our
                                    way to the old Cairo Bazaar, Khan El Khalili, with its maze of intriguing alleyways that are home to
                                    numerous souvenir stalls and coffee shops. Overnight stay at your hotel in Cairo. <br>
                                    Breakfast included.                                
                                </p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 10:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Cairo airport transfer</h4>
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
                                                Airport drop off on the last day,
                                                Cairo International Airport (CAI), Airport Rd, Al Shorouk,
                                                Al Qahirah 11, Egypt
                                            </h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">After breakfast, transfer to the airport. Take the memories of your adventures with you on your
                                    flight home.
                                    Breakfast included
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-6777"> 2 Nights at a 4* star hotel in Cairo <br>
                                        1 Night at a 4* hotel in Aswan<br>
                                        1 Night on a traditional felucca sailing boat<br>
                                        1 Night at a 3* star hotel in Luxor<br>
                                        2 Nights at a 4* hotel in Hurghada<br>
                                        Two way overnight travel in an A/C bus: Cairo - Aswan; Hurghada - Cairo
                                        </p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">Qualified English speaking Egyptologist <br>
                                    Guided tours of the Pyramids and Cairo city <br>
                                    Guided tours of Aswan; Valley of the Kings; Kom Ombo and Luxor Temples </p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">8 Breakfasts <br>
                                    3 Lunches <br>
                                    3 Dinners</p>
                                
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Airport pickup and transfers <br>
                                    Transportation in A/C bus
                                    </p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">Guided tours of the Pyramids and Cairo city
                                    Guided tours of Aswan; Valley of the Kings; Kom Ombo and Luxor Temples</p>
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

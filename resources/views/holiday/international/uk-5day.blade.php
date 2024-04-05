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
                <div class="card shadow" style="border: none;  height: 4500px;padding-top:80px;">
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
                    <h6 class="spn-2">5 Day Skye &
                        Highland Fling</h6>
                    <p>
                        <span class="seven">4N/5D</span> Flexi Package
                        <span class="sp-3">Amazing UK Tour Inclusive Deal 4N</span>
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
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Hunt for Nessie and get your first glance of Highland life</h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Head to Isle of Skye and hike to amazing rock formations
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Learn all about the fight for independence
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Admire the scenic beauty of remarkable Glen Coe
                    </h6>
                    
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/package-image/uk.webp') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹31,859.59
                                    </h6>
                                </div>

                            </div>
                            <div class="col-sm-4">
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
                                    <h6 class="htpvp1">Edinburgh <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Edinburgh
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
                                    <h6 class="htpvp12">MacBackpackers Ltd

                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#255
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
                        <p class="para-67">"Best Cultural Tour in the World 2016" - TourRadar Tour of the Year Awards. Your Award-Winning
                            adventure, should you choose to accept, is five days of castle-storming, whisky-drinking, ceilidhdancing and monster-hunting. Rambling across the Highlands our guides will take you through the
                            very best of what Scotland has to offer, ensuring an unforgettable experience. Overnight stops
                            include Inverness, the Isle of Skye for two nights and Oban (April - October) or Fort William
                            (November - March)
                            
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
                                    <h6 class="hd09">
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
                                                Castle Rock Hostel,
                                                15 Johnston Terrace, Edinburgh, EH1 2PW
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">PLEASE NOTE: UNTIL THE END OF OCTOBER THE 1ST NIGHT WILL BE AT LOCHSIDE
                                        HOSTEL ON THE SHORES OF LOCH NESS NOT INVERNESS AS ADVERTISED. Setting out
                                        on your adventure we will cross the iconic Forth Bridges then get out for a magical forest walk
                                        before heading into the Highlands where you’ll hear tales of clan rebellion and get your first glimpse
                                        of Highland life. We’ll round the day off with a balmy(?!) swim in Loch Ness while hunting for the
                                        elusive Nessie before heading to the Highland capital of Inverness. Forth Bridges. Dunkeld.
                                        Hermitage/Killiecrankie. Culloden. Clava Cairns. Loch Ness. Inverness
                                    </p>
                                </div>
                            </div>
                    </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 270px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"></h4>
                                    </div>
                                    </div>
                                          <p class="para-677">The adventure continues as we journey over to the West, walking over the Corrieshalloch Gorge
                                            and taking in the beautiful scenery and ancient mountains of Torridon before crossing the water to
                                            the Isle of Skye!. Rogie Falls. Corrieshalloch Gorge. Kinlochewe. Torridon. Eilean Donan Castle.
                                            Kyleakin
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
                                        <h4 class="hd09"> </h4>
                                    </div>
                                </div>
                                <p class="para-677">A full day on Skye! The incredible scenery provides a perfect backdrop while your guide fills you in
                                    with the local folklore. Spending more time off the bus than on, we will hike up to one of the islands
                                    more distinctive rock formations. The views will blow your mind away! An inspiring day on the
                                    Winged Isle. Sligachan. Cuillin Ridge. Portree. The Old Man of Storr. Kilt Rock. Quiraing. Faerie
                                    Pools. Kyleakin                                                      
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
                                        <h4 class="hd09">
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">Waving goodbye to Skye we take the ferry off the island (Summertime only) and journey down to
                                    the Glenfinnan viaduct (aka the Harry Potter bridge) and the Bonnie Prince Charlie monument on a
                                    stunning trip towards Fort William. We’ll re-visit one of Scotland’s darkest moments as we take in
                                    the haunting landscape of Glen Coe before heading to Oban. Armadale. Sands of Morar.
                                    Glenfinnan Viaduct (Harry Potter). Fort William. Glencoe. Oban (April - October). Please note:
                                    During the winter months (November - March) this tour will spend the final night in Fort William and
                                    will not visit Oban.                                    
                                </p>
                            </div>
                            <hr>
                            <!-- page-5 -->
                           
                           
                           
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"></h4>
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
                                                Castle Rock Hostel,
                                                15 Johnston Terrace, Edinburgh, EH1 2PW

                                            </h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">On our final day we make our way through Argyll and into the Trossachs National Park with the odd
                                    Hairy Coo or two! We’ll travel right through the heart of William Wallace country where you’ll hear
                                    about Scotland’s fight for independence before heading back to Edinburgh to say some fond
                                    farewells. St. Conan's Kirk. Kilchurn Castle (Summer months only). Callander. Doune Castle or.
                                    Wallace Monument or. Bannockburn Battlefield. The above itinerary is not set in stone! Your guide
                                    may use their knowledge to modify the itinerary to best suit the Scottish weather & to maximise
                                    your experience.
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                               

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">Our guides, patriotic and passionate, will open up our amazing country to you, weaving together
                                    the rich fabric of Scottish history and culture as you travel along some of the most picturesque
                                    routes in Scotland                                     </p>
                               
                                
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Modern Mercedes or MAN coaches with air-con and sound systems
                                    </p>
                                
                                    Rothenburg in ROTHENBURG, Coal mine industrial complex in Zollverein in HAMELIN</p>
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
   
<!--</body>-->

<!--</html>-->

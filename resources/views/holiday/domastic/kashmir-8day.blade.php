@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <!--<link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;height: 5000px;">
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
                    <h6 class="spn-2">Amazing Kashmir
                    </h6>
                        <p>
                            <span class="seven">7N/8D</span> Flexi Package
                            <span class="sp-3">AmazingThe Best of Kashmir
                                Inclusive Deal 7N</span>
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
                                        <h6 class="psd-1">Call Us: +91 7669988012</h6>
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
                            <img src="{{ URL::to('/assets/images/package-image/kasmir.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹54,483.66
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 class="htpvp190 pt-4">DURATION
                                        </h6>
                                        <h6 class="htpvp1">8 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 1 to 80 year olds    </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Srinagar<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Srinagar
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-10" style="width: 670px;">
                                        <h6 class="htpvp">OPERATED IN
                                        </h6>
                                        <h6 class="htpvp1">EnglishGermanItalianPortugueseFrenchSpanishDutchRussian
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="bd-12">
                                        <h6 class="htpvp">OPERATOR</h6>
                                        <p class="htpvp1">Yatra Exotic
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#141257
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
                            <p class="para-67">  
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
                                        <h4 class="hd09"> Arrival At Srinagar
                                </div>
                                </div>
                                </div>

                                <!-- next-page -->
                                <div class="container">
                                    <div class="bd-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4 class="head-632">Start Point</h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-7">
                                                <h6 class="hkl">
                                                    Srinagar Airport,
                                                    Srinagar International Airport (SXR), Budgam, Jammu
                                                    and Kashmir, India
                                                </h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00 - 23:55
                                            </div> -->
                                        </div>
                                        <p class="para-6771 mt-2">On the day of arrival at Srinagar airport, our Yatra Exotic representative will meet you and assist for
                                            transfer to the houseboat for your night stay. Enjoy Shikara ride at Dal Lake, visiting floating
                                            vegetable gardens etc. Rest of the day free for your own leisure activities.
                                            Overnight at Houseboat.                                                               
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
                                            <h4 class="hd09">Srinagar - Pahalgam (94 Kms / 3 Hrs)</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Today morning after breakfast and check out from houseboat later drive to Phalgham “The Valley
                                        of Shepherds” via en-route visit the Saffron fields. Also visit Awantipora ruins & Anantnag Sulphur
                                        Springs. Upon arrival at Pahalgam, check-in to your hotel for night stay. Rest of the day free for
                                        your own leisure activities.
                                        Overnight at Hotel.                                                                 
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
                                            <h6 class="hd09">At Pahalgam</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Today morning after breakfast, later proceed for day excursion trip to Chandanwadi, Starting point
                                        of Amarnath Yatra & Betab valley, situated on the way to Chandanwadi, the valley was named
                                        Betaab after the bollywood movie by the same name! earlier famous as Hajan Valley, after the
                                        release of the movie, it was renamed as major part of the movie was shot here. After lunch drive to
                                        trip for Aru Valley – Aru Valley is a tourist place 11 Kms from Pahalgam noted for its beautiful
                                        meadows, and mountains, it is a base camp for trekking to the Kolahoi Glacier and Tarsar Lake.
                                        The village lies of the left bank of the Aru river, which is a tributary of the Lidder river.
                                        Overnight at Hotel.                                                                     
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Pahalgam - Gulmarg (140 Kms / 4 Hrs)</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today morning after breakfast and check out from hotel later drive to Gulmarg “The Meadow of
                                        Flowers”. Upon arrival at Gulmarg, check-in to your hotel for night stay. Rest of the day free for
                                        your own leisure activities.
                                        Overnight at Hotel.
                                    </p>
                                </div>
                                <hr>
                             
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">At Gulmarg                   </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today morning after breakfast at hotel, later proceed the scenic tour destination in Kashmir,
                                        primarily famous for ski slopes and natural 18 holes golf course, which is also the highest golf
                                        course in the world. Enjoy the splendor of nature and the snowy mountains. One can have
                                        Gondola ride (cable car) from Gulmarg to Kongdoori & Marry Shoulder.
                                        Overnight at Hotel.</p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Gulmarg - Srinagar (55 Kms / 2 Hrs) </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today morning after breakfast and check out from hotel later drive to Srinagar. Upon arrival at
                                        Srinagar, check-in to your hotel for night stay. Rest of the day free for your own leisure activities.
                                        Overnight at Hotel.                                        
                                        </p>
                                </div>
                                <hr>
                               
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Srinagar - Sonamarg - Srinagar (83 Kms / 2:30 Hrs)  </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today morning after breakfast at hotel, later proceed for day excursion tour to Sonamarg, via stop
                                        at many beautiful spots. Upon arrival at Sonamarg, enjoy the ride on horse to visit Thajiwas glacier
                                        (on Pony) where snow remains round the year and Sonamarg is known as Gateway of Ladakh.
                                        Overnight at Hotel.                                        
                                        </p>
                                </div>
                                <hr>
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Departure from Srinagar
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
                                                    Srinagar Airport,
                                                    Srinagar International Airport (SXR), Budgam, Jammu
                                                    and Kashmir, India
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Today morning after breakfast and check out from hotel later transfer to Srinagar airport to board
                                        the flight to your home.                            
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">Accommodation at good 3 star hotels based on Twin / Double Sharing basis<br>
                                    • 3 Nights in Srinagar <br>
                                    • 2 Nights in Pahalgam<br>
                                    • 2 Nights in Gulmarg<br>
                                    Check In : 1400 Hrs / Check Out : 1200 Hrs<br>
                                    Early check in and late Check out are subject to availability.
                                    </p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">• Local english speaking guide at Srinagar, Pahalgam and Gulmarg. <br>
                                    (Other Languages guide except English language guide at Additional cost and Subject to
                                    Availability)
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">7 Breakfast at Hote                             
                                      
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Transport
                                    All sightseeing including airport transfers by an AC Car MUV / SUV / Sedan car with an English
                                    speaking driver. Drivers of our private vehicles are experienced with good knowledge of the road
                                    conditions and well trained.The type of vehicles provided are as follows :
                                    Passenger Vehicle type <br>
                                    • 1-2 persons Air-conditioned medium car such as Etios / Dezire or similar <br>
                                    • 3-4 persons Air-conditioned large car such as Toyota Innova or similar <br>
                                    • 5-10 persons Air-conditioned mini-van such as Tempo Traveler or similar <br>
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">• 7 Nights accommodation based on double / twin sharing basis <br>
                                        • Assistance during arrival and departure by Yatra Exotic<br>
                                        • Daily breakfast at hotel<br>
                                        • All transfers including airport transfers by an AC vehicle<br>
                                        • Local english speaking guide at Srinagar, Pahalgam and Gulmarg.<br>
                                        (Other Languages guide except English language guide at Additional cost and Subject to
                                        Availability)<br>
                                        • Enjoy Shikara ride in Dal lake at Srinagar<br>
                                        • Visit to Chandanwari, Betab and Aru Valley in Pahalgam<br>
                                        • Gondola cable car ride at Gulmarg<br>
                                        • One mineral water bottle per person per day<br>
                                        • All currently applicable taxes including GST
                                        
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

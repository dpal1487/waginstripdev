@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <!--<link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px; height: 5700px;">
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
                    <h6 class="spn-2">Golden Triangle</h6>
                        <p>
                            <span class="seven">7N/8D</span> Flexi Package
                            <span class="sp-3">Amazing Golden Triangle Tour Inclusive Deal 7N</span>
                        </p>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Explore the pulsating city of New Delhi
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Visit the iconic and sparkling Taj Mahal

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Experience local life at Dhula Village
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Uncover the unique pink city of Jaipur</h6>
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
                            <img src="{{ URL::to('/assets/images/package-image/amritsar.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-7">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹43,604.47

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">8 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp1">From 2 to 85 year olds    </h6>
                                    </div>
                                </div> -->

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
                                        <p class="htpvp1">G Adventures Inc.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#5505
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
                            <p class="para-67">This short but spicy Indian journey will introduce you to three very different northern cities and the
                                colourful rural life of Rajasthan. From the hectic pace of Delhi with its bustling markets, magnificent
                                monuments, and colonial past, travel by private transport to Agra and the mesmerizing beauty of
                                the Taj Mahal — truly one of the wonders of the world. Discover why Jaipur is called the Pink City
                                and get a taste of rural life at a Dhula village. Photographers and culture lovers won't be
                                disappointed on this classic adventure.            
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
                                        <h4 class="hd09">  Delhi
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
                                                    New Delhi,
                                                    India
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771 mt-5">Arrive at any time. Arrival transfer is included through the G Adventures-supported Women With <br>
                                            Wheels project.<br>
                                            Accommodation:<br>
                                            - Hotel Metropolitan, New Delhi (or similar).<br>
                                            Included Activities:<br>
                                            - Women With Wheels Transfer<br>
                                            - Welcome Meeting - Meet Your CEO and Group
                                            
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
                                            <h4 class="hd09"> Delhi/Āgra</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Enjoy a youth-led walk through the backstreets of Delhi with G Adventures-supported project, City
                                        Walk. Observe a different perspective of Delhi while supporting at-risk youth in the community.
                                        Later, explore Old Delhi and travel onward to Agra, home of the Taj Mahal. <br>
                                        Accommodation: <br>
                                        - Hotel The Agra Grande (or similar). <br>
                                        Transport: <br>
                                        - Private Vehicle 03:00 - 04:00 Hr(s) <br>
                                        Included Activities: <br>
                                        - City Walk <br>
                                        - Old Delhi Guided Walk
                                                                          
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
                                            <h6 class="hd09"> Agra</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Set eyes on the sparkling Taj Mahal at sunrise before exploring more of this famous landmark. In
                                        the afternoon, visit the I'timad-ud-Daulah (Baby Taj) and the Agra Fort.<br>
                                        Accommodation: <br>
                                        - Hotel The Agra Grande (or similar).<br>
                                        Included Activities:<br>
                                        - Taj Mahal Visit<br><br>
                                        - Baby Taj Visit
                                        - Agra Fort Visit                          
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Agra/Dhula Village</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Stop at Fatehpur Sikri, the now-deserted former capital of the Mughals, and a stunningly preserved
                                        UNESCO site. Visit the Abhaneri Stepwell and marvel at this uniquely Indian water harvesting
                                        system. In the afternoon, travel to Dhula Village and get a closer look at rural life in Rajasthan.
                                        Tonight, settle in to your cozy tent then opt to relax by the fire and take in the starry night sky.
                                        At Dhula Village you will have the opportunity to learn about local life, play a fun game of cricket,
                                        relax in the peaceful atmosphere, or take a cycle to explore the surroundings. <br>
                                        Tonight's accommodation is in spacious and comfortable tents outfitted with beds, lamps, and <br>
                                        simple en suite bathrooms. <br>
                                        Transport: <br>
                                        - Private Vehicle: Āgra to Dhula Village 04:00 Hr(s) <br>
                                        Included Activities: <br>
                                        - Fatehpur Sikri Visit <br>
                                        - Abhaneri Stepwell Visit <br>
                                        - Dhula Village Experience
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Dhula Village/Jaipur</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Continue to the pink city of Jaipur. Built according to Hindu architectural principles, the city utilizes
                                        a unique organization unlike anywhere else in India. Later, visit the Palace of the Winds and wander
                                        the bustling streets.<br>
                                        Accommodation: <br>
                                        - Utsav Niwas (or similar).<br>
                                        Transport:<br>
                                        - Private Vehicle: Dhula Village to Jaipur 02:00 Hr(s)<br>
                                        Included Activities:<br>
                                        - Jaipur Cycle-Rickshaw Tour
                                                                         
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Jaipur                                        </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Enjoy a visit to the Amber Fort, famous for its mixture of Hindu and Muslim architecture. After, visit
                                        the City Palace and have a photo opportunity at Hawa Mahal (Palace of the Winds).
                                        Opt to get active by pre-booking a cycle tour or sharpen your culinary skills by pre-booking a
                                        cooking class with a local family. Or choose to visit Kitchen With A Cause and have a delicious
                                        meal that allows you to give back to the community.<br>
                                        Included Activities: <br>
                                        - Amber Fort Visit<br>
                                        - City Palace Visit<br>
                                        Optional Extras to chose from:<br>
                                        - Jaipur Cooking Class with a local family<br>
                                        - Jaipur Cycle Tour
                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Jaipur/Delhi                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">If you aren't afraid of heights, opt for a morning hot air balloon ride over Jaipur. Return to Delhi in
                                        the afternoon and enjoy free time to explore more of the bustling city.
                                        Admire the Pink City from above by pre-booking the morning Jaipur Balloon Ride when booking
                                        your tour. <br>
                                        Accommodation:<br>
                                        - Hotel Metropolitan, New Delhi (or similar).<br>
                                        Transport:<br>
                                        - Private Vehicle 06:00 Hr(s)<br>
                                        Optional Extras to chose from:<br>
                                        - Jaipur Balloon Ride
                                    </p>
                                </div>
                                <hr>

                                
                                <!-- page-5 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Delhi

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
                                                    New Delhi,
                                                    India                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Depart at any time. <br>
                                        Included Activities: <br>
                                        - Departure Day
                                        
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">Hotels (6 nts), comfortable tented camp (1 nt)</p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">CEO (Chief Experience Officer) throughout, local guides.
                                    </p>
                                    <!-- <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Daily Breakfast                                      
                                      
                                    </p> -->

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Private vehicle, taxis, auto-rickshaw, cycle-rickshaw
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Arrival transfer included through the G Adventures-supported Women on Wheels project. Walking <br>
                                        tour with a guide from the G Adventures-supported New Delhi Streetkids Project. Old Delhi walk
                                        with stops at the Jama Masjid, Gurduwara, Chandni Chowk, and Connaught Place. Agra Fort visit.
                                        Taj Mahal visit. Fatephur Sikri visit. Village stay (Dhula). I'timad-ud-daulah (Baby Taj) entrance.
                                        Jaipur City Palace entrance and guided tours. Amber Fort. Abhaneri village walk and stepwell visit.
                                        All transport between destinations and to/from included activities.
                                        
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

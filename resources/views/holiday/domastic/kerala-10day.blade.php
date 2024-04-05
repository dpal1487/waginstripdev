@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <!--<link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">-->

    <div class="container mt-5">

        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;  height: 6300px;">
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
                    <h6 class="spn-2">A Heaven Called
                        "Kerala</h6>
                    <p>
                        <span class="seven">9N/10D</span> Flexi Package
                        <span class="sp-3">Amazing Kerala Tour Inclusive Deal 9N</span>
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
                            <img src="{{ URL::to('/assets/images/package-image/kerala.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹135,687.26


                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">10 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 1 to 65 year olds </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1"> Kochi (Cochin) <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Kochi (Cochin) 
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
                                        <p class="htpvp1">Bout India Tours Private Limited

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#180008

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
                                <p class="para-67">Kerala is righteously termed as "The God's Own Country". It is bestowed by God with sprawling
                                    backwaters, lush green misty mountains, evergreen forests, long stretches of pristine beaches,
                                    and that all in just a narrow stretch of land. The choices are many and so are the wonderful treats
                                    that await you in Kerala.
                                    When in Kerala all you do is "GO WITH THE FLOW". Let the mesmerizing backwaters of Alleppey
                                    and Kollam set pace to your day and laid-back village life soothe your heart. A leisurely bamboo
                                    rafting and jungle hike through the Periyar National Park will awaken the wilderness in you. A jeep
                                    ride through the endless tea plantations of Munnar will be treat for your eyes. Treat your taste buds
                                    with flavors never known before. This trip will be an opportunity for you to be the guest of the God.
                                    Afterall, when do you get a chance to have an excursion through the God's own country!
                                    
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
                                        <h4 class="hd09"> Kochi [arrival]
                                    </div>
                                </div>
                            </div>

                            <!-- next-page -->
                            <div class="container">
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
                                                Main Exit Gate,
                                                Cochin International Airport (COK), Nedumbassery,
                                                Alwaye, Kerala, India
                                            </h6>
                                        </div>
                                        <!-- <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>07:00 - 18:00</h6>

                                        </div> -->
                                    </div>
                                    <p class="para-6771 mt-5">Arrive at Kochi by flight. The serene Kochi (a.k.a. Cochin) has been drawing traders and explorers
                                        to its shores for over 600 years. Nowhere else in India could you find such an intriguing mix of
                                        giant fishing nets from China, a 400-year-old synagogue, ancient mosques, Portuguese houses,
                                        and the crumbling remains of the British Raj. The result is an unusual blend of medieval
                                        Netherlands, Portugal, and an English village grafted onto the tropical Malabar Coast.
                                        Our representative will pick you from the Kochi Airport and transfer you to your hotel in Kochi.
                                        The evening is at your leisure. Dinner and overnight stay will be at a hotel in Kochi. <br>
                                        MEALS: Dinner <br>
                                        HOTEL: Fragrant Nature Kochi
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
                                        <h4 class="hd09">Kochi (sightseeing)</h4>
                                    </div>
                                </div>
                                <p class="para-6777">After breakfast head out for a local sightseeing tour of Kochi. Visit the famous attractions of Kochi.
                                    Start with a visit to Saint Francis Church, one of the most distinguished monuments in Kochi with
                                    a history that dates back to the 16th century. Then visit the Old Paradesi Synagogue, which is the
                                    oldest active synagogue in the Commonwealth of Nations, located in Kochi, Kerala, in South India.
                                    Constructed in 1567, it is one of seven synagogues of the Malabar Yehudan or Yehudan Mappila
                                    people or the Cochin Jewish community in the Kingdom of Cochin. Then visit Mattancherry
                                    Palace, is a Portuguese palace popularly known as the Dutch Palace, in Mattancherry, which
                                    features Kerala murals depicting portraits and exhibits of the Rajas of Kochi. Afterwards visit
                                    Cochin Spice Market & Chinese fishing nets.
                                    Reach back at the hotel by evening. Dinner and overnight stay will be at hotel in Kochi.
                                    MEALS: Breakfast & Dinner
                                    HOTEL:Fragrant Nature Kochi
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
                                        <h6 class="hd09">Kochi - Munnar (5 hours drive)</h6>
                                    </div>
                                </div>

                                <p class="para-677">After breakfast check-out from hotel and head straight to Munnar. The rolling hills around Munnar,
                                    South India's largest tea-growing region, are carpeted in emerald-green tea plantations, contoured,
                                    clipped and sculpted like ornamental hedges.
                                    After around 5 hours journey reach Munnar by afternoon. Check-in at hotel on arrival. In the
                                    evening head out to see Kalaripayattu Show. Kalaripayattu is an ancient Indian martial art, which
                                    originated as a style in Kerala. <br>
                                    Dinner & overnight stay will be at hotel in Munnar. <br>
                                    MEALS: Breakfast & Dinner <br>
                                    HOTEL: Fragrant Nature Munnar        
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
                                        <h4 class="hd09">Munnar (sightseeing)</h4>
                                </div>
                                <p class="para-677">After breakfast head out for sightseeing. Visit Munnar Tea Museum. The tea museum preserves
                                    the aspects on the genesis and growth of tea plantations in Kerala's mountain region of the
                                    Western Ghats.Munnar is always synonymous to tea plantation, as it also one of the highest tea
                                    growing regions of the world. A trip to Munnar will be incomplete without having a visit to these tea
                                    plantations. Enjoy a tea plantation walk tour. After that visit a spice plantation.
                                    Then go for a Jeep ride, enjoy the ride to Mankulam and Anakulam villages surrounded by tea
                                    gardens and dense forest. On this ride you will get a chance to see high altitude tea gardens,
                                    waterfalls, tribal areas, wild elephants and organic villages .Reach back at the hotel by late
                                    evening.
                                    Dinner and overnight stay will be at hotel in Munnar. <br>
                                    MEALS: Breakfast & Dinner <br>
                                    HOTEL: Fragrant Nature Munnar
                                    
                                </p>
                            </div>
                            <hr>



                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Munnar - Periyar (4 hours drive)</h4>
                                </div>
                                <p class="para-677">After breakfast check out from the hotel & head towards Periyar. The very sound of the word
                                    Thekkady conjures up images of elephants, unending chains of hills, and spice-scented
                                    plantations. The Periyar forests of Thekkady is one of the finest wildlife reserves in India. Spread
                                    across the entire district are picturesque plantations and hill towns that hold great opportunities for
                                    treks and mountain walks.
                                    Reach Periyar by afternoon and check-in at the hotel on arrival. Evening at your leisure. Dinner &
                                    overnight stay will be at the hotel in Periyar (Thekkady).
                                    MEALS: Breakfast & Dinner
                                    HOTEL: Amaana Plantation Resort
                                    
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Periyar (sightseeing)</h4>
                                </div>
                                <p class="para-677">Early in the morning, set out for a half-day guided jungle walk tour and Bamboo rafting at
                                    Periyar National Park. This activity takes close to 6 hrs. The wildlife sanctuary is also famous for
                                    its tiger reserve and elephant reserve. Visiting the sanctuary will be like exploring the nature
                                    around, enjoying the pristine and peaceful atmosphere around, and getting relaxed from your busy
                                    schedules. There are bright chances to spot the elephant herd in the jungle while you are walking
                                    through the jungle. Reach back to the hotel by noon.
                                    In the evening head out to see a Kathakali show (a very popular Indian classical dance form).
                                    Dinner & overnight stay will be at hotel in Periyar (Thekkady). <br>
                                    MEALS: Breakfast & Dinner <br>
                                    HOTEL: Amaana Plantation Resort
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Periyar - Kollam (6 hours drive)</h4>
                                </div>
                                <p class="para-677">After breakfast check-out from the hotel & head towards Kollam, the southern approach to
                                    Kerala’s backwaters, surrounded by the calm waterways of Ashtamudi Lake, fringed with coconut
                                    palms, cashew plantations, and traditional villages – a great place to get a feel for the backwaters
                                    without the crowds.
                                    Reach Kollam by late afternoon. Check-in at the hotel on arrival. Evening at your leisure. Dinner
                                    and overnight stay will be at the hotel in Kollam.
                                    MEALS: Breakfast & Dinner
                                    HOTEL: Fragrant Nature Kollam.
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Kollam (sightseeing)</h4>
                                </div>
                                <p class="para-677">After breakfast head out for a sightseeing tour to Varkala Beach. Varkala is an amazing place
                                    where you see the sea coast along with cliffs. There are numerous water spouts and spas on the
                                    sides of these cliffs. Varkala Beach is a haven for sunbathing and swimming.
                                    In the afternoon reach back Kollam and enjoy a boat ride at the backwaters & mangroves of
                                    Paravur Lake. Evening at your leisure. Dinner and overnight stay will be at the hotel in Kollam.
                                    MEALS: Breakfast & Dinner
                                    HOTEL: Fragrant Nature Kollam.                                    
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 9:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Kollam - Alleppey (2.5 hours drive)</h4>
                                </div>
                                <p class="para-677">After breakfast check-out from hotel & head towards Alleppey (Alappuzha). Welcome to the
                                    “Venice of the East” – Alleppey, world famous for its vast mesmerizing backwaters.
                                    Reach Alleppey by noon. Check-in at a private houseboat. Have lunch on the houseboat. Enjoy a
                                    boat cruise through the magnificent Vembanad lake for an unforgettable experience of backwater
                                    cruising. Dinner & overnight stay will be at the houseboat in Alleppey.
                                    MEALS: Breakfast, Lunch & Dinner
                                    HOTEL: Southern Panorama Cruises (luxury AC houseboat).
                                </p>
                            </div>
                            <hr>
                            
                            <!-- page-5 -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 10:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Alleppey - Kochi (2.5 hours drive) [departure

                                    </div>
                                </div>
                                <div class="bd-1">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="head-632">End Point </h4>
                                        </div>
                                        <div class="col-sm-1">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-7">
                                            <h6 class="hkl">
                                                Main Entrance,
                                                Cochin International Airport (COK), Nedumbassery,
                                                Alwaye, Kerala, India                                             
                                        </div>
                                        <!-- <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>10:00 - 18:00                                            </h6>

                                        </div> -->
                                    </div>
                                </div>
                                <p class="para-677">After breakfast check out from the houseboat. We will drop you at Kochi Airport by noon. Bid
                                    farewell with the memories of this amazing fun-filled 10 days trip through the Heaven called -
                                    KERALA, worth remembering for a lifetime!
                                    
                                    
                                </p>

                            </div>
                        </div>
                        <!-- nxt-page -->
                        <div class="container">
                            <h4 class="headerrr">What’s Included</h4>
                            <h6 class="headerr">Accommodation</h6>
                            <p class="para-6777">09 nights’ accommodation on double/Twin sharing at 5star hotels & AC premium houseboat
                                mentioned below or similar</p>

                        </div>
                        <!-- NEXT PAGE -->
                        <div class="container">
                         
                            <h6 class="head-876">Meals</h6>
                            <p class="prvr">Daily 09 Breakfasts, 01 Lunch & 09 Dinners included at the hotels/ houseboat as per the itinerary.

                            </p>

                            <h6 class="head-876">Transport
                            </h6>
                            <p class="prvr">All transfers & sightseeing as per itinerary on a private AC car (Inova )with driver (all tolls,
                                parking charges & driver allowances included).                                

                            </p>
                            <h6 class="head-876">Others</h6>
                            <p class="prvr">Entry passes for Munnar Tea Museum, Spice Plantation Munnar, Tea Plantation Munnar,
                                Kalaripayattu Show at Munnar & Kathakali Show at Periyar. <br>
                                Bamboo rafting with half-day guided jungle walk tour at Periyar National Park. <br>
                                Jeep ride at Munnar. <br>
                                Boat ride at Kollam backwaters. <br>
                                All local taxes included.
                                
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

@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none; background: rgb(240, 243, 245); height: 5000px;padding-top:80px;">
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
                    <h6 class="spn-2">Ho Chi
                        Minh City And
                        Mekong Floating
                        Market with 5 Days 4
                        Night.</h6>
                        <p>
                            <span class="seven">4N/5D</span> Flexi Package
                            <span class="sp-3">Amazing Saigon Tour Inclusive Deal 4N</span>
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
                    <div class="container">
                        <h4 class="spn-2">Trip Overview</h4>
                        <img src="{{ URL::to('/assets/images/package-image/saigon.png') }}" alt=""
                            style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹17,219.33

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
                                <h6 class="htpvp1">From 10 to 70 year olds</h6>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Ho Chi Minh City <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Ho Chi Minh City
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
                                    <p class="htpvp1">SAIGON PIONEER TRAVEL COMPANY
                                        LIMITED

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#178901

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
                        <p class="para-67"> Get ready for a whole day discover the city. Ho Chi Minh City – former name Saigon is Vietnam’s
                            largest city. Saigon is a fast paced city with a unique mix of French colonial architecture, Chinese
                            influences, a modern entrepreneurial spirit and numerous temples.
                            During 300 years history, under the name of Saigon, it was the capital of French colony of
                            Indochina and later of the independent republic of South Vietnam. After the war, this city was
                            officially renamed Ho Chi Minh City after President Ho Chi Minh. Today, Ho Chi Minh City is a
                            modern developing urban but still remain its connection with the past. Not so hard to find an ancient
                            pagoda or a building with French elements                     
                        </p>
                        </div>
                        </div>
                        <div id="wise">
                        <div class="container">
                            <h4 class="heading-30">Day Wise Details</h4>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="hed-0">Day 1:</h4>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="hd09">Airport Pick Up - Saigon By Night & Food Tour on Scooter
                                        (Dinner) </h4>
                                </div>
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
                                                We offer Pick up service with hotel
                                                located in center of district 1 near Ben
                                                Thanh Market,
                                                Bến Thành, 711100, Quận 1, Hồ Chí
                                                Minh, Vietnam
                                            </h6>
                                        </div>
                                    </div>                               
                                    <p class="para-6771 mt-5">Arrived to Ho Chi Minh City (Saigon) we pick up you at Tan Son Nhat Airport heading to your
                                        hotel to check-in and take a rest.
                                        - Our guide pick up you at your hotel for SaiGon By Night and Food Tour.
                                        Hightlight: <br>
                                        . Thich Quang Duc Statue<br>
                                        . Local market - Vietnamese traditional market<br>
                                        . The oldest apartment area in District 3<br>
                                        . The Biggest Flower market - District 10<br>
                                        . Cambodian market . Fashion Street - just for local<br>
                                        . Floating market - try coconut juice and see how local live in the boat<br>
                                        . The Slum area - See another life of local . District 7<br>
                                        - Explore the fantastic Saigon living area with full of light Go to unique island in district 4<br>
                                        - The smallest district, see our local life.<br>
                                        - After the trip we Drop-off you back to your hotel.   <br>     
                                    </p>
                                </div>
                            </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 390px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Cu Chi (Breakfast) </h4>
                                    </div>
                                </div> 
                                <p class="para-677">- Have a breakfast at your hotel. <br>
                                    - In the morning 7:30-8:00AM, we pick up you from your hotel for visit Cu Chi tunnels. Located
                                    60km from Ho Chi Minh City, Cu Chi is now considered a heroic district for its role during the
                                    American war in Vietnam. It is legendary for its network of tunnels, which extends over 220km, and
                                    is a popular destination for both Vietnamese and foreign visitors. Today, Cu Chi is a tranquil place of
                                    rice paddy fields with ducks and water buffalos bathing in the rivers alongside the road. But this
                                    peaceful rural scene belies the terrible destruction and defoliation caused by bombing and mines
                                    when Cu Chi was a "Free Target Zone". Cu Chi still contains plenty of evidence of the fierce battle
                                    that took place here and all over this area you will find the remnants of war. - After the trip we have
                                    2 Drop-off place: Ben Thanh Market or Bui Vien walking street. Free Time to visit HochiMinh City
                                    
                                </p>                             

                            </div>

                            <!-- page-3 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">My Tho - Ben Tre (Breakfast/Lunch)
                                        </h4>
                                    </div>
                                </div>
                             
                                <p class="para-677">- Have a breakfast at your hotel. - In the morning we pick up at your hotel. 8:00 AM Pick up at your
                                    hotel in HCMC. Depart for My Tho .Take a boat ride along the river, view the stilt houses and the
                                    fruit plantation along the river bank. Proceed to Tortoise island and have lunch among st the
                                    orchard. Enjoy a boat ride through Tan Thach natural canal in Ben Tre, cruising under the shadow
                                    of the water coconut trees. Visit a family business which epitomizes the idyllic rural lifestyle. Enjoy
                                    a rowing boat ride along the creeks. After taking a delightful walking through the fruit plantation,
                                    village. Proceed to Can Tho. Dinner on guest’s account. Overnight at your proposed hotel 3 stars in
                                    Can Tho.                                                                                                   

                                </p>                                
                            </div>


                            <!-- page-4 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 4:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Can Tho (Breakfast/Lunch)</h4>
                                    </div>
                                </div>
                                <p class="para-677"> 6:30 - 7:00 AM After breakfast, take the morning boat trip to visit the Phong Dien floating market
                                    which is at its busiest at this time of day. Keep cruising through the small channels system and visit
                                    a rice noodle making village. Experience the “Monkey Bridge” in the Delta. Visit a second floating
                                    market (Cai Rang). Return to Ho Chi Minh City.
                                    - After the trip we have 2 Drop-off place: Ben Thanh Market or Bui Vien walking street. Free Time
                                    to visit HochiMinh City
                                                                     
                                </p>                           
                            </div>
                          
                            <!-- page-5 -->
                            <div class="container" >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Ho Chi Minh City (Breakfast)</h4>
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
                                                We offer Pick up service with hotel
                                                located in center of district 1 near Ben
                                                Thanh Market,
                                                Bến Thành, 711100, Quận 1, Hồ Chí
                                                Minh, Vietnam
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                        <p class="para-677">- Have a breakfast at your hotel and check-out your hotel. Free time and easy until departure time,
                                            the driver takes you to the airport for your flight. End of services    
                                        </p>
                            </div>
                         <hr>
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h4 class="headerr">Accommodation</h4>
                               <p class="para-677">- 3 Nights accommodation in Hotel located in center of district 1. <br>
                                - 1 Night accommodation in Hotel located in center of Can Tho City near Night Market</p>
                               
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container">
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">- English speaking tour guide for all in-tour as per itinerary (if any)
                                </p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">- 1 Dinner (First day) <br>
                                    - 2 Lunch (Third and fourth day) <br>
                                    - 4 Breakfast (Second, third, fourth day)                                  
                                </p>

                                <h6 class="head-876">Transport
                                </h6>
                               <p class="para-6777">- Air-conditioned van/bus for pick up, transfer by private car at the airport
                            </p>
                                <h6 class="head-876">Others
                                </h6>
                                <p class="para-6777">- Airport pick-up & drop-off services by car <br>
                                    - All in-tour as per itinerary (if any) <br>
                                    - All entrance fee and sightseeing <br>
                                    - Water on the bus <br>
                                    - Group tour <br>
                                    - Services charges and government tax <br>
                                    - 24/7 hotline support guaranteed <br>
                                    - Boat trip at Mekong delta tour</p>
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

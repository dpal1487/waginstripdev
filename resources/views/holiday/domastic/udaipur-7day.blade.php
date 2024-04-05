@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none; padding-top:80px; height: 5000px;">
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
                    <h6 class="spn-2">Golden Triangle Tour
                        with Udaipur</h6>
                        <p>
                            <span class="seven">6N/7D</span> Flexi Package
                            <span class="sp-3">Amazing Udaipur Tour Inclusive Deal 7N</span>
                        </p>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Visit Humayun's Tomb in Delhi

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Explore the marble mausoleum of Itmad-ud-Daulah
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Tour the Amber Fort, City Palace & Hawa Mahal in Jaipur
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Tour Udaipur - the city of sunrise </h6>
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
                            <img src="{{ URL::to('/assets/images/package-image/udaipur.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹47,427.92

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
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp1">From 5 to 99 year olds    </h6>
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
                                            Udaipur
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
                                        <h6 class="htpvp1">#88877
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
                            <p class="para-67">Visit India and follow the famous Southern India Tour. Experience beaches & houseboat stay.
                                Travel through a land full of contrasts on this compact India tour, jam-packed with unforgettable
                                highlights.
                                This tour is a guaranteed departure, so even if you are the only one booked onto this tour, you will
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
                                        <h4 class="hd09">  Delhi
                                </div>
                                </div>
                                </div>

                                <!-- next-page -->
                                <div class="container">
                                    <div class="bd-1">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h4 class="head-632">Start Point</h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="hkl">New Delhi,
                                                    India
                                                    
                                                </h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div> -->
                                        </div>
                                        <p class="para-6771 mt-5">Today after breakfast meet your private tour guide and start your Delhi sightseeing by visiting
                                            Jama Mosque.When you reach the mosque,explore the interior with your guide. Next, visit Raj
                                            Ghat the place where the father of the Nation, Mahatama Gandhi was cremated. Next, Visit Qutub
                                            Minar,a UNESCO World Heritage Site. Qutub Minar is an excellent example of Afghan Architecture
                                            constructed with marble and red sandstone. And then stop at UNESCO World Heritage-listed
                                            Humayuns Tomb. Next, visit India Gate, memorial built in the year 1931 to commemorate the
                                            Indian soldiers.Overnight stay is at hotel in Delhi.                                            
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 170px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Delhi</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Today after breakfast drive straight to Agra.On arrival check inn at hotel.Take some rest and get
                                        ready for Agra Sightseeing. Start your sightseeing with a visit to the fascinating Taj Mahal - A
                                        Symbol of Love. Your guide in Agra will meet you at the Taj Mahal and will show you around the
                                        monument. Take time to admire the majestic and the most beautiful buildings in the world. Next,
                                        visit Agra Fort, one of the finest Mughal forts in India. Agra Fort, built by Emperor Akbar in 1565, is
                                        a massive red sandstone fort on the bank of Yamuna River. Your guide will explain the history of
                                        Agra Fort. Next, visit Itmad-ud-Daulah, a tomb which has a special place in the chronicles of both
                                        history as well as architecture. Itmad-ud-Daulah is actually a mausoleum that overlooks the
                                        Yamuna River. Admire the very first tomb in India that was made entirely out of Marble. Next, visit
                                        Mehtab Bagh, which is a series of 11 parks on the Yamuna's east bank. Overnight stay is at hotel
                                        in Agra.
                                                                          
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
                                            <h6 class="hd09">Agra Jaipur</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Today after breakfast drive straight to Jaipur. On arrival check inn at the hotel. Enjoy day at leisure.
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Jaipur Sightseeing</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast at the hotel, meet your private tour guide and start sightseeing of Jaipur by visiting
                                        Amber Fort. Enjoy the experience of ride on elephant back to and from the top of the hill on which
                                        the fort is situated. Your guide will explain about the rich history of Amber Fort. Next, visit City
                                        Palace in the heart of Jaipur is known for its blend of Rajasthani and Mughal architecture. Enjoy
                                        fine collection of textiles, costumes and armor at the City Palace.Next, visit Hawa Mahal or the
                                        Palace of Winds. It was constructed for the royal ladies to watch the royal processions without
                                        being seen. Finally, view the stargazing observatory of Jantar Mantar, built by the renowned
                                        astronomer, Maharaja Jai Singh. Overnight stay is at hotel in Jaipur.                                        
                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Jaipur Udaipur</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today after breakfast drive straight to Udaipur. On arrival check inn at the hotel . Enjoy day at
                                        leisure               
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Udaipur </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today we visit Udaipur, also known as the city of sunrise.We start our sightseeing with the visit of
                                        Sahelion-Ki-Bari. This Garden of the Maids of Honour is well laid out with extensive lawns and
                                        shady walks. After the visit of Garden of Maids we visit a Museum of folk art. This museum has a
                                        rich collection of Folk dresses, ornaments, puppets, masks, dolls, folk musical instruments and
                                        paintings on display. After a break we proceed to city palace, the biggest Palace in India, where 4
                                        generations of Maharajas added their contribution, is so carefully planned and integrated with the
                                        original buildings that it is difficult to believe that it was not conceived as a whole.The museum of
                                        the palace includes the beautiful peacock mosaic and miniature wall paintings of Indian mythology.
                                        Today we have an opportunity to visit a traditional painting school and see the famous miniature
                                        paintings done.In the evening we have a Boatride on the lake Pichola.The famous Lake Palace of
                                        Udaipur was the summer residence of the former rulers. The James bond Film Octopussy was
                                        shot here and made this palace more known in the west. Overnight stay is at hotel in Udaipur.                                        
                                    </p>
                                </div>
                                <hr>
                               
                                
                                <!-- page-5 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Udaipur Departure

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
                                                    Udaipur,
                                                    India                                            
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Today on time transfer to the airport to board a flight for your onward journey
                                        
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">Accommodation in a 3 star hotel

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">English Speaking guide during city sightseeing
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Daily breakfast at hotels                                       
                                      
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Surface Transportation by air-conditioned Toyota Innova with experienced chauffeur as per the
                                    itinerary
                                    Boat Ride at Udaipur
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Sightseeing as per the itinerary (However you have the flexibility to explore more) <br>
                                        Monument Enterance fees <br>
                                        Elephant ride at Jaipur <br>
                                        All interstate taxes, permits, parking, road tax, toll taxes and fuel charges etc are included
                                        All government applicable taxes and service charges <br>
                                        This tour is a guaranteed departure, so even if you are the only one booked onto this tour, you
                                        will still be guaranteed to depart!                                        
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

@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 5600px;padding-top:80px;">
                   <div class="row">
                    <div class="col-sm-7">
                        <h1 class="heading-1">
                            <span class="spn-1">Full Itinerary & Trip Details</span> </h1>

                    </div>
                    <div class="col-sm-5">
                        <img src="{{ URL::to('/assets/images/images/85555.png') }}" alt="" style="width: 260px;">
                        <img src="{{ URL::to('/assets/images/package-image/85555.png') }}" alt="" style="width: 70px; margin-left:100px">

                    </div>

                   </div>
                    <h6 class="spn-2">Oz Adventure Sydney
                        s Best</h6>
                    <p>
                        <span class="seven">7N/8D</span> Flexi Package
                        <span class="sp-3">Amazing  Sydney Tour Inclusive Deal 7N</span>
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
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Save Now, Travel Later with Unlimited Date Changes</h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>See the famous Sydney Opera House & Bondi Beach
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Jet boating & sailing on Sydney Harbour
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Learn to surf, snorkelling & sandboarding

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>See koalas and kangaroos in the wild
                    </h6>
                    
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/images/sydney.jpg') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹52,211.69
                                    </h6>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">DURATION
                                    </h6>
                                    <h6 class="htpvp1">8 days</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Sydney  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Sydney
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
                                    <h6 class="htpvp12">Multi

                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#108059
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
                        <p class="para-67">Oz Adventure is an awesome 8 day group tour showing you the best of Sydney and beyond that’s
                            perfect for those on a tourist visa.
                            We’ll sort your visa, 7 nights accommodation, pick you up from the airport. You’ll go jet boating,
                            experience the world famous Bondi Beach, sail around Sydney harbour, party at some of Sydney’s
                            best bars and clubs, road trip north and learn to surf, go sand boarding, hang out with wild
                            kangaroos, have a spectacular farewell dinner and much more. All with a group leader from the
                            moment you step off the plane and an instant group of friends! <br>
                            + We'll plant 10 trees for every INTRO Travel tour booking
                            
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
                                    <h6 class="hd09">Arrive and Meet your Group
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
                                                Sydney,
                                                Australia
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">Touching down in sunny Sydney, we’ll meet you at the airport and take you to your centrally located
                                        hostel to settle in. You’ll then meet up with your travel crew and get excited for the adventures to
                                        come.
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
                                        <h4 class="hd09"> Private Sydney Harbour Cruise</h4>
                                    </div>
                                    </div>
                                          <p class="para-677">Today we’ll get you orientated with one of our favourite cities in the world, Sydney! We’ll learn about
                                            Sydney’s fascinating history and culture before we head out on a private sailing cruise around
                                            Sydney Harbour, which is undoubtedly the best way to see Sydney’s iconic sights including the
                                            Harbour Bridge and Opera House. Tonight, we’ll see what Sydney’s nightlife is all about!                                            
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
                                        <h4 class="hd09"> Sydney Orientation & Night Out</h4>
                                    </div>
                                </div>
                                <p class="para-677">We’ll get you orientated with one of our favourite cities in the world, Sydney! We’ll learn about
                                    Sydney’s fascinating history and culture before providing you with all the travel information you
                                    could need to plan your adventures around Australia and the rest of the world. Tonight, we’ll see
                                    what Sydney’s nightlife is all about!                  
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
                                        <h4 class="hd09">Bondi Beach & BBQ
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">Today we visit the world famous Bondi Beach where you can take a swim or just relax and work on
                                    your tan. We’ll then do the famous Bondi to Coogee Coastal walk and enjoy an Aussie beach BBQ
                                    and a few cold beers!                                    
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
                                        <h4 class="hd09">Munich, Fussen, Rothenburg, Frankfurt</h4>
                                    </div>
                                </div>
                                <p class="para-677">Today we travel to Port Stephens, home of the largest sand dunes in the Southern Hemisphere.
                                    But we’re not just here to admire the view, we’re here to sand board! We’ll then head to a brewery
                                    for a refreshing beer and wine tasting. Tonight, we’ll settle in to our traditional Aussie bush bungalow
                                    and swap stories over drinks and a BBQ
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
                                        <h4 class="hd09">Learn To Surf</h4>
                                    </div>
                                </div>
                                <p class="para-677">Wake up to the sun rising over the Aussie bush before jumping in 4WDs and cruising along a
                                    beautiful secluded beach to learn to surf with qualified surf instructors. We'll then hike to the top of
                                    Port Stephens for beautiful views across the bay. Enjoy a relaxing afternoon to spot some wild
                                    kangaroos and even a koala if you're lucky before making our way back to Sydney for a night out
                                    
                                    
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Onward Travel Planning & Farewell Dinner</h4>
                                    </div>
                                </div>
                                <p class="para-677">It’s a big life admin day today as we help you sort out your onward travel. We’ll answer any
                                    questions you have and help with any plans you need to make. Our friendly team are total pros and
                                    are full of knowledge and advice, so we can help you and your new friends sort the trip of a lifetime.
                                    Once you’ve sorted your onward travel plans we’ll be dressing sharp for a tasty farewell dinner
                                </p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Check Out and Onward Travel</h4>
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
                                                Sydney,
                                                Australia
                                            </h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">Your unforgettable 8 day adventure comes to an end today, but your time in Australia is only just
                                    beginning. You’ll now be prepped and ready for the next leg alongside the new friends you’ve made,
                                    and we’ll be there for support and advice every step of the way.                                    
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-6777"> 6 Nights Hostel (Nomads Sydney) <br>
                                        1 Night Bush Bungalow (Port Stephens)
                                        </p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">You'll get an awesome group leader to provide 24/7 support during & after your trip </p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">1 Breakfast, 2 Lunches, 2 Dinners</p>
                                
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Airport transfer - an included airport transfer will take you to the hostel where we will meet you.
                                    All other transport during the trip is included.
                                    </p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">Airport Transfer <br>
                                    City Orientation <br>
                                    Private Sydney Harbour Cruise <br>
                                    Bondi Beach & Coastal Walk <br>
                                    Beach BBQ <br> 
                                    Port Stephens Overnight Trip  <br>
                                    Sandboarding <br>
                                    Brewery Tour with Wine Tasting <br>
                                    Learn to Surf Lesson <br>
                                    Sydney Bar Crawl <br>
                                    Farewell Dinner <br>
                                    Aussie SIM Card <br>
                                    Unlimited Free Internet <br>
                                    Free Mail Holding <br>
                                    24/7 Help & Support in Oz <br>
                                    Help with all your onward travel in Australia and beyond. <br>
                                    Help with finding accommodation <br>
                                    Important: You need a visa to enter Australia. Please check your visa requirements before
                                    travelling. <br>
                                    + We'll plant 10 trees for every INTRO Travel tour booking!</p>
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



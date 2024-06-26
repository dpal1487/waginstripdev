@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none; padding-top:80px;height: 3900px;padding-top:80px;">
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
                    <h6 class="spn-2">Speical Varanasi And
                        Bodhgaya tour
                        </h6>
                        <p>
                            <span class="seven">4N/5D</span> Flexi Package
                            <span class="sp-3">Amazing Varanasi  Tour Inclusive Deal 4N</span>
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
                                        <h6 class="psd-1">Email: customercare@wagnistrip.com
                                        </h6>
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
                            <img src="{{ URL::to('/assets/images/package-image/varansi.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹58,449.90
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
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
                                        <h6 class="htpvp190">From 18 to 99 year olds    </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Varanas<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Varanasi
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
                                        <p class="htpvp1">Real Viaggi India
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#228228
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
                            <p class="para-67">This itinerary covers two main pilgrim spots of Hindus and Buddhists. The tour stretches for four
                                nights and five days covering Varanasi, Bodhgaya and Sarnath. The tour is primarily focused on
                                religious attractions. A few natural attractions are also added to the itinerary. The itinerary is
                                deliberately kept open during many days of the trip to customize it as per your taste.
                                Varanasi is one of the oldest city of the world that is still inhabited. It was the heart of Hinduism
                                birth. You can find many temples along the banks of the holy river, Ganges. Sarnath is the place
                                where Lord Buddha preached for the very first time after his enlightenment. Bodhgaya is famous
                                for Buddha temples, Vishnu temples and others. You can also find the Bodhi tree of enlightenment
                                here.                                                                                                                         
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
                                        <h4 class="hd09"> Varanasi
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
                                                <h6 class="hkl">Varanasi,
                                                    India
                                                </h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div> -->
                                        </div>
                                        <p class="para-6771 mt-5">The tour starts with a representative picking you up from railway station or airport and escorting
                                            you to a pre-booked hotel. The rest of the day until evening is free for leisure activities, shopping or
                                            short sightseeing that you desire. Right before sunset, you will be taken to DashashwamedhGhat
                                            to enjoy Ganga Aarti. This ritual takes place every evening during sunset. During this ritual, priests
                                            perform synced rituals and thousands of small oil lamps are let to float on a leaf on the river. The
                                            river will be filled with small balls of fire like the sky. It is an iconic attraction of Varanasi. Since the
                                            ghatwill be filled with devotees and tourists, you can hire a boat and watch the ceremony from the
                                            river. It is an important attraction in Varanasi.
                                            Overnight stay in Varanasi
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 240px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Varanasi – Sarnath – Varanasi</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">The trip starts very early in the morning even before your breakfast. Early morning Ganges cruise
                                        on a boat is another iconic tourist attraction here for two main reasons. The first reason is the ghats
                                        that you find along your route. Each ghat has a specialty. For instance, ManikarnikaGhat is a spot
                                        to find Hindu cremation ceremonies. Moreover, you can find many people taking holy bath or
                                        performing rituals along the sides of the river. The second reason is the aesthetically pleasing river
                                        during a foggy morning. <br>
                                        After the cruise, you will be taken on a sightseeing tour that covers important temples like
                                        Annapurna temple, SankatMochan Hanuman temple, Bharat Mata temple, Kashi Vishwanath
                                        temple, ManasMandir, BHU and others. Later, you will be escorted back to your hotel for breakfast
                                        and brief rest. <br>
                                        By early afternoon, you will be taken on a road trip to Sarnath. Sarnath is an important Buddhist
                                        pilgrim spot. This is the place where Lord Buddha gave his first sermon after enlightenment. Top
                                        attractions in Sarnath are Chaukhandi stupa, Buddha temple, Dhamekha stupa, archeological
                                        museum and others. You will return to Varanasi by early evening. The rest of the day is free for
                                        leisure shopping, sightseeing or resting.
                                        Overnight stay in Varanasi
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
                                            <h6 class="hd09">Varanasi – Bodh Gaya</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After breakfast, you will be taken on a road trip to Bodhgaya. After checking into a hotel, you will be
                                        taken on a sightseeing tour that covers Bodhi tree, Maha Bodhi temple, Buddha statue and others.
                                        Apart from these Buddhist attractions, you will be taken to Ram Chura, Janki temple, SitaKund,
                                        HaleshwarAsthan and others.
                                        Overnight stay in Bodhgaya.
                                        
                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Bodhgaya - Varanasi                                            </h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After breakfast, you will be taken on a road trip to Gaya. Gaya is famous for unique temples. There
                                        is a temple in Gaya where you can find Lord Vishnu’s footprint. Top tourist spots covered are
                                        Vishupad temple, Vishnu temples, Chinese temple, Tibetan temple, Japanese temple, Phalguna
                                        River and others. By early evening, you will be taken on a road trip back to Varanasi.
                                        Overnight stay in Varanasi.
                                    </p>
                                </div>
                                <hr>
                                <!-- page-4 -->
                                                           
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">  Varanasi - Departure                                                                                           
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
                                                    Varanasi,
India                              
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast, the rest of the day until your departure train/flight is free. You will be escorted to the
                                        railway station or airport as per your choice. You can also skip it and choose to stay back in the
                                        city and enjoy the other places on your own
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">3 star Accommodation in standard category of rooms at all hotels</p>
                   
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <p class="prvr">
                                        English speaking guide as per places mentioned in itinerary.
                                        </p>
                                    
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Meal Plan on Bed & Breakfast at all places accordingly
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">All Transfers & sightseeing as per itinerary by air-conditioned private vehicle for the entire tour
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

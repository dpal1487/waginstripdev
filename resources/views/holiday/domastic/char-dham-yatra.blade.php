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
                    <h6 class="spn-2">Char Dham Yatra
                        Luxury Helicopter
                        Package 05 Nights
                        /06 Days from
                        Dehradun</h6>
                        <p>
                            <span class="seven">5N/6D</span> Flexi Package
                            <span class="sp-3">Amazing Char Dham Yatra Tour Inclusive Deal 5N</span>
                        </p>
                    <!-- <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Rickshaw ride through the French Quarter and explore the "36 Streets" of Hanoi
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Ride bicycles into the countryside and enjoy a hands-on cooking lesson from the locals

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Kayak, swim and explore the remarkable caves of the beautiful UNESCO Halong Bay
                    </h6> -->
                    <!-- <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span></h6> -->
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
                            <img src="{{ URL::to('/assets/images/package-image/Char Dham Yatra.gif') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-7">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹235,000.00

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">6 days</h6>
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
                                        <h6 class="htpvp1">Dehradun<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Dehradun
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
                                        <p class="htpvp1">Memorable India Journeys Private Limited
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#231205
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
                            <p class="para-67">Get ready for the best-selling luxury package of Char Dham Yatra by Helicopter from Dehradun.
                                This divine yatra starts Dehradun covering all Dhams of Uttarakhand: Yamunotri, Gangotri,<br>
                                Kedarnath and Badrinath and then again back to Dehradun. <br>
                                Departure and Return Location:- DEHRADUN (UTTARAKHAND INDIA)<br>
                                Chardham Yatra by Helicopter is the most convenient way to reach Uttarakhand. Especially, if you
                                are looking for a short trip, Chardham yatra By Helicopter is the best way to explore a convenient
                                visit away from ailing health issues and tight schedules.<br>
                                Have a look at the detailed Chardham tour itinerary that will allure you to book Chardham package
                                right away. Best Offer for Charter Helicopter booking tour package of all Char Dhams of
                                Uttarakhand from Dehradun.                       
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
                                        <h4 class="hd09">Dehradun-Shahastradhara Helipad-Yamunotri</h4>
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
                                                <h6 class="hkl">
                                                    Dehradun Airport/Railway station,
                                                    Jolly Grant Airport Dehradun, Doiwala, Rishikesh,
                                                    Uttarakhand, India
                                                                                                     
                                                </h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div> -->
                                        </div>
                                        <p class="para-6771 mt-5">Co-ordinator will take you to the state government helipad on Sahastradhara Road, Dehradun from
                                            where we will fly for Yamunotri. You are advised to leave your hotel early and remain energetic
                                            throughout this devotional Chardham yatra.e welcomed by our handlers; they will unload your
                                            baggage and take you to the hotel. Relish a fresh breakfast and leave for darshan in palki to
                                            Yamunotri temple which is around 5 km trek. Approximate time taken for Yamunotri Temple
                                            Darshan: Approximately 5 hrs 30mins (round-trip). Sightseeing at Kharsali: Hot Spring at Yamunotri
                                            Temple, Yamuna Mata Temple, Shani Temple. <br>
                                            After divine darshan, you’ll return to the hotel by lunchtime. Have your lunch and spend a few hours
                                            relaxing. In Evening pay a visit to the ancient Shani Temple nearby and spend the night at your
                                            hotel. <br>
                                            Hotel Used:-Yamunakriti or Similar
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
                                            <h4 class="hd09">Kharsali - Harsil - Gangotri</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Enter the most beautiful valleys in Uttarakhand : Harsil near Gangotri. After landing at Jhalla, <br>
                                        passengers will be taken to Harsil village & checked in the hotel. Our handlers will take you to the
                                        nearby Luxurious hotel near Harsil. After Early morning breakfast, you willl leave for Gangotri
                                        temple VIP darshan in Cab which is 20 km away from the hotel. Tune yourself to the high altitude
                                        and enjoy the picturesque paradise on earth - Gangotri Dham. <br>
                                        Approximate Time taken for Gangotri Temple Darshan: 3hrs 30 mins (round-trip). The road
                                        distance to Gangotri temple is approx. 25 km, which is roughly a 50-minute drive. <br>
                                        You’ll get all the basic and leisure facilities such as a premium accommodation with ensuite
                                        washrooms, delicious vegetarian food, Short walks and local sightseeing around the beautiful
                                        unexplored valley. Your second day of Chardham yatra package by helicopter ends with a freshly
                                        prepared dinner and an evening bonfire before falling asleep. After early morning breakfast, you will
                                        leave for Kedarnath. <br>
                                        Hotel used:-Himalyan Nature Resort/Harsil Retreat or Similar
                                                                   
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
                                            <h6 class="hd09">Harsil - Guptkashi/Sersi - Kedarnath - Sersi</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Passengers will be checked-out early and will arrive at Sersi will be by 0830 hrs.
                                        Sersi – operate the shuttle services for Kedarnath ji shrine from here. Passengers will be ferried to
                                        Kedarnath Dham for darshan in a shuttle services flight,
                                        after their breakfast. Approximate time taken for Kedarnath Temple Darshan: 02 hours.
                                        Natural peace, religious zest and snow-capped peaks of Kedarnath Dham will enchant your heart
                                        and making it most heritage site among all Chardhams. You will arrive at Guptkashi/Sersi helipad
                                        from Harsil, after changing the chopper you’ll fly for Kedarnath which is 10 minutes flying from
                                        Guptkashi. We may have to wait sometime from 10 minutes to 3 hours during chopper change.                                                             
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Sersi - Badrinath</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Passengers will have breakfast by 0700 hrs at Sersi & be ready for their flight to Badrinath by 0800
                                        hrs. Passengers will be taken for darshan to Badrinath temple in the afternoon after
                                        lunch.
                                        Approximate time taken for Badrinath Temple Darshan: Approx. 01-1.5 Hrs is taken to have
                                        darshan at the Badrinath Temple. Passengers will be taken from Hotel to the temple by car.
                                        Sightseeing at Badrinath: Mana Village – Known as the ‘Last village of India’, due to its proximity to
                                        the China border. Evening Aarti at Badrinath Temple – Swaran/Chandi Aarti (on additional payment
                                        basis directly at Badrinath).
                                        Hotels used:-Badri Retreat/Snowcrest/Sarovar Portico or similar
                                        
                                    </p>
                                </div>
                                <hr>
                              
                                
                              
                                <!-- page-5 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Badrinath-Dehradun</h4>

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
                                                    Dehradun Airport/Railway station,
                                                    Jolly Grant Airport Dehradun, Doiwala, Rishikesh,
                                                    Uttarakhand, India                                        
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Passengers who have already pre-booked Maha Abhishek Puja, have to be ready early morning
                                        by 0330 hrs. Puja shall take place from 0430 hrs to 0630 hrs.
                                        Estimated time of arrival will between 0930-1400 hrs at Sahastradhara. On arrival, our team will be
                                        present to receive the passengers. Later, they will be taken to Dehradun hotel to collect the luggage
                                        from cloak rooms, and then be dropped to airport/railway station.
                                        After the final transfer, we will bid farewell to the passengers. This is the end of the luxury
                                        Helicopter Chardham yatra.
                                        Note: Timings are tentative and may get changed subjected to permissions and weather
                                        conditions.
                                                                             
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">01 Night complementary stay at Dehradun with Dinner on day First of arrival. <br>
                                    04 Nights Hotel accommodation at all Dham on twin/Double sharing basis
                                    </p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">Local sightseeing’s with Guide
                                    VIP Darshans at Temple with Pony, Palki and Cars included
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">All Pure Vegeterian Meals are included as mentioned in the detailed itinerary plan                           
                                      
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Exclusive Helicopter Package from Dehradun to Yamunotri, Gangotri, Kedarnath and Badrinath and
                                    Dehradun Back <br> 
                                    Dehradun Airport transfers to Hotel and back to Airport included. <br>
                                    VIP Darshans at Temple with Pony, Palki and Cars. <br>
                                    Kedarnath Helicopter Shuttle service included
                                    
                                    </p>
                                    <!-- <h6 class="head-876">Others</h6>
                                    <p class="prvr">Halong Bay Junk boat cruise - opt to swim, kayak and explore caves <br>
                                        1 overnight sleeper train Hanoi to Hue in basic 4 berth cabin (or opt to fly - see Add-ons for
                                        details) <br>
                                        Bicycle ride to Tra Que village and cooking demonstration
                                        </p> -->
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

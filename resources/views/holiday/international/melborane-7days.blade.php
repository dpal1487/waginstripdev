@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 6500px;padding-top:80px;">
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
                    <h6 class="spn-2">Welcome to
                        Melbourne</h6>
                        <p>
                            <span class="seven">6N/7D</span> Flexi Package
                            <span class="sp-3">Amazing Melbourne Tour Inclusive Deal 6N</span>
                        </p>

                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Get up close to
                        koalas and kangaroos!e</h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Learn to surf like a
                        pro
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>See Phillip Island's
                        famous tiny penguins
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Visit St Kilda Beach

                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i>Discover Melbourne's
                                Street Art, Food and Laneway Scenes
                            </span></h6>
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
                            <img src="{{ URL::to('/assets/images/package-image/malbourane.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹55,724.44
                                        </p>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 style="padding-left: 6px; color: black; padding-top: 15px;">DURATION
                                        </h6>
                                        <h6 class="htpvp1">7 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 6 to 96 year olds</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Melbourne <i class="fa fa-arrow-right"
                                                aria-hidden="true"></i>
                                            Melbourne
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
                                        <p class="htpvp1">To Travel Pty Ltd (Welcome To Travel)



                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#103227
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- next-page -->
                        <!-- second-page -->
                        <div id="iti">
                        <div class="container mt-5">
                            <h4 class="heading-30">Itinerary</h4>
                            <h3 class="head-1">Introduction</h3>
                         
                            <p class="para-67">
                                This tour is the perfect Australian adventure as it ticks off so much of your Australian
                                bucket list. It
                                is perfect for backpackers, students, au pairs or Working Holiday travellers. This tour
                                is for people
                                who want to do more, see more, and make the most out of their time travelling. There is
                                truly no
                                better way to see Melbourne than with the Welcome To Travel crew and your new travel
                                family.

                            </p>
                            <p class="para-67">Created by travellers for travellers, Welcome to Melbourne: the 8 Day is
                                Australia's most
                                unique, diverse and most of all FUN package.
                                Also, this tour is an added bonus for anyone travelling on a working holiday visa as the
                                team will set you up with your phone sim, tax file number and bank account so you're
                                ready
                                for the rest of your Australian adventure.
                            </p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 1:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Arrival Day </h4>
                                    </div>
                                </div>

                                <!-- next-page -->
                                <div class="container mt-5 mb-5">
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
                                                    Melbourne,
                                                    Australia


                                                </h6>

                                            </div>


                                        </div>
                                        <p class="para-6771 mt-5">This will be your arrival day with all the action
                                            starting on Monday morning. This means you need
                                            to be in Melbourne for the Sunday night.
                                            Landing a few days before? No worries! Your airport pickup is included for
                                            any day before the tour
                                            and we can organise any required extra nights at the YHA accommodation.
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
                                            <h4 class="hd09"> Meet and Greet, City Walking Tour & Welcome Dinner</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Our morning meet and greet will see you meet your new travel
                                        family and learn why this will be the
                                        best week of your life. You'll get to know each other as a group as we take you
                                        on a walking tour
                                        around Melbourne, showing and telling you everything you need to know about this
                                        fantastic City!
                                        We will end the day with a Welcome Meal (dinner included) on Southbank, one of
                                        Australia's most
                                        iconic settings. <br>
                                        INCLUDED: Dinner and a drink </p>

                                </div>

                                <!-- page-3 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 3:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Markets, Street Art and Food+Drink Tour</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Melbourne is home to the Southern Hemisphere’s biggest
                                        undercover market and is a true treat for
                                        all senses.
                                        After haggling a bargain and exploring the wonders of Queen Victoria Market’s
                                        many stalls we will
                                        spend the afternoon in the most Melbourne way possible, eating and drinking.
                                        Melbourne has more food establishments than anywhere in the world so we thought
                                        the best way
                                        to showcase that was to create an exclusive food tour just for you! As part of
                                        this we even include
                                        a tour of Melbourne's street art too-what a day! <br>
                                        INCLUDED: Snacks/tasters, dinner and a drink.
                                    </p>

                                </div>


                                <!-- page-4 -->
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Beach Time, Wine-Tasting & 100s of Tiny Penguins</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Sure, we want you to experience this fantastic city, but we also want you to see it’s beautiful
                                        surrounds. Mornington Peninsula and Phillip Island are two of the most incredible yet barely
                                        touched spots in Australia.
                                        We will be having some much needed beach time, we’ll be wine tasting, heading to spectacular
                                        scenic lookouts and to finish off we’ll be watching over 500 PENGUINS running across the beach.
                                        Yes, you read that right! <br>INCLUDED: 1 lunch, 1 dinner and Wine Tasting
                                        
                                    </p>

                                </div>
                                <!-- page-5 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Bucket List Ticked: Surfing, Kangaroos and Koalas</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Australia is known for its famous surf and today you’ll complete another Australian must do as you
                                        learn how to ride a wave.
                                        This day includes a few hidden secrets along the way but all you need to know is that after surfing
                                        you will tick off another Aussie must-do as you get up close to KOALAS and KANGAROOS. <br>INCLUDED: Lunch                                        
                                    </p>

                                </div>
                                <!-- page-6 -->
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Work and Travel Help and St Kilda Beach</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">It is time to start thinking about what you’ll do next in Australia. In the morning we'll be having a
                                        presentation on EMPLOYMENT for everyone on a working holiday. We’ll cover absolutely
                                        everything before focusing on TRAVEL. We'll tell you everything you need to know about travelling
                                        this incredible country so you can make the most of your time on this side of the World.
                                        October-March: Melbourne has many celebrated suburbs and St Kilda is as famous as they get.
                                        We’ll head to this quaint beach suburb taking in its iconic promenade, alfresco cafes and famous
                                        landmarks. The afternoon will be spent lazing at the beach, lazing in the sun, playing games and if
                                        you want, getting in the ocean!                                        

                                    </p>

                                </div>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Expert Life Admin & Bar Crawl                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Whether it’s employment, travel or both, the info from Friday’s presentations will have sunk in and
                                        this is your time to discuss your next steps with an AUSTRALIA EXPERT. Every traveller is
                                        different so that’s why you will have the chance to put your ideas and plans for Australia into action
                                        in a ONE ON ONE meeting that will help you with everything including employment,
                                        accommodation and travelling this beautiful country.
                                        By the end of your meeting you will feel relaxed and excited about your future , meaning it's the
                                        perfect time to celebrate. How? By joining Melbourne's largest bar crawl of course! <br>
                                        INCLUDED: 4 drinks and pizza                                                                             

                                    </p>

                                </div>
                                <!-- page-7 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Rooftop BBQ & Travel Family Farewells</h4>
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
                                                    Melbourne,
                                                    Australia
                                                </h6>

                                            </div>
                                         

                                        </div>
                                    </div>
                                    <p class="para-677">And just like that, it’s nearly over.....
                                        What better way to spend our final Sunday afternoon together than lazing on a rooftop overlooking
                                        the city with your new travel family?
                                        We’ll crank up the BBQ and soak up the skyline as we talk about the memories made over the
                                        best week of your life. <br>INCLUDED: BBQ Lunch                                        

                                    </p>
                                </div>
                                </div>

                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h4 class="headerr">Accommodation</h4>
                                    <ul>
                                        <li>
                                             6 Nights at YHA Metro Melbourne </li>
                                             <li> 1 Night at YHA Phillip Island
                                        </li>

                                    </ul>
                                </div>

                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <p class="prvr">Australian Expert Guide <br>
                                        Team of experts to help with all of your Australia needs post tour</p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr2">6 Lunches </p>
                                    <p class="prvr2">6 Lunches </p>
                                    <p class="prvr2">Incredible tastings on the Food and Drink tour </p>
                                    <h6 class="prvr1">And 4 drinks on the bar crawl!                                    </h6>
                                    <h6 class="head-876">Transport
                                    </h6>
                                    <ul>
                                        <li>Private Airport Pick Up</li>
                                            <li>Walking</li>
                                                <li>Trams</li>
                                                    <li>Tour Bus</li>
                                    </ul>
                                    <h6 class="head-876">Others</h6>
                                    <ul>
                                        <li>•Airport pickup (any day) <br>
                                            •7 nights accommodation (extra can be arranged). <br>
                                            •City Tour. <br>
                                            •Welcome Dinner and drink.<br>
                                            •2 day/1 night getaway.<br>
                                            •Surf Lesson.<br>
                                            •Wildlife Park Tour<br>
                                            •Phillip Island Penguin Parade.<br>
                                            •Food, Drink and Street Art Tour (includes chocolate, ice cream, beers and dinner!)<br>
                                            •St Kilda Beach Day<br>
                                            •Wine Tasting.<br>
                                            •Bar Crawl with 4 drinks, pizza and club entry.<br>
                                            •Farewell BBQ<br>
                                            •Entry to Eureka Skydeck (Winter)<br>
                                            •Secret Inclusions throughout the week…<br>
                                            WORKING HOLIDAY HELP<br>
                                            •Bank Account Set Up.<br>
                                            •Tax File Number set up.<br>
                                            •Australian Sim Card.<br>
                                            •Employment Help.<br>
                                            •Life-long membership and support.<br>
                                            •Discounted RSA/RSG Courses.<br>
                                            •Medicare Help<br>
                                            •Luggage Storage<br>
                                            •Mail holding<br>
                                            </li>
                                    </ul>
                                </div>
                                <!-- NEXT PAGE -->

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
                                    <button class="btn btvn" style="background-color:  rgb(234, 100, 10); color: #fff; margin-left: 270px !important; margin-top: 50px !important; border: 1px solid  rgb(234, 100, 10);">BOOK NOW</button>
                                        </div>
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

@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">

        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 5700px;padding-top:80px;">
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
                    <h6 class="spn-2">Greece Island Hopper
                        - Dose of Travel
                        Exclusive</h6>
                        <p>
                            <span class="seven">8N/9D</span> Flexi Package
                            <span class="sp-3">Amazing Greece Island Tour Inclusive Deal 8N</span>
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
                            <img src="{{ URL::to('/assets/images/package-image/greece.webp') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹153,507.24


                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">9 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp1">From 1 to 90 year olds    </h6>
                                    </div>
                                </div> -->

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Athens<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Santorini
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
                                        <p class="htpvp1">TruTravels
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#234277
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
                            <p class="para-67">We know you're looking for the summer of a lifetime! To spend your days without a care in the
                                world exploring all of Greece's hotspots and hidden gems, each day a different beach, a different
                                cocktail in hand. Start in Athens and finish in Santorini, stopping at every bucket list island in
                                between. 9 days of pure bliss! Sounds dreamy right? Spend your days visiting ancient Athens,
                                snorkelling in crystal clear waters in Santorini, hitting up Mykonos' best beach clubs or sipping
                                cocktails till the sun comes up in Ios. Greece is the destination of dreams. Time to make those a
                                reality! We're in...are you?.                              
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
                                        <h4 class="hd09">  Athens</h4>
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
                                                <h6 class="hkl">Athens,
                                                    Greece</h6>
                                            </div>
                                            <!-- <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div> -->
                                        </div>
                                        <p class="para-6771 mt-5">YAMAS you're in Greece baby! Fly into Athens International Airport where you'll start the next 9
                                            EPIC days. We take you to our accommodation in Athens. Chill out, relax, and soak in the warm
                                            Greek heat. You're on holiday after all. Later on, we meet up for a big welcome dinner. Meet your
                                            new TruFam, get to know each other over an Ouzo shot or 4, chat each other's ears off and find
                                            out all the essentials, name, age, where they're from, whether they prefer cats or dogs. You know,
                                            the important stuff!                                                              
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
                                            <h4 class="hd09">Athens</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Have a chilled morning before we explore Athens by foot. We take a walking tour to explore Athens
                                        hidden gems and cultural hotspots, a sightseeing tour showing you the real Tru Greece. After we
                                        head to the ancient Acropolis Parthenon, built to be home to Athena, Greek Goddess of the City.
                                        The Acropolis oozes in culture and history and is the epitome of Greek heritage today. People
                                        travel from all around the world to visit the Acropolis, so walk around and take it all in. It really is a
                                        Bucket List destination. Afterwards, we head to the artsy neighbourhood of Exarchia. The walls are
                                        filled with colourful murals, the local shops are edgy and quirky and the company? Well...it couldn't
                                        be better. We spend the evening here for some 10/10 greek food, fill yourself up on saganaki, eat
                                        so much Tzatziki you think you'll turn into yoghurt or skip the food and wash the epic day down
                                        with a Mythos. (That's Greece's local beer by the way)
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
                                            <h6 class="hd09">Athens/Mykonos</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">TWe're up early, and we're off to Mykonos! We grab our transport down to the port where we hop on
                                        their ferry to our next destination. Mykonos, and yep we’re going big! We’re staying at Paradise
                                        Beach Club where we’ll be spending the day sipping cocktails, dancing on the beach and living our
                                        Tru best life. Throw out those terrible dance moves to the sounds of the resident DJ sipping on
                                        mojito after mojito. Is this paradise? Well yes, quite literally it is. The sun goes down as we party
                                        the night away. We grab dinner and see where the night takes us!                                        
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Mykonos</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">It’s a chilled morning, we need it. We’re heading North to a quiet, idyllic beach where we’ll relax for
                                        the afternoon. We grab a spot of lunch before we head to Mykonos Old Town. You’ve seen the
                                        pictures, white cobbled streets, stunning white washed windmills and blue top domes. It’s an
                                        instagrammer’s dream. Grab a souvenir, get matching tops with the TruFam or just treat yourself to
                                        cookies and cream ice cream. In the evening we’ll watch the sun go down over dinner and see
                                        where the night takes us!                                       
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Mykonos/Íos</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">We're up early and off to the famous island of Ios! It's time to let loose! We check into our ultra cool
                                        party hotel. Ios is known as one of the best islands to visit in Greece, and we're about to show you
                                        why! Spend the afternoon wandering the white and blue alleyways of the cobbled greek streets,
                                        with every twist and turn you'll find more and more beauty. Whatever you fancy Ios has it. In the
                                        evening we freshen up before we head out to Ios' famous square! We're going on a bar crawl baby,
                                        a TruTravels bar crawl that is! We take you to the best spots with the best bartenders. Dance on
                                        the tables, party till the sun comes up, bust out all those dance moves you've been practising. Will
                                        this night go down in history? Hell yea! We don't do average, we do legendary.                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">os </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Wake up, you may have a bit of a fuzzy head, but do you know what fixes any hangover?
                                        Mimosas! today we’ve got the ultimate TruExclusive for you. We jump on a small boat and sail to a
                                        super secluded beach where we’ll relax for the day. The beach is pristine and beautiful and one of
                                        Ios’ best hidden spots. On the way we stop to swim and snorkel in sparkling aqua hidden caves,
                                        snorkel amongst a shipwreck and cool off in the crystal clear waters. At lunch time we put on a
                                        spectacular spread as we host TruTravels very own PROSECCO PICNIC! Spend the afternoon
                                        sunbathing, bubbly in hand, without a care in the world. Take a dip in the ocean whilst sipping a
                                        mimosa or after 1 too many glasses attempt to build the ultimate human pyramid. What more could
                                        you ask for? The evening is ours to spend as we please, Ios has some of the best restaurants in
                                        the whole of Greece, so we hit up a personal favourite. After dinner, we can take the night any
                                        direction we'd like. Did someone say - ROUND 2? 
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> os/Santorini</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today we catch the ferry to Santorini where we stay in the beachfront area of Kamari. Chilled, zen
                                        backpacker vibes full of beach bars, cute restaurants and quirky shops plus...€3 Gyros. Winner
                                        winner. In the evening we take you wine tasting. Yeah, we’re fancy. Santorini produces some of the
                                        most delicious wine in the world, so it's only right we try it first hand. Watch the sun go down over
                                        the caldera as we become world-class wine connoisseurs, ok maybe not. But we'll definitely know
                                        the difference between white and red. After a few tipples of wine, we head into Fira, the capital of
                                        Santorini where we spend the evening and have dinner and a few drinks. Check out the lively Fira
                                        nightlife...we're in Santorini after all...THE SHOW MUST GO ON!</p>
                                        
                                </div>
                                <hr>
                               
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Santorini</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today we have a full day exploring Santorini and the day is yours to spend as you please. Hit up
                                        some of the local beaches, visit Perrissa, or head on over to Black Beach. If you've got some extra
                                        energy, take a walk up to Ancient Thira ruins located just off Kamari. In the late afternoon, we get
                                        dolled up as we head off to Oia. Walk along the promenade as you watch the sun go down with
                                        your TruFam. It's golden hour! Grab those ultimate insta snaps you've seen ALL over Instagram
                                        and watch the sun go down to the stunning view of the famous blue dome churches and
                                        whitewashed buildings. You haven't seen a sunset unless you've seen an Oia sunset. After a
                                        magical evening, we catch our ride back to Fira Town, where we party for our last night together!                                        
                                    </p>
                                </div>
                                <hr>
                                 
                              
                                <!-- page-5 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 10:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Santorini</h4>

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
                                                    Santorini,
                                                    Greece                                 
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">All good things must come to an end, and after 9 days it's time to say goodbye. It's checkout day.
                                        We'll miss you, just like you'll miss us. Your Travel Ninja is on hand for any help with onward travel
                                        plans or if you're staying on in Greece longer and need some advice! Hey, if you just need a
                                        sadness induced hug, they're there for that too. We're bad at goodbye, so we'll say see you next
                                        time!                                                                   
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">8 nights accommodation <br>
                                    Twin Share Rooms <br>
                                    Private Hostel Rooms</p>
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">Your guide! Like travelling with your best friends & one of them happens to know where they're
                                    going!                                    
                                    </p>
                                    <!-- <h6 class="head-876">Meals</h6>
                                    <p class="prvr">All transport included <br>
                                        Ferries<br>
                                        Private vans
                                    </p> -->

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">All transport included
                                    Ferries
                                    Private vans
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Athens Waking Tour <br>
                                        Acropolis Parthenon<br>
                                        Mykonos Old Town Tour<br>
                                        Mykonos Beach Clubs<br>
                                        Ios Pub Crawl<br>
                                        Ios Boat Trip<br>
                                        Santorini Wine Tasting Tour<br>
                                        Oia Sunset View                                    
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

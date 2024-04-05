@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none; height: 7200px;padding-top:80px;">
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
                    <h6 class="spn-2">Magical Switzerland
                        (Classic, 7 Days)</h6>
                        <p>
                            <span class="seven">6N/7D</span> Flexi Package
                            <span class="sp-3">AmazingSwitzerland Tour Inclusive Deal 6N</span>
                        </p>

                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Be amazed by Chillon
                        Castle and see the Lion of Lucerne
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Lose yourself in the
                        festive atmosphere of Christmas
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Travel aboard the
                        Glacier Express through the Swiss Alps
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Stroll along the
                        beautiful lakeside promenade in Montreux
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Enjoy local delicacies
                        and taste some delicious Gluhwein

                    </h6>

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
                        
                        
                        <img src="{{ URL::to('/assets/images/package-image/swtz.jfif') }}" alt=""
                            style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                        <div class="row mt-5">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <p class="htpvp1">₹207,010.86

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
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Zurich <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Geneva
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
                                    <p class="htpvp1">Insight Vacations



                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#115616
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
                            Experience the magic of Switzerland at Christmas, journeying from Lucerne to Brig, and on to
                            Geneva. Start your Swiss adventure in Lucerne, a stunning 14th century fortress city sitting
                            on a
                            lakeshore and surrounded by snowcapped forests. Voyage through the frosted peaks and frozen
                            waterfalls of the Grison Alps to the Alpine ski resort of St Moritz—a retreat frequented by
                            royalty
                            and James Bond in the Spy Who Loved Me. Board the Glacier Express to Brig and adventure
                            through the heart of the Swiss Alps in the Albula Pass tunnel, before crossing the
                            skyscraping
                            Landwasser Viaduct and descending through the Rhône Valley. Explore the car free, cobbled
                            streets of Zermatt Village at the foot of Mount Matterhorn and in the Swiss capital, enjoy a
                            sumptuous Geneva fondue dinner at Le Petit Chale
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
                                    <h4 class="hd09">Zürich and Lovely Lucerne</h4>
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
                                                Zurich,
                                                Switzerland

                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-6771 mt-5">Welcome to Switzerland - an enchanting winter wonderland
                                        of frozen waterfalls, peaceful cosy
                                        villages, snow-laden forests and imposing mountain ranges, crowned by famous
                                        peaks. On arrival
                                        at Zürich airport, transfers leave for your hotel in Lucerne at 09:30 and 13:30.
                                        Join your Travel
                                        Director and fellow guests at 18:00 for a Welcome Dinner with good food and
                                        wine.

                                    </p>

                                </div>
                            </div>

                            <!-- page-2 -->
                            <div class="container " style="padding-top: 100px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Lucerne and St. Moritz Relaxed Start</h4>
                                    </div>
                                </div>
                                <p class="para-677">Experience Lucerne, a beautiful 14th century city still protected by
                                    medieval fortifications. Your
                                    Travel Director will reveal the covered wooden bridges, the painted gables and the
                                    sorrowful Lion
                                    Monument. Then there’s time to enjoy the excellent shops and lakeside walks before
                                    heading along
                                    the dramatic Walensee, past Chur, to the fashionable ski resort of St. Moritz. Set
                                    in the sparkling
                                    Engadine Valley, this elegant resort nestles below the awe-inspiring, majestic
                                    Grisons Alps.
                                </p>

                            </div>

                            <!-- page-3 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Moritz at Leisure Relaxed Start </h4>
                                    </div>
                                </div>
                                <p class="para-677">This whole day is completely at leisure, so maybe enjoy a late
                                    breakfast to start? Afterwards you
                                    may choose to explore the spa quarter of this chic resort, see the houses with their
                                    traditional
                                    sgraffito facades or indulge in the stylish boutiques? You may even consider joining
                                    the Bernina
                                    Express for a scenic rail journey of such epic proportions that it has been declared
                                    a UNESCO
                                    World Heritage Site?
                                </p>

                            </div>


                            <!-- page-4 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 4:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Aboard the Glacier Express</h4>
                                    </div>
                                </div>
                                <p class="para-677">Board the world famous Glacier Express for a spectacular ride with
                                    lunch included, through the
                                    heart of the Swiss Alps. Descend through the tunnels of the Albula Pass and traverse
                                    the lofty
                                    Landwasser Viaduct. Your train then joins the broad Rhine Gorge and meanders beside
                                    rockstrewn rivers before climbing through snowy pastures and woodlands. Picturesque
                                    landscapes of
                                    ice-capped mountains and stone-built villages with chalet-style houses glide by.
                                    After a series of
                                    spirals, you will reach the highest point of the route, the icy Oberalp Pass.
                                    Modern, panoramic
                                    viewing cars ensure that you won’t miss a thing on your descent to Andermatt and
                                    down the
                                    Rhône Valley. Around mid-afternoon, you will disembark in Brig. Marvel at the
                                    dramatic Swiss
                                    scenery, as you follow the narrow valley which leads to Täsch, your home for the
                                    next two days.
                                </p>


                            </div>
                            <!-- page-5 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Zermatt, Matterhorn Village</h4>
                                    </div>
                                </div>
                                <p class="para-677">Board the cogwheel train that takes you to the traffic-free haven of
                                    Zermatt, at the foot of the
                                    Matterhorn. Wander along its cobbled streets to browse among the shops, explore the
                                    ancient
                                    wooden farmhouses and mazot barns in the back alleys, or visit the Matterhorn Museum
                                    to pass
                                    through the homes of yesteryear. If you have a head for heights, then you may like
                                    to board the
                                    cable car up the Klein Matterhorn. From the summit, marvel at the incredible views
                                    of the icebound
                                    Swiss Alps, should weather permit. Return to your hotel in Täsch where the remainder
                                    of the day is
                                    at leisure.

                                </p>


                            </div>
                            <!-- page-6 -->
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Chillon Castle and Geneva</h4>
                                    </div>
                                </div>
                                <p class="para-677">Journey along the Lower Rhône Valley to the shores of Lake Geneva
                                    where the associations with
                                    the early European Romantic movement are very strong. Join Maud, the curator of the
                                    Chateau, to
                                    visit the beautiful Chillon Castle, former home to the Counts of Savoy, set on a
                                    rocky islet in the
                                    lake. In 1816, the castle inspired Lord Byron to write the poem ‘The Prisoner of
                                    Chillon,’ following
                                    his walk through the dungeons. Look out for his name, which he carved into a pillar.
                                    Close by is the
                                    sophisticated tiered town of Montreux, where it is delightful to stroll along the
                                    lakeside promenade.
                                    Enjoy a beautiful journey alongside the lake, passing Vevey and Lausanne, to reach
                                    the
                                    immaculate town of Geneva. On arrival, your orientation includes the United Nations
                                    Building,
                                    officially known as the Palais des Nations, the Old Town and the Jet d’Eau. Visit
                                    the Red Cross
                                    Museum for a MAKE TRAVEL MATTER® Experience and learn how this world-renowned
                                    organization provides vital assistance to refugees, migrants and asylum seekers.
                                    Spend your night
                                    in Geneva, rejoicing with your newfound friends at a local restaurant, as you are
                                    treated to a
                                    delicious, traditional fondue Celebration Dinner complete with wine.
                                </p>


                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Depart Geneva</h4>
                                    </div>
                                </div>
                                <div class="bd-12">
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
                                                Geneva,
                                                Switzerland
                                            </h6>

                                        </div>


                                    </div>
                                </div>
                                <p class="para-677">Your magical journey comes to an end after breakfast. Your transfer
                                    will arrive at Geneva airport at
                                    08:00 or 10:00.

                                </p>

                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h4 class="headerr">Accommodation</h4>
                                <ul>
                                    <li>
                                        Lucerne: Hotel Astoria is a city centre hotel, just minutes from the lake. It has a lively rooftop bar
                                        with views of Lucerne as well as several restaurants and a coffee shop.</li>
                                        <li>St. Moritz: Hotel Laudinella enjoys a quiet location in St. Moritz-Bad, the spa quarter, and offers
                                        superb views of the surrounding mountains.</li>
                                        <li> Brig: Located in the heart of the city, Hotel Alex is surrounded by innumerable snow-topped
                                        mountains and offers spacious modern rooms.
                                        Geneva: The Warwick Geneva is centrally located and features stylish and elegant interiors.
                                    </li>


                                </ul>
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container">
                                <h6 class="head-876">Guide</h6>
                                <ul>
                                    <li>Experience enhanced hygiene protocols to align with the latest guidance following COVID19.All Travel Directors, Well-Being Directors and Drivers have completed training in
                                        enhanced well-being and hygiene protocols. </li>
                                        <li>Lucerne: During your orientation with your Travel Director, see the emotive Lion Monument,
                                        Jesuit Church and Chapel Bridge. </li>
                                        <li>Brig: During your orientation with your Travel Director cross the River Rhône and hear about this
                                        popular holiday resort at the foot of the Simplon Pass. </li>
                                        <li>Zermatt: Your Travel Director will lead you on an orientation of this picturesque village, high in the
                                        mountains. </li>
                                        <li>Montreux: At the foot of the Alps this town boasts one of the most beautiful walks along Lake
                                        Geneva, join your Travel Director for an orientation before there is free time to explore. </li>
                                        <li>Geneva: During your orientation, your Travel Director will show you the Jet d'Eau and Floral
                                        Clock.
                                        Our highly-skilled Travel Director will ensure your journey is seamless, serving as your expert
                                        guide, consummate organiser, and friend overseas.
                                        From time to time, your Travel Director will delight you with an Insight Flourish, which is a local
                                        specialty representing the destination.
                                        </li>
                                </ul>
                              
                                <h6 class="head-876">Meals</h6>
                                <ul>
                                    <li>Lucerne: Join your Travel Director and fellow travelers for your Welcome Dinner served with
                                        wine.</li>
                                        <li> Geneva: You will be delighted with a delicious fondue dinner at local restaurant, a real Swiss
                                        treat.</li>
                                        <li>Dining Summary: 4 Dinner with Wine (DW), 6 Breakfast (B), and 1 Lunch (L)</li>
                                </ul>
                               
                              
                                <h6 class="head-876">Transport
                                </h6>
                              <ul>
                                <li> Enjoy the comfort of Insight's luxurious, air-conditioned, 40-seat coach with double the
                                    standard legroom and onboard washroom. Our customized luxury coaches are sanitized before
                                    the start of your tour and are maintained to very high standards. Physical distancing measures
                                    have been implemented on our customized luxury coaches.</li>
                                    <li> Stay connected with friends and family with our complimentary coach and hotel Wi-Fi (where
                                    available).</li>
                                    <li> If your arrival and/or departure flights are as per the itinerary start and end dates, then transfers
                                    are available at scheduled times. If your flights are outside these times, or you have booked
                                    additional nights accommodation with Insight Vacations, you may purchase transfers or make
                                    your own way from/to the airport.</li>
                              </ul>
                                <h6 class="head-876">Others</h6>
                                <ul>
                                    <li> We only work with establishments we are confident will consistently adhere to our high wellbeing standards, which include hotels, restaurants and sight-seeing venues.</li>
                                        <li> Hand sanitizer is freely available on board for you to use throughout the day.</li>
                                            <li> Embrace the magic of Christmas time in Europe. Select departures will allow you to have time
                                        to explore local markets.</li>
                                        <li>  St Moritz: During your orientation of this alpine resort see the spa quarter and glacial lake.</li>
                                            <li> St Moritz: Travel along the route of the world-famous Glacier Express, through looping tunnels
                                        and dizzying viaducts, in the scenic heart of the Swiss Alps, on a regional train fully powered by
                                        hydroelectricity.</li>
                                        <li> Zermatt: Ride the shuttle trains of the Matterhorn Gotthard Railway up to the traffic-free Alpine
                                        resort. Should weather permit, you may even see the majestic peak of the Matterhorn.</li>
                                        <li> "It's magical to see how a group of guests comes together over the course of our trip. I can
                                        always tell when that's happening because suddenly the enthusiasm is palpable."</li>
                                        <li> "One food I really love introducing my guests to is cheese or meat fondue. It's not only a great
                                        meal, but it's an experience of its own and always lots of fun. Especially when I see all our
                                        guests bonding and having a good time discovering the way we enjoy it over here."</li>
                                        <li> Geneva: Visit the fascinating Red Cross Museum. Learn how this world-renowned organization
                                        provides assistance to refugees, migrants and asylum seekers and, with your visit, support
                                        their vital work</li>.
                                        <li> Lake Geneva: Visit Chillon Castle with the Head of Collections to discover the artefacts,
                                        treasures and history of the chateau.
                                        Personal radio headsets give you the freedom to wander during visits to famous highlights,
                                        without missing any of your Local Expert's fascinating commentary</li>
                                        
                                        <li> We carry your bags for you and promptly deliver them to your hotel door.</li>
                                        <li> Hotel and restaurant tips are included - you'll never have to worry about how much to give, nor
                                        search for foreign currency. We also include all taxes and porterage charges at hotels.</li>

                                </ul>
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

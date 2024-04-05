@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 7700px;padding-top:80px;">
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
                    <h6 class="spn-2">10 Days Cape Town,
                        Garden Route &
                        Addo Package
                        (Return)</h6>
                    <p>
                        <span class="seven">9N/10D</span> Flexi Package
                        <span class="sp-3">Amazing South Africa Tour Inclusive Deal 9N</span>
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
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Discover the Whale Route to Hermanus</h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Visit an Aloe factory in Albertinia
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>GGo cage diving with crocodiles
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Explore the fabled Cape of Good Hope
                    </h6>
                    
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/package-image/southafrica.jpg') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹87,768.44
                                    </h6>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">DURATION
                                    </h6>
                                    <h6 class="htpvp1">10 days</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-12" style="width: 670px;">
                                    <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        ENDS IN
                                    </h6>
                                    <h6 class="htpvp1">Cape Town  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Cape Town
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
                                    <h6 class="htpvp12">Cape Xtreme Adventure Tours (Pty) Ltd.

                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#104621
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
                        <p class="para-67">This package is a great way to see all the highlights and beauty that Cape Town and the
                            magnificent Garden Route has to offer with stops at Cape Point, Cape Winelands, Sedgefield,
                            Wilderness, Tsitsikamma, Jeffrey’s Bay, Addo and Oudtshoorn.
                            This package includes 2 of our most popular scheduled tours, transport, guide, accommodation
                            meals, and more
                            These scheduled tours require a minimum number of travellers to operate.
                            This itinerary can run in a different or reverse order depending on availability and other factors.
                        
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
                                    <h6 class="hd09"> Arrival in Cape Town: Package starts
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
                                                Cape Town,
                                                South Africa
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">We start with your arrival in Cape Town, affectionately known as The Mother City, your driver will
                                        be waiting at the airport to collect you and take you to your accommodation. The rest of the day is
                                        spent at your own leisure as it's a ‘free day’. We have a variety of activities on offer that you can
                                        also pre book with us should you choose (be advised that, depending on what time you arrive in
                                        Cape Town, this will have an impact on which activities can be done).
                                        On ‘free days’ all transport to and from activities you have booked will be for your own account
                                        should transport not be included in the activity price.
                                        Meals: None
                                        Accommodation: Backpacker - Cape Town (various used)
                                        Route: Cape Town International Airport - Cape Town City Centre ±22 km
                                        Travel time: ±20-30 min                                        
                                    </p>
                                </div>
                            </div>
                    </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 270px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Cape Town to Struisbaai: Overberg, Whale Route, Cape
                                            Agulhas</h4>
                                    </div>
                                    </div>
                                          <p class="para-677"> Departing Cape Town from around 8:00 am (Stellenbosch around 9:30 am), our exciting journey
                                            begins today as we join the world famous whale route in Gordons Bay for a stunning drive along
                                            the picturesque R44 mountain pass overlooking False Bay to the vibrant coastal town of
                                            Hermanus. After an opportunity to take some photographs and lunch on the seafront, we continue
                                            to Birkenhead Brewery to sample some fine beers before moving on to the southernmost tip of
                                            Africa in Cape Agulhas National Park.
                                            After a visit to the lookout point we make our way back to our accommodation along “Die Plaat”,
                                            the longest beach in the Southern Hemisphere (if time allows). This day is designed to be a
                                            relaxing one for you to get to know your fellow travellers, to get used to travelling in our vehicle and <br>
                                            to settle into the comfortable routine of life on tour. <br>
                                            Meals: None
                                            Accommodation: Backpacker - Cape Agulhas (Cape Agulhas Backpackers)
                                            Route: Cape Town to Struisbaai ±260 km <br>
                                            Travel time: ±4 hrs <br>
                                            Included Highlight: Land Based Whale Watching in Hermanus / Shopping, Beer/wine tasting at
                                            Birkenhead Brewery <br>
                                            Optional Activities: **Shark cage diving (has to be pre-booked & paid) <br>
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
                                        <h4 class="hd09"> : Struisbaai to Sedgefield: Zipline Obstacle course, Quad Biking,
                                            Myoli Beach
                                </div>
                                <p class="para-677">After breakfast, we start driving inland again, this time towards the famed Garden Route! You have
                                    the opportunity today to enjoy some fun with either a canopy tour, experience the thrill of crossing
                                    rope bridges, wobbly crossings and zip wires high up in the trees OR some Quad Biking.
                                    We finish off the day with some beach time down at Myoli Beach. <br>
                                    Meals: Breakfast & Dinner <br>
                                    Accommodation: Backpacker - Sedgefield (Cape to Addo House) <br>
                                    Route: Struisbaai to Sedgefield ± 340 km <br>
                                    Travel time: ±4 hrs <br>
                                    Optional Activities: Treetop Obstacle Course & Zipline (not in winter) OR Quad Bike                  
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
                                        <h4 class="hd09">Oudtshoorn trip: Little Karoo, Oudtshoorn, Cango Caves
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">After breakfast we head into the semi-arid Little Karoo along the scenic Route 62 driving to the
                                    town of Oudtshoorn, known as the ostrich capital of the world, it is situated in a beautiful, fertile
                                    valley between the Outeniqua and Swartberg Mountains. Here you can choose between:
                                    The Cango Caves where we will embark on a 1-hour guided tour of the cave system to view its
                                    massive caverns and a wonderland of stalactite and stalagmite formations, millions of years old.
                                    Cango Caves is a world heritage site and one of the great wonders of the natural world. Or if you
                                    enjoy spelunking and don’t mind trying to squeeze through some smaller gaps then you are also
                                    welcome to take the 1.5 hour adventure tour! <br>
                                    OR
                                    If caves are not for you, then you will be able to visit an Endangered Wildlife Sanctuary, home to
                                    many local and exotic endangered species.
                                    Next is an option to visit an Ostrich Show Farm to learn more about the industry and a chance to
                                    get up close. <br>
                                    We then head over the Outeniqua Mountains again back to Sedgefield where we spend the night
                                    again. <br>
                                    Meals: Breakfast & Dinner <br>
                                    Accommodation: Backpacker - Sedgefield (Cape to Addo House) <br>
                                    Route: Sedgefield to Oudtshoorn day trip ±190 km <br>
                                    Travel time: ±3 hrs <br>
                                    Included Highlight: Cango Caves (Adventure or Standard Tour) OR Endangered Wildlife <br>
                                    Sanctuary <br>
                                    Optional Activity: Tour of an Ostrich farm 
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
                                        <h4 class="hd09">Sedgefield to Jeffrey’s Bay: Bloukrans Bungy, Elephant Bush
                                            Walk & Tsitsikamma National Park
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">This morning we drive through Knysna on our way to the Crags where you have a number of
                                    options to choose from:
                                    Visit a sanctuary for orphaned elephants where you have the option to learn about these gentle
                                    giants and go on an Elephant Bush Walk
                                    OR
                                    Visit a Monkeyland Primate Sanctuary where rescued monkeys roam free in a large jungle area
                                    Our next stop is the World’s highest commercial Bungy Jump at 216 meters where you have the
                                    opportunity to experience this adrenalin pumping activity. After an adrenaline rush at the bungee
                                    we take a walk through the indigenous Tsitsikamma National Park to the Storms river swing
                                    bridges before we head to the famous surfing town of Jeffrey’s Bay where we stay at a
                                    backpackers directly on the beach. <br>
                                    Meals: Breakfast & Dinner <br>
                                    Accommodation: Backpacker - Jeffrey’s Bay (Island Vibe)<br>
                                    Route: Sedgefield to Jeffeys Bay ±220km<br>
                                    Travel time: ±3 hrs<br>
                                    Included Highlight: Tsitsikamma National Park<br>
                                    Optional Activities: Elephant Bush Walk OR Monkeyland Primate Sanctuary, Bloukrans bungy<br>
                                    jump (216m), Bloukrans Bridge walking tour
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
                                        <h4 class="hd09">Jeffrey’s Bay to Addo Elephant National Park: Game Drive
                                            (Addo), Surfing / Shopping time (Jeffrey’s bay)</h4>
                                    </div>
                                </div>
                                <p class="para-677">There are 2 options to choose from this morning.
                                    Sleep in and take some time in the morning to explore the town's many surf factory shops, or go
                                    for a surf lesson in one of the most famous surf spots on earth.
                                    OR
                                    Wake up early and head to Addo Elephant National park where we go on a morning game drive to
                                    view the multitudes of wild animals. Addo is home to the Big 5 and it also has the highest
                                    concentration of African Elephants in the world!
                                    We then take a relaxed drive back towards Sedgefield for the night. If there is time available we will
                                    visit the famous Knysna Heads for some absolutely amazing pictures where the ocean meets the
                                    inlet to the Knysna Lagoon. <br>
                                    Meals: Breakfast & Dinner <br>
                                    Accommodation: Backpacker - Sedgefield (Cape to Addo House) <br>
                                    Route: Jbay – Addo NP – Sedgefield/PE/Jbay/Knysna ±470 km’s
                                    Travel time: ±6 hrs<br>
                                    Included Highlight: Addo Entrance & Game Dive with Cape to Addo/Cape Xtreme Guide &<br>
                                    Vehicle OR time in Jeffrey’s Bay, Knysna Heads<br>
                                    Optional Activities: Addo Game Drive with SANP (morning) OR Surf Lessons, Shopping<br>
                                    
                                    
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Sedgefield to Cape Town: Return to Cape Town via Sir Lowry’s
                                            Pass
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">After breakfast we begin a beautiful canoe trip down one of the many tranquil rivers in the area,
                                    followed by a short hike to a stunning waterfall.
                                    We then visit an Aloe factory in Albertinia and enjoy a wonderful scenic drive via Swellendam and
                                    Sir Lowry’s Pass. We arrive in Cape Town late Thursday afternoon.
                                    Meals: Breakfast
                                    Accommodation: Backpacker - Cape Town (various used)
                                    Route: Sedgefield – Cape Town ±450 km’s
                                    Travel time: ±5 hrs
                                    Included Highlight: Canoeing & Hike in Wilderness, Aloe Factory
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">: Cape Town: Ultimate Cape Point Tour
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">This Peninsula Tour has been designed specifically with the all traveller in mind. Those travellers
                                    especially with the desire to see, taste, learn and experience something different from the norm.
                                    We try to show all the unique histories, cultures and people that make Cape Town, Cape Town. <br>
                                    We begin the morning with a leisurely stroll along the cobbled streets and brightly coloured houses
                                    of the Bokaap before heading through the exclusive seaside suburbs of Clifton and Campsbay
                                    where we have a short photo stop. We then carry on along Victoria Drive, through Houtbay and
                                    along the scenic Chapmans Peak Drive eventually arriving at The Cape of Good Hope Nature
                                    Reserve where we have a 40 minute hike from the most south west tip of Africa, Cape of Good
                                    Hope to the Cape Point Lighthouse. We then start driving north to Boulder Beach Penguin colony,
                                    where you can view them from the boardwalk and, should you wish, go inside to view them even
                                    closer (optional extra)! By this stage you would have built up quite an appetite so we will stop for
                                    lunch (own account). After everyone has had their fill, we stop briefly at the Shark Spotter,
                                    entrusted by the local surfers of Muizenberg to look out for Great White Sharks. We then travel
                                    through the lush Constantia Valley to the oldest wine farm outside of Europe for a relaxing end of
                                    the day wine tasting experience (optional extra) where we also learn about the history of farming in
                                    the Cape in beautiful surroundings. <br> Meals: None <br>
                                    Accommodation: Backpacker - Cape Town (various used)<br>
                                    Route: Cape Peninsula Route ±160 km<br>
                                    Travel time: ±8 hrs (full day tour)<br>
                                    Included Highlight: Bo Kaap, Camps Bay, Hout Bay, Chapman’s Peak Drive, Cape of Good<br>
                                    Hope/Cape Point entrance, Boulders Beach from boardwalk, Simon’s Town, Kalk Bay, Boyes<br>
                                    Drive, Constantia.<br>
                                    Optional Highlight: Boulders Beach Entrance; Wine Tasting<br>
                                    
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 9:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Cape Town at leisure
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">Today you have another ‘free day’ where you have a choice today of going on another one of our
                                    MANY amazing activities (to be booked in advance with us) such as wine tasting, sandboarding,
                                    shark cage diving, paragliding, skydiving, and many more; OR you can spend your day at your
                                    own leisure and go sightseeing, visiting the local markets or just lazing at the beach. <br>
                                    Meals: None <br>
                                    Accommodation: Backpacker - Cape Town (various used) <br>
                                    Route: None <br> 
                                    Travel time: None <br>
                                </p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">  Depart Cape Town: Package ends</h4>
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
                                                Cape Town,
                                                South Africa
                                            </h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">You have a ‘free day’/free time today again where you can try fit in a few more activities should you <br>
                                    wish (and should time allow) before you are transported to Cape Town International Airport for your
                                    departure flight. <br>
                                    Meals: None <br>
                                    Route: Cape Town City Centre - Cape Town International Airport ±22 km <br>
                                    Travel time: ±20-30 min
                                    
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-6777"> All accommodation + bedding (9 nights). <br>
                                        Be advised that private rooms generally only offer shared bathroom facilities, however, some
                                        providers may offer ensuite / private bathrooms (this is subject to availability and cannot be
                                        guaranteed - please ask about this specifically when booking). Please be aware that prefered
                                        accommodation listed are subject to change.                                        
                                        </p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">Qualified and registered tour guide.</p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">5 x Breakfast as per itinerary - includes fruit, muesli, toast, yogurt, and cereals. <br>
                                    3 x Dinner as per itinerary - traditional South African meals prepared by the accommodation <br>
                                    establishment, such as potjie (stew) or braai (barbecue).
                                    </p>
                                
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">All transport in comfortable bus with AC & CD player.
                                    </p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">Beer/Wine tasting at Birkenhead Brewery (Day 2) <br>
                                    Cango Caves OR Endangered Wildlife Sanctuary (Day 4)<br>
                                    Tsitsikamma National Park Entrance (Day 5)<br>
                                    Addo Entrance & Game Drive with Cape to Addo/Cape Xtreme Guide (Day 6)<br>
                                    Knysna (Day 6)<br>
                                    Wilderness National Park Entrance (Day 7)<br>
                                    Canoeing & Hike in Wilderness (Day 7)<br>
                                    Aloe Factory visit (Day 7)<br>
                                    Entrance to Cape of Good Hope/Cape Point (Day 8)</p>
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

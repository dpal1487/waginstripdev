@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">

        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px; height: 6000px;">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1 class="heading-1">
                                <span class="spn-1">Full Itinerary & Trip Details</span> </h1>

                        </div>
                        <div class="col-sm-5">
                            <img src="{{ URL::to('/assets/images/images/85555.png') }}" alt="" style="width: 260px;">
                            <img src="{{ URL::to('/assets/images/images/IATA.png') }}" alt="" style="width: 70px; margin-left:100px">

                        </div>
                    </div>
                    <h6 class="spn-2">Great Britain - 7 Days</h6>
                    <p>
                        <span class="seven">6N/7D</span> Flexi Package
                        <span class="sp-3">Amazing Britain Tour Inclusive Deal 6N</span>
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
                                    <a href="3booking">
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
                        <!-- next-page -->
                        <div class="container" style="padding-top: 10px;">
                            <h6 class="spn-2">Trip Overview</h6>
                            
                            
                            
                            
                            
                            
                            
                            <img src="{{ URL::to('assets/images/images/britain.webp') }}" alt=""
                                style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <h6 class="htpvp1">₹72,782.93
                                        </h6>
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
                                        <h6 class="htpvp1">London <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            London
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
                                        <h6 class="htpvp12">Expat Explore Travel Ltd
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#27982
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
                                <p class="para-67">
                                    Tour Great Britain with us and uncover the rolling green countryside, incredible
                                    ancient history and
                                    quaint charm of England, Scotland and Wales. Set off from London and head north,
                                    exploring
                                    Cambridge, York, Edinburgh, the Highlands, Liverpool, the Lake District, Wales,
                                    Stonehenge and
                                    much more
                                </p>
                                <hr>
                                <div id="wise">
                                    <div class="container">
                                        <h4 class="heading-30">Day Wise Details</h4>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 class="hed-0">Day 1:</h4>
                                            </div>
                                            <div class="col-sm-9">
                                                <h4 class="hd09">London - Cambridge - Yorkshire
                                                </h4>
                                            </div>
                                        </div>

                                        <!-- next-page -->
                                        <div class="container mt-5 mb-5">
                                            <div class="bd-1">
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
                                                            Outside Hotel Novotel at Greenwich
                                                            station,
                                                            173-185 Greenwich High Road, London,
                                                            SE10 8JA
                                                        </h6>

                                                    </div>

                                                </div>
                                                <p class="para-677 mt-5">Welcome to your tour of Great Britain! Today, you will fill your lungs with fresh, English countryside
                                                    air, as you depart the city of London, and head to where the grass is greener. Arriving in
                                                    Cambridge, your first adventure will have you punting along the river in traditional style, taking in
                                                    the stunning scenery and epic, historical buildings in the most relaxing way. Simply wonderful! The
                                                    afternoon sees you continuing your rural journey towards York, a mecca for history buffs and
                                                    lovers of fine architecture and culture. Your walking tour offers fascinating insights, stories and
                                                    history of the city. Tonight, you will enjoy dinner at a traditional Sunday roast in a British pub.
                                                    Choose from roast beef or chicken, or a vegetarian nut roast, served with all the trimmings (side
                                                    dishes such as carrots, parsnips and roast potatoes) and a homemade Yorkshire pudding, followed
                                                    by a chocolate brownie for dessert.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- page-2 -->
                                    <div class="container " style="padding-top: 240px;">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 class="hed-0">Day 2:</h4>
                                            </div>
                                            <div class="col-sm-9">
                                                <h4 class="hd09">Hadrian's Wall - Jedburgh - Edinburgh</h4>
                                            </div>
                                        </div>
                                        <p class="para-677">Get ready to experience places of historical battles, religious significance, ancient architecture and
                                            royal ruins. Your first stop of the day is the iconic Hadrian’s Wall. Built by hand in 122 AD, its
                                            creation is extremely significant in the history of Great Britain, and it is one of the most visited
                                            cultural landmarks in the UK. Not too far away lies the border town of Jedburgh. Famed for its links
                                            to royalty and historical warfare, you will have an opportunity to explore the city and take in the
                                            amazing architecture, which speak for populations passed. The Jedburgh Abbey ruins are
                                            incredible, and a visit is highly recommended. As you journey through Scotland, relax and enjoy
                                            the beautiful landscape drifting past. The capital city is waiting, and your Expat Explore tour leader
                                            will introduce you to Edinburgh on an evening driving and orientation walking tour.
                                            
                                        </p>
                                    </div>
                                    <hr>

                                    <!-- page-3 -->
                                    <div class="container ">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 class="hed-0">Day 3:</h4>
                                            </div>
                                            <div class="col-sm-9">
                                                <h4 class="hd09">Edinburgh - Free day</h4>
                                            </div>
                                        </div>
                                        <p class="para-677">IToday, you are free to explore the city as you wish, and there is so much to see and do. Known as
                                            the cultural capital of Scotland, Edinburgh is blessed with stunning grey stone buildings, along with
                                            architecture, art galleries, memorials and higher education faculties. Take a step back in time, and
                                            wander around the authentic, unchanged cobbled streets of the Royal Mile, and meander down to
                                            the Grass Market, to a row of pubs where public hangings used to ‘entertain’ the crowds.
                                            Edinburgh Castle is well worth the entry fee, and requires a few hours to explore and learn about
                                            Scottish history and royalty - there are wonderful views from the top! For those wishing to shop for
                                            souvenirs, Princes Street attracts shoppers from all over the world. The city comes alive at night,
                                            in the bars and pubs in the city centre, so why not enjoy a pint or a traditional whisky with the
                                            friendly locals?
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
                                                <h4 class="hd09"> Loch Ness - Scottish Highlands                                                </h4>
                                            </div>
                                        </div>
                                        <p class="para-677">This morning, we’re heading to the Scottish Highlands. First stop, Loch Ness! Here, admire the
                                            views from the banks of the loch or, enjoy the option of embarking on a 1-hour cruise of Loch
                                            Ness, where you can try to spot ‘Nessie’, the famed Loch Ness Monster! Back on dry land, you
                                            can see Britain’s highest mountain - Ben Nevis. Later, enjoy a tour of one of Scotland’s oldest
                                            licensed whisky distilleries in the town of Fort William and taste some authentic Scotch whisky!
                                            Before reaching the hotel, stop at the striking glen (deep valley), Glen Coe. This is the place where
                                            the Massacre of Glencoe took place in 1692. Dinner will be at your hotel this evening.
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
                                                <h4 class="hd09"> Lake District - Liverpool</h4>
                                            </div>
                                        </div>
                                        <p class="para-677">As your heart sinks at the thought of leaving Scotland, be reassured that there are exciting
                                            adventures to be had today in England! Your Great Britain tour will take a twist into modern history,
                                            as you head across the border, bound for Liverpool - the home of The Beatles and two worldfamous premier league football clubs! On the way, you can soak up the last of the Scottish
                                            landscape, before reaching the picturesque Lake District for a lunch stop – the views are simply
                                            stunning! We then arrive in Liverpool late afternoon, where you will have the evening free to
                                            explore. Upon checking in at the hotel, head to one of the many local pubs for dinner. For Beatles
                                            fans, there are a myriad of locations that were significant to developing the world-class pop act,
                                            which shaped modern music as we know it. Home to Paul, John, George and Ringo, Liverpool
                                            inspired such timeless classics including ‘Strawberry Fields’ and ‘Penny Lane’. The Beatles played
                                            hundreds of shows at the Cavern Club, the perfect place to enjoy your time in Liverpool.                                            
                                        </p>
                                    </div>
                                    <hr>
                                    <!-- page-6 -->
                                    <div class="container ">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 class="hed-0">Day 6:</h4>
                                            </div>
                                            <div class="col-sm-9">
                                                <h4 class="hd09">Stratford-Upon-Avon - Wales</h4>
                                            </div>
                                        </div>
                                        <p class="para-677">This morning, we will take a driving tour of Liverpool, where you will be shown the sights, before we
                                            venture on to the birthplace of William Shakespeare - Stratford-upon-Avon. An orientation tour will
                                            allow you to explore the quaint, historical village, and then you will have some free time to explore
                                            on your own. There are numerous Shakespearean attractions and fascinating historical locations to
                                            visit. For those who wish to delve into the life of Shakespeare more intimately, we can arrange an
                                            optional excursion for you to visit the home where he grew up as a child, where he also lived with
                                            his wife when they were newlyweds. Sliding into south Wales, you'll have the chance to see a
                                            medieval castle before we head onwards to the Welsh capital of Cardiff.
                                        </p>
                                    </div>
                                    <!-- page-7 -->
                                    <div class="container" style="padding-top: 10px;">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 class="hed-0">Day 7:</h4>
                                            </div>
                                            <div class="col-sm-9">
                                                <h4 class="hd09">Bath - Stonehenge - London</h4>
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
                                                    <h4 class="hkl">
                                                        Greenwich train station,
                                                        173-185 Greenwich High Road, London,
                                                        SE10 8JA
                                                    </h4>

                                                </div>

                                            </div>
                                        </div>
                                        <p class="para-677">This is the last day of your British Tour, and there is no sign of slowing down! The road from Wales
                                            to London is littered with history, stunning scenery and architectural delights. First stop for the day
                                            is Bath – a UNESCO World Heritage Site featuring some of the finest architecture in Europe. Join
                                            us on an orientation tour of the town, and learn about the historical significance of the region,
                                            including the natural hot springs that supply the Roman baths - visited by over 1 million
                                            international tourists every year! Continuing on the last legs of your journey, you have an optional
                                            excursion that could have you unravelling one of the worlds’ greatest mysteries. Stonehenge -
                                            need we say more? You have the opportunity to witness an ancient and awe-inspiring structure,
                                            which has baffled scientists, tourists and historians for centuries. As you board your Expat Explore
                                            coach for the last time on your Great Britain tour, take this chance to exchange contact details and
                                            share photos with new friends and fellow travellers, before you alight at your last stop in London.
                                            
                                        </p>
                                    </div>
                                </div>

                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>

                                    <p class="para-67"> 6 nights' accommodation in twin rooms with private en-suite facilities</p>

                                </div>

                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <p class="prvr">Services of your Expat tour leader, who will be on hand with advice and tips to ensure that you
                                        get the most from your trip</p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">6 Breakfasts <br>
                                        4 Dinners</p>
                                   
                                    <h6 class="head-876">Transport
                                    </h6>
                                    <p class="prvr">Services of English speaking driver guide and A/C vehicle</p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Entrance fees for all mentioned sights visited.
                                    </p>
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

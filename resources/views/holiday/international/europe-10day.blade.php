

@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">


        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 6700px;padding-top:80px;">
                   <div class="row">
                    <div class="col-sm-7">
                        <h1 class="heading-1">
                            <span class="spn-1">Full Itinerary & Trip Details</span> </h1>

                    </div>
                    <div class="col-sm-5">
                    <img src="{{ URL::to('/assets/images/85555.png') }}" alt="" style="width: 260px;">
                            <img src="{{ URL::to('/assets/images/IATA.png') }}" alt="" style="width: 70px; margin-left:100px">

                    </div>

                   </div>
                    <h6 class="spn-2">Britain and Ireland
                        Delight (Winter, 10
                        Days)</h6>
                    <p>
                        <span class="seven">9N/10D</span> Flexi Package
                        <span class="sp-3">Amazing Britain and Ireland Tour Inclusive Deal 9N</span>
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
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Grab a Guinness at a traditional Irish pub in Dublin</h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Fall in love with the medieval charm of Kilkenny
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Discover where Shakespeare wrote his iconic tragedies
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Step back in time and wander the streets of London

                    </h6>
                    
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/package-image/britain.webp') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹199,913.12
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
                                    <h6 class="htpvp12">The Travel Corporation

                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#145032
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
                        <p class="para-67">The best of Britain and Ireland is served up on this eight-day adventure crisscrossing two different
                            countries. See landscapes that have inspired poetry, medieval monuments to God and stony
                            fortresses that housed royals, soldiers and important artefacts. You’ll wind your way through the
                            Yorkshire Dales, wander down Edinburgh’s Royal Mile and discover a bit of the craic in Dublin,
                            before Waterford crystal, Celtic tales and a fairy-tale castle or two complete your journey
                           
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
                                    <h6 class="hd09">Arrive London (1 Night)
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
                                                London,
                                                England
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">Your whirlwind journey through the United Kingdom and Ireland launches in its exhilarating capital.
                                        After checking in, explore this multicultural city your way, embracing all the pomp and pageantry of
                                        Britain’s capital. Visit one of the many museums that reveal the history and culture of the world,
                                        pay your respects to Her Majesty or pop into your neighbourhood ‘local’ for a pint or two to
                                        kickstart your exploration of Britain and Ireland in style.                                        
                                    </p>
                                </div>
                            </div>
                    </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 200px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">London – Stratford-upon-Avon – York – Bradford (1 Night)</h4>
                                    </div>
                                    </div>
                                          <p class="para-677"> This morning meet your Travel Director and fellow travel companions. Your whirlwind journey
                                            through Great Britain and Ireland launches in London. As the boroughs of the Old Smoke give way
                                            to the beautiful shires north of its skyscrapers, you’ll enjoy a scenic drive through lush green
                                            landscapes bound for Shakespeare country. Visit Stratford-upon-Avon where you’ll come face to
                                            face with the legacy of England’s beloved bard before heading to York. Your Travel Director will take
                                            you for an orientation walk through its medieval streets to the sacred York Minster, where every
                                            piece of stained glass and limestone block was placed for the glory of God. Enjoy dinner at a local
                                            restaurant before you continue to your hotel in Bradford.
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
                                        <h4 class="hd09"> Bradford – Lake District – Gretna Green – Glasgow (2 Nights)</h4>
                                    </div>
                                </div>
                                <p class="para-677">You’re in for a serene start to your morning as you wind your way through the limestone hills and
                                    valleys of the Yorkshire Dales. Rustic stone villages, sheep-filled pastures, castles and abbeys line
                                    your route to England’s celebrated Lake District. At Lake Windermere, an Optional Experience
                                    could take you back to the days of Beatrix Potter and William Wordsworth who proclaimed the area
                                    'the loveliest spot that man hath found'. Board an optional cruise on a private boat, skimming the
                                    northern coastline, deserted islands and Wray Castle. Then cross the Scottish border and stop in
                                    Gretna Green where eloping couples would tie the knot over the anvil. Continue to Glasgow later
                                    today. Your afternoon orientation of this former industrial hub turned vibrant modern metropolis will
                                    include views of the cathedral, the River Clyde and George Square where many of Scotland’s most
                                    famous sons are immortalised in stone.                
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
                                        <h4 class="hd09">Edinburgh excursion
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">A day spent exploring Scotland’s exquisite capital will leave you in no doubt as to why it captured
                                    the hearts of Charles Dickens, Charlotte Bronte and even Queen Victoria. Your Local Specialist will
                                    reveal all the highlights of 'Auld Reekie'. View the Royal Mile, the Palace of Holyroodhouse in the
                                    shadow of Arthur’s Seat and Edinburgh Castle which watches over the city from Castle Rock.
                                    Exchange the medieval façades of the Old Town for grand Georgian-lined boulevards of the 18th
                                    century New Town. You’ll have some time to explore Edinburgh your way or consider joining one of
                                    two special Optional Experiences, boarding the Royal Yacht Britannia for a brush with royalty or
                                    exploring what lies behind the impenetrable walls of Edinburgh Castle. This evening surrender to
                                    the skirl of bagpipes during an optional dinner in Stirling with views of its Castle and the Wallace
                                    Memorial by night.                                    
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
                                        <h4 class="hd09">Glasgow – Belfast – Dublin (2 Nights)</h4>
                                    </div>
                                </div>
                                <p class="para-677">Your visit to Scotland culminates in a scenic drive along the Ayrshire coast, the rugged landscapes
                                    where Robert Burns, Scotland’s National Poet, was born and raised. Pass Ailsa Craig, the
                                    figurative stepping stone from Scotland to Ireland before boarding your short ferry crossing to
                                    Northern Ireland. You won’t dally in its trendy capital, but there’s time to see the City Hall, Queen’s
                                    University and the dock where the ill-fated Titanic was built. Head south to Dublin, your home for
                                    the next two nights. There’s no better way to embrace the energy of the city than joining an optional
                                    dinner at one of its most popular restaurant-pubs. Rub shoulders with the locals as you enjoy
                                    dinner and a solid dose of Irish craic
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
                                        <h4 class="hd09">Dublin sightseeing and free time</h4>
                                    </div>
                                </div>
                                <p class="para-677">You’re in for a 'grand' time in the Irish capital this morning as your Local Specialist shares all the
                                    highlights. See Trinity College and St. Patrick’s Cathedral, founded in the 12th century. Its 43-metre
                                    spire makes this the country’s tallest church. See the stately Georgian Squares then spend the
                                    rest of the day on your own. Head down to Grafton Street or Temple Bar for a pint of the 'Black
                                    Stuff' or stroll along the Liffey through the heart of Dublin. This evening, an optional dinner and Irish
                                    show will have your toes tapping and taste buds craving another round of Irish coffee
                                    
                                    
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Dublin – Kilkenny – Waterford (1 Night)</h4>
                                    </div>
                                </div>
                                <p class="para-677">You won’t need to don your Sunday best to visit stylish County Kildare, although the heart of
                                    Ireland’s horseracing community with its elegant estates will have you wishing you could linger a
                                    little longer. Continue through the splendid countryside bound for Kilkenny where you’ll see its
                                    beautiful 12th-century castle, an enduring symbol of Norman occupation. Later you’ll arrive in
                                    Waterford where a visit to the Waterford Crystal Showroom will reveal a wonderland of delicate
                                    crystal, from stemware to fine china. You’re in for a riveting history lesson when you join an
                                    Optional Experience for a walking tour with a Local Specialist and visit one of the area’s oldest
                                    pubs for a pint. Dinner tonight is at your hotel.                                    
                                                                        
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Waterford – Cardiff (1 Night)</h4>
                                    </div>
                                </div>
                                <p class="para-677">Say your goodbyes to the 'Emerald Isle', crossing St. George’s Channel to Wales. Small in size but
                                    significant in stature, Wales is the fifth country on this journey across the United Kingdom and
                                    Ireland. Its vibrant capital is your final destination today. Here you’ll view the Millennium Centre, the
                                    National Assembly and the historic castle at its heart. Climb the 900-year-old Norman keep and
                                    perhaps walk on the battlements during an optional private tour of Cardiff Castle this afternoon.
                                    This evening could see you venture into the Welsh countryside for dinner at a 14th-century inn or
                                    enjoy an evening of Welsh music, culture and humour at an Optional Experience
                                    
                                    
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 9:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Cardiff – Bath – Windsor – London (1 Night)</h4>
                                    </div>
                                </div>
                                <p class="para-677">Cross the Severn Estuary into England and venture to Bath with its elegant Georgian architecture.
                                    The city’s healing waters saw it emerge as a wellness centre as far back as Roman times and you
                                    could choose to visit what remains of its Roman Baths before heading to Windsor to view the
                                    world’s oldest and largest continuously inhabited castle. There’s time for a quiet stroll along the
                                    banks of the river and shop for Royal souvenirs before arriving in London.
                                    
                                    
                                    
                                </p>
                            </div>
                          
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 10:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">  Depart London</h4>
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
                                                London,
                                                England
                                            </h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">It’s time to close the curtain on your epic adventure across the England and Ireland. You’ll say a
                                    fond farewell to new friends as you prepare for your return journey home. A London Heathrow
                                    airport shuttle service is available to purchase.
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-6777"> Ibis Earls Court
                                        Jurys Inn
                                        Ibis City Centre
                                        Maldron Newlands Cross
                                        Treacys
                                        Park Inn by Radisson City Centre
                                        </p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">An expert Travel Director and professional Driver </p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">2 Dinners <br>
                                    9 Breakfasts <br>
                                    Many meals and daily breakfasts included</p>
                                
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Luxury air-conditioned coach with Wi-Fi in most countries
                                    </p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">Bath Visit the Georgian spa town <br>
                                    Belfast See Belfast City Hall and Queen's University <br>
                                    Cardiff See the Principality Stadium and view Cardiff Castle <br>
                                    Dublin Sightseeing with your Local Specialist to see St. Patrick's Cathedral, Christchurch <br>
                                    Cathedral, the glorious Georgian Squares and Trinity College <br>
                                    Edinburgh Sightseeing with your Local Specialist includes the famous Princes Street, the Royal <br>
                                    Mile and views of the new Parliament Building as well as the Castle<br>
                                    Glasgow View Glasgow Cathedral and George Square on your orientation tour<br>
                                    Kilkenny View Kilkenny Castle and gardens<br>
                                    Stratford-upon-Avon Visit the town of Shakespeare's birth<br>
                                    Waterford Visit the Waterford Crystal Showroom<br>
                                    Windsor View the Royal Castle<br>
                                    York View York Minster and stroll along the Shambles<br>
                                    All hotel service charges, tips, and local taxes<br>
                                    Audio Headsets provided throughout your holiday to enhance your included sightseeing
                                    experiences<br>
                                    Cherry-picked hotels, all tried and trusted<br>
                                    City orientation tours<br>
                                    Ferry across the Irish Sea from Scotland to Northern Ireland and Ireland to South Wales
                                    Variety of Optional Experiences
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

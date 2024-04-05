@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 5800px;padding-top:80px;">
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
                    <h6 class="spn-2">Germany
                        ´
                        s Best</h6>
                    <p>
                        <span class="seven">7N/8D</span> Flexi Package
                        <span class="sp-3">Amazing Germany Tour Inclusive Deal 7N</span>
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
                                    <h6 class="psd-1">Call Us: 08096224444 </h6>
                                    <p class="pth-65 ">
                                        Quotation Created on this date Valid till this
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Pay your respects at the Dachau Concentration Camp</h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Visit the enchanting Christmas museum in Rothenburg
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Gaze at the awe-inspiring golden gates of Brandenburg
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Soak up the storybook atmosphere at Neuschwanstein

                    </h6>
                    
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/package-image/germany.jfif') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
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
                                    <h6 class="htpvp1">Berlin  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Berlin 
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
                                    <h6 class="htpvp12">EUROPA MUNDO VACACIONES S.L

                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#134672
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
                            Europamundo General Services: Travel by bus with English speaking guide, basic travel insurance
and breakfast buffet. Under exceptional circumstances (breakdowns, delays due to traffic
problems, weather problems, strikes, sports and religious events, congresses, sanitary
precautions and protocols or other complex situations), Europamundo reserves the right to modify
the sites visited, the order of the visits on certain days or the stages of the itineraries.
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
                                    <h6 class="hd09">Berlin
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
                                                Hotel in,
                                                Berlin, Germany
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">TODAY’S HIGHLIGHTS: Arrival. Transfer to the hotel.Welcome to Europe!!!. Upon arriving at the
                                        airport we will be waiting to transfer you to your hotel. You can enjoy free time until your tour starts.
                                        Please, check the informative posters placed at the hotel reception area which have all the
                                        information about your upcoming services such as meeting place, time and the guide’s name.                 
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
                                        <h4 class="hd09">Berlin</h4>
                                    </div>
                                    </div>
                                          <p class="para-677">   TODAY’S HIGHLIGHTS: City tour of Berlin. We visit the Holocaust Memorial and the Berlin Wall
                                            Museum. Ease your way into the local culture with a guided tour of Germany’s incredible capital,
                                            Berlin. We will visit the historic centre, Museum Island, the Reichstag, the Brandenburg Gate and
                                            the city’s magnificent parks. We continue our visit by stopping at the Holocaust Memorial and the
                                            Berlin Wall Museum. This visit can help us to understand the difficult situation the city experienced
                                            during the Twentieth Century. Leisure time to explore the city.
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
                                        <h4 class="hd09">  Berlin, Dresden, Bamberg, Nuremberg</h4>
                                    </div>
                                </div>
                                <p class="para-677">TODAY´S HIGHLIGT: Bavarian Republic of Germany.We will travel to DRESDEN, a city on the
                                    river Elba where we can admire its palace. We go on to Bavaria and our arrival in BAMBERG, a
                                    very beautiful city full of life; don’t miss little Venice! We continue to NUREMBERG, the second
                                    largest city in Bavaria, and a city of great history where we suggest a visit to the place where
                                    Hitler’s Coliseum stood.                  
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
                                        <h4 class="hd09">Nuremberg, Lanshut, Dachau, Munich
                                            </h4>
                                    </div>
                                </div>
                                <p class="para-677">TODAY´S HIGHLIGHT: Cruise on the Danube. Beautiful landscapes. Dachau concentration camp.
                                    BMW world.Today’s journey is one of great surprises. From Kelheim we board a boat to make a
                                    short cruise along the Danube Valley, in the area of the Danube Gorges. We come to KLOSTER
                                    WELTENBURG, a very beautiful Benedictine monastery founded in 1040, where we have time to
                                    visit before going on to LANDSHUT, one of Germany’s prettiest villages, and time for lunch. We
                                    continue to DACHAU where we will visit the museum of the Nazi concentration camp. In midafternoon, we reach MUNICH, where we visit the impressive BMW WELT (BMW world) complex,
                                    the very modern multifunctional exhibition facility of the prestigious German vehicle group BMW.
                                    We also see the park where the Olympia stadium stands in its architectural beauty and where the
                                    famous Olympic Games of 1972 were held. After this, free time in the historic centre to enjoy the
                                    typical beer houses
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
                                <p class="para-677">TODAY´S HIGHLIGHTS: Neuschwanstein. Rothenburg Christmas Museum.Amidst alpine
                                    summits and very beautiful scenery, we travel to FUSSEN and the Neuschwanstein Castle. We
                                    get on a bus to Maria Bridge and admire the fantastic scenery from this little bridge between the
                                    hills. You can either return on foot or horse and cart (not included). After this, continuing with our
                                    romantic route, we travel to ROTHENBURG, a very pretty city surrounded by walls, where we
                                    enter the beautiful Christmas Museum (entrance included). Next FRANKFURT, Germany’s
                                    financial capital.
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
                                        <h4 class="hd09">Frankfurt, Reno, Cologne (köln), Dusseldorf</h4>
                                    </div>
                                </div>
                                <p class="para-677">TODAY´S HIGHLIGHT: Cruise on the Rhine. Romantic route. Today we will see the valleys of the
                                    Rhine and Mosel, two rivers loaded with history and sprinkled with charming villages. We take a
                                    short cruise on the Rhine, between the villages of RUDESHEIM and ST. GOAR, undoubtedly the
                                    most picturesque section of the river. Then we will go on to the river Mosel, and will have time for
                                    lunch in COCHEM, a very picturesque village on the bank of the river. We also discover the
                                    incredible Burg Eltz, a medieval castle surrounded by forests in the mountains. In the late afternoon
                                    we will arrive in COLOGNE, time for a stroll in the busy area of the cathedral before going on to our
                                    hotel in DUSSELDORF.
                                    
                                    
                                </p>
                            </div>
                            <div class="container " >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Dusseldorf, Hamelin, Hannover</h4>
                                    </div>
                                </div>
                                <p class="para-677">TODAY´S HIGHLIGHT: Coal Mine Industrial Complex. A stroll in DUSSELDORF, a city on the
                                    banks of the Rhine and in the centre of Germany’s most industrial region. We continue to
                                    ZOLLVEREIN, which is one of the most important points on the “European route of industrial and
                                    heritage”, where we visit its Coal Mine Industrial Complex, declared World Heritage. We proceed
                                    north bound, stopping in HAMELIN, a city made famous due to the Pied Piper. After following in the
                                    footsteps of the mice, we continue to HANNOVER, where we have time to visit the centre of this
                                    thriving city. Note: On dates when there are trade fairs or congresses, the accommodation may be
                                    in a nearby town.
                                </p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">  Hannover, Goslar, Berlin</h4>
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
                                                Central location,
Berlin, Germany
                                            </h6>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">Free time at HANNOVER before continuing the route to GOSLAR; We are in one of the most
                                    beautiful villages of Germany, with its wooden architecture, its walls, its squares. Time to walk and
                                    have lunch. Continuation to BERLIN. Arrival in the afternoon. Free time.End of our services.
                                    Please, check the time of your flight in case you might need an additional night.
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-6777"> BERLIN: GRAND CITY BERLIN EAST or MARITIM PROARTE BERLIN or MARITIM BERLIN <br>
                                        BERLIN: MOXY BERLIN OSTBAHNHOF or RIU PLAZA BERLIN<br>
                                        NUREMBERG: NH COLLECTION NUERNBERG CITY<br>
                                        MUNICH: LEONARDO MUNICH OLIMPIAPARK or COURTYARD BY MARRIOTT MUNICH<br>
                                        CITY EAST or SHERATON MUNCHEN WESTPARK<br>
                                        MUNICH: SHERATON MUNICH ARABELLAPARK<br>
                                        FRANKFURT: MARITIM FRANKFURT<br>
                                        Dusseldorf: MOXY DUSSELDORF SOUTH<br>
                                        HANNOVER: WYNDHAM HANNOVER ATRIUM or MARITIM AIRPORT HOTEL HANNOVER or<br>
                                        MARITIM STAATSBADHOTEL BAD SALZUFLEN<br>
                                        BERLIN: MERCURE BERLIN TEMPELHOF<br>
                                        We know how important hotels are on your trip. The hotels have been selected taking into
                                        consideration quality, price and location. They are located in the cities we visit, most of them not in<br>
                                        the city center but all of them with easy access to public transportation nearby. Our
                                        accommodation is not based on luxury hotels. Please keep in mind that standards, bed sizes and
                                        room dimensions can vary between hotels of the same class in different locations. All rooms are
                                        equipped with private bathroom and TV. Some of them also offer a mini-bar, safe box, and hair
                                        dryer. Many hotels, mainly in North Europe, do not have air conditioning or local legislation
                                        establishes limited dates of use.
                                        </p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">English speaking tour in: BERLIN
                                    Please note also that your tour guide might be changed once or several times during the tour. On
                                    some tours, according to the number of passengers, the service may be provided in bilingual
                                    (usually in English and Spanish), either accompanied by two tour leaders, one for each language,
                                    or a single tour leader for smaller groups explaining in both languages.   </p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr">7 Breakfasts <br>
                                    5 Lunches <br>
                                    2 Dinners
                                    Other meals are not included to give you the maximum flexibility in deciding where, what and with
                                    whom to eat.</p>
                                
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Includes arrival transfer
                                    Evening transfer: Neighborhood of Breweries in Munich
                                    </p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">City tour in: BERLIN
                                    Ticket admission: Holocaust Memorial; Museum of the Wall in Berlin in BERLIN, Dachau
                                    Concentration Camp Museum; BMW WELT BMW World in DACHAU, Christmas Museum in
                                    Rothenburg in ROTHENBURG, Coal mine industrial complex in Zollverein in HAMELIN</p>
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

@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <!--<link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;height: 6000px;">
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
                    <h6 class="spn-2">Golden Triangle Tour
                        with Goa</h6>
                    <p>
                        <span class="seven">8N/9D</span> Flexi Package
                        <span class="sp-3">Amazing  Goa Tour Inclusive Deal 8N</span>
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
                                        <a href="#booking">
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
                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Admire India's first
                            marble tomb
                        </h6>
                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Visit the fascinating
                            Taj Mahal
    
                        </h6>
                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Enjoy traditional
                            Indian cuisine
                        </h6>
                        <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Explore the Palace of
                            Winds</h6>
                        <!-- next-page -->
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/goa.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹46,759.92
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 class="htpvp190 pt-3">DURATION
                                        </h6>
                                        <h6 class="htpvp1">9 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 2 to 85 year olds </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">New Delhi  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            New Delhi  
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
                                        <p class="htpvp1">World Travel Experiences
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#125698
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
                                <p class="para-67">Don’t miss out on this one of its kind holiday in India. This rare combination tour offers you a
                                    chance to enjoy basking at the balmy beaches of Goa and strolling through most imposing
                                    monuments in Delhi, Agra & Jaipur.                                    
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
                                        <h4 class="hd09"> Arrive New Delhi
                                    </div>
                                </div>
                            </div>

                            <!-- next-page -->
                            <div class="container">
                                <div class="bd-1">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="head-632">Start Point</h4>
                                        </div>
                                        <div class="col-sm-1">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="hkl">
                                                We will arrange your pick up either from Indra Gandhi
                                                International Airport or your Pre booked accommodation.,
                                                Indira Gandhi International Airport, New Delhi, New Delhi,
                                                Delhi, India
                                            </h6>
                                        </div>
                                        <!-- <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00-23:55</h6>

                                        </div> -->
                                    </div>
                                    <p class="para-6771 mt-5">Meeting and assistance on arrival at the airport, our representative will meet to welcome and
                                        escort you by a private chauffeur driven car and transfer to hotel. <br>
                                        
                                        Delhi, capital city of the Federal Republic of India. It is one of India's fastest growing cities. It has
                                        sprawled over the West Bank of the river Yamuna, straddling the river. Delhi blends an historic past
                                        and a vibrant present. Delhi has some of the finest museums in the country. New Delhi was
                                        proclaimed the capital of India by the British architect Sir Edwin Lutyens (1869-1944) & is tree-lined
                                        & spacious. Legend has it that the Pandavas, the august heroes of the epic Mahabharata,
                                        originally founded Delhi, then called Indraprastha, around 1200 B.C. Present day Delhi is built
                                        around the ruins of seven ancient cities. <br>
                                        Overnight at hotel
                                        
                                    </p>
                                </div>
                            </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 300px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">IN DELHI</h4>
                                    </div>
                                </div>
                                <p class="para-6777">Morning after breakfast, proceed to Old Delhi & experience rickshaw ride at Chandni Chowk,
                                    explore the narrow alleys & colorful markets & local shoppers. Visit the nearby "Jama mosque,"
                                    which is one of the largest ancient mosque complex of Asia. Then drive past Red Fort built in the
                                    year 1648 by Shah Jehan. Visit Raj Ghat, memorial to the Father of the Nation, Mahatma Gandhi.
                                    Lunch at a Local restaurant
                                    Later, you will be taken to New Delhi which includes Humayun's Tomb, memorial of Mughal
                                    Emperor Humayun, built in the year 1562. Further we drive past India Gate, memorial built in the
                                    year 1931 to commemorate the Indian soldiers who died in the World War I & the Afghan Wars.
                                    President's House, the official residence of the President of India, built in the year 1931, Qutub
                                    Minar. Overnight stay at hotel.
                                </p>
                            </div>
                            <hr>
                            <!-- page- -->
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 3:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h6 class="hd09"> DELHI - AGRA</h6>
                                    </div>
                                </div>

                                <p class="para-677">After breakfast check out and drive to the beautiful city of Agra. Upon arrival in Agra check into the
                                    Hotel.
                                    After relaxation visit Agra Fort, designed and built by Akbar in 1565 A.D., built with barricaded wall
                                    of red sand stone; it houses the beautiful and numerous palaces including the Jahangir Mahal,
                                    Diwan-i-Khas, Diwan-i-Am, Macchhi Bhawan, Nagina Masjid, Moti Masjid, Sheesh Mahal,
                                    Musamman Burj where from Taj Mahal is visible in all its beauty from one side of the fort.
                                    Overnight stay at hotel                                                             
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
                                        <h4 class="hd09"> AGRA - FATEHPUR SIKRI - JAIPUR</h4>
                                    </div>
                                </div>
                                <p class="para-677">Breakfast at hotel. Morning visit Taj Mahal (Remains closed on every Friday) is the one of the
                                    Seven Wonders of the World surely the most extravagant expression of love ever created. 20,000
                                    men laboured for over 17 years to build this memorial to Shah Jahan's beloved wife.
                                    Later drive to the beautiful city of Jaipur, En route visit Fatehpur Sikri, the abandoned city of the
                                    Mughal Empire. The city boasts some of the magnificent monuments built during the Mughal Era,
                                    which include the Panch Mahal, Buland Darwaza and Dargah of Sheikh Salim Chisti.
                                    Later continue drive to Jaipur enroute stopping at Enroute visit "Korai" village, a hamlet nestled in
                                    Agra, just off the Fatehpur Sikri Highway is surely a must visit. This village belongs to former bear
                                    rearers whose only source of livelihood was making money through bear and monkey dances.
                                    However, after their bears got snatched away by the wildlife authorities because of protection of
                                    animal rights, they have been struggling to survive each day as they were not given any
                                    compensation. Upon arrival in Jaipur check into the Hotel. Overnight stay at hotel in Jaipur.
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> IN JAIPUR</h4>
                                    </div>
                                </div>
                                <p class="para-677">Today after breakfast explore the Pink City with an excursion to Amber Fort, situated just outside
                                    the city, enjoy the experience of ride on elephant back to and from the top of the hill on which the
                                    fort is situated.
                                    Afternoon sightseeing tour of City Palace in the heart of Jaipur is known for its blend of Rajasthani
                                    and Mughal architecture. Not far away is the Central Museum. Jantar Mantar is the largest of the
                                    five observatories built by Sawai Jai Singh. The Hawa Mahal or the Palace of Winds was
                                    constructed for the royal ladies to watch the royal processions without being seen, all monuments
                                    are located in the vicinity of City Palace Complex of Jaipur. Overnight stay at hotel in Jaipur.
                                    
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> JAIPUR - GOA
                                        </h4>
                                    </div>
                                </div>
                                <p class="para-677">In time transfer to airport to board flight for Goa. On arrival Check in at hotel..
                                    GOA : Goa the most famous sea side resorts in India. Goa has always been an attraction for the
                                    tourists, who want to be close to the sea, sand and enjoy sun. In the 60's Goa was among the
                                    most frequented places in India. The hippies thronged the place. With them came a culture of
                                    careless, unbounded life style. Today all this has changed. Instead of the hippies, one spots
                                    serious tourists who come to enjoy the beaches and colourful culture of Goa. Today the beach
                                    parties might be small but they are more lively and have much more fun to offer than the 'stoned'
                                    parties during the hippy trails of the past. Overnight at hotel.
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> IN GOA</h4>
                                    </div>
                                </div>
                                <p class="para-677">Full day free at leisure. Overnight at hote
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 8:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">IN GOA</h4>
                                    </div>
                                </div>
                                <p class="para-677">Full day free at leisure. Overnight at hotel.
                                </p>
                            </div>
                            <hr>
                            <!-- page-5 -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 9:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">GOA - DEPART

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
                                                We will arrange your drop at Dabolim Goa Airport, Goa or
                                                your own arrange accommodation in Goa.,
                                                Dabolim Goa International Airport (GOI), Airport Road,
                                                Vasco Da Gama, Goa, India
                                        </div>
                                       
                                    </div>
                                </div>
                                <p class="para-677">After breakfast get driven to airport to board connecting flight to onward destination.
                                </p>

                            </div>
                        </div>
                        <!-- nxt-page -->
                        <div class="container">
                            <h4 class="headerrr">What’s Included</h4>
                            <h6 class="headerr">Accommodation</h6>
                            <p class="para-6777">08 Night accommodation on mention hotel or similar. (3 star deluxe hotel and Heritage Hotel
                                combinations) Below mentioned hotel's are conveniently located at the heart of city. These hotel's
                                are specially designed to offer an authentic and contemporary experience to all guests. These
                                hotel's are enriched by the personalized services and modern amenities to meet the elegance and
                                comfort of a star hotel. <br>
                                Delhi: Crest Inn <br>
                                Agra: Taj Villa <br>
                                Jaipur: Surya Villa (Heritage Hotel)
                                </p>

                        </div>
                        <!-- NEXT PAGE -->
                        <div class="container">
                            <h6 class="head-876">Guide</h6>
                            <p class="prvr">Services of Licensed Guide which are approved by the ministry of Tourism for your sightseeing
                                trip of Delhi,Agra, FatehpurSikri Jaipur. Guides that we use are guest friendly, professional,
                                Cognizant and Hygenic. Having the eloquence of myriad of languages like Dutch, English, French,
                                German etc.
                            </p>
                            <h6 class="head-876">Meals</h6>
                            <p class="prvr">Meal Plan - Buffet Breakfast at Hotels Restaurants. Buffet breakfast served at the listed hotel's will
                                be Hygenic, healthy with wide ranges of dishes to opt from. The breakfast served in these hotel's
                                will surely pamper your taste buds.
                            </p>

                            <h6 class="head-876">Transport
                            </h6>
                            <p class="prvr">All transfers and sightseeing by Personal AC Car, driven by friendly chauffer, Who'd be English
                                speaking, professional and knowledgeable. The vehicle that we use are new with perfect condition,
                                clean and with working AC
                            </p>
                            <h6 class="head-876">Others</h6>
                            <p class="prvr">Warm welcome at the airport by our company representative in Indian traditional way. <br>
                                All transfers and sightseeing by AC transportation, driven by friendly chauffer.<br>
                                Rickshaw Ride in Old Delhi to explore Hustle Bustle Market of Chandni Chowk.<br>
                                Light & sound show at Red Fort in Delhi.<br>
                                Battery Van in Agra to reach near Taj Mahal.<br>
                                Elephant Ride in Jaipur to climb Amer fort.<br>
                                Exclusive shopping tours in local markets to get a feel of real Indian art and culture.<br>
                                Mineral water bottle throughout the tour.<br>
                                All applicable Taxes.
                                
                            </p>
                        </div>
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
                                <button class="btn btvn"
                                    style="background-color:  rgb(234, 100, 10); color: #fff; margin-left: 270px !important; margin-top: 50px !important; border: 1px solid  rgb(234, 100, 10);">BOOK
                                    NOW</button>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>

@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/adven/ausallcss/style1.css')}}">
  <!--Deskstop view-->


    <section id="Itenary">
        <div class="container card mainContainerBali">
            <div class="grid grid-three-column">
                <div class="WagnisTrip-logo">
                    <img src="{{('assets/images/honeymoondestination/logo into copy.png')}}" alt="WagnisTrip Logo">
                </div>
                <div class="Itenary-heading">
                    <h2>Full Itinerary & Trip Details</h2>
                </div>
                <div class="ITA-logo">
                    <img src="{{('assets/images/honeymoondestination/IATA.png')}}" alt="ITA Logo">
                </div>
            </div>
            <div class="images-slider-group">
                <div class="grid grid-three-column">
                    <!-- Image Slider Start -->
                    <div class="slider">
                        <div class="slides">
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">
                            <input type="radio" name="radio-btn" id="radio5">
                            <input type="radio" name="radio-btn" id="radio6">
                            <input type="radio" name="radio-btn" id="radio7">

                            <div class="slide first">
                                <img src="{{('assets/images/honeymoondestination/malallimg/101.png')}}" alt="First Image">
                            </div>
                            <div class="slide">
                                <img src="{{('assets/images/honeymoondestination/malallimg/102.png')}}" alt="Second Image">
                            </div>
                            <div class="slide">
                                <img src="{{('assets/images/honeymoondestination/malallimg/103.png')}}" alt="Third Image">
                            </div>
                            <div class="slide">
                                <img src="{{('assets/images/honeymoondestination/malallimg/104.png')}}" alt="Fourth Image">
                            </div>
                            <div class="slide">
                                <img src="{{('assets/images/honeymoondestination/malallimg/105.png')}}" alt="Fifth Image">
                            </div>
                            <div class="slide">
                                <img src="{{('assets/images/honeymoondestination/malallimg/106.png')}}" alt="Sixth Image">
                            </div>
                            <div class="slide">
                                <img src="{{('assets/images/honeymoondestination/malallimg/Maldives.png')}}" alt="Seventh Image">
                            </div>
                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>
                                <div class="auto-btn5"></div>
                                <div class="auto-btn6"></div>
                                <div class="auto-btn7"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Image Slider End   -->

                    <div class="image-1">
                        <img src="{{('assets/images/honeymoondestination/malallimg/Maldives.png')}}" alt="">
                    </div>
                    <div class="image-2">
                        <img src="{{('assets/images/honeymoondestination/malallimg/104.png')}}" alt="">
                        <img src="{{('assets/images/honeymoondestination/malallimg/105.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="main-shimla">
                <h3 class="shimla">Romantic Maldives</h3>
                <div class="grid grid-three-column">
                    <div class="package">
                        <h4>4N/5D</h4>
                    </div>
                    <div class="flexi">
                        <h4>Flexi Package</h4>
                    </div>
                    <div class="shimla-tour">
                        <h3>Amazing Maldives Tour Inclusive Deal 4N</h3>
                    </div>
                </div>
            </div>

            <div class="grid grid-three-column">
                <div class="selection">
                    <h4>BEST SELECTION</h4>
                </div>
                <div class="price">
                    <h4>BEST PRICES</h4>
                </div>
                <div class="payments">
                    <h4>TRUSTED PAYMENTS</h4>
                </div>
            </div>
            <div class="pvt-6"></div>
            <div class="grid grid-two-column contentList">
                <div class="contenting">
                    <h4>Contents</h4>
                    <ol style="display: flex; flex-direction: column;">
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
                <div class="WagnisTrip-Holidays">
                    <h5>Curated by</h5>
                    <h2>WagnisTrip Holidays</h2>
                    <h5>Email: customercare@wagnistrip.com</h5>
                    <h5>Call Us: +91 8069145571</h5>
                    <h5>Quotation Created on this date Valid till this</h5>
                </div>
            </div>
            <div class="Trip-overview">
                <h2>Trip Overview</h2>
                {{-- <img src="/corporate.jpg" alt="Corporate Image"> --}}
            </div>
            <div class="grid grid-two-column">
                <div class="price-starting">
                    <h5>PRICE STARTING FROM</h5>
                    <h5>₹ 223,945</h5>
                </div>
                <div class="duration">
                    <h5>DURATION</h5>
                    <h5>5 days</h5>
                </div>
            </div>
            <div class="New-Delhi">
                <h5>STARTS IN <span><ion-icon class="forward-icon" name="arrow-forward-outline"></ion-icon></span> ENDS
                    IN</h5>
                <h5>Male <span><ion-icon class="forward-icon" name="arrow-forward-outline"></ion-icon></span>
                    Male</h5>
            </div>
            <div class="operated">
                <h5>OPERATED IN</h5>
                <h5>English</h5>
            </div>
            <div class="grid grid-two-column">
                <div class="operator">
                    <h5>OPERATOR</h5>
                    <h5>WagnisTrip</h5>
                </div>
                <div class="tour">
                    <h5>TOUR CODE</h5>
                    <h5>#238582</h5>
                </div>
            </div>
            <div class="itenary" id="iti">
                <h2>Itinerary</h2>
                <h3>Introduction</h3>
                <p>Maldives once of the most romantic destination. Maldives, a perfect destination for

                    honeymooners, and a complete paradise with sun-kissed beaches, shimmering sand, cozy

                    restaurants, and tranquil Ayurvedic massage retreats, delicious seafood, beautiful coast line,

                    coral reef and all the sea sports. Spend the Relaxing time with your loved one in this magical

                    place and make life time memorable moments.

                    For most people it is far, far away from the maddening crowd, where you escape from the

                    rush of the city and take time to rest, destress and enjoy one another. In a few words - it’s a

                    completely relaxing vacation destination.</p>
                <br>
                <p><strong>Highlights :- </strong></p>
                <p>✓ Exotic feel while staying in beautiful rooms or well-designed water bungalows.</p>
                <p>✓ Witness Mesmerizing Sunny and pristine beaches while sunrise and sunsets.</p>
                <p>✓ Do you fancy dining in one of the finest resorts, enjoy the Best Food with a lavish
                    menu, soft drinks, and hard drinks.</p>
                <p>✓ Professional and friendly attention in the resort.</p>
                <p>✓ Romantically shaped Bed decoration - once per stay</p>
            </div>
            <div class="days" id="wise">
                <div class="day1-heading">
                    <h4>Day 1:</h4>
                    <h4>Arrive at Male</h4>
                </div>
                <div class="start-point">
                    <h5>Start Point</h5>
                    <h5><ion-icon name="location-sharp" style="color: rgb(16, 128, 209);"></ion-icon> Velana
                        International Airport (MLE), Malé, Maldives
                    </h5>
                    <h5><ion-icon name="time-outline" class="clock-icon"></ion-icon> 05:00 - 05:00</h5>
                </div>
                <p class="delhi-para">Upon arrival, you will be met by our local representative and transferred to Hotel
                    by Motor Boat. Rest of the day free for relaxation.



                    Maldives, known to the locals in their native language (Dhivehi) as Dhivehi Raajje, is an
                    archipelago of 1,192 coral islands grouped into 26 natural coral atolls in the Indian Ocean. They
                    lie on south-southwest of India and west of Sri Lanka. None of the coral islands measures more than
                    1.8 meters above sea level.



                    With its abundant sea life and sandy beaches, and the Maldives is portrayed by travel companies as a
                    tropical paradise. Maldives was, for the most part unknown to tourists until the early 1970s.</p>
                    <p class="delhi-para">Overnight: Maldives</p>
                    <hr>
                <div class="day-2-heading">
                    <h4>Day 2:</h4>
                    <h4>Maldives - day at leisure</h4>
                </div>
                <p class="shimla-para">In the Morning, enjoy a scrumptious breakfast in the resort.
                    Rest of the day at leisure on your own or you can do your own water activities. You can experience different water activities in Maldives. Vacation to a tropical beach destination is incomplete without experiencing its myriad options of watersports! Maldives is a great destination for you to enjoy, and indulge in water sports. You can enjoy Banana Boating, Catamaran Sailing, Fishing, Flyboarding, Jet Skiing, Fun Tube, Kayaking, and many other activities which are available at your resort.</p>
                    <br>
                    <p class="shimla-para">Overnight: Maldives</p>
                    <br>
                    <p class="shimla-para">Meals :Breakfast | Lunch | Dinner </p>
                <hr>
                <div class="day-4-heading">
                    <h4>Day 3:</h4>
                    <h4>Maldives – day at leisure</h4>
                </div>
                <p class="shimla-para">In the morning, enjoy scrumptious breakfast in the resort.

                    Rest of the day at leisure on your own or you can do your own water activities.</p>
                    <p class="shimla-para">Overnight: Maldives</p>
                    <p class="shimla-para">Meals :Breakfast | Lunch | Dinner </p>
                <hr>
                <div class="day-4-heading">
                    <h4>Day 4:</h4>
                    <h4>Maldives – day at leisure</h4>
                </div>
                <p class="shimla-para">In the morning, enjoy scrumptious breakfast in the resort.Rest of the day at leisure on your own or you can do your own water activities.</p>
                <br>
                <p class="shimla-para">Overnight: Maldives</p>
                <p class="shimla-para">Meals :Breakfast | Lunch | Dinner </p>
                <hr>
                <div class="day-4-heading">
                    <h4>Day 5:</h4>
                    <h4>Departure</h4>
                </div>
                <div class="Delhi">
                    <h5>End Point</h5>
                    <h5><ion-icon name="location-sharp" style="color: rgb(16, 128, 209);"></ion-icon> Velana International Airport (MLE), Malé, Maldives
                    </h5>
                    <h5><ion-icon name="time-outline" class="clock-icon"></ion-icon> 05:05 - 05:00</h5>
                </div>
                <p class="delhi-para-2">After breakfast, check out from the hotel and transfer to the airport for the onboard journey.End of the tour with happy memories.
                </p>
                <br>
                <p class="delhi-para-2">Meals :Breakfast </p>
            </div>

            <div class="included">
                <h3>What’s Included</h3>
                <h3>Accommodation</h3>
                <p class="para-1">02 Nights Garden Villa & 02 Nights Sunrise Ocean Villa</p>
                <p class="para-1">04 nights accomodation with All inclussive meal Plan except arrival Breakfast and Lunch .</p>
                <h4 class="meals">Meals</h4>
                <p class="para-2">Breakfast,Lunch,Dinner with bevrages (Except Arrival Breakfast,Lunch)</p>
                <p class="para-2">This tour offers Vegetarian food option on request.</p>
                <h4 class="meals">Additional Services</h4>
                <p class="para-2">Meet & greet at the airport</p>
                <p class="para-2">*Welcome drinks upon arrival at the resort</p>
                <p class="para-2">*4 Nights’ accommodation </p>
                <p class="para-2">*All meals breakfast, lunch, and dinner</p>
                <p class="para-2">*Soft drinks and hard drinks at the resort </p>
                <p class="para-2">*Arrival and departure transfers by speedboat </p>
                <p class="para-2">*Romantically shaped bed decoration - once per stay</p>
                <p class="para-2">*One Honeymoon cake</p>
                <p class="para-2">*Romantic Turn-down service - once per stay (on request)</p>
                <p class="para-2">*Currently applicable taxes</p>
                <p class="para-2">*All Taxes</p>
                <h4 class="transport">Transport</h4>
                <p class="para-2">Return Airport Tranfser by Shared Speed boat</p>
            </div>

            <div class="why-book" id="book">
                <h2>Why Book with us?</h2>
                <div class="grid grid-two-column">
                    <div class="booking-fees">
                        <h4>No Booking Fees</h4>
                        <p>We charge 0% booking fees and 0% credit card fees. You won`t find any hidden fees.
                            #BoycottBookingFees</p>
                    </div>
                    <div class="unlimited-travel">
                        <h4>Earn Unlimited Travel Credits</h4>
                        <p>You can use Travel Credit towards your next tour booking on TourRadar.TourRadar Credits do
                            not expire.</p>
                    </div>
                </div>
                <div class="grid grid-two-column">
                    <div class="flexible-payment">
                        <h4>Flexible Payment Options</h4>
                        <p>You can pay with a credit card or PayPal account to ensure that your booking are always easy.
                        </p>
                    </div>
                    <div class="safely-book">
                        <h4>Safely book online</h4>
                        <p>All your details are safely protected by a secure connection.</p>
                    </div>
                </div>
            </div>
            <div id="booking" class="booking-button">
                <button>BOOK NOW</button>
            </div>
        </div>
    </section>
    <script src="{{url('assets/js/honeymoondestinationJS/malalljs/index1.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <div class="dpnr">
        <x-footer />
    </div>
    <div class="container-fluid bg-darksar p-0">
        <div class="container mobileVes1 marthide pt-5 pb-3 text-white">
            <h6 class="font-weight-bold"> Our Products </h6>
            <ul class="list-unstyled listed_links">
                <li><a href="https://wagnistrip.com">Flight</a></li>
                <li><a href="https://wagnistrip.com/hotels">Hotel</a></li>
                <li><a href="https://wagnistrip.com/holidays">Holiday</a></li>
                <li><a href="https://wagnistrip.com/cruise">Cruise</a></li>
                <li><a href="https://wagnistrip.com/visa">Visa</a></li>
                <li><a href="https://wagnistrip.com/about-pages">About Us</a></li>
                <li><a href="https://wagnistrip.com/careerspages">Careers</a></li>
                <li><a href="https://wagnistrip.com/contact">Contact Us</a></li>
                <li><a href="https://wagnistrip.com/terms-and-conditions">Terms and Conditions</a></li>
                <li><a href="https://wagnistrip.com/user-agreement">User Agreement</a></li>
                <li><a href="https://wagnistrip.com/privacy-policy">Privacy Policy</a></li>
                <li><a href="https://wagnistrip.com/activities-main">Activities Tours</a></li>
                <li><a href="https://wagnistrip.com/blog-page">Blog</a></li>
            </ul>
        </div>
    </div>
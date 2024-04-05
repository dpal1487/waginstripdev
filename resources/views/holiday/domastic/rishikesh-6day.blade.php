@extends('layouts.master')
@section('title','Wagnistrip')
@section("body")
<!-- DESKTOP VIEW START  -->

 {{-- <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet"> --}}
 <link rel="stylesheet" href="{{ asset('assets/css/itenry.css') }}">

        <br><br><br>
        <section id="Itenary">
            <div class="container">
                <div class="grid grid-three-column">
                    <div class="Itenary-heading">
                        <h2>Full Itinerary & Trip Details</h2>
                    </div>
                    <div class="WagnisTrip-logo">
                        <img src="{{ asset('assets/images/itenry/logo into copy.png')}}" alt="WagnisTrip Logo">
                    </div>
                    <div class="ITA-logo">
                        <img style="border-radius:50%;" src="{{ asset('assets/images/itenry/IATA.png')}}" alt="ITA Logo">
                    </div>
                </div>
                <h3 class="shimla">Shimla - 4 days</h3>
                <div class="grid grid-three-column">
                    <div class="package">
                        <h4>3N/4D</h4>
                    </div>
                    <div class="flexi">
                        <h4>Flexi Package</h4>
                    </div>
                    <div class="shimla-tour">
                        <h3>Amazing Shimla Tour Inclusive Deal 3N</h3>
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
                <div class="grid grid-two-column">
                    <div class="contented">
                        <h4>Contents</h4>
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
                    <img src="{{ asset('assets/images/itenry/corporate.jpg')}}" alt="Corporate Image">
                </div>
                <div class="grid grid-two-column">
                    <div class="price-starting">
                        <h5>PRICE STARTING FROM</h5>
                        <h5>₹45,197.71</h5>
                    </div>
                    <div class="duration">
                        <h5>DURATION</h5>
                        <h5>4 days</h5>
                    </div>
                </div>
                <div class="New-Delhi">
                    <h5>STARTS IN <span><ion-icon class="forward-icon" name="arrow-forward-outline"></ion-icon></span> ENDS
                        IN</h5>
                    <h5>New Delhi <span><ion-icon class="forward-icon" name="arrow-forward-outline"></ion-icon></span> New
                        Delhi</h5>
                </div>
                <div class="operated">
                    <h5>OPERATED IN</h5>
                    <h5>English</h5>
                </div>
                <div class="grid grid-two-column">
                    <div class="operator">
                        <h5>OPERATOR</h5>
                        <h5>Go Travelling LTD</h5>
                    </div>
                    <div class="tour">
                        <h5>TOUR CODE</h5>
                        <h5>#8393</h5>
                    </div>
                </div>
                <div class="itenary" id="iti">
                    <h2>Itinerary</h2>
                    <h3>Introduction</h3>
                    <p>PRIVATE TOUR: Shimla, was the ‘summer capital’ of British India. The natural beauty of Shimla will
                        enchant you, being famous for its stunning sunsets and verdant woods, contrasted with the intriguing
                        English look of the town.</p>
                </div>
                <div class="days" id="wise">
                    <div class="day1-heading">
                        <h4>Day 1:</h4>
                        <h4>Delhi</h4>
                    </div>
                    <div class="start-point">
                        <h5>Start Point</h5>
                        <h5><ion-icon name="location-sharp" style="color: rgb(16, 128, 209);"></ion-icon> New Delhi, India
                        </h5>
                    </div>
                    <p class="delhi-para"> Delhi - Shimla. Early morning transfer from our hotel to the Shatabdi Express
                        train to Kalka and
                        then transfer to the Himalayan Queen toy train to Kandaghat. On arrival into Kandaghat you'll be met
                        and transferred to your hotel in Shimla by road. Rest of the day is at leisure</p>
                    <div class="day-2-heading">
                        <h4>Day 2-3:</h4>
                        <h4>Shimla</h4>
                    </div>
                    <p class="shimla-para">Free time to explore the city. The ‘summer capital’ of British India sprawls
                        along a crescent-shaped
                        ridge at an altitude of over 2100m in southern Himachal Pradesh. This was the most important hill
                        station in India before independence. The famous main street, The Mall, still runs along the crest
                        of the ridge and is lined with stately English-looking houses. Christ Church, Gorton Castle and the
                        fortress-like former Viceroyal Lodge reinforce the English favour.</p>
                    <hr>
                    <div class="day-4-heading">
                        <h4>Day 4:</h4>
                        <h4>Delhi</h4>
                    </div>
                    <div class="Delhi">
                        <h5>End Point</h5>
                        <h5><ion-icon name="location-sharp" style="color: rgb(16, 128, 209);"></ion-icon> New Delhi, India
                        </h5>
                        <h5><ion-icon name="time-outline" class="clock-icon"></ion-icon> 06:00 - 18:00</h5>
                    </div>
                    <p class="delhi-para-2">Shimla - Delhi. Morning is at leisure and later we drive to Kalka Railway
                        Station to connect with
                        your train for Delhi. On arrival to Delhi you will be met and taken to your hotel or to the airport
                        in time to connect with your onward fight. If you'd like to extend your stay, we offer a variety of
                        hotels, short stays and add-ons for you to choose from. Please read our best places to visit or
                        [[best things to see each month|126647]] for suggested places to visit on your holiday. If you can’t
                        find what you’re looking for, please let us know so we can accommodate your request. For information
                        about visas, top travel tips, best time to travel and much more, browse our [[travel guide|126581]].
                    </p>
                </div>
    
                <div class="included">
                    <h3>What’s Included</h3>
                    <h3>Accommodation</h3>
                    <p class="para-1">3 nights STANDARD hotels. SUPERIOR and DELUXE hotel options are also available upon
                        request. Accommodation rating – See Trip Notes for details</p>
                    <h4 class="meals">Meals</h4>
                    <p class="para-2">Breakfast daily</p>
                    <h4 class="transport">Transport</h4>
                    <p class="para-2">All relevant transfer and transportation in private modern Chauffeur driven
                        air-conditioned vehicles</p>
                    <h4 class="others">Others</h4>
                    <p class="para-3">One way Himalayan Queen toy train journey Kalka to Kandaghat (1st class non
                        air-conditioned)
                        Train journey from Delhi to Kalka (air-conditioned chair car)
                        Train journey from Kalka to Delhi (air-conditioned chair car)</p>
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
                            <p>You can use Travel Credit towards your next tour booking on TourRadar.TourRadar Credits do not expire.</p>
                        </div>
                    </div>
                    <div class="grid grid-two-column">
                        <div class="flexible-payment">
                            <h4>Flexible Payment Options</h4>
                            <p>You can pay with a credit card or PayPal account to ensure that your booking are always easy.</p>
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
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
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

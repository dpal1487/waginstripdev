@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <!--<link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none; padding-top:80px; height: 4700px;">
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
                    <h6 class="spn-2">Kerala the Beauty of
                        India</h6>
                    <p>
                        <span class="seven">5N/6D</span> Flexi Package
                        <span class="sp-3">Amazing Kerala Tour Inclusive Deal 5N</span>
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
                        <!-- next-page -->
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/kerala.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-7">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹86,171.85


                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">6 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 5 to 99 year olds </h6>
                                    </div>
                                </div> -->

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Kochi (Cochin) <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Kochi (Cochin) 
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
                                        <p class="htpvp1">Shatabdi Holidays
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#158181
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
                                <p class="para-67">Highlights <br>
                                    Experience the backwaters of Kerala . <br>
                                    Stay in a house boat for 01 Night <br>
                                    Spice plantation Tour <br>
                                    Enjoy the Kathakali Dance show <br>
                                    Discover the Rich culture and scenic beauty
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
                                        <h4 class="hd09"> Kochi (Cochin)
                                    </div>
                                </div>
                            </div>

                            <!-- next-page -->
                            <div class="container">
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
                                                Any where from Cochin,
                                                Cochin International Airport (COK),
                                                Nedumbassery, Alwaye, Kerala, India
                                            </h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00-23:55</h6>

                                        </div>
                                    </div>
                                    <p class="para-6771 mt-5">On arrival at Cochin Airport meet our representative and transfer to hotel and rest of time for
                                        leisure.
                                    </p>
                                </div>
                            </div>
                            <!-- page-2 -->
                            <div class="container " style="padding-top: 80px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 2:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Munnar</h4>
                                    </div>
                                </div>
                                <p class="para-6777">Morning after breakfast proceed for sightseeing and visit Fort Kochi, Jew Town, Old spice market,
                                    St. Francis Church, Santa Cruz Basilica and Chinese fishing net and after sightseeing drive to to
                                    Munnar, during the journey you have opportunity to see the different facet of beauty of nature. See
                                    the pristine stream, lovely waterfall and the well organized tea bushes and the surrounding air with
                                    aroma and after reaching Munnar check-in hotel . Rest of the time for a Leisure .Overnight at
                                    Munnar .
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
                                        <h6 class="hd09"> Munnar:</h6>
                                    </div>
                                </div>

                                <p class="para-677">Morning after breakfast Proceed for Sightseeing. Visit Munnar tea gardens spread like a green
                                    carpet over hundreds of kilometers, lust green hills, a place so difficult to describe, very low
                                    population too far from pollution, most of the covered by Tata tea. Also the Raja Malai(Eravikulam
                                    National park), a top peak of Munnar where you can see Neel Thar (mountain goats), Muttupetty
                                    dam, you can also enjoy boating in the Lake (optional). Night stay in Munnar.                                    
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
                                        <h4 class="hd09">  Periyar</h4>
                                    </div>
                                </div>
                                <p class="para-677">After early morning breakfast and drive to Periyar, visit Spice plantation tour to see Cardamom,
                                    Cinnamon, Pepper and coffee plantation and later you can also go for a boating in the scenic
                                    Periyar Lake located at the heart of the wildlife sanctuary. Here see the varied species of wild
                                    animals and birds in their natural home making an astonishing move that gives you a thrilling
                                    experience. Overnight stay in the Hotel.
                                </p>
                            </div>
                            <hr>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 5:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Alleppey</h4>
                                    </div>
                                </div>
                                <p class="para-677">Morning after breakfast drive to Alappuzha. On Arrival embark on your private houseboat and
                                    cruise on the Backwaters, a splendid area full of canals, lakes and coves. Your houseboats or
                                    ‘Kettuvalloms’ are luxurious boats with well-appointed bedrooms and ensuite bathrooms. You can
                                    sunbathe on the deck or observe the palm fringed landscape from your cabins. Apart from the
                                    mesmerizing surroundings it’s the life along the coast that adds a touch of exotica to this
                                    experience. The locals’ travel in canoes and you will find vegetable sellers, fishermen and other
                                    traders bringing household goods, door to door in small wooden boats. As you cruise along the
                                    backwaters you can ask your captain to stop at villages, paddy fields and other places, en-route.
                                    Overnight on board. (Full Board ).
                                </p>
                            </div>
                            <hr>
                            <!-- page-5 -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 6:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09">Kochi (Cochin)

                                    </div>
                                </div>
                                <div class="bd-1">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="head-632">End Point </h4>
                                        </div>
                                        <div class="col-sm-1">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-5">
                                            <h6 class="hkl">
                                                Drop to Cochin Airport or your location
                                                in cochin,
                                                Cochin International Airport (COK),
                                                Nedumbassery, Alwaye, Kerala, India
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00-23:55</h6>

                                        </div>
                                    </div>
                                </div>
                                <p class="para-677">Morning after breakfast drive to Cochin and transferred to the airport to board flight for onward
                                    journey.
                                    
                                </p>

                            </div>
                        </div>
                        <!-- nxt-page -->
                        <div class="container">
                            <h4 class="headerrr">What’s Included</h4>
                            <h6 class="headerr">Accommodation</h6>
                            <p class="para-6777">03 Star Hotel with Breakfast <br>
                                01 Night accommodation in House boat</p>

                        </div>
                        <!-- NEXT PAGE -->
                        <div class="container">
                            <h6 class="head-876">Guide</h6>
                            <p class="prvr">English speaking local Guide in cochin for Sightseeing
                            </p>
                            <h6 class="head-876">Meals</h6>
                            <p class="prvr">Daily Breakfast at Hotels <br>
                                All Meals during house boat stay (01 Day)
                            </p>

                            <h6 class="head-876">Transport
                            </h6>
                            <p class="prvr">We will provide neat and clean A/c vehicle for our valuable guest with Experienced Chauffeur.
                                Vehicle Type <br>
                                1-3 Person A/c Mid size car Like Swift Desire/ Similar<br>
                                3-4 Person A/c MUV car Like Innova/ Similar<br>
                                5-10 Person A/c Tempo Traveler or Similar<br>
                                10 Person – Above A/c Minivan to Coaches
                            </p>
                            <h6 class="head-876">Others</h6>
                            <p class="prvr">Assistance during arrival and departure <br>
                                Entry fee to Periyar National Park<br>
                                Kathakali Dance Show<br>
                                All Meals during house boats<br>
                                All the Departure are 100% Guaranteed Even, if there is a Single Traveler<br>
                                24 X 07 Assistance with our Professional team<br>
                                One mineral water per person per day<br>
                                Highway Toll Tax, Airport Parking, State Tax, vehicle Parking charges<br>
                                All currently applicable taxes including GST
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

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->



<!--<head>-->
<!--    <meta charset="UTF-8" />-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
<!--    <title>Document</title>-->
<!--    <link rel="stylesheet" href="./style.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css"-->
<!--        integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"-->
<!--        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"-->
<!--        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />-->
<!--    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"-->
<!--        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">-->
<!--    </script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"-->
<!--        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">-->
<!--    </script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"-->
<!--        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">-->
<!--    </script>-->
<!--</head>-->

<!--<body>-->
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
                      <img src="{{ URL::to('/assets/images/85555.png') }}" alt="" style="width: 260px;">
                            <img src="{{ URL::to('/assets/images/IATA.png') }}" alt="" style="width: 70px; margin-left:100px">

                    </div>

                   </div>
                    <h6 class="spn-2">Best of Ukraine: Kyiv,
                        Lviv, Odesa</h6>
                    <p>
                        <span class="seven">6N/7D</span> Flexi Package
                        <span class="sp-3">Amazing Ukraine Tour Inclusive Deal 6N</span>
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
                    <!-- next-page -->
                    <div class="container" style="padding-top: 10px;">
                        <h6 class="spn-2">Trip Overview</h6>
                        <img src="{{ URL::to('/assets/images/images/ukaraine.jpg') }}" alt="" style="margin-left: 50px; width: 600px; height: 400px; margin-top:20px">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">PRICE STARTING FROM</h6>
                                    <h6 class="htpvp1">₹71,078.81
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
                                    <h6 class="htpvp1">Kiev <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Odesa
                                    </h6>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="bd-12">
                                <div class="col-sm-10" style="width: 670px;">
                                    <h6 class="htpvp">OPERATED IN
                                    </h6>
                                    <h6 class="htpvp1">EnglishGermanItalianPortugueseFrenchSpanishChineseDutchRussian
                                    </h6>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="bd-12">
                                    <h6 class="htpvp">OPERATOR</h6>
                                    <h6 class="htpvp12">Ornament Ukraine Travel Company Ltd.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bd-12">
                                    <h6 class="htpvp">TOUR CODE
                                    </h6>
                                    <h6 class="htpvp1">#149837
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
                            Three cities, three fates, three stories, one country. Feel the Ukrainian soul and our rich culture in
                            our seven-day tour of Ukraine. Exciting landscapes and incredibly interesting excursions,
                            professional guides, modern hotels, comfortable transport, hundreds of kilometers of tour routes.
                            Kyiv, Lviv, Odesa - pearls of Ukrainian tourism. All this, and even more
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
                                    <h4 class="hd09">ARRIVAL IN KYIV& ACCOMMODATING AT THE HOTEL</h4>
                                </div>
                            </div>
                            </div>

                            <!-- next-page -->
                            <div class="container ">
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
                                                Boryspil International Airport ,
                                                Термінал D, Аеропорт Бориспіль, Київська, Ukraine
                                            </h6>

                                        </div>

                                    </div>
                                    <p class="para-677 mt-5">Arrival to Kyiv, meeting at the airport. <br>
                                        Transfer to the hotel and check-in. <br>
                                        Free time. <br>
                                        In free time, we suggest you visit the Museum of Ukrainian Nation Making. (pay additionally)
                                        The first innovative museum of Ukrainian history, where the past is combined with modern
                                        technologies. It was created a state-of-the-art museum in which the glorious chapters of our
                                        history come to life. It will take you only 1,5-2 hours to get acquainted with the centuries-old history
                                        of the Ukrainian nation. You will see 25 exhibits featuring historic scenes with absolutely realistic 3-
                                        D figures of national heroes — kings, hetmans, military leaders, scholars, artists and sportsmen.
                                        Each installation has interactive audio and video content as well as special effects, that immerse
                                        the visitor into the atmosphere of the respective era and, of course, media - guides in 8 languages.
                                        The Museum of Ukrainian Nation Making - is the museum of the future.
                                        
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
                                        <h4 class="hd09">KYIV CITY GALA SIGHTSEEING TOUR</h4>
                                    </div>
                                </div>
                                <p class="para-677">Breakfast in hotel. <br>
                                    Bus sightseeing tour “Kyiv, the City of Legends” sightseeing tour. See this powerful and glorious
                                    city in all its beauty: Podil, Pechersk, Lypky, the picturesque banks of the Dnipro River, and the
                                    Maidan Nezalezhnosti.There’s nothing like Kyiv’s panorama, with its golden-domed churches.
                                    Next, we descend to Khreshchatyk with its chestnuts and fountains, the heart of Kyiv and probably
                                    of all of Ukraine. <br>
                                    Time for lunch. <br>
                                    Walking tour to the Kyiv’s city center “Kyiv through the Ages”. As you explore Kyiv through the
                                    ages, you will see some of the most wonderful monuments and sites in the capital of Ukraine. Here
                                    is Kyiv close-up: The Zoloti Vorota or Golden Gates, St. Sofia Cathedral, the old citadel “whence
                                    the land of Rus began”, Andriyivskiy Uzviz with its beautiful Andriyivska Church. You will see for
                                    yourself why Kyiv is called both ancient and eternally young!
                                    Transfer to hotel of free time.
                                    
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
                                        <h4 class="hd09">FREE DAY: CHORNOBYL OR SHOOTING TOUR</h4>
                                    </div>
                                </div>
                                <p class="para-677">Breakfast in hotel. <br>
                                    Explore Kyiv by your own. You can spend this day discovering the attractions of Kyiv on your own:
                                    visit some of its diverse museums or art galleries, enjoy the walking in city parks or buy tickets to
                                    Kyiv Opera House. <br>
                                    Also, we can suggest you: <br>
                                    - visit Chornobyl. Chernobyl and Prypyat’ are not objects for all tourists. If you visit these places,
                                    you will never be the same again. Some time ago on the world’s map appeared Chernobyl and then
                                    Sarcophagus – the monument of the human carelessness. It is a story of the largest technological
                                    disaster, the spirit of dead city will give you a feeling of a joy life and apocalypse. The exclusion
                                    zone atmosphere gives you a clear understanding of price of the human failure.
                                    - Shooting tour. We accompany our clients to a Shooting range on the outskirts of Kiev, where you
                                    will learn about the safe and professional use of firearms. Under the supervision of well-qualified
                                    instructors you will practise shooting using legendary Soviet weapons such as the AK-47, AKSU,
                                    world-famous weapons such as the M-16 rifle and Mosina rifle, and the latest Ukrainian semiautomatic Z-10 rifle, which is an adaption of the American AR-15
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
                                        <h4 class="hd09">: KYIV – TRAIN TO LVIV                                        </h4>
                                    </div>
                                </div>
                                <p class="para-677">Breakfast in hotel. <br>
                                    Check – out from hotel. <br>
                                    Transfer to railway station. Departure to Lviv. <br>
                                    Arrival to Lviv. Check – in. <br>
                                    Free time. <br>
                                    Spend your free time in of the most interesting Lviv’s gastro tour (optional):
                                    - Coffee legends of Lviv. The history of coffee in Lviv dates back to the 17th century, and for
                                    centuries there have been traditions of brewing coffee. It seems impossible to imagine medieval
                                    streets without a fragrant aroma of coffee, because in Lviv the morning begins with "figurines" of
                                    fragrant coffee... <br>
                                    - Lviv Gastro Tour. During your gastro-travel, you will visit the residence of the Lviv Kata, or, as it is
                                    called, "Lviv municipality of execution of sentences", you will taste the famous "sausage Kseni";
                                    also - visit the most expensive restaurant in Galicia, where the zeros in the check book have their
                                    magic feature; You will be able to compete for your lunch in the famous "Jewish Knife", where you
                                    will be able to use all your skills in the hiking trips to the grocery market; You will have a real
                                    Galician hunting cuisine in the restaurant "Panskaya Charkaya", and all this way will accompany
                                    you to this Lviv coffee!
                                    

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
                                        <h4 class="hd09"> LVIV - TRAIN TO ODESA</h4>
                                    </div>
                                </div>
                                <p class="para-677">Breakfast in hotel. Check – out.
                                    Sightseeing tour by bus around Lviv, the cultural center of Western Ukraine and the modern-day
                                    capital of Halychyna. Sometimes called “Little Paris,” Lviv welcomes guests with its Medieval
                                    beauty, preserved in buildings from the 14th and 15th centuries, Gothic churches and narrow
                                    cobbled streets. Among the sites it is worth to visit the Church of Sviatoho Yura or St. George’s
                                    Church, the Lviv Polytechnical Institute, the Organ Hall, and the buildings of the one-time Halych
                                    Sejm or legislature, prospect Svobody (Liberty Ave) and Adam Mickiewycz Square.
                                    Time for lunch.
                                    Lviv City center walking tour where you will get to know the spirit of Lviv and of it's large number of
                                    wonderful buildings and monuments, the real pearl of this hospitable legendary town.
                                    Transfer to railway station.
                                    Night train to Odesa.                                    
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
                                        <h4 class="hd09">ODESA GALA SIGHTSEEING TOUR</h4>
                                    </div>
                                </div>
                                <p class="para-677">Meeting at Odesa railway station
                                    Breakfast in café
                                    Sightseeing tour by car/bus around Odesa. Odesa or “Odesa-Mama”, as it is called by the citizens
                                    themselves - the largest Ukrainian city-port on the Black Sea is simultaneously one of the most
                                    interesting and attractive places. During this trip we will visit and see the most important and
                                    beautiful places of Odesa - Philharmonic Theater (former Stock Exchange), old district
                                    Moldovanka, Arkadia city resort, French Boulevard, Pushkinskaya street, Potemkin stairand
                                    Passenger terminal in Odesa port.
                                    Check-in to hotel. Time for lunch
                                    Evening walking excursion in the city center. You will visit the historical places of the city: walk
                                    along the streets of Pushkin, Rishelievska, Lanzheronivska and, of course, along the central street
                                    of Deribasivska with unique architectural and historical monuments. The most beautiful Odesa
                                    Opera and Ballet Theater, the Vorontsov Palace, the cozy corner of old Odesa and the Shah
                                    Palace.                                    
                                </p>
                            </div>
                            <!-- page-7 -->
                            <div class="container" style="padding-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 7:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> TIME TO SAY “GOOD BYE”</h4>
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
                                                Odesa International Airport ,
                                                Одеса, Одеська, Ukraine
                                            </h4>

                                        </div>

                                    </div>
                                </div>
                                <p class="para-677">Breakfast at hotel. <br>
                                    Check- out. <br>
                                    Transfer to the Odesa International Airport and leave the city
                                </p>
                            </div>
                            </div>

                            <!-- nxt-page -->
                            <div class="container">
                                <h4 class="headerrr">What’s Included</h4>
                                <h6 class="headerr">Accommodation</h6>
                              
                                     <p class="para-67">  Hotel 3* accomodation (rooms for two persons) </p>
                              
                            </div>

                            <!-- NEXT PAGE -->
                            <div class="container" >
                                <h6 class="head-876">Guide</h6>
                                <p class="prvr">All mentioned excursions (english guideservice)
                                </p>
                                <h6 class="head-876">Meals</h6>
                                <p class="prvr"> breakfasts .</p>
                               
                                <h6 class="head-876">Transport
                                </h6>
                                <p class="prvr">Vehicle with driver during sightseeing programme
                                    Airport and railways transfers</p>
                                <h6 class="head-876">Others</h6>
                                <p class="prvr">Train tickets (coupe class);
                                    Visa support</p>
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

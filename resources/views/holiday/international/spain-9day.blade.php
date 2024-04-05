@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 6300px;padding-top:80px;">
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
                    <h6 class="spn-2">Spanish Wonder (End
                        Barcelona, 9 Days)</h6>
                        <p>
                            <span class="seven">8N/9D</span> Flexi Package
                            <span class="sp-3">Amazing Spanish Tour Inclusive Deal 8N</span>
                        </p>
                    <!-- <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Admire the terracotta wonder of the Palace of the Winds
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>SMarvel at the City Palace, Jantar Mantar and Hawa Mahal

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Fall in love with the scattered pink hues of Jaipur
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Marvel at the glorious monument of love, the Taj Mahal -->
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

                        <!-- next-page -->
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/spain.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹143,678.96
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">9 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp1">From 2 to 85 year olds    </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Madrid<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                             Barcelona
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
                                        <p class="htpvp1">Trafalgar
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#89038
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
                            <p class="para-67">Savour shared moments with locals enjoying sangria in sun-dappled courtyards, zesty paella and
                                the sounds of the Spanish guitar. On this journey, you’ll explore the wonders of Spain, from the
                                ornate walls of the Alhambra to the Gothic Cathedral and Giralda Bell Tower in Seville.                
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
                                        <h4 class="hd09"> Welcome to Madrid
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
                                                    Madrid,
                                                    Spain
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771 mt-5">The lively capital of Spain is our launchpad to a memorable encounter with one of Europe's most
                                            soulful destinations. Relax in the lush surrounds of Buen Retiro Park, shop up a storm on Gran Vía
                                            or people-watch over coffee and churros con chocolate in the Puerta del Sol. This evening, join
                                            your fellow travellers and Travel Director for an orientation drive to see some of the city's most
                                            iconic sights, followed by a Welcome Reception.
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 120px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Explore Vibrant Toledo Dive Into Culture</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">We head to Toledo, the former capital of Spain, where we join a Local Specialist for a walking tour
                                    of this city that dates back to Roman times. We'll visit a traditional factory and Dive Into Culture,
                                    witnessing the age-old inlaid-steel craft, before seeing one of El Greco's most famous paintings in
                                    the Church of Santo Tomé – 'The Burial of the Count of Orgaz'. We'll also visit the synagogue,
                                    before returning to Madrid where we’ll admire the Royal Palace and Cibeles Fountain with our Local
                                    Specialist. Spend the evening on your own, or delve into the sights and flavours of Spain's capital
                                    with an Optional Experience.                              
                                    </p>
                                </div>
                                <hr>
                                <!-- page- -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 3:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Journey to Córdoba and on to Seville Connect with Locals</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Journeying south through La Mancha, we arrive in Córdoba, once a significant Moorish capital.
                                        Join a Local Specialist to visit the Mosque of the Caliphs and learn about centuries of Moorish rule
                                        and its influence on the culture and architecture of the region. We travel to flamboyant Seville, our
                                        home for the next two nights.This evening, we Connect With Locals, joining the Morillo family for a
                                        Be My Guest experience at their olive oil farm, where you’ll learn how oil is produced from their
                                        6,000 trees and get to sample some of their produce.                                        
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Discover Seville’s Sights                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">This morning, we meet our Local Specialist for a sightseeing tour of Seville. View the symbolic
                                        Giralda Bell Tower, see the Moorish-inspired Maria Luisa Park, with its tiled fountains, pavilions and
                                        ponds, and walk through the imposing Plaza de España. Marvel at the ornate tomb of Christopher
                                        Columbus in the cathedral, then take a walk through the former Jewish Quarter.This evening,
                                        consider an Optional Experience to see, hear and feel the mysterious and ineffable charm of a
                                        traditional flamenco show.                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Onwards to Granada</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Multicultural Granada takes centre stage today, as we visit the magnificent Alhambra in the
                                        company of a Local Specialist. An exquisite example of Moorish architecture, the Alhambra
                                        complex was built towards the end of Islamic rule in Spain. Wander through the exotic water
                                        gardens of the Generalife, the royal Summer Palace, once linked to the other palaces by a covered
                                        walkway across the ravine.                     
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Admire Iconic Architecture in Guadix and on to Valencia                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">This morning, we journey via the Mora Pass to Guadix in the northern foothills of the Sierra Nevada
                                        mountains. We’ll see the whitewashed troglodyte dwellings lodged into the ochre-coloured cliffs of
                                        the surrounding area, then travel to Valencia, where we’ll see the Bullring and admire the medieval
                                        architecture of the Quart and Serranos towers. Embrace the city's spirit of innovation and stop to
                                        view the City of Arts and Sciences, a large-scale urban recreation centre for culture and science.
                                        This evening, dine at your hotel, and perhaps take to the vibrant streets of the Old Quarte.              
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Off to Coastal Peñíscola and Barcelona</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Head north, along the coast through the Levant region, and stop at Peñíscola, the 'City in the Sea'.
                                        View the ancient castle of the 'Spanish Pope', built by the Knights Templar and used in the film, 'El
                                        Cid'.Then, journey along the Costa Dorada to Barcelona with its whimsical Gaudí architecture.
                                        Admire this famous architect’s talents as we view his unfinished La Sagrada Família, which has
                                        been under construction since 1882. See the Plaça de Catalunya and pay tribute to the great
                                        Christopher Columbus, with your Local Specialist. From the hill of Montjuïc, we'll enjoy panoramic
                                        views of this enchanting city. Enjoy a free evening to spend as you wish. Ramble through El Born
                                        for delicious tapas or consider visiting a Catalan-style restaurant for a delicious dinner of local
                                        specialities.                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Uncover Gaudí's Barcelona                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Explore centuries of history, contemporary culture and exquisite art and architecture on your day at
                                        leisure. Stroll the elegant Passeig de Gràcia Avenue, ramble down the Ramblas, or join an Optional
                                        Experience to the monastery perched atop the mountain of Montserrat to see the mystical Black
                                        Madonna, the patron saint of Catalonia.This evening, we celebrate a memorable journey through
                                        Spain with our newfound friends and Travel Director at a Farewell Dinner                            
                                    </p>
                                </div>
                                <hr>

                                
                                <!-- page-5 -->
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09"> Farewell Spain
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
                                                    Barcelona,
                                                    Spain                                               
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Bid a fond adiós to Spain at the end of a memorable holiday. Find out more about your free airport
                                        transfer at trafalgar.com/freetransfers.
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">Ayre Gran Colón <br>
                                    Zenit<br>
                                    Occidental<br>
                                    Silken Puerta<br>
                                    U232
                                    </p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">An expert Travel Director and professional Drive.
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">1 Be My Guest <br>
                                        1 Dinner<br>
                                        1 Farewell Dinner<br>
                                        1 Welcome Reception<br>
                                        8 Breakfasts
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Luxury air-conditioned coach with Wi-Fi in most countries or alternative transportation (such as
                                    rail journeys)
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Explore Toledo, Madrid, Córdoba, Seville and Barcelona with a Local Specialist
                                        : Discover Valencia <br>
                                        : Visit an inlaid steel factory, the Synagogue and Santo Tomé in Toledo, Mosque of the Caliphs in
                                        Córdoba, the Cathedral in Seville, the Alhambra Palace in Granada and Montjuïc Hill in
                                        Barcelona <br>
                                        : View the Royal Palace and Cibeles Fountain in Madrid, the Cave Homes of Guadix, the
                                        Serrano and Quart Towers and the City of Arts and Sciences complex in Valencia and La
                                        Sagrada Família in Barcelona <br>
                                        Madrid: Drive through central Madrid and see some of the city's famous features during an
                                        orientation with your Travel Director. <br>
                                        Madrid: See the highlights of the city with your Local Specialist. Visit the Old Town, travelling
                                        along the elegant Paseo de la Castellana, past the Cibeles fountain, Cervantes Monument and
                                        Royal Palace. <br>
                                        Toledo: Explore this magnificent ancient city with your Local Specialist and visit the Church of
                                        Santo Tomé to see an El Greco masterpiece. <br>
                                        Córdoba: Explore the incredible Mezquita with your Local Specialist. Admire the forest of
                                        horseshoe arches and learn how this building symbolises many of Córdoba's religious changes
                                        over the centuries. <br>
                                        Seville: Guided by your Local Specialist, see the Giralda Tower, former minaret of the Great
                                        Mosque and now the cathedral's belltower. Explore the narrow streets of the Santa Cruz
                                        Quarter and emerge by the great walls of the Alcazar. <br>
                                        Granada: Visit the famous Alhambra Palace and Generalife Gardens. Explore with a Local
                                        Specialist keen to share insights into this Moorish landmark. <br>
                                        Guadix: See the cave homes that embellish the hills around Guadix. <br>
                                        Valencia: See the ultra-modern Centre of Arts and Sciences and the historic bullring of Valencia
                                        during an orientation drive with your Travel Director. <br>
                                        Peñíscola: See the castle featured in the film 'El Cid'. <br>
                                        Barcelona: With your Local Specialist, see Las Ramblas and the elegant Passeig de Gràcia to
                                        take in some of the city's finest Modernist architecture. Journey past the beautiful façades of the
                                        Eixample district to see Gaudi's extraordinary masterpiece, the mesmerising Sagrada Família.
                                        Toledo: The invincible swords of Toledo have defended cities for centuries. Visit an inlaid steel
                                        factory in Toledo to see local craftsmen forging the highest quality steel. <br>
                                        Seville: Enjoy a traditional Andalusian Be My Guest dinner and the charming company of the
                                        Morillo family. A welcome drink of sangria in their sun-dappled courtyard before learning how
                                        they produce olive oil. <br>
                                        An expert Travel Director and professional Driver <br>
                                        Cherry-picked hotels, all tried and trusted <br>
                                        Breakfast daily and up to half of your evening meals <br>
                                        All porterage and restaurant gratuities <br>
                                        All hotel tips, charges and local taxes <br>
                                        Must-see sightseeing and surprise extras <br>
                                        </p>
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

@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none; padding-top:80px; height: 5000px;">
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
                    <h6 class="spn-2">Golden Triangle with
                        Amritsar</h6>
                        <p>
                            <span class="seven">7N/8D</span> Flexi Package
                            <span class="sp-3">Amazing Amritsar Tour Inclusive Deal 7N</span>
                        </p>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Discover the best of Dehli
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Witness the glitter of Sheesh Mahal

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Visit the famous Taj Mahal
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Catch a glimpse of Jaipur's pink glow</h6>
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
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/amritsar.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-7">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹27,137.45

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">8 days</h6>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp1">From 2 to 85 year olds    </h6>
                                    </div>
                                </div> -->

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">New Delhi<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Amritsar
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
                                        <p class="htpvp1">Swastik India Journeys
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#110536
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
                            <p class="para-67">Enjoy triangle with Amritsar. Also experience a train journey from Delhi to Amritsar. This tour is a
                                guaranteed departure, so even if you are the only one booked onto this tour, you will still be
                                guaranteed to depart!                
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
                                        <h4 class="hd09">  Delhi
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
                                                    New Delhi,
                                                    India
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771">On arrival at Delhi our representative meets you at the airport and assists you till your check in
                                            process at the hotel. Stay overnight at the hotel.
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Delhi</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">In the morning go for a sightseeing tour of Delhi. Visit Raj Ghat (the cremation sites of Mahatma
                                        Gandhi), Shanti Vana (the cremation sites of Jawaharlal Nehru) and Jama Masjid. Drive past Red
                                        Fort and Chandni Chowk.
                                        In the afternoon visit Qutub Minar (built by Qutub-ud-Din Aibek in 1199), Humayun's Tomb, India
                                        Gate (War Memorial Arch) and Lakshminarayan Temple (a modern Hindu Temple). Also drive past
                                        President's House, Parliament House, Government Secretariat Buildings and Connaught Place
                                        shopping centre. Stay overnight at the hotel.                                    
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
                                            <h6 class="hd09">Delhi - Agra</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After breakfast drive to Agra, en route stopover at Sikandra for photography. On arrival a Agra
                                        check-in at hotel.
                                        Later visit the Agra Fort which has the Pearl Mosque, Diwan-e-am (the hall of public audience) and
                                        Diwan-e-Khas (the hall of private audience). Stay overnight at the hotel.                                        
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Agra - Jaipurr</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">In the morning enjoy Sunrise view of famous Taj Mahal built by Mughal Emperor Shah Jahan in
                                        memory of his wife Mumtaz Mahal. This monument is made of white marble and it took 22 years
                                        to get constructed.
                                        Take breakfast and then drive to Jaipur; en route stop at Fatehpur Sikri. Fatehpur Sikri was built
                                        between 1571 and 1585. It is one of the finest examples of Mughal architectural splendour. Though
                                        the city is in ruins, it is a must visit place for those who visit Agra. Fatehpur Sikri is a place where
                                        one should spend some time. The sunset over the ruins of this fort is a sight to be cherished.
                                        On your arrival at Jaipur check-in at hotel. Stay overnight at the hotel.
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Jaipur </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">In the morning visit the Amber Fort. Amber Fort was the capital of this state long time ago. Visit the
                                        Sheesh Mahal (Hall of victory) which is a hall glittering with mirrors. In the afternoon, go for a
                                        sightseeing tour of Jaipur.
                                        Jaipur is the capital of Rajasthan. It was painted in pink colour a century ago in honour of a visiting
                                        prince. Ever since, Jaipur has retained this pink colour. Built by Maharaja Jai Singh, a notable
                                        astronomer, this city is 260 years old. While in Jaipur, visit Maharaja's City Palace, the
                                        Observatory and Ram Niwas Gardens. Drive past the Hawa Mahal. Stay overnight at the hotel.                                                     
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Jaipur - Delhi - Amritsar (by Train)                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast drive back to Delhi. On arrival at Delhi,you'll be transferred to the train station. Upon
                                        arrival in Amritsar meet your driver at the station.After pick up you'll be transferred to your
                                        hotel.Overnight stay in Amritsar 
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Amritsar</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast full day city tour of Amritsar, visiting Golden Temple - the most important Sikh
                                        shrine which is also called Mecca for the Sikhs is a living symbol of the spiritual and historical
                                        traditions of the Sikhs, then visit Jallianwala Bagh - where, on April 13, 1919, British and Gurkha
                                        soldiers opened fire on an unarmed forbidden gathering, killing hundreds of civilians. Evening visit
                                        Indo - Pak Wagah Border to watch Flag Retreat Ceremony - Wagah, an army outpost on Indo - Pak
                                        border 30 Kms from Amritsar where the daily highlight is the evening "Beating the Retreat"
                                        ceremony. Soldiers from both countries march in perfect drill, going through the steps of bringing
                                        down their respective national flags. As the sun goes down, nationalistic fervour rises and lights
                                        are switched on marking the end of the day amidst thunderous applause. Return to hotel.
                                        Overnight stay at hotel.
                                        
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
                                            <h4 class="hd09"> Amritsar - Delhi (By train) and Delhi Airport Drop

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
                                                    Amritsar,India                                                  
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast transfer to Railway station for Delhi. Meet on arrival at Delhi Railway station and
                                        transfer to Airport for your onward destination.
                                        
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">Accommodation using 03 star hotel</p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">English Speaking guide during sightseeing at each place
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Daily Breakfast                                      
                                      
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Transportation using air conditioned vehicle with experienced Chauffeur
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Jeep ride at Amber Fort <br>
                                        Return train tickets for Delhi to Amritsar <br>
                                        All taxes, fees and handling charges <br>
                                        Fuel surcharge <br>
                                        GST (Goods and Services Tax) <br>
                                        Hotel pickup and drop-off <br>
                                        Airport & Railway station pickup and drop-off <br>
                                        This tour is a guaranteed departure, so even if you are the only one booked onto this tour, you
                                        will still be guaranteed to depart!
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

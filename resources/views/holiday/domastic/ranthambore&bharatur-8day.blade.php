@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;padding-top:80px;  height: 6000px;">
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
                    <h6 class="spn-2">RANTHAMBORE
                        NATIONAL PARK &
                        BHARATUR WITH
                        GOLDEN TRIANGLE
                        TOUR
                    </h6>
                        <p>
                            <span class="seven">7N/8D</span> Flexi Package
                            <span class="sp-3">Amazing RANTHAMBORE
                                NATIONAL PARK &
                                BHARATUR
                                Inclusive Deal 7N</span>
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
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/RANTHAMBORE.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹54,483.66
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 class="htpvp190 pt-4">DURATION
                                        </h6>
                                        <h6 class="htpvp1">8 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 1 to 90 year olds    </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">New Delh<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            New Delh
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-10" style="width: 670px;">
                                        <h6 class="htpvp">OPERATED IN
                                        </h6>
                                        <h6 class="htpvp1">EnglishGermanItalianPortugueseFrenchSpanishDutchRussian
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
                                        <h6 class="htpvp1">#169671
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <!-- second-page -->
                        <div id="iti">
                        <div class="container">
                            <h4 class="heading-30">Itinerary</h4>
                            <h3 class="head-1">Introduction</h3>
                            <p class="para-67"> Highlights <br>
                                Explore the Capital City of India, New Delhi <br>
                                Visit – One of the Seven wonders of the World – TajMahal <br>
                                Discover the Bharatpur Bird Sanctuary <br>
                                Enjoy the 02 Game Drive in Ranthambore National Park <br>
                                Discover the Tiger Safari in Ranthambore National Park <br>
                                Explore the Royal Rajput city of Jaipur and also known as Pink City
                                 
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
                                        <h4 class="hd09"> Arrival Delhi</h4>
                                </div>
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
                                                    Pick up from Delhi Airport or location in
                                                    Delhi NCR,
                                                    Delhi, India                                                    
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>000:00 - 23:55</h6>
                                            </div>
                                        </div>
                                        <p class="para-6771 mt-2">Upon arrival at Delhi airport, you will be pick up by our representative and transfer to the hotel.
                                            Rest of the day at leisure. Overnight stay at hotel.                                                                                                       
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
                                            <h4 class="hd09">Delhi Sightseeing</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Morning after breakfast proceed for full day sightseeing of Old & New Delhi - <br>
                                        Red Fort - The foundation of the Red Fort, so named after its red stone, was laid in 1618 when the
                                        Mughal Emperor, Shah Jahan, shifted to Delhi after ruling from Agra for 11 years. Rich silk from
                                        China and velvet from Turkey were used to drape the main halls of the palace when it was
                                        inaugurated in 1647.<br>
                                        Jama Mosque - Built by the Mughal Emperor Shah Jahan in 1650, more than 5,000 men worked
                                        for six years to complete this largest mosque in India.<br>
                                        India Gate - India Gate is the pride of Delhi. An imposing structure, the gate was built in memory to
                                        the of the 90,000 Indian soldiers who laid down their lives during World War I. Situated at the at the
                                        end of Rajpath,
                                        President House - The official residence of the President of India - is one of the largest buildings of
                                        its kind in the world. This structure of red and cream sandstone which was designed to be the
                                        home of the Viceroys of India took eight years - 1921-1929. (Drive Pass Only)
                                        Parliament house is a circular colonnaded building. It also houses ministerial offices, numerous
                                        committee rooms, and an excellent library as well. Conceived in the Imperial Style, the Parliament
                                        House consists of an open verandah with 144 columns. (Drive Pass Only)
                                        Humayun Tomb - This was built by the emperor's grieving widow, Haji Begum, in 1565 AD. Made
                                        with red sandstone it marks the beginning of a new ornate architectural style that reached its peak
                                        in the Taj Mahal of Agra.<br>
                                        Qutub Minar - The construction of the Qutab Minar was started by Qutab-ud-din Aibak, the first
                                        Muslim ruler of Delhi in 1200 AD. He could finish only the basement and later his successor,
                                        Iltutmish, added three more floors. The fifth and final floor was constructed by Firoz Shah Tughlak
                                        in 1368.<br>
                                        After sightseeing return back to the hotel for Overnight stay                                                            
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
                                            <h6 class="hd09">Delhi - Agra (210 km / 4-5 hrs)   </h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Morning after breakfast you will drive to Agra. Upon arrival check in hotel. Later proceed to visit - <br>
                                        Taj Mahal. The Taj Mahal, which is one man’s monumental testimony to love, has become
                                        synonymous not only with this city but with all of India. A mausoleum built by Shah Jahan for his
                                        empress Mumtaz Mahal, the Taj is the primary attraction of the city. The construction is believed to
                                        have taken 18 years (1631-1648) with over 20,000 artisans working around the clock.
                                        Agra Fort, designed and built by Akbar in 1565 A.D., built with barricaded wall of red sandstone; it
                                        houses the beautiful Pearl Mosque and numerous palaces including the Jahangir Mahal, Diwan-iKhas, Diwan-i-Am, Macchhi Bhawan, Nagina Masjid, Meena Bazar, Moti Masjid, Sheesh Mahal,
                                        Musamman Burj where from Taj Mahal is visible in all its beauty from one side of the fort. So very
                                        ironically, Emperor Shahjahan, prisoner of his son Aurangzeb in his old age was put in a cell from
                                        where he could gaze at the Taj Mahal at a distance, from his cell in the fort. <br>
                                        After sightseeing return back to the hotel for Overnight stay.                                                                  
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Agra-Fatehpur Sikri - Bharatpur (60 km /02 Hours Drive)</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Morning after breakfast check out from hotel and drive to Bharatpur. En-route you will visit Fatehpur
                                        Sikri. It was built by Emperor Akbar in 1569 and abandoned after 15 years due to the scarcity of
                                        water. See the graceful buildings including Tomb of Salim Chishti and other palaces. Upon arrival
                                        Bharatpur, check in to the hotel. <br>
                                        Later, Visit Bharatpur Bird Sanctuary famous for a variety of Bird species and Bird watching. <br>
                                        Overnight stay at hotel. 
                                        
                                    </p>
                                </div>
                                <hr>
                             
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Bharatpur – Ranthambore (225 km /04 Hours Drive)</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast, checkout from the hotel and drive to Ranthambore. Ranthambhore national park is
                                        very famous for tigers Lovers. <br>
                                        Evening visit for Safari in Ranthambore and after, safari return back to hotel for a overnight stay. <br>
                                        Overnight stay at hotel.</p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Ranthambore - Jaipur (180Km/04 Hours Drive approx) </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After an early morning breakfast, proceed to enjoy Morning safari and After Game Drive return
                                        back to hotel. <br>
                                        Later, checkout from the hotel and drive to Jaipur. Upon arrival check-in Hotel. <br>
                                        Overnight stay at hotel.                                     
                                        </p>
                                </div>
                                <hr>
                               
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Jaipur Sightseeing</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">After breakfast, you will proceed for sightseeing of Jaipur -
                                        Amber Fort, the former capital of the royal Rajputs. Few fail to be moved by the dramatic Rajput
                                        grandeur of this hilltop fortress-palace 11-km north of Jaipur. Set on the dry wrinkled Aravali Hills,
                                        and surrounded by fortified battlements, the palace straddles two sepia-hued tundra hills
                                        overlooking Maota Lake, and its sprawling crenelated walls lattice the surrounding hills. Ride up to
                                        this hilltop palace on a caparisoned, painted elephant, passing through the ancient main gate where
                                        Maharajas of Jaipur have entered for four hundred years. You will enjoy Photo Grapy in front of “Jal
                                        Mahal Palace”. <br>
                                        Afternoon visit Jaipur City: Hawa Mahal or Palace of the Winds, a five-storied structure of pink
                                        sandstone with semi-octagonal and delicately honeycombed windows overlooking the main street
                                        of the old city. It was built in 1799 so that veiled royal woman could peer down unseen by the world
                                        through its 593 stone screens. Later proceed for a tour of the City Palace & Observatory. The City
                                        Palace in the heart of the old city is a blend of Rajasthani and Mughal architecture. The center of
                                        the palace is a seven-storied building called Chandra Palace, with fine views over the gardens and
                                        the city. <br>
                                        Next top the City Palace is the Solar Observatory Jantar Mantar - an astronomical treasure house,
                                        with solar device that gives accurate predictions till date.
                                        Overnight stay at hotel.
                                                                               
                                        </p>
                                </div>
                                <hr>
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 8:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">aipur - New Delhi (260 Km /05 Hours Drive)</h4>
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
                                                    Srinagar Airport,
                                                    Drop of Location in Delhi Airport or your
                                                    location in Delhi NCR,
                                                    Delhi, India </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00 - 23:55                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Morning check out from the hotel and drive to New Delhi and after reaching New Delhi transferred
                                        to the airport to board a flight for onward Journey or drop to your location in Delhi/ NCR and our
                                        services terminate with sweet memories.                                                               
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">03 Star Hotel with Breakfast <br>Check – In/Check-out <br>
                                    In India Standard Check-In is at 13:00 Hrs and Checkout is at 10:00 Hrs
                                    </p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">English Speaking Guide will be there to feel like a local
                                    </p>
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Daily Breakfast at Hotels     </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">Transport
                                    We will provide neat and clean A/c vehicle for our valuable guest with Experienced Chauffeur.
                                    Vehicle Type <br>
                                    1-3 Person A/c Mid size car Like Swift Desire/ Similar <br>
                                    3-4 Person A/c MUV car Like Innova/ Similar <br>
                                    5-10 Person A/c Tempo Traveler or Similar <br>
                                    10 Person – Above A/c Minivan to Coaches
                                    
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">Assistance during arrival and departure <br>
                                        Rickshaw Ride in Bharatpur National Park (Bird Sanctuary)<br>
                                        02 Game Drive in Ranthambore National Park<br>
                                        All the Departure are 100% Guaranteed Even, if there is a Single Traveler<br>
                                        24 X 07 Assistance with our Professional team<br>
                                        One mineral water per person per day<br>
                                        Highway Toll Tax, Airport Parking, State Tax, vehicle Parking charges<br>
                                        All currently applicable taxes including GST
                                        </p>
                                </div>
                              

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
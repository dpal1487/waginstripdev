
@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none; padding-top:80px; height: 6300px;">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1 class="heading-1">
                                <span class="spn-1">Full Itinerary & Trip Details</span> </h1>
                        </div>
                        <div class="col-sm-5">
                            
                             <img src="{{ URL::to('/assets/images/images/85555.png') }}" alt="" style="width: 260px;">
                        <img src="{{ URL::to('/assets/images/package-image/IATA.png') }}" alt="" style="width: 70px; margin-left:100px">
                           
                        </div>
                    </div>
                    <h6 class="spn-2">Golden Triangle Tour
                        with Varanasi</h6>
                        <p>
                            <span class="seven">7N/8D</span> Flexi Package
                            <span class="sp-3">Amazing Varanasi Tour Inclusive Deal 7N</span>
                        </p>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Admire the terracotta wonder of the Palace of the Winds
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>SMarvel at the City Palace, Jantar Mantar and Hawa Mahal

                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Fall in love with the scattered pink hues of Jaipur
                    </h6>
                    <h6 class="ico-3"> <span><i class="fa fa-check" aria-hidden="true"></i></span>Marvel at the glorious monument of love, the Taj Mahal
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

                        <!-- next-page -->
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/varansi.jpg') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹49,682.41

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">8 days</h6>
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
                                        <h6 class="htpvp1">New Delhi<i class="fa fa-arrow-right" aria-hidden="true"></i>
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
                                        <h6 class="htpvp1">#99720
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
                            <p class="para-67">Specially designed for first time travelers to India, classic introduction to the rich culture, tradition,
                                and history, Golden Triangle and Ganges travel package is a must for all those who have been
                                traveling to India for the first time; history buffs and spiritually inclined people. As the name says, in
                                this tour you will be not only visiting the golden triangle attractions (Delhi, Agra and Jaipur) and
                                river, Varanasi and From architectural marvels to natural beauty to rejuvenating location to colorful
                                rural life, the golden triangle tour encompasses it all. Such is this tours beauty that Photographers
                                and culture lovers won't be disappointed at all.Classical India tour takes you through the hubs of
                                Indian culture and heritage. Covering some of the most famous and exotic destinations of the
                                country, the trip is designed to give you a complete traveling experience in terms of shopping,
                                dining, sightseeing and entertainment while giving you an in depth tour of Indian history and
                                culture.The tour combines the spiritual attractions of the famous Hindu pilgrimage city of Varanasi.                                
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
                                        <h4 class="hd09"> Arrive Delhi
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
                                                    We will arrange your pick up either from Indra Gandhi
                                                    International Airport or your Pre booked accommodation.,
                                                    Indira Gandhi International Airport, New Delhi, New Delhi,
                                                    Delhi, India
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>06:45</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771">Meeting and assistance on arrival at the airport, our representative will meet to welcome and
                                            escort you by a private chauffeur driven car and transfer to hotel .
                                            Delhi, capital city of the Federal Republic of India. It is one of India's fastest growing cities. It has
                                            sprawled over the West Bank of the river Yamuna, straddling the river. Delhi blends an historic past
                                            and a vibrant present. Delhi has some of the finest museums in the country. New Delhi was
                                            proclaimed the capital of India by the British architect Sir Edwin Lutyens (1869-1944) & is tree-lined
                                            & spacious. Legend has it that the Pandavas, the august heroes of the epic Mahabharata,
                                            originally founded Delhi, then called Indraprastha, around 1200 B.C. Present day Delhi is built
                                            around the ruins of seven ancient cities.
                                            Overnight at hotel.
                                            Highlight for Today
                                            Warm welcome at Delhi international airport by WTX team.
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 250px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">At New Delhi</h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">Morning after breakfast, proceed to Old Delhi & experience rickshaw ride at Chandni Chowk,
                                        explore the narrow alleys & colorful markets & local shoppers. Visit the nearby "Jama mosque,"
                                        which is one of the largest ancient mosque complex of Asia. Then drive past Red Fort built in the
                                        year 1648 by Shah Jehan. Visit Raj Ghat, memorial to the Father of the Nation, Mahatma Gandhi.
                                        After Lunch at a Local restaurant. Later, you will be taken to New Delhi which includes Humayun's
                                        Tomb, memorial of Mughal Emperor Humayun, built in the year 1562. Further we drive past India
                                        Gate, memorial built in the year 1931 to commemorate the Indian soldiers who died in the World
                                        War I & the Afghan Wars. President's House, the official residence of the President of India, built in
                                        the year 1931, Qutub Minar. After complete your sight seeing, transfer to Hotel. Overnight stay at
                                        hotel. <br>
                                        Highlight for Today <br>
                                        1.Guided Panoramic Tour of Old and New Delhi. <br>
                                        2. Enjoy riksha ride (Tri Cycle tour) at hustle bustle Market of Old Delhi. <br>
                                        3. Enjoy photography in front of India Gate. <br>                                    
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
                                            <h6 class="hd09">Delhi - Jaipur</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After breakast depart by surface to Jaipur, on arrival check in at Hotel. Jaipur Widely known as the
                                        ‘Pink City. This city is color washed pink to welcome Prince Albert, the consort of Queen Victoria
                                        of England who visited India in 1883 A.D. The city was founded in 1727 A.D by one of the greatest
                                        ruler Jai Singh II. Jaipur is surrounded by hills on three sides, crowned by formidable forts and
                                        majestic palaces, mansions and gardens. Jaipur is the only city in the world, which is sub-divided
                                        in to nine rectangular sectors symbolizing nine divisions of PUSHKAR universe. Jaipur is the first
                                        planned city designed in accordance with ‘Shilpa Shastra’- epochal treatise of Hindu architecture.
                                        Overnight at hotel.
                                    </p>
                                </div>


                                <!-- page-4 -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">In Jaipur</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Today after breakfast explore the Pink City with an excursion to Amber Fort, situated just outside
                                        the city, enjoy the experience of ride on elephant back to and from the top of the hill on which the fort is situated. Afternoon sightseeing tour of City Palace in the heart of Jaipur is known for its blend
                                        of Rajasthani and Mughal architecture. Not far away is the Central Museum. Jantar Mantar is the
                                        largest of the five observatories built by Sawai Jai Singh. The Hawa Mahal or the Palace of Winds
                                        was constructed for the royal ladies to watch the royal processions without being seen, all
                                        monuments are located in the vicinity of City Palace Complex of Jaipur. Afternoon is kept free to
                                        visit the famous Markets of Textiles, Gems, Carpets, and handicrafts. Jaipur is an ideal place for
                                        buying souvenirs. <br>
                                        Highligh for Today <br>
                                        1. Guided tour of Jaipur also knows as Pink city of Rajasthan. <br>
                                        2. enjoy elephant ride/ Jeep ride to climb Amer Fort in Jaipur. <br>
                                        3. Enjoy Photography in front of "Jal Mahal" (Water Palace). <br>
                                        4. Turban Tying and Palmist activites in Jaipur. <br>
                                        5. Visit to colorful Market's of Jaipur.
                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Jaipur - Fathpur Sikri - Agra </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Morning after breakfast drive towards Agra. Enroute visit Fatehpur Sikri, (37 kms from Agra), Old
                                        deserted town of Mughal Dynasty –Fatehpur Sikri built in red sandstone in honor of Saint Salim
                                        Chisti who foretold the birth of 3 sons to Emperor Akbar, is an example of robust stability combined
                                        with originality.
                                        Later proceed towards Agra. Agra - beautifully situated on the banks of river Yamuna. It achieved
                                        prominence as the capital of the Mughal Emperors from the year 1526 to 1628, remains major
                                        tourist destination because of its many splendid Mughal-era monuments, most notably the Taj
                                        Mahal, Agra Fort & Fatehpur Sikri, all three are UNESCO World Heritage sites. Upon arrival check
                                        in to hotel & relax for a while. <br>
                                        Overnight stay in Agra. <br>
                                        Highlight for today <br>
                                        1. Guided tour of Fatehpur sikri. <br>
                                        2. Visit world tallest door also called "Buland Darwaja" at Fatehpur sikri.                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 6:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Agra - Varanasi </h4>
                                        </div>
                                    </div>
                                    <p class="para-677">Morning after breakfast drive towards Agra. Enroute visit Fatehpur Sikri, (37 kms from Agra), Old
                                        deserted town of Mughal Dynasty –Fatehpur Sikri built in red sandstone in honor of Saint Salim
                                        Chisti who foretold the birth of 3 sons to Emperor Akbar, is an example of robust stability combined
                                        with originality.
                                        Later proceed towards Agra. Agra - beautifully situated on the banks of river Yamuna. It achieved
                                        prominence as the capital of the Mughal Emperors from the year 1526 to 1628, remains major
                                        tourist destination because of its many splendid Mughal-era monuments, most notably the Taj
                                        Mahal, Agra Fort & Fatehpur Sikri, all three are UNESCO World Heritage sites. Upon arrival check
                                        in to hotel & relax for a while. <br>
                                        Overnight stay in Agra. <br>
                                        Highlight for today <br>
                                        1. Guided tour of Fatehpur sikri. <br>
                                        2. Visit world tallest door also called "Buland Darwaja" at Fatehpur sikri.                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 7:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Arrive Varanasi</h4>
                                        </div>
                                    </div>
                                    <p class="para-677">On arrival at Railway station meet & transfer to hotel.
                                        Morning arrive at Varanasi. On arrival meet & transfer to Hotel and complete the check-in
                                        formalities. Get freshened up. Thereafter, embark on a short trip to Sarnath, a popular Buddhist
                                        religious site. One of the four most important sacred sites of Buddhism, it has the deer park where
                                        Gautama Buddha first taught the 'Dharma' after attaining enlightenment. Back to Varanasi in the
                                        afternoon for city tour including Alamgir Mosque, also known as Beni Madhav Ka Darera,
                                        Dasaswamedh Ghat, popular for evening Ganga Aarti, and the Bharat Mata Temple- positioned in
                                        the Mahatma Gandhi Kashi Vidyapith campus. The evening is scheduled for the mesmerizing
                                        ceremony of Ganga Aarti, a lifetime opportunity. <br>
                                        Overnight at hotel. <br>
                                        Hight light for Today <br>
                                        1. Guided tour of Holy city Varanasi <br>
                                        2. Enjoy boat ride at river Ganges <br>
                                        3. Aarti ceremony on Ganges river
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
                                            <h4 class="hd09"> Varanasi - Delhi - Depart
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
                                                    We will arrange your drop at Varanasi International/
                                                    domestic Airport at Varanasi to board on flight for onward
                                                    destination.,
                                                    Lal Bahadur Shastri International Airport Varanasi (VNS),
                                                    Babatpur, Pindra, Uttar Pradesh, India                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">Morning after breakfast, check-out from hotel & transfer to Varanasi airport to board flight for Delhi.
                                        On arrival board on flight for onward destination.
                                        
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">6 night accommodation on mention hotel or similar & 01 Overnight in Train. (4 star deluxe hotel and
                                    Heritage Hotel combinations) . Below mentioned hotel's are conveniently located at the heart of
                                    city. These hotel's are specially designed to offer an authentic and contemporary experience to all
                                    guests. These hotel's are enriched by the personalized services and modern amenities to meet the
                                    elegance and comfort of a star hotel. <br>
                                    Delhi: Hotel Justa Punchsheel <br>
                                    Agra: Hotel Howard Park Plaza, The Fern <br>
                                    Jaipur: Hotel Park Ocean <br>
                                    Varanasi: Hotel Amaya</p>

                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                   <p class="prvr">Services of Licensed Guide which are approved by the ministry of Tourism for your sightseeing
                                    trip. Guides that we use are guest friendly, professional, Cognizant and Hygenic. Having the
                                    eloquence of myriad of languages like Dutch, English, French, German, Italian etc.
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
                                    clean and with working AC.
                                    </p>
                                    <h6 class="head-876">Others</h6>
                                    <p class="prvr">1/ Warm Welcome at the airport in Traditional Indian Style. <br>
                                        2/ All Arrival & Transfer by our company representative. <br>
                                        3/ Rickshaw Ride in Old Delhi to explore Hustle Bustle Market of Chandni Chowk. <br>
                                        4/ Battery Van ride in Agra to reach near Taj Mahal. <br>
                                        5/ Elephant Ride in Jaipur to climb Amer fort. <br>
                                        6/ Boat ride in river Ganges. <br>
                                        7/ Exclusive shopping tours in local markets to get a feel of real Indian art and culture. <br>
                                        8/ All applicable Taxes.
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

@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->
<x-userpages.holidays-banner />

<div class="hdypckghdng1">
    <h3>Heading of Package with Place</h3>
    <h5>5D/4N</h5>
    <div class="hdlleftbnrsldr1">
        <div id="holidaysPackageSlider1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/holiday/goa1.jpg" style="width:800px; height: 430px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/holiday/goa2.jpg" style="width:800px; height: 430px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/holiday/goa3.jpg" style="width:800px; height: 430px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/holiday/goa4.jpg" style="width:800px; height: 430px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/holiday/5.jpg" style="width:800px; height: 430px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#holidaysPackageSlider1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#holidaysPackageSlider1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="hpdetailsbookingprice1">
        <h4>Tours of Goa</h4>
        <label for="city of departure">
            City of Departure
        </label>
        <select name="" id="">
            <option value="Bangalore">Bangalore</option>
            <option value="Bombay (Mumbai)">Bombay (Mumbai)</option>
            <option value="Kolkata">Kolkata</option>
            <option selected="selected" value="New Delhi">New Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Chennai">Chennai</option>
            <option value="Pune">Pune</option>
            <option value="Agartala">Agartala</option>
            <option value="Agatti Island">Agatti Island</option>
            <option value="Agra">Agra</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Aizawl">Aizawl</option>
            <option value="Allahabad">Allahabad</option>
            <option value="Amritsar">Amritsar</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Bagdogra">Bagdogra</option>
            <option value="Bahawalpur">Bahawalpur</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Belgaum">Belgaum</option>
            <option value="Bellary">Bellary</option>
            <option value="Bhavnagar">Bhavnagar</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Bhubaneswar">Bhubaneswar</option>
            <option value="Bhuj">Bhuj</option>
            <option value="Biratnagar">Biratnagar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chennai">Chennai</option>
            <option value="Cochin">Cochin</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="Dehra Dun">Dehra Dun</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Dharamshala">Dharamshala</option>
            <option value="Dibrugarh">Dibrugarh</option>
            <option value="Dimapur">Dimapur</option>
            <option value="Diu">Diu</option>
            <option value="Guwahati">Guwahati</option>
            <option value="Gaya">Gaya</option>
            <option value="Goa">Goa</option>
            <option value="Tezpur">Tezpur</option>
            <option value="Gorakhpur">Gorakhpur</option>
            <option value="Gwalior">Gwalior</option>
            <option value="Hubli">Hubli</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Imphal">Imphal</option>
            <option value="Indore">Indore</option>
            <option value="Jabalpur">Jabalpur</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Jaisalmer">Jaisalmer</option>
            <option value="Jammu">Jammu</option>
            <option value="Jamnagar">Jamnagar</option>
            <option value="Jamshedpur">Jamshedpur</option>
            <option value="Jodhpur">Jodhpur</option>
            <option value="Jorhat">Jorhat</option>
            <option value="Kailashahar">Kailashahar</option>
            <option value="Kandla">Kandla</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Khajuraho">Khajuraho</option>
            <option value="Kochi">Kochi</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Kozhikode">Kozhikode</option>
            <option value="Kulu">Kulu</option>
            <option value="Leh">Leh</option>
            <option value="Lilabari">Lilabari</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Madurai">Madurai</option>
            <option value="Mangalore">Mangalore</option>
            <option value="Bombay (Mumbai)">Bombay (Mumbai)</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nanded">Nanded</option>
            <option value="Nasik">Nasik</option>
            <option value="Pantnagar">Pantnagar</option>
            <option value="Pathankot">Pathankot</option>
            <option value="Patna">Patna</option>
            <option value="Porbandar">Porbandar</option>
            <option value="Port Blair">Port Blair</option>
            <option value="Pune">Pune</option>
            <option value="Raipur">Raipur</option>
            <option value="Rajahmundry">Rajahmundry</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Ranchi">Ranchi</option>
            <option value="Siliguri">Siliguri</option>
            <option value="Shillong">Shillong</option>
            <option value="Silchar">Silchar</option>
            <option value="Simla">Simla</option>
            <option value="Srinagar">Srinagar</option>
            <option value="Surat">Surat</option>
            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
            <option value="Tiruchirappalli">Tiruchirappalli</option>
            <option value="Tirupati">Tirupati</option>
            <option value="Tuticorin">Tuticorin</option>
            <option value="Udaipur">Udaipur</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Varanasi">Varanasi</option>
            <option value="Vijayawada">Vijayawada</option>
            <option value="Vishakhapatnam">Vishakhapatnam</option>
            <option value="Vizag">Vizag</option>
        </select>
        <label for="date of departure">Date of Departure</label><br>
        <input type="date" id="birthday" name="birthday">

        <h6 class="m-0 text-right text-muted font-weight-bold mt-3"><del>₹150,000</del></h6>
        <h2 class="m-0 text-right font-weight-bold text-danger">₹130,000</h2>
        <p class="m-0 text-right small text-muted">Per Persons</p>
        <p class="m-0 text-right small text-muted">T&C* Applay</p>
        <p class="m-0 small text-muted">Flexible with dates?</p>
        <p class="m-0  small text-muted">Pay ₹8,638 lesser for this package on 6 May</p>
        <button>Book Now</button>
    </div>
</div>

<div class="container5678">
    <ul class="hdlpdtbookinmenu">
        <li class="tablinks" onclick="packageDetails(event, 'summary')" id="defaultOpen">SUMMARY</li>
        <li class="tablinks" onclick="packageDetails(event, 'intinerary')">itinerary</li>
        <li class="tablinks" onclick="packageDetails(event, 'flight')">Flight details</li>
        <li class="tablinks" onclick="packageDetails(event, 'hotel')" >hotel details</li>
        <li class="tablinks" onclick="packageDetails(event, 'addtitional')">additional</li>
        <li class="tablinks" onclick="packageDetails(event, 'policies')">POLICIES</li>
    </ul>
    <!-- start SUMMARY -->
    <div id="summary" class="tabcontent p-0">
        <h4>SUMMARY</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi
            lorem egestas vitae scel erisque enim ligula venenatis dolor.<span id="dots">...</span><span id="more">
                Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut
                aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis
                imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue
                eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
        <button onclick="myFunction()" id="myBtn">More +</button>
        <div class="summaryflight">
            <div class="dayLeft1">
                <h4>Day 1</h4>
            </div>
            <div class="dayRight1">
                <h4 class="font-weight-bold">Day 1 - Arrival in Goa</h4>

                <div class="flightDecrb1">
                    <p class="text-secondary text-center">Flight from New Delhi to Goa 02h 25m</p>
                    <ul>
                        <li>
                            <h6 class="text-secondary">SpiceJet</h6>
                            <P>S-526</P>
                            <span class="m-0 small">Economy</span>
                        </li>
                        <li>
                            <h6 class="mt-2 text-secondary">NEW DELHI</h6>
                            <P>12:30 PM</P>
                        </li>
                        <li><img src="assets/images/holiday/airplane-mode.png" alt=""></li>
                        <li>
                            <h6 class="mt-2 text-secondary">GOA</h6>
                            <p>15:30 PM</p>
                        </li>
                    </ul>
                    <h6 class="text-center m-0 pt-2 font-weight-bold text-muted">Baggage: <span>Cabin: 7KG (1 piece
                            only)</span> <span>Check-in : 15KG (1 piece only)</span></h6>
                </div>

                <div class="cabdetailssummery1">
                    <p class="text-secondary text-center">Airport to hotel in Goa 1 hrs</p>
                    <ul>
                        <li>
                            <h6 class="">Swift, Etios <span></span></h6>
                            <P class="small m-0">Private Transfer/Sedan - AC</P>
                            <h5 class="small">One-way arrival transfer from Goa International Airport to the hotel in
                                any
                                location in North and South Goa in a private car. The pick-up timings will
                                be as per the landing time of your booked flight and shall be communicated
                                to you by the local vendor.</h5>
                            <h5 class="m-0 pt-3">Facilities</h5>
                            <ul class="text-muted">
                                <li>3 Seater</li>
                                <li>2 Luggage</li>
                                <li>AC</li>
                                <li>First Aid</li>
                            </ul>
                        </li>
                        <li><img src="assets/images/holiday/taxi.png" alt=""></li>
                    </ul>
                </div>

                <div class="hotelsummerydetails1">
                    <div class="fttHoteldecs">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/holiday/hotel1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/holiday/hotel2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/holiday/hotel3.jpg" alt="First slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rtthotelsimgas">
                        <h6>Hotel & Resort Name and Details <span></span></h6>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <P class="small font-weight-bold m-0">Location</P>
                        <p>Date of Check-In</p>
                        <p>26 Feb 2022 | 05 Mar 2022</p>
                        <h5 class="font-weight-bold">Includes: <span class="text-muted small">Breakfast</span></h5>
                        <h5 class="font-weight-bold">Room Type: <span class="text-muted small">Deluxe AC Room With
                                Balcony</span></h5>
                        <p class="mt-2 small">T&C Apply*</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondDayDetails1">
            <div class="lftDetailsDay2">
                <h4>Day 2</h4>
            </div>
            <div class="rgtDetailsDay2">
                <h1 class="text-center">Acittivites </h1>
            </div>
        </div>

        <div class="secondDayDetails1">
            <div class="lftDetailsDay2">
                <h4>Day 3</h4>
            </div>
            <div class="rgtDetailsDay2">
                <h1 class="text-center">Acittivites </h1>
            </div>
        </div>

        <div class="secondDayDetails1">
            <div class="lftDetailsDay2">
                <h4>Day 4</h4>
            </div>
            <div class="rgtDetailsDay2">
                <h1 class="text-center">Acittivites </h1>
            </div>
        </div>

        <div class="fiveDayDetails1">
            <div class="lftDetailsDay2">
                <h4>Day 5</h4>
            </div>
            <div class="rgtDetailsDay2">
                <div class="retrunCabDetails1">
                    <p class="text-secondary text-center">Hotel to Airport in Goa 1 hrs</p>
                    <div class="lftcabdests2">
                        <img src="assets/images/holiday/taxi.png" alt="">
                    </div>
                    <div class="rghtsededtas1">
                        <h6 class="font-weight-bold m-0">Swift, Etios <span></span></h6>
                        <P class="small m-0 pb-2">Private Transfer/Sedan - AC</P>
                        <h5 class="small">One-way arrival transfer from Goa International Airport to the hotel in
                            any
                            location in North and South Goa in a private car. The pick-up timings will
                            be as per the landing time of your booked flight and shall be communicated
                            to you by the local vendor.</h5>
                        <ul class="text-muted">
                            <li>3 Seater</li>
                            <li>2 Luggage</li>
                            <li>AC</li>
                            <li>First Aid</li>
                        </ul>
                    </div>
                </div>
                <div class="flightDecrb1">
                    <p class="text-secondary text-center">Flight from New Delhi to Goa 02h 25m</p>
                    <ul>
                        <li>
                            <h6 class="text-secondary">SpiceJet</h6>
                            <P>S-526</P>
                            <span class="m-0 small">Economy</span>
                        </li>
                        <li>
                            <h6 class="mt-2 text-secondary">GOA</h6>
                            <P>12:30 PM</P>
                        </li>
                        <li><img src="assets/images/holiday/airplane-mode.png" alt=""></li>
                        <li>
                            <h6 class="mt-2 text-secondary">NEW DELHI</h6>
                            <p>15:30 PM</p>
                        </li>
                    </ul>
                    <h6 class="text-center m-0 pt-2 font-weight-bold text-muted">Baggage: <span>Cabin: 7KG (1 piece
                            only)</span> <span>Check-in : 15KG (1 piece only)</span></h6>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Itinerary -->
    <div id="intinerary" class="tabcontent p-0">
        <h4 class="text-uppercase">Detailed Day Wise Itinerary</h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Timeline -->
                    <ul class="timeline">
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Day 1 Activities</h2><span class="small text-gray"><i
                                    class="fa fa-clock-o mr-1"></i>21 March, 2022</span>
                            <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.
                                Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Day 2 Activities</h2><span class="small text-gray"><i
                                    class="fa fa-clock-o mr-1"></i>21 March, 2022</span>
                            <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Quisque scelerisque diam non nisi semper.</p>
                            <p class="text-small mt-2 font-weight-light">Libero expedita explicabo eius fugiat quia
                                aspernatur autem laudantium error architecto recusandae natus sapiente sit nam eaque,
                                consectetur porro molestiae ipsam! Deleniti.</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Day 3 Activities</h2><span class="small text-gray"><i
                                    class="fa fa-clock-o mr-1"></i>21 March, 2022</span>
                            <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.
                                Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Day 4 Activities</h2><span class="small text-gray"><i
                                    class="fa fa-clock-o mr-1"></i>21 March, 2022</span>
                            <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.
                                Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            <p class="text-small mt-2 font-weight-light">Voluptatibus temporibus esse illum eum
                                aspernatur, fugiat suscipit natus! Eum corporis illum nihil officiis tempore. Excepturi
                                illo natus libero sit doloremque, laborum molestias rerum pariatur quam ipsam
                                necessitatibus incidunt, explicabo.</p>
                        </li>
                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">Day 5 Activities</h2><span class="small text-gray"><i
                                    class="fa fa-clock-o mr-1"></i>21 March, 2022</span>
                            <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.
                                Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            <p class="text-small mt-2 font-weight-light">Voluptatibus temporibus esse illum eum
                                aspernatur, fugiat suscipit natus! Eum corporis illum nihil officiis tempore. Excepturi
                                illo natus libero sit doloremque, laborum molestias rerum pariatur quam ipsam
                                necessitatibus incidunt, explicabo.</p>
                        </li>
                    </ul><!-- End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Flight details -->
    <div id="flight" class="tabcontent p-0">
        <h3>Flight details</h3>
        <div class="flightDeclarations1">
            <div class="leftDecl5">
                <h4>FLIGHT</h4>
            </div>
            <div class="rightDec5">
                <h4>Day 1 - Arrival in Goa</h4>
                <div class="flightDecrb1">
                    <p class="text-secondary text-center">Flight from New Delhi to Goa 02h 25m</p>
                    <ul>
                        <li>
                            <h6 class="text-secondary">SpiceJet</h6>
                            <P>S-526</P>
                            <span class="m-0 small">Economy</span>
                        </li>
                        <li>
                            <h6 class="mt-2 text-secondary">NEW DELHI</h6>
                            <P>12:30 PM</P>
                        </li>
                        <li><img src="assets/images/holiday/airplane-mode.png" alt=""></li>
                        <li>
                            <h6 class="mt-2 text-secondary">GOA</h6>
                            <p>15:30 PM</p>
                        </li>
                    </ul>
                    <h6 class="text-center m-0 pt-2 font-weight-bold text-muted">Baggage: <span>Cabin: 7KG (1 piece
                            only)</span> <span>Check-in : 15KG (1 piece only)</span></h6>
                </div>
                <div class="flightDecrb1">
                    <p class="text-secondary text-center">Flight from Goa to New Delhi 02h 25m</p>
                    <ul>
                        <li>
                            <h6 class="text-secondary">SpiceJet</h6>
                            <P>S-526</P>
                            <span class="m-0 small">Economy</span>
                        </li>
                        <li>
                            <h6 class="mt-2 text-secondary">GOA</h6>
                            <P>12:30 PM</P>
                        </li>
                        <li><img src="assets/images/holiday/airplane-mode.png" alt=""></li>
                        <li>
                            <h6 class="mt-2 text-secondary">NEW DELHI</h6>
                            <p>15:30 PM</p>
                        </li>
                    </ul>
                    <h6 class="text-center m-0 pt-2 font-weight-bold text-muted">Baggage: <span>Cabin: 7KG (1 piece
                            only)</span> <span>Check-in : 15KG (1 piece only)</span></h6>
                </div>
            </div>

        </div>
    </div>
    <!-- hotel details -->
    <div id="hotel" class="tabcontent p-0">
        <h3>hotel details</h3>
        <div class="hotelDetailsPackgs1">
            
        </div>
    </div>
    <!-- additional -->
    <div id="addtitional" class="tabcontent p-0">
        <h3>additional</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>

    <!-- POLICIES -->
    <div id="policies" class="tabcontent p-0">
        <h4></h4>
        <h5 class="text-center">CANCELLATION & DATE CHANGE</h5>

        <hr>
        <h6 class="">How much will it cost to cancel or change the start date after making a booking?</h6>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">CANCELLATION</h5>
                        <ul>
                            <li>Cancellation Charge <strong>(Per Person)</strong></li>
                            <li>These are non-refundable amounts as per the current components attached.
                                In the case of component change/modifications, the policy will change accordingly.</li>
                            <li>Please check the exact cancellation and date change policy on the review page before
                                proceeding further.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">DATE CHANGE</h5>
                        <ul>
                            <li>Non Refundable</li>
                            <li>Date Change is not allowed</li>
                            <li>Date Change fees don't include any fare change in the components on the new date. Fare
                                difference as applicable will be charged separately.</li>
                            <li>Date Change will depend on the availability of the components on the new requested date.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="font-weight-bold">Exclusions</h6>
        <ul>
            <li> Expenses of personal nature</li>
            <li> Mentioned cost is not valid between 6 pm and 8 am</li>
            <li> Anything not mentioned under inclusions</li>
            <li>Package price does not include Gala dinner charges applicable on Christmas and New Year's Eve</li>
        </ul>
        <h6 class="font-weight-bold">Terms and Conditions</h6>
        <ul>
            <li>Standard check-in time at the hotel is normally 2:00 pm and check-out is 11:00 am. An early check-in, or
                a late check-out is solely based on the discretion of the hotel.</li>
            <li>A maximum of 3 adults are allowed in one room. The third occupant shall be provided a mattress/rollaway
                bed.</li>
            <li>The itinerary is fixed and cannot be modified. Transportation shall be provided as per the itinerary and
                will not be at disposal. For any paid activity which is non-operational due to any unforeseen reason, we
                will process refund & same should reach the guest within 30 days of processing the refund. </li>
            <li>Also, for any activity which is complimentary and not charged to MTT & guest, no refund will be
                processed.</li>
            <li>AC will not be functional anywhere in cool or hilly areas.</li>
            <li>Entrance fee, parking and guide charges are not included in the packages.</li>
            <li>If your flights involve a combination of different airlines, you may have to collect your luggage on
                arrival at the connecting hub and register it again while checking in for the onward journey to your
                destination.</li>
            <li>Booking rates are subject to change without prior notice.</li>
            <li>Airline seats and hotel rooms are subject to availability at the time of booking.</li>
            <li>Pricing of the booking is based on the age of the passengers. Please make sure you enter the correct age
                of passengers at the time of booking. Passengers furnishing incorrect age details may incur penalty at
                the time of travelling.</li>
            <li>In case of unavailability in the listed hotels, arrangement for an alternate accommodation will be made
                in a hotel of similar standard.</li>
            <li>In case your package needs to be cancelled due to any natural calamity, weather conditions etc.
                XYZ shall strive to give you the maximum possible refund subject to the agreement made with our
                trade partners/vendors.</li>
            <li>MTT reserves the right to modify the itinerary at any point, due to reasons including but not limited
                to: Force Majeure events, strikes, fairs, festivals, weather conditions, traffic problems, overbooking
                of hotels / flights, cancellation / re-routing of flights, closure of /entry restrictions at a place of
                visit, etc. While we will do our best to make suitable alternate arrangements, we would not be held
                liable for any refunds/compensation claims arising out of this.</li>
            <li>Certain hotels may ask for a security deposit during check-in, which is refundable at check-out subject
                to the hotel policy.</li>
            <li>The booking price does not include: Expenses of personal nature, such as laundry, telephone calls, room
                service, alcoholic beverages, mini bar charges, tips, portage, camera fees etc.</li>
            <li>Any other items not mentioned under Inclusions are not included in the cost of the booking.</li>
            <li>The package price does not include mandatory gala dinner charges levied by the hotels especially during
                New Year and Christmas or any special occasions. XYZ shall try to communicate the same while
                booking the package. However XYZ may not have this information readily available all the time.
            </li>
            <li>Cost of deviation and cost of extension of the validity on your ticket is not included.</li>
            <li>For queries regarding cancellations and refunds, please refer to our Cancellation Policy.</li>
            <li>Disputes, if any, shall be subject to the exclusive jurisdiction of the courts in New Delhi.</li>
            <li>Dudhsagar Waterfalls is closed in the monsoon (June - September).</li>
            <li>Activities related to water sports are subject to weather and wind conditions on the ground.</li>
            <li>The cost of mentioned tours and transfer is not valid between 6 pm to 8 am.</li>
        </ul>
    </div>

</div>


<script>
    function packageDetails(evt, cityName, border) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "More +";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Less -";
            moreText.style.display = "inline";
        }
    }

</script>


<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection

@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="container mb-1" style="margin-top:120px;">
    <h3 class="m-0 font-weight-bold">Maldives with Biyadhoo Island Resort </h3>
    <h6 class="m-0 font-weight-bold text-secondary">3N/4D <span>(Maldives)</span></h6>
    <h5 class="m-0 pt-3 font-weight-bold">Review and Travellers</h5>
</div>

<div class="container mt-1 mb-3">
    <div class="row p-2">
        <!-- Right Slider  -->
        <div class="col-sm-8 p-2 mx-auto">
            <div class="card">
                <div id="holidayImages_view1" class="carousel  slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/holiday/ml1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/ml2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/ml3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/ml4.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/ml5.jpg" alt="First slide">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-n2">
                <div class="col-sm-12">
                    <div class="offersButtons_12 mt-n5 mr-4">
                        <span href="#holidayImages_view1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                                aria-hidden="true"></i></span>
                        <span href="#holidayImages_view1" role="button" data-slide="next"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="row p-2 mt-2">
                <div class="col-sm-12 p-2">
                    <ul class="nav  holidayViews_sec">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase text-dark" data-toggle="tab" href="#overview"> <i
                                    class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; OVERVIEW</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-dark" data-toggle="tab" href="#flight"><i
                                    class="fa fa-plane" aria-hidden="true"></i>&nbsp; Flight</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-dark" data-toggle="tab" href="#hotel"><i
                                    class="fa fa-bed" aria-hidden="true"></i>&nbsp; hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-dark" data-toggle="tab" href="#itinerary"><i
                                    class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Itinerary
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  text-dark" data-toggle="tab" href="#policies"><i
                                    class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                &nbsp; POLICIES </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content bg-transparent">
                        <div id="overview" class="container tab-pane p-0 active"><br>
                            <h5 class="m-0 pt-3">Overview</h5>
                            <p class="m-0 pt-3 small">Spread like gems in the deep blue waters of the Indian Ocean,
                                Maldives is one of the most
                                sought after holiday destinations in the world. Keeping the interest alive,
                                xyz.com brings this 3 nights and 4 days holiday package that comprise of all
                                the
                                good things of this exotic Island nation. Right from sun bathing to water sports, from
                                spa therapies and aroma treatments, treat yourself with a refreshing weekend holiday
                                with Maldives with Biyadhoo Island Resort.
                            </p>

                            <h5 class="m-0 pt-4"> Highlights</h5>
                            <div class="row p-2 mt-0">
                                <div class="col-sm-12 p-2">
                                    <div class="card p-3">
                                        <ul class="small highlightsImgslist1 pl-2">
                                            <li>
                                                3 Nights 4 Days stay in standard room.
                                            </li>
                                            <li>
                                                Daily Breakfast, Lunch and Dinner.(Full Board).
                                            </li>
                                            <li>
                                                Return Speed boat transfer.
                                            </li>
                                            <li>
                                                Green Taxes.
                                            </li>
                                            <li>
                                                Air tickets. (India-Male-India).( EX - Delhi).
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h5 class="m-0 pt-4">Flight Information</h5>
                            <div class="row p-2 mt-n2">
                                <div class="col-sm-12 p-2">
                                    <div class="card border-0 p-1">
                                        <div class="row">
                                            <div class="col-sm-6 p-2">
                                                <div class="card p-2">
                                                    <div class="media">
                                                        <img class="align-self-center mr-3"
                                                            src="assets/images/flight/6E.png"
                                                            alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="m-0 pt-1"> Delhi - Maldives , 16 April-2022 </h6>
                                                            <p class="m-0 small text-secondary">Flight No - G8 1531 </p>
                                                            <p class="m-0 text-primary ">Delhi 9:30 &nbsp; <i
                                                                    class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;
                                                                13:45 Male</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6 p-2">
                                                <div class="card p-2">
                                                    <div class="media">
                                                        <img class="align-self-center mr-3"
                                                            src="assets/images/flight/6E.png"
                                                            alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="m-0 pt-1"> Delhi - Maldives , 16 April-2022 </h6>
                                                            <p class="m-0 small text-secondary">Flight No - G8 1531 </p>
                                                            <p class="m-0 text-primary ">Male 9:30 &nbsp; <i
                                                                    class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;
                                                                13:45 Delhi</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 class="m-0 pt-4">Hotel Information</h5>
                            <div class="row p-2 mt-0">
                                <div class="col-sm-12 p-2">
                                    <div class="card p-3">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="card mt-4">
                                                    <img src="assets/images/hotel/h1.jpg" alt="">
                                                </div>
                                                <div class="card mt-3">
                                                    <img src="assets/images/hotel/h2.jpg" alt="">
                                                </div>
                                                <div class="card mt-3">
                                                    <img src="assets/images/hotel/h3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="card border-0 p-3">
                                                    <h5 class="font-weight-bold m-0">Biyadhoo Island or similar... </h5>
                                                    <p class="fa fa-star m-0 pt-2 starratinghoel"> 4.5 (1400)</p>
                                                    <h6 class="m-0 small text-secondary pt-2"><i
                                                            class="fa fa-map-marker" aria-hidden="true"></i> 5B/13,
                                                        Tilak Nagar, Delhi-110018 (India)</h6>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Property Location </h6>
                                                    <p class="m-0 small pt-1">With a stay at Biyadhoo Island Resort in
                                                        Biyadhoo Island, you'll
                                                        be on the beach, just steps from Biyadoo Beach and a 3-minute
                                                        drive from Kandooma Beach. This beach resort is within close
                                                        proximity of Maafushi Reef and Maafushi Harbor.</p>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Rooms</h6>
                                                    <p class="m-0 small pt-1">Make yourself at home in one of the 96
                                                        air-conditioned rooms
                                                        featuring minibars. Rooms have private balconies or patios.
                                                        Private bathrooms with showers feature complimentary toiletries
                                                        and hair dryers. Conveniences include desks and coffee/tea
                                                        makers, and housekeeping is provided daily.</p>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Amenities </h6>
                                                    <p class="m-0 small pt-1">Relax at the full-service spa, where you
                                                        can enjoy massages, body
                                                        treatments, and facials. This resort also features complimentary
                                                        wireless Internet access, concierge services, and
                                                        babysitting/childcare (surcharge).</p>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Dining </h6>
                                                    <p class="m-0 small pt-1">Enjoy a satisfying meal at Palm Restaurant
                                                        serving guests of
                                                        Biyadhoo Island Resort. A complimentary buffet breakfast is
                                                        served daily from 7 AM to 10 AM.</p>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Business, Other
                                                        Amenities </h6>
                                                    <p class="m-0 small pt-1">Featured amenities include a 24-hour front
                                                        desk, multilingual
                                                        staff, and luggage storage. A roundtrip airport shuttle is
                                                        provided for a surcharge (available 24 hours).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 class="m-0 pt-4">Day Wise Itineary</h5>
                            <div class="row p-2 mt-0">
                                <div class="col-sm-12 p-2">
                                    <div class="card p-3">
                                        <div class="row">
                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                <div class="row h-50">
                                                    <div class="col">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                                <h5 class="m-2">
                                                    <span class="badge badge-pill bg-primary border">&nbsp;</span>
                                                </h5>
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="float-right text-muted">Mon, Jan 9th 2019 7:00
                                                            AM</div>
                                                        <h6 class="card-title font-weight-bold">DAY 1</h6>
                                                        <p class="card-text text-dark">
                                                            <i class="fa fa-taxi" aria-hidden="true"></i>&nbsp;
                                                            Arrival at Velana International Airport Male, Maldives. Meet
                                                            and Greet and transfer to Resort to speed boat. <span
                                                                class="font-weight-bold"> (01:00 PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;
                                                            Check in Hotel at Maldives Resort.<span
                                                                class="font-weight-bold"> (03:00 PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-camera" aria-hidden="true"></i>&nbsp;
                                                            The day is free to admire the scenic beauty of massive
                                                            lagoons sprinkled all around. You are free for leisure
                                                            activities- take a dip in the blue sea waters, explore the
                                                            nearby attractions, walk on the sandy beaches and so
                                                            on.<span class="font-weight-bold"> (04:00 PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Dinner at Resort.<span class="font-weight-bold"> (07:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;
                                                            Overnight stay at Resort.<span class="font-weight-bold">
                                                                (10:00 PM)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                                <h5 class="m-2">
                                                    <span class="badge badge-pill bg-primary border">&nbsp;</span>
                                                </h5>
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="float-right text-muted">Mon, Jan 9th 2019 7:00
                                                            AM</div>
                                                        <h6 class="card-title font-weight-bold">DAY 2</h6>
                                                        <p class="card-text text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Morning breakfast at resort.
                                                            .<span class="font-weight-bold"> (09:00
                                                                AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-camera" aria-hidden="true"></i>&nbsp;
                                                            The day is free to admire the scenic beauty of massive
                                                            lagoons sprinkled all around. You are free for leisure
                                                            activities- take a dip in the blue sea waters, explore the
                                                            nearby attractions, walk on the sandy beaches and so
                                                            on.<span class="font-weight-bold"> (10:00 AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Lunch at Resort.
                                                            .<span class="font-weight-bold"> (01:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Dining at Resort.
                                                            .<span class="font-weight-bold"> (07:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;
                                                            Overnight stay at Resort.<span class="font-weight-bold">
                                                                (10:00 PM)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                                <h5 class="m-2">
                                                    <span class="badge badge-pill bg-primary border">&nbsp;</span>
                                                </h5>
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="float-right text-muted">Mon, Jan 9th 2019 7:00
                                                            AM</div>
                                                        <h6 class="card-title font-weight-bold">DAY 3</h6>
                                                        <p class="card-text text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Morning breakfast at resort.
                                                            .<span class="font-weight-bold"> (09:00
                                                                AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-camera" aria-hidden="true"></i>&nbsp;
                                                            The day is free to admire the scenic beauty of massive
                                                            lagoons sprinkled all around. You are free for leisure
                                                            activities- take a dip in the blue sea waters, explore the
                                                            nearby attractions, walk on the sandy beaches and so
                                                            on.<span class="font-weight-bold"> (10:00 AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Lunch at Resort.
                                                            .<span class="font-weight-bold"> (01:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Dining at Resort.
                                                            .<span class="font-weight-bold"> (07:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;
                                                            Overnight stay at Resort.<span class="font-weight-bold">
                                                                (10:00 PM)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                <div class="row h-50">
                                                    <div class="col border-right ">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                                <h5 class="m-2">
                                                    <span class="badge badge-pill bg-primary border">&nbsp;</span>
                                                </h5>
                                                <div class="row h-50">
                                                    <div class="col">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="float-right text-muted">Mon, Jan 9th 2019 7:00
                                                            AM</div>
                                                        <h6 class="card-title font-weight-bold">DAY 4</h6>
                                                        <p class="card-text text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Morning breakfast at resort.
                                                            .<span class="font-weight-bold"> (09:00
                                                                AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-taxi" aria-hidden="true"></i>&nbsp;
                                                            Check out from Resort. Transfer to Male International
                                                            airport to Catch your return flight, India. <span
                                                                class="font-weight-bold"> (01:00 PM)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 class="m-0 pt-4">Policies Information</h5>
                            <div class="row p-2 mt-0">
                                <div class="col-sm-12 p-2">
                                    <div class="card p-3">
                                        <h6 class="m-0 font-weight-bold">Notes:</h6>
                                        <ol class="mt-3 small">
                                            <li class="mt-1">*For Non-refundable & time-limit itineraries 100% payment
                                                is required to
                                                confirm a booking. </li>
                                            <li class="mt-1">All payments towards the tour cost must be made by the
                                                client to the
                                                company in accordance with the procedure and time frame mentioned herein
                                                below </li>
                                            <li class="mt-1">*For Air tickets being issued / blocked on time limit: Full
                                                INR
                                                component will be collected before issuance, else price will be subject
                                                to change. </li>
                                            <li class="mt-1">*Initial Booking deposit will be collected as per the
                                                amount mentioned
                                                or the Package Price whichever is lower </li>
                                            <li class="mt-1">Full payment must be made in accordance with the procedure
                                                stated above.
                                                In case of non-compliance thereto by the client, the company reserves a
                                                right to cancel the tour/booking of the client with subsequent loss of
                                                deposit and apply and recover the cancellation charges as mentioned
                                                herein</li>
                                            <li class="mt-1">The above is a general cancellation policy and the same is
                                                subject to
                                                change depending on the travel date, the destination, the package and
                                                the services booked and paid for.</li>
                                            <li class="mt-1">
                                                For Dynamic properties and Reconfirmed Bookings, the above Cancellation
                                                may not be applicable and could vary
                                            </li>

                                        </ol>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="flight" class="container tab-pane fade"><br>
                            <h5 class="m-0 pt-4">Flight Information</h5>
                            <div class="row p-2 mt-n2">
                                <div class="col-sm-12 p-2">
                                    <div class="card bg-transparent border-0 p-1">
                                        <div class="row">
                                            <div class="col-sm-6 p-2">
                                                <div class="card p-2">
                                                    <div class="media">
                                                        <img class="align-self-center mr-3"
                                                            src="assets/images/flight/6E.png"
                                                            alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="m-0 pt-1"> Delhi - Maldives , 16 April-2022 </h6>
                                                            <p class="m-0 small text-secondary">Flight No - G8 1531 </p>
                                                            <p class="m-0 text-primary ">Delhi 9:30 &nbsp; <i
                                                                    class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;
                                                                13:45 Male</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6 p-2">
                                                <div class="card p-2">
                                                    <div class="media">
                                                        <img class="align-self-center mr-3"
                                                            src="assets/images/flight/6E.png"
                                                            alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="m-0 pt-1"> Delhi - Maldives , 16 April-2022 </h6>
                                                            <p class="m-0 small text-secondary">Flight No - G8 1531 </p>
                                                            <p class="m-0 text-primary ">Male 9:30 &nbsp; <i
                                                                    class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;
                                                                13:45 Delhi</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="hotel" class="container tab-pane fade"><br>
                            <h5 class="m-0 pt-4">Hotel Information</h5>
                            <div class="row p-2 mt-0">
                                <div class="col-sm-12 p-2">
                                    <div class="card p-3">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="card mt-4">
                                                    <img src="assets/images/hotel/h1.jpg" alt="">
                                                </div>
                                                <div class="card mt-3">
                                                    <img src="assets/images/hotel/h2.jpg" alt="">
                                                </div>
                                                <div class="card mt-3">
                                                    <img src="assets/images/hotel/h3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="card border-0 p-3">
                                                    <h5 class="font-weight-bold m-0">Biyadhoo Island or similar... </h5>
                                                    <p class="fa fa-star m-0 pt-2 starratinghoel"> 4.5 (1400)</p>
                                                    <h6 class="m-0 small text-secondary pt-2"><i
                                                            class="fa fa-map-marker" aria-hidden="true"></i> 5B/13,
                                                        Tilak Nagar, Delhi-110018 (India)</h6>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Property Location </h6>
                                                    <p class="m-0 small pt-1">With a stay at Biyadhoo Island Resort in
                                                        Biyadhoo Island, you'll
                                                        be on the beach, just steps from Biyadoo Beach and a 3-minute
                                                        drive from Kandooma Beach. This beach resort is within close
                                                        proximity of Maafushi Reef and Maafushi Harbor.</p>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Rooms</h6>
                                                    <p class="m-0 small pt-1">Make yourself at home in one of the 96
                                                        air-conditioned rooms
                                                        featuring minibars. Rooms have private balconies or patios.
                                                        Private bathrooms with showers feature complimentary toiletries
                                                        and hair dryers. Conveniences include desks and coffee/tea
                                                        makers, and housekeeping is provided daily.</p>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Amenities </h6>
                                                    <p class="m-0 small pt-1">Relax at the full-service spa, where you
                                                        can enjoy massages, body
                                                        treatments, and facials. This resort also features complimentary
                                                        wireless Internet access, concierge services, and
                                                        babysitting/childcare (surcharge).</p>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Dining </h6>
                                                    <p class="m-0 small pt-1">Enjoy a satisfying meal at Palm Restaurant
                                                        serving guests of
                                                        Biyadhoo Island Resort. A complimentary buffet breakfast is
                                                        served daily from 7 AM to 10 AM.</p>
                                                    <h6 class="m-0 small font-weight-bold pt-2">Business, Other
                                                        Amenities </h6>
                                                    <p class="m-0 small pt-1">Featured amenities include a 24-hour front
                                                        desk, multilingual
                                                        staff, and luggage storage. A roundtrip airport shuttle is
                                                        provided for a surcharge (available 24 hours).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="itinerary" class="container tab-pane fade"><br>
                            <h5 class="m-0 pt-4">Day Wise Itineary</h5>
                            <div class="row p-2 mt-0">
                                <div class="col-sm-12 p-2">
                                    <div class="card p-3">
                                        <div class="row">
                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                <div class="row h-50">
                                                    <div class="col">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                                <h5 class="m-2">
                                                    <span class="badge badge-pill bg-primary border">&nbsp;</span>
                                                </h5>
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="float-right text-muted">Mon, Jan 9th 2019 7:00
                                                            AM</div>
                                                        <h6 class="card-title font-weight-bold">DAY 1</h6>
                                                        <p class="card-text text-dark">
                                                            <i class="fa fa-taxi" aria-hidden="true"></i>&nbsp;
                                                            Arrival at Velana International Airport Male, Maldives. Meet
                                                            and Greet and transfer to Resort to speed boat. <span
                                                                class="font-weight-bold"> (01:00 PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;
                                                            Check in Hotel at Maldives Resort.<span
                                                                class="font-weight-bold"> (03:00 PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-camera" aria-hidden="true"></i>&nbsp;
                                                            The day is free to admire the scenic beauty of massive
                                                            lagoons sprinkled all around. You are free for leisure
                                                            activities- take a dip in the blue sea waters, explore the
                                                            nearby attractions, walk on the sandy beaches and so
                                                            on.<span class="font-weight-bold"> (04:00 PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Dinner at Resort.<span class="font-weight-bold"> (07:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;
                                                            Overnight stay at Resort.<span class="font-weight-bold">
                                                                (10:00 PM)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                                <h5 class="m-2">
                                                    <span class="badge badge-pill bg-primary border">&nbsp;</span>
                                                </h5>
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="float-right text-muted">Mon, Jan 9th 2019 7:00
                                                            AM</div>
                                                        <h6 class="card-title font-weight-bold">DAY 2</h6>
                                                        <p class="card-text text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Morning breakfast at resort.
                                                            .<span class="font-weight-bold"> (09:00
                                                                AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-camera" aria-hidden="true"></i>&nbsp;
                                                            The day is free to admire the scenic beauty of massive
                                                            lagoons sprinkled all around. You are free for leisure
                                                            activities- take a dip in the blue sea waters, explore the
                                                            nearby attractions, walk on the sandy beaches and so
                                                            on.<span class="font-weight-bold"> (10:00 AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Lunch at Resort.
                                                            .<span class="font-weight-bold"> (01:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Dining at Resort.
                                                            .<span class="font-weight-bold"> (07:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;
                                                            Overnight stay at Resort.<span class="font-weight-bold">
                                                                (10:00 PM)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                                <h5 class="m-2">
                                                    <span class="badge badge-pill bg-primary border">&nbsp;</span>
                                                </h5>
                                                <div class="row h-50">
                                                    <div class="col border-right">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="float-right text-muted">Mon, Jan 9th 2019 7:00
                                                            AM</div>
                                                        <h6 class="card-title font-weight-bold">DAY 3</h6>
                                                        <p class="card-text text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Morning breakfast at resort.
                                                            .<span class="font-weight-bold"> (09:00
                                                                AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-camera" aria-hidden="true"></i>&nbsp;
                                                            The day is free to admire the scenic beauty of massive
                                                            lagoons sprinkled all around. You are free for leisure
                                                            activities- take a dip in the blue sea waters, explore the
                                                            nearby attractions, walk on the sandy beaches and so
                                                            on.<span class="font-weight-bold"> (10:00 AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Lunch at Resort.
                                                            .<span class="font-weight-bold"> (01:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Dining at Resort.
                                                            .<span class="font-weight-bold"> (07:00
                                                                PM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;
                                                            Overnight stay at Resort.<span class="font-weight-bold">
                                                                (10:00 PM)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto text-center flex-column d-none d-sm-flex">
                                                <div class="row h-50">
                                                    <div class="col border-right ">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                                <h5 class="m-2">
                                                    <span class="badge badge-pill bg-primary border">&nbsp;</span>
                                                </h5>
                                                <div class="row h-50">
                                                    <div class="col">&nbsp;</div>
                                                    <div class="col">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col py-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="float-right text-muted">Mon, Jan 9th 2019 7:00
                                                            AM</div>
                                                        <h6 class="card-title font-weight-bold">DAY 4</h6>
                                                        <p class="card-text text-dark">
                                                            <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                                                            Morning breakfast at resort.
                                                            .<span class="font-weight-bold"> (09:00
                                                                AM)</span>
                                                        </p>
                                                        <p class="card-text mt-n4 text-dark">
                                                            <i class="fa fa-taxi" aria-hidden="true"></i>&nbsp;
                                                            Check out from Resort. Transfer to Male International
                                                            airport to Catch your return flight, India. <span
                                                                class="font-weight-bold"> (01:00 PM)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="policies" class="container tab-pane fade"><br>
                            <h5 class="m-0 pt-4">Policies Information</h5>
                            <div class="row p-2 mt-n2">
                                <div class="col-sm-12 p-2">
                                    <div class="card p-3">
                                        <h6 class="font-weight-bold">
                                            21 days prior to departure: Zero Cancellation/ Free rescheduling valid for
                                            bookings done till 20th Feb.
                                        </h6>
                                        <h6 class="m-0 pt-2 font-weight-bold small">For customization packages without
                                            Flight:
                                        </h6>
                                        <div class="row mt-2">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header font-weight-bold small text-center"
                                                        style="height:40px; line-height:35px;">
                                                        When a Cancellation is made
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item small text-center">Between 10 or more
                                                            days from
                                                            the
                                                            date of departure</li>
                                                        <li class="list-group-item small text-center">Between 09 days or
                                                            below from
                                                            the
                                                            date of departure</li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header font-weight-bold small text-center"
                                                        style="height:40px; line-height:35px;">
                                                        Charges
                                                    </div>
                                                    <ul class="list-group list-group-flush ">
                                                        <li class="list-group-item small text-center">Service Charges +
                                                            Actual Visa
                                                            Charges (if processed) Applicable</li>
                                                        <li class="list-group-item small text-center">100% of the
                                                            holiday cost</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="m-0 pt-5 font-weight-bold small">For Customization packages Inclusive
                                            of flights:
                                        </h6>
                                        <div class="row mt-2">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header font-weight-bold small text-center"
                                                        style="height:40px; line-height:35px;">
                                                        When a Cancellation is made
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item small text-center">
                                                            Prior to 46 days from the date of departure
                                                        </li>
                                                        <li class="list-group-item small text-center">
                                                            Between 45 - 31 days from the date of departure
                                                        </li>
                                                        <li class="list-group-item small text-center">
                                                            Between 30 or below from the date of departure
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header font-weight-bold small text-center"
                                                        style="height:40px; line-height:35px;">
                                                        Charges
                                                    </div>
                                                    <ul class="list-group list-group-flush ">
                                                        <li class="list-group-item small text-center">
                                                            Non-Refundable Booking Deposit
                                                        </li>
                                                        <li class="list-group-item small text-center">
                                                            75% of the holiday cost
                                                        </li>
                                                        <li class="list-group-item small text-center">
                                                            100% of the holiday cost
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="m-0 small pt-3 text-justify">The services to be provided are booked
                                            several months in advance,
                                            cancellation of such services earmarked for a particular departure results
                                            in the Company losing money depending upon the time of cancellation to the
                                            Supplier. Therefore any cancellation of tour / services booked will attract
                                            cancellation charges as specified by the company. If you book a third party
                                            product or service, the Terms and Conditions and cancellation policy of such
                                            third party would be applicable in addition to the Company's Terms and
                                            Conditions. Any cancellation of tour / services has to be in writing clearly
                                            stating the reasons for cancellation. You expressly agree to the foregoing
                                            terms</p>
                                        <p class="m-0 small pt-3 text-justify">
                                            The company reserves the right to cancel any Tour prior to the departure,
                                            without assigning any reason. In such an event, all monies paid by you will
                                            be fully refunded forthwith in Indian Rupees currency only, but no
                                            compensation will be payable. The company cannot assume responsibility for
                                            any additional cost or any fees relating to the issuance and/or cancellation
                                            of air tickets or other arrangements not done through the company.
                                        </p>
                                        <h6 class="m-0 pt-3 font-weight-bold">Notes:</h6>
                                        <ol class="mt-3 small">
                                            <li class="mt-1">*For Non-refundable & time-limit itineraries 100% payment
                                                is required to
                                                confirm a booking. </li>
                                            <li class="mt-1">All payments towards the tour cost must be made by the
                                                client to the
                                                company in accordance with the procedure and time frame mentioned herein
                                                below </li>
                                            <li class="mt-1">*For Air tickets being issued / blocked on time limit: Full
                                                INR
                                                component will be collected before issuance, else price will be subject
                                                to change. </li>
                                            <li class="mt-1">*Initial Booking deposit will be collected as per the
                                                amount mentioned
                                                or the Package Price whichever is lower </li>
                                            <li class="mt-1">Full payment must be made in accordance with the procedure
                                                stated above.
                                                In case of non-compliance thereto by the client, the company reserves a
                                                right to cancel the tour/booking of the client with subsequent loss of
                                                deposit and apply and recover the cancellation charges as mentioned
                                                herein</li>
                                            <li class="mt-1">The above is a general cancellation policy and the same is
                                                subject to
                                                change depending on the travel date, the destination, the package and
                                                the services booked and paid for.</li>
                                            <li class="mt-1">
                                                For Dynamic properties and Reconfirmed Bookings, the above Cancellation
                                                may not be applicable and could vary
                                            </li>

                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Right Slider end -->

        <!-- Left Slider -->
        <div class="col-sm-4 p-2 mx-auto">
            <div class="card shdosmshm">
                <div class="card-header p-2" style="background-color:#eee;">
                    <p class="m-0 small text-muted text-right">Starting price per adult*</p>
                    <h3 class="m-0 text-dark font-weight-bold text-right">₹55,999</h3>
                    <p class="m-0 small text-muted text-right">Excluding applicable taxes*</p>
                </div>
                <!-- <h5 class="card-header">Featured</h5> -->
                <div class="card-body">
                    <p class="m-0 text-muted">Package Name</p>
                    <input class="col-sm-12 packkagesingsearchtype" type="text"
                        placeholder="Package Name or Destination Name">
                    <p class="m-0 text-muted pt-2">City of Departure</p>
                    <select class="col-sm-12 packkagesingsearchtype" name="" id="">
                        <option value="Bangalore">Bangalore</option>
                        <option value="Bombay (Mumbai)">Bombay (Mumbai)</option>
                        <option value="Kolkata">Kolkata</option>
                        <option selected="selected" value="New Delhi">New Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Pune">Pune</option>
                        <option value="">--------------------</option>
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
                    <p class="m-0 text-muted pt-2">Date of Departure</p>
                    <input class="col-sm-12 packkagesingsearchtype" data-date-format="dd/mm/yyyy" type="date">

                    <a href="{{url('holiday-customer-details')}}" class="btn btn-primary callusFree mt-4 mb-4 col-sm-12 font-weight-bold ">PROCEED TO
                        BOOK
                        ONLINE</a>
                </div>
            </div>

            <!-- <div class="card shdosmshm">
                <div class="row p-2">
                    <div class="col-sm-12">
                        <p class="m-0 small text-muted text-right">Starting price per adult*</p>
                        <h3 class="m-0 text-dark font-weight-bold text-right">₹55,999</h3>
                        <p class="m-0 small text-muted text-right">Excluding applicable taxes*</p>
                        <hr>
                        <p class="m-0 text-muted">Package Name</p>
                        <input class="col-sm-12 packkagesingsearchtype" type="text"
                            placeholder="Package Name or Destination Name">
                        <p class="m-0 text-muted pt-2">City of Departure</p>
                        <select class="col-sm-12 packkagesingsearchtype" name="" id="">
                            <option value="Bangalore">Bangalore</option>
                            <option value="Bombay (Mumbai)">Bombay (Mumbai)</option>
                            <option value="Kolkata">Kolkata</option>
                            <option selected="selected" value="New Delhi">New Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Pune">Pune</option>
                            <option value="">--------------------</option>
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
                        <p class="m-0 text-muted pt-2">Date of Departure</p>
                        <input class="col-sm-12 packkagesingsearchtype" data-date-format="dd/mm/yyyy" type="date">

                        <a href="#" class="btn btn-primary callusFree mt-4 mb-4 col-sm-12 font-weight-bold ">PROCEED TO
                            BOOK
                            ONLINE</a>
                    </div>
                </div>
            </div> -->
            <div class="card shdosmshm p-2 mt-4">
                <h5 class="font-weight-bold">Coupons & Offers </h5>
                <input class="packkagesingsearchtype p-2" type="text" placeholder="Enter Coupon Code">
                <a href="#" class="btn btn-primary callusFree mt-3 mb-3 font-weight-bold">Apply</a>
            </div>

            <div class="card shdosmshm mt-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/flights/holi1.jpg" style="height:150px;"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/flights/holi2.jpg" style="height:150px;"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/flights/holi3.jpg" style="height:150px;"
                                alt="First slide">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shdosmshm p-2 mt-4">
                <h6 class="m-0 text-center pt-2 pb-3">Get our assistance for easy booking</h6>
                <a href="#" class="callusFree btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i> Want us to
                    call you?</a>
                <h6 class="m-0 text-center pt-3">Call us at</h6>
                <h4 class="m-0 text-center pt-2 pb-3 font-weight-bold text-secondary">+91 7669988012</h4>
            </div>

            <div class="card border-0 mt-4">
                <div class="card shadow-lg border-0 p-2" style="background-color:orange;">
                    <h4 class="text-center m-0 text-white"><em>Book Your</em></h3>
                        <h3 class="text-center m-0 font-weight-bold text-white">Summer Holiday</h1>
                </div>
                <div class="card shadow-lg border-0 p-2 mt-2" style="background-color:yellow; border-radius:5px;">
                    <h4 class="text-center m-0">& Get Your</h3>
                        <h3 class="text-center m-0 font-weight-bold">Flight Tickets Free!</h1>
                </div>

            </div>
            <div class="card border-0 bg-info p-2 mt-2">
                <h4 class="text-center text-white font-weight-bold m-0 pt-4">Holidays Starting @ ₹ 18,300</h4>
                <h5 class="text-center m-0 pt-2">with free flight Tickets!</h5>
                <a href="#" class="text-center mt-3" style="background-color:white; padding:10px 20px;">Book Now!</a>
                <p class="m-0 small text-right pt-2">T&C's Applay*</p>
            </div>
            <div class="card shdosmshm mt-4">
                <a href="#">
                    <img class="w-100" src="assets/images/holiday/holiday1.jpg" alt="">
                </a>
            </div>
        </div>

        <!-- Left end Slider -->
    </div>
</div>


<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection

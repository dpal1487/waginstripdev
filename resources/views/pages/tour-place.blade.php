@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="trip-place-banner">
    <div class="sec13">
        <div class="trip-left-13">
            <h1>Bali</h1>
            <p>An exotic tropical destination that flaunts scenic beaches and mountains, Bali is
                deep-rooted in culture and tradition, which adds to the charm of this scenic island.</p>
        </div>
        <div class="trip-right-13">
            <div class="tprslder12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner rounded95">
                        <div class="carousel-item  active">
                            <img class="d-block  w-100" src="assets/images/holiday/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/4.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/holiday/5.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="trp-header-1">
    <div>
        <h5>Best Time To Visit</h5>
    </div>
    <div>
        <h5>Things to Do</h5>
    </div>
    <ul>
        <li>Book Trip</li>
        <li>Travel</li>
        <li>Stay</li>
        <li>Activities</li>
        <li>Packages</li>
    </ul>
</div>

<div class="tour-place-section-1">
    <h3>Best Time To Visit Bali</h3>
    <p>All year round destination</p>
    <div class="tptplacleft-1">
        <div class="tour-tab-left">
            <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'firstTab1')">
                <h2 class="font-weight-bold">APR-SEP</h2>
                <p class="text-success">&#9679; Peak Season</p>
            </button>
            <button class="tablinks" onclick="openCity(event, 'secondTab2')">
                <h2 class="font-weight-bold">OCT-DEC</h2>
                <p class="text-warning">&#9679; Moderate Season</p>
            </button>
            <button class="tablinks" onclick="openCity(event, 'thirdTab3')">
                <h2 class="font-weight-bold">JAN-MAR</h2>
                <p class="text-danger">&#9679; Off-season</p>
            </button>
        </div>
        <!-- Tab content -->
        <div id="firstTab1" class="tabcontent">
            <ul>
                <li><strong>What To Expect:</strong> Pleasant temperatures throughout the day, with slight humidity.
                </li>
                <li><strong>Things You'll Love:</strong> Sightseeing and water sports.</li>
            </ul>
        </div>

        <div id="secondTab2" class="tabcontent">
            <ul>
                <li><strong>What To Expect:</strong> Pleasant weather with average rainfalls.</li>
                <li><strong>Things You'll Love:</strong> The beautiful landscapes.</li>
            </ul>
        </div>

        <div id="thirdTab3" class="tabcontent">
            <ul>
                <li><strong>What To Expect:</strong> Frequent heavy rainfalls with high humidity levels.</li>
                <li><strong>Things You'll Love: </strong> The peaceful spas and natural surroundings.</li>
            </ul>
        </div>
    </div>
    <div class="tptplacright-1">
        <div>
            <h2 class="font-weight-bold">FESTIVALS AND EVENTS</h2>
        </div>
        <div class="btmrth-1">
            <ul>
                <li><strong>Nyepi Day</strong> March</li>
                <li><strong>Bali Arts Festival</strong> June-July</li>
                <li><strong>Nusa Dua Festival</strong> June-July</li>
            </ul>
        </div>
    </div>
</div>

<div class="tour-card-section-2">
    <h1 class="font-weight-bold">Things To See & Do</h1>
    <h4>Most Loved Places</h4>
    <div class="tour-card-12">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Visit Tegallalang Rice Terraces</h3>
        <p>Tiered Paddy Fields</p>
        <h6>The Tegallalang rice terraces are tiered paddy fields along the hills of Ubud that offer
            insights into the cultivation of rice by local villagers.</h6>
        <div class="lftbtn12">
            <button>2 Hours</button>
            <p>Suggested Time</p>
        </div>
        <div class="rgtbtn12">
           <a href="{{ url('/trip-place') }}">
           <button>Explore</button>
           </a>
        </div>
    </div>
    <div class="tour-card-13">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Climbing Mount Batur</h3>
        <p>Popular Sunrise Trek</p>
        <h6>Located in the Bangli region, Mount Batur stands at a height of 1,717 metres and is a popular trekking route
            during sunrise, owing to the spectacular views.</h6>
        <div class="lftbtn12">
            <button>2 Hours</button>
            <p>Suggested Time</p>
        </div>
        <div class="rgtbtn12">
            <button>Explore</button>
        </div>
    </div>
    <div class="tour-card-14">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Sunset at Tanah Lot Temple</h3>
        <p>Amazing Sunset Spot</p>
        <h6>Situated on a rocky outcrop amidst the sea, the 15th century Tanah Lot Temple is built in traditional
            Balinese architecture and offers fabulous sunset views.</h6>
        <div class="lftbtn12">
            <button>2 Hours</button>
            <p>Suggested Time</p>
        </div>
        <div class="rgtbtn12">
            <button>Explore</button>
        </div>
    </div>
</div>

<div class="tour-card-section-3">
    <div class="tour-card-15">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Climbing Mount Batur</h3>
        <p>Popular Sunrise Trek</p>
        <h6>Located in the Bangli region, Mount Batur stands at a height of 1,717 metres and is a popular trekking route
            during sunrise, owing to the spectacular views.</h6>
        <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    </div>
    <div class="tour-card-16">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Climbing Mount Batur</h3>
        <p>Popular Sunrise Trek</p>
        <h6>Located in the Bangli region, Mount Batur stands at a height of 1,717 metres and is a popular trekking route
            during sunrise, owing to the spectacular views.</h6>
        <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    </div>
    <div class="tour-card-17">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Climbing Mount Batur</h3>
        <p>Popular Sunrise Trek</p>
        <h6>Located in the Bangli region, Mount Batur stands at a height of 1,717 metres and is a popular trekking route
            during sunrise, owing to the spectacular views.</h6>
        <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    </div>
</div>

<div class="tour-card-section-3">
    <div class="tour-card-15">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Climbing Mount Batur</h3>
        <p>Popular Sunrise Trek</p>
        <h6>Located in the Bangli region, Mount Batur stands at a height of 1,717 metres and is a popular trekking route
            during sunrise, owing to the spectacular views.</h6>
        <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    </div>
    <div class="tour-card-16">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Climbing Mount Batur</h3>
        <p>Popular Sunrise Trek</p>
        <h6>Located in the Bangli region, Mount Batur stands at a height of 1,717 metres and is a popular trekking route
            during sunrise, owing to the spectacular views.</h6>
        <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    </div>
    <div class="tour-card-17">
        <div class="cardImg12">
            <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h3>Climbing Mount Batur</h3>
        <p>Popular Sunrise Trek</p>
        <h6>Located in the Bangli region, Mount Batur stands at a height of 1,717 metres and is a popular trekking route
            during sunrise, owing to the spectacular views.</h6>
        <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    </div>
</div>

<section class="pt-0 pb-0">
    <div class="container p-0">
        <div class="landingCard">
            <div class="row ">
                <div class="col-sm-4">
                    <h2 class="fnt-42">Super Offers</h2>
                </div>
                <div class="col-sm-8">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">ALL
                                OFFERS</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">BANK OFFERS</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">DOMESTIC FLIGHTS</a>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="tab-content colornone" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="regular2 r2">
                        <div class="mycard">
                            <div class="row offershadows">
                                <div class="col-sm-4 ">
                                    <img src="{{ asset('assets/images/offer1.jpg') }}" alt=""
                                        class="offerimages responsive-images">
                                </div>
                                <div class="col-sm-8">
                                    <div class="searchtitle colorgrey">DOM FLIGHTS</div>
                                    <div class="borderbotum"></div>
                                    <div class="searchtitle">Holiday vacation offers</div>
                                    <div class="borderbotum"></div>
                                    <span class="slitxt colorgrey">
                                        International holiday on your mind holiday on your mind
                                    </span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <span class="badge badge-pill badge-secondary">T&C's Apply</span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <span class="badge badge-pill badge-secondary">COUPON : HOLIDAY</span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <button type="button" class="btn btn-outline-secondary btn-sm">View
                                        Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="mycard">
                            <div class="row offershadows">
                                <div class="col-sm-4">
                                    <img src="{{ asset('assets/images/offer2.jpg') }}" alt=""
                                        class="offerimages responsive-images">
                                </div>
                                <div class="col-sm-8">
                                    <div class="searchtitle colorgrey">DOM FLIGHTS</div>
                                    <div class="borderbotum"></div>
                                    <div class="searchtitle">Holiday vacation offers</div>
                                    <div class="borderbotum"></div>
                                    <span class="slitxt colorgrey">
                                        International holiday on your mind holiday on your mind
                                    </span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <span class="badge badge-pill badge-secondary">T&C's Apply</span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <span class="badge badge-pill badge-secondary">COUPON : HOLIDAY</span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <button type="button" class="btn btn-outline-secondary btn-sm">View
                                        Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="mycard">
                            <div class="row offershadows">
                                <div class="col-sm-4">
                                    <img src="{{ asset('assets/images/offer2.jpg') }}" alt=""
                                        class="offerimages responsive-images">
                                </div>
                                <div class="col-sm-8">
                                    <div class="searchtitle colorgrey">DOM FLIGHTS</div>
                                    <div class="borderbotum"></div>
                                    <div class="searchtitle">Holiday vacation offers</div>
                                    <div class="borderbotum"></div>
                                    <span class="slitxt colorgrey">
                                        International holiday on your mind holiday on your mind
                                    </span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <span class="badge badge-pill badge-secondary">T&C's Apply</span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <span class="badge badge-pill badge-secondary">COUPON : HOLIDAY</span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <button type="button" class="btn btn-outline-secondary btn-sm">View
                                        Details</button>
                                </div>
                            </div>
                        </div>
                        <div class="mycard">
                            <div class="row offershadows">
                                <div class="col-sm-4">
                                    <img src="{{ asset('assets/images/offer1.jpg') }}" alt=""
                                        class="offerimages responsive-images">
                                </div>
                                <div class="col-sm-8">
                                    <div class="searchtitle colorgrey">DOM FLIGHTS</div>
                                    <div class="borderbotum"></div>
                                    <div class="searchtitle">Holiday vacation offers</div>
                                    <div class="borderbotum"></div>
                                    <span class="slitxt colorgrey">
                                        International holiday on your mind holiday on your mind
                                    </span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <span class="badge badge-pill badge-secondary">T&C's Apply</span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <span class="badge badge-pill badge-secondary">COUPON : HOLIDAY</span>
                                </div>
                                <div class="col-sm-4 pt-10">
                                    <button type="button" class="btn btn-outline-secondary btn-sm">View
                                        Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mycard">
                                <div class="row offershadows">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('assets/images/offer1.jpg') }}" alt=""
                                            class="offerimages responsive-images">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="searchtitle colorgrey">DOM FLIGHTS</div>
                                        <div class="borderbotum"></div>
                                        <div class="searchtitle">Holiday vacation offers</div>
                                        <div class="borderbotum"></div>
                                        <span class="slitxt colorgrey">
                                            International holiday on your mind holiday on your mind
                                        </span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <span class="badge badge-pill badge-secondary">T&C's Apply</span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <span class="badge badge-pill badge-secondary">COUPON : HOLIDAY</span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <button type="button" class="btn btn-outline-secondary btn-sm">View
                                            Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mycard">
                                <div class="row offershadows">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('assets/images/offer1.jpg') }}" alt=""
                                            class="offerimages responsive-images">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="searchtitle colorgrey">DOM FLIGHTS</div>
                                        <div class="borderbotum"></div>
                                        <div class="searchtitle">Holiday vacation offers</div>
                                        <div class="borderbotum"></div>
                                        <span class="slitxt colorgrey">
                                            International holiday on your mind holiday on your mind
                                        </span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <span class="badge badge-pill badge-secondary">T&C's Apply</span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <span class="badge badge-pill badge-secondary">COUPON : HOLIDAY</span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <button type="button" class="btn btn-outline-secondary btn-sm">View
                                            Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mycard">
                                <div class="row offershadows">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('assets/images/offer1.jpg') }}" alt=""
                                            class="offerimages responsive-images">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="searchtitle colorgrey">DOM FLIGHTS</div>
                                        <div class="borderbotum"></div>
                                        <div class="searchtitle">Holiday vacation offers</div>
                                        <div class="borderbotum"></div>
                                        <span class="slitxt colorgrey">
                                            International holiday on your mind holiday on your mind
                                        </span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <span class="badge badge-pill badge-secondary">T&C's Apply</span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <span class="badge badge-pill badge-secondary">COUPON : HOLIDAY</span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <button type="button" class="btn btn-outline-secondary btn-sm">View
                                            Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mycard">
                                <div class="row offershadows">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('assets/images/offer1.jpg') }}" alt=""
                                            class="offerimages responsive-images">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="searchtitle colorgrey">DOM FLIGHTS</div>
                                        <div class="borderbotum"></div>
                                        <div class="searchtitle">Holiday vacation offers</div>
                                        <div class="borderbotum"></div>
                                        <span class="slitxt colorgrey">
                                            International holiday on your mind holiday on your mind
                                        </span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <span class="badge badge-pill badge-secondary">T&C's Apply</span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <span class="badge badge-pill badge-secondary">COUPON : HOLIDAY</span>
                                    </div>
                                    <div class="col-sm-4 pt-10">
                                        <button type="button" class="btn btn-outline-secondary btn-sm">View
                                            Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="tour-card-section-4">
    <h1 class="font-weight-bold m-0">Holiday Packages for Bali</h1>
    <p class="">Top Recommendations</p>
    <div class="lftCrd16">
        <div>
            <img src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h6 class="font-weight-bold m-0">Soulmate Special Bali with Seminyak Pool Villa - 6 Nights</h6>
        <p class="small m-0">Flights,Activities,AirportTransfers</p>
        <p class="m-0 font-weight-bold small text-danger">6N/7D</p>
        <p class="small m-0 float-right text-muted"><del>₹2,53,478</del></p>
        <br>
        <h5 class="font-weight-bold m-0 float-right"><span class="small text-danger"> 21% off</span> ₹2,53,478</h5>
        <br>
        <p class="small m-0 float-right text-muted">2 Adults</p>
    </div>
    <div class="rgtCrd17">
        <div>
            <img src="assets/images/holiday/1.jpg" alt="">
        </div>
        <h6 class="font-weight-bold m-0">Soulmate Special Bali with Seminyak Pool Villa - 6 Nights</h6>
        <p class="small m-0">Flights,Activities,AirportTransfers</p>
        <p class="m-0 font-weight-bold small text-danger">6N/7D</p>
        <p class="small m-0 float-right text-muted"><del>₹2,53,478</del></p>
        <br>
        <h5 class="font-weight-bold m-0 float-right"><span class="small text-danger"> 21% off</span> ₹2,53,478</h5>
        <br>
        <p class="small m-0 float-right text-muted">2 Adults</p>
    </div>
</div>

<div class="tour-activities-card">
    <h1>Activities</h1>
    <p>Most Booked</p>
    <div class="actbox1">
        <img src="assets/images/holiday/20.jpg" alt="">
        <h6>Mud Bath & Breakfast With Elephants - Bali</h6>
        <div>3.5/5</div>
        <h5>₹7,500</h5>
    </div>
    <div class="actbox2">
        <img src="assets/images/holiday/20.jpg" alt="">
        <h6>Mud Bath & Breakfast With Elephants - Bali</h6>
        <div>3.5/5</div>
        <h5>₹7,500</h5>
    </div>
    <div class="actbox3">
        <img src="assets/images/holiday/20.jpg" alt="">
        <h6>Mud Bath & Breakfast With Elephants - Bali</h6>
        <div>3.5/5</div>
        <h5>₹7,500</h5>
    </div>
    <div class="actbox4">
        <img src="assets/images/holiday/20.jpg" alt="">
        <h6>Mud Bath & Breakfast With Elephants - Bali</h6>
        <div>3.5/5</div>
        <h5>₹7,500</h5>
    </div>
    <div class="actbox5">
        <img src="assets/images/holiday/20.jpg" alt="">
        <h6>Mud Bath & Breakfast With Elephants - Bali</h6>
        <div>3.5/5</div>
        <h5>₹7,500</h5>
    </div>
    <div class="actbox6">
        <img src="assets/images/holiday/20.jpg" alt="">
        <h6>Mud Bath & Breakfast With Elephants - Bali</h6>
        <div>3.5/5</div>
        <h5>₹7,500</h5>
    </div>
    <div class="actbox7">
        <img src="assets/images/holiday/20.jpg" alt="">
        <h6>Mud Bath & Breakfast With Elephants - Bali</h6>
        <div>3.5/5</div>
        <h5>₹7,500</h5>
    </div>
    <div class="actbox8">
        <img src="assets/images/holiday/20.jpg" alt="">
        <h6>Mud Bath & Breakfast With Elephants - Bali</h6>
        <div>3.5/5</div>
        <h5>₹7,500</h5>
    </div>
</div>

<div class="tour-card-slide-12">
    <h1>Discover by Interest</h1>
    <div class="cardSlide12">
        <div id="cardSlider56" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="boxS12">
                        <div>
                            <span>ROMANTIC</span>
                        </div>
                        <h6 class="font-weight-bold">Romantic destinations</h6>
                    </div>
                    <div class="boxS13">
                        <div>
                            <span>PILGRIMAGE</span>
                        </div>
                        <h6 class="font-weight-bold">Pilgrimage spots under
                            2000</h6>
                    </div>
                    <div class="boxS14">
                        <div>
                            <span>WEEKEND</span>
                        </div>
                        <h6 class="font-weight-bold">Getaways for the weekend</h6>
                    </div>
                    <div class="boxS15">
                        <div>
                            <span>WILDLIFE</span>
                        </div>
                        <h6 class="font-weight-bold">Wildlife hotspots</h6>
                    </div>
                    <div class="boxS16">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold">Honeymoon Destinations under
                            50,000</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="boxS12">
                        <div>
                            <span>INTETNATIONL</span>
                        </div>
                        <h6 class="font-weight-bold">Internationl under
                            50,000</h6>
                    </div>
                    <div class="boxS13">
                        <div>
                            <span>ROMANTIC</span>
                        </div>
                        <h6 class="font-weight-bold">Romantic destinations</h6>
                    </div>
                    <div class="boxS14">
                        <div>
                            <span>ROMANTIC</span>
                        </div>
                        <h6 class="font-weight-bold">Romantic destinations</h6>
                    </div>
                    <div class="boxS15">
                        <div>
                            <span>ROMANTIC</span>
                        </div>
                        <h6 class="font-weight-bold">Romantic destinations</h6>
                    </div>
                    <div class="boxS16">
                        <div>
                            <span>ROMANTIC</span>
                        </div>
                        <h6 class="font-weight-bold">Romantic destinations</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <a class="btn1256 mb-3 mr-1" href="#cardSlider56" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="btn12567 mb-3 " href="#cardSlider56" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="tour-about-bali">
    <h1 class="font-weight-bold">More about Bali!</h1>
    <p>Explore the irresistible culinary offerings of Bali. You will love sightseeing and water sports.
        If you love watching the ocean, then Bali is home to gorgeous beaches.</p>
    <p>Here are a few quick facts to make your travel safe and easy to Bali. Bali is a Food destination. The best time
        to visit Bali is April, May, June, July, August and September. Since this is the peak season expect a little
        crowd during this time. October, November and December period experiences moderate weather. So, you can easily
        avoid facing a large gathering.</p>
    <p>In peak season the weather is pleasant temperatures throughout the day, with slight humidity, whereas in
        off-season the weather is frequent heavy rainfalls with high humidity levels. Weather in moderate season is
        pleasant weather with average rainfalls. During Nyepi Day, Bali Arts Festival,… a large number of tourists flock
        together. The festivals are celebrated in the month of March, June-July,... consecutively. So, if you are fond
        of bustling streets and localities, choose this time of the year to travel.</p>
    <p>If your travel seems incomplete without getting into some fun activities then you will love to get indulged in
        sightseeing and water sports. In moderate season you will love to get indulged in the beautiful landscapes. </p>
</div>

<div class="tour-FAQs-12">
    <h1 class="font-weight-bold mb-5">FAQs - Frequently Asked Questions about Bali</h1>
    <h5 class="font-weight-bold">What is the best time to visit Bali? </h5>
    <p>Ideally the best time to visit any place is considered when the weather conditions are delightful.
        For Bali, you can choose to go in April, May, June, July, August and September which is the peak
        season and October, November and December which is the moderate season.
        Both will serve you well to unwind from your tedious routine.</p>
   <h5 class="font-weight-bold">What are the best places to visit in Bali?</h5>
   <p>The most loved attractions in Bali are Visit Tegallalang Rice Terraces, Explore the Ancient Temples and Chill on the Beaches.</p>
   <h5 class="font-weight-bold">How is the weather of Bali in peak season? </h5>
   <p>The weather of Bali in peak season is pleasant temperatures throughout the day, with slight humidity. It means you can easily plan a trip in this season for maximum fun during this season. </p>
</div>

<script>
    function openCity(evt, cityName) {
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
    document.getElementById("defaultOpen").click();

</script>
<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection

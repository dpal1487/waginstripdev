@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="container" style="margin-top:120px;">
    <h4 class="m-0 font-weight-bold">2 Nights SUNDOWNER TO GOA</h4>
    <h6 class="m-0 font-weight-bold text-secondary">2N/4D <span class="small">( Departing from: Mumbai )</span></h6>

    <p class="m-0 small text-primary pt-2">
        <a href="{{ url('cruise') }}" class="text-primary">Cruise</a> >
        <a href="#" class="text-primary">Cordelia Cruises</a> >
        2 Nights SUNDOWNER TO GOA
    </p>
</div>

<div class="container mt-1 mb-5">
    <div class="row p-2">
        <!-- Right Side Sections -->
        <div class="col-sm-8 p-2">
            <div class="card">
                <div id="cruiseSlider_sec1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/cruise/imag1.jpg" style="height:350px;"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/cruise/imag2.jpg" style="height:350px;"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/cruise/imag7.jpg" style="height:350px;"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/cruise/imag4.jpg" style="height:350px;"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/cruise/imag5.jpg" style="height:350px;"
                                alt="First slide">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-n2">
                <div class="col-sm-12">
                    <div class="offersButtons_12 mt-n5 mr-4">
                        <span href="#cruiseSlider_sec1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                                aria-hidden="true"></i></span>
                        <span href="#cruiseSlider_sec1" role="button" data-slide="next"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12">
                    <ul class="nav nav-pills cruise_overviews mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="pills-home-tab" data-toggle="pill" href="#pills-cruiseOverviews"
                                role="tab" aria-controls="pills-home" aria-selected="true">Cruise Overviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="" id="pills-profile-tab" data-toggle="pill" href="#pills-onboardExperience"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Onboard experience </a>
                        </li>
                        <li class="nav-item">
                            <a class="" id="pills-contact-tab" data-toggle="pill" href="#pills-amenities" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Amenities </a>
                        </li>
                        <li class="nav-item">
                            <a class="" id="pills-contact-tab" data-toggle="pill" href="#pills-itinerary" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Itinerary</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-cruiseOverviews" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <h6 class="m-0 pt-5 font-weight-bold text-uppercase">Overviews</h6>
                            <p class="m-0 pt-3 small">The Empress by Cordelia Cruises is an iconic grandeur vessel that
                                first set sail in the
                                year 1990 with the name The Nordic Empress. The ship was initially ordered by Admiral
                                Cruises and later incorporated into the Royal Caribbean fleet. After sailing the Bahamas
                                and the Caribbean, The Empress will be cruising the West and the East Coast of INDIA
                                under the Indian Cruise Liner, Cordelia Cruises by Waterways Tourism Pvt. Ltd.
                                Cordelia Cruises is proud to welcome the Empress to India
                            </p>
                            <h6 class="m-0 pt-5 pb-2 font-weight-bold text-uppercase">Onboard experience </h6>
                            <div class="row border m-0 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/gym-cruise1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Salon & Fitness At Sea</h6>
                                        <p class="m-0 pt-3 small">
                                            Fitness is what keeps you going and Cordelia cruise is home to a fully
                                            equipped, dedicated fitness centre that will let the guests keep up their
                                            physique on the go. For all the fitness freaks out there, Cordelia cruises
                                            have a modern setup of workout zones for you. Enjoy your holidays without
                                            missing your daily workout sessions
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/bar.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Bars & Lounges</h6>
                                        <p class="m-0 pt-3 small">
                                            Whether you want to enjoy an intimate evening over drinks with the ones
                                            closest to you, or whether you want to kick back with a tropical cooler and
                                            lounge by the pool deck, Empress includes a plethora of bars & lounges that
                                            are perfectly suited to every occasion. Each bar includes premium spirits
                                            from all over the world, so you can experience the finest of liquor at its
                                            finest.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/dining.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Dining</h6>
                                        <p class="m-0 pt-3 small">
                                            When you cruise with us, you are truly spoilt for choice when it comes to
                                            dining experiences. From oriental to continental, to Mughlai, to Indian
                                            street food, believe us when we say we’ve got it all. Whether you want to
                                            treat yourself to a fine dining experience, or whether you simply want to
                                            indulge and satisfy your cravings, we’ve got just the right eatery for you.
                                            Take your taste buds on a Southeast Asian tour with our in-house oriental
                                            restaurant featuring delicacies from Japan to Thailand.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/dance.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Entertainment & Nightlife</h6>
                                        <p class="m-0 pt-3 small">
                                            From groovy nightclubs where you can dance the night away to Casinos
                                            brimming with opportunities to get lucky, to sprawling amphitheaters where
                                            you can witness spectacular performances, the choices for entertainment are
                                            ample onboard Empress. If you’re worried about the kids getting bored, worry
                                            no more because Empress has designated special zones for kids & teenagers,
                                            where they can enjoy a range of fun activities, and can also mix and mingle
                                            with others their age. There’s always something exciting to do for every age
                                            group.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/spa.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Spa</h6>
                                        <p class="m-0 pt-3 small">
                                            As if a cruise vacation was not rejuvenating enough, Cordelia Cruises takes
                                            rest and relaxation to a whole new level with an onboard spa. Imagine
                                            relaxing at the sauna at our cruise ship spa while taking in views of the
                                            endless ocean expanse. Could it get any better than that? There’s no better
                                            way to prepare for your dreamy tropical vacation than by getting pampered
                                            luxuriously at Cordelia Cruises onboard spa. So mark your calendars, pack
                                            your bags and get ready to experience the ultimate in relaxation. Book your
                                            cruise with spa today!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h6 class="m-0 pt-3 pb-2 font-weight-bold text-uppercase">Activites</h6>
                            <div class="row m-0 mt-3 border p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/activities.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Kids & Teenagers</h6>
                                        <ul class="mt-3 small">
                                            <li>Aliens Oxygen</li>
                                            <li>Animal Actions</li>
                                            <li>Balance Beam Fun</li>
                                            <li>Balloon Volleyball</li>
                                            <li>Barnyard</li>
                                            <li>Bean bag toss</li>
                                            <li>Soccer Shoot Out</li>
                                            <li>Castle Ball</li>
                                            <li>Cone Knockdown Challenge</li>
                                            <li>Dinosaur 4 corners</li>
                                            <li>Dragon dodge</li>
                                            <li>Mirror dancing</li>
                                            <li>Disco Balloon challenge</li>
                                            <li>Freeze dancing</li>
                                            <li>Fishing relay</li>
                                            <li>Follow the Spy</li>
                                            <li>Freeze tag</li>
                                            <li>Fruit salad</li>
                                            <li>In room color hunt</li>
                                            <li>King of the Jungle</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h6 class="m-0 pt-3 pb-2 font-weight-bold text-uppercase">Amenities </h6>
                            <div class="row m-0 border p-2">
                                <div class="col-sm-12 p-2">
                                    <ul>
                                        <li>Beach</li>
                                        <li> Salon & Fitness At Sea</li>
                                        <li>Bars & Lounges</li>
                                        <li>Dining</li>
                                        <li>Entertainment & Nightlife</li>
                                        <li>Kids & Teenagers</li>
                                        <li>Spa</li>
                                    </ul>
                                </div>
                            </div>
                            <h6 class="m-0 pt-4 font-weight-bold text-uppercase">Itinerary </h6>
                            <div class="row m-0">
                                <div class="col-sm-12 p-2">
                                    <div class="card border-0 p-3">
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
                        <div class="tab-pane fade" id="pills-onboardExperience" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <h6 class="m-0 pt-5 font-weight-bold text-uppercase">Onboard experience </h6>
                            <div class="row border m-0 mt-2 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/gym-cruise1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Salon & Fitness At Sea</h6>
                                        <p class="m-0 pt-3 small">
                                            Fitness is what keeps you going and Cordelia cruise is home to a fully
                                            equipped, dedicated fitness centre that will let the guests keep up their
                                            physique on the go. For all the fitness freaks out there, Cordelia cruises
                                            have a modern setup of workout zones for you. Enjoy your holidays without
                                            missing your daily workout sessions
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/bar.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Bars & Lounges</h6>
                                        <p class="m-0 pt-3 small">
                                            Whether you want to enjoy an intimate evening over drinks with the ones
                                            closest to you, or whether you want to kick back with a tropical cooler and
                                            lounge by the pool deck, Empress includes a plethora of bars & lounges that
                                            are perfectly suited to every occasion. Each bar includes premium spirits
                                            from all over the world, so you can experience the finest of liquor at its
                                            finest.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/dining.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Dining</h6>
                                        <p class="m-0 pt-3 small">
                                            When you cruise with us, you are truly spoilt for choice when it comes to
                                            dining experiences. From oriental to continental, to Mughlai, to Indian
                                            street food, believe us when we say we’ve got it all. Whether you want to
                                            treat yourself to a fine dining experience, or whether you simply want to
                                            indulge and satisfy your cravings, we’ve got just the right eatery for you.
                                            Take your taste buds on a Southeast Asian tour with our in-house oriental
                                            restaurant featuring delicacies from Japan to Thailand.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/dance.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Entertainment & Nightlife</h6>
                                        <p class="m-0 pt-3 small">
                                            From groovy nightclubs where you can dance the night away to Casinos
                                            brimming with opportunities to get lucky, to sprawling amphitheaters where
                                            you can witness spectacular performances, the choices for entertainment are
                                            ample onboard Empress. If you’re worried about the kids getting bored, worry
                                            no more because Empress has designated special zones for kids & teenagers,
                                            where they can enjoy a range of fun activities, and can also mix and mingle
                                            with others their age. There’s always something exciting to do for every age
                                            group.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/spa.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Spa</h6>
                                        <p class="m-0 pt-3 small">
                                            As if a cruise vacation was not rejuvenating enough, Cordelia Cruises takes
                                            rest and relaxation to a whole new level with an onboard spa. Imagine
                                            relaxing at the sauna at our cruise ship spa while taking in views of the
                                            endless ocean expanse. Could it get any better than that? There’s no better
                                            way to prepare for your dreamy tropical vacation than by getting pampered
                                            luxuriously at Cordelia Cruises onboard spa. So mark your calendars, pack
                                            your bags and get ready to experience the ultimate in relaxation. Book your
                                            cruise with spa today!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h6 class="m-0 pt-3 font-weight-bold text-uppercase">Activites</h6>
                            <div class="row border m-0 mt-3 p-2">
                                <div class="col-sm-4 p-2">
                                    <div class="card">
                                        <img src="assets/images/cruise/activities.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card border-0">
                                        <h6 class="m-0 font-weight-bold">Kids & Teenagers</h6>
                                        <ul class="mt-3 small">
                                            <li>Aliens Oxygen</li>
                                            <li>Animal Actions</li>
                                            <li>Balance Beam Fun</li>
                                            <li>Balloon Volleyball</li>
                                            <li>Barnyard</li>
                                            <li>Bean bag toss</li>
                                            <li>Soccer Shoot Out</li>
                                            <li>Castle Ball</li>
                                            <li>Cone Knockdown Challenge</li>
                                            <li>Dinosaur 4 corners</li>
                                            <li>Dragon dodge</li>
                                            <li>Mirror dancing</li>
                                            <li>Disco Balloon challenge</li>
                                            <li>Freeze dancing</li>
                                            <li>Fishing relay</li>
                                            <li>Follow the Spy</li>
                                            <li>Freeze tag</li>
                                            <li>Fruit salad</li>
                                            <li>In room color hunt</li>
                                            <li>King of the Jungle</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-amenities" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <h6 class="m-0 pt-3 pb-2 font-weight-bold text-uppercase">Amenities </h6>
                            <div class="row border m-0 p-2">
                                <div class="col-sm-12 p-2">
                                    <ul class="small">
                                        <li>Beach</li>
                                        <li> Salon & Fitness At Sea</li>
                                        <li>Bars & Lounges</li>
                                        <li>Dining</li>
                                        <li>Entertainment & Nightlife</li>
                                        <li>Kids & Teenagers</li>
                                        <li>Spa</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-itinerary" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <h6 class="m-0 pt-5 font-weight-bold text-uppercase">Onboard experience </h6>
                            <div class="row m-0">
                                <div class="col-sm-12 p-2">
                                    <div class="card border-0 p-3">
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

                    </div>
                </div>
            </div>
        </div>
        <!-- Right Side End -->
        <!-- Left Side Sections -->
        <div class="col-sm-4 p-2">
            <div class="card">
                <div class="card-header p-3" style="background-color:#eee;">
                    <h5 class="m-0 font-weight-bold">2 Nights SUNDOWNER TO GOA</h5>
                    <p class="m-0 pt-1 pb-2 small text-secondary">1 Cabin(s), 2 Adult(s), 0 Child(s)</p>
                    <span class="btn-primary float-left mr-2 rounded pt-1 pb-1 pl-2 pr-2">4.5/5</span>
                    <p class="m-0 small pt-1 text-secondary">Very Good (2430 Reviews)</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-primary">Interior Standard</h5>
                    <h6 class="text-right m-0 text-muted"><del>₹40,600</del></h6>
                    <h4 class="text-right m-0 font-weight-bold">₹40,600</h4>
                    <p class="small text-right text-secondary m-0">Per person</p>
                    <p class="small text-right text-secondary m-0">* Plus taxes & charges</p>
                    <p class="small pt-2 text-success"><i class="fa fa-check-circle" aria-hidden="true"></i> 25%
                        Cancellation fee - Beyond 31 Days </p>
                    <div class="row p-2 mt-n3">
                        <div class="col-sm-6 p-2">
                            <select class="form-control" name="" id="">
                                <option value="" selected="selected">Select Cabin </option>
                                <option value="Interior Standard"> Interior Standard</option>
                                <option value="Interior Upper"> Interior Upper</option>
                                <option value="Interior Premium"> Interior Premium</option>
                                <option value="Ocean View Standard"> Ocean View Standard</option>
                                <option value="Ocean View Upper"> Ocean View Upper</option>
                                <option value="Ocean View Premium"> Ocean View Premium</option>
                                <option value="Balcony Suite"> Balcony Suite</option>
                                <option value="Suite"> Suite</option>
                                <option value="Chairmans Suite"> Chairmans Suite</option>
                            </select>
                        </div>
                        <div class="col-sm-6 p-2">
                            <select class="form-control" name="" id="">
                                <option value="" selected="selected">Departure Date</option>
                                <option value="24-04-2022"> 24-04-2022</option>
                                <option value="25-04-2022"> 24-04-2022</option>
                                <option value="26-04-2022"> 24-04-2022</option>
                                <option value="27-04-2022"> 24-04-2022</option>
                                <option value="28-04-2022"> 24-04-2022</option>
                                <option value="29-04-2022"> 24-04-2022</option>
                                <option value="30-04-2022"> 24-04-2022</option>
                            </select>
                        </div>
                    </div>
                    <a href="{{url('cruise-customer-details')}}" class="btn  mt-1 mb-3  card font-weight-bold  btn-primary">Book Now</a>

                </div>
            </div>

            <div class="card p-3 mt-4">
                <h5 class="m-0 font-weight-bold">Offers</h5>
                <p class="m-0 small mt-2 text-danger">Online Only Offer - Use This Coupon and Get Upto 25% Off!!</p>
                <input class="form-control mt-2" type="text" placeholder="Apply Coupon">
                <a href="#" class="btn btn-primary mt-3">Apply</a>
                
            </div>

        </div>
        <!-- Left Side End Sections -->
    </div>
</div>





<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection

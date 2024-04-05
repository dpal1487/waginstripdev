@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <!-- DESKTOP VIEW START  -->
    <div class="container mobileVes1  p-0 mts_2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Amalfi Coast, Italy</li>
            </ol>
        </nav>
    </div>

    <div class="container mobileVes1 p-0 mb-5">
        <div class="row">
            <div class="col-sm-7">
                <div class="card bg-transparent border-0 text-left">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/images/blog/Amalfi Coast, Italy.jpg"
                                    style="height: 310px;" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/blog/one-1.jpg" style="height: 310px;"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/blog/one-2.jpg" style="height: 310px;"
                                    alt="First slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body p-0 pt-2">
                        <h4 class="card-title m-0 font-weight-bold">Amalfi Coast, Italy</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header p-3 bg-primary">
                        <h4 class="card-title m-0 font-weight-bold text-white">Amalfi Coast, Italy</h4>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-white" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card mt-2 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="card border-0 p-4">
                            <h1 class="m-3 bg-danger p-1 rounded text-white text-center font-weight-bold"> 20%OFF</h1>
                            <p class="text-center">(Inclusive of all taxes)</p>
                        </div>
                        <div class="card bg-primary p-3 pl-5">
                            <h6 class="m-0 pt-3 text-right small">Per person</h6>
                            <h3 class="m-0 font-weight-bold text-right">₹55,599</h3>
                            <p class="m-0 text-right small">T&C's Apply</p>
                            <button type="button" class="btn btn-light mt-4 ml-n4 mr-1">Book Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p class="m-0 pt-2">
                    There are many reasons the Amalfi Coast continues to be at the top of
                    honeymooners’ bucket lists. It’s hard to picture more classically romantic a
                    scene than Positano’s steep village streets, Moorish architecture, azure
                    water and colorful loungers and umbrellas lining the dark sandy beaches.
                    Glamour comes easy, especially at the five-star Le Sirenuse, where the
                    formula for a sexy, sophisticated getaway is tried and true
                </p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-5">
                <div class="card">
                    <img class="d-block w-100" src="assets/images/blog/one-1.jpg" style="height: 310px;" alt="First slide">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="card">
                    <img class="d-block w-100" src="assets/images/blog/one-2.jpg" style="height: 310px;" alt="First slide">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h4 class="m-0 pt-3 font-weight-bold">Exploring a destination</h4>
                <p class="pt-3">
                    But when one does arrive at that fresh frontier, there are ways better than others to begin your journey
                    of discovery. Follow these steps and see the world with a new light.
                </p>
                <p>
                    Discover a new city through a food tour. Food tour's are the easiest way to take a tour, learn about the
                    local delicacies, and the best of all, get great tips that aren't just "local" tips for tourists, but
                    sometimes, lessons for a lifetime too
                </p>
                <p>
                    Use Public Transportation. When you are in a new city, you can possibly see places and people that you
                    wouldn't normally see when simply walking to the places that checks your list. Some buses or rails take
                    you to parts of the city you wouldn't get to see otherwise. Whilst using public transportation, just
                    ensure that you are following the local norms and do remember to watch the locals!
                </p>
                <p>
                    Find a local festival. Go beyond what other tourists might do while visiting a place. Look for the
                    unique things you would want to do. Use social media or the local tourism website to find out what's
                    going on locally. You may have to move out of the center of the city to do some of the less popular but
                    more unique things, so just keep that in mind!
                </p>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-sm-12">
                <div id="blogSlidersN" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/blog/one.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Body</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#blogSlidersN" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#blogSlidersN" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>

    <div class="container flight_sliderOffers mobileVes1 mt-5 mb-5">
        <div class="row btnssreser">
            <div class="col-sm-6">
                <h1 class="float-left font-weight-bold" style="font-size:28px;">
                    Best Selling Holiday Packages
                </h1>
            </div>
            <div class="col-sm-6">
                <div class="offersButtons_12 mt-0">
                    <span href="#toDestinationsSlider_1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></span>
                    <span href="#toDestinationsSlider_1" role="button" data-slide="next"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div id="toDestinationsSlider_1" class="carousel slide mt-3 mb-3" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="{{url('honeymoon-package')}}">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/9.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Honeymoon Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="{{url('honeymoon-package')}}">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/10.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Romantic Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/11.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">International Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/20.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Beach Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/5.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Weekend Getaways</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/6.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Hill Stations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/7.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Adventure Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/8.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Heritage Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/1.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Honeymoon Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/2.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Romantic Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/3.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">International Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/holiday/4.jpg" alt="Card image cap"
                                        style="height:200px;">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Beach Destinations</h6>
                                        <a class="float-right font-weight-bold text-primary" href="#">Explore</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

    <!-- Desktop End View -->

    <x-frontend.sections.mobile-view-pages />

    <div class=" dpnr">
        <x-footer />
    </div>

@endsection

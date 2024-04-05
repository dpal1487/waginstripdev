@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
    <!-- Desktop View Start -->
    <div class="container p-0 honeyBreadcrumb mobileVes1  mtbs_20">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('honeymoon-package') }}">Honeymoon
                        Destinations</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maldives Tour Packages</li>
            </ol>
        </nav>
    </div>

    
<div class="container mobileVes1">
    <h1 class="font-weight-bold m-0">Best-Selling Deals in Maldives!</h1>
    <h5 class="m-0 text-muted">(10 Packages)</h5>
    <h5 class="font-weight-bold m-0 pt-2">The ultimate holiday deals to the island of Maldives, created by XYZ!
    </h5>
</div>

<div class="container mobileVes1 holidayFilter_1 mt-5 mb-5">
    <div class="row mt-5 pt-3">
        <div class="col-sm-8">
            <h1 class="font-weight-bold" style="font-size:28px;">Maldives Tour Packages</h1>
        </div>
        <div class="col-sm-4">
            <div class="offersButtons_12 mt-0">
                <span href="#holidayMaldiv_slec1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#holidayMaldiv_slec1" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div id="holidayMaldiv_slec1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <a href="{{ url('holiday-view-details') }}">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/holiday/ml1.jpg" alt="">
                                <div class="card-body">
                                    <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                    <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                    <div class="row mt-2">
                                        <div class="col-sm-12">
                                            <a href="#" class="h6 text-secondary small text-left mr-2">
                                                <i class="fa fa-list" aria-hidden="true"></i>
                                                Highlight
                                            </a>
                                            <a href="#" class="h6 text-secondary small text-left  mr-2">
                                                <i class="fa fa-plane" aria-hidden="true"></i>
                                                Flights
                                            </a>
                                            <a href="#" class="h6 text-secondary small text-left  mr-2">
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                Hotels
                                            </a>
                                            <a href="#" class="h6 text-secondary small text-left  mr-2">
                                                <i class="fa fa-camera" aria-hidden="true"></i>
                                                Sightseeing
                                            </a>
                                            <a href="#" class="h6 text-secondary small text-left">
                                                <i class="fa fa-taxi" aria-hidden="true"></i>
                                                Transfer
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-12">
                                            <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                            <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml2.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml3.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml5.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml6.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml7.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
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

<div class="container mobileVes1 holidayFilter_1 mt-5 mb-5">
    <div class="row mt-5 pt-3">
        <div class="col-sm-8">
            <h1 class="font-weight-bold" style="font-size:28px;">Maldives Tour Packages</h1>
        </div>
        <div class="col-sm-4">
            <div class="offersButtons_12 mt-0">
                <span href="#holidayMaldiv_slec2" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#holidayMaldiv_slec2" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div id="holidayMaldiv_slec2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml1.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml2.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml3.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml5.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml6.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml7.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
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

<div class="container mobileVes1 holidayFilter_1 mt-5 mb-5">
    <div class="row mt-5 pt-3">
        <div class="col-sm-8">
            <h1 class="font-weight-bold" style="font-size:28px;">Maldives Tour Packages</h1>
        </div>
        <div class="col-sm-4">
            <div class="offersButtons_12 mt-0">
                <span href="#holidayMaldiv_slec3" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#holidayMaldiv_slec3" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div id="holidayMaldiv_slec3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml1.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml2.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml3.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml5.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml6.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="assets/images/holiday/ml7.jpg" alt="">
                            <div class="card-body">
                                <h6 class="font-weight-bold m-0">Exclusive Deal Bandos Island Reso...</h6>
                                <p class="m-0 font-weight-bold text-secondary">3N/4D</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <a href="#" class="h6 text-secondary small text-left mr-2">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            Highlight
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                            Flights
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Hotels
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left  mr-2">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            Sightseeing
                                        </a>
                                        <a href="#" class="h6 text-secondary small text-left">
                                            <i class="fa fa-taxi" aria-hidden="true"></i>
                                            Transfer
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <p class="text-secondary m-0 text-right">Starting price per adult</p>
                                        <h4 class="text-right m-0 font-weight-bold">₹55,999</h4>
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

    <x-frontend.sections.mobile-view-pages />
    <!-- Desktop End  -->
    <div class="dpnr">
        <x-footer />
    </div>
@endsection

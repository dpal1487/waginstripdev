@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
    <!-- DESKTOP VIEW START  -->
    <div class="container p-0 honeyBreadcrumb mobileVes1  mtbs_20">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Honeymoon Destinations</li>
            </ol>
        </nav>
    </div>

    <div class="container flight_sliderOffers mobileVes1 mb-5">
        <div class="row btnssreser">
            <div class="col-sm-6">
                <h1 class="float-left font-weight-bold" style="font-size:28px;">
                    Best Deal Honeymoon Packages
                </h1>
            </div>
            <div class="col-sm-6">
                <div class="offersButtons_12 mt-0">
                    <span href="#internationalHoneymoon" role="button" data-slide="prev"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></span>
                    <span href="#internationalHoneymoon" role="button" data-slide="next"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div id="internationalHoneymoon" class="carousel slide mt-3 mb-3" data-ride="carousel">
            <div class="carousel-inner">
                {{-- Slider One --}}
                <div class="carousel-item active">
                    <div class="row p-2">
                        {{-- card-1 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Amalfi-Coast,-Italy.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Amalfi Coast, Italy </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-2 --}}
                        <div class="col-sm-3 p-2">
                            <a href="">
                                <div class="card">
                                    <img src="assets/images/honeymoon/antigua-barbuda.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0"> Antigua & Barbuda </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹80,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-3 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Austin, Texas.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Austin, Texas </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-4 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Bali, Indonesia.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Bali, Indonesia </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Slider Two --}}
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/British-Virgin-Islands.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">British Virgin Islands </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Buenos-Aires,-Argentina.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Buenos Aires, Argentina</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Cape Town, South Africa.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0"> Cape Town, South Africa</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Cartagena, Colombia.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Cartagena, Colombia </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Slider Three --}}
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Colorado.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Colorado </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Dominica.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Dominica </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Lanai.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Lanai </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Maldives.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Maldives </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container flight_sliderOffers mobileVes1 mb-5">
        <div class="row btnssreser">
            <div class="col-sm-6">
                <h1 class="float-left font-weight-bold" style="font-size:28px;">
                    Domestic Honeymoon Packages
                </h1>
            </div>
            <div class="col-sm-6">
                <div class="offersButtons_12 mt-0">
                    <span href="#domesticHoneymoon" role="button" data-slide="prev"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></span>
                    <span href="#domesticHoneymoon" role="button" data-slide="next"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div id="domesticHoneymoon" class="carousel slide mt-3 mb-3" data-ride="carousel">
            <div class="carousel-inner">
                {{-- Slider One --}}
                <div class="carousel-item active">
                    <div class="row p-2">
                        {{-- card-1 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Andaman.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Andaman </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-2 --}}
                        <div class="col-sm-3 p-2">
                            <a href="">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Goa.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Goa</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹80,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-3 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Kerala.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Kerala</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-4 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Himachal.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Himachal</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Slider Two --}}
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Sikkim.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Sikkim</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Uttarakhand.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Uttarakhand</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Kashmir.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Kashmir</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Rajasthan.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Rajasthan</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Slider Three --}}
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/North-East.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">North East</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Srinagar.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Srinagar </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Nepal.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Nepal </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Himachal-Pradesh.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Himachal Pradesh </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container flight_sliderOffers mobileVes1 mb-5">
        <div class="row btnssreser">
            <div class="col-sm-6">
                <h1 class="float-left font-weight-bold" style="font-size:28px;">
                    International Honeymoon Packages 
                </h1>
            </div>
            <div class="col-sm-6">
                <div class="offersButtons_12 mt-0">
                    <span href="#locationHoneymoon" role="button" data-slide="prev"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></span>
                    <span href="#locationHoneymoon" role="button" data-slide="next"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div id="locationHoneymoon" class="carousel slide mt-3 mb-3" data-ride="carousel">
            <div class="carousel-inner">
                {{-- Slider One --}}
                <div class="carousel-item active">
                    <div class="row p-2">
                        {{-- card-1 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Singapore.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Singapore </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-2 --}}
                        <div class="col-sm-3 p-2">
                            <a href="{{url('honeymoon-pages')}}">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Maldives.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Maldives</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹80,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-3 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/North Island.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">North Island</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- card-4 --}}
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Mauritius.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Mauritius</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Slider Two --}}
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Sri Lanka.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Sri Lanka</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Paris.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Paris</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Lombok Island.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Lombok Island</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Ubud.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Ubud </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Slider Three --}}
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Cape Winelands.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Cape Winelands</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Langkawi.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Langkawi </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Koh Rong.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Koh Rong</h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/honeymoon/Santorini.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class=" font-weight-bold text-dark m-0">Santorini </h5>
                                        <h6 class="m-0 text-muted">Honeymoon Packages</h6>
                                    </div>
                                    <div class="card-header border p-2">
                                        <h5 class="text-right text-primary m-0">₹50,000</h5>
                                        <p class="text-right text-muted small m-0">Strating Price</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- DESKTOP VIEW END   -->
    <x-frontend.sections.mobile-view-pages />
    <div class="dpnr">
        <x-footer />
    </div>
@endsection

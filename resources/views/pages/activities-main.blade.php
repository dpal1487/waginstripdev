@extends('layouts.master')
@section('title','XYZ')
@section("body")
<!-- DESKTOP VIEW START  -->
<div class="container-fluid mb-4 p-0">
    <div id="" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="activities_bannerSections1"></div>
            </div>
            <div class="carousel-item">
                <div class="activities_bannerSections2"></div>
            </div>
            <div class="carousel-item">
                <div class="activities_bannerSections3"></div>
            </div>
            <div class="carousel-item">
                <div class="activities_bannerSections4"></div>
            </div>
            <div class="carousel-item">
                <div class="activities_bannerSections5"></div>
            </div>

        </div>
    </div>
</div>

<div class="container  p-0 activitesSearchBOxHead mb-5">
    <section class="pt-6p pb-20">
        <div class="container">
            <div class="card br-18">
                <form action="{{ route('search-hotel') }}" method="get">
                    <div class="card-body">
                        <div class="radiobox">
                            <span class="uptext">
                                <a href="#" class="link-color font-weight-bold h5">Book any kind of activities, tour or
                                    daytrip</a>
                            </span>
                        </div>
                        <div class="d-flex pt-10">
                            <div class="card col-lg-12 wd-25">
                                <div class="card-body hoverbg">
                                    <div class="searchtitle">DESTINATIONS</div>
                                    <select class="js-example-basic-single getLocation" name="departure"
                                        id="select2_departure" data-next="#select2_arrival">
                                        <option value="DEL">Delhi (DEL)</option>
                                    </select>
                                    <!-- <div class="slitxt">Indra Gandhi international Airport</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-10 pb-10">
                            <button type="submit" class="searchbtn  btn btn-lg" name="main-search-btn"
                                id="main-search-btn">SEARCH
                                <i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                </form>
            </div>
        </div>
    </section>
</div>

<div class="container mobileVes1 topHotel_sec2 mb-5" style="margin-top:100px;">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Most popular cities
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#toHotelMtt_chain" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#toHotelMtt_chain" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div id="toHotelMtt_chain" class="carousel mt-3 slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/delhi.jpg" alt="Card image cap"
                                    style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">DELHI</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/mumbai.jpg" alt="Card image cap"
                                    style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">MUMBAI</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/bangalore.jpg"
                                    alt="Card image cap" style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">BANGALORE</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/goa.jpg" alt="Card image cap"
                                    style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">GOA</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/chandigarh.jpg"
                                    alt="Card image cap" style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">CHANDIGARH</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/uttrakhand.jpg"
                                    alt="Card image cap" style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">UTTRAKHAND</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/dubai.jpg" alt="Card image cap"
                                    style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">DUBAI</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/singapore.jpg"
                                    alt="Card image cap" style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">SINGAPORE</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/srilanka.jpg"
                                    alt="Card image cap" style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">SRI LANKA</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/kerala.jpg" alt="Card image cap"
                                    style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">KERALA</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/nepal.jpg" alt="Card image cap"
                                    style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">NEPAL</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/switzerland.jpg"
                                    alt="Card image cap" style="height:130px;">
                                <div class="card-body">
                                    <h5 class="font-weight-bold m-0 text-center">SWITZERLAND</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="container mobileVes1 topHotel_sec2 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
            Top Activities
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#activities_cardSlider1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#activities_cardSlider1" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div id="activities_cardSlider1" class="carousel mt-3 slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/delhi.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/kerala.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/dubai.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/dubai.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/delhi.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/kerala.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/dubai.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/dubai.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/delhi.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/kerala.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/dubai.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p-3">
                        <a href="#">
                            <div class="card">
                                <img class="card-img-top" src="assets/images/activities/dubai.jpg" alt="Card image cap"
                                    style="height:200px;">
                                <div class="card-body p-4">
                                    <h5 class="card-title font-weight-bold">Mesmerizing Trek to Triund</h5>
                                    <p class="m-0 small text-secondary">Prices Starting</p>
                                    <h4 class="m-0 font-weight-bold">₹1,300</h4>
                                    <a href="#" class="btn btn-primary font-weight-bold float-right">Book Now</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container mobileVes1 topHotel_sec2 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Top Holiday Activities
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#activities_cardSlider12" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#activities_cardSlider12" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div class="container p-0">
        <div id="activities_cardSlider12" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/goa.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">GOA</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/andaman.jpg"
                                        alt="Card image" style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">ANDAMAN</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/london.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">LONDON</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/mumbai.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">MUMBAI</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/bangalore.jpg"
                                        alt="Card image" style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">BENGALURU</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/delhi.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">NEW DELHI</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/jaipur.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">JAIPUR</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/rishikesh.jpg"
                                        alt="Card image" style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">RISHIKESH</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/hyderabad.jpg"
                                        alt="Card image" style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">HYDERABAD</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/kolkata.jpg"
                                        alt="Card image" style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">KOLKATA</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-2">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/gurugram.jpg"
                                        alt="Card image" style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">GURUGRAM</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/chennai.jpg"
                                        alt="Card image" style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">CHENNAI</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/dubai.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">DUBAI</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/bali.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">BALI</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/phuket.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">PHUKET</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/bangkok.jpg"
                                        alt="Card image" style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">BANGKOK</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-2 mt-2">
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/1.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">PATTAYA</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/2.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">KUALA LUMPUR</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/3.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">SINGAPORE</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 p-3">
                            <a href="#">
                                <div class="card img-fluid">
                                    <img class="card-img-top" src="assets/images/activities/4.jpg" alt="Card image"
                                        style="width:100%; height:200px;">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title cardheadingstes  text-center">KRABI</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- <div class="container topHotel_sec2 mt-5 mb-5">
    
</div> -->



<div class="container-fluid mb-n2 p-0" style="background-color:#ddd;">
    <h1 class="font-weight-bold m-0 pt-4 text-center" style="font-size:28px;">Why Choose Activities </h1>
    <div class="container mobileVes1 mt-3">
        <p class=" m-0">A holiday is a day set aside by custom or  law on which normal activities are suspended or reduced, including business or work, including school. In general, public holidays are intended for people to celebrate or commemorate an event or tradition of cultural or religious significance. Holidays may be designated by governments, religious institutions, or other groups or organizations. The extent to which normal activities are reduced by a vacation may depend on local laws, customs, the type of work performed, or personal choices.

        </p>
        <p class="m-0 pt-3 pb-4">
            The concept of festivity often appears in connection with religious observances. The intention of the holidays was usually to allow people to perform religious duties associated with important calendar dates. In most modern societies, however, vacations serve as much of a recreational function as any other daytime or weekend activity.
            
        </p>
    </div>
</div>

<x-frontend.sections.mobile-view-pages />

<!-- Desktop End  -->
<div class="dpnr">
    <x-footer />
</div>
@endsection

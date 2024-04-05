@extends('layouts.master')
@section('title','XYZ')
@section("body")
<!-- DESKTOP VIEW START  -->

<div class="container-fluid cruiseBanner_sec p-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="cruise_backgroundSlider1"></div>
            </div>
            <div class="carousel-item">
                <div class="cruise_backgroundSlider2"></div>
            </div>
            <div class="carousel-item">
                <div class="cruise_backgroundSlider3"></div>
            </div>
            <div class="carousel-item">
                <div class="cruise_backgroundSlider4"></div>
            </div>
            <div class="carousel-item">
                <div class="cruise_backgroundSlider5"></div>
            </div>
            <div class="carousel-item">
                <div class="cruise_backgroundSlider6"></div>
            </div>
        </div>
    </div>
</div>

<div class="container p-0" style="margin-top:-270px; margin-bottom:100px;">
    <div class="card br-18 p-0">
        <form action="{{ route('search-hotel') }}" method="get">
            <div class="card-body">
                <div class="radiobox">
                    <span class="uptext">
                        <a href="#" class="link-color">Book Domestic and International Cruise</a>
                    </span>
                </div>
                <div class="d-flex pt-10">
                    <div class="card wd-25 m-2">
                        <div class="card-body hoverbg">
                            <div class="searchtitle">DESTINATIONS</div>
                            <select class="js-example-basic-single getLocation" name="departure" id="select2_departure"
                                data-next="#select2_arrival">
                                <option value="DEL">Delhi (DEL)</option>
                            </select>
                            <!-- <div class="slitxt">Indra Gandhi international Airport</div> -->
                        </div>
                    </div>
                    <div class="card wd-25 m-2">
                        <div class="card-body hoverbg">
                            <div id="id_startCalendar" class="calendar-widget default-today"
                                data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                <div class="input-wrapper">
                                    <div class="searchtitle"> DEPARTURE <i class="fa fa-chevron-down"
                                            aria-hidden="true"></i></div>
                                    <input class="date-field" id="type1-start" type="text" placeholder="CHECK-IN"
                                        name='departDate' readonly>
                                </div>
                                <div style="margin-left: -150px;" class="calendar-wrapper">
                                    <div class="dual-calendar">
                                        <div class="calendar">
                                            <div class="calendar-header">
                                                <div class="prev-btn">
                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                </div>

                                                <div class="month-text ">
                                                    <p>September 2018</p>
                                                </div>
                                            </div>
                                            <div class="calendar-body">
                                                <div class="date-table">
                                                    <div class="date-table-header">
                                                        <div class="day sunday">S</div>
                                                        <div class="day">M</div>
                                                        <div class="day">T</div>
                                                        <div class="day">W</div>
                                                        <div class="day">T</div>
                                                        <div class="day">F</div>
                                                        <div class="day saturday">S</div>
                                                    </div>
                                                    <div class="date-table-body">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calendar plus-one">
                                            <div class="calendar-header">
                                                <div class="month-text">
                                                    <p>September</p>
                                                </div>

                                                <div class="next-btn">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="calendar-body">
                                                <div class="date-table">
                                                    <div class="date-table-header">
                                                        <div class="day sunday">S</div>
                                                        <div class="day">M</div>
                                                        <div class="day">T</div>
                                                        <div class="day">W</div>
                                                        <div class="day">T</div>
                                                        <div class="day">F</div>
                                                        <div class="day saturday">S</div>
                                                    </div>
                                                    <div class="date-table-body">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card wd-25 m-2 hoverbg">
                        <div class="card-body">
                            <div id="id_deadlineCalendar" class="calendar-widget default-today-return" tabindex="-1"
                                data-link="#id_startCalendar" date-min="link">
                                <div class="input-wrapper" id="checkreturnradio">
                                    <div class="searchtitle"> RETURN <i class="fa fa-chevron-down"
                                            aria-hidden="true"></i></div>
                                    <input class="date-field" id="type1-deadline" name="returnDate" type="text"
                                        placeholder="CHECK-OUT" readonly>
                                </div>

                                <div style="margin-left: -150px" class="calendar-wrapper">
                                    <div class="dual-calendar abddjd">
                                        <div class="calendar">
                                            <div class="calendar-header">
                                                <div class="prev-btn">
                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                </div>

                                                <div class="month-text">
                                                    <p>September 2018</p>
                                                </div>
                                            </div>
                                            <div class="calendar-body">
                                                <div class="date-table">
                                                    <div class="date-table-header">
                                                        <div class="day sunday">S</div>
                                                        <div class="day">M</div>
                                                        <div class="day">T</div>
                                                        <div class="day">W</div>
                                                        <div class="day">T</div>
                                                        <div class="day">F</div>
                                                        <div class="day saturday">S</div>
                                                    </div>
                                                    <div class="date-table-body">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calendar plus-one">
                                            <div class="calendar-header">
                                                <div class="month-text">
                                                    <p>September</p>
                                                </div>

                                                <div class="next-btn">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="calendar-body">
                                                <div class="date-table">
                                                    <div class="date-table-header">
                                                        <div class="day sunday">S</div>
                                                        <div class="day">M</div>
                                                        <div class="day">T</div>
                                                        <div class="day">W</div>
                                                        <div class="day">T</div>
                                                        <div class="day">F</div>
                                                        <div class="day saturday">S</div>
                                                    </div>
                                                    <div class="date-table-body">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card wd-20 m-2 hoverbg">
                        <div class="card-body cursorp" onclick="togglePopup()">
                            <div class="searchtitle">Travellers <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div class="fnt20" id="total-travller"></div>

                        </div>
                        <div class="card content">
                            <div class="card-body">
                                <div class="fnt10">ADULTS(12y+)</div>
                                <div class="card">
                                    <div class="card-body">
                                        <label class="rdocon">
                                            <input type="radio" checked="checked" name="noOfAdults" value="1">
                                            <span class="checkmark">1</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfAdults" value="2">
                                            <span class="checkmark">2</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfAdults" value="3">
                                            <span class="checkmark">3</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfAdults" value="4">
                                            <span class="checkmark">4</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfAdults" value="5">
                                            <span class="checkmark">5</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfAdults" value="6">
                                            <span class="checkmark">6</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfAdults" value="7">
                                            <span class="checkmark">7</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfAdults" value="8">
                                            <span class="checkmark">8</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfAdults" value="9">
                                            <span class="checkmark">9</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="fnt10">CHILREN(2y - 12y)</div>
                                <div class="card">
                                    <div class="card-body">
                                        <label class="rdocon">
                                            <input type="radio" checked="checked" name="noOfChilds" value="0">
                                            <span class="checkmark">0</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfChilds" value="1">
                                            <span class="checkmark">1</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfChilds" value="2">
                                            <span class="checkmark">2</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfChilds" value="3">
                                            <span class="checkmark">3</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfChilds" value="4">
                                            <span class="checkmark">4</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfChilds" value="5">
                                            <span class="checkmark">5</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfChilds" value="6">
                                            <span class="checkmark">6</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfChilds" value="7">
                                            <span class="checkmark">6+</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="fnt10">INFANTS(below 2y)</div>
                                <div class="card">
                                    <div class="card-body">
                                        <label class="rdocon">
                                            <input type="radio" checked="checked" name="noOfInfants" value="0">
                                            <span class="checkmark">0</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfInfants" value="1">
                                            <span class="checkmark">1</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfInfants" value="2">
                                            <span class="checkmark">2</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfInfants" value="3">
                                            <span class="checkmark">3</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfInfants" value="4">
                                            <span class="checkmark">4</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfInfants" value="5">
                                            <span class="checkmark">5</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfInfants" value="6">
                                            <span class="checkmark">6</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="noOfInfants" value="7">
                                            <span class="checkmark">6+</span>
                                        </label>
                                    </div>
                                </div>

                                <div>

                                    <div class="float-right">
                                        <button type="button" id="travller-btn"
                                            class="btn btn-sm btn-info px-2 custm-btn-responsive"
                                            onclick="togglePopup()">Apply</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-10 pb-10">
                    <button type="submit" class="searchbtn btn btn-lg" name="main-search-btn"
                        id="main-search-btn">SEARCH
                        <i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container mobileVes1 bestDeal_sect525 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Best Offers Cruise Packages
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#bestholid_packSecsOfer12" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#bestholid_packSecsOfer12" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="bestholid_packSecsOfer12" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/53.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/54.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/55.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/56.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/57.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/58.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/59.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/60.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/holiday-9.jpg" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mobileVes1 bestDeal_sect525 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Top Most Cruise Packages
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#bestholid_packSecsOfer19" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#bestholid_packSecsOfer19" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="bestholid_packSecsOfer19" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img2.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="{{ url('cruise-package-type') }}"
                                            class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img3.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img4.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img5.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img6.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img7.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img9.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img10.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/img11.jpg" class="card-img-top" style="height:200px;"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
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

<div class="container mobileVes1 bestDeal_sect525 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Special Cruise Holiday Pacakages
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#bestholid_packSecsOfer20" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#bestholid_packSecsOfer20" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="bestholid_packSecsOfer20" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-1.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-2.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-3.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-4.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-5.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-6.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-7.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-9.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 p-2">
                                <div class="card">
                                    <img src="assets/images/cruise/cruise-8.jpg" class="card-img-top"
                                        style="height:200px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title m-0">SUNDOWNER TO GOA</h5>
                                        <p class="m-0 text-primary">7N/8D</p>
                                        <h6 class="float-left">Starting Price: <span class="suppersar"
                                                style="font-size:25px;">₹17999</span></h6>
                                        {{-- <a href="#" class="float-right font-weight-bold text-primary">View Details</a> --}}
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

<x-frontend.sections.cruise-offer />

<x-frontend.sections.mobile-view-pages/>

<!---- Desktop And View -------->

<div class="dpnr">
    <x-footer />
</div>
@endsection

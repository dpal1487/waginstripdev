@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->
<div class="container-fluid mb-4 p-0">
    <div id="" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="holidays_bannerSection1"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection2"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection3"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection4"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection5"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection6"></div>
            </div>
        </div>
    </div>
</div>

<div class="container p-0" style="margin-top:-350px; margin-bottom:100px;">
    <div class="card br-18 p-0">
        <form action="{{ route('search-hotel') }}" method="get">
            <div class="card-body">
                <div class="radiobox">
                    <span class="uptext">
                        <a href="#" class="link-color">Holiday </a>
                    </span>
                </div>
                <div class="d-flex pt-10">
                    <div class="card wd-55 hoverbg">
                        <div class="card-body">
                            <div class="searchtitle">DESTINATION</div>
                            <select class="js-example-basic-single getLocation" name="state">
                                <option value="DEL">United Arab Emirates</option>
                            </select>
                            <div class="slitxt">Accepting online application</div>
                        </div>
                    </div>
                    <div class="card wd-25 ">
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
                    <div class="card wd-25 hoverbg">
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

                    <div class="card wd-20 hoverbg">
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

<div class="container">
    <h1 class="font-weight-bold m-0">Best-Selling Deals in Maldives!</h1>
    <h5 class="m-0 text-muted">(10 Packages)</h5>
    <h5 class="font-weight-bold m-0 pt-2">The ultimate holiday deals to the island of Maldives, created by XYZ!
    </h5>
</div>

<div class="container holidayFilter_1 mt-5 mb-5">
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

<div class="container holidayFilter_1 mt-5 mb-5">
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

<div class="container holidayFilter_1 mt-5 mb-5">
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


<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection

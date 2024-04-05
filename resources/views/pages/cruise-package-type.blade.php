@extends('layouts.master')
@section('title','XYZ')
@section("body")
<!-- DESKTOP VIEW START  -->
<style>
        /*width: 346px;*/
</style>

<div class="container-fluid cruiseBanner_sec p-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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

<div class="container p-0" style="margin-top:-330px; margin-bottom:80px;">
    <div class="card br-18 p-0">
        <form action="{{ route('search-hotel') }}" method="get">
            <div class="card-body">
                <div class="radiobox">
                    <span class="uptext">
                        <a href="#" class="link-color">Book Domestic and International Cruise</a>
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

<div class="container-fluid mt-n1 mb-5 criseslidser">
    <div class="container p-0">
        <div class="card pb-2 border-0" style="background-color: transparent;">
            <div class="row p-3">
                <div class="col-sm-2">
                    <label for="customRange1" class="form-label">Location</label>
                    <select class="form-control" name="" id="">
                        <option selected>Select Location</option>
                        <option value="Africa">Africa</option>
                        <option value="Pacific">Pacific</option>
                        <option value="Australia">Australia</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Canada">Canada</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="customRange1" class="form-label">Nights</label>
                    <select class="form-control" name="" id="">
                        <option selected>Select Nights</option>
                        <option value="Africa">3 Night 4 Day</option>
                        <option value="Pacific">7 Night 8 Day</option>
                        <option value="Australia">10 Night 11 Day</option>
                        <option value="Bahamas">11 Night 12 Day</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="customRange1" class="form-label">Select Cruise Line</label>
                    <select class="form-control" name="" id="">
                        <option selected>Select Cruise</option>
                        <option value="Africa">Royal Caribbean International </option>
                        <option value="Pacific">Princes Cruises</option>
                        <option value="Australia">Norwegian Cruise Line</option>
                        <option value="Bahamas">Holland America Line</option>
                        <option value="Bermuda">Dream Cruises</option>
                        <option value="Canada">Disney Cruise Line</option>
                        <option value="Canada">Cordelia Cruises</option>
                        <option value="Canada">Celebrity Cruises</option>
                        <option value="Canada">Carnivel Cruise Line</option>
                        <option value="Canada">Angriga Cruise</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="customRange1" class="form-label">Date of Travels</label>
                    <input class="form-control" type="date" id="birthday" name="birthday">
                </div>
                <div class="col-sm-1">
                    <label for="customRange1" class="form-label">Adult</label>
                    <select class="form-control" name="" id="">
                        <option selected>Select Adult</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="10">11</option>
                        <option value="10">12</option>
                        <option value="10">13</option>
                        <option value="10">14</option>
                        <option value="10">15</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <label for="customRange1" class="form-label">Child</label>
                    <select class="form-control" name="" id="">
                        <option selected>Select Child</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="10">11</option>
                        <option value="10">12</option>
                        <option value="10">13</option>
                        <option value="10">14</option>
                        <option value="10">15</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="customRange1" class="form-label"></label>
                    <a href="#" class="btn btn-primary card mt-2">Search</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container mt-5 mb-5 p-0">
    <div class="row p-2">
        <div class="col-sm-12">
            <div class="card p-3" style="background-color:#eee;">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Delhi
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Mumbai
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">

                                <label for="customRange1" class="form-label">Price</label>
                                <select class="form-control" name="" id="">
                                    <option value="price">price</option>
                                    <option value="price">10,000</option>
                                    <option value="price">10,000</option>
                                    <option value="price">20,000</option>
                                    <option value="price">30,000</option>
                                    <option value="price">50,000</option>
                                    <option value="price">1,00,000</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="customRange1" class="form-label">Search</label>
                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container flight_sliderOffers  mb-5">
    <div class="row">
        <div class="col-sm-4">
            <div class="card border-0 p-3">
                <img src="assets/images/cruise/cruise-1.jpg" alt="">
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card border-0 p-3">
                <h5 class="m-0 font-weight-bold">Sundowner To Goa</h5>
                <h6 class="m-0 pt-2 font-weight-bold"><i class="fa fa-moon-o" aria-hidden="true"></i> 3 Nights</h6>
                <h6 class="m-0 pt-2 small font-weight-bold"><i class="fa fa-ship" aria-hidden="true"></i> <span
                        class="text-secondary font-weight-normal">Departing from:</span> Mumbai </h6>
                <h6 class="m-0 pt-2 small"><i class="fa fa-map-marker " aria-hidden="true"></i>
                    <span class="text-secondary font-weight-normal">Start:</span> Mumbai (port of
                    departure) > Mumbai > Goa > Mumbai
                </h6>
                <h6 class="m-0 pt-2 small"><i class="fa fa-map-marker " aria-hidden="true"></i>
                    <span class="text-secondary font-weight-normal">End:</span> Mumbai (port of arrival)
                </h6>
                <h6 class="m-0 pt-2 small"><i class="fa fa-clock-o" aria-hidden="true"></i>
                    <span class="text-secondary font-weight-normal">Departing Date & Time:</span> 18:00
                </h6>
                <h6 class="m-0 pt-2 small"><i class="fa fa-clock-o" aria-hidden="true"></i>
                    <span class="text-secondary font-weight-normal">Arrival Date & Time:</span> 08:00
                </h6>
                <h6 class="m-0 pt-2 small"><i class="fa fa-info-circle" aria-hidden="true"></i>
                    <span class="text-secondary font-weight-normal">Other:</span> Family with Kids, Family
                    with Teens, Gourmet, Honeymoon, Luxury, Romantic, Senior, Wedding
                </h6>

            </div>
        </div>
        <div class="col-sm-12 border-top">
            <div class="card p-3 border-0">
                <div class="row">
                    <div class="col-sm-3 p-2">
                        <a href="#" class="btn btn-primary fa fa-envelope-o"> Want us to call you?</a><br>
                        <label for="customRange1" class="form-label mt-2">Departure Date</label>
                        <select class="form-control font-weight-bold" name="" id="">
                            <option selected>Departure Date</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                            <option value="date">10-04-2022</option>
                        </select>
                    </div>
                    <div class="col-sm-9 p-2">
                        <p class="m-0 text-right small text-secondary">Starting Price / Per Couple</p>
                        <h4 class="m-0 text-right font-weight-bold">₹ 64,147</h4>
                        <p class="m-0 text-right small text-secondary">* Plus taxes & charges</p>
                        <a href="{{url('cruise-view-deatils')}}" class="btn btn-primary float-right mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-frontend.sections.cruise-offer/>

<div class="container-fluid criseslidser pt-1 mb-n2">
    <div class="container p-0 mb-1 mt-5">
        <h3 class="m-0 text-center font-weight-bold">Cruise Deals By Destination</h3>
        <hr style="width:200px; height:2px; border:none; background-color:#000;">
        <div class="row p-4">
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center "> Indian Ocean
                    </h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center ">Lakshadweep </h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Kochi</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">GOA</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Mumbai</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Srilanka</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center ">Africa</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Alaska</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Asia Pacific</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Australia</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Bahamas</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Canada</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Caribbean</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Europe</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Hawaii</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Mexican Riviera</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">Other Products</h6>
                </div>
            </div>
            <div class="col-sm-2 p-2">
                <div class="card card_hoverSecs p-3">
                    <h6 class="m-0 text-center">South America</h6>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <script>
    $('.btn-number').click(function (e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function () {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function () {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

</script> -->

<!---- Desktop And View -------->
<div class="borderbotum"></div>
{{-- <x-footer-tag /> --}}
  <div class="dpnr">
        <x-footer />
    </div>
    <div class="container-fluid bg-darksar p-0">
        <div class="container mobileVes1 marthide pt-5 pb-3 text-white">
            <h6 class="font-weight-bold"> Our Products </h6>
            <ul class="list-unstyled listed_links">
                <li><a href="https://wagnistrip.us">Flight</a></li>
                <li><a href="https://wagnistrip.us/hotels">Hotel</a></li>
                <li><a href="https://wagnistrip.us/holidays">Holiday</a></li>
                <li><a href="https://wagnistrip.us/cruise">Cruise</a></li>
                <li><a href="https://wagnistrip.us/visa">Visa</a></li>
                <li><a href="https://wagnistrip.us/about-pages">About Us</a></li>
                <li><a href="https://wagnistrip.us/careerspages">Careers</a></li>
                <li><a href="https://wagnistrip.us/contact">Contact Us</a></li>
                <li><a href="https://wagnistrip.us/terms-and-conditions">Terms and Conditions</a></li>
                <li><a href="https://wagnistrip.us/user-agreement">User Agreement</a></li>
                <li><a href="https://wagnistrip.us/privacy-policy">Privacy Policy</a></li>
                <li><a href="https://wagnistrip.us/activities-main">Activities Tours</a></li>
                <li><a href="https://wagnistrip.us/blog-page">Blog</a></li>
            </ul>
        </div>
    </div>
@endsection

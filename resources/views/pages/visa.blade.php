@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="container-fluid p-0">
    <div id="" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="visa_bannerSection1"></div>
            </div>
            <div class="carousel-item">
                <div class="visa_bannerSection2"></div>
            </div>
            <div class="carousel-item">
                <div class="visa_bannerSection3"></div>
            </div>
            <div class="carousel-item">
                <div class="visa_bannerSection4"></div>
            </div>
            <div class="carousel-item">
                <div class="visa_bannerSection5"></div>
            </div>

        </div>
    </div>
</div>

<div class="container mb-5" style="margin-top:-280px;">
    <div class="card br-18">
        <form action="{{ route('search-hotel') }}" method="get">
            <div class="card-body">
                <div class="radiobox">
                    <span class="uptext">
                        <a href="#" class="link-color">Visa </a>
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
<div class="container-fluid p-0 visa_sectionsback1" style="">
    <h5 class="text-center font-weight-bold m-0 pt-5 pb-2">We provide fast & Convenient</h5>
    <h1 class="text-center  m-0 pb-2 font-weight-bold"> Visa & Immigration services</h1>
    <div class="container mobileVes1 mt-3 pb-5">
        <div class="box">
            <div class="container">
                <div class="row">
                   <a href="#main-frm"> <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <!-- <i class="fa fa-instagram " aria-hidden="true"></i> -->
                        <i class="fa fa-calendar-check-o fa-4x text-primary" aria-hidden="true"></i>
                        <div class="title">
                           <a href="#main-frm" class="text-dark"> <h4 class="m-0 pt-3 font-weight-bold">Book an Appointment</h4></a>
                        </div>
                        <div class="text">
                            <span>Schedule your appointment with us </span>
                        </div>
                    </div>
                </div></a>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="box-part text-center">
                            <i class="fa fa-user-o fa-4x text-primary" aria-hidden="true"></i>
                            <div class="title">
                                <h4 class="m-0 pt-3 font-weight-bold">Immigration Experts</h4>
                            </div>
                            <div class="text">
                                <span>An immigration consultant is the one who helps people to emigrate from one country to another country.</span>
                            </div>
                        </div>
                    </div>
                   <a href="{{ url('registration-form') }}"> <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fa fa-pencil-square-o text-primary  fa-4x" aria-hidden="true"></i>
                        <div class="title">
                            <a class="text-dark" href="{{ url('registration-form') }}">
                                <h4 class="m-0 pt-3 font-weight-bold">Apply Online Visa</h4>
                            </a>
                        </div>
                        <div class="text">
                            <span> Find information and begin your application </span>
                        </div>
                    </div>
                </div></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid backgrondImagesVIsasss">
    <h5 class="text-center font-weight-bold text-white m-0 pt-5 pb-2">OUR PROVIDED SERVICES</h5>
    <h3 class="text-center  m-0 pb-2 text-white">Ensure 100% secure</h3>
    <h1 class="text-center  m-0 pb-2 text-white font-weight-bold">Visa For You</h1>
    <div class="container mobileVes1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-intrvel="300">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner pb-3">
                <div class="carousel-item active">
                    <div class="box">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center" style="height:300px;">
                                        <i class="fa fa-briefcase fa-4x text-primary" aria-hidden="true"></i>
                                        <div class="title">
                                            <h4 class="m-0 pt-3 font-weight-bold">Business Visa</h4>
                                        </div>
                                        <div class="text">
                                            <span>
                                                A business visa is a type of travel authorization that allows an individual to visit a foreign nation for the purpose of conducting business.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center" style="height:300px;">
                                        <i class="fa fa-graduation-cap fa-4x text-primary" aria-hidden="true"></i>
                                        <div class="title">
                                            <h4 class="m-0 pt-3 font-weight-bold">Student Visa</h4>
                                        </div>
                                        <div class="text">
                                            <span>
                                                A student visa is an endorsement that is added to a government passport, which permits foreign students to study abroad.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center" style="height:300px;">
                                        <i class="fa fa-globe text-primary  fa-4x" aria-hidden="true"></i>
                                        <div class="title">
                                            <h4 class="m-0 pt-3 font-weight-bold">Tourist Visa</h4>
                                        </div>
                                        <div class="text">
                                            <span>
                                                A tourist visa that allows you to visit a country for a short time on holiday.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="box">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center" style="height:300px;">
                                        <!-- <i class="fa fa-instagram " aria-hidden="true"></i> -->
                                        <i class="fa fa-pencil-square-o fa-4x text-primary" aria-hidden="true"></i>
                                        <div class="title">
                                            <h4 class="m-0 pt-3 font-weight-bold">Transit Visa</h4>
                                        </div>
                                        <div class="text">
                                            <span>
                                                A Transit visa allows a person to go through one country while traveling to another country.

                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center" style="height:300px;">
                                        <i class="fa fa-handshake-o fa-4x text-primary" aria-hidden="true"></i>
                                        <div class="title">
                                            <h4 class="m-0 pt-3 font-weight-bold">Work Permit Visa</h4>
                                        </div>
                                        <div class="text">
                                            <span>
                                                A work visa is an official stamp in your passport authorizing you to work in that country for a specified time period.

                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center" style="height:300px;">
                                        <i class="fa fa-user-md text-primary  fa-4x" aria-hidden="true"></i>
                                        <div class="title">
                                            <h4 class="m-0 pt-3 font-weight-bold">Medical Visa</h4>
                                        </div>
                                        <div class="text">
                                            <span>
                                                Medical visa refers to people traveling abroad to obtain medical treatment
                                            </span>
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

<div class="container mobileVes1 mobilssers p-0">
    {{-- <h5 class="text-center font-weight-bold m-0 pt-5 pb-2">CHOOSE COUNTRY</h5> --}}
    <h1 class="text-center  mt-4 pb-2 font-weight-bold">Country Visa!</h1>
    <div class="card border-0 p-3 mt-1">
        <div class="row btnssreser">
            <div class="col-sm-6">
                <h1 class="float-left font-weight-bold" style="font-size:28px;">

                </h1>
            </div>
            <div class="col-sm-6">
                <div class="offersButtons_12 mt-0">
                    <span href="#visa_sliderCuntry1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></span>
                    <span href="#visa_sliderCuntry1" role="button" data-slide="next"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 mx-auto">
                <div id="visa_sliderCuntry1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/th-1.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">Thailand</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/France.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">France</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/unitedstate.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">United States</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/unitedkingdom.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">United Kingdom</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/china.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">China</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/italy.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">Italy</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/germany.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">Germany</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/austraila.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">Australia</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/russia.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">Russia</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/canada.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">Canada</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/Greece.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">Greece</h4>
                                            </div>
                                        </div>
                                    {{-- </a> --}}
                                </div>
                                <div class="col-sm-3 p-2">
                                    {{-- <a href="#"> --}}
                                        <div class="card shadow" style="border: none">
                                            <img class="card-img-top" src="assets/images/visa/japan.jpg"
                                                alt="Card image cap" style="height:200px;">
                                            <div class="card-body">
                                                <h4 class="font-weight-bold text-center text-dark">Japan</h4>
                                            </div>
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
</div>

<div id="main-frm">
<div class="container mobileVes1 visa_sectionsback mt-5 mb-5">
    <h3 class="font-weight-bold text-center pb-2"> Book an Appointment</h3>
    <div class="row">
        <div class=" col-lg-12 p-2">
            <div class="card mt-2 text-white mx-auto p-4" style="  background-color: transparent; color:#000 !important; border:none;">
                <div class="card-body">
                    <div class="container">
                        <form id="contact-form" role="form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">First Name *</label>
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                placeholder="Please enter your firstname *" required="required"
                                                data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Last Name *</label> <input
                                                id="form_lastname" type="text" name="surname" class="form-control"
                                                placeholder="Please enter your lastname *" required="required"
                                                data-error="Lastname is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email *</label> <input
                                                id="form_email" type="email" name="email" class="form-control"
                                                placeholder="Please enter your email *" required="required"
                                                data-error="Valid email is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Mobile *</label> <input
                                                id="form_email" type="email" name="email" class="form-control"
                                                placeholder="Please enter your mobile *" required="required"
                                                data-error="Valid email is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Please select your visa</label>
                                            <select id="form_need" name="need" class="form-control" required="required"
                                                data-error="Please select your visa.">
                                                <option value="" selected disabled>Choose Visa</option>
                                                <option>Business Visa </option>
                                                <option>Tourist Visa</option>
                                                <option>Transit Visa</option>
                                                <option>Medical Visa</option>
                                                <option>Work Permit Visa</option>
                                                <option>Student Visa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Message *</label> <textarea
                                                id="form_message" name="message" class="form-control"
                                                placeholder="Write your message here." rows="4" required="required"
                                                data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit"
                                            class="btn  btn-primary btn-send pt-2 btn-block " value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div>
    </div>
</div>
</div>

<x-frontend.sections.mobile-view-pages/>
<!-- DESKTOP VIEW END   -->
<div class="dpnr">
    <x-footer />
</div>
@endsection

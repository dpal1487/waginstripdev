@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->
<!-- end desktop view -->

<div class="container-fluid p-0" style="height:500px;">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hotelBanner_1"></div>

            </div>
            <div class="carousel-item">
                <div class="hotelBanner_2"></div>
            </div>
            <div class="carousel-item">
                <div class="hotelBanner_3"></div>
            </div>
        </div>
    </div>
</div>

<section class="pt-6p pb-20" style="margin-top:-450px;">
    <div class="container">
        <div class="card br-18">
            <form action="{{ route('search-hotel') }}" method="get">
                <div class="card-body">
                    <div class="radiobox">
                        <span class="uptext">
                            <a href="#" class="link-color">Book Domestic and International hotels and homestays. To
                                list your property</a>
                        </span>

                    </div>
                    <div class="d-flex pt-10">
                        <div class="card wd-35">
                            <div class="card-body">
                                <div class="searchtitle">CITY/HOTEL</div>
                                <select class="js-example-basic-single getLocation" name="state" id="cityhotalbuildingarea">
                                    <option value="DEL">Delhi (DEL)</option>
                                </select>
                                <div class="slitxt" id="country_name">India</div>
                            </div>
                        </div>

                        <div class="card wd-25">
                            <div class="card-body">
                                <div id="id_startCalendar" class="calendar-widget default-today"
                                    data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                    <div class="input-wrapper">
                                        <div class="searchtitle"> CHECK-IN <i class="fa fa-chevron-down"
                                                aria-hidden="true"></i></div>
                                        <input class="date-field" id="type1-start" type="text"
                                            placeholder="CHECK-IN" name='departDate' readonly>
                                    </div>
                                    <div style="margin-left: -150px;" class="calendar-wrapper">
                                        <div class="dual-calendar">
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
                        <div class="card wd-25">
                            <div class="card-body">
                                <div id="id_deadlineCalendar" class="calendar-widget default-today-return" tabindex="-1"
                                    data-link="#id_startCalendar" date-min="link">
                                    <div class="input-wrapper" id="checkreturnradio">
                                        <div class="searchtitle"> CHECK-OUT <i class="fa fa-chevron-down"
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



                        <div class="card wd-15">
                            <div class="card-body cursorp" onclick="togglePopupHotel()">
                                <div class="searchtitle"> ROOMS & GUESTS <i class="fa fa-chevron-down"
                                        aria-hidden="true"></i></div>
                                <span class="font25" id="total_room"> 1 </span> <span class="slitxt">Rooms</span>
                                <span class="font25" id="total_guest"> 1 </span> <span class="slitxt">Guests</span>
                            </div>
                            <div class="card content-hotel" id="accordion">
                                <div class="card-header" id="headingOne">
                                    <div class="fontsizehotel14">ROOMS 1 </div>
                                    <div class="fnt10">ADULTS 1</div>
                                    <button type="button" class="btn btn-sm btn-primary float-right htlarrowclass"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <i class="fa fa-arrow-down"></i>
                                    </button>
                                </div>
                                <input type="hidden" name="room" value="1">
                                <input type="hidden" id="room_count" value="1">
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="fnt10">ADULTS(12y+)</div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="rdocon bshadow">
                                                <input type="radio" checked="checked" name="adult" value="1">
                                                <span class="checkmark">1</span>
                                            </label>
                                            <label class="rdocon bshadow">
                                                <input type="radio" name="adult" value="2">
                                                <span class="checkmark">2</span>
                                            </label>
                                            <label class="rdocon bshadow">
                                                <input type="radio" name="adult" value="3">
                                                <span class="checkmark">3</span>
                                            </label>
                                            <label class="rdocon bshadow">
                                                <input type="radio" name="adult" value="4">
                                                <span class="checkmark">4</span>
                                            </label>
                                            <label class="rdocon bshadow">
                                                <input type="radio" name="adult" value="5">
                                                <span class="checkmark">5</span>
                                            </label>
                                            <label class="rdocon bshadow">
                                                <input type="radio" name="adult" value="6">
                                                <span class="checkmark">6</span>
                                            </label>
                                            <label class="rdocon bshadow">
                                                <input type="radio" name="adult" value="7">
                                                <span class="checkmark">7</span>
                                            </label>
                                            <label class="rdocon bshadow">
                                                <input type="radio" name="adult" value="8">
                                                <span class="checkmark">8</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="fnt10">CHILREN(2y - 12y)</div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="rdocon">
                                                <input type="radio" checked="checked" name="child" value="0">
                                                <span class="checkmark">0</span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="child" value="1">
                                                <span class="checkmark">1</span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="child" value="2">
                                                <span class="checkmark">2</span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="child" value="3">
                                                <span class="checkmark">3</span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="child" value="4">
                                                <span class="checkmark">4</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input_fields_wrap"> </div>
                                <div class="card-footer clearfix">
                                    <button type="button"
                                        class="btn btn-sm btn-outline-primary float-left add_field_button"> + ADD
                                        ANOTHER
                                        ROOM</button>
                                    <button type="button" onclick="togglePopupHotel()"
                                        class="btn-sm btn-primary ml-5">
                                        Done </button>
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
            </form>
        </div>
    </div>
</section>
<div class="container mobileVes1 hotel_offerssect">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Exclusive Hotels Offers Deals
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#hotelOffer_sec1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#hotelOffer_sec1" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div id="hotelOffer_sec1" class="carousel slide mt-3 mb-3" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-4 p-3">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/29.png" style="height:180px;" alt="" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                                >
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-3">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/30.png" style="height:180px;" alt=""onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                                >
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-3">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/31.png" style="height:180px;" alt=""onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                                >
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-4 p-3">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/35.png" style="height:180px;" alt=""onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                                >
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-3">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/36.png" style="height:180px;" alt=""onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                                >
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-3">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/37.png" style="height:180px;" alt="" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                                >
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>





<div class="container mobileVes1 type_ofHotelsroom mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Browse By Property Type
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#hotel_types2" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#hotel_types2" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div id="hotel_types2" class="carousel slide mt-2 mb-3" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-3 p-3">
                        {{-- <a href="{{ url('/login') }}"> --}}
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/hotel/h1.jpg"  alt="">
                                <div class="card-body">
                                    <h5 class="m-0 text-dark hhstsmshol font-weight-bold">Hotel</h5>
                                    <p class="m-0 small">8000+ Hotels</p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-3 p-3">
                        {{-- <a href="{{ url('/login') }}"> --}}
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/hotel/aprt1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="m-0 text-dark hhstsmshol font-weight-bold">Apartments</h5>
                                    <p class="m-0 small">5000+ Hotels</p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-3 p-3">
                        {{-- <a href="{{ url('/login') }}"> --}}
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/hotel/rest1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="m-0 text-dark hhstsmshol font-weight-bold">Resorts</h5>
                                    <p class="m-0 small">6000+ Hotels</p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-3 p-3">
                        {{-- <a href="{{ url('/login') }}"> --}}
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/hotel/vil1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="m-0 text-dark hhstsmshol font-weight-bold">Villas</h5>
                                    <p class="m-0 small">2000+ Hotels</p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-3 p-3">
                        {{-- <a href="{{ url('/login') }}"> --}}
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/hotel/galm1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="m-0 text-dark hhstsmshol font-weight-bold">Glamping</h5>
                                    <p class="m-0 small">8000+ Hotels</p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-3 p-3">
                        {{-- <a href="{{ url('/login') }}"> --}}
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/hotel/camp1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="m-0 text-dark hhstsmshol font-weight-bold">Cabins</h5>
                                    <p class="m-0 small">5000+ Hotels</p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-3 p-3">
                        {{-- <a href="{{ url('/login') }}"> --}}
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/hotel/holihm1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="m-0 text-dark hhstsmshol font-weight-bold">Holiday Homes</h5>
                                    <p class="m-0 small">6000+ Hotels</p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-3 p-3">
                        {{-- <a href="{{ url('/login') }}"> --}}
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/hotel/serviceaprt.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="m-0 text-dark hhstsmshol font-weight-bold">Serviced Apartments</h5>
                                    <p class="m-0 small">2000+ Hotels</p>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--<div class="container mobileVes1 mostBeauty_12 mt-5 mb-5">
    <div class="row mb-3">
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/hotel/hotel7.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="m-0 pl-2 font-weight-bold">Beachside Escapes</h6>
                    {{-- <p class="m-0 pl-2">For a dash of luxury</p> --}}
                    {{-- <a href="#" class="badge text-primary pl-2 badge-light">Read More</a> --}}
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/hotel/hotel10.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="m-0 pl-2 font-weight-bold">Nature Getaway</h6>
                    {{-- <a href="#" class="badge text-primary pl-2 badge-light">Read More</a> --}}
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/hotel/hotel11.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="m-0 pl-2 font-weight-bold">Wellness Wonderlands</h6>
                    {{-- <p class="m-0 pl-2">For a dash of luxury</p> --}}
                    {{-- <a href="#" class="badge text-primary pl-2 badge-light">Read More</a> --}}
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/hotel/hotel12.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="m-0 pl-2 font-weight-bold">Hilly Hideways</h6>
                    {{-- <p class="m-0 pl-2">For a dash of luxury</p> --}}
                    {{-- <a href="#" class="badge text-primary pl-2 badge-light">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container mobileVes1 topHotel_sec2 mt-5 mb-5">
    <section class="pt-3 pb-3">
        <div class="container p-0">
            <div class="row btnssreser">
                <div class="col-12">
                    <h3 class="mb-3 font-weight-bold float-left">Explore Hotels</h3>
                    <div class="offersButtons_12 float-right mt-0">
                        <span href="#carouselExampleIndicators2" role="button" data-slide="prev"><i
                                class="fa fa-angle-left" aria-hidden="true"></i></span>
                        <span href="#carouselExampleIndicators2" role="button" data-slide="next"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row p-2">
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/hotel7.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">GOA
                                                    </h5>
                                                    {{-- <p class="card-text text-center m-0">Starting at ₹1000</p> --}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/hotel17.png"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        DELHI</h5>
                                                    {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/hotel13.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        MUMBAI</h5>
                                                     {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/bang.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title  htslmrhr text-center m-0 font-weight-bold">
                                                        BANGALORE
                                                    </h5>
                                                    {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-2">
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/hotel14.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        KOLKATA</h5>
                                                    {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/dubai.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        DUBAI</h5>
                                                     {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/bangkok.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        BANGKOK</h5>
                                                    {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/singapor.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        SINGAPORE
                                                    </h5>
                                                   {{--<p class="card-text  text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-2">
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/himachal.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        HIMACHAL
                                                    </h5>
                                                    {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/haridwar.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        UTTARAKHAND
                                                    </h5>
                                                    {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/Kashmir.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">JAMMU &
                                                        KASHMIR</h5>
                                                     {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 p-2 mb-3">
                                        <a href="#">
                                            <div class="card">
                                                <img class="card-img-top" src="assets/images/hotel/kerala.jpg"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title htslmrhr text-center m-0 font-weight-bold">
                                                        KERALA</h5>
                                                     {{--<p class="card-text text-center m-0">Starting at ₹1000</p>--}}
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
        </div>
    </section>
</div>

<div class="container mobileVes1 topHotel_sec2 topHotel_sec3 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Top Hotels on XYZ
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
    <div id="toHotelMtt_chain" class="carousel mt-3 slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/1.png" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/2.png" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/3.jpg" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/4.png" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/5.jfif" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/6.png" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/7.jpg" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/9.png" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/10.png" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/11.png" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/12.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2 p-2">
                        {{-- <a href="#"> --}}
                            <div class="card">
                                <img src="assets/images/logohotel/13.jpg" alt="">
                            </div>
                        {{-- </a> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid pt-4" style="background-color: #e4e8ed;">
    <div class="container mobileVes1">
        <h5 class="text-center fsstser font-weight-bold">FAQ</h5>
        <div class="row mt-4">
            <div class="col-sm-6">
                <h6 class="font-weight-bold">
                    Q. How to make a Hotel booking with Wagnistrip ?
                </h6>
                <p class="small">
                    <strong></strong> Wagnistrip offers hotel bookings all over the world at affordable rates. If you're travelling
                    within India or out of the country and seeking hotels, we've covered you. Hotels are an essential
                    aspect of every trip, and, if it is not handled properly, your trip is bound to be uproar! This is
                    why it is important to be aware of this when Book hotels on-line

                    To make hotel reservations on the internet all you need do is access XYZ’s website, enter
                    the required information and you'll get the most appropriate options. By our services you will make
                    your search more efficient and select the one that best meets your requirements.
                </p>
            </div>
            <div class="col-sm-6">
                <h6 class="font-weight-bold">
                    Q. How to search the best hotel near my location?
                </h6>
                <p class="small">
                    <strong></strong> XYZ provides you the best hotel in your location. Go to XYZ's website and type
                    your location. A variety of hotels will be listed. You can tailor your search according to your
                    requirements. You can then book the hotel according to your needs.
                </p>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6">
                <h6 class="font-weight-bold">
                    Q. How to find the under Budget Hotel Near me?
                </h6>
                <p class="small">
                    <strong></strong> wagnistrip provides a easy hotel booking procedure at the best rates. Go to XYZ's
                    website and type the name of the city, the room requirements in "hotels and the other details. A
                    variety of hotels from luxury to budget hotels will be listed. You can tailor your search according
                    to the price range, star classification location, star category and other pertinent filters. You can
                    then book the ideal hotel according to your needs.Multiple promotions and discounts are also available to you.
                </p>
            </div>
            <div class="col-sm-6">
                <h6 class="font-weight-bold">
                    Q. How can I get best deals & offers?
                </h6>
                <p class="small">
                    <strong></strong> There are lots of deals & offers for booking hotels online through XYZ. While all of
                    them are only valid for a specific time period, therefore, it is recommended to look over the
                    current deals before making a reservation at the hotel. The latest offers are listed on the hotel's
                    page of the wagnistrip website.
                </p>
            </div>
        </div>
    </div>

</div>

// model form


<div id="id01" class="modal bg-transparent" >
    <div class="container" style="margin-left: 600px; margin-top: 400px;">
        <div class="row">
            <div class="col-sm-6">
 <form class="modal-content animate" action="/action_page.php" method="post">
<div class="imgcontainer">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
</div>

<div class="container marobirars">
        
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-10 col-lg-8 pb-5">
            <!--Form with header-->
            <form action="" method="">
                <div class="card border-0 rounded-0">
                    <div class="card-header p-0">
                        <div class=" text-center py-2">
                            <p class="m-0 text-dark" style="font-weight: bold; font-size:25px">Sign up</p>
                        </div>
                    </div>
                    <div class="card-body p-3">

                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-phone-square text-info" aria-hidden="true"></i></div>
                                </div>
                                <input type="number" class="form-control" id="nombre" name="number"
                                    placeholder="Enter your mobile" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="email" class="form-control" id="nombre" name="email"
                                    placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="password" class="form-control" id="nombre" name="password"
                                    placeholder="Enter your password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="password" class="form-control" id="nombre" name="re-enter password"
                                    placeholder="Re-Enter password" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Register Now" class="btn btn-info btn-block rounded-0 py-2">
                        </div>
                    </div>

                </div>
            </form>
            <!--Form with header-->


        </div>
    </div>
</div>

</form>
            </div>
        </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
 if (event.target == modal) {
 modal.style.display = "none";
 }
}
</script>


<x-frontend.sections.mobile-view-pages />

<!--------- Desktop end view ------>
<div class="dpnr">
    <x-footer />
</div>

@endsection

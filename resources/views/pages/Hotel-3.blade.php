@extends('layouts.master')
@section('title', 'XYZ')
@section('body')

    <style>
        .swiper {
            width: 100%;
            height: 400px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            cursor: pointer;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 400px;
            object-fit: cover;
        }



        .swiper {
            width: 100%;
            height: 130px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 80%;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 130px;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .soutlinenon {
            border: none !important;
            outline: none !important;
        }

    </style>

    <!-- DESKTOP VIEW START  -->

    <div class="container-fluid p-0" style="height:500px;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
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

    {{-- Search Hotel Section Starts --}}
    <section class="pt-6p pb-20" style="margin-top:-450px;">
        <div class="container p-0">
            <div class="card br-18">
                <form action="{{ route('search-hotel') }}" method="get">
                    <div class="card-body">
                        <div class="radiobox15">
                            <span class="uptext">
                                <a href="#" class="link-color">Book Domestic and International hotels</a>
                            </span>

                        </div>
                        <div class="d-flex pt-10">
                            <div class="card wd-25 m-2">
                                <div class="card-body hoverbg">
                                    <div class="searchtitle">CITY | HOTEL | AREA | BUILDING</div>
                                    <select class="js-example-basic-single getLocation" name="departure"
                                        id="select2_departure" data-next="#select2_arrival">
                                        <option value="DEL">Delhi (DEL)</option>
                                    </select>
                                    <!-- <div class="slitxt">Indra Gandhi international Airport</div> -->
                                </div>
                            </div>

                            <div class="card wd-25 m-2">
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
                            <div class="card wd-25 m-2">
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

                            <div class="card wd-15 m-2">
                                <div class="card-body cursorp" onclick="togglePopupHotel()">
                                    <div class="searchtitle"> ROOMS & GUESTS <i class="fa fa-chevron-down"
                                            aria-hidden="true"></i></div>
                                    <span class="font25"> 1 </span> <span class="slitxt">Rooms</span>
                                    <span class="font25"> 1 </span> <span class="slitxt">Guests</span>
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
                                            class="btn-sm btn-primary float-right">
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
    {{-- Search Hotel Section End --}}

    <div class="container mobileVes1 hotel_offerssect mt-5 p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('hotels') }}">Hotel</a></li>
                <li class="breadcrumb-item"><a href="{{ url('hotel-2') }}">Hotel in Delhi</a></li>
                <li class="breadcrumb-item active" aria-current="page">XYZ Luxury Stay Hotel</li>
            </ol>
        </nav>
    </div>

    <div class="container mobileVes1 hotel_offerssect mt-0">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot1.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot2.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot3.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot4.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot5.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot6.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot7.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot8.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot9.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot10.jpg">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot1.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot2.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot3.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot4.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot5.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot6.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot7.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot8.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot9.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/hotel/hot10.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mmsrsrts">
                <div class="card p-3" style="border-radius:10px;">
                    <div class="card border-0">
                        <h6 class="text-success text-center font-weight-bold pt-2 pb-2">Book your stay today and get a FREE
                            airport
                            taxi</h6>
                    </div>
                    <img class="card-img-top shadow" src="assets/images/hotel/hot1.jpg" style="border-radius:20px;"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="font-weight-bold">XYZ Deluxe Delight City</h5>
                        <p class="small m-0">
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            ( Reviews )
                        </p>
                        <hr>
                        <div class="hotelDet_secs">
                            <div class="one_1">
                                <p class="small m-0 text-left"><i class="fa fa-user text-muted" aria-hidden="true"></i>
                                    For 2 Adult</p>
                                <p class="small text-danger m-0">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                    Non-Refundable
                                </p>
                                <p class="small text-success m-0">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Free Cancellation
                                </p>
                            </div>
                            <div class="one_1">
                                <p class="small text-muted m-0 text-right"> Per Night</p>
                                <h4 class="m-0 text-primary text-right font-weight-bold">₹ 12,150</h4>
                                <p class="small text-muted m-0 text-right">+ ₹ 2,187 taxes & fees</p>
                            </div>
                        </div>
                        <hr>
                        <a class="float-left" href="{{ url('#/') }}">
                            <button type="button" class="btn btn-primary">Select Room</button>
                        </a>
                        <a class="float-right" href="{{ url('#/') }}">
                            <button type="button" class="btn btn-primary">Book Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <h5 class="font-weight-bold">XYZ Deluxe Delight City</h5>
                <p class="small m-0">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    5B/13, Tilak Nagar, Delhi-110018
                </p>
                <div class="viewallameties mt-4">
                    <div class="one_sec1">
                        <img src="assets/images/hotel1/parking.png" alt="">
                        <p class="pt-2 m-0">Parking</p>
                    </div>
                    <div class="one_sec1">
                        <img src="assets/images/hotel1/restaurant.png" alt="">
                        <p class="pt-2 m-0">Restaurant</p>
                    </div>
                    <div class="one_sec1">
                        <img src="assets/images/hotel1/air-conditioner.png" alt="">
                        <p class="pt-2 m-0">AC</p>
                    </div>
                    <div class="one_sec1">
                        <img src="assets/images/hotel1/elevator.png" alt="">
                        <p class="pt-2 m-0">Elevator</p>
                    </div>
                    <div class="one_sec1">
                        <img src="assets/images/hotel1/lounge.png" alt="">
                        <p class="pt-2 m-0">Lounge</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mobileVes1 hotel_offerssect mt-3 mb-3
     p-0">
        <div class="accordion" id="accordionExample">
            <div class="card bg-transparent border-0 p-3">
                <div class="card-header bg-transparent border-0" id="headingOne">
                    <h2 class="mb-0">
                        <a href="#" class="soutlinenon text-dark" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="font-weight-bold float-left">Property Highlights</h5>
                            <i class="fa fa-angle-down small float-right" aria-hidden="true"></i>
                        </a>
                        {{-- <button class="btn btn-link soutlinenon btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="font-weight-bold">Property Highlights</h5>
                        </button> --}}
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <h6 class="font-weight-bold pt-3"> <u>Hotel Facilities</u></h6>
                        <p>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Taj Palace provides various facilities that include travel desk, currency exchange and parking
                            facility. Power
                            backup, laundry, concierge, car hire, doctor on call and room service are also offered for the
                            convenience of
                            the guests. Guests can rejuvinate at the in-house spa, meditation enter, salon and yoga center.
                            Meetings and
                            Events can be organised at in-house banquet hall, lawn, business center, meeting room and
                            lounge.
                        </p>
                        <h6 class="font-weight-bold pt-1"> <u>Room Facilities</u></h6>
                        <p>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Taj Palace provides various facilities that include travel desk, currency exchange and parking
                            facility. Power
                            backup, laundry, concierge, car hire, doctor on call and room service are also offered for the
                            convenience of
                            the guests. Guests can rejuvinate at the in-house spa, meditation enter, salon and yoga center.
                            Meetings and
                            Events can be organised at in-house banquet hall, lawn, business center, meeting room and
                            lounge.
                        </p>
                        <h6 class="font-weight-bold pt-1"> <u>Food and Dining</u></h6>
                        <p>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Taj Palace provides various facilities that include travel desk, currency exchange and parking
                            facility. Power
                            backup, laundry, concierge, car hire, doctor on call and room service are also offered for the
                            convenience of
                            the guests. Guests can rejuvinate at the in-house spa, meditation enter, salon and yoga center.
                            Meetings and
                            Events can be organised at in-house banquet hall, lawn, business center, meeting room and
                            lounge.
                        </p>
                        <h6 class="font-weight-bold pt-1"> <u>Important Landmarks</u></h6>
                        <p>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Taj Palace provides various facilities that include travel desk, currency exchange and parking
                            facility. Power
                            backup, laundry, concierge, car hire, doctor on call and room service are also offered for the
                            convenience of
                            the guests. Guests can rejuvinate at the in-house spa, meditation enter, salon and yoga center.
                            Meetings and
                            Events can be organised at in-house banquet hall, lawn, business center, meeting room and
                            lounge.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container  mobileVes1 hotel_offerssect mt-3 mb-3">
        <h5 class="font-weight-bold">Select Rooms</h5>
        <div class="row mb-2 bordrbras">
            <div class="col-sm-5">
                <div class="card">
                    <img src="assets/images/hotel/hot4.jpg">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0 bg-transparent">
                    <h6 class="font-weight-bold">Deluxe Room</h6>
                    <p class="small text-danger m-0">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        Non-Refundable
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free Cancellation
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free WiFi
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free breakfast
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Express check-in
                    </p>
                </div>
            </div>
            <div class="col-sm-4 mobilresrars">
                <div class="card  border-0 bg-transparent">
                    <h5 class="text-right m-0"><del>₹15000</del></h5>
                    <h3 class="text-right text-primary m-0 font-weight-bold">₹14599</h3>
                    <p class="text-right m-0 small">Per Night</p>
                    <p class="text-right m-0 small">+₹ 11,813 taxes & fees</p>
                    <p class="m-0 small pt-3">
                        &#9679; Before : 08-May-2022 11:00:00 INR 0 (Free Cancellation)
                    </p>
                    <p class="m-0 small">
                        &#9679; From : 08-May-2022 11:00:00 to 09-May-2022 04:00:00 charges: 1 nights (Non Refundable)
                    </p>
                    <a class="mt-3" href="{{ url('#/') }}">
                        <button type="button" class="btn btn-primary float-right">Select Room</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mb-2 bordrbras">
            <div class="col-sm-5">
                <div class="card">
                    <img src="assets/images/hotel/hot5.jpg">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0 bg-transparent">
                    <h6 class="font-weight-bold">Deluxe Room</h6>
                    <p class="small text-danger m-0">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        Non-Refundable
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free Cancellation
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free WiFi
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free breakfast
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Express check-in
                    </p>
                </div>
            </div>
            <div class="col-sm-4 mobilresrars">
                <div class="card  border-0 bg-transparent">
                    <h5 class="text-right m-0"><del>₹15000</del></h5>
                    <h3 class="text-right text-primary m-0 font-weight-bold">₹14599</h3>
                    <p class="text-right m-0 small">Per Night</p>
                    <p class="text-right m-0 small">+₹ 11,813 taxes & fees</p>
                    <p class="m-0 small pt-3">
                        &#9679; Before : 08-May-2022 11:00:00 INR 0 (Free Cancellation)
                    </p>
                    <p class="m-0 small">
                        &#9679; From : 08-May-2022 11:00:00 to 09-May-2022 04:00:00 charges: 1 nights (Non Refundable)
                    </p>
                    <a class="mt-3" href="{{ url('#/') }}">
                        <button type="button" class="btn btn-primary float-right">Select Room</button>
                    </a>
                </div>
            </div>

        </div>
        <hr>
        <div class="row mb-2 bordrbras">
            <div class="col-sm-5">
                <div class="card">
                    <img src="assets/images/hotel/hot6.jpg">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0 bg-transparent">
                    <h6 class="font-weight-bold">Deluxe Room</h6>
                    <p class="small text-danger m-0">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        Non-Refundable
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free Cancellation
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free WiFi
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Free breakfast
                    </p>
                    <p class="small text-success m-0">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Express check-in
                    </p>
                </div>
            </div>
            <div class="col-sm-4 mobilresrars">
                <div class="card  border-0 bg-transparent">
                    <h5 class="text-right m-0"><del>₹15000</del></h5>
                    <h3 class="text-right text-primary m-0 font-weight-bold">₹14599</h3>
                    <p class="text-right m-0 small">Per Night</p>
                    <p class="text-right m-0 small">+₹ 11,813 taxes & fees</p>
                    <p class="m-0 small pt-3">
                        &#9679; Before : 08-May-2022 11:00:00 INR 0 (Free Cancellation)
                    </p>
                    <p class="m-0 small">
                        &#9679; From : 08-May-2022 11:00:00 to 09-May-2022 04:00:00 charges: 1 nights (Non Refundable)
                    </p>
                    <a class="mt-3" href="{{ url('#/') }}">
                        <button type="button" class="btn btn-primary float-right">Select Room</button>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="container  mobileVes1 hotel_offerssect mt-3 mb-3">
        <h5 class="font-weight-bold">Amenities</h5>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="font-weight-bold pt-2">
                    <i class="fa fa-lock" aria-hidden="true"></i>&nbsp;
                    Safety & Security
                </h6>
                <ul class="sssbsr">
                    <li>Fire Extinguisher </li>
                    <li> Security Guard Timings - 24x7 </li>
                    <li> CCTV camera installed inside/outside hotel premises </li>
                    <li> CCTV camera installed on each floor </li>
                    <li> Doctor on Call </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h6 class="font-weight-bold pt-2">
                    <i class="fa fa-product-hunt" aria-hidden="true"></i>&nbsp;
                    Parking & Transportation
                </h6>
                <ul class="sssbsr">
                    <li>Fire Extinguisher </li>
                    <li> Security Guard Timings - 24x7 </li>
                    <li> CCTV camera installed inside/outside hotel premises </li>
                    <li> CCTV camera installed on each floor </li>
                    <li> Doctor on Call </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h6 class="font-weight-bold pt-2">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;
                    Services
                </h6>
                <ul class="sssbsr">
                    <li>Fire Extinguisher </li>
                    <li> Security Guard Timings - 24x7 </li>
                    <li> CCTV camera installed inside/outside hotel premises </li>
                    <li> CCTV camera installed on each floor </li>
                    <li> Doctor on Call </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="font-weight-bold pt-2">
                    <i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;
                    Activities - Indoor & Outdoor
                </h6>
                <ul class="sssbsr">
                    <li>Fire Extinguisher </li>
                    <li> Security Guard Timings - 24x7 </li>
                    <li> CCTV camera installed inside/outside hotel premises </li>
                    <li> CCTV camera installed on each floor </li>
                    <li> Doctor on Call </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h6 class="font-weight-bold pt-2">
                    <i class="fa fa-language" aria-hidden="true"></i>&nbsp;
                    Languages Spoken by Hotel Staff
                </h6>
                <ul class="sssbsr">
                    <li>Fire Extinguisher </li>
                    <li> Security Guard Timings - 24x7 </li>
                    <li> CCTV camera installed inside/outside hotel premises </li>
                    <li> CCTV camera installed on each floor </li>
                    <li> Doctor on Call </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h6 class="font-weight-bold pt-2">
                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>&nbsp;
                    Payments Modes Accepted
                </h6>
                <ul class="sssbsr">
                    <li>Fire Extinguisher </li>
                    <li> Security Guard Timings - 24x7 </li>
                    <li> CCTV camera installed inside/outside hotel premises </li>
                    <li> CCTV camera installed on each floor </li>
                    <li> Doctor on Call </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container  mobileVes1 hotel_offerssect mt-3 mb-3">
        <div class="row btnssreser">
            <div class="col-sm-6">
                <h5 class="float-left font-weight-bold">
                    User Reviews
                </h5>
            </div>
            <div class="col-sm-6">
                <div class="offersButtons_12 mt-0">
                    <span href="#reviewssliders" role="button" data-slide="prev"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></span>
                    <span href="#reviewssliders" role="button" data-slide="next"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div id="reviewssliders" class="carousel slide mt-3" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card bg-transparent">
                                <h5 class="card-header bg-info">
                                    4.5 (Reviews)
                                </h5>
                                <div class="card-body">
                                    <p class="small">Please write here reviews short form any customers</p>
                                    <p class="small text-right m-0">Reviews Date: 08 May 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container  mobileVes1 hotel_offerssect mt-3 mb-3">
        <h5 class="font-weight-bold">Location</h5>
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14007.878186701844!2d77.1218021!3d28.6306748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bb76b9e38af0980!2sMake%20True%20Trip%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1651958354802!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm-4">
                <h5 class="font-weight-bold">Nearby Landmarks</h5>
                <ul class="smserasr p-0 ml-2">
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Nearby Landmarks
                            (1.5KM)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container  mobileVes1 hotel_offerssect mt-3 mb-3">
        <div class="row btnssreser">
            <div class="col-sm-6">
                <h5 class="float-left font-weight-bold">
                    Popular similar Properties
                </h5>
            </div>
            <div class="col-sm-6">
                <div class="offersButtons_12 mt-0">
                    <span href="#otheroptionrooms" role="button" data-slide="prev"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></span>
                    <span href="#otheroptionrooms" role="button" data-slide="next"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div id="otheroptionrooms" class="carousel slide mt-3" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/room1.jpg" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Star New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹7500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/room2.jpg" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/room-2.png" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/room-3.png" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/room-4.png" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/room-5.png" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/room6.jpg" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/room-1.png" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/rm-1.jpg" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/rm-2.jpg" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/rm-3.jpg" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/hotel/rm-4.jpg" style="height:150px;"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold">The Hosteller New Delhi</h6>
                                        <p class="m-0 small">4.5/5 (Reviews)</p>
                                        <p class="small">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            5B/13. Tilak Nagar, Delhi-110018
                                        </p>
                                        <hr>
                                        <h6 class="text-right">Starting: <span
                                                class="h4 font-weight-bold">₹8500</span></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!--------- Desktop end view ------>

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>


    <div class="dpnr">
        <x-footer />
    </div>
@endsection

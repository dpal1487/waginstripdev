@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->
<!-- end desktop view -->

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

<div class="container mobileVes1 hotel_offerssect mt-5 p-0">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('hotels')}}">Hotel</a></li>
            {{-- <li class="breadcrumb-item"><a href="#"></a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">Hotel in Delhi</li>
        </ol>
    </nav>
</div>

<div class="container mobileVes1 hotel_offerssect mbbs-20  mt-0 mb-5">
    <div class="row">
        <!-- left Sider  -->
        <div class="col-sm-3 hideblocks p-3">
            <div class="card cardBg-coloer border-0 p-3 pb-4">
                <h6 class="font-weight-bold mt-3 mb-3 text-uppercase">Search By Hotel Name</h6>
                <div class="searchhotels">
                    <input type="text" placeholder="Search Hotels">
                </div>

                <h6 class="font-weight-bold mt-5 mb-3">HOTEL CATEGORY</h6>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">HOTEL <span
                            class="text-secondary small">(10L+)</span></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">RESORT <span
                            class="text-secondary small">(10L+)</span></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">RESORT VILLA <span
                            class="text-secondary small">(10L+)</span></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">ENTIRE APARTMENT <span
                            class="text-secondary small">(10L+)</span></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">HOSTELS <span
                            class="text-secondary small">(10L+)</span></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">COATTAGES <span
                            class="text-secondary small">(10L+)</span></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">HOMESTAY <span
                            class="text-secondary small">(10L+)</span></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">HOLIDAY HOMES <span
                            class="text-secondary small">(10L+)</span></label>
                </div>
            </div>

            <div class="card cardBg-coloer border-0 p-3 pb-4">
                <h6 class="font-weight-bold mt-3 mb-3">PRICE</h6>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1"><a href="#">UPTO RS.
                            999</a></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1"><a href="#">RS. 1000 TO RS.
                            2000</a></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1"><a href="#">RS. 1000 TO RS.
                            2000</a></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1"><a href="#">RS. 2000 TO RS.
                            5000</a></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1"><a href="#">RS. 5000 TO RS.
                            10000</a></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1"><a href="#">RS. 10000 TO RS.
                            50000</a></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1"><a href="#">RS. 50000 TO RS.
                            100000</a></label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1"><a href="#">RS. 100000 TO RS.
                            1000000</a></label>
                </div>
            </div>
            <div class="card cardBg-coloer border-0 p-3 pb-4">
                <h6 class="font-weight-bold mt-3 mb-3 text-uppercase">Hotels By Category</h6>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares" for="exampleCheck1">
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label labelstsares text-warning" for="exampleCheck1">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label text-warning labelstsares" for="exampleCheck1">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" class="form-check-input markdescs" id="exampleCheck1">
                    <label class="form-check-label text-warning labelstsares" for="exampleCheck1">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </label>
                </div>
            </div>
        </div>
        <!-- Right Sider -->
        <div class="col-md-9 p-3">
            <div class="card cardreshotelrosp shadow mt-4 border-0 p-3 pb-4">
                <div class="row">
                    <div class="col-sm-4 p-3">
                        <div class="card">
                            <img src="assets/images/hotel/h3.jpg" height="150" alt="">
                        </div>
                    </div>
                    <div class="col-sm-5 p-3">
                        <h6 class="font-weight-bold m-0 p-0">VITS Shanti Solitaire Arpora</h6>
                        <p class="p-0 small m-0">
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        </p>
                        <p class="small text-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            5B/13, Tilak Nagar Near, Delhi-110018
                        </p>
                        <p class="small  m-0 text-danger">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Breakfast not included
                        </p>
                        <p class="small m-0 text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Free Cancellation
                        </p>
                    </div>
                    <div class="col-sm-3 margllarsres align-self-end p-3">
                        <h6 class="text-right m-0"><del>₹ 2000</del></h6>
                        <h4 class="text-right m-0 text-primary font-weight-bold">₹ 1599</h4>
                        <p class="text-right m-0 small">Per Night</p>
                        <a href="{{url('hotel-3')}}" class="float-right mt-3 btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card cardreshotelrosp shadow mt-4 border-0 p-3 pb-4">
                <div class="row">
                    <div class="col-sm-4 p-3">
                        <div class="card">
                            <img src="assets/images/hotel/h1.jpg" height="150" alt="">
                        </div>
                    </div>
                    <div class="col-sm-5 p-3">
                        <h6 class="font-weight-bold m-0 p-0">VITS Shanti Solitaire Arpora</h6>
                        <p class="p-0 small m-0">
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        </p>
                        <p class="small text-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            5B/13, Tilak Nagar Near, Delhi-110018
                        </p>
                        <p class="small  m-0 text-danger">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Breakfast not included
                        </p>
                        <p class="small m-0 text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Free Cancellation
                        </p>
                    </div>
                    <div class="col-sm-3 margllarsres align-self-end p-3">
                        <h6 class="text-right m-0"><del>₹ 2000</del></h6>
                        <h4 class="text-right m-0 text-primary font-weight-bold">₹ 1599</h4>
                        <p class="text-right m-0 small">Per Night</p>
                        <a href="#" class="float-right mt-3 btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card cardreshotelrosp shadow mt-4 border-0 p-3 pb-4">
                <div class="row">
                    <div class="col-sm-4 p-3">
                        <div class="card">
                            <img src="assets/images/hotel/h2.jpg" height="150" alt="">
                        </div>
                    </div>
                    <div class="col-sm-5 p-3">
                        <h6 class="font-weight-bold m-0 p-0">VITS Shanti Solitaire Arpora</h6>
                        <p class="p-0 small m-0">
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        </p>
                        <p class="small text-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            5B/13, Tilak Nagar Near, Delhi-110018
                        </p>
                        <p class="small  m-0 text-danger">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Breakfast not included
                        </p>
                        <p class="small m-0 text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Free Cancellation
                        </p>
                    </div>
                    <div class="col-sm-3 margllarsres align-self-end p-3">
                        <h6 class="text-right m-0"><del>₹ 2000</del></h6>
                        <h4 class="text-right m-0 text-primary font-weight-bold">₹ 1599</h4>
                        <p class="text-right m-0 small">Per Night</p>
                        <a href="#" class="float-right mt-3 btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card cardreshotelrosp shadow mt-4 border-0 p-3 pb-4">
                <div class="row">
                    <div class="col-sm-4 p-3">
                        <div class="card">
                            <img src="assets/images/hotel/h3.jpg" height="150" alt="">
                        </div>
                    </div>
                    <div class="col-sm-5 p-3">
                        <h6 class="font-weight-bold m-0 p-0">VITS Shanti Solitaire Arpora</h6>
                        <p class="p-0 small m-0">
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        </p>
                        <p class="small text-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            5B/13, Tilak Nagar Near, Delhi-110018
                        </p>
                        <p class="small  m-0 text-danger">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Breakfast not included
                        </p>
                        <p class="small m-0 text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Free Cancellation
                        </p>
                    </div>
                    <div class="col-sm-3 margllarsres align-self-end p-3">
                        <h6 class="text-right m-0"><del>₹ 2000</del></h6>
                        <h4 class="text-right m-0 text-primary font-weight-bold">₹ 1599</h4>
                        <p class="text-right m-0 small">Per Night</p>
                        <a href="#" class="float-right mt-3 btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card cardreshotelrosp shadow mt-4 border-0 p-3 pb-4">
                <div class="row">
                    <div class="col-sm-4 p-3">
                        <div class="card">
                            <img src="assets/images/hotel/h3.jpg" height="150" alt="">
                        </div>
                    </div>
                    <div class="col-sm-5 p-3">
                        <h6 class="font-weight-bold m-0 p-0">VITS Shanti Solitaire Arpora</h6>
                        <p class="p-0 small m-0">
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        </p>
                        <p class="small text-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            5B/13, Tilak Nagar Near, Delhi-110018
                        </p>
                        <p class="small  m-0 text-danger">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Breakfast not included
                        </p>
                        <p class="small m-0 text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Free Cancellation
                        </p>
                    </div>
                    <div class="col-sm-3 margllarsres align-self-end p-3">
                        <h6 class="text-right m-0"><del>₹ 2000</del></h6>
                        <h4 class="text-right m-0 text-primary font-weight-bold">₹ 1599</h4>
                        <p class="text-right m-0 small">Per Night</p>
                        <a href="#" class="float-right mt-3 btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card cardreshotelrosp shadow mt-4 border-0 p-3 pb-4">
                <div class="row">
                    <div class="col-sm-4 p-3">
                        <div class="card">
                            <img src="assets/images/hotel/h4.jpg" height="150" alt="">
                        </div>
                    </div>
                    <div class="col-sm-5 p-3">
                        <h6 class="font-weight-bold m-0 p-0">VITS Shanti Solitaire Arpora</h6>
                        <p class="p-0 small m-0">
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        </p>
                        <p class="small text-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            5B/13, Tilak Nagar Near, Delhi-110018
                        </p>
                        <p class="small  m-0 text-danger">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Breakfast not included
                        </p>
                        <p class="small m-0 text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Free Cancellation
                        </p>
                    </div>
                    <div class="col-sm-3 margllarsres align-self-end p-3">
                        <h6 class="text-right m-0"><del>₹ 2000</del></h6>
                        <h4 class="text-right m-0 text-primary font-weight-bold">₹ 1599</h4>
                        <p class="text-right m-0 small">Per Night</p>
                        <a href="#" class="float-right mt-3 btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-bottom hidefooters p-0">
        <div class="container">
            <ul class="filtermenusas">
                <li onclick="myFunction()" class="dropbtn">
                    <i class="fa fa-inr" aria-hidden="true"></i>
                    PRICE
                </li>
                <li>
                    <i class="fa fa-filter" aria-hidden="true"></i>
                    FILTER
                </li>
                <li>
                    <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                    SHORT
                </li>
            </ul>
        </div>
    </div>
</div>


<!--------- Desktop end view ------>
<div class="dpnr">
    <x-footer />
</div>

@endsection

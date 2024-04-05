@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->
<!----- Banner Sections ------>
<section class="bgcolorsarch pt-6p pb-20">
    <div class="container p-0">
        <div class="card br-18">
            <form action="{{ route('search-hotel') }}" method="get">
                <div class="card-body">
                    <div class="radiobox15">
                        <span class="uptext">
                            <a href="#" class="link-color">Book Domestic and International hotels and homestays. To
                                list your property</a>
                        </span>

                    </div>
                    <div class="d-flex pt-10">
                        <div class="card wd-35">
                            <div class="card-body">
                                <div class="searchtitle">CITY|HOTEL|AREA|BUILDING</div>
                                <select class="js-example-basic-single getLocation" name="state">
                                    <option value="DEL">Delhi (DEL)</option>
                                </select>
                                <div class="slitxt">India</div>
                            </div>
                        </div>

                        <div class="card wd-25">
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
<!--------- Banner section Ends ----->

<div class="container mt-4 mb-4 p-0">
    <div class="row">
        <!------ Left Side Sections ------->
        <div class="col-sm-3">
            <div class="card">
                <div class="row mb-3 mt-4">
                    <div class="col-sm-11">
                        <button type="button" class="btn btn555 btn-outline-primary float-right btn-sm">Reset
                            All</button>
                    </div>
                </div>
                <p class="pl-4 font-weight-bold""><i class=" fa fa-map-marker" aria-hidden="true"></i> 84 Goa
                    Budget Hotels </p>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <p class="pl-4 m-0 font-weight-bold"">Price</p>
                        <div class=" form-check ml-4 mt-1">
                            <input class="form-check-input" type="checkbox" value="" id="price1">
                            <label class="form-check-label" for="price1">₹ 500 - ₹ 2000</label>
                    </div>
                    <div class=" form-check ml-4 mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="price2">
                        <label class="form-check-label" for="price2">₹ 2000 - ₹ 5000</label>
                    </div>
                    <div class=" form-check ml-4 mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="price3">
                        <label class="form-check-label" for="price3">₹ 5000 - ₹ 10000</label>
                    </div>
                    <div class=" form-check ml-4 mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="price4">
                        <label class="form-check-label" for="price4">₹ 10000 - ₹ 15000</label>
                    </div>
                    <div class=" form-check ml-4 mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="price5">
                        <label class="form-check-label" for="price5">₹ 15000 - ₹ 30000</label>
                    </div>
                    <div class=" form-check ml-4 mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="price6">
                        <label class="form-check-label" for="price6">₹ 30000+</label>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12">
                    <p class="pl-4 m-0 font-weight-bold"">Rating</p>
                        <div class=" form-check ml-4 mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="rating1">
                        <label class="form-check-label" for="rating1">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </label>
                </div>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="rating2">
                    <label class="form-check-label" for="rating2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </label>
                </div>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="rating3">
                    <label class="form-check-label" for="rating3">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </label>
                </div>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="rating4">
                    <label class="form-check-label" for="rating4">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <p class="pl-4 m-0 font-weight-bold">Locality</p>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">North Goa</label>
                </div>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">South Goa</label>
                </div>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">Calangute</label>
                </div>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck4">Baga</label>
                </div>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck5">Candolim</label>
                </div>
                <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                    <label class="form-check-label" for="defaultCheck6">Anjuna</label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <p class="pl-4 m-0 font-weight-bold"">Amenities</p>
                        <div class=" form-check ml-4 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="amenities1">
                    <label class="form-check-label" for="amenities1">Spa</label>
            </div>
            <div class=" form-check ml-4 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="amenities2">
                <label class="form-check-label" for="amenities2">Swimming</label>
            </div>
            <div class=" form-check ml-4 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="amenities3">
                <label class="form-check-label" for="amenities3">Parking</label>
            </div>
            <div class=" form-check ml-4 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="amenities4">
                <label class="form-check-label" for="amenities4">Restaurant</label>
            </div>
            <div class=" form-check ml-4 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="amenities5">
                <label class="form-check-label" for="amenities5">Air Conditions</label>
            </div>
            <div class=" form-check ml-4 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="amenities6">
                <label class="form-check-label" for="amenities6">Mini Bar</label>
            </div>
            <div class=" form-check ml-4 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="amenities7">
                <label class="form-check-label" for="amenities7">Wi-Fi</label>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <p class="pl-4 m-0 font-weight-bold"">Other Areas</p>
                        <div class=" form-check ml-4 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Margao</label>
        </div>
        <div class=" form-check ml-4 mt-1">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">Vasco Da Gama</label>
        </div>
        <div class=" form-check ml-4 mt-1">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
            <label class="form-check-label" for="defaultCheck3">Agonda</label>
        </div>
        <div class=" form-check ml-4 mt-1">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
            <label class="form-check-label" for="defaultCheck4">Varca</label>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-sm-12">
        <p class="pl-4 m-0 font-weight-bold"">Property Type</p>
                        <div class=" form-check ml-4 mt-1">
            <input class="form-check-input" type="checkbox" value="" id="apartment">
            <label class="form-check-label" for="apartment">Apartment</label>
    </div>
    <div class=" form-check ml-4 mt-1">
        <input class="form-check-input" type="checkbox" value="" id="villa">
        <label class="form-check-label" for="villa">Villa</label>
    </div>
    <div class=" form-check ml-4 mt-1">
        <input class="form-check-input" type="checkbox" value="" id="cottage">
        <label class="form-check-label" for="cottage">Cottage</label>
    </div>
</div>
</div>
<div class="row mt-4">
    <div class="col-sm-12">
        <p class="pl-4 m-0 font-weight-bold"">Booking Preference</p>
                        <div class=" form-check ml-4 mt-1">
            <input class="form-check-input" type="checkbox" value="" id="bookingpreference1">
            <label class="form-check-label" for="bookingpreference1">Entire Property</label>
    </div>
    <div class=" form-check ml-4 mt-1">
        <input class="form-check-input" type="checkbox" value="" id="bookingpreference2">
        <label class="form-check-label" for="bookingpreference2">Star Host</label>
    </div>
    <div class=" form-check ml-4 mt-1">
        <input class="form-check-input" type="checkbox" value="" id="bookingpreference3">
        <label class="form-check-label" for="bookingpreference3">Caretaker</label>
    </div>
    <div class=" form-check ml-4 mt-1">
        <input class="form-check-input" type="checkbox" value="" id="bookingpreference4">
        <label class="form-check-label" for="bookingpreference4">Instant Book</label>
    </div>
</div>
</div>
<div class="row mt-4 mb-4">
    <div class="col-sm-12">
        <p class="pl-4 m-0 font-weight-bold"">Beds & Bedrooms</p>
                        <div class=" form-check ml-4 mt-1">
            <input class="form-check-input" type="checkbox" value="" id="bookingpreference5">
            <label class="form-check-label" for="bookingpreference5">Beds</label>
    </div>
    <div class=" form-check ml-4 mt-1">
        <input class="form-check-input" type="checkbox" value="" id="bookingpreference6">
        <label class="form-check-label" for="bookingpreference6">Bedrooms</label>
    </div>
</div>
</div>
</div>
</div>
<!------ Left Ends ----->
<!------ Right Side Sections ---------->
<div class="col-sm-9 pl-0">
    <div class="card mb-4">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="m-0 pt-2 pl-3 font-weight-bold pb-4">Recommended for You</h3>
            </div>
        </div>
        <div class="row p-3 border mb-4">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <!-- <div class="col-sm-6">
                                <button type="button" class="btn btn-link float-left" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">Details</button>
                            </div> -->
                            <div class="col-sm-12">
                                <a href="{{ url('/hotel-room-details') }}">
                                    <button type="button" class="btn btn-primary float-right btn-sm">View
                                        Details</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3 border mb-4">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <!-- <div class="col-sm-6">
                                <button type="button" class="btn btn-link float-left" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">Details</button>
                            </div> -->
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary float-right btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3 border mb-4">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <!-- <div class="col-sm-6">
                                <button type="button" class="btn btn-link float-left" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">Details</button>
                            </div> -->
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary float-right btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3 border mb-4">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <!-- <div class="col-sm-6">
                                <button type="button" class="btn btn-link float-left" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">Details</button>
                            </div> -->
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary float-right btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3 border mb-4">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <!-- <div class="col-sm-6">
                                <button type="button" class="btn btn-link float-left" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">Details</button>
                            </div> -->
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary float-right btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3 border mb-4">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <!-- <div class="col-sm-6">
                                <button type="button" class="btn btn-link float-left" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">Details</button>
                            </div> -->
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary float-right btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3 border mb-4">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <!-- <div class="col-sm-6">
                                <button type="button" class="btn btn-link float-left" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">Details</button>
                            </div> -->
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary float-right btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- <div class="card mb-4" style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="m-0 pt-2 pl-3 font-weight-bold pb-4">Recommended for You</h3>
            </div>
        </div>
        <div class="row p-3 border">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-link">Details</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary float-right btn-sm">Book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4" style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="m-0 pt-2 pl-3 font-weight-bold pb-4">Recommended for You</h3>
            </div>
        </div>
        <div class="row p-3 border">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-link">Details</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary float-right btn-sm">Book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4" style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="m-0 pt-2 pl-3 font-weight-bold pb-4">Recommended for You</h3>
            </div>
        </div>
        <div class="row p-3 border">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-link">Details</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary float-right btn-sm">Book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4" style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="m-0 pt-2 pl-3 font-weight-bold pb-4">Recommended for You</h3>
            </div>
        </div>
        <div class="row p-3 border">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-link">Details</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary float-right btn-sm">Book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4" style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="m-0 pt-2 pl-3 font-weight-bold pb-4">Recommended for You</h3>
            </div>
        </div>
        <div class="row p-3 border">
            <div class="col-sm-4">
                <div id="sliderhotel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/hotel/room-1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/hotel/room-5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sliderhotel1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sliderhotel1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="font-weight-bold m-0">Goa Holiday Home</h4>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: #efc319; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:; font-size:10px;"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="small m-0 pb-1" style="color:grey;">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    5B/13, Tilak Nagar, Near Metro Station, Delhi-18
                                </p>
                                <h6 class="small font-weight-bold m-0">Hotel Details</h6>
                                <p class="small m-0" style="color:grey; line-height: 1.1;">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed eiusmod tempor
                                    incididunt labore et dolore magna aliqua. Consectetur adipisicing
                                    elit, sed eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-1">
                        <h5 class="float-right m-0" style="color:grey;"><del>₹ 5000</del></h5>
                        <br>
                        <h3 class="float-right font-weight-bold m-0" style="color:red;">₹ 5000</h3>
                        <br>
                        <p class="float-right small pt-1" style="margin-right:-85px; color:grey;">Per night</p>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-link">Details</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary float-right btn-sm">Book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!------ End Right Side Sections ---------->
</div>
</div>

<!--------- Desktop end view ------>
<x-footer />
@endsection

@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<!-- Hotel Banner  -->
<section class="bgcolorsarch pt-6p pb-20">
    <div class="container mt-3 p-0">
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
<!-- Hotel Banner End -->

<div class="sectionsHotelDetails1">
    <div class="hotelDetails1">
        <div class="leftHotelSections1">
            <h2>Hotel Asia Saint Severin GOA</h2>
            <div class="starReviewWrite">
                <div>
                    <h6><i class="fa fa-star" aria-hidden="true"></i>
                        4.5
                    </h6>
                </div>
                <div>
                    <h6 class="">
                        <a class="nav-link p-0" href="#user">Review</a>
                    </h6>
                </div>
                <div>
                    <h6>
                        <a class="nav-link p-0" href="#user">Write a Review</a>
                    </h6>
                </div>
            </div>
            <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                5B/13, Tilak Nagar, Delhi-110018 (India)
            </p>
            <div class="hotelSlider01">
                <div class="hotelSlider02">
                    <div class="hotelSlider03">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
                            <div class="carousel-inner" id="myBottonGallary">
                                <div class="carousel-item active">
                                    <img src="assets/images/hotel/room1.jpg" class="rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/hotel/room2.jpg" class="rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/hotel/room3.jpg" class="rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/hotel/room4.jpg" class="rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/hotel/room5.jpg" class="rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/hotel/room6.jpg" class="rounded">
                                </div>
                            </div>
                            <ul class="carousel-indicators list-inline">
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                        data-target="#myCarousel">
                                        <img src="assets/images/hotel/room1.jpg">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                        <img src="assets/images/hotel/room2.jpg">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                        <img src="assets/images/hotel/room3.jpg">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                        <img src="assets/images/hotel/room4.jpg">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                        <img src="assets/images/hotel/room5.jpg">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                        <img src="assets/images/hotel/room6.jpg">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rightHotelSection1">
            <div class="offerHotelTag">
                <img src="assets/images/hotel/discount-label.png" alt="">
                <h5>SAVA INR 10%</h5>
                <h6><a href="#" class="font-weight-bold">LOGIN</a> & use wallet balance for booking</h6>
            </div>
            <div class="priceHotelSections1">
                <h5>Premium Room Pool View</h5>
                <span>For 2 Adults</span>
                <hr>
                <h6 class=""
                    style="float:left; background-color:red; padding:3px 10px; border-radius:25px; color:#fff;"><i
                        class="fa fa-times" aria-hidden="true"></i>
                    Non-Refundable</h6>
                <h6 class=""
                    style="float:right; background-color:green; padding:3px 10px; border-radius:25px; color:#fff;"><i
                        class="fa fa-check" aria-hidden="true"></i> Room with
                    Breakfast</h6>
                <br>

                <h4 class="text-muted m-0 pt-2 font-weight-normal text-right" style="font-size:18px;"><del>₹ 8,500</del>
                </h4>
                <p class="m-0 small pt-2 text-muted" style="float:left;">+ ₹ 1,236 taxes & fees</p>
                <h3 class=" font-weight-bold m-0 text-right">₹ 7,500</h3>
                <p class="text-muted small m-0 text-right">Per Night</p>
                <hr>
                <button class="mt-1"> <a class="nav-link p-0" href="#rooms">View More <i class="fa fa-arrow-circle-down"
                            aria-hidden="true"></i></a></button>
                <button class="bookBtnSet">Book Now</button>
            </div>
            <div class="tmchotel1">
                <p><i class="fa fa-bell" aria-hidden="true"></i> Hurry! Last few rooms remaining for your dates on
                    XYZ</p>
            </div>
            <div class="hotelMap1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14007.878186701844!2d77.1218021!3d28.6306748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bb76b9e38af0980!2sMake%20True%20Trip%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1645876153471!5m2!1sen!2sin"
                    width="330" height="140" style="border:0;  border-radius: 10px;" allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<div id="buttonGallary" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="card p-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/hotel/room1.jpg" alt="..."
                            style="width:1140px; height:600px; background-size:cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slider One</h5>
                            <p>Slider Paragraph</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hotel/room2.jpg" alt="..."
                            style="width:1140px; height:600px; background-size:cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slider Two</h5>
                            <p>Slider Paragraph</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hotel/room3.jpg" alt="..."
                            style="width:1140px; height:600px; background-size:cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slider Three</h5>
                            <p>Slider Paragraph</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hotel/room4.jpg" alt="..."
                            style="width:1140px; height:600px; background-size:cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slider Four</h5>
                            <p>Slider Paragraph</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hotel/room5.jpg" alt="..."
                            style="width:1140px; height:600px; background-size:cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slider Five</h5>
                            <p>Slider Paragraph</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hotel/room6.jpg" alt="..."
                            style="width:1140px; height:600px; background-size:cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slider Six</h5>
                            <p>Slider Paragraph</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>

<div class="hotelOverView1" data-spy="scroll">
    <ul class="navbar navbar-expand-sm navbar-dark">
        <li class="nav-item">
            <a class="nav-link" href="#overview">OVERVIEW</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#rooms">ROOMS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#location">LOCATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#facilities">FACILITIES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#property">PROPERTY RULES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#user">USER REVIEWS</a>
        </li>
    </ul>

    <div id="overview">
        <h4>About Phoenix Park Inn by Radisson</h4>
        <h6>Lavish rooms, multiple dining spots, an outdoor swimming pool and a host of amenities await you for a
            delightful stay at this luxurious property.</h6>
        <p>&#9679; Take a refreshing dip in the outdoor swimming pool.</p>
        <p>&#9679; Start your day with a refreshing workout session at the well-equipped fitness centre.</p>
        <p>&#9679; Satiate your palate with regional dishes and mouth-watering international cuisines at Chapora
            Restaurant.</p>
        <div class="highlightdetails1">
            <h5>Highlights</h5>
            <ul>
                <li>
                    <img src="assets/images/hotel/check-in-desk.png" alt="">
                    <p>Check-in [24-hour]</p>
                </li>
                <li>
                    <img src="assets/images/hotel/airport.png" alt="">
                    <p>Airport transfer </p>
                </li>
                <li>
                    <img src="assets/images/hotel/wifi-router.png" alt="">
                    <p>Free Wi-Fi</p>
                </li>
                <li>
                    <img src="assets/images/hotel/english-breakfast.png" alt="">
                    <p>Breakfast</p>
                </li>
                <li>
                    <img src="assets/images/hotel/air-conditioner.png" alt="">
                    <p>Air conditioning</p>
                </li>
            </ul>
        </div>
    </div>

    <div id="rooms">
        <h5>CHOOSE ROOM</h5>
        <div class="roomSelects1">
            <div class="leftSideHotelRoom">
                <div id="hotelRoomsImages1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/hotel/room1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room4.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room5.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room6.jpg" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#hotelRoomsImages1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#hotelRoomsImages1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="rightSideHotelRoom">
                <h5>Standard Room</h5>
                <p class="float-left mr-5"><i class="fa fa-bed" aria-hidden="true"></i> King Size Bed</p>
                <p><i class="fa fa-square-o" aria-hidden="true"></i> 3.66x3.66 sq.mtr</p>
                <ul>
                    <li> <i class="fa fa-check" aria-hidden="true"></i> Free Wi-Fi</li>
                    <li> <i class="fa fa-check" aria-hidden="true"></i> TV</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Air Conditioning</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Iron/Ironing Board</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Telephone</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Housekeeping</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Electric Kettle</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Hairdryer</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Shower</li>
                </ul>
                <div class="container p-0">
                    <div class="row p-0">
                        <div class="col-sm-2">
                            <h4 class="m-0 p-0 font-weight-bold">₹8,500</h4>
                        </div>
                        <div class="col-sm-1">
                            <h6 class="m-0 text-muted pt-1"><del>₹9,500</del></h6>
                        </div>
                        <div class="col-sm-2">
                            <h6 class="m-0 text-success font-weight-bold pt-1">16% OFF</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="m-0  pt-1">1 Room/Night</h6>
                        </div>
                    </div>
                </div>

                <h6 class="float-left text-primary" style="margin-top:35px;">Cancellation Policy</h6>
                <button class="float-right mt-4">Select Room</button>
            </div>
        </div>
        <div class="roomSelects1">
            <div class="leftSideHotelRoom">
                <div id="hotelRoomsImages2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/hotel/room1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room4.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room5.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room6.jpg" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#hotelRoomsImages2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#hotelRoomsImages2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="rightSideHotelRoom">
                <h5>Deluxe Room</h5>
                <p class="float-left mr-5"><i class="fa fa-bed" aria-hidden="true"></i> King Size Bed</p>
                <p><i class="fa fa-square-o" aria-hidden="true"></i> 3.66x3.66 sq.mtr</p>
                <ul>
                    <li> <i class="fa fa-check" aria-hidden="true"></i> Free Wi-Fi</li>
                    <li> <i class="fa fa-check" aria-hidden="true"></i> TV</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Air Conditioning</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Iron/Ironing Board</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Telephone</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Housekeeping</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Electric Kettle</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Hairdryer</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Shower</li>
                </ul>
                <div class="container p-0">
                    <div class="row p-0">
                        <div class="col-sm-2">
                            <h4 class="m-0 p-0 font-weight-bold">₹8,500</h4>
                        </div>
                        <div class="col-sm-1">
                            <h6 class="m-0 text-muted pt-1"><del>₹9,500</del></h6>
                        </div>
                        <div class="col-sm-2">
                            <h6 class="m-0 text-success font-weight-bold pt-1">16% OFF</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="m-0  pt-1">1 Room/Night</h6>
                        </div>
                    </div>
                </div>

                <h6 class="float-left text-primary" style="margin-top:35px;">Cancellation Policy</h6>
                <button class="float-right mt-4">Select Room</button>
            </div>
        </div>
        <div class="roomSelects1">
            <div class="leftSideHotelRoom">
                <div id="hotelRoomsImages3" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/hotel/room1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room4.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room5.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/hotel/room6.jpg" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#hotelRoomsImages3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#hotelRoomsImages3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="rightSideHotelRoom">
                <h5>Premium Room</h5>
                <p class="float-left mr-5"><i class="fa fa-bed" aria-hidden="true"></i> King Size Bed</p>
                <p><i class="fa fa-square-o" aria-hidden="true"></i> 3.66x3.66 sq.mtr</p>
                <ul>
                    <li> <i class="fa fa-check" aria-hidden="true"></i> Free Wi-Fi</li>
                    <li> <i class="fa fa-check" aria-hidden="true"></i> TV</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Air Conditioning</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Iron/Ironing Board</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Telephone</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Housekeeping</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Electric Kettle</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Hairdryer</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Shower</li>
                </ul>
                <div class="container p-0">
                    <div class="row p-0">
                        <div class="col-sm-2">
                            <h4 class="m-0 p-0 font-weight-bold">₹8,500</h4>
                        </div>
                        <div class="col-sm-1">
                            <h6 class="m-0 text-muted pt-1"><del>₹9,500</del></h6>
                        </div>
                        <div class="col-sm-2">
                            <h6 class="m-0 text-success font-weight-bold pt-1">16% OFF</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="m-0  pt-1">1 Room/Night</h6>
                        </div>
                    </div>
                </div>

                <h6 class="float-left text-primary" style="margin-top:35px;">Cancellation Policy</h6>
                <button class="float-right mt-4">Select Room</button>
            </div>
        </div>
    </div>

    <div id="location">
        <div class="leftSideLocations1">
            <h5>Around this hotel:</h5>
            <div class="aroundHotel1">
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Near Subhash Nagar Metro Stations (0.5km)
                    </li>

                </ul>
            </div>
        </div>
        <div class="rightSiderLocations1">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14007.878186701844!2d77.1218021!3d28.6306748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bb76b9e38af0980!2sMake%20True%20Trip%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1645876153471!5m2!1sen!2sin"
                width=715" height="400" style="border:0;  border-radius: px;" allowfullscreen=""
                loading="lazy"></iframe>
        </div>
    </div>

    <div id="facilities">
        <h5>AMENITIES</h5>
        <h6>Basic Facilities</h6>
        <ul class="basicfacilities1">
            <li>&#9755; Free Parking</li>
            <li>&#9755; Free Wi-Fi</li>
            <li>&#9755; Elevator/Lift</li>
            <li>&#9755; 24-hour Room Service</li>
            <li>&#9755; Air Conditioning</li>
            <li>&#9755; Power Backup</li>
            <li>&#9755; Dry Cleaning Service</li>
            <li>&#9755; Housekeeping</li>
            <li>&#9755; Public Restrooms</li>
            <li>&#9755; Umbrellas</li>
            <li>&#9755; Smoke Detector</li>
            <li>&#9755; Laundry Service</li>
            <li>&#9755; Attached Bathroom</li>
            <li>&#9755; Telephone</li>
            <li>&#9755; Swimming Pool</li>
            <li>&#9755; Ironing Service</li>
        </ul>

        <h6>Safety and Hygiene</h6>
        <ul class="saferyandHygine1">
            <li>&#9755; Masks</li>
            <li>&#9755; Gloves</li>
            <li>&#9755; Sanitizers</li>
            <li>&#9755; Staff Hygiene</li>
            <li>&#9755; Thermal Screening</li>
            <li>&#9755; Sanitizers Installed</li>
            <li>&#9755; Property Disinfection</li>
            <li>&#9755; Contactless room service</li>
            <li>&#9755; Disposable serveware</li>
            <li>&#9755; Hospital</li>
            <li>&#9755; Contactless check-in</li>
        </ul>

        <h6>Food and Drinks</h6>
        <ul class="foodAndDrinks1">
            <li>&#9755; Bakery</li>
            <li>&#9755; Bar</li>
            <li>&#9755; Cafe</li>
            <li>&#9755; Restaurant</li>
            <li>&#9755; Cooking Class</li>
            <li>&#9755; Dining Area</li>
            <li>&#9755; Kids' Meals</li>
            <li>&#9755; Coffee Shop</li>
        </ul>

        <h6>Safety and Security</h6>
        <ul class="safetyAndSecurity1">
            <li>&#9755; Fire Extinguishers</li>
            <li>&#9755; Safety and Security</li>
            <li>&#9755; Electronic Keycard</li>
            <li>&#9755; 24-hour Security</li>
            <li>&#9755; In-room Safe</li>
            <li>&#9755; Smoke alarms</li>
        </ul>

        <h6>Health and wellness</h6>
        <ul class="healthAndWellness1">
            <li>&#9755; Gym</li>
        </ul>

    </div>
    <div id="property">
        <h5>Property policies</h5>
        <h6 class="pt-4">Children and extra beds</h6>
        <p class="pt-2">Extra beds are dependent on the room you choose. Please check the individual room capacity for
            more details.</p>
        <h6 class="pt-2">All children are welcome.</h6>

        <div class="pptpa1">
            <h6>Infant 0-2 year(s)</h6>
            <hr>
            <h6 class="text-left m-0 pb-2">Stay for free if using existing bedding.</h6>
            <p>Baby cot/crib available upon request</p>
        </div>
        <div class="pptpa2">
            <h6>Children 3-11 year(s)</h6>
            <hr>
            <h6 class="text-left m-0 pb-2">Stay for free if using existing bedding.</h6>
            <p>If you need an extra bed, it will incur an additional charge.</p>
        </div>
        <div class="pptpa3">
            <h6>Guests 12 years and older are considered as adults</h6>
            <hr>
            <p>Must use an extra bed which will incur an additional charge.</p>
        </div>

        <h6 class=" m-0 pt-4">Others</h6>
        <p class="pt-2">When booking more than 5 rooms, different policies and additional supplements may apply.</p>

        <h6>Some helpful facts</h6>
        <hr>
        <p>Address proof with photo is mandatory for all the staying guests,if the room is on double occupancy it should
            be with both the staying guests and same if its triple 2.PAN Card is not a valid proof 3.Driving
            Licencse,Aadhar Card,Passport and Voter Id Card ( Any One) for an Indian and Valid Passport for a Foreigner
            is mandatory 4.Hotel will not refund the amount to the guest if the room is not provided in absence of valid
            proof as the customers show confirmation vouchers Departure of 31 December will not be allowed.. </p>
    </div>

    <div id="user">
        <div class="container p-0">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4 border-right">
                        <div class="ratings text-center p-4 py-5"> <span class="badge bg-success">4.1 <i
                                    class="fa fa-star-o"></i></span> <span class="d-block about-rating">VERY GOOD</span>
                            <span class="d-block total-ratings">183 ratings</span> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="rating-progress-bars p-3">
                            <div class="progress-1 align-items-center">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%;"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"> 71% </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-custom" role="progressbar" style="width: 55%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 48%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">48%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<script>
    var modal = document.getElementById("buttonGallary");
    var btn = document.getElementById("myBottonGallary");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "block";
    }
    span.onclick = function () {
        modal.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>


<!--------- Desktop end view ------>
<x-footer />
@endsection

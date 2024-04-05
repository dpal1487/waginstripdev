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

<div class="container mt-4 mb-4 pb-4" style="background-color:#fff;     border-radius: 5px;">
    <div class="row">
        <div class="col-sm-8 p-0">
            <div id="carouselExampleFade" class="carousel p-4 slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/hotel/room-1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hotel/room-2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hotel/room-3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hotel/room-4.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-4 p-4">
            <div class="card">
                <div class="card-body rounded">
                    <h5 class="font-weight-bold">Dubble Bed Rooms</h5>
                    <p class="small text-black-50">
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
                    <div class="row">
                        <div class="col-sm-7">
                            <p class="small font-weight-bold text-dark">Mon, 24 Jan - Tue, 25 Jan</p>
                        </div>
                        <div class="col-sm-5">
                            <p class="small font-weight-bold text-dark">1 Room, 2 Guests</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <p class="small m-0 text-success"><i class="fa fa-check" aria-hidden="true"></i> Free
                                Cancellation till check in</p>
                            <p class="small m-0"><i class="fa fa-check" aria-hidden="true"></i> Room With Free
                                Cancellation</p>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="text-muted text-right m-0"><del>₹ 2000</del></h5>
                            <h4 class="text-right m-0 font-weight-bold text-danger">₹ 1500</h4>
                            <p class="small m-0 text-right text-muted ">Per Night</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-light float-left btn-sm">View Room</button>
                            <a href="{{ url('/hotel-booking') }}"><button type="button" class="btn btn-primary float-right btn-sm">Book Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9693901552623!2d77.11961341498107!3d28.63067949091588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03a578d54499%3A0x6bb76b9e38af0980!2sMake%20True%20Trip%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1643019450972!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-sm-12">
            <h4 class="m-0 font-weight-bold">Goa Holiday Home</h4>
            <p class="small text-black-50 m-0">
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </p>
            <p class="small text-dark m-0"><i class="fa fa-map-marker" aria-hidden="true"></i> 5B/13, Tilak Nagar,
                Near Metro Station, Delhi-18 </p>
        </div>
    </div>
    <div class="row mt-0 p-2">
        <div class="col-sm-12">
            <h4 class="font-weight-bold pt-2">Property Highlights</h4>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-sm-6">
            <div class="card p-3">
                <p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 500+ guests like you rated their stay Very Good
                </p>
                <p><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Perfect for two-night stay!</p>
                <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> Lounge zone with foosball, a book library and
                    a guitar</p>
                <p><i class="fa fa-taxi" aria-hidden="true"></i> Candolim Beach is 11.6 km from the property</p>
                <p><i class="fa fa-taxi" aria-hidden="true"></i> Calangute Beach is 15.1 km from the property</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card p-3">
                <p><i class="fa fa-coffee" aria-hidden="true"></i> Amazing breakfast! Guests like food quality, service
                    and variety</p>
                <p><i class="fa fa-th" aria-hidden="true"></i> 500+ guests rated facilities as Impressive</p>
                <p><i class="fa fa-heart-o" aria-hidden="true"></i> Vibe: Calmness</p>
                <p><i class="fa fa-bed" aria-hidden="true"></i> Great rooms at the property! Guests liked the interiors
                    & facilities, washroom and spacious room</p>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-sm-12">
            <h5 class="font-weight-bold bg-primary pt-2 pb-2 text-center text-white">Amenities</h5>
            <h6 class="font-weight-bold pt-2 bg-light">Facilities</h6>
            <div class="row">
                <div class="col-sm-2">
                    <p><img src="assets/images/hotel/cocktail.png" alt=""> Bar(s)</p>
                </div>
                <div class="col-sm-2">
                    <p><img src="assets/images/hotel/dish.png" alt=""> Restaurant(s)</p>
                </div>
                <div class="col-sm-2">
                    <p><img src="assets/images/hotel/globe.png" alt=""> Internet access</p>
                </div>
                <div class="col-sm-2">
                    <p><img src="assets/images/hotel/ethernet.png" alt=""> Wlan access</p>
                </div>
                <div class="col-sm-2">
                    <p><img src="assets/images/hotel/beds.png" alt=""> Room service</p>
                </div>
                <div class="col-sm-2">
                    <p><img src="assets/images/hotel/washing-machine.png" alt=""> Laundry service</p>
                </div>
            </div>
            <h6 class="font-weight-bold pt-2 bg-light">Room Facilities</h6>
            <div class="row">
                <div class="col-sm-3">
                    <p><img src="assets/images/hotel/bath.png" alt=""> Bathroom</p>
                </div>
                <div class="col-sm-3">
                    <p><img src="assets/images/hotel/shower.png" alt=""> Shower</p>
                </div>
                <div class="col-sm-3">
                    <p><img src="assets/images/hotel/freelance.png" alt=""> Internet Access</p>
                </div>
                <div class="col-sm-3">
                    <p><img src="assets/images/hotel/air.png" alt=""> Air Conditioning</p>
                </div>
                <div class="col-sm-3">
                    <p><img src="assets/images/hotel/lounge.png" alt=""> Lounge</p>
                </div>
                <div class="col-sm-3">
                    <p><img src="assets/images/hotel/balcony.png" alt=""> Balcony</p>
                </div>
                <div class="col-sm-3">
                    <p><img src="assets/images/hotel/tv-monitor.png" alt=""> TV</p>
                </div>
                <div class="col-sm-3">
                    <p><img src="assets/images/hotel/bed.png" alt=""> Double Bed</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-room-type">
    <div class="sec-room-det">
        <div class="sec-col-4">
            <h6 class="font-weight-bold text-uppercase">Room Types</h6>
        </div>
        <div class="sec-col-3">
            <h6 class="font-weight-bold text-uppercase">Options</h6>
        </div>
        <div class="sec-col-5">
            <h6 class="font-weight-bold text-uppercase">Price</h6>
        </div>
    </div>
    <div class="sec-room-get">
        <div class="sec-get-4">
            <h6>Deluxe AC Room</h6>
            <div id="sliderroomimg" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block images-222" src="assets/images/hotel/room-1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-3.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-4.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-5.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#sliderroomimg" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#sliderroomimg" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="sec-get-3">
            <span class="text-danger">RECOMMENDED</span>
            <span class="text-success border-success">MTT LUXE PACKAGE</span>
            <h6 class="m-0 pt-3 pb-3 font-weight-bold">Room with Breakfast</h6>
            <p class="m-0 small"><i class="fa fa-times-circle-o text-danger" aria-hidden="true"></i> Non-Refundable</p>
            <p class="m-0 small"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Breakfast</p>
            <p class="m-0 small pb-5"><i class="fa fa-check-circle-o" aria-hidden="true"></i> City Getaway</p>
        </div>
        <div class="sec-get-5 p-4">
            <p class="m-0 pt-4 text-muted text-right">Per Night</p>
            <h5 class="m-0 text-right text-muted"><del>₹10,000</del></h5>
            <h3 class="m-0 text-right text-danger font-weight-bold">₹8,000</h3>
            <h6 class="m-0 text-right text-dark small">₹1,400 Taxes & Fees</h6>
            <button class="book-now-btn">BOOK NOW</button>
        </div>
    </div>
    <div class="sec-room-get">
        <div class="sec-get-4">
            <h6>Standard Double Room</h6>
            <div id="sliderroomimg1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block images-222" src="assets/images/hotel/room-1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-3.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-4.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-5.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#sliderroomimg1" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#sliderroomimg1" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="sec-get-3">
            <div class="scrolls-1">
                <p class="m-0 small"><i class="fa fa-check text-success" aria-hidden="true"></i> Breakfast Included</p>
                <p class="m-0 small"><i class="fa fa-check text-success" aria-hidden="true"></i> Cancellation Charges
                    Apply</p>
                <ul class="p-0 ml-3 small">
                    <li class="p-0">Hotel Policy</li>
                    <li class="p-0">POLICY_CHILDREN</li>
                    <li class="p-0">All children are welcome. One child under 6 years stays free of charge when using
                        existing beds.
                        One older child or adult is charged INR 1000 per night in an extra bed.
                        The maximum number of extra beds in a room is 1. The maximum number of total guests in a room is
                        7.
                        There is no capacity for cots in the room. </li>
                    <li class="p-0">POLICY_HOTEL_INTERNET</li>
                    <li class="p-0">Wired internet is available in public areas and is free of charge. </li>
                    <li class="p-0">POLICY_HOTEL_PARKING</li>
                    <li class="p-0">Free private parking is possible on site (reservation is needed). </li>
                    <li class="p-0">POLICY_HOTEL_PETS</li>
                    <li class="p-0">Pets are not allowed. </li>
                    <li class="p-0">POLICY_PREAUTHORIZE</li>
                    <li class="p-0">The property reserves the right to pre-authorise credit cards prior to arrival.</li>
                </ul>
            </div>
        </div>
        <div class="sec-get-5 p-4">
            <h3 class="m-0 pt-5 text-right text-danger font-weight-bold">₹8,000</h3>
            <h6 class="m-0 text-right text-dark small">₹1,400 Taxes & Fees</h6>
            <button class="book-now-btn">BOOK NOW</button>
        </div>
    </div>
    <div class="sec-room-get">
        <div class="sec-get-4">
            <h6>Deluxe AC Room</h6>
            <div id="sliderroomimg2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block images-222" src="assets/images/hotel/room-1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-3.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-4.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-5.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#sliderroomimg2" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#sliderroomimg2" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="sec-get-3">
            <span class="text-danger">RECOMMENDED</span>
            <span class="text-success border-success">MTT LUXE PACKAGE</span>
            <h6 class="m-0 pt-3 pb-3 font-weight-bold">Room with Breakfast</h6>
            <p class="m-0 small"><i class="fa fa-times-circle-o text-danger" aria-hidden="true"></i> Non-Refundable</p>
            <p class="m-0 small"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Free Breakfast</p>
            <p class="m-0 small pb-5"><i class="fa fa-check-circle-o" aria-hidden="true"></i> City Getaway</p>
        </div>
        <div class="sec-get-5 p-4">
            <p class="m-0 pt-4 text-muted text-right">Per Night</p>
            <h5 class="m-0 text-right text-muted"><del>₹10,000</del></h5>
            <h3 class="m-0 text-right text-danger font-weight-bold">₹8,000</h3>
            <h6 class="m-0 text-right text-dark small">₹1,400 Taxes & Fees</h6>
            <button class="book-now-btn">BOOK NOW</button>
        </div>
    </div>
    <div class="sec-room-get">
        <div class="sec-get-4">
            <h6>Standard Double Room</h6>
            <div id="sliderroomimg3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block images-222" src="assets/images/hotel/room-1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-3.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-4.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block images-222" src="assets/images/hotel/room-5.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#sliderroomimg3" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#sliderroomimg3" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="sec-get-3">
            <div class="scrolls-1">
                <p class="m-0 small"><i class="fa fa-check text-success" aria-hidden="true"></i> Breakfast Included</p>
                <p class="m-0 small"><i class="fa fa-check text-success" aria-hidden="true"></i> Cancellation Charges
                    Apply</p>
                <ul class="p-0 ml-3 small">
                    <li class="p-0">Hotel Policy</li>
                    <li class="p-0">POLICY_CHILDREN</li>
                    <li class="p-0">All children are welcome. One child under 6 years stays free of charge when using
                        existing beds.
                        One older child or adult is charged INR 1000 per night in an extra bed.
                        The maximum number of extra beds in a room is 1. The maximum number of total guests in a room is
                        7.
                        There is no capacity for cots in the room. </li>
                    <li class="p-0">POLICY_HOTEL_INTERNET</li>
                    <li class="p-0">Wired internet is available in public areas and is free of charge. </li>
                    <li class="p-0">POLICY_HOTEL_PARKING</li>
                    <li class="p-0">Free private parking is possible on site (reservation is needed). </li>
                    <li class="p-0">POLICY_HOTEL_PETS</li>
                    <li class="p-0">Pets are not allowed. </li>
                    <li class="p-0">POLICY_PREAUTHORIZE</li>
                    <li class="p-0">The property reserves the right to pre-authorise credit cards prior to arrival.</li>
                </ul>
            </div>
        </div>
        <div class="sec-get-5 p-4">
            <h3 class="m-0 pt-5 text-right text-danger font-weight-bold">₹8,000</h3>
            <h6 class="m-0 text-right text-dark small">₹1,400 Taxes & Fees</h6>
            <button class="book-now-btn">BOOK NOW</button>
        </div>
    </div>
</div>

<div class="section-location p-4">
    <h5 class="font-weight-bold pb-3">Location</h5>
    <div class="map-sections">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9693901552623!2d77.11961341498107!3d28.63067949091588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03a578d54499%3A0x6bb76b9e38af0980!2sMake%20True%20Trip%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1643019450972!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="nearby-sections">
        <h5 class="font-weight-bold pl-3">Around this hotel:</h5>
        <div class="scrly p-4">
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> St. Alex Church 4.5 km</p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> St. Anthonys Chapel 5.5 km
            </p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> Chapora Fortress 2.5 km
            </p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> Church of Our Lady of
                Immaculate Conception 3.5 km</p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> Fort Aguada 6.5 km</p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> Panaji Bridge 4.2 km</p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> Aguada Lighthouse 2.3 km
            </p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> Goa State Museum 3.5 km
            </p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> Dr. Jack Sequeira Statue
                7.5 km</p>
            <p class="small text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> Church of St. Cajetan 2.3
                km</p>
        </div>
    </div>
</div>

<div class="container mb-4" style="background-color:#fff;     border-radius: 5px;">
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="mb-2 text-uppercase font-weight-bold">Similar Hotels </h4>
                </div>
                <div class="col-6 text-right">
                    <a class="btn mb-3 mr-1" href="#sliderimages23" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="btn  mb-3 " href="#sliderimages23" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="sliderimages23" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/hotel/room-1.png">
                                            <div class="card-body">
                                                <h6 class=" font-weight-bold">Resort Palmeiras Dourado</h6>
                                                <p class="small m-0 pb-1"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> 14.45 km from Sterling Goa Varca </p>
                                                <p class="small m-0"><i class="fa fa-map-pin" aria-hidden="true"></i>
                                                    258/2 Primeiro Vaddo Velsao Beach Road Velsao Cansaulim 403712 Goa
                                                </p>
                                                <h3 class=" font-weight-bold m-0 pt-3 text-right">₹5300</h3>
                                                <p class="small m-0 text-right">Per Night</p>
                                                <button type="button" class="btn small mt-3 btn-danger float-right">View
                                                    Rooms</button>
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
    </section>
</div>

<div class="facilities">
    <h3 class="font-weight-bold pt-4 pl-4 m-0">Facilities at Holiday Inn Goa International Airport</h3>
    <div class="list-types">
        <div class="box-facilites">
            <div>
                <img src="assets/images/hotel/free_parking.png" alt="">
            </div>
            <h6>Free Parking</h6>
        </div>
        <div class="box-facilites">
            <div>
                <img src="assets/images/hotel/free_wi_fi.png" alt="">
            </div>
            <h6>Free Wi-Fi</h6>
        </div>
        <div class="box-facilites">
            <div>
                <img src="assets/images/hotel/kids_play_area.png" alt="">
            </div>
            <h6>Kids Pay Area</h6>
        </div>

        <div class="box-facilites">
            <div>
                <img src="assets/images/hotel/outdoor_sports.png" alt="">
            </div>
            <h6>Outdoor Sports</h6>
        </div>
        <div class="box-facilites">
            <div>
                <img src="assets/images/hotel/childcare_services.png" alt="">
            </div>
            <h6>Child Care</h6>
        </div>
    </div>
    <div class="list-of-offer">
        <div>
            <h6 class="pb-1 font-weight-bold">Basic Facilities</h6>
            <p class="m-0 small">&#8208; Air Conditioning</p>
            <p class="m-0 small">&#8208; Room Service</p>
            <p class="m-0 small">&#8208; Smoke Detector</p>
            <p class="m-0 small">&#8208; Wi-Fi</p>
            <p class="m-0 small">&#8208; Parking</p>
        </div>
        <div>
            <h6 class="pb-1 font-weight-bold">Food and Drinks</h6>
            <p class="m-0 small">&#8208; Restaurant</p>
            <p class="m-0 small">&#8208; Dining Area</p>
        </div>
        <div>
            <h6 class="pb-1 font-weight-bold">Payment Services</h6>
            <p class="m-0 small">&#8208; Currency Exchange</p>
            <p class="m-0 small">&#8208; Card Payment</p>
            <p class="m-0 small">&#8208; Cash On Counter</p>
        </div>
        <div>
            <h6 class="pb-1 font-weight-bold">Safety and Security</h6>
            <p class="m-0 small">&#8208; Safe</p>
            <p class="m-0 small">&#8208; Fire Extinguishers</p>
            <p class="m-0 small">&#8208; Security Guard</p>
            <p class="m-0 small">&#8208; Under Surveillance</p>
        </div>
        <div>
            <h6 class="pb-1 font-weight-bold">General Services</h6>
            <p class="m-0 small">&#8208; Luggage Storage</p>
            <p class="m-0 small">&#8208; Concierge</p>
            <p class="m-0 small">&#8208; Multilingual Staff</p>
            <p class="m-0 small">&#8208; Spa</p>
            <p class="m-0 small">&#8208; Business Services</p>
        </div>
    </div>
    <!-- <div class="property-rules">
        <h3 class="font-weight-bold pl-4 m-0">Property Rules</h3>
        <h6 class="text-muted pl-4 m-0 pt-1">Check-in:<strong> 2PM </strong> Check-out: <strong>12PM</strong></h6>
        <div class="left-sec-rule mt-2">
            <ul class="text-dark small">
                <li>Quarantine protocols are being followed as per local government authorities</li>
                <li>Guests from containment zones are not allowed</li>
                <li>Property staff is trained on hygiene guidelines</li>
            </ul>
        </div>
        <div class="right-sec-rule mt-2">
            <ul class="text-dark small">
                <li>Guests with fever are not allowed</li>
                <li>Only those guests with safe status on Aarogya Setu app are allowed</li>
            </ul>
        </div>
    </div>

    <div class="rules-policy-15">
        <h3 class="font-weight-bold pl-4 m-0">Rules and Policies</h3>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">Safety and Hygiene</h6>
        <ul class="small">
            <li>Quarantine protocols are being followed as per local government authorities</li>
            <li>Guests from containment zones are not allowed</li>
            <li>Property staff is trained on hygiene guidelines</li>
            <li>Guests with fever are not allowed</li>
            <li>Only those guests with safe status on Aarogya Setu app are allowed</li>
        </ul>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">Guest Profile</h6>
        <ul class="small">
            <li>Unmarried couples allowed</li>
            <li>Bachelors allowed</li>
            <li>Guests below 18 years of age are allowed</li>
            <li>Suitable for children</li>
        </ul>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">Payment Related</h6>
        <ul class="small">
            <li>Credit/debit cards are accepted</li>
            <li>Master Card and Visa cards are accepted</li>
        </ul>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">Food Arrangement</h6>
        <ul class="small">
            <li>Outside food is not allowed</li>
        </ul>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">Food and Drinks Hygiene</h6>
        <ul class="small">
            <li>Social distancing is followed in restaurants</li>
            <li>Serveware and supplies are sanitized before they are brought to the kitchen</li>
            <li>Masks and hairnets are mandatory for staff in restaurants</li>
        </ul>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">Smoking/Alcohol consumption Rules</h6>
        <ul class="small">
            <li>Smoking within the premises is allowed</li>
            <li>Alcohol consumption is not allowed within the property premises.</li>
        </ul>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">Pet(s) Related</h6>
        <ul class="small">
            <li>Pets are not allowed.</li>
            <li>There are no pets living on the property</li>
        </ul>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">ID Proof Related</h6>
        <ul class="small">
            <li>Passport, Aadhar and Driving License are accepted as ID proof(s)</li>
            <li>PAN Card, Office ID and Non-Govt IDs are not accepted as ID proof(s)</li>
        </ul>
        <h6 class="pl-4 pt-2 text-dark font-weight-bold">Other Rules</h6>
        <ul class="small">
            <li>Allows private parties or events</li>
            <li>Visitors are not allowed</li>
            <li>1.Address proof with photo is mandatory for all the staying guests,if the room
                is on double occupancy it should be with both the staying guests and same if its
                triple 2.PAN Card is not a valid proof 3.Driving Licencse,Aadhar Card,Passport
                and Voter Id Card ( Any One) for an Indian and Valid Passport for a Foreigner
                is mandatory 4.Hotel will not refund the amount to the guest if the room is
                not provided in absence of valid proof as the customers
                show confirmation vouchers Departure of 31 December will not be allowed.. </li>
        </ul>
    </div> -->
</div>

<div class="container p-0 mb-4">
    <p>
        <a class="btn font-weight-bold" data-toggle="collapse" href="#collapseExample" role="button"
            aria-expanded="false" aria-controls="collapseExample">
            More Details
        </a>
    </p>
    <div class="collapse" id="collapseExample"
        style="background-color:#fff; border-radius:5px; border:1px solid rgba(128, 128, 128, 0.432);">
        <div class="card card-body togle-back1 p-0">
            <div class="property-rules mt-3">
                <h3 class="font-weight-bold pl-4 m-0">Property Rules</h3>
                <h6 class="text-muted pl-4 m-0 pt-1">Check-in:<strong> 2PM </strong> Check-out: <strong>12PM</strong>
                </h6>
                <div class="left-sec-rule mt-2">
                    <ul class="text-dark small">
                        <li>Quarantine protocols are being followed as per local government authorities</li>
                        <li>Guests from containment zones are not allowed</li>
                        <li>Property staff is trained on hygiene guidelines</li>
                    </ul>
                </div>
                <div class="right-sec-rule mt-2">
                    <ul class="text-dark small">
                        <li>Guests with fever are not allowed</li>
                        <li>Only those guests with safe status on Aarogya Setu app are allowed</li>
                    </ul>
                </div>
            </div>

            <div class="rules-policy-15">
                <h3 class="font-weight-bold pl-4 m-0">Rules and Policies</h3>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">Safety and Hygiene</h6>
                <ul class="small">
                    <li>Quarantine protocols are being followed as per local government authorities</li>
                    <li>Guests from containment zones are not allowed</li>
                    <li>Property staff is trained on hygiene guidelines</li>
                    <li>Guests with fever are not allowed</li>
                    <li>Only those guests with safe status on Aarogya Setu app are allowed</li>
                </ul>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">Guest Profile</h6>
                <ul class="small">
                    <li>Unmarried couples allowed</li>
                    <li>Bachelors allowed</li>
                    <li>Guests below 18 years of age are allowed</li>
                    <li>Suitable for children</li>
                </ul>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">Payment Related</h6>
                <ul class="small">
                    <li>Credit/debit cards are accepted</li>
                    <li>Master Card and Visa cards are accepted</li>
                </ul>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">Food Arrangement</h6>
                <ul class="small">
                    <li>Outside food is not allowed</li>
                </ul>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">Food and Drinks Hygiene</h6>
                <ul class="small">
                    <li>Social distancing is followed in restaurants</li>
                    <li>Serveware and supplies are sanitized before they are brought to the kitchen</li>
                    <li>Masks and hairnets are mandatory for staff in restaurants</li>
                </ul>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">Smoking/Alcohol consumption Rules</h6>
                <ul class="small">
                    <li>Smoking within the premises is allowed</li>
                    <li>Alcohol consumption is not allowed within the property premises.</li>
                </ul>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">Pet(s) Related</h6>
                <ul class="small">
                    <li>Pets are not allowed.</li>
                    <li>There are no pets living on the property</li>
                </ul>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">ID Proof Related</h6>
                <ul class="small">
                    <li>Passport, Aadhar and Driving License are accepted as ID proof(s)</li>
                    <li>PAN Card, Office ID and Non-Govt IDs are not accepted as ID proof(s)</li>
                </ul>
                <h6 class="pl-4 pt-2 text-dark font-weight-bold">Other Rules</h6>
                <ul class="small">
                    <li>Allows private parties or events</li>
                    <li>Visitors are not allowed</li>
                    <li>1.Address proof with photo is mandatory for all the staying guests,if the room
                        is on double occupancy it should be with both the staying guests and same if its
                        triple 2.PAN Card is not a valid proof 3.Driving Licencse,Aadhar Card,Passport
                        and Voter Id Card ( Any One) for an Indian and Valid Passport for a Foreigner
                        is mandatory 4.Hotel will not refund the amount to the guest if the room is
                        not provided in absence of valid proof as the customers
                        show confirmation vouchers Departure of 31 December will not be allowed.. </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="user-rating-sec">
    <h4 class="text-dark pl-4 m-0 pt-3 font-weight-bold">User Ratings & Reviews</h4>
    <p class="m-0 pl-4 text-muted">Important information that you need to know before you book!</p>
    <div class="container" id="page-content">
        <div class="padding">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="b-b b-theme nav-active-theme mb-3">
                        <ul class="nav nav-tabs tab-user-rating" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#all"
                                    role="tab" aria-controls="home" aria-selected="true">ALL</a></li>
                            <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#couple"
                                    role="tab" aria-controls="profile" aria-selected="false">COUPLE</a></li>
                            <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#family"
                                    role="tab" aria-controls="contact" aria-selected="false">FAMILY</a></li>
                            <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#business"
                                    role="tab" aria-controls="contact" aria-selected="false">BUSINESS</a></li>
                            <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#group"
                                    role="tab" aria-controls="contact" aria-selected="false">GROUP</a></li>
                            <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#solo"
                                    role="tab" aria-controls="contact" aria-selected="false">SOLO</a></li>
                        </ul>
                    </div>
                    <div class="tab-content backno-1 mb-4 m-2">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                            <div class="user-rating-prg-1">
                                <div class="rating-5">
                                    <p>3.5/5</p>
                                </div>
                                <div class="rating-6">
                                    <h6>Good</h6>
                                    <p>1161 User Reviews and 1670 Ratings</p>
                                </div>
                                <div class="prog-1">
                                    <h4>Safety and Hygiene</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Child friendliness</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Location</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Hospitality</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Value for Money</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                            </div>
                            <div class="all-review">
                                <div>All Reviews</div>
                            </div>
                            <h5 class="font-weight-bold pt-1 pb-1">Featured Reviews</h5>
                            <div class="review-post">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="couple" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="user-rating-prg-1">
                                <div class="rating-5">
                                    <p>3.5/5</p>
                                </div>
                                <div class="rating-6">
                                    <h6>Good</h6>
                                    <p>1161 User Reviews and 1670 Ratings</p>
                                </div>
                                <div class="prog-1">
                                    <h4>Safety and Hygiene</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Child friendliness</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Location</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Hospitality</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Value for Money</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                            </div>
                            <div class="all-review">
                                <div>All Reviews</div>
                            </div>
                            <h5 class="font-weight-bold pt-1 pb-1">Featured Reviews</h5>
                            <div class="review-post">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="user-rating-prg-1">
                                <div class="rating-5">
                                    <p>3.5/5</p>
                                </div>
                                <div class="rating-6">
                                    <h6>Good</h6>
                                    <p>1161 User Reviews and 1670 Ratings</p>
                                </div>
                                <div class="prog-1">
                                    <h4>Safety and Hygiene</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Child friendliness</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Location</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Hospitality</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Value for Money</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                            </div>
                            <div class="all-review">
                                <div>All Reviews</div>
                            </div>
                            <h5 class="font-weight-bold pt-1 pb-1">Featured Reviews</h5>
                            <div class="review-post">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="user-rating-prg-1">
                                <div class="rating-5">
                                    <p>3.5/5</p>
                                </div>
                                <div class="rating-6">
                                    <h6>Good</h6>
                                    <p>1161 User Reviews and 1670 Ratings</p>
                                </div>
                                <div class="prog-1">
                                    <h4>Safety and Hygiene</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Child friendliness</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Location</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Hospitality</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Value for Money</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                            </div>
                            <div class="all-review">
                                <div>All Reviews</div>
                            </div>
                            <h5 class="font-weight-bold pt-1 pb-1">Featured Reviews</h5>
                            <div class="review-post">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="group" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="user-rating-prg-1">
                                <div class="rating-5">
                                    <p>3.5/5</p>
                                </div>
                                <div class="rating-6">
                                    <h6>Good</h6>
                                    <p>1161 User Reviews and 1670 Ratings</p>
                                </div>
                                <div class="prog-1">
                                    <h4>Safety and Hygiene</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Child friendliness</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Location</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Hospitality</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Value for Money</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                            </div>
                            <div class="all-review">
                                <div>All Reviews</div>
                            </div>
                            <h5 class="font-weight-bold pt-1 pb-1">Featured Reviews</h5>
                            <div class="review-post">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="solo" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="user-rating-prg-1">
                                <div class="rating-5">
                                    <p>3.5/5</p>
                                </div>
                                <div class="rating-6">
                                    <h6>Good</h6>
                                    <p>1161 User Reviews and 1670 Ratings</p>
                                </div>
                                <div class="prog-1">
                                    <h4>Safety and Hygiene</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Child friendliness</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Location</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Hospitality</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                                <div class="prog-1">
                                    <h4>Value for Money</h4>
                                    <h5>3.5</h5>
                                    <div class="bs-1"></div>
                                    <div class="bs-2"></div>
                                </div>
                            </div>
                            <div class="all-review">
                                <div>All Reviews</div>
                            </div>
                            <h5 class="font-weight-bold pt-1 pb-1">Featured Reviews</h5>
                            <div class="review-post">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                            <div class="review-post mt-4">
                                <h5 class="font-weight-bold m-0 pt-3 pl-3" style="color:#08609f;">Very good resort but
                                    average breakfast</h5>
                                <p class="small m-0 pl-3 text-muted">Ram Goyel . Couple Traveller . Jan 29, 2022</p>
                                <i class="fa fa-star text-warning pl-3" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <p class="small m-0 pl-3 pt-3 pr-3 text-dark">Riva is a very good and large resort, lots
                                    of greenery, very peaceful, and a truly calm atmosphere.
                                    The staff is also friendly, rooms are nice, wifi is excellent. The spa can be
                                    avoided,
                                    and the breakfast really needs to improve. Connected to mandrem beach through a
                                    small
                                    wooden bridge. You will enjoy your stay here. Opposite the hotel is a very
                                    good cafe called black pepper, with views towards the sea. Good food, but
                                    check the price before ordering riva is a super choice, they really need to
                                    improve breakfast, and the spa is expensive and not that great. Also, gym time
                                    is only till 6 pm, odd rule. If you can get the luxury rooms with partial sea
                                    view with breakfast, go for it!</p>
                                <p class="small m-0 pl-3 pt-3 text-muted">Do you find this helpful? <i
                                        class="fa fa-thumbs-o-up text-success" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--------- Desktop end view ------>
<!------ Script ----->


<x-footer />
@endsection

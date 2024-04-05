@extends('layouts.master')
@section('title','XYZ')
@section("body")
<!-- DESKTOP VIEW START  -->

<div class="section-36">
    <div class="container p-0">
        <section class="bgcolor pt-6p pb-20 back-1">
            <div class="container p-0">
                <div class="card br-18">
                    <form action="{{ route('search-hotel') }}" method="get">
                        <div class="card-body">
                            <div class="radiobox">
                                <span class="uptext">
                                    <a href="#" class="link-color">Search Cruise Package Details </a>
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
                                        <div id="id_deadlineCalendar" class="calendar-widget default-today-return"
                                            tabindex="-1" data-link="#id_startCalendar" date-min="link">
                                            <div class="input-wrapper" id="checkreturnradio">
                                                <div class="searchtitle"> RETURN <i class="fa fa-chevron-down"
                                                        aria-hidden="true"></i></div>
                                                <input class="date-field" id="type1-deadline" name="returnDate"
                                                    type="text" placeholder="CHECK-OUT" readonly>
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
                                        <div class="searchtitle">Travellers <i class="fa fa-chevron-down"
                                                aria-hidden="true"></i></div>
                                        <div class="fnt20" id="total-travller"></div>

                                    </div>
                                    <div class="card content">
                                        <div class="card-body">
                                            <div class="fnt10">ADULTS(12y+)</div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <label class="rdocon">
                                                        <input type="radio" checked="checked" name="noOfAdults"
                                                            value="1">
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
                                                        <input type="radio" checked="checked" name="noOfChilds"
                                                            value="0">
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
                                                        <input type="radio" checked="checked" name="noOfInfants"
                                                            value="0">
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
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<!---- Package Details  ----->

<div class="container mt-4 mb-4 p-0 shadow" style="background-color:#fff; border-radius:5px;">
    <div class="row">
        <div class="col-7">
            <h4 style="color:#0164a3; padding-top:20px; padding-left:25px; font-size:28px; font-weight:700;">Tour of
                Dubai</h4>
            <div class="row ml-4" style="border-bottom: 1px solid #ccc;">
                <ul class="revuews">
                    <li><a href="#">&#9733; 4/5</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Write a review</a></li>
                </ul>
            </div>
            <div class="row ml-4 mt-3">
                <div class="col-4 p-0">
                    <p style="margin:0px; font-size:20px; color:#080f5a;"><i class="fa fa-clock-o"
                            aria-hidden="true"></i> Duration</p>
                    <span style="margin-left:30px; color:grey;">7 Days</span>
                </div>
                <div class="col-4 p-0">
                    <p style="margin:0px; font-size:20px; color:#080f5a;"><i class="fa fa-users" aria-hidden="true"></i>
                        Group Size</p>
                    <span style="margin-left:30px; color:grey;"> 30 People </span>
                </div>
                <div class="col-4 p-0">
                    <p style="margin:0px; font-size:20px; color:#080f5a;"><i class="fa fa-globe" aria-hidden="true"></i>
                        Tour Type</p>
                    <span style="margin-left:30px; color:grey;">Adventures Tour</span>
                </div>
            </div>
            <div class="row ml-4 mt-3">
                <div class="col-4 p-0">
                    <p style="margin:0px; font-size:20px; color:#080f5a;"><i class="fa fa-calendar"
                            aria-hidden="true"></i> Date</p>
                    <span style="margin-left:30px; color:grey;">Jan 19' - Dec 21' </span>
                </div>
                <div class="col-4 p-0">
                    <p style="margin:0px; font-size:20px; color:#080f5a;"><i class="fa fa-user" aria-hidden="true"></i>
                        Min Age</p>
                    <span style="margin-left:30px; color:grey;"> 12+ </span>
                </div>
                <div class="col-4 p-0">
                    <p style="margin:0px; font-size:20px; color:#080f5a;"><i class="fa fa-plane" aria-hidden="true"></i>
                        Pickup From</p>
                    <span style="margin-left:30px; color:grey;">Airport</span>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row p-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block" src="assets/images/cruise/dubai1.jpg" alt="First slide"
                                    style="width:646px; height:360px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/images/cruise/dubai2.jpg" alt="Third slide"
                                    style="width:646px; height:360px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/images/cruise/dubai3.jpg" alt="Third slide"
                                    style="width:646px; height:360px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/images/cruise/dubai3.jpg" alt="Third slide"
                                    style="width:646px; height:360px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/images/cruise/dubai3.jpg" alt="Third slide"
                                    style="width:646px; height:360px;">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 p-4 mt-4 mb-4 ml-5"
            style="background-color:#fff; border-radius:10px; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
            <h5 style="margin:0px; padding-top:10px; color:#177fc1; font-weight:700; font-size:22px;">Tour Booking</h5>
            <p style="margin:0px; padding-top:15px; font-size:18px;">From <span
                    style="font-size:25px; font-weight:700; color:#080f5a;">₹1,50,000</span> <del>₹1,90,000</del></p>
            <p style="margin:0px; padding-top:15px;">From</p>
            <form>
                <input type="date" id="calendar" name="calendar"
                    style="width:340px; height:40px; border-radius: 5px; color:#080f5a; font-size:16px; text-transform: uppercase; outline:none; font-weight:700;">
            </form>
            <p style="margin:0px;">To</p>
            <form>
                <input type="date" id="calendar" name="calendar"
                    style="width:340px; height:40px; border-radius: 5px; color:#080f5a; font-size:16px; text-transform: uppercase; outline:none; font-weight:700;">
            </form>
            <div class="sidebar-guest mt-5 pr-3">
                <div class="qty-box mb-0 d-flex align-items-center justify-content-between">
                    <label class="">Adults <br> <span>Age 18+</span></label>
                    <div class="product-qty ">
                        <div class="custom-qty">
                            <button
                                onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;"
                                class="reduced items" type="button">&#8722;</button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty"
                                name="qty" style="border:none; text-align:center; width:60px; color:#080f5a;">
                            <button
                                onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                class="increase items" type="button"> &#43;</button>
                        </div>
                    </div>
                </div>
                <div class="qty-box mb-0 d-flex align-items-center justify-content-between">
                    <label class="">Children <br><span>2-12 years old</span></label>
                    <div class="product-qty ">
                        <div class="custom-qty">
                            <button
                                onclick="var result = document.getElementById('qty2'); var qty2 = result.value; if( !isNaN( qty2 ) &amp;&amp; qty2 &gt; 1 ) result.value--;return false;"
                                class="reduced items" type="button"> &#8722;</button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty2"
                                name="qty" style="border:none; text-align:center; width:60px; color:#080f5a;">
                            <button
                                onclick="var result = document.getElementById('qty2'); var qty2 = result.value; if( !isNaN( qty2 )) result.value++;return false;"
                                class="increase items" type="button"> &#43;</button>
                        </div>
                    </div>
                </div>
                <div class="qty-box mb-0 d-flex align-items-center justify-content-between">
                    <label class="">Infants <br> <span>0-2 years old</span></label>
                    <div class="product-qty ">
                        <div class="custom-qty">
                            <button
                                onclick="var result = document.getElementById('qty3'); var qty3 = result.value; if( !isNaN( qty3 ) &amp;&amp; qty3 &gt; 1 ) result.value--;return false;"
                                class="reduced items" type="button">&#8722; </button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty3"
                                name="qty" style="border:none; text-align:center; width:60px; color:#080f5a;">
                            <button
                                onclick="var result = document.getElementById('qty3'); var qty3 = result.value; if( !isNaN( qty3 )) result.value++;return false;"
                                class="increase items" type="button"> &#43;</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-book">Book Now</button>
        </div>
    </div>
    <div class="container p-4">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Itinerary</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#references" role="tab" data-toggle="tab">Policies</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="profile">
                <div class="container p-0 mt-4">
                    <div class="row">
                        <div class="col-8">
                            <h5 style="color:#0164a3; font-weight:600;">The standard Lorem Ipsum passage, used since the
                                1500s</h5>
                            <p style="font-size:14px; color:grey;">Proin lectus ipsum, gravida et mattis vulputate,
                                tristique ut lectus.
                                Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci
                                luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet
                                congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla
                                luctus malesuada Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,
                                but also the leap into Ezonenic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets</p>
                            <P style="font-size:14px; color:grey;">
                                Tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in
                                faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper.
                                Nulla luctus malesuada Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry.
                            </P>
                            <div class="row p-0 mt-2">
                                <ul class="included col-6">
                                    <h5 style="color:#0164a3; font-weight:600;">Included</h5>
                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Flight Tickets</li>
                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Food</li>
                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Accommodation</li>
                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Tour Guide</li>
                                </ul>
                                <ul class="notIncluded col-6">
                                    <h5 style="color:#0164a3; font-weight:600;">Not Included</h5>
                                    <li><i class="fa fa-times-circle" aria-hidden="true"></i> Entrance Fees</li>
                                    <li><i class="fa fa-times-circle" aria-hidden="true"></i> Additional Services</li>
                                    <li><i class="fa fa-times-circle" aria-hidden="true"></i> Insurance</li>
                                    <li><i class="fa fa-times-circle" aria-hidden="true"></i> Extra facilities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="buzz">
                <div class="container p-0 mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Port</th>
                                <th scope="col">Arrive</th>
                                <th scope="col">Depart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Wed, May 4</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row"> Thu, May 5 </th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">Fri, May 6</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row"> Sat, May 7 </th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row"> Sun, May 8 </th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="references">
                <div class="container p-0 mt-4">
                    <h5>CANCELLATION & DATE CHANGE</h5>
                    <p>How much will it cost to cancel or change the start date after making a booking?
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <h5>CANCELLATION</h5>
                            <h6>Till 9th Feb</h6>
                        </div>
                        <div class="col-6">
                            <h5>DATE CHANGE</h5>
                            <h6>After 9th Feb</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5>₹7,000</h5>
                            <p>Per person</p>
                            <p>Cancellation Charge</p>
                        </div>
                        <div class="col-6">
                            <h5>Non Refundable</h5>
                            <p>Cancellation is not allowed</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <li>These are non-refundable amounts as per the current components
                                    attached. In the case of
                                    component change/modifications, the policy will change accordingly.
                                </li>
                                <li>Please check the exact cancellation and date change policy on the
                                    review page before proceeding further.</li>
                                <li>Date Change fees don't include any fare change in the components on
                                    the new date. Fare difference as applicable will be charged
                                    separately.</li>
                                <li>Date Change will depend on the availability of the components on the
                                    new requested date.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row ml-1">
                        <h5>Exclusions</h5>
                        <ul class="col-12">
                            <li>Expenses of personal nature</li>
                            <li>Mentioned cost is not valid between 6 pm and 8 am</li>
                            <li>Anything not mentioned under inclusions</li>
                            <li>Package price does not include Gala dinner charges applicable on
                                Christmas and New Year's Eve</li>
                        </ul>
                    </div>
                    <div class="row ml-1">
                        <h5>Terms and Conditions</h5>
                        <ul class="col-12">
                            <li>Standard check-in time at the hotel is normally 2:00 pm and check-out is
                                11:00 am. An early check-in,
                                or a late check-out is solely based on the discretion of the hotel.</li>
                            <li>A maximum of 3 adults are allowed in one room. The third occupant shall
                                be provided a mattress/rollaway bed.</li>
                            <li>The itinerary is fixed and cannot be modified. Transportation shall be
                                provided as per the itinerary and will not be at disposal.For any paid
                                activity which is non-operational due to any unforeseen reason, we will
                                process refund &
                                same should reach the guest within 30 days of processing the refund.
                            </li>
                            <li>Also, for any activity which is complimentary and not charged to MMT &
                                guest, no refund will be processed.</li>
                            <li>AC will not be functional anywhere in cool or hilly areas.</li>
                            <li>Entrance fee, parking and guide charges are not included in the
                                packages.</li>
                            <li>If your flights involve a combination of different airlines, you may
                                have to collect
                                your luggage on arrival at the connecting hub and register it again
                                while
                                checking in for the onward journey to your destination.</li>
                            <li>Booking rates are subject to change without prior notice.</li>
                            <li>Airline seats and hotel rooms are subject to availability at the time of
                                booking.</li>
                            <li>Pricing of the booking is based on the age of the passengers. Please
                                make sure you enter the correct
                                age of passengers at the time of booking. Passengers
                                furnishing incorrect age details may incur penalty at the time of
                                travelling.</li>
                            <li>In case of unavailability in the listed hotels, arrangement for an
                                alternate accommodation will be made in a hotel of similar standard.
                            </li>
                            <li>In case your package needs to be cancelled due to any natural calamity,
                                weather conditions etc. MakeMyTrip shall strive to give you the maximum
                                possible refund subject to the agreement made with our trade
                                partners/vendors.</li>
                            <li>MMT reserves the right to modify the itinerary at any point, due to
                                reasons including but not limited to: Force Majeure events, strikes,
                                fairs, festivals, weather conditions, traffic problems, overbooking of
                                hotels / flights, cancellation / re-routing of flights, closure of
                                /entry restrictions at a place of visit, etc. While we will do our best
                                to make suitable alternate arrangements, we would not be held liable for
                                any refunds/compensation claims arising out of this.</li>
                            <li>Certain hotels may ask for a security deposit during check-in, which is
                                refundable at check-out subject to the hotel?s policy.</li>
                            <li>The booking price does not include: Expenses of personal nature, such as
                                laundry, telephone calls, room service, alcoholic beverages, mini bar
                                charges, tips, portage, camera fees etc.</li>
                            <li>Any other items not mentioned under Inclusions are not included in the
                                cost of the booking.</li>
                            <li>The package price doesn?t include special dinner or mandatory charges at
                                time levied by the hotels especially during New Year and Christmas or
                                any special occasions. MakeMyTrip shall try to communicate the same
                                while
                                booking the package. However MakeMyTrip may not have this information
                                readily available all the time.</li>
                            <li>Cost of deviation and cost of extension of the validity on your ticket
                                is not included.</li>
                            <li>For queries regarding cancellations and refunds, please refer to our
                                Cancellation Policy.</li>
                            <li>Disputes, if any, shall be subject to the exclusive jurisdiction of the
                                courts in New Delhi.</li>
                            <li>Dudhsagar Waterfalls is closed in the monsoon (June - September).</li>
                            <li>Activities related to water sports are subject to weather and wind
                                conditions on the ground.</li>
                            <li>The cost of mentioned tours and transfer is not valid between 6 pm ? 8
                                am.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---- Package End Details --->



<!---- Desktop And View -------->

<div class="borderbotum"></div>
{{-- <x-footer-tag /> --}}
<x-footer />
@endsection

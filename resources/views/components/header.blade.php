@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="container-41 mb-4">
    <section class="bgcolor pt-6p pb-20 back-1">
        <div class="container p-0">
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
                </form>
            </div>
        </div>
    </section>
</div>
<!----- Offer Slider Images ----->

<div class="container mb-4 p-0">
    <!-- Slider -->
    <section class="slider-section">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
            </ol> <!-- End of Indicators -->

            <!-- Carousel Content -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active holidaysBnr"
                    style="background-image: url('assets/images/cruise/banner-3.jpg');">
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h3>Amazon Forest</h3>
                        <p>Cool description for Amazon Forest.</p>
                    </div> -->
                </div> <!-- End of Carousel Item -->

                <div class="carousel-item holidaysBnr"
                    style="background-image: url('assets/images/cruise/banner-4.jpg');">
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h3>Bridge Picture</h3>
                        <p>Awesome description for bridge.</p>
                    </div> -->
                </div> <!-- End of Carousel Item -->

                <div class="carousel-item holidaysBnr"
                    style="background-image: url('assets/images/cruise/banner-5.jpg');">
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h3>Flowers & Grass</h3>
                        <p>Beauty of Flowers & Grass.</p>
                    </div> -->
                </div> <!-- End of Carousel Item -->

                <div class="carousel-item holidaysBnr"
                    style="background-image: url('assets/images/cruise/banner-6.jpg');">
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h3>Bridge Picture</h3>
                        <p>Awesome description for bridge.</p>
                    </div> -->
                </div> <!-- End of Carousel Item -->

                <div class="carousel-item holidaysBnr"
                    style="background-image: url('assets/images/cruise/banner-7.jpg');">
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h3>Bridge Picture</h3>
                        <p>Awesome description for bridge.</p>
                    </div> -->
                </div> <!-- End of Carousel Item -->

            </div> <!-- End of Carousel Content -->

            <!-- Previous & Next -->
            <!-- <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a> -->
        </div> <!-- End of Carousel -->
    </section> <!-- End of Slider -->
</div>
<!----- Offer End ----->

<div class="container p-0 mb-4">
    <img src="assets/images/holiday/sfty.jpg" alt="" style="width:1140px; border-radius:5px;">
</div>

<div class="container mb-4 p-0"
    style="background-color:#fff; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19); border-radius:5px;">
    <h2 class="pt-4 pl-4 font-weight-bold" style="margin:0px;">Best-selling Holiday Destinations</h2>
    <div class="row">
        <div class="col-3">
            <h5 class="pl-4 pt-4 font-weight-bold">Grab exciting discounts for your upcoming trips to our most-loved
                destinations</h5>
            <p class="pl-4 pt-3 font-weight-lighter">Limited Period Offer!</p>
        </div>

        <div class="col-9 mb-4">
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="col-md-3" style="float:left;">
                            <div class="card mb-2 card-10 card-12">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10 card-12">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span> Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10 card-12">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10 card-12">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10 card-12">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10 card-12">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10 card-12">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10 card-12">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                    </div>
                    <!--/.Second slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <div class="controls-top mt-4">
                    <a class="btn-floating left-btn-12" href="#multi-item-example" data-slide="prev" style="text-decoration: none;">&#x2039;</a>
                    <a class="btn-floating right-btn-12" href="#multi-item-example" data-slide="next"  style="text-decoration: none;">&#x203A;</a>
                </div>
                <!--Controls ends -->
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 mb-4 p-0" style="border-radius:5px;">
    <div class="row ">
        <div class="col-md-3">
            <div class="card-sl">
                <div class="card-image">
                    <img src="assets/images/holiday/pk1.jpg" />
                </div>

                <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                <div class="card-heading">
                    Shimla
                </div>
                <div class="card-text">
                    Shimla is the capital of the northern Indian state of Himachal Pradesh, in the Himalayan foothills.
                </div>
                <div class="card-text">
                    ₹15,400
                </div>
                <a href="#" class="card-button"> Book Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-sl">
                <div class="card-image">
                    <img src="assets/images/holiday/pk2.jpg" />
                </div>

                <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                <div class="card-heading">
                    Jammu & Kashmir
                </div>
                <div class="card-text">
                    Shimla is the capital of the northern Indian state of Himachal Pradesh, in the Himalayan foothills.
                </div>
                <div class="card-text">
                    ₹15,400
                </div>
                <a href="#" class="card-button"> Book Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-sl">
                <div class="card-image">
                    <img src="assets/images/holiday/pk3.jpg" />
                </div>

                <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                <div class="card-heading">
                    Manali
                </div>
                <div class="card-text">
                    Shimla is the capital of the northern Indian state of Himachal Pradesh, in the Himalayan foothills
                </div>
                <div class="card-text">
                    ₹15,400
                </div>
                <a href="#" class="card-button"> Book Now</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-sl">
                <div class="card-image">
                    <img src="assets/images/holiday/pk1.jpg" />
                </div>

                <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                <div class="card-heading">
                    Mussoorie
                </div>
                <div class="card-text">
                    Shimla is the capital of the northern Indian state of Himachal Pradesh, in the Himalayan foothills
                </div>
                <div class="card-text">
                    ₹15,400
                </div>
                <a href="#" class="card-button"> Book Now</a>
            </div>
        </div>
    </div>
</div>
<!------ End Top ---->

<div class="container mb-4 p-0"
    style="background-color:#fff;  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19); border-radius:5px;">
    <section class="pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 font-weight-bold">Top Offer Holidays</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        &#x2039;
                    </a>
                    <a class="btn mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        &#x203A;
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 mb-3 ">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="assets/images/holiday/Shimla.jpg">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Shimala
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="assets/images/holiday/MANALI.jpg">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Manali
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">
                                                    SPECIAL OFFER</P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KULLU.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kullu
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/holiday/KASOL.jpg"
                                                style="height:168px;">
                                            <div class="card-body">
                                                <h5 class="card-title font-weight-bold">Special Offer Tour of Kasol
                                                </h5>
                                                <P class="m-0 p-0 font-weight-bold fontsize-14" style="color:red;">OFFER
                                                </P>
                                                <h4 class="font-weight-bold m-0">₹10599</h4>
                                                <p class="m-0 p-0 pb-3 font-weight-lighter" style="font-size:10px;">Per
                                                    person*</p>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 btn-sm">Explore</button>
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

<div class="container mt-4 mb-4 p-0" style="border-radius:5px;">
    <div class="row">
        <div class="col-6">
            <img src="assets/images/holiday/1234.jpg" alt="" style="width:552px;">
        </div>
        <div class="col-6">
            <img src="assets/images/holiday/123.jpg" alt="" style="width:552px;">
        </div>
    </div>
</div>

<div class="container back666 mt-4 mb-4 p-0" style="border-radius:5px;">
   
</div>

<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection
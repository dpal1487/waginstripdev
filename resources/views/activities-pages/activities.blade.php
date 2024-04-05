@extends('layouts.master')
@section('title','Wagnistrip')
@section("body")
<!-- DESKTOP VIEW START  -->

<div class="container-16">
    <section class="bgcolor pt-6p pb-20 back-1">
        <div class="container">
            <div class="card br-18">
                <form action="{{ route('search-hotel') }}" method="get">
                    <div class="card-body">
                        <div class="radiobox">
                            <span class="uptext">
                                <a href="#" class="link-color">Book any kind of activity, tour or daytrip</a>
                            </span>

                        </div>
                        <div class="d-flex pt-10"">
                            <div class=" card card-16 wd-55 hoverbg">
                            <div class="card-body">
                                <div class="searchtitle">Search</div>
                                <select class="js-example-basic-single getLocation" name="state">
                                    <option value="DEL">United Arab Emirates</option>
                                </select>
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

<div class="container mt-5">
    <div class="row shadow-sm p-3 mb-5 bg-white rounded">
        <div class="col-lg-12 p-10">
            <div id="Carousel" class="carousel slide">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                    <li data-target="#Carousel" data-slide-to="3"></li>

                </ol> -->
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <h1 style="font-weight:700;">Explore By Interests</h1>
                    <div class="item active carousel-item">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/unitedstates.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">United States</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/uk.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">United Kingdom</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/canada.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Canada</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/japan.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Japan</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/japan.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Japan</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/japan.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Japan</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/newz.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">New Zealand</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/china-2.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">China</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/austraila.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Australia</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/switzerland.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Switzerland</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/switzerland.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Switzerland</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/switzerland.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Switzerland</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                    <!--.item-->
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/philippines.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Philippines</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/indonesia.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Indonesia</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/portugal.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Portugal</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/srilanka.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Sri Lanka</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/switzerland.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Switzerland</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/switzerland.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Switzerland</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/maldives.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Maldives</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/turkey.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Turkey</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/ireland.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Ireland</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/greece.jpg" alt="" style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Greece</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/switzerland.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Switzerland</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-15">
                                    <img src="assets/images/visa/switzerland.jpg" alt=""
                                        style="width:180px; height:120px;">
                                    <div class="middle">
                                        <div class="text">Switzerland</div>
                                        <p>1700 Activities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                </div>
                <!--.carousel-inner-->
                <a data-slide="prev" href="#Carousel"
                    class="left carousel-control btn btn-primary btn-sm left-btn-1">&#x2039;</a>
                <a data-slide="next" href="#Carousel"
                    class="right carousel-control btn btn-primary btn-sm right-btn-1">&#x203A;</a>
            </div>
            <!--.Carousel-->
        </div>
    </div>
</div>

<!------ Seconds Sliders ---------->
<div class="container-17">
    <div class="contain-17">
        <div class="left-17">
            <h6>MTT exclusive</h6>
            <h1>MakeMyDay</h1>
            <p>Plan a 6 hour day stay at our luxurious hotels with meals and best deals in town.</p>
            <button>Explore All Activities</button>
        </div>
        <div class="right-17">
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span> Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10">
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
                            <div class="card mb-2 card-10">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10">
                                <img class="card-img-top" src="assets/images/visa/japan.jpg" alt="">
                                <h6>Day Stay Room at WelcomHotel Dwarka...</h6>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Hours</p>
                                <p><span>&#8377; 7,000</span>Per Room*</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2 card-10">
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
                <div class="controls-top">
                    <a class="btn-floating left-btn-5" href="#multi-item-example" data-slide="prev">&#x2039;</a>
                    <a class="btn-floating right-btn-5" href="#multi-item-example" data-slide="next">&#x203A;</a>
                </div>
                <!--Controls ends -->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </div>
</div>
<!------ Second Sliders Ends ------>

<div class="container-18">
    <section class="pt-2 pb-5">
        <div class="container shadow" style="background-color:white; border-radius:5px;">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-1 pt-2" style="font-weight:700;">Bestselling Activities</h2>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3  mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/1.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/2.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/3.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/4.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/5.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/6.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/7.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/8.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/9.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/10.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/11.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/12.jpg"
                                                style="width:253px; height:200px;">
                                            <div class="card-body">
                                                <h4 style="font-weight:700; font-size: 22px;">The Acropolis, Athens</h4>
                                                <div class="left-18">
                                                    <span>4.5/5</span>
                                                </div>
                                                <div class="right-18">
                                                    <p><del>&#8377; 1,399</del></p>
                                                    <h6>&#8377; 1,049</h6>
                                                    <p>Per Person</p>
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
            <div class="col-12 text-right">
                <a class="btn btn-primary left-btn-18 mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                    data-slide="prev">&#x2039;</a>
                <a class="btn btn-primary right-btn-18 mb-3 " href="#carouselExampleIndicators2" role="button"
                    data-slide="next">&#x203A;</a>
            </div>
        </div>
    </section>
</div>

<div class="container-21">
    <section class="pt-2 pb-5">
        <div class="container shadow" style="background-color:white; border-radius:5px;">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-1 pt-2 pb-2" style="font-weight:700;">Top Destinations</h2>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3  mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/1.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Greece</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/2.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Cambodia</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/3.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Indonesia</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/4.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Rome</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/5.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Paris</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/6.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> China</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/7.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> USA</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/8.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> China</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/9.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Peru</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/10.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Shira</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/11.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> Jordan</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="assets/images/activities/12.jpg"
                                                style="width:253px; height:200px;">
                                            <h3
                                                style="margin-top:-40px; margin-left:10px; color:#fff; font-size:20px; font-weight:700;">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> China</h3>
                                            <div class="card-body img-21">
                                                <img src="assets/images/activities/g-1.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-2.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <img src="assets/images/activities/g-3.jpg" alt=""
                                                    style="widht:50px; height:50px;">
                                                <h6
                                                    style="font-size:16px; font-weight:700; float:right; margin-top:15px;">
                                                    320+ Activities</h6>
                                                <p
                                                    style="font-size:12px; float:right; margin-top:-25px; color:grey; line-height:1.3;">
                                                    The Acropolis draws<br> you up and in.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 text-right">
                <a class="btn btn-primary left-btn-21 mb-3 mr-1" href="#carouselExampleIndicators3" role="button"
                    data-slide="prev">&#x2039;</a>
                <a class="btn btn-primary right-btn-21 mb-3 " href="#carouselExampleIndicators3" role="button"
                    data-slide="next">&#x203A;</a>
            </div>
        </div>
    </section>
</div>

<div class="container-22">
    <div class="container">
        <h6 style="margin-left:-15px; font-size:14px;  text-transform: uppercase; font-weight: 700;">Product Offering
        </h6>
        <p style="margin-left:-15px; font-size:12px;">Flights, International Flights, Charter Flights, Hotels,
            International Hotels, Homestays and Villas,
            Activities, Holidays In India, International Holidays, Book Hotels From UAE, myBiz for SME Travel,
            Book Online Cabs, Book Bus Tickets, Book Train Tickets, Vande Bharat Mission Flights, Air Bubble Flights,
            Cheap Tickets to India, Book Flights From US, Book Flights From UAE, Trip Planner, Gift Cards, Trip Money,
            Trip Ideas, Travel Blog, PNR Status</p>
        <h6 style="margin-left:-15px; font-size:14px;  text-transform: uppercase; font-weight: 700;">MAKETRUETRIP</h6>
        <P style="margin-left:-15px; font-size:12px;">About Us, Investor Relations, Careers, Corporate Travel, MMT
            Foundation, CSR Policy, myPartner - Travel Agent Portal,
            Foreign Exchange, List your hotel, Partners- Redbus, Partners- Goibibo</P>
        <h6 style="margin-left:-15px; font-size:14px;  text-transform: uppercase; font-weight: 700;">About the Site</h6>
        <p style="margin-left:-15px; font-size:12px;">Contact Us, Payment Security, Privacy Policy, User Agreement,
            Terms of Service, More Offices, Make A Payment, Work From Home</p>
        <h6 style="margin-left:-15px; font-size:14px;  text-transform: uppercase; font-weight: 700;">Quick Links</h6>
        <p style="margin-left:-15px; font-size:12px;">Delhi Chennai Flights, Delhi Mumbai Flights, Delhi Goa Flights,
            Chennai Mumbai flights, Mumbai Hyderabad flights, Kolkata to Rupsi Flights,
            Rupsi to Guwahati Flights, Pasighat to Guwahati Flights, Delhi to Khajuraho Flights, Cochin to Agatti Island
            Flights, Hotels in Delhi,
            Hotels in Mumbai, Hotels In Goa, Hotels In Jaipur, Hotels In Ooty, Hotels In Udaipur, Hotels in Puri, Hotels
            In North Goa, Hotels In Rishikesh,
            Honeymoon Packages, Kerala Packages, Kashmir Packages, Ladakh Packages,
            Goa Packages, Thailand Packages, Sri Lanka Visa, Thailand Visa, Explore Goa, Explore Manali, Explore Shimla,
            Explore Jaipur, Explore Srinagar</p>
        <h6 style="margin-left:-15px; font-size:14px;  text-transform: uppercase; font-weight: 700;">Important Links
        </h6>
        <p style="margin-left:-15px; font-size:12px;">
            Cheap Flights, Flight Status, Kumbh Mela, Domestic Airlines, International Airlines, Indigo, Spicejet,
            GoAir, Air Asia, Air India, Indian Railways,
            Corporate Flight Booking, Trip Ideas, Beaches, Honeymoon Destinations, Romantic Destinations, Popular
            Destinations,
            Resorts In Udaipur, Resorts In Munnar, Villas In Lonavala, Villas In Goa, Domestic Flight Offers,
            International Flight Offers,
            UAE Flight Offers, USA, UAE, Saudi Arabia, UK, Oman
        </p>
    </div>
</div>

<div class="container-23">
    <div class="container">
        <div class="row pt-10">
            <div class="col-sm-4">
                <h6 style="margin-left:-15px; font-size:14px;  text-transform: uppercase; font-weight: 700;">Why book Activities with MakeMyTrip?</h6>
                <p style="margin-left:-15px; font-size:16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p style="margin-left:-15px; font-size:16px;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h6 style="font-size:14px;  text-transform: uppercase; font-weight: 700;">What does MakeMyTrip Activities offer?</h6>
                <p style="font-size:16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p style="font-size:16px;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h6 style="font-size:14px;  text-transform: uppercase; font-weight: 700;">How to book and find the best deals on activities in any city?</h6>
                <p style="font-size:16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p style="font-size:16px;"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>
</div>
<!--- Desktop End View -->
<div class="borderbotum"></div>
{{-- <x-footer-tag /> --}}
<x-footer />
@endsection

@extends('layouts.master')
@section('title','XYZ')
@section("body")
<!-- DESKTOP VIEW START  -->
<section class="section-40">
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
</section>

<div class="container mt-4 mb-4 p-0 shadow" style="background-color:#fff; border-radius:10px;">
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3" style="color:#0164a3; font-weight:700; margin:0px;">Tour of Dubai Package</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn  btn-cruise1 mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        &#8592
                    </a>
                    <a class="btn  btn-cruise2 mb-3 " href="#carouselExampleIndicators2" role="button"
                        data-slide="next">
                        &#8594;
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
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

<div class="container mt-4 mb-4 p-0 shadow" style="background-color:#fff; border-radius:10px;">
    <h6 style=" text-align: center; margin:0px; padding-top:25px; color:#0164a3; font-weight:700;">INSIDER TIPS</h6>
    <div class="row p-4">
        <div class="col-4">
            <p style=" text-align: center; font-size:14px;">Haggling on prices at local markets is par for the course
                here — just make sure you know a
                few words of Spanish, and don't ask the vendor to go unreasonably low.</p>
        </div>
        <div class="col-4">
            <p style=" text-align: center; font-size:14px;">Haggling on prices at local markets is par for the course
                here — just make sure you know a
                few words of Spanish, and don't ask the vendor to go unreasonably low.</p>
        </div>
        <div class="col-4">
            <p style=" text-align: center; font-size:14px;">Haggling on prices at local markets is par for the course
                here — just make sure you know a
                few words of Spanish, and don't ask the vendor to go unreasonably low.</p>
        </div>
    </div>
</div>

<div class="container mt-4 mb-4 p-0 shadow" style="background-color:#fff; border-radius:10px;">
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3" style="color:#0164a3; font-weight:700; margin:0px;">Top Tour of Dubai Package</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn  btn-cruise1 mb-3 mr-1" href="#carouselExampleIndicators3" role="button"
                        data-slide="prev">
                        &#8592
                    </a>
                    <a class="btn  btn-cruise2 mb-3 " href="#carouselExampleIndicators3" role="button"
                        data-slide="next">
                        &#8594;
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pont1 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body p-3">
                                                <h5 class="card-title"
                                                    style="color:#0164a3; font-weight:700; margin:0px;">7Days Dubai
                                                    Cruise</h5>
                                                <p
                                                    style="color:grey; font-size:14px; font-weight:normal; margin:0px; padding-top:25px;">
                                                    Starting From</p>
                                                <h5 style="color:#080f5a; font-weight:700; margin:0px; font-size:25px;">
                                                    ₹1,50,000</h5>
                                                <p style="color:grey; font-size:14px; font-weight:normal; margin:0px;">
                                                    Per Person</p>
                                                <p
                                                    style="color:#000; font-size:14px; font-weight:normal; margin:0px; padding-top:15px;">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Dubai</p>
                                                <p style="color:#000; font-size:14px; font-weight:normal; margin:0px;">
                                                    <i class="fa fa-ship" aria-hidden="true"></i> Orchid Isles Cruise
                                                </p>
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

<div class="container mt-5" >
    <div class="row shadow-sm p-3 mb-5 bg-white rounded">
    <h3 class="mb-3" style="color:#0164a3; font-weight:700; margin:0px;">Tour of Dubai Package</h3>
        <div class="col-lg-12 p-10">
            <div id="Carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                    <li data-target="#Carousel" data-slide-to="3"></li>

                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active carousel-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/unitedstates.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalCenter">United States</div>
                                    </div>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">United States</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/uk.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">United Kingdom</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/canada.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Canada</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/japan.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Japan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/newz.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">New Zealand</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/china-2.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">China</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/austraila.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Australia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/switzerland.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Switzerland</div>
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
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/philippines.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Philippines</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/indonesia.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Indonesia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/portugal.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Portugal</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/srilanka.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Sri Lanka</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/maldives.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Maldives</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/turkey.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Turkey</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/ireland.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Ireland</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box-14">
                                    <img src="assets/images/visa/greece.jpg" alt="" style="width:250px; height:250px;">
                                    <div class="middle">
                                        <div class="text">Greece</div>
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
                    class="left carousel-control btn btn-primary btn-sm left-btn">&#x2039;</a>
                <a data-slide="next" href="#Carousel"
                    class="right carousel-control btn btn-primary btn-sm right-btn">&#x203A;</a>
            </div>
            <!--.Carousel-->
        </div>
    </div>
</div>

<!---- Desktop And View -------->
<div class="borderbotum"></div>
{{-- <x-footer-tag /> --}}
<x-footer />
@endsection

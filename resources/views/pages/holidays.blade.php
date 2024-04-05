@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="container-fluid mb-4 p-0">
    <div id="" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="holidays_bannerSection1"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection2"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection3"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection4"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection5"></div>
            </div>
            <div class="carousel-item">
                <div class="holidays_bannerSection6"></div>
            </div>
        </div>
    </div>
</div>

<div class="container p-0" style="margin-top:-300px;">
    <div class="card br-18 p-0">
        <form action="{{ route('search-hotel') }}" method="get">
            <div class="card-body">
                <div class="radiobox">
                    <span class="uptext">
                        <a href="#" class="link-color">Holiday </a>
                    </span>
                </div>
                <div class="d-flex pt-10">
                    <div class="card wd-25 m-2">
                        <div class="card-body hoverbg">
                            <div class="searchtitle">FROM</div>
                            <select class="js-example-basic-single getLocation" name="departure" id="select2_departure"
                                data-next="#select2_arrival">
                                <option value="DEL">Delhi (DEL)</option>
                            </select>
                            <!-- <div class="slitxt">Indra Gandhi international Airport</div> -->
                        </div>
                    </div>
                    <div class="card wd-25 m-2 ">
                        <div class="card-body hoverbg">
                            <div id="id_startCalendar" class="calendar-widget default-today"
                                data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                <div class="input-wrapper">
                                    <div class="searchtitle"> DEPARTURE <i class="fa fa-chevron-down"
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
                    <div class="card wd-25 m-2 hoverbg">
                        <div class="card-body">
                            <div id="id_deadlineCalendar" class="calendar-widget default-today-return" tabindex="-1"
                                data-link="#id_startCalendar" date-min="link">
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

                    <div class="card wd-20 m-2 hoverbg">
                        <div class="card-body cursorp" onclick="togglePopup()">
                            <div class="searchtitle">Travellers <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
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
            </div>
        </form>
    </div>
</div>


<div class="container mobileVes1 holi_sliderSect5 p-0">
    <div id="holiday_offerSlider1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#holiday_offerSlider1" data-slide-to="0" class="active"></li>
            <li data-target="#holiday_offerSlider1" data-slide-to="1"></li>
            <li data-target="#holiday_offerSlider1" data-slide-to="2"></li>
            <li data-target="#holiday_offerSlider1" data-slide-to="3"></li>
            <li data-target="#holiday_offerSlider1" data-slide-to="4"></li>
            <li data-target="#holiday_offerSlider1" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/flights/47.png" style="height:350px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/flights/pack1.png" style="height:350px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/flights/pack2.png" style="height:350px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/flights/pack3.png" style="height:350px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/flights/pack4.png" style="height:350px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/flights/52.png" style="height:350px;" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#holiday_offerSlider1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#holiday_offerSlider1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container mobileVes1 bestDeal_sect525 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Exclusive Offers Holidays
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#bestholid_packSecsOfer1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#bestholid_packSecsOfer1" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="bestholid_packSecsOfer1" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/38.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/39.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/40.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/41.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/42.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/43.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/44.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/45.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-4 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card">
                                        <img src="assets/images/flights/46.png" alt="" style="height:180px;">
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mobileVes1 bestDeal_sect525 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Top Holidays Packages Domestic & International
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#bestholid_packSecs" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#bestholid_packSecs" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="bestholid_packSecs" class="carousel slide" data-ride="carousel" data-inmterval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-3 p-2">
                                <a href="{{ url('holidays-package-one') }}"> 
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/nainital-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Nainital</h5>
                                            <p class="m-0 small">2N/3D</p>
                                            <hr>
                                            <h5 class="text-primary text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 p-2">
                                 <a href="{{ url('international-switzerland-5day') }}">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/swtz1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Switzerland</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-switzerland-5day') }}" class="link-primary">4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-switzerland-7day') }}" class="link-primary">6N/7D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-switzerland-8day') }}" class="link-primary">7N/8D</a></strong></p>
                                            
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                             </a>
                            </div>
                            <div class="col-sm-3 p-2">
                                <a href="{{ url('international-maldivies-5day') }}"> 
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/maldives.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Maldives</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-maldivies-5day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-maldivies-7day') }}" class="link-primary">6N/7D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-maldivies-8day') }}" class="link-primary">7N/8D</a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                 </a> 
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/dubai.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Dubai</h5><br>
                                            
                                              <p class="link-primary"><strong><a href="{{ url('international-dubai-5day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-dubai-6day') }}" class="link-primary">5N/6D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-dubai-6day') }}" class="link-primary"><!--7N/8D-empty--></a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/andaman-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Andaman</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-dubai-5day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-dubai-6day') }}" class="link-primary">5N/6D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-dubai-6day') }}" class="link-primary"><!--7N/8D-empty--></a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                 <a href="{{ url('international-nepal-9day') }}"> 
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/nepal-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Nepal</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-nepal-5day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-nepal-7day') }}" class="link-primary">6N/7D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-nepal-9day') }}" class="link-primary">7N/9D</a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                 </a> 
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/kerala-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Kerala</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('domastic-kerala-5day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('domastic-kerala-6day') }}" class="link-primary">6N/6D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('domastic-kerala-10day') }}" class="link-primary">7N/10D</a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/srinagar-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0"><!--Srinagar-empty--></h5><br>
                                             <p class="link-primary"><strong><a href="{{ url('domastic-kerala-5day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('domastic-kerala-6day') }}" class="link-primary">6N/7D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('domastic-kerala-10day') }}" class="link-primary">7N/10D</a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/srilanka-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0"><!--Sri Lanka -empty!--></h5><br>
                                             <p class="link-primary"><strong><a href="{{ url('domastic-kerala-5day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('domastic-kerala-6day') }}" class="link-primary">6N/7D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('domastic-kerala-10day') }}" class="link-primary">7N/10D</a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/bahrain-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Bahrain </h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('domastic-kerala-5day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('domastic-kerala-6day') }}" class="link-primary">5N/6D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('domastic-kerala-10day') }}" class="link-primary">7N/10D</a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/singapore-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Singapore</h5><br>
                                             <p class="link-primary"><strong><a href="{{ url('international-singapore-4day') }}" class="link-primary" >4N/5D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-singapore-7day') }}" class="link-primary">6N/7D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-singapore-10day') }}" class="link-primary">9N/10D</a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/abudhabi-1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0"><!--Abu Dhabi - empt!--></h5>
                                            <br>
                                             <p class="link-primary"><strong><a href="{{ url('international-singapore-4day') }}" class="link-primary" >3N/4D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-singapore-7day') }}" class="link-primary">6N/7D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-singapore-10day') }}" class="link-primary">9N/10D </a></strong></p>
                                            <hr>
                                            <h5 class="text-primary  text-right">Starting: ₹6999</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container mobileVes1 bestDeal_sect525 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Best Holiday Packages
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#bestholid_packSecs6" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#bestholid_packSecs6" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="bestholid_packSecs6" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/auttra.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Australia</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-singapore-4day') }}" >3N/4D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-austra-8day') }}" class="link-primary">7N/8D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('domastic-kerala-10day') }}" class="link-primary">9N/10D </a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/malaysia1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Malaysia</h5><br>
                                           <p class="link-primary"><strong><a href="{{ url('international-singapore-4day') }}" class="link-primary">3N/4D</a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-malaysia-7day') }}" class="link-primary">6N/7D</a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-malaysia-10day') }}" class="link-primary">9N/10D </a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/bangkok1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Bangkok</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-bangkok-5day') }}" class="link-primary">4N/5D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-malaysia-7day') }}" class="link-primary">6N/7D </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-malaysia-7day') }}" class="link-primary">9N/10D </a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/europe1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Europe</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-europe') }}" class="link-primary">4N/5D </a></strong></p>
                                            <p class="link-primary"><strong><a href="{{ url('international-malaysia-7day') }}" class="link-primary">6N/7D </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-europe-10day') }}" class="link-primary">7N/10D</a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/thailand1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Thailand</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-northern-thailand-hilltribesTrek-5day') }}" >4N/5D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-thailand-6day') }}" class="link-primary">5N/6D </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-thailand-7day') }}" class="link-primary">6N/7D</a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/bali1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Bali</h5><br>
                                           <p class="link-primary"><strong><a href="{{ url('international-bali-5day') }}" class="link-primary">4N/5D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-bali&gili-7day') }}" class="link-primary">6N/7D </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-bali&gili-10day') }}" class="link-primary"><!--7N/10D!--></a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/new-york1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">New-York</h5><br>
                                             <p class="link-primary"><strong><a href="{{ url('international-newyork-5day') }}" class="link-primary">4N/5D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-new-york-7day') }}" class="link-primary">6N/7D </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-new-york-7day') }}" class="link-primary"><!--7N/10D -empty!--></a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/mauritius1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Mauritius</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-newyork-5day') }}" class="link-primary">4N/5D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-new-york-7day') }}" class="link-primary">6N/7D </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-new-york-7day') }}" class="link-primary"><!--7N/10D -empty!--></a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/kenya1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Kenya</h5><br>
                                           <p class="link-primary"><strong><a href="{{ url('international-kenya-5day') }}" class="link-primary">4N/5D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-kenya-7day') }}" class="link-primary">6N/7D </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-kenya-7day') }}" class="link-primary"><!--7N/10D- empty--></a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/egypt1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Egypt</h5><br>
                                             <p class="link-primary"><strong><a href="{{ url('international-egypt-7day') }}" class="link-primary">5N/6D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-kenya-6day') }}" class="link-primary"><!--7N/8D -empty--> </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-egypt-10-day') }}" class="link-primary">9N/10D</a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/vietnam1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Vietnam</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-vietnam-7day') }}" class="link-primary">5N/6D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-vietnam-8day') }}" class="link-primary">7N/8D </a></strong></p>
                                              <p class="link-primary"><strong><a href="{{ url('international-egypt-10-day') }}" class="link-primary">9N/10D </a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-3 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/seigon1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Saigon</h5><br>
                                            <p class="link-primary"><strong><a href="{{ url('international-saigon-5day') }}" class="link-primary" >4N/5D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-saigon-7day') }}" class="link-primary">6N/7D </a></strong></p>
                                             <p class="link-primary"><strong><a href="{{ url('international-egypt-10-day') }}" class="link-primary">9N/10D </a></strong></p>
                                            <h6 class="m-0 font-weight-bold float-right">Starting: ₹6999</h6>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mobileVes1 bestDeal_sect525 mt-5 mb-5">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h1 class="float-left font-weight-bold" style="font-size:28px;">
                Solo Tour Packages
            </h1>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#bestholid_packSecs7" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#bestholid_packSecs7" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="bestholid_packSecs7" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-2 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/nainital.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Nainital</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-2 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/jimcorbett.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Jim Corbett</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-2 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/neemrana.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Neemrana</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-2 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/sriska.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Sriska</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-2 p-2">
                                 <a href="{{ url('domastic-rishikesh-6day') }}">
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/uttrakhand.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Uttrakhand </h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-2 p-2">
                                 <a href="{{ url('domastic-shimla+manali-6day') }}"> 
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/himachal.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Himachal</h5>
                                        </div>
                                    </div>
                                 </a> 
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-2 p-2">
                            <a href="{{ url('domastic-shimla-4day') }}"> 
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/manali6.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Manali</h5>
                                        </div>
                                    </div>
                                 </a> 
                            </div>
                            <div class="col-sm-2 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/costa-rica5.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Costa-Rica</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-2 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/gulmarg4.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Gulmarg</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                            <div class="col-sm-2 p-2">
                                 <a href="{{ url('domastic-rishikesh-6day') }}"> 
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/rishikesh3.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Rishikesh</h5>
                                        </div>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="{{ url('domastic-mysore+ooty-7day') }}"> 
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/ooty2.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Ooty</h5>
                                        </div>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-sm-2 p-2">
                                {{-- <a href="#"> --}}
                                    <div class="card text-left">
                                        <img class="card-img-top" src="assets/images/holiday/KASOL1.jpg" alt=""
                                            style="height:150px;">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold m-0">Kasol</h5>
                                        </div>
                                    </div>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mobileVes1 topDestinations_sec4 mt-5 mb-5">
    <h1 class="font-weight-bold" style="font-size:28px;">Top Destinations</h1>
    <div class="row mt-3">
        <div class="col-sm-3 p-2">
            {{-- <a href="#"> --}}
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Nainital</h1>
                </div>
            {{-- </a> --}}
        </div>
        <div class="col-sm-3 p-2">
             <a href="{{ url('international-switzerland-8day') }}"> 
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Switzerland</h1>
                </div>
            </a> 
        </div>
        <div class="col-sm-3 p-2">
            {{-- <a href="#"> --}}
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Maldives</h1>
                </div>
            {{-- </a> --}}
        </div>
        <div class="col-sm-3 p-2">
             <a href="{{ url('international-dubai-10day') }}">
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Dubai</h1>
                </div>
            </a> 
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-sm-3 p-2">
            {{-- <a href="#"> --}}
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Bahrain</h1>
                </div>
            {{-- </a> --}}
        </div>
        <div class="col-sm-3 p-2">
            {{-- <a href="#"> --}}
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Abu Dhabi</h1>
                </div>
            {{-- </a> --}}
        </div>
        <div class="col-sm-3 p-2">
            <a href="{{ url('international-singapore-4day') }}">
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Singapore</h1>
                </div>
            </a> 
        </div>
        <div class="col-sm-3 p-2">
            {{-- <a href="#"> --}}
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Sri Lanka</h1>
                </div>
            {{-- </a> --}}
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-sm-3 p-2">
            {{-- <a href="#"> --}}
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Andaman</h1>
                </div>
            {{-- </a> --}}
        </div>
        <div class="col-sm-3 p-2">
             <a href="{{ url('international-nepal-9day') }}"> 
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Nepal</h1>
                </div>
             </a> 
        </div>
        <div class="col-sm-3 p-2">
         <a href="{{ url('domastic-kerala-6day') }}">
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Kerala</h1>
                </div>
             </a> 
        </div>
        <div class="col-sm-3 p-2">
            {{-- <a href="#"> --}}
                <div class="card">
                    <h1 class="font-weight-bold m-0 p-3 text-center" style="font-size:20px;">Srinagar</h1>
                </div>
            {{-- </a> --}}
        </div>
    </div>
</div>

<div class="container-fluid pt-4 pb-4" style="background-color:#e4e8ed; margin-bottom:-20px;">
    <div class="container mobileVes1  p-0">
        <h1 class="font-weight-bold booosksrar text-center" style="font-size:25px;"> Domestic and International Tour
            Packages
        </h1>
        <p class="text-center small">
            Wagnistrip is one of the India's leading online and offline travels agency, we are offering domestic and
            international holiday packages and customized packages also. Wagnistrip gives a memorable travel
            experience with family and friends or we are best in honeymoon and solo packages. Wagnistrip holiday
            packages generally include all transfers like -, comfortable to luxurious stay options, and guided
            sightseeing options. However, all facets of a package can usually be customized to the needs of a customer.
            Our Travel sales agents are always here for your help to choose your travel destination, if you are unable
            to choose a place in your budget.
        </p>
    </div>
</div>

<x-frontend.sections.mobile-view-pages />
<!-- DESKTOP VIEW END   -->
<div class="dpnr">
    <x-footer />
</div>
@endsection

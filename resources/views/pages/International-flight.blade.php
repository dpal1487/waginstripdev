@extends('layouts.master')
@section('title', 'Cheap International Flight Tickets | Flight Booking | Wagnistrip ')
@section('Description', "Book cheap international flight tickets at the lowest prices, Save up to 20%, get the best deals on cheap air tickets")
@section('Keywords', 'Cheap International Flights, International Flights, International Flight Booking, International Flight Tickets, air tickets, flight tickets, flight schedule, flights booking, cheap flights US Airways, cheap airlines in us, cheap flights from usa')
@if (Str::startsWith($current = url()->current(), 'https://www'))
    <link rel="canonical" href="{{ str_replace('https://www.', 'https://www.', $current) }}">
@else
    <link rel="canonical" href="{{ str_replace('https://', 'https://www.', $current) }}">
@endif

@php
    $cncode = !empty(Session::get('country_code')) ? Session::get('country_code') : [];
    $cncode = !empty($cncode[0]) ?  $cncode[0] : 'IN';
@endphp


@section('body')
    <!-- DESKTOP VIEW START  -->
    <section class="bgcolor pt-6p pb-20">
        <div class="container p-0">
            <div class="card br-18">
                <form id="main-form" action="{{ route('search-flight-results') }}" method="get">
                    <div class="card-body ">
                        <div class="radiobox">
                            <span class="radio-toolbar">
                                <input type="radio" name="trip-type" class="trip-type" id="oneway-btn" value="oneway">
                                <label for="oneway-btn" id="oneway"> <i class="fa fa-circle-o"></i> Oneway </label>
                            </span>
                            <span class="radio-toolbar">
                                <input type="radio" name="trip-type" class="trip-type" id="roundtrip-btn"
                                    value="roundtrip" checked="checked">
                                <label for="roundtrip-btn" id="round"> <i class="fa fa-check-circle"></i> Round Trip
                                </label>
                            </span>
                            <span class="radio-toolbar">
                                <input type="radio" id="optradio" class="trip-type" name="trip-type" value="multicity">
                                <label for="optradio" id="multic"> <i class="fa fa-circle-o"></i> Multicity </label>
                            </span>
                        </div>
                        <div class="d-flex pt-10">
                            <div class="card wd-25 m-2">
                                <div class="card-body hoverbg">
                                    <div class="searchtitle"> <i class="fa fa-plane"></i> FROM</div>
                                    <select class="js-example-basic-single getLocation" name="departure"
                                        id="select2_departure" data-next="#select2_arrival">
                                        <option value="DEL">Delhi (DEL)</option>
                                    </select>
                                    <div class="slitxt">Indra Gandhi international Airport</div>
                                </div>
                            </div>
                            <div class="card wd-25 m-2 hoverbg">
                                <div class="card-body ">
                                    <div class="searchtitle"> <i class="fa fa-plane toplane"></i> TO</div>
                                    <select class="js-example-basic-single getLocation" name="arrival" id="select2_arrival">
                                        <option value="BOM">Mumbai (BOM)</option>
                                    </select>
                                    <div class="slitxt">Chhatrapati Shivaji Airport</div>
                                </div>
                                <div class="city-msg mt-2"></div>
                            </div>
                            <div class="card wd-15 m-2 hoverbg">
                                <div class="card-body">
                                    <div id="id_startCalendar" class="calendar-widget default-today"
                                        data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                        <div class="input-wrapper">
                                            <div class="searchtitle">DEPARTURE <i class="fa fa-chevron-down"
                                                    aria-hidden="true"></i></div>
                                            <input class="date-field" id="type1-start" type="text"
                                                placeholder="DEPARTURE" name='departDate' readonly>
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
                            <div class="card wd-15 m-2 hoverbg">
                                <div class="card-body">
                                    <div id="id_deadlineCalendar" class="calendar-widget default-today-return"
                                        tabindex="-1" data-link="#id_startCalendar" date-min="link">
                                        <div class="input-wrapper" id="checkreturnradio">
                                            <div class="searchtitle">RETURN <i class="fa fa-chevron-down"
                                                    aria-hidden="true"></i></div>
                                            <input class="date-field" id="type1-deadline" name="returnDate"
                                                type="text" placeholder="RETURN" readonly>

                                            <span id="onetripmsg" class="msggggk">
                                                Tap to add a return date for bigger discount
                                            </span>
                                        </div>

                                        <div style="margin-left: -150px" class="calendar-wrapper" id="closediv1">
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
                                    {{-- <span class="datebtncloserounde"> <i class="fa fa-times-circle"></i> </span> --}}
                                </div>
                            </div>

                            <div class="card wd-20 m-2 hoverbg">
                                <div class="card-body cursorp" onclick="togglePopup()">
                                    <div class="searchtitle">Travellers & class <i class="fa fa-chevron-down"
                                            aria-hidden="true"></i></div>
                                    <div class="fnt20" id="total-travller"></div>
                                    <div class="slitxt" id="cabClass"></div>
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
                                        <div class="card-body">
                                            <div class="fnt10">CHOOSE TRAVEL CLASS</div>

                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="Y">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">Economy</span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="p"
                                                    checked="checked">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">Premium
                                                    Economy</span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="C">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">Bussiness</span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="F">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">First
                                                    Class</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="float-left">
                                                <div class="msg-travllers"></div>
                                            </div>
                                            <div class="float-right" style=" opacity: 1 !important;">
                                                <button type="button" id="travller-btn"
                                                    class="btn btn-sm btn-info px-2 custm-btn-responsive"
                                                    onclick="togglePopup()">Apply</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-10 pb-10">
                        <a class="searchbtn searchbtn btn btn-lg" id="main-search-btn">SEARCH
                            <i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="container mobileVes1 mt-5 p-0">
        <div class="card shadow">
            <img src="assets/images/flight/airbanner.jpg" alt="">
        </div>
    </div>
    
    @if($cncode == 'IN')
    <div class="container mobileVes1 p-0 mt-5 mb-5">
        <div class="card p-4">
            <h3 class="m-0 text-center font-weight-bold">International Flights Offers</h3>
             <table class="table table-bordered mt-4 text-center">
                <thead class="bg-info text-white">
                    <tr>
                        
                        <th class="table-font_size" scope="col" >Routes</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td class="table-font_size">Chandigarh To Bangkok (IXC-BKK)</td>
                        <td>
                            <a id="chantoban" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-font_size">Mumbai to Bangkok (BOM-BKK)</td>
                       
                        <td>
                            <a id="mumtobang" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                     <tr>
                        <td class="table-font_size">Mumbai to Dubai (BOM-DXB)</td>
                       
                        <td>
                            <a id="mumtodub" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-font_size">Kolkata to Malaysia (CCU-KUL)</td>
                       
                        <td>
                            <a id="koltomal" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="table-font_size">Delhi to Singapore (DEL-SIN)</td>
                        <td>
                            <a id="deltosin" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-font_size">Delhi to Bangkok (DEL-BKK)</td>
            
                        <td>
                            <a id="deltobang" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                 
                     <tr>
                        <td class="table-font_size">Kochi to NewYork (COK-NYC)</td>
                       
                        <td>
                            <a id="koctonew" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="table-font_size">Delhi to Maldives(DEL-MLE)</td>
                       
                        <td>
                            <a id="deltomald" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                     <tr>
                        <td class="table-font_size">Lucknow To Dubai (DEL-DXB)</td>
                       
                        <td>
                            <a id="luctodub" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-font_size">Delhi to Dubai (DEL-DXB)</td>
                        <td>
                            <a id="deltodub" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="card p-4 mt-4">
        <h3 class="m-0 pt-4 font-weight-bold font-weight-bold12">Cheap Overseas Flights at Wagnistrip</h3>
        <hr>
        <h6 class="m-0 font-weight-bold font-weight-bold121">Book International Flights with www.wagnistrip.us</h6>
        <p class="m-0 pt-2 small">Visit all major countries of the world buying cheap international flight tickets at
            www.wagnistrip.us. We display widest network
            of airlines traveling on different countries and assure you a memorable journey. Book any international
            flight
            with wagnistrip.us and get up to Rs.500 Off. Use promotion code WT2023 and then compare airfare for
            anywhere.
            So, leave all your worries behind and plan a memorable trip with the best international flight offers at www.wagnistrip.us.
        </p>
        <p class="m-0 pt-2 small">
            wagnistrip.us also brings new offers on various travel products along with flight tickets. So, proceed for
            grabbing the best deals on international flight tickets with other travel solutions. Go and celebrate your
            holidays
            like never before with the best international air ticket booking site and be sure of creating wonderful memories.
        </p>
        <p class="m-0 pt-2 small">
            Indian aviation industry is witnessing a boom in international airline sector due to the increasing of air
            travelers.
            At www.wagnistrip.us, you can search and book various international airlines and enjoy a good connectivity to different countries.
            Covering
            all major destinations in the world, these airlines offer best airfare deals to the passengers.
        </p>
        <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Why to Book International Air Tickets from www.wagnistrip.us?</h6>
        <p class="m-0 pt-2 small">
            There are many reasons for International flight booking with us.
        </p>
        <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Leading Brand with Good Reputation </h6>
        <p class="m-0 pt-2 small">
            Wagnistrip provides a huge database of all the flights taking
            off for different cities and towns of the world. It shows all relevant flight options for your preferred route.
            Trusted by more than 8 million travelers, it assures your international tour to be really delightful.
        </p>
        <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Wide Options </h6>
        <p class="m-0 pt-2 small">
            Wagnistrip has good association with international airline networks. It helps you in choosing the cheapest
            international flights and assures you best offers on all major flight routes. Book cheap flight tickets for all major
            international routes in few simple steps.
        </p>
        <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Best Price Guaranteed </h6>
        <p class="m-0 pt-2 small">
            Wagnistrip is unbeatable in terms of offering airfares with complete accuracy. It doesn’t charge any
            convenience
            fees or hidden charge and offers lowest rates on flight booking. If you have to book a international flight coming
            days, don’t go anywhere else. You won’t regret of choosing it ever.
        </p>
        </div>
        <div class="card p-4">
        <h3 class="m-0 pt-4 font-weight-bold">Top international flights on Wagnistrip </h3>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/SG.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">SpiceJet</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/AI.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">Air India Express</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/AI.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">Air India</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/6E.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">IndiGo</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/G8.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">GoFirst</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/UK.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">Vistara</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/AA.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">Alliance Air</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/FA.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">TruJet</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mobileVes1 topHotel_sec2 topHotel_sec3 mt-5 mb-5">
            <div class="row btnssreser">
                <div class="col-sm-6">
                    <h1 class="float-left font-weight-bold" style="font-size:28px;">
                        Top international flights
                    </h1>
                </div>
                <div class="col-sm-6">
                    <div class="offersButtons_12 mt-0">
                        <span href="#toHotelMtt_chain" role="button" data-slide="prev"><i class="fa fa-angle-left"
                                aria-hidden="true"></i></span>
                        <span href="#toHotelMtt_chain" role="button" data-slide="next"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div id="toHotelMtt_chain" class="carousel mt-3 slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row p-2">
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air1.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air2.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air3.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air4.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air5.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air6.gif" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row p-2">
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air7.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air8.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air9.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air10.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air11.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air12.gif" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container mobileVes1 p-0 mt-5 mb-5">
        <div class="card p-4">
            <h3 class="m-0 text-center font-weight-bold">International Flights Offers</h3>
             <table class="table table-bordered mt-4 text-center">
                <thead class="bg-info text-white">
                    <tr>
                        
                        <th class="table-font_size" scope="col" >Routes</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td class="table-font_size">Albany International Airport To Albuquerque International Airport (ALB-ABQ)</td>
                        <td>
                            <a id="air-domestic-1" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-font_size">Alexandria International Airport To Allegheny County Airport (AEX-AGC)</td>
                       
                        <td>
                            <a id="air-domestic-2" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                     <tr>
                        <td class="table-font_size">Seattle Tacoma International Airport To Bradley International Airport (SEA-BDL)</td>
                       
                        <td>
                            <a id="air-domestic-3" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-font_size">Sky Harbor International Airport To Alexandria International Airport (PHX-AEX)</td>
                       
                        <td>
                            <a id="air-domestic-4" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="table-font_size">Sloulin Field International Airport To South Padre Is International Airport (ISN-BRO)</td>
                        <td>
                            <a id="air-domestic-5" href="#" class="btn btn-primary btn-sm button_table ">Search Now</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card p-4 mt-4">
            <h3 class="m-0 pt-4 font-weight-bold font-weight-bold12">Cheap Overseas Flights at Wagnistrip</h3>
            <hr>
            <h6 class="m-0 font-weight-bold font-weight-bold121">Book International Flights with www.wagnistrip.us</h6>
            <p class="m-0 pt-2 small">Visit all major countries in the world and buy cheap international flight tickets at www.wagnistrip.us. We display the widest network of airlines traveling to different countries and assure you of a memorable journey. Book any international flight with wagnistrip.us and get up to Rs. 500 off. Use promotion code WT2023 and then compare airfare for anywhere. So, leave all your worries behind and plan a memorable trip with the best international flight offers at www.wagnistrip.us.</p>
            <p class="m-0 pt-2 small">wagnistrip.us also brings new offers on various travel products along with flight tickets. So, proceed with grabbing the best deals on international flight tickets with other travel solutions. Go and celebrate your holidays like never before with the best international air ticket booking site, and be sure to create wonderful memories.</p>
            <p class="m-0 pt-2 small">The aviation industry is witnessing a boom in the international airline sector due to the increasing number of air travelers. At www.wagnistrip.us, you can search and book various international airlines and enjoy good connectivity to different countries. Covering all major destinations in the world, these airlines offer the best airfare deals to passengers.</p>
            <h6 class="m-0 font-weight-bold font-weight-bold121">Why book international air tickets from www.wagnistrip.us?</h6>
            <p class="m-0 pt-2 small">There are many reasons for booking international flights with us.</p>
            <h6 class="m-0 font-weight-bold font-weight-bold121">Leading Brand with Good Reputation</h6>
            <p class="m-0 pt-2 small">Wagnistrip provides a huge database of all the flights taking off for different cities and towns around the world. It shows all relevant flight options for your preferred route. Trusted by more than 8 million travelers, it assures that your international tour will be really delightful.</p>
            <h6 class="m-0 font-weight-bold font-weight-bold121">Wide Options</h6>
            <p class="m-0 pt-2 small">Wagnistrip has a good association with international airline networks. It helps you choose the cheapest international flights and assures you the best offers on all major flight routes. Book cheap flight tickets for all major international routes in a few simple steps.</p>
            <h6 class="m-0 font-weight-bold font-weight-bold121">Best Price Guaranteed</h6>
            <p class="m-0 pt-2 small">Wagnistrip is unbeatable in terms of offering airfares with complete accuracy. It doesn’t charge any convenience fees or hidden charges and offers the lowest rates on flight bookings. If you have to book an international flight in the coming days, don’t go anywhere else. You won’t regret choosing it ever.</p>
        </div>
        <div class="card p-4">
        <h3 class="m-0 pt-4 font-weight-bold">Top international flights on Wagnistrip </h3>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/SG.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">SpiceJet</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/AI.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">Air India Express</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/AI.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">Air India</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/6E.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">IndiGo</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/G8.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">GoFirst</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/UK.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">Vistara</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/AA.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">Alliance Air</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/FA.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2">TruJet</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mobileVes1 topHotel_sec2 topHotel_sec3 mt-5 mb-5">
            <div class="row btnssreser">
                <div class="col-sm-6">
                    <h1 class="float-left font-weight-bold" style="font-size:28px;">
                        Top international flights
                    </h1>
                </div>
                <div class="col-sm-6">
                    <div class="offersButtons_12 mt-0">
                        <span href="#toHotelMtt_chain" role="button" data-slide="prev"><i class="fa fa-angle-left"
                                aria-hidden="true"></i></span>
                        <span href="#toHotelMtt_chain" role="button" data-slide="next"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div id="toHotelMtt_chain" class="carousel mt-3 slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row p-2">
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air1.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air2.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air3.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air4.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air5.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air6.gif" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row p-2">
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air7.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air8.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air9.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air10.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air11.gif" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 p-2">
                                <a href="#">
                                    <div class="card">
                                        <img src="assets/images/flight/air12.gif" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <x-frontend.sections.mobile-view-pages />


    <!-- Desktop End View -->

    <div class=" dpnr">
        <x-footer />
    </div>
            {{-- Code By Neelesh start --}}

  <script>

    const months = ["+Jan+", "+Feb+", "+Mar+", "+Apr+", "+May+", "+Jun+", "+Jul+", "+Aug+", "+Sep+", "+Oct+", "+Nov+", "+Dec+"];

    const d = new Date()
    let year = d.getFullYear();
    let date = d.getDate();
    const currentMonth = new Date();
    let startdate = date + months[currentMonth.getMonth()] + year ;
    
    let newMonth = new Date();
    newMonth.setDate(d.getDate() + 2);
    date = newMonth.getDate();
    let enddate = date + months[newMonth.getMonth()] + year ;
    
    @if($cncode == 'IN')
    document.getElementById("deltodub").href="flight/search?trip-type=oneway&departure=DEL&arrival=DXB&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("mumtodub").href="flight/search?trip-type=oneway&departure=BOM&arrival=DXB&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltosin").href="flight/search?trip-type=oneway&departure=DEL&arrival=SIN&departDate="+enddate+"+&returnDate="+enddate+"+&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltobang").href="flight/search?trip-type=oneway&departure=DEL&arrival=BKK&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("mumtobang").href="flight/search?trip-type=oneway&departure=BOM&arrival=BKK&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("koctonew").href="flight/search?trip-type=oneway&departure=COK&arrival=NYC&departDate="+enddate+"+&returnDate="+enddate+"+&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("koltomal").href="flight/search?trip-type=oneway&departure=CCU&arrival=KUL&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltomald").href="flight/search?trip-type=oneway&departure=DEL&arrival=MLE&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("luctodub").href="flight/search?trip-type=oneway&departure=LKO&arrival=DXB&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("chantoban").href="flight/search?trip-type=oneway&departure=IXC&arrival=BKK&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    @else
    document.getElementById("air-domestic-1").href="flight/search?trip-type=oneway&departure=ALB&arrival=ABQ&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("air-domestic-2").href="flight/search?trip-type=oneway&departure=AEX&arrival=AGC&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("air-domestic-3").href="flight/search?trip-type=oneway&departure=SEA&arrival=BDL&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("air-domestic-4").href="flight/search?trip-type=oneway&departure=PHX&arrival=AEX&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("air-domestic-5").href="flight/search?trip-type=oneway&departure=ISN&arrival=BRO&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    @endif


</script>

    <Script>
        $(document).ready(function() {
            let selectedVal = 'roundtrip';

            $('.trip-type').change(function() {
                let selectedVal = $(this).val();
                console.log(selectedVal);
            });

            $('#main-search-btn').on('click', function() {
                $('#main-form').submit();
            });
        });
    </Script>

    <script>
        $('.carousel').carousel({
            interval: 6000;
        });
    </script>

@endsection

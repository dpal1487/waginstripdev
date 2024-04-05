@extends('layouts.master')
@section('title', 'Cheap Domestic Flight Tickets | Domestic Air Tickets at lowest Airfare | Wagnistrip')
@section('Description', "Book Air Tickets at Lowest Airfare, Find the Best Deals on Flights, Cheap Domestic Flights.")
@section('Keywords', 'air tickets,flight tickets, flight schedule, flights booking, flight status, cheapest flight tickets, flights fare, cheapest domestic flight ticket booking, domestic air ticket booking in usa, domestic flights in the uk, cheap domestic flights uk')
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
        @if($cncode == 'IN')
        <div class="card shadow">
            <img src="assets/images/flight/cheapflight.jpg" alt="cheapflight">
        </div>
        @else
        <div class="card shadow">
            <img src="assets/images/flight/cheapflight1.jpg" alt="cheapflight">
        </div>
        @endif
    </div>

    @if($cncode == 'IN')
    <div class="container mobileVes1 p-0 mt-5 mb-5">
        <div class="card p-4">
            <h3 class="m-0 text-center font-weight-bold">Domestic Flights Offers</h3>
        <table class="table table-bordered mt-4 text-center">
                <thead class="bg-info text-white">
                    <tr>
                        
                        <th  class="table-font_size" scope="col">Routes</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td class="table-font_size">Hyderabad to Bangalore (HYD-BLR)</td>
                       
                        <td>
                            <a id="hydtobang" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="table-font_size">Mumbai to Chennai (BOM-MAA)</td>
                        <td>
                            <a id="mumtochen" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="table-font_size">Chennai to Mumbai (MAA-BOM)</td>
                        <td>
                            <a id="chentomum" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="table-font_size">Delhi to Ahmedabad (DEL-AMD)</td>
            
                        <td>
                            <a id="deltoahm" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                   
                    <tr>
                        <td  class="table-font_size">Mumbai to Kolkata (BOM-CCU)</td>
                       
                        <td>
                            <a id="mumtokol" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                     <tr>
                        <td  class="table-font_size">Delhi to Lucknow (DEL-LKO)</td>
                        <td>
                            <a id="deltoluc" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    
                     <tr>
                        <td  class="table-font_size">Mumbai to Jaipur (BOM-JAI)</td>
                       
                        <td>
                            <a id="mumtojai" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="table-font_size">Goa to Mumbai (GOI-BOM)</td>
                       
                        <td>
                            <a id="goatomum" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="table-font_size">Delhi to Amritsar(DEL-ATQ)</td>
                       
                        <td>
                            <a id="deltoamri" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                     <tr>
                        <td  class="table-font_size">Delhi to jaipur (DEL-JAI)</td>
                       
                        <td>
                            <a id="deltojai" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </div>
        <div class="card p-4">
        <h3 class="m-0 pt-4 font-weight-bold font-weight-bold12">Fly to Indian Cities with Cheap Domestic Flights in India </h3>
        <hr>
        <h6 class="m-0 font-weight-bold  font-weight-bold121">Book Indian Domestic Flights with www.wagnistrip.us</h6>
        <p class="m-0 pt-2 small">Visit all major cities of India buying domestic cheapest flight ticket at
            www.wagnistrip.us. We display widest network
            of airlines traveling on different Indian cities and assure you a memorable journey. Book any domestic
            flight
            with wagnistrip.us and get up to Rs.500 Off. Use promotion code WT2023 and then compare airfare for
            anywhere.
            So, leave all your worries behind and plan a memorable trip with domestic flights at www.wagnistrip.us.
        </p>
        <p class="m-0 pt-2 small">
            wagnistrip.us also brings new offers on various travel products along with flight tickets. So, proceed for
            grabbing the best deals on domestic flight tickets with other travel solutions. Go and celebrate your
            holidays
            like never before and be sure of creating wonderful memories.
        </p>
        <p class="m-0 pt-2 small">
            Indian aviation industry is witnessing a boom in domestic airline sector due to the increasing of air
            travelers.
            At www.wagnistrip.us, you can search and book various domestic airlines including, Air India, GO FIRST,
            Indian
            Airlines, IndiGo, SpiceJet, Vistara and more to enjoy a good connectivity to different Indian cities.
            Covering
            all major destinations of India, these airlines offer best airfare deals to the passengers.
        </p>
        <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Why to Book Domestic Air Tickets from www.wagnistrip.us?</h6>
        <p class="m-0 pt-2 small">
            There are many reasons for domestic flight booking with us.
        </p>
        <h6 class="m-0 font-weight-bold  font-weight-bold121 pt-2">Leading Brand with Good Reputation </h6>
        <p class="m-0 pt-2 small">
            Being a leading brand of Indian travel industry, Wgnistrip provides a huge database of all the flights taking
            off for different cities and towns of India. It shows all relevant flight options for your preferred route with cheap and best domestic flight tickets.
            Trusted by more than 8 million travelers, it assures your domestic tour to be really delightful.
        </p>
        <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Wide Options </h6>
        <p class="m-0 pt-2 small">
            Wagnistrip has good association with domestic airline networks of India. It helps you in choosing the cheapest
            domestic flights and assures you best offers on all major flight routes. Book cheap flight tickets for all major
            domestic routes in few simple steps.
        </p>
        <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Best Price Guaranteed </h6>
        <p class="m-0 pt-2 small">
            Wagnistrip is unbeatable in terms of offering airfares with complete accuracy. It doesn’t charge any
            convenience
            fees or hidden charge and offers lowest rates on flight booking. If you have to book a domestic flight in coming
            days, don’t go anywhere else. You won’t regret of choosing it ever.
        </p>
        </div>
        <div class="card p-4 mt-5">
        <h3 class="m-0 pt-4 font-weight-bold font-weight-bold1211">Popular Airlines in India </h3>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/SG.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2 media-bodyah5">SpiceJet</h5>
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
                            <h5 class="m-0 pt-2 media-bodyah5">Air India Express</h5>
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
                            <h5 class="m-0 pt-2 media-bodyah5">Air India</h5>
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
                            <h5 class="m-0 pt-2 media-bodyah5">IndiGo</h5>
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
                            <h5 class="m-0 pt-2 media-bodyah5">GoFirst</h5>
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
                            <h5 class="m-0 pt-2 media-bodyah5">Vistara</h5>
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
                            <h5 class="m-0 pt-2 media-bodyah5">Alliance Air</h5>
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
                            <h5 class="m-0 pt-2 media-bodyah5">TruJet</h5>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mobileVes1 topHotel_sec2 topHotel_sec3 mt-5 mb-5">
            <div class="row btnssreser">
                <div class="col-sm-6">
                    <h1 class="float-left font-weight-bold" style="font-size:28px;">
                        Top Airline on Wagnistrip
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
            <h3 class="m-0 text-center font-weight-bold">Domestic Flights Offers</h3>
        <table class="table table-bordered mt-4 text-center">
                <thead class="bg-info text-white">
                    <tr>
                        
                        <th  class="table-font_size" scope="col">Routes</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td class="table-font_size">Albany International Airport To Albuquerque International Airport (ALB-ABQ)</td>
                       
                        <td>
                            <a id="air-domestic-1" href="#" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="table-font_size">Alexandria International Airport To Allegheny County Airport (AEX-AGC)</td>
                        <td>
                            <a id="air-domestic-2" target="_blank" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="table-font_size">Seattle Tacoma International Airport To Bradley International Airport (SEA-BDL)</td>
                        <td>
                            <a id="air-domestic-3" target="_blank" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="table-font_size">Sky Harbor International Airport To Alexandria International Airport (PHX-AEX)</td>
            
                        <td>
                            <a id="air-domestic-4" target="_blank" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                   
                    <tr>
                        <td  class="table-font_size">Sloulin Field International Airport To South Padre Is International Airport (ISN-BRO)</td>
                       
                        <td>
                            <a id="air-domestic-5" target="_blank" class="btn btn-primary btn-sm button_table">Search Now</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card p-4">
            <h3 class="m-0 pt-4 font-weight-bold font-weight-bold12">Fly to the USA with Cheap Domestic Flights </h3>
            <hr>
            <h6 class="m-0 font-weight-bold  font-weight-bold121">Book domestic flights with www.wagnistrip.us</h6>
            <p class="m-0 pt-2 small">Visit all major cities in the USA and buy the cheapest domestic flight ticket at www.wagnistrip.us. We display the widest network of airlines traveling in different cities and assure you of a memorable journey. Book any domestic flight with wagnistrip.us and get up to Rs. 500 off. Use promotion code WT2023 and then compare airfare for anywhere. So, leave all your worries behind and plan a memorable trip with domestic flights at www.wagnistrip.us.</p>
            <p class="m-0 pt-2 small">wagnistrip.us also brings new offers on various travel products along with flight tickets. So, proceed to grab the best deals on domestic flight tickets with other travel solutions. Go and celebrate your holidays like never before, and be sure to create wonderful memories.</p>
            <p class="m-0 pt-2 small">The aviation industry is witnessing a boom in the domestic airline sector due to the increasing number of air travelers. At www.wagnistrip.us, you can search and book various domestic airlines. Covering all major destinations in the USA, these airlines offer the best airfare deals to passengers.</p>
            <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Why book domestic air tickets from www.wagnistrip.us?</h6>
            <p class="m-0 pt-2 small">There are many reasons for booking domestic flights with us.</p>
            <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Leading Brand with Good Reputation</h6>
            <p class="m-0 pt-2 small">Being a leading brand in the travel industry, Wagnistrip provides a huge database of all the flights taking off from different cities and towns. It shows all relevant flight options for your preferred route with cheap and best domestic flight tickets. Trusted by more than 8 million travelers, it assures that your domestic tour will be really delightful.</p>
            <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Wide Options</h6>
            <p class="m-0 pt-2 small">Wagnistrip has a good association with domestic airline networks. It helps you choose the cheapest domestic flights and assures you the best offers on all major flight routes. Book cheap flight tickets for all major domestic routes in a few simple steps.</p>
            <h6 class="m-0 font-weight-bold font-weight-bold121 pt-2">Best Price Guaranteed</h6>
            <p class="m-0 pt-2 small">Wagnistrip is unbeatable in terms of offering airfares with complete accuracy. It doesn’t charge any convenience fees or hidden charges and offers the lowest rates on flight bookings. If you have to book a domestic flight in the coming days, don’t go anywhere else. You won’t regret choosing it ever.</p>
        </div>
        <div class="card p-4 mt-5">
        <h3 class="m-0 pt-4 font-weight-bold font-weight-bold1211">Popular Airlines in USA </h3>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/AA.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="JavaScript:void()">
                            <h5 class="m-0 pt-2 media-bodyah5">American Airlines</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/UA.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="JavaScript:void()">
                            <h5 class="m-0 pt-2 media-bodyah5">United Airlines</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/DL.png" alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="JavaScript:void()">
                            <h5 class="m-0 pt-2 media-bodyah5">Delta Air Lines</h5>
                        </a>
                    </div>
                </div>
            </div>
            {{--<div class="col-sm-3">
                <div class="media">
                    <img class="align-self-center mr-3" src="assets/images/flight/6E.png"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <a href="#">
                            <h5 class="m-0 pt-2 media-bodyah5">IndiGo</h5>
                        </a>
                    </div>
                </div>
            </div>--}}
        </div>
        <div class="container mobileVes1 topHotel_sec2 topHotel_sec3 mt-5 mb-5">
            <div class="row btnssreser">
                <div class="col-sm-6">
                    <h1 class="float-left font-weight-bold" style="font-size:28px;">
                        Top Airline on Wagnistrip
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
    newMonth.setDate(d.getDate() + 3);
    date = newMonth.getDate();
    let enddate = date + months[newMonth.getMonth()] + year ;
    
    @if($cncode == 'IN')
    // IN flight routes
    document.getElementById("hydtobang").href="flight/search?trip-type=oneway&departure=BPM&arrival=BLR&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("mumtochen").href="flight/search?trip-type=oneway&departure=BOM&arrival=MAA&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("goatomum").href="flight/search?trip-type=oneway&departure=GOI&arrival=BOM&departDate="+enddate+"+&returnDate="+enddate+"+&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltoamri").href="flight/search?trip-type=oneway&departure=DEL&arrival=ATQ&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltoahm").href="flight/search?trip-type=oneway&departure=DEL&arrival=AMD&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("mumtokol").href="flight/search?trip-type=oneway&departure=BOM&arrival=CCU&departDate="+enddate+"+&returnDate="+enddate+"+&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltoluc").href="flight/search?trip-type=oneway&departure=DEL&arrival=LKO&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("mumtojai").href="flight/search?trip-type=oneway&departure=BOM&arrival=JAI&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("chentomum").href="flight/search?trip-type=oneway&departure=MAA&arrival=BOM&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltojai").href="flight/search?trip-type=oneway&departure=DEL&arrival=JAI&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    
    @else
    // USA flight routes
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

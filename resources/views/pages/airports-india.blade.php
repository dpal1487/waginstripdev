@extends('layouts.master')
@section('title', 'Wagnistrip (OPC)')
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

 
    <!-- Desktop End View -->
    <x-frontend.sections.mobile-view-pages />
    <div class=" dpnr">
        <x-footer />
    </div>

@endsection

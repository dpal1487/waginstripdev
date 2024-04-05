@extends('layouts.master')
@section('title', 'Maketuretrip')
@section('body')

    <section class="bgcolor pt-6p pb-20">
        <div class="container">
            <div class="card br-18">
                <form action="{{ route('search-hotel') }}" method="get">
                    <div class="card-body">
                        <div class="radiobox">
                            <span class="uptext">
                                <a href="#" class="link-color">Book Domestic and International hotels and homestays. To
                                    list your property</a>
                            </span>
                        </div>
                        <div class="d-flex pt-10">
                            <div class="card wd-35">
                                <div class="card-body">
                                    <div class="searchtitle">CITY|HOTEL|AREA|BUILDING</div>
                                    <select class="js-example-basic-single" name="state">
                                        <option value="DEL">Delhi (DEL)</option>
                                        <option value="BOM">Mumbai (BOM)</option>
                                        <option value="AMD">AMD (AMD)</option>
                                        <option value="CCU">CCU (CCU)</option>
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
                                    <div id="id_deadlineCalendar" class="calendar-widget default-today-return"
                                        tabindex="-1" data-link="#id_startCalendar" date-min="link">
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
                                <div class="card-body cursorp" onclick="togglePopup()">
                                    <div class="searchtitle"> ROOMS & GUESTS <i class="fa fa-chevron-down"
                                            aria-hidden="true"></i></div>
                                    <span class="font25"> 1 </span> <span class="slitxt">Rooms</span>
                                    <span class="font25"> 1 </span> <span class="slitxt">Guests</span>
                                </div>
                                <div class="card content">
                                    <div class="card-body">
                                        <div class="fontsize-22">ROOMS</div>
                                        <div class="fnt10">ADULTS(12y+)</div>
                                        <div class="card">
                                            <div class="card-body">
                                                <label class="rdocon bshadow">
                                                    <input type="radio" checked="checked" name="adult"
                                                        value="1">
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
                                                <label class="rdocon">
                                                    <input type="radio" name="adult" value="9">
                                                    <span class="checkmark">9</span>
                                                </label>
                                                <label class="rdocon">
                                                    <input type="radio" name="adult" value="10">
                                                    <span class="checkmark">10</span>
                                                </label>

                                            </div>
                                        </div>
                                        <div class="fnt10">CHILREN(2y - 12y)</div>
                                        <div class="card">
                                            <div class="card-body">
                                                <label class="rdocon">
                                                    <input type="radio" checked="checked" name="child"
                                                        value="0">
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
                                        <div class="text-right">
                                            <button type="button" onclick="togglePopup()"
                                                class="btn-sm btn-primary mt-2">
                                                Done
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-10 pb-10">
                        <button class="searchbtn" name="main-search-btn" id="main-search-btn">SEARCH
                            <i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="container p-0 mt-5">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="card">

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

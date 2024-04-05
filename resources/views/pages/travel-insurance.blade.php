@extends('layouts.master')
@section('title', 'XYZ')
@section('body')


    <div class="container mb-5" style="margin-top: 130px">
        <div class="container mb-5" style="margin-top: 130px">
         <h1 style="text-align: center; font-weight:bold; color:black;"> Travel Insurance Form 1</h1>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-sm-10">
                <div class="card bg-info p-4">
                    <h6 class="">1. Which country are you travelling to?</h6>
                    <div class="searchboxcont">
                        <h6>Enter your destination</h6>
                        <div class="summaryCard content_hidden content_option_card1 card1">
                            <h6>Dubai</h6>
                            <div class="closeCard">
                                <button>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="summaryCard content_hidden content_option_card2 card2">
                            <h6>USA</h6>
                            <div class="closeCard">
                                <button>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="summaryCard content_hidden content_option_card3 card3">
                            <h6>Russia</h6>
                            <div class="closeCard">
                                <button>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="summaryCard content_hidden content_option_card4 card4">
                            <h6>Canada</h6>
                            <div class="closeCard">
                                <button>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="summaryCard content_hidden content_option_card5 card5">
                            <h6>Singapore</h6>
                            <div class="closeCard">
                                <button>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="summaryCard content_hidden content_option_card6 card6">
                            <h6>Schengen Area</h6>
                            <div class="closeCard">
                                <button>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="summaryCard content_hidden content_option_card7 card7">
                            <h6>Thailand</h6>
                            <div class="closeCard">
                                <button>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="sec-sec">
                        <input class="red-input" name="checkbox_name" id="card1" type="checkbox"><span>Dubai</span>
                        <input class="red-input" name="checkbox_name" id="card2" type="checkbox"><span>USA</span>
                        <input class="red-input" name="checkbox_name" id="card3" type="checkbox"><span>Russia</span>
                        <input class="red-input" name="checkbox_name" id="card4" type="checkbox"><span>Canada</span>
                        <input class="red-input" name="checkbox_name" id="card5" type="checkbox"><span>Singapore</span>
                        <input class="red-input" name="checkbox_name" id="card6" type="checkbox"><span>Schengen Area</span>
                        <input class="red-input" name="checkbox_name" id="card7" type="checkbox"><span>Thailand</span>
                    </div>
                    <h6 class=" mt-3">2. Which country are you travelling to?</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="id_startCalendar" class="calendar-widget default-today"
                                        data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                        <div class="input-wrapper">
                                            <div class="searchtitle">Trip Start Date <i class="fa fa-chevron-down"
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
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="id_deadlineCalendar" class="calendar-widget default-today-return"
                                        tabindex="-1" data-link="#id_startCalendar" date-min="link">
                                        <div class="input-wrapper" id="checkreturnradio">
                                            <div class="searchtitle">Trip End Date <i class="fa fa-chevron-down"
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
                        </div>
                    </div>
                    <h6 class="mt-3">3. How many people are travelling?</h6>
                    <div class="row ssleser">
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 1 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 2 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 3 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 4 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 5 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 6 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 7 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 8 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 9 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Select age of traveller 10 </label><br>
                            <select class="w-100 p-2" name="" id="">
                                <option value="">Less than 1 Year</option>
                                <option value="">1 Year</option>
                                <option value="">2 Years</option>
                                <option value="">3 Years</option>
                                <option value="">4 Years</option>
                                <option value="">5 Years</option>
                                <option value="">6 Years</option>
                                <option value="">7 Years</option>
                                <option value="">8 Years</option>
                                <option value="">9 Years</option>
                                <option value="">10 Years</option>
                                <option value="">11 Years</option>
                                <option value="">12 Years</option>
                                <option value="">13 Years</option>
                                <option value="">14 Years</option>
                                <option value="">15 Years</option>
                                <option value="">16 Years</option>
                                <option value="">17 Years</option>
                                <option value="">18 Years</option>
                                <option value="">19 Years</option>
                                <option value="">20 Years</option>
                                <option value="">21 Years</option>
                                <option value="">22 Years</option>
                                <option value="">23 Years</option>
                                <option value="">24 Years</option>
                                <option value="">25 Years</option>
                                <option value="">26 Years</option>
                                <option value="">27 Years</option>
                                <option value="">28 Years</option>
                                <option value="">29 Years</option>
                                <option value="">30 Years</option>
                                <option value="">31 Years</option>
                                <option value="">32 Years</option>
                                <option value="">33 Years</option>
                                <option value="">34 Years</option>
                                <option value="">35 Years</option>
                                <option value="">36 Years</option>
                                <option value="">37 Years</option>
                                <option value="">38 Years</option>
                                <option value="">39 Years</option>
                                <option value="">40 Years</option>
                                <option value="">41 Years</option>
                                <option value="">42 Years</option>
                                <option value="">43 Years</option>
                                <option value="">44 Years</option>
                                <option value="">45 Years</option>
                                <option value="">46 Years</option>
                                <option value="">47 Years</option>
                                <option value="">48 Years</option>
                                <option value="">49 Years</option>
                                <option value="">50 Years</option>
                                <option value="">51 Years</option>
                                <option value="">52 Years</option>
                                <option value="">53 Years</option>
                                <option value="">54 Years</option>
                                <option value="">55 Years</option>
                                <option value="">56 Years</option>
                                <option value="">57 Years</option>
                                <option value="">58 Years</option>
                                <option value="">59 Years</option>
                                <option value="">60 Years</option>
                                <option value="">61 Years</option>
                                <option value="">62 Years</option>
                                <option value="">63 Years</option>
                                <option value="">64 Years</option>
                                <option value="">65 Years</option>
                                <option value="">66 Years</option>
                                <option value="">67 Years</option>
                                <option value="">68 Years</option>
                                <option value="">69 Years</option>
                                <option value="">70 Years</option>
                                <option value="">71 Years</option>
                                <option value="">72 Years</option>
                                <option value="">73 Years</option>
                                <option value="">74 Years</option>
                                <option value="">75 Years</option>
                                <option value="">76 Years</option>
                                <option value="">77 Years</option>
                                <option value="">78 Years</option>
                                <option value="">79 Years</option>
                                <option value="">80 Years</option>
                                <option value="">81 Years</option>
                                <option value="">82 Years</option>
                                <option value="">83 Years</option>
                                <option value="">84 Years</option>
                                <option value="">85 Years</option>
                                <option value="">86 Years</option>
                                <option value="">87 Years</option>
                                <option value="">88 Years</option>
                                <option value="">89 Years</option>
                                <option value="">90 Years</option>
                                <option value="">91 Years</option>
                                <option value="">92 Years</option>
                                <option value="">93 Years</option>
                                <option value="">94 Years</option>
                                <option value="">95 Years</option>
                                <option value="">96 Years</option>
                                <option value="">97 Years</option>
                                <option value="">98 Years</option>
                                <option value="">99 Years</option>
                            </select>
                        </div>
                    </div>
                    <h6 class="mt-3">4. Does the traveller have any pre-existing medical condition?</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card p-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card p-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="" for="">Mobile Number*</label><br>
                            <input class="w-100 p-2" minlength="0" maxlength="12" type="mobile"
                                placeholder="Enter your mobile">
                        </div>
                        <div class="col-sm-6">
                            <label class="" for="">Email*</label><br>
                            <input class="w-100 p-2" type="email" placeholder="Enter your email">
                        </div>
                    </div>
                    <a href="{{ url('') }}" class="btn  btn-primary w-25 text-center mt-3 text-white">View
                        plans</a>
                </div>
            </div>
        </div>

        <script>
            $(':checkbox').change(function() {
                var option = 'content_option_' + $(this).attr('id');
                if ($('.' + option).css('display') == 'none') {
                    $('.' + option).show();
                } else {
                    $('.' + option).hide();
                }
            });

            $(".closeCard").click(function() {
                $(this).parent().hide();
                var id = $.trim($(this).parent().prop('class').match(/ (card.)+?/g)[0]);
                $('#' + id).prop("checked", false);
            });
        </script>
        <script>
            // Data Picker Initialization
            $('.datepicker').datepicker({
                inline: true
            });
        </script>
        <script>
            var logDiv = $("#log");

            for (var i = 0; i < 5; i++) {
                $(".col-sm-6").eq(i).on("click", {
                    value: i
                }, function(event) {
                    var msgs = [
                        "col-sm-6 = " + $(this).index(),
                        "event.data.value = " + event.data.value,
                        "i = " + i
                    ];
                    logDiv.append(msgs.join(", ") + "<br>");
                });
            }
        </script>
    </div>

    <!-- Desktop End  -->
    <div class="dpnr">
        <x-footer />
    </div>
@endsection

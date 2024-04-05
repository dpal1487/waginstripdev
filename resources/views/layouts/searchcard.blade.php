@php
$segments = Session::get('segments');

    $dept_iata = !empty($segments['departure']['iata']) ? $segments['departure']['iata'] : '';
    $dept_city = !empty($segments['departure']['city']) ? $segments['departure']['city'] : '';
    $dept_airport = !empty($segments['departure']['airport']) ? $segments['departure']['airport'] : '';
    
    $arr_iata = !empty($segments['arrival']['iata']) ? $segments['arrival']['iata'] : '';
    $arr_city = !empty($segments['arrival']['city']) ? $segments['arrival']['city'] : '';
    $arr_airport = !empty($segments['arrival']['airport']) ? $segments['arrival']['airport'] : '';
    $depart = !empty($segments['departDate']) ? $segments['departDate'] : '';
    $return = !empty($segments['returnDate']) ? $segments['returnDate'] : '';
@endphp
    <div class="container p-0 wellComeContainer" id="hotel_inner-12">
        <div class="card br-18">
            <form id="main-form" action="{{ route('search-flight-results') }}" method="get">
                <div class="card-body ">
                    <div class="radiobox" id="radio_box-1">
                        <span class="radio-toolbar">
                            <input type="radio" name="trip-type" class="trip-typ" id="oneway-btn" value="oneway" checked="checked">
                            <label for="oneway-btn" id="oneway"> <i class="fa fa-check-circle-o "></i> Oneway </label>
                        </span>
                        <span class="radio-toolbar">
                            <input type="radio" name="trip-type" class="trip-typ" id="roundtrip-btn" value="roundtrip"
                                >
                            <label for="roundtrip-btn" id="round"> <i class="fa fa-circle-o "></i> Round Trip
                            </label>
                        </span>
                        <span class="uptext float-right abcc"><i class="fa fa-plane"></i>
                            <a href="" class="link-color">Search Lowest Airfare </a> |
                            <a href="" class="link-color"> International Flights </a> |
                            <a href="" class="link-color"> Domestic Flights</a>
                        </span>
                    </div>
                    @php
                        $cncode = !empty(Session::get('country_code')) ? Session::get('country_code') : [];
                        $cncode = !empty($cncode[0]) ?  $cncode[0] : 'IN';
                    @endphp
                    <div class="d-flex pt-10 w-100" id="select_id-12">
                        <div class="card wd-25 m-2 departureFrom">
                            <div class="card-body hoverbg" style=" width: auto;">
                                <div class="searchtitle"> <i class="fa fa-plane"></i> FROM</div>
                                @if($cncode == 'IN')
                                <input type="hidden" value="{{!empty($dept_iata) ? $dept_iata : 'DEL'}}" name="departure" id="departureFromCode" />
                                
                                <span class="BigCityName d-block citydeparture">{{ !empty($dept_city) ? $dept_city : 'Delhi' }}</span>
                                <span class="elipsistext airnamesmall airnamedeparturefrom">{{ !empty($dept_airport) ? $dept_airport : 'Indira Gandhi International Airport'  }}</span>
                                @else
                                <input type="hidden" value="AAL" name="departure" id="departureFromCode" />
                                
                                <span class="BigCityName d-block citydeparture elipsistext">Aalborg Airport</span>
                                <span class="elipsistext airnamesmall airnamedeparturefrom">Aalborg Airport</span>
                                @endif
                                <div class="customdrpdwn position-absolute" style="display:none;">
                                    <input class="w-100 airportsearchField" onkeyup="filterairportlist(0)" type="text" placeholder="Enter Airport Name" />
                                    <ul class="airdrpList airdrpListFrom">
                                        <li airport-fullname="Indira Gandhi International Airport" airport-cityname="New Delhi" itacode="DEL">
                                            <strong class="airname elipsistext">Indira Gandhi International Airport</strong>
                                            <div class="smalltexts">
                                                <p class="peratext d-flex p-0 m-0">
                                                    <span class="aircityname">New Delhi</span> <span class="airstatename elipsistext" airpor-state="Delhi">Delhi</span>
                                                </p> 
                                                <small class="countryname font-weignt-bold">India</small> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swapBtn position-absolute" onclick="swap('select2_departure','select2_arrival')" data-loading="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="3 45 512 512">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="30" d="M274 169l112  112M398.87 291H96M208 464L96 352h302"/>
                                </svg>
                            </div>
                        </div>
                        <div class="card wd-25 m-2 departureTo">
                            <div class="card-body hoverbg" style=" width: auto;">
                                <div class="searchtitle"> <i class="fa fa-plane toplane"></i> TO</div>
                                @if($cncode == 'IN')
                                <input type="hidden" value="{{ !empty($arr_iata) ? $arr_iata : 'BOM' }}" name="arrival" id="departureToCode" />
                                <span class="BigCityName d-block cityarrival">{{ !empty($arr_city) ? $arr_city : 'Mumbai' }}</span>
                                <span class="elipsistext airnamesmall airnamedepartureto">{{ !empty($arr_airport) ? $arr_airport :'Chhatrapati Shivaji International Airport'  }}</span>
                                @else
                                <input type="hidden" value="ABQ" name="arrival" id="departureToCode" />
                                <span class="BigCityName d-block cityarrival elipsistext">Albuquerque International Airport</span>
                                <span class="elipsistext airnamesmall airnamedepartureto">Albuquerque International Airport</span>                                
                                @endif
                                <div class="customdrpdwn position-absolute" style="display:none;">
                                    <input class="w-100 airportsearchField"  onkeyup="filterairportlist(1)" type="text" placeholder="Enter Airport Name" />
                                    <ul class="airdrpList airdrpListFrom">
                                        <li airport-fullname="Chhatrapati Shivaji International Airport" airport-cityname="Mumbai" itacode="BOM">
                                            <strong class="airname elipsistext">Chhatrapati Shivaji International Airport</strong>
                                            <div class="smalltexts">
                                                <p class="peratext d-flex p-0 m-0"><span class="aircityname">Mumbai</span> <span class="airstatename elipsistext" airpor-state="Maharashtra">Maharashtra</span></p>
                                                <small class="countryname font-weignt-bold">India</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--<div class="city-msg mt-2" id="cisty_mesg-12"></div>-->
                            
                            
                        </div>
                        <div class="card wd-15 m-2 hoverbg">
                            <div class="card-body">
                                <div id="id_startCalendar" class="calendar-widget default-today"
                                    data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                    <div class="input-wrapper">
                                        <div class="searchtitle">DEPARTURE <i class="fa fa-chevron-down"
                                                aria-hidden="true"></i></div>
                                        <input class="date-field" id="type1-start"  type="text" placeholder="DEPARTURE"
                                            name='departDate' readonly>
                                    </div>
                                    <div style="margin-left: -150px;" class="calendar-wrapper" id="calender_flight-12">
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
                                <div id="id_deadlineCalendar" class="calendar-widget default-today-return" tabindex="-1"
                                    data-link="#id_startCalendar" date-min="link">
                                    <div class="input-wrapper" id="checkreturnradio">
                                        <div class="searchtitle">RETURN <i class="fa fa-chevron-down"
                                                aria-hidden="true"></i></div>
                                        <input class="date-field" id="type1-deadline"  name="returnDate" type="text"
                                            placeholder="RETURN" readonly>

                                        <span id="onetripmsg" class="msggggk active">
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
                                    <div class="card-body">
                                        <div class="fnt10">CHOOSE TRAVEL CLASS</div>

                                        <label class="rdocon">
                                            <input type="radio" name="cabinClass" value="Y" checked="checked">
                                            <span class="checkmark-2 btn-outline-secondary bshadow">Economy</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="cabinClass" value="p" >
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

                    <div class="pt-20 dpnr faresdiv">
                        <div class="row">
                            <div class="col-md-6 nav-list">
                                <button type="button" id="regular1" class="btn btn-sm btn-outline-info bshadow btn1 active" value="Regular
                                Fares" >Regular
                                    Fares</button>
                                <button type="button" id="regular2" class="btn btn-sm btn-outline-info bshadow btn1" >Armed Forces Fares
                                </button>
                                <button type="button" id="regular3" class="btn btn-sm btn-outline-info bshadow btn1" >Students Fares
                                </button>
                                <button type="button" id="regular4" class="btn btn-sm btn-outline-info bshadow btn1" >Senior Citizen
                                    Fares
                                </button>
                               <a href="{{route('web-check-in')}}" class="btn btn-primary webcheck link-color" data-loading="true"> WEB CHECKIN</a>
                                <input type="hidden" id='fare4' name="fare" value="Regular Fares">
                            </div>

                        </div>
                    </div>
                        @php
                            if($cncode == 'IN'){
                            $disc = 'Rs 2000'; 
                            }
                            else{
                            $disc = '$ 100';
                            }
                        @endphp
                    <div class="pt-20 dpnr logintextline">
                        <div class="boxxx text-center" data-toggle="modal" data-target="#staticBackdrop" fdprocessedid="ymkjep" >
                            <span> <strong> GET {{ !empty($disc) ? $disc : '' }} ON SIGN UP AND ENJOY CASH BACK OFFERS ON YOUR ALL BOOKING !!! </strong></span>
                            <a href= "javascript:void(0);" class="float-right exploring"><strong>SIGN UP | LOGIN NOW </strong><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-10 pb-10" >
                    <a class=" searchbtn searchbtn btn btn-lg" id="main-search-btn" onclick="spinnerr()">SEARCH <i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        
        // == scripts of airport list == 03/09/2023 == //
        const fetchAirports = async (departrefrom) => {
            try {
                let searchairport = document.getElementsByClassName('airportsearchField')[departrefrom].value;
                const response = await fetch("{{url('api/airlinecodes')}}"+`?search=${searchairport}`);
                const resData = await response.json();
                let airdrpListFrom = document.getElementsByClassName("airdrpListFrom");
                let htmllist = '';
                resData.forEach((item, index)=>{
                        htmllist += `<li key=${index} airport-fullname="${item.airport}" airport-cityname="${item.city}" itacode="${item.id}"><strong class="airname elipsistext">${item.city} (${item.id}) </strong><div class="smalltexts"><p class="peratext d-flex p-0 m-0" style="justify-content: space-between;"><span class="aircityname">${item.airport}</span> <span class="airstatename airname elipsistext text-warning" airpor-state="${item.state}">${item.country}</span></p></div></li>`;
                        // htmllist += `<li key=${index} airport-fullname="${item.airport}" airport-cityname="${item.city}" itacode="${item.id}"><strong class="airname elipsistext">${item.airport} </strong><div class="smalltexts"><p class="peratext d-flex p-0 m-0"><span class="aircityname">${item.city}</span> <span class="airstatename elipsistext text-warning" airpor-state="${item.state}">${item.state}</span></p> <small class="countryname font-weignt-bold">${item.country}</small> </div></li>`;
                })
                airdrpListFrom[departrefrom].innerHTML = (htmllist);
                if(htmllist === ""){
                    airdrpListFrom[departrefrom].innerHTML = `<li>No Airport Found : <strong class="text-danger">${searchairport}</strong></li>`;
                }
            } catch (error) {
                console.error('Error fetching airports:', error);
            }
        }
        
        function filterairportlist(departrefrom) {
            fetchAirports(departrefrom);
        }
        
        $('.departureFrom').on('click', function () {
            fetchAirports(0);
            $('.departureFrom .customdrpdwn').show();
            $(document).bind("click", function (event) {
                $target = $(event.target);
                if (!$target.closest(".departureFrom").length &&
                    $(".departureFrom .customdrpdwn").is(":visible")) {
                    $(".departureFrom .customdrpdwn").hide();
                    $(document).unbind("click", function (event) { });
                }
            });
            $('.airportsearchField').focus();
        });
        
        $('.departureTo').on('click', function () {
            fetchAirports(1);
            $('.departureTo .customdrpdwn').show();
            $(document).bind("click", function (event) {
                $target = $(event.target);
                if (!$target.closest(".departureTo").length &&
                    $(".departureTo .customdrpdwn").is(":visible")) {
                    $(".departureTo .customdrpdwn").hide();
                    $(document).unbind("click", function (event) { });
                }
            });
            $('.airportsearchField').focus();
        });
        
        $(document).on("click", ".departureFrom .customdrpdwn li", function () {
            let getcityname = $(this).attr("airport-cityname");
            let getairportname = $(this).attr("airport-fullname");
            let itacode = $(this).attr("itacode");
            $(".departureFrom .citydeparture").html(getcityname);
            $(".departureFrom .airnamedeparturefrom ").html(getairportname);
            $("#departureFromCode").val(itacode);
            $('.customdrpdwn').hide();
        });
        
        $(document).on("click", ".departureTo li", function () {
            let getcityname = $(this).attr("airport-cityname");
            let getairportname = $(this).attr("airport-fullname");
            let itacode = $(this).attr("itacode");
            $(".departureTo .cityarrival").html(getcityname);
            $(".departureTo .airnamedepartureto ").html(getairportname);
            $("#departureToCode").val(itacode);
            $('.customdrpdwn').hide();
        });
        
        function swap(){
            let departurehdnval =  $("#departureFromCode").val()
            let arrivalhdnval =  $("#departureToCode").val();
            
            $("#departureFromCode").val(arrivalhdnval);
            $("#departureToCode").val(departurehdnval);
            
            let arrivalcity = $(".departureFrom .citydeparture").text();
            let arrivalairport = $(".departureFrom .airnamedeparturefrom").text();
            
            let departurecity = $(".departureTo .cityarrival").text();
            let departureairport = $(".departureTo .airnamedepartureto").text();
            
            $(".departureTo .cityarrival").text(arrivalcity);
            $(".departureTo .airnamedepartureto").text(arrivalairport);
            
            $(".departureFrom .citydeparture").text(departurecity);
            $(".departureFrom .airnamedeparturefrom").text(departureairport);
        }
        
    </script>
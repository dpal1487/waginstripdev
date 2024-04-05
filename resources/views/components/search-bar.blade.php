@php
$segments = !empty(Session::get('segments')) ? Session::get('segments') : [];
// dd($segments);
@endphp
@if(!empty($segments['traveller']))
@foreach ($segments['traveller'] as $key => $travels)
    <input type="hidden" value="{{ $travels }}" id="travels{{ $key }}">
@endforeach
@endif
{{--<script defer src="{{url('assets/js/welcomeblade.js')}}"></script>--}}
<section class="bgcolor pt-6p pb-20">
    <div class="container">
        <div class="card mainContM">
            <form action="{{ route('search-flight-results') }}" method="get">
                <div class="card-body">
                    <div class="radiobox">
                        <span class="radio-toolbar">
                            <input type="radio" name="trip-type" id="oneway-btn" value="oneway" >
                            <label for="oneway-btn" id="oneway"> <i class="fa fa-circle-o"></i> Oneway </label>
                        </span>
                        <span class="radio-toolbar">
                            <input type="radio" name="trip-type" id="roundtrip-btn" value="roundtrip" >
                            <label for="roundtrip-btn" id="round"> <i class="fa fa-check-circle"></i> Round Trip </label>
                        </span>
                        {{--<span class="radio-toolbar">
                            <input type="radio" id="optradio" name="trip-type" value="multicity">
                            <label for="optradio" id="multic"> <i class="fa fa-circle-o"></i> Multicity </label>
                        </span>--}}
                        <span class="uptext text-center "><i class="fa fa-plane"></i>
                            <a href="" class="link-color">Search Lowest Airfare </a> |
                            <a href="" class="link-color"> International Flights </a> |
                            <a href="" class="link-color"> Domestic Flights</a>
                            <a href="{{route('web-check-in')}}" class="btn btn-primary webcheck link-color"> WEB CHECKIN</a>
                        </span>
                        <button class="btn btn-sm onewayserbtn dpnr" name="main-search-btn"  onclick="spinnerr()"  id="main-search-btn">SEARCH <i
                                class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    <div class="d-flex pt-10">
                        
                        <div class="d-flex pt-10 w-100" id="select_id-12">
                        <div class="card wd-25 m-2 departureFrom">
                            <div class="card-body hoverbg" style=" width: auto;">
                                <div class="searchtitle"> <i class="fa fa-plane"></i> FROM</div>
                                <?php
                                    $dept_iata = !empty($segments['departure']['iata']) ? $segments['departure']['iata'] : '';
                                    $dept_city = !empty($segments['departure']['city']) ? $segments['departure']['city'] : '';
                                    $dept_airport = !empty($segments['departure']['airport']) ? $segments['departure']['airport'] : '';
                                ?>
                                <input type="hidden" value="{{!empty($dept_iata) ? $dept_iata : 'DEL'}}" name="departure" id="departureFromCode" />
                                
                                <span class="BigCityName d-block citydeparture">{{!empty($dept_city) ? $dept_city : 'Delhi' }}</span>
                                <span class="elipsistext airnamesmall airnamedeparturefrom">{{ !empty($dept_airport) ? $dept_airport : 'Indira Gandhi International Airport'  }}</span>
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
                                <?php
                                    $arr_iata = !empty($segments['arrival']['iata']) ? $segments['arrival']['iata'] : '';
                                    $arr_city = !empty($segments['arrival']['city']) ? $segments['arrival']['city'] : '';
                                    $arr_airport = !empty($segments['arrival']['airport']) ? $segments['arrival']['airport'] : '';
                                ?>                        
                        <div class="card wd-25 m-2 departureTo">
                            <div class="card-body hoverbg" style=" width: auto;">
                                <div class="searchtitle"> <i class="fa fa-plane toplane"></i> TO</div>
                                <input type="hidden" value="{{!empty($arr_iata) ? $arr_iata : 'BOM' }}" name="arrival" id="departureToCode" />
                                <span class="BigCityName d-block cityarrival">{{!empty($arr_city) ? $arr_city : 'Mumbai'}}</span>
                                <span class="elipsistext airnamesmall airnamedepartureto">{{!empty($arr_airport) ?  $arr_airport : 'Chhatrapati Shivaji International Airport'}}</span>
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

                        <div class="card wd-15">
                            <div class="card-body">
                                <div id="id_startCalendar" class="calendar-widget default-today"
                                    data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                    <div class="input-wrapper">
                                        <div class="searchtitle">DEPARTURE <i class="fa fa-chevron-down"
                                                aria-hidden="true"></i></div>

                                        <input class="date-field" id="type1Start" type="text"
                                            placeholder="DEPARTURE" name='departDate' readonly>
                                        <input class="date-fieldss" id="type1StartPUT" type="text"
                                            placeholder="DEPARTURE" name='departDate' readonly style="display: none"
                                            value="{{ !empty($segments['departDate']) ?  $segments['departDate'] : '' }}">
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
                        <div class="card wd-15">
                            <div class="card-body">
                                <div id="id_deadlineCalendar" class="calendar-widget default-today-return" tabindex="-1"
                                    data-link="#id_startCalendar" date-min="link">
                                    <div class="input-wrapper" id="checkreturnradio">
                                        <div class="searchtitle">RETURN <i class="fa fa-chevron-down"
                                                aria-hidden="true"></i></div>
                                        <input class="date-field" id="type1-deadline" name="returnDate" type="text"
                                            placeholder="RETURN" readonly>
                                        <input class="date-fieldss" id="type1ReturnPUT" type="text"
                                            placeholder="RETURN" name='returnDate' readonly style="display: none"
                                            value="{{ !empty($segments['returnDate']) ? $segments['returnDate'] : ''  }}">
                                        <span id="onetripmsg" class="msggggk">
                                            Tap to add a return date for bigger discount
                                        </span>
                                    </div>

                                    <div style="margin-left: -150px;" class="calendar-wrapper">
                                        <div class="dual-calendar abddjd">
                                            <div class="calendar">
                                                <div class="calendar-header">
                                                    <div class="prev-btn">
                                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                    </div>

                                                    <div class="month-text">
                                                        <p>September 2023</p>
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
                        <div class="card wd-20">
                            <div class="card-body cursorp" onclick="togglePopup()">
                                <div class="searchtitle">Travellers & class <i class="fa fa-chevron-down"
                                        aria-hidden="true"></i></div>
                                @if (Session::has('traveller'))
                                    <div class="fnt20" id="total-travller">{{Session::get('traveller')}} Traveller </div>
                                @else
                                    <div class="fnt20" id="total-travller">1 Travelers</div>
                                @endif
                                
                                <div class="slitxt" id="cabClass">Economy</div>
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
                                            <input type="radio" name="cabinClass" value="Y" 
                                            @if ('Y' == Session::get('cabinClass'))
                                             checked="checked"
                                             @else
                                             checked="checked"
                                            @endif
                                            >
                                            <span class="checkmark-2 btn-outline-secondary bshadow">Economy</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="cabinClass" value="p"
                                                @if ('p' == Session::get('cabinClass'))
                                                    checked="checked"
                                            @endif
                                            >
                                            <span class="checkmark-2 btn-outline-secondary bshadow">Premium
                                                Economy</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="cabinClass" value="C"
                                            @if ('C'== Session::get('cabinClass'))
                                             checked="checked"
                                            @endif
                                            >
                                            <span class="checkmark-2 btn-outline-secondary bshadow">Bussiness</span>
                                        </label>
                                        <label class="rdocon">
                                            <input type="radio" name="cabinClass" value="F"
                                            @if ('F' == Session::get('cabinClass'))
                                             checked="checked"
                                            
                                            @endif
                                            >
                                            <span class="checkmark-2 btn-outline-secondary bshadow">First Class</span>
                                        </label>
                                    </div>
                                    <div>
                                        <div class="float-left">
                                            <div class="msg-travllers"></div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" id="travller-btn" class="btn btn-sm btn-info px-2"
                                                onclick="togglePopup()">Apply</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-10 pb-10 ddn" >
                        <button class="searchbtn" name="main-search-btn" id="main-search-btn" onclick="spinnerr()" >SEARCH
                            <i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
    /*----------------- flight---------- */
.loaderr {
     z-index: 1000;
  display: none;
  position: fixed;
  top: 100%;
  left: 50%;
  height:100%;
  width:100%;
  text-align: center;
  transform: translate(-50%, -50%);
    background-color:#ffffff7d;
}

.loading img {
  width: 200px;
}
</style>

<div class="loaderr" >
  <div class="loading">
    <img src="https://www.flight.wagnistrip.com/assets/images/loader.gif" alt="" srcset="">
   <h4>Please have patience,<br>Your flight will be searched soon</h4>
  </div>
</div>



<script>
        
        /// == scripts of airport list == 03/09/2023 == //
        const fetchAirports = async (departrefrom) => {
            try {
                let searchairport = document.getElementsByClassName('airportsearchField')[departrefrom].value;
                const response = await fetch("{{url('api/airlinecodes')}}"+`?search=${searchairport}`);
                const resData = await response.json();
                let airdrpListFrom = document.getElementsByClassName("airdrpListFrom");
                let htmllist = '';
                resData.forEach((item, index)=>{
                    console.log(item.id);
                    htmllist += `<li key=${index} airport-fullname="${item.airport}" airport-cityname="${item.city}" itacode="${item.id}"><strong class="airname elipsistext">${item.city} (${item.id}) </strong><div class="smalltexts"><p class="peratext d-flex p-0 m-0" style="justify-content: space-between;"><span class="aircityname">${item.airport}</span> <span class="airstatename airname elipsistext text-warning" airpor-state="${item.state}">${item.country}</span></p></div></li>`;
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



<script type="text/javascript">
    function spinnerr(loading) {
        document.getElementsByClassName("loaderr")[0].style.display = "block";
    };
</script>


<script>
   
        $(window).on("load", function() {
            var triptype = "{{ !empty($segments['triptype']) ? $segments['triptype'] : '' }}";
            var departDate = "{{ !empty($segments['departDate']) ? $segments['departDate'] : '' }}";
            var returnDate = "{{ !empty($segments['returnDate']) ? $segments['returnDate'] : '' }}";
            var cabinClass = "{{ !empty($segments['cabinClass']) ? $segments['cabinClass'] : ''  }}";
            var Adult = parseInt($('input:hidden#travelsnoOfAdults').val());
            var child = parseInt($('input:hidden#travelsnoOfChilds').val());
            var Infrant = parseInt($('input:hidden#travelsnoOfInfants').val());
            var totalPass = Adult + child + Infrant;
            
            if (triptype == 'oneway') {
                $("#oneway-btn").prop('checked', 'checked');
                if ($("#oneway-btn").is(':checked')) {
                    $("#type1-deadline").removeClass('date-field').css("display", "none");
                    $("#onetripmsg").show();
                    $(this).hide();
                    $('#round i').removeClass('fa-check-circle').addClass('fa-circle-o');
                    $('#oneway i').removeClass('fa-circle-o').addClass('fa-check-circle');
                }
            } else if (triptype == 'roundtrip') {
                $("#roundtrip-btn").prop('checked', 'checked');
                $("#onetripmsg").hide();
                $('input:text#type1-deadline').hide();
                $('input:text#type1-deadline').attr('value', '').attr('name', '');
                $('input:text#type1ReturnPUT').show().attr('value', returnDate);
                
                $('input#type1ReturnPUT').click(function() {
                    $('input#type1ReturnPUT').hide().attr('name', '');
                    $('input#type1-deadline').show().attr('name', 'returnDate');

                });
                
            }
            $('input:text#type1Start').hide();
            $('input:text#type1Start').attr('value', '').attr('name', '');
            $('input:text#type1StartPUT').show().attr('value', departDate);
            //    $('#ABCD').show();
            $('input:radio#putTravelClass').prop('checked', 'checked').attr('value', cabinClass);
            $('#total-travller').text(totalPass + " Travelers");
            var cabinClassmatch = $("INPUT:radio[name=cabinClass][value=" + cabinClass + "]").parent(
                'label').text();
            $('#cabClass').text(cabinClassmatch);
        });

        $('input#type1StartPUT').click(function() {
            $(this).hide();
            $('input#type1StartPUT').attr('name', '');
            $('input#type1Start').show().attr('name', 'departDate');
        });

        $('input:radio[name=trip-type]').change(function() {
            if ($(this).val() == 'oneway') {
                $('#round i').removeClass('fa-check-circle').addClass('fa-circle-o');
                $('#oneway i').removeClass('fa-circle-o').addClass('fa-check-circle');
                $('#multic i').removeClass('fa-check-circle').addClass('fa-circle-o');
                $('input#type1ReturnPUT').hide();
            } else if ($(this).val() == 'roundtrip') {
                $('#oneway i').removeClass('fa-check-circle').addClass('fa-circle-o');
                $('#round i').removeClass('fa-circle-o').addClass('fa-check-circle');
                $('#multic i').removeClass('fa-check-circle').addClass('fa-circle-o');
                $('span#onetripmsg').hide();
                $('input:text#type1ReturnPUT').show().attr('value', returnDate);
            } else if ($(this).val() == 'multicity') {
                $('#oneway i').removeClass('fa-check-circle').addClass('fa-circle-o');
                $('#round i').removeClass('fa-check-circle').addClass('fa-circle-o');
                $('#multic i').removeClass('fa-circle-o').addClass('fa-check-circle');
            }
        });
    /*****  Code by Himanshu Mehra Start  *****/
let city1 = "";
let city2 = "";
let select11 = "";
let select22 = "";
let slitTxtOne = "";
let slitTxtTwo = "";
const myFunc = () => {
    let select2DepartureElem = document.getElementById("select2_departure").value;
    let select1 = document.getElementById("select2-select2_departure-container").innerHTML;
    let select2 = document.getElementById("select2-select2_arrival-container").innerHTML;
    let select2ArrivalElem = document.getElementById("select2_arrival").value;
    select11 = select1;
    select22 = select2;
    city1 = select2DepartureElem;
    city2 = select2ArrivalElem;
    let slitxtIdOneElem = document.getElementById("slitxtIdOne").innerHTML;
    slitTxtOne = slitxtIdOneElem;
    // console.log(slitxtIdOneElem);
    let slitxtIdTwoElem = document.getElementById("slitxtIdTwo").innerHTML;
    slitTxtTwo = slitxtIdTwoElem;
    // console.log(slitxtIdTwoElem);
}


const swap = (id1, id2, id3, id4) => {
    myFunc();
    let a = `<option value=${city1}>${select11}</option>`;
    let b = `<option value=${city2}>${select22}</option>`;
    document.getElementById(id1).innerHTML = b;
    document.getElementById(id2).innerHTML = a;

    let c = `<div>${slitTxtOne}</div>`;
    let d = `<div>${slitTxtTwo}</div>`;
    console.log(c);
    console.log(d);
    document.getElementById(id3).innerHTML = d;
    document.getElementById(id4).innerHTML = c;
}
/*****  Code by Himanshu Mehra End  *****/
</script>

@php
    use App\Http\Controllers\Airline\AirportiatacodesController;
@endphp
@if ($segment[0]['StopCount'] == '0-Stop')
    <div class="pb-10">
        <div class="boxunder">
            <div class="row">
                <div class="col-sm-6">
                    <span class="bg-dark px-3 rounded-right text-light">{{ $trip }}</span>
                    <span class="dpf">
                        <span
                            class="fontsize-22">{{ $segment[0]['Origin']['AirportCode'] . '-' . $segment[0]['Destination']['AirportCode'] }}
                            <small class="owstitle">|
                                {{ getDateFormat($segment[0]['Origin']['DateTime']) }}</small> </span><br>
                        <span class="owstitle"> {{ $segment[0]['StopCount'] .' | '. $segment[0]['Duration'] }}</span>
                    </span>
                </div>
                <div class="col-sm-6">
                    <div class="float-right ranjepp">
                        <span class="prebtn marginright-20"> Cancellation Fees Apply </span>
                        <span class="fontsize-22"> Fare Rules </span>
                    </div>
                </div>
            </div>
            <div class="borderbotum"></div>

            <div class="row ranjepp" id="flight_rev-page">

                <div class="col-sm-2">
                    <img class="imgges_col" src="{{ asset('assets/images/flight/' . $segment[0]['AirLine']['Code']) }}.png" alt="flight">
                    <div class="owstitle1">
                        {{ $segment[0]['AirLine']['Name'] }}
                    </div>
                    <div class="owstitle">
                        {{ $segment[0]['AirLine']['Code'] . '-' . $segment[0]['AirLine']['Identification'] }}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[0]['Origin']['DateTime']) }}
                    </div>

                    <span class="onwfnt-22 font-weight-bold">{{ $segment[0]['Origin']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[0]['Origin']['DateTime']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[0]['Origin']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[0]['Origin']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2 text-center pt-4">
                    <div style="margin-left: -40px;">
                        <div class="owstitle-22">
                            {{ $segment[0]['Duration'] }}
                        </div>
                        <div class="borderbotum"></div>
                        <small class="byair">By : Air</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[0]['Destination']['DateTime']) }}
                    </div>
                    <span class="onwfnt-22 font-weight-bold">{{ $segment[0]['Destination']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[0]['Destination']['DateTime']) }}
                    </div>

                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[0]['Destination']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[0]['Destination']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2">
                    <span class="owstitle mb-2 owstitilt_o21">Fare Type</span>
                    <button type="button" class="btn-sm btn owstitilt_o22 btn-outline-success">SAVER</button>
                </div>

            </div>
        </div>
    </div>
@elseif($segment[0]['StopCount'] == "1-Stop")

    <div class="pb-10">
        <div class="boxunder">
            <div class="row">
                <div class="col-sm-6">
                    <span class="bg-dark px-3 rounded-right text-light">{{ $trip }}</span>
                    <span class="dpf">
                        <span
                            class="fontsize-22">{{ $segment[0]['Origin']['AirportCode'] . '-' . $segment[1]['Destination']['AirportCode'] }}
                            <small class="owstitle">|
                                {{ getDateFormat($segment[0]['Origin']['DateTime']) }}</small> </span><br>
                        <span class="owstitle"> {{ $segment[0]['StopCount'] .' | '. $segment[0]['Duration'] }}</span>
                    </span>
                </div>
                <div class="col-sm-6">
                    <div class="float-right ranjepp">
                        <span class="prebtn marginright-20"> Cancellation Fees Apply </span>
                        <span class="fontsize-22"> Fare Rules </span>
                    </div>
                </div>
            </div>
            <div class="borderbotum"></div>

            <div class="row ranjepp" id="flight_rev-page">

                <div class="col-sm-2">
                    <img class="imgges_col" src="{{ asset('assets/images/flight/' . $segment[0]['AirLine']['Code']) }}.png"
                        alt="flight">
                    <div class="owstitle1">
                        {{ $segment[0]['AirLine']['Name'] }}
                    </div>
                    <div class="owstitle">
                        {{ $segment[0]['AirLine']['Code'] . '-' . $segment[0]['AirLine']['Identification'] }}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[0]['Origin']['DateTime']) }}
                    </div>

                    <span class="onwfnt-22 font-weight-bold">{{ $segment[0]['Origin']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[0]['Origin']['DateTime']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[0]['Origin']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[0]['Origin']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2 text-center pt-4">
                    <div style="margin-left: -40px;">
                        <div class="owstitle-22">
                            {{ $segment[0]['Duration'] }}
                        </div>
                        <div class="borderbotum"></div>
                        <small class="byair">By : Air</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[0]['Destination']['DateTime']) }}
                    </div>
                    <span class="onwfnt-22 font-weight-bold">{{ $segment[0]['Destination']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[0]['Destination']['DateTime']) }}
                    </div>

                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[0]['Destination']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[0]['Destination']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2">
                    <span class="owstitle owstitilt_o21 mb-2">Fare Type</span>
                    <button type="button" class="btn-sm owstitilt_o22 btn btn-outline-success">SAVER</button>
                </div>
</div>
<div class="row ranjepp" >
<div class="col-sm-12 col_sm-121"  >
                    <div class="borderbotum-2"></div>
                    <div class="borderraduesround">
                        {{ getTimeDff_formated($segment[0]['Destination']['DateTime'], $segment[1]['Origin']['DateTime']) . $segment[0]['Destination']['CityName']  }}
                    </div>
                </div>
                </div>
<div class="row ranjepp py-5" id="flight_rev-page">
                

                <div class="col-sm-2">
                    <img class="imgges_col" src="{{ asset('assets/images/flight/' . $segment[1]['AirLine']['Code']) }}.png"
                        alt="flight">
                    <div class="owstitle1">
                        {{ $segment[1]['AirLine']['Name'] }}
                    </div>
                    <div class="owstitle">
                        {{ $segment[1]['AirLine']['Code'] . '-' . $segment[1]['AirLine']['Identification'] }}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[1]['Origin']['DateTime']) }}
                    </div>

                    <span class="onwfnt-22 font-weight-bold">{{ $segment[1]['Origin']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[1]['Origin']['DateTime']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[1]['Origin']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[1]['Origin']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2 text-center pt-4">
                    <div style="margin-left: -40px;">
                        <div class="owstitle-22">
                            {{ $segment[1]['Duration'] }}
                        </div>
                        <div class="borderbotum"></div>
                        <small class="byair">By : Air</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[1]['Destination']['DateTime']) }}
                    </div>
                    <span class="onwfnt-22 font-weight-bold">{{ $segment[1]['Destination']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[1]['Destination']['DateTime']) }}
                    </div>

                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[1]['Destination']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[1]['Destination']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2">
                    <span class="owstitle owstitilt_o21 mb-2">Fare Type</span>
                    <button type="button" class="btn-sm owstitilt_o22 btn btn-outline-success">SAVER</button>
                </div>
            </div>
        </div>
    </div>

@elseif($segment[0]['StopCount'] == "2-Stop")
    <div class="pb-10">
        <div class="boxunder">
            <div class="row">
                <div class="col-sm-6">
                    <span class="bg-dark px-3 rounded-right text-light">{{ $trip }}</span>
                    <span class="dpf">
                        <span
                            class="fontsize-22">{{ $segment[0]['Origin']['AirportCode'] . '-' . $segment[1]['Destination']['AirportCode'] }}
                            <small class="owstitle">|
                                {{ getDateFormat($segment[0]['Origin']['DateTime']) }}</small> </span><br>
                        <span class="owstitle"> {{ $segment[0]['StopCount']. '|' .$segment[0]['Duration'] }}</span>
                    </span>
                </div>
                <div class="col-sm-6">
                    <div class="float-right ranjepp">
                        <span class="prebtn marginright-20"> Cancellation Fees Apply </span>
                        <span class="fontsize-22"> Fare Rules </span>
                    </div>
                </div>
            </div>
            <div class="borderbotum"></div>

            <div class="row ranjepp" id="flight_rev-page">

                <div class="col-sm-2">
                    <img class="imgges_col" src="{{ asset('assets/images/flight/' . $segment[0]['AirLine']['Code']) }}.png"
                        alt="flight">
                    <div class="owstitle1">
                        {{ $segment[0]['AirLine']['Name'] }}
                    </div>
                    <div class="owstitle">
                        {{ $segment[0]['AirLine']['Code'] . '-' . $segment[0]['AirLine']['Identification'] }}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[0]['Origin']['DateTime']) }}
                    </div>

                    <span class="onwfnt-22 font-weight-bold">{{ $segment[0]['Origin']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[0]['Origin']['DateTime']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[0]['Origin']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[0]['Origin']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2 text-center pt-4">
                    <div style="margin-left: -40px;">
                        <div class="owstitle-22">
                            {{ $segment[0]['Duration'] }}
                        </div>
                        <div class="borderbotum"></div>
                        <small class="byair">By : Air</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[0]['Destination']['DateTime']) }}
                    </div>
                    <span class="onwfnt-22 font-weight-bold">{{ $segment[0]['Destination']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[0]['Destination']['DateTime']) }}
                    </div>

                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[0]['Destination']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[0]['Destination']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2">
                    <span class="owstitle mb-2">Fare Type</span>
                    <button type="button" class="btn-sm btn btn-outline-success">SAVER</button>
                </div>
</div>
<div class="row ranjepp" >
<div class="col-sm-12 col_sm-121"  >
                <div class="col-sm-12 col_sm-121">
                    <div class="borderbotum-2"></div>
                    <div class="borderraduesround">
                        {{-- {{ BladeOfFlightController::getTimeDff($roundtripOnestopOnestop->itineraryDetails[0]->segmentInformation[0], $roundtripOnestopOnestop->itineraryDetails[0]->segmentInformation[1]) }} --}}
                    </div>
                </div>
                </div>
                </div>
<div class="row ranjepp" id="flight_rev-page">
                <div class="col-sm-2">
                    <img class="imgges_col" src="{{ asset('assets/images/flight/' . $segment[1]['AirLine']['Code']) }}.png"
                        alt="flight">
                    <div class="owstitle1">
                        {{ $segment[1]['AirLine']['Name'] }}
                    </div>
                    <div class="owstitle">
                        {{ $segment[1]['AirLine']['Code'] . '-' . $segment[1]['AirLine']['Identification'] }}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[1]['Origin']['DateTime']) }}
                    </div>

                    <span class="onwfnt-22 font-weight-bold">{{ $segment[1]['Origin']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[1]['Origin']['DateTime']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[1]['Origin']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[1]['Origin']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2 text-center pt-4">
                    <div style="margin-left: -40px;">
                        <div class="owstitle-22">
                            {{ $segment[1]['Duration'] }}
                        </div>
                        <div class="borderbotum"></div>
                        <small class="byair">By : Air</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[1]['Destination']['DateTime']) }}
                    </div>
                    <span class="onwfnt-22 font-weight-bold">{{ $segment[1]['Destination']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[1]['Destination']['DateTime']) }}
                    </div>

                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[1]['Destination']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[1]['Destination']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2">
                    <span class="owstitle owstitilt_o21 mb-2">Fare Type</span>
                    <button type="button" class="btn-sm owstitilt_o22 btn btn-outline-success">SAVER</button>
                </div>
</div>
        <div class="row ranjepp" >
            <div class="col-sm-12 col_sm-121"  >
                <div class="col-sm-12 col_sm-121">
                    <div class="borderbotum-2"></div>
                    <div class="borderraduesround">
                        {{-- {{ BladeOfFlightController::getTimeDff($roundtripOnestopOnestop->itineraryDetails[0]->segmentInformation[0], $roundtripOnestopOnestop->itineraryDetails[0]->segmentInformation[1]) }} --}}
                    </div>
                </div>
                </div>
                </div>
            <div class="row ranjepp" id="flight_rev-page">
                <div class="col-sm-2">
                    <img class="imgges_col"src="{{ asset('assets/images/flight/' . $segment[2]['AirLine']['Code']) }}.png"
                        alt="flight">
                    <div class="owstitle1">
                        {{ $segment[2]['AirLine']['Name'] }}
                    </div>
                    <div class="owstitle">
                        {{ $segment[2]['AirLine']['Code'] . '-' . $segment[2]['AirLine']['Identification'] }}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[2]['Origin']['DateTime']) }}
                    </div>

                    <span class="onwfnt-22 font-weight-bold">{{ $segment[2]['Origin']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[2]['Origin']['DateTime']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[2]['Origin']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[2]['Origin']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2 text-center pt-4">
                    <div style="margin-left: -40px;">
                        <div class="owstitle-22">
                            {{ $segment[2]['Duration'] }}
                        </div>
                        <div class="borderbotum"></div>
                        <small class="byair">By : Air</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="fontsize-22">
                        {{ getTimeFormat($segment[2]['Destination']['DateTime']) }}
                    </div>
                    <span class="onwfnt-22 font-weight-bold">{{ $segment[2]['Destination']['CityName'] }}</span>
                    <div class="owstitle">
                        {{ getDateFormat($segment[2]['Destination']['DateTime']) }}
                    </div>

                    <div class="onwfnt-11 colorgrey">
                        {{ AirportiatacodesController::getAirport($segment[2]['Destination']['AirportCode']) }}
                    </div>
                    <div class="onwfnt-11 colorgrey">Terminal
                        {{ $segment[2]['Destination']['Terminal'] ?? '' }}
                    </div>
                </div>
                <div class="col-sm-2">
                    <span class="owstitle owstitilt_o21 mb-2">Fare Type</span>
                    <button type="button" class="btn-sm owstitilt_o22 btn btn-outline-success">SAVER</button>
                </div>
                </div>
            </div>
        </div>
    </div>
@endif
<script>
           
 /////// API Data code By Neelesh //////  

   
var divs = document.getElementsByClassName('owstitle1');
var uniqueValues = [];

for (let i = 0; i < divs.length; i++) {
  let iddata = divs[i].innerHTML;
  
  if (!uniqueValues.includes(iddata)) {
    uniqueValues.push(iddata);
    fetchAirlineCode(iddata, divs);
  }
}

function fetchAirlineCode(iddata, divs) {
  fetch("https://flights.wagnistrip.com/api/airlinecode?search=" + iddata)
    .then(response => response.text())
    .then(data => {
      for (let i = 0; i < divs.length; i++) {
        if (divs[i].innerHTML === iddata) {
          divs[i].innerHTML = data;
        }
      }
    })
    .catch(error => console.error(error));
}

  ///////  End  Code By Neelesh ////// 
         
</script>

@php
    use App\Http\Controllers\Airline\AirportiatacodesController;
@endphp
<div class="col-2 col-md-2 col-sm-2">
    <img src="{{ asset('assets/images/flight/' . $operatingCompany) }}.png"
        alt="flight" class="imgonewayw">
    <div class="owstitle1">
        {{ $operatingCompany }}
       </div>
    <div class="owstitle">
        {{ $operatingCompany . '-' . $segmentInformation->flightDetails->flightIdentification->flightNumber }}
    </div>
</div>
<div class="col-3 col-md-3 col-sm-3">
    <div class="fontsize-22">
        {{ getTime_fn($segmentInformation->flightDetails->flightDate->departureTime) }}
    </div>
   
    <span
        class="onwfnt-22 font-weight-bold">{{ AirportiatacodesController::getCity($segmentInformation->flightDetails->boardPointDetails->trueLocationId) }}</span>
        <div class="owstitle">
            {{ getDate_fn($segmentInformation->flightDetails->flightDate->departureDate) }}
        </div>
        <div class="onwfnt-11 colorgrey">
        {{ AirportiatacodesController::getAirport($segmentInformation->flightDetails->boardPointDetails->trueLocationId) }}
    </div>
    <div class="onwfnt-11 colorgrey">Terminal
        {{ $segmentInformation->apdSegment->departureStationInfo->terminal ?? '' }}
    </div>
</div>
<div class="col-2 col-md-2 col-sm-2 text-center pt-4">
    <div style="margin-left: -40px;">
        <div class="owstitle-22">
            {{ substr_replace(substr_replace($arrivalingTime, 'h ', 2, 0), 'm', 6, 0) }}
        </div>
        <div class="borderbotum"></div>
    </div>
</div>
<div class="col-3 col-md-3 col-sm-3">
    <div class="fontsize-22">
        {{ getTime_fn($segmentInformation->flightDetails->flightDate->arrivalTime) }}
    </div>
   
    <span
        class="onwfnt-22 font-weight-bold">{{ AirportiatacodesController::getCity($segmentInformation->flightDetails->offpointDetails->trueLocationId) }}</span>
        <div class="owstitle">
            {{ getDate_fn($segmentInformation->flightDetails->flightDate->arrivalDate) }}
        </div>
        <div class="onwfnt-11 colorgrey">
        {{ AirportiatacodesController::getAirport($segmentInformation->flightDetails->offpointDetails->trueLocationId) }}
    </div>
    <div class="onwfnt-11 colorgrey">Terminal
        {{ $segmentInformation->apdSegment->arrivalStationInfo->terminal ?? '' }}
    </div>
</div>
<div class="col-2 col-md-2 col-sm-2">
    <span class="owstitle mb-2">Fare Type</span>
    <button type="button" class="btn-sm btn btn-outline-success btnressaver">SAVER</button>
</div>
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
<div class="row">
    <div class="col-sm-1">
        <img src="{{ asset('assets/images/flight/' . $itineraryDepart->AirLineCode) }}.png"
            alt="{{ $itineraryDepart->AirLineCode }}"><br>
        <span class="font12">{{ $itineraryDepart->AirLineName }}</span><br>
        <span
            class="font12">{{ $itineraryDepart->AirLineCode . ' - ' . $itineraryDepart->FlightNumber }}</span>
    </div>
    <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-2 text-center">
                <div class="font30">{{ $itineraryDepart->DepartAirportCode }}
                </div>
                <span
                    class="font12 text-primary font-weight-bold">{{ $itineraryDepart->DepartCityName }}</span>
            </div>
            <div class="col-sm-2 text-center mt-2">
                <span class="font12"> 1h 20m </span><br>
                <hr>
                <span class="font12">{{ $trip }}</span>
            </div>
            <div class="col-sm-2 text-center">
                <div class="font30">
                    {{ $itineraryArrival->ArrivalAirportCode }}
                </div>
                <span
                    class="font12 text-primary font-weight-bold">{{ $itineraryArrival->ArrivalCityName }}</span>
            </div>
            <div class="col-sm-3">
                <span class="pnrc"> PNR :
                    {{ $itineraryArrival->AirLinePNR }}
                </span>
            </div>
            <div class="col-sm-3">
                <span class="datec"> DATE :
                    {{ getDateFormat_db($itineraryArrival->DepartDateTime) . ' | ' . getTimeFormat_db($itineraryArrival->DepartDateTime) }}
                </span>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <a class="btn btn-sm btn-primary float-right" style="margin-top: 27px;"
            href="/user/booking-details/{{ $primaryId }}">VIEW TICKET</a>
    </div>
</div>
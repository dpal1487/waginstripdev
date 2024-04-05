<div class="row" id="nowap_row">
    <div class="col-sm-6">
        <span class="bg-dark px-3 rounded-right text-light">{{$trip}}</span>

        <span class="dpf">
            <span class="fontsize-22">{{ $itineraryDetails->originDestination->origin. '-' .$itineraryDetails->originDestination->destination }} | <small class="owstitle">{{ getDate_fn($segmentInformation->flightDetails->flightDate->departureDate) }}</small> </span><br>
            <span class="owstitle owstite_12">{{ $triptype }} | {{ substr_replace(substr_replace($arrivalingTime, 'h ', 2, 0), 'm', 6, 0) }}</span>
        </span>
    </div>
    <div class=col-sm-6">
        <div class="float-right ranjepp">
            <span class="prebtn marginright-20"> Cancellation Fees Apply </span>
            <span class="fontsize-22 text-center"> Fare Rules </span>
        </div>
    </div>
</div>
<div class="borderbotum"></div>
 
@extends('userpages.master')
@section('title', 'user dashboard')
@section('body')

<div class="row">
        @php
            use App\Http\Controllers\Airline\AirportiatacodesController;
        @endphp
        <h1>Flight Book Details</h1>
        <div class="col-sm-12">
            @php
                $data = [];
            @endphp
            @foreach ($bookings as $bookingKey => $booking)
                @if ($booking['booking_from'] == 'AMADEUS')
                    {{-- @php
                     $itinerary = json_decode($booking->itinerary);
                        @endphp --}}
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            {{-- @foreach (json_decode($bookings->itinerary) as $itinerary) --}}
                           
                            <div class="row">
                                <div class="col-sm-1">
                                    <img src="{{ asset('assets/images/flight/AI.png') }}" alt=""><br>
                                    <span class="font12">  &nbsp;  </span><br>
                                    
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">  
                                        <div class="col-sm-2 text-center">
                                            <div class="font30"> DEL</div>
                                            <span
                                                class="font12 text-primary font-weight-bold">  DELHI
                                            </span>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <span class="font12"> {{ $booking->Duration }}1h 20m </span><br>
                                            <hr>
                                            <span class="font12"> {{ $booking->trip_stop }} </span>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <div class="font30"> Bob</div>
                                            <span class="font12 text-primary font-weight-bold">  Mumbai</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="pnrc"> PNR : {{ $booking->airline_pnr }} </span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="datec"> DATE : {{ $booking->created_at }} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <a href="/user/amadeus-booked/{{ $booking->id * 2022 }}"
                                        class="btn btn-sm btn-primary float-right" style="margin-top: 27px;">
                                        VIEW TICKET
                                    </a>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                @elseif ($booking['booking_from'] == 'GALILEO')
                    @php
                        $itinerarys = json_decode($booking->itinerary);
                    @endphp
                    {{-- {{ dd(json_decode($booking->itinerary)) }} --}}
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            @if ($booking->trip_type == 2)
                                @php
                                    $OutboundItinerays = [];
                                    $InboundItinerays = [];
                                @endphp
                                @foreach ($itinerarys as $itinerary)
                                    @if ($itinerary->FlightCount === 1)
                                        @php
                                            array_push($OutboundItinerays, $itinerary);
                                        @endphp
                                    @elseif ($itinerary->FlightCount === 2)
                                        @php
                                            array_push($InboundItinerays, $itinerary);
                                        @endphp
                                    @endif
                                @endforeach
                                @if (isset($OutboundItinerays[3]) && !isset($OutboundItinerays[4]))
                                    <x-userpages.flightboked-itinerary tripType="$booking->trip_type" :itineraryDepart="$OutboundItinerays[0]"
                                        :itineraryArrival="$OutboundItinerays[3]" primaryId="{{ $booking->id * 2022 }}"
                                        trip="3-Stop | {{ $OutboundItinerays[0]->ArrivalCityName .'|' .$OutboundItinerays[1]->ArrivalCityName .'|' .$OutboundItinerays[2]->ArrivalCityName }}" />
                                @elseif (isset($OutboundItinerays[2]) && !isset($OutboundItinerays[3]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$OutboundItinerays[0]" :itineraryArrival="$OutboundItinerays[2]"
                                        primaryId="{{ $booking->id * 2022 }}"
                                        trip="2-Stop | {{ $OutboundItinerays[0]->ArrivalCityName . '|' . $OutboundItinerays[1]->ArrivalCityName }}" />
                                @elseif (isset($OutboundItinerays[1]) && !isset($OutboundItinerays[2]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$OutboundItinerays[0]" :itineraryArrival="$OutboundItinerays[1]"
                                        primaryId="{{ $booking->id * 2022 }}"
                                        trip="1-Stop | {{ $OutboundItinerays[0]->ArrivalCityName }}" />
                                @elseif (isset($OutboundItinerays[0]) && !isset($OutboundItinerays[1]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$OutboundItinerays[0]" :itineraryArrival="$OutboundItinerays[0]"
                                        primaryId="{{ $booking->id * 2022 }}" trip="Non-Stop" />
                                @endif
                                <hr />
                                @if (isset($InboundItinerays[3]) && !isset($InboundItinerays[4]))
                                    <x-userpages.flightboked-itinerary tripType="$booking->trip_type" :itineraryDepart="$InboundItinerays[0]"
                                        :itineraryArrival="$InboundItinerays[3]" primaryId="{{ $booking->id * 2022 }}"
                                        trip="3-Stop | {{ $InboundItinerays[0]->ArrivalCityName .'|' .$InboundItinerays[1]->ArrivalCityName .'|' .$InboundItinerays[2]->ArrivalCityName }}" />
                                @elseif (isset($InboundItinerays[2]) && !isset($InboundItinerays[3]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$InboundItinerays[0]" :itineraryArrival="$InboundItinerays[2]"
                                        primaryId="{{ $booking->id * 2022 }}"
                                        trip="2-Stop | {{ $InboundItinerays[0]->ArrivalCityName . '|' . $InboundItinerays[1]->ArrivalCityName }}" />
                                @elseif (isset($InboundItinerays[1]) && !isset($InboundItinerays[2]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$InboundItinerays[0]" :itineraryArrival="$InboundItinerays[1]"
                                        primaryId="{{ $booking->id * 2022 }}"
                                        trip="1-Stop | {{ $InboundItinerays[0]->ArrivalCityName }}" />
                                @elseif (isset($InboundItinerays[0]) && !isset($InboundItinerays[1]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$InboundItinerays[0]" :itineraryArrival="$InboundItinerays[0]"
                                        primaryId="{{ $booking->id * 2022 }}" trip="Non-Stop" />
                                @endif
                            @elseif($booking->trip_type == 1)
                                @if (isset($itinerarys[3]) && !isset($itinerarys[4]))
                                    <x-userpages.flightboked-itinerary tripType="$booking->trip_type" :itineraryDepart="$itinerarys[0]"
                                        :itineraryArrival="$itinerarys[3]" primaryId="{{ $booking->id * 2022 }}"
                                        trip="3-Stop | {{ $itinerarys[0]->ArrivalCityName .'|' .$itinerarys[1]->ArrivalCityName .'|' .$itinerarys[2]->ArrivalCityName }}" />
                                @elseif (isset($itinerarys[2]) && !isset($itinerarys[3]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$itinerarys[0]" :itineraryArrival="$itinerarys[2]"
                                        primaryId="{{ $booking->id * 2022 }}"
                                        trip="2-Stop | {{ $itinerarys[0]->ArrivalCityName . '|' . $itinerarys[1]->ArrivalCityName }}" />
                                @elseif (isset($itinerarys[1]) && !isset($itinerarys[2]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$itinerarys[0]" :itineraryArrival="$itinerarys[1]"
                                        primaryId="{{ $booking->id * 2022 }}"
                                        trip="1-Stop | {{ $itinerarys[0]->ArrivalCityName }}" />
                                @elseif (isset($itinerarys[0]) && !isset($itinerarys[1]))
                                    <x-userpages.flightboked-itinerary :itineraryDepart="$itinerarys[0]" :itineraryArrival="$itinerarys[0]"
                                        primaryId="{{ $booking->id * 2022 }}" trip="Non-Stop" />
                                @endif
                            @endif

                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection

<style>
    .returnplane {
        transform: rotate(223deg);
    }

    .arriveplane {
        transform: rotate(75deg);
    }

</style>

{{-- <script>
    $(function() {
        $('#printTicket').click(function() {
            alert('Download');
        });
    });
</script> --}}

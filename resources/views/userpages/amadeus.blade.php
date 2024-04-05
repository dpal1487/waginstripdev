@extends('userpages.master')
@section('title', 'user dashboard')
@section('body')
Not Get this time
<div class="row">
        <h1>Flight Book Details</h1>
        <div class="col-sm-12">
            @php
                $data = [];
            @endphp
           @foreach ($bookings as $bookingKey => $booking)
                @if ($booking['booking_from'] == 'AMADEUS')
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img src="{{ asset('assets/images/flight/AI.png') }}" alt=""><br>
                                    <span class="font12">Air India</span><br>
                                    <span class="font12">AI - 453</span>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <div class="font30">DEL</div>
                                            <span class="font12 text-primary font-weight-bold">{{ $booking->ArrivalCityName }}DELHI</span>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <span class="font12"> 1h 20m </span><br>
                                            <hr>
                                            <span class="font12"> 1 - STOP </span>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <div class="font30">BOM</div>
                                            <span class="font12 text-primary font-weight-bold">MUMBAI</span>
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
                                    <a href="/user/booking-details/{{ $booking->id * 2022 }}" class="btn btn-sm btn-primary float-right" style="margin-top: 27px;">
                                        VIEW TICKET
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
@endsection

       
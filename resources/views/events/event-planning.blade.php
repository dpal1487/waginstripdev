@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div class="container-fluid p-0">
        <div class="back-image71">
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card p-4 shadow">
            <h1 class="m-0 text-center"> Event Planning</h1>
            <div class="row mt-4">
                <div class="col-sm-7">
                    <h4 class="m-0 text-center">WONDERFUL EVENTS <br>
                        Create & Remember</h4>
                    <h5 class="pt-3 text-justify text-muted">We start with the creation of the initial idea or concept, we elaborate a creative
                        proposal adapted to the values, tastes and needs of each brand, company or person. Of course, always
                        within the budgetary range that they mark us.
                    </h5>
                </div>
                <div class="col-sm-5">
                    <div class="card border-0">
                        <img src="assets/images/events/scnd1.jpg" style="border-radius: 10px; margin-right: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Desktop End View -->
    <x-frontend.sections.mobile-view-pages />
    <div class=" dpnr">
        <x-footer />
    </div>

@endsection

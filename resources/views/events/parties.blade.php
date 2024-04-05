@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->

    <div class="container-fluid mt-5 p-0 ">
        <div class="back-image70">
        </div>
    </div>
    <div class="container mb-5" style="  border-radius:5px;">
        <div class="card p-3 shadow mt-5">
            <h2 class="m-0 pt-2 text-center font-weight-bold"> CORPORATE PARTIES</h2>
            <div class="row">
                <div class="col-sm-6 mt-5 p-3">
                    <p class="m-0 text-justify">If you’re planning high-profile corporate parties look no further than WT event
                        planning.
                        A hard working and creative team, led by Mr. Deepak Khanna, specializes in bringing an element of
                        surprise to the most elegant of events.We provide full luxury experience of party to our clients and
                        have set up the standard particularly for party events.Understanding the pattern and end goals of a
                        parties we can accurately facilitate all visuals,AV, special guests, stage set up, designs,
                        lighting, backdrops, artwork, and merchandise to support your important event. </p>
                </div>
                <div class="col-sm-6 mt-5">
                    <div class="card border-0">
                        <img src="assets/images/events/party1290.jpg"
                            style="border-radius: 10px; margin-right: 10px; margin-bottom: 10px;">
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

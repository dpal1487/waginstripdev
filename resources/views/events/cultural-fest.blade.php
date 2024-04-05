@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div class="container-fluid mt-5 p-0 ">
        <div class="back-image77 ">
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card shadow p-4">
            <h2 class=" text-center font-weight-bold pt-3"> Cultural Fest</h2>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <p class=" text-justify text-muted">Cultural events are events of a certain importance related to a branch of art, culture
                        or values. These events aim to spread and disseminate cultural themes. These can refer to different
                        arts such as performing arts, musicals, photography, literature,….Festivals or conferences are
                        usually organized on a particular theme. Each type of event requires a physical space adapted to its
                        characteristics, a certain technical achievement, a certain transmission strategy. These events are
                        usually organized by societies or cultural groups. However, in the cultural events sector we can
                        also find companies specializing in promotional marketing.</p>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0 bg-transparent">
                        <img src="assets/images/events/cltrl0.jpg" style="border-radius: 10px; margin-right: 10px;">
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

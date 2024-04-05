@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div class="container-fluid p-0 ">
        <div class="back-image74">
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card p-3 shadow mt-5">
            <h2 class="m-0 text-center pt-3">Floral Design</h2>
            <div class="row mt-4">
                <div class="col-sm-6 ">
                    <p class=" text-muted">When one thinks of floral design, the idea of ​​decorating a place with fresh
                        flowers and colors is the first thing that comes to mind. As it should be, flowers are an important
                        part of the decor of the event and the organizers are very involved in the creation of the design
                        concept..</p>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-transparent border-0">
                        <img src="assets/images/events/flrl2.jpg" style="border-radius: 10px; margin-right: 10px;">
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

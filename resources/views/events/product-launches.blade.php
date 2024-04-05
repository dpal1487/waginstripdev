@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->

    <div class="container-fluid p-0 ">
        <div class="back-image65">
        </div>
    </div>
    <div class="container mb-5" style="  border-radius:5px;">
        <div class="card p-3 shadow mt-5 rounded">
            <h2 class="m-0 font-weight-bold pt-3 text-center"> PRODUCT LAUNCHES</h2>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <p class=" text-justify">So much time, money and energy spent perfecting your new product you need it to be
                        a success from the start.Our crew understand how crucial each product release is and the precise
                        changes involved in making it a prevailing situation.
                        We realize that you want your product to stand out.We know a way to boom the narratives around
                        something that you're bringing to market, We make sure you have an advantage of huge publicity
                        and unleashing
                        its potential. Working together, we set up product release occasions to the audience with a
                        purpose.How huge or small you need your product release to be, we've the experience and insider
                        expertise to make it an achievement.
                        We can offer the whole lot from catering, which may be whatever from elegant canapes or
                        champagne bars and prestige dinners, to organising celebrity speakers who can add even more
                        excitement and buzz around the event.
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-transparent border-0">
                        <img src="assets/images/events/product-image.png" style="border-radius: 10px; margin-right: 10px;">
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

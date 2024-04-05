@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div class="container-fluid mt-5 p-0 ">
        <div class="back-image78">
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card p-4 shadow border-0">
            <h2 class=" text-center font-weight-bold pt-3"> Art Competition</h2>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p class="text-muted text-justify">Art is something that surrounds us. Scroll through your favorite social media pages
                        and chances are someone has at least shared some kind of artwork on your wall. It doesn't matter if
                        it's a photo, a GIF, or just words .For the right person, everything is art. Therefore, it should
                        not surprise you to know that this is an artist's world. To prove it, art contests and other events
                        are happening all over the world.There are a ton of different contests, from world famous painting
                        contests to tough digital art challenges.With so much to choose from, we've created a guide to help
                        you choose the competitions that are right for you.</p>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-transparent border-0">
                        <img src="assets/images/events/img1.jpg" style="border-radius: 10px; margin-right: 10px;">
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

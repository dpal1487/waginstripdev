@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div class="container-fluid mt-5 p-0 ">
        <div class="back-image73">
        </div>
    </div>
    <div class="container mb-5">
        <div class="card p-3 shadow mt-5">
            <h2 class="m-0 text-center pt-3">Cake Design</h2>
            <div class="row mt-4">
                <div class="col-sm-6 ">
                    <p class=" text-muted">When selecting a cake design to display at the reception, many couples struggle to
                        find a style that suits them it's beautiful, matches the pattern of the day, and makes a statement
                        that will wow its guests. Some couples choose to go a more classic route with ivory buttercream and
                        fresh flowers or sugar while others incorporate soft or bold wedding colors, intricate prints or
                        patterns that are present elsewhere in the decor . A number of brides and grooms find the towering
                        wrapper to be the most breathtaking for an opulent celebration, so if their spending limit allows,
                        they will display cakes higher than most of their guests, which really become part of the reception
                        decor . Although these pack designs are absolutely stunning, they are not the only option when it
                        comes to choosing a style that will look both unique and beautiful. From miniature cakes for each
                        guest in attendance, to three-tier confections with trendy floral prints, to weddings cakes in
                        unusual tones like black, the options to wow your loved ones are truly endless! </p>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-transparent border-0">
                        <img src="assets/images/events/cakedesign1.jpg" style="border-radius: 10px; margin-right: 10px;">
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

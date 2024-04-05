@extends('layouts.master')
@section('title', 'No Flights Available 500')
@section('body')

    <x-search-bar />

    <!-- DESKTOP VIEW END -->
        <div class="container pt-20">
            <div class="boxunder text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{ asset('assets/images/flights/no_flit.png') }}" alt="" width="300">
                        <div class="fnt20"> NO FLIGHTS FOUND</div>
                        <p class="searchtitle">Our systems seem to be experiencing an issue.<br> We are working
                            on resolving it asap.<br> Please refresh the page or go back to the earlier page</p>
                        <a href="/" class="btn btn-info" role="button"> GO BACK | TRY ANOTHER FLIGHTS | <i
                                class="fa fa-plane"></i> </a>
                        <div class="pb-20"></div>
                    </div>
                </div>
            </div>
        </div>

    <!-- MOBILE VIEW START -->
    <div id="MOBILEVIEWONETRIP">
        <header class="stickyheader">
            <div class="row">
                <div class="col-sm-6">
                    ddd
                </div>
                <div class="col-sm-6">
                    ddd
                </div>
            </div>
        </header>

    </div>
    <!-- MOBILE VIEW END -->

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/range.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sliderstyle/custom.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/range.js') }}"></script>
    <script src="{{ asset('assets/sliderstyle/multislider.js') }}"></script>
    <script src="{{ asset('assets/sliderstyle/multislider.min.js') }}"></script>
    <script>
        $('#exampleSlider').multislider({
            interval: 0,
            slideAll: false,
            duration: 100
        });
   </script>
   {{-- <x-footer /> --}}
@endsection




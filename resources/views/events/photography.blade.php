@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->

    <div class="container-fluid p-0 ">
        <div class="back-image75">
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card p-3 shadow mt-5">
            <h2 class="m-0 text-center pt-3">Photography</h2>
            <div class="row mt-4">
                <div class="col-sm-6 ">
                    <ul class="photography_sections">
                        <li>There are hundreds of articles and blogs online that tell you how difficult and overwhelming
                            organising a corporate party is.
                        <li>Breaking the process of event planning down into achievable tasks, helps you stay focused
                            and accomplish your mission to organise an awesome party one task at a time. Yes, it is a
                            big job. Yes, there’s a lot to think about, but with proper planning and our handy
                            checklist, organising a corporate party in London can be fun and rewarding too.</li>
                        <li> Whatever your level of experience this checklist should give you a basic framework and the
                            confidence to plan the perfect corporate party.</li>
                        <li>a chance of directly exposing your work before people who may
                            be working on similar or related areas. It offers possibility of discussion which are often
                            invaluable in generating new ideas.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-transparent border-0">
                        <img class="w-100" src="assets/images/events/photography1.jpg" style="border-radius: 10px; margin-right: 10px;">
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

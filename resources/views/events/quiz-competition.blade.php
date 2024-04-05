@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div class="container-fluid p-0 mt-5">
        <div class="back-image79">
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card shadow p-4">
            <h2 class=" text-center font-weight-bold pt-3">Quiz Competition</h2>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p class="text-muted text-justify">Quiz, a competition in which participants test what they know by answering questions
                        on one or more topics.
                        The term quiz is a capacious one: it can refer to a single game consisting of just a few questions,
                        or it can refer to a large-scale event involving dozens or hundreds of people. Quizzes may be held
                        on a variety of subjects, or they may be on just one. Quiz formats also vary widely, ranging from
                        weekly quizzes at a local pub, with participants competing for glory (and perhaps a few free pints),
                        to widely broadcast television game shows such as Who Wants to Be a Millionaire, with enormous cash
                        prizes on offer. </p>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                        <img src="assets/images/events/quiz2.jpg" style="border-radius: 10px; margin-right: 10px;">
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

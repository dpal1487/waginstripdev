@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div class="container-fluid p-0 ">
        <div class="back-image76">
        </div>
    </div>
    <div class="container">
        <div class="card p-4 shadow mt-5 mb-5">
            <h2 class="text-center pt-2 font-weight-bold">Science Exhibition</h2>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <p class="text-muted text-justify">Science has emerge as an integral part on the modern world barring who the complete
                        structure about the society, chances a collapse. A science showing is an interface about art and
                        class or such contributes in the direction of growing awareness about eduction as much well as
                        developing exertion into students.
                        College science festivals bear been a fashion between many universities across the ball so lore
                        college students arrive in accordance with showcase their projects.
                        Students are expected to edit innovative designs about at least one regarding theirs projects while
                        grudging a topic related after theirs subject according to be mentioned into detail for the duration
                        of the fair.
                        The Science of Color and Light is LASC's latest discovery exhibit, in which strange minds explore
                        the science behind the world we see. Guests will have opportunity to experiment with hands-on
                        activities, studying shadows and shadows in unison as they explore our color wall, but do research
                        on infrared imaging! </p>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-transparent border-0">
                        <img src="assets/images/events/image2 (2).jpg" style="border-radius: 10px; margin-right: 10px;">
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

@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div class="container-fluid mt-5 p-0 ">
        <div class="back-image69">
        </div>
    </div>
    <div class="container" style="  border-radius:5px;">
        <div class="card shadow p-3 mt-5 mb-5">
            <h2 class="m-0 text-center font-weight-bold pt-3">SEMINARS & CONFERENCES </h2>
            <div class="row">
                <div class="col-sm-6 mt-5 p-3">
                   
                    <p class="m-0">Conferences or Seminars in India or Internationally put simply is just a gathering
                        of people to confer on a given subject,
                        simple in terms but lot of planning is required to ensure the motive for the event to be
                        discussed,is passed on to the consign without a hitch and in a professional manner.
                        Understanding the pattern and end goals of a seminars and conference means we can accurately
                        facilitate all visuals,
                        AV, special guests, stage set up, designs, lighting, backdrops, artwork, and merchandise to
                        support your important event.
                        Seminars and conferences are planned and coordinated in exacting detail by our professional
                        meeting and convention planners, we assure you of the quality and seamless organizational flow
                        of work throughout the day, to create a spectacular and measurable success.</p>
                </div>
                <div class="col-sm-6 mt-5">
                    <div class="card border-0">
                        <img src="assets/images/events/seminar-image.png" style="border-radius: 10px; margin-right: 10px;">
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

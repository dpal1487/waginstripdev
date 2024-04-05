@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->

    <div class="container-fluid mt-5 p-0">
        <div class="back-image56">
            <h3 class="head-1 animate__fadeInDown animate__animated animate__bounce">AWARD CEREMONIES</h3>

        </div>
    </div>
    <div class="container">
        <div class="card p-3 shadow" style="margin-top: -60px; border: none; border-radius: 10px; margin-bottom: 20px;">
            <h2 class="text-center font-weight-bold text-dark m-0 pt-4">AWARD
                CEREMONIES</h2>
            <div class="row">
                <div class="col-sm-7 mt-5">
                    <h3 class="head-3"></h3>
                    <p class="para-1">Whether you're here to show gratitude, praise to the team for their hard work or
                        you're are trying to recognize experts, Awards are a great opportunity to mention thanks for their
                        service and work. Planning an awards rite is a large challenge and preferring any occasion calls for
                        an in depth quantity of making plans. Award ceremonies are an outstanding possibility for the
                        recognition of experts in your enterprise for his or her tough work, dedication, and success. If
                        you're thinking about hosting an awards function and need to make a significant impact, this is the
                        right place for you to plan the whole thing you want to keep in mind whilst making plans for a hit
                        occasion. .</p>
                </div>
                <div class="col-sm-5 mt-5">
                    <div class="card bg-transparent border-0">
                        <img src="assets/images/events//award.jpg" style="border-radius: 10px; margin-right: 10px;">
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

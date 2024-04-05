@extends('layouts.master')
@section('title', 'XYZ')
@section('body')

    <div class="container mobileVes1 mb-5 p-0" style="margin-top: 150px">
        <p>31 May 2022</p>
        <h1 class="m-0 font-weight-bold">Get Flat ₹600 Off On Flights Via Paytm</h1>
        <hr class="hrztinal">
        <br>
        <br>
        <nav aria-label="breadcrumb p-0">
            <ol class="breadcrumb bgsscolores p-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
        <div class="card shadow mb-5">
            <div class="card-header bg-info p-3">
                <h4 class="font-weight-bold m-0">Highlights</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card border-0 text-center p-4">
                            <span class="borderbox align-self-center"><i class="fa fa-inr text-warning" aria-hidden="true"></i></span>
                            <h6 class="m-0 pt-2 text-muted">Coupon</h6>
                            <h5 class="font-weight-bold text-muted">Flat ₹600</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card border-0 text-center p-4">
                            <span class="borderbox align-self-center"><i class="fa fa-money text-warning" aria-hidden="true"></i></span>
                            <h6 class="m-0 pt-2 text-muted">Coupon</h6>
                            <h5 class="font-weight-bold text-muted">Flat ₹600</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card border-0 text-center p-4">
                            <span class="borderbox align-self-center"><i class="fa fa-inr text-warning" aria-hidden="true"></i></span>
                            <h6 class="m-0 pt-2 text-muted">Coupon</h6>
                            <h5 class="font-weight-bold text-muted">Flat ₹600</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card border-0 text-center p-4">
                            <span class="borderbox align-self-center"><i class="fa fa-inr text-warning" aria-hidden="true"></i></span>
                            <h6 class="m-0 pt-2 text-muted">Coupon</h6>
                            <h5 class="font-weight-bold text-muted">Flat ₹600</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-5">
            <div class="card-header bg-info p-3">
                <h4 class="font-weight-bold m-0">About The Offer</h4>
            </div>
            <div class="card-body p-4 text-muted">
               <ul class="h5">
                   <li>Book your flight via Paytm wallet & get flat ₹600 off.</li>
                   <li>This offers is valid on a minimum booking value of ₹4000, exclusive of the convenience fee, MTT money & any other ancillary fee.</li>
               </ul>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btnsofers">SEARCH FLIGHTS</button>
        </div>

        <div class="card shadow mt-5 mb-5">
            <div class="card-header bg-info p-3">
                <h4 class="font-weight-bold m-0">How to avail the offer</h4>
            </div>
            <div class="card-body p-4 text-muted">
               <ol class="h5">
                   <li>Book your flight via Paytm wallet & get flat ₹600 off.</li>
                   <li>This offers is valid on a minimum booking value of ₹4000, exclusive of the convenience fee, MTT money & any other ancillary fee.</li>
               </ol>
            </div>
        </div>

        <div class="card shadow mb-5">
            <div class="card-header bg-info p-3">
                <h4 class="font-weight-bold m-0">Terms & Conditions</h4>
            </div>
            <div class="card-body p-4 text-muted">
               <ul class="h5">
                   <li>Book your flight via Paytm wallet & get flat ₹600 off.</li>
                   <li>This offers is valid on a minimum booking value of ₹4000, exclusive of the convenience fee, MTT money & any other ancillary fee.</li>
               </ul>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btnsofers">SEARCH FLIGHTS</button>
        </div>
    </div>


    <x-frontend.sections.mobile-view-pages />

    <!-- Desktop End  -->
    <div class="dpnr">
        <x-footer />
    </div>
@endsection

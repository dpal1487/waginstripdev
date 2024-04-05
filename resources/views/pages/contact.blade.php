@extends('layouts.master')
@section('title','XYZ')
@section("body")
<!-- Desktop View Section  -->
<div class="container mobileVes1 mt256 hotel_offerssect mb-5" style="margin-top:100px;">
    <div class="row">
        <div class="col-sm-4 p-3">
            <div class="card rounded cardHeights shadow pb-3">
                <img class="rounded mx-auto d-block mt-3" width="60px" src="assets/images/contact/support.png"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="text-center font-weight-bold">Call Us</h5>
                    <h6 class="text-center font-weight-bold m-0 pt-2">+91 8069224444 <br> 011-36000100/01/02</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 p-3">
            <div class="card rounded cardHeights shadow pb-3">
                <img class="rounded mx-auto d-block mt-3" width="60px" src="assets/images/contact/email.png"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="text-center font-weight-bold">Email Us</h5>
                    <h6 class="text-center font-weight-bold m-0 pt-2">customersupport@xyz.com</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 p-3">
            <div class="card rounded cardHeights shadow pb-3">
                <img class="rounded mx-auto d-block mt-3" width="60px" src="assets/images/contact/address.png"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="text-center font-weight-bold">Address</h5>
                    <h6 class="text-center font-weight-bold m-0 pt-2">
                        5B/17, Tilak Nagar, Near Subhash Nagar Metro Station,
                        Delhi-110018 (INDIA)
                    </h6>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card p-3 rounded">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14007.878186701844!2d77.1218021!3d28.6306748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bb76b9e38af0980!2sMake%20True%20Trip%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1651041722657!5m2!1sen!2sin"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-sm-4 mnarr20">
            <h5 class="font-weight-bold m-0 pt-5">Assistance</h5>
            <br>
            <img class="rounded mx-auto d-block mt-3" width="40px" src="assets/images/contact/email.png">
            <p class="m-0 small text-center pt-3">customersupport@xyz.com</p>
            {{-- <p class="m-0 small text-center text-muted">(Booking Status or Changes)</p>
            <p class="m-0 small text-center pt-3">marketing@xyz.com</p>
            <p class="m-0 small text-center text-muted">(Association and Partnership)</p>
            <p class="m-0 small text-center pt-3">holiday@xyz.com</p>
            <p class="m-0 small text-center text-muted">(Holidays Enquery)</p> --}}
        </div>
    </div>
</div>

<x-frontend.sections.mobile-view-pages />

<!-- Desktop End  -->
<div class="dpnr">
    <x-footer />
</div>
@endsection

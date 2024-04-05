@extends('layouts.master')
@section('title','XYZ')
@section("body")
<!-- DESKTOP VIEW START  -->

<div class="container mobileVes1 mt256 hotel_offerssect mb-5" style="margin-top:100px;">
    <h3 class="text-center m-0 pt-3">Welcome to Our</h3>
    <h1 class="text-center m-0 font-weight-bold">Customer Support</h1>
    <div class="grid-container mt-4">
        <div class="item1">
            <h1 class="text-center mx-auto d-block"><i class="fa fa-plane" aria-hidden="true"></i></h1>
            <h4 class="text-center">Flights</h4>
        </div>
        <div class="item2">
            <h1 class="text-center mx-auto d-block"><i class="fa fa-bed" aria-hidden="true"></i></h1>
            <h4 class="text-center">Hotels</h4>
        </div>
        <div class="item3">
            <h1 class="text-center mx-auto d-block"><i class="fa fa-globe" aria-hidden="true"></i></h1>
            <h4 class="text-center">Holidays</h4>
        </div>
        <div class="item4">
            <h1 class="text-center mx-auto d-block"><i class="fa fa-ship" aria-hidden="true"></i></h1>
            <h4 class="text-center">Cruise</h4>
        </div>
        <div class="item5">
            <h1 class="text-center mx-auto d-block"><i class="fa fa-file-text" aria-hidden="true"></i></h1>
            <h4 class="text-center">Visa</h4>
        </div>

    </div>
    <h5 class="m-0 ppsr5 pt-3 pl-2"> Need help with recent bookings?</h5>
    <a href="#form-56" class="btn btn-primary mmtalog mt-3 ml-2">Login</a>

    <div class="according_contain mt-4">
        <div class="col-oneSide">
            <h5 class="text-left m-0 pl-3 pb-3">Welcome to the <strong>XYZ</strong> customer service.</h5>
            <div id="main_sec1">
                <div class="container">
                    <div class="accordion" id="faq">
                        <div class="card">
                            <div class="card-header" id="faqhead1">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    How can I reschedule my flight booking?
                                </a>

                            </div>

                            <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                <div class="card-body">
                                    <h6 class="font-weight-bold m-0">Domestic Booking / International Booking</h6>
                                    <p class="m-0 pl-5 pt-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        Please click on <a href="{{ url('/contact') }}">Contact Us</a> and allow us to help you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqhead2">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                    How to check/claim refund on my booking?
                                </a>
                            </div>

                            <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                <div class="card-body">
                                    <p class="m-0 pl-5 pt-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        Please click on <a href="{{ url('/contact') }}">Contact Us</a> and allow us to help you.</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqhead3">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq3" aria-expanded="true" aria-controls="faq3">
                                    How do I print my e-ticket?
                                </a>
                            </div>

                            <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                <div class="card-body">
                                    <h6 class="font-weight-bold m-0 pb-3">You can print your flight tickets from . <a
                                            href="{{ url('/login') }}">My Account</a> </h6>
                                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        Login to <a href="{{ url('/login') }}">My Account</a>
                                    </p>
                                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        On your Dashborad - click on <strong>Print Ticket</strong>
                                    </p>
                                    <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        Select the booking and print your ticket
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqhead3">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq4" aria-expanded="true" aria-controls="faq4">
                                    How much is the convenience fee for flights?
                                </a>
                            </div>

                            <div id="faq4" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                <div class="card-body">
                                    <p class="m-0 pl-2">
                                        We charge a marginal convenience fee on every transaction, which varies by no.
                                        of passengers traveling and the travel sector.
                                    </p>
                                    <p class="m-0 pl-2">
                                        Please note that the convenience fee is non-refundable.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqhead3">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                    data-target="#faq5" aria-expanded="true" aria-controls="faq5">
                                    How do I cancel a flight reservation?
                                </a>
                            </div>

                            <div id="faq5" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                <div class="card-body">
                                    <p class="m-0 pl-2">
                                        No, as we have mentioned in the terms and conditions, monument ticket can't be
                                        rescheduled or cancelled.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- tab menu -->
    <div id="form-56">
    <div class="container marobirars">
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 pb-5">
                <!--Form with header-->
                <form action="" method="">
                    <div class="card border-0 rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3>FAQ's</h3>
                                <p class="m-0">Write your query here.</p>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="nombre" name="email"
                                        placeholder="Enter your email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-phone-square text-info" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="nombre" name="email"
                                        placeholder="Enter your mobile" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" placeholder="Message"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-upload text-info" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="file" class="form-control" id="nombre" name="email"
                                        placeholder="Enter your mobile" required>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
                <!--Form with header-->


            </div>
        </div>
    </div>
    </div>

</div>

<x-frontend.sections.mobile-view-pages />

<script>
    $(function () {
        var $a = $(".tabs-57 li");
        $a.click(function () {
            $a.removeClass("active");
            $(this).addClass("active");
        });
    });

</script>

<!---- Desktop And View -------->
<div class="borderbotum"></div>
{{-- <x-footer-tag /> --}}
<div class="dpnr">
    <x-footer />
</div>
@endsection

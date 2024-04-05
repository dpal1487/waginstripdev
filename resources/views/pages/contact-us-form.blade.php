@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->
<div class="aboutUs_bannerDnt">
</div>

<div class="customer_supportsec">
    <h1>Customer Support</h1>
    <p>Sign in to contact Customer Service, we're available <span>24x7</span> hours a day</p>
    <hr>
    <div class="row p-3">
        <div class="col-sm-8">
            <h5 class="m-0 pb-3">Welcome to the Customer Support <strong> XYZ (OPC) Private Limited!</strong>
            </h5>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card p-2" style="height:100px;">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="assets/images/call.png" alt=""
                                    style="width:30px; height:30px; margin-top:25px; margin-left:35px;">
                            </div>
                            <div class="col-sm-8">
                                <h6 class="font-weight-bold m-0">Call Us</h6>
                                <p style="font-size:12px;  text-align: left;">For anything urgent, you can call us 24/7
                                    on a local or international phone number.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card p-2" style="height:100px;">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="assets/images/live-chat.png" alt=""
                                    style="width:30px; height:30px; margin-top:25px; margin-left:35px;">
                            </div>
                            <div class="col-sm-8">
                                <h6 class="font-weight-bold m-0">Live Chat</h6>
                                <p style="font-size:12px;  text-align: left;">The fastest way to talk to one of our
                                    Customer Service agents about your bookings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <button class="customer_teams1" style="outline:none;"><a href="#">Login</a></button>
                    <button class="customer_teams2" style="outline:none;">Continue without an account</button>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <h5 class="m-0 font-weight-bold pt-3">Frequently asked questions</h5>
                    <ul class="customer_menus">
                        <li class="custtablinks" onclick="customerPages('flightQue1')" id="defaultOpen">Flight
                        </li>
                        <li class="custtablinks" onclick="customerPages('hotelQue1')">Hotel</li>
                        <li class="custtablinks" onclick="customerPages('holidayQue1')">Holiday</li>
                        <li class="custtablinks" onclick="customerPages('cruiseQue1')">Cruise</li>
                        <li class="custtablinks" onclick="customerPages('visaQue1')">Visa</li>
                    </ul>


                    <div id="flightQue1" class="customer_content">
                        <h5 class="m-0 font-weight-bold">FAQ Flights</h5>
                        <button class="flightQueAccor1">Coronavirus-related support <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Baggage <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Boarding pass and check-in <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Booking a flight <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Changes and cancellation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Confirmation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">My flight booking <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Payment <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Passenger details <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div id="hotelQue1" class="customer_content">
                        <h5 class="m-0 font-weight-bold">FAQ Hotels</h5>
                        <button class="flightQueAccor1">Coronavirus-related support 1 <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Baggage <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Boarding pass and check-in <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Booking a flight <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Changes and cancellation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Confirmation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">My flight booking <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Payment <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Passenger details <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div id="holidayQue1" class="customer_content">
                        <h5 class="m-0 font-weight-bold">FAQ Holidays</h5>
                        <button class="flightQueAccor1">Coronavirus-related support 3 <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Baggage <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Boarding pass and check-in <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Booking a flight <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Changes and cancellation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Confirmation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">My flight booking <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Payment <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Passenger details <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div id="cruiseQue1" class="customer_content">
                        <h5 class="m-0 font-weight-bold">FAQ Cruises</h5>
                        <button class="flightQueAccor1">Coronavirus-related support 4 <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Baggage <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Boarding pass and check-in <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Booking a flight <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Changes and cancellation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Confirmation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">My flight booking <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Payment <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Passenger details <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div id="visaQue1" class="customer_content">
                        <h5 class="m-0 font-weight-bold">FAQ Visa</h5>
                        <button class="flightQueAccor1">Coronavirus-related support 5 <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Baggage <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Boarding pass and check-in <i
                                class="fa fa-angle-down float-right" aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Booking a flight <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Changes and cancellation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Confirmation <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">My flight booking <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Payment <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="flightQueAccor1">Passenger details <i class="fa fa-angle-down float-right"
                                aria-hidden="true"></i></button>
                        <div class="customerPanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <h5 class="font-weight-bold text-center p-3">Head Office</h5>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <img src="assets/images/india-gate.png" alt=""
                            style="width:50px; height:50px; margin-top:25px; margin-left:20px;">
                    </div>
                    <div class="col-sm-9">
                        <h6 class="small"> <strong>Address:</strong> 5B/13, Basement, Tilak Nagar, Delhi-110018 </h6>
                        <h6 class="small">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            +91 01136000100/7669988012
                        </h6>
                        <h6 class="small">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            customersupport@xyz.com</h6>
                        <h6 class="small">
                            <i class="fa fa-globe" aria-hidden="true"></i>

                            www.xyz.com</h6>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <h5 class="font-weight-bold text-center p-3">Head Office</h5>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <img src="assets/images/india-gate.png" alt=""
                            style="width:50px; height:50px; margin-top:25px; margin-left:20px;">
                    </div>
                    <div class="col-sm-9">
                        <h6 class="small"> <strong>Address:</strong> 5B/13, Basement, Tilak Nagar, Delhi-110018 </h6>
                        <h6 class="small">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            +91 01136000100/7669988012
                        </h6>
                        <h6 class="small">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            customersupport@xyz.com</h6>
                        <h6 class="small">
                            <i class="fa fa-globe" aria-hidden="true"></i>

                            www.xyz.com</h6>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <h5 class="font-weight-bold text-center p-3">Head Office</h5>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <img src="assets/images/india-gate.png" alt=""
                            style="width:50px; height:50px; margin-top:25px; margin-left:20px;">
                    </div>
                    <div class="col-sm-9">
                        <h6 class="small"> <strong>Address:</strong> 5B/13, Basement, Tilak Nagar, Delhi-110018 </h6>
                        <h6 class="small">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            +91 01136000100/7669988012
                        </h6>
                        <h6 class="small">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            customersupport@xyz.com</h6>
                        <h6 class="small">
                            <i class="fa fa-globe" aria-hidden="true"></i>

                            www.xyz.com</h6>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <h5 class="font-weight-bold text-center p-3">Head Office</h5>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <img src="assets/images/india-gate.png" alt=""
                            style="width:50px; height:50px; margin-top:25px; margin-left:20px;">
                    </div>
                    <div class="col-sm-9">
                        <h6 class="small"> <strong>Address:</strong> 5B/13, Basement, Tilak Nagar, Delhi-110018 </h6>
                        <h6 class="small">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            +91 01136000100/7669988012
                        </h6>
                        <h6 class="small">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            customersupport@xyz.com</h6>
                        <h6 class="small">
                            <i class="fa fa-globe" aria-hidden="true"></i>

                            www.xyz.com</h6>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <h5 class="font-weight-bold text-center p-3">Head Office</h5>
                <div class="row p-2">
                    <div class="col-sm-3">
                        <img src="assets/images/india-gate.png" alt=""
                            style="width:50px; height:50px; margin-top:25px; margin-left:20px;">
                    </div>
                    <div class="col-sm-9">
                        <h6 class="small"> <strong>Address:</strong> 5B/13, Basement, Tilak Nagar, Delhi-110018 </h6>
                        <h6 class="small">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            +91 01136000100/7669988012
                        </h6>
                        <h6 class="small">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            customersupport@xyz.com</h6>
                        <h6 class="small">
                            <i class="fa fa-globe" aria-hidden="true"></i>

                            www.xyz.com</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function customerPages(customerPage, elmnt) {
        var i, customer_content, custtablinks;
        customer_content = document.getElementsByClassName("customer_content");
        for (i = 0; i < customer_content.length; i++) {
            customer_content[i].style.display = "none";
        }
        custtablinks = document.getElementsByClassName("custtablinks");
        for (i = 0; i < custtablinks.length; i++) {
            custtablinks[i].className = custtablinks[i].className.replace(" active", "");
        }
        document.getElementById(customerPage).style.display = "block";
        elmnt.currentTarget.className += "active";
    }

    document.getElementById("defaultOpen").click();

    var custaccor = document.getElementsByClassName("flightQueAccor1");
    var i;

    for (i = 0; i < custaccor.length; i++) {
        custaccor[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var customerPanel = this.nextElementSibling;
            if (customerPanel.style.display === "block") {
                customerPanel.style.display = "none";
            } else {
                customerPanel.style.display = "block";
            }
        });
    }

</script>

<!-- Desktop End  -->
<x-footer />
@endsection

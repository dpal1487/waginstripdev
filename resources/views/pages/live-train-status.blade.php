@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
    <!-- DESKTOP VIEW START  -->
    <div class="container pnrstatussr mobileVes1 mb-5 p-0" style="margin-top: 120px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0 m-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/trains') }}">Trains of India</a></li>
                <li class="breadcrumb-item active" aria-current="page">PNR Status</li>
            </ol>
        </nav>
        <div class="card border-0 rounded p-3 mt-3">
            <h4 class="m-0 font-weight-bold">Live Train Status</h4>
            <p class="m-0 text-muted">Check PNR Status effortlessly even if you haven’t booked from XYZ</p>
            <div class="card bg-dark p-3 mt-2 rounded">
                <div class="row">
                    <div class="col-sm-6 p-3">
                        <input class="w-100 form-control" type="search" placeholder="Enter your 10 digit pnr number">
                    </div>
                    <div class="col-sm-6 p-3">
                        <button class="btn btn-primary float-right">Check PNR Status</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mobileVes1 p-0 mt-5 mb-5">
        <div class="card border-0 p-3">
            <h5 class="m-0 font-weight-bold">PNR Status</h5>
            <p class="font-weight-normal text-muted">
                PNR is a unique number which is assigned to every train ticket booked, and it tells about the status of
                train tickets. Through the PNR Status, you get to know if your ticket is reserved, has the status of
                Reservation against Cancellation (RAC), or waitlisted. It’s a 10-digits number which gives all the
                information about train and passenger details.
            </p>
            <p class="font-weight-normal text-muted">
                IRCTC, or Indian Railway Catering and Tourism Corporation, is the face of modern tourism in India. Besides
                train ticket bookings, you can enjoy the option of train PNR status checking along with other services such
                as checking seat availability, train schedule, and live train status on IRCTC.
            </p>
            <h5 class="m-0 font-weight-bold">Checking PNR Status</h5>
            <p class="font-weight-normal text-muted">
                PNR status can be checked by putting the PNR number in the check PNR status section. After clicking the
                button, the current status of your train ticket shows up along with other details related to your journey.
                Moreover, you can find your PNR number on the top center in case of an e-ticket or at the topmost left
                corner on a ticket booked with Indian Railway Station.
            </p>
            <h5 class="m-0 font-weight-bold">PNR Status Enquiry Via App</h5>
            <p class="font-weight-normal text-muted">
                XYZ’s mobile app gives you the opportunity to check your PNR status quickly and provides regular updates
                on your PNR status enquiry. In addition to that, you also get information about the status of the
                reservation you made, coach position, and platform number of the train .
            </p>
            <h5 class="m-0 font-weight-bold">Checking PNR Status Via SMS</h5>
            <p class="font-weight-normal text-muted">
                Indian Railways offers two ways for making a PNR enquiry. You can either send a text on ‘139’, a 3-digit
                number given by IRCTC, or you can send a SMS to 5676747 to get PNR train status delivered right into your
                inbox. However, the charge for sending a text on the given numbers is INR 3 per message.
            </p>
            <h5 class="m-0 font-weight-bold">What is PNR?</h5>
            <p class="font-weight-normal text-muted">
                PNR is a 10-digits system-generated numeric code provided by the IRCTC ticket booking system. Every time a
                train ticket is booked, a unique PNR is generated that contains booking details along with other information
                such as the confirmation status, name of the passenger, gender and age of the passenger and much more. With
                the PNR status checking feature, one can stay updated about everything related to train ticket bookings.
            </p>
            <h5 class="m-0 font-weight-bold">What does a PNR number mean?</h5>
            <p class="font-weight-normal text-muted">
                It’s quite simple to understand a PNR number. It can be broken down into two parts as the first three digits
                of the PNR number contains all the information regarding the ticket and the last 7-digits don’t contain any
                useful information, as they are just used to make the PNR number unique. You can find the following
                information via the PNR number:
            </p>
            <ol class="font-weight-normal text-muted">
                <li>Passenger details such as their name, berth they have chosen, age, and their gender.</li>
                <li> Details such as the type of seat selected, berth, reservation quota, number of your train, the date of
                    your journey, destination station, train origin station and the name of the station from where you will
                    board the train.
                </li>
                <li>
                    Type of transaction done, transaction details, and ticket fare.
                </li>
                <li>
                    PNR’s first digit depends on the train’s zone in regards to the starting station of the train.
                </li>
                <li>
                    Zonal Codes - 1 (SCR Secunderabad PRS); 2, 3 (NR, NCR, NWR, NER New Delhi PRS); 4, 5 (SR, SWR, SCR
                    Chennai PRS); 6, 7 (NFR, ECR, ER, ECoR, SER, SECR Calcutta PRS); 8, 9 (CR, WCR, WR Mumbai PRS)
                </li>
            </ol>
            <h5 class="m-0 font-weight-bold">How to enquire about PNR Status?</h5>
            <p class="font-weight-normal text-muted">
                It is extremely easy to check train PNR status. Either visit the XYZ’s app or website and click the
                ‘Check PNR Status’ after entering the PNR number in the search box. You can also check your status by making
                a PNR enquiry in the following ways:
            </p>
            <ol class="font-weight-normal text-muted">
                <li>Visit IRCTC’s official website </li>
                <li>Using the service of sending SMS offered by the Railways. You can send your PNR number at 139 or
                    5676747. </li>
                <li>You can check train PNR status by visiting the Railways enquiry counters physically.</li>
                <li>You can also take a look at the final reservation chart which is put up around three hours before the
                    departure. </li>
                <li>PNR status checking feature has made it so easy for the customers to track all booking details, live
                    train status, PNR train status, cancellation details, and berth details from the comfort of their home.
                </li>
            </ol>
            <p class="font-weight-normal text-muted">The PNR number is valid for upto 9 months.</p>
            <h5 class="m-0 font-weight-bold">What is the probability of getting confirmation status?</h5>
            <p class="font-weight-normal text-muted">
                When you book train tickets, you may get your PNR train status as Waitlist. It means that your ticket is not
                reserved yet. The confirmation of your ticket depends on various factors such as how many train ticket
                bookings are made, the seats reserved for quotas, festive seasons or holidays and the number of
                cancellations being made. That’s why PNR status plays a major role in understanding the status of your
                ticket. You can check PNR status on XYZ by putting in your PNR number.
            </p>
            <h5 class="m-0 font-weight-bold">Types of PNR Status</h5>
            <p class="font-weight-normal text-muted">
                There are different kinds of PNR status you can receive on booking your tickets. Each defines the status of
                your train ticket bookings. Here's what some of the abbreviations stands for:
            </p>
            <ol class="font-weight-normal text-muted">
                <li>CNF - This metric on your PNR status shows whether your ticket is confirmed or not. CAN- It appears for
                    the cancelled tickets.
                </li>
                <li>
                    WL- It means Waiting List.
                </li>
                <li>
                    RAC- It stands for Reservation Against Cancellation.
                </li>
                <li>
                    GNWL- It stands for General Waiting List. It is a type of waitlist quota.
                </li>
                <li>
                    PQWL- It means Pooled Quota Waiting List. The chances of getting confirmation for this status is quite
                    low.
                </li>
                <li>
                    RLWL- It stands for Remote Location Waiting List. It is issued to travelers for an intermediate railway
                    station.
                </li>
                <li>
                    TQWL- It stands for Tatkal Quota Waiting List and is issued for tatkal tickets.
                </li>
                <li>
                    NOSB- It stands for No Seat berth. Under this status, children between the age of 5 to 12 can get on the
                    train but no seat is reserved for them.
                </li>
            </ol>
        </div>
    </div>
    <div class="container mobileVes1 mb-5 p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h6 class="panel-title p-2 m-0">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    What is PNR?
                                </a>
                            </h6>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    PNR stands for Passenger Name Record. It is a 10-digit number that provides information
                                    regarding the details of travel printed on the train ticket for an Indian Railways
                                    train. This number is generated whenever you book a train ticket at Indian Railways
                                    ticket counter or through the ICRTC (Indian Railway Catering and Tourism Corporation)
                                    website. The Centre of Railway Information Systems stores this number after booking your
                                    ticket. PNR is only valid until the journey ends. If you want to check PNR status
                                    online, XYZ conveniently provides you the exact information about your train ticket
                                    booking.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Where can I find PNR?
                                </a>
                            </h6>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    On an Indian railways train ticket, you can find the PNR on the top left hand corner.
                                    PNR is also sent through email and SMS for tickets booked from IRCTC website or from an
                                    online travel website.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How to check PNR status online?
                                </a>
                            </h6>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    You can check PNR Status online via XYZ.com. Follow the steps mentioned below; Go to
                                    XYZ website or download the XYZ app. Click on "Check PNR status" button. Enter
                                    your 10 digit PNR number and search. You will get your booked train ticket current
                                    status along with passengers details.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#headingFour" aria-expanded="false" aria-controls="collapseThree">
                                    What all information is available in PNR status?
                                </a>
                            </h6>
                        </div>
                        <div id="headingFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    PNR status will inform whether train ticket is in Confirmed (CNF), Waitlisted (WL) or
                                    Reservation Against Cancellation Station (RAC) status. It will also inform about the
                                    seating class, seat number, coach number, boarding time of the train and arriving time
                                    for your destination.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#headingFive" aria-expanded="false" aria-controls="collapseThree">
                                    What does PNR status signify?
                                </a>
                            </h6>
                        </div>
                        <div id="headingFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body p-3">
                                <ol class="font-weight-normal small text-muted">
                                    <li>CNF - This metric on your PNR status shows whether your ticket is confirmed or not.
                                        CAN- It appears for
                                        the cancelled tickets.
                                    </li>
                                    <li>
                                        WL- It means Waiting List.
                                    </li>
                                    <li>
                                        RAC- It stands for Reservation Against Cancellation.
                                    </li>
                                    <li>
                                        GNWL- It stands for General Waiting List. It is a type of waitlist quota.
                                    </li>
                                    <li>
                                        PQWL- It means Pooled Quota Waiting List. The chances of getting confirmation for
                                        this status is quite
                                        low.
                                    </li>
                                    <li>
                                        RLWL- It stands for Remote Location Waiting List. It is issued to travelers for an
                                        intermediate railway
                                        station.
                                    </li>
                                    <li>
                                        TQWL- It stands for Tatkal Quota Waiting List and is issued for tatkal tickets.
                                    </li>
                                    <li>
                                        NOSB- It stands for No Seat berth. Under this status, children between the age of 5
                                        to 12 can get on the
                                        train but no seat is reserved for them.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#headingSix" aria-expanded="false" aria-controls="collapseThree">
                                    What is included in a PNR number?
                                </a>
                            </h6>
                        </div>
                        <div id="headingSix" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    The first digit of the starting three digits of a PNR number depends on the station
                                    where the train starts. The two succeeding numbers of the first three digits signify the
                                    ticket booked from a specific PRS centre. If the number starts from 1, it is issued from
                                    the Secunderabad PRS with the code - SCR. If the number starts from 2 or 3, it is issued
                                    from New Delhi PRS with the codes - NR, NCR, NWR, or NER. If the number starts from 4 or
                                    5, it is issued from Chennai PRS with codes - SWR, SCR, or SR. If the number starts from
                                    6 or 7, it is issued from Calcutta PRS with the codes -- NFR, ECR, ER, ECoR, SER, or
                                    SECR. If the number starts from 8 or 9, it is issued from Mumbai PRS with the codes -
                                    CR, WCR, or WR.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#headingSeven" aria-expanded="false" aria-controls="collapseThree">
                                    How to check PNR status via phone?
                                </a>
                            </h6>
                        </div>
                        <div id="headingSeven" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    You can check IRCTC PNR status via SMS: Type "PNR &amp; Your 10 digit PNR
                                    number &amp; and send it to 139 OR via Dial 139 to get the live PNR status.
                                    Please note that carrier charges might apply for SMS and call.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#headingEights" aria-expanded="false" aria-controls="collapseThree">
                                    How does a Waitlisted ticket gets Confirmed?
                                </a>
                            </h6>
                        </div>
                        <div id="headingEights" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    If you are on the Waiting List then the chances of you getting a confirmed seat are if
                                    other passengers cancel their tickets.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#headingNine" aria-expanded="false" aria-controls="collapseThree">
                                    Whats is PNR Confirmation Prediction?
                                </a>
                            </h6>
                        </div>
                        <div id="headingNine" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    XYZ helps you with confirmation probability of Waitlisted tickets. It computes
                                    confirmation probability using Machine Learning algorithms which uses factors like
                                    cancellation trends, quota, seasonality, etc.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h6 class="panel-title p-2 m-0">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#headingTen" aria-expanded="false" aria-controls="collapseThree">
                                    Where is the PNR number printed on a train ticket?
                                </a>
                            </h6>
                        </div>
                        <div id="headingTen" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body p-3">
                                <p class="font-weight-normal small text-muted">
                                    If the train ticket is bought at any railway station, the PNR number will be printed on
                                    the top left corner of the ticket. In case the ticket is bought online, the PNR number
                                    will be displayed separately on the top of the ticket.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Desktop End View -->
    <x-frontend.sections.mobile-view-pages />
    <div class="dpnr">
        <x-footer />
    </div>
@endsection

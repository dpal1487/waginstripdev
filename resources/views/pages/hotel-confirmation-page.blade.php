<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-tickets</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/date.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hover-min.css') }}">
    <style>
        .thead-color {
            background-color: #0065a5 !important;
            color: #FFF;
        }

    </style>

</head>

<body style="background-color:#fff !important;">
    <div class="container p-0">
        <div class="card-body">
            <a class="btn float-left btn-sm" href="{{ url('user/booking') }}">
                <i class="fa fa-arrow-circle-left" aria-hidden="true">&nbsp; Back</i>
            </a>
            <a class="btn float-right btn-sm" href="#">
                <i class="fa fa-print" aria-hidden="true">&nbsp; Print</i>
            </a>
        </div>
        <br>
        <h5 class="text-right font-weight-bold">Toll Free No.- +91 7669988012</h5>
        <div class="d-flex bd-highlight mt-2 mb-3" style="border-bottom:1px solid #0065a5;">
            <div class="p-2 bd-highlight">
                <img class="ticketlogo" src="assets/images/logo.png" alt="">
            </div>
            <div class="ml-auto p-2 bd-highlight">
                <p class="h3 text-success"><i class="fa fa-check-circle"></i>
                    Your Booking is confirmed.
                </p>
                <p> <small><strong>Booking Date:- </strong> | <strong>Booking
                            Time:- </strong> </small></p>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="font-weight-bold m-0">Hotel Confirmation Details</h4>
                    <h5 class="m-0">XYZ Booking ID: <strong>MTTHOTEL1255255</strong></h5>
                    <p>Booking Date: <strong> Fri. 19 Jan 2022</strong></p>
                </div>
                <div class="col-md-6">
                    <div class="card-body p-2 rounded-lg" style="background-color:#e74c3c;">
                        <h4 class="font-weight-bold m-0 text-white">FLAT 30% OFF On Hotels</h4>
                        <h6 class="m-0 text-white">Use your flight booking ID as e-coupon code before payment <a
                                href="#" class="font-weight-bold">Book Now</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body boxunder">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <p class="m-0 p-2"><i class="fa fa-check-circle text-success" aria-hidden="true"
                                    style="font-size:30px;"></i> &nbsp;
                                Thank you using XYZ.com to book your hotel accommodation. For your reference,
                                your XYZ Booking ID is <strong>MTTHOTEL355115.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-2 mt-3 text-white bg-info">
            <h5 class="m-0 text-center font-weight-bold">THIS IS YOUR HOTEL CONFIRMATION DETAILS</h5>
            <h5 class="m-0 text-center font-weight-bold">A PRINTED COPY OF THIS MUST BE PRESENTED AT THE HOTEL AT THE
                TIME OF CHECK-IN </h5>
        </div>
        <h4 class="m-0 pt-4 font-weight-bold">Hotel Details</h4>
        <div class="card p-3 mt-2">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="m-0 font-weight-bold">JW Marriott Hotel New Delhi Aerocity</h4>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <h6 class="m-0 pt-2">
                        Asset Area 4 - Hospitality District, <br> Delhi
                        Aerocity New Delhi-110037
                    </h6>
                    <h6 class="m-0 pt-2">
                        +91-11-45212121
                    </h6>
                    <h4 class="m-0 mt-2">Guest Name: Deepak Khanna</h4>
                    <h6 class="m-0">
                        Sun, Apr 03, 2022 - Mon, Apr 04, 2022
                    </h6>
                    <h6 class="m-0 font-weight-bold">
                        1 Room 2 Adults
                    </h6>
                    <h5 class="m-0 pt-2 font-weight-bold">
                        Confirmation Number: 89140655
                    </h5>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/images/hotel/jw-marriott-hotel-mumbai.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <h5 class="text-left">Check-In: Sunday, April 3, 2022</h5>
                    <h5 class="text-left">Check-Out: Monday, April 4, 2022</h5>
                </div>
                <div class="col-sm-6">
                    <h5 class="">03:00 PM</h5>
                    <h5 class="">12:00 PM</h5>
                </div>
            </div>
        </div>
        <h4 class="m-0 pt-4 font-weight-bold">Room Type and Amenities</h4>
        <div class="card p-3 mt-2">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="m-0 font-weight-bold">Guest Room, 1 King, City View</h4>
                    <h5 class="m-0 pt-3"><i class="fa fa-coffee" aria-hidden="true"></i> Breakfast</h5>
                    <h5 class="m-0 pt-3"><i class="fa fa-user-plus" aria-hidden="true"></i> Adult-2</h5>
                    <h6 class="m-0 pt-5">
                        Cushions, TV, Telephone, Bathroom, Dustbins, Safe, Smoke Alarm, Hangers, Blanket, Pillows,
                        Towels, Shower, Wifi, Toiletries, Room service, Closet, Hairdryer, Iron/Ironing Board,
                        Sanitizers,
                        Work Desk, In Room dining, Mini Fridge, Air Conditioning, Alarm Clock, Bathtub, Mini Bar.
                    </h6>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/images/hotel/jwroom1.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 p-3">
                <div class="card">
                    <img src="assets/images/offers/hotel1.png" alt="">
                </div>
            </div>
            <div class="col-sm-6 p-3">
                <div class="card">
                    <img src="assets/images/offers/HOTEL2.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 p-3">
                <div class="card">
                    <img src="assets/images/offers/top-1620027189.jpg" alt="">
                </div>
            </div>
        </div>


    </div>
</body>

</html>

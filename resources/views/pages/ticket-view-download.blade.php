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
        {{-- <h5 class="text-right font-weight-bold">Toll Free No.- +91 7669988012</h5> --}}
        <div class="d-flex bd-highlight mt-2 mb-3" style="border-bottom:1px solid #0065a5;">
            <div class="p-2 bd-highlight">
                <img class="ticketlogo" src="assets/images/logo.png" alt="">
            </div>
            <div class="ml-auto p-2 bd-highlight">
                <p class="h3 text-success"><i class="fa fa-check-circle"></i>Booking Confirmed
                </p>
                <p> <small><strong>Booking Date:- Sun 14 Aug 2022 </strong> | <strong>Booking
                            Time:- 22:45 </strong> </small></p>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="font-weight-bold m-0">E-Ticket</h4>
                    <h5 class="m-0">Your booking reference is: <strong>EQLEXZ</strong></h5>
                    {{-- <p>Booking Date: <strong> Fri. 19 Jan 2022</strong></p> --}}
                </div>
                {{-- <div class="col-md-6">
                    <div class="card-body p-2 rounded-lg" style="background-color:#e74c3c;">
                        <h4 class="font-weight-bold m-0 text-white">FLAT 30% OFF On Domestic Flights</h4>
                        <h6 class="m-0 text-white">Use your flight booking ID as e-coupon code before payment <a
                                href="#" class="font-weight-bold">Book Now</a></h6>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="card-body mt-5 mb-5 boxunder">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <p><i class="fa fa-check-circle text-success" aria-hidden="true"
                                    style="font-size:30px;"></i> Your Flight Ticket for <strong>DEL</strong> to
                                <strong>AUH</strong> is
                                <strong>confirmed</strong> and your e-ticket has been mailed to you. Please carry a
                                printout
                                of your e-ticket along with a valid government issued photo ID to the airline check-in
                                counter.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="font-weight-bold">Itinerary and Reservation Details</h4>
        <div class="card p-2 mb-3 d-flex-row">
            <table class="table">
                <thead class="thead-color text-center">
                    <tr>
                        <th scope="col">Flight</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Arrivel</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="border-right text-center" scope="row">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3CAMAAAAO5y+4AAAAeFBMVEX////YoQDWmwDXngD///3fs0/58uHWmQD+/vr16tT58+f37t/y4bjpzZTgtU/9+u7esEPZpBz58Nv16cjcrSzesVbbqTPTlADoyIvnx4Dz5MHu2a3drUj9+vLhuWvapRTnxXXesDvjvGbz5Mjr0p/jvF7jv3bu2LLQHKSuAAAEzklEQVRoge2YC3OjKhSAQQg+4gNJYgzWRaOm//8f3nNQ89gmaXZS587O8s20RRQ+QThACXE4HA6Hw+FwOBwOh8Ph+OfghASXNFxxPiaDx2V+hqr77U0S/B1q0iyqrrxwFpIu45qQXQ99YDZEpmI57Zqx2UuEL5t9THZMkON+Q1KvIXwxcX9uLwmaqltFZHciRKG3yH7YG5NLhZd+HjNDsisJyaz3pz+wTPhdL9D9WtCb5vU5jd7pJeBlNF3Su0qTkVKN7d3Md2K2pLf1PM9HvN3o3dNWmhx8xCzp5QG3kHzyli1AvWRh75kCvevpoqZy9EpOqr1ewNuXyCEYvadyYmuSBMZV7w+xnwZLjGfGKKV7br2YPMPAC1kshSH+894I6fcRh+9bRzPrrcELmMMsP9qnflg7ovdb6R2vc05ehn9Crw/YaREnwvtVe7ppEhc2gNRp2nvd/UI/oH0c8oN0v5h2Et+XB92CC+CC/E8vDVpRNcOwAqTWcnWLjCErFUrCzamESFeyGouK/rzFKz8uhYbDp/i2QVFjxvjv+0cxJSBMTHkDyQxrg2BLvXkhxIiibDLbQrSesissxCweVnB8NrHhZTvD2FGvkSroQ5tYN9TrpiyS5VQGfEvZuVRKqbI7PCUp66eG1SLUOhTIOqwGxsyTcQc9ZSiNv+QfqK/m9B0vQy8JmVQtZdVcfUKpPj8TQzx9vNPkYKCJii9oW8t9rx5XhmRr26vgW6gMxPEkTijTczdyvDo89JJAUrOZPy8SPm6vgi0A4lP0RqDthNIGbfzWiwgKxR56s4LmyQUZj+Pznpceq5EY2qiinPrdYW+H4LS5vvZyLFbUX4Xz7RWlm6/533xf/wBaL9bjomygv8nYs1deTenqYXNhz+DdvNYUkJ975a8IplU1XypG7by66ec6v3rinvnkU1Otr76Eqvk33jJrGc6fmc6jRlnv1HWBqKATTk9WFVzpjAdtljMFnvDAe54EX711y2hyWaugTxnbCpxHxQfU8FEU1PNM/10AjvpB5udNzKrGinFaTmwozSNxHj24Ahoz3FbaUNqK41yFyeXQv7QPCSIxgx87UEJEc2MyIVRdX3IgMsFG57YPoZzKzlWI6KU9F7+tg/9285Ua7uT8lWvzDfdatUD9/Lpezi8/453p9uN90J97u3FYrO2+baM3dg0PYW5qSAkbG4KNHX+YEWl8vPuMH0bFF1H+uDCWEn/DLPJK8PZwchgg8p1abHTo28VAwmlhtYJUwrasedN78NPR+2G9B1JSmEICDn8DFYGp0GufQX3cYXAm5kTqO3H+dXAhacZgNXlLOGfjNU3q3IujPabrbQN50OCmaA9YqC30uweWeFtvk4vXDFoO9nL3uWqOlcF0VWQFHsBJZPLx2CLZnW3LH5HKpDBX3iIf/1W0MW0fsta+kpRlYewwTvGdcJSLtn1Lq6hOSl+TSz8LardQnDFR5wwHuWLwjKcvXtLXQZq+5W0KcBQSd8QFXsOhr8eTEGxfYd9ypNi2Exz2SWuHu0ytt9jvWfi03u+oA+y3GiNDYP8RC9cBTk3OcZ7avNpGi9r+R3ZaApR6UuerTAFpOgqMYYpz/vWUdrNqvBe2+G9/H9f39684DofD4XA4HA6Hw+FwON7kPzauTrgr7V48AAAAAElFTkSuQmCC"
                                style="width:60px;" alt="">
                            <h6 class="small m-0">Etihad Airways</h6>
                            <p class="small font-weight-bold m-0">EY 211</p>
                        </th>
                        <td class="border-right text-center">
                            <h5 class="m-0 pt-4">New Delhi (DEL)</h5>
                            {{-- <h6 class="small m-0">Terminal 1</h6> --}}
                            <h6 class="small m-0">Tue, 16 Aug 2022 <strong>04:45 Hrs</strong></h6>
                            <p class="small m-0">Indira Gandhi Airport, New Delhi, India</p>
                        </td>
                        <td class="border-right text-center">
                            <h5 class="m-0 pt-4">Abu Dhabi (AUH)</h5>
                            {{-- <h6 class="small m-0">Terminal 1</h6> --}}
                            <h6 class="small m-0">Tue, 16 Aug 2022 <strong>07:00 Hrs</strong></h6>
                            <p class="small m-0">Abu Dhabi Airport, Abu Dhabi, United Arab Emirates</p>
                        </td>
                        <td class=" text-center">
                            <h6 class="small m-0 pt-4">Business</h6>
                            <h6 class="small m-0">Non-Stop Flight</h6>
                            <h6 class="small m-0">Duration: <strong>3hr 45m</strong></h6>
                            {{-- <h6 class="small m-0">Refundable </h6> --}}
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <h4 class="font-weight-bold">Passenger Details</h4>
        <div class="card p-2 mb-3">
            <table class="table">
                <thead class="thead-color text-center">
                    <tr>
                        <th scope="col">
                            Passenger Name
                        </th>
                        <th scope="col">
                            Airline PNR
                        </th>
                        <th scope="col">
                            E-Ticket No.
                        </th>
                        <th scope="col">
                            Seat
                        </th>
                        <th scope="col">
                            Food
                        </th>
                        <th scope="col">
                            Insurance
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="" scope="row">
                            Mr. Raghav Satija
                        </th>
                        <td class=" text-center">
                            EQLEXZ
                        </td>
                        <td class="text-center">
                            {{-- S5564 --}}
                        </td>
                        <td class=" text-center">
                            {{-- B5 --}}
                        </td>
                        <td class=" text-center">
                            {{-- Non-Veg --}}
                        </td>
                        <td class=" text-center">
                            {{-- Yes --}}
                        </td>
                    </tr>
                    <tr>
                        <th class="" scope="row">
                            Ms. Maithily Kashyap
                        </th>
                        <td class=" text-center">
                            EQLEXZ
                        </td>
                        <td class="text-center">
                            {{-- S5564 --}}
                        </td>
                        <td class=" text-center">
                            {{-- B5 --}}
                        </td>
                        <td class=" text-center">
                            {{-- Non-Veg --}}
                        </td>
                        <td class=" text-center">
                            {{-- Yes --}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-sm-6 p-3">
                <div class="card">
                    <img src="assets/images/offers/img-1540472874.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-6 p-3">
                <div class="card">
                    <img src="assets/images/offers/img-1574918641.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 p-3">
                <div class="card">
                    <img src="assets/images/offers/top-1620027189.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-6 p-3">
                <div class="card">
                    <img src="assets/images/offers/top-1602673275.jpg" alt="">
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

        <div class="card border-dotted mb-3 p-3">
            <h6 class="m-0 font-weight-bold">Baggage Details:</h6>
            <p class="m-0 small">1 Piece of up to 7 kg. <span>(Hand Baggage)</span> </p>
            <p class="m-0 small"> 1 Piece of up to 15 kg. <span class="font-weight-bold">(Check-in Baggage)</span>
                additional 10 kg for student booking.</p>
        </div>

        <!-- Add on please -->

        <!-- Contact Information Starts -->
        <div class="card-body p-0">
            <div class="row">
                <div class="col-md-6">
                    <table class="table border">
                        <thead class="thead-color">
                            <tr>
                                <th colspan="2">Contact Details:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="line-height:10px;">
                                <td>Customer Name:-</td>
                                <td>Pintar Sharma</td>
                            </tr>
                            <tr style="line-height:10px;">
                                <td>Address:-</td>
                                <td>
                                    5B/13 Tilak Nagar, New Delhi-110092
                                </td>
                            </tr>
                            <tr style="line-height:10px;">
                                <td>Mobile:-</td>
                                <td>
                                    +91 7669988012
                                </td>
                            </tr>
                            <tr style="line-height:10px;">
                                <td>Email:-</td>
                                <td>
                                    customersupport@xyz.com
                                </td>
                            </tr>
                            <tr style="line-height:10px;">
                                <td>GSTN/UIN:-</td>
                                <td>
                                    07AA0CM4506G1ZF
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table border">
                        <thead class="thead-color">
                            <tr>
                                <th colspan="2">Fare Details:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="line-height:10px;">
                                <td>Airfare Charges:-</td>
                                <td class="text-right">5370.00 INR</td>
                            </tr>
                            <tr style="line-height:10px;">
                                <td>Seat Amount:-</td>
                                <td class="text-right">500.00 INR</td>
                            </tr>
                            <tr style="line-height:10px;">
                                <td>1 Insurance:-</td>
                                <td class="text-right">10.00 INR</td>
                            </tr>
                            <tr style="line-height:10px;">
                                <td>1 Non-Veg Sandwich:-</td>
                                <td class="text-right">100.00 INR</td>
                            </tr>
                            <tr style="line-height:10px;">
                                <td>Tax Fee:-</td>
                                <td class="text-right">90.00 INR</td>
                            </tr>
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Total</th>
                                    <th class="text-right" scope="col">7,298.00 INR</th>
                                </tr>
                            </thead>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Contact Information End -->

        <div class="card-body p-0">
            <div class="card-header rounded-0 thead-color">
                <h6 class="m-0 font-weight-bold pt-1 pb-1">Note</h6>
            </div>
            <ol class="mt-3 small">
                <li>
                    Passengers are requested to report at least 03 hours prior to flight departure and counters will
                    close 60 minutes prior to departure.
                </li>
                <li>
                    Online check-in has been made compulsory for all passengers by Ministry of Civil Aviation.
                </li>
                <li>
                    As per government directives, all passengers have to carry a valid photo identification with them
                    throughout the journey to be checked at
                    any point
                </li>
                <li>
                    Passenger will have to present their Web or Mobile Boarding pass and download the Aarogya Setu App
                    for entry into the airport terminal
                </li>
                <li>
                    Online check-in commences from 72 hours till 01 hour prior departure for Domestic travel and 48
                    hours till 02 hours prior before departure
                    for International travel.
                </li>
                <li>
                    Only 1 piece of check-in baggage is permitted upto 15 kgs per passenger and 1 piece of hand baggage
                    upto 07 kgs per passenger.
                </li>
                <li>
                    <a href="#">Click here</a> to refer to State wise guidelines for the travellers.
                </li>
                <li>
                    Combat Covid - 19 pandemic.Protect yourself and others by taking these precautions:
                    <ul>
                        <li>
                            Cover nose and mouth with mask
                        </li>
                        <li>
                            Follow Social Distancing
                        </li>
                        <li>
                            Wash Hands frequently and use hand sanitizers
                        </li>
                    </ul>
                </li>
                <li>
                    Passengers arriving into Port Blair are required to show a valid negative RT PCR test report issued
                    by an ICMR recognized laboratory.
                    <a href="#">Click here</a> for more information.
                </li>

            </ol>
        </div>

        <div class="card-body p-0 mt-5">
            <div class="card-header rounded-0 thead-color">
                <h6 class="m-0 font-weight-bold pt-1 pb-1">
                    Guidelines for Domestic travel by Ministry of Health and Family welfare
                </h6>
            </div>
            <h6 class="p-3">Passengers must follow required health protocols, as detailed below, during their travel
            </h6>
            <ol class="mt-1 small">
                <li>
                    Passengers should self-monitor their health and travel only when they have no symptoms related to
                    COVID-19.
                </li>
                <li>
                    All passengers shall follow COVID appropriate behaviour at all times which includes use of mask/face
                    cover, hand hygiene and physical
                    distancing of six feet as far as feasible. Masks/face covers must be worn properly to cover nose and
                    mouth. Touching the front portion of
                    mask/face covers to be avoided.
                </li>
                <li>
                    Avoid spitting in public places during travel.
                </li>
                <li>
                    All passengers shall be advised to download Arogya Setu app on their mobile devices.
                </li>
                <li>
                    If they develop fever during travel, they shall report to cabin crew.
                </li>
                <li>
                    Passengers should follow hand hygiene and respiratory hygiene (such as covering the mouth with elbow
                    while coughing) at all times.
                </li>

                <li>
                    If they develop symptoms after reaching their final destination, they shall inform the District
                    Surveillance Officer or the State/National Call
                    Center (1075).

            </ol>
        </div>
        <div class="card border-0">
            <img src="assets/images/mask.png" alt="">
        </div>

        <!-- Add on End -->

    </div>




</body>

</html>

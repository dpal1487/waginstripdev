@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
    <!-- DESKTOP VIEW START  -->
    <section class="bgcolor pt-6p pb-20">
        <div class="container p-0">
            <div class="card br-18">
                <form id="main-form" action="{{ route('search-flight-results') }}" method="get">
                    <div class="card-body ">
                        <div class="radiobox">
                            <span class="radio-toolbar">
                                <input type="radio" name="trip-type" class="trip-type" id="oneway-btn" value="oneway">
                                <label for="oneway-btn" id="oneway"> <i class="fa fa-train"></i> Book train Tickets
                                </label>
                            </span>
                            {{-- <span class="radio-toolbar">
                                <input type="radio" name="trip-type" class="trip-type" id="roundtrip-btn"
                                    value="roundtrip" checked="checked">
                                <label for="roundtrip-btn" id="round"> <i class="fa fa-check-circle"></i> Check PNR Status
                                </label>
                            </span>
                            <span class="radio-toolbar">
                                <input type="radio" id="optradio" class="trip-type" name="trip-type" value="multicity">
                                <label for="optradio" id="multic"> <i class="fa fa-circle-o"></i> Live Train Status </label>
                            </span> --}}
                        </div>
                        <div class="d-flex pt-10">
                            <div class="card wd-25 w-100 m-2">
                                <div class="card-body hoverbg">
                                    <div class="searchtitle">FROM</div>
                                    <select class="js-example-basic-single getLocation" name="departure"
                                        id="select2_departure" data-next="#select2_arrival">
                                        <option value="DEL">Delhi (DEL)</option>
                                    </select>
                                    <div class="slitxt">Indra Gandhi international Airport</div>
                                </div>
                            </div>
                            <div class="card wd-25  w-100 m-2 hoverbg">
                                <div class="card-body ">
                                    <div class="searchtitle">TO</div>
                                    <select class="js-example-basic-single getLocation" name="arrival" id="select2_arrival">
                                        <option value="BOM">Mumbai (BOM)</option>
                                    </select>
                                    <div class="slitxt">Chhatrapati Shivaji Airport</div>
                                </div>
                                <div class="city-msg mt-2"></div>
                            </div>
                            <div class="card wd-15  w-100 m-2 p-0 hoverbg">
                                <div class="card-body">
                                    <div id="id_startCalendar" class="calendar-widget default-today"
                                        data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                        <div class="input-wrapper">
                                            <div class="searchtitle">DEPARTURE <i class="fa fa-chevron-down"
                                                    aria-hidden="true"></i></div>
                                            <input class="date-field" id="type1-start" type="text"
                                                placeholder="DEPARTURE" name='departDate' readonly>
                                        </div>
                                        <div style="margin-left: -150px;" class="calendar-wrapper">
                                            <div class="dual-calendar">
                                                <div class="calendar">
                                                    <div class="calendar-header">
                                                        <div class="prev-btn">
                                                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="month-text">
                                                            <p>September 2018</p>
                                                        </div>
                                                    </div>
                                                    <div class="calendar-body">
                                                        <div class="date-table">
                                                            <div class="date-table-header">
                                                                <div class="day sunday">S</div>
                                                                <div class="day">M</div>
                                                                <div class="day">T</div>
                                                                <div class="day">W</div>
                                                                <div class="day">T</div>
                                                                <div class="day">F</div>
                                                                <div class="day saturday">S</div>
                                                            </div>
                                                            <div class="date-table-body">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="calendar plus-one">
                                                    <div class="calendar-header">
                                                        <div class="month-text">
                                                            <p>September</p>
                                                        </div>

                                                        <div class="next-btn">
                                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="calendar-body">
                                                        <div class="date-table">
                                                            <div class="date-table-header">
                                                                <div class="day sunday">S</div>
                                                                <div class="day">M</div>
                                                                <div class="day">T</div>
                                                                <div class="day">W</div>
                                                                <div class="day">T</div>
                                                                <div class="day">F</div>
                                                                <div class="day saturday">S</div>
                                                            </div>
                                                            <div class="date-table-body">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card wd-20  w-100 m-2 hoverbg">
                                <div class="card-body cursorp" onclick="togglePopup()">
                                    <div class="searchtitle">CLASS <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </div>
                                    <div class="fnt20" id="total-travller"></div>
                                    <div class="slitxt" id="cabClass"></div>
                                </div>
                                <div class="card content">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <div class="fnt10">CHOOSE TRAVEL CLASS</div>

                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="Y">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">All Class</span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="p"
                                                    checked="checked">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">
                                                    Sleeper Class
                                                </span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="C">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">
                                                    Third AC
                                                </span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="F">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">
                                                    Second AC
                                                </span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="F">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">
                                                    First AC
                                                </span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="F">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">
                                                    Second Seating
                                                </span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="F">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">
                                                    AC Chair Car
                                                </span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="F">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">
                                                    First Class
                                                </span>
                                            </label>
                                            <label class="rdocon">
                                                <input type="radio" name="cabinClass" value="F">
                                                <span class="checkmark-2 btn-outline-secondary bshadow">
                                                    Third AC Economy
                                                </span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="float-left">
                                                <div class="msg-travllers"></div>
                                            </div>
                                            <div class="float-right" style=" opacity: 1 !important;">
                                                <button type="button" id="travller-btn"
                                                    class="btn btn-sm btn-info px-2 custm-btn-responsive"
                                                    onclick="togglePopup()">Apply</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-10 pb-10">
                        <a class="searchbtn searchbtn btn btn-lg" id="main-search-btn">SEARCH
                            <i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="container p-0 mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/trains/offers1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/trains/offers2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/trains/offers3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container p-0 mt-5 mb-5">
        <h4 class="m-0">Train Information Services</h4>
        <div class="row mt-3 mb-3">
            <div class="col-sm-4">
                <a href="{{url('/pnr-status')}}" class="">
                    <div class="card trains-hovers text-dark h5 p-3">
                        <span><i class="fa fa-train" aria-hidden="true"></i> PNR Status
                            <i class="fa fa-angle-right float-right" aria-hidden="true"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{url('/live-train-status')}}" class="">
                    <div class="card trains-hovers text-dark h5 p-3">
                        <span><i class="fa fa-train" aria-hidden="true"></i> Live train status
                            <i class="fa fa-angle-right float-right" aria-hidden="true"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#" class="">
                    <div class="card trains-hovers text-dark h5 p-3">
                        <span><i class="fa fa-train" aria-hidden="true"></i> Live Station
                            <i class="fa fa-angle-right float-right" aria-hidden="true"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>

        <h4 class="m-0">IRCTC Settings</h4>
        <div class="row mt-3 mb-3">
            <div class="col-sm-4">
                <a href="#" class="">
                    <div class="media rounded p-3 bg-white">
                        <img class="align-self-center mr-3" src="assets/images/trains/logo.png"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mt-0">Forgot IRCTC Password</h6>
                            <button class="btn btn-primary btn-sm float-right">Click Here</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#" class="">
                    <div class="media rounded p-3 bg-white">
                        <img class="align-self-center mr-3" src="assets/images/trains/logo.png"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mt-0">Forgot IRCTC ID</h6>
                            <button class="btn btn-primary btn-sm float-right">Click Here</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#" class="">
                    <div class="media rounded p-3 bg-white">
                        <img class="align-self-center mr-3" src="assets/images/trains/logo.png"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mt-0">Create IRCTC ID </h6>
                            <button class="btn btn-primary btn-sm float-right">Click Here</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container flight_sliderOffers mobileVes1 mt-5 mb-5">
        <div class="row btnssreser">
            <div class="col-sm-6">
                <h1 class="float-left font-weight-bold" style="font-size:28px;">
                    Exclusive Offers on Trains Tickets
                </h1>
            </div>
            <div class="col-sm-6">
                <div class="offersButtons_12 mt-0">
                    <span href="#offersectionss15" role="button" data-slide="prev"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></span>
                    <span href="#offersectionss15" role="button" data-slide="next"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div id="offersectionss15" class="carousel slide mt-3 mb-3" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row p-2">
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/trains/bank1.jpg" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/flights/21.png" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/flights/22.png" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/flights/23.png" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/flights/24.png" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/flights/25.png" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-2">
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/flights/26.png" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/flights/27.png" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 p-2">
                            <a href="#">
                                <div class="card">
                                    <img src="assets/images/flights/28.png" style="height:180px;" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid p-0 bg-white">
        <h4 class="m-0 pt-4 text-center">Train Information Services</h4>
        <div class="container p-0 pb-5">
            <p class="small m-0 pt-3">The railway is the most affordable way to travel in India, and as a trustworthy
                travel brand,
                XYZ
                understands the value of your money and desire to travel. To make your train ticket booking more
                convenient, we are pleased to tie up with IRCTC. Customer can book their IRCTC train tickets in the
                most
                convenient way with our website. You just need to visit our website or download our mobile app to
                make
                your train ticket booking with us. </p>
            <p class="small m-0 pt-2">
                Travelling across the country has become easy due to online train ticket booking. You can visit
                almost every city by train at an affordable price. Train ticket booking provides several advantages
                such as low-cost travel, speed, convenience, and a picturesque journey. If you are planning to go to
                your hometown, a beautiful destination for your vacation, workcation, or any other place, the train
                is the best mode of transport for you. At XYZ, you can find multiple trains for your route,
                timings, fares, and seats. Also, if you want to save on your railway ticket, download XYZ and
                get notifications for all the latest offers on train ticket booking. At XYZ, we always come
                up with lots of exciting offers through which you can save money on travel.
            </p>
            <p class="small m-0 pt-2">
                Now, you don’t need to wait for hours standing in queue for ticket booking as XYZ is offering
                you an opportunity for train ticket booking online. It is very easy to book train tickets with
                XYZ. You need to have your IRCTC user Id, and you are good to go. Not only this, you will
                also get to enjoy live station status, live train status, pnr status, 24/7 customer service, IRCTC
                train food booking, Instant cancellation and refunds, when you book train tickets through us. Not
                only this, you also save money by booking through our user-friendly portal. While booking train
                tickets for your route, you can also apply filter to search and book train ticket instantly. You
                will get a complete list of trains for your route from which you can choose as per your preference
                i.e. train type, seat type, category type, quota, etc.
            </p>
            <h6 class="m-0 pt-2 font-weight-bold"> Documents to Carry</h6>
            <p class="small m-0 pt-2">
                When your railway ticket booking is confirmed with XYZ, you need to carry your government
                recognized
                ID on the departure date. Train ticket-checker may come any time and may ask you to show railway booking
                along with your ID. Here is the list of IDs that you can carry while boarding the train:
            </p>
            <p class="small m-0 pt-2">
                Carry any one of them:
            </p>
            <ul class="m-0 pl-3 small">
                <li>Aadhar Card</li>
                <li>Pan Card</li>
                <li>Voter ID</li>
                <li> Passport</li>
                <li>Driving License</li>
                <li>Bank passbook that was your photograph.</li>
                <li>Student ID card with photograph, issued by recognized school/college</li>
            </ul>
            <p class="small m-0 pt-2">
                At XYZ, you can go for train booking online with different types of quotas in Indian railway such
                as
                ladies quota, tatkal booking, general booking, senior citizen booking, etc. So, what are you waiting for? Go
                for it!
            </p>
            <h6 class="m-0 pt-2 font-weight-bold"> How to Book Train Ticket Online </h6>
            <p class="small m-0 pt-1">
                Booking train tickets with XYZ is extremely easy. Follow the below-mentioned steps to make your
                train
                booking with XYZ:
            </p>
            <p class="small m-0 pt-1">
                Step 1: Visit XYZ.com and then click on Trains tab.
            </p>
            <p class="small m-0 pt-1">
                Step 2: Type the name of the departure point in ‘From’ section and destination point in “To” section. Also,
                select the departure date and then click on Search button.
            </p>
            <p class="small m-0 pt-1">
                Step 3: Now, you will see a list of trains according to your search. Choose the train and seat as per your
                preference. Use filter option to select seat type or category.
            </p>
            <p class="small m-0 pt-1">
                Step 4: Click continue button if the departure and destination station are confirmed.
            </p>
            <p class="small m-0 pt-1">
                Step 5: Now, you have to mention all the mandatory details related to your booking. Enter the IRCTC user id,
                select the boarding point, enter contact details and traveller information (the details are to be mentioned
                separately for every passenger/child).
            </p>
            <p class="small m-0 pt-1">
                Step 6: Once all the details are filled on Review &Travellers page, review all the details to avoid any
                issue. Check the Price Summary and if you are okay with everything, go ahead with your payment.
            </p>
            <p class="small m-0 pt-1">
                Step 7: If you have any coupon code, enter the same in the required field and save your money.
            </p>
            <p class="small m-0 pt-1">
                Step 8: Now, make your payment using your preferred option. You can choose from a wide range of options from
                Debit card, Credit card, UPI, net banking, or wallet money.
            </p>
            <p class="small m-0 pt-1">
                Step 9: Once the payment is done, IRCTC authentication page will open, and you are required to fill in your
                IRCTC user ID password after that you will also receive your e-ticket on mobile and email ID.
            </p>
            <p class="small m-0 pt-3">
                This process for booking train tickets online is simpler with XYZ. It is better to book your travel
                online rather than standing in queue for long hours. You just need to have IRCTC user id to book your train
                tickets with us. In case you don’t have IRCTC user id, you can easily create it online on the official site
                or by visiting our website.
            </p>
        </div>
    </div>

    <!-- Desktop End View -->
    <x-frontend.sections.mobile-view-pages />
    <div class=" dpnr">
        <x-footer />
    </div>
@endsection

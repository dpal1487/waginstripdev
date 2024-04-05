<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title> @yield('title') </title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/hotel.css') }}"> -->
    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body style=" background-color: rgb(224,224,224) !important;">

    <div class="container mobileVes1 p-0 mb-5">
        <h3 class="text-center m-0 pt-5 pb-5 font-weight-bold">Booking Form</h3>
        <form action="mailto::developer@256485.xyz">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">First Name*</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name"
                        value="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Middle Name*</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Middle name"
                        value="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Last Name*</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name"
                        value="" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault01">From*</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="From"
                        value="DELHI (DEL)" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault02">To*</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="To"
                        value="MUMBAI (BOM)" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault02">Departure Date*</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Departure date"
                        value="DD/MM/YYYY" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault02">Return Date*</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Return date"
                        value="DD/MM/YYYY" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email*</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Mobile*</label>
                    <input type="mobile" class="form-control" minlength="0" maxlength="12" id="inputEmail4"
                        placeholder="Mobile" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Number of passengers*</label>
                    <input type="mobile" class="form-control" minlength="0" maxlength="12" id="inputEmail4"
                        placeholder="Number of passengers" required>
                </div>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Flights</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Hotels</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Holidays</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Cruise</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Trains</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Visa</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Events</label>
            </div>
            <div class="form-group mt-2">
                <label for="exampleFormControlTextarea1">Massage</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

        <h3 class="text-center m-0 pt-4 pb-4 font-weight-bold">Frequently Asked Questions</h3>
        {{-- <div id="accordion">
            <div class="card mb-2">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            What should be on a booking form?
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body p-4">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn otlines btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            How do I make a booking form?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body p-4">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h5 class="panel-title p-2 m-0">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How can I Book Train Tickets Online?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum
                                        ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo.
                                        Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae.
                                        Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h5 class="panel-title p-2 m-0">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        How can I Book Train Tickets in Tatkal Quota?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum
                                        ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo.
                                        Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae.
                                        Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h5 class="panel-title p-2 m-0">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Can I Change My Train Booking?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum
                                        ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo.
                                        Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae.
                                        Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h5 class="panel-title p-2 m-0">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#headingFour" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How to Order Food in Train?
                                    </a>
                                </h5>
                            </div>
                            <div id="headingFour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum
                                        ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo.
                                        Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae.
                                        Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Wagnistrip | ticket</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/date.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/range.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
</head>

<body style="background: #fff !important">
    <!-- DESKTOP VIEW START  -->
    <div id="deskviewsearch">
         {{-- code by uddeshya  --}}
         @php
        if (isset($resultsellRetriveRepeat['body'])) {
            isset($resultsellRetriveRepeat['body']['PNR_Reply'])?
            $ticketData =  $resultsellRetriveRepeat['body']['PNR_Reply']: $ticktData = $resultsellRetriveRepeat['body']['PNR_Reply'];
        }else {
            header("Location: " . URL::to('/error'), true, 302);
            exit();
        }
        @endphp
        {{-- code end by uddeshya  --}}

        <section class="pt-6p mt-5">
            <div class="container">
                <div class="row pb-20">
                    <div class="col-sm-12 borderfadshow pt-20 pb-20">
                        <h1 class="text-center pt-5" style="font-size: 30px; font-weight: 700; color: #0164a3"> <i
                                class="fa fa-ticket"></i> Confirm Booking </h1>
                        <h6 class="text-center"> Booking Reference No :
                            {{ $ticketData['pnrHeader']['reservationInfo']['reservation']['controlNumber'] }} </h6>
                        
                        <div class="borderbotum"></div>
                        <div class="row pt-10">
                            <div class="col-sm-10">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
                                {{-- <h6 class="fontsizehotel20 pt-20"> {{ $ticketData['originDestinationDetails']['itineraryInfo'][0]['hotelReservationInfo']['hotelPropertyInfo']['hotelName'] }} </h6> --}}
                                <button type="button" class="btn btn-sm btn-outline-secondary bshadow">
                                    {{-- {{ $ticketData['originDestinationDetails']['itineraryInfo'][0]['hotelReservationInfo']['companyIdentification']['companyName'] }} --}}
                                </button>
                                <h5 class="onwfnt-11 pt-10">
                                    {{-- {{dd($postvalue)}} --}}
                                    <i class="fa fa-map-marker"></i> {{ $postvalue->address }}
                                </h5>
                            </div>
                            <div class="col-sm-2 pt-10">
                                <img src="{{ asset('assets/images/hotel/h2.jpg') }}" alt="hotel"
                                    style="width:100%; border-radius: 10px;">
                            </div>
                            <div class="col-sm-12">
                                <p class="formtitlehtl4 pt-20 pb-10"> Dear
                                    {{ $ticketData['travellerInfo']['passengerData']['travellerInformation']['passenger']['firstName'] . ' ' . $ticketData['travellerInfo']['passengerData']['travellerInformation']['traveller']['surname'] }},
                                </p>
                                {{-- {{dd($postvalue)}} --}}
                                <p class="formtitlehtl4"> Thank you for choosing {{ $postvalue->HotelName }}. for
                                    your
                                    stay. We are pleased to inform you that your reservation request is
                                    CONFIRMED {{ $postvalue->address }},
                                    India. </p>


                                <h4 class="fontsizehotel20 pt-10"> Booking Details </h4>
                                <div class="row bg-light p-2">
                                    <div class="col-sm-4">
                                        <span class="onwfnt-11 colorgrey"> CHECK IN </span>
                                        <?php
                                        if(!isset($ticketData['originDestinationDetails']['itineraryInfo'][0]['hotelReservationInfo']['requestedDates'])){
                                            $dates = $ticketData['originDestinationDetails']['itineraryInfo']['hotelReservationInfo']['requestedDates'];
                                        }else{
                                            $dates = $ticketData['originDestinationDetails']['itineraryInfo'][0]['hotelReservationInfo']['requestedDates'];
                                        }
                                        $dateStart = date_create($dates['beginDateTime']['year'] . '-' . $dates['beginDateTime']['month'] . '-' . $dates['beginDateTime']['day']);
                                        $dateEnd = date_create($dates['endDateTime']['year'] . '-' . $dates['endDateTime']['month'] . '-' . $dates['endDateTime']['day']);
                                        $diff = $dateEnd->diff($dateStart);
                                        $dayCount = $diff->format('%a');
                                        if(isset($ticketData['originDestinationDetails']['itineraryInfo'][0]['rateInformations']['ratePrice']['rateAmount'])){
                                            $amountFare = $ticketData['originDestinationDetails']['itineraryInfo'][0]['rateInformations']['ratePrice']['rateAmount'] * $dayCount;
                                        }else{
                                            $amountFare = $ticketData['originDestinationDetails']['itineraryInfo']['rateInformations']['ratePrice']['rateAmount'] * $dayCount;
                                        }
                                        ?>
                                        <div class="fontsizehotel20">
                                            {{ date_format($dateStart, 'd M Y') . ' | ' . date_format($dateStart, 'D') }}
                                        </div>
                                        <span class="onwfnt-11 colorgrey"> Check-in time 3 PM</span>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="nighthotel">{{ $dayCount }} Night</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="onwfnt-11 colorgrey"> CHECK OUT </span>
                                        <div class="fontsizehotel20">
                                            {{ date_format($dateEnd, 'd M Y') . ' | ' . date_format($dateEnd, 'D') }}
                                        </div>
                                        <span class="onwfnt-11 colorgrey"> Check-out time 12 PM </span>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <h6 class="adulttext"> {{ $postvalue->adult }} Adult </h6>
                                        <h6 class="adulttext"> 1 Room </h6>
                                    </div>
                                </div>
                                <div class="row pt-20">
                                    <div class="col-sm-8">
                                        <h6> Room Details </h6>
                                        <h5 class="onwfnt-11 pt-10"> Minimum Room With Bath/Shower King Size Bed </h5>
                                        <span class="hotelrefundtext"> <i class="fa fa-check-circle"></i>
                                            Refundable
                                        </span>
                                        <div class="facilityhoteltitle pt-10 pb-10">
                                            <i class="fa fa-check-circle text-info"></i> Cancellation Are Permitted
                                            Before 30, Nov 2021 11:59 pm
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6> Price </h6>
                                        <span class="facilityhoteltitle"> Base Fare </span>
                                        <span class="float-right"><i class="fa fa-inr"></i>
                                            {{ number_format(round($amountFare)) }}
                                        </span>
                                        <div class="pt-10">
                                            <span class="facilityhoteltitle"> Taxes & Service fees </span>
                                            <span class="float-right"><i class="fa fa-inr"></i>
                                                {{ number_format(round($postvalue->amount - $amountFare)) }}
                                            </span>
                                        </div>
                                        <div class="borderbotum"></div>
                                        <div class="pt-10">
                                            <span class="fontsize-22"> Total Amount</span>
                                            <span class="fontsize-22 float-right"><i class="fa fa-inr"></i>
                                                {{ number_format(round($postvalue->amount)) }} </span>
                                        </div>
                                        <div class="borderbotum"></div>
                                        <h6 class="facilityhoteltitle pt-20">Booked By : </h6>
                                        <h6 class="facilityhoteltitle"> WAGNISTRIP PVT LTD INDIA </h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="container mt-5 mb-5">
        <button onclick="window.print();" class="noPrint">
            <i class="fa fa-print" aria-hidden="true"></i> Print
        </button>
    </div>

    <!-- DESKTOP VIEW END   -->
    <footer class="bg-footer">
        <div class="container">
            <span class="footext">Copyright © 2021 WAGNISTRIP PVT. LTD.</span>
            <span class="footext float-right">
                We Accept |
                <img src="{{ asset('assets/images/payment1.png') }}" class="imgw-30" alt="">
                <img src="{{ asset('assets/images/payment2.png') }}" class="imgw-30" alt="">
                <img src="{{ asset('assets/images/payment3.png') }}" class="imgw-30" alt="">
                <img src="{{ asset('assets/images/payment4.png') }}" class="imgw-30" alt="">
            </span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/date.js') }}"></script>
    <script src="{{ asset('assets/js/responsive.js') }}"></script>
    <script src="{{ asset('assets/js/range.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        function togglePopup() {
            $(".content").toggle();
        }
    </script>
</body>

</html>

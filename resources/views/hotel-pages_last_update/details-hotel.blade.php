@extends('hotel-pages.master')
@section('title', 'room details')
@section('body')
    @php
    use App\Http\Controllers\Hotel\Amadeus\HeaderController;
    is_array($detail['OTA_HotelAvailRS']) ? ($hotelDetails = $detail['OTA_HotelAvailRS']) : ($hotelDetails = [$detail['OTA_HotelAvailRS']]);
    $hotelCode = $hotelDetails['HotelStays']['HotelStay']['BasicPropertyInfo']['@attributes']['HotelCode'];
    $HeaderController = new HeaderController();
    $hotelInfo = $HeaderController->HotelInfo($hotelCode);
    $result = array_merge($hotelInfo, $hotelDetails);
    // dd($hotelInfo);
    $allRoomDetails = isset($result['RoomStays']['RoomStay'][0]) ? $result['RoomStays']['RoomStay'] : [$result['RoomStays']['RoomStay']];
    $date1 = new DateTime($start);
    $date2 = new DateTime($end);
    $diff = $date2->diff($date1);
    $dayCount = $diff->format('%a');
    $roomValue = $allRoomDetails[0];
    $roomrateDesc = is_array($roomValue['RoomRates']['RoomRate']['RoomRateDescription']['Text'] == true) ? $roomValue['RoomRates']['RoomRate']['RoomRateDescription']['Text'] : [$roomValue['RoomRates']['RoomRate']['RoomRateDescription']['Text']];
    $mapLocation = $hotelInfo['HotelInfo']['Position']['@attributes'] ?? '';
    
    @endphp
    {{-- <h1>ssfjh</h1> --}}
    <section>
        <div class="container"> 
            <div class="row">
                <div class="col-sm-12 pt-10">
                    <div class="boxunder hotlist pb-10">
                        <div class="row">
                            @php
                                $hotelImageRoute = $hotelInfo['HotelInfo']['CategoryCodes']['GuestRoomInfo'];
                               
                                $hotelImage = 
                                $hotelImageRoute[5]['MultimediaDescriptions']['MultimediaDescription']['ImageItems']['ImageItem'] ?? 
                                $hotelImageRoute[5]['MultimediaDescriptions']['MultimediaDescription'][1]['ImageItems']['ImageItem'] ?? 
                                $hotelImageRoute[4]['MultimediaDescriptions']['MultimediaDescription'][1]['ImageItems']['ImageItem'] ??
                                $hotelImageRoute[3]['MultimediaDescriptions']['MultimediaDescription'][1]['ImageItems']['ImageItem'] ??
                                $hotelImageRoute[2]['MultimediaDescriptions']['MultimediaDescription'][1]['ImageItems']['ImageItem'] ??
                                $hotelImageRoute[1]['MultimediaDescriptions']['MultimediaDescription'][1]['ImageItems']['ImageItem'] ??
                                $hotelImageRoute[0]['MultimediaDescriptions']['MultimediaDescription'][1]['ImageItems']['ImageItem'] ??
                                $hotelImageRoute['MultimediaDescriptions']['MultimediaDescription'][1]['ImageItems']['ImageItem'] ?? 'noimage';
                                // dd($hotelImage);
                            @endphp
                            <div class="col-sm-6">
                                <div id="demoMain" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @if ($hotelImage == 'noimage')
                                            <div class="carousel-item active">
                                                <img src="{{ asset('assets/images/hotel/h2.jpg') }}"
                                                class="hotelsliderimg">
                                            </div>
                                            @else
                                            @foreach ($hotelImage as $imagekey => $images)
                                                @if ($imagekey == 0)
                                                <div class="carousel-item active">
                                                    <img src="{{ $images['ImageFormat'][0]['URL'] }}"
                                                    class="hotelsliderimg">
                                                </div>
                                                @else
                                                <div class="carousel-item">
                                                    <img src="{{ $images['ImageFormat'][0]['URL'] }}"
                                                    class="hotelsliderimg">
                                                </div>
                                                @endif
                                            @endforeach 
                                        @endif
                                       
                                    </div>
                                    <a class="carousel-control-prev" href="#demoMain" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demoMain"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <img src="{{ asset('assets/images/hotel/h2.jpg') }}" style="width:100%; height:170px;"
                                    class="pt-10">
                                <img src="{{ asset('assets/images/hotel/h2.jpg') }}" style="width:100%; height:170px;"
                                    class="pt-10">
                            </div>
                            <div class="col-sm-4">
                                <div class="hotlist">
                                    <h5 class="fnt-16">
                                        {{ roomTypeCode($roomValue['RoomTypes']['RoomType']['@attributes']['RoomType'] ?? ($roomValue['RoomTypes']['RoomType'][0]['@attributes']['RoomType'] ?? 'null')) }}
                                    </h5>
                                    <div class="onwfnt-11">
                                        <i class="fa fa-group"></i> {{ $adult }} Adult
                                        <span class="float-right marginright-23per"> Per Night </span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            @if (is_array($roomrateDesc[0]))
                                                @foreach ($roomrateDesc[0] as $ame)
                                                    <p class="onwfnt-11 text-info"> <i class="fa fa-check"></i>
                                                        {{ $ame }} 
                                                    </p>
                                                @endforeach
                                            @else
                                                {{ $roomrateDesc[0] }}
                                            @endif
                                        </div>
                                        <div class="col-sm-5 pt-10">
                                            <h4> <i class="fa fa-inr"></i>
                                                <?php
                                                    $Checkbasefare = $roomValue['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['CurrencyCode'] ?? $roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['CurrencyCode'];
                                                 ?>
                                                 @if ($Checkbasefare == "AED")
                                                 {{ number_format(round($roomValue['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountBeforeTax'] ?? ($roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountBeforeTax'] ?? $roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountAfterTax'] ?? '')) * 20) }}
                                                 @else
                                                 {{ number_format(round($roomValue['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountBeforeTax'] ?? ($roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountBeforeTax'] ?? $roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountAfterTax'] ?? ''))) }}
                                                 @endif
                                            </h4>
                                            <span class="onwfnt-11"> + <i class="fa fa-inr"></i>
                                                @if ($Checkbasefare == "AED")
                                                {{ number_format(round(($roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax'] - ($roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountBeforeTax'] ?? $roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax']) ?? '') / $dayCount) * 20)  }}
                                                @else
                                                {{ number_format(round($roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax'] - ($roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountBeforeTax'] ?? $roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax']) ?? '') / $dayCount)  }}
                                                @endif
                                                taxes & fees
                                            </span>
                                            <h4 class="pb-20"></h4>
                                            <a href="#1" class="singlebookbtn"> Book Now </a>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="pt-10"></h6>
                                <div class="hotlist">
                                    <a href="#3">
                                        @if (empty($mapLocation))
                                        @else
                                            <iframe src="https://www.google.com/maps?q={{ $mapLocation['Latitude'] }},{{ $mapLocation['Longitude'] }}&output=embed"
                                                width="100%" height="120" style="border:0;" allowfullscreen=""
                                                loading="fast"></iframe>
                                        @endif
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <h4>
                        {{ $result['HotelStays']['HotelStay']['BasicPropertyInfo']['@attributes']['HotelName'] }},
                        {{ $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['CityName'] . ' | ' . $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['PostalCode'] }}
                    </h4>
                    <div class="onwfnt-11 text-info pb-10">
                        {{ is_array($result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['AddressLine']) == true ? $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['AddressLine'][0] . ',' . $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['AddressLine'][1] : $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['AddressLine'] }},
                        {{ $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['PostalCode'] }}
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary bshadow">
                        {{ $result['HotelStays']['HotelStay']['BasicPropertyInfo']['@attributes']['ChainName'] }}
                    </button>
                    <div class="pt-20"></div>
                    <div class="card">
                        <div class="card-header">
                            <span class="fnt-16">Commitment to Clean</span><br>
                            <p class="onwfnt-11">Commitment to Clean covers every detail within our
                                operating standards to ensure we are looking at safety & security of our guests &
                                associates</p>
                        </div>
                        <div class="card-body">
                            <p class="slitxt text-success lineheight-35"> <i class="fa fa-check-circle"></i> All
                                touch points equipped with a QR code to show safety & quality assurance animated
                                video message. </p>
                            <p class="slitxt text-success lineheight-35"> <i class="fa fa-check-circle"></i> All
                                hotels to designate a Cleanliness Champion to ensure stantization processes are
                                followed. </p>
                            <span class="fnt-16 text-info lineheight-35">View all safety measures</span>
                        </div>
                    </div>
                    <div class="category-list">
                        <a href="#1" class="navlink-cat active-hotel">OVERVIEW</a>
                        <a href="#2" class="navlink-cat">ROOMS</a>
                        <a href="#3" class="navlink-cat">LOCATION</a>
                        <a href="#4" class="navlink-cat">FACILITIES</a>
                        <a href="#5" class="navlink-cat">PROPERTY RULES</a>
                        <a href="#6" class="navlink-cat">USER REVIEWS</a>
                    </div>
                    <h5 class="pt-10"></h5>
                    <section class="page-section" id="1">
                        <h4> About
                            {{ $hotelDetails['HotelStays']['HotelStay']['BasicPropertyInfo']['@attributes']['HotelName'] }}
                        </h4>
                        <div class="pb-10"></div>
                        <span class="onwfnt-11 lineheght-25">
                            <?php
                            $description = $hotelInfo['HotelInfo']['Descriptions']['MultimediaDescriptions']['MultimediaDescription'][0]['TextItems']['TextItem']['Description'] ?? ($hotelInfo['HotelInfo']['Descriptions']['MultimediaDescriptions']['MultimediaDescription']['TextItems']['TextItem']['Description'] ?? ' ');
                            if (is_array($description)) {
                                echo implode(' ', $description);
                            } else {
                                echo $description;
                            }
                            ?>
                        </span>
                    </section>
                    <div class="aminities d-flex justify-content-center pt-20 pb-20">
                        <div class="card text-center p-1" style="width: 150px;">
                            <i class="fa fa-cutlery" style="color:rgb(0 146 239)"></i>
                            <small> Food and Dining </small>
                        </div>
                        <div class="card text-center p-1" style="width: 150px;">
                            <i class="fa fa-map-marker" style="color:rgb(0 146 239)"></i>
                            <small> Location & Surroundings </small>
                        </div>
                        <div class="card text-center p-1" style="width: 150px;"> <i class="fa fa-hotel"
                                style="color:rgb(0 146 239)"></i>
                            <small> Room Details & Amenities </small>
                        </div>
                        <div class="card text-center p-1" style="width: 150px;"> <i class="fa fa-trophy"
                                style="color:rgb(0 146 239)"></i>
                            <small> Activities & Nearby Attrations </small>
                        </div>
                        <div class="card text-center p-1" style="width: 150px;"> <i class="fa fa-paper-plane"
                                style="color:rgb(0 146 239)"></i>
                            <small> How to Reach The Property </small>
                        </div>
                    </div>
                </div>
            </div>
            <section class="page-section" id="2">
                <span class="checkhtlbtn"> <input type="checkbox" class="form-check-input" value=""
                        style="width: 21px; height: 21px;margin-left: -32px;"> Free Cancellation </span>
                <span class="checkhtlbtn"> <input type="checkbox" class="form-check-input" value=""
                        style="width: 21px; height: 21px;margin-left: -32px;"> Breakfast Included </span>
                <div class="pt-10 pb-10"></div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 tabhtlheader">
                                ROOM TYPES
                                <div class="borderbotum"></div>
                            </div>
                            <div class="col-5 col-md-5 col-sm-5 tabhtlheader">
                                OPTION
                                <div class="borderbotum pb-10"></div>
                            </div>
                            <div class="col-2 col-md-2 col-sm-2 tabhtlheader">
                                PRICE / NIGHT
                                <div class="borderbotum  pb-10"></div>
                            </div>
                        </div>
                        @foreach ($allRoomDetails as $key => $roomValue)
                            <div class="row borderbotum">
                                <div class="col-4 col-md-4 col-sm-4 borderrighthotel">
                                    <div id="demo{{ $key }}" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('assets/images/hotel/h1.jfif') }}"
                                                    class="hotelsliderimgroom">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('assets/images/hotel/h2.jpg') }}"
                                                    class="hotelsliderimgroom">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('assets/images/hotel/h3.jpg') }}"
                                                    class="hotelsliderimgroom">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#demo{{ $key }}" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo{{ $key }}"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                    <div class="hotelroomtitle pt-10 pb-10">
                                        {{ roomTypeCode($roomValue['RoomTypes']['RoomType']['@attributes']['RoomType'] ?? ($roomValue['RoomTypes']['RoomType'][0]['@attributes']['RoomType'] ?? 'null')) }}
                                    </div>
                                </div>
                                <div class="col-5 col-md-5 col-sm-5 borderrighthotel">
                                    <div class="onwfnthHotel-12">
                                        <?php
                                        $refuntPolicy = $roomValue['RatePlans']['RatePlan']['CancelPenalties']['@attributes']['CancelPolicyIndicator'] ?? $roomValue['RatePlans']['RatePlan']['CancelPenalties']['CancelPenalty']['@attributes']['PolicyCode'];
                                        ?>
                                        @if ($refuntPolicy == 1)
                                            <span class="hotelrefundtext"> <i class="fa fa-check-circle"></i>
                                                Refundable
                                            </span><br>
                                            <?php
                                            $CheckDate = $roomValue['RatePlans']['RatePlan']['CancelPenalties']['CancelPenalty']['Deadline']['@attributes']['AbsoluteDeadline'] ?? $roomValue['RatePlans']['RatePlan']['CancelPenalties']['CancelPenalty'] == true;
                                            if ($CheckDate == 'true') {
                                            } else {
                                                $date = date_create($CheckDate);
                                                $datFormate = date_format($date, 'd, M Y h:i a');
                                                echo "<div class='facilityhoteltitle pt-10 pb-10'><i class='fa fa-check-circle text-info'></i> Cancellation Are Permitted Before " . $datFormate . '</div>';
                                            }
                                            ?>
                                        @else
                                            <span class="hotelnonrefundtext"> <i class="fa fa-times-circle"></i>
                                                Non-Refundable
                                            </span><br>
                                        @endif
                                        <?php
                                        $roomrateDesc = is_array($roomValue['RoomRates']['RoomRate']['RoomRateDescription']['Text'] == true) ? $roomValue['RoomRates']['RoomRate']['RoomRateDescription']['Text'] : [$roomValue['RoomRates']['RoomRate']['RoomRateDescription']['Text']];
                                        ?>
                                        @if (is_array($roomrateDesc[0]))
                                            @foreach ($roomrateDesc[0] as $ame)
                                                <ul>
                                                    <li>{{ $ame }}</li>
                                                </ul>
                                            @endforeach
                                        @else
                                            {{ $roomrateDesc[0] }}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-3 col-md-3 col-sm-3 borderrighthotel">
                                    <h4 class="pt-10"> <i class="fa fa-inr"></i>
                                        @if ($Checkbasefare == "AED")
                                        {{ number_format(round($roomValue['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountBeforeTax'] ?? ($roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountBeforeTax'] ?? $roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountAfterTax'] ?? '')) * 20) }}
                                        @else
                                        {{ number_format(round($roomValue['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountBeforeTax'] ?? ($roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountBeforeTax'] ?? $roomValue['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountAfterTax'] ?? ''))) }}
                                        @endif
                                    </h4>
                                    <span class="onwfnt-11"> + <i class="fa fa-inr"></i>
                                        @if ($Checkbasefare == "AED")
                                        {{ number_format(round(($roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax'] - ($roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountBeforeTax'] ?? $roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax']) ?? '') / $dayCount) * 20)  }}
                                        @else 
                                        {{ number_format(round($roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax'] - ($roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountBeforeTax'] ?? $roomValue['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax']) ?? '') / $dayCount)  }}
                                        @endif
                                        taxes & fees Per Night</span>
                                    <form action="{{ url('Hotels/review-hotel') }}" method="get" name="hotel-details">
                                        <input type="hidden" name="ChainCode"
                                            value="{{ $hotelInfo['@attributes']['ChainCode'] }}" />
                                        <input type="hidden" name="HotelCode"
                                            value="{{ $hotelInfo['@attributes']['HotelCode'] }}" />
                                        <input type="hidden" name="HotelCityCode"
                                            value="{{ $result['HotelStays']['HotelStay']['BasicPropertyInfo']['@attributes']['HotelCityCode'] }}" />
                                        <input type="hidden" name="HotelCodeContext"
                                            value="{{ $hotelInfo['@attributes']['HotelCodeContext'] }}" />
                                        <input type="hidden" name="header" value="{{ json_encode($header, true) }}" />
                                        <input type="hidden" name="RoomTypeCode"
                                            value="{{ $roomValue['RoomRates']['RoomRate']['@attributes']['RoomTypeCode'] }}" />
                                        <input type="hidden" name="BookingCode"
                                            value="{{ $roomValue['RoomRates']['RoomRate']['@attributes']['BookingCode'] }}" />
                                        <input type="hidden" name="startDate" value="{{ $start }}">
                                        <input type="hidden" name="endDate" value="{{ $end }}">
                                        <input type="hidden" name="location"
                                            value="{{ is_array($result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['AddressLine']) == true ? $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['AddressLine'][0] . ',' . $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['AddressLine'][1] : $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['AddressLine'] }} {{ $result['HotelStays']['HotelStay']['BasicPropertyInfo']['Address']['PostalCode'] }}">
                                        <input type="hidden" name="adult" value="{{ $adult }}">
                                        <input type="hidden" name="child" value="{{ $child }}">
                                        <button class="addroombtn btn-center"> SELECT ROOM </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section> 
            <section class="page-section" id="3">
                <h4 class="pt-20">Location</h4>
                <div class="card" id="MAP">
                    <div class="card-body" id="MAPLOCATION">
                        <div class="row">
                            <div class="col-sm-12">
                                @if (empty($mapLocation))
                                @else
                                    <iframe src="https://www.google.com/maps?q={{ $mapLocation['Latitude'] }},{{ $mapLocation['Longitude'] }}&output=embed"
                                        width="100%" height="500" style="border:0;" loading="fast"></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="4" class="pt-20 pb-20">
                <h4>Facilities at
                    {{ $hotelDetails['HotelStays']['HotelStay']['BasicPropertyInfo']['@attributes']['HotelName'] }}</h4>
                <div class="slitxt pb-10 pt-10">SAFETY AND HYGIENE</div>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Masks |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Disinfectant wipes |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Gloves |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Sanitizers |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Staff Hygiene |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Thermal Screening |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Sanitizers Installed |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Disinfection |</span>
                <div class="slitxt pb-10 pt-20"> BASIC FACILITIES </div>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Free Parking |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Free Wi-Fi |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Elevator/Lift |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Air Conditioning |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> 24-hour Room Service |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Power Backup |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Housekeeping |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Newspaper |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Torch |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Telephone |</span>
                <div class="slitxt pb-10 pt-20"> SAFETY AND SECURITY </div>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Emergency Exit Map |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> CCTV |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Fire Extinguishers |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Safety and Security |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Electronic Keycard |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> 24-hour Security |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> In-room Safe |</span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Security alarms |</span>
                <div class="slitxt pb-10 pt-20"> Food and Drinks </div>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Bakery </span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Bar </span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Cafe </span>
                <span class="onwfnt-11"> <i class="fa fa-check text-success"></i> Restaurant </span>
            </section>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            var fixmeTop = $('.category-list').offset().top;
            $(window).scroll(function() {
                var currentScroll = $(window).scrollTop();
                if (currentScroll >= fixmeTop) {
                    $('.category-list').css({
                        position: 'fixed',
                    }).addClass('sticydiv');
                } else {
                    $('.category-list').css({
                        position: 'static'
                    }).removeClass('sticydiv');
                }
            });
        });

        $(window).scroll(function() {
            var scrollDistance = $(window).scrollTop();
            $('.page-section').each(function(i) {
                if ($(this).position().top <= scrollDistance) {
                    $('.category-list a.active-hotel').removeClass('active-hotel');
                    $('.category-list a').eq(i).addClass('active-hotel');
                }
            });
        }).scroll();
    </script>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Wagnistrip</title>
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
    
         @include("layouts/header")
        <br>

        <section class="bgcolor pt-6p">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-4 col-sm-6">
                        <span class="h22">Review your booking</span>
                    </div>
                    <div class="col-8 col-md-8 col-sm-6">
                        <div class="progress">
                            <div class="progress-bar bg-success border-right" style="width:25%">
                                Flight selected
                            </div>
                            <div class="progress-bar bg-success border-right" style="width:25%">
                                Review
                            </div>
                            <div class="progress-bar bg-light text-dark border-right" style="width:25%">
                                Traveller Details
                            </div>
                            <div class="progress-bar bg-light text-dark" style="width:25%">
                                Make Payment
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        @php
        use App\Http\Controllers\Hotel\Amadeus\HeaderController;
        is_array($detail['OTA_HotelAvailRS']) ? ($hotelDetailsReview = $detail['OTA_HotelAvailRS']) : ($hotelDetailsReview = [$detail['OTA_HotelAvailRS']]);
        // uddeshya 
        if(!isset($hotelDetailsReview['HotelStays'])){
            if(isset($hotelDetailsReview['Errors']['Error']['@attributes'])){
                $ErrorCode = $hotelDetailsReview['Errors']['Error']['@attributes']['Code'];
                $ErrorType = $hotelDetailsReview['Errors']['Error']['@attributes']['Type'];
                
                    header("Location: " . URL::to('/errors'.'/'.$ErrorCode.'/'.$ErrorType), true, 302);
                    exit();
                
            }
        }else{
            $hotelCode = $hotelDetailsReview['HotelStays']['HotelStay']['BasicPropertyInfo']['@attributes']['HotelCode'];
        }
        // uddeshya code 
        $hotelStay = $hotelDetailsReview['HotelStays']['HotelStay'];
        $hotelRoomStays = $hotelDetailsReview['RoomStays']['RoomStay'];
        $HeaderController = new HeaderController();
        $hotelInfo = $HeaderController->HotelInfo($hotelCode);
    
        $Checkbasefare = $hotelRoomStays['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['CurrencyCode'] ?? $hotelRoomStays['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['CurrencyCode'];
        @endphp
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 pt-20 pb-20">
                        <div class="borderfadshow pb-20">
                            <div class="col-sm-12 p-3">
                                <span class="fontsizehotel14"> <i class="fa fa-hotel"></i> HOTEL INFORMATION</span>
                            </div>
                            {{-- <div class="borderbotum"></div> --}}
                            <div class="row">
                                <div class="col-sm-9">
                                    <h6 class="fontsizehotel20">
                                        {{ $hotelStay['BasicPropertyInfo']['@attributes']['HotelName'] }} </h6>
                                    <button type="button" class="btn btn-sm btn-outline-secondary bshadow">
                                        {{ $hotelStay['BasicPropertyInfo']['@attributes']['ChainName'] }}
                                    </button>
                                    <h5 class="onwfnt-11 pt-10">
                                      <i class="fa fa-map-marker"></i>  {{ $requestDetails['location'] }}
                                    </h5>
                                </div>
                                <div class="col-sm-3">
                                    <div class="float-right ranjepp">
                                        <img src="{{ asset('assets/images/hotel/h2.jpg') }}" alt="flight"
                                            style="width:100%; border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                            <div class="borderbotum"></div>
                            <div class="row ranjepp">
                                <div class="col-sm-4">
                                    <span class="onwfnt-11 colorgrey"> CHECK IN </span>
                                    <?php
                                    $dateStart = date_create($hotelRoomStays['TimeSpan']['@attributes']['Start']);
                                    $dateEnd = date_create($hotelRoomStays['TimeSpan']['@attributes']['End']);
                                    // dd($hotelRoomStays);
                                    $diff = $dateEnd->diff($dateStart);
                                    $dayCount = $diff->format('%a');
                                    ?>
                                    <div class="fontsizehotel20">
                                        {{ date_format($dateStart, 'd M Y') }} |
                                        {{ $hotelRoomStays['TimeSpan']['StartDateWindow']['@attributes']['DOW'] }}
                                    </div>
                                    <span class="onwfnt-11 colorgrey"> 3 PM</span>
                                </div>
                                <div class="col-sm-2">
                                    <span class="nighthotel">{{ $dayCount }} Night</span>
                                </div>
                                <div class="col-sm-4">
                                    <span class="onwfnt-11 colorgrey"> CHECK OUT </span>
                                    <div class="fontsizehotel20"> {{ date_format($dateEnd, 'd M Y') }} |
                                        {{ $hotelRoomStays['TimeSpan']['EndDateWindow']['@attributes']['DOW'] }}
                                    </div>
                                    <span class="onwfnt-11 colorgrey"> 12 PM </span>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <h6 class="adulttext"> {{ session('adult') }} Adult </h6>
                                    @if (session('child') == 0)
                                    @else
                                        <h6 class="adulttext"> {{ session('child') }} Child </h6>
                                    @endif
                                    <h6 class="adulttext"> 1 Room </h6>
                                </div> 
                            </div>
                            <div class="p-20">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="p-10 bgpolicy">
                                            @if (isset($hotelRoomStays['RatePlans']['RatePlan']['CancelPenalties']['@attributes']['CancelPolicyIndicator']) == 1)
                                                <span class="hotelrefundtext"> <i class="fa fa-check-circle"></i>
                                                    Refundable
                                                </span><br>
                                                <?php
                                                $CheckDate = $hotelRoomStays['RatePlans']['RatePlan']['CancelPenalties']['CancelPenalty']['Deadline']['@attributes']['AbsoluteDeadline'] ?? $hotelRoomStays['RatePlans']['RatePlan']['CancelPenalties']['CancelPenalty'] == true;
                                                if ($CheckDate == 'true') {
                                                } else {
                                                    $date = date_create($CheckDate);
                                                    $datFormate = date_format($date, 'd, M Y h:i a');
                                                    echo "<span class='facilityhoteltitle pt-10 pb-10'> <i class='fa fa-check-circle text-info'></i> Cancellation Are Permitted Before " . $datFormate . '</span> <br>';
                                                }
                                                ?>
                                                <div class="border-bottom pb-10 text-dark"></div>
                                            @else
                                                <span class="hotelnonrefundtext"> <i class="fa fa-times-circle"></i>
                                                    Non-Refundable </span><br>
                                            @endif
                                            @if ($hotelRoomStays['RatePlans']['RatePlan']['MealsIncluded']['@attributes']['Breakfast'] ?? '' == 1)
                                                <span class="facilityhoteltitle"> <i
                                                        class="fa fa-cutlery text-info"></i>
                                                    Breakfast Available
                                                </span>
                                            @else
                                                <span class="facilityhoteltitle"> <i
                                                        class="fa fa-cutlery text-info"></i>
                                                    Breakfast Available at extra coast
                                                </span>
                                            @endif
                                            <br>
                                            <h6 class="facilityhoteltitle pt-10"> <i class="fa fa-check-circle text-info"></i>
                                                <?php 
                                                    $ratepDesc = $hotelRoomStays['RatePlans']['RatePlan']['RatePlanDescription']['Text'] ?? '';
                                                ?>
                                                @if (is_array($ratepDesc))
                                                    {{ implode(' ', $ratepDesc) }} 
                                                @else
                                                    {{ $ratepDesc }} 
                                                @endif
                                            </h6>
                                            <?php
                                            $AdditionalDetail = $hotelRoomStays['RatePlans']['RatePlan']['AdditionalDetails']['AdditionalDetail'][0]['DetailDescription']['Text'] ?? '';
                                            $AdditionalDetailOne = $hotelRoomStays['RatePlans']['RatePlan']['AdditionalDetails']['AdditionalDetail'][1]['DetailDescription']['Text'] ?? '';
                                            $RoomRateDescription = $hotelRoomStays['RoomRates']['RoomRate']['RoomRateDescription']['Text'] ?? '';
                                            // dd($RoomRateDescription);
                                            ?>
                                            
                                            
                                             @if (is_array($AdditionalDetail))
                                            
                                                @if($AdditionalDetail == '')
                                            
                                                    {{ implode(' ', $AdditionalDetail) }}
                                                    <div class="border-bottom pb-10"></div>
                                            @elseif(is_array(!$AdditionalDetailOne == ''))
                                                {{ implode(',', $AdditionalDetailOne) }}
                                                <div class="border-bottom pb-10"></div>
                                            @elseif(!$RoomRateDescription == '')
                                                @if (is_array($RoomRateDescription))
                                                    {{ implode(' ', $RoomRateDescription) }}
                                                @else
                                                {{ $RoomRateDescription }}
                                                @endif
                                                <div class="border-bottom pb-10"></div>
                                            @else
                                            @endif
                                            @endif  
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="pt-10 pb-20"></h5>
                        <div class="borderfadshow pt-10 pb-10">
                            <div class="col-sm-12 p-3">
                                <span class="fontsizehotel14"> <i class="fa fa-group"></i> GUEST DETAILS</span>
                            </div>
                            <form action="{{ route('hotel-pay') }}" method="get">
                                <?php 
                                    for ($i=1; $i <= $requestDetails['adult']; $i++) { 
                                ?>
                                <div class="searchtitle pt-10 pb-10">ADULT ({{$i}})</div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="formtitlehtl"> Title
                                            </span>
                                            <select name="adultTitle[]" class="form-control" required>
                                                <option value="" hidden>Title</option>
                                                <option value="MR">MR</option>
                                                <option value="MS">MS</option>
                                                <option value="Mrs">Mrs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="formtitlehtl">
                                                First Name & (middle name, if any)
                                            </span>
                                            <input type="text" name="adultFirstName[]" class="form-control"
                                                placeholder="First Name" required data-parsley-pattern="^[a-z A-Z]+$" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="formtitlehtl"> Last Name
                                            </span>
                                            <input type="text" name="adultLastName[]" class="form-control"
                                                placeholder="Last Name" data-parsley-minlength="3"
                                                data-parsley-pattern="^[a-z A-Z]+$" required />
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                                <div class="searchtitle pt-10 pb-10">Contact Details</div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="formtitlehtl"> Country Code
                                            </span>
                                            <select name="countryCode2" class="form-control" required="">
                                                <option value="+91">(+91) Ind</option>
                                                <option value="Canda">Canda</option>
                                                <option value="USA">USA</option>
                                                <option value="UAE">UAE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="formtitlehtl">
                                                Mobile
                                            </span>
                                            <input type="text" name="phoneNumber" class="form-control"
                                                placeholder="Enter Mobile" required="" data-parsley-type="number"
                                                data-parsley-maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="formtitlehtl"> Email</span>
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Enter Eamil" required="" data-parsley-type="email">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="checkin" value="{{ $hotelRoomStays['TimeSpan']['@attributes']['Start'] }}" />
                                <input type="hidden" name="checkout" value="{{ $hotelRoomStays['TimeSpan']['@attributes']['End'] }}" />
                                <input type="hidden" name="header" value="{{ json_encode($header, true) }}" />
                                <input type="hidden" name="booking_code" value="{{ $hotelRoomStays['RoomRates']['RoomRate']['@attributes']['BookingCode'] }}" />
                                <input type="hidden" name="roomtypecode"
                                    value="{{ $hotelRoomStays['RoomRates']['RoomRate']['@attributes']['RoomTypeCode'] }}" />
                                <input type="hidden" name="rateplanecode"
                                    value="{{ $hotelRoomStays['RoomRates']['RoomRate']['@attributes']['RatePlanCode'] }}" />
                                <input type="hidden" name="chaincode"
                                    value="{{ $hotelStay['BasicPropertyInfo']['@attributes']['ChainCode'] }}" />
                                <input type="hidden" name="hotelcode"
                                    value="{{ $hotelStay['BasicPropertyInfo']['@attributes']['HotelCode'] }}" />
                                <input type="hidden" name="hotelname"
                                    value="{{ $hotelStay['BasicPropertyInfo']['@attributes']['HotelName'] }}" />
                                <input type="hidden" name="night" value="{{ $dayCount }}">
                                <input type="hidden" name="adult" value="{{$requestDetails['adult'] + $requestDetails['child']}}">
                                <input type="hidden" name="Checkbasefare" value="{{ $Checkbasefare }}">
                                {{-- code by uddeshya  --}}
                                <input type="hidden" name="HotelCityCode" value="{{ $HotelCityCode }}">
                                <input type="hidden" name="showdepartDate" value="{{ date_format($dateStart, 'd M Y') }}">
                                <input type="hidden" name="showreturnDate" value="{{ date_format($dateEnd, 'd M Y') }}">
                                {{-- code by uddeshya  --}}
                                <input type="hidden" name="amount" value="{{$hotelRoomStays['Total']['@attributes']['AmountAfterTax'] + $hotelRoomStays['Total']['@attributes']['AmountAfterTax'] - $hotelRoomStays['Total']['@attributes']['AmountAfterTax'] }}">
                                <input type="hidden" name="address" value="{{ $requestDetails['location'] }}">
                                </div>
                                <div class="pt-20 pb-20">
                                    <button type="submit" class="continueres-btn"> Continue </button>
                                </div>
                        </form>
                    </div>
                    <div class="col-sm-4 pt-20">
                        <div class="borderfadshow p-2">
                            <div class="col-sm-12 p-3">
                                <span class="fontsizehotel14"> <i class="fa fa-credit-card-alt"></i> PRICE SUMMERY </span>
                            </div>
                            {{-- <div class="borderbotum"></div> --}}
                            <div class="ranjepp">
                                <span class="fontsize-13review pb-10">
                                    {{ $dayCount }} Nights
                                </span><br>
                                <span class="onwfnt-11 colorgrey">Base Price</span>
                                <span class="fontsize-13review float-right">
                                    <i class="fa fa-inr"></i>
                                    <?php
                                      $amount = round($hotelRoomStays['Total']['@attributes']['AmountBeforeTax'] ?? $hotelRoomStays['Total']['@attributes']['AmountAfterTax']);
                                      $taxes = round($hotelRoomStays['Total']['@attributes']['AmountAfterTax'] - $hotelRoomStays['Total']['@attributes']['AmountBeforeTax'] ?? $hotelRoomStays['Total']['@attributes']['AmountAfterTax']);
                                    ?>
                                    @if ($Checkbasefare == "AED")
                                    {{ number_format($amount * 20)}}
                                    @else
                                    {{ number_format($amount) }}
                                    @endif
                                </span>
                            </div>
                            <div class="border-bottom pt-10"></div>
                            <div class="ranjepp fontsize-13review">
                                <span class="pb-10">
                                    Taxes & Service fees
                                </span>
                                <span class="float-right">
                                    <i class="fa fa-inr"></i>
                                    @if ($Checkbasefare == "AED")
                                    {{ number_format($taxes * 20)}}
                                    @else
                                    {{ number_format($taxes) }}
                                    @endif
                                </span>
                            </div>
                            <div class="border-bottom pt-10"></div>
                            <div class="ranjepp">
                                <div class="owstitle pb-10" data-toggle="collapse" data-target="#price1">
                                    <span class="fontsize-22"> Total Amount</span>
                                    <span class="fontsize-22 float-right"> <i class="fa fa-inr"></i>
                                        @if ($Checkbasefare == "AED")
                                        {{ number_format(($amount + $taxes) * 20) }}
                                        @else
                                        {{ number_format($amount + $taxes) }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pb-10"></div>
                        <div class="borderfadshow">
                            <div class="card-header fontsize-22 bg-info text-light">HOT DEALS</div>
                            <div class="ranjepp">
                                <div class="owstitle"> <i class="fa fa-tag"></i> FLYFLASH</div>
                                <p class="onwfnt-11">Use this code to get special discount of INR 350 for you</p>
                                <div class="borderbotum"></div>
                                <div class="owstitle"> <i class="fa fa-tag"></i> FLYFLASH</div>
                                <p class="onwfnt-11">Use this code to get special discount of INR 350 for you</p>
                                <div class="borderbotum"></div>
                                <div class="owstitle"> <i class="fa fa-tag"></i> FLYFLASH</div>
                                <p class="onwfnt-11">Use this code to get special discount of INR 350 for you</p>
                                <div class="borderbotum"></div>
                                <div class="owstitle"> <i class="fa fa-tag"></i> FLYFLASH</div>
                                <p class="onwfnt-11">Use this code to get special discount of INR 350 for you</p>
                                <div class="borderbotum"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        
    
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
    <!--<script src="{{ asset('assets/js/date.js') }}"></script>-->
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
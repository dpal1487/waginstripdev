@extends('hotel-pages.master')
@section('title', 'search hotels')
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 pt-10">
                    <div class="boxunder">
                        <div class="card-header owstitle">Select Filters</div>
                        <div class="ranjepp">

                            <span class="owstitle">Popular Filters</span>
                            <div class="padding-10 pt-10 pb-10">
                                <div><input type="checkbox" class="form-check-input" value=""> Free Cancellation,
                                    Zero Payment Now</div>
                                <div><input type="checkbox" class="form-check-input" value=""> Safe and Hygienic
                                    Stays </div>
                                <div><input type="checkbox" class="form-check-input" value=""> EMI Deals Available
                                </div>
                                <div><input type="checkbox" class="form-check-input" value=""> Free Breakfast
                                </div>
                                <div><input type="checkbox" class="form-check-input" value=""> Free Cancellation
                                </div>
                            </div>
                            <div class="borderbotum"></div>
                            <div class="ranjepp">
                                <div class="owstitle pb-10" data-toggle="collapse" data-target="#price">Price Per
                                    Night
                                    <span class="float-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                </div>
                                <div id="price" class="collapse show">
                                    <div class="slider-wrapper slider-primary slider-strips slider-ghost pb-10">
                                        <input class="input-range" type="text" data-slider-step="1"
                                            data-slider-value="5, 90" data-slider-min="0" data-slider-max="100"
                                            data-slider-range="true" data-slider-tooltip_split="true" />
                                    </div>
                                </div>
                            </div>
                            <div class="borderbotum"></div>
                            <span class="owstitle">Locality</span>
                            <div class="padding-10 pt-10 pb-10">
                                <div><input type="checkbox" class="form-check-input" value=""> Karol bagh</div>
                                <div><input type="checkbox" class="form-check-input" value=""> Lajpat Nagar </div>
                                <div><input type="checkbox" class="form-check-input" value=""> Mehrauli </div>
                                <div><input type="checkbox" class="form-check-input" value=""> Nehru Place Market
                                </div>
                            </div>
                            <div class="borderbotum"></div>
                            <span class="owstitle">Star Category</span>
                            <div class="padding-10 pt-10 pb-10">
                                <div><input type="checkbox" class="form-check-input" value=""> Free </div>
                                <div><input type="checkbox" class="form-check-input" value=""> 5 Star </div>
                                <div><input type="checkbox" class="form-check-input" value=""> 4 Star </div>
                            </div>
                            <div class="borderbotum"></div>
                            <span class="owstitle"> User Rating </span>
                            <div class="padding-10 pt-10 pb-10">
                                <div><input type="checkbox" class="form-check-input" value=""> 4.5 & above
                                    (Excellent) </div>
                                <div><input type="checkbox" class="form-check-input" value=""> 4 & above (Very
                                    Good)
                                </div>
                                <div><input type="checkbox" class="form-check-input" value=""> 3 & above (Good)
                                </div>
                            </div>
                            <div class="borderbotum"></div>
                            <span class="owstitle"> Property Type </span>
                            <div class="padding-10 pt-10 pb-10">
                                <div><input type="checkbox" class="form-check-input" value=""> Hotel </div>
                                <div><input type="checkbox" class="form-check-input" value=""> Homestay </div>
                                <div><input type="checkbox" class="form-check-input" value=""> Apartment </div>
                            </div>
                            <div class="borderbotum"></div>
                            <span class="owstitle"> Facility </span>
                            <div class="padding-10 pt-10 pb-10">
                                <div><input type="checkbox" class="form-check-input" value=""> Outdoor Sports
                                </div>
                                <div><input type="checkbox" class="form-check-input" value=""> Swimming Pool </div>
                                <div><input type="checkbox" class="form-check-input" value=""> Fireplace </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 pt-10">
                    <div class="">
                        <div class=" pb-10">
                            <div class="boxunder hotlist">
                                @php
                                    use App\Http\Controllers\Hotel\Amadeus\HeaderController;
                                    isset($hotels['OTA_HotelAvailRS']['HotelStays']['HotelStay'][0]) ? ($HotelStays = $hotels['OTA_HotelAvailRS']['HotelStays']['HotelStay']) : ($HotelStays = [$hotels['OTA_HotelAvailRS']['HotelStays']['HotelStay']]);
                                    isset($hotels['OTA_HotelAvailRS']['RoomStays']['RoomStay'][0]) ? ($RoomStays = $hotels['OTA_HotelAvailRS']['RoomStays']['RoomStay']) : ($RoomStays = [$hotels['OTA_HotelAvailRS']['RoomStays']['RoomStay']]);
                                    
                                @endphp
                                @foreach ($HotelStays as $hotelKey => $hotel)
                                    @php
                                        $hotelCode = $hotel['BasicPropertyInfo']['@attributes']['HotelCode'];
                                        $HeaderController = new HeaderController();
                                        $hotelDescriptiveContent = $HeaderController->HotelInfo($hotelCode);
                                        $hotelDescriptionsImageRoutes = $hotelDescriptiveContent['HotelInfo']['Descriptions']['MultimediaDescriptions']['MultimediaDescription'];
                                        $hotelDescriptionsImageRoutess = array_column($hotelDescriptionsImageRoutes, 'ImageItems');
                                        $hotelImagesRow = [];
                                    if (!empty($hotelDescriptionsImageRoutess)) {
                                        foreach ($hotelDescriptionsImageRoutess as $hotelDescriptionsRow) {
                                            isset($hotelDescriptionsRow['ImageItem'][0]) ? $hotelDescriptionsRowImageItem = $hotelDescriptionsRow['ImageItem'] : $hotelDescriptionsRowImageItem = [$hotelDescriptionsRow['ImageItem']];
                           
                                            foreach ($hotelDescriptionsRowImageItem as $HotelImageArrays) {
                                                if (isset($HotelImageArrays['Description'])) {
                                                isset($HotelImageArrays['Description']['@attributes'])? $HotelImageArraysDescription = $HotelImageArrays['Description']['@attributes']['Caption'] : $HotelImageArraysDescription = $HotelImageArrays['Description']; 
                                                    if (strpos($HotelImageArraysDescription, 'Exterior') !== false) {
                                                        array_push($hotelImagesRow, $HotelImageArrays['ImageFormat']);
                                                        break;
                                                    } else {
                                                   array_push($hotelImagesRow, $HotelImageArrays['ImageFormat']);
                                                    break;
                                                }
                                                } else {
                                                   array_push($hotelImagesRow, $HotelImageArrays['ImageFormat']);
                                                    break;
                                                }
                                            }
                                        }
                                    }else{
                                        $hotelImagesRow[] = [
                                            ["URL" => asset('assets/images/hotel/h3.jpg')],
                                        ];
                                        }
                                        


                                        
                                    @endphp

                                    <form action="{{ url('Hotels/hotel-details') }}" method="get">
                                        <input type="hidden" name="chaincode"
                                            value="{{ $hotel['BasicPropertyInfo']['@attributes']['ChainCode'] }}">
                                        <input type="hidden" name="hotelcode"
                                            value="{{ $hotel['BasicPropertyInfo']['@attributes']['HotelCode'] }}">
                                        <input type="hidden" name="hotelcitycode"
                                            value="{{ $hotel['BasicPropertyInfo']['@attributes']['HotelCityCode'] }}">
                                        <input type="hidden" name="departDate" value="{{ $start }}">
                                        <input type="hidden" name="returnDate" value="{{ $end }}">
                                        <input type="hidden" name="adult" value="{{ $adult }}">
                                        <input type="hidden" name="child" value="{{ $child }}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="boxx">
                                                    <img src="{{ $hotelImagesRow[0][0]['URL'] }}" class="rounded" alt="" style="width: 100%; height: 190px;">
                                                </div>
                                                {{-- <div class="pt-10 btnbox">
                                                    <img src="{{ $hotelImagesRow[2]['URL'] }}"
                                                        class="rounded img1" alt="" style="width: 23%; height: 40px;">
                                                    <img src="{{ asset('assets/images/hotel/h2.jpg') }}') }}"
                                                        class="rounded img2" alt="" style="width: 23%; height: 40px;">
                                                    <img src="{{ asset('assets/images/hotel/h3.jpg') }}') }}"
                                                        class="rounded img3" alt="" style="width: 23%; height: 40px;">
                                                    <img src="{{ asset('assets/images/hotel/h4.jpg') }}') }}"
                                                        class="rounded img4" alt="" style="width: 23%; height: 40px;">
                                                </div> --}}
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="fontsize-22">
                                                    {{ $hotel['BasicPropertyInfo']['@attributes']['HotelName'] }}
                                                </div>
                                                <div class="onwfnt-11 colorgrey pt-10 pb-10">
                                                    <i class="fa fa-map-marker text-info"></i>
                                                    {{ is_array($hotel['BasicPropertyInfo']['Address']['AddressLine']) == true ? $hotel['BasicPropertyInfo']['Address']['AddressLine'][0] . ',' . $hotel['BasicPropertyInfo']['Address']['AddressLine'][1] : $hotel['BasicPropertyInfo']['Address']['AddressLine'] }}
                                                    <br>
                                                    <i class="fa fa-map-pin text-info"></i>
                                                    {{ $hotel['BasicPropertyInfo']['Address']['CityName'] }} |
                                                    {{ $hotel['BasicPropertyInfo']['Address']['PostalCode'] ?? '' }}
                                                </div>
                                                <div class="pb-10"></div>
                                                <button type="button" class="btn btn-sm btn-outline-info">
                                                    <?php
                                                    echo $hotel['BasicPropertyInfo']['@attributes']['ChainName'];
                                                    $paragrapText = $hotel['BasicPropertyInfo']['VendorMessages']['VendorMessage']['SubSection']['Paragraph']['Text'] ?? ' ';
                                                    ?>
                                                </button>
                                                <div class="pb-10"></div>
                                                <div class="onwfnt-11">
                                                    @if (is_array($paragrapText))
                                                        @foreach ($paragrapText as $item)
                                                            <div>{{ $item }}</div>
                                                        @endforeach
                                                    @else
                                                        <span>{{ $paragrapText }}</span><br />
                                                    @endif
                                                    Our All Staffs Are Fully Vaccinated.
                                                </div>
                                            </div>
                                            <div class="col-sm-2 hoteldtlbg">
                                                <div class="float-right pt-20">
                                                    <div class="pt-20"></div>
                                                    <?php
                                                    $date1 = new DateTime($start);
                                                    $date2 = new DateTime($end);
                                                    $diff = $date2->diff($date1);
                                                    $dayCount = $diff->format('%a');
                                                    $HotelRPH = explode(' ', $hotel['@attributes']['RoomStayRPH']);
                                                    ?>
                                                    @foreach ($RoomStays as $RoomStay)
                                                        @if ($HotelRPH[0] == $RoomStay['@attributes']['RPH'])
                                                            <?php
                                                            $Checkbasefare = $RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['CurrencyCode'] ?? $RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['CurrencyCode'];
                                                            ?>
                                                            @if ($Checkbasefare == 'AED')
                                                                <div class="fontsize-22"> <i class="fa fa-inr"></i>
                                                                    @if (isset($RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountBeforeTax']))
                                                                        <?php echo $hotelBaseFare = round(intval($RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountBeforeTax'] * 20)); ?>
                                                                        @elseif(isset($RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountAfterTax']))
                                                                        <?php echo $hotelBaseFare = round(intval($RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountAfterTax'] * 20)); ?>
                                                                        @elseif(isset($RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountBeforeTax']))
                                                                        <?php echo $hotelBaseFare = round(intval($RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountBeforeTax'] * 20)); ?>
                                                                        @elseif(isset($RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountAfterTax']))
                                                                        <?php echo $hotelBaseFare = round(intval($RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountAfterTax'] * 20)); ?>
                                                                    @endif
                                                                    <br>
                                                                    <span class="onwfnt-11"> + <i
                                                                            class="fa fa-inr"></i>
                                                                        <?php $perDayFare = intval($RoomStay['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax'] * 20) / $dayCount; ?>
                                                                        {{ round($perDayFare - $hotelBaseFare) }}
                                                                        Taxes Fees.
                                                                    </span>
                                                                </div>
                                                            @else

                                                                <div class="fontsize-22"> <i class="fa fa-inr"></i>
                                                                    @if (isset($RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountBeforeTax']))
                                                                        <?php echo $hotelBaseFare = round(intval($RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountBeforeTax'])); ?>
                                                                        @elseif(isset($RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountAfterTax']))
                                                                        <?php echo $hotelBaseFare = round(intval($RoomStay['RoomRates']['RoomRate']['Rates']['Rate'][0]['Base']['@attributes']['AmountAfterTax'])); ?>
                                                                        @elseif(isset($RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountBeforeTax']))
                                                                        <?php echo $hotelBaseFare = round(intval($RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountBeforeTax'])); ?>
                                                                        @elseif(isset($RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountAfterTax']))
                                                                        <?php echo $hotelBaseFare = round(intval($RoomStay['RoomRates']['RoomRate']['Rates']['Rate']['Base']['@attributes']['AmountAfterTax'])); ?>
                                                                    @endif
                                                                    <br>
                                                                    <span class="onwfnt-11"> + <i
                                                                            class="fa fa-inr"></i>
                                                                        <?php $perDayFare = intval($RoomStay['RoomRates']['RoomRate']['Total']['@attributes']['AmountAfterTax']) / $dayCount; ?>
                                                                        {{ round($perDayFare - $hotelBaseFare) }}
                                                                        Taxes Fees.
                                                                    </span>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                    <div class="onwfnt-11 colorgrey text-center">Per Night</div>
                                                </div>
                                                <button class="htldetailbtn">Hotel Details</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="border-bottom my-3"></div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

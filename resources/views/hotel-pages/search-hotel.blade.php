
@extends('layouts.master')
@section('title', 'search hotels')
@section('body')
@yield('title')

<section class="bgcolor pt-6p pb-20">
            <div class="container">
                <div class="card br-18">
                    <form action="{{ route('search-hotel')}}" method="get">
                        <div class="card-body">
                            <div class="radiobox">
                                <span class="uptext">
                                    <a href="#" class="link-color">Book Domestic and International hotels and homestays. To list your property</a> 
                                </span>
                            </div>
                            <div class="d-flex pt-10">
                                <div class="card wd-35">
                                    <div class="card-body">
                                        <div class="searchtitle">CITY|HOTEL|AREA|BUILDING</div>
                                        <select class="js-example-basic-single" name="state">
                                            <option value="DEL">Delhi (DEL)</option>
                                            <option value="BOM">Mumbai (BOM)</option>
                                            <option value="AMD">AMD (AMD)</option>
                                            <option value="CCU">CCU (CCU)</option>
                                        </select>
                                        <div class="slitxt">India</div>
                                    </div>
                                </div>
                                
                                <div class="card wd-25">
                                    <div class="card-body">
                                        <div id="id_startCalendar" class="calendar-widget default-today"
                                            data-next="#id_deadlineCalendar" date-min="today" tabindex="-1">
                                            <div class="input-wrapper">
                                                <div class="searchtitle"> CHECK-IN <i class="fa fa-chevron-down"
                                                        aria-hidden="true"></i></div>
                                                <input class="date-field" id="type1-start" type="text"
                                                    placeholder="CHECK-IN" name='departDate' readonly>
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
                                <div class="card wd-25">
                                    <div class="card-body">
                                        <div id="id_deadlineCalendar" class="calendar-widget default-today-return"
                                            tabindex="-1" data-link="#id_startCalendar" date-min="link">
                                            <div class="input-wrapper" id="checkreturnradio">
                                                <div class="searchtitle"> CHECK-OUT <i class="fa fa-chevron-down"
                                                        aria-hidden="true"></i></div>
                                                <input class="date-field" id="type1-deadline" name="returnDate" type="text"
                                                    placeholder="CHECK-OUT" readonly>
                                            </div>
        
                                            <div style="margin-left: -150px" class="calendar-wrapper">
                                                <div class="dual-calendar abddjd">
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
        
                                <div class="card wd-15">
                                    <div class="card-body cursorp" onclick="togglePopup()">
                                        <div class="searchtitle"> ROOMS & GUESTS <i class="fa fa-chevron-down"
                                                aria-hidden="true"></i></div>
                                        <span class="font25"> 1 </span> <span class="slitxt">Rooms</span>
                                        <span class="font25"> 1 </span> <span class="slitxt">Guests</span>
                                    </div>
                                    <div class="card content">
                                        <div class="card-body">
                                            <div class="fontsize-22">ROOMS</div>
                                            <div class="fnt10">ADULTS(12y+)</div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <label class="rdocon bshadow">
                                                        <input type="radio" checked="checked" name="adult" value="1">
                                                        <span class="checkmark">1</span>
                                                    </label>
                                                    <label class="rdocon bshadow">
                                                        <input type="radio" name="adult" value="2">
                                                        <span class="checkmark">2</span>
                                                    </label>
                                                    <label class="rdocon bshadow">
                                                        <input type="radio" name="adult" value="3">
                                                        <span class="checkmark">3</span>
                                                    </label>
                                                    <label class="rdocon bshadow">
                                                        <input type="radio" name="adult" value="4">
                                                        <span class="checkmark">4</span>
                                                    </label>
                                                    <label class="rdocon bshadow">
                                                        <input type="radio" name="adult" value="5">
                                                        <span class="checkmark">5</span>
                                                    </label>
                                                    <label class="rdocon bshadow">
                                                        <input type="radio" name="adult" value="6">
                                                        <span class="checkmark">6</span>
                                                    </label>
                                                    <label class="rdocon bshadow">
                                                        <input type="radio" name="adult" value="7">
                                                        <span class="checkmark">7</span>
                                                    </label>
                                                    <label class="rdocon bshadow">
                                                        <input type="radio" name="adult" value="8">
                                                        <span class="checkmark">8</span>
                                                    </label>
                                                    <label class="rdocon">
                                                        <input type="radio" name="adult" value="9">
                                                        <span class="checkmark">9</span>
                                                    </label>
                                                    <label class="rdocon">
                                                        <input type="radio" name="adult" value="10">
                                                        <span class="checkmark">10</span>
                                                    </label>
                                                    
                                                </div>
                                            </div>
                                            <div class="fnt10">CHILDREN(2y - 12y)</div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <label class="rdocon">
                                                        <input type="radio" checked="checked" name="child" value="0">
                                                        <span class="checkmark">0</span>
                                                    </label>
                                                    <label class="rdocon">
                                                        <input type="radio" name="child" value="1">
                                                        <span class="checkmark">1</span>
                                                    </label>
                                                    <label class="rdocon">
                                                        <input type="radio" name="child" value="2">
                                                        <span class="checkmark">2</span>
                                                    </label>
                                                    <label class="rdocon">
                                                        <input type="radio" name="child" value="3">
                                                        <span class="checkmark">3</span>
                                                    </label>
                                                    <label class="rdocon">
                                                        <input type="radio" name="child" value="4">
                                                        <span class="checkmark">4</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                            <button type="button" onclick="togglePopup()" class="btn-sm btn-primary mt-2">
                                                Done
                                            </button>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-10 pb-10">
                            <button class="searchbtn" name="main-search-btn" id="main-search-btn">SEARCH
                                <i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>





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
                                        <input type="hidden" name="departDate" value="@yield('start')">
                                        <input type="hidden" name="returnDate" value="{{ $end }}">
                                        <input type="hidden" name="adult" value="{{ $adult }}">
                                        <input type="hidden" name="child" value="{{ $child }}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="boxx">
                                                    <img src="{{ $hotelImagesRow[0][0]['URL'] }}" class="rounded" alt="" >
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



<footer class="bg-footer">
        <div class="container">
            <span class="footext">Copyright © 2021 XYZ PVT. LTD.</span>
            <span class="footext float-right">
                We Accept |
                <img src="{{asset('assets/images/payment1.png')}}" class="imgw-30" alt="">
                <img src="{{asset('assets/images/payment2.png')}}" class="imgw-30" alt="">
                <img src="{{asset('assets/images/payment3.png')}}" class="imgw-30" alt="">
                <img src="{{asset('assets/images/payment4.png')}}" class="imgw-30" alt="">
            </span>
        </div>
    </footer>
@endsection
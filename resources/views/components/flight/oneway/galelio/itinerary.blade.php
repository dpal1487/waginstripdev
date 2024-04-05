<div class="boxunder pb-10">
        <div class="row">
            <div class="col-sm-6">
                <div class="row ranjepp">
                    <div class="col-sm-2">
                        <img src="{{ asset('assets/images/flight/' . $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Code']) }}.png" alt="">
                    </div>
                    <div class="col-sm-6">
                        <div class="owstitle">
                            {{ $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Name'] }}
                        </div>
                        <div class="owstitle">
                            {{ $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Code'] . '-' . $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Identification'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-right ranjepp">
                    <form action="{{ route('galileo-pricing') }}" method="POST">
                        @csrf
                        <input type="hidden" name="travellers" value="{{ json_encode($travellers, true)}}">
                        <input type="hidden" name="trip" value="Oneway">
                        <input type="hidden" name="SessionID" value="{{ $SessionID }}">
                        <input type="hidden" name="Key" value="{{ $availabilityKey }}">
                        <input type="hidden" name="Pricingkey"
                            value="{{ $itineraries['PricingInfos']['PricingInfo'][0]['Pricingkey'] }}">
                        <input type="hidden" name="Provider"
                            value="{{ $itineraries['Provider'] }}">
                        <input type="hidden" name="ResultIndex"
                            value="{{ $itineraries['ItemNo'] }}">
                        <span class="fontsize-22"><i class="fa fa-rupee"></i>
                            {{ $itineraries['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['TotalFare'] }}
                        </span>
                        <button type="submit" name="onewayNonstop"
                            class="btn btn-primary btn-sm">Book
                            Now</button>
                        </td>
                    </form>
                </div>
            </div>
        </div>
        <div class="boxunder">
            <div class="row">
                <div class="col-sm-5 text-center">
                   
                    <div class="searchtitle">
                        {{ $itineraries['Itineraries']['Itinerary'][0]['Origin']['CityName'] . ' (' . $itineraries['Itineraries']['Itinerary'][0]['Origin']['AirportCode'] . ')' }}
                        {{ getTimeFormat($itineraries['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}
                    </div>
                    <div class="searchtitle colorgrey">
                        {{ getDateFormat($itineraries['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="searchtitle text-center">
                        {{ $itineraries['Itineraries']['Itinerary'][0]['Duration'] }}
                    </div>
                    <div class="borderbotum"></div>
                    <div class="searchtitle colorgrey text-center">
                        Non-Stop
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="text-center">
                        <div class="searchtitle">
                            {{ $itineraries['Itineraries']['Itinerary'][0]['Destination']['CityName'] . ' (' . $itineraries['Itineraries']['Itinerary'][0]['Destination']['AirportCode'] . ')' }}
                            {{ getTimeFormat($itineraries['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}
                        </div>
                        <div class="searchtitle colorgrey">
                            {{ getDateFormat($itineraries['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-10">
            <span
                class="onewflydetbtn">{{ $itineraries['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['Refundable'] }}</span>
            <span data-toggle="collapse" data-target="#flight-details1{{ $AvailKey }}"
                class="onewflydetbtn float-right">Flight Details</span>
            {{-- <span class="badge badge-info float-right">Flight Details</span> --}}
        </div>
        <div id="flight-details1{{ $AvailKey }}" class="collapse">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab"
                            href="#Information1{{ $AvailKey }}"> Flight
                            Information </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab"
                            href="#Details1{{ $AvailKey }}"> Fare
                            Details </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab"
                            href="#Baggage1{{ $AvailKey }}">
                            Baggage Information </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab"
                            href="#Cancellation1{{ $AvailKey }}">
                            Cancellation Rules </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active"
                        id="Information1{{ $AvailKey }}">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="pt-10">
                                    <span
                                        class="searchtitle">{{ $itineraries['Itineraries']['Itinerary'][0]['Origin']['AirportCode'] . '->' . $itineraries['Itineraries']['Itinerary'][0]['Destination']['AirportCode'] }}
                                    </span>
                                    <span
                                        class="onwfnt-11">{{ getDateFormat($itineraries['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}</span>
                                    <div>
                                        <img src="{{ asset('assets/images/flight/' . $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Code']) }}.png"
                                            alt="fligt">
                                        <span
                                            class="onwfnt-11">{{ $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Code'] . '-' . $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Identification'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="pt-10 text-center">
                                    <div class="searchtitle">
                                        {{ getTimeFormat($itineraries['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}
                                    </div>
                                    <div class="owstitle">
                                        {{ $itineraries['Itineraries']['Itinerary'][0]['Origin']['CityName'] . '(' . $itineraries['Itineraries']['Itinerary'][0]['Origin']['AirportCode'] . ')' }}
                                    </div>
                                    <div class="owstitle">
                                        {{ getDateFormat($itineraries['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}
                                    </div>
                                    {{-- <div class="owstitle">Terminal - </div> --}}
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="pt-10 float-right">
                                    <div class="searchtitle">
                                        {{ getTimeFormat($itineraries['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}
                                    </div>
                                    <div class="owstitle">
                                        {{ $itineraries['Itineraries']['Itinerary'][0]['Destination']['CityName'] . '(' . $itineraries['Itineraries']['Itinerary'][0]['Destination']['AirportCode'] . ')' }}
                                    </div>
                                    <div class="owstitle">
                                        {{ getDateFormat($itineraries['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}
                                    </div>
                                    {{-- <div class="owstitle">Terminal - </div> --}}
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="pt-10 text-center">
                                    <div class="owstitle">
                                        {{ $itineraries['Itineraries']['Itinerary'][0]['Duration'] }}
                                    </div>
                                    <div class="flh"></div>
                                    <div class="owstitle">By: Air</div>
                                </div>
                            </div> --}}
                           
                        </div>
                    </div>
                    <div class="tab-pane container fade"
                        id="Details1{{ $AvailKey }}">

                        <div>
                            <span class="text-left"> Fare Rules :</span>
                            <span class="text-right">
                                {{ $itineraries['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['Refundable'] }}
                            </span>
                        </div>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="onwfnt-11">1 Adult</td>
                                    <td class="text-right"> <i
                                            class="fa fa-inr"></i>
                                        {{  $itineraries['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="onwfnt-11">Total (Base Fare)</td>
                                    <td class="text-right"> <i
                                            class="fa fa-inr"></i>
                                        {{ $itineraries['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare'] }}</td>
                                </tr>
                                <tr>
                                    <td class="onwfnt-11">Total Tax +</td>
                                    <td class="text-right"> <i
                                            class="fa fa-inr"></i>
                                        {{ $itineraries['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['TotalTax'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="onwfnt-11">Total (Fee & Surcharge)</td>
                                    <td class="text-right"> <i
                                            class="fa fa-inr"></i>
                                        {{ $itineraries['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['TotalFare'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane container fade"
                        id="Baggage1{{ $AvailKey }}">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Airline</th>
                                    <th>Check-in Baggage</th>
                                    <th>Cabin Baggage</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> <img
                                            src="{{ asset('assets/images/flight/' . $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Code']) }}.png"
                                            alt="">
                                        <span
                                            class="onwfnt-11">{{ $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Code'] . '-' . $itineraries['Itineraries']['Itinerary'][0]['AirLine']['Identification'] }}</span>
                                    </td>
                                    <td class="onwfnt-11">{{ ($itineraries['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckIn'] != 0) ? $itineraries['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckIn'] . 'KG' : $itineraries['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckInPiece'] . 'PC'  }}</td>

                                    <td class="onwfnt-11">{{ ($itineraries['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['Cabin'] != 0) ?  $itineraries['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['Cabin'] . 'KG' : $itineraries['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CabinPiece'] . 'PC' }} </td>
                                
                                </tr>
                                
                               
                            </tbody>
                        </table>
                        <span class="onwfnt-11 font-weight-bold">Terms & Conditions</span>
                        <ul class="onwfnt-11">
                            <li>Total Rescheduling Charges Airlines Rescheduling fees Fare
                                Difference if applicable + MTT Fees.</li>
                            <li>The airline cancel reschedule fees is indicative and can be
                                changed without any prior notice by the airlines..</li>
                            <li>Wagnistrip does not guarantee the accuracy of cancel
                                reschedule
                                fees..</li>
                            <li>Partial cancellation is not allowed on the flight tickets
                                which
                                are book under special round trip discounted fares..</li>
                            <li>Airlines doesnt allow any additional baggage allowance for
                                any
                                infant added in the booking</li>
                            <li>In certain situations of restricted cases, no amendments and
                                cancellation is allowed</li>
                            <li>Airlines cancel reschedule should be reconfirmed before
                                requesting for a cancellation or amendment</li>
                        </ul>
                    </div>
                    <div class="tab-pane container fade"
                        id="Cancellation1{{ $AvailKey }}">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td> <b>Time Frame to Reissue</b>
                                        <div class="onwfnt-11">(Before scheduled
                                            departure time)
                                        </div>
                                    </td>
                                    <td> <b>Airline Fees</b>
                                        <div class="onwfnt-11"> (per passenger) </div>
                                    </td>
                                    <td> <b>MTT Fees</b>
                                        <div class="onwfnt-11"> (per passenger) </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="onwfnt-11">Cancel Before 4 hours of
                                        departure time.</td>
                                    <td> As Per Airline Policy</td>
                                    <td> <i class="fa fa-inr"></i> 500</td>
                                </tr>

                                <tr>
                                    <td> <b>Time Frame to cancel</b>
                                        <div class="onwfnt-11">(Before scheduled
                                            departure time)
                                        </div>
                                    </td>
                                    <td> <b>Airline Fees</b>
                                        <div class="onwfnt-11"> (per passenger) </div>
                                    </td>
                                    <td> <b>WT Fees</b>
                                        <div class="onwfnt-11"> (per passenger) </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="onwfnt-11">Cancel Before 4 hours of
                                        departure time.</td>
                                    <td> As Per Airline Policy</td>
                                    <td> <i class="fa fa-inr"></i> 500</td>
                                </tr>
                            </tbody>
                        </table>
                        <span class="onwfnt-11 font-weight-bold">Terms & Conditions</span>
                        <ul class="onwfnt-11">
                            <li>Total Rescheduling Charges Airlines Rescheduling fees Fare
                                Difference if applicable + MTT Fees.</li>
                            <li>The airline cancel reschedule fees is indicative and can be
                                changed without any prior notice by the airlines..</li>
                            <li>Wagnistrip does not guarantee the accuracy of cancel
                                reschedule
                                fees..</li>
                            <li>Partial cancellation is not allowed on the flight tickets
                                which
                                are book under special round trip discounted fares..</li>
                            <li>Airlines doesnt allow any additional baggage allowance for
                                any
                                infant added in the booking</li>
                            <li>In certain situations of restricted cases, no amendments and
                                cancellation is allowed</li>
                            <li>Airlines cancel reschedule should be reconfirmed before
                                requesting for a cancellation or amendment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

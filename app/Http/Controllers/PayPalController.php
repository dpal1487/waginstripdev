<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Amadeus\Client;
use Amadeus\Client\RequestOptions\DocIssuanceIssueTicketOptions;
use Amadeus\Client\RequestOptions\FarePricePnrWithBookingClassOptions;
use Amadeus\Client\RequestOptions\PnrAddMultiElementsOptions;
use Amadeus\Client\RequestOptions\PnrCreatePnrOptions;
use Amadeus\Client\RequestOptions\PnrRetrieveOptions;
use Amadeus\Client\RequestOptions\Pnr\Element\Contact;
use Amadeus\Client\RequestOptions\Pnr\Element\FormOfPayment;
use Amadeus\Client\RequestOptions\Pnr\Element\Ticketing;
use Amadeus\Client\RequestOptions\Pnr\Itinerary;
use Amadeus\Client\RequestOptions\Pnr\Segment;
use Amadeus\Client\RequestOptions\Pnr\Segment\Miscellaneous;
use Amadeus\Client\RequestOptions\Pnr\Traveller;
use Amadeus\Client\RequestOptions\TicketCreateTstFromPricingOptions;
use Amadeus\Client\RequestOptions\Ticket\Pricing;
use Amadeus\Client\Result;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Http\Controllers\Airline\AirportiatacodesController;
use App\Http\Controllers\Airline\Amadeus\AmadeusHeaderController;
use App\Models\Booking\Bookingpnr;
use App\Models\Cart;
use App\Models\User;
use Exception;
use App\Http\Controllers\AuthenticateController;
use PDF;
use Illuminate\Support\Facades\Hash;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Session;
use  Illuminate\Support\Facades\DB;

class PayPalController extends Controller
{
    public function successTransaction(Request $request){
        // success in payment   // copied app/Http/Controllers/Airline/Amadeus/DomesticPnrAddMultiElementsController.php's DomPnrAddMultiElements function and changed
        $input = [];
        $uniqueid = $request->uniqueid;
        $type = !empty($request->type) ? $request->type : '';
        // conditions 
            if($type == 'onewayGL'){
                return $this->onewayGLResponse($request->all());
            }    
            if($type == 'onewayAmedeus'){
                return $this->onewayAmedeusResponse($request->all());
            }
            if($type =='GalileoRoundtripDomestic'){
                return $this->gailroundtripdomesticresponse($request->all());
            }
            if($type == 'MixDom'){
                return $this->MixDomResponse($request->all());
            }
            if($type == 'GailRoundtripInterNational'){
                return $this->GailRoundtripInterNationalResponse($request->all());
            }
            // if($type == 'DomesticRoundTripAmedeus'){   //DomesticRoundTripAmedeus HANDLED BY DEFALULT EXCUTION
            //     return $this->DomesticRoundTripAmedeusResponse($request->all());
            // }
        //ends 

        $bookingData = Cart::where('uniqueid', $uniqueid)->first();dd($bookingData);
        $otherInformation = json_decode($bookingData['otherInformation'], true);
        $OutboundMarketingCompany = $otherInformation['otherInfoOutbound']['marketingCompany'] ?? $otherInformation['otherInfoOutbound']['marketingCompany_1'];
        $InboundMarketingCompany = $otherInformation['otherInfoInbound']['marketingCompany'] ?? $otherInformation['otherInfoInbound']['marketingCompany_1'];

        $activeTravellers = json_decode($bookingData['travllername'], true);

        $getsession = json_decode($bookingData['getsession'], true);

        $OutboundGetsession = $getsession['sessionOutbound'];
        $InboundGetsession = $getsession['sessionInbound'];

        $phonenumber = $bookingData['phonenumber'];
        $email = $bookingData['email'];
        $uniqueid = $bookingData['uniqueid'];
        
        for ($r = 1; $r <= 2; $r++) {

            $HeaderController = new AmadeusHeaderController;
            $params = $HeaderController->State(true);
            $passengers = json_decode($bookingData['travellerquantity'], true);
            $client = new Client($params);

            if ($r == 1) {
                $marketingCompany = $OutboundMarketingCompany;
                $client->setSessionData($OutboundGetsession);
            } elseif ($r == 2) {
                $marketingCompany = $InboundMarketingCompany;
                $client->setSessionData($InboundGetsession);
            }

            $travellers = [];
            $pricing = [];

            if ((int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] === 0) {
                for ($i = 0; $i < $passengers['noOfAdults']; $i++) {

                    $trvlrs = new Traveller([
                        'number' => $i,
                        'firstName' => $activeTravellers['adults']['fistName'][$i],
                        'lastName' => $activeTravellers['adults']['lastName'][$i],
                        'type' => 'ADT',
                    ]);
                    array_push($travellers, $trvlrs);
                }

                $pricing = new TicketCreateTstFromPricingOptions([
                    'pricings' => [
                        new Pricing([
                            'tstNumber' => 1,
                        ]),
                    ],
                ]);
            } elseif ((int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] > 0) {
                for ($i = 0; $i < $passengers['noOfAdults']; $i++) {

                    if ($passengers['noOfInfants'] != 0 && $i < $passengers['noOfInfants']) {
                        if ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] == $activeTravellers['infants']['lastName'][$i]) {
                            $trvlrs = new Traveller([
                                'number' => $i,
                                'firstName' => $activeTravellers['adults']['fistName'][$i],
                                'lastName' => $activeTravellers['adults']['lastName'][$i],
                                'travellerType' => null,
                                'infant' => new Traveller([
                                    'firstName' => 'Junior',
                                    'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                ]),
                            ]);

                        } elseif ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] != $activeTravellers['infants']['lastName'][$i]) {
                            $trvlrs = new Traveller([
                                'number' => $i,
                                'firstName' => $activeTravellers['adults']['fistName'][$i],
                                'lastName' => $activeTravellers['adults']['lastName'][$i],
                                'infant' => new Traveller([
                                    'firstName' => $activeTravellers['infants']['fistName'][$i],
                                    'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                ]),
                            ]);

                        } else {
                            $trvlrs = new Traveller([
                                'number' => $i,
                                'firstName' => $activeTravellers['adults']['fistName'][$i],
                                'lastName' => $activeTravellers['adults']['lastName'][$i],
                                'infant' => new Traveller([
                                    'firstName' => $activeTravellers['infants']['fistName'][$i],
                                    'lastName' => $activeTravellers['infants']['lastName'][$i],
                                    'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                ]),
                            ]);
                        }
                    } else {
                        $trvlrs = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                        ]);

                    }
                    array_push($travellers, $trvlrs);

                }

                $pricing = new TicketCreateTstFromPricingOptions([
                    'pricings' => [
                        new Pricing([
                            'tstNumber' => 1,
                        ]),
                        new Pricing([
                            'tstNumber' => 2,
                        ]),
                    ],
                ]);
            } elseif ((int) $passengers['noOfChilds'] > 0 && (int) $passengers['noOfInfants'] === 0) {

                for ($i = 0; $i < $passengers['noOfAdults']; $i++) {

                    $trvlrs1 = new Traveller([
                        'number' => $i,
                        'firstName' => $activeTravellers['adults']['fistName'][$i],
                        'lastName' => $activeTravellers['adults']['lastName'][$i],
                        'type' => 'ADT',
                    ]);
                    array_push($travellers, $trvlrs1);
                }
                for ($i = 0; $i < $passengers['noOfChilds']; $i++) {

                    $trvlrs2 = new Traveller([
                        'number' => array_sum([$passengers['noOfAdults'], $i]),
                        'firstName' => $activeTravellers['childs']['fistName'][$i],
                        'lastName' => $activeTravellers['childs']['lastName'][$i],
                        'travellerType' => Traveller::TRAV_TYPE_CHILD,
                    ]);

                    array_push($travellers, $trvlrs2);

                }
                $pricing = new TicketCreateTstFromPricingOptions([
                    'pricings' => [
                        new Pricing([
                            'tstNumber' => 1,
                        ]),
                        new Pricing([
                            'tstNumber' => 2,
                        ]),
                    ],
                ]);
            } elseif ((int) $passengers['noOfChilds'] > 0 && (int) $passengers['noOfInfants'] > 0) {
                for ($i = 0; $i < $passengers['noOfAdults']; $i++) {

                    if ($passengers['noOfInfants'] != 0 && $i < $passengers['noOfInfants']) {
                        if ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] == $activeTravellers['infants']['lastName'][$i]) {
                            $trvlrs1 = new Traveller([
                                'number' => $i,
                                'firstName' => $activeTravellers['adults']['fistName'][$i],
                                'lastName' => $activeTravellers['adults']['lastName'][$i],
                                'infant' => new Traveller([
                                    'firstName' => 'Junior',
                                    'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                ]),
                            ]);

                        } elseif ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] != $activeTravellers['infants']['lastName'][$i]) {
                            $trvlrs1 = new Traveller([
                                'number' => $i,
                                'firstName' => $activeTravellers['adults']['fistName'][$i],
                                'lastName' => $activeTravellers['adults']['lastName'][$i],
                                'infant' => new Traveller([
                                    'firstName' => $activeTravellers['infants']['fistName'][$i],
                                    'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                ]),
                            ]);

                        } else {
                            $trvlrs1 = new Traveller([
                                'number' => $i,
                                'firstName' => $activeTravellers['adults']['fistName'][$i],
                                'lastName' => $activeTravellers['adults']['lastName'][$i],
                                'infant' => new Traveller([
                                    'firstName' => $activeTravellers['infants']['fistName'][$i],
                                    'lastName' => $activeTravellers['infants']['lastName'][$i],
                                    'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                ]),
                            ]);

                        }
                        array_push($travellers, $trvlrs1);
                    } else {
                        $trvlrs2 = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                        ]);
                        array_push($travellers, $trvlrs2);
                    }
                }

                for ($i = 0; $i < $passengers['noOfChilds']; $i++) {

                    $trvlrs3 = new Traveller([
                        'number' => array_sum([$passengers['noOfAdults'], $i]),
                        'firstName' => $activeTravellers['childs']['fistName'][$i],
                        'lastName' => $activeTravellers['childs']['lastName'][$i],
                        'travellerType' => Traveller::TRAV_TYPE_CHILD,
                    ]);

                    array_push($travellers, $trvlrs3);

                }
                $pricing = new TicketCreateTstFromPricingOptions([
                    'pricings' => [
                        new Pricing([
                            'tstNumber' => 1,
                        ]),
                        new Pricing([
                            'tstNumber' => 2,
                        ]),
                        new Pricing([
                            'tstNumber' => 3,
                        ]),

                    ],
                ]);
            }

            $opt = new PnrCreatePnrOptions();
            $opt->actionCode = PnrCreatePnrOptions::ACTION_NO_PROCESSING; //0 Do not yet save the PNR and keep in context.

            $opt->travellers = $travellers;

            $opt->elements[] = new Ticketing([
                'ticketMode' => Ticketing::TICKETMODE_OK,
            ]);
            $opt->itineraries[] = new Itinerary([
                'segments' => [
                    new Miscellaneous([
                        'status ' => Segment::STATUS_CONFIRMED,
                        'company' => '1A',
                        'date' => \DateTime::createFromFormat('Ymd', date('Ymd'), new \DateTimeZone('UTC')),
                        'cityCode' => 'DEL',
                        'freeText' => 'MAKE TRUE TRIP (OPC ) PRIVATE LIMITED.',
                        'quantity' => array_sum([$passengers['noOfAdults'], $passengers['noOfChilds']]),
                    ]),
                ],
            ]);

            $opt->elements[] = new Contact([
                'type' => Contact::TYPE_PHONE_MOBILE,
                'value' => $phonenumber ?? '+919875489875',
            ]);
            $opt->elements[] = new Contact([
                'type' => Contact::TYPE_EMAIL,
                'value' => $email,
            ]);
            
            $opt->elements[] = new FormOfPayment([
                'type' => FormOfPayment::TYPE_CASH,
            ]);

            $createdPnr = $client->pnrCreatePnr($opt);
            if ($createdPnr->status === Result::STATUS_OK) {
                $getsession = $client->getSessionData();
                $client->setSessionData($getsession);

                $pricingResponse = $client->farePricePnrWithBookingClass(
                    new FarePricePnrWithBookingClassOptions([
                        'validatingCarrier' => $marketingCompany,
                    ]),
                );
                if ($pricingResponse->status === Result::STATUS_OK) {
                    $getsession = $client->getSessionData();
                    $client->setSessionData($getsession);

                    $createTstResponse = $client->ticketCreateTSTFromPricing(
                        $pricing
                    );

                    if ($createTstResponse->status === Result::STATUS_OK) {
                        $getsession = $client->getSessionData();
                        $client->setSessionData($getsession);
                        $pnrReply = $client->pnrAddMultiElements(
                            new PnrAddMultiElementsOptions([
                                'actionCode' => PnrAddMultiElementsOptions::ACTION_END_TRANSACT, //ET: END AND RETRIEVE
                            ])
                        );

                        if ($pnrReply->status === Result::STATUS_OK) {
                            $getsession = $client->getSessionData();
                            $client->setSessionData($getsession);
                            sleep(10);
                            $createdPnrForRetriever1 = $pnrReply->response->pnrHeader->reservationInfo->reservation->controlNumber;

                            $pnrRetrieve = $client->pnrRetrieve(new PnrRetrieveOptions(['recordLocator' => $createdPnrForRetriever1]));
                            
                            
                            /////////////////////////////////////////////////////////////
                            if ($pnrRetrieve->status === Result::STATUS_OK) {
                                    $FareInformation[] = [
                                        "PaxType" => $pnrRetrieve->response->tstData->fareData->monetaryInfo[1]->amount ?? '',
                                        "PaxBaseFare" => $pnrRetrieve->response->tstData->fareData->monetaryInfo[1]->amount ?? '',
                                        "PaxFuelSurcharge" => 0,
                                        "PaxOtherTax" => 0,
                                        "PaxTotalFare" =>  $input['amount'] ?? $pnrRetrieve->response->tstData->fareData->monetaryInfo[0]->amount ?? '',
                                        "PaxDiscount" => 0,
                                        "PaxCashBack" => 0,
                                        "PaxTDS" => 0,
                                        "PaxServiceTax" => 0,
                                        "PaxTransactionFee" => 0,
                                        "TravelFee" => 0,
                                        "Discount" => 0,
                                        "K3" => 265,
                                        "CGST" => 0,
                                        "SGST" => 0,
                                        "IGST" => 0,
                                        "UTGST" => 0,
                                    ];
                            
                                       
                                    $booking = $pnrRetrieve->response;
                                    $longFreetext = $str = (isset($booking->dataElementsMaster->dataElementsIndiv[3]->otherDataFreetext->longFreetext) ? ($booking->dataElementsMaster->dataElementsIndiv[3]->otherDataFreetext->longFreetext) : '');
                                    $longFreetext = substr($str, (strpos($str, "-")) + 1, 10);
                                        
                                    $FlightDetails = [];

                                    foreach ($pnrRetrieve->response->originDestinationDetails->itineraryInfo as $segkey => $segment) {
                                        if ($segkey > 0) {
                                            $segdata = [
                                               "Leg" => 1,
                                                "FlightCount" => 1,
                                                "DepartAirportCode" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartAirportName" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartCityName" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartTerminal" => $segment->flightDetail->departureInformation->departTerminal ?? '',
                                                "DepartDateTime" => $segment->travelProduct->product->depTime ??''.$segment->travelProduct->product->depDate ??'',
                                                "DepartDate" => $segment->travelProduct->product->depDate ??'',
                                                "ArrivalAirportCode" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalAirportName" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalCityName" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalTerminal" => $segment->flightDetail->arrivalStationInfo->terminal ?? '',
                                                "ArrivalDateTime" => $segment->travelProduct->product->arrTime??''.$segment->travelProduct->product->arrDate??'' ,
                                                "ArrivalDate" => $segment->travelProduct->product->arrDate??'' ,
                                                "FlightNumber" => $segment->travelProduct->productDetails->identification ?? '',
                                                "AirLineCode" => $segment->travelProduct->companyDetail->identification ?? '',
                                                "AirLineName" => $segment->travelProduct->companyDetail->identification ?? '',
                                                "Duration" => $segment->flightDetail->productDetails->duration,
                                                "AvailableSeats" => $segment->flightDetail->productDetails->duration,
                                                "EquipmentType" =>  $segment->flightDetail->productDetails->equipment,
                                                "MarketingCarrier" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingCarrier" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingCarrierName" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingFlightNumber" => $segment->travelProduct->companyDetail->identification,
                                                "AirLinePNR" => $segment->itineraryReservationInfo->reservation->controlNumber?? '',
                                                "TravelClass" => $segment->travelProduct->productDetails->classOfService ?? '',
                                                "TrackID" =>$segment->itineraryReservationInfo->reservation->controlNumber?? '',
                                                "BookingCode" => null,
                                                "BaggageDetails" => $pnrRetrieve->response->tstData->fareBasisInfo->fareElement->baggageAllowance ?? "",
                                                "NumberOfStops" => $segment->flightDetail->productDetails->numOfStops,
                                                "ViaSector" => null,
                                                "TicketNumber" => $longFreetext,
                                            ];

                                            array_push($FlightDetails, $segdata);
                                        }
                                    }

                                    is_array($booking->travellerInfo) ? $travellerInfo = $booking->travellerInfo : $travellerInfo = [$booking->travellerInfo];
                                    $PassengerDetails = [];
                                    
                                    
                                        $book = new Booking;
                                        
                                        $book->gds_pnr = $pnrRetrieve->response->pnrHeader->reservationInfo->reservation->controlNumber ?? '';
                                        $seg = [];
                                        foreach ($pnrRetrieve->response->originDestinationDetails->itineraryInfo as $segkey => $segment) {
                                            if ($segkey > 0) {
                                                $segdata = [
                                                    'operatingcompany' => $segment->travelProduct->companyDetail->identification ?? '',
                                                    'marketingcompany' => $segment->travelProduct->companyDetail->identification ?? '',
                                                    'flightnumber' => $segment->travelProduct->productDetails->identification ?? '',
                                                    'departurelocation' => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                    'departureterminal' => $segment->flightDetail->departureInformation->departTerminal ?? '',
                                                    'departuredate' => $segment->travelProduct->product->depDate ?? '',
                                                    'departuretime' => $segment->travelProduct->product->depTime ?? '',
                                                    'arrivallocation' => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                    'arrivalterminal' => $segment->flightDetail->arrivalStationInfo->terminal ?? '',
                                                    'arrivaldate' => $segment->travelProduct->product->arrDate ?? '',
                                                    'arrivaltime' => $segment->travelProduct->product->arrTime ?? '',
                                                    'journeytime' => $segment->flightDetail->productDetails->duration ?? '',
                                                    'serviceclass' => $segment->travelProduct->productDetails->classOfService ?? '',
                                                    'seat' => '',
                                                    'meal' => '',

                                                ];
                                                array_push($seg, $segdata);
                                            }
                                        }
                                        $book->itinerary =  json_encode($FlightDetails, true);
                                        is_array($booking->travellerInfo) ? $travellerInfo = $booking->travellerInfo : $travellerInfo = [$booking->travellerInfo];
                                        $PassengerDetails = [];
                                        foreach ($travellerInfo as $travellers) {
                                            $ticketNo = $travellers->elementManagementPassenger->reference->number;
    
                                            // dd($ticketNo);
    
                                            is_array($travellers->passengerData) ? $travellerData = $travellers->passengerData : $travellerData = [$travellers->passengerData];
    
                                            foreach ($travellerData as $person) {
    
                                                $Passenger = [
                                                    "ReferenceNo" => "",
                                                    "TrackID" => "",
                                                    "Title" => "MR",
                                                    "FirstName" => $person->travellerInformation->passenger->firstName ?? '',
                                                    "MiddleName" => null,
                                                    "LastName" => $person->travellerInformation->traveller->surname ?? '',
                                                    "PaxTypeCode" => $person->travellerInformation->passenger->type ?? '',
                                                    "Gender" => "",
                                                    "DOB" => null,
                                                    "TicketID" => $ticketNo ?? '',
                                                    "TicketNumber" => $longFreetext ?? '',
                                                    "IssueDate" => "",
                                                    "Status" => "Ticketed",
                                                    "ModifyStatus" => "",
                                                    "ValidatingAirline" => " ",
                                                    "FareBasis" => null,
                                                    "Baggage" => null,
                                                    "BaggageAllowance" => $pnrRetrieve->response->tstData->fareBasisInfo->fareElement->baggageAllowance?? '',
                                                    "ChangePenalty" => null,
                                                ];
                                                array_push($PassengerDetails, $Passenger);
                                            }
                                        }
                                        $book->passenger = json_encode($PassengerDetails, true);
                                        $book->email = $pnrRetrieve->response->dataElementsMaster->dataElementsIndiv[0]->otherDataFreetext->longFreetext ?? '';
                                        $book->mobile = $pnrRetrieve->response->dataElementsMaster->dataElementsIndiv[1]->otherDataFreetext->longFreetext ?? '';
                                        $CabIn  =  $booking->tstData->fareBasisInfo->fareElement->baggageAllowance ?? '15 kg .';
                                        $book->baggage = json_encode([[
                                            'CabIn' => $CabIn, 
                                            'CheckIn' => '7KG'
                                        ]], true);
                                        $book->booking_from = "AMADEUS";
                                        $book->trip =  "Domestic";
                                        
                                        $book->trip_type =  "Dow Roun One";
                                        $book->trip_stop = "No stop";
                                        $book->airline_pnr =  $pnrRetrieve->response->pnrHeader->reservationInfo->reservation->controlNumber ?? '';
                                        
                                        $book->booking_id = "WT0000" .$pnrRetrieve->response->pnrHeader->reservationInfo->reservation->controlNumber ?? '' ;
                                        $book->fare = json_encode($FareInformation, true);
                                        $book->logs_id = $pnrRetrieveAndDisplay->responseXml ?? "";
                                        $book->status = "Ticketed";
                                        
                                        $usermobile = User::where('phone', $phonenumber)->pluck('id') ?? '';
                                        $useremail = User::where('email', $email)->pluck('id') ?? '';
                                        if (isset($usermobile[0])) {
                                            $book->user_id = $usermobile[0] ?? '';
                                        } elseif (isset($useremail[0])) {
                                            $book->user_id = $useremail[0] ?? '';
                                        
                                        } else {
                                            $user = new User;
                                            $user->name = $activeTravellers['adults']['fistName'][0] . " " . $activeTravellers['adults']['lastName'][0] ?? '';
                                            $user->email = strtolower($email) ?? '';
                                            $user->phone = $phonenumber ?? '';
                                            $user->password = Hash::make("New@1234") ?? '';
                                            $user->save();

                                            $book->user_id = $user->id;
                                        }

                                        $book->save();
                                        
                                        $client->securitySignOut();
                                            
                                        if ($r == 1) {
                                             $FristpnrRetrieve = $book;
                                        }
                                        if ($r == 2) {
                                            
                                            ///////////////////////////////////////////////////////////////////////////////////
                                            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            ///////////////////////////////////////////////////////////////////////////////////
                                            $date  = $time = '';
                                            foreach (json_decode($book->itinerary) as $key => $itinerary){
                                                if($key == 0){
                                                    $date =  NOgetDate_fn($itinerary->DepartDate) ;
                                                    $date2 =  getDate_fn($itinerary->DepartDate) ?? date('d-m-Y', strtotime($itinerary->DepartDate)) ;
                                                    $time =  date('H:i', strtotime($itinerary->DepartDateTime)) ;
                                                }
                                            }
                                           
                                            $from = json_decode($book->itinerary)[0]->DepartCityName ?? json_decode($book->itinerary)->DepartCityName ?? '';
                                            $to = json_decode($book->itinerary)[count(json_decode($book->itinerary))-1]->ArrivalCityName ?? json_decode($book->itinerary)->ArrivalCityName ?? '';
                                            foreach (json_decode($book->passenger) as $passenger){}
                                            $name = $passenger->FirstName ?? "customer";
                                            $name =  preg_replace('/\s+/', '%20', $name);
                                            $PhoneTo = $book->mobile;
                                            $PhoneTo =  preg_replace('/\s+/', '%20', $PhoneTo);
                                            $from = AirportiatacodesController::getCity($from);
                                            $from =  preg_replace('/\s+/', '%20', $from);
                                            $to = AirportiatacodesController::getCity($to);
                                            $to =  preg_replace('/\s+/', '%20', $to);
                                            $pnr = $book->gds_pnr;
                                            $pnr =  preg_replace('/\s+/', '%20', $pnr);
                                            $date = preg_replace('/\s+/', '%20', $date);;
                                            $Time = preg_replace('/\s+/', '%20', $time);;
                                            
                                            $curl = curl_init();
                                            curl_setopt_array($curl, array(
                                                CURLOPT_URL => 'https://app-vcapi.smscloud.in/fe/api/v1/send?username=wagnistrip.api&apiKey=eRXjt4GR3ekxHwYHTSRRC1uCgvjU2gbV&unicode=false&from=WAGNIS&to='.$PhoneTo.'&text=Dear%20'.$name.',%20We%27re%20Happy%20to%20Confirm%20your%20Booking.%20PNR-'.$pnr.'%20from%20'.$from.'%20to%20'.$to.'%20at%20'.$date.'%20'.$Time.'.%20For%20any%20query%20click%20https://wagnistrip.com',
                                                CURLOPT_RETURNTRANSFER => true,
                                                CURLOPT_ENCODING => '',
                                                CURLOPT_MAXREDIRS => 10,
                                                CURLOPT_TIMEOUT => 0,
                                                CURLOPT_FOLLOWLOCATION => true,
                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                CURLOPT_CUSTOMREQUEST => 'GET',
                                            ));
                                            $response = curl_exec($curl);
                                            curl_close($curl);
                                            
                                            
                                            
                                            $both['both'] = [
                                                'FristpnrRetrieve'=>$FristpnrRetrieve , 
                                                'book'=>$book ,
                                            ];
                                            
                                            $both['bookings'] =  $FristpnrRetrieve;
                                            $both['email'] =  $email??$useremail[0]?? 'customercare@wagnistrip.com';
                                            $both['title'] =   "Flight Ticket ".$activeTravellers['adults']['fistName'][0]??'';
                                            
                                            $files = PDF::loadView('flight-pages/booking-confirm/edit-roundtrip-amd-flight-booking-confirm-pdf', $both);
      
                                            \Mail::send('flight-pages.booking-confirm.amd-email_content', $both, function($message)use($both ,$files) {
                                                $message->to($both['email'])
                                                        ->subject( $both['title'])
                                                        ->attachData($files->output(), $both['title'].".pdf");
                                              
                                            });
                                            \Mail::send('flight-pages.booking-confirm.amd-email_content', $both, function($message)use( $both ,$files) {
                                                $message->to("customercare@wagnistrip.com")
                                                        ->subject( $both['title'])
                                                        ->attachData($files->output(), $both['title'].".pdf");
                                                     
                                            });
                                                                               
                                            ///////////////////////////////////////////////////////////////////////////////////
                                            ///////////////////////////////////////////////////////////////////////////////////
                                            $both = [
                                                'FristpnrRetrieve'=>$FristpnrRetrieve , 
                                                'book'=>$book ,
                                            ];
                                            return view('flight-pages/booking-confirm/edit-roundtrip-amd-flight-booking-confirm', compact('both'));
                            
                                            
                                        }
                            } else {
                                // dd($pnrRetrieve);
                                return redirect()->route('error')->with('message', 'pnrRetrieve  ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank, Kindly contact on this toll free number 08069145571 for further concern.');

                            }
                        } else {
                            return redirect()->route('error')->with('message', 'pnrReply  ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank,  Kindly contact on this toll free number 08069145571 for further concern.');

                        }

                    } else {
                        return redirect()->route('error')->with('message', 'createTstResponse  ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank,  Kindly contact on this toll free number 08069145571 for further concern.');

                    }

                } else {
                    return redirect()->route('error')->with('message', 'pricingResponse -----  Your booking could not be completed as we did not receive successful authorisation of the payment from your bank,  Kindly contact on this toll free number 08069145571 for further concern.');

                }

            } else {
                return redirect()->route('error')->with('message', 'createdPnr   -----   Your booking could not be completed as we did not receive successful authorisation of the payment from your bank, Kindly contact on this toll free number 08069145571 for further concern.');

            }

        }        
        
    }
    
    
    public static function onewayGLResponse($req){    // copied and changed app/Http/Controllers/Airline/Galileo/TicketingController.php's   ReturnUrl function
        $uniqueid = $req['uniqueid'];
        $type = !empty($req['type']) ? $req['type'] : '';
        $orderId = $uniqueid;
        $get_data = Booking::where('booking_id', $orderId)->first();
        if (!empty($get_data)) {
            return view('flight-pages.booking-confirm.oneway-gal-flight-booking-confirm')->with('bookings', $get_data);
        }
                // success query
                $bookingData = Cart::where('uniqueid', $uniqueid)->first();
                $getsession = json_decode($bookingData['getsession'], true);
                // dd($getsession);
                $AddPassengerDetailsBody = [
                    "ClientCode" => "MakeTrueTrip",
                    "SessionID" => $getsession['SessionID'],
                    "Key" => $getsession['Key'],
                    "ReferenceNo" => $getsession['ReferenceNo'],
                    "CustomerInfo" => [
                        "Email" => $bookingData['email'] ?? "customercare@wagnistrip.com",
                        "Mobile" => $bookingData['phonenumber'] ?? "+917669988012",
                        "Address" => "No. 5-b/13, Land Area Measuring 200Sq. YDS., Tilak Nagar, New Delhi (India) Pin: 110018",
                        "City" => "Delhi",
                        "State" => "Delhi",
                        "CountryCode" => "IN",
                        "CountryName" => "India",
                        "ZipCode" => "110018",
                        "PassengerDetails" => json_decode($bookingData['travllername'], true),
                        "PassengerTicketDetails" => [],
                        "Payment" => (object) [],
                    ],
                    "SSRInfo" => [],
                    "TotalAmount" => "0",
                    "SSRAmount" => 0,
                    "Discount" => 0,
                    "GrandTotalFare" => "0",
                    "IsGSTProvided" => false,
                ];
                $AddPassengerDetails = AuthenticateController::callApiWithHeadersGal("AddPassengerDetails", $AddPassengerDetailsBody);
                $BookingBody = [
                    "ClientCode" => "MakeTrueTrip",
                    "SessionID" => $getsession['SessionID'],
                    "Key" => $getsession['Key'],
                    "ReferenceNo" => $getsession['ReferenceNo'],
                    "Provider" => $getsession['Provider'],
                ];
                $Booking = AuthenticateController::callApiWithHeadersGal("Booking", $BookingBody);
                if (isset($Booking['Status'])) {
                    $TicketBody = [
                        "ClientCode" => "MakeTrueTrip",
                        "SessionID" => $getsession['SessionID'],
                        "Key" => $AddPassengerDetails['Key'],
                        "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                        "Provider" => $getsession['Provider'],
                    ];
                    $Ticket = AuthenticateController::callApiWithHeadersGal("Ticket", $TicketBody);
                    if (isset($Ticket['Status'])) {
                        $getBookingBody = [
                            "ClientCode" => "MakeTrueTrip",
                            "SessionID" => $getsession['SessionID'],
                            "Key" => $AddPassengerDetails['Key'],
                            "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                            "PnrNo" => "",
                            "Provider" => $getsession['Provider'],
                            "FirstName" => "",
                            "LastName" => "",
                            "From" => "",
                            "To" => "",
                        ];
                        $getBooking = AuthenticateController::callApiWithHeadersGal("GetBookingDetails", $getBookingBody);
                        
                        if(($getBooking['Status'] == "Hold") || ($getBooking['Status'] == 'Success')){
                            
                            $FareInformation[] = [
                                        "PaxType" =>  '',
                                        "PaxBaseFare" => '',
                                        "PaxFuelSurcharge" => 0,
                                        "PaxOtherTax" => 0,
                                        "PaxTotalFare" =>$buzz['amount'] ?? '',
                                        "PaxDiscount" => 0,
                                        "PaxCashBack" => 0,
                                        "PaxTDS" => 0,
                                        "PaxServiceTax" => 0,
                                        "PaxTransactionFee" => 0,
                                        "TravelFee" => 0,
                                        "Discount" => 0,
                                        "K3" => 265,
                                        "CGST" => 0,
                                        "SGST" => 0,
                                        "IGST" => 0,
                                        "UTGST" => 0,
                                    ];
                            $saveBooking = new Booking;
                            $logs_id = GalileoFlightLog::where('session_id', '=', $getsession['SessionID'])->first('id');
                            $userId = User::where('phone', $bookingData['phonenumber'])->orWhere('email', $bookingData['email'])->first('id');

                            if (empty($userId->id)) {
                                $user = new User;
                                $user->name = json_encode($bookingData['name']);
                                $user->email = strtolower($bookingData['email']);
                                $user->phone = $bookingData['phonenumber'];
                                $user->password = Hash::make("WtUser@123");
                                $user->save();
                                $userId = $user->id;
                            } else {
                                $userId = $userId->id;
                            }
                            $saveBooking->booking_from = "GALILEO" . $getBooking['Status']??'Dev';
                            $saveBooking->booking_id = $uniqueid;
                            $saveBooking->trip = $getBooking['AirBookingResponse'][0]['Trip'] ?? "0";
                            $saveBooking->trip_type = $getBooking['AirBookingResponse'][0]['TripType'] ?? "0";
                            $saveBooking->trip_stop = "0-Stop";
                            $saveBooking->gds_pnr = $getBooking['AirBookingResponse'][0]['PNR'] ??  " ";
                            $saveBooking->airline_pnr = $getBooking['AirBookingResponse'][0]['FlightDetails'][0]['AirLinePNR'] ?? ' ';
                            $saveBooking->email = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Email'] ?? strtolower($bookingData['email']) ;
                            $saveBooking->mobile = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Mobile'] ?? $bookingData['phonenumber'] ;
                            $saveBooking->itinerary = json_encode($getBooking['AirBookingResponse'][0]['FlightDetails'], true);
                                
                            
                            $saveBooking->baggage = json_encode([[
                                        'CabIn' =>  $getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'][0]['BaggageAllowance']?? '',
                                        'CheckIn' => '7KG'
                            ]], true);
                            $saveBooking->passenger = json_encode($getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'], true);
                            $saveBooking->fare = json_encode($FareInformation, true);
                            $saveBooking->status = $getBooking['AirBookingResponse'][0]['BookingStatus'];
                            $saveBooking->logs_id = $logs_id->id;
                            $saveBooking->user_id = $userId;
                            $saveBooking->save();
                            $bookings['bookings'] = $saveBooking;
                                            
                            $bookings['email'] =  $saveBooking->email ??$bookingData['email'] ?? 'customercare@wagnistrip.com';
                            $bookings['title'] =   "Flight Ticket ".json_encode($bookingData['name'])??'';
                            
                            $files = PDF::loadView('flight-pages.booking-confirm.oneway-gal-flight-booking-confirm-pdf', $bookings);
                                            
                            \Mail::send('booking-pdf.flight.Gal-Tic-Mail', $bookings, function($message)use( $bookings ,$files) {
                                                $message->to("customercare@wagnistrip.com")
                                                        ->subject( $bookings['title'])
                                                        ->attachData($files->output(), $bookings['title'].".pdf");
                            });  
                            \Mail::send('booking-pdf.flight.Gal-Tic-Mail', $bookings, function($message)use( $bookings ,$files) {
                                                $message->to($bookings['email'])
                                                        ->subject( $bookings['title'])
                                                        ->attachData($files->output(), $bookings['title'].".pdf");
                            });  
                            
                            $date  = $time = '';
                            foreach (json_decode($saveBooking->itinerary) as $key => $itinerary){
                                if($key == 0){
                                    $date =  NOgetDateFormat_db($itinerary->DepartDateTime)?? "" ;
                                    // $date2 =  getDate_fn($itinerary->DepartDate) ?? date('d-m-Y', strtotime($itinerary->DepartDate)) ;
                                    $time =  date('H:i', strtotime($itinerary->DepartDateTime)) ;
                                }
                            }
                            $from = json_decode($saveBooking->itinerary)[0]->DepartCityName ?? json_decode($saveBooking->itinerary)->DepartCityName ?? '';
                            $to = json_decode($saveBooking->itinerary)[count(json_decode($saveBooking->itinerary))-1]->ArrivalCityName ?? json_decode($saveBooking->itinerary)->ArrivalCityName ?? '';
                            foreach (json_decode($saveBooking->passenger) as $passenger){}
                            $name = $passenger->FirstName ?? "customer";
                            $name =  preg_replace('/\s+/', '%20', $name);
                            
                            $PhoneTo = $saveBooking->mobile;
                            $PhoneTo =  preg_replace('/\s+/', '%20', $PhoneTo);
                            
                            $from = AirportiatacodesController::getCity($from);
                            $from =  preg_replace('/\s+/', '%20', $from);
                            
                            $to = AirportiatacodesController::getCity($to);
                            $to =  preg_replace('/\s+/', '%20', $to);
                            
                            $pnr = $saveBooking->gds_pnr;
                            $pnr =  preg_replace('/\s+/', '%20', $pnr);
                            
                            // $date = "03-May-2023";
                            $Time = preg_replace('/\s+/', '%20', $time);
                            $date =  preg_replace('/\s+/', '%20', $date);
                            
                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => 'https://app-vcapi.smscloud.in/fe/api/v1/send?username=wagnistrip.api&apiKey=eRXjt4GR3ekxHwYHTSRRC1uCgvjU2gbV&unicode=false&from=WAGNIS&to='.$PhoneTo.'&text=Dear%20'.$name.',%20We%27re%20Happy%20to%20Confirm%20your%20Booking.%20PNR-'.$pnr.'%20from%20'.$from.'%20to%20'.$to.'%20at%20'.$date.'%20'.$Time.'.%20For%20any%20query%20click%20https://wagnistrip.com',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'GET',
                            ));
                            $response = curl_exec($curl);
                            curl_close($curl);
                            
                            

                            return view('flight-pages.booking-confirm.oneway-gal-flight-booking-confirm')->with('bookings', $saveBooking);
                            
                            
                            
                        }else{
                            return redirect()->route('error')->with('msg', "Your Booking Has Been " . $getBooking['Status'] . "! , Kindly contact on this toll free number 08069145571 for further concern.");
                        }
                    } else {
                        return redirect()->route('error')->with('msg', "Your Booking Has Been " . $Ticket['Status'] . "! ,Kindly contact on this toll free number 08069145571 for further concern.");
                    }
                } else {
                    return redirect()->route('error')->with('msg', "Your Ticket Booking Faild.Kindly contact on this toll free number 08069145571 for further concern.");
                }
    }
    public function onewayAmedeusResponse($req){    // copied app/Http/Controllers/Airline/Amadeus/PNR_AddMultiElementsController.php's  PNR_AddMultiElements

        // if($request['mode']== "DC"){
        //     $request['amount'] = $request['amount'] - (($request['amount']*0.99)/100)  ;
        // }elseif($request['mode']== "CC"){
        //     $request['amount'] = $request['amount'] - (($request['amount']*1.96)/100)  ;
        // }
        $uniqueid = $req['uniqueid'];
        $type = $req['type'];
        $amount = $req['fare'];
        $bookingData = Booking::where('logs_id', $uniqueid)->first();
        if(isset($bookingData['id'])){
            return view('flight-pages.booking-confirm.oneway-amd-flight-booking-confirm')->with('bookings', $bookingData);
        }
        
        
        // if ('success' != $_POST["status"]) {
        //       return redirect()->route('error')->with('message', 'Payment unsuccessful please click here to search agen. Kindly contact on this toll free number 08069145571 for further concern.');
        // }
        // if ($signature != $_POST["txnid"]) {
        //       return redirect()->route('error')->with('message', 'Payment unsuccessful please click here to search agen. Kindly contact on this toll free number 08069145571 for further concern.');
        //     //  die("Something is wrong");
        // }
        $bookingData = Cart::where('uniqueid', $uniqueid)->first();
        // dd($bookingData , $request['amount']);
        $otherInformation = json_decode($bookingData['otherInformation'], true);

        $marketingCompany = $otherInformation['marketingCompany'] ?? $otherInformation['marketingCompany_1'] ?? $otherInformation['outbound_marketingCompany'] ?? $otherInformation['outbound_marketingCompany_1'];
        $activeTravellers = json_decode($bookingData['travllername'], true);

        $phonenumber = $bookingData['phonenumber'];
        $email = $bookingData['email'];
        $uniqueid = $bookingData['uniqueid'];
        $HeaderController = new AmadeusHeaderController;
        $params = $HeaderController->State(true);
        $client = new Client($params);
        $client->setSessionData(json_decode($bookingData['getsession'], true));
        $passengers = json_decode($bookingData['travellerquantity'], true);

        $travellers = [];
        $pricing = [];

        // dd($request->all(),$bookingData);
        
        $travellerData =  [];
        if ((int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] === 0) {
            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {

                $trvlrs = new Traveller([
                    'number' => $i,
                    'firstName' => $activeTravellers['adults']['fistName'][$i],
                    'lastName' => $activeTravellers['adults']['lastName'][$i],
                    'type' => 'ADT',
                ]);
                array_push($travellers, $trvlrs);
                
                $TraData=[
                    'title' => $activeTravellers['adults']['title'][$i],
                    'firstName' => $activeTravellers['adults']['fistName'][$i],
                    'lastName' => $activeTravellers['adults']['lastName'][$i],
                    'type' => 'ADT',
                ];
                array_push($travellerData, $TraData);
            }

            $pricing = new TicketCreateTstFromPricingOptions([
                'pricings' => [
                    new Pricing([
                        'tstNumber' => 1,
                    ]),
                ],
            ]);
        } elseif ((int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] > 0) {
            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {

                if ($passengers['noOfInfants'] != 0 && $i < $passengers['noOfInfants']) {
                    if ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] == $activeTravellers['infants']['lastName'][$i]) {
                        $trvlrs = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'travellerType' => null,
                            'infant' => new Traveller([
                                'firstName' => 'Junior',
                                'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                            ]),
                        ]);
                        $TraData=[
                            'title' => $activeTravellers['adults']['title'][$i],
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i]?? '',
                            'type' => 'ADT',
                        ];

                    } elseif ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] != $activeTravellers['infants']['lastName'][$i]) {
                        $trvlrs = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'infant' => new Traveller([
                                'firstName' => $activeTravellers['infants']['fistName'][$i],
                                'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                            ]),
                        ]);
                        $TraData=[
                            'title' => $activeTravellers['adults']['title'][$i],
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                        ];

                    } else {
                        $trvlrs = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'infant' => new Traveller([
                                'firstName' => $activeTravellers['infants']['fistName'][$i],
                                'lastName' => $activeTravellers['infants']['lastName'][$i],
                                'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                            ]),
                        ]);
                        $TraData=[
                            'title' => $activeTravellers['adults']['title'][$i],
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                        ];

                    }
                } else {
                    $trvlrs = new Traveller([
                        'number' => $i,
                        'firstName' => $activeTravellers['adults']['fistName'][$i],
                        'lastName' => $activeTravellers['adults']['lastName'][$i],
                        'type' => 'ADT',
                    ]);
                    $TraData=[
                        'title' => $activeTravellers['adults']['title'][$i],
                        'firstName' => $activeTravellers['adults']['fistName'][$i],
                        'lastName' => $activeTravellers['adults']['lastName'][$i],
                        'type' => 'ADT',
                    ];

                }
                array_push($travellers, $trvlrs); 
                
                array_push($travellerData, $TraData);

            }

            $pricing = new TicketCreateTstFromPricingOptions([
                'pricings' => [
                    new Pricing([
                        'tstNumber' => 1,
                    ]),
                    new Pricing([
                        'tstNumber' => 2,
                    ]),
                ],
            ]);
        } elseif ((int) $passengers['noOfChilds'] > 0 && (int) $passengers['noOfInfants'] === 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {

                $trvlrs1 = new Traveller([
                    'number' => $i,
                    'firstName' => $activeTravellers['adults']['fistName'][$i],
                    'lastName' => $activeTravellers['adults']['lastName'][$i],
                    'type' => 'ADT',
                ]);
                array_push($travellers, $trvlrs1);
                
                $TraData9=[
                        'title' => $activeTravellers['adults']['title'][$i],
                        'firstName' => $activeTravellers['adults']['fistName'][$i],
                        'lastName' => $activeTravellers['adults']['lastName'][$i],
                        'type' => 'ADT',
                ];
                array_push($travellerData, $TraData9);
            }
            for ($i = 0; $i < $passengers['noOfChilds']; $i++) {

                $trvlrs2 = new Traveller([
                    'number' => array_sum([$passengers['noOfAdults'], $i]),
                    'firstName' => $activeTravellers['childs']['fistName'][$i],
                    'lastName' => $activeTravellers['childs']['lastName'][$i],
                    'travellerType' => Traveller::TRAV_TYPE_CHILD,
                ]);

                array_push($travellers, $trvlrs2);
                 $TraData=[
                        'title' => $activeTravellers['childs']['title'][$i],
                        'firstName' => $activeTravellers['childs']['fistName'][$i],
                        'lastName' => $activeTravellers['childs']['lastName'][$i],
                        'type' => 'ADT',
                ];
                 array_push($travellerData, $TraData);

            }
            $pricing = new TicketCreateTstFromPricingOptions([
                'pricings' => [
                    new Pricing([
                        'tstNumber' => 1,
                    ]),
                    new Pricing([
                        'tstNumber' => 2,
                    ]),
                ],
            ]);
        } elseif ((int) $passengers['noOfChilds'] > 0 && (int) $passengers['noOfInfants'] > 0) {
            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {

                if ($passengers['noOfInfants'] != 0 && $i < $passengers['noOfInfants']) {
                    if ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] == $activeTravellers['infants']['lastName'][$i]) {
                        $trvlrs1 = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'infant' => new Traveller([
                                'firstName' => 'Junior',
                                'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                            ]),
                        ]);
                         $TraData=[
                            'title' => $activeTravellers['adults']['title'][$i],
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                        ];

                    } elseif ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] != $activeTravellers['infants']['lastName'][$i]) {
                        $trvlrs1 = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'infant' => new Traveller([
                                'firstName' => $activeTravellers['infants']['fistName'][$i],
                                'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                            ]),
                        ]);
                         $TraData=[
                            'title' => $activeTravellers['adults']['title'][$i]?? '',
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                        ];

                    } else {
                        $trvlrs1 = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'infant' => new Traveller([
                                'firstName' => $activeTravellers['infants']['fistName'][$i],
                                'lastName' => $activeTravellers['infants']['lastName'][$i],
                                'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                            ]),
                        ]);
                         $TraData=[
                            'title' => $activeTravellers['adults']['title'][$i]??'',
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                        ];

                    }
                    array_push($travellers, $trvlrs1);
                    
                    array_push($travellerData, $TraData);
                } else {
                    $trvlrs2 = new Traveller([
                        'number' => $i,
                        'firstName' => $activeTravellers['adults']['fistName'][$i],
                        'lastName' => $activeTravellers['adults']['lastName'][$i],
                        'type' => 'ADT',
                    ]);
                    $TraData5=[
                            'title' => $activeTravellers['adults']['title'][$i],
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                    ];
                    array_push($travellers, $trvlrs2);
                    array_push($travellerData, $TraData5);
                }
            }

            for ($i = 0; $i < $passengers['noOfChilds']; $i++) {

                $trvlrs3 = new Traveller([
                    'number' => array_sum([$passengers['noOfAdults'], $i]),
                    'firstName' => $activeTravellers['childs']['fistName'][$i],
                    'lastName' => $activeTravellers['childs']['lastName'][$i],
                    'travellerType' => Traveller::TRAV_TYPE_CHILD,
                ]);
                    $TraData4=[
                            'title' => $activeTravellers['childs']['title'][$i],
                            'firstName' => $activeTravellers['childs']['fistName'][$i],
                            'lastName' => $activeTravellers['childs']['lastName'][$i],
                            'type' => 'CHD',
                    ];

                array_push($travellers, $trvlrs3);
                    array_push($travellerData, $TraData4);

            }
            $pricing = new TicketCreateTstFromPricingOptions([
                'pricings' => [
                    new Pricing([
                        'tstNumber' => 1,
                    ]),
                    new Pricing([
                        'tstNumber' => 2,
                    ]),
                    new Pricing([
                        'tstNumber' => 3,
                    ]),

                ],
            ]);
        }
        // dd($activeTravellers);
        $opt = new PnrCreatePnrOptions();
        $opt->actionCode = PnrCreatePnrOptions::ACTION_NO_PROCESSING; //0 Do not yet save the PNR and keep in context.
        $opt->travellers = $travellers;
        $opt->elements[] = new Ticketing([
            'ticketMode' => Ticketing::TICKETMODE_OK,
        ]);
        $opt->itineraries[] = new Itinerary([
            'segments' => [
                new Miscellaneous([
                    'status ' => Segment::STATUS_CONFIRMED,
                    'company' => '1A',
                    'date' => \DateTime::createFromFormat('Ymd', date('Ymd'), new \DateTimeZone('UTC')),
                    'cityCode' => 'DEL',
                    'freeText' => 'WAGNISTRIP (OPC) PRIVATE LIMITED',
                    'quantity' => array_sum([$passengers['noOfAdults'], $passengers['noOfChilds']]),
                ]),
            ],
        ]);
        $opt->elements[] = new Contact([
            'type' => Contact::TYPE_PHONE_MOBILE,
            'value' => $phonenumber ?? '7669988012',

        ]);
        $opt->elements[] = new Contact([
            'type' => Contact::TYPE_EMAIL,
            'value' => $email ?? "customercare@wagnistrip.com",
        ]);
        
        $opt->elements[] = new FormOfPayment([
            'type' => FormOfPayment::TYPE_CASH,
        ]);
        
        // https://github.com/amabnl/amadeus-ws-client/blob/master/docs/samples/pnr-create-modify.rst#form-of-payment-fp use this link for deatiles
        // $opt->elements[] = new FormOfPayment([
        //     'type' => FormOfPayment::TYPE_CREDITCARD,
        //     'creditCardType' => 'VI',
        //     'creditCardNumber' => '5598670000002763',
        //     'creditCardExpiry' => '0323',
        //     'creditCardCvcCode' => '',
        //     'creditCardHolder' => 'MAKE TRUE TRIP'
        // ]);
        
        $createdPnr = $client->pnrCreatePnr($opt);

        // dd($opt , $createdPnr);
        if ($createdPnr->status === Result::STATUS_OK) {
            $getsession = $client->getSessionData();
            $client->setSessionData($getsession);



            $pricingResponse = $client->farePricePnrWithBookingClass(
                new FarePricePnrWithBookingClassOptions([
                    'validatingCarrier' => $marketingCompany,
                ])
            );
            if ($pricingResponse->status === Result::STATUS_OK) {
                $getsession = $client->getSessionData();
                $client->setSessionData($getsession);
                $createTstResponse = $client->ticketCreateTSTFromPricing(
                    $pricing
                );

                if ($createTstResponse->status === Result::STATUS_OK) {
                    $getsession = $client->getSessionData();
                    $client->setSessionData($getsession);
                    $pnrReply = $client->pnrAddMultiElements(
                        new PnrAddMultiElementsOptions([
                            'actionCode' => PnrAddMultiElementsOptions::ACTION_END_TRANSACT, //ET: END AND RETRIEVE
                        ])
                    );
                    if ($pnrReply->status === Result::STATUS_OK) {
                        
                        $getsession = $client->getSessionData();
                        $client->setSessionData($getsession);
                        sleep(10);
                        $createdPnrForRetriever1 = $pnrReply->response->pnrHeader->reservationInfo->reservation->controlNumber;
                        
                        $pnrRetrieve = $client->pnrRetrieve(new PnrRetrieveOptions(['recordLocator' => $createdPnrForRetriever1]));
                        
                        // dd($pnrRetrieve);
                        
                        if ($pnrRetrieve->status === Result::STATUS_OK) {
                            $getsession = $client->getSessionData();
                            $client->setSessionData($getsession);
                            
                            $issueTicketResponse = $client->docIssuanceIssueTicket(
                                new DocIssuanceIssueTicketOptions([
                                    'options' => [
                                        DocIssuanceIssueTicketOptions::OPTION_ETICKET,
                                    ],
                                ])
                            );
                            
                            // if ($issueTicketResponse->status === Result::STATUS_OK) {
                                $getsession = $client->getSessionData();
                                $client->setSessionData($getsession);
                                
                                $createdPnrForRetriever2 = $pnrRetrieve->response->pnrHeader->reservationInfo->reservation->controlNumber;
                                $pnrRetrieveAndDisplay = $client->pnrRetrieve(
                                    new PnrRetrieveOptions(['recordLocator' => $createdPnrForRetriever2])
                                );
                                // dd($issueTicketResponse);
                                
                                // if ($pnrRetrieveAndDisplay->status === Result::STATUS_OK) {
                                    $booking = $pnrRetrieveAndDisplay->response;
                                    $longFreetext = $str = (isset($booking->dataElementsMaster->dataElementsIndiv[3]->otherDataFreetext->longFreetext) ? ($booking->dataElementsMaster->dataElementsIndiv[3]->otherDataFreetext->longFreetext) : '');
                                    $longFreetext = substr($str, (strpos($str, "-")) + 1, 10);
                                    
                                    // echo $longtextnumber;die;
                                    // print "<pre>";print_r($booking);die();
                                    // dd($booking);
                                    
                                    $getsession = $client->getSessionData();
                                    $client->setSessionData($getsession);

                                    // -------------------- Start Save Data From Pnr Informition For Amadeus --------------------

                                    $FlightDetails = [];
                                    // dd($booking);

                                    foreach ($booking->originDestinationDetails->itineraryInfo as $segkey => $segment) {
                                        if ($segkey > 0) {
                                            $segdata = [
                                                "Leg" => 1,
                                                "FlightCount" => $segkey,
                                                "DepartAirportCode" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartAirportName" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartCityName" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartTerminal" => $segment->flightDetail->departureInformation->departTerminal ?? '',
                                                "DepartDateTime" => $segment->travelProduct->product->depTime ??''.$segment->travelProduct->product->depDate ??'',
                                                "DepartDate" => $segment->travelProduct->product->depDate ??'',
                                                "ArrivalAirportCode" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalAirportName" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalCityName" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalTerminal" => $segment->flightDetail->arrivalStationInfo->terminal ?? '',
                                                "ArrivalDateTime" => $segment->travelProduct->product->arrTime??''.$segment->travelProduct->product->arrDate??'' ,
                                                "ArrivalDate" => $segment->travelProduct->product->arrDate??'' ,
                                                "FlightNumber" => $segment->travelProduct->productDetails->identification ?? '',
                                                "AirLineCode" => $segment->travelProduct->companyDetail->identification ?? '',
                                                "AirLineName" => $segment->travelProduct->companyDetail->identification ?? '',
                                                "Duration" => $segment->flightDetail->productDetails->duration,
                                                "AvailableSeats" => $segment->flightDetail->productDetails->duration,
                                                "EquipmentType" =>  $segment->flightDetail->productDetails->equipment,
                                                "MarketingCarrier" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingCarrier" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingCarrierName" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingFlightNumber" => $segment->travelProduct->companyDetail->identification,
                                                "AirLinePNR" => $segment->itineraryReservationInfo->reservation->controlNumber?? '',
                                                "TravelClass" => $segment->travelProduct->productDetails->classOfService ?? '',
                                                "TrackID" =>$segment->itineraryReservationInfo->reservation->controlNumber?? '',
                                                "BookingCode" => null,
                                                "BaggageDetails" => null,
                                                "NumberOfStops" => $segment->flightDetail->productDetails->numOfStops,
                                                "ViaSector" => null,
                                                "TicketNumber" => $longFreetext,
                                            ];

                                            array_push($FlightDetails, $segdata);
                                        }
                                    }
                                    
                                    // is_array($booking->travellerInfo) ? $travellerInfo = $booking->travellerInfo : $travellerInfo = [$booking->travellerInfo];
                                    $PassengerDetails = [];
                                    
                                    // foreach ($travellerInfo as $travellers) {
                                    //     $ticketNo = $travellers->elementManagementPassenger->reference->number;


                                    //     is_array($travellers->passengerData) ? $travellerDataByApi = $travellers->passengerData : $travellerDataByApi = [$travellers->passengerData];

                                    //     foreach ($travellerDataByApi as $person) {
                                            
                                    //     $Title = '';
                                    // $activeTravellers
                                    if(isset($activeTravellers['adults']['title'])){
                                        foreach($activeTravellers['adults']['title'] as $key => $value){
                                           $Passenger = [
                                                "ReferenceNo" => "",
                                                "TrackID" => "",
                                                "Title" => $value ?? "MR",
                                                "FirstName" => $activeTravellers['adults']['fistName'][$key] ?? '',
                                                "MiddleName" => null,
                                                "LastName" => $activeTravellers['adults']['lastName'][$key] ?? '',
                                                "PaxTypeCode" =>  'ADT',
                                                "Gender" => "",
                                                "DOB" => null,
                                                "TicketID" => $ticketNo ?? '',
                                                "TicketNumber" => $longFreetext ?? '',
                                                "IssueDate" => "",
                                                "Status" => "Ticketed",
                                                "ModifyStatus" => "",
                                                "ValidatingAirline" => " ",
                                                "FareBasis" => null,
                                                "Baggage" => null,
                                                "BaggageAllowance" => null,
                                                "ChangePenalty" => null,
                                            ];
                                            array_push($PassengerDetails, $Passenger); 
                                        }
                                    }
                                    if(isset($activeTravellers['childs']['title'])){
                                        foreach($activeTravellers['childs']['title'] as $key => $value){
                                           $Passenger = [
                                                "ReferenceNo" => "",
                                                "TrackID" => "",
                                                "Title" => $value ?? "MR",
                                                "FirstName" => $activeTravellers['childs']['fistName'][$key] ?? '',
                                                "MiddleName" => null,
                                                "LastName" => $activeTravellers['childs']['lastName'][$key] ?? '',
                                                "PaxTypeCode" =>  'CHD',
                                                "Gender" => "",
                                                "DOB" => null,
                                                "TicketID" => $ticketNo ?? '',
                                                "TicketNumber" => $longFreetext ?? '',
                                                "IssueDate" => "",
                                                "Status" => "Ticketed",
                                                "ModifyStatus" => "",
                                                "ValidatingAirline" => " ",
                                                "FareBasis" => null,
                                                "Baggage" => null,
                                                "BaggageAllowance" => null,
                                                "ChangePenalty" => null,
                                            ];
                                            array_push($PassengerDetails, $Passenger); 
                                        }
                                    }
                                    if(isset($activeTravellers['infants']['title'])){
                                        foreach($activeTravellers['infants']['title'] as $key => $value){
                                           $Passenger = [
                                                "ReferenceNo" => "",
                                                "TrackID" => "",
                                                "Title" => $value ?? "MISS",
                                                "FirstName" => $activeTravellers['infants']['fistName'][$key] ?? '',
                                                "MiddleName" => null,
                                                "LastName" => $activeTravellers['infants']['lastName'][$key] ?? '',
                                                "PaxTypeCode" =>  'INF',
                                                "Gender" => "",
                                                "DOB" => null,
                                                "TicketID" => $ticketNo ?? '',
                                                "TicketNumber" => $longFreetext ?? '',
                                                "IssueDate" => "",
                                                "Status" => "Ticketed",
                                                "ModifyStatus" => "",
                                                "ValidatingAirline" => " ",
                                                "FareBasis" => null,
                                                "Baggage" => null,
                                                "BaggageAllowance" => null,
                                                "ChangePenalty" => null,
                                            ];
                                            array_push($PassengerDetails, $Passenger); 
                                        }
                                    }
                                        // foreach($travellerData as $traveller){
                                            
                                        //     if( strtoupper($traveller['firstName']) == ($person->travellerInformation->passenger->firstName??'')) {
                                        //         $Title = $traveller['title']; 
                                        //     }
                                        // }
                                            // dd( $booking ,$traveller, $Title , strtoupper($traveller['firstName']),$person->travellerInformation->passenger->firstName ?? ''  );
                                            
                                            
                                            
                                            // $Passenger = [
                                            //     "ReferenceNo" => "",
                                            //     "TrackID" => "",
                                            //     "Title" => $Title ?? "MR",
                                            //     "FirstName" => $person->travellerInformation->passenger->firstName ?? '',
                                            //     "MiddleName" => null,
                                            //     "LastName" => $person->travellerInformation->traveller->surname ?? '',
                                            //     "PaxTypeCode" => $person->travellerInformation->passenger->type ?? '',
                                            //     "Gender" => "",
                                            //     "DOB" => null,
                                            //     "TicketID" => $ticketNo ?? '',
                                            //     "TicketNumber" => $longFreetext ?? '',
                                            //     "IssueDate" => "",
                                            //     "Status" => "Ticketed",
                                            //     "ModifyStatus" => "",
                                            //     "ValidatingAirline" => " ",
                                            //     "FareBasis" => null,
                                            //     "Baggage" => null,
                                            //     "BaggageAllowance" => null,
                                            //     "ChangePenalty" => null,
                                            // ];
                                            // array_push($PassengerDetails, $Passenger);
                                            
                                            
                                    //     }
                                    // }
                                    
                                    $FareInformation[] = [
                                        "PaxType" => $booking->tstData->fareData->monetaryInfo[1]->amount ??$booking->tstData[0]->fareData->monetaryInfo[1]->amount?? '',
                                        "PaxBaseFare" => $request['amount']??$booking->tstData->fareData->monetaryInfo[1]->amount ??$booking->tstData[0]->fareData->monetaryInfo[1]->amount ?? '',
                                        "PaxFuelSurcharge" => 0,
                                        "PaxOtherTax" => 0,
                                        "PaxTotalFare" => $booking->tstData->fareData->monetaryInfo[0]->amount ??  $booking->tstData[0]->fareData->monetaryInfo[0]->amount ?? '',
                                        "PaxDiscount" => 0,
                                        "PaxCashBack" => 0,
                                        "PaxTDS" => 0,
                                        "PaxServiceTax" => 0,
                                        "PaxTransactionFee" => 0,
                                        "TravelFee" => 0,
                                        "Discount" => 0,
                                        "K3" => 265,
                                        "CGST" => 0,
                                        "SGST" => 0,
                                        "IGST" => 0,
                                        "UTGST" => 0,
                                    ];

                                    $usermobile = User::where('phone', $phonenumber)->pluck('id') ?? '';
                                    $useremail = User::where('email', $email)->pluck('id') ?? '';
                                    $saveBooking = new Booking;
                                    // dd([$usermobile,$useremail]);
                                    if (isset($usermobile[0])) {
                                        $saveBooking->user_id = $usermobile[0];
                                    } elseif (isset($useremail[0]) ) {
                                        $saveBooking->user_id = $useremail[0];

                                    } else {
                                        $user = new User;
                                        $user->name = $activeTravellers['adults']['fistName'][0] . " " . $activeTravellers['adults']['lastName'][0] ?? '';
                                        $user->email = strtolower($email);
                                        $user->phone = $phonenumber;
                                        $user->password = Hash::make("WTUser@1234");
                                        $user->save();
                                        $saveBooking->user_id = $user->id;
                                    };
                                    $saveBooking->booking_from = "AMADEUS";
                                    $saveBooking->booking_id = "WT0000" . $booking->pnrHeader->reservationInfo->reservation->controlNumber ?? '';
                                    $saveBooking->trip = $Ticket['AirBookingResponse'][0]['Trip'] ?? "Domestic";
                                    $saveBooking->trip_type = $Ticket['AirBookingResponse'][0]['TripType'] ?? "Oneway";
                                    $saveBooking->trip_stop = $segment->flightDetail->productDetails->numOfStops;
                                    $saveBooking->gds_pnr = $booking->pnrHeader->reservationInfo->reservation->controlNumber ?? '';
                                    $saveBooking->airline_pnr = $booking->originDestinationDetails->itineraryInfo[1]->itineraryReservationInfo->reservation->controlNumber ?? '';
                                    $saveBooking->email = $email;
                                    $saveBooking->mobile = $phonenumber;
                                    $saveBooking->itinerary = json_encode($FlightDetails, true);
                                    
                                    is_array($booking->tstData) ? $tstData = $booking->tstData : $tstData = [$booking->tstData];
                                    is_array($tstData[0]->fareBasisInfo->fareElement) ? $fareElement = $tstData[0]->fareBasisInfo->fareElement : $fareElement = [$tstData[0]->fareBasisInfo->fareElement];

                                    $CabIn  = $fareElement[0]->baggageAllowance ?? '';
                                    $saveBooking->baggage = json_encode([[
                                        'CabIn' =>  $CabIn ,
                                        'CheckIn' => '7KG'
                                    ]], true);
                                    $saveBooking->passenger = json_encode($PassengerDetails, true);
                                    $saveBooking->fare = json_encode($FareInformation, true);
                                    $saveBooking->status = "Ticketed";
                                    $saveBooking->logs_id = $request['txnid'];
                                    $saveBooking->save();

                                    $client->securitySignOut();
                                    // dd($saveBooking,  $tstData , $booking);
                                    // return redirect()->route('error')->with('message', 'State Not correctly!');

                                    ///////////////////////////////////////////////////////////////////////////////////
                                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    ///////////////////////////////////////////////////////////////////////////////////
                                    $date  = $date2= $time = '';
                                    foreach (json_decode($saveBooking->itinerary) as $key => $itinerary){
                                        if($key == 0){
                                            $date =  NOgetDate_fn($itinerary->DepartDate) ;
                                            $date2 =  getDate_fn($itinerary->DepartDate) ?? date('d-m-Y', strtotime($itinerary->DepartDate)) ;
                                            $time =  date('H:i', strtotime($itinerary->DepartDateTime));
                                        }
                                    }
                                    
                                    $from = json_decode($saveBooking->itinerary)[0]->DepartCityName ?? json_decode($saveBooking->itinerary)->DepartCityName ?? '';
                                    $to = json_decode($saveBooking->itinerary)[count(json_decode($saveBooking->itinerary))-1]->ArrivalCityName ?? json_decode($saveBooking->itinerary)->ArrivalCityName ?? '';
                                   foreach (json_decode($saveBooking->passenger) as $passenger){}
                                   
                                    $name = $passenger->FirstName ?? "customer";
                                    $name =  preg_replace('/\s+/', '%20', $name);
                                    $PhoneTo = $saveBooking->mobile;
                                    $from = AirportiatacodesController::getCity($from);
                                    $from = preg_replace('/\s+/', '%20', $from);
                                    $to = AirportiatacodesController::getCity($to);
                                    $to =  preg_replace('/\s+/', '%20', $to);
                                    $pnr = $saveBooking->gds_pnr;
                                    $Time = preg_replace('/\s+/', '%20', $time);
                                    
                                    $curl = curl_init();
                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => 'https://app-vcapi.smscloud.in/fe/api/v1/send?username=wagnistrip.api&apiKey=eRXjt4GR3ekxHwYHTSRRC1uCgvjU2gbV&unicode=false&from=WAGNIS&to='.$PhoneTo.'&text=Dear%20'.$name.',%20We%27re%20Happy%20to%20Confirm%20your%20Booking.%20PNR-'.$pnr.'%20from%20'.$from.'%20to%20'.$to.'%20at%20'.$date.'%20'.$Time.'.%20For%20any%20query%20click%20https://wagnistrip.com',
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => '',
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 0,
                                        CURLOPT_FOLLOWLOCATION => true,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => 'GET',
                                    ));
                                    $response = curl_exec($curl);
                                    curl_close($curl);
                                    
                                    // dd($response , $name , $PhoneTo , $from , $to , $pnr , $Time , $date , $date2);
                                    
                                    $bookings['bookings'] = $saveBooking;
                                    
                                    $bookings['email'] =  $email??$useremail[0]?? '';
                                    $bookings['title'] =   "Flight Ticket ".$activeTravellers['adults']['fistName'][0]??'';
                                    
                                    $files = PDF::loadView('flight-pages.booking-confirm.oneway-amd-flight-booking-confirm-pdf', $bookings);

                                    \Mail::send('flight-pages.booking-confirm.amd-email_content', $bookings, function($message)use($bookings ,$files) {
                                        $message->to($bookings['email'])
                                                ->subject( $bookings['title'])
                                                ->attachData($files->output(), $bookings['title'].".pdf");
                                    });
                                    \Mail::send('flight-pages.booking-confirm.amd-email_content', $bookings, function($message)use( $bookings ,$files) {
                                        $message->to("customercare@wagnistrip.com")
                                                ->subject( $bookings['title'])
                                                ->attachData($files->output(), $bookings['title'].".pdf");
                                    });
                                                                       
                                    ///////////////////////////////////////////////////////////////////////////////////
                                    ///////////////////////////////////////////////////////////////////////////////////
                                    
                                    
                                    //   return redirect()->route('user-booking')->with('message', 'State saved correctly!');
                                    return view('flight-pages.booking-confirm.oneway-amd-flight-booking-confirm')->with('bookings', $saveBooking);
                                // }
                            // } else {
            
                                    // return view('flight-pages.booking-confirm.oneway-amd-flight-booking-confirm')->with('bookings', $saveBooking);
                               // return redirect()->route('error')->with('message', 'issueTicketResponse ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank.');
                            // }
                        } else {
                            return redirect()->route('error')->with('message', 'pnrRetrieve  ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank, Kindly contact on this toll free number 08069145571 for further concern.');
                        }
                    } else {
                        return redirect()->route('error')->with('message', 'pnrReply  ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank, Kindly contact on this toll free number 08069145571 for further concern.');
                    }
                } else {
                    return redirect()->route('error')->with('message', 'createTstResponse  ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank, Kindly contact on this toll free number 08069145571 for further concern.');
                }
            } else {
                return redirect()->route('error')->with('message', 'pricingResponse -----  Your booking could not be completed as we did not receive successful authorisation of the payment from your bank, Kindly contact on this toll free number 08069145571 for further concern.');
            }
        } else {
            return redirect()->route('error')->with('message', 'createdPnr   -----   Your booking could not be completed as we did not receive successful authorisation of the payment from your bank, Kindly contact on this toll free number 08069145571 for further concern.');
        }        
    }
    // gali roundtrip domestic handling
    public function  gailroundtripdomesticresponse($req){    // copied app/Http/Controllers/Airline/Galileo/TicketingController.php's DomGalBooking function
        $uniqueid = $req['uniqueid'];
        $type = !empty($req['type']) ? $req['type'] : '';
        
        $paymentData = $request->all();
        
        // if($paymentData['mode']== "DC"){
        //     $paymentData['amount'] = $paymentData['amount'] - (($paymentData['amount']*0.99)/100)  ;
        // }elseif($paymentData['mode']== "CC"){
        //     $paymentData['amount'] = $paymentData['amount'] - (($paymentData['amount']*1.96)/100)  ;
        // }

                $bookingData = Cart::where('uniqueid', $uniqueid)->first();
                $getsessions = json_decode($bookingData['getsession'], true);

                $bookingData2 = [];
                $totalBooking = [];

                for ($i = 1; $i <= 2; $i++) {
                    if ($i == 1) {
                        $getsession = [
                            "ClientCode" => 'MakeTrueTrip',
                            "SessionID" => $getsessions['SessionID']['Outbound'],
                            "Key" => $getsessions['Key']['Outbound'],
                            "ReferenceNo" => $getsessions['ReferenceNo']['Outbound'],
                            "Provider" => $getsessions['Provider']['Outbound'],
                        ];
                    } elseif ($i == 2) {
                        $getsession = [
                            "ClientCode" => 'MakeTrueTrip',
                            "SessionID" => $getsessions['SessionID']['Inbound'],
                            "Key" => $getsessions['Key']['Inbound'],
                            "ReferenceNo" => $getsessions['ReferenceNo']['Inbound'],
                            "Provider" => $getsessions['Provider']['Inbound'],
                        ];
                    }

                    $AddPassengerDetailsBody = [
                        "ClientCode" => 'MakeTrueTrip',
                        "SessionID" => $getsession['SessionID'],
                        "Key" => $getsession['Key'],
                        "ReferenceNo" => $getsession['ReferenceNo'],
                        "CustomerInfo" => [
                            "Email" => $bookingData['email'] ??  "customercare@wagnistrip.com",
                            "Mobile" => $bookingData['phonenumber'] ?? "+917669988012",
                            "Address" => "Land Area Measuring 200Sq. YDS",
                            "City" => "Delhi",
                            "State" => "Delhi",
                            "CountryCode" => "IN",
                            "CountryName" => "India",
                            "ZipCode" => "110018",
                            "PassengerDetails" => json_decode($bookingData['travllername'], true),
                            "PassengerTicketDetails" => [],
                            "Payment" => (object) [],
                        ],
                        "SSRInfo" => [],
                        "TotalAmount" => "0",
                        "SSRAmount" => 0,
                        "Discount" => 0,
                        "GrandTotalFare" => "0",
                        "IsGSTProvided" => false,
                    ];
                    $AddPassengerDetails = AuthenticateController::callApiWithHeadersGal("AddPassengerDetails", $AddPassengerDetailsBody);
                    if ($AddPassengerDetails['Status'] == "Success") {
                    $BookingBody = [
                        "ClientCode" => 'MakeTrueTrip',
                        "SessionID" => $getsession['SessionID'],
                        "Key" => $AddPassengerDetails['Key'],
                        "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                        "Provider" => $getsession['Provider'],
                    ];

                    $Booking = AuthenticateController::callApiWithHeadersGal("Booking", $BookingBody);

                    if (isset($Booking['Status'])) {

                        $TicketBody = [
                            "ClientCode" => 'MakeTrueTrip',
                            "SessionID" => $getsession['SessionID'],
                            "Key" => $AddPassengerDetails['Key'],
                            "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                            "Provider" => $getsession['Provider'],
                        ];

                        $Ticket = AuthenticateController::callApiWithHeadersGal("Ticket", $TicketBody);

                        if (isset($Ticket['Status'])) {

                            $getBookingBody = [
                                "ClientCode" => 'MakeTrueTrip',
                                "SessionID" => $getsession['SessionID'],
                                "Key" => $AddPassengerDetails['Key'],
                                "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                                "PnrNo" => "",
                                "Provider" => $getsession['Provider'],
                                "FirstName" => "",
                                "LastName" => "",
                                "From" => "",
                                "To" => "",
                            ];

                            $getBooking = AuthenticateController::callApiWithHeadersGal("GetBookingDetails", $getBookingBody);

                            $saveBooking = new Booking;
                            if  (($getBooking['Status'] == "Hold")|| ($getBooking['Status'] == "Success")) {
                                $FareInformation[] = [
                                        "PaxType" =>  '',
                                        "PaxBaseFare" => '',
                                        "PaxFuelSurcharge" => 0,
                                        "PaxOtherTax" => 0,
                                        "PaxTotalFare" =>$paymentData['amount'] ?? '',
                                        "PaxDiscount" => 0,
                                        "PaxCashBack" => 0,
                                        "PaxTDS" => 0,
                                        "PaxServiceTax" => 0,
                                        "PaxTransactionFee" => 0,
                                        "TravelFee" => 0,
                                        "Discount" => 0,
                                        "K3" => 265,
                                        "CGST" => 0,
                                        "SGST" => 0,
                                        "IGST" => 0,
                                        "UTGST" => 0,
                                    ];
                                $logs_id = GalileoFlightLog::where('session_id', '=', $getsession['SessionID'])->first('id');

                                $userId = User::where('phone', $bookingData['phonenumber'])->orWhere('email', $bookingData['email'])->first('id');

                                if (empty($userId->id)) {
                                    $user = new User;
                                    $user->name = json_encode($bookingData['name']);
                                    $user->email = strtolower($bookingData['email']);
                                    $user->phone = $bookingData['phonenumber'];
                                    $user->password = Hash::make("User@WT");
                                    $user->save();
                                    $userId = $user->id;
                                } else {
                                    $userId = $userId->id;
                                }
                                $saveBooking->booking_from = "GALILEO";
                                $saveBooking->booking_id = $uniqueid;
                                $saveBooking->trip = $getBooking['AirBookingResponse'][0]['Trip'];
                                $saveBooking->trip_type = $getBooking['AirBookingResponse'][0]['TripType'];
                                $saveBooking->trip_stop = "0-Stop";
                                $saveBooking->gds_pnr = $getBooking['AirBookingResponse'][0]['PNR'];
                                $saveBooking->airline_pnr = $getBooking['AirBookingResponse'][0]['FlightDetails'][0]['AirLinePNR'];
                                $saveBooking->email = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Email'];
                                $saveBooking->mobile = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Mobile'];
                                $saveBooking->itinerary = json_encode($getBooking['AirBookingResponse'][0]['FlightDetails'], true);
                                $saveBooking->baggage = json_encode([[
                                        'CabIn' =>  $getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'][0]['BaggageAllowance']??'',
                                        'CheckIn' => '7KG'
                                ]], true);
                                $saveBooking->passenger = json_encode($getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'], true);
                                $saveBooking->fare = json_encode($FareInformation, true);
                                $saveBooking->status = $getBooking['AirBookingResponse'][0]['BookingStatus'];
                                $saveBooking->logs_id = $logs_id->id;
                                $saveBooking->user_id = $userId;
                                $saveBooking->save();
                                
                                if ($i == 1) {
                                    $bookingData2 = $saveBooking;
                                }
                                if ($i == 2) {
                                    $bookings['bookings'] = $saveBooking;
                                    
                                    $bookings['email'] =  $saveBooking->email ?? $bookingData['email']?? 'customercare@wagnistrip.com';
                                    $bookings['title'] =   "Flight Ticket ".json_encode($bookingData['name'])??'';
                                    
                                    $files = PDF::loadView('flight-pages.booking-confirm.roundtrip-gal-flight-booking-confirm-pdf', $bookings);
                                            
                                    \Mail::send('booking-pdf.flight.Gal-Tic-Mail', $bookings, function($message)use( $bookings ,$files) {
                                        $message->to("customercare@wagnistrip.com")
                                                ->subject( $bookings['title'])
                                                ->attachData($files->output(), $bookings['title'].".pdf");
                                    });
                                            
                                    \Mail::send('booking-pdf.flight.Gal-Tic-Mail', $bookings, function($message)use( $bookings ,$files) {
                                        $message->to($bookings['email'])
                                            ->subject( $bookings['title'])
                                            ->attachData($files->output(), $bookings['title'].".pdf");
                                    });
                                    
                                    
                                    $date  = $time = '';
                                    foreach (json_decode($saveBooking->itinerary) as $key => $itinerary){
                                        if($key == 0){
                                            $date =  NOgetDateFormat_db($itinerary->DepartDateTime) ;
                                            $time =  date('H:i', strtotime($itinerary->DepartDateTime)) ;
                                        }
                                    }
                                    $from = json_decode($saveBooking->itinerary)[0]->DepartCityName ?? json_decode($saveBooking->itinerary)->DepartCityName ?? '';
                                    $to = json_decode($saveBooking->itinerary)[count(json_decode($saveBooking->itinerary))-1]->ArrivalCityName ?? json_decode($saveBooking->itinerary)->ArrivalCityName ?? '';
                                    foreach (json_decode($saveBooking->passenger) as $passenger){}
                                    
                                    $name = $passenger->FirstName ?? "customer";
                                    $name =  preg_replace('/\s+/', '%20', $name);
                                    
                                    $PhoneTo = $saveBooking->mobile;
                                    $PhoneTo =  preg_replace('/\s+/', '%20', $PhoneTo);
                                    
                                    $from = AirportiatacodesController::getCity($from);
                                    $from =  preg_replace('/\s+/', '%20', $from);
                                    
                                    $to = AirportiatacodesController::getCity($to);
                                    $to =  preg_replace('/\s+/', '%20', $to);
                                    
                                    $pnr = $saveBooking->gds_pnr;
                                    $pnr =  preg_replace('/\s+/', '%20', $pnr);
                                    
                                    
                                    $Time = preg_replace('/\s+/', '%20', $time);
                                    $date =  preg_replace('/\s+/', '%20', $date);
                                    
                                    $curl = curl_init();
                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => 'https://app-vcapi.smscloud.in/fe/api/v1/send?username=wagnistrip.api&apiKey=eRXjt4GR3ekxHwYHTSRRC1uCgvjU2gbV&unicode=false&from=WAGNIS&to='.$PhoneTo.'&text=Dear%20'.$name.',%20We%27re%20Happy%20to%20Confirm%20your%20Booking.%20PNR-'.$pnr.'%20from%20'.$from.'%20to%20'.$to.'%20at%20'.$date.'%20'.$Time.'.%20For%20any%20query%20click%20https://wagnistrip.com',
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => '',
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 0,
                                        CURLOPT_FOLLOWLOCATION => true,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => 'GET',
                                    ));
                                    $response = curl_exec($curl);
                                    curl_close($curl);
                                    
                                    $both = [
                                        'FristpnrRetrieve'=>$saveBooking , 
                                        'book'=>$bookingData2 ,
                                    ];
                                    
                                    return view('flight-pages.booking-confirm.Round-Gal-Dom')->with('bookings', $both);
                                }
                                
                                }else{
                                    return redirect()->route('error')->with('msg', "Your Booking Has Been " . $Ticket['Status'] . "!! , Kindly contact on this toll free number 08069145571 for further concern.");
                                }
                            } else {
                                return redirect()->route('error')->with('msg', "Your Booking Has Been " . $Ticket['Status'] . "!, Kindly contact on this toll free number 08069145571 for further concern.");
                            }
                        } else {
                            return redirect()->route('error')->with('msg', "Your Ticket Booking Faild. Kindly contact on this toll free number 08069145571 for further concern.");
                        }
                    } else {
                    
                        return redirect()->route('error')->with('msg', "Passenger Data Invalid. Kindly contact on this toll free number 08069145571 for further concern.");
                    }
                }
    }
    public function MixDomResponse($req){     //copied and edited app/Http/Controllers/Airline/Both/BookingController.php 's booking function
        $uniqueid = $req['uniqueid'];
        $type = !empty($req['type']) ? $req['type'] : '';
        $uniqueidgal = !empty($req['uniqueidgal']) ?$req['uniqueidgal'] : ''; 
            $bookingData = Cart::where('uniqueid', $uniqueid)->first();
            
            $getsession = json_decode($bookingData['getsession'], true);
        
            $totalBooking = [];
                
            $AddPassengerDetailsBody = [
                "ClientCode" => 'MakeTrueTrip',
                "SessionID" => $getsession['SessionID'],
                "Key" => $getsession['Key'],
                "ReferenceNo" => $getsession['ReferenceNo'],
                "CustomerInfo" => [
                    "Email" => $bookingData['email'] ?? "customercare@wagnistrip.com",
                    "Mobile" => $bookingData['phonenumber'] ?? "+917669988012",
                    "Address" => "No. 5-b/13, Tilak Nagar",
                    "City" => "Delhi",
                    "State" => "Delhi",
                    "CountryCode" => "IN",
                    "CountryName" => "India",
                    "ZipCode" => "110018",
                    "PassengerDetails" => json_decode($bookingData['travllername'], true),
                    "PassengerTicketDetails" => [],
                    "Payment" => (object) [],
                    
                ],
                "SSRInfo" => [],
                "TotalAmount" => "0",
                "SSRAmount" => 0,
                "Discount" => 0,
                "GrandTotalFare" => "0",
                "IsGSTProvided" => false,
            ];

             $AddPassengerDetails = AuthenticateController::callApiWithHeadersGal("AddPassengerDetails", $AddPassengerDetailsBody);
            //  dd($AddPassengerDetails);
              //  if ($AddPassengerDetails['Status'] == "Success") {
            $BookingBody = [
                    "ClientCode" => 'MakeTrueTrip',
                    "SessionID" => $getsession['SessionID'],
                    "Key" => $AddPassengerDetails['Key'],
                    "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                    "Provider" => $getsession['Provider'],
                ];
                
                $Booking = AuthenticateController::callApiWithHeadersGal("Booking", $BookingBody);
                if (isset($Booking['Status'])) {
                    $TicketBody = [
                        "ClientCode" => 'MakeTrueTrip',
                        "SessionID" => $getsession['SessionID'],
                        "Key" => $AddPassengerDetails['Key'],
                        "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                        "Provider" => $getsession['Provider'],
                    ];
                    
                    $Ticket = AuthenticateController::callApiWithHeadersGal("Ticket", $TicketBody);
                    // dd($Ticket);
                     if (isset($Ticket['Status'])) {
                         
                         $getBookingBody = [
                            "ClientCode" => 'MakeTrueTrip',
                            "SessionID" => $getsession['SessionID'],
                            "Key" => $AddPassengerDetails['Key'],
                            "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                            "PnrNo" => "",
                            "Provider" => $getsession['Provider'],
                            "FirstName" => "",
                            "LastName" => "",
                            "From" => "",
                            "To" => "",
                        ];
                        
                        $getBooking = AuthenticateController::callApiWithHeadersGal("GetBookingDetails", $getBookingBody);
                        
                        $saveBooking = new Booking;
                        if ($getBooking['Status'] == "Success") {

                                $logs_id = GalileoFlightLog::where('session_id', '=', $getsession['SessionID'])->first('id');

                                $userId = User::where('phone', $bookingData['phonenumber'])->orWhere('email', $bookingData['email'])->first('id');

                                if (empty($userId->id)) {
                                    $user = new User;
                                    $user->name = json_encode($bookingData['name']);
                                    $user->email = strtolower($bookingData['email']);
                                    $user->phone = $bookingData['phonenumber'];
                                    $user->password = Hash::make("User@WT");
                                    $user->save();
                                    $userId = $user->id;
                                } else {
                                    $userId = $userId->id;
                                }

                                $saveBooking->booking_from = "GALILEO";
                                $saveBooking->booking_id = $uniqueid;
                                $saveBooking->trip = $getBooking['AirBookingResponse'][0]['Trip'];
                                $saveBooking->trip_type = $getBooking['AirBookingResponse'][0]['TripType'];
                                $saveBooking->trip_stop = "0-Stop";
                                $saveBooking->gds_pnr = $getBooking['AirBookingResponse'][0]['PNR'];
                                $saveBooking->airline_pnr = $getBooking['AirBookingResponse'][0]['FlightDetails'][0]['AirLinePNR'];
                                $saveBooking->email = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Email'];
                                $saveBooking->mobile = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Mobile'];
                                $saveBooking->itinerary = json_encode($getBooking['AirBookingResponse'][0]['FlightDetails'], true);
                                $saveBooking->baggage = json_encode([[
                                            'CabIn' =>  $getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'][0]['BaggageAllowance']??'',
                                            'CheckIn' => '7KG',
                                ]], true);
                                $saveBooking->passenger = json_encode($getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'], true);
                                $saveBooking->fare = json_encode($getBooking['AirBookingResponse'][0]['FareDetails'], true);
                                $saveBooking->status = $getBooking['AirBookingResponse'][0]['BookingStatus'];
                                $saveBooking->logs_id = $logs_id->id;
                                $saveBooking->user_id = $userId;
                                $saveBooking->save();

                                
                            } elseif  ($getBooking['Status'] == "Hold") {
                                $logs_id = GalileoFlightLog::where('session_id', '=', $getsession['SessionID'])->first('id');

                                $userId = User::where('phone', $bookingData['phonenumber'])->orWhere('email', $bookingData['email'])->first('id');

                                if (empty($userId->id)) {
                                    $user = new User;
                                    $user->name = json_encode($bookingData['name']);
                                    $user->email = strtolower($bookingData['email']);
                                    $user->phone = $bookingData['phonenumber'];
                                    $user->password = Hash::make("User@WT");
                                    $user->save();
                                    $userId = $user->id;
                                } else {
                                    $userId = $userId->id;
                                }
                                $saveBooking->booking_from = "GALILEO";
                                $saveBooking->booking_id = $uniqueid;
                                $saveBooking->trip = $getBooking['AirBookingResponse'][0]['Trip'];
                                $saveBooking->trip_type = $getBooking['AirBookingResponse'][0]['TripType'];
                                $saveBooking->trip_stop = "0-Stop";
                                $saveBooking->gds_pnr = $getBooking['AirBookingResponse'][0]['PNR'];
                                $saveBooking->airline_pnr = $getBooking['AirBookingResponse'][0]['FlightDetails'][0]['AirLinePNR'];
                                $saveBooking->email = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Email'];
                                $saveBooking->mobile = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Mobile'];
                                $saveBooking->itinerary = json_encode($getBooking['AirBookingResponse'][0]['FlightDetails'], true);
                                $saveBooking->baggage = json_encode($getBooking['AirBookingResponse'][0]['PaxBaggageDetails'], true);
                                $saveBooking->passenger = json_encode($getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'], true);
                                $saveBooking->fare = json_encode($getBooking['AirBookingResponse'][0]['FareDetails'], true);
                                $saveBooking->status = $getBooking['AirBookingResponse'][0]['BookingStatus'];
                                $saveBooking->logs_id = $logs_id->id;
                                $saveBooking->user_id = $userId;
                                $saveBooking->save();
                                    
                                
                                $FristpnrRetrieve = $saveBooking ;
                               
                                
                                }else{
                                    
                                    
                                }
                     } else {
                        return redirect()->route('error')->with('msg', "Your Booking Has Been " . $Ticket['Status'] . "!!, Kindly contact on this toll free number 08069145571 for further concern.");
                    }
                } else {
                    return redirect()->route('error')->with('msg', "Your Ticket Booking Faild, Kindly contact on this toll free number 08069145571 for further concern.");
                }
            //////// G A L   B O O K I N G   E N D  ///////////////////////////
            
            
            //////// A M A D E U S   B O O K I N G   S T A R T  ///////////////////////////

            
            $bookingData = Cart::where('uniqueid', $uniqueidgal)->first();
            $otherInformation = json_decode($bookingData['otherInformation'], true);
              $marketingCompany = $otherInformation['marketingCompany'] ?? $otherInformation['marketingCompany_1'] ?? $otherInformation['outbound_marketingCompany'] ?? $otherInformation['outbound_marketingCompany_1'];
              $activeTravellers = json_decode($bookingData['travllername'], true);
              $phonenumber = $bookingData['phonenumber'];
              $email = $bookingData['email'];
              $uniqueid = $bookingData['uniqueid'];
           
              $HeaderController = new AmadeusHeaderController;
              $params = $HeaderController->State(true);
              $client = new Client($params);
              $client->setSessionData(json_decode($bookingData['getsession'], true));
              $passengers = json_decode($bookingData['travellerquantity'], true);
              $phonenumber = $bookingData['phonenumber'];
              $email = $bookingData['email'];
                
              $travellers = [];
              $pricing = [];
           
              if ((int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] === 0) {
                  for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
           
                      $trvlrs = new Traveller([
                          'number' => $i,
                          'firstName' => $activeTravellers['adults']['fistName'][$i],
                          'lastName' => $activeTravellers['adults']['lastName'][$i],
                          'type' => 'ADT',
                      ]);
                      array_push($travellers, $trvlrs);
                 }
           
                  $pricing = new TicketCreateTstFromPricingOptions([
                    'pricings' => [
                          new Pricing([
                              'tstNumber' => 1,
                          ]),
                     ],
                  ]);
              } elseif ((int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] > 0) {
                  for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
           
                      if ($passengers['noOfInfants'] != 0 && $i < $passengers['noOfInfants']) {
                          if ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] == $activeTravellers['infants']['lastName'][$i]) {
                             $trvlrs = new Traveller([
                                  'number' => $i,
                                  'firstName' => $activeTravellers['adults']['fistName'][$i],
                                  'lastName' => $activeTravellers['adults']['lastName'][$i],
                                  'travellerType' => null,
                                 'infant' => new Traveller([
                                      'firstName' => 'Junior',
                                    'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                 ]),
                              ]);
           
                       } elseif ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] != $activeTravellers['infants']['lastName'][$i]) {
                              $trvlrs = new Traveller([
                                  'number' => $i,
                                  'firstName' => $activeTravellers['adults']['fistName'][$i],
                                  'lastName' => $activeTravellers['adults']['lastName'][$i],
                                'infant' => new Traveller([
                                      'firstName' => $activeTravellers['infants']['fistName'][$i],
                                      'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                  ]),
                              ]);
           
                          } else {
                              $trvlrs = new Traveller([
                                  'number' => $i,
                                  'firstName' => $activeTravellers['adults']['fistName'][$i],
                                  'lastName' => $activeTravellers['adults']['lastName'][$i],
                                  'infant' => new Traveller([
                                     'firstName' => $activeTravellers['infants']['fistName'][$i],
                                    'lastName' => $activeTravellers['infants']['lastName'][$i],
                                     'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                ]),
                              ]);
           
                         }
                      } else {
                          $trvlrs = new Traveller([
                              'number' => $i,
                              'firstName' => $activeTravellers['adults']['fistName'][$i],
                              'lastName' => $activeTravellers['adults']['lastName'][$i],
                              'type' => 'ADT',
                          ]);
           
                      }
                      array_push($travellers, $trvlrs);
           
                  }
           
                  $pricing = new TicketCreateTstFromPricingOptions([
                      'pricings' => [
                         new Pricing([
                            'tstNumber' => 1,
                         ]),
                        new Pricing([
                          'tstNumber' => 2,
                          ]),
                      ],
                ]);
              } elseif ((int) $passengers['noOfChilds'] > 0 && (int) $passengers['noOfInfants'] === 0) {
           
                 for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
           
                     $trvlrs1 = new Traveller([
                        'number' => $i,
                         'firstName' => $activeTravellers['adults']['fistName'][$i],
                          'lastName' => $activeTravellers['adults']['lastName'][$i],
                         'type' => 'ADT',
                      ]);
                     array_push($travellers, $trvlrs1);
               }
                  for ($i = 0; $i < $passengers['noOfChilds']; $i++) {
           
                      $trvlrs2 = new Traveller([
                         'number' => array_sum([$passengers['noOfAdults'], $i]),
                          'firstName' => $activeTravellers['childs']['fistName'][$i],
                         'lastName' => $activeTravellers['childs']['lastName'][$i],
                        'travellerType' => Traveller::TRAV_TYPE_CHILD,
                    ]);
           
                     array_push($travellers, $trvlrs2);
           
                 }
                 $pricing = new TicketCreateTstFromPricingOptions([
                     'pricings' => [
                          new Pricing([
                              'tstNumber' => 1,
                         ]),
                         new Pricing([
                             'tstNumber' => 2,
                        ]),
                     ],
                 ]);
              } elseif ((int) $passengers['noOfChilds'] > 0 && (int) $passengers['noOfInfants'] > 0) {
                 for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
           
                     if ($passengers['noOfInfants'] != 0 && $i < $passengers['noOfInfants']) {
                         if ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] == $activeTravellers['infants']['lastName'][$i]) {
                           $trvlrs1 = new Traveller([
                                'number' => $i,
                             'firstName' => $activeTravellers['adults']['fistName'][$i],
                                 'lastName' => $activeTravellers['adults']['lastName'][$i],
                                 'infant' => new Traveller([
                                    'firstName' => 'Junior',
                                      'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                 ]),
                             ]);
           
                        } elseif ($activeTravellers['adults']['fistName'][$i] == $activeTravellers['infants']['fistName'][$i] && $activeTravellers['adults']['lastName'][$i] != $activeTravellers['infants']['lastName'][$i]) {
                             $trvlrs1 = new Traveller([
                                 'number' => $i,
                                 'firstName' => $activeTravellers['adults']['fistName'][$i],
                                'lastName' => $activeTravellers['adults']['lastName'][$i],
                                  'infant' => new Traveller([
                                     'firstName' => $activeTravellers['infants']['fistName'][$i],
                                      'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                 ]),
                            ]);
           
                        } else {
                            $trvlrs1 = new Traveller([
                                'number' => $i,
                                'firstName' => $activeTravellers['adults']['fistName'][$i],
                                'lastName' => $activeTravellers['adults']['lastName'][$i],
                                'infant' => new Traveller([
                                    'firstName' => $activeTravellers['infants']['fistName'][$i],
                                    'lastName' => $activeTravellers['infants']['lastName'][$i],
                                    'dateOfBirth' => \DateTime::createFromFormat('Y-m-d', $activeTravellers['infants']['infantDOB'][$i], new \DateTimeZone('UTC')),
                                ]),
                            ]);

                        }
                        array_push($travellers, $trvlrs1);
                    } else {
                        $trvlrs2 = new Traveller([
                            'number' => $i,
                            'firstName' => $activeTravellers['adults']['fistName'][$i],
                            'lastName' => $activeTravellers['adults']['lastName'][$i],
                            'type' => 'ADT',
                        ]);
                        array_push($travellers, $trvlrs2);
                    }
                }

                for ($i = 0; $i < $passengers['noOfChilds']; $i++) {

                    $trvlrs3 = new Traveller([
                        'number' => array_sum([$passengers['noOfAdults'], $i]),
                        'firstName' => $activeTravellers['childs']['fistName'][$i],
                        'lastName' => $activeTravellers['childs']['lastName'][$i],
                        'travellerType' => Traveller::TRAV_TYPE_CHILD,
                    ]);

                    array_push($travellers, $trvlrs3);

                }
                $pricing = new TicketCreateTstFromPricingOptions([
                    'pricings' => [
                        new Pricing([
                            'tstNumber' => 1,
                        ]),
                        new Pricing([
                            'tstNumber' => 2,
                        ]),
                        new Pricing([
                            'tstNumber' => 3,
                        ]),

                    ],
                ]);
            }

            $opt = new PnrCreatePnrOptions();
            $opt->actionCode = PnrCreatePnrOptions::ACTION_NO_PROCESSING; //0 Do not yet save the PNR and keep in context.

            $opt->travellers = $travellers;

            $opt->elements[] = new Ticketing([
                'ticketMode' => Ticketing::TICKETMODE_OK,
            ]);
            $opt->itineraries[] = new Itinerary([
                'segments' => [
                    new Miscellaneous([
                        'status ' => Segment::STATUS_CONFIRMED,
                        'company' => '1A',
                        'date' => \DateTime::createFromFormat('Ymd', date('Ymd'), new \DateTimeZone('UTC')),
                        'cityCode' => 'DEL',
                        'freeText' => 'MAKE TRUE TRIP (OPC ) PRIVATE LIMITED.',
                        'quantity' => array_sum([$passengers['noOfAdults'], $passengers['noOfChilds']]),
                    ]),
                ],
            ]);

            $opt->elements[] = new Contact([
                'type' => Contact::TYPE_PHONE_MOBILE,
                'value' => '+919875489875',
            ]);
            $opt->elements[] = new Contact([
                'type' => Contact::TYPE_EMAIL,
                'value' => $email,
            ]);
            $opt->elements[] = new FormOfPayment([
                'type' => FormOfPayment::TYPE_CASH,
            ]);

            $createdPnr = $client->pnrCreatePnr($opt);

            if ($createdPnr->status === Result::STATUS_OK) {
                $getsession = $client->getSessionData();
                $client->setSessionData($getsession);

                $pricingResponse = $client->farePricePnrWithBookingClass(
                    new FarePricePnrWithBookingClassOptions([
                        'validatingCarrier' => $marketingCompany,
                    ]),
                );
                
                if ($pricingResponse->status === Result::STATUS_OK) {
                    // dd($pricingResponse);
                    $getsession = $client->getSessionData();
                    $client->setSessionData($getsession);

                    $createTstResponse = $client->ticketCreateTSTFromPricing(
                        $pricing
                    );

                    if ($createTstResponse->status === Result::STATUS_OK) {
                        
                        // dd($createTstResponse);
                        $getsession = $client->getSessionData();
                        $client->setSessionData($getsession);
                        $pnrReply = $client->pnrAddMultiElements(
                            new PnrAddMultiElementsOptions([
                                'actionCode' => PnrAddMultiElementsOptions::ACTION_END_TRANSACT, //ET: END AND RETRIEVE
                            ])
                        );

                        if ($pnrReply->status === Result::STATUS_OK) {
                            $getsession = $client->getSessionData();
                            $client->setSessionData($getsession);
                            sleep(10);
                            $createdPnrForRetriever1 = $pnrReply->response->pnrHeader->reservationInfo->reservation->controlNumber;

                            $pnrRetrieve = $client->pnrRetrieve(new PnrRetrieveOptions(['recordLocator' => $createdPnrForRetriever1]));

                            if ($pnrRetrieve->status === Result::STATUS_OK) {
                                    $FareInformation[] = [
                                        "PaxType" =>  $pnrRetrieve->response->tstData->fareData->monetaryInfo[1]->amount ?? '',
                                        "PaxBaseFare" => $pnrRetrieve->response->tstData->fareData->monetaryInfo[1]->amount ?? '',
                                        "PaxFuelSurcharge" => 0,
                                        "PaxOtherTax" => 0,
                                        "PaxTotalFare" => $input['amount'] ?? $pnrRetrieve->response->tstData->fareData->monetaryInfo[0]->amount ?? '',
                                        "PaxDiscount" => 0,
                                        "PaxCashBack" => 0,
                                        "PaxTDS" => 0,
                                        "PaxServiceTax" => 0,
                                        "PaxTransactionFee" => 0,
                                        "TravelFee" => 0,
                                        "Discount" => 0,
                                        "K3" => 265,
                                        "CGST" => 0,
                                        "SGST" => 0,
                                        "IGST" => 0,
                                        "UTGST" => 0,
                                    ];
                            
                                       
                                    $booking = $pnrRetrieve->response;
                                    $longFreetext = $str = (isset($booking->dataElementsMaster->dataElementsIndiv[3]->otherDataFreetext->longFreetext) ? ($booking->dataElementsMaster->dataElementsIndiv[3]->otherDataFreetext->longFreetext) : '');
                                    $longFreetext = substr($str, (strpos($str, "-")) + 1, 10);
                                        
                                    $FlightDetails = [];

                                    foreach ($pnrRetrieve->response->originDestinationDetails->itineraryInfo as $segkey => $segment) {
                                        if ($segkey > 0) {
                                            $segdata = [
                                               "Leg" => 1,
                                                "FlightCount" => 1,
                                                "DepartAirportCode" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartAirportName" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartCityName" => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                "DepartTerminal" => $segment->flightDetail->departureInformation->departTerminal ?? '',
                                                "DepartDateTime" => $segment->travelProduct->product->depTime ??''.$segment->travelProduct->product->depDate ??'',
                                                "DepartDate" => $segment->travelProduct->product->depDate ??'',
                                                "ArrivalAirportCode" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalAirportName" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalCityName" => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                "ArrivalTerminal" => $segment->flightDetail->arrivalStationInfo->terminal ?? '',
                                                "ArrivalDateTime" => $segment->travelProduct->product->arrTime??''.$segment->travelProduct->product->arrDate??'' ,
                                                "ArrivalDate" => $segment->travelProduct->product->arrDate??'' ,
                                                "FlightNumber" => $segment->travelProduct->productDetails->identification ?? '',
                                                "AirLineCode" => $segment->travelProduct->companyDetail->identification ?? '',
                                                "AirLineName" => $segment->travelProduct->companyDetail->identification ?? '',
                                                "Duration" => $segment->flightDetail->productDetails->duration,
                                                "AvailableSeats" => $segment->flightDetail->productDetails->duration,
                                                "EquipmentType" =>  $segment->flightDetail->productDetails->equipment,
                                                "MarketingCarrier" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingCarrier" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingCarrierName" => $segment->travelProduct->companyDetail->identification,
                                                "OperatingFlightNumber" => $segment->travelProduct->companyDetail->identification,
                                                "AirLinePNR" => $segment->itineraryReservationInfo->reservation->controlNumber?? '',
                                                "TravelClass" => $segment->travelProduct->productDetails->classOfService ?? '',
                                                "TrackID" =>$segment->itineraryReservationInfo->reservation->controlNumber?? '',
                                                "BookingCode" => null,
                                                "BaggageDetails" => null,
                                                "NumberOfStops" => $segment->flightDetail->productDetails->numOfStops,
                                                "ViaSector" => null,
                                                "TicketNumber" => $longFreetext,
                                            ];

                                            array_push($FlightDetails, $segdata);
                                        }
                                    }

                                    is_array($booking->travellerInfo) ? $travellerInfo = $booking->travellerInfo : $travellerInfo = [$booking->travellerInfo];
                                    $PassengerDetails = [];
                                    
                                    
                                        $book = new Booking;
                                        
                                        $book->gds_pnr = $pnrRetrieve->response->pnrHeader->reservationInfo->reservation->controlNumber ?? '';
                                        $seg = [];
                                        foreach ($pnrRetrieve->response->originDestinationDetails->itineraryInfo as $segkey => $segment) {
                                            if ($segkey > 0) {
                                                $segdata = [
                                                    'operatingcompany' => $segment->travelProduct->companyDetail->identification ?? '',
                                                    'marketingcompany' => $segment->travelProduct->companyDetail->identification ?? '',
                                                    'flightnumber' => $segment->travelProduct->productDetails->identification ?? '',
                                                    'departurelocation' => $segment->travelProduct->boardpointDetail->cityCode ?? '',
                                                    'departureterminal' => $segment->flightDetail->departureInformation->departTerminal ?? '',
                                                    'departuredate' => $segment->travelProduct->product->depDate ?? '',
                                                    'departuretime' => $segment->travelProduct->product->depTime ?? '',
                                                    'arrivallocation' => $segment->travelProduct->offpointDetail->cityCode ?? '',
                                                    'arrivalterminal' => $segment->flightDetail->arrivalStationInfo->terminal ?? '',
                                                    'arrivaldate' => $segment->travelProduct->product->arrDate ?? '',
                                                    'arrivaltime' => $segment->travelProduct->product->arrTime ?? '',
                                                    'journeytime' => $segment->flightDetail->productDetails->duration ?? '',
                                                    'serviceclass' => $segment->travelProduct->productDetails->classOfService ?? '',
                                                    'seat' => '',
                                                    'meal' => '',

                                                ];
                                                array_push($seg, $segdata);
                                            }
                                        }
                                        $book->itinerary =  json_encode($FlightDetails, true);
                                        is_array($booking->travellerInfo) ? $travellerInfo = $booking->travellerInfo : $travellerInfo = [$booking->travellerInfo];
                                        $PassengerDetails = [];
                                        foreach ($travellerInfo as $travellers) {
                                            $ticketNo = $travellers->elementManagementPassenger->reference->number;
    
                                            // dd($ticketNo);
    
                                            is_array($travellers->passengerData) ? $travellerData = $travellers->passengerData : $travellerData = [$travellers->passengerData];
    
                                            foreach ($travellerData as $person) {
    
                                                $Passenger = [
                                                    "ReferenceNo" => "",
                                                    "TrackID" => "",
                                                    "Title" => "MR",
                                                    "FirstName" => $person->travellerInformation->passenger->firstName ?? '',
                                                    "MiddleName" => null,
                                                    "LastName" => $person->travellerInformation->traveller->surname ?? '',
                                                    "PaxTypeCode" => $person->travellerInformation->passenger->type ?? '',
                                                    "Gender" => "",
                                                    "DOB" => null,
                                                    "TicketID" => $ticketNo ?? '',
                                                    "TicketNumber" => $longFreetext ?? '',
                                                    "IssueDate" => "",
                                                    "Status" => "Ticketed",
                                                    "ModifyStatus" => "",
                                                    "ValidatingAirline" => " ",
                                                    "FareBasis" => null,
                                                    "Baggage" => null,
                                                    "BaggageAllowance" => null,
                                                    "ChangePenalty" => null,
                                                ];
                                                array_push($PassengerDetails, $Passenger);
                                            }
                                        }
                                        $book->passenger = json_encode($PassengerDetails, true);
                                        $book->email = $pnrRetrieve->response->dataElementsMaster->dataElementsIndiv[0]->otherDataFreetext->longFreetext ?? '';
                                        $book->mobile = $pnrRetrieve->response->dataElementsMaster->dataElementsIndiv[1]->otherDataFreetext->longFreetext ?? '';
                                        $book->booking_from = "AMADEUS";
                                        $book->trip =  "Domestic";
                                        
                                        $book->trip_type =  "Dow Roun One";
                                        $book->trip_stop = "No stop";
                                        $book->airline_pnr =  $pnrRetrieve->response->pnrHeader->reservationInfo->reservation->controlNumber ?? '';
                                        
                                        $CabIn  = $booking->tstData->fareBasisInfo->fareElement->baggageAllowance ??  $booking->tstData->fareBasisInfo->fareElement->baggageAllowance ?? '15 kg.';
                                        $book->baggage = json_encode([[
                                            'CabIn' => $CabIn, 
                                            'CheckIn' => '7KG'
                                        ]], true);
                                        $book->booking_id = "WT0000" .$pnrRetrieve->response->pnrHeader->reservationInfo->reservation->controlNumber ?? '' ;
                                        $book->fare = json_encode($FareInformation, true);
                                        $book->logs_id = $pnrRetrieveAndDisplay->responseXml ?? "";
                                        $book->status = "Ticketed";
                                        
                                        $usermobile = User::where('phone', $phonenumber)->pluck('id') ?? '';
                                        $useremail = User::where('email', $email)->pluck('id') ?? '';
                                        if (isset($usermobile[0])) {
                                            $book->user_id = $usermobile[0] ?? '';
                                        } elseif (isset($useremail[0])) {
                                            $book->user_id = $useremail[0] ?? '';
                                        
                                        } else {
                                            $user = new User;
                                            $user->name = $activeTravellers['adults']['fistName'][0] . " " . $activeTravellers['adults']['lastName'][0] ?? '';
                                            $user->email = strtolower($email) ?? '';
                                            $user->phone = $phonenumber ?? '';
                                            $user->password = Hash::make("New@1234") ?? '';
                                            $user->save();

                                            $book->user_id = $user->id;
                                        }

                                        $book->save();
                                        $client->securitySignOut();
                                        
                                        $date  = $time = '';
                                            foreach (json_decode($book->itinerary) as $key => $itinerary){
                                                if($key == 0){
                                                    $date =  NOgetDate_fn($itinerary->DepartDate) ;
                                                    // $date2 =  getDate_fn($itinerary->DepartDate) ?? date('d-m-Y', strtotime($itinerary->DepartDate)) ;
                                                    $time =  date('H:i', strtotime($itinerary->DepartDateTime)) ;
                                                }
                                            }
                                           
                                            $from = json_decode($book->itinerary)[0]->DepartCityName ?? json_decode($book->itinerary)->DepartCityName ?? '';
                                            $to = json_decode($book->itinerary)[count(json_decode($book->itinerary))-1]->ArrivalCityName ?? json_decode($book->itinerary)->ArrivalCityName ?? '';
                                            foreach (json_decode($book->passenger) as $passenger){}
                                            $name = $passenger->FirstName ?? "customer";
                                            $name =  preg_replace('/\s+/', '%20', $name);
                                            
                                            $PhoneTo = $book->mobile;
                                            $PhoneTo =  preg_replace('/\s+/', '%20', $PhoneTo);
                                            
                                            $from = AirportiatacodesController::getCity($from);
                                            $from =  preg_replace('/\s+/', '%20', $from);
                                            
                                            $to = AirportiatacodesController::getCity($to);
                                            $to =  preg_replace('/\s+/', '%20', $to);
                                            
                                            $pnr = $book->gds_pnr;
                                            $pnr =  preg_replace('/\s+/', '%20', $pnr);
                                            // $date = "03-May-2023";
                                            $Time = preg_replace('/\s+/', '%20', $time);
                                            $date =  preg_replace('/\s+/', '%20', $date);
                                        
                                            $curl = curl_init();
                                            curl_setopt_array($curl, array(
                                                CURLOPT_URL => 'https://app-vcapi.smscloud.in/fe/api/v1/send?username=wagnistrip.api&apiKey=eRXjt4GR3ekxHwYHTSRRC1uCgvjU2gbV&unicode=false&from=WAGNIS&to='.$PhoneTo.'&text=Dear%20'.$name.',%20We%27re%20Happy%20to%20Confirm%20your%20Booking.%20PNR-'.$pnr.'%20from%20'.$from.'%20to%20'.$to.'%20at%20'.$date.'%20'.$Time.'.%20For%20any%20query%20click%20https://wagnistrip.com',
                                                CURLOPT_RETURNTRANSFER => true,
                                                CURLOPT_ENCODING => '',
                                                CURLOPT_MAXREDIRS => 10,
                                                CURLOPT_TIMEOUT => 0,
                                                CURLOPT_FOLLOWLOCATION => true,
                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                CURLOPT_CUSTOMREQUEST => 'GET',
                                            ));
                                            $response = curl_exec($curl);
                                            curl_close($curl);
                                        
                                            $both = [
                                                    'FristpnrRetrieve'=>$FristpnrRetrieve , 
                                                    'book'=>$book ,
                                            ];
                                            
                                            $bookings['both'] = $both;
                                            $bookings['email'] =  $email??$useremail[0]?? '';
                                            $bookings['title'] =   "Flight Ticket ".$activeTravellers['adults']['fistName'][0]??'';
                                            
                                            $files = PDF::loadView('flight-pages/booking-confirm/Mix-Dom-Round-pdf', $bookings);
                                        
                                            \Mail::send('booking-pdf.flight.Mix_eamil_content', $bookings, function($message)use($bookings ,$files) {
                                                $message->to("customercare@wagnistrip.com")
                                                        ->subject( $bookings['title'])
                                                        ->attachData($files->output(), $bookings['title'].".pdf");
                                            });
                                            \Mail::send('booking-pdf.flight.Mix_eamil_content', $bookings, function($message)use($bookings ,$files) {
                                                $message->to($bookings['email'])
                                                        ->subject( $bookings['title'])
                                                        ->attachData($files->output(), $bookings['title'].".pdf");
                                            });
                                        
                                        $both = [
                                                'FristpnrRetrieve'=>$FristpnrRetrieve , 
                                                'book'=>$book ,
                                        ];
                                        return view('flight-pages/booking-confirm/Mix-Dom-Round', compact('both'));
                                   }
                        } else {
                           return redirect()->route('error')->with('message', 'pnrReply  ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank,  Kindly contact on this toll free number 08069145571 for further concern.');
             
                       }
             
                   } else {
                       return redirect()->route('error')->with('message', 'createTstResponse  ---- Your booking could not be completed as we did not receive successful authorisation of the payment from your bank,  Kindly contact on this toll free number 08069145571 for further concern.');
             
                     }
             
                 } else {
                    return redirect()->route('error')->with('message', 'pricingResponse -----  Your booking could not be completed as we did not receive successful authorisation of the payment from your bank,  Kindly contact on this toll free number 08069145571 for further concern.');
             
                 }
             
              } else {
                 return redirect()->route('error')->with('message', 'createdPnr   -----   Your booking could not be completed as we did not receive successful authorisation of the payment from your bank,  Kindly contact on this toll free number 08069145571 for further concern.');
             
              }
    }
    public function GailRoundtripInterNationalResponse($req){
            $uniqueid = $req['uniqueid'];
            $type = !empty($req['type']) ? $req['type'] : '';
            $fare = !empty($req['fare']) ? $req['fare'] : '';
            
            $bookingData = Cart::where('uniqueid', $uniqueid)->first();
            $getsession = json_decode($bookingData['getsession'], true);
            $secretKey =  $this->SECRET_KEY;

            $AddPassengerDetailsBody = [
                "ClientCode" => 'MakeTrueTrip',
                "SessionID" => $getsession['SessionID'],
                "Key" => $getsession['Key'],
                "ReferenceNo" => $getsession['ReferenceNo'],
                "CustomerInfo" => [
                    "Email" => $bookingData['email'] ?? "customercare@wagnistrip.com",
                    "Mobile" => $bookingData['phonenumber'] ?? "+917669988012",
                    "Address" => "No. 5-b/13, Tilak Nagar",
                    "City" => "Delhi",
                    "State" => "Delhi",
                    "CountryCode" => "IN",
                    "CountryName" => "India",
                    "ZipCode" => "110018",
                    "PassengerDetails" => json_decode($bookingData['travllername'], true),
                    "PassengerTicketDetails" => [],
                    "Payment" => (object) [],
                    
                ],
                "SSRInfo" => [],
                "TotalAmount" => "0",
                "SSRAmount" => 0,
                "Discount" => 0,
                "GrandTotalFare" => "0",
                "IsGSTProvided" => false,
            ];

            $AddPassengerDetails = AuthenticateController::callApiWithHeadersGal("AddPassengerDetails", $AddPassengerDetailsBody);
                $BookingBody = [
                    "ClientCode" => 'MakeTrueTrip',
                    "Key" => $AddPassengerDetails['Key'],
                    "SessionID" => $getsession['SessionID'],
                    "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                    "Provider" => $getsession['Provider'],
                ];
                
                $Booking = AuthenticateController::callApiWithHeadersGal("Booking", $BookingBody);
                if (isset($Booking['Status'])) {
                    
                    $TicketBody = [
                        "ClientCode" => 'MakeTrueTrip',
                        "SessionID" => $getsession['SessionID'],
                        "Key" => $AddPassengerDetails['Key'],
                        "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                        "Provider" => $getsession['Provider'],
                    ];
                    
                    $Ticket = AuthenticateController::callApiWithHeadersGal("Ticket", $TicketBody);
                    if (isset($Ticket['Status'])) {
                        
                        $getBookingBody = [
                            "ClientCode" => 'MakeTrueTrip',
                            "SessionID" => $getsession['SessionID'],
                            "Key" => $AddPassengerDetails['Key'],
                            "ReferenceNo" => $AddPassengerDetails['ReferenceNo'],
                            "PnrNo" => "",
                            "Provider" => $getsession['Provider'],
                            "FirstName" => "",
                            "LastName" => "",
                            "From" => "",
                            "To" => "",
                        ];
                        
                        $getBooking = AuthenticateController::callApiWithHeadersGal("GetBookingDetails", $getBookingBody);
                        
                        if (($getBooking['Status'] == "Success") || ($getBooking['Status'] == "Hold")) {
                            $FareInformation[] = [
                                        "PaxType" => '',
                                        "PaxBaseFare" => '',
                                        "PaxFuelSurcharge" => 0,
                                        "PaxOtherTax" => 0,
                                        "PaxTotalFare" => $fare?? '',
                                        "PaxDiscount" => 0,
                                        "PaxCashBack" => 0,
                                        "PaxTDS" => 0,
                                        "PaxServiceTax" => 0,
                                        "PaxTransactionFee" => 0,
                                        "TravelFee" => 0,
                                        "Discount" => 0,
                                        "K3" => 265,
                                        "CGST" => 0,
                                        "SGST" => 0,
                                        "IGST" => 0,
                                        "UTGST" => 0,
                            ];
                            $saveBooking = new Booking;
                            $logs_id = GalileoFlightLog::where('session_id', '=', $getsession['SessionID'])->first('id');
                            $userId = User::where('phone', $bookingData['phonenumber'])->orWhere('email', $bookingData['email'])->first('id');
                            
                            if (empty($userId->id)) {
                                $user = new User;
                                $user->name = json_encode($bookingData['name']);
                                $user->email = strtolower($bookingData['email']);
                                $user->phone = $bookingData['phonenumber'];
                                $user->password = Hash::make("User@WT");
                                $user->save();
                                $userId = $user->id;
                            } else {
                                $userId = $userId->id;
                            }
                            
                            $saveBooking->booking_from = "GALILEO";
                            $saveBooking->booking_id = $uniqueid;
                            $saveBooking->trip = $getBooking['AirBookingResponse'][0]['Trip'];
                            $saveBooking->trip_type = $getBooking['AirBookingResponse'][0]['TripType'];
                            $saveBooking->trip_stop = "0-Stop";
                            $saveBooking->gds_pnr = $getBooking['AirBookingResponse'][0]['PNR'];
                            $saveBooking->airline_pnr = $getBooking['AirBookingResponse'][0]['FlightDetails'][0]['AirLinePNR'];
                            $saveBooking->email = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Email'];
                            $saveBooking->mobile = $getBooking['AirBookingResponse'][0]['CustomerInfo']['Mobile'];
                            $saveBooking->itinerary = json_encode($getBooking['AirBookingResponse'][0]['FlightDetails'], true);
                            // $saveBooking->baggage = json_encode($getBooking['AirBookingResponse'][0]['PaxBaggageDetails'], true);
                            $saveBooking->baggage = json_encode([[
                                        'CabIn' =>  $getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'][0]['BaggageAllowance']??'',
                                        'CheckIn' => '7KG'
                            ]], true);
                            $saveBooking->passenger = json_encode($getBooking['AirBookingResponse'][0]['CustomerInfo']['PassengerTicketDetails'], true);
                            $saveBooking->fare = json_encode($FareInformation, true);
                            // $saveBooking->fare = json_encode($getBooking['AirBookingResponse'][0]['FareDetails'], true);
                            $saveBooking->status = $getBooking['AirBookingResponse'][0]['BookingStatus'];
                            $saveBooking->logs_id = $logs_id->id;
                            $saveBooking->user_id = $userId;
                            $saveBooking->save();
                            
                            $bookings['bookings'] = $saveBooking;
                            
                            $bookings['email'] =  $saveBooking->email ??$bookingData['email'] ?? 'customercare@wagnistrip.com';
                            $bookings['title'] =   "Flight Ticket ".json_encode($bookingData['name'])??'';
                            
                            $files = PDF::loadView('flight-pages.booking-confirm.oneway-gal-flight-booking-confirm-pdf', $bookings);
                                            
                            \Mail::send('booking-pdf.flight.Gal-Tic-Mail', $bookings, function($message)use( $bookings ,$files) {
                                                $message->to("customercare@wagnistrip.com")
                                                        ->subject( $bookings['title'])
                                                        ->attachData($files->output(), $bookings['title'].".pdf");
                                            });
                            \Mail::send('booking-pdf.flight.Gal-Tic-Mail', $bookings, function($message)use( $bookings ,$files) {
                                                $message->to( $bookings['email'])
                                                        ->subject( $bookings['title'])
                                                        ->attachData($files->output(), $bookings['title'].".pdf");
                                            });

                            
                            $date  = $time = '';
                            foreach (json_decode($saveBooking->itinerary) as $key => $itinerary){
                                if($key == 0){
                                    $date = NOgetDateFormat_db($itinerary->DepartDateTime)?? '';
                                    $time =  date('H:i', strtotime($itinerary->DepartDateTime)) ;
                                }
                            }
                            $from = json_decode($saveBooking->itinerary)[0]->DepartCityName ?? json_decode($saveBooking->itinerary)->DepartCityName ?? '';
                            $to = json_decode($saveBooking->itinerary)[count(json_decode($saveBooking->itinerary))-1]->ArrivalCityName ?? json_decode($saveBooking->itinerary)->ArrivalCityName ?? '';
                            foreach (json_decode($saveBooking->passenger) as $passenger){}
                            $name = $passenger->FirstName ?? "customer";
                            $name =  preg_replace('/\s+/', '%20', $name);
                             
                            $PhoneTo = $saveBooking->mobile;
                            $PhoneTo =  preg_replace('/\s+/', '%20', $PhoneTo);
                            
                            $from = AirportiatacodesController::getCity($from);
                            $from =  preg_replace('/\s+/', '%20', $from);
                            
                            $to = AirportiatacodesController::getCity($to);
                            $to =  preg_replace('/\s+/', '%20', $to);
                            
                            $pnr = $saveBooking->gds_pnr;
                            $pnr =  preg_replace('/\s+/', '%20', $pnr);
                            
                            $Time = preg_replace('/\s+/', '%20', $time);
                            $date =  preg_replace('/\s+/', '%20', $date);
                            // $date = "03-May-2023";
                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => 'https://app-vcapi.smscloud.in/fe/api/v1/send?username=wagnistrip.api&apiKey=eRXjt4GR3ekxHwYHTSRRC1uCgvjU2gbV&unicode=false&from=WAGNIS&to='.$PhoneTo.'&text=Dear%20'.$name.',%20We%27re%20Happy%20to%20Confirm%20your%20Booking.%20PNR-'.$pnr.'%20from%20'.$from.'%20to%20'.$to.'%20at%20'.$date.'%20'.$Time.'.%20For%20any%20query%20click%20https://wagnistrip.com',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'GET',
                            ));
                            $response = curl_exec($curl);
                            curl_close($curl);
                            
                            
                            return view('flight-pages.booking-confirm.oneway-gal-flight-booking-confirm')->with('bookings', $saveBooking);
                        } else {
                            return redirect()->route('error')->with('msg', "Your Booking Has Been " . $getBooking['Status'] . "!!!, Kindly contact on this toll free number 08069145571 for further concern.");
                        }
                    } else {
                        // dd($Ticket, " This is ticketing line 368");
                        return redirect()->route('error')->with('msg', "Your Booking Has Been " . $Ticket['Status'] . "!! ,  Kindly contact on this toll free number 08069145571 for further concern.");
                    }
                } else {
                    return redirect()->route('error')->with('msg', "Your Ticket Booking Faild, Kindly contact on this toll free number 08069145571 for further concern.");
                }
    }
    public function cancelTransaction(Request $request){
        // payment mishappened
        
    }
}

<?php

namespace App\Http\Controllers\Hotel\Amadeus;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Hotel\Amadeus\HeaderController;
use Illuminate\Http\Request;
use App\Models\HotelAddPaymentDetails;

class HotelBookingController extends Controller
{
    public  function HotelReview(Request $request)
    {
        $data = $request->all();
        $showreturnDate = $request['showreturnDate'];
        $showdepartDate = $request['showdepartDate'];
        $HotelCityCode = $request['HotelCityCode'];
        $header = json_decode($request['header']);
        $action = "Hotel_EnhancedPricing_2.0";
        $xml = '';
        $xml .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:sec="http://xml.amadeus.com/2010/06/Security_v1" xmlns:typ="http://xml.amadeus.com/2010/06/Types_v1" xmlns:iat="http://www.iata.org/IATA/2007/00/IATA2010.1" xmlns:app="http://xml.amadeus.com/2010/06/AppMdw_CommonTypes_v3" xmlns:link="http://wsdl.amadeus.com/2010/06/ws/Link_v1" xmlns:ses="http://xml.amadeus.com/2010/06/Session_v3" xmlns:ns="http://www.opentravel.org/OTA/2003/05">';
        $xml .= HeaderController::headerInSeries($action, $header);
        $xml .= '<soapenv:Body>';
        $xml .= '<OTA_HotelAvailRQ xmlns="http://www.opentravel.org/OTA/2003/05" EchoToken="Pricing" Version="4.000" PrimaryLangID="EN" SummaryOnly="false" RateRangeOnly="false">';
        $xml .= '<AvailRequestSegments>';
        $xml .= '<AvailRequestSegment>';
        $xml .= '<HotelSearchCriteria>';
        $xml .= '<Criterion ExactMatch="true">';
        $xml .= '<HotelRef ChainCode="' . $request['ChainCode'] . '" HotelCode="' . $request['HotelCode'] . '" HotelCityCode="' . $request['HotelCityCode'] . '" HotelCodeContext="' . $request['HotelCodeContext'] . '" />';
        $xml .= '<StayDateRange Start="' . $request['startDate'] . '" End="' . $request['endDate'] . '" />';
        $xml .= '<RatePlanCandidates>';
        $xml .= '<RatePlanCandidate RatePlanCode="013" />';
        $xml .= '</RatePlanCandidates>';
        $xml .= '<RoomStayCandidates>';
        $xml .= '<RoomStayCandidate RoomTypeCode="' . $request['RoomTypeCode'] . '" RoomID="1" Quantity="1" BookingCode="' . $request['BookingCode'] . '">';
        $xml .= '<GuestCounts IsPerRoom="true">';
        $xml .= '<GuestCount AgeQualifyingCode="10" Count="2" />';
        $xml .= '</GuestCounts>';
        $xml .= '</RoomStayCandidate>';
        $xml .= '</RoomStayCandidates>';
        $xml .= '</Criterion>';
        $xml .= '</HotelSearchCriteria>';
        $xml .= '</AvailRequestSegment>';
        $xml .= '</AvailRequestSegments>';
        $xml .= '</OTA_HotelAvailRQ>';
        $xml .= '</soapenv:Body>';
        $xml .= '</soapenv:Envelope>';

        $result = HeaderController::xmlCallWithBodyAndHeader($xml, $action);
        $detail = $result['body'];
        if(!isset($detail['OTA_HotelAvailRS'])){
            echo "Session Time out";
        }else{
            $header = $result['header']['awsseSession'];
            $requestDetails = $request->all();
            // dd($requestDetails);
            // change by uddeshya 
            $request->session()->put('amount', $detail);
            //////////////////////////// 
            
            return view('hotel-pages.review-hotel',compact('detail', 'header', 'requestDetails', 'data','showdepartDate','showdepartDate','HotelCityCode'));
        }
    }

    public function HotelPay(Request $request){
        $data = $request->all();
        
        $showreturnDate = $request['showreturnDate'];
        $showdepartDate = $request['showdepartDate'];
        $HotelCityCode  = $request['HotelCityCode '];
        // change by uddeshya 
        $session_data = session('amount');
        $amountData=$session_data["OTA_HotelAvailRS"]["RoomStays"]["RoomStay"]["Total"]["@attributes"];
        $AmountAfterTax = $amountData['AmountAfterTax'];
        $data["amount"] = $AmountAfterTax;
        // dd($data , $AmountAfterTax);
        // change by uddeshya 

        return view('hotel-pages.payment', compact('data','showdepartDate','showreturnDate', 'HotelCityCode'));
    }

    public function HotelAddPax(Request $request) 
    {
        $data = $request->all();
        $postvalue = unserialize(base64_decode($request['data']));
        // dd($postvalue);
        $payModel = new HotelAddPaymentDetails;
        $payModel->address = $postvalue['address'];
        $payModel->hotelname = $postvalue['hotelname'];
        $payModel->check = $postvalue['checkin']. "|" .$postvalue['checkout'];
        $payModel->adult = $postvalue['adult'];
        $payModel->name = json_encode($postvalue['adultFirstName'], true) .' '. json_encode($postvalue['adultLastName'], true);
        $payModel->phone = $postvalue['phoneNumber'];
        $payModel->email = $postvalue['email'];
        $payModel->amount = $postvalue['amount'];
        $payModel->uniqueid = "MMTHOTEL".rand(1,1000);
        $payModel->payment_id = $request['razorpay_payment_id'];
        $payModel->booking_code = $postvalue['booking_code'];
        $payModel->save();

        // dd($payModel);
        
        $action = "PNRADD_17_1_1A";
        $header = json_decode($postvalue['header']);
        $xml = '';
        $xml .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:sec="http://xml.amadeus.com/2010/06/Security_v1" xmlns:typ="http://xml.amadeus.com/2010/06/Types_v1" xmlns:iat="http://www.iata.org/IATA/2007/00/IATA2010.1" xmlns:app="http://xml.amadeus.com/2010/06/AppMdw_CommonTypes_v3" xmlns:link="http://wsdl.amadeus.com/2010/06/ws/Link_v1" xmlns:ses="http://xml.amadeus.com/2010/06/Session_v3" xmlns:pnr="http://xml.amadeus.com/PNRADD_14_1_1A">';
        $xml .= HeaderController::headerInSeries($action, $header);
        $xml .= '<soapenv:Body>';
        $xml .= '<PNR_AddMultiElements xmlns="http://xml.amadeus.com/PNRADD_17_1_1A">';
        $xml .= '<pnrActions>';
        $xml .= '<optionCode>0</optionCode>';
        $xml .= '</pnrActions>';
        $xml .= '<travellerInfo>';
        $xml .= '<elementManagementPassenger>';
        $xml .= '<reference>';
        $xml .= '<qualifier>PR</qualifier>';
        $xml .= '<number>1</number>';
        $xml .= '</reference>';
        $xml .= '<segmentName>NM</segmentName>';
        $xml .= '</elementManagementPassenger>';
        $xml .= '<passengerData>';
        $xml .= '<travellerInformation>';
        $xml .= '<traveller>';
        $xml .= '<surname>'. $postvalue['adultLastName'][0] .'</surname>';
        $xml .= '<quantity>1</quantity>';
        $xml .= '</traveller>';
        $xml .= '<passenger>';
        $xml .= '<firstName>'. $postvalue['adultFirstName'][0] .'</firstName>';
        $xml .= '</passenger>';
        $xml .= '</travellerInformation>';
        $xml .= '</passengerData>';
        $xml .= '</travellerInfo>';
        $xml .= '<dataElementsMaster>';
        $xml .= '<marker1/>';
        $xml .= '<dataElementsIndiv>';
        $xml .= '<elementManagementData>';
        $xml .= '<segmentName>RM</segmentName>';
        $xml .= '</elementManagementData>';
        $xml .= '<miscellaneousRemark>';
        $xml .= '<remarks>';
        $xml .= '<type>RM</type>';
        $xml .= '<freetext>MAKE TRUE TRIP PRIVATE LIMITED.</freetext>';
        $xml .= '</remarks>';
        $xml .= '</miscellaneousRemark>';
        $xml .= '</dataElementsIndiv>';
        $xml .= '<dataElementsIndiv>';
        $xml .= '<elementManagementData>';
        $xml .= '<reference>';
        $xml .= '<qualifier>OT</qualifier>';
        $xml .= '<number>3</number>';
        $xml .= '</reference>';
        $xml .= '<segmentName>RF</segmentName>';
        $xml .= '</elementManagementData>';
        $xml .= '<freetextData>';
        $xml .= '<freetextDetail>';
        $xml .= '<subjectQualifier>3</subjectQualifier>';
        $xml .= '<type>3</type>';
        $xml .= '</freetextDetail>';
        $xml .= '<longFreetext>' . $postvalue['email'] . '</longFreetext>';
        $xml .= '</freetextData>';
        $xml .= '</dataElementsIndiv>';
        $xml .= '<dataElementsIndiv>';
        $xml .= '<elementManagementData>';
        $xml .= '<reference>';
        $xml .= '<qualifier>OT</qualifier>';
        $xml .= '<number>3</number>';
        $xml .= '</reference>';
        $xml .= '<segmentName>TK</segmentName>';
        $xml .= '</elementManagementData>';
        $xml .= '<ticketElement>';
        $xml .= '<ticket>';
        $xml .= '<indicator>TL</indicator>';
        $xml .= '<date>' . date("dmy") . '</date>';
        $xml .= '</ticket>';
        $xml .= '</ticketElement>';
        $xml .= '</dataElementsIndiv>';
        $xml .= '<dataElementsIndiv>';
        $xml .= '<elementManagementData>';
        $xml .= '<reference>';
        $xml .= '<qualifier>OT</qualifier>';
        $xml .= '<number>3</number>';
        $xml .= '</reference>';
        $xml .= '<segmentName>AP</segmentName>';
        $xml .= '</elementManagementData>';
        $xml .= '<freetextData>';
        $xml .= '<freetextDetail>';
        $xml .= '<subjectQualifier>3</subjectQualifier>';
        $xml .= '<type>3</type>';
        $xml .= '</freetextDetail>';
        $xml .= '<longFreetext>'. $postvalue['phoneNumber'] .'</longFreetext>';
        $xml .= '</freetextData>';
        $xml .= '</dataElementsIndiv>';
        $xml .= '</dataElementsMaster>';
        $xml .= '</PNR_AddMultiElements>';
        $xml .= '</soapenv:Body>';
        $xml .= '</soapenv:Envelope>';
        // dd($xml);
        
        $result = HeaderController::xmlCallWithBodyAndHeader2($xml, "PNRADD_17_1_1A_0");
        $detail = $result['body'];
        $headerSell = json_encode($result['header']['awsseSession'], true);
        $headerSell = json_decode($headerSell);
        // dd($detail);
        $actionSell = "HBKRCQ_17_1_1A";
        $xmlsell = '';
        $xmlsell .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:sec="http://xml.amadeus.com/2010/06/Security_v1" xmlns:typ="http://xml.amadeus.com/2010/06/Types_v1" xmlns:iat="http://www.iata.org/IATA/2007/00/IATA2010.1" xmlns:app="http://xml.amadeus.com/2010/06/AppMdw_CommonTypes_v3" xmlns:link="http://wsdl.amadeus.com/2010/06/ws/Link_v1" xmlns:ses="http://xml.amadeus.com/2010/06/Session_v3" xmlns:hbk="http://xml.amadeus.com/HBKRCQ_13_2_1A">';
        $xmlsell .= HeaderController::headerInSeries($actionSell, $headerSell);
        $xmlsell .= '<soapenv:Body>';
        $xmlsell .= '<Hotel_Sell xmlns="http://xml.amadeus.com/HBKRCQ_17_1_1A">';
        $xmlsell .= '<roomStayData>';
        $xmlsell .= '<markerRoomStayData></markerRoomStayData>';
        $xmlsell .= '<globalBookingInfo>';
        $xmlsell .= '<markerGlobalBookingInfo></markerGlobalBookingInfo>';
        $xmlsell .= '<bookingSource>';
        $xmlsell .= '<originIdentification>';
        $xmlsell .= '<originatorId>14385420</originatorId>';
        $xmlsell .= '</originIdentification>';
        $xmlsell .= '</bookingSource>';
        $xmlsell .= '<representativeParties>';
        $xmlsell .= '<occupantList>';
        $xmlsell .= '<passengerReference>';
        $xmlsell .= '<type>BHO</type>';
        $xmlsell .= '<value>2</value>';
        $xmlsell .= '</passengerReference>';
        $xmlsell .= '</occupantList>';
        $xmlsell .= '</representativeParties>';
        $xmlsell .= '</globalBookingInfo>';
        $xmlsell .= '<roomList>';
        $xmlsell .= '<markerRoomstayQuery></markerRoomstayQuery>';
        $xmlsell .= '<roomRateDetails>';
        $xmlsell .= '<marker></marker>';
        $xmlsell .= '<hotelProductReference>';
        $xmlsell .= '<referenceDetails>';
        $xmlsell .= '<type>BC</type>';
        $xmlsell .= '<value>' . $postvalue['booking_code'] . '</value>';
        $xmlsell .= '</referenceDetails>';
        $xmlsell .= '</hotelProductReference>';
        $xmlsell .= '<markerOfExtra></markerOfExtra>';
        $xmlsell .= '</roomRateDetails>';
        $xmlsell .= '<guaranteeOrDeposit>';
        $xmlsell .= '<paymentInfo>';
        $xmlsell .= '<paymentDetails>';
        $xmlsell .= '<formOfPaymentCode>1</formOfPaymentCode>';
        $xmlsell .= '<paymentType>1</paymentType>';
        $xmlsell .= '<serviceToPay>3</serviceToPay>';
        $xmlsell .= '</paymentDetails>';
        $xmlsell .= '</paymentInfo>';
        $xmlsell .= '<groupCreditCardInfo>';
        $xmlsell .= '<creditCardInfo>';
        $xmlsell .= '<ccInfo>';
        $xmlsell .= '<vendorCode>VI</vendorCode>';
        $xmlsell .= '<cardNumber>4263982640269299</cardNumber>';
        $xmlsell .= '<securityId>837</securityId>';
        $xmlsell .= '<expiryDate>0223</expiryDate>';
        $xmlsell .= '<ccHolderName>MAKETRUETRIP</ccHolderName>';
        $xmlsell .= '</ccInfo>';
        $xmlsell .= '</creditCardInfo>';
        $xmlsell .= '</groupCreditCardInfo>';
        $xmlsell .= '</guaranteeOrDeposit>';
        $xmlsell .= '</roomList>';
        $xmlsell .= '</roomStayData>';
        $xmlsell .= '</Hotel_Sell>';
        $xmlsell .= '</soapenv:Body>';
        $xmlsell .= '</soapenv:Envelope>';
        $resultSell = HeaderController::xmlCallWithBodyAndHeader2($xmlsell, $actionSell);
        $resultDetailBody = $resultSell['body'];
        $headerSell2 = json_encode($resultSell['header']['awsseSession'], true);
        $headerSell2 = json_decode($headerSell2);
        $actionRetrive = "PNRADD_17_1_1A";
        $xmlsellRetrive = '';
        $xmlsellRetrive .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:sec="http://xml.amadeus.com/2010/06/Security_v1" xmlns:typ="http://xml.amadeus.com/2010/06/Types_v1" xmlns:iat="http://www.iata.org/IATA/2007/00/IATA2010.1" xmlns:app="http://xml.amadeus.com/2010/06/AppMdw_CommonTypes_v3" xmlns:link="http://wsdl.amadeus.com/2010/06/ws/Link_v1" xmlns:ses="http://xml.amadeus.com/2010/06/Session_v3" xmlns:pnr="http://xml.amadeus.com/PNRADD_17_1_1A">';
        $xmlsellRetrive .= HeaderController::headerInSeries($actionRetrive, $headerSell2);
        $xmlsellRetrive .= '<soapenv:Body>';
        $xmlsellRetrive .= '<PNR_AddMultiElements xmlns="http://xml.amadeus.com/PNRADD_17_1_1A">';
        $xmlsellRetrive .= '<pnrActions>';
        $xmlsellRetrive .= '<optionCode>10</optionCode>';
        $xmlsellRetrive .= '</pnrActions>';
        $xmlsellRetrive .= '<dataElementsMaster>';
        $xmlsellRetrive .= '<marker1 />';
        $xmlsellRetrive .= '<dataElementsIndiv>';
        $xmlsellRetrive .= '<elementManagementData>';
        $xmlsellRetrive .= '<segmentName>RM</segmentName>';
        $xmlsellRetrive .= '</elementManagementData>';
        $xmlsellRetrive .= '<miscellaneousRemark>';
        $xmlsellRetrive .= '<remarks>';
        $xmlsellRetrive .= '<type>RM</type>';
        $xmlsellRetrive .= '<freetext>MakeTrueTrip Pvt. Ltd.</freetext>';
        $xmlsellRetrive .= '</remarks>';
        $xmlsellRetrive .= '</miscellaneousRemark>';
        $xmlsellRetrive .= '</dataElementsIndiv>';
        $xmlsellRetrive .= '<dataElementsIndiv>';
        $xmlsellRetrive .= '<elementManagementData>';
        $xmlsellRetrive .= '<segmentName>RF</segmentName>';
        $xmlsellRetrive .= '</elementManagementData>';
        $xmlsellRetrive .= '<freetextData>';
        $xmlsellRetrive .= '<freetextDetail>';
        $xmlsellRetrive .= '<subjectQualifier>3</subjectQualifier>';
        $xmlsellRetrive .= '<type>P22</type>';
        $xmlsellRetrive .= '</freetextDetail>';
        $xmlsellRetrive .= '<longFreetext>BOOKIN IS VIP</longFreetext>';
        $xmlsellRetrive .= '</freetextData>';
        $xmlsellRetrive .= '</dataElementsIndiv>';
        $xmlsellRetrive .= '</dataElementsMaster>';
        $xmlsellRetrive .= '</PNR_AddMultiElements>';
        $xmlsellRetrive .= '</soapenv:Body>';
        $xmlsellRetrive .= '</soapenv:Envelope>';
        // dd($xmlsellRetrive);
        $resultSellRetrive = HeaderController::xmlCallWithBodyAndHeader2($xmlsellRetrive, "PNRADD_17_1_1A");
        $resultSellRetriveBody = $resultSellRetrive['body'];
        // dd($resultSellRetriveBody);
        // uddeshya code error hendiling 
        if(!isset($resultSellRetriveBody['PNR_Reply']['pnrHeader']['reservationInfo']['reservation']['controlNumber'])){
            return redirect()->route('error')->with('msg', 'Undefined index: controlNumber.');
        }
        // end uddeshya code 
        $controlNumber = $resultSellRetriveBody['PNR_Reply']['pnrHeader']['reservationInfo']['reservation']['controlNumber'];
        $headerSell3 = json_encode($resultSellRetrive['header']['awsseSession'], true);
        $headerSell3 = json_decode($headerSell3);
        // dd($headerSell3);
        $actionRetriveRepeat = "PNRRET_17_1_1A";
        $xmlsellRetriveRepeat = '';
        $xmlsellRetriveRepeat .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:sec="http://xml.amadeus.com/2010/06/Security_v1" xmlns:typ="http://xml.amadeus.com/2010/06/Types_v1" xmlns:iat="http://www.iata.org/IATA/2007/00/IATA2010.1" xmlns:app="http://xml.amadeus.com/2010/06/AppMdw_CommonTypes_v3" xmlns:link="http://wsdl.amadeus.com/2010/06/ws/Link_v1" xmlns:ses="http://xml.amadeus.com/2010/06/Session_v3" xmlns:pnr="http://xml.amadeus.com/PNRADD_17_1_1A">';
        $xmlsellRetriveRepeat .= HeaderController::headerInSeries($actionRetriveRepeat, $headerSell3);
        $xmlsellRetriveRepeat .= '<soapenv:Body>';
        $xmlsellRetriveRepeat .= '<PNR_Retrieve xmlns="http://xml.amadeus.com/PNRRET_17_1_1A">';
        $xmlsellRetriveRepeat .= '<retrievalFacts>';
        $xmlsellRetriveRepeat .= '<retrieve>';
        $xmlsellRetriveRepeat .= '<type>2</type>';
        $xmlsellRetriveRepeat .= '</retrieve>';
        $xmlsellRetriveRepeat .= '<reservationOrProfileIdentifier>';
        $xmlsellRetriveRepeat .= '<reservation>';
        // $xmlsellRetriveRepeat .= '<controlNumber>'.$controlNumber.'</controlNumber>';
        $xmlsellRetriveRepeat .= '<controlNumber>B1</controlNumber>';
        $xmlsellRetriveRepeat .= '</reservation>';
        $xmlsellRetriveRepeat .= '</reservationOrProfileIdentifier>';
        $xmlsellRetriveRepeat .= '</retrievalFacts>';
        $xmlsellRetriveRepeat .= '</PNR_Retrieve>';
        $xmlsellRetriveRepeat .= '</soapenv:Body>';
        $xmlsellRetriveRepeat .= '</soapenv:Envelope>';
        $resultsellRetriveRepeat = HeaderController::xmlCallWithBodyAndHeader2($xmlsellRetriveRepeat, $actionRetriveRepeat);
        // dd($resultsellRetriveRepeat['body']['soapFault']);
        // dd($resultsellRetriveRepeat['body'] ,$resultsellRetriveRepeat['body']['soapFault']);
        // dd($resultsellRetriveRepeat);
        $maildata = [
            'resultsellRetriveRepeat'=> 'data',
            'postvalue'=>'data2' ,
            'data'=> 'datat6666'
        ];
        // MailController::sendToOffice($maildata);
        // MailController::bassendToCus($maildata);
        
        return view('hotel-pages.ticket', compact('resultsellRetriveRepeat','postvalue' , 'data'));

    }

}

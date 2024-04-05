<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Airline\Galileo\AuthenticateController;

class CartController extends Controller
{

    public function paymentSave(Request $request) {
        $input = $request->all();
        $otherInformations = json_decode($request['otherInformations'], true);
        
        $flightdata = [
            'marketingCompany_1' => $otherInformations['marketingCompany_1']??$otherInformations['marketingCompany']??null,
            'marketingCompany_2' => $otherInformations['marketingCompany_2']??null,
            'marketingCompany_3' => $otherInformations['marketingCompany_3']??null,
        ];
        // dd($request->all());
        $travller = [
            'adults' => [
                'title' => $request['adultTitle']?? null,
                'fistName' => $request['adultFirstName'],
                'lastName' => $request['adultLastName'],
                'adultNationality' => $request['adultNationality'] ?? null,
                'adultDOB' => $request['adultDOB'] ?? null,
                'adultPassportNo' => $request['adultPassportNo'] ?? null,
            ],
            'childs' => [
                'title' => $request['childTitle'] ?? null,
                'fistName' => $request['childFirstName'] ?? null,
                'lastName' => $request['childLastName'] ?? null,
                'childNationality' => $request['childNationality'] ?? null,
                'childDOB' => $request['childDOB'] ?? null,
                'childPassportNo' => $request['childPassportNo'] ?? null,
            ],
            'infants' => [
                'title' => $request['infantTitle'] ?? null,
                'fistName' => $request['infantFirstName'] ?? null,
                'lastName' => $request['infantLastName'] ?? null,
                'infantDOB' => $request['infantDOB'] ?? null,
                'infantNationality' => $request['infantNationality'] ?? null,
                'infantPassportNo' => $request['infantPassportNo'] ?? null,
            ],
        ];

        $getsessions = json_decode($request->getsessions, true);
        if (isset($getsessions['sessionOutbound'])) {
            $newSession = $getsessions['sessionOutbound']['sessionId'];
        }else {
            $newSession = $getsessions['sessionId'];
        }
        $uniqueid = "MTTAMD" . $newSession;
        $trip = $request['trip'];
        $data = ['uniqueid' => $uniqueid, 'fare' => $request->fare];
        $sDetail = new Cart;
        $sDetail->travellerquantity = $request->travellers;
        $sDetail->getsession = $request->getsessions;
        $sDetail->otherInformation = $request->otherInformations;
        $sDetail->fare = $request->fare;
        $sDetail->travllername = json_encode($travller, true);
        $sDetail->phonenumber = $request->phoneNumber;
        $sDetail->email = $request->email;
        $sDetail->uniqueid = $uniqueid;
        $sDetail->save();
       // dd($data ,  $trip);
        return view('payment', compact('data', 'trip' , 'travller' , 'sDetail' , 'flightdata' ,'input'));
    }

    public function paymentStatus()
    {
        return view('payment');
    }

    public function PaymentSaveGalelio(Request $request)
    {
        $input = $request->all();
        
       // dd($input);
        
        $flightdata = [
            'marketingCompany_1' => $request['otherInformations']??null,
        ];
        // dd($request->all());
        $passengers = json_decode($request['travellers'], true);

        $travellerDetails = [];
        
       
        if ((int) $passengers['noOfAdults'] != 0 && (int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] === 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
                $adultDOB = "";
                $adultPED = "";
                if(!empty($request['adultDOB'][$i])){
                    $adultDOB = \DateTime::createFromFormat("Y-m-d", $request['adultDOB'][$i]);
                    $adultDOB = $adultDOB->format("d/m/Y");
                    $adultPED = \DateTime::createFromFormat("Y-m-d", $request['adultPED'][$i]);
                    $adultPED = $adultPED->format("d/m/Y");
                }

                $adult = [
                   
                    "Title" => $request['adultTitle'][$i],
                    "Gender" => $request['adultGender'][$i],
                    "FirstName" => $request['adultFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['adultLastName'][$i],
                    "DateOfBirth" => $adultDOB ?? "",
                    "PaxType" => "ADT",
                    "PassportNumber" => $request['adultPassportNo'][$i] ?? "",
                    "Nationality" => $request['adultNationality'][$i] ?? "",
                    "IssuingCountry" => $request['adultIssuingCountry'][$i] ?? "",
                    "ExpiryDate" => $adultPED ?? ""
                ];

                array_push($travellerDetails, $adult);
            }

        } elseif ((int) $passengers['noOfAdults'] != 0 && (int) $passengers['noOfChilds'] != 0 && (int) $passengers['noOfInfants'] === 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
                $adultDOB = "";
                $adultPED = "";
                if(!empty($request['adultDOB'][$i])){
                    $adultDOB = \DateTime::createFromFormat("Y-m-d", $request['adultDOB'][$i]);
                    $adultDOB = $adultDOB->format("d/m/Y");
                    $adultPED = \DateTime::createFromFormat("Y-m-d", $request['adultPED'][$i]);
                    $adultPED = $adultPED->format("d/m/Y");
                }

                $adult = [
                    "Title" => $request['adultTitle'][$i],
                    "Gender" => $request['adultGender'][$i],
                    "FirstName" => $request['adultFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['adultLastName'][$i],
                    "DateOfBirth" => $adultDOB,
                    "PaxType" => "ADT",
                    "PassportNumber" => $request['adultPassportNo'][$i] ?? "",
                    "Nationality" => $request['adultNationality'][$i] ?? "",
                    "IssuingCountry" => $request['adultIssuingCountry'][$i] ?? "",
                    "ExpiryDate" => $adultPED ?? ""
                ];

                array_push($travellerDetails, $adult);
            }

            for ($i = 0; $i < $passengers['noOfChilds']; $i++) {
                $chdDob = \DateTime::createFromFormat("Y-m-d", $request['childDOB'][$i]);
                $chdDob = $chdDob->format("d/m/Y");
                $childPED = "";
                if (!empty($request['childPED'][$i])) {
                    $childPED = \DateTime::createFromFormat("Y-m-d", $request['childPED'][$i]);
                    $childPED = $childPED->format("d/m/Y");
                }
                $child = [
                    "Title" => $request['childTitle'][$i],
                    "Gender" => $request['childGender'][$i],
                    "FirstName" => $request['childFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['childLastName'][$i],
                    "DateOfBirth" => $chdDob,
                    "PaxType" => "CHD",
                    "PassportNumber" =>  $request['childPassportNo'][$i] ?? "",
                    "Nationality" => $request['childNationality'][$i] ?? "",
                    "IssuingCountry" => $request['childIssuingCountry'][$i] ?? "",
                    "ExpiryDate" => $childPED ?? ""
                ];

                array_push($travellerDetails, $child);
            }

        } elseif ((int) $passengers['noOfAdults'] != 0 && (int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] != 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
                $adultDOB = "";
                $adultPED = "";
                if(!empty($request['adultDOB'][$i])){
                    $adultDOB = \DateTime::createFromFormat("Y-m-d", $request['adultDOB'][$i]);
                    $adultDOB = $adultDOB->format("d/m/Y");
                    $adultPED = \DateTime::createFromFormat("Y-m-d", $request['adultPED'][$i]);
                    $adultPED = $adultPED->format("d/m/Y");
                }

                $adult = [
                    "Title" => $request['adultTitle'][$i],
                    "Gender" => $request['adultGender'][$i],
                    "FirstName" => $request['adultFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['adultLastName'][$i],
                    "DateOfBirth" => $adultDOB,
                    "PaxType" => "ADT",
                    "PassportNumber" => $request['adultPassportNo'][$i] ?? "",
                    "Nationality" => $request['adultNationality'][$i] ?? "",
                    "IssuingCountry" => $request['adultIssuingCountry'][$i] ?? "",
                    "ExpiryDate" => $adultPED ?? ""
                ];
                array_push($travellerDetails, $adult);
            }

            for ($i = 0; $i < $passengers['noOfInfants']; $i++) {

                $infantPED = "";
                $infDob = \DateTime::createFromFormat("Y-m-d", $request['infantDOB'][$i]);
                $infDob = $infDob->format("d/m/Y");
                if (!empty($request['infantPED'][$i])) {
                   $infantPED = \DateTime::createFromFormat("Y-m-d", $request['infantPED'][$i]);
                   $infantPED = $infantPED->format("d/m/Y");
                }
                $infant = [
                    "Title" => $request['infantTitle'][$i],
                    "Gender" => $request['infantGender'][$i],
                    "FirstName" => $request['infantFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['infantLastName'][$i],
                    "DateOfBirth" => $infDob,
                    "PaxType" => "INF",
                    "PassportNumber" => $request['infantPassportNo'][$i] ?? "",
                    "Nationality" => $request['infantNationality'][$i] ?? "",
                    "IssuingCountry" => $request['infantIssuingCountry'][$i] ?? "",
                    "ExpiryDate" => $infantPED ?? ""
                ];
                
                
                
                array_push($travellerDetails, $infant);
            }

        } elseif ((int) $passengers['noOfAdults'] > 0 && (int) $passengers['noOfChilds'] > 0 && (int) $passengers['noOfInfants'] > 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
                $adultDOB = "";
                $adultPED = "";
                if(!empty($request['adultDOB'][$i])){
                    $adultDOB = \DateTime::createFromFormat("Y-m-d", $request['adultDOB'][$i]);
                    $adultDOB = $adultDOB->format("d/m/Y");
                    $adultPED = \DateTime::createFromFormat("Y-m-d", $request['adultPED'][$i]);
                    $adultPED = $adultPED->format("d/m/Y");
                }

                $adult = [
                    "Title" => $request['adultTitle'][$i],
                    "Gender" => $request['adultGender'][$i],
                    "FirstName" => $request['adultFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['adultLastName'][$i],
                    "DateOfBirth" => $adultDOB,
                    "PaxType" => "ADT",
                    "PassportNumber" => $request['adultPassportNo'][$i] ?? "",
                    "Nationality" => $request['adultNationality'][$i] ?? "",
                    "IssuingCountry" => $request['adultIssuingCountry'][$i] ?? "",
                    "ExpiryDate" => $adultPED ?? ""
                ];

                array_push($travellerDetails, $adult);
            }

            for ($i = 0; $i < $passengers['noOfChilds']; $i++) {
                $chdDob = \DateTime::createFromFormat("Y-m-d", $request['childDOB'][$i]);
                $chdDob = $chdDob->format("d/m/Y");
                $childPED = "";
                if (!empty($request['childPED'][$i])) {
                    $childPED = \DateTime::createFromFormat("Y-m-d", $request['childPED'][$i]);
                    $childPED = $childPED->format("d/m/Y");
                }
                $child = [
                    "Title" => $request['childTitle'][$i],
                    "Gender" => $request['childGender'][$i],
                    "FirstName" => $request['childFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['childLastName'][$i],
                    "DateOfBirth" => $chdDob,
                    "PaxType" => "CHD",
                    "PassportNumber" =>  $request['childPassportNo'][$i] ?? "",
                    "Nationality" => $request['childNationality'][$i] ?? "",
                    "IssuingCountry" => $request['childIssuingCountry'][$i] ?? "",
                    "ExpiryDate" => $childPED ?? ""
                ];

                array_push($travellerDetails, $child);
            }

            for ($i = 0; $i < $passengers['noOfInfants']; $i++) {

                $infantPED = "";
                $infDob = \DateTime::createFromFormat("Y-m-d", $request['infantDOB'][$i]);
                $infDob = $infDob->format("d/m/Y");
                if (!empty($request['infantPED'][$i])) {
                   $infantPED = \DateTime::createFromFormat("Y-m-d", $request['infantPED'][$i]);
                   $infantPED = $infantPED->format("d/m/Y");
                }
                $infant = [
                    "Title" => $request['infantTitle'][$i],
                    "Gender" => $request['infantGender'][$i],
                    "FirstName" => $request['infantFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['infantLastName'][$i],
                    "DateOfBirth" => $infDob,
                    "PaxType" => "INF",
                    "PassportNumber" => $request['infantPassportNo'][$i] ?? "",
                    "Nationality" => $request['infantNationality'][$i] ?? "",
                    "IssuingCountry" => $request['infantIssuingCountry'][$i] ?? "",
                    "ExpiryDate" => $infantPED ?? ""
                ];
                
                array_push($travellerDetails, $infant);
            }
        }

        $getsession = [
            'SessionID' => $request['SessionID'],
            'ReferenceNo' => $request['ReferenceNo'],
            'Provider' =>  $request['Provider'],
            'Key'      => $request['Key'],
        ];

        $uniqueid = "WT" .$getsession['ReferenceNo']. rand(999, 99999).$getsession['ReferenceNo'];
        $save = new Cart;
        $save->travellerquantity = $request['travellers'];
        $save->getsession = json_encode($getsession, true);
        $save->otherInformation = $request['trip'];
        $save->fare = $request['fare'];
        $save->travllername = json_encode($travellerDetails, true);
        $save->phonenumber = $request['phoneNumber'];
        $save->email = $request['email'];
        $save->uniqueid = $uniqueid;
        $save->save();
        $data = $save;
        
        // $dummy="test";
        // $AddPassengerDetails = AuthenticateController::callApiWithHeadersGal("AddPassengerDetails", $AddPassengerDetailsBody);

        $BookingBody = [
            "ClientCode" => "MakeTrueTrip",
                    "SessionID" => $getsession['SessionID'],
                    "Key" => $getsession['Key'],
                    "ReferenceNo" => $getsession['ReferenceNo'],
                    "Provider" => $getsession['Provider'],
        ];
        $Booking = AuthenticateController::callApiWithHeadersGal("Booking", $BookingBody);
      // dd($data,$flightdata,$input);
        return view('flight-pages.oneway-flight-pages.payment', compact('data','flightdata','input'));

    }

    public function PaymentSaveGalelioRoundTrip(Request $request)
    {
        
  $input =  $request->all();
         $passengers = json_decode($request['travellers'], true);
        $travellerDetails = [];
        // dd($passengers,$travellerDetails);
        if ((int) $passengers['noOfAdults'] != 0 && (int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] === 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
                $adult = [
                    "Title" => $request['adultTitle'][$i],
                    "Gender" => $request['adultGender'][$i],
                    "FirstName" => $request['adultFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['adultLastName'][$i],
                    "DateOfBirth" => "",
                    "PaxType" => "ADT",
                    "PassportNumber" => "",
                    "Nationality" => "",
                    "IssuingCountry" => "",
                    "ExpiryDate" => ""
                ];
                array_push($travellerDetails, $adult);
            }

        } elseif ((int) $passengers['noOfAdults'] != 0 && (int) $passengers['noOfChilds'] != 0 && (int) $passengers['noOfInfants'] === 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
                $adult = [
                    "Title" => $request['adultTitle'][$i],
                    "Gender" => $request['adultGender'][$i],
                    "FirstName" => $request['adultFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['adultLastName'][$i],
                    "DateOfBirth" => "",
                    "PaxType" => "ADT",
                    "PassportNumber" => "",
                    "MealType" => "",
                    "MealCode" => "",
                    "FFNo" => "",
                    "InfAssPaxName" => "",
                    "TicketNo" => "",
                    "Status" => "",
                    "Nationality" => "",
                    "IssuingCountry" => "",
                    "ExpiryDate" => ""
                ];

                array_push($travellerDetails, $adult);
            }
            
            

            for ($i = 0; $i < $passengers['noOfChilds']; $i++) {
                $chdDob = \DateTime::createFromFormat("Y-m-d", $request['childDOB'][$i]);
                $chdDob = $chdDob->format("d/m/Y");
                $child = [
                    "Title" => $request['childTitle'][$i],
                    "Gender" => $request['childGender'][$i],
                    "FirstName" => $request['childFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['childLastName'][$i],
                    "DateOfBirth" => $chdDob,
                    "PaxType" => "CHD",
                    "PassportNumber" => "",
                    "MealType" => "",
                    "MealCode" => "",
                    "FFNo" => "",
                    "InfAssPaxName" => "",
                    "TicketNo" => "",
                    "Status" => "",
                    "Nationality" => "",
                    "IssuingCountry" => "",
                    "ExpiryDate" => ""
                ];
                array_push($travellerDetails, $child);
            }

        } elseif ((int) $passengers['noOfAdults'] != 0 && (int) $passengers['noOfChilds'] === 0 && (int) $passengers['noOfInfants'] != 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
                $adult = [
                    "Title" => $request['adultTitle'][$i],
                    "Gender" => $request['adultGender'][$i],
                    "FirstName" => $request['adultFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['adultLastName'][$i],
                    "DateOfBirth" => "",
                    "PaxType" => "ADT",
                    "PassportNumber" => "",
                    "MealType" => "",
                    "MealCode" => "",
                    "FFNo" => "",
                    "InfAssPaxName" => "",
                    "TicketNo" => "",
                    "Status" => "",
                    "Nationality" => "",
                    "IssuingCountry" => "",
                    "ExpiryDate" => ""
                ];

                array_push($travellerDetails, $adult);
            }

            for ($i = 0; $i < $passengers['noOfInfants']; $i++) {

                $infDob = \DateTime::createFromFormat("Y-m-d", $request['infantDOB'][$i]);
                $infDob = $infDob->format("d/m/Y");
                $infant = [
                    "Title" => $request['infantTitle'][$i],
                    "Gender" => $request['infantGender'][$i],
                    "FirstName" => $request['infantFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['infantLastName'][$i],
                    "DateOfBirth" => $infDob,
                    "PaxType" => "INF",
                    "PassportNumber" => "",
                    "MealType" => "",
                    "MealCode" => "",
                    "FFNo" => "",
                    "InfAssPaxName" => "",
                    "TicketNo" => "",
                    "Status" => "",
                    "Nationality" => "",
                    "IssuingCountry" => "",
                    "ExpiryDate" => ""
                ];
                array_push($travellerDetails, $infant);
            }
        } elseif ((int) $passengers['noOfAdults'] > 0 && (int) $passengers['noOfChilds'] > 0 && (int) $passengers['noOfInfants'] > 0) {

            for ($i = 0; $i < $passengers['noOfAdults']; $i++) {
                $adult = [
                    "Title" => $request['adultTitle'][$i],
                    "Gender" => $request['adultGender'][$i],
                    "FirstName" => $request['adultFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['adultLastName'][$i],
                    "DateOfBirth" => "",
                    "PaxType" => "ADT",
                    "PassportNumber" => "",
                    "Nationality" => "",
                    "IssuingCountry" => "",
                    "ExpiryDate" => ""
                ];

                array_push($travellerDetails, $adult);
            }

            for ($i = 0; $i < $passengers['noOfChilds']; $i++) {
                $chdDob = \DateTime::createFromFormat("Y-m-d", $request['childDOB'][$i]);
                $chdDob = $chdDob->format("d/m/Y");
                $child = [
                    "Title" => $request['childTitle'][$i],
                    "Gender" => $request['childGender'][$i],
                    "FirstName" => $request['childFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['childLastName'][$i],
                    "DateOfBirth" => $chdDob,
                    "PaxType" => "CHD",
                    "PassportNumber" => "",
                    "Nationality" => "",
                    "IssuingCountry" => "",
                    "ExpiryDate" => ""
                ];

                array_push($travellerDetails, $child);
            }

            for ($i = 0; $i < $passengers['noOfInfants']; $i++) {

                $infDob = \DateTime::createFromFormat("Y-m-d", $request['infantDOB'][$i]);
                $infDob = $infDob->format("d/m/Y");
                $infant = [
                    "Title" => $request['infantTitle'][$i],
                    "Gender" => $request['infantGender'][$i],
                    "FirstName" => $request['infantFirstName'][$i],
                    "MiddleName" => "",
                    "LastName" => $request['infantLastName'][$i],
                    "DateOfBirth" => $infDob,
                    "PaxType" => "INF",
                    "PassportNumber" => "",
                    "Nationality" => "",
                    "IssuingCountry" => "",
                    "ExpiryDate" => ""
                ];
                array_push($travellerDetails, $infant);
            }
        }

        $getsession = [
            'SessionID' => json_decode($request['SessionID'], true),
            'ReferenceNo' => json_decode($request['ReferenceNo'], true),
            'Provider' =>  json_decode($request['Provider'], true),
            'Key'      => json_decode($request['Key'], true),
        ];

        $uniqueid = "WT" .$getsession['ReferenceNo']['Outbound']. rand(999, 99999).$getsession['ReferenceNo']['Inbound'];
        $save = new Cart;
        $save->travellerquantity = $request['travellers'];
        $save->getsession = json_encode($getsession, true);
        $save->otherInformation = $request['trip'];
        $save->fare = $request['fare'];
        $save->travllername = json_encode($travellerDetails, true);
        $save->phonenumber = $request['phoneNumber'];
        $save->email = $request['email'];
        $save->uniqueid = $uniqueid;
        $save->save();
        $data = $save;
  // dd($data, $uniqueid,$getsession,$passengers);
     // dd($input,$data);
        return view('flight-pages.roundtrip-flight-pages.domestic-flight-pages.gl-payment', compact('input','data'));
    }

}


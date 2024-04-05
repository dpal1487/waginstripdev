<?php

namespace App\Http\Controllers\Airline\Amadeus;

use Amadeus\Client;
use Amadeus\Client\RequestOptions\PnrCancelOptions;
use Amadeus\Client\RequestOptions\PnrRetrieveOptions;
use Amadeus\Client\Result;
use App\Http\Controllers\Amadeus\HeaderController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CancelController extends Controller
{
    public function Cancel(Request $request)
    {
        $HeaderController = new HeaderController;
        $params = $HeaderController->State(true);
        $client = new Client($params);

        $pnrRetrieveAndDisplay = $client->pnrRetrieve(
            new PnrRetrieveOptions(['recordLocator' => $request['pnr']])
        );

        // dd($pnrRetrieveAndDisplay);

        if ($pnrRetrieveAndDisplay->status === Result::STATUS_OK) {
            $getsession = $client->getSessionData();
            $client->setSessionData($getsession);
            $cancelReply = $client->pnrCancel(
                new PnrCancelOptions([
                    'cancelItinerary' => true,
                    'actionCode' => PnrCancelOptions::ACTION_END_TRANSACT,
                ])
            );

            if ($cancelReply->status === Result::STATUS_OK) {
                $getsession = $client->getSessionData();
                $client->setSessionData($getsession);

                $client->securitySignOut();

                return redirect()->back()->with('message', 'Your Pnr Successfully Cancilled');
            }

        }
    }
}

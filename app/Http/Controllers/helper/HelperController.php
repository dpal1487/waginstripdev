<?php

namespace App\Http\Controllers\helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class HelperController extends Controller
{
     public function phonecode(Request $request)
    {

    $search = $request['search'];

        if ($search == '') {
            $countries = Country::orderby('updated_at', 'DESC')->select('id', 'country', 'code', 'iso_two', 'iso_three')->limit(5)->get();
        } else {

            $countries = Country::where('country', 'like','%'. $search.'%')
                 ->orWhere('code', 'like', $search .'%')
                 ->orWhere('iso_two', 'like','%'. $search .'%')
                 ->orWhere('iso_three', 'like','%'. $search .'%')
                 ->limit(10)->get();
        }

        $response = array();
        foreach ($countries as $employee) {
            $response[] = array(
                "id" => $employee['id'],
                "country" => $employee['country'],
                "code" =>$employee['code'] ,
                "iso_two" => $employee['iso_two'],
                "iso_three" => $employee['iso_three'],
            );
        }

        echo json_encode($response);
        exit;
    }
}

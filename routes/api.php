<?php
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Airline\AirportiatacodesController;
use App\Http\Controllers\helper\HelperController;
use App\Http\Controllers\helper\AirlineCodeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/airlinecode', [AirlineCodeController::class, 'AirlineCode'])->name('ailine_code');
Route::get('/phonecode', [HelperController::class, 'phonecode'])->name('phone.code');
Route::get('/airlinecodes', [AirportiatacodesController::class, 'searchAirIataCode'])->name('cities.search');
Route::get('/country-code', [AirportiatacodesController::class, 'searchCountryCode'])->name('country-code-search');
Route::get('/country-iso', [AirportiatacodesController::class, 'searchCountryIso'])->name('country-iso-search');
Route::get('/Hotel-city', [AirportiatacodesController::class, 'HotelCity'])->name('HotelCity');

Route::get('geolocationinfo' , [AirportiatacodesController::class, 'get_geolocation_info']);



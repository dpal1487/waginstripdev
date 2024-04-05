<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PackageOfferController;

 
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
  

Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/loginPost', [AdminLoginController::class, 'loginPost']);
Route::get('logout/', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::get('/dashbord', [AdminController::class, 'index'])->name('admin.dashboard.admin');
Route::get('/deletehotel/{id}', [OfferController::class, 'deleteHotelOffer']);
Route::get('/edithotel/{id}', [OfferController::class, 'editHotelData']);
Route::get('/hotel-offer', [OfferController::class, 'hotelOffer']);
Route::post('/posthotel_offer', [OfferController::class, 'postHotelOffer']);
Route::post('/updatePostHotelOffer', [OfferController::class, 'updatePostHotelOffer']);

Route::get('/airline-offer', [OfferController::class, 'airlineOffer']);
Route::get('/airline-offer-edit/{id}', [OfferController::class, 'airlineOfferEdit']);
Route::get('/airline-offer-delete/{id}', [OfferController::class, 'airlineOfferDelete']);
Route::post('/postAirline_offer', [OfferController::class, 'postAirlineOffer']);
Route::post('/postAirlineofferUpdate', [OfferController::class, 'postAirlineofferUpdate']);

Route::get('/offer-package', [PackageOfferController::class, 'offerPackage']);
Route::get('/addofferpackage', [PackageOfferController::class, 'addOfferPackage']);
Route::get('/deleteofferpackage/{id}', [PackageOfferController::class, 'deleteOfferPackage']);
Route::get('/editofferpackage/{id}', [PackageOfferController::class, 'editOfferPackage']);
Route::post('/postOfferPackages', [PackageOfferController::class, 'postOfferPackages']);
Route::post('/postOfferPackagesUpdate', [PackageOfferController::class, 'postOfferPackagesUpdate']);




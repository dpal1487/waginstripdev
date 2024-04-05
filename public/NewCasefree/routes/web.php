<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashfreeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::get('/cashfree-payment-gateway', [CashfreeController::class,'cashfree_payment_gateway']);
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','CashfreeController@cashfree_payment_gateway');
Route::get('/cashfree-payment-gateway', 'CashfreeController@cashfree_payment_gateway');
Route::post('/order', 'CashfreeController@order');
Route::post('/return-url', 'CashfreeController@return_url');

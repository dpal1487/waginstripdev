<?php

use App\Http\Controllers\Airline\Amadeus\Air_SellFromRecommendationController;
use App\Http\Controllers\Airline\Amadeus\DomesticPnrAddMultiElementsController;
use App\Http\Controllers\Airline\Amadeus\PNR_AddMultiElementsController;
use App\Http\Controllers\Airline\Amadeus\SearchflightController;
use App\Http\Controllers\Airline\Both\BookingController;
use App\Http\Controllers\Airline\Galileo\AuthenticateController;
use App\Http\Controllers\Airline\Galileo\PricingController;
use App\Http\Controllers\Airline\Galileo\TicketingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\visacontroller;
use App\Http\Controllers\Hotel\Amadeus\HeaderController;
use App\Http\Controllers\Hotel\Amadeus\HotelBookingController;
use App\Http\Controllers\OfferDetailsController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\CashfreeController;
use App\Http\Controllers\cashfreeprocess;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SoapApi;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

//  --------------- PAGES START ------------------

Route::view('/hotels/ticket','hotel-pages.ticket');

Route::get('/oneway-flight-search', [SearchflightController::class, 'Fare_MasterPricerTravelBoardSearch'])->name('search-flight-results');
Route::post('/flight-review', [Air_SellFromRecommendationController::class, 'Air_SellFromRecommendation'])->name('flight-review');
Route::get('/payment-page-of-mtt', [PNR_AddMultiElementsController::class, 'PNR_AddMultiElements'])->name('booking.flight-booking');
Route::get('/booking-roundtrip-domestic', [DomesticPnrAddMultiElementsController::class, 'DomPnrAddMultiElements'])->name('booking.flight-booking-dom');

//  --------------- PAYMENT CONTROLLER PAGES END ------------------

// Route::group(['prefix' => 'flight'], function () {
//     Route::get('/search', [SearchflightController::class, 'Fare_MasterPricerTravelBoardSearch'])->name('search-flight-results');
//     Route::post('/review', [Air_SellFromRecommendationController::class, 'Air_SellFromRecommendation'])->name('flight-review');
//     Route::get('/payment', [PNR_AddMultiElementsController::class, 'PNR_AddMultiElements'])->name('booking.flight-booking');
//     Route::get('/booking-roundtrip-domestic', [DomesticPnrAddMultiElementsController::class, 'DomPnrAddMultiElements'])->name('booking.flight-booking-dom');
// });

//  --------------- TEST PAGES & ERROR PAGES START ------------------

Route::group(['prefix' => '/'], function () {
    Route::get('/', [OfferDetailsController::class, 'index'])->name('welcome');
    Route::get('/offerview', [OfferDetailsController::class, 'offerDetailss']);
    Route::get('/festive_offer/{id}/{name}', [OfferDetailsController::class, 'festiveOffers']);
});

Route::group(['prefix' => 'Payment'], function () {
    Route::post('payment', [CartController::class, 'paymentSave']);
    Route::post('paymentGalelio', [CartController::class, 'PaymentSaveGalelio']);
    Route::get('payment-status', [CartController::class, 'paymentStatus']);
});

Route::group(['prefix' => 'payment'], function () {
    // Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
    Route::post('cashfree-process', [cashfreeprocess::class, 'process'])->name('cashfree.payment.process');
    // Route::post('cashfree-process', [cashfreeprocess::class, 'processround'])->name('cashfree.payment.process');

});

// Route::group(['prefix' => 'Hotels'], function () {
//     Route::get('search-hotel', [HeaderController::class, 'SearchHotel'])->name('search-hotel');
//     Route::get('search-review', [HeaderController::class, 'SearchReview'])->name('search-review');
//     Route::get('hotel-details', [HeaderController::class, 'HotelDetails'])->name('hotel-details');
//     Route::get('review-hotel', [HotelBookingController::class, 'HotelReview'])->name('review-hotel');
//     Route::get('hotel-pay', [HotelBookingController::class, 'HotelPay'])->name('hotel-pay');
//     Route::get('hotel-fare', [HotelBookingController::class, 'HotelAddPax'])->name('hotel-fare');
// });

Route::group(['prefix' => 'Galileo'], function () {
    Route::get('/galileo', [AuthenticateController::class, 'Authenticate']);
    Route::get('/AgencyBalance', [AuthenticateController::class, 'AgencyBalance']);
    Route::post('/Pricing', [PricingController::class, 'Pricing'])->name('galileo-pricing');
    Route::post('/booking', [TicketingController::class, 'Ticketing'])->name('galileo-ticketing');
    Route::post('/returnurl', [TicketingController::class, 'ReturnUrl'])->name('galileo-returnurl');
    Route::post('/bookingsroundtrip', [TicketingController::class, 'DomGalBooking'])->name('bookingsroundtrip');

});

Route::group(['prefix' => 'booking-pdf'], function () {
    Route::get('/flight-booking/{id}', [CustomerController::class, 'FlightTicketPdf'])->name('flight-booking-pdf');
});

Route::group(['prefix' => 'booking'], function () {
     Route::post('/bookings', [BookingController::class, 'Bookings'])->name('mix-booking');
 });


Route::group(['prefix' => 'cart'], function () {
    Route::get('/galelio-traveller-details', [CartController::class, 'PaymentSaveGalelio'])->name('galelio-traveller-details');
    Route::get('/galelio-traveller-details-roundtrip', [CartController::class, 'PaymentSaveGalelioRoundTrip'])->name('galelio-traveller-details-roundtrip');
});

Route::group(['prefix' => 'booking-confirmation'], function () {
Route::get('/oneway-booking', [TicketingController::class, 'Ticketing'])->name('oneway-flight-booking-confirm-gal');
});








//holiday packages add by jagdish
//Internation package

Route::view('international-austra-8day', 'holiday/international-packages/austra-8day')->name('international-austra-8day');
Route::view('international-bali&gili-7day', 'holiday/international/bali&gili-7day')->name('international-bali&gili-7day');
Route::view('international-bali&gili-10day', 'holiday/international/bali&gili-10day')->name('international-bali&gili-10day');
Route::view('international-bali-5day', 'holiday/international/bali-5day')->name('international-bali-5day');
Route::view('international-bangkok-5day', 'holiday/international/bangkok-5day')->name('international-bangkok-5day');
Route::view('international-britain-7day', 'holiday/international/britain-7day')->name('international-britain-7day');
Route::view('international-chi-minh-4days', 'holiday/international/chi-minh-4days')->name('international-chi-minh-4days');
Route::view('international-costarica-7day', 'holiday/international/costarica-7day')->name('international-costarica-7day');
Route::view('international-dubai-5day', 'holiday/international/dubai-5day')->name('international-dubai-5day');
Route::view('international-dubai-6day', 'holiday/international/dubai-6day')->name('international-dubai-6day');
Route::view('international-dubai-10day', 'holiday/international/dubai-10day')->name('international-dubai-10day');
Route::view('international-egypt-10-day', 'holiday/international/egypt-10')->name('international-egypt-10-day');
Route::view('international-egypt-7day', 'holiday/international/egypt-7day')->name('international-egypt-7day');
Route::view('international-england-6day', 'holiday/international/england-6day')->name('international-england-6day');
Route::view('international-esternusa&canada-12day', 'holiday/international/esternusa&canada-12day')->name('international-esternusa&canada-12day');
Route::view('international-europe-10day', 'holiday/international/europe-10day')->name('international-europe-10day');

Route::view('international-europe', 'holiday/international/europe')->name('international-europe');
Route::view('international-germany-7day', 'holiday/international/germany-7day')->name('international-germany-7day');
Route::view('international-germany-8day', 'holiday/international/germany-8day')->name('international-germany-8day');
Route::view('international-greece-5day', 'holiday/international/greece-5day')->name('international-greece-5day');
Route::view('international-greece-7day', 'holiday/international/greece-7day')->name('international-greece-7day');
Route::view('international-greece-9day', 'holiday/international/greece-9day')->name('international-greece-9day');
Route::view('international-hanoi-8day', 'holiday/international/hanoi-8day')->name('international-hanoi-8day');
Route::view('international-italy-5day', 'holiday/international/italy-5day')->name('international-italy-5day');
Route::view('international-italy-8day', 'holiday/international/italy-8day')->name('international-italy-8day');
Route::view('international-kenya-5day', 'holiday/international/kenya-5day')->name('international-kenya-5day');
Route::view('international-kenya-6day', 'holiday/international/kenya-6day')->name('international-kenya-6day');
Route::view('international-kenya-7day', 'holiday/international/kenya-7day')->name('international-kenya-7day');
Route::view('international-malaysia-7day', 'holiday/international/malaysia-7day')->name('international-malaysia-7day');
Route::view('international-maldivies-5day', 'holiday/international/maldivies-5day')->name('international-maldivies-5day');
Route::view('international-maldivies-7day', 'holiday/international/maldivies-7day')->name('international-maldivies-7day');

Route::view('international-malyasia-5day', 'holiday/international/malyasia-5day')->name('international-malyasia-5day');
Route::view('international-malysia-10day', 'holiday/international/malysia-10day')->name('international-malysia-10day');
Route::view('international-mauritius-5day', 'holiday/international/mauritius-5day')->name('international-mauritius-5day');
Route::view('international-melborane-7days', 'holiday/international/melborane-7days')->name('international-melborane-7days');
Route::view('international-nepal-5day', 'holiday/international/nepal-5day')->name('international-nepal-5day');
Route::view('international-nepal-7day', 'holiday/international/nepal-7day')->name('international-nepal-7day');
Route::view('international-nepal-9day', 'holiday/international/nepal-9day')->name('international-nepal-9day');
Route::view('international-new-york-7day', 'holiday/international/new-york-7day')->name('international-new-york-7day');
Route::view('international-newyork-5day', 'holiday/international/newyork-5day')->name('international-newyork-5day');
Route::view('international-northern-thailand-hilltribesTrek-5day', 'holiday/international/Northern Thailand HilltribesTrek-5day')->name('international-northern-thailand-hilltribesTrek-5day');
Route::view('international-pataya-7day', 'holiday/international/pataya-7day')->name('international-pataya-7day');
Route::view('international-rusia-10day', 'holiday/international/rusia-10day')->name('international-rusia-10day');
Route::view('international-saigon-5day', 'holiday/international/saigon-5day')->name('international-saigon-5day');
Route::view('international-saigon-7day', 'holiday/international/saigon-7day')->name('international-saigon-7day');
Route::view('international-singapore-4day', 'holiday/international/singapore-4day')->name('international-singapore-4day');

Route::view('international-singapore-7day', 'holiday/international/singapore-7day')->name('international-singapore-7day');
Route::view('international-southafrica-10day', 'holiday/international/southafrica-10day')->name('international-southafrica-10day');
Route::view('international-southafrica-5day', 'holiday/international/southafrica-5day')->name('international-southafrica-5day');
Route::view('international-southafrica-7day', 'holiday/international/southafrica-7day')->name('international-southafrica-7day');
Route::view('international-spain-5day', 'holiday/international/spain-5day')->name('international-spain-5day');
Route::view('international-spain-9day', 'holiday/international/spain-9day')->name('international-spain-9day');
Route::view('international-switzerland-5day', 'holiday/international/switzerland-5day')->name('international-switzerland-5day');
Route::view('international-switzerland-7day', 'holiday/international/switzerland-7day')->name('international-switzerland-7day');
Route::view('international-switzerland-8day', 'holiday/international/switzerland-8day')->name('international-switzerland-8day');
Route::view('international-tajmahal-5day', 'holiday/international/tajmahal-5day')->name('international-tajmahal-5day');
Route::view('international-tasmania-5day', 'holiday/international/tasmania-5day')->name('international-tasmania-5day');
Route::view('international-thailand-6day', 'holiday/international/thailand-6day')->name('international-thailand-6day');
Route::view('international-thailand-7day', 'holiday/international/thailand-7day')->name('international-thailand-7day');
Route::view('international-uk-5day', 'holiday/international/uk-5day')->name('international-uk-5day');
Route::view('international-uk-9day', 'holiday/international/uk-9day')->name('international-uk-9day');

Route::view('international-ukaraine-3day', 'holiday/international/ukaraine-3day')->name('international-ukaraine-3day');
Route::view('international-ukarine-7day', 'holiday/international/ukarine-7day')->name('international-ukarine-7day');
Route::view('international-ukraine-10day', 'holiday/international/ukraine-10day')->name('international-ukraine-10day');
Route::view('international-us-9day', 'holiday/international/us-9day')->name('international-us-9day');
Route::view('international-usa-3day', 'holiday/international/usa-3day')->name('international-usa-3day');
Route::view('international-vietnam-7day', 'holiday/international/vietnam-7day')->name('international-vietnam-7day');
Route::view('international-vietnam-9day', 'holiday/international/vietnam-9day')->name('international-vietnam-9day');

//DOMASTIC PACKAGE
//panjab
Route::view('domastic-package-amritsar', 'holiday/domastic/amritsar-3day')->name('domastic-holidays-package-amritsar');
Route::view('domastic-amritsar-8day', 'holiday/domastic/amritsar-8day')->name('domastic-holidays-amritsar-8day');
//uttarakhand
Route::view('domastic-char-dham-yatra-12day', 'holiday/domastic/char-dham-yatra-12day')->name('domastic-holidays-char-dham-yatra-12day');
 Route::view('domastic-char-dham-yatra', 'holiday/domastic/char-dham-yatra')->name('domastic-holidays-package-three');
 Route::view('domastic-dehraduntoharidwar-3day', 'holiday/domastic/dehraduntoharidwar-3day')->name('domastic-dehraduntoharidwar-3day');
 Route::view('domastic-dehrdun-3day', 'holiday/domastic/dehrdun-3day')->name('domastic-dehrdun-3day');
 Route::view('domastic-rishikesh-4day', 'holiday/domastic/rishikesh-4day')->name('domastic-rishikesh-4day');
 Route::view('domastic-rishikesh-6day', 'holiday/domastic/rishikesh-6day')->name('domastic-rishikesh-6day');

 //delhi
 Route::view('domastic-delhi-4day', 'holiday/domastic/delhi-4day')->name('domastic-delhi-4day');
 Route::view('domastic-delhi-agra-jaipur-5day', 'holiday/domastic/delhi-agra-jaipur-5day')->name('domastic-delhi-agra-jaipur-5day');
 //himaanchal
Route::view('domastic-dharamsala-3day', 'holiday/domastic/dharamsala-3day')->name('domastic-dharamsala-3day');
Route::view('domastic-himachal-10day', 'holiday/domastic/himachal-10day')->name('domastic-himachal-10day');
//goa
Route::view('domastic-goa-5day', 'holiday/domastic/goa-5day')->name('domastic-goa-5day');
 Route::view('domastic-goa-9day', 'holiday/domastic/goa-9day')->name('domastic-goa-9day');
 
 Route::view('domastic-golden-trangle', 'holiday/domastic/golden-trangle')->name('domastic-golden-trangle');
//kasmir
 Route::view('domastic-kashmir&ladakh-10day', 'holiday/domastic/kashmir&ladakh-10day')->name('domastic-kashmir&ladakh-10day');
 Route::view('domastic-kashmir-5day', 'holiday/domastic/kashmir-5day')->name('domastic-kashmir-5day');
 Route::view('domastic-kashmir-8day', 'holiday/domastic/kashmir-8day')->name('domastic-kashmir-8day');
 Route::view('domastic-ladakh-4day', 'holiday/domastic/ladakh-4day')->name('domastic-ladakh-4day');
 Route::view('domastic-ladakh-6day', 'holiday/domastic/ladakh-6day')->name('domastic-ladakh-6day');
 
 //kerla
 Route::view('domastic-kerala-10day', 'holiday/domastic/kerala-10day')->name('domastic-kerala-10day');
 Route::view('domastic-kerala-5day', 'holiday/domastic/kerala-5day')->name('domastic-kerala-5day');
 Route::view('domastic-kerala-6day', 'holiday/domastic/kerala-6day')->name('domastic-kerala-6day');
 
 Route::view('domastic-lanavala+khandala-3day', 'holiday/domastic/lanavala+khandala-3day')->name('domastic-lanavala+khandala-3day');
 //Tamilnaidu
 Route::view('domastic-mysore+ooty-7day', 'holiday/domastic/mysore+ooty-7day')->name('domastic-mysore+ooty-7day');
 //rajasthan
 Route::view('domastic-rajasthan-9daye', 'holiday/domastic/rajasthan-9day')->name('domastic-rajasthan-9day');
 Route::view('domastic-domastic-ranthambore&bharatur-8day', 'holiday/domastic/ranthambore&bharatur-8day')->name('domastic-ranthambore&bharatur-8day');
 Route::view('domastic-udaipur-7day', 'holiday/domastic/udaipur-7day')->name('domastic-udaipur-7day');
Route::view('domastic-udaipur-9day', 'holiday/domastic/udaipur-9day')->name('domastic-udaipur-9day');
 
 //himaanchal
 Route::view('domastic-shimla+manali-6day', 'holiday/domastic/shimla+manali-6day')->name('domastic-shimla+manali-6day');
 Route::view('domastic-shimla-4day', 'holiday/domastic/shimla-4day')->name('domastic-shimla-4day');

 //up
 Route::view('domastic-varansi-5day', 'holiday/domastic/varansi-5day')->name('domastic-varansi-5day');
 Route::view('domastic-varansi-9day', 'holiday/domastic/varansi-9day')->name('domastic-varansi-9day');
 Route::view('domastic-varanssi-8day', 'holiday/domastic/varanssi-8day')->name('domastic-varanssi-8day');
// Route::view('international-holidays-package-nineteen', 'holiday/domastic/nepal-7day')->name('international-holidays-package-nineteen');
// Route::view('international-holidays-package-twenty', 'holiday/domastic/nepal-9day')->name('international-holidays-package-twenty');
// Route::view('international-holidays-package-twentyone', 'holiday/domastic/new-york-7day')->name('international-holidays-package-twentyone');
// Route::view('international-holidays-package-twentytwo', 'holiday/domastic/newyork-5day')->name('international-holidays-package-twentytwo');
// Route::view('international-holidays-package-twentythree', 'holiday/domastic/Northern Thailand HilltribesTrek-5day')->name('international-holidays-package-twentythree');
// Route::view('international-holidays-package-twentyfour', 'holiday/domastic/pataya-7day')->name('international-holidays-package-twentyfour');
// Route::view('international-holidays-package-twentyfive', 'holiday/domastic/rusia-10day')->name('international-holidays-package-twentyfive');
// Route::view('international-holidays-package-twentysix', 'holiday/domastic/saigon-5day')->name('international-holidays-package-twentysix');
// Route::view('international-holidays-package-twentyseven', 'holiday/domastic/saigon-7day')->name('international-holidays-package-twentyseven');
// Route::view('international-holidays-package-twentyeight', 'holiday/domastic/singapore-4day')->name('international-holidays-package-twentyeight');



// Route::view('international-holidays-package-fourteen', 'holiday/domastic/singapore-7day')->name('international-holidays-package-fourteen');
// Route::view('international-holidays-package-fifteen', 'holiday/domastic/southafrica-10day')->name('international-holidays-package-fifteen');
// Route::view('international-holidays-package-sixteen', 'holiday/domastic/southafrica-5day')->name('international-holidays-package-sixteen');
// Route::view('international-holidays-package-seventeen', 'holiday/domastic/southafrica-7day')->name('international-holidays-package-seventeen');
// Route::view('international-holidays-package-eighteen', 'holiday/domastic/spain-5day')->name('international-holidays-package-eighteen');
// Route::view('international-holidays-package-nineteen', 'holiday/domastic/spain-9day')->name('international-holidays-package-nineteen');
// Route::view('international-holidays-package-twenty', 'holiday/domastic/switzerland-5day')->name('international-holidays-package-twenty');
// Route::view('international-holidays-package-twentyone', 'holiday/domastic/switzerland-7day')->name('international-holidays-package-twentyone');
// Route::view('international-holidays-package-twentytwo', 'holiday/domastic/switzerland-8day')->name('international-holidays-package-twentytwo');
// Route::view('international-holidays-package-twentythree', 'holiday/domastic/tajmahal-5day')->name('international-holidays-package-twentythree');
// Route::view('international-holidays-package-twentyfour', 'holiday/domastic/tasmania-5day')->name('international-holidays-package-twentyfour');
// Route::view('international-holidays-package-twentyfive', 'holiday/domastic/thailand-6day')->name('international-holidays-package-twentyfive');
// Route::view('international-holidays-package-twentysix', 'holiday/domastic/thailand-7day')->name('international-holidays-package-twentysix');
// Route::view('international-holidays-package-twentyseven', 'holiday/domastic/uk-5day')->name('international-holidays-package-twentyseven');
// Route::view('international-holidays-package-twentyeight', 'holiday/domastic/uk-9day')->name('international-holidays-package-twentyeight');

// Route::view('international-holidays-package-fourteen', 'holiday/domastic/ukaraine-3day')->name('international-holidays-package-fourteen');
// Route::view('international-holidays-package-fifteen', 'holiday/domastic/ukarine-7day')->name('international-holidays-package-fifteen');
// Route::view('international-holidays-package-sixteen', 'holiday/domastic/ukraine-10day')->name('international-holidays-package-sixteen');
// Route::view('international-holidays-package-seventeen', 'holiday/domastic/us-9day')->name('international-holidays-package-seventeen');
// Route::view('international-holidays-package-eighteen', 'holiday/domastic/usa-3day')->name('international-holidays-package-eighteen');
// Route::view('international-holidays-package-nineteen', 'holiday/domastic/vietnam-7day')->name('international-holidays-package-nineteen');
// Route::view('international-holidays-package-twenty', 'holiday/domastic/vietnam-9day')->name('international-holidays-package-twenty');

//end holiday packages by jagdish






























//  --------------- TEST PAGES & ERROR PAGES END ------------------ PNR_AddMultiElements

Route::view('/test', 'test');
Route::view('/get-booking', 'get-booking');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/about-us', 'pages/about-us')->name('about-us');
Route::view('/holidays', 'pages/holidays')->name('holidays');
Route::get('visa','pagecontroller@visa');
Route::post('createvisa',"pagecontroller@visastore");
Route::view('/terms-and-conditions', 'pages/termcondition')->name('terms-and-conditions');
Route::view('/user-agreement', 'pages/user-agreement')->name('user-agreement');
Route::view('/privacy-policy', 'pages/privacy-policy')->name('privacy-policy');
Route::view('/contact-us', 'pages/contact-us')->name('contact-us');
Route::view('/careers', 'pages/careers')->name('careers');
Route::view('/activities-tours', 'pages/activities-tours')->name('activities-tours');
Route::view('/trip-ideas', 'pages/trip-ideas')->name('trip-ideas');
Route::view('/testimonial', 'pages/testimonial')->name('testimonial');
Route::view('/my-biz', 'pages/my-biz')->name('my-biz');
Route::view('/deals', 'pages/deals')->name('deals');
Route::view('/blog', 'pages/blog')->name('blog');
Route::view('/hotels', 'pages.hotel')->name('hotels');
Route::view('/no-flight-available', 'flight-pages.no-flight')->name('no-flight');
Route::view('/error', 'error')->name('error');
Route::view('/holiday-packege', 'holiday/package')->name('holiday.package');
Route::view('/holiday-packege-detail', 'holiday/holiday-package-detail')->name('holiday.package.detail');
Route::view('/cruise', 'pages/cruise')->name('cruise');
Route::view('/cruise-package', 'pages/cruise-package')->name('cruise-package');
Route::view('/activities-landing', 'pages/activities-landing')->name('activities-landing');
Route::view('/cruise-package-details', 'pages/cruise-package-details')->name('cruise-package-details');
Route::view('/festivle_offer', 'pages/festivle_offer')->name('festivle_offer');
Route::view('/hotel-booking', 'pages/hotel-booking')->name('hotel-booking');
Route::view('/hotel-details','pages/hotel-details')->name('hotel-details');
Route::view('/hotel-room-details','pages/hotel-room-details')->name('hotel-room-details');
Route::view('/hotel','pages/hotel')->name('hotel');
Route::view('package','pages/hotel')->name('package');
Route::view('termcondition','pages/termcondition')->name('termcondition');
Route::view('tour-experience','pages/tour-experience')->name('tour-experience');
Route::view('tour-explorecity','pages/tour-explorecity')->name('tour-explorecity');
Route::view('tour-packages','pages/tour-packages')->name('tour-packages');
Route::view('tour-place','pages/tour-place')->name('tour-place');
Route::view('trip-destinations','pages/trip-destinations')->name('trip-destinations');
Route::view('trip-place','pages/trip-place')->name('trip-place');
Route::view('careerspages','pages/careerspages')->name('careerspages');
Route::view('blog-page','pages/blog-page')->name('blog-page');

Route::get('getbooking','airbookcontroller@getbooking');
Route::get('airbook','airbookcontroller@airbook');
Route::post('create',"airbookcontroller@store");
Route::view('/contact', 'pages/contact')->name('contact');
Route::view('/customer-support', 'pages/customer-support')->name('customer-support');
Route::view('/activities-main', 'pages/activities-main')->name('activities-main');

// Route::view('/','locationairflight@locationairflight');
//user dashword

    Route::get('/calender', [SearchflightController::class, 'CalenderFare']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => ['auth']], function () {
    Route::view('/user/dashboard', 'userpages/dashborad')->name('user-dashboard');
    // Route::view('/user/dashboard',[AdminController::class,'user-dashboard']);
    Route::get('/user/booking-details/{id}', [CustomerController::class, 'userBookingDetails'])->name('booking-details');
    // Route::get('/user/amadeus-booked/{id}', [CustomerController::class, 'amduserBookingDetails'])->name('booking-details');
    Route::get('/user/booking', [CustomerController::class, 'userBooking'])->name('user-booking');
    // Route::get('/user/hotelboked', [CustomerController::class, 'hotelboked'])->name('user-booking');
    // Route::get('/user/airbook', [CustomerController::class, 'airbook'])->name('user-booking');
    // Route::get('/user/visa', [CustomerController::class, 'visa'])->name('user-booking');
    // Route::get('/user/amadeus', [CustomerController::class, 'amadeus'])->name('user-booking');
    Route::get('/user/profile', [CustomerController::class, 'userProfile']);
    Route::post('/profile/gender/update', [CustomerController::class, 'userGenderUpdate']);
    Route::post('/profile/all/update', [CustomerController::class, 'userAllUpdate']);
    Route::post('/profile/change/password', [CustomerController::class, 'changePassword']);

});
    // Route::get('home','CashfreeController@cashfree_payment_gateway');
    // Route::get('/cashfree-payment-gateway', 'CashfreeController@cashfree_payment_gateway');
    // Route::post('/order', 'CashfreeController@order');
    // Route::post('/return-url', 'CashfreeController@return_url');

    Route::get('soap-api', [SoapApi::class,'index']);
    
    
    
    
    
    
    
    
    
    

  

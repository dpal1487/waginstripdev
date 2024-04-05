<?php
use App\Http\Controllers\Mail\SendMailController;
use App\Http\Controllers\Airline\Amadeus\Air_SellFromRecommendationController;
use App\Http\Controllers\Airline\Amadeus\DomesticPnrAddMultiElementsController;
use App\Http\Controllers\Airline\Amadeus\PNR_AddMultiElementsController;
use App\Http\Controllers\Airline\Amadeus\SearchflightController;
use App\Http\Controllers\AirlineDemo\SearchflightController as DemoSearchController;
use App\Http\Controllers\Airline\Both\BookingController;
use App\Http\Controllers\Airline\Galileo\AuthenticateController;
use App\Http\Controllers\Airline\Galileo\PricingController;
use App\Http\Controllers\Airline\Galileo\TicketingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Customer\CustomerController;
// use App\Http\Controllers\visacontroller;
use App\Http\Controllers\Hotel\Amadeus\HeaderController;
use App\Http\Controllers\Hotel\Amadeus\HotelBookingController;
use App\Http\Controllers\OfferDetailsController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\CashfreeController;	
use App\Http\Controllers\cashfreeprocess;
use App\Http\Controllers\Airline\AirlineCodeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CronController;
use Illuminate\Http\Config;
use App\Http\Controllers\Democontroler;
use  App\Http\Controllers\GdsUser\Login;
use App\Http\Controllers\GdsUser\Optins;
use App\Http\Controllers\User;
use App\Http\Controllers\Agent\AgentLogin;
use App\Http\Controllers\GroupFare;
use App\Http\Controllers\PayPalController;
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
    Route::get('demo_currency_check' , [Democontroler::class, 'demo_exhchange']);
  //  --------------- Email View ------------------
 Route::get('/currency_Exchnages', [CronController::class, 'currency_exchnages']);
  
 Route::get('/AMD_email_view',[PNR_AddMultiElementsController::class, 'amd_email_view'])->name('AMD_email_view');
 Route::get('/GAL_email_view',[PNR_AddMultiElementsController::class, 'GAL_email_view'])->name('GAL_email_view');
 Route::get('/Mix-email-view',[BookingController::class, 'both_email_view'])->name('both_email_view');
 
 //  --------------- Email View ticket ------------------
 
  Route::get('/both_email_view_ticke',[BookingController::class, 'both_email_view'])->name('email_view_mix');
  
 //  --------------- Email View ticket end ------------------
 
 Route::view('gal-ticket-mail-new','booking-pdf.flight.gal-ticket-mail-new');
 
 
 Route::view('edit_ticket','flight-pages/booking-confirm/edit-roundtrip-amd-flight-booking-confirm');
 Route::get('/group-fare',[GroupFare::class, 'Group_fare_Page']);
 Route::get('/group-fares/{id}',[GroupFare::class, 'Group_fare_seatselect']);
 Route::get('/group-pay',[GroupFare::class, 'Payment_page']);
 Route::post('/group_fare_submit', [GroupFare::class, 'Group_fare_submite']);
 Route::post('/group_fare_payment', [GroupFare::class, 'group_fare_payment']);
 Route::post('/group_fare_get_payment', [GroupFare::class, 'group_fare_get_payment']);
 Route::post('/Group_fare/add/amount', [GroupFare::class, 'Group_fare_remove_amount']);

//  --------------- PAGES START ------------------

Route::view('/hotels/ticket','hotel-pages.ticket');
Route::get('/oneway-flight-search', [SearchflightController::class, 'Fare_MasterPricerTravelBoardSearch'])->name('search-flight-results');
Route::post('/flight-review', [Air_SellFromRecommendationController::class, 'Air_SellFromRecommendation'])->name('flight-review');
Route::get('/payment-page-of-mtt', [PNR_AddMultiElementsController::class, 'PNR_AddMultiElements'])->name('booking.flight-booking');
// Route::get('/booking-roundtrip-domestic', [DomesticPnrAddMultiElementsController::class, 'DomPnrAddMultiElements'])->name('booking.flight-booking-dom');

//  --------------- PAYMENT CONTROLLER PAGES END ------------------

Route::group(['prefix' => 'flightdemo'], function () {
    Route::get('/search', [DemoSearchController::class, 'Fare_MasterPricerTravelBoardSearch'])->name('search-flight-results');
    Route::post('/review', [Air_SellFromRecommendationController::class, 'Air_SellFromRecommendation'])->name('flight-review');
    Route::post('/payment', [PNR_AddMultiElementsController::class, 'PNR_AddMultiElements'])->name('booking.flight-booking');
    Route::post('/booking-roundtrip-domestic', [DomesticPnrAddMultiElementsController::class, 'DomPnrAddMultiElements'])->name('booking.flight-booking-dom');
});


Route::group(['prefix' => 'flight'], function () {
    Route::get('/search', [SearchflightController::class, 'Fare_MasterPricerTravelBoardSearch'])->name('search-flight-results');
    Route::post('/review', [Air_SellFromRecommendationController::class, 'Air_SellFromRecommendation'])->name('flight-review');
    Route::post('/payment', [PNR_AddMultiElementsController::class, 'PNR_AddMultiElements'])->name('booking.flight-booking');
    Route::post('/booking-roundtrip-domestic', [DomesticPnrAddMultiElementsController::class, 'DomPnrAddMultiElements'])->name('booking.flight-booking-dom');
});

//  --------------- TEST PAGES & ERROR PAGES START ------------------

//Route::get('/', function() {
//    return Redirect::to('https://www.flight.wagnistrip.com/');
//});
Route::get('/public-home' , 'OfferDetailsController@index');
Route::group(['prefix' => '/'], function () {
    Route::get('/', [OfferDetailsController::class, 'index'])->name('welcome');
    Route::get('/offerview', [OfferDetailsController::class, 'offerDetailss']);
    Route::get('/festive_offer/{id}/{name}', [OfferDetailsController::class, 'festiveOffers']);
});

Route::group(['prefix' => 'Payment'], function () {
    Route::post('payment', [CartController::class, 'paymentSave']);
    Route::post('paymentGalelio', [CartController::class, 'PaymentSaveGalelio']);
    Route::get('payment-status', [CartController::class, 'paymentStatus']);
    /////////////////////////////// IMP for Round Int  ////////////////////////////////

    Route::post('roundIntpay', [CartController::class, 'roundIntpay'])->name('booking.roundIntpay');
});

Route::group(['prefix' => 'payment'], function () {	
     Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');	
    Route::post('cashfree-process', [cashfreeprocess::class, 'process'])->name('cashfree.payment.process');	
    //  Route::post('cashfree-process', [cashfreeprocess::class, 'processround'])->name('cashfree.payment.process');
    ////////////// udd //////////////////////////
    Route::post('cashfree-process-round', [cashfreeprocess::class, 'processround'])->name('cashfree.payment.process.round');
});

Route::group(['prefix' => 'Hotels'], function () {
    Route::get('search-hotel', [HeaderController::class, 'SearchHotel'])->name('search-hotel');
    Route::get('test', [HeaderController::class, 'test']);
    Route::get('search-review', [HeaderController::class, 'SearchReview'])->name('search-review');
    Route::get('hotel-details', [HeaderController::class, 'HotelDetails'])->name('hotel-details');
    Route::get('review-hotel', [HotelBookingController::class, 'HotelReview'])->name('review-hotel');
    Route::get('hotel-pay', [HotelBookingController::class, 'HotelPay'])->name('hotel-pay');
    Route::get('hotel-fare', [HotelBookingController::class, 'HotelAddPax'])->name('hotel-fare');
});

Route::group(['prefix' => 'Galileo'], function () {
    Route::get('/galileo', [AuthenticateController::class, 'Authenticate']);
    Route::get('/AgencyBalance', [AuthenticateController::class, 'AgencyBalance']);
    
    Route::get('/Pricing', [PricingController::class, 'Pricing'])->name('galileo-pricing');
    
    Route::post('/Pricing', [PricingController::class, 'Pricing'])->name('galileo-pricing');
    Route::post('/booking', [TicketingController::class, 'Ticketing'])->name('galileo-ticketing');
    Route::post('/bookings-round-trip', [TicketingController::class, 'DomGalBooking'])->name('gal-roundtrip-booking');
    
     Route::post('/returnurl', [TicketingController::class, 'ReturnUrl'])->name('galileo-returnurl');
    Route::post('/bookingsroundtrip', [TicketingController::class, 'DomGalBooking'])->name('bookingsroundtrip');
    
});











Route::group(['prefix' => 'booking-pdf'], function () {
    Route::get('/flight-booking/{id}/{page}', [CustomerController::class, 'FlightTicketPdf'])->name('flight-booking-pdf');
});




Route::group(['prefix' => 'booking'], function () {
    Route::post('/bookings', [BookingController::class, 'Bookings'])->name('mix-booking');
    Route::post('/mix', [CartController::class, 'MixRoundDom'])->name('mix-review');
     //Route::post('/bookings', [BookingController::class, 'Bookings'])->name('mix-booking');	
});

Route::group(['prefix' => 'cart'], function () {
    Route::post('/galelio-traveller-details', [CartController::class, 'PaymentSaveGalelio'])->name('galelio-traveller-details');
    Route::post('/galelio-traveller-details-roundtrip', [CartController::class, 'PaymentSaveGalelioRoundTrip'])->name('galelio-traveller-details-roundtrip');
    Route::get('/galelio-traveller-details-roundtrip-internation', [CartController::class, 'PaymentSaveGaleliointerRoundTrip'])->name('galelio-traveller-details-roundtrip-internation');
    Route::post('/galelio-traveller-details-buzz', [CartController::class, 'BuzzSaveGalelioRoundTrip'])->name('cart.galelio-traveller-details-roundtrip-buzz');
});

Route::group(['prefix' => 'booking-confirmation'], function () {
    // Route::get('/oneway-booking', [TicketingController::class, 'Ticketing'])->name('oneway-flight-booking-confirm-gal');
    Route::get('/oneway-booking', [TicketingController::class, 'Ticketing'])->name('oneway-flight-booking-confirm-gal');
});

//  --------------- TEST PAGES & ERROR PAGES END ------------------ PNR_AddMultiElements

Route::view('/test', 'test');
Route::view('/get-booking', 'get-booking');
Route::view('Flight-not-available', 'flight-pages/Flight-not-available')->name('Flight-not-available');




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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/about-us', 'pages/about-us')->name('about-us');
Route::view('/holidays', 'pages/holidays')->name('holidays');


// Route::view('/visa', 'pages/visa')->name('visa');
// Route::get('visa','pagecontroller@visa');	
// Route::post('createvisa',"pagecontroller@visastore");

Route::view('/terms-and-conditions', 'pages/termcondition')->name('terms-and-conditions');
Route::view('/refund-policy', 'pages/refundpolicy')->name('refund-policy');
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
Route::view('/hotels', 'pages.hotel')->name('hotels');
Route::view('/no-flight-available', 'flight-pages.no-flight')->name('no-flight');
Route::get('/errors/{code}/{type}', [HeaderController :: class ,'errors'])->name('errors');
Route::view('/error', 'error')->name('error');
Route::view('/holiday-packege', 'holiday/package')->name('holiday.package');
Route::view('/holiday-packege-detail', 'holiday/holiday-package-detail')->name('holiday.package.detail');
Route::view('/cruise', 'pages/cruise')->name('cruise');
Route::view('/cruise-package', 'pages/cruise-package')->name('cruise-package');
Route::view('/cruise-package-details', 'pages/cruise-package-details')->name('cruise-package-details');
Route::view('/festivle_offer', 'pages/festivle_offer')->name('festivle_offer');
Route::view('/hotel-details', 'pages/hotel-details')->name('hotel-details');
Route::view('/hotel-room-details', 'pages/hotel-room-details')->name('hotel-room-details');
Route::view('/hotel-booking', 'pages/hotel-booking')->name('hotel-booking');
Route::view('/tour-packages', 'pages/tour-packages')->name('tour-packages');
Route::view('/tour-place', 'pages/tour-place')->name('tour-place');
Route::view('/trip-place', 'pages/trip-place')->name('trip-place');
Route::view('/trip-destinations', 'pages/trip-destinations')->name('trip-destinations');
Route::view('/tour-experience', 'pages/tour-experience')->name('tour-experience');
Route::view('/tour-explorecity', 'pages/tour-explorecity')->name('tour-explorecity');
Route::view('/package', 'pages/package')->name('package');
Route::view('/activities-landing', 'pages/activities-landing')->name('activities-landing');
Route::view('/test-offers-details', 'pages/test-offers-details')->name('test-offers-details');
Route::view('/holidays-package-details-booking', 'pages/holidays-package-details-booking')->name('holidays-package-details-booking');




Route::view('/hotel-details-booking', 'pages/hotel-details-booking')->name('hotel-details-booking');
Route::view('/sbi-offer-0001', 'offer/sbi-offer-0001')->name('sbi-offer-0001');
Route::view('/sbi-offer-details', 'offer/sbi-offer-details')->name('sbi-offer-details');
Route::view('/slider-offers', 'slider/slider-offers')->name('slider-offers');
Route::view('/hotel-details-booking-pages', 'pages/hotel-details-booking-pages')->name('hotel-details-booking-pages');
Route::view('/ticket-print', 'pages/ticket-print')->name('ticket-print');
Route::view('/partner-agent', 'pages/partner-agent')->name('partner-agent');
Route::view('/partner-agent-login', 'pages/partner-agent-login')->name('partner-agent-login');
Route::view('/hotel-listed-page', 'pages/hotel-listed-page')->name('hotel-listed-page');
Route::view('/hotel-listed-login', 'pages/hotel-listed-login')->name('hotel-listed-login');
Route::view('/corporate-travel', 'pages/corporate-travel')->name('corporate-travel');
Route::view('/ticket-page-two', 'pages/ticket-page-two')->name('ticket-page-two');
Route::view('/view-tickets-print', 'pages/view-tickets-print')->name('view-tickets-print');
Route::view('/contact-us-form', 'pages/contact-us-form')->name('contact-us-form');
Route::view('/blog-page', 'pages/blog-page')->name('blog-page');

Route::view('/careerspages', 'pages/careerspages')->name('careerspages');
Route::view('/holiday-package-type', 'pages/holiday-package-type')->name('holiday-package-type');
Route::view('/activities-main', 'pages/activities-main')->name('activities-main');
Route::view('/holiday-view-details', 'pages/holiday-view-details')->name('holiday-view-details');
Route::view('/holiday-customer-details', 'pages/holiday-customer-details')->name('holiday-customer-details');
Route::view('/cruise-package-type', 'pages/cruise-package-type')->name('cruise-package-type');
Route::view('/cruise-view-deatils', 'pages/cruise-view-deatils')->name('cruise-view-deatils');
Route::view('/cruise-customer-details', 'pages/cruise-customer-details')->name('cruise-customer-details');
Route::view('/about-pages', 'pages/about-pages')->name('about-pages');
Route::view('/ticket-view-download', 'pages/ticket-view-download')->name('ticket-view-download');
Route::view('/hotel-list-view', 'pages/hotel-list-view')->name('hotel-list-view');
Route::view('/responsive', 'pages/responsive')->name('responsive');
Route::view('/hotel-2', 'pages/hotel-2')->name('hotel-2');
Route::view('/contact', 'pages/contact')->name('contact');
Route::view('/customer-support', 'pages/customer-support')->name('customer-support');
Route::view('/hotel-3', 'pages/hotel-3')->name('hotel-3');
Route::view('/blog-details', 'pages/blog-details')->name('blog-details');
Route::view('/blog-details2', 'pages/blog-details2')->name('blog-details2');
Route::view('/blog-details3', 'pages/blog-details3')->name('blog-details3');

// Route::view('/downloadpdf', 'downloadpdf');
Route::view('downloadpdf', 'FileDownloadController@index');
Route::view('/hotel-confirmation-page', 'pages/hotel-confirmation-page')->name('hotel-confirmation-page');
// Route::view('/visa-form', 'pages/visa-form')->name('visa-form');
Route::view('/registration-form', 'pages/registration-form')->name('registration-form');
Route::view('/offers-pages', 'pages/offers-pages')->name('offers-pages');
// Route::view('/javascript', 'pages/javascript')->name('javascript');
Route::view('/login-signup', 'pages/login-signup')->name('login-signup');
Route::view('/user-login', 'pages/user-login')->name('user-login');
Route::view('/honeymoon-package', 'pages/honeymoon-package')->name('honeymoon-package');
Route::view('/honeymoon-pages', 'pages/honeymoon-pages')->name('honeymoon-pages');
Route::view('/domestic-flights', 'pages/domestic-flights')->name('domestic-flights');
Route::view('/tailwind', 'pages/tailwind')->name('tailwind');
Route::view('/International-flight', 'pages/International-flight')->name('International-flight');
Route::view('/airports-india', 'pages/airports-india')->name('airports-india');

// Event Pages
Route::view('/events', 'events/events')->name('events');
Route::view('/corporate-events', 'events/corporate-events')->name('corporate-events');
Route::view('/wedding-events', 'events/wedding-events')->name('wedding-events');
Route::view('/school-events', 'events/school-events')->name('school-events');
Route::view('/college-events', 'events/college-events')->name('college-events');
Route::view('/sports-events', 'events/sports-events')->name('sports-events');
Route::view('/award-ceremonies', 'events/award-ceremonies')->name('award-ceremonies');
Route::view('/product-launches', 'events/product-launches')->name('product-launches');
Route::view('/seminars-conferences', 'events/seminars-conferences')->name('seminars-conferences');
Route::view('/parties', 'events/parties')->name('parties');
Route::view('/event-planning', 'events/event-planning')->name('event-planning');
Route::view('/cake-design', 'events/cake-design')->name('cake-design');
Route::view('/floral-design', 'events/floral-design')->name('floral-design');
Route::view('/photography', 'events/photography')->name('photography');
Route::view('/science-exhibition', 'events/science-exhibition')->name('science-exhibition');
Route::view('/cultural-fest', 'events/cultural-fest')->name('cultural-fest');
Route::view('/art-competition', 'events/art-competition')->name('art-competition');
Route::view('/quiz-competition', 'events/quiz-competition')->name('quiz-competition');
Route::view('/booking-form', 'pages/booking-form')->name('booking-form');
Route::view('/travel-insurance', 'pages/travel-insurance')->name('travel-insurance');


// vikas checkin 
Route::view('/web-check-in','flight-pages/webcheck')->name('web-check-in');


// Events Pages End

// Trains Start
Route::view('/trains', 'pages/trains')->name('trains');
Route::view('/pnr-status', 'pages/pnr-status')->name('pnr-status');
Route::view('/live-train-status', 'pages/live-train-status')->name('live-train-status');
// Trains End

// Hotel Search List
Route::view('/search-hotel-list','hotel/search-hotel-list')->name('search-hotel-list');
// Hotel Search List



// blog-tools
Route::view('blog-one', 'blog-tools/blog-one')->name('blog-one');
// blog-tools

//user dashword

Route::get('/calender', [SearchflightController::class, 'CalenderFare']);

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::view('/user/dashboard', 'userpages/dashborad')->name('user-dashboard');
    Route::get('/user/booking-details/{id}', [CustomerController::class, 'userBookingDetails'])->name('booking-details');
    Route::get('/user/booking', [CustomerController::class, 'userBooking'])->name('user-booking');
    Route::get('/user/profile', [CustomerController::class, 'userProfile']);
    Route::post('/profile/gender/update', [CustomerController::class, 'userGenderUpdate']);
    Route::post('/profile/all/update', [CustomerController::class, 'userAllUpdate']);
    Route::post('/profile/change/password', [CustomerController::class, 'changePassword']);
});



Route::group(['prefix' => 'GdsUser'], function () {
    Route::get('/login', [Login ::class , 'Login'])->name('GDS.loginShow');
    Route::post('/login', [Login ::class , 'SingIn'])->name('GDS.login');
});
Route::group(['prefix' => '/GDS'] , function () {
    Route::get('/Dashboard', [Login ::class , 'Dashboard'])->name('GDS.Dashboard');
    Route::post('/ShowPnrs', [Optins ::class , 'ShowPnrs'])->name('Gds.Pnr.Show');
    Route::get('/ShowPnrs', [Optins ::class , 'ShowPnrs'])->name('Gds.Pnr.Show');
    Route::get('/EditPnr/{ID}', [Optins ::class , 'EditPnr'])->name('Gds.EditPnr.');
    Route::post('/EditPnr/{ID}', [Optins ::class , 'EditPnr'])->name('Gds.EditPnr.');
    Route::get('/Logout', [Login ::class , 'Logout'])->name('GDS.Logout');
});
    Route::Post('/GDS/EditPnrs', [Optins::class, 'EditPnr']);



Route::get('form-validation', 'HomeController@formValidation');
Route::post('form-validation', 'HomeController@formValidationPost');
Route::get('show', [AirlineCodeController::class, 'show_data'])->name('show_iata');
Route::Post('/api/logins', [User::class, 'index']);


// paypal payment routes 
Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');
// paypal payment routes ends here



// Agent Login 
Route::group(['prefix' => 'Agent'], function(){
    Route::get('/login', [AgentLogin ::class , 'Login'])->name('Agent.loginShow');
    Route::post('/login', [AgentLogin ::class , 'SingIn'])->name('Agent.login');
    Route::get('/register' , [AgentLogin :: class , 'Register'])->name('Agent.registerShow');
    Route::post('/register' , [AgentLogin :: class , 'RegisterStore'])->name('Agent.register');
});
Route::get('/log-in', [AgentLogin::class, 'ShowLog']);
Route::post('Agent/save/amount' , [AgentLogin::class ,  'SaveAmount'])->name('agent.save.amount');
Route::get('Agent/save/upload' , [AgentLogin::class ,  'uploadDetails']);
Route::post('/uploaddetail' , [AgentLogin::class ,  'uploadFileDetails']);
Route::get('/document_skip_for_agent' , [AgentLogin::class ,  'Document_skip']);
Route::group(['prefix'=> 'Agent'] ,  function(){
    Route::get('/Dashboard' , [AgentLogin :: class , 'Dashboard'])->name('Agent.Dashboard');
    Route::get('/LogOut' , [AgentLogin::class ,  'Logout'])->name('Agent.LogoutShow');
    Route::get('/add/amount' , [AgentLogin::class ,  'AddFond'])->name('agent.add.amount');
    Route::post('/add/amount' , [AgentLogin::class ,  'AddAmount'])->name('agent.add.amount');
    Route::get('/LogOut' , [AgentLogin::class ,  'SingOut'])->name('Agent.Logout');
    Route::get('/Pnrs' , [AgentLogin :: class , 'Pnrs'])->name('Agent.Pnrs');
    Route::get('/Pnrs/{ID}' , [AgentLogin :: class , 'Pnrs'])->name('Agent.Pnrs');
    Route::get('/Pnrs/{ID}/Edit' , [AgentLogin :: class , 'Pnrs'])->name('Agent.Pnrs');
    Route::get('/Pnrs/{ID}/Delete' , [AgentLogin :: class , 'Pnrs'])->name('Agent.Pnrs');
});




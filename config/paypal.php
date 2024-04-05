<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

// return [
//     'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
//     'sandbox' => [
//         'client_id'         => "ASyYSv9xvI9DzEN3XQm2o2ujn9Y8Gz7dJ_gvd5JTxUDwx-adXgiUNKw4Ry_Y6cM9m54w4Za6dPqnEXgL",
//         'client_secret'     => "EEnpllJLYryVi4mGckvmoaLWhYDAhybXMwwHrO-goIZccVxpLr761e1cCFxQi60K4sgtowIY5qadCcrg",
//         'app_id'            => 'APP-80W284485P519543T',
//     ],
//     'live' => [
//         'client_id'         => "ASyYSv9xvI9DzEN3XQm2o2ujn9Y8Gz7dJ_gvd5JTxUDwx-adXgiUNKw4Ry_Y6cM9m54w4Za6dPqnEXgL",
//         'client_secret'     => "EEnpllJLYryVi4mGckvmoaLWhYDAhybXMwwHrO-goIZccVxpLr761e1cCFxQi60K4sgtowIY5qadCcrg",
//         'app_id'            => env('PAYPAL_LIVE_APP_ID', ''),
//     ],

//     'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
//     'currency'       => env('PAYPAL_CURRENCY', 'USD'),
//     'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
//     'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
//     'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
// ];
return [

    // 'mode'    => env('PAYPAL_MODE', 'sandbox'),

    // 'sandbox' => [

    //     'username'    => "sb-ovcdu27151157_api1.business.example.com",

    //     'password'    => "TBGKXRX6F34GTDLW",

    //     'secret'      => "EEnpllJLYryVi4mGckvmoaLWhYDAhybXMwwHrO-goIZccVxpLr761e1cCFxQi60K4sgtowIY5qadCcrg",

    //     'certificate' => "A9r1TbBBUJ.VTYUguK2EqCXGxx.-ACqc-7hjRCdAauVeeD73-kiTrggC",

    //     'app_id'      => 'APP-80W284485P519543T',

    // ],

    // 'live' => [

    //     'username'    => "sb-ovcdu27151157_api1.business.example.com",

    //     'password'    => "TBGKXRX6F34GTDLW",

    //     'secret'      => "access_token$sandbox$mfmf754jg59vq6d8$5a5141d531280a724af7a1f74700156c",

    //     'certificate' => "A9r1TbBBUJ.VTYUguK2EqCXGxx.-ACqc-7hjRCdAauVeeD73-kiTrggC",

    //     'app_id'      => 'APP-80W284485P519543T',

    // ],

    // 'payment_action' => 'Sale',

    // 'currency'       => env('PAYPAL_CURRENCY', 'USD'),

    // 'billing_type'   => 'MerchantInitiatedBilling',

    // 'notify_url'     => '',

    // 'locale'         => '',

    // 'validate_ssl'   => false,
    // 'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. 
    // 'sandbox' => [
    //     'client_id'         => "ASyYSv9xvI9DzEN3XQm2o2ujn9Y8Gz7dJ_gvd5JTxUDwx-adXgiUNKw4Ry_Y6cM9m54w4Za6dPqnEXgL",
    //     'client_secret'     => "EEnpllJLYryVi4mGckvmoaLWhYDAhybXMwwHrO-goIZccVxpLr761e1cCFxQi60K4sgtowIY5qadCcrg",
    //     'app_id'            => '',
    // ],
    'mode'    => env('PAYPAL_MODE', 'live'), // Can only be 'sandbox' Or 'live'. 
    'live' => [
        'client_id'         => "AfVjuAj8RIhB6l_4xVgOrRk511u00lYVTKMErC6Sj7bWOgzpGNhUVtf-zEtn-9QdhSjmyCo-urvqgpiZ",
        'client_secret'     => "ECAx5h2l_MY00RtLA9NGQy8yZ8lPEcIg214ykOJH2Vz6PCW2IjyznzcOYLLe0m9rksv6PLxfiS7PUrnr",
        'app_id'            => '',
    ],    
];
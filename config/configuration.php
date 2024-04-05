<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    |
    | configuration 
    | 
    | configuration
    |
    */

    // 'default' => env('AMEDEUS_WSDL_PATH', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    | 
    |
    */
 
    'Amadeus' => [
        'office_id' => env('AMADEUS_OFFICE_ID'),
        'user_id' => env('AMADEUS_USER_ID'),
        'password' => env('AMADEUS_PASSWORD'),
        'wsdl' => env('AMADEUS_WSDL_PATH'),
        'url' => env('AMADEUS_URL'),
        'action' => env('AMADEUS_ACTION'),
    ],

    'Galileo' => [
        'url' => env('GALILEO_URL'),
        'user_name' => env('GALILEO_USER_NAME'),
        'password' => env('GALILEO_PASSWORD'),
    ],
];

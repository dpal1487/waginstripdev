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
    /*'Auth' => [
       'appID' => env('appID'),
        'secretKey' => env('secretKey'),
        'testURL' => 'https://ces-gamma.cashfree.com',
        'prodURL' => 'https://ces-api.cashfree.com',
        'maxReturn' => 100,
        'isLive' => false,  */
        
        'Auth' => [
        'appID' => env('APP_ID'),
        'secretKey' => env('SECRET_KEY'),
        'testURL' => 'https://test.cashfree.com',
        //'prodURL' => 'https://test.cashfree.com',
        'prodURL' => 'https://ces-api.cashfree.com',
        'maxReturn' => 100,
        'isLive' => false,
        
        
    ],
];

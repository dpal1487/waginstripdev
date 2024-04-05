<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'Galileo/returnurl',
        'Galileo/bookingsroundtrip',
        'Galileo/booking',
        'flight/payment',
        'flight/booking-roundtrip-domestic',
        'booking/bookings',
        'Agent/save/amount',
        'group_fare_get_payment',
    ];
}

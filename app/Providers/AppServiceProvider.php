<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\onlylocation;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $session = Session::get('country_code');
        if(!empty($session)){
            $cncode = $session;   
        }
        else{
            // onlylocation::geolocation();
        }
        // dd(Session::get('country_code'));
        Schema::defaultStringLength(191);
    }
}

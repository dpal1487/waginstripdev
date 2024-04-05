<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelAddPaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_add_payment_details', function (Blueprint $table) {
            $table->id();
            $table->string('hotelname', 150);
            $table->string('address', 250);
            $table->string('check', 100);
            $table->string('adult', 11);
            $table->string('name', 70);
            $table->string('phone', 15);
            $table->string('email', 50);
            $table->string('amount', 15); 
            $table->string('uniqueid', 100); 
            $table->string('payment_id', 100); 
            $table->string('booking_code', 25); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_add_payment_details');
    }
}

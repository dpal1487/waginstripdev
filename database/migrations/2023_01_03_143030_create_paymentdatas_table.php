<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentdatas', function (Blueprint $table) {
            $table->id();
            $table->string('adultTitle', 20)->nullable();
            $table->string('adultFirstName', 20)->nullable();
            $table->string('adultLastName', 20)->nullable();
            $table->string('adult', 125)->nullable();
            $table->string('phoneNumber', 20)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('checkin', 10)->nullable();
            $table->string('checkout', 10)->nullable();
            $table->string('HotelName',200)->nullable();
            $table->text('address',255)->nullable();
            $table->string('countryCode2', 20)->nullable();
            $table->string('booking_code', 20)->nullable();
            $table->string('roomtypecode', 20)->nullable();
            $table->string('rateplanecode', 20)->nullable();
            $table->string('chaincode', 20)->nullable();
            $table->string('hotelcode', 20)->nullable();
            $table->string('night', 20)->nullable();
            $table->string('Checkbasefare', 20)->nullable();
            $table->string('HotelCityCode', 20)->nullable();
            $table->string('amount', 20)->nullable();
            $table->string('header', 255)->nullable();
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
        Schema::dropIfExists('paymentdatas');
    }
}

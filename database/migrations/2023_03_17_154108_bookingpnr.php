<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookingpnr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bookingpnr', function (Blueprint $table) {
            $table->id();

            $table->string('pnr' , 10)->nullable();
            $table->longText('segment' )->nullable();
            $table->longText('travellers' )->nullable();
            $table->string('email' )->nullable();
            $table->string('mobile' )->nullable();
            $table->string('carrayon' )->nullable();
            $table->string('checkin' )->nullable();
            $table->longText('basefare' )->nullable();
            $table->string('totalfare' )->nullable();
            $table->string('airlinetaxes' )->nullable();
            $table->string('ancillarycharges' )->nullable();
            $table->string('donationamount' )->nullable();
            $table->string('conveniencefee' )->nullable();
            $table->string('xmllogs_id' )->nullable();
            $table->string('user_id' )->nullable();

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
        //
    }
}

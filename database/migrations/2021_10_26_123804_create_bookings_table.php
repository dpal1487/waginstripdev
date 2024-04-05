<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_from');
            $table->string('booking_id');
            $table->string('trip');
            $table->string('trip_type');
            $table->string('trip_stop');
            $table->string('gds_pnr');
            $table->string('airline_pnr');
            $table->string('email');
            $table->string('mobile');
            $table->longtext('itinerary');
            $table->longtext('baggage');
            $table->longtext('passenger');
            $table->longtext('fare');
            $table->string('status');
            $table->integer('logs_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('bookings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalileoFlightLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galileo_flight_logs', function (Blueprint $table) {
            $table->id();
            $table->text('session_id');
            $table->longText('authenticate')->nullable();
            $table->longText('availability')->nullable();
            $table->longText('pricing')->nullable();
            $table->longText('addPassengerDetails')->nullable();
            $table->longText('booking')->nullable();
            $table->longText('ticket')->nullable();
            $table->longText('GetBookingDetails')->nullable();
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
        Schema::dropIfExists('galileo_flight_logs');
    }
}

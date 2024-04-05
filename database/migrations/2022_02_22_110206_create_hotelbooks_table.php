<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelbooks', function (Blueprint $table) {
            $table->id();
            $table->string('booking_from');
            $table->string('booking_id');
            $table->string('trip');
            $table->string('trip_type');
            $table->string('trip_stop');
            $table->string('email');
            $table->string('mobile');
            $table->string('fare');
            $table->string('status');
            $table->string('logs_id');
            $table->string('user_id');
            
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
        Schema::dropIfExists('hotelbooks');
    }
}

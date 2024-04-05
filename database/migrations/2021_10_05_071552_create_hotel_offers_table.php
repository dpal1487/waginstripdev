<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('rating', 50);
            $table->string('location', 50);
            $table->string('price', 11);
            $table->string('room_type', 100);
            $table->string('images', 100);
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
        Schema::dropIfExists('hotel_offers');
    }
}

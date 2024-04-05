<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_offers', function (Blueprint $table) {
            $table->id();
            $table->string('pname', 200);
            $table->string('duration', 50);
            $table->string('package_type', 50);
            $table->string('location', 50);
            $table->string('passanger', 50);
            $table->string('flight_id', 11);
            $table->string('hotel_id', 11);
            $table->string('meal', 50);
            $table->string('transfer', 50);
            $table->string('sumry', 50);
            $table->string('activities', 100);
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
        Schema::dropIfExists('package_offers');
    }
}

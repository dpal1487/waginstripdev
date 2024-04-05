<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlinePackagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airline_packages', function (Blueprint $table) {
            $table->id();
            $table->string('ttype', 50);
            $table->string('ticktype', 50);
            $table->string('airline', 100);
            $table->string('flight', 50);
            $table->string('connection', 50);
            $table->string('departure', 50);
            $table->string('arrival', 50);
            $table->string('dates', 50);
            $table->string('times', 50);
            $table->string('duration', 50);
            $table->string('roundairline', 100)->nullable();
            $table->string('roundflight', 50)->nullable();
            $table->string('roundconnection', 50)->nullable();
            $table->string('rounddeparture', 50)->nullable();
            $table->string('roundarrival', 50)->nullable();
            $table->string('rounddates', 50)->nullable();
            $table->string('roundtimes', 50)->nullable();
            $table->string('roundduration', 50)->nullable();
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
        Schema::dropIfExists('airline_packages');
    }
}

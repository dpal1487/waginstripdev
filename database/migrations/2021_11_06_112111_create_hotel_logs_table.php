<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_logs', function (Blueprint $table) {
            $table->id();
            $table->longtext('session_id');
            $table->longtext('authenticate')->nullable();;
            $table->longtext('multi_availability')->nullable();
            $table->longtext('multi_descriptive')->nullable();
            $table->longtext('single_availability')->nullable();
            $table->longtext('single_descriptive')->nullable();
            $table->longtext('enhanced_pricing')->nullable();
            $table->longtext('add_multi_elements_zero')->nullable();
            $table->longtext('hotel_sell')->nullable();
            $table->longtext('add_multi_elements_ten')->nullable();
            $table->longtext('retrieve')->nullable();
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
        Schema::dropIfExists('hotel_logs');
    }
}

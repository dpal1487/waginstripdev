<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_hotels', function (Blueprint $table) {
           $table->id();
            $table->string('order_id', 20);
            $table->string('order_amount');
            $table->string('reference_id', 255);
            $table->string('txstatus', 64);
            $table->string('payment_mode', 64);
            $table->string('refund_id', 64)->nullable();
            $table->string('txmsg', 255)->nullable();
            $table->dateTime('txtime')->nullable();
            $table->string('sign', 255)->nullable();
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
        Schema::dropIfExists('payment_hotels');
    }
}

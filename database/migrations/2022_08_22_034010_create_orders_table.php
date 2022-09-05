<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('local_id');
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('turbo_order_id');
            $table->bigInteger('turbo_service_id');
            $table->string('service_name');
            $table->float('price');
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('service_name')->references('service_name')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};

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
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('order_email');
            $table->string('order_phone');
            $table->string('country');
            $table->string('city');
            $table->string('billing_address');
            $table->string('billing_address_optional')->nullable();
            $table->string('order_address');
            $table->string('order_address_optional')->nullable();
            $table->float('ammount');
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
        Schema::dropIfExists('orders');
    }
};

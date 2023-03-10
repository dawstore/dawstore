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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sku')->unique();
            $table->string('name');
            $table->float('price');
            $table->text('description');
            $table->integer('stock');
            $table->enum('genre', ['Male', 'Female', 'Unisex']);
            $table->foreignId('brand_id')->references('id')->on('brands');
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
        Schema::dropIfExists('products');
    }
};

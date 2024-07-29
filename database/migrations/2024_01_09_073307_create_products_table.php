<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('product_title')->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

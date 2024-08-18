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
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_slug')->nullable();
            $table->text('review_description')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_comprice')->nullable();
            $table->string('product_costprice')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_v_size_material_color')->nullable();
            $table->string('product_v_option')->nullable();
            $table->string('product_v_type_add_value')->nullable();
            $table->string('online_store')->nullable();
            $table->string('product_sku')->nullable();
            $table->string('product_barcode')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('product_thumbnail')->nullable();
            $table->string('store_id')->nullable();
            $table->string('user_id')->nullable();
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

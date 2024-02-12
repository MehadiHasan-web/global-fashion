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
            $table->string('name');
            $table->string('product_code');
            $table->text('description');
            $table->string('slug');
            $table->unsignedInteger('status')->default(1);
            $table->float('price');
            $table->float('discounted_price')->nullable();
            $table->string('brand_name')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedInteger('gender')->default(1);
            $table->string('color');
            $table->string('size');
            $table->unsignedInteger('is_featured')->default(1);
            $table->unsignedInteger('is_available')->default(1);
            $table->string('thumb_image');
            $table->string('images')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('restrict');
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

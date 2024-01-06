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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('country')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('thana')->nullable();
            $table->string('zip')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->text('additional_info')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('total')->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('coupon_discount')->nullable();
            $table->string('after_discount')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('shipping')->nullable();
            $table->string('order_id',25)->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->string('date')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

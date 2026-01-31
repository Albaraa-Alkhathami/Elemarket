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
        Schema::create('logistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderId');
            $table->string('carrier');
            $table->string('shippingMethod');
            $table->string('trackingNumber')->unique();
            $table->string('hazardClass');
            $table->string('deliveryStatus');
            $table->dateTime('estimatedDelivery')->nullable();
            $table->dateTime('actualDelivery')->nullable();
            $table->foreignId('order_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logistics');
    }
};

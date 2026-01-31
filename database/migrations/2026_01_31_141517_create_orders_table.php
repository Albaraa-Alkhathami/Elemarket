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
            $table->unsignedBigInteger('buyerId');
            $table->unsignedBigInteger('sellerId');
            $table->decimal('totalAmount', 12, 2);
            $table->string('orderStatus')->default('Pending');
            $table->dateTime('createdAt');
            $table->dateTime('approvedAt')->nullable();
            $table->foreignId('buyer_id');
            $table->foreignId('seller_id');
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

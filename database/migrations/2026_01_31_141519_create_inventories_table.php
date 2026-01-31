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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sellerId');
            $table->unsignedBigInteger('elementId');
            $table->unsignedBigInteger('quantityAvailable');
            $table->unsignedBigInteger('reservedQuantity');
            $table->string('warehouseLocation');
            $table->foreignId('seller_id');
            $table->foreignId('element_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};

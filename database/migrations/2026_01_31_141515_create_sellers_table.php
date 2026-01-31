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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('sellerType');
            $table->string('licenseNumber');
            $table->boolean('verificationStatus')->default(false);
            $table->decimal('rating', 3, 2);
            $table->string('warehouseLocations');
            $table->string('relationships');
            $table->string('hasMany');
            $table->string('morphMany');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};

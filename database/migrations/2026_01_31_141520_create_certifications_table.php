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
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('licenseHolderId');
            $table->string('licenseType');
            $table->string('issuedBy');
            $table->dateTime('validFrom');
            $table->dateTime('validUntil');
            $table->string('status')->default('Active');
            $table->foreignId('buyer_id');
            $table->foreignId('seller_id');
            $table->morphs('licenseholder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};

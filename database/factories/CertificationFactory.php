<?php

namespace Database\Factories;

use App\Models\Buyer;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class CertificationFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'licenseHolderId' => fake()->randomNumber(),
            'licenseType' => fake()->word(),
            'issuedBy' => fake()->word(),
            'validFrom' => fake()->dateTime(),
            'validUntil' => fake()->dateTime(),
            'status' => fake()->regexify('[A-Za-z0-9]{default('Active')}'),
            'buyer_id' => Buyer::factory(),
            'seller_id' => Seller::factory(),
        ];
    }
}

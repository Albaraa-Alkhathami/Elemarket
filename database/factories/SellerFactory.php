<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'companyName' => fake()->word(),
            'sellerType' => fake()->word(),
            'licenseNumber' => fake()->word(),
            'verificationStatus' => fake()->boolean(),
            'rating' => fake()->randomFloat(2, 0, 9.99),
            'warehouseLocations' => fake()->word(),
            'relationships' => fake()->word(),
            'hasMany' => fake()->word(),
            'morphMany' => fake()->word(),
        ];
    }
}

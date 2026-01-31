<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BuyerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'fullName' => fake()->word(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'buyerType' => fake()->word(),
            'licenseNumber' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'verificationStatus' => fake()->boolean(),
            'shippingAddress' => fake()->word(),
            'paymentMethods' => fake()->word(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegulationsFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'elementCategory' => fake()->word(),
            'requiredLicenseType' => fake()->word(),
            'shippingRestrictions' => fake()->word(),
            'storageRequirements' => fake()->word(),
            'maxQuantityPerOrder' => fake()->randomNumber(),
        ];
    }
}

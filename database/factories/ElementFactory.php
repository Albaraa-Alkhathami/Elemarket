<?php

namespace Database\Factories;

use App\Models\Source;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElementFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'symbol' => fake()->word(),
            'category' => fake()->word(),
            'form' => fake()->word(),
            'purity' => fake()->randomFloat(2, 0, 999.99),
            'weight' => fake()->randomFloat(2, 0, 9999999999.99),
            'radioactivityLevel' => fake()->randomFloat(4, 0, 99999999.9999),
            'pricePerUnit' => fake()->randomFloat(2, 0, 99999999.99),
            'availabilityStatus' => fake()->word(),
            'regulatoryClass' => fake()->word(),
            'sourceId' => fake()->randomNumber(),
            'source_id' => Source::factory(),
        ];
    }
}

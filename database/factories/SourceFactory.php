<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SourceFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'location' => fake()->word(),
            'country' => fake()->country(),
            'sourceType' => fake()->word(),
            'certification' => fake()->word(),
            'extractionDate' => fake()->dateTime(),
            'owner' => fake()->word(),
        ];
    }
}

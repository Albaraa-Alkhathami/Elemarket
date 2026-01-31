<?php

namespace Database\Factories;

use App\Models\Element;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'sellerId' => fake()->randomNumber(),
            'elementId' => fake()->randomNumber(),
            'quantityAvailable' => fake()->randomNumber(),
            'reservedQuantity' => fake()->randomNumber(),
            'warehouseLocation' => fake()->word(),
            'seller_id' => Seller::factory(),
            'element_id' => Element::factory(),
        ];
    }
}

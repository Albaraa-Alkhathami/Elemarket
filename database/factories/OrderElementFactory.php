<?php

namespace Database\Factories;

use App\Models\Element;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderElementFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'orderId' => fake()->randomNumber(),
            'elementId' => fake()->randomNumber(),
            'quantity' => fake()->randomNumber(),
            'pricePerUnitAtPurchase' => fake()->randomFloat(2, 0, 99999999.99),
            'subtotal' => fake()->randomFloat(2, 0, 9999999999.99),
            'order_id' => Order::factory(),
            'element_id' => Element::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class LogisticsFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'orderId' => fake()->randomNumber(),
            'carrier' => fake()->word(),
            'shippingMethod' => fake()->word(),
            'trackingNumber' => fake()->regexify('[A-Za-z0-9]{unique}'),
            'hazardClass' => fake()->word(),
            'deliveryStatus' => fake()->word(),
            'estimatedDelivery' => fake()->dateTime(),
            'actualDelivery' => fake()->dateTime(),
            'order_id' => Order::factory(),
        ];
    }
}

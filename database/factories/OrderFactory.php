<?php

namespace Database\Factories;

use App\Models\Buyer;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'buyerId' => fake()->randomNumber(),
            'sellerId' => fake()->randomNumber(),
            'totalAmount' => fake()->randomFloat(2, 0, 9999999999.99),
            'orderStatus' => fake()->regexify('[A-Za-z0-9]{default('Pending')}'),
            'createdAt' => fake()->dateTime(),
            'approvedAt' => fake()->dateTime(),
            'buyer_id' => Buyer::factory(),
            'seller_id' => Seller::factory(),
        ];
    }
}

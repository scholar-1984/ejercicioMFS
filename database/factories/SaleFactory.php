<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_book_id' => fake()->numberBetween(1,100),
            'sale_date' => fake()->date(),
            'quantity' => fake()->numberBetween(1,50)
            //
        ];
    }
}

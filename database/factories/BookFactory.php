<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->sentence(4,false),
            'author_id' => fake()->numberBetween(0,100),
            'category_id' => fake()->numberBetween(0,20),
            'price' => fake()->randomFloat(2,1,99999)
        ];
    }
}

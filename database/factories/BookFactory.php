<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
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
            'title' => fake()->randomElement(['Mushoku tensei', 'Sword art online', '86 eight-six']),
            'description' => fake()->text(100),
            'author' => fake()->name(),
            'first_publication' => fake()->date(),
            'score' => fake()->numberBetween(1, 10),
            'book_cover' => fake()->text(25)
        ];
    }
}

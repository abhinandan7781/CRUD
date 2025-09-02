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
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'published_year' => $this->faker->year(),
            'genre' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 5, 100),
            'library_id'=>\App\Models\Library::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\LIbrary;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Library>
 */
class LibraryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company().' Library',
            'location' => $this->faker->city(),
        ];

    }
}


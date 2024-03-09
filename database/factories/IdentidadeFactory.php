<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Identidade>
 */
class IdentidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naran' => fake()->name(),
            'sexo' => fake()->randomElement(['Mane', 'Feto']),
            'hela_fatin' => fake()->address(),
            'tinan' => fake()->randomNumber(),
            'created_at' => fake()->time(),
            'updated_at' => fake()->time()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AccommodationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(1),
            'slug' => fake()->slug(),
            'description' => fake()->text(),
            'image' => fake()->imageUrl(),
            'status' => fake()->boolean, //Permet d'avoir un booléen aléatoire (0 ou 1) 
        ];
    }
}

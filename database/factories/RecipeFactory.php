<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->unique()->slug(),
            'category' => fake()->word(),
            'ingredients' => 'pasta, tomato, olives',
            'instructions' => 'Cuire les pates/ Faire une sauce/ ajouter les olives',
        ];
    }
}

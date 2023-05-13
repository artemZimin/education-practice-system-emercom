<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PracticalTraining>
 */
class PracticalTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'do' => fake()->date(),
            'assessment' => fake()->numberBetween(2, 5),
            'date_of_protection' => fake()->date(),
            'ro_full_name' => fake()->name(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faculty>
 */
class FacultyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'faculty_number' => fake()->numberBetween(1, 100),
            'faculty_name' => fake()->realText(50),
            'dean_full_name' => fake()->name(),
            'dean_phone_number' => fake()->phoneNumber(),
            'zup_full_name' => fake()->name(),
            'zup_phone_number' => fake()->phoneNumber(),
        ];
    }
}

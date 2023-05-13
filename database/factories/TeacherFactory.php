<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'birth_date' => fake()->date(),
            'phone_number' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'email' => fake()->email(),
            'academic_degree' => fake()->realText(20),
            'academic_title' => fake()->realText(20),
            'work_experience' => fake()->realText(20),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudyGroup>
 */
class StudyGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_number' => fake()->numberBetween(100, 699),
            'headman_full_name' => fake()->name(),
            'headman_phone_number' => fake()->phoneNumber(),
            'course' => fake()->numberBetween(1, 6),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function getGender(): string
    {
        $genders = ['Мужчина', 'Женщина'];

        return $genders[fake()->numberBetween(0, 1)];
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_full_name' => fake()->name(),
            'passport_series' => fake()->numberBetween(40, 49),
            'passport_number' => fake()->numberBetween(100000, 999999),
            'birth_date' => fake()->date(),
            'place_of_issue_of_the_passport' => fake()->address(),
            'date_of_issue_of_the_passport' => fake()->date(),
            'credit_card_number' => fake()->numberBetween(1, 10000),
            'phone_number' => fake()->phoneNumber(),
            'gender' => $this->getGender(),
            'address' => fake()->address(),
            'email' => fake()->email(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practice>
 */
class PracticeFactory extends Factory
{
    public function getType(): string
    {
        $types = ['Производственная', 'Учебная'];

        return $types[fake()->numberBetween(0, count($types) - 1)];
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'type' => $this->getType(),
            'type_of_reporting' => fake()->realText(20),
            'duration' => fake()->numberBetween(7, 21),
        ];
    }
}

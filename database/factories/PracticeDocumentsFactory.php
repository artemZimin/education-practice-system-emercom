<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PracticeDocuments>
 */
class PracticeDocumentsFactory extends Factory
{
    public function getFile(): string
    {
        return '01101000 01100101 01101100 01101100 01101111 00100000 01110111 01101111 01110010 01101100 01100100';
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->realText(50),
            'type' => fake()->realText(50),
            'file' => $this->getFile(),
        ];
    }
}

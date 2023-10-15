<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salary>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return int[]
     *
     * @psalm-return array{grade: int, floor: int, ceil: int}
     */
    public function definition(): array
    {
        return [
            'grade' => fake()->numberBetween(1, 20),
            'floor' => fake()->numberBetween(8000, 78000),
            'ceil' => fake()->numberBetween(8000, 78000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Age>
 */
class AgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return int[]
     *
     * @psalm-return array{years: int<18, 60>}
     */
    public function definition(): array
    {
        return [
            'years' => rand(18, 60),
        ];
    }
}

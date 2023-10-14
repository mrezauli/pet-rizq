<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'short_description' => fake()->sentence(2),
            'full_description' => fake()->sentence(4),
            'requirements' => fake()->sentence(6),
            'job_nature' => fake()->word(),
            'address' => fake()->address(),
            'top_rated' => fake()->boolean(),
            'count' => fake()->randomNumber(3),
            'location_id' => rand(1, 10),
            'company_id' => rand(1, 10),
            'designation_id' => rand(1, 10),
            'salary_id' => rand(1, 10),
            'age_id' => rand(1, 10),
            'qualification_id' => rand(1, 10),
            'experience_id' => rand(1, 10),
        ];
    }
}
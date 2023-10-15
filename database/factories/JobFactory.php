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
     * @return (bool|int|string)[]
     *
     * @psalm-return array{short_description: string, full_description: string, requirements: string, job_nature: string, address: string, top_rated: bool, count: int, location_id: int<1, 10>, company_id: int<1, 10>, designation_id: int<1, 10>, salary_id: int<1, 10>, age_id: int<1, 10>, qualification_id: int<1, 10>, experience_id: int<1, 10>}
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

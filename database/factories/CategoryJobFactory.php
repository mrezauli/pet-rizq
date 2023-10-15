<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryJob>
 */
class CategoryJobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return int[]
     *
     * @psalm-return array{job_id: int<1, 10>, category_id: int<1, 10>}
     */
    public function definition(): array
    {
        return [
            'job_id' => rand(1, 10),
            'category_id' => rand(1, 10),
        ];
    }
}

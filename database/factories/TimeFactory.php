<?php

namespace Database\Factories;

use App\Models\Time;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @template TModel of \App\Models\Time
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<TModel>
 */
class TimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<TModel>
     */
    protected $model = Time::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'opening' => fake()->dateTime(),
            'closing' => fake()->dateTime(),
        ];
    }
}
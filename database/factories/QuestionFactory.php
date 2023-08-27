<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => category::factory(),
            'slug' => fake()->slug(),
            'body' => fake()->paragraph(6),
            'status' => fake()->numberBetween($min = 1, $max = 3) ,
        ];
    }
}

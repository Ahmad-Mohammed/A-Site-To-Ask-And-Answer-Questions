<?php

namespace Database\Factories;

use App\Models\answer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\like_answer>
 */
class LikeAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'answer_id' => answer::factory(),
            'user_id' => User::factory(),
            'is_like' => fake()->boolean(),
        ];
    }
}

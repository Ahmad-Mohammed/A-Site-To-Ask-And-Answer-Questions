<?php

namespace Database\Factories;

use App\Models\question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_id' => question::factory(),
            'user_id' => User::factory(),
            'body' => fake()->paragraph(),
        ];
    }
}

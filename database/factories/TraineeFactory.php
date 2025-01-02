<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainee>
 */
class TraineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => $this->faker->unique()->randomNumber(8),
            'name' => $this->faker->unique()->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'login' => $this->faker->unique()->userName(),
            'password' => $this->faker->password(),
            'office' => $this->faker->word(),
            'current_category' => $this->faker->word(),
            'total_days' => $this->faker->randomNumber(),
            'current_responsible' => $this->faker->name(),
            'scholarship_end' => $this->faker->dateTime(),
            'teaching_credits_department' => $this->faker->randomNumber(),
            'desired_teaching_credits' => $this->faker->randomNumber(),
        ];
    }
}

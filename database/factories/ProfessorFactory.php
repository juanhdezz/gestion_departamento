<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected static ?string $password;
    public function definition(): array
    {
        return [
            'dni' => $this->faker->unique()->randomNumber(8),
            'full_name' => $this->faker->unique()->name(),
            'short_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'login' => $this->faker->unique()->userName(),
            'password' => $this->faker->password(),
            'office' => $this->faker->word(),
            'office_phone' => $this->faker->phoneNumber(),
            'personal_phone' => $this->faker->phoneNumber(),
            'copier_uid' => $this->faker->word(),
            'copier_password' => $this->faker->password(),
            'teaches' => $this->faker->boolean(),
            'is_current_member' => $this->faker->boolean(),
            'is_council_member' => $this->faker->boolean(),
            'is_total_member' => $this->faker->boolean(),
            'last_access' => $this->faker->dateTime(),
            'group' => $this->faker->word(),
            'category' => $this->faker->word(),
            'website' => $this->faker->url(),
            'teaching_order' => $this->faker->randomNumber(),
            'scholarship_history' => $this->faker->sentence(),
        ];
    }
}

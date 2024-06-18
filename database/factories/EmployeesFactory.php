<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Employees::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'surname' => fake()->lastname(),
            'workstation' => fake()->jobTitle(),
            'contract' => fake()->jobTitle(),
            'email' => fake()->unique()->safeEmail(),
            'hours-work' => fake()->randomDigitNotNull(1,8),
            'email_verified_at' => now()
        ];
    }
}

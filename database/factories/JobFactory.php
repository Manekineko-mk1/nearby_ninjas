<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    // Note: To access the factory in CLI
    // 1. Run `php artisan tinker`
    // 2. Run `App\Models\Job::factory()->count(10)->create();`

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(),
            'salary' => fake()->numberBetween(70000, 200000),
        ];
    }
}

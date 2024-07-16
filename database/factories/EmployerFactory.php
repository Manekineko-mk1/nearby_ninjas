<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    // Note: To access the factory in CLI
    // 1. Run `php artisan tinker`
    // 2. Run `App\Models\Employer::factory()->count(10)->create();`

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company()
        ];
    }
}

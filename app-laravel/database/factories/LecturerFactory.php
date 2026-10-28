<?php

namespace Database\Factories;

use App\Models\lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<lecturer>
 */
class LecturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'course' => $this->faker->sentence(1),
            'age' => $this->faker->numberBetween(20, 100),
            'gender' => $this->faker->randomElement(['male', 'female'])
        ];
    }
}

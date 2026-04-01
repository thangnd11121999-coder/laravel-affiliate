<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Creators>
 */
class CreatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'full_name' => fake()->name(),
        'display_name' => fake()->userName(),
        'email' => fake()->unique()->safeEmail(),
        'phone' => fake()->phoneNumber(),
        'platform' => fake()->randomElement(['TikTok', 'Facebook', 'Youtube', 'Instagram']),
        'follower_count' => fake()->numberBetween(100, 1000000),
        'status' => fake()->randomElement(['Active', 'Pending', 'Inactive']),
        'notes' => fake()->sentence(),
        ];
    }
}

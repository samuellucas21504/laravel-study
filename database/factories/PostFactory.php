<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(1),
            'description' => fake()->paragraph(),
            'status' => fake()->numberBetween(0, 1),
            'publish_date' => fake()->dateTime(),
            'category_id' => fake()->numberBetween(1, 4),
            'user_id' => fake()->numberBetween(1, 100),
            'views' => fake()->numberBetween(0, 200000)
        ];
    }
}

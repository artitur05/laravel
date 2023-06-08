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
            'title' => fake()->realText(rand(10,20)),
            'content' => fake()->realText(rand(2000,3000)),
            'user_id' => 1,
            'category_id' => rand(1,5),
            'is_visible' => 1,
            'published_at' => fake()->date
        ];
    }
}

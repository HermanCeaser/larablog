<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $is_published = fake()->boolean(75);
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(4, true),
            'author_id' => Author::factory(),
            'cover_image' => fake()->imageUrl(),
            'is_published' => $is_published,
            'published_at' => $is_published ? now() : null,


        ];
    }
}

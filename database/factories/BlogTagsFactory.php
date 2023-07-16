<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogTagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blog_id' => function () {
                return Blog::inRandomOrder()->first()->id;
            },
            'tag_id' => function () {
                return Tag::inRandomOrder()->first()->id;
            },
        ];
    }
}

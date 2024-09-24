<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogTags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = Blog::factory()->count(200)->create();

        $blogs->each(function ($blog) {
            BlogTags::factory()->count(rand(1, 3))->create([
                'blog_id' => $blog->id,
            ]);
        });
    }
}

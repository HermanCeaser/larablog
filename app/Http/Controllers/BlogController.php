<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::with(['author', 'tags'])
            ->isPublished()
            ->paginate(10)
            ->through(function($blog){
                return [
                    'id' => $blog->id,
                    'author' => $blog->author?->fullname,
                    'title' => $blog->title,
                    'tags' => $blog->tags,
                    'content' => $blog->content,
                    'summary' => $blog->summary,
                    'is_published' => $blog->is_published,
                    'cover_image' => $blog->cover_image,
                    'published_at' => $blog->published_at,
                    'created_at' => $blog->created_at,
                ];
            });

        // dd($blogs);
        return Inertia::render('Blogs', ['blogs' => $blogs]);
    }

    public function show(Blog $blog)
    {
        return Inertia::render('BlogDetail', ['blog' => $blog]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $dates = ['published_at', 'created_at', 'updated_at'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tags');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function scopeIsPublished($query)
    {
        return $query->where('is_published', true);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BlogTags extends Pivot
{
    use HasFactory;

    protected $table = "blog_tags";
}

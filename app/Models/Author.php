<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }


    public function getFullNameAttribute()
    {
        return $this->first_name. ' ' .$this->last_name;
    }
}

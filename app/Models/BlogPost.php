<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'content', 'category', 'published_at', 'user_id'];
    
    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Relationship: BlogPost belongsTo satu User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}


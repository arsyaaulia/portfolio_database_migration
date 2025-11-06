<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
     use HasFactory;

    protected $fillable = ['blog_post_id', 'author_name', 'content'];

    // Relationship: Comment belongsTo BlogPost
    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
}

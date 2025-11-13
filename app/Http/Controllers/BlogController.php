<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog - Pemikiran & Tutorial',
            'posts' => BlogPost::with('user', 'comments')->orderBy('published_at', 'desc')->get()
        ];
        return view('blog', $data);
    }
}
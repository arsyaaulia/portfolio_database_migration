<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'stats' => [
                'visitors' => 1250,
                'projects' => 8,
                'blog_posts' => 15,
                'messages' => 23
            ]
        ];
        return view('admin.index', $data);
    }
}
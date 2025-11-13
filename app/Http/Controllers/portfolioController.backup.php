<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\BlogPost;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home - Portfolio Saya',
            'skills' => Skill::all(),
            'projects' => Project::all(),
        ];
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me',
            'about' => [
                'nama' => 'Arsya Aulia Amira',
                'profesi' => 'Full Stack Developer',
                'deskripsi' => 'Saya adalah seorang developer yang passionate dalam membuat aplikasi web yang indah dan functional.',
            ],
            'experiences' => Experience::orderBy('created_at', 'desc')->get()
        ];
        return view('about', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog - Pemikiran & Tutorial',
            'posts' => BlogPost::orderBy('published_at', 'desc')->get()
        ];
        return view('blog', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Hubungi Saya',
            'contact_info' => [
                'email' => 'arsya1522@gmail.com',
                'phone' => '+62 xxxx-xxxx-xxxx',
                'location' => 'Makassar, Indonesia'
            ]
        ];
        return view('contact', $data);
    }
}
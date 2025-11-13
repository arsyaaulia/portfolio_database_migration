<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tentang Saya',
            'about' => [
                'nama' => 'Arsya Aulia Amira',
                'profesi' => 'Full Stack Developer',
                'deskripsi' => 'Saya adalah seorang developer yang passionate dalam membuat aplikasi web yang indah dan functional.',
            ],
            'experiences' => Experience::orderBy('created_at', 'desc')->get()
        ];
        return view('about', $data);
    }
}
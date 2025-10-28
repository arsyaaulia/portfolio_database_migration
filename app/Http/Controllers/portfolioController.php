<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home - Portfolio Saya',
            'skills' => ['Laravel', 'PHP', 'JavaScript', 'Vue.js', 'MySQL', 'Tailwind CSS'],
            'projects' => [
                [
                    'name' => 'E-Commerce Website',
                    'description' => 'Website e-commerce dengan fitur lengkap',
                    'tech' => ['Laravel', 'Vue.js', 'MySQL']
                ],
                [
                    'name' => 'Sistem Manajemen',
                    'description' => 'Sistem manajemen untuk perusahaan',
                    'tech' => ['Laravel', 'Bootstrap', 'jQuery']
                ]
            ]
        ];
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang Saya',
            'about' => [
                'nama' => 'Arsya Aulia Amira',
                'profesi' => 'Full Stack Developer',
                'deskripsi' => "Hi! I'm Arsya Aulia Amira, a 19-year-old informatics student currently learning and exploring fullstack development. I only began coding in college, so I'm still navigating through trials, errors, and plenty of learning moments. I'm passionate about creating web applications that are not only functional but also visually appealing. My goal is to continuously improve my skills and contribute to exciting projects in the tech world.",
                'experience' => [
                    ['tahun' => '2022-Sekarang', 'posisi' => 'Senior Developer', 'perusahaan' => 'Tech Company'],
                    ['tahun' => '2020-2022', 'posisi' => 'Web Developer', 'perusahaan' => 'Startup XYZ']
                ]
            ]
        ];
        return view('about', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog - Pemikiran & Tutorial',
            'posts' => [
                [
                    'title' => 'Belajar Laravel 10 dari Dasar',
                    'excerpt' => 'Tutorial lengkap belajar Laravel 10 untuk pemula...',
                    'date' => '15 Jan 2024',
                    'category' => 'Tutorial'
                ],
                [
                    'title' => 'Tips Clean Code di PHP',
                    'excerpt' => 'Bagaimana menulis kode PHP yang clean dan maintainable...',
                    'date' => '10 Jan 2024',
                    'category' => 'Tips'
                ]
            ]
        ];
        return view('blog', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Hubungi Saya',
            'contact_info' => [
                'email' => 'email@domain.com',
                'phone' => '+62 821-8961-5669',
                'location' => 'Makassar, Indonesia'
            ]
        ];
        return view('contact', $data);
    }
}
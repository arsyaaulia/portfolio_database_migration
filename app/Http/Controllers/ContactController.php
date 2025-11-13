<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Hubungi Saya',
            'contact_info' => [
                'email' => 'arsya@example.com',
                'phone' => '+62 812-3456-7890',
                'location' => 'Jakarta, Indonesia'
            ]
        ];
        return view('contact', $data);
    }
}
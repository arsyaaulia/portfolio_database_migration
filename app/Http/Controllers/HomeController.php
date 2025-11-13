<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home - Portfolio Saya',
            'skills' => Skill::all(),
            'projects' => Project::all(),
        ];
        return view('home', $data);
    }
}
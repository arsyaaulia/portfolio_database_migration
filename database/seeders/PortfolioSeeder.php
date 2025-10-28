<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\BlogPost;
use App\Models\Project;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        // Buat 8 skills
        Skill::factory()->count(8)->create();
        
        // Buat 5 experiences
        Experience::factory()->count(5)->create();
        
        // Buat 6 blog posts
        BlogPost::factory()->count(6)->create();
        
        // Buat 4 projects
        Project::factory()->count(4)->create();
    }
}
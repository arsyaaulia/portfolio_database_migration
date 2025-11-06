<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\BlogPost;
use App\Models\Project;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        // 1. Create Users
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ]);

        // 2. Create Skills
        Skill::factory()->count(8)->create();
        
        // 3. Create Experiences
        Experience::factory()->count(3)->create();
        
        // 4. Create Blog Posts dengan relationship ke User
        $blogPosts = BlogPost::factory()->count(6)->create([
            'user_id' => $user->id
        ]);
        
        // 5. Create Comments dengan relationship ke Blog Posts
        foreach ($blogPosts as $post) {
            Comment::factory()->count(3)->create([
                'blog_post_id' => $post->id
            ]);
        }
        
        // 6. Create Projects
        Project::factory()->count(4)->create();
    }
}
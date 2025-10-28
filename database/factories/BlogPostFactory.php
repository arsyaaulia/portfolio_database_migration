<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    public function definition()
    {
        $categories = ['Tutorial', 'Tips', 'Technology', 'Laravel', 'JavaScript', 'Vue.js'];
        
        return [
            'title' => $this->faker->sentence(6),
            'excerpt' => $this->faker->paragraph(2),
            'content' => $this->faker->paragraphs(5, true),
            'category' => $this->faker->randomElement($categories),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
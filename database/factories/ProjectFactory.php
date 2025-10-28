<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition()
    {
        $techStacks = [
            ['Laravel', 'Vue.js', 'MySQL'],
            ['React', 'Node.js', 'MongoDB'],
            ['Laravel', 'Bootstrap', 'jQuery'],
            ['Vue.js', 'Express.js', 'PostgreSQL']
        ];
        
        return [
            'name' => $this->faker->words(3, true) . ' Project',
            'description' => $this->faker->paragraph(3),
            'technologies' => json_encode($this->faker->randomElement($techStacks)),
        ];
    }
}
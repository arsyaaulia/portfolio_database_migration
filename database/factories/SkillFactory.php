<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    public function definition()
    {
        $skills = ['Canva', 'Adobe Illustrator', 'HTML & CSS', 'MySQL', 'Tailwind CSS', 'Bootstrap', 'Python', 'Node.js'];
        
        return [
            'name' => $this->faker->randomElement($skills),
            'icon' => $this->faker->randomElement(['fas fa-code', 'fas fa-database', 'fab fa-js', 'fab fa-vuejs']),
            'level' => $this->faker->numberBetween(3, 5),
        ];
    }
}
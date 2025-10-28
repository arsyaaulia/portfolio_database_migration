<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    public function definition()
    {
        $positions = ['Senior Developer', 'Web Developer', 'Full Stack Developer', 'Frontend Developer', 'Backend Developer'];
        $companies = ['Tech Company', 'Startup XYZ', 'Digital Agency', 'Software House', 'E-commerce Company'];
        
        return [
            'position' => $this->faker->randomElement($positions),
            'company' => $this->faker->randomElement($companies),
            'year' => $this->faker->randomElement(['2022-Sekarang', '2020-2022', '2018-2020', '2016-2018', '2016-2017']),
            'description' => $this->faker->sentence(10),
        ];
    }
}
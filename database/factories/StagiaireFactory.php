<?php

namespace Database\Factories;

use App\Models\Stagiaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class StagiaireFactory extends Factory
{
    protected $model = Stagiaire::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
        ];
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stagiaire;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);
        $subscriberRole = Role::create(['name' => 'Subscriber']);

        // Create 10 stagiaires using the factory
        $stagiaires = Stagiaire::factory()->count(10)->create();

        // Assign roles to each stagiaire
        foreach ($stagiaires as $stagiaire) {
            // Randomly assign 1 to 3 roles to each stagiaire
            $roles = Role::inRandomOrder()->take(rand(1, 3))->pluck('id')->toArray();
            $stagiaire->roles()->attach($roles);
        }
    }
}


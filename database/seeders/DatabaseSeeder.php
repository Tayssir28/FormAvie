<?php

namespace Database\Seeders;

use App\Models\commentaires_avis;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            clubSeeder::class,
            adminSeeder::class,
            avisSeeder::class,
            formateurSeeder::class,
            formationSeeder::class,
            participationSeeder::class,
            commentaires_avisSeeder::class,
            commentaires_formationsSeeder::class,
            



        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

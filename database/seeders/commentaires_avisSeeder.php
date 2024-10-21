<?php

namespace Database\Seeders;

use App\Models\commentaires_avis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentaires_avisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        commentaires_avis::factory(10)->create();

    }
}

<?php

namespace Database\Seeders;

use App\Models\commentaires_formations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentaires_formationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        commentaires_formations::factory(10)->create();

    }
}

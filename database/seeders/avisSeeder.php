<?php

namespace Database\Seeders;

use App\Models\avis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class avisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        avis::factory(10)->create();

    }
}

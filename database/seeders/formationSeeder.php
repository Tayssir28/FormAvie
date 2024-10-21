<?php

namespace Database\Seeders;

use App\Models\formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class formationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        formation::factory(10)->create();

    }
}

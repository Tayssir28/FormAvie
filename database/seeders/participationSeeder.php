<?php

namespace Database\Seeders;

use App\Models\participations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class participationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        participations::factory(10)->create();

    }
}

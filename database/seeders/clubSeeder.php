<?php

namespace Database\Seeders;

use App\Models\club;
use App\Models\clubs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        clubs::factory(10)->create();

    }
}

<?php

namespace Database\Seeders;

use App\Models\formateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class formateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        formateur::factory(10)->create();

    }
}

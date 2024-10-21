<?php

namespace Database\Factories;

use App\Models\Formateur;
use App\Models\Club;
use App\Models\clubs;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '123456789',
            'club' => clubs::factory()->create()->id,
        ];
    }
}
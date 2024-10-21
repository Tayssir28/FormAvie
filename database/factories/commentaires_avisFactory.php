<?php

namespace Database\Factories;

use App\Models\avis;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\commentaires_avis>
 */
class commentaires_avisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->text(),
            'date' => $this->faker->date(),
            'avie' => avis::get('id')->random(),
            'commenter' => User::get('id')->random(),
        ];
    }
}

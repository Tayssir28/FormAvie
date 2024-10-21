<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\formation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\commentaires_formations>
 */
class commentaires_formationsFactory extends Factory
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
            'formation' => formation::get('id')->random(),
            'commenter' => User::get('id')->random(),
        ];
    }
}

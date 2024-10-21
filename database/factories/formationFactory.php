<?php

namespace Database\Factories;

use App\Models\formateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\formation>
 */
class formationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'content' => $this->faker->text(),
            'date' => $this->faker->date(),
            'poster' => formateur::get('id')->random(),


        ];
    }
}

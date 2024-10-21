<?php

namespace Database\Factories;

use App\Models\formation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\participations>
 */

class participationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'formation' => formation::get('id')->random(),
            'participant' => User::get('id')->random(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CatFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'dob' => date(),
            'owner_name' => fake()->name(),
        ];
    }
}

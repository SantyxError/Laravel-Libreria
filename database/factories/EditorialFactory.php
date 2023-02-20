<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EditorialFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class LibroFactory extends Factory
{

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(1, 5),
            'anyo' => $this->faker->numberBetween(1960, 2021),
            "escritor_id" => Escritor::all()->random()->id,
            "editorial_id" => Editorial::all()->random()->id,
        ];
    }
}

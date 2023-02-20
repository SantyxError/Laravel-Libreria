<?php

namespace Database\Factories;

use App\Models\Escritor;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscritorFactory extends Factory
{

    protected $model = Escritor::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
        ];
    }
}

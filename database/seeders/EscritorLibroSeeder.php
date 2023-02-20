<?php

namespace Database\Seeders;

use App\Models\Escritor;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscritorLibroSeeder extends Seeder
{

    public function run(): void
    {
        $libros = Libro::all();

        // Populate the pivot table
        Escritor::all()->each(function ($escritor) use ($libros) {
            $escritor->libro()->attach(
                $libros->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}

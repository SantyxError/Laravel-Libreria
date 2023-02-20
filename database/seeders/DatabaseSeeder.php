<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(LibroSeeder::class);
        $this->call(EscritorSeeder::class);
        $this->call(EditorialSeeder::class);
        $this->call(EscritorLibroSeeder::class);
        $this->call(UserSeeder::class);
    }
}

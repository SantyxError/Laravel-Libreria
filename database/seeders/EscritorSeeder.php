<?php

namespace Database\Seeders;

use App\Models\Escritor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscritorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Escritor::factory(6)->create();
    }
}

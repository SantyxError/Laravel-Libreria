<?php

namespace Database\Seeders;

use App\Models\Editorial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditorialSeeder extends Seeder
{

    public function run(): void
    {
        Editorial::factory(6)->create();
    }
}

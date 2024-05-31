<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NonPlantilla;

class NonPlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NonPlantilla::factory(10)->create();
    }
}

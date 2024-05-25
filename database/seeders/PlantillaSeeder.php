<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plantilla;

class PlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plantilla::create([
            'office_id' => 1, 
            'plantilla_item_no' => 'XX-5',
            'position_id' => 1, 
            'employment_status' => 1,
            'is_active' => true,
        ]);
    }
}

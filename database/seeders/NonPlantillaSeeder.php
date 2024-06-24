<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NonPlantilla;

class NonPlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        NonPlantilla::create([
            'position_title' => 'dsadw',
            'daily_rate' => 150.00,
            'office_id' => 2,
            'position_id' => 2,
            'employment_status' => 'Casual',
            'is_active' => true,
        ]);
        NonPlantilla::create([
            'position_title' => 'dsadw',
            'daily_rate' => 150.00,
            'office_id' => 2,
            'position_id' => 1,
            'employment_status' => 'Casual',
            'is_active' => true,
        ]);
        NonPlantilla::create([
            'position_title' => 'dsadw',
            'daily_rate' => 150.00,
            'office_id' => 3,
            'position_id' => 4,
            'employment_status' => 'Job Order',
            'is_active' => true,
        ]);
        NonPlantilla::create([
            'position_title' => 'dsadw',
            'daily_rate' => 150.00,
            'office_id' => 2,
            'position_id' => 2,
            'employment_status' => 'Job Order',
            'is_active' => true,
        ]);
        NonPlantilla::create([
            'position_title' => 'dsadw',
            'daily_rate' => 150.00,
            'office_id' => 2,
            'position_id' => 5,
            'employment_status' => 'Casual',
            'is_active' => true,
        ]);

    }
};
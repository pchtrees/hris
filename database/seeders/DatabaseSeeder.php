<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Office;
use App\Models\NonPlantilla;
use App\Models\Plantilla;
use App\Models\LeaveType;
use App\Models\LeaveApplication;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        // Create Offices and NonPlantilla using factories
        Office::factory(10)->create();
        NonPlantilla::factory(10)->create();

        // Create Employees using factories
        Employee::factory(10)->create();
        
        // Create Plantilla using factory
        Plantilla::factory(10)->create();

        // Create Leave Types using factory
        LeaveType::factory(10)->create();

        // Create Leave Applications using factory
        LeaveApplication::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);

    }

}

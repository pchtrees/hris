<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        // Call UserSeeder to seed users
        $this->call(UserSeeder::class);

        // Call AdminSeeder to seed admin users
        $this->call(AdminSeeder::class);
        
        // Call the OfficeSeeder to seed the offices
        $this->call(OfficeSeeder::class);
        
        // Call EmployeeSeeder to seed employees
        $this->call(EmployeeSeeder::class);

        // Call PositionSeeder to seed positions
        $this->call(PositionSeeder::class);

        // Call SalaryGradeSeeder to seed salary grades
        $this->call(SalaryGradeSeeder::class);

        // Call AppointmentSeeder to seed appointments
        $this->call(AppointmentSeeder::class);

        // Call PlantillaSeeder to seed plantillas
        $this->call(PlantillaSeeder::class);

        // Call NonPlantillaSeeder to seed non-plantillas
        $this->call(NonPlantillaSeeder::class);

        //Call AttendanceSeeder to seed attendance
        $this->call(AttendanceSeeder::class);

    }
}

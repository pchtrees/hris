<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plantilla;
use App\Models\Employee;
use App\Models\SalaryGrade;

class PlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = Employee::all();
        $salaryGrades = SalaryGrade::all();

            Plantilla::create([
                'employee_id' => 1,
                'office_id' => 1,
                'plantilla_item_no' => 'XX',
                'position_id' => 1,
                'salary_grade_id' => 3,
                'date_of_original_appointment' => now(),
                'date_of_last_promotion' => now(),
                'is_active' => true,
            ]);
        }
}

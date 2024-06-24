<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LeaveApplication;

class LeaveApplicationSeeder extends Seeder
{
    public function run()
    {
        LeaveApplication::create([
            'user_id' => 1,
            'leave_types_id' => 1, 
            'details_of_leave' => 'Taking leave for personal reasons',
            'num_of_working_days' => 5,
            'commutation' => 'No',
            'is_recommended' => true,
            'approved_for' => 'John Doe', 
            'office_id' => 1, 
        ]);

        LeaveApplication::create([
            'user_id' => 2, 
            'leave_types_id' => 2,
            'details_of_leave' => 'Medical leave due to illness',
            'num_of_working_days' => 3,
            'commutation' => 'Yes',
            'is_recommended' => false,
            'disapproved_due_to' => 'Incomplete documentation',
            'recommended_by' => 3, 
            'not_recommended_reason' => 'Insufficient leave balance',
            'office_id' => 1, 
        ]);

        
    }
}

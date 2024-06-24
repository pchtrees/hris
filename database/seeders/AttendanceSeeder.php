<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attendances = [
            [
                'user_id' => 1,
                'am_time_in' => '08:00',
                'am_time_out' => '12:00',
                'pm_time_in' => '13:00',
                'pm_time_out' => '17:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'am_time_in' => '09:00',
                'am_time_out' => '12:29',
                'pm_time_in' => '13:30',
                'pm_time_out' => '17:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more predefined attendances here
        ];

        foreach ($attendances as $attendance) {
            Attendance::create($attendance);
        }
    }
}

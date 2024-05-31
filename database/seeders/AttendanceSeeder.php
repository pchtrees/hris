<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;
use App\Models\User;

class AttendanceSeeder extends Seeder
{
    public function run()
    {
        // Retrieve all users or specific users based on your requirement
        $users = User::all();

        // Loop through each user and create sample attendance records
        foreach ($users as $user) {
            Attendance::create([
                'user_id' => $user->id,
                'am_time_in' => now()->subHours(rand(1, 5))->format('H:i:s'),
                'am_time_out' => now()->addHours(rand(1, 5))->format('H:i:s'),
                'pm_time_in' => now()->subHours(rand(1, 5))->format('H:i:s'),
                'pm_time_out' => now()->addHours(rand(1, 5))->format('H:i:s'),
            ]);
        }
    }
}

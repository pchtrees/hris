<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LeaveType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        LeaveType::create([
            'leave_name' => 'Sick Leave',
            'desc' => 'Leave taken due to illness or medical reasons',
        ]);

        LeaveType::create([
            'leave_name' => 'Vacation Leave',
            'desc' => 'Leave taken for rest and relaxation purposes',
        ]);
    }
}


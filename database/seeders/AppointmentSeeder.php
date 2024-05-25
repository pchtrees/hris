<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            'plantillas_id' => 1,
            'user_id' => 1, 
            'appointment_date' => '2024-05-01', 
            'is_active' => true,
            'type' => 'Regular', 
        ]);
    }
}

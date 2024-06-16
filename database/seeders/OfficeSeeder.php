<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Office::create([
            'name' => 'Human Resources',
            'is_active' => true,
        ]);

        Office::create([
            'name' => 'Admin',
            'is_active' => true,
        ]);

        Office::create([
            'name' => 'ICT',
            'is_active' => true,
        ]);
    }
}

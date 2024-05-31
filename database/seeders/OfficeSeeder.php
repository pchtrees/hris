<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Finance',
            'is_active' => true,
        ]);

        Office::create([
            'name' => 'IT Department',
            'is_active' => true,
        ]);
    }
}

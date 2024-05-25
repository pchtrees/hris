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
            'name' => 'Office A', 
            'is_active' => true
        ]);
        Office::create([
            'name' => 'Office B',
            'is_active' => true]);
    }
}

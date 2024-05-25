<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Office;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        Office::factory(10)->create();
        Employee::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
    }
    
}

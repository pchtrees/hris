<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create([
            'title' => 'SR ADMIN. ASST. I', 
            'is_active' => true]);
        Position::create([
            'title' => 'SR ADMIN. ASST. II', 
            'is_active' => true]);
        Position::create([
            'title' => 'SR ADMIN. ASST. III', 
            'is_active' => true]);
        Position::create([
            'title' => 'SR ADMIN. ASST. III', 
            'is_active' => true]);
        Position::create([
            'title' => 'dwadwa', 
            'is_active' => true]);
        Position::create([
            'title' => 'fwafga', 
            'is_active' => true]);
        Position::create([
            'title' => 'yfwhaiuas', 
            'is_active' => true]);
    }
}

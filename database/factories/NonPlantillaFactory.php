<?php

namespace Database\Factories;

use App\Models\NonPlantilla;
use App\Models\Office;
use App\Models\User;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class NonPlantillaFactory extends Factory
{
    protected $model = NonPlantilla::class;

    public function definition()
    {
        return [
            'position_title' => $this->faker->jobTitle,
            'daily_rate' => $this->faker->randomFloat(2, 100, 200),
            'office_id' => \App\Models\Office::factory(),
            'user_id' => \App\Models\User::factory(),
            'position_id' => \App\Models\Position::factory(), 
            'employment_status' => $this->faker->randomElement(['Casual', 'Contractual', 'Coterminous']),
            'is_active' => $this->faker->boolean,
        ];
    } 
}


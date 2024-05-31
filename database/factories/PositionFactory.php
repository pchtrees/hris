<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    protected $model = Position::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'salary_grade' => $this->faker->numberBetween(1, 33), 
            'is_active' => $this->faker->boolean,
        ];
    }
}

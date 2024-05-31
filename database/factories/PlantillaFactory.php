<?php

namespace Database\Factories;

use App\Models\Plantilla;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlantillaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plantilla::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'office_id' => \App\Models\Office::factory()->create()->id,
            'plantilla_item_no' => $this->faker->numerify('####'),
            'position_id' => \App\Models\Position::factory()->create()->id,
            'salary_grade' => $this->faker->numberBetween(1, 20),
            'anual_salary' => $this->faker->randomFloat(2, 10000, 50000),
            'step' => $this->faker->numberBetween(1, 10),
            'date_of_original_appointment' => $this->faker->date(),
            'date_of_last_promotion' => $this->faker->date(),
            'is_active' => $this->faker->boolean(90), 
        ];
    }
}

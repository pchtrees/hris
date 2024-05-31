<?php

namespace Database\Factories;

use App\Models\LeaveApplication;
use App\Models\User;
use App\Models\LeaveType;
use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LeaveApplication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'leave_types_id' => LeaveType::factory()->create()->id,
            'details_of_leave' => $this->faker->text(255),
            'num_of_working_days' => $this->faker->numberBetween(1, 30),
            'commutation' => $this->faker->randomElement(['Yes', 'No']),
            'is_recommended' => $this->faker->boolean,
            'approved_for' => $this->faker->text(255),
            'disapproved_due_to' => $this->faker->text(255),
            'recommended_by' => User::inRandomOrder()->first()->id, // Adjust according to your requirements
            'not_recommended_reason' => $this->faker->text(25),
            'recommended_reason' => $this->faker->text(25),
            'office_id' => Office::factory(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}

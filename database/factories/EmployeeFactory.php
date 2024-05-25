<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => $this->faker->firstName,
            'mname' => $this->faker->optional()->firstName,
            'lname' => $this->faker->lastName,
            'agency_employee_no' => $this->faker->unique()->ean8,
            'extension' => $this->faker->optional()->suffix,
            'dob' => $this->faker->date,
            'place_of_birth' => $this->faker->city,
            'sex' => $this->faker->randomElement([0, 1]), // Assuming 0 for male, 1 for female
            'civil_status' => $this->faker->randomElement([0, 1, 2, 3, 4]), // Adjust as per your definition
            'height' => $this->faker->numberBetween(150, 200), // Assuming height in cm
            'weight' => $this->faker->numberBetween(50, 100), // Assuming weight in kg
            'blood_type' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            'gsis_id_no' => $this->faker->unique()->ean8,
            'pag_ibig_id_no' => $this->faker->unique()->ean8,
            'philhealth_id_no' => $this->faker->unique()->ean8,
            'sss_no' => $this->faker->unique()->ean8,
            'tin_no' => $this->faker->unique()->ean8,
            'citizenship' => $this->faker->country,
            'dual_citizenship' => $this->faker->boolean,
            'citizenship_country' => $this->faker->optional()->country,
            'mob_no' => $this->faker->phoneNumber,
            'residential_zip_code' => $this->faker->postcode,
            'residential_house_number' => $this->faker->buildingNumber,
            'residential_street' => $this->faker->streetName,
            'residential_subdivision' => $this->faker->optional()->streetSuffix,
            'residential_barangay' => $this->faker->optional()->word,
            'residential_city_municipality' => $this->faker->city,
            'residential_province' => $this->faker->state,
            'permanent_zip_code' => $this->faker->postcode,
            'permanent_house_number' => $this->faker->buildingNumber,
            'permanent_street' => $this->faker->streetName,
            'permanent_subdivision' => $this->faker->optional()->streetSuffix,
            'permanent_barangay' => $this->faker->optional()->word,
            'permanent_city_municipality' => $this->faker->city,
            'permanent_province' => $this->faker->state,
            'office_id' => \App\Models\Office::factory(),
            'tel_no' => $this->faker->phoneNumber,
        ];
    }
}

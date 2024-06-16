<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'fname' => 'Kim',
            'mname' => 'Ferrer',
            'lname' => 'Manoguid',
            'agency_employee_no' => '12345',
            'extension' => null,
            'dob' => '1990-05-15',
            'place_of_birth' => 'Bayambang',
            'sex' => 1, // assuming 1 = male, 2 = female
            'civil_status' => 1, // assuming 1 = single, 2 = married
            'height' => 175.5,
            'weight' => 70.2,
            'blood_type' => 'O+',
            'gsis_id_no' => 'GSIS123',
            'pag_ibig_id_no' => 'PAGIBIG123',
            'philhealth_id_no' => 'PHILHEALTH123',
            'sss_no' => 'SSS123',
            'tin_no' => 'TIN123',
            'citizenship' => 'Filipino',
            'dual_citizenship' => 0, // Assuming 0 for no, 1 for yes
            'citizenship_country' => 'dea',
            'mob_no' => '09123456789',
            'residential_zip_code' => '12345',
            'residential_house_number' => '123',
            'residential_street' => 'Main Street',
            'residential_subdivision' => 'Subdivision',
            'residential_barangay' => 'Barangay',
            'residential_city_municipality' => 'City',
            'residential_province' => 'Province',
            'permanent_zip_code' => '54321',
            'permanent_house_number' => '456',
            'permanent_street' => 'Second Avenue',
            'permanent_subdivision' => 'Residential Area',
            'permanent_barangay' => 'Barangay 2',
            'permanent_city_municipality' => 'Town',
            'permanent_province' => 'State',
            'office_id' => 2, 
            'tel_no' => '021234567',
            'is_active' => true,
        ]);
        Employee::create([
            'fname' => 'Polin',
            'mname' => 'Ferrer',
            'lname' => 'Cap',
            'agency_employee_no' => '12345',
            'extension' => null,
            'dob' => '1990-05-15',
            'place_of_birth' => 'Bayambang',
            'sex' => 2, // assuming 1 = male, 2 = female
            'civil_status' => 1, // assuming 1 = single, 2 = married
            'height' => 175.5,
            'weight' => 70.2,
            'blood_type' => 'O+',
            'gsis_id_no' => 'GSIS123',
            'pag_ibig_id_no' => 'PAGIBIG123',
            'philhealth_id_no' => 'PHILHEALTH123',
            'sss_no' => 'SSS123',
            'tin_no' => 'TIN123',
            'citizenship' => 'Filipino',
            'dual_citizenship' => 0, // Assuming 0 for no, 1 for yes
            'citizenship_country' => 'dea',
            'mob_no' => '09123456789',
            'residential_zip_code' => '12345',
            'residential_house_number' => '123',
            'residential_street' => 'Main Street',
            'residential_subdivision' => 'Subdivision',
            'residential_barangay' => 'Barangay',
            'residential_city_municipality' => 'City',
            'residential_province' => 'Province',
            'permanent_zip_code' => '54321',
            'permanent_house_number' => '456',
            'permanent_street' => 'Second Avenue',
            'permanent_subdivision' => 'Residential Area',
            'permanent_barangay' => 'Barangay 2',
            'permanent_city_municipality' => 'Town',
            'permanent_province' => 'State',
            'office_id' => 2, 
            'tel_no' => '021234567',
            'is_active' => true,
        ]);
        Employee::create([
            'fname' => 'Lloyd',
            'mname' => 'Ferrer',
            'lname' => 'Dunno',
            'agency_employee_no' => '12345',
            'extension' => null,
            'dob' => '1990-05-15',
            'place_of_birth' => 'Bayambang',
            'sex' => 1, // assuming 1 = male, 2 = female
            'civil_status' => 1, // assuming 1 = single, 2 = married
            'height' => 175.5,
            'weight' => 70.2,
            'blood_type' => 'O+',
            'gsis_id_no' => 'GSIS123',
            'pag_ibig_id_no' => 'PAGIBIG123',
            'philhealth_id_no' => 'PHILHEALTH123',
            'sss_no' => 'SSS123',
            'tin_no' => 'TIN123',
            'citizenship' => 'Filipino',
            'dual_citizenship' => 0, // Assuming 0 for no, 1 for yes
            'citizenship_country' => 'dea',
            'mob_no' => '09123456789',
            'residential_zip_code' => '12345',
            'residential_house_number' => '123',
            'residential_street' => 'Main Street',
            'residential_subdivision' => 'Subdivision',
            'residential_barangay' => 'Barangay',
            'residential_city_municipality' => 'City',
            'residential_province' => 'Province',
            'permanent_zip_code' => '54321',
            'permanent_house_number' => '456',
            'permanent_street' => 'Second Avenue',
            'permanent_subdivision' => 'Residential Area',
            'permanent_barangay' => 'Barangay 2',
            'permanent_city_municipality' => 'Town',
            'permanent_province' => 'State',
            'office_id' => 2, 
            'tel_no' => '021234567',
            'is_active' => true,
        ]);
        Employee::create([
            'fname' => 'Gdwadgw',
            'mname' => 'Ferrer',
            'lname' => 'Dunno',
            'agency_employee_no' => '12345',
            'extension' => null,
            'dob' => '1990-05-15',
            'place_of_birth' => 'Bayambang',
            'sex' => 1, // assuming 1 = male, 2 = female
            'civil_status' => 1, // assuming 1 = single, 2 = married
            'height' => 175.5,
            'weight' => 70.2,
            'blood_type' => 'O+',
            'gsis_id_no' => 'GSIS123',
            'pag_ibig_id_no' => 'PAGIBIG123',
            'philhealth_id_no' => 'PHILHEALTH123',
            'sss_no' => 'SSS123',
            'tin_no' => 'TIN123',
            'citizenship' => 'Filipino',
            'dual_citizenship' => 0, 
            'citizenship_country' => 'dea',
            'mob_no' => '09123456789',
            'residential_zip_code' => '12345',
            'residential_house_number' => '123',
            'residential_street' => 'Main Street',
            'residential_subdivision' => 'Subdivision',
            'residential_barangay' => 'Barangay',
            'residential_city_municipality' => 'City',
            'residential_province' => 'Province',
            'permanent_zip_code' => '54321',
            'permanent_house_number' => '456',
            'permanent_street' => 'Second Avenue',
            'permanent_subdivision' => 'Residential Area',
            'permanent_barangay' => 'Barangay 2',
            'permanent_city_municipality' => 'Town',
            'permanent_province' => 'State',
            'office_id' => 2, 
            'tel_no' => '021234567',
            'is_active' => false,
        ]);
    }
}

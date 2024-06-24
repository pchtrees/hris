<?php

namespace App\Http\Controllers\personnel;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Employee;
use App\Models\Office;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::with('office')->get();
        $employees = Employee::all();
        $offices = Office::all(); 
        $totalEmployees = $employees->count();

        $officeNames = Office::pluck('name', 'id')->all();

    
        return Inertia::render('Admin/Employees/Index', [
            'employees' => $employees,
            'totalEmployees' => $totalEmployees,
            'officeNames' => $officeNames, 
        ]);
    }
    public function create(){
        $offices = Office::all()->pluck('name', 'id');

        return Inertia::render('Admin/Employees/Create', [
            'officeNames' => $offices,
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'extension' => 'nullable|string|max:10',
            'dob' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'sex' => 'required|in:1,2', // 1 = male, 2 = female
            'civil_status' => 'required|in:1,2,3,4,5', // 1 = single, 2 = married, 3 = widowed, 4 = separated, 5 = divorced
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'blood_type' => 'required|in:1,2,3,4', // 1 = A, 2 = B, 3 = AB, 4 = O
            'gsis_id_no' => 'required|string|max:255',
            'pag_ibig_id_no' => 'required|string|max:255',
            'philhealth_id_no' => 'required|string|max:255',
            'sss_no' => 'required|string|max:255',
            'tin_no' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'dual_citizenship' => 'required|boolean',
            'citizenship_country' => 'nullable|required_if:dual_citizenship,true|string|max:255',
            'mob_no' => 'required|string|max:15',
            'residential_add' => 'required|string|max:255',
            'residential_zip_code' => 'required|string|max:10',
            'residential_house_number' => 'required|string|max:50',
            'residential_street' => 'required|string|max:255',
            'residential_subdivision' => 'nullable|string|max:255',
            'residential_barangay' => 'required|string|max:255',
            'residential_city_municipality' => 'required|string|max:255',
            'residential_province' => 'required|string|max:255',
            'permanent_add' => 'required|string|max:255',
            'permanent_zip_code' => 'required|string|max:10',
            'permanent_house_number' => 'required|string|max:50',
            'permanent_street' => 'required|string|max:255',
            'permanent_subdivision' => 'nullable|string|max:255',
            'permanent_barangay' => 'required|string|max:255',
            'permanent_city_municipality' => 'required|string|max:255',
            'permanent_province' => 'required|string|max:255',
            'agency_employee_no' => 'required|string|max:255',
            'office_id' => 'required|exists:offices,id',
            'tel_no' => 'nullable|string|max:15',
            'is_active' => 'required|boolean'
        ]);

        Employee::create($request->all());

        return redirect()->route('admin.employees.index')->with('success', 'Employee created successfully.');
    }
    public function update(Request $request, $id){
        $employee = Auth::user()->employee;

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'extension' => 'nullable|string|max:10',
            'dob' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'sex' => 'required|in:1,2', // 1 = male, 2 = female
            'civil_status' => 'required|in:1,2,3,4,5', // 1 = single, 2 = married, 3 = widowed, 4 = separated, 5 = divorced
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'blood_type' => 'required|in:1,2,3,4', // 1 = A, 2 = B, 3 = AB, 4 = O
            'gsis_id_no' => 'required|string|max:255',
            'pag_ibig_id_no' => 'required|string|max:255',
            'philhealth_id_no' => 'required|string|max:255',
            'sss_no' => 'required|string|max:255',
            'tin_no' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'dual_citizenship' => 'required|boolean',
            'citizenship_country' => 'nullable|required_if:dual_citizenship,true|string|max:255',
            'mob_no' => 'required|string|max:15',
            'residential_add' => 'required|string|max:255',
            'residential_zip_code' => 'required|string|max:10',
            'residential_house_number' => 'required|string|max:50',
            'residential_street' => 'required|string|max:255',
            'residential_subdivision' => 'nullable|string|max:255',
            'residential_barangay' => 'required|string|max:255',
            'residential_city_municipality' => 'required|string|max:255',
            'residential_province' => 'required|string|max:255',
            'permanent_add' => 'required|string|max:255',
            'permanent_zip_code' => 'required|string|max:10',
            'permanent_house_number' => 'required|string|max:50',
            'permanent_street' => 'required|string|max:255',
            'permanent_subdivision' => 'nullable|string|max:255',
            'permanent_barangay' => 'required|string|max:255',
            'permanent_city_municipality' => 'required|string|max:255',
            'permanent_province' => 'required|string|max:255',
            'agency_employee_no' => 'required|string|max:255',
            'office_id' => 'required|exists:offices,id',
            'tel_no' => 'nullable|string|max:15', 
            'is_active' => 'required|boolean'
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('admin.employees.index')->with('success', 'Employee updated successfully.');
    }
    public function show($id){
        $employee = Employee::findOrFail($id);
        return Inertia::render('Employees/Show', [
            'employee' => $employee,
        ]);
    }
    public function edit($id){
        $employee = Employee::findOrFail($id);
        $offices = Office::all()->pluck('name', 'id');

        return Inertia::render('Admin/Employees/Edit', [
            'employee' => $employee,
            'officeNames' => $offices,
        ]);
    }
    public function destroy($id){
        $employee = Employee::findOrFail($id);
        $employee->delete();
    
        return redirect()->route('admin.employees.index')->with('success', 'Employee deleted successfully.');
    }
}





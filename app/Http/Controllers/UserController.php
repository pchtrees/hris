<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Employee;


class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->usertype == 'user') {
                return Inertia::render('User/Home');
            } else {
                return redirect()->route('admin.app');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function pds()
    {
        $employee = auth()->user()->employee; 
        return Inertia::render('User/Employee/Pds', [
            'employee' => $employee
        ]);
    }

    public function edit()
    {
        $employee = auth()->user()->employee; 
        return Inertia::render('User/Employee/Edit', [
            'employee' => $employee
        ]);
    }


    public function update(Request $request)
    {
        $employee = Auth::user()->employee; 

        // Validate and update employee data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'extension' => 'nullable',
            'dob' => 'required|date',
            'place_of_birth' => 'required',
            'sex' => 'required|in:1,2', // 1 = male, 2 = female
            'civil_status' => 'required|in:1,2,3,4,5', // 1 = single, 2 = married, 3 = widowed, 4 = separated, 5 = divorced
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'blood_type' => 'required|in:1,2,3,4', // 1 = A, 2 = B, 3 = AB, 4 = O
            'gsis_id_no' => 'required',
            'pag_ibig_id_no' => 'required',
            'philhealth_id_no' => 'required',
            'sss_no' => 'required',
            'tin_no' => 'required',
            'citizenship' => 'required',
            'dual_citizenship' => 'required|boolean',
            'citizenship_country' => 'nullable|required_if:dual_citizenship,1',
            'mob_no' => 'required',
            'residential_add' => 'required',
            'residential_zip_code' => 'required',
            'residential_house_number' => 'required',
            'residential_street' => 'required',
            'residential_subdivision' => 'nullable',
            'residential_barangay' => 'required',
            'residential_city_municipality' => 'required',
            'residential_province' => 'required',
            'permanent_add' => 'required',
            'permanent_zip_code' => 'required',
            'agency_employee_no' => 'required',
            'permanent_house_number' => 'required',
            'permanent_street' => 'required',
            'permanent_subdivision' => 'nullable',
            'permanent_barangay' => 'required',
            'permanent_city_municipality' => 'required',
            'permanent_province' => 'required',
            'office_id' => 'required|exists:offices,id',
            'tel_no' => 'nullable',
        ]);

        $employee->update($validatedData);

        return redirect()->route('user.employee.pds')->with('success', 'Employee information updated successfully.');
    }

    public function leaveapplication()
    {
        return Inertia::render('User/Leave/LeaveApplication');
    }
    
    public function privilegesleaves()
    {
        return Inertia::render('User/Leave/PrivilegesLeaves');
    }
    
    public function leaveIndexCard()
    {
        return Inertia::render('User/Leave/LeaveIndexCard');
    }
    
    public function payslip()
    {
        return Inertia::render('User/Payslip');
    }
    
    public function attendance()
    {
        return Inertia::render('User/Attendance');
    }
    
    public function dtr()
    {
        return Inertia::render('User/Dtr');
    }
}

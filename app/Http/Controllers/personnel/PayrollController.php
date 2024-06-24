<?php
namespace App\Http\Controllers\personnel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Deduction;
use App\Models\Attendance;

class PayrollController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return Inertia::render('Admin/Payroll/Dtr', [
            'attendances' => $attendances,
        ]);
    }
    public function inputDeductibles(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'salary_rata' => 'required|numeric',
            'pera_comm' => 'required|numeric',
            'gov_share_hdmf' => 'required|numeric',
            'personal_share_hdmf' => 'required|numeric',
            'deduct_loans_with_tax_lbp' => 'required|numeric',
            'deduct_loans_with_ibig_loan_housing' => 'required|numeric',
            'deduct_loans_uoli_dbp' => 'required|numeric',
            'deduct_loans_gfal_ibig_cal' => 'required|numeric',
            'deduct_loans_producer_mp2' => 'required|numeric',
            'earned_deduct' => 'required|numeric',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Process the validated data
        // For example, save the data to the deductions table
        Deduction::create($validator->validated());
    
        return redirect()->back()->with('success', 'Deductibles input successfully.');
    }

}
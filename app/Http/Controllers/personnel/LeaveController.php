<?php
namespace App\Http\Controllers\personnel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\LeaveCredit;
class LeaveController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Leave/Credits');

    }
/*
    public function updateCredits(Request $request)
    {
        // your logic to update leave credits based on $request data
        $user = auth()->user();
        $user->update(['leave_credits' => $request->input('leave_credits')]);

        return redirect()->back()->with('success', 'Leave credits updated successfully.');
    }

    public function updateLeaveData(Request $request)
    { 
        // Example: Update leave data based on the request

        return response()->json(['message' => 'Leave data updated successfully.']);
    }

    public function viewLeaveIndexCard()
    {
        // to retrieve and display leave index card data
        $leaveIndexCard = auth()->user()->leaveIndexCard; 
        // example: Retrieve leave index card data

        return Inertia::render('Leave/IndexCard', [
            'leaveIndexCard' => $leaveIndexCard,
        ]);
    }

    public function automaticDeduction(Request $request)
    {

    }

    public function automaticAddition(Request $request)
    {
        // example: Add earned leave credits

        return response()->json(['message' => 'Earned leave credits added successfully.']);
    }

    public function mandatoryLeaveReminder()
    {

        return response()->json(['message' => 'Mandatory leave reminder sent successfully.']);
    } */

}

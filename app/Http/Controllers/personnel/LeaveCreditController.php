<?php
namespace App\Http\Controllers\personnel;

use App\Http\Controllers\Controller;
use App\Models\LeaveCredit;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LeaveCreditController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->input('period', date('Y-m')); // Default to current month

        $leaveData = LeaveCredit::where('period', $period)
            ->get(['particulars', 'earned', 'abs_wp', 'bal', 'abs_wop']);

        return Inertia::render('LeaveCredit/Index', [
            'leaveData' => $leaveData,
            'period' => $period,
        ]);
    }
}

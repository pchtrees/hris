<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\personnel\EmployeeController;
use App\Http\Controllers\personnel\OfficeController;
use App\Http\Controllers\personnel\PositionController;
use App\Http\Controllers\personnel\PlantillaController;
use App\Http\Controllers\personnel\LeaveController;
use App\Http\Controllers\personnel\PayrollController;
use App\Https\Controllers\personnel\SalaryGradeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Redirect to login route on root access
Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

// Routes protected by authentication
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // User routes
    Route::prefix('user')->name('user.')->group(function () {
        // User home and employee routes
        Route::get('/', [UserController::class, 'index'])->name('home');
        Route::get('employee', [UserController::class, 'pds'])->name('employee.index');
        Route::get('employee/edit/{id}', [UserController::class, 'edit'])->name('employee.edit');
        Route::put('employee/{id}', [UserController::class, 'update'])->name('employee.update');

        // User leave routes
        Route::prefix('leave')->name('leave.')->group(function () {
            Route::get('index', [UserController::class, 'leaveIndex'])->name('index');
        });

        // User payslip routes
        Route::prefix('payslip')->name('payslip.')->group(function () {
            Route::get('index', [UserController::class, 'payslipIndex'])->name('index');
        });
    });

    // Admin routes
    Route::prefix('admin')->name('admin.')->middleware('auth:sanctum')->group(function () {
        Route::get('app', [AdminController::class, 'index'])->name('app');
        
        // Admin dashboard routes
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('index', [DashboardController::class, 'index'])->name('index');
        });
        // Admin chart data route
        Route::get('chart-data', [DashboardController::class, 'getChartData'])->name('chartData');

        // Admin employee management routes
        Route::prefix('employees')->name('employees.')->group(function () {
            Route::get('index', [EmployeeController::class, 'index'])->name('index');
            Route::get('create', [EmployeeController::class, 'create'])->name('create');
            Route::get('{id}', [EmployeeController::class, 'show'])->name('show');
            Route::post('store', [EmployeeController::class, 'store'])->name('store');
            Route::get('edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [EmployeeController::class, 'update'])->name('update');
            Route::delete('destroy/{id}', [EmployeeController::class, 'destroy'])->name('destroy');
        });

        // Admin office management routes
        Route::prefix('office')->name('office.')->group(function () {
            Route::get('index', [OfficeController::class, 'index'])->name('index');
            Route::get('create', [OfficeController::class, 'create'])->name('create');
            Route::post('store', [OfficeController::class, 'store'])->name('store');
            Route::get('edit/{id}', [OfficeController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [OfficeController::class, 'update'])->name('update');
        });

        // Admin position management routes
        Route::prefix('position')->name('position.')->group(function () {
            Route::get('index', [PositionController::class, 'index'])->name('index');
            Route::get('create', [PositionController::class, 'create'])->name('create');
            Route::post('store', [PositionController::class, 'store'])->name('store');
        });

        // Admin plantilla management routes
        Route::prefix('plantilla')->name('plantilla.')->group(function () {
            Route::get('index', [PlantillaController::class, 'index'])->name('index');
            Route::get('create', [PlantillaController::class, 'create'])->name('create');
            Route::post('store', [PlantillaController::class, 'store'])->name('store');
            Route::get('edit/{id}', [PlantillaController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [PlantillaController::class, 'update'])->name('update');
            Route::get('assign', [PlantillaController::class, 'assign'])->name('assign');
            Route::post('assignPersonnel', [PlantillaController::class, 'assignPersonnel'])->name('assignPersonnel');
        });

        // Admin leave management routes
        Route::prefix('leave')->name('leave.')->group(function () {
            Route::get('credits', [LeaveController::class, 'index'])->name('credits');
            Route::post('update-credits', [LeaveController::class, 'updateCredits'])->name('update_credits');
            Route::get('tardiness-report', [LeaveController::class, 'generateTardinessReport'])->name('tardiness_report');
            Route::get('leave-index-card', [LeaveController::class, 'viewLeaveIndexCard'])->name('leave_index_card');
            Route::post('automatic-deduction', [LeaveController::class, 'automaticDeduction'])->name('automatic_deduction');
            Route::post('automatic-addition', [LeaveController::class, 'automaticAddition'])->name('automatic_addition');
            Route::get('mandatory-leave-reminder', [LeaveController::class, 'mandatoryLeaveReminder'])->name('mandatory_leave_reminder');
        });

        // Admin payroll management routes
        Route::prefix('payroll')->name('payroll.')->group(function () {
            Route::get('dtr', [PayrollController::class, 'index'])->name('dtr');
            Route::post('deductibles', [PayrollController::class, 'inputDeductibles'])->name('deductibles');
            Route::get('office-payroll', [PayrollController::class, 'generatePayrollPerOffice'])->name('office_payroll');
            Route::get('salary-standardization', [PayrollController::class, 'selectSalaryStandardizationTable'])->name('salary_standardization');
        });


        Route::prefix('salaryGrade')->name('salaryGrade.')->group(function () {
            Route::get('index', [App\Http\Controllers\personnel\SalaryGradeController::class, 'index'])->name('index');
        });        
    });
});

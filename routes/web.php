<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PlantillaController;

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

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('user', [UserController::class, 'index'])->name('user.home');
    Route::get('user/employee', [UserController::class, 'pds'])->name('user.employee.pds');
    Route::get('user/employee/edit', [UserController::class, 'edit'])->name('user.employee.edit');
    Route::put('user/employee', [UserController::class, 'update'])->name('user.employee.update');


    Route::prefix('admin')->name('admin.')->middleware('auth:sanctum')->group(function () {
        Route::get('app', [AdminController::class, 'index'])->name('app');

        Route::get('office/create', [OfficeController::class, 'create'])->name('office.create');
        Route::post('office/store', [OfficeController::class, 'store'])->name('office.store');
        Route::get('office/edit/{id}', [OfficeController::class, 'edit'])->name('office.edit');
        Route::put('office/update/{id}', [OfficeController::class, 'update'])->name('office.update');

        Route::get('position/create', [PositionController::class, 'create'])->name('position.create');
        Route::post('position/store', [PositionController::class, 'store'])->name('position.store');

        Route::get('plantilla/create', [PlantillaController::class, 'create'])->name('plantilla.create');
        Route::post('plantilla/store', [PlantillaController::class, 'store'])->name('plantilla.store');
        Route::get('plantilla/edit/{id}', [PlantillaController::class, 'edit'])->name('plantilla.edit');
        Route::put('plantilla/update/{id}', [PlantillaController::class, 'update'])->name('plantilla.update');
        Route::get('plantilla/assign', [PlantillaController::class, 'assign'])->name('plantilla.assign');
        Route::post('plantilla/assignPersonnel', [PlantillaController::class, 'assignPersonnel'])->name('plantilla.assignPersonnel');
    });
});
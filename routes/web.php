<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdsController;



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

/*
index - show all 
show - show one 
create - show form to create  new 
store - store new 
edit - show form to edit one 
update - save new data of edited 
destroy - delete one 
*/

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('user', [UserController::class, 'index'])->name('user.home');
    
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('app', [AdminController::class, 'index'])->name('app');
    });
});

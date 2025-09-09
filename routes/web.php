<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/admin', [RoleController::class, 'admin'])->name('admin.dashboard');
    // Route::get('/user', [RoleController::class, 'user'])->name('user.dashboard');
});

Route::resource('employees', EmployeeController::class)->middleware('auth');
Route::post('/employees/import-csv', [EmployeeController::class, 'importCsv'])->name('employees.import.csv');
Route::resource('computer', ComputerController::class)->middleware('auth');

require __DIR__.'/auth.php';

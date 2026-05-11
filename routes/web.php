<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdmin\CampusController;
use App\Http\Controllers\SuperAdmin\UserController;
use Illuminate\Support\Facades\Auth;

//Route::get('/', fn() => redirect()->route('login'));

Auth::routes(['register' => false]);  // No public registration
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Super Admin routes
    Route::middleware(['auth', 'check.active', 'role:super_admin'])
        ->prefix('superadmin')
        ->name('superadmin.')
        ->group(function () {
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('campuses', CampusController::class);
            Route::patch('campuses/{campus}/toggle-status', [CampusController::class, 'toggleStatus'])->name('campuses.toggle-status');
            Route::resource('users', UserController::class);
            Route::patch('users/{user}/toggle-status', [UserController::class, 'toggleStatus'])->name('users.toggle-status');
            Route::post('users/{user}/reset-password', [UserController::class, 'resetPassword'])->name('users.reset-password');
        });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

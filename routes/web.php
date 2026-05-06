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
    Route::middleware(['role:super_admin'])
         ->prefix('superadmin')
         ->name('superadmin.')
         ->group(function () {
             Route::resource('campuses', CampusController::class);
             Route::resource('users', UserController::class);
         });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

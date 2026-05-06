<?php
namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->isSuperAdmin()) {
            $stats = [
                'total_campuses' => Campus::count(),
                'total_users'    => User::whereDoesntHave('roles', fn($q) => $q->where('name', 'super_admin'))->count(),
                'active_campuses'=> Campus::where('status', 'active')->count(),
                'total_admins'   => User::role('admin')->count(),
            ];
            $campuses = Campus::withCount('users')->latest()->take(5)->get();
            return view('superadmin.dashboard', compact('stats', 'campuses'));
        }

        // Campus-scoped users redirect to their own dashboard
        return view('dashboard');
    }
}
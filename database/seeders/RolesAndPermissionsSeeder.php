<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            // Campus
            'manage campuses', 'view campuses', 'create campuses', 'edit campuses', 'delete campuses',
            // Users
            'manage users', 'view users', 'create users', 'edit users', 'delete users',
            // Future modules
            'manage students', 'manage classes', 'manage fees', 'view reports',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Super Admin — everything
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $superAdmin->givePermissionTo(Permission::all());

        // Campus Admin — manages their campus only (no campus management)
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo([
            'view users', 'create users', 'edit users', 'delete users',
            'manage students', 'manage classes', 'view reports',
        ]);

        // Teacher
        $teacher = Role::firstOrCreate(['name' => 'teacher']);
        $teacher->givePermissionTo(['manage students', 'view reports']);

        // Accountant
        $accountant = Role::firstOrCreate(['name' => 'accountant']);
        $accountant->givePermissionTo(['manage fees', 'view reports']);
    }
}
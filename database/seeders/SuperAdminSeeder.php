<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = User::firstOrCreate(
            ['email' => 'superadmin@school.com'],
            [
                'name'      => 'Super Admin',
                'password'  => Hash::make('password'),
                'phone'     => '03001234567',
                'campus_id' => null,   // Super Admin belongs to no campus
                'status'    => 'active',
            ]
        );

        $superAdmin->assignRole('super_admin');
        
    }
}
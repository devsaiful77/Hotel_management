<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::create([
            'role_name' => 'Superadmin',
            'role_status' => '1',
            'role_slug' => 'superadmin',
            'role_type' => '1',
        ]);
        UserRole::create([
            'role_name' => 'Admin',
            'role_status' => '1',
            'role_slug' => 'admin',
            'role_type' => '1',
        ]);
        UserRole::create([
            'role_name' => 'Manager',
            'role_status' => '1',
            'role_slug' => 'manager',
            'role_type' => '2',
        ]);
        UserRole::create([
            'role_name' => 'Waiter',
            'role_status' => '1',
            'role_slug' => 'waiter',
            'role_type' => '2',
        ]);
        UserRole::create([
            'role_name' => 'Chef',
            'role_status' => '1',
            'role_slug' => 'chef',
            'role_type' => '2',
        ]);
    }
}

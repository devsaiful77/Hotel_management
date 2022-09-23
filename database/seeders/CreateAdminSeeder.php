<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Supper Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01234567890',
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01730233598',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin3@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01730233598',
            'role_id' => 3,
        ]);

    }
}

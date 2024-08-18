<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a super admin user
        User::create([
            'first_name' => 'Super',
            'last_name' => ' Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('password'),
            'country' => 'USA',
            'phone' => '000 0000 000',
            'store_id' => '1',
            'role' => 'super_admin',
        ]);
    }
}

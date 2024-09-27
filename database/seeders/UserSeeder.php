<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin', // Assuming you have defined this in the User model
        ]);

        // Create a Manager user
        User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('manager123'),
            'role' => 'manager', // You can define 'manager' in your roles
        ]);
    }
}

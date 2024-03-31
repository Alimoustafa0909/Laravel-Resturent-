<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'alimoustafaprogram@gmail.com',
            'password' => '2zek3aml',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'alimoustafa10101@yahoo.com',
            'password' => '2zek3aml',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = Admin::create([
            'name' => 'ali',
            'phone' => '01270040132',
            'email' => 'alimoustafaprogram@gmail.com',
            'password' => '2zek3aml', // Hash the password before saving
        ]);
    }}

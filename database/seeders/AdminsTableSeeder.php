<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Wessam Khalil',
            'email' => 'wessam@combal.net',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Sarah Shokry',
            'email' => 's.yahia93@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}

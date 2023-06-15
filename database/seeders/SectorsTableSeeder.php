<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sector::create(['name' => 'Government']);
        Sector::create(['name' => 'Telecommunication']);
        Sector::create(['name' => 'Oil and gas']);
        Sector::create(['name' => 'Education']);
        Sector::create(['name' => 'Logistics']);
        Sector::create(['name' => 'Information technology']);
        Sector::create(['name' => 'Retail']);
        Sector::create(['name' => 'Construction']);
    }
}

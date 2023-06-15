<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Track;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Track::create(['name' => 'Track 1']);
        Track::create(['name' => 'Track 2']);
        Track::create(['name' => 'Track 3']);
    }
}

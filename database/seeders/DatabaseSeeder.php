<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountriesSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(TracksTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CertificatesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(CandidatesTableSeeder::class);
        $this->call(SectorsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
    }
}

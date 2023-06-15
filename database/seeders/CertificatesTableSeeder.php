<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certificate::create(['name' => 'Microsoft']);
        Certificate::create(['name' => 'ISTQB']);
        Certificate::create(['name' => 'Cisco']);
        Certificate::create(['name' => 'Red Had']);
        Certificate::create(['name' => 'CompaTIA']);
        Certificate::create(['name' => 'Oracle']);
        Certificate::create(['name' => 'IIBA']);
        Certificate::create(['name' => 'AWS']);
        Certificate::create(['name' => 'Vmware']);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorsTableSeeder extends Seeder
{
    public function run(): void
    {
        Vendor::create(['name' => 'Amazon']);
        Vendor::create(['name' => 'Apple']);
        Vendor::create(['name' => 'CISCO']);
        Vendor::create(['name' => 'CompTIA']);
        Vendor::create(['name' => 'EC-Council']);
        Vendor::create(['name' => 'Google']);
        Vendor::create(['name' => 'HDI']);
        Vendor::create(['name' => 'IBM']);
        Vendor::create(['name' => 'ICCP']);
        Vendor::create(['name' => 'ISACA ']);
        Vendor::create(['name' => 'Microsoft']);
        Vendor::create(['name' => 'Oracle']);
        Vendor::create(['name' => 'PMI']);
        Vendor::create(['name' => 'Salesforce']);
        Vendor::create(['name' => 'SAP']);
        Vendor::create(['name' => 'Scrum Alliance']);
        Vendor::create(['name' => 'VMWare']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name'          => 'Ministry of Human Resources and Social Development',
            'sector_id'     => 1,
            'country_id'    => 682,
            'image_file'    => 'ministry.png'
        ]);

        Client::create([
            'name'          => 'Mobily',
            'sector_id'     => 2,
            'country_id'    => 682,
            'image_file'    => 'mobily.png'
        ]);

        Client::create([
            'name'          => 'King Saud University',
            'sector_id'     => 4,
            'country_id'    => 682,
            'image_file'    => 'university.png'
        ]);

        Client::create([
            'name'          => 'Abu Dhabi National Oil Company (ADNOC)',
            'sector_id'     => 3,
            'country_id'    => 784,
            'image_file'    => 'adnoc.png'
        ]);
    }
}

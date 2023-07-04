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
        Certificate::create([
            'name' => 'AWS Certified Cloud Practitioner',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Developer',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified SysOps Administrator',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Solutions Architect',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified DevOps Engineer',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Solutions Architect',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Advanced Networking',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Security',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Machine Learning',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Alexa Skill Builder',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Database',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Data Analytics',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Advanced Security',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified Alexa for Business',
            'vendor_id' => 1, 'expires_in' => 3
        ]);
        Certificate::create([
            'name' => 'AWS Certified IoT',
            'vendor_id' => 1, 'expires_in' => 3
        ]);

        /***** CISCO certificates *****/

        Certificate::create([
            'name' => 'Cisco Certified Entry Networking Technician (CCENT)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Technician (CCT)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Network Associate (CCNA)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Network Professional (CCNP)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Design Associate (CCDA)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Design Professional (CCDP)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Internetwork Expert (CCIE)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Architect (CCAr)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Entry Networking Technician (CCENT)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);

        Certificate::create([
            'name' => 'Cisco Certified Technician (CCT)',
            'vendor_id' => 3, 'expires_in' => 3
        ]);
    }
}












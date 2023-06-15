<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $candidate = new Candidate();
        $candidate->fill([
           'name'      => 'Ahmed Sami',
           'email'     => 'ahmed.sami@gmail.com',
           'mobile'    => '01025085251',
           'gender'    => 'male',
           'country_id'=> 818
        ])->save();
        for($i=1; $i <= 10; $i++){$candidate->skills()->attach(rand(1,46));}
        for($i=1; $i <= 3; $i++){$candidate->courses()->attach(rand(1,5));}

        $candidate = new Candidate();
        $candidate->fill([
            'name'      => 'Baraa Ahmed',
            'email'     => 'baraa.ahmed@gmail.com',
            'mobile'    => '01025085251',
            'gender'    => 'male',
            'country_id'=> 818
        ])->save();
        for($i=1; $i <= 10; $i++){$candidate->skills()->attach(rand(1,46));}
        for($i=1; $i <= 3; $i++){$candidate->courses()->attach(rand(1,5));}

        $candidate = new Candidate();
        $candidate->fill([
            'name'      => 'Marwa Talaat Desokey',
            'email'     => 'marwa.talaat@gmail.com',
            'mobile'    => '01025085251',
            'gender'    => 'female',
            'country_id'=> 818
        ])->save();
        for($i=1; $i <= 10; $i++){$candidate->skills()->attach(rand(1,46));}
        for($i=1; $i <= 3; $i++){$candidate->courses()->attach(rand(1,5));}

        $candidate = new Candidate();
        $candidate->fill([
            'name'      => 'Mentallah Mohamed Mohamed',
            'email'     => 'mentallah.mohamed@gmail.com',
            'mobile'    => '01025085251',
            'gender'    => 'female',
            'country_id'=> 818
        ])->save();
        for($i=1; $i <= 10; $i++){$candidate->skills()->attach(rand(1,46));}
        for($i=1; $i <= 3; $i++){$candidate->courses()->attach(rand(1,5));}

        $candidate = new Candidate();
        $candidate->fill([
            'name'      => 'Mervat Taha',
            'email'     => 'mervat.taha@gmail.com',
            'mobile'    => '01025085251',
            'gender'    => 'female',
            'country_id'=> 818
        ])->save();
        for($i=1; $i <= 10; $i++){$candidate->skills()->attach(rand(1,46));}
        for($i=1; $i <= 3; $i++){$candidate->courses()->attach(rand(1,5));}



    }
}

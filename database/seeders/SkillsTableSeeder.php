<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create(['name' => 'MongoDB']);
        Skill::create(['name' => 'Javascript']);
        Skill::create(['name' => 'TypeScript']);
        Skill::create(['name' => 'Python']);
        Skill::create(['name' => 'SQL(Postgre)']);
        Skill::create(['name' => 'SQL(MYSQL)']);
        Skill::create(['name' => 'AI']);
        Skill::create(['name' => 'APEX Oracle']);
        Skill::create(['name' => 'SQL']);
        Skill::create(['name' => 'Advanced Java']);
        Skill::create(['name' => 'C#']);
        Skill::create(['name' => 'ASP.NET']);
        Skill::create(['name' => 'JavaSE']);
        Skill::create(['name' => 'JavaEE']);
        Skill::create(['name' => 'JavaADF']);
        Skill::create(['name' => 'Mobile Development']);
        Skill::create(['name' => 'Android']);
        Skill::create(['name' => 'Basic Java']);
        Skill::create(['name' => 'JavaJSP']);
        Skill::create(['name' => 'JavaJSF']);
        Skill::create(['name' => 'C++']);
        Skill::create(['name' => 'OOP']);
        Skill::create(['name' => 'Swift4']);
        Skill::create(['name' => 'HTML5']);
        Skill::create(['name' => '.Net Framework']);
        Skill::create(['name' => 'iOS']);
        Skill::create(['name' => 'Java']);
        Skill::create(['name' => 'CSS3']);
        Skill::create(['name' => 'Responsive web design']);
        Skill::create(['name' => 'Bootstrap']);
        Skill::create(['name' => 'jQuery']);
        Skill::create(['name' => 'AJAX']);
        Skill::create(['name' => 'JSON']);
        Skill::create(['name' => 'PHP']);
        Skill::create(['name' => 'Laravel']);
        Skill::create(['name' => 'Java Database']);
        Skill::create(['name' => 'Anguler']);
        Skill::create(['name' => 'Linux']);
        Skill::create(['name' => 'MCSA: Web Applications']);
        Skill::create(['name' => 'MCSD: App Builder']);
        Skill::create(['name' => 'MCSE: Business Intelligence']);
        Skill::create(['name' => 'MCSA: MCSA: SQL Server 2012']);
        Skill::create(['name' => 'MS: Developing Microsoft Azure and Web Services']);
        Skill::create(['name' => 'MS: Implementing a Data Warehouse with Microsoft SQL Server']);
        Skill::create(['name' => 'MS: Programming in HTML5 with JavaScript and CSS3']);
        Skill::create(['name' => 'MCSA: Web Applications']);
    }
}

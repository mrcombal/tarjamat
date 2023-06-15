<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Automate Software Development Life Cycle',
            'description' => 'This course will teach you how to streamline the software development process by automating various tasks, such as code testing, deployment, and release management. You will learn about various tools and techniques that can be used to automate these tasks, which will help to reduce errors and speed up the overall development cycle.'
        ]);
        Course::create([
            'name' => 'Administering Relational Databases on Microsoft Azure',
            'description' => 'This course will teach you how to administer and manage relational databases on Microsoft Azure. You will learn about Azure SQL Database, Azure SQL Managed Instance, and Azure Database for MySQL and PostgreSQL. You will also learn how to configure, secure, backup, and restore databases on Azure.'
        ]);
        Course::create([
            'name' => 'JavaScript, Ajax, CSS, bootstrap, JQuery and HTML5',
            'description' => ''
        ]);
        Course::create([
            'name' => 'Introduction to Python',
            'description' => 'This course is designed to introduce you to the Python programming language, one of the most popular programming languages in use today. You will learn the basics of Python syntax and programming concepts, including variables, data types, control structures, functions, and file input/output. You will also get hands-on experience through programming exercises and projects.'
        ]);
        Course::create([
            'name' => 'AWS Cloud Practitioner',
            'description' => 'This course will provide you with a fundamental understanding of cloud computing and Amazon Web Services (AWS). You will learn about the AWS Cloud Practitioner exam, AWS services, security and compliance, and pricing models. This course is designed to prepare you for the AWS Cloud Practitioner certification exam and for a career in cloud computing.'
        ]);
    }
}

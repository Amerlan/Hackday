<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{

    public function run()
    {
       DB::table('project_ideas')->insert([
         'name' => 'DL ecosystem',
         'subject' => 'Web Programming',
         'description' => 'Разработать экосистему связующую все информационные ресурсы университета',
       ]);
       DB::table('project_ideas')->insert([
         'name' => 'E-library',
         'subject' => 'Mobile App',
         'description' => 'Разработать приложение с удобным контролем взятых в библиотеке книг',
       ]);
    }
}

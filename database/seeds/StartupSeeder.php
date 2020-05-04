<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('startups')->insert([
        'name' => 'EcoElectricity',
        'description' => 'Разрабатываем отечественные изобретения',
        'members' => 4,
        'founder' => 'John Doe',
        'subject' => 'IT+Physics',
        'capitalization' => 0,
      ]);
      DB::table('startups')->insert([
        'name' => 'ChildHelp',
        'description' => 'Создание детских развивающих игр',
        'members' => 2,
        'founder' => 'Jane Doe',
        'subject' => 'IT+Media',
        'capitalization' => 1000,
      ]);
      DB::table('startups')->insert([
        'name' => 'HealthPocket',
        'description' => 'Комплекс решений направленный на контроль состояние здоровья',
        'members' => 10,
        'founder' => 'Jack Doe',
        'subject' => 'IT',
        'capitalization' => 10000,
      ]);
    }
}

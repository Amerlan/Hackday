<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClubsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('clubs')->insert([
        'name' => 'DC',
        'description' => 'Ну мы короче бьем Азата',
        'members' => 2,
        'leader' => 'Amerlan',
        'subleader' => 'Amirzhan',
        'occupation' => 'fights',
      ]);

      DB::table('clubs')->insert([
        'name' => 'Tigers',
        'description' => 'Tancy',
        'members' => 3,
        'leader' => 'Amirzhan',
        'subleader' => 'Amerlan',
        'occupation' => 'dance',
      ]);

    }
}

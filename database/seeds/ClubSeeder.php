<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('clubs')->insert([
        'name' => 'Tigers',
        'description'=> 'RaveDanceParty',
        'members' => 10,
        'leader' => 'LeaderTiger',
        'subleader' => 'SubleaderTiger',
    ]);

      DB::table('clubs')->insert([
        'name' => 'DebateClub',
        'description'=> 'ArgumentFight',
        'members' => 2,
        'leader' => 'LeaderDebate',
        'subleader' => 'SubleaderDebate',
    ]);
      DB::table('clubs')->insert([
        'name' => 'StudentGoverment',
        'description'=> 'UselessPeople',
        'members' => 4,
        'leader' => 'LeaderSG',
        'subleader' => 'SubleaderSG',
    ]);

    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrgTypeSeeder extends Seeder
{

    public function run()
    {
      DB::table('organization_types')->insert([
          'OrgType' => 'Club',
        ]);
      DB::table('organization_types')->insert([
          'OrgType' => 'Project Idea',
        ]);
      DB::table('organization_types')->insert([
          'OrgType' => 'Startup',
        ]);
      DB::table('organization_types')->insert([
          'OrgType' => 'conferences',
        ]);
      DB::table('organization_types')->insert([
          'OrgType' => 'other',
        ]);

    }
}

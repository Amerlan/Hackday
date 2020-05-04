<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{



    public function run()
    {
        $this->call([
          OrgTypeSeeder::class,
          ClubSeeder::class,
          StartupSeeder::class,
          ProjectSeeder::class,
          ConferenceSeeder::class,
          EventSeeder::class,
                    ]);
    }
}

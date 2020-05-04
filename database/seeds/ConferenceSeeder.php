<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('conferences')->insert([
        'title' => 'Professor meetup',
        'description'=> 'Meetup for proffesors about summer session',
        'image' => 'https://studlive.by/wp-content/uploads/2016/02/1402647586_288410772.jpg',
        'date' => Carbon::create('16-05-2020'),
        'location' => 'Conference Hall, 2 floor',
    ]);
      DB::table('conferences')->insert([
        'title' => 'Rector\' meeting with students ',
        'description'=> 'Meeting for discussion problem',
        'image' => 'https://sun9-23.userapi.com/c857736/v857736064/1f06fd/pRPPETAjuFQ.jpg',
        'date' => Carbon::create('17-05-2020'),
        'location' => 'Conference Hall, 2 floor',
    ]);
      DB::table('conferences')->insert([
        'title' => 'Педагогическое собрание',
        'description'=> 'Собрание всех преподавателей АО МУИТ',
        'image' => 'https://sun9-23.userapi.com/c857736/v857736064/1f06fd/pRPPETAjuFQ.jpg',
        'date' => Carbon::create('19-05-2020'),
        'location' => 'Актовый зал, 2 этаж',
    ]);

    }
}

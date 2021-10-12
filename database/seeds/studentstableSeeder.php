<?php

use Illuminate\Database\Seeder;

class studentstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            [
                'id'=>'1',
                'name'=>'室坂育見',
                'school'=>'浜松高校',
                'grade'=>'高校3年生',
                'firstchoice'=>'千葉大学',
            ],
            [
                'id'=>'2',
                'name'=>'中嶋莉果子',
                'school'=>'軽井沢高校',
                'grade'=>'高校3年生',
                'firstchoice'=>'千葉大学',
            ],
            [
                'id'=>'3',
                'name'=>'草野ひなた',
                'school'=>'千葉中学校',
                'grade'=>'中学3年生',
                'firstchoice'=>'千葉高校',
            ],
            [
                'id'=>'4',
                'name'=>'中林あい',
                'school'=>'千葉小学校',
                'grade'=>'小学4年生',
                'firstchoice'=>'千葉中学校',
            ],
        ]);
    }
}

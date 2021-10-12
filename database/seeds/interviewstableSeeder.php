<?php

use Illuminate\Database\Seeder;

class interviewstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('interviews')->insert([
            [
                'user_id'=>'1',
                'student_id'=>'1',
                'content_study'=>'英語に対しては苦手意識がある。',
                'content_life'=>'テニス部に所属していて、練習が夜遅くまである。そのため、学習時間が取れていない状況。',
                'interview_date'=>'2021/10/7',
            ],
            [
                'user_id'=>'2',
                'student_id'=>'4',
                'content_study'=>'学校の宿題をちゃんとやらない時がある。',
                'content_life'=>'放課後は友達と遊びに行ってしまう。なかなか宿題をやろうとしない。',
                'interview_date'=>'2021/10/7',
            ],
        ]);
    }
}

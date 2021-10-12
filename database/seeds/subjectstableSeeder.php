<?php

use Illuminate\Database\Seeder;

class subjectstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subjects')->insert([
            [
                'id'=>'1',
                'user_id'=>'1',
                'student_id'=>'1',
            ],
            [
                'id'=>'2',
                'user_id'=>'1',
                'student_id'=>'2',
            ],
            [
                'id'=>'3',
                'user_id'=>'2',
                'student_id'=>'4',
            ],
            [
                'id'=>'4',
                'user_id'=>'3',
                'student_id'=>'3',
            ],
        ]);
    }
}

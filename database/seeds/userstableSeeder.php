<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'id'=>'1',
                'name'=>'武井彩夏',
                'college'=>'千葉大学',
                'department'=>'文学部',
                'subject'=>'英語',
                'email'=>'ayaka@example.com',
                'password'=>Hash::make('ayaka'),
            ],
            [
                'id'=>'2',
                'name'=>'小圷紗愛',
                'college'=>'早稲田大学',
                'department'=>'法学部',
                'subject'=>'国語',
                'email'=>'sae@example.com',
                'password'=>Hash::make('sae'),
            ],
            [
                'id'=>'3',
                'name'=>'佐川明日香',
                'college'=>'東京学芸大学',
                'department'=>'教育学部',
                'subject'=>'数学',
                'email'=>'asuka@example.com',
                'password'=>Hash::make('asuka'),
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userstableSeeder::class);
        $this->call(studentstableSeeder::class);
        $this->call(subjectstableSeeder::class);
        $this->call(interviewstableSeeder::class);
    }
}

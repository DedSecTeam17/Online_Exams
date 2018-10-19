<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class,200)->create();
        factory(\App\Course::class,200)->create();
        factory(\App\Question::class,200)->create();
        factory(\App\Result::class,300)->create();



    }
}

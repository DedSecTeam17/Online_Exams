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
        factory(\App\Course::class,100)->create();
        factory(\App\Question::class,1000)->create();
//        factory(\App\Question::class,3000)->create();




    }
}

<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'admin_id' => \App\Admin::all()->random(),
        'available' => false,
        'semester_id' => \App\Semester::all()->random(),
    ];
});


$factory->define(App\Question::class, function (Faker\Generator $faker) {


    $choices=['A','B','C','D'];
    return [
        'mark'=>$faker->numberBetween(0,10),
        'question_name' => $faker->name,
        'choice_a' => $faker->word,
        'choice_b' => $faker->word,
        'choice_c' => $faker->word,
        'choice_d' => $faker->word,
        'answer'=>$choices[rand(0,3)],
        'admin_id'=>\App\Admin::all()->random(),
        'course_id'=>\App\Course::all()->random()
    ];
});

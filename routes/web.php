<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();


//Route::get('/register',['uses'=>'Auth\RegisterController@create','as'=>'register.create']);
//Route::post('/register',['uses'=>'Auth\RegisterController@store','as'=>'register.store']);


Route::Resource('/users', 'Auth\RegisterController');


Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showAdminLogin')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


Route::Resource('/courses', 'CourseController');


Route::post('/courses/search', 'CourseController@search')->name('course_search');

Route::Resource('/questions', 'QuestionController');

Route::post('/questions/course/questions', ['uses' => 'QuestionController@getSpasticQuestionsForCourse', 'as' => 'questions.course_questions']);

Route::Resource('/students', 'UserController');

Route::Resource('/results', 'ResultController');


Route::post('/results/search', 'ResultController@search')->name('results_search');


Route::Resource('/semesters', 'SemesterController');


Route::get('/students/exam/{course_id}', ['uses' => 'UserController@takeExam', 'as' => 'students.exam']);


Route::post('/students/exam/store/{course_id}', ['uses' => 'UserController@storeAnswer', 'as' => 'students.exam.store']);


Route::post('/users/search', 'UserController@search')->name('students_search');




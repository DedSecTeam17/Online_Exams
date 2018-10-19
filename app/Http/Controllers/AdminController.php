<?php
namespace App\Http\Controllers;
use App\Course;
use App\Question;
use App\Result;
use App\User;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=User::all();
        $courses=Course::all();
        $questions=Question::all();
        $results=Result::all();

        return view('admin')->withStudents($students)->withCourses($courses)->withQuestions($questions)->withResults($results);
    }
}
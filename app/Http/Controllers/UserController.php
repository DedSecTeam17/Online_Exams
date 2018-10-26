<?php

namespace App\Http\Controllers;

use App\Course;
use App\Question;
use App\Result;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:admin")->except('takeExam', 'storeAnswer');


        $this->middleware('auth:web')->except('index', 'create', 'edit', 'destroy', 'show', 'update','search');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('user.index')->withUsers($users);
        //
    }


    public function takeExam($course_id)
    {
        $result = Result::where(['user_id' => Auth::id(), 'course_id' => $course_id])->get();
        if (!$result->isEmpty()) {
            Session::flash('You already take the exam !!', 'fail');
            return redirect()->route('home');

        } else {
            $exam_questions = Question::where('course_id', $course_id)->get();
            return view('exam')->withExam_questions($exam_questions)->withCourse_id($course_id);
        }

    }


    public function storeAnswer(Request $request, $course_id)
    {
        $questions = Question::where('course_id', $course_id)->get();
        $final_result = array();
        $user_reuslt = 0;
        $full_result = 0;
        foreach ($questions as $eq) {
            $answer = 'answer' . $eq->id;
            if ($request->$answer == $eq->answer) {
                $user_reuslt += $eq->mark;
                $final_result['user_result'] = $user_reuslt;
            }
            $full_result += $eq->mark;
            $final_result['full_result'] = $full_result;
        }
        $result = new Result();
        $result->result = $user_reuslt;
        $result->user_id = Auth::id();
        $result->course_id = $course_id;
        $result->full_mark = $full_result;
        $result->save();


        return redirect()->route('results.show', $result->id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('auth.register');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::find($id);

        return view('user.edit')->withStudent($student);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
//        $user->password=bcrypt($request->password);

        $user->update();

        return redirect()->route('students.index');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();
        return redirect()->route('students.index');
        //
    }


    public function  search(Request $request)
    {
        $word=$request->word;
        $users=User::where('name', 'LIKE', '%'.$word.'%')->paginate(5);

              return view('user.index')->withUsers($users);;
    }
}

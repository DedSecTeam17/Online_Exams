<?php

namespace App\Http\Controllers;

use App\Course;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:admin");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        $questions=Question::where('admin_id',Auth::id())->orderBy('course_id','asc')->paginate(5);
        return view('question.index')->withQuestions($questions)->withCourses($courses);
    }


    public function  getSpasticQuestionsForCourse(Request $request)
    {
        $courses=Course::all();

        $questions=Question::where('course_id',$request->course_id)->orderBy('course_id','asc')->get();
        return view('question.index')->withQuestions($questions)->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses=Course::all()->where('admin_id',Auth::id());;

        return view("question.create")->withCourses($courses);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'question_name'=>'required',
            'choice_a'=>'required',
            'choice_b'=>'required',
            'choice_c'=>'required',
            'choice_d'=>'required',
            'answer'=>'required',
            'mark'=>'required'
        ]);
        $question=new Question();
        $question->question_name=$request->question_name;
        $question->choice_a=$request->choice_a;
        $question->choice_b=$request->choice_b;
        $question->choice_c=$request->choice_c;
        $question->choice_d=$request->choice_d;
        $question->answer=$request->answer;
        $question->admin_id=Auth::id();
        $question->course_id=$request->course_id;
        $question->mark=$request->mark;

        $question->save();
        return redirect()->route('questions.create');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses=Course::all()->where('admin_id',Auth::id());
        $question=Question::find($id);
        return view('question.edit')->withQuestion($question)->withCourses($courses);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'question_name'=>'required',
            'choice_a'=>'required',
            'choice_b'=>'required',
            'choice_c'=>'required',
            'choice_d'=>'required',
            'answer'=>'required',
            'mark'=>'required'
        ]);
        $question=Question::find($id);
        $question->question_name=$request->question_name;
        $question->choice_a=$request->choice_a;
        $question->choice_b=$request->choice_b;
        $question->choice_c=$request->choice_c;
        $question->choice_d=$request->choice_d;
        $question->answer=$request->answer;
        $question->mark=$request->mark;
        $question->admin_id=Auth::id();
        $question->course_id=$request->course_id;;

        $question->save();
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Question::find($id);
        $course->delete();
        return redirect()->route('questions.index');
    }
}

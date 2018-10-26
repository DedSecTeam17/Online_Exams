<?php

namespace App\Http\Controllers;

use App\Course;
use App\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CourseController extends Controller
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
        //
        $courses=Course::where('admin_id',Auth::id())->paginate(5);
        return view('course.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $semesters=Semester::where('admin_id',Auth::id())->get();

        return view("course.create")->withSemesters(
            $semesters
        );
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
            'name'=>'required',
        ]);
        $course=new Course();
        $course->name=$request->name;
        $course->semester_id=$request->semester_id;
        $course->admin_id=Auth::id();
        $course->available=$request->available;
        $course->save();
        return redirect()->route('courses.index');

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

        $course=Course::find($id);
        return view('course.show')->withCourse($course);
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
        $semesters=Semester::where('admin_id',Auth::id())->get();

        $course=Course::find($id);
        return view('course.edit')->withCourse($course)->withSemesters(
            $semesters
        );
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
            'name'=>'required',
        ]);
        $course=Course::find($id);
        $course->name=$request->name;
        $course->semester_id=$request->semester_id;
        $course->admin_id=Auth::id();
        $course->available=$request->available;
        $course->update();
        return redirect()->route('courses.index');
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
        $course=Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');

        //
    }


        public function  search(Request $request)
    {

        $word=$request->word;
        $courses=Course::where('name', 'LIKE', '%'.$word.'%')->paginate(5);

            return view('course.index')->withCourses($courses);
    }

}

<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SemesterController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $semesters=Semester::paginate(5);

        return view('semester.index')->withSemesters($semesters);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semester.create');
        //
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
            'name'=>'required | min:3 | max:20'
        ]);
        $semester=new Semester();
        $semester->name=$request->name;
        $semester->admin_id=Auth::id();
        $semester->save();
        return redirect()->route('semesters.index');
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
        $semester=Semester::find($id);
        return view('semester.edit')->withSemester($semester);
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
            'name'=>'required | min:3 | max:20'
        ]);
        $semester=Semester::find($id);
        $semester->name=$request->name;
        $semester->admin_id=Auth::id();
        $semester->update();
        return redirect()->route('semesters.index');
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
        $semester=Semester::find($id);
        $semester->delete();
        return redirect()->route('semesters.index');
        //
    }
}

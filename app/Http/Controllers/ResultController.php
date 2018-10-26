<?php

namespace App\Http\Controllers;

use App\Result;
use App\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin')->except('show');
        $this->middleware('auth:web')->except('index','edit','store','destroy','update','search');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results=Result::paginate(5);
        return view('result.index')->withResults($results);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $result=Result::find($id);


        return view('show_result')->withResult($result);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function  search(Request $request)
    {
        $word=$request->word;
        $users=User::where('name', 'LIKE', '%'.$word.'%')->paginate(5);

        $results=null;
        foreach ($users as $user)
        {
            $results=Result::where('user_id', 'LIKE', '%'.$word.'%')->paginate(5);

        }


        return $results;
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Semester;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;



class RegisterController extends Controller
{



    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = '/students';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public  function  index(){
        $users=User::paginate(5);
        return  view('user.index')->withUsers($users);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store(\Illuminate\Http\Request $request)
    {

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->semester_id=$request->semester_id;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->route('students.index');
    }





    public  function  create()
    {
        $semesters=Semester::where('admin_id',Auth::id())->get();
        return view('auth.register')->withSemesters($semesters);
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

        $student=User::find($id);
        return view('user.edit')->withStudent($student)->withSemesters($semesters);
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\Illuminate\Http\Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->semester_id=$request->semester_id;
        $user->password=bcrypt($request->password);

        $user->update();

        return redirect()->route('users.index');

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

        $user=User::find($id);
        $user->delete();
        return redirect()->route('users.index');
        //
    }
}

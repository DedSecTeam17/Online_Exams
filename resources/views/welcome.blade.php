
@extends('pages.main')
@section('title','AllPosts')
@section('content')


    <div class="columns is-desktop" style="margin-top: 1%">
        <div class="column is-6 is-offset-3">
            <div class="box">
                <div class="box-content">

                        <i class="fas fa-user-graduate" style="font-size: xx-large; margin: 3%"></i>
             <a class="button is-fullwidth is-primary" href="{{route('login')}}"> Login as Student</a>


                </div>
            </div>

            <div class="box">
                <div class="box-content">


                        <i class="fas fa-user-tie" style="font-size: xx-large; margin: 3%"></i>
                        <a class="button is-fullwidth is-primary" href="{{route('admin.login')}}"> Login as Admin</a>


                </div>
            </div>
        </div>
    </div>




@endsection
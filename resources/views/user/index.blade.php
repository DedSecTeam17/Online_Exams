<style>
    .tabel__overflaw {
        overflow: auto;
    }
</style>
@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="columns is-desktop" style="margin: 3%">
        <div class="column is-6 is-offset-3">
            <div class="box box-shadow">
                <div class="box-content">
                    <div class="box-content">
                        {!! Form::open(array('route'=>'students_search','data-parsley-validate'=>'','method'=>'POST'))  !!}

                        <input class="control input is-outlined " name="word">

                        <button type="submit" class="button is-dark is-outlined  is-fullwidth" style="margin-top:2%"><img src="{{asset('img/search.png')}}" width="28" height="28"></button>
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="columns is-mobile" style="margin-top: 1%">
        <div class="column is-8 is-offset-2">
            <div class="box">
                <div class="box-content">
                    <div class="tabel__overflaw">
                        <table class="table ">
                            <thead class="thead-dark">
                            <tr>
                                <th><img src="{{asset('img/deletes.png')}}" height="24" width="24"></th>
                                <th><img src="{{asset('img/updates.png')}}" height="24" width="24"></th>
                                <th><img src="{{asset('img/semester.png')}}" height="24" width="24"></th>
                                <th><img src="{{asset('img/email.png')}}" height="24" width="24"></th>
                                <th><img src="{{asset('img/student.png')}}" height="24" width="24"></th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{Form::open(['route'=>['users.destroy',$user->id],'method'=>'delete'])}}
                                        <button type="submit" class="button is-danger "><img
                                                    src="{{asset('img/delete.png')}}" height="30" width="30"></button>
                                        {{Form::close()}}
                                    </td>
                                    <td><a class="button is-info " href="{{route('users.edit',$user->id)}}"><img
                                                    src="{{asset('img/update.png')}}" height="30" width="30"></a></td>
                                    <td>{{$user->semester->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->id}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <nav>
                            <ul class="pagination justify-content-end">
                                {{$users->links('vendor.pagination.bootstrap-4')}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .tabel__overflaw {
        overflow: auto;
    }
</style>

@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="columns is-mobile" style="margin-top: 1%">
        <div class="column is-8 is-offset-2">
            <div class="box">
                <div class="box-content">
                    <div class="tabel__overflaw">
                        <table class="table ">
                            <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>

                                    <td><a class="button is-info is-outlined"
                                           href="{{route('students.edit',$user->id)}}">Update</a></td>
                                    <td>
                                        {{Form::open(['route'=>['students.destroy',$user->id],'method'=>'delete'])}}
                                        {{ Form::submit('Delete',array("class"=>"button is-danger is-rounded is-outlined is-fullwidth",'style'=>'margin-top:3%')) }}
                                        {{Form::close()}}
                                    </td>
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
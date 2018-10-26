<style>
    .table__wrapper {
        overflow-x: auto;
    }
</style>

@extends('pages.main')
@section('title','AllPosts')
@section('content')
<div class="columns is-mobile" style="margin-top: 1%">
    <div class="column is-6 is-offset-3">
        <div class="box">
            <div class="box-content">
                <div class="table__wrapper">
                    <table class="table ">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($semesters as $semester)
                            <tr>
                                <td>{{$semester->id}}</td>
                                <td>{{$semester->name}}</td>
                                <td><a class="button is-info " href="{{route('semesters.edit',$semester->id)}}"><img src="{{asset('img/update.png')}}" height="30" width="30"></a></td>
                                <td>
                                    {{Form::open(['route'=>['semesters.destroy',$semester->id],'method'=>'delete'])}}
                                    <button type="submit" class="button is-danger "><img src="{{asset('img/delete.png')}}" height="30" width="30"></button>
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
                            {{$semesters->links('vendor.pagination.bootstrap-4')}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
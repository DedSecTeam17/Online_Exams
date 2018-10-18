@extends('pages.main')
@section('title','AllPosts')
@section('content')
<div class="columns is-mobile" style="margin-top: 1%">
    <div class="column is-6 is-offset-3">
        <div class="box">
            <div class="box-content">
                <table class="table ">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Availability</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->name}}</td>
                            <td>
                                @if($course->available==true)
                                    {{'متاح للامتحان'}}
                                    @else
                                    {{'غير متاح للامتحان'}}
                                @endif
                            </td>
                            <td><a class="button is-info is-outlined" href="{{route('courses.edit',$course->id)}}">Update</a></td>
                            <td>
                                {{Form::open(['route'=>['courses.destroy',$course->id],'method'=>'delete'])}}
                                {{ Form::submit('Delete',array("class"=>"button is-danger is-rounded is-outlined is-fullwidth",'style'=>'margin-top:3%')) }}
                                {{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <nav>
                        <ul class="pagination justify-content-end">
                            {{$courses->links('vendor.pagination.bootstrap-4')}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
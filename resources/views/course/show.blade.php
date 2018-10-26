{{--<style>--}}
    {{--.table__wrapper {--}}
        {{--overflow-x: auto;--}}
    {{--}--}}
{{--</style>--}}

{{--@extends('pages.main')--}}
{{--@section('title','AllPosts')--}}
{{--@section('content')--}}
    {{--<div class="columns is-mobile" style="margin-top: 1%">--}}
        {{--<div class="column is-6 is-offset-3">--}}
            {{--<div class="box">--}}
                {{--<div class="box-content">--}}
                    {{--<div class="table__wrapper">--}}
                        {{--<table class="table ">--}}
                            {{--<thead class="thead-dark">--}}
                            {{--<tr>--}}
                                {{--<th>#</th>--}}
                                {{--<th>Name</th>--}}
                                {{--<th>Availability</th>--}}
                                {{--<th>Update</th>--}}
                                {{--<th>Delete</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<td>{{$course->id}}</td>--}}
                                    {{--<td>{{$course->name}}</td>--}}
                                    {{--<td>--}}
                                        {{--@if($course->available==true)--}}
                                            {{--{{'متاح للامتحان'}}--}}
                                        {{--@else--}}
                                            {{--{{'غير متاح للامتحان'}}--}}
                                        {{--@endif--}}
                                    {{--</td>--}}

                                    {{--<td><a class="button is-info " href="{{route('courses.edit',$course->id)}}"><img src="{{asset('img/update.png')}}" height="30" width="30"></a></td>--}}
                                    {{--<td>--}}
                                        {{--{{Form::open(['route'=>['courses.destroy',$course->id],'method'=>'delete'])}}--}}
                                        {{--<button type="submit" class="button is-danger "><img src="{{asset('img/delete.png')}}" height="30" width="30"></button>--}}
                                        {{--{{Form::close()}}--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
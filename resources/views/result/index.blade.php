<style>
    .table__wrapper {
        overflow-x: auto;
    }
</style>
@extends('pages.main')
@section('title','AllPosts')
@section('content')

    {{--<div class="columns is-desktop" style="margin: 3%">--}}
        {{--<div class="column is-6 is-offset-3">--}}
            {{--<div class="box box-shadow">--}}
                {{--<div class="box-content">--}}
                    {{--<div class="box-content">--}}
                        {{--{!! Form::open(array('route'=>'results_search','data-parsley-validate'=>'','method'=>'POST'))  !!}--}}

                        {{--<input class="control input is-outlined " name="word">--}}

                        {{--<button type="submit" class="button is-dark is-outlined  is-fullwidth" style="margin-top:2%"><img src="{{asset('img/search.png')}}" width="28" height="28"></button>--}}
                        {{--{!! Form::close()  !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="columns is-mobile" style="margin-top: 1%">
        <div class="column is-6 is-offset-3">
            <div class="box">
                <div class="box-content">
                    <div class="table__wrapper">
                        <table class="table ">
                            <thead class="thead-dark">
                            <tr>
                                <th><img src="{{asset('img/result.png')}}" height="24" width="24"></th>
                                <th><img src="{{asset('img/courses.png')}}" height="24" width="24"></th>
                                <th><img src="{{asset('img/email.png')}}" height="24" width="24"></th>
                                <th><img src="{{asset('img/student.png')}}" height="24" width="24"></th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$result->result}}</td>
                                    <td>{{$result->course->name}}</td>
                                    <td>{{$result->user->email}}</td>
                                    <td>{{$result->user->name}}</td>
                                    <td>{{$result->id}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center">
                        <nav>
                            <ul class="pagination justify-content-end">
                                {{$results->links('vendor.pagination.bootstrap-4')}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
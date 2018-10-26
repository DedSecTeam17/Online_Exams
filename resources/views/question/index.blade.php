<style>
    .table__wrapper {
        overflow-x: auto;
    }
</style>
{{--questions.course_questions--}}
@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="columns is-desktop" style="margin: 3%">
        <div class="column is-6 is-offset-3">
            <div class="box box-shadow">
                <div class="box-content">
                    <div class="box-content">
                        {!! Form::open(array('route'=>'questions.course_questions','data-parsley-validate'=>'','method'=>'POST'))  !!}
                        <div class="select      is-fullwidth" >
                            <select name="course_id">
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="button is-dark is-outlined  is-fullwidth" style="margin-top:2%"><img src="{{asset('img/search.png')}}" width="28" height="28"></button>
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="columns is-desktop" style="margin: 3%">
            <div class="column is-12">
                <div class="box box-shadow">
                    <div class="box-content">
                        <div class="table__wrapper">
                            <table class="table is-narrow">
                                <thead class="thead-dark">
                                <tr>
                                    <th><img src="{{asset('img/deletes.png')}}" height="24" width="24"></th>
                                    <th><img src="{{asset('img/updates.png')}}" height="24" width="24"></th>
                                    <th><img src="{{asset('img/courses.png')}}" height="24" width="24"></th>
                                    <th><img src="{{asset('img/score.png')}}" height="24" width="24"></th>
                                    <th><img src="{{asset('img/answer.png')}}" height="24" width="24"></th>
                                    {{----}}
                                    <th><img src="{{asset('img/ds.png')}}" height="24" width="24"></th>
                                    <th><img src="{{asset('img/cs.png')}}" height="24" width="24"></th>
                                    <th><img src="{{asset('img/bs.png')}}" height="24" width="24"></th>
                                    <th><img src="{{asset('img/as.png')}}" height="24" width="24"></th>
                                    {{----}}
                                    <th><img src="{{asset('img/questions.png')}}" height="24" width="24"></th>
                                    <th>#</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($questions as $question)
                                    <tr>
                                        <td>
                                            {{Form::open(['route'=>['questions.destroy',$question->id],'method'=>'delete'])}}
                                            <button type="submit" class="button is-danger "><img
                                                        src="{{asset('img/delete.png')}}" height="24" width="24">
                                            </button>
                                            {{Form::close()}}
                                        </td>
                                        <td><a class="button is-info " href="{{route('questions.edit',$question->id)}}"><img
                                                        src="{{asset('img/update.png')}}" height="23" width="23"></a>
                                        </td>
                                        <td>{{$question->course->name}}</td>
                                        <td>{{$question->mark}}</td>
                                        <td>{{$question->answer}}</td>
                                        <td>{{$question->choice_d}}</td>
                                        <td>{{$question->choice_c}}</td>
                                        <td>{{$question->choice_b}}</td>
                                        <td>{{$question->choice_a}}</td>
                                        <td>{{$question->question_name}}</td>
                                        <td>{{$question->id}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            {{--<nav>--}}
                            {{--<ul class="pagination justify-content-end">--}}
                            {{--{{$questions->links('vendor.pagination.bootstrap-4')}}--}}
                            {{--</ul>--}}
                            {{--</nav>--}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
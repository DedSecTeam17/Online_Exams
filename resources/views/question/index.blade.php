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
                        <div class="select is-rounded is-fullwidth" >
                            <select name="course_id">
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{Form::submit('search',array('class'=>'button is-primary is-rounded is-fullwidth  ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="columns is-desktop" style="margin: 3%">
            <div class="column is-10 is-offset-1">
                <div class="box box-shadow">
                    <div class="box-content">
                        <div class="table__wrapper">
                            <table class="table is-narrow">
                                <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>choice A</th>
                                    <th>choice B</th>
                                    <th>choice C</th>
                                    <th>choice D</th>
                                    <th>Answer</th>
                                    <th>Course Name</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($questions as $question)
                                    <tr>
                                        <td>{{$question->id}}</td>
                                        <td>{{$question->question_name}}</td>
                                        <td>{{$question->choice_a}}</td>
                                        <td>{{$question->choice_b}}</td>
                                        <td>{{$question->choice_c}}</td>
                                        <td>{{$question->choice_d}}</td>
                                        <td>{{$question->answer}}</td>
                                        <td>{{$question->course->name}}</td>


                                        <td><a class="button is-info " href="{{route('questions.edit',$question->id)}}"><img
                                                        src="{{asset('img/update.png')}}" height="30" width="30"></a>
                                        </td>
                                        <td>
                                            {{Form::open(['route'=>['questions.destroy',$question->id],'method'=>'delete'])}}
                                            <button type="submit" class="button is-danger "><img
                                                        src="{{asset('img/delete.png')}}" height="30" width="30">
                                            </button>
                                            {{Form::close()}}
                                        </td>
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
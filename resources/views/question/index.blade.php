<style>
    .table__wrapper {
        overflow-x: auto;
    }
</style>

@extends('pages.main')
@section('title','AllPosts')
@section('content')
<div class="columns is-mobile" style="margin-top: 1%; margin-left: 2%">
    <div class="column is-11 ">
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

                                <td><a class="button is-info is-outlined" href="{{route('questions.edit',$question->id)}}">Update</a></td>
                                <td>
                                    {{Form::open(['route'=>['questions.destroy',$question->id],'method'=>'delete'])}}
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
                            {{$questions->links('vendor.pagination.bootstrap-4')}}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
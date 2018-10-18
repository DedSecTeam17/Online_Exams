@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="columns is-mobile" style="margin-top: 1%">
        <div class="column is-6 is-offset-3">
            {!! Form::open(array('route'=>['students.exam.store',$course_id],'data-parsley-validate'=>'','method'=>'POST'))  !!}
            <div class="box">
                <div class="box-content">
                    <div class="text-center">
                        {{$exam_questions->count().'questions Good luck !!'}}

                        @foreach($exam_questions as $eq)
                            <h1>{{$eq->question_name}}<i class="fas fa-question"></i></h1>
                            <ul>
                                <li>
                                    <label class="radio">
                                        <input type="radio" name="{{'answer'.$eq->id}}" value="A">
                                        {{$eq->choice_a}}
                                    </label>
                                </li>
                                <li>
                                    <label class="radio">
                                        <input type="radio" name="{{'answer'.$eq->id}}" value="B">
                                        {{$eq->choice_b}}
                                    </label>
                                </li>

                                <li>
                                    <label class="radio">
                                        <input type="radio" name="{{'answer'.$eq->id}}" value="C">
                                        {{$eq->choice_c}}
                                    </label>
                                </li>

                                <li>
                                    <label class="radio">
                                        <input type="radio" name="{{'answer'.$eq->id}}" value="D">
                                        {{$eq->choice_d}}
                                    </label>
                                </li>
                            </ul>
                            <hr>
                            @endforeach

                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-content">
                    <button class="button is-large is-primary is-fullwidth">حفظ وانهاء</button>
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
@endsection
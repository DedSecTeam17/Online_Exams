@extends('pages.main')
@section('title','Create Post')

@section('content')
    <div style="margin-top: 10%">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <div class="box">
                    <div class="box-content">
                        {!! Form::open(array('route'=>'questions.store','data-parsley-validate'=>'','method'=>'POST'))  !!}
                        {{----}}
                        {{ Form::label('title','السؤال:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('question_name',null,array('class'=>'input   '))}}

                        {{ Form::label('title','Choice A:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('choice_a',null,array('class'=>'input   '))}}

                        {{ Form::label('title','Choice B:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('choice_b',null,array('class'=>'input   '))}}

                        {{ Form::label('title','Choice C:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('choice_c',null,array('class'=>'input   '))}}

                        {{ Form::label('title','Choice D:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('choice_d',null,array('class'=>'input   '))}}

                        {{--mark--}}
                        {{ Form::label('title','الاجابه:',['class'=>'is-pulled-right'])   }}
                        <div class="select    is-fullwidth">
                            <select name="answer">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                        {{ Form::label('mark','الدرجه :',['class'=>'is-pulled-right'])   }}
                        <input type="number" name="mark" class="input   ">
                        {{--{{Form::text('answer',null,array('class'=>'input   '))}}--}}

                        {{ Form::label('title','الكورس:',['class'=>'is-pulled-right'])   }}<br>
                        <div class="select    is-fullwidth">
                            <select name="course_id">
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{----}}
                        {{Form::submit('اضف',array('class'=>'button is-primary is-outlined    is-fullwidth  ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

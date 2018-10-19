@extends('pages.main')
@section('title','Create Post')

@section('content')
    <div style="margin-top: 10%">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <div class="box">
                    <div class="box-content">
                        {!!Form::model($question, array('route' => array('questions.update', $question->id), 'files' => true, 'method' => 'PUT')) !!}
                        {{----}}
                        {{ Form::label('title','السؤال:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('question_name',null,array('class'=>'input is-rounded'))}}

                        {{ Form::label('title','Choice A:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('choice_a',null,array('class'=>'input is-rounded'))}}

                        {{ Form::label('title','Choice B:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('choice_b',null,array('class'=>'input is-rounded'))}}

                        {{ Form::label('title','Choice C:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('choice_c',null,array('class'=>'input is-rounded'))}}

                        {{ Form::label('title','Choice D:',['class'=>'is-pulled-right'])   }}
                        {{Form::text('choice_d',null,array('class'=>'input is-rounded'))}}

                        {{ Form::label('title','الاجابه:',['class'=>'is-pulled-right'])   }}
                        <div class="select is-rounded is-fullwidth" >
                            <select name="answer">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                        {{--{{Form::text('answer',null,array('class'=>'input is-rounded'))}}--}}

                        {{ Form::label('title','الكورس:',['class'=>'is-pulled-right'])   }}<br>
                        <div class="select is-rounded is-fullwidth" >
                            <select name="course_id">
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{----}}
                        {{Form::submit('تعديل',array('class'=>'button is-info is-rounded is-fullwidth  ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                        {!!Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

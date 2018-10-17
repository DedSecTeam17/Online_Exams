@extends('pages.main')
@section('title','Create Post')

@section('content')
<div style="margin-top: 10%">
    <div class="columns">
        {{--offset--}}
        <div class="column is-one-fifth">
        </div>
        <div class="column is-half">
            <div class="box">
                <div class="box-content">
                    {!! Form::open(array('route'=>'questions.store','data-parsley-validate'=>'','method'=>'POST'))  !!}
                    {{----}}
                    {{ Form::label('title','Question:')   }}
                    {{Form::text('question_name',null,array('class'=>'input is-rounded'))}}

                    {{ Form::label('title','Choice A:')   }}
                    {{Form::text('choice_a',null,array('class'=>'input is-rounded'))}}

                    {{ Form::label('title','Choice B:')   }}
                    {{Form::text('choice_b',null,array('class'=>'input is-rounded'))}}

                    {{ Form::label('title','Choice C:')   }}
                    {{Form::text('choice_c',null,array('class'=>'input is-rounded'))}}

                    {{ Form::label('title','Choice D:')   }}
                    {{Form::text('choice_d',null,array('class'=>'input is-rounded'))}}

                    {{ Form::label('title','Answer:')   }}
                    {{Form::text('answer',null,array('class'=>'input is-rounded'))}}

                    {{ Form::label('title','Course:')   }}<br>
                    <div class="select is-rounded" >
                        <select name="course_id">
                            @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                        </select>
                    </div>

                    {{----}}
                    {{Form::submit('Add',array('class'=>'button is-success is-rounded is-fullwidth is-outlined ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                    {!! Form::close()  !!}
                </div>
            </div>
        </div>
        {{--offset--}}
        <div class="col-md-2">
        </div>
    </div>
</div>
@endsection

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
                        {!!Form::model($course, array('route' => array('courses.update', $course->id), 'files' => true, 'method' => 'PUT')) !!}
                        {{ Form::label('title','Course Name :')   }}
                        {{Form::text('name',null,array('class'=>'input is-rounded','id'=>'first','maxlength'=>'255'))}}
                        {{Form::submit('Update',array('class'=>'button is-success is-rounded is-fullwidth is-outlined ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                        {!!Form::close()  !!}
                    </div>
                </div>
            </div>
            {{--offset--}}
            <div class="col-md-2">
            </div>
        </div>
    </div>
@endsection

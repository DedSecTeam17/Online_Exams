@extends('pages.main')
@section('Semester','Create Post')

@section('content')
    <div style="margin-top: 10%">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <div class="box">
                    <div class="box-content">
                        {!! Form::open(array('route'=>'semesters.store','data-parsley-validate'=>''))  !!}
                        {{ Form::label('title','الفصل',['class'=>'is-pulled-right'])   }}
                        {{Form::text('name',null,array('class'=>'input ','id'=>'first','maxlength'=>'255'))}}
                        {{Form::submit('اضف',array('class'=>'button is-primary is-outlined is-fullwidth  ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

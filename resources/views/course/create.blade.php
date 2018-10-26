@extends('pages.main')
@section('title','Create Post')
@section('content')
    <div style="margin-top: 10%">
        <div class="columns is-desktop">
            <div class="column is-6 is-offset-3">
                <div class="box">
                    <div class="box-content">
                        {!! Form::open(array('route'=>'courses.store','data-parsley-validate'=>''))  !!}
                        {{ Form::label('title','اسم الكورس',['class'=>'is-pulled-right'])   }}
                        {{Form::text('name',null,array('class'=>'input is-outlined','id'=>'first','maxlength'=>'255'))}}
                        {{ Form::label('title','الفصل:',['class'=>'is-pulled-right'])   }}<br>
                        <div class="select is-outlined is-fullwidth">
                            <select name="semester_id">
                                @foreach($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{ Form::label('title','التوفر:',['class'=>'is-pulled-right'])   }}<br>
                        <div class="select is-outlined is-fullwidth">
                            <select name="available">
                                <option value="{{true}}">متاح</option>
                                <option value="{{false}}">غير متاح</option>
                            </select>
                        </div>
                        {{Form::submit('اضف',array('class'=>'button is-primary is-outlined is-fullwidth  ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

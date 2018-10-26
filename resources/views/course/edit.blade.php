@extends('pages.main')
@section('title','Create Post')

@section('content')
    <div style="margin-top: 10%">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <div class="box">
                    <div class="box-content">
                        {!!Form::model($course, array('route' => array('courses.update', $course->id), 'files' => true, 'method' => 'PUT')) !!}
                        {{ Form::label('title','اسم الكورس',['class'=>'is-pulled-right'])   }}
                        {{Form::text('name',null,array('class'=>'input is-rounded','id'=>'first','maxlength'=>'255'))}}



                        {{ Form::label('title','الفصل:',['class'=>'is-pulled-right'])   }}<br>
                        <div class="select is-rounded is-fullwidth" >
                            <select name="semester_id">
                                @foreach($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{ Form::label('title','التوفر:',['class'=>'is-pulled-right'])   }}<br>
                        <div class="select is-rounded is-fullwidth" >
                            <select name="available">
                                <option value="{{true}}">متاح</option>
                                <option value="{{false}}">غير متاح</option>
                            </select>
                        </div>
                        {{Form::submit('تعديل',array('class'=>'button is-info is-rounded is-fullwidth  ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                        {!!Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

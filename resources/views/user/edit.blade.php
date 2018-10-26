@extends('pages.main')
@section('title','Create Post')
@section('content')
    <div style="margin-top: 10%">
        <div class="columns is-desktop">
            <div class="column is-6 is-offset-3">
                <div class="box">
                    <div class="box-content">
                        {!!Form::model($student, array('route' => array('users.update', $student->id), 'files' => true, 'method' => 'PUT')) !!}
                        {{ csrf_field() }}
                        <div class="has-icons-right  control{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="ادخل الاسم رباعي"
                                       class="input  is-fullwidth" name="name" value="{{ $student->name }}"
                                       required autofocus>
                                <span class="icon is-small is-right">
                                          <i class="far  fa-user-circle"></i>
                                     </span>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class=" has-icons-right control{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="ادخل الامييل" class="input  is-fullwidth"
                                       name="email"
                                       value="{{ $student->email }}" required>
                                <span class="icon is-small is-right">
                                          <i class="far fa-envelope"></i>
                                     </span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="control  has-icons-right {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="password" placeholder="ادخل كلمه السر" type="password"
                                       class="input   is-fullwidth"
                                       name="password" required>
                                <span class="icon is-small is-right">
                                          <i class="far fa-envelope"></i>
                                     </span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>
                        <div class=" has-icons-right control">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="اعد كتابة كلمه السر"
                                       class="input   is-fullwidth" name="password_confirmation"
                                       required>
                                <span class="icon is-small is-right">
                                          <i class="far fa-lock"></i>
                                     </span>
                            </div>
                        </div>


                        <hr>
                        {{ Form::label('title','semester:',['class'=>'is-pulled-left'])   }}<br>
                        <div class="select   is-fullwidth">
                            <select name="semester_id">

                                @foreach($semesters as $semester)

                                    <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{Form::submit('Update',array('class'=>'button is-info  is-fullwidth is-outlined ','style'=>'margin-top:2%','id'=>'mybtn'))}}
                        {!!Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

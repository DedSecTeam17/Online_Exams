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
                        {!!Form::model($student, array('route' => array('users.update', $student->id), 'files' => true, 'method' => 'PUT')) !!}
                        {{----}}
                        <figure class="avatar">
                            <i class="fas fa-graduation-cap" style="font-size: xx-large"></i>
                        </figure>

                            <div class="control{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Full Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="input is-rounded is-fullwidth" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="control{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="input is-rounded is-fullwidth" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="control {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="input is-rounded is-fullwidth" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="control">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="input is-rounded is-fullwidth" name="password_confirmation" required>
                                </div>
                            </div>

                        {{ Form::label('title','semester:',['class'=>'is-pulled-left'])   }}<br>
                        <div class="select is-rounded is-fullwidth" >
                            <select name="semester_id">
                                @foreach($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{----}}
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

@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="container-fluid">
        <section class="hero is-secondary is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-desktop">
                    <div class="column is-6 is-offset-3">
                        <div class="box">
                            <figure class="avatar">
                                <img src="{{asset('img/user.png')}}" width="100" height="100">
                            </figure>
                            <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
                                {{ csrf_field() }}
                                <div class="has-icons-right  control{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                        <input id="name" type="text" placeholder="ادخل الاسم رباعي"
                                               class="input  is-fullwidth" name="name" value="{{ old('name') }}"
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
                                        <input id="email" type="email" placeholder="ادخل الامييل" class="input  is-fullwidth" name="email"
                                               value="{{ old('email') }}" required>
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
                                        <input id="password" placeholder="ادخل كلمه السر" type="password" class="input   is-fullwidth"
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
                                <div class="control" style="margin-top: 5%">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit"
                                                class="button is-primary   is-outlined is-fullwidth">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

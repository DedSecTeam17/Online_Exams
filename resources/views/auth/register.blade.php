
@extends('pages.main')
@section('title','AllPosts')
@section('content')
<div class="container-fluid">
    <section class="hero is-secondary is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <div class="box">
                        <h3 class="title has-text-grey">Register</h3>
                        <figure class="avatar">
                            <i class="fas fa-graduation-cap" style="font-size: xx-large"></i>
                        </figure>
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

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

                            <div class="control" style="margin-top: 5%">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="button is-primary is-rounded is-outlined is-fullwidth">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script async type="text/javascript" src="../js/bulma.js"></script>

@endsection

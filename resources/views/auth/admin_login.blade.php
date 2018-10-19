

@extends('pages.main')
<div class="container-fluid">
    <section class="hero is-secondary is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login</h3>
                    <figure class="avatar">
                        <i class="fas fa-graduation-cap" style="font-size: xx-large"></i>
                    </figure>
                    <div class="box">
                        <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                            {{ csrf_field() }}
                            <div class="control {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="input is-rounded is-fullwidth" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="control{{ $errors->has('password') ? ' has-error' : '' }}">
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
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="control">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="button is-primary is-rounded is-outlined is-fullwidth">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="../">Need Help?</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</div>
<script async type="text/javascript" src="../js/bulma.js"></script>

{{--admin.login.submit--}}
@include('partial._header')

<div class="container-fluid" style="background-color: whitesmoke">


    @include('partial.tabs')

    <section class="hero is-secondary is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="box">
                        <figure class="avatar">
                            <img src="{{asset('img/user_admin.png')}}" width="100" height="100">
                        </figure>
                        <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                            {{ csrf_field() }}
                            <div class="control has-icons-right has-icons-right {{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input id="email" type="email" class="input is-fullwidth" name="email"
                                           placeholder="ادخل الامييل"
                                           value="{{ old('email') }}" required autofocus>
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
                            <div class="control  has-icons-left has-icons-right {{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input id="password" type="password" class="input   is-fullwidth"
                                           placeholder="ادخل كلمه السر"
                                           name="password" required>
                                    <span class="icon is-small is-right">
                                          <i class="fas fa-unlock"></i>
                                     </span>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <hr>

                            <div class="control">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="control">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="button is-primary    is-fullwidth">
                                        تسجيل الدخول
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        نسيت كلمه السر؟
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="../">مساعده؟</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('partial._footer')
</div>



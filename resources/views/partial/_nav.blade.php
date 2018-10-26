<!-- START NAV -->
@if(\Illuminate\Support\Facades\Auth::guard('web')->check() ||  \Illuminate\Support\Facades\Auth::guard('admin')->check())
    <nav class="navbar is-dark  ">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="#">
                    <img src=" {{asset('img/logo.png')}}">SustXamm
                </a>
                <div class="navbar-burger burger is-dark" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu is-dark">
                <div class="navbar-start is-dark" style="background-color: #2e3131">
                    @if(\Illuminate\Support\Facades\Auth::guard('web')->check())
                        <a class="navbar-item" href="/home">
                            <img src=" {{asset('img/exams.png')}}">
                            الصفحه الرئيسيه
                        </a>
                    @else
                        <a class="navbar-item" href="/admin">
                            <img src=" {{asset('img/home.png')}}">
                            الصفحه الرئيسيه
                        </a>

                    @endif


                    <a class="navbar-item" href="{{ route('logout') }} "
                       onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        <img src=" {{asset('img/logout.png')}}">
                        تسجيل الخروج
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>

            </div>
        </div>
    </nav>
@else
    <nav class="navbar is-dark  ">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="#">
                    <img src=" {{asset('img/logo.png')}}">SustXamm
                </a>
                <div class="navbar-burger burger is-dark" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
@endif
<!-- END NAV -->


<!-- START NAV -->
@if(\Illuminate\Support\Facades\Auth::guard('web')->check() ||  \Illuminate\Support\Facades\Auth::guard('admin')->check())
    <nav class="navbar is-dark  " >
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="#">
                    Sust Online Exams
                </a>
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">

                    @if(\Illuminate\Support\Facades\Auth::guard('web')->check())
                        <a class="navbar-item" href="/home">
                            Exams
                        </a>

                    @else

                        <a class="navbar-item" href="/home">
                            Home
                        </a>

                    @endif



                    <a  class="navbar-item" href="{{ route('logout') }} "
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>

            </div>
        </div>
    </nav>
    @else





    @endif

<!-- END NAV -->


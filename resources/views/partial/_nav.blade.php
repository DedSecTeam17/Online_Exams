<!-- START NAV -->
<nav class="navbar is-light  " >
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item brand-text" href="../">
                Sust Admin
            </a>
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="admin.html">
                    Home
                </a>
                @if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
                    <a  class="navbar-item" href="{{ route('logout') }} "
                       onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endif
            </div>

        </div>
    </div>
</nav>

<!-- END NAV -->


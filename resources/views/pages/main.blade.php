<html>
<head>
    @include('partial._header')
    @yield('stylesheet')
    <style>
        h2{
            font-family: 'Amiri', serif;

        }
        p{
            font-family: 'Amiri', serif;

        }
        a{
            font-family: 'Amiri', serif;

        }
        button{
            font-family: 'Amiri', serif;

        }
        li{
            font-family: 'Amiri', serif;

        }

        table{
            font-family: 'Indie Flower', cursive;
        }


    </style>
</head>
<body >
@include('partial._nav')
<div class="container-fluid" style="   background-color: #e8e8e8;">


    <div class="columns is-desktop">
        {{--Aside area here --}}





        @if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
            <div class="column is-10">
                @include('partial._message')
                @yield('content')

            </div>
        <div class="column is-2 aside" style="width: 100%; background-color: white">
            @include('partial._aside_nav')
        </div>
            @else

            <div class="column is-8 is-offset-2">
                @include('partial._message')
                @yield('content')
            </div>

        @endif



    </div>
    @include('partial._footer')
</div>

{{--Custom JS --}}

@include('partial._javascript')
<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {
            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>

@yield('javascript')

</body>
</html>
<html>
<head>
    @include('partial._header')
    @yield('stylesheet')
    <style>
        h2{
            font-family: 'Merienda', cursive;

        }
        p{
            font-family: 'Merienda', cursive;

        }
        a{
            font-family: 'Merienda', cursive;

        }
        button{
            font-family: 'Merienda', cursive;

        }


    </style>
</head>
<body >
@include('partial._nav')
<div class="container-fluid" style="   background-color: #e8e8e8;">
    <div class="columns">
        {{--Aside area here --}}
        @include('partial._aside_nav')
        <div class="column is-9">
        @yield('content')
        </div>
    </div>
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
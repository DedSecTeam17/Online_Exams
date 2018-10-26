<style>

    i {
        color: #29f1c3;
    }
</style>


    <aside class="menu " style="background-color: #22313f">
        <div class="container-fluid">
        <p class="menu-label">
            {{--Admin Panel--}}
        </p>
        <ul class="menu-list">
            <li><a class=" is-fullwidth"><img src="{{asset('img/dashboard.png')}}" width="30" height="30"></a>
            </li>
        </ul>
        <p class="menu-label" style="color: white">
            Administration
        </p>

        <ul class="menu-list">
            <li>
                <a id="student"> <img src="{{asset('img/students.png')}}" width="30" height="30"> </a>
                <ul id="student_toggle">
                    <li><a href="{{route('users.index')}}"><img src="{{asset('img/report.png')}}" width="30"
                                                                height="30"></a></li>
                    <li><a href="{{route('users.create')}}"><img src="{{asset('img/add.png')}}" width="30" height="30"></a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="menu-list">
            <li>
                <a id="semester"> <img src="{{asset('img/semester.png')}}" width="30" height="30"> </a>
                <ul id="semester_toggle">
                    <li><a href="{{route('semesters.index')}}"><img src="{{asset('img/report.png')}}" width="30"
                                                                    height="30"></a></li>
                    <li><a href="{{route('semesters.create')}}"><img src="{{asset('img/add.png')}}" width="30"
                                                                     height="30"></a></li>
                </ul>
            </li>
        </ul>
        <ul class="menu-list">
            <li>
                <a id="course"><img src="{{asset('img/course.png')}}" width="30" height="30"></a>
                <ul id="course_toggle">
                    <li><a href="{{route('courses.index')}}"><img src="{{asset('img/report.png')}}" width="30"
                                                                  height="30"></a></li>
                    <li><a href="{{route('courses.create')}}"><img src="{{asset('img/add.png')}}" width="30"
                                                                   height="30"></a></li>
                </ul>
            </li>
        </ul>
        <ul class="menu-list">
            <li>
                <a id="questions"><img src="{{asset('img/questions.png')}}" width="30" height="30"></a>
                <ul id="questions_toggle">
                    <li><a href="{{route('questions.index')}}"><img src="{{asset('img/report.png')}}" width="30"
                                                                    height="30"></a></li>
                    <li><a href="{{route('questions.create')}}"><img src="{{asset('img/add.png')}}" width="30"
                                                                     height="30"></a></li>
                </ul>
            </li>
        </ul>

        <ul class="menu-list">
            <li>
                <a id="result"><img src="{{asset('img/result.png')}}" width="30" height="30"></a>
                <ul id="result_toggle">
                    <li><a href="{{route('results.index')}}"><img src="{{asset('img/report.png')}}" width="30"
                                                                  height="30"></a></li>
                </ul>
            </li>
        </ul>
        </div>
    </aside>



<script>
    $(document).ready(function () {
        $('#student_toggle').slideUp();
        $('#course_toggle').slideUp();
        $('#questions_toggle').slideUp();
        $('#result_toggle').slideUp();
        $('#semester_toggle').slideUp();


        $('#semester').click(function () {
            $('#semester_toggle').slideToggle();
        });


        $('#course').click(function () {
            $('#course_toggle').slideToggle();
        });
        $('#student').click(function () {
            $('#student_toggle').slideToggle();
        });


        $('#result').click(function () {
            $('#result_toggle').slideToggle();
        });


        $('#questions').click(function () {
            $('#questions_toggle').slideToggle();
        });


    });
</script>






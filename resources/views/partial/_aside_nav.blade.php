<style>

    i{
        color: #29f1c3;
    }
</style>

        <nav class="navbar ">
            <aside class="menu " style="color: white">
                <ul class="menu-list">
                    <li><a class="is-active is-fullwidth"><img src="{{asset('img/dashboard.png')}}" width="30" height="30"></a></li>
                </ul>
                <ul class="menu-list">
                    <li>
                        <a id="student"> <img src="{{asset('img/students.png')}}" width="30" height="30"> </a>
                        <ul id="student_toggle">
                            <li><a href="{{route('students.index')}}" >كل الطلاب</a></li>
                            <li><a href="../register">اضافه طالب جديد</a></li>
                        </ul>
                    </li>
                </ul>



                <ul class="menu-list">
                    <li>
                        <a  id="course"><img src="{{asset('img/course.png')}}" width="30" height="30"></a>
                        <ul id="course_toggle">
                            <li><a href="{{route('courses.index')}}">الكورسات</a></li>
                            <li><a href="{{route('courses.create')}}">اضافه كورس</a></li>
                        </ul>
                    </li>
                </ul>



                <ul class="menu-list">
                    <li>
                        <a id="questions"><img src="{{asset('img/questions.png')}}" width="30" height="30"></a>
                        <ul id="questions_toggle">
                            <li><a href="{{route('questions.index')}}">اسئله الامتحانات</a></li>
                            <li><a href="{{route('questions.create')}}">اضافه سؤال</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="menu-list">
                    <li>
                        <a id="result"><img src="{{asset('img/result.png')}}" width="30" height="30"></a>
                        <ul id="result_toggle">
                            <li><a href="{{route('results.index')}}">النتائج</a></li>
                            <li><a>التقارير</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </nav>


<script>
    $(document).ready(function () {
        $('#student_toggle').slideUp();
        $('#course_toggle').slideUp();
        $('#questions_toggle').slideUp();
        $('#result_toggle').slideUp();





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






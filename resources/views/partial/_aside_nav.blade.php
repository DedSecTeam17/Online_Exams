<style>

    i{
        color: #29f1c3;
    }



</style>




<div class="box">
    <div class="box-body">
        <nav class="navbar ">
            <aside class="menu " style="color: white">
                <ul class="menu-list">
                    <li><a class="is-active">Admin Dashboard</a></li>
                </ul>
                <ul class="menu-list">
                    <li>
                        <a><i class="fas fa-user-graduate " style="font-size: xx-large"></i></a>
                        <ul>
                            <li><a href="{{route('students.index')}}" >كل الطلاب</a></li>
                            <li><a href="../register">اضافه طالب جديد</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu-list">
                    <li>
                        <a><i class="fas fa-book-reader" style="font-size: xx-large"></i></a>
                        <ul>
                            <li><a href="{{route('courses.index')}}">الكورسات</a></li>
                            <li><a href="{{route('courses.create')}}">اضافه كورس</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu-list">
                    <li>
                        <a><i class="fas fa-question-circle" style="font-size: xx-large"></i></a>
                        <ul>
                            <li><a href="{{route('questions.index')}}">اسئله الامتحانات</a></li>
                            <li><a href="{{route('questions.create')}}">اضافه سؤال</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu-list">
                    <li>
                        <a><i class="fab fa-readme" style="font-size: xx-large"></i></a>
                        <ul>
                            <li><a href="{{route('results.index')}}">النتائج</a></li>
                            <li><a>التقارير</a></li>
                        </ul>
                    </li>

                </ul>
            </aside>
        </nav>

    </div>

</div>







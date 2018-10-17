


@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())

    <div class="column is-3" style="background-color: white; margin-left: 1%; margin-top: 0.5%">
        <aside class="menu">
            <ul class="menu-list">
                <li><a class="is-active">Admin Dashboard</a></li>
            </ul>
            <ul class="menu-list">
                <li>
                    <a><i class="fas fa-user-graduate " style="font-size: xx-large"></i></a>
                    <ul>
                        <li><a>All students</a></li>
                        <li><a href="../register">Add new Students</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="menu-list">
                <li>
                    <a><i class="fas fa-book-reader" style="font-size: xx-large"></i></a>
                    <ul>
                        <li><a href="{{route('courses.index')}}">All Courses</a></li>
                        <li><a href="{{route('courses.create')}}">Add new Courses</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="menu-list">
                <li>
                    <a><i class="fas fa-question-circle" style="font-size: xx-large"></i></a>
                    <ul>
                        <li><a href="{{route('questions.index')}}">All Questions</a></li>
                        <li><a href="{{route('questions.create')}}">Add new Questions</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="menu-list">
                <li>
                    <a><i class="fab fa-readme" style="font-size: xx-large"></i></a>
                    <ul>
                        <li><a>All Results</a></li>
                        <li><a>Reports</a></li>
                    </ul>
                </li>

            </ul>
        </aside>
    </div>
    @endif




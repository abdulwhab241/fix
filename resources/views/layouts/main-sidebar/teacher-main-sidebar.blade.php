<div class="scrollbar side-menu-bg" style="overflow: scroll; font-family: 'Cairo', sans-serif">
<ul class="nav navbar-nav side-menu" id="sidebarnav">
    <!-- menu item Dashboard-->
    <li>
        <a href="{{ url('/teacher/dashboard') }}">
            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">الرئيسية</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </li>
    <!-- menu title -->
    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">برنامج عبدالوهاب لإدارة المدارس </li>

    <!-- Teacher Students-->
    <li>
        <a href="{{ route('student.index') }}"><i class="fa fa-user" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; الطـلاب </span></a>
    </li>

    <!-- Teacher Section-->
    <li>
        <a href="{{ route('sections') }}"><i class="fas fa-chalkboard" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; الأقسـام </span></a>
    </li>

    <!-- Teacher Classes-->
    <li>
        <a href="{{ route('Teacher_Classes.index') }}"><i class="fas fa-books" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; الحصـص الدراسية </span></a>
    </li>

    <!-- Teacher Attendance-->
    <li>
        <a href="{{ route('TeacherAttendance.index') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; الحضـور والغيـاب </span></a>
    </li>

    <!-- Teacher Report-->
    <li>
        <a href="{{ route('attendance.report') }}"><i class="fa fa-table" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; تقرير الحضور والغياب </span></a>
    </li>

    <!-- Teacher Exam-->
    <li>
        <a href="{{ route('TeacherExams.index') }}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; الإختبـارات </span></a>
    </li>

    <!-- Teacher Result-->
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
            <div class="pull-left"><i class="fas fa-percent fa-fw" aria-hidden="true"></i><span
                    class="right-nav-text">النـتائـج</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
            <li><a href="{{ route('TeacherResult.index') }}"><i class="fa fa-circle-o" aria-hidden="true"></i> النتـائـج الشـهـريـة</a></li>
            <li><a href="{{route('StudentMidResults.index')}}"><i class="fa fa-circle-o"></i>  نتـائـج إختبـارات الـترم الاول</a></li>
            <li><a href="{{ route('StudentFinalResults.index') }}"><i class="fa fa-circle-o" aria-hidden="true"></i> نتـائـج إختبـارات الـترم الـثانـي</a></li>
        </ul>
    </li>
    
    <!-- Teacher Student_Grade-->
    <li>
        <a href="{{ route('Teacher_Grades.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; كشـف درجـات الطـلاب </span></a>
    </li>

    <!-- Teacher Profile-->
    <li>
        <a href="{{route('TeacherProfile.show')}}"><i class="fas fa-id-card-alt" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; الملـف الشخصـي </span></a>
    </li>

</ul>
</div>



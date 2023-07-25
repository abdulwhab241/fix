<div class="scrollbar side-menu-bg" style="overflow: scroll; font-family: 'Cairo', sans-serif">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ route('dashboard.Students') }}">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">الرئيسية</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">برنامج عبدالوهاب لإدارة المدارس </li>

        <!-- Student Information-->
        <li>
            <a href="{{ route('Students.information') }}"><i class="fa fa-user" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; البيـانـات الشخصيـة </span></a>
        </li>

        <!-- Student Account-->
        <li>
            <a href="{{ route('StudentAccounts.index') }}"><i class="fa fa-dollar highlight-icon" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; بيـانـات الـرسـوم </span></a>
        </li>

        <!-- Student Table-->
        <li>
            <a href="{{ route('StudentTable.index') }}"><i class="fa fa-table" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; جـدول الحصـص </span></a>
        </li>

        <!-- Student Attendance-->
        <li>
            <a href="{{ route('StudentAttendance.index') }}"><i class="fa fa-check-square" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; بيـانـات المـواظبـة </span></a>
        </li>

        <!-- Student Grade-->
        <li>
            <a href="{{route('Student_List')}}"><i class="fa fa-list-alt"></i><span class="right-nav-text"> &nbsp; كـشـف الـدراجات </span></a>
        </li>

        <!-- Student Result-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                <div class="pull-left"><i class="fas fa-percent fa-fw" aria-hidden="true"></i><span
                        class="right-nav-text">النـتائـج</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{ route('StudentResult.index') }}"><i class="fa fa-circle-o" aria-hidden="true"></i> نتـائـج الإختبـارات الشهـرية</a></li>
                <li><a href="{{ route('mid_student') }}"><i class="fa fa-circle-o" aria-hidden="true"></i> نتيجـة التـرم الأول</a></li>
                <li><a href="{{ route('StudentFinal.index') }}"><i class="fa fa-circle-o" aria-hidden="true"></i> النتيـجـة النـهائيـة</a></li>
            </ul>
        </li>

        <!-- Student Profile-->
        <li>
            <a href="{{route('StudentProfile.show')}}"><i class="fas fa-id-card-alt" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; الملـف الشخصـي </span></a>
        </li>

        <!-- Student Graduated-->
        <li>
            <a href="{{ route('student_graduated') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; معلـومـات التخـرج </span></a>
        </li>



    </ul>
</div>


<div class="scrollbar side-menu-bg" style="overflow: scroll; font-family: 'Cairo', sans-serif">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">الرئيسية</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">برنامج عبدالوهاب لإدارة المدارس </li>

        <!-- Grades-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                <div class="pull-left"><i class="fas fa-school"></i><span
                        class="right-nav-text">المراحل الدراسية</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Grades.index')}}">قائمة المراحل الدراسية</a></li>

            </ul>
        </li>
        <!-- classes-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                <div class="pull-left"><i class="fa fa-building"></i><span
                        class="right-nav-text">الصفوف الدراسية</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Classrooms.index')}}">قائمة الصفوف الدراسية</a></li>
            </ul>
        </li>


        <!-- sections-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                <div class="pull-left"><i class="fas fa-chalkboard"></i></i><span
                        class="right-nav-text">الأقسـام</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Sections.index')}}">قائمة الأقسـام</a></li>
            </ul>
        </li>


        <!-- students-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i class="fas fa-user-graduate"></i>الطلاب<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="students-menu" class="collapse">
                <li>
                    
                        <li> <a href="{{route('Students.index')}}">قائمة الطلاب</a></li>
                </li>

                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Students_upgrade">تـرقيـة الطـلاب<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                    <ul id="Students_upgrade" class="collapse">
                        <li> <a href="{{route('Upgrades.index')}}">قائمة تـرقيـة الطـلاب</a> </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Graduate students">الطـلاب المتخـرجيـن<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                    <ul id="Graduate students" class="collapse">
                        <li> <a href="{{route('Graduated.index')}}">قائمة الطـلاب المتخـرجيـن</a> </li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- Enrollments-->
        <li>
            <a href="{{ route('Enrollments.index') }}"><i class="fa fa-sign-in"></i><span class="right-nav-text">تسجيل الطلاب</span></a>
        </li>

        <!-- Teachers-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i></i><span
                        class="right-nav-text">المعلمين</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('Teachers.index')}}">قائمة المعلمين</a> </li>
            </ul>
        </li>

        <!-- Subjects-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subjects">
                <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">المواد الدراسية</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Subjects" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('Subjects.index')}}">قائمة المواد الدراسية</a> </li>
                <li><a href="{{route('TeacherSubjects.index')}}"> قائمة مواد المعلمين</a></li>
            </ul>
        </li>

        <!-- Accounts-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                <div class="pull-left"><i class="fa fa-dollar highlight-icon" aria-hidden="true"></i><span
                        class="right-nav-text">الحسابات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Fees.index')}}"> الرسـوم الدراسيـة</a></li>
                <li><a href="{{route('Fees_Invoices.index')}}"> الفـواتيـر الدراسيـة</a></li>
                <li><a href="{{ route('Receipts.index') }}"> سندات القبض (تسـديـد رسـوم)</a></li>
                <li><a href="{{route('ProcessingFee.index')}}"> أستبـعاد رسـوم طـالـب </a></li>
                <li><a href="{{route('Payments.index')}}"> سـندات الصـرف </a></li>
            </ul>
        </li>

        <!-- Attendance-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-icon">
                <div class="pull-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span class="right-nav-text">الحضور والغياب</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Attendance-icon" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Attendance.index')}}"> قائمة الحضـور والغيـاب</a></li>
            </ul>
        </li>

        <!-- Quizzes-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Exams-icon">
                <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">الاختبارات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Exams-icon" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Quizzes.index')}}"> قائمة الأختبأرات</a></li>
            </ul>
        </li>

        <!-- Student Grades-->
        <li>
            <a href="{{route('Student_Grades.index')}}"><i class="fa fa-list-alt"></i><span class="right-nav-text">كشـف دراجات الطـلاب</span></a>
        </li>

        <!-- Results-->
        <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Results">
            <div class="pull-left"><i class="fas fa-percent fa-fw" aria-hidden="true"></i><span class="right-nav-text">النتائج</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="Results" class="collapse" data-parent="#sidebarnav">
            <li><a href="{{route('Results.index')}}"> قائمة النتـائـج الشـهريـة</a></li>
            <li><a href="{{route('MidResults.index')}}"> قائمة نتـائـج الـترم الاول</a></li>
            <li><a href="{{ route('Final_Results.index') }}"> قـائمـة نـتائـج الطـلاب النـهائيـة</a></li>
        </ul>
        </li>

        <!-- Classes-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Classes">
                <div class="pull-left"><i class="fas fa-books" aria-hidden="true"></i><span class="right-nav-text">الحصـص الدراسية</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Classes" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Classes.index')}}"><i class="fa fa-circle-o"></i> قائمة الحصـص الدراسية للطلاب</a></li>
                <li><a href="{{ route('Classes_Teacher.index') }}"><i class="fa fa-circle-o"></i> قائمة حصـص المعلمين</a></li>
            </ul>
        </li>

        <!-- Boxes-->
        <li>
            <a href="{{route('box')}}"><i class="fas fa-school" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; الصندوق </span></a>
        </li>

        <!-- Users-->
        <li>
            <a href="{{route('Users.index')}}"><i class="fa fa-users" aria-hidden="true"></i><span class="right-nav-text"> &nbsp; قائمة المستخدمين </span></a>
        </li>


    </ul>
</div>


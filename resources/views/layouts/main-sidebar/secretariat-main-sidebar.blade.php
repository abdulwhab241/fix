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

        <!-- Students-->
        <li>
            <a href="{{ route('Students.index') }}"><i class="fas fa-user-tie fa-fw"></i><span class="right-nav-text">قائمة الطلاب</span></a>
        </li>

        <!-- Enrollments-->
        <li>
            <a href="{{ route('Enrollments.index') }}"><i class="fa fa-sign-in"></i><span class="right-nav-text">تسجيل الطلاب</span></a>
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

    </ul>
</div>



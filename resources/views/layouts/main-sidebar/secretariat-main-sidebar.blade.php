{{-- <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar"  style="font-family: 'Cairo', sans-serif">
<!-- Sidebar user panel -->
<div class="user-panel">
<div class="pull-right image">
    @if (isset(Auth::user()->name))

    <img src="{{ asset('/attachments/Admins/' . Auth::user()->image ) }}" class="img-circle" alt="{{ Auth::user()->name }}" >

</div>
<div class="pull-left info">
    <p>{{auth()->user()->name}}</p>


</div>
@endif
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
<div class="input-group">
    <input type="text" name="q" class="form-control" placeholder="بحـث ...">
    <span class="input-group-btn">
    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
    </span>
</div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
<li class="header">برنامـج عبدالوهـاب لإدارة المدارس</li>
<li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> الرئيسيـة</a></li>

<li class="treeview">
    <a href="#">
    <i class="fas fa-user-tie fa-fw"></i>
    <span>الطـلاب</span>
    <i class="fa fa-angle-left pull-left"></i>
    </a>
    <ul class="treeview-menu">
    <li><a href="{{route('Students.index')}}"><i class="fa fa-circle-o"></i> قائمة الطـلاب</a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#">
    <i class="fas fa-books"></i>
    <span>الحصـص الدراسية</span>
    <i class="fa fa-angle-left pull-left"></i>
    </a>
    <ul class="treeview-menu">
    <li><a href="{{route('Classes.index')}}"><i class="fa fa-circle-o"></i> قائمة الحصـص الدراسية</a></li>
    <li><a href="{{ route('Classes_Teacher.index') }}"><i class="fa fa-circle-o"></i> قائمة حصـص المعلمين</a></li>
    </ul>
</li>



</ul>
</section>
</aside> --}}

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



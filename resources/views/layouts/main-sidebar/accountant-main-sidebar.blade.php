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
    <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i> <!-- this -->
    <span>الحسابـات</span>
    <i class="fa fa-angle-left pull-left"></i>
    </a>
    <ul class="treeview-menu">
    <li><a href="{{route('Fees_Invoices.index')}}"><i class="fa fa-circle-o"></i> الفـواتيـر الدراسيـة</a></li>
    <li><a href="{{ route('Receipts.index') }}"><i class="fa fa-circle-o"></i> سندات القبض (تسـديـد رسـوم)</a></li>
    <li><a href="{{route('ProcessingFee.index')}}"><i class="fa fa-circle-o"></i> أستبـعاد رسـوم طـالـب </a></li>
    <li><a href="{{route('Payments.index')}}"><i class="fa fa-circle-o"></i> سـندات الصـرف </a></li>
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


        <!-- Accounts-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                <div class="pull-left"><i class="fa fa-dollar highlight-icon" aria-hidden="true"></i><span
                        class="right-nav-text">الحسابات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                {{-- <li><a href="{{route('Fees.index')}}"> الرسـوم الدراسيـة</a></li> --}}
                <li><a href="{{route('Fees_Invoices.index')}}"> الفـواتيـر الدراسيـة</a></li>
                <li><a href="{{ route('Receipts.index') }}"> سندات القبض (تسـديـد رسـوم)</a></li>
                <li><a href="{{route('ProcessingFee.index')}}"> أستبـعاد رسـوم طـالـب </a></li>
                <li><a href="{{route('Payments.index')}}"> سـندات الصـرف </a></li>
            </ul>
        </li>




    </ul>
</div>



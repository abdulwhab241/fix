    <!--=================================
header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="font-family: 'Cairo', sans-serif">
<!-- logo -->
<div class="text-left navbar-brand-wrapper">
<a class="navbar-brand brand-logo" href="{{ url('/teacher/dashboard') }}"><img src="{{ URL::asset('assets/images/log.png') }}" alt=""></a>
<a class="navbar-brand brand-logo-mini" href="{{ url('/teacher/dashboard') }}"><img src="{{ URL::asset('assets/images/lo.jpg') }}"
alt=""></a>


</div>
<!-- Top bar left -->
<ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
        <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
            href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
    <li class="nav-item">
        <div class="search">
            <a class="search-btn not_click" href="javascript:void(0);"></a>
            <div class="search-box not-click">
                <input type="text" class="not-click form-control" placeholder="Search" value=""
                    name="search">
                <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
            </div>
        </div>
    </li>
</ul>
<!-- top bar right -->
<ul class="nav navbar-nav ml-auto">

    <li class="nav-item fullscreen">
        <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
    </li>
    <li class="nav-item dropdown ">
        <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">
            <i class="ti-bell"></i>
            <span class="badge badge-danger notification-status"> {{ Auth::User()->unreadNotifications->count() }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
            <div class="dropdown-header notifications">
                <strong>لـديـك {{ Auth::User()->unreadNotifications->count() }} إشـعـارات</strong>
                <span class="badge badge-pill badge-warning" >{{ Auth::User()->unreadNotifications->count() }}</span>
            </div>
            <div class="dropdown-divider"></div>
            @foreach (Auth::User()->unreadNotifications as $Notification)


            @endforeach
            @if(Auth::User()->unreadNotifications->count() > 0)
            <a href="{{ route('Read') }}" class="footer dropdown-item text-center">قـرائـة جميـع الإشعـارات</a>
            @else
            <p class="footer text-center">لا يوجد إشعـارات لقـرائتـها </p>
            @endif
        </div>
        
    </li>



<li class="nav-item dropdown mr-30">
    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('/attachments/Profile/' . Auth::user()->image ) }}" class="img-circle" alt="{{ Auth::user()->name }}">
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-0"> أ. {{ Auth::user()->name }}</h5>
                </div>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{route('TeacherProfile.show')}}"><i class="text-warning ti-user"></i>الملف الشخصي</a>

        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout_teacher','teacher') }}">
            @csrf
        <button class="dropdown-item btn btn-info" ><i class="fa fa-sign-out fa-1x"></i>تسجيل خروج</button>
        </form>
    
    </div>
</li>
</ul>
</nav>

<!--=================================
header End-->



{{-- <header class="main-header"  style="font-family: 'Cairo', sans-serif">
<!-- Logo -->
<a href="#" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><b>A.</b>P.S</span>
<!-- logo for regular state and mobile devices -->
<span class="logo-lg"><b>Abdulwhab.</b>S.M.P</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
<span class="sr-only">Toggle navigation</span>
</a>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
    <!-- Messages: style can be found in dropdown.less-->
    <li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-info">{{ Auth::User()->unreadNotifications->count() }}</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">لـديـك {{ Auth::User()->unreadNotifications->count() }} إشـعـارات</li>
        <li>
        <!-- inner menu: contains the actual data -->

        <ul class="menu">
            @foreach (Auth::User()->unreadNotifications as $Notification)
            <li><!-- start message -->
                @isset($Notification->data['grade_name'])
            <a href="{{ route('Grades.show',$Notification->data['Grade_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة  
\                        <span> {{ $Notification->data['grade_name'] }}</span>
                    الى المراحل الدراسية </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['name_class'])
            <a href="{{ route('Classrooms.show',$Notification->data['classroom_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['name_class'] }}</span>
                    الى الصـفـوف الدراسية </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['name_section'])
            <a href="{{ route('Sections.show',$Notification->data['section_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة القسـم  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['name_section'] }}</span>
                    الى الأقسـام الدراسية </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['student_name'])
            <a href="{{ route('show_student',$Notification->data['student_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة الطـالـب  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['student_name'] }}</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['teacher_name'])
            <a href="{{ route('Teachers.show',$Notification->data['teacher_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة الأستـاذ  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['teacher_name'] }}</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['fee_name'])
            <a href="{{ route('Fees.show',$Notification->data['fee_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة رسـوم دراسيـة بقيمـة   
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['fee_name'] }}</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['fee_invoice_name'])
            <a href="{{ route('show_fee_invoice',$Notification->data['fee_invoice_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة فـاتـورة دراسيـة بقيمـة  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['fee_invoice_name'] }} ريال</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['receipt_name'])
            <a href="{{ route('show_receipt',$Notification->data['receipt_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  تسـديـد رسـوم دراسيـة بقيمـة  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['receipt_name'] }} ريال</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['processing_name'])
            <a href="{{ route('show_processing',$Notification->data['processing_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إستبـعاد رسـوم بقيمـة  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['processing_name'] }} ريال</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['payment_name'])
            <a href="{{ route('show_payment',$Notification->data['payment_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  صـرف مبلـغ بقيمـة  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['payment_name'] }} ريال</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['subject_name'])
            <a href="{{ route('Subjects.show',$Notification->data['subject_id']) }}">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة مـادة  
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['subject_name'] }}</span>
                    الى المـواد الدراسية </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            
            @isset($Notification->data['quiz_name'])
            <a href="{{ route('Quizzes.show',$Notification->data['quiz_id']) }}">

                <h5 style="font-weight: bolder;">     
                    <span style="font-weight: bolder; padding:5px;"> {{ $Notification->data['quiz_name'] }}</span>
                    اضـاف إختبـار </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['add_student_grade_name'])
            <a href="{{ route('Student_Grades.show',$Notification->data['add_student_grade_id']) }}">
                <h4 style="padding: 5px;">
                    قـام الأستـاذ  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  بـإضـافـة محصـلة الطـالـب  
                    <span> {{ $Notification->data['add_student_grade_name'] }}</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['edit_student_grade_name'])
            <a href="{{ route('edit_notification',$Notification->data['edit_student_grade_id']) }}">
                <h4 style="padding: 5px;">
                    قـام الأستـاذ  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  بـتعـديـل محصـلة الطـالـب  
                    <span> {{ $Notification->data['edit_student_grade_name'] }}</span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

            @isset($Notification->data['result_name'])
            <a href="{{ route('Results.show',$Notification->data['result_id']) }}">
                <h4>
                    قـام الأستـاذ   {{$Notification->data['create_by']}} 
                </h4>
                <h5 >     بـإضـأفـة نتيجـة الطـالـب   
                    <span style="font-weight: bolder; padding:5px;">  {{ $Notification->data['result_name'] }} , لشـهر {{ $Notification->data['result_month'] }} </span>
                </h5>
                <small><i class="fa fa-clock-o"></i>{{$Notification->created_at->diffForHumans()}}</small>
            </a>
            @endisset

    
            </li><!-- end message -->
            @endforeach

        </ul>
        </li>
        <li class="footer"><a href="{{ route('Notification.Read') }}">قـرائـة جميـع الإشعـارات</a></li>
    </ul>
    </li>
    @if (isset(Auth::user()->name))
    <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ asset('/attachments/Admins/' . Auth::user()->image ) }}" class="user-image" alt="{{ Auth::user()->name }}" >
        <span class="hidden-xs">{{auth()->user()->name}}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{ asset('/attachments/Admins/' . Auth::user()->image ) }}" class="img-circle" alt="{{ Auth::user()->name }}">
        <p>
            {{auth()->user()->name}}
        </p>
        </li>
        @endif
        <!-- Menu Body -->
        <li class="user-body">
        <div class="col-xs-6 text-center">
            <a href="#">{{auth()->user()->job}}</a>
        </div>
        <div class="col-xs-6 text-center">
            <a href="#">{{auth()->user()->phone_number}}</a>
        </div>

        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
        <div class="pull-right">
            <a href="{{ route('show_profile') }}" class="btn btn-default btn-flat">الملف الشخصي</a>
        </div>
        <div class="pull-left">

        <form method="POST" action="{{ route('logout','web') }}">
        @csrf
        <button class="btn btn-info  btn-flat">
            <i class="fa fa-sign-out fa-1x" aria-hidden="true"></i>
            تسجيل الخروج</button>
        </form>
        </div>
        </li>
    </ul>
    </li>
</ul>
</div>

</nav>

</header> --}}



<!--=================================
header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
<!-- logo -->
<div class="text-left navbar-brand-wrapper">
<a class="navbar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{ URL::asset('assets/images/log.png') }}" alt=""></a>
<a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img src="{{ URL::asset('assets/images/logo-icon-dark.png') }}"
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
            <span class="badge badge-danger notification-status"> </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
            <div class="dropdown-header notifications">
                <strong>لـديـك {{ Auth::User()->unreadNotifications->count() }} إشـعـارات</strong>
                <span class="badge badge-pill badge-warning">{{ Auth::User()->unreadNotifications->count() }}</span>
            </div>
            <div class="dropdown-divider"></div>
            @foreach (Auth::User()->unreadNotifications as $Notification)



            @isset($Notification->data['grade_name'])
            <a href="{{ route('Grades.show',$Notification->data['Grade_id']) }}" class="dropdown-item">
                <h4>
                    تـم بـواسطـة  {{$Notification->data['create_by']}} 
                </h4>
                <h5 style="font-weight: bolder;">  إضـافـة  
                    <span> {{ $Notification->data['grade_name'] }}</span>
                الى المراحل الدراسية </h5>
                <small class="float-right text-muted time">
                    {{$Notification->created_at->diffForHumans()}}
                </small> 
            </a>
            @endisset
            {{-- <a href="#" class="dropdown-item">New invoice received <small
                    class="float-right text-muted time">22 mins</small> </a>
            <a href="#" class="dropdown-item">Server error report<small
                    class="float-right text-muted time">7 hrs</small> </a>
            <a href="#" class="dropdown-item">Database report<small class="float-right text-muted time">1
                    days</small> </a>
            <a href="#" class="dropdown-item">Order confirmation<small class="float-right text-muted time">2
                    days</small> </a> --}}
            @endforeach
            <a href="{{ route('Notification.Read') }}" class="footer dropdown-item text-center" > قـرائـة جميـع الإشعـارات</a>
        </div>
        
    </li>



<li class="nav-item dropdown mr-30">
    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('/attachments/Admins/' . Auth::user()->image ) }}" class="img-circle" alt="{{ Auth::user()->name }}">
        {{-- <img src="assets/images/profile-avatar.jpg" alt="avatar"> --}}
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-0">{{ Auth::user()->name }}</h5>
                    <span>{{ Auth::user()->job }}</span>
                </div>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('show_profile') }}"><i class="text-warning ti-user"></i>الملف الشخصي</a>

        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout','web') }}">
            @csrf
        <button class="dropdown-item btn btn-info" ><i class="fa fa-sign-out fa-1x"></i>تسجيل خروج</button>
        </form>
    
    </div>
</li>
</ul>
</nav>

<!--=================================
header End-->


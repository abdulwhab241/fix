<!DOCTYPE html>
<html lang="ar">
@section('title')
برنامج عبدالوهاب لإدارة المدارس
@stop
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="برنامج عبدالوهاب لإدارة المدارس " />
    <meta name="copyright" content="Abdulwhab Mohammed" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    @include('layouts.head')
</head>

<body style="font-family: 'Cairo', sans-serif;">


<div class="wrapper">

<!--=================================
preloader -->

<div id="pre-loader">
<img src="/assets/images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
preloader -->

@include('layouts.header')

@include('layouts.main-sidebar')

<!--=================================
Main content -->
<!-- main-content -->
<div class="content-wrapper">
<div class="page-title">
<div class="row">
<div class="col-sm-6">
    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif">
        لـوحـة تحـكـم الأستـاذ : <label style="color: #5686E0"> {{auth()->user()->name}} </label>   
</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
    </ol>
</div>
</div>
</div><br><br>
<!-- widgets -->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                        <span class="text-success">
                            <i class="fas fa-user-graduate highlight-icon" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="float-right text-right">
                    <p class="card-text text-dark">عدد الطلاب</p>
                    <h4>{{$count_students}}</h4>
                </div>
            </div>
            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('student.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
            </p>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                    <span class="text-warning">
                        <i class="fas fa-chalkboard highlight-icon" aria-hidden="true"></i>                                    </span>
                </div>
                <div class="float-right text-right">
                    <p class="card-text text-dark">عـدد الاقسـام</p>
                    <h4>{{$count_sections}}</h4>
                </div>
            </div>
            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('sections')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
            </p>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                    <span class="text-success">
                        <i class="fa fa-building highlight-icon" aria-hidden="true"></i>                                    </span>
                </div>
                <div class="float-right text-right">
                    <p class="card-text text-dark">عـدد الـصـفـوف الـدراسـيـة</p>
                    <h4>{{$count_classrooms}}</h4>            
                </div>
            </div>
        
            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('TeacherClassrooms')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
            </p>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                    <span class="text-primary">
                        <i class="fa fa-book highlight-icon" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="float-right text-right">
                    <p class="card-text text-dark">عـدد المـواد الـدراسـيـة</p>
                    <h4>{{$count_subjects}}</h4>
                </div>
            </div>
            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('Subjects_Teacher')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
            </p>
        </div>
    </div>
    </div>
    </div>



<!--=================================
wrapper -->

<!--=================================
footer -->

@include('layouts.footer')
</div><!-- main content wrapper end-->
</div>



<!--=================================
footer -->

@include('layouts.footer-scripts')




</body>

</html>

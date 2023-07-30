<!DOCTYPE html>
<html lang="ar">
@section('title')
برنامج عبدالوهاب لإدارة المدارس
@stop
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="برنامج عبدالوهاب لإدارة المدارس" />
<meta name="copyright" content="Abdulwhab Mohammed" />
<meta name="keywords" content="HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
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
    لـوحـة تحـكـم :        <label style="color: #5686E0">الـ{{ auth()->user()->job }}</label> <span>{{ auth()->user()->name }}</span>    
</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
    </ol>
</div>
</div>
</div>
@if (Auth::user()->job == 'ادمن')
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
                <h4>{{App\Models\Student::count()}}</h4>
            </div>
        </div>
        <p class="text-muted pt-3 mb-0 mt-2 border-top">
            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('Students.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
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
                    <i class="fas fa-chalkboard-teacher highlight-icon" aria-hidden="true"></i>                                    </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text text-dark">عدد المعلمين</p>
                <h4>{{\App\Models\Teacher::count()}}</h4>
            </div>
        </div>
        <p class="text-muted pt-3 mb-0 mt-2 border-top">
            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('Teachers.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
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
                    <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>                                    </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text text-dark">عـدد الفواتير الـدراسيـة</p>
                <h4>{{App\Models\FeeInvoice::count()}}</h4>
            </div>
        </div>
    
        <p class="text-muted pt-3 mb-0 mt-2 border-top">
            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('Fees_Invoices.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
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
                    <i class="fa fa-building highlight-icon" aria-hidden="true"></i>
                </span>
            </div>
            <div class="float-right text-right">
                <p class="card-text text-dark">عدد الصفوف الدراسية</p>
                <h4>{{\App\Models\Section::count()}}</h4>
            </div>
        </div>
        <p class="text-muted pt-3 mb-0 mt-2 border-top">
            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('Classrooms.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
        </p>
    </div>
</div>
</div>
</div>
<!-- Orders Status widgets-->
<div class="row">
<div  style="height: 400px;" class="col-xl-12 mb-30">
<div class="card card-statistics h-100">
    <div class="card-body">
        <div class="tab nav-border" style="position: relative;">
            <div class="d-block d-md-flex justify-content-between">
                <div class="d-block w-100">
                    <h5 style="font-family: 'Cairo', sans-serif" class="card-title">اخر العمليات علي النظام</h5>
                </div>
                <div class="d-block d-md-flex nav-tabs-custom">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        
                    <li class="nav-item">
                        <a class="nav-link active show" id="students-tab" data-toggle="tab"
                            href="#students" role="tab" aria-controls="students"
                            aria-selected="true"> الطلاب</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="teachers-tab" data-toggle="tab" href="#teachers"
                            role="tab" aria-controls="teachers" aria-selected="false">المعلمين
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" id="parents-tab" data-toggle="tab" href="#parents"
                                role="tab" aria-controls="parents" aria-selected="false"> الفواتير الـدراسيـة
                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="fee_invoices-tab" data-toggle="tab" href="#fee_invoices"
                            role="tab" aria-controls="fee_invoices" aria-selected="false">سندات القبض
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">

                {{--students Table--}}
                <div class="tab-pane fade active show" id="students" role="tabpanel" aria-labelledby="students-tab">
                    <div class="table-responsive mt-15">
                        <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                            <thead>
                            <tr  class="table-info text-danger">
                            <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >#</th>
                            <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >أسم الطالب</th>
                            <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" > النوع</th>
                            <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >المرحلة الدراسية</th>
                            <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >الصف الدراسي</th>
                            <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" > الشعـبة</th>
                            <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >تاريـخ التسجيل</th>
    
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(\App\Models\Student::latest()->take(10)->get() as $student)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->gender->name}}</td>
                                    <td>{{$student->grade->name}}</td>
                                    <td>{{$student->classroom->name_class}}</td>
                                    <td>{{$student->section->name_section}}</td>
                                    <td class="text-success">{{$student->created_at}}</td>
                                    @empty
                                        <td class="alert-danger" colspan="8">لاتوجد بيانات</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                        
                {{--teachers Table--}}
                <div class="tab-pane fade" id="teachers" role="tabpanel" aria-labelledby="teachers-tab">
                    <div class="table-responsive mt-15">
                        <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                            <thead>
                            <tr  class="table-info text-danger">
                                <th>#</th>
                                <th>اسم المعلم</th>
                                <th>النوع</th>
                                <th>تاريخ التعين</th>
                                <th>التخصص</th>
                                <th>تاريخ الاضافة</th>
                            </tr>
                            </thead>

                            @forelse(\App\Models\Teacher::latest()->take(5)->get() as $teacher)
                                <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->genders->name}}</td>
                                    <td>{{$teacher->specializations->name}}</td>
                                    <td>{{$teacher->joining_date}}</td>
                                    <td class="text-success">{{$teacher->created_at}}</td>
                                    @empty
                                        <td class="alert-danger" colspan="8">لاتوجد بيانات</td>
                                </tr>
                                </tbody>
                            @endforelse
                        </table>
                    </div>
                </div>

            
            {{--parents Table--}}
            <div class="tab-pane fade" id="parents" role="tabpanel" aria-labelledby="parents-tab">
                <div class="table-responsive mt-15">
                    <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                        <thead>
                        <tr  class="table-info text-danger">
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >#</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >أسم الطالب</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" > المرحلة الدراسية</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >الصف الدراسي</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >نوع الرسوم</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >المبلغ</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >تاريـخ الإضافة</th>
    
                        </tr>
                        </thead>
                        <tbody>
                        @forelse(\App\Models\FeeInvoice::latest()->take(10)->get() as $feeinvoice)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$feeinvoice->student->name}}</td>
                        <td>{{$feeinvoice->grade->name}}</td>
                        <td>{{$feeinvoice->classroom->name_class}}</td>
                        <td>{{$feeinvoice->fees->title}}</td>
                        <td>{{ number_format($feeinvoice->amount) }} ريال </td>
                        <td class="text-success">{{$feeinvoice->invioce_date}}</td>
                        @empty
                            <td class="alert-danger" colspan="8">لاتوجد بيانات</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{--sections Table--}}
            <div class="tab-pane fade" id="fee_invoices" role="tabpanel" aria-labelledby="fee_invoices-tab">
                <div class="table-responsive mt-15">
                    <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                        <thead>
                        <tr  class="table-info text-danger">
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >#</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >أسم الطالب</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" > المبلغ</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >البيان</th>
                        <th style="text-align: center; background-color: #D0DEF6; font-weight:bolder;" >تاريـخ التسديد</th>
    
                        </tr>
                        </thead>
                        <tbody>
                        @forelse(\App\Models\ReceiptStudent::latest()->take(10)->get() as $receipt)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$receipt->student->name}}</td>
                            <td>{{ number_format($receipt->Debit) }} ريال </td>
                            <td>{{$receipt->description}}</td>
                            <td class="text-success">{{$receipt->date}}</td>
                        </tr>
                        @empty
                            <tr>
                                <td class="alert-danger" colspan="9">لاتوجد بيانات</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
</div>
</div>
</div>
@endif




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

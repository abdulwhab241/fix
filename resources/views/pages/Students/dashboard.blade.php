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
        لـوحـة تحـكـم الـطـالـب : <label style="color: #5686E0"> {{auth()->user()->name}} </label>   
</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
    </ol>
</div>
</div>
</div>
<!-- widgets -->
<div class="row">
    <div class="table-responsive">
        <div class="card card-statistics h-100">
            <div class="card-body">
        <table class="table table-hover table-sm table-bordered p-0" style="text-align: center">
        <tbody>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;"  >أسـم الطـالـب \ الطـالبـة</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->name }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >الجنـس</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->gender->name }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >تـاريـخ الميـلاد</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->birth_date }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >المـرحلـة الدراسيـة</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->grade->name }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >الصـف الدراسـي</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->classroom->name_class }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >الشعبـة</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->section->name_section }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >أسـم الأب</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->father_name }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >جهـة العمـل</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->employer }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >الوظيـفة</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->father_job }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >هـاتـف العمـل</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->job_phone }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >هـاتـف المنـزل</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->home_phone }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >العنـوان</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->address }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >أسـم الأم</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->mother_name }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >هـاتـف الأم</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->mother_phone }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >وظيفـة الأم</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->mother_job }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >تاريخ التسجيل</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->created_at }}</td>
            </tr>
            <tr>
                <th style="text-align: center; width: 30%; background-color: #D0DEF6; color:black;" >السنـة الدراسيـة</th>
                <td style="text-align: center; width: 70%;" >{{ auth()->user()->academic_year }}</td>
            </tr>
    </tbody>
    </table>
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

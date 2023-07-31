@extends('layouts.master')
@section('css')

<style>
    @media print {
        #print_Button {
            display: none;
        }
    }

</style>

@section('title')
    طبـاعـة كشـف درجـات الطـلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0" style="color: cornflowerblue; font-family: Cairo;">    
                محـصـلـة    {{ $Classrooms->My_Classes->name_class }}   <span>  الـشـعبـة: {{ $Classrooms->name_section }}   </span>                 
        </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">       طبـاعـة كشـف درجـات الطـلاب</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
        طبـاعـة كشـف درجـات الطـلاب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<div class="col-xl-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body" id="print">
    <div class="box-header" style="margin: 20px;">

        <div class="row">
            
        <div class="col-md-4 text-center">            
        <p style="font-weight: bolder;">الجمهورية اليمنية</p>
        <p style="font-weight: bolder;">وزارة التربية والتعليم</p>
        <p style="font-weight: bolder;">مكتب التربية والتعليم بالأمانة قطاع التعليم الأهلي</p>
        <p style="font-weight: bolder;">مديرية معين التعليمية</p>
        <p style="font-weight: bolder;">مدارس.............. الأهلية</p>
        </div>
        
        <div class="col-md-4 text-center">
        <p style="font-weight: bolder; font-size:20px;">بسم الله الرحمن الرحيم </p>
        </div>

        <div class="col-md-4 text-center">            
            <img src="/images/Emblem.png" style="width: 40%;" class="img-fluid  border-0">
        </div>

        </div>
    </div>
<br>
<div class="table-responsive" >
    <h6 style="color: cornflowerblue; font-family: Cairo; font-weight: bold; text-align: center; margin: 10px;">
        محـصـلـة    {{ $Classrooms->My_Classes->name_class }}   <span>  الـشـعبـة: {{ $Classrooms->name_section }}   </span>    
    </h6>
    <table class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;">#</th>
            <th style="text-align: center;">الفـصل الدراسي</th>
            <th style="text-align: center;">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center;">المادة</th>
            <th style="text-align: center; background-color: yellow; font-weight:bolder;"> محصـلـة شهـر</th>
            <th style="text-align: center;">واجبـات</th>
            <th style="text-align: center;"> شفهـي</th>
            <th style="text-align: center;">مـواظبـة </th>
            <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;"> تحريري</th>
            <th style="text-align: center; background-color: #FFC0D6; font-weight:bolder;"> المحصـلة</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($Classrooms->StudentGrades as $StudentGrade)
                <tr>
                    <?php $i++; ?>
                    <td>{{ $i }}</td>
                    <td>{{ $StudentGrade->semester->name }}</td>
                    <td>{{$StudentGrade->student->name}}</td>
                    <td>{{$StudentGrade->subject->name}}</td>
                    <td style="background-color: #E7EEFB; font-weight:bolder;">{{ $StudentGrade->month->name }}</td>
                    <td>{{$StudentGrade->homework}}</td>
                    <td>{{ $StudentGrade->verbal }}</td>
                    <td>{{ $StudentGrade->attendance }}</td>
                    <td style="background-color: #E7EEFB; font-weight:bolder;">{{ $StudentGrade->result }}</td>
                    <td style="background-color: #FFC0D6; font-weight:bolder;">{{ $StudentGrade->total }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="footer">
        <button class="btn btn-info pull-left" id="print_Button" onclick="printDiv()"> 
        <i class="fa fa-print" aria-hidden="true"></i> طباعة  </button>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
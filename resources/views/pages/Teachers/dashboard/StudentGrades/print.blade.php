@extends('layouts.master')
@section('css')

@section('title')
    طبـاعـة كشـف درجـات الطـلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    
                محـصـلـة    {{ $Classrooms->My_Classes->name_class }} , الـشـعبـة: {{ $Classrooms->name_section }} 
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
<div class="card-body">
<a href="{{route('Users.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة مستخدم جديد</a><br><br>
<div class="table-responsive" id="print">
    <h6 style="font-weight: bolder; text-align:center; margin:5px;">
        محـصـلـة    {{ $Classrooms->My_Classes->name_class }} , الـشـعبـة: {{ $Classrooms->name_section }} 
    </h6>
    <table class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;">#</th>
            <th style="text-align: center; background-color: yellow; font-weight:bolder;"> محصـلـة شهـر</th>
            <th style="text-align: center;">الفـصل</th>
            <th style="text-align: center;"> الأستـاذ</th>
            <th style="text-align: center;">أسـم الطـالـب \ الطـالبـة</th>
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
                    <td style="background-color: yellow; font-weight:bolder;">{{ $StudentGrade->month->name }}</td>
                    <td>{{ $StudentGrade->semester->name }}</td>
                    <td>{{$StudentGrade->teacher->name}}</td>
                    <td>{{$StudentGrade->student->name}}</td>
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
        <button class="btn .btn.bg-navy  pull-left" id="print_Button" onclick="printDiv()"> 
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
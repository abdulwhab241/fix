@extends('layouts.master')
@section('css')

@section('title')
الإشـعـارات
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    
                تعـديـل محصـلـة الطـالـب  <label style="color: #5686E0">{{$StudentGrade->student->name}}</label> 
            </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   الإشـعـار</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    الإشـعـار
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
<br>
<div class="table-responsive">
    <table class="table  table-hover table-sm table-bordered p-0" style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: yellow;" >محصـلـة شهـر</th>
            <th style="text-align: center; background-color: #D0DEF6;">الفـصل</th>
            <th style="text-align: center; background-color: #D0DEF6;">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">واجبـات</th>
            <th style="text-align: center; background-color: #D0DEF6;">شفهـي</th>
            <th style="text-align: center; background-color: #D0DEF6;">مـواظبـة</th>
            <th style="text-align: center; background-color: #E7EEFB;">تحريري</th>
            <th style="text-align: center; background-color: #FFC0D6;"> المحصـلة</th>
            <th style="text-align: center; background-color: #D0DEF6;">الأستـاذ</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: yellow; font-weight:bolder;">{{ $StudentGrade->month->name }}</td>
                <td>{{$StudentGrade->semester->name}}</td>
                <td>{{$StudentGrade->student->name}}</td>
                <td>{{$StudentGrade->homework }}</td>
                <td>{{$StudentGrade->verbal}}</td>
                <td>{{ $StudentGrade->attendance }}</td>
                <td style="background-color: #E7EEFB; font-weight:bolder;">{{ $StudentGrade->result }}</td>
                <td style="background-color: #FFC0D6; font-weight:bolder;">{{ $StudentGrade->total }}</td>
                <td>{{ $StudentGrade->teacher->name }}</td>
            </tr>
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
<!-- row closed -->
@endsection
@section('js')

@endsection

@extends('layouts.master')
@section('css')

@section('title')
البيـانـات الشخصيـة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    البيـانـات الشخصيـة</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   البيـانـات الشخصيـة</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    البيـانـات الشخصيـة
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
@if(count($Enrollments) > 0)
<div class="table-responsive">
    <table class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">المرحلة الدراسية</th>
            <th style="text-align: center; background-color: #D0DEF6;">الصـف الدراسي</th>
            <th style="text-align: center; background-color: #D0DEF6;">الشعبـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">السنة الدراسية</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($Enrollments as $Enrollment)
            <tr>
                <td>{{$Enrollment->student->name}}</td>
                <td>{{$Enrollment->grade->name}}</td>
                <td>{{$Enrollment->classroom->name_class}}</td>
                <td>{{$Enrollment->section->name_section}}</td>
                <td>{{$Enrollment->year }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @else
    <h1 style="margin: 10px; padding:10px; font-weight: bold; text-align: center; background-color:#85A8CF; ">
    <marquee direction="right">
        <b style="font-weight: bold; font-size:larger; color:white; margin: 10px;">
            عـذراً لـم يتـم تسجيـلك لـهذي السـنة الـدراسيـة راجـع الإدارة 
        </b>
    </marquee>
    </h1>
@endif
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
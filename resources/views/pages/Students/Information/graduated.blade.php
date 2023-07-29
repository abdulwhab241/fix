@extends('layouts.master')
@section('css')

@section('title')
معلـومـات التخـرج
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    معلـومـات التخـرج</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   معلـومـات التخـرج</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    معلـومـات التخـرج
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
@if($Graduations->count() > 0)
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;">أسـم الطـالـب</th>
            <th style="text-align: center; background-color: #D0DEF6;">المرحلـة الدراسيـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">الصـف الدراسـي</th>
            <th style="text-align: center; background-color: #D0DEF6;">الشعـبة</th>
            <th style="text-align: center; background-color: #D0DEF6;"> تـاريـخ التـخرج</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($Graduations as $graduated)
            <tr>
                <td>{{$graduated->student->name}}</td>
                <td>{{$graduated->grade->name}}</td>
                <td>{{$graduated->classroom->name_class}}</td>
                <td style="font-weight: bolder;">{{$graduated->section->name_section}}</td>
                <td>{{$graduated->date }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @else
<h1 style="margin: 10px; padding:10px; font-weight: bold; text-align: center; background-color:#85A8CF; ">
    <marquee direction="right">
        <b style="font-weight: bold; font-size:larger; color:white; margin: 10px;">
                عـذراً لا يـوجـد معلـومـات عـن التخـرج
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
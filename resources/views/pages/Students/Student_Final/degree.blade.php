@extends('layouts.master')
@section('css')

@section('title')
كـشـف الـدرجـات
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
    <h4 class="mb-0">    كـشـف الـدرجـات</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
        <li class="breadcrumb-item active">   كـشـف الـدرجـات</li>
    </ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
كـشـف الـدرجـات
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
@if(count($Student_Grades) > 0)
<div class="table-responsive">
<table id="datatable" class="table  table-hover table-sm table-bordered p-0"
    data-page-length="50"
    style="text-align: center">
<thead>
<tr class="alert-success">
    <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">الفـصل الدراسي</th>
    <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">الأستـاذ</th>
    <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">المادة</th>
    <th style="text-align: center; background-color: yellow; font-weight:bolder;" >محصـلـة شهـر</th>
    <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">واجبـات</th>
    <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">شفهـي</th>
    <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">مـواظبـة</th>
    <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">تحريري</th>
    <th style="text-align: center; background-color: #FFC0D6; font-weight:bolder;"> المحصـلة</th>
</tr>
</thead>
<tbody>
    @foreach ($Student_Grades as $Student_Grade)
    <tr>
        <td>{{$Student_Grade->semester->name}}</td>
        <td>{{$Student_Grade->teacher->name}}</td>
        <td>{{$Student_Grade->subject->name}}</td>
        <td style="background-color: yellow; font-weight:bolder;">{{ $Student_Grade->month->name }}</td>
        <td>{{$Student_Grade->homework }}</td>
        <td>{{$Student_Grade->verbal}}</td>
        <td>{{ $Student_Grade->attendance }}</td>
        <td style="background-color: #E7EEFB; font-weight:bolder;">{{ $Student_Grade->result }}</td>
        <td style="background-color: #FFC0D6; font-weight:bolder;">{{ $Student_Grade->total }}</td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@else
<h1 style="margin: 10px; padding:10px; font-weight: bold; text-align: center; background-color:#85A8CF; ">
<marquee direction="right">
<b style="font-weight: bold; font-size:larger; color:white; margin: 10px;">
    عـذراً لا يـوجـد كـشـف درجـات لعـرضـها 
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
@extends('layouts.master')
@section('css')

@section('title')
النـتائـج الشهرية
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    النـتائـج الشهرية</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   النـتائـج الشهرية</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    النـتائـج الشهرية
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
@if(count($Result) > 0)
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;" >إختبـار شهـر</th>
            <th style="text-align: center; background-color: #D0DEF6;" >المـادة</th>
            <th style="text-align: center; background-color: #D0DEF6;" > الـدرجـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >التقـديـر</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($Result as $Student)
            <tr>
                <td style="background-color: #D0DEF6; font-weight: bolder;">{{ $Student->month->name }}</td>
                <td>{{ $Student->exam->subject->name }}</td>
                <td>{{$Student->marks_obtained}}</td>
                <td>{{$Student->appreciation}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @else
<h1 style="margin: 10px; padding:10px; font-weight: bold; text-align: center; background-color:#85A8CF; ">
    <marquee direction="right" style="margin: 10px; padding: 10px;">
        <b style="font-weight: bold; font-size:larger; color:white; margin: 10px; padding: 20px;">
            لا يـوجـد نتـائـج شهـريـة لعـرضـها 
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
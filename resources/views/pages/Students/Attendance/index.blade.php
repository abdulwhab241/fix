@extends('layouts.master')
@section('css')

@section('title')
بيـانـات المـواظبـة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    بيـانـات المـواظبـة</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li><a href="{{ route('dashboard.Students') }}" class="default-color"> الرئيسيـة</a></li>
                <li class="breadcrumb-item active">   بيـانـات المـواظبـة</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    بيـانـات المـواظبـة
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
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;" >اليـوم</th>
            <th style="text-align: center; background-color: #D0DEF6;" > الحـالـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" > التـاريـخ</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($Attendances as $Student)
            <tr>
    
                
                <td>{{ $Student->day }}</td>
                <td>{{ $Student->attendance_status }}</td>
                <td>{{ $Student->attendance_date }}</td>
            </tr>
    
            @endforeach
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
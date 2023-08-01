@extends('layouts.master')
@section('css')

@section('title')
جدول الحصـص
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    جدول الحصـص</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   جدول الحصـص</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    جدول الحصـص
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
@if(count($StudentClass) > 0)
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;" >اليوم</th>
            <th style="text-align: center; background-color: #D0DEF6;" >  الأولـى</th>
            <th style="text-align: center; background-color: #D0DEF6;" > الثـانيـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" > الثـالثـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" > الرابعـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >  الخـامسـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >  السـادسـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >  السـابعـة</th>
        </thead>
        <tbody>
            @foreach ($StudentClass as $Student)
            <tr>
                <td>{{ $Student->day }}</td>
                <td>{{ $Student->first }}</td>
                <td>{{ $Student->second }}</td>
                <td>{{ $Student->third }}</td>
                <td>{{ $Student->fourth }}</td>
                <td>{{ $Student->fifth }}</td>
                <td>{{ $Student->sixth }}</td>
                <td>{{ $Student->seventh }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @else
<h1 style="margin: 10px; padding:10px; font-weight: bold; text-align: center; background-color:#85A8CF; ">
    <marquee direction="right">
        <b style="font-weight: bold; font-size:larger; color:white; margin: 10px;">
            عـذراً لـم يتـم تنـزيـل الجـدول بعـد 
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
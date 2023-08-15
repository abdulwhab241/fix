@extends('layouts.master')
@section('css')

@section('title')
جدول حصـص الأسـتاذ
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    
                جدول حصـص الأسـتاذ:  <label style="color: #5686E0">{{ auth()->user()->name }}</label>
            </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   جدول حصـص الأسـتاذ</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    جدول حصـص الأسـتاذ
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<br>
<div class="table-responsive">
    <table class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;">اليوم</th>
            <th style="text-align: center; background-color: #D0DEF6;"> الحصـة الأولـى</th>
            <th style="text-align: center; background-color: #D0DEF6;"> الحصـة الثـانيـة</th>
            <th style="text-align: center; background-color: #D0DEF6;"> الحصـة الثـالثـة</th>
            <th style="text-align: center; background-color: #D0DEF6;"> الحصـة الرابعـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">  الحصـة الخـامسـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">  الحصـة السـادسـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">  الحصـة السـابعـة</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($Teacher_Classes as $TeacherClass)
            <tr>
                <td>{{ $TeacherClass->day }}</td>
                <td>{{ $TeacherClass->first }}</td>
                <td>{{ $TeacherClass->second }}</td>
                <td>{{ $TeacherClass->third }}</td>
                <td>{{ $TeacherClass->fourth }}</td>
                <td>{{ $TeacherClass->fifth }}</td>
                <td>{{ $TeacherClass->sixth }}</td>
                <td>{{ $TeacherClass->seventh }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
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
            <h4 class="mb-0">    الاشعار</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   الاشعار</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    الاشعار
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
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;" >أسم الرسوم</th>
            <th style="text-align: center; background-color: #D0DEF6;" >المبلغ</th>
            <th style="text-align: center; background-color: #D0DEF6;">التخفيض</th>
            <th style="text-align: center; background-color: #D0DEF6;" > المرحلة الدراسية</th>
            <th style="text-align: center; background-color: #D0DEF6;" >الصف الدراسي</th>
            <th style="text-align: center; background-color: #D0DEF6;" >السنة الدراسية</th>
            <th style="text-align: center; background-color: #D0DEF6;" > الملاحظات</th>
            <th style="text-align: center; background-color: #D0DEF6;" >انشـئ بواسطـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >تاريخ الإنشاء</th>
        </tr>
        </thead>
        <tbody>
            <td>{{ $Fees->title }}</td>
            <td>{{ number_format($Fees->amount) }} ريال </td>
            <td>{{$Fees->discount}}</td>
            <td>{{$Fees->grade->name}}</td>
            <td>{{$Fees->classroom->name_class}}</td>
            <td>{{$Fees->year}}</td>
            <td>{{$Fees->description}}</td>
            <td>{{$Fees->create_by}}</td>
            <td>{{$Fees->created_at->diffForHumans()}}</td>
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

{{-- 
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
الإشـعـارات 
</h1>
<ol class="breadcrumb">
<li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> الرئيسيـة</a></li>
<li class="active">الإشـعـارات</li>
</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-xs-12">
<div class="box">

    <div class="box-body table-responsive no-padding">

        <table class="table table-hover" style="width:100%; text-align: center;">
            <thead>
                <tr>
                    <th style="text-align: center; background-color: #D0DEF6;" >أسم الرسوم</th>
                    <th style="text-align: center; background-color: #D0DEF6;" >المبلغ</th>
                    <th style="text-align: center; background-color: #D0DEF6;">التخفيض</th>
                    <th style="text-align: center; background-color: #D0DEF6;" > المرحلة الدراسية</th>
                    <th style="text-align: center; background-color: #D0DEF6;" >الصف الدراسي</th>
                    <th style="text-align: center; background-color: #D0DEF6;" >السنة الدراسية</th>
                    <th style="text-align: center; background-color: #D0DEF6;" > الملاحظات</th>
                    <th style="text-align: center; background-color: #D0DEF6;" >انشـئ بواسطـة</th>
                    <th style="text-align: center; background-color: #D0DEF6;" >تاريخ الإنشاء</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $Fees->title }}</td>
                    <td>{{ number_format($Fees->amount) }} ريال </td>
                    <td>{{$Fees->discount}}</td>
                    <td>{{$Fees->grade->name}}</td>
                    <td>{{$Fees->classroom->name_class}}</td>
                    <td>{{$Fees->year}}</td>
                    <td>{{$Fees->description}}</td>
                    <td>{{$Fees->create_by}}</td>
                    <td>{{$Fees->created_at->diffForHumans()}}</td>
                    
                </tr>
            </tbody>
        </table>

    </div>

</div>
</div>
</div>
</section> --}}

@endsection
@section('js')

@endsection

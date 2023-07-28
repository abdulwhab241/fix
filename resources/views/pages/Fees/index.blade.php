@extends('layouts.master')
@section('css')

@section('title')
الرسوم الدراسية
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    الرسوم الدراسية</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   الرسوم الدراسية</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    الرسوم الدراسية
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
    <a href="{{route('Fees.create')}}" class="btn btn-success btn-sm" role="button"
    aria-pressed="true">اضافة رسوم جديدة</a><br><br>
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">الاسم</th>
            <th style="text-align: center;" class="alert-info">المبلغ</th>
            <th style="text-align: center;" class="alert-info">التخفيض</th>
            <th style="text-align: center;" class="alert-info">المرحلة الدراسية</th>
            <th style="text-align: center;" class="alert-info">الصف الدراسي</th>
            <th style="text-align: center;" class="alert-info">السنة الدراسية</th>
            <th style="text-align: center;" class="alert-info">ملاحظات</th>
            <th style="text-align: center;" class="alert-info">إجمالي المبـلغ</th>
            <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($fees as $fee)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$fee->title}}</td>
            <td>{{ number_format($fee->amount) }} ريال </td>
            <td>{{$fee->discount}} % </td>
            <td>{{$fee->grade->name}}</td>
            <td>{{$fee->classroom->name_class}}</td>
            <td>{{$fee->year}}</td>
            <td>{{$fee->description}}</td>
            <td>{{ number_format($fee->total) }} ريال </td>
            <td>{{ $fee->create_by }}</td>
                <td>
                    <div class="btn-group">
                    <a href="{{route('Fees.edit',$fee->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" aria-pressed="true"> تعديل</a>
                    <button type="button" style="margin: 3px;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_Fee{{ $fee->id }}" title="حذف">حذف</button>
                    </div>
                </td>
            </tr>
        @include('pages.Fees.Delete')
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

{{-- 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
    الرسوم الدراسية
</h1>
<ol class="breadcrumb">
<li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> الرئيسيـة</a></li>
<li class="active">الرسوم الدراسية</li>
</ol>
</section>
<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-xs-12">
<div class="box">
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="box-header">

<a href="{{route('Fees.create')}}" class="btn btn-success btn-flat" role="button"
aria-pressed="true">اضافة رسوم جديدة</a><br><br>

</div>
<div class="box-body">
<div class="box-body table-responsive no-padding">
    <table id="example1" class="table table-bordered table-striped" style="width:100%; text-align: center;">
    <thead>
    <tr>
        <th style="text-align: center;" class="alert-info">#</th>
        <th style="text-align: center;" class="alert-info">الاسم</th>
        <th style="text-align: center;" class="alert-info">المبلغ</th>
        <th style="text-align: center;" class="alert-info">التخفيض</th>
        <th style="text-align: center;" class="alert-info">المرحلة الدراسية</th>
        <th style="text-align: center;" class="alert-info">الصف الدراسي</th>
        <th style="text-align: center;" class="alert-info">السنة الدراسية</th>
        <th style="text-align: center;" class="alert-info">ملاحظات</th>
        <th style="text-align: center;" class="alert-info">إجمالي المبـلغ</th>
        <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
        <th style="text-align: center;" class="alert-warning">العمليات</th>
    </tr>
</thead>
<tbody>
    @foreach($fees as $fee)
    <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{$fee->title}}</td>
    <td>{{ number_format($fee->amount) }} ريال </td>
    <td>{{$fee->discount}} % </td>
    <td>{{$fee->grade->name}}</td>
    <td>{{$fee->classroom->name_class}}</td>
    <td>{{$fee->year}}</td>
    <td>{{$fee->description}}</td>
    <td>{{ number_format($fee->total) }} ريال </td>
    <td>{{ $fee->create_by }}</td>
        <td>
            <div class="btn-group">
            <a href="{{route('Fees.edit',$fee->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
            <button type="button" style="margin: 3px;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_Fee{{ $fee->id }}" title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
            </div>
        </td>
    </tr>
@include('pages.Fees.Delete')

@endforeach
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</section> --}}

@endsection
@section('js')

@endsection
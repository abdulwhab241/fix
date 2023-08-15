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
            <h4 class="mb-0">    الإشـعـار</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
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
<br>
<div class="table-responsive">
    <table class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;" >أسـم الطـالـب</th>
            <th style="text-align: center; background-color: #D0DEF6;" >المـادة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >الدرجـة التي حصـل عليـها</th>
            <th style="text-align: center; background-color: #D0DEF6;" > التقـديـر</th>
            <th style="text-align: center; background-color: #D0DEF6;" > إختبـار شهـر</th>
            <th style="text-align: center; background-color: #D0DEF6;" >تم بواسطـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >تاريخ الإنشاء</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $Results->student->name }}</td>
                <td>{{ $Results->exam->subject->name }}</td>
                <td>{{$Results->marks_obtained}}</td>
                <td>{{$Results->appreciation}}</td>
                <td>{{$Results->month->name}}</td>
                <td>{{$Results->create_by}}</td>
                <td>{{$Results->created_at->diffForHumans()}}</td>
                
            </tr>
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

@extends('layouts.master')
@section('css')

@section('title')
    طبـاعـة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    طبـاعـة جـدول حـصـص المعلميـن</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   طبـاعـة جـدول حـصـص المعلميـن</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    طبـاعـة جـدول حـصـص المعلميـن
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
<div class="table-responsive" id="print">
<table class="table  table-hover table-sm table-bordered p-0"
    data-page-length="50" 
    style="text-align: center">
<thead>
<tr class="alert-success">
    <th style="text-align: center;">#</th>
    <th style="text-align: center;">اليوم</th>
    <th style="text-align: center;"> الأستاذ</th>
    <th style="text-align: center;">الحصـة الأولـى</th>
    <th style="text-align: center;">الحصـة الثـانيـة</th>
    <th style="text-align: center;"> الحصـة الثـالثـة</th>
    <th style="text-align: center;">الحصـة الرابعـة </th>
    <th style="text-align: center;"> الحصـة الخـامسـة</th>
    <th style="text-align: center;"> الحصـة السـادسـة</th>
    <th style="text-align: center;"> الحصـة السـابعـة</th>
</tr>
</thead>
<tbody>
    <?php $i = 0; ?>
    @foreach ($TeacherClasses as $Student)
        <tr>
            <?php $i++; ?>
            <td>{{ $i }}</td>
            <td>{{ $Student->day }}</td>
            <td>{{ $Student->teacher->name }}</td>
            <td>{{$Student->first}}</td>
            <td>{{$Student->second}}</td>
            <td>{{$Student->third}}</td>
            <td>{{ $Student->fourth }}</td>
            <td>{{ $Student->fifth }}</td>
            <td > {{ $Student->sixth }}</td>
            <td > {{ $Student->seventh }}</td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
<div class="footer">
<button class="btn .btn.bg-navy  pull-left" id="print_Button" onclick="printDiv()"> 
<i class="fa fa-print" aria-hidden="true"></i> طباعة  </button>
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
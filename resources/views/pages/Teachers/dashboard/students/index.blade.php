@extends('layouts.master')
@section('css')

@section('title')
قائمة الطـلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة الطـلاب</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة الطـلاب</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة الطـلاب
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
            <th style="text-align: center; background-color: #D0DEF6;">#</th>
            <th style="text-align: center; background-color: #D0DEF6;">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">الصـف الدراسي</th>
            <th style="text-align: center; background-color: #D0DEF6;">الشعبـة</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach($students as $Student)
                <tr>
                    <?php $i++; ?>
                    <td>{{ $i }}</td>
                    <td>{{$Student->student->name}}</td>
                    <td>{{$Student->classroom->name_class}}</td>
                    <td>{{$Student->section->name_section}}</td>
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
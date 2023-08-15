@extends('layouts.master')
@section('css')

@section('title')
الصـفـوف الدراسـيـة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    الصـفـوف الدراسـيـة</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   الصـفـوف الدراسـيـة</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    الصـفـوف الدراسـيـة
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
            <th style="text-align: center; background-color: #D0DEF6;">#</th>
            <th style="text-align: center; background-color: #D0DEF6;">الصـف الـدراسـي </th>
        </tr>
        </thead>
        <tbody>
            @foreach ($Classrooms as $Classroom)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $Classroom->My_Classes->name_class }}</td>
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
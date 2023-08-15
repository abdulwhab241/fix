@extends('layouts.master')
@section('css')

@section('title')
قـائمـة المتخـرجيـن
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة المتخـرجيـن</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة المتخـرجيـن</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة المتخـرجيـن
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<a href="{{route('Graduated.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة تخرج جديـد</a>
<br><br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">أسـم الطـالـب</th>
            <th style="text-align: center;" class="alert-info">المرحلـة الدراسيـة</th>
            <th style="text-align: center;" class="alert-info">الصـف الدراسـي</th>
            <th style="text-align: center;" class="alert-info">الشعـبة</th>
            <th style="text-align: center;" class="alert-success"> تـاريـخ التـخرج</th>
            <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{$student->student->name}}</td>
        
            <td>{{$student->grade->name}}</td>
            <td>{{$student->classroom->name_class}}</td>
            <td>{{$student->section->name_section}}</td>
            <td>{{$student->date }}</td>
            <td>{{ $student->create_by }}</td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Return_Student{{ $student->id }}" title="إلـغاء تخـرج الطالب">إلـغاء تخـرج الطالب</button>        
            </td>
            </tr>
        @include('pages.Students.Graduated.return')
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
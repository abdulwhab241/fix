@extends('layouts.master')
@section('css')

@section('title')
تقرير الحضور والغياب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    تقرير الحضور والغياب</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   تقرير الحضور والغياب</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    تقرير الحضور والغياب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

    <div class="box-header">
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
        <form  action="{{route('attendance.search')}}"  method="POST" >
            @csrf
            <h6 class="text-center" style="font-family: 'Cairo', sans-serif;color: blue">معلومات البحث</h6><br>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4"> 
                        <label>أسـم الطـالـب \ الطـالبـة</label>
                        <select class="form-control form-control-lg" name="student_id">
                            <option selected disabled>أختـر من القائمة...</option>
                            @foreach($students as $student)
                                <option value="{{ $student->student_id }}">{{ $student->student->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>مـن تـاريـخ</label>
                        <input type="text"  class="form-control range-from date-picker-default" placeholder="تاريخ البداية" required name="from">
                    </div>
                    <div class="col-md-4">
                        <label>إلـى تـاريـخ</label>
                        <input class="form-control range-to date-picker-default"  placeholder="تاريخ النهاية" type="text" required name="to">
                    </div>
                </div><br>
            
            </div>
            <div class="modal-footer">
            <button type="submit"
                class="btn btn-primary btn-block">تـأكيـد</button>
            </div>
            
            </form>
    </div>
<br>
@isset($Students)
<div class="table-responsive">
    <table class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;" >اليـوم</th>
            <th style="text-align: center; background-color: #D0DEF6;" >أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >الصـف الـدراسـي </th>
            <th style="text-align: center; background-color: #D0DEF6;" >الشٌـعبـة</th>
            <th style="text-align: center; background-color: #D0DEF6;" >التـاريـخ</th>
            <th style="text-align: center; background-color: #D0DEF6;" >الحـالـة</th>
        </tr>
        </thead>
        <tbody>
            @foreach($Students as $student)
            <tr>
                <td>{{$student->day}}</td>
                <td>{{$student->students->name}}</td>
                <td>{{$student->classroom->name_class}}</td>
                <td>{{$student->section->name_section}}</td>
                <td>{{$student->attendance_date}}</td>
                <td>{{$student->attendance_status}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endisset
</div>
</div>
</div>
</div>
</div>

<!-- row closed -->
@endsection
@section('js')

@endsection

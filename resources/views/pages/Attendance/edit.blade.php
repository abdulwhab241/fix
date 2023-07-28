@extends('layouts.master')
@section('css')
@section('title')
تعـديـل تحضيـر
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  تعـديـل تحضيـر الطـالـب  <label style="color: #5686E0">{{ $Attendance->students->name }}</label></h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> تعـديـل تحضيـر الطـالـب  <label style="color: #5686E0">{{ $Attendance->students->name }}</label></li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعـديـل تحضيـر الطـالـب  <label style="color: #5686E0">{{ $Attendance->students->name }}</label>
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">


<form class="form-horizontal"  action="{{ route('Attendance.update', 'test') }}" method="post">
    {{ method_field('patch') }}
    @csrf
    
    <div class="box-body">
    <div class="row">
    <div class="col-md-4"> 
        <label >الـيوم</label>
        <select class="form-control form-control-lg" name="Day_id">
            <option >{{$Attendance->day}}</option>
            <option value="السبت">السبت</option>
            <option value="الاحد">الاحد</option>
            <option value="الاثنين">الاثنين</option>
            <option value="الثلاثاء">الثلاثاء</option>
            <option value="الاربعاء">الاربعاء</option>
        </select>
    
    </div>
    
    <div class="col-md-4">
        <label >أسـم الطـالـب</label>
        <select class="form-control form-control-lg" name="Student_id">
            <option value="{{ $Attendance->students->id }}">
                {{ $Attendance->students->name }}
            </option>
            @foreach ($Students as $Student)
            <option value="{{$Student->student_id}}">{{$Student->student->name}}</option>
            @endforeach
        </select>
    
    </div>
    
    <div class="col-md-4">
        <label >الـحالـة</label>
        <input type="hidden" name="id" value="{{$Attendance->id}}">
        <select class="form-control form-control-lg" name="Attendance">
            <option >{{$Attendance->attendance_status}}</option>
            <option value="حـاضـر" required>حـاضـر</option>
            <option value="غـايـب">غـائـب</option>
        </select>
    </div>
    
    
    </div><br>
    
    </div>
    
    <div class="modal-footer">
    
    <button type="submit"
    class="btn btn-success btn-block">تـأكيـد</button>
    </div>
    
    </form>


</div>
</div>
</div>
</div>
<!-- row closed -->



@endsection
@section('js')


@endsection
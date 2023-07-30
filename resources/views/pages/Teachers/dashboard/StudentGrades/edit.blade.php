@extends('layouts.master')
@section('css')

@section('title')
تعـديـل كشـف الـدرجـات
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  
            تعـديـل كشـف درجـات الطـالـب  <label style="color: #5686E0">{{$StudentGrade->student->name}}</label>
        </h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> تعـديـل كشـف الـدرجـات</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعـديـل كشـف الـدرجـات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<form  action="{{route('Teacher_Grades.update','test')}}"  method="POST" >
@method('PUT')
@csrf
<div class="box-body">
<div class="row">
<div class="col-md-3"> 
    <input  type="hidden" name="id"  value="{{$StudentGrade->id}}" class="form-control">
    <label>الفصـل</label>
    <select class="form-control form-control-lg" name="Semester_id">
        <option value="{{$StudentGrade->semester_id}}">{{$StudentGrade->semester->name}}</option>
        @foreach($Semesters as $Semester)
            <option value="{{$Semester->id}}">{{$Semester->name}}</option>
        @endforeach
    </select>  
    @error('Semester_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>المادة</label>
    <select class="form-control form-control-lg" name="Subject_id">
        <option value="{{$StudentGrade->subject_id}}">{{$StudentGrade->subject->name}}</option>
        @foreach($Subjects as $Subject)
            <option value="{{$Subject->subject->id}}">{{$Subject->subject->name}}</option>
        @endforeach
    </select>                        
    @error('Subject_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>محصـلـة شـهـر</label>
    <select class="form-control form-control-lg" name="Month">
        <option value="{{$StudentGrade->month_id}}">{{$StudentGrade->month->name}}</option>
        @foreach($Months as $Month)
            <option value="{{$Month->id}}">{{$Month->name}}</option>
        @endforeach
    </select>                        
    @error('Month')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>أسـم الطـالـب</label>
    <select class="form-control form-control-lg" name="Student_id">
        <option value="{{$StudentGrade->student_id}}">{{$StudentGrade->student->name}}</option>
        @foreach($Students as $Student)
            <option value="{{$Student->id}}">{{$Student->name}}</option>
        @endforeach
    </select>                        
    @error('Student_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>


</div><br>

<div class="row">

<div class="col-md-3">
    <label>الواجبـات</label>
    <input type="number" value="{{ $StudentGrade->homework }}" name="Homework" class="form-control">
    @error('Homework')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>شفهـي</label>
    <input type="number" value="{{ $StudentGrade->verbal }}" name="Verbal" class="form-control">
    @error('Verbal')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>مـواظبـة</label>
    <input type="number" value="{{ $StudentGrade->attendance }}" name="Attendance" class="form-control">
    @error('Attendance')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
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
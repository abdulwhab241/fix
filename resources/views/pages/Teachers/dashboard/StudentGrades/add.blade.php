@extends('layouts.master')
@section('css')

@section('title')
اضافة كشـف الـدرجـات
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
    <h4 class="mb-0">  اضافة كشـف الـدرجـات</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
        <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
        <li class="breadcrumb-item active"> اضافة كشـف الـدرجـات</li>
    </ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة كشـف الـدرجـات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<form  action="{{route('Teacher_Grades.store','test')}}"  method="POST" >
@csrf
<div class="box-body">
<div class="row">
<div class="col-md-3"> 
    <label>الفصـل الدراسي</label>
    <select class="form-control form-control-lg" name="Semester_id">
        <option selected disabled>أختـر من القائمة...</option>
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
        <option selected disabled>أختـر من القائمة...</option>
        @foreach($Subjects as $Subject)
            <option value="{{$Subject->subject_id}}">{{$Subject->subject->name}}</option>
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
        <option selected disabled>أختـر من القائمة...</option>
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
        <option selected disabled>أختـر من القائمة...</option>
        @foreach($students as $Student)
            <option value="{{$Student->student_id}}">{{$Student->student->name}}</option>
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
    <input type="number" value="{{ old('Homework') }}" name="Homework" class="form-control">
    @error('Homework')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>شفهـي</label>
    <input type="number" value="{{ old('Verbal') }}" name="Verbal" class="form-control">
    @error('Verbal')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>مـواظبـة</label>
    <input type="number" value="{{ old('Attendance') }}" name="Attendance" class="form-control">
    @error('Attendance')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>



</div>
<br>

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
@extends('layouts.master')
@section('css')

@section('title')
تعديل طـالـب
@stop
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  تعديل طـالـب</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> تعديل طـالـب</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعديل طـالـب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<form  action="{{route('Students.update','test')}}"  method="POST" enctype="multipart/form-data">
{{ method_field('patch') }}
@csrf
<div class="box-body">

<h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الطـالـب</h5>

<div class="row">
<div class="col-md-3"> 
    <label>أسم الطـالـب</label>
    <input type="text" value="{{ $Students->name }}"
    class="form-control" name="Name">
    <input type="hidden" name="id" value="{{$Students->id}}">
    @error('Name')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>تاريخ الميلاد</label>
    <input type="text"  id="datepicker-action" value="{{ $Students->birth_date }}" data-date-format="yyyy-mm-dd" name="Date_Birth" class="form-control">
    @error('Date_Birth')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label>النوع</label>
    <select class="form-control form-control-lg" name="Gender_id">
    @foreach($Genders as $Gender)
    <option
        value="{{$Gender->id}}" {{$Gender->id == $Students->gender_id ?'selected':''}}>{{$Gender->name }}</option>
    @endforeach
    </select>                        
    @error('Gender_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>
<div class="col-md-3">
    <label>السنة الدراسية</label>
    <select class="form-control form-control-lg" name="academic_year">
        @php
        $current_year = date("Y");
    @endphp
    @for($year=$current_year; $year<=$current_year +1 ;$year++)
        <option value="{{ $year}}" {{$year == $Students->academic_year ? 'selected' : ' '}}>{{ $year }}</option>
    @endfor
    </select>
    
    @error('academic_year')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

</div><br>

<div class="row">

<div class="col-md-3">
    <label for="inputState">المرحلة الدراسية</label>
    <select class="form-control form-control-lg" name="Grade_id">

        @foreach($Grades as $Grade)
        <option
            value="{{$Grade->id}}" {{$Grade->id == $Students->grade_id ?'selected':''}}>{{$Grade->name }}</option>
        @endforeach
    </select>
    @error('Grade_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>


<div class="col-md-3">
    <label for="inputZip">الفصل الدراسي</label>
    <select class="form-control form-control-lg" name="Classroom_id">

        @foreach($Classrooms as $Classroom)
        <option
            value="{{$Classroom->id}}" {{$Classroom->id == $Students->classroom_id ?'selected':''}}>{{$Classroom->name_class }}</option>
        @endforeach
    </select>
    @error('Classroom_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
<label for="inputZip"> الشـعبة</label>
<select class="form-control form-control-lg" name="Section_id">
    @foreach($Sections as $Section)
        <option
            value="{{$Section->id}}" {{$Section->id == $Students->section_id ?'selected':''}}>{{ $Section->name_section }}</option>
        @endforeach
</select>
@error('Section_id')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>

<div class="col-md-3"> 
<label>المـؤهـل</label>
<textarea class="form-control" name="Qualification" rows="2">{{ $Students->qualification }}</textarea>
@error('Qualification')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>
</div><br>

<h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الأب</h5>

<div class="row">

<div class="col-md-4">
<label>أسم الاب</label>
<input type="text" value="{{ $Students->father_name }}" name="Father_Name"  class="form-control">
@error('Father_Name')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>

<div class="col-md-4">
<label>جهة العمل</label>
<input type="text" value="{{ $Students->employer }}" name="Employer" class="form-control" >
@error('Employer')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>

<div class="col-md-4">
<label>الوظيفة</label>
<input type="text" value="{{ $Students->father_job }}" name="Father_Job" class="form-control" >
@error('Father_Job')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>

</div><br>

<div class="row">

<div class="col-md-4">
<label>الهاتف الشخصي</label>
<input type="text" value="{{ $Students->father_phone }}" name="Father_Phone" class="form-control" >
@error('Father_Phone')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>
<div class="col-md-4">
<label>هاتف العمل</label>
<input type="text" value="{{ $Students->job_phone }}" name="Job_Phone" class="form-control">
@error('Job_Phone')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>
<div class="col-md-4">
<label>هاتف المنزل</label>
<input type="text" value="{{ $Students->home_phone }}" name="Home_Phone" class="form-control">
@error('Home_Phone')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>

</div>
<div class="form-group">
<label>العنوان</label>
<textarea class="form-control" name="Address" rows="4">{{ $Students->address }}</textarea>
@error('Address')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>
<h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الأم</h5>

<div class="row">

<div class="col-md-4">
<label>أسم الام</label>
<input type="text" value="{{ $Students->mother_name }}" name="Mother_Name" class="form-control">
@error('Mother_Name')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>
<div class="col-md-4">
<label>الوظيفة</label>
<input type="text" value="{{ $Students->mother_job }}" name="Mother_Job" class="form-control">
@error('Mother_Job')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>
<div class="col-md-4">
<label>الهاتف</label>
<input type="text" value="{{ $Students->mother_phone }}" name="Mother_Phone" class="form-control">
@error('Mother_Phone')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>

</div>
<br>
<div class="col">
<label style="font-weight:bold; color:blue;">إختر صورة للطـالـب: </label>
<input type="file" accept="image/*" name="photos[]" multiple>
</div>

</div>
<div class="modal-footer">
<button type="submit"
class="btn btn-success btn-block">تعـديـل البيانات</button>
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
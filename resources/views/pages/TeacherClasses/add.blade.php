@extends('layouts.master')
@section('css')

@section('title')
إضافة جدول حصـص المعلمين
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  إضافة جدول حصـص المعلمين</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> إضافة جدول حصـص المعلمين</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
إضافة جدول حصـص المعلمين
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<form  action="{{route('Classes_Teacher.store')}}"  method="POST" >
@csrf
<div class="box-body">
<div class="row">
<div class="col-md-4"> 
    <div class="form-group">
    <label >الـيوم</label>
    <select class="form-control form-control-lg" name="Day_id">
        <option value="0" selected disabled>أختـر من القائمة...</option>
        <option value="السبت">السبت</option>
        <option value="الاحد">الاحد</option>
        <option value="الاثنين">الاثنين</option>
        <option value="الثلاثاء">الثلاثاء</option>
        <option value="الاربعاء">الاربعاء</option>
    </select>
    </div>
    @error('Day_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>
<div class="col-md-4"> 
    <div class="form-group">
    <label>أسم الأستاذ</label>
    <select class="form-control form-control-lg" name="Teacher_id">
        <option  selected disabled>أختـر من القائمة...</option>
        @foreach ($Teachers as $Teacher)
            <option  value="{{ $Teacher->id }}" required>{{ $Teacher->name }}</option>
        @endforeach
    </select>
    </div>
    @error('Teacher_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>
<div class="col-md-4">
    <div class="form-group">
    <label>الحصـة الأولى</label>
    <input type="text" value="{{ old('First') }}" name="First" class="form-control">
    </div>
</div>

</div><br>

<div class="row">
<div class="col-md-4">
    <div class="form-group">
    <label>الحصـة الثانية</label>
    <input type="text" value="{{ old('Second') }}" name="Second" class="form-control">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
    <label>الحصـة الثالثة</label>
    <input type="text" value="{{ old('Third') }}" name="Third" class="form-control">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
    <label>الحصـة الرابعة</label>
    <input type="text" value="{{ old('Fourth') }}" name="Fourth" class="form-control">
    </div>
</div>
</div><br>

<div class="row">
<div class="col-md-4">
    <div class="form-group">
    <label>الحصـة الخامسة</label>
    <input type="text" value="{{ old('Fifth') }}" name="Fifth" class="form-control">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
    <label>الحصـة السادسة</label>
    <input type="text" value="{{ old('Sixth') }}" name="Sixth" class="form-control">
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
    <label>الحصـة السابعة</label>
    <input type="text" value="{{ old('Seventh') }}" name="Seventh" class="form-control">
    </div>
</div>
</div><br>

</div>
<div class="modal-footer">
<button type="submit"
class="btn btn-success btn-block">حفظ البيانات</button>
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
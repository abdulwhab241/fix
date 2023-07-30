@extends('layouts.master')
@section('css')

@section('title')
تعديل جدول حصـص المعلمين
@stop
@endsection



@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  تعديل جدول حصـص المعلمين</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> تعديل جدول حصـص المعلمين</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعديل جدول حصـص المعلمين
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<form  action="{{route('Classes_Teacher.update','test')}}"  method="POST" >
{{ method_field('patch') }}
@csrf
<div class="box-body">
<div class="row">
    <div class="col-md-4"> 
        <div class="form-group">
        <label >الـيوم</label>
        <input type="hidden" name="id" value="{{$TeacherClasses->id}}">
        <select class="form-control form-control-lg" name="Day_id">
            <option > {{ $TeacherClasses->day }} </option>
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
            @foreach($Teachers as $Teacher)
            <option
                value="{{$Teacher->id}}" {{$Teacher->id == $TeacherClasses->teacher_id ?'selected':''}}>{{$Teacher->name }}</option>
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
        <input type="text"value="{{$TeacherClasses->first}}" name="First" class="form-control">
        </div>
    </div>

</div><br>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
        <label>الحصـة الثانية</label>
        <input type="text" value="{{$TeacherClasses->second}}" name="Second" class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
        <label>الحصـة الثالثة</label>
        <input type="text" value="{{$TeacherClasses->third}}" name="Third" class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
        <label>الحصـة الرابعة</label>
        <input type="text" value="{{$TeacherClasses->fourth}}" name="Fourth" class="form-control">
        </div>
    </div>
</div><br>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
        <label>الحصـة الخامسة</label>
        <input type="text" value="{{$TeacherClasses->fifth}}" name="Fifth" class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
        <label>الحصـة السادسة</label>
        <input type="text" value="{{$TeacherClasses->sixth}}" name="Sixth" class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
        <label>الحصـة السابعة</label>
        <input type="text" value="{{$TeacherClasses->seventh}}" name="Seventh" class="form-control">
        </div>
    </div>
</div><br>

</div>
<div class="modal-footer">
<button type="submit"
class="btn btn-success btn-block">تعديل البيانات</button>
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
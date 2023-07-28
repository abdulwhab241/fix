@extends('layouts.master')
@section('css')

@section('title')
تعديل الإختبـار
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  تعديل الإختبـار</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> تعديل الإختبـار</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعديل الإختبـار
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<form class="form-horizontal"  action="{{ route('Quizzes.update', 'test') }}" method="post">
{{ method_field('patch') }}
@csrf
<div class="box-body">
<div class="row">

<div class="col-md-4"> 
    <label>أختـبار شـهر</label>
    <select class="form-control form-control-lg" name="Exam_Date">
        <option value="{{ $Exam->month->id }}"> {{ $Exam->month->name }} </option>
        @foreach ($Months as $Month)
        <option value="{{ $Month->id }}">
        {{ $Month->name }}
        </option>
        @endforeach
    </select>
    @error('Exam_Date')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-4"> 
    <label>الصـف الدراسي</label>
    <input id="id" type="hidden" name="id" class="form-control"
    value="{{ $Exam->id }}">
    <select class="form-control form-control-lg" name="Classroom_id">
        <option value="{{ $Exam->classroom->id }}">
            {{ $Exam->classroom->name_class }}
        </option>
    @foreach ($Classrooms as $Classroom)
            <option value="{{ $Classroom->id }}">
                {{ $Classroom->name_class }}
            </option>
        @endforeach
    </select>
    @error('Classroom_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-4">
    <label>الأستـاذ</label>
    <select class="form-control form-control-lg" name="Teacher_id">
        <option value="{{ $Exam->teacher->id }}">
            {{ $Exam->teacher->name }}
        </option>
        @foreach ($Teachers as $Teacher)
            <option value="{{ $Teacher->id }}">
            {{ $Teacher->name }}
            </option>
        @endforeach
    </select>
    @error('Teacher_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

</div><br>

<div class="row">

<div class="col-md-4"> 
    <label>المـادة</label>
    <select class="form-control form-control-lg" name="Subject_id">
        <option value="{{ $Exam->subject->id }}">
            {{ $Exam->subject->name }}
        </option>
        @foreach ($Subjects as $Subject)
            <option value="{{ $Subject->id }}">
            {{ $Subject->name }}
            </option>
        @endforeach
    </select>
    @error('Subject_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-4">
    <label >الـدرجـة</label>
    <input type="number" value="{{ $Exam->total_marks }}" name="Total" class="form-control">
    @error('Total')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

</div><br>


</div>
    
<div class="modal-footer">
    <button type="submit" class="btn btn-success btn-block">تـعديـل البيانات</button>
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
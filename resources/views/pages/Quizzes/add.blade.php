@extends('layouts.master')
@section('css')
@section('title')
إضـافـة إختبـار
@stop
@endsection
@section('page-header')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
إضـافـة إختبـار  
</h1>
<ol class="breadcrumb">
<li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> الرئيسيـة</a></li>
<li><a href="{{route('Quizzes.index')}}"><i class="fas fa-book-open fa-fw"></i> قائمـة الإختبـارات </a></li>
<li class="active">إضـافـة إختبـار  </li>
</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-xs-12">
<div class="box">
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{ session()->get('error') }}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif


<form class="form-horizontal" action="{{ route('Quizzes.store') }}" method="POST">
@csrf
<div class="box-body">
<div class="row">

<div class="col-md-4"> 
    <label>أختـبار شـهر</label>
    <select class="form-control select2" style="width: 100%;" name="Exam_Date">
    <option  selected disabled>أختـر من القائمة...</option>
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
    <select class="form-control select2" style="width: 100%;" name="Classroom_id">
        <option  selected disabled>أختـر من القائمة...</option>
        @foreach ($Classrooms as $Classroom)
            <option  value="{{ $Classroom->id }}">{{ $Classroom->name_class }}</option>
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
    <select class="form-control select2" style="width: 100%;" name="Teacher_id">
        <option  selected disabled>أختـر من القائمة...</option>
        @foreach ($Teachers as $Teacher)
            <option  value="{{ $Teacher->id }}">{{ $Teacher->name }}</option>
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
    <select class="form-control select2" style="width: 100%;" name="Subject_id">
        <option  selected disabled>أختـر من القائمة...</option>
        @foreach ($Subjects as $Subject)
            <option  value="{{ $Subject->id }}">{{ $Subject->name }}</option>
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
<input type="number" value="{{ old('Total') }}" name="Total" class="form-control">
@error('Total')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>



</div><br>

</div>



<div class="modal-footer">
<button type="submit"
class="btn btn-primary btn-block">حفظ البيانات</button>
</div>
</form>

</div><!-- /.box-header -->
</div>
</div>
</section><!-- /.content -->


@endsection
@section('js')
@toastr_js
@toastr_render

@endsection
@extends('layouts.master')
@section('css')

@section('title')
تسـجـيل الطـلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  تسـجـيل الطـلاب</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> تسـجـيل الطـلاب</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تسـجـيل الطـلاب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<form class="form-horizontal" action="{{ route('Enrollments.store') }}" method="POST">
@csrf

<div class="box-body">
<div class="row">

<div class="col-md-3">
    <label > المرحلـة الدراسيـة</label>
    <select class="form-control form-control-lg" name="Grade_id">
        <option  selected disabled>أختـر من القائمة...</option>
        @foreach ($Grades as $Grade)
            <option value="{{ $Grade->id }}" required>{{ $Grade->name }}</option>
        @endforeach
    </select>
    @error('Grade_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label > الصـف الدراسـي</label>
    <select class="form-control form-control-lg" name="Classroom_id">

    </select>
    @error('Classroom_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-3">
    <label > الشعبـة</label>
    <select class="form-control form-control-lg" name="Section_id">

    </select>
    @error('Section_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>
<div class="col-md-3">
    <label > السنة الدراسية</label>
    <select class="form-control form-control-lg" name="Year">
    <option selected>أختـر من القائمة...</option>
    @php
    $current_year = date("Y");
    @endphp
        <option value="{{ $current_year}}">{{ $current_year }}</option>
    </select>
    @error('Year')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

</div><br>

</div>

<div class="modal-footer">
<button type="submit"
class="btn btn-primary btn-block">تـأكيـد</button>
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
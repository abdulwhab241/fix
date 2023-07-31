@extends('layouts.master')
@section('css')

@section('title')
ترقية الطلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  اضافة ترقية الطلاب</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> اضافة ترقية الطلاب</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة ترقية الطلاب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

    <h4 style="color: blue;font-family: Cairo; font-weight: bold;">المرحلة الدراسية السابقة</h4>
<form  action="{{route('Upgrades.store')}}"  method="POST" enctype="multipart/form-data">
@csrf
<div class="box-body">
<div class="row">

    <div class="col-md-4" >
        <label for="inputState" style="font-weight: bold;">المرحلة الدراسية</label>
        <select class="form-control form-control-lg" name="Grade_id" >
            <option selected disabled>اختـر من القائمة...</option>
            @foreach($Grades as $Grade)
                <option value="{{$Grade->id}}">{{$Grade->name}}</option>
            @endforeach
        </select>
        @error('Grade_id')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label  style="font-weight: bold;">الصف الدراسي </label>
        <select class="form-control form-control-lg" name="Classroom_id" >

        </select>
        @error('Classroom_id')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
</div>

<div class="col-md-4">
    <label for="academic_year">السنـة الدراسيـة </label>
    <select class="form-control form-control-lg" name="academic_year">
        <option selected disabled>اختـر من القائمة...</option>
        @php
            $current_year = date("Y");
        @endphp
        @for($year=$current_year; $year<=$current_year +1 ;$year++)
            <option value="{{ $year}}">{{ $year }}</option>
        @endfor
    </select>
    @error('academic_year')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

</div>
<br><h4 style="color: blue;font-family: Cairo; font-weight: bold;">المرحلة الدراسية الحالية</h4><br>

<div class="row">
<div class=" col-md-4">
    <label for="inputState" style="font-weight: bold;">المرحلة الدراسية</label>
    <select class="form-control form-control-lg" name="Grade_id_new" >
        <option selected disabled>اختـر من القائمة...</option>
        @foreach($Grades as $Grade)
            <option value="{{$Grade->id}}">{{$Grade->name}}</option>
        @endforeach
    </select>
    @error('Grade_id_new')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-4">
    <label  style="font-weight: bold;">الصف الدراسي </label>
    <select class="form-control form-control-lg" name="Classroom_id_new" >

    </select>
    @error('Classroom_id_new')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-4">
    <label for="academic_year">السنـة الدراسيـة </label>
    <select class="form-control form-control-lg" name="academic_year_new">
        <option selected disabled>اختـر من القائمة...</option>
        @php
            $current_year = date("Y");
        @endphp
        @for($year=$current_year; $year<=$current_year +1 ;$year++)
            <option value="{{ $year}}">{{ $year }}</option>
        @endfor
    </select>
    @error('academic_year_new')
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


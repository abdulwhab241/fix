@extends('layouts.master')
@section('css')

@section('title')
تسديـد رسـوم الطالـب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  تسديـد رسـوم الطالـب</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> تسديـد رسـوم الطالـب</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تسديـد رسـوم الطالـب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">


<form  action="{{route('Receipts.store')}}"  method="POST" >
@csrf
<div class="box-body">
<div class="row">
<div class="col-md-3"> 
<div class="form-group">
<label>أسم الطـالـب</label>
<select class="form-control form-control-lg" name="Student_id">
    <option  selected disabled>أختـر من القائمة...</option>
    @foreach ($student as $Student)
        <option  value="{{ $Student->student_id }}">{{ $Student->student->name }}</option>
    @endforeach
</select>
</div>
@error('Student_id')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>
<div class="col-md-3">
<div class="form-group">
<label>المبـلغ</label>
<input type="number" value="{{ old('Debit') }}" name="Debit" class="form-control">
@error('Debit')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label >البيـان</label>
<textarea class="form-control" name="description" rows="1">{{ old('description') }}</textarea>
@error('description')
<div class=" alert-danger">
<span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
</div>
@enderror
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
@extends('layouts.master')
@section('css')

@section('title')
إضـافـة سـند صـرف
@stop
@endsection



@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  إضـافـة سـند صـرف</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> إضـافـة سـند صـرف</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
إضـافـة سـند صـرف
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<form  action="{{ route('Payments.store') }}"  method="POST" >
@csrf
<div class="box-body">
<div class="row">

    <div class="col-md-4">
        <label >أسـم الطـالـب</label>
        <select class="form-control form-control-lg" name="Student_id">
            <option  selected disabled>أختـر من القائمة...</option>
            @foreach ($Enrollments as $Student)
            <option value="{{$Student->student_id}}">{{$Student->student->name}}</option>
            @endforeach
        </select>
        @error('Student_id')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div>
    <div class="col-md-4"> 
        <label> المبلغ</label>
        <input  class="form-control" value="{{ old('Debit') }}" name="Debit" type="number" class="form-control">
        @error('Debit')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div>
    <div class="col-md-4">
        <label>البيان</label>
        <textarea class="form-control" name="description" rows="2">{{ old('description') }}</textarea>
        @error('description')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div>

</div><br>

</div>
<div class="modal-footer">
<button type="submit"
class="btn btn-primary btn-block">تـأكـيد البيانات</button>
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
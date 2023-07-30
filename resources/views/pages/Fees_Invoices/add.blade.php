@extends('layouts.master')
@section('css')

@section('title')
اضافة فاتورة جديدة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  اضافة فاتورة جديدة</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> اضافة فاتورة جديدة</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة فاتورة جديدة
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">



<form  action="{{route('Fees_Invoices.store')}}"  method="POST" >
    @csrf
    <div class="box-body">
        <div class="row">
            <div class="col-md-3"> 
                <div class="form-group">
                <label>أسم الطـالـب</label>
                <select class="form-control form-control-lg"  name="Student_id">
                    <option  selected disabled>أختـر من القائمة...</option>
                    @foreach ($Students as $Student)
                        <option  value="{{ $Student->student_id }}" required>{{ $Student->student->name }}</option>
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
                <label>نـوع الرسـوم </label>
                <select class="form-control form-control-lg" name="Fee_id">
                    <option  selected disabled>أختـر من القائمة...</option>
                    @foreach ($Fees as $Fee)
                        <option  value="{{ $Fee->id }}">{{ $Fee->fee_type }}</option>
                    @endforeach
                </select>
                </div>
                @error('Fee_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            <div class="col-md-3"> 
                <div class="form-group">
                <label> المبلغ</label>
                <select class="form-control form-control-lg" name="amount">
    
                </select>
                </div>
                @error('amount')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label >البيان</label>
                <input type="text" value="{{ old('description') }}" name="description" class="form-control">
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
@extends('layouts.master')
@section('css')

@section('title')
تعديل سند صرف
@stop
@endsection



@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  
            تعديل سـند صـرف الطـالـب  <label style="color: #5686E0">{{$payment_student->student->name}}</label>
        </h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> تعديل سند صرف</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعديل سند صرف
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <form action="{{route('Payments.update','test')}}" method="post" >
                    @method('PUT')
                    @csrf
                <div class="box-body">
                    <div class="row">
                
                        <div class="col-md-3"> 
                            <input  type="hidden" name="Student_id" value="{{$payment_student->student->id}}" class="form-control">
                            <input  type="hidden" name="id"  value="{{$payment_student->id}}" class="form-control">
                
                            <label> المبلغ</label>
                            <input type="number"  class="form-control" name="Debit" value="{{ $payment_student->amount }}" >
                            @error('Debit')
                            <div class=" alert-danger">
                            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>
                
                        <div class="col-md-6">
                            <label >البيان</label>
                            <textarea class="form-control" name="description" rows="2">{{$payment_student->description}}</textarea>
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
                    class="btn btn-primary btn-block">تـعديـل البيانات</button>
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
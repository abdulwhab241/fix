@extends('layouts.master')
@section('css')

@section('title')
  تعديل معالجة رسوم
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  
            تعديل استبعاد رسوم الطـالـب  <label style="color: #5686E0">{{$ProcessingFee->student->name}}</label>
        </h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> تعديل معالجة رسوم</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعديل معالجة رسوم
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <form action="{{route('ProcessingFee.update','test')}}" method="post" >
                    @method('PUT')
                    @csrf
                <div class="box-body">
                    <div class="row">
                
                        <div class="col-md-3"> 
                            <div class="form-group">
                            <label> المبلغ</label>
                            <input  class="form-control" name="Debit" value="{{ $ProcessingFee->amount}}" type="number" >
                            <input  type="hidden" name="Student_id" value="{{$ProcessingFee->student_id}}" class="form-control">
                            <input  type="hidden" name="id"  value="{{$ProcessingFee->id}}" class="form-control">
                        </div>
                            @error('Debit')
                            <div class=" alert-danger">
                            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label>رصيد الطالب </label>
                            <input  class="form-control" name="final_balance" style="font-weight: bolder; font-size:15px;" value="{{ number_format($ProcessingFee->student->student_account->sum('Debit_feeInvoice') + $ProcessingFee->student->student_account->sum('Debit_payment') - $ProcessingFee->student->student_account->sum('credit_receipt') - $ProcessingFee->student->student_account->sum('credit_processing')  ) }}" type="text" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>البيان</label>
                            <textarea class="form-control" name="description" rows="2">{{$ProcessingFee->description}}</textarea>
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
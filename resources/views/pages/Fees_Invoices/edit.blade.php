@extends('layouts.master')
@section('css')

@section('title')
تعديل فاتورة رسوم دراسية
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  تعديل فاتورة رسوم الطالب</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> تعديل فاتورة رسوم الطالب</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعديل فاتورة رسوم الطالب  <label style="color: #5686E0">{{$fee_invoices->student->name}}</label>
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">



                <form  action="{{route('Fees_Invoices.update','test')}}"  method="POST" >
                    @method('PUT')
                    @csrf
                    <div class="box-body">
                        <div class="row">
                    
                            <div class="col-md-3"> 
                                <div class="form-group">
                                <label>أسم الطـالـب</label>
                                <input type="hidden" value="{{$fee_invoices->id}}" name="id" class="form-control">
                                <select class="form-control form-control-lg" name="Student_id">
                                    <option value="{{ $fee_invoices->student->id }}">{{ $fee_invoices->student->name }}</option>
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
                                <select class="form-control select2" name="Fee_id">
                                        @foreach($fees as $fee)
                                            <option value="{{$fee->id}}" {{$fee->id == $fee_invoices->fee_id ? 'selected':"" }}>{{$fee->title}}</option>
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
                                    <option value="{{ $fee_invoices->amount }}"> {{ number_format($fee_invoices->amount) }} </option>
                                    @foreach($fees as $fee)
                                    <option value="{{ $fee->amount }}">{{ number_format($fee->amount) }}</option>
                                    @endforeach
                                </select>
                                </div>
                                @error('amount')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label>البيان</label>
                                <input type="hidden" name="Grade_id" value="{{$fee_invoices->grade_id}}">
                                <input type="hidden" name="Classroom_id" value="{{$fee_invoices->classroom_id}}">
                                <input type="text" value="{{ $fee_invoices->description }}" name="description" class="form-control">
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
                        class="btn btn-primary btn-block">تعديـل البيانات</button>
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
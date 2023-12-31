@extends('layouts.master')
@section('css')

@section('title')
اضافة رسوم جديدة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  اضافة رسوم جديدة</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> اضافة رسوم جديدة</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة رسوم جديدة
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <form  action="{{ route('Fees.store') }}"  method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>أسم الرسوم</label>
                            <input type="text" value="{{ old('title') }}" name="title" class="form-control">
                            @error('title')
                            <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>
                    
                        <div class="col-md-3">
                            <label>المبلـغ</label>
                            <input type="number" value="{{ old('amount') }}" name="amount" class="form-control">
                            @error('amount')
                            <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>
                    
                        <div class="col-md-3">
                            <label>المرحلـة الدراسيـة</label>
                            <select class="form-control form-control-lg" name="Grade_id">
                                <option selected disabled>حـدد المرحـلة...</option>
                                @foreach($Grades as $Grade)
                                    <option value="{{ $Grade->id }}">{{ $Grade->name }}</option>
                                @endforeach
                            </select>                        
                            @error('Grade_id')
                            <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                    
                        </div>
                    
                        <div class="col-md-3">
                            <label>الصـف الدراسـي</label>
                            <select class="form-control form-control-lg" name="Classroom_id">
                                <option selected disabled>حـدد الـصـف...</option>
                            
                            </select>                       
                            @error('Classroom_id')
                            <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>
                    
                    </div>
                    <br>
                    
                    <div class="row">
                    
                        <div class="col-md-3">
                            <label>السنـة الدراسيـة</label>
                            <select class="form-control form-control-lg" name="year">
                                <option selected disabled>حـدد السنـة...</option>
                                @php
                                    $current_year = date("Y")
                                @endphp
                                @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                    <option value="{{ $year}}">{{ $year }}</option>
                                @endfor
                                </select>                       
                                @error('year')
                                <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                        </div>
                    
                        <div class="col-md-3">
                            <label>نـوع الرسـوم</label>
                            <input type="text" value="{{ old('Fee_type') }}" name="Fee_type" class="form-control">
                            @error('Fee_type')
                            <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>
                    
                        <div class="col-md-3">
                            <label>التخـفيـض</label>
                            <select class="form-control form-control-lg" name="Discount">
                                <option selected disabled>أختـر من القائمة...</option>
                                <option value="0">0%</option>
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                            </select>                       
                            @error('Discount')
                            <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                            <label>ملاحظات</label>
                            <textarea class="form-control" name="description" rows="2">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    
                    </div>   
                    <br>
                    <div class="modal-footer">
                        <button type="submit"
                            class="btn btn-success btn-block">تأكيـد</button>
                        </div>
                    
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
@extends('layouts.master')
@section('css')

@section('title')
تعديل رسوم دراسية
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  تعديل رسوم دراسية</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> تعديل رسوم دراسية</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعديل رسوم دراسية
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<form action="{{route('Fees.update','test')}}" method="post" autocomplete="off">
@method('PUT')
@csrf
<div class="box-body">
<div class="row">
    <div class="col-md-3">
        <label>أسم الرسوم</label>
        <input type="text" value="{{$fee->title }}" name="title" class="form-control">
        <input type="hidden" value="{{$fee->id}}" name="id" class="form-control">
    </div>

    <div class="col-md-3">
        <label>المبلغ</label>
        <input type="number" value="{{$fee->amount}}" name="amount" class="form-control">
    </div>

    <div class="col-md-3">
        <label >المرحلة الدراسية</label>
        <select class="form-control form-control-lg" name="Grade_id">
            @foreach($Grades as $Grade)
                <option value="{{ $Grade->id }}" {{$Grade->id == $fee->grade_id ? 'selected' : ""}}>{{ $Grade->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3">
        <label>الصف الدراسي</label>
        <select class="form-control form-control-lg" name="Classroom_id">
            <option value="{{$fee->classroom_id}}">{{$fee->classroom->name_class}}</option>
            @foreach ($Classrooms as $Classroom)
            <option value="{{$Classroom->id}}">{{$Classroom->name_class}}</option>
            @endforeach
        </select>
    </div>

</div><br>


<div class="row">


    <div class="col-md-3">
        <label>السنة الدراسية</label>
        <select class="form-control form-control-lg" name="year">
            @php
                $current_year = date("Y")
            @endphp
            @for($year=$current_year; $year<=$current_year +1 ;$year++)
                <option value="{{ $year}}" {{$year == $fee->year ? 'selected' : ' '}}>{{ $year }}</option>
            @endfor
        </select>
    </div>

    <div class="col-md-3">
        <label>نـوع الرسـوم</label>
        <input type="text" value="{{$fee->fee_type }}" name="Fee_type" class="form-control">
    </div>

    <div class="col-md-3">
        <label>التخـفيـض</label>
        <select class="form-control form-control-lg" name="Discount">
            <option >{{$fee->discount}}</option>
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
        <textarea class="form-control" name="description" rows="2">{{$fee->description}}</textarea>
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
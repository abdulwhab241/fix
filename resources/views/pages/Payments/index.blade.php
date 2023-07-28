@extends('layouts.master')
@section('css')

@section('title')
سندات الصرف
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
    <h4 class="mb-0">    قائمة سندات الصرف</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
        <li class="breadcrumb-item active">   قائمة سندات الصرف</li>
    </ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
قائمة سندات الصرف
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<div class="col-xl-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<div class="box-body">
<a href="{{route('Payments.create')}}" class="btn btn-success btn-sm" style="margin: 5px; padding:5px;" role="button"
aria-pressed="true">اضافة سنـد صـرف</a>
<a class="btn btn-primary btn-sm" style="margin: 5px; padding:5px;" title="تصـديـر إكسـيل" href="{{ route('export_payments') }}">
    <i class="fas fa-file-download"></i>   تصـديـر إكسـيل
</a>
</div>
<br>
<div class="table-responsive">
<table id="datatable" class="table  table-hover table-sm table-bordered p-0"
    data-page-length="50"
    style="text-align: center">
<thead>
<tr class="alert-success">
    <th style="text-align: center;" class="alert-info">#</th>
    <th style="text-align: center;" class="alert-info">أسـم الطـالـب \ الطـالبـة</th>
    <th style="text-align: center;" class="alert-info">المبلغ</th>
    <th style="text-align: center;" class="alert-info">البيان</th>
    <th style="text-align: center;" class="alert-info">رصـيد الطـالـب</th>
    <th style="text-align: center;" class="alert-info">تاريخ الصرف</th>
    <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
    <th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>

    @foreach($payment_students as $payment_student)
    <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{$payment_student->student->name}}</td>
    <td>{{ number_format($payment_student->amount) }} ريال </td>
    <td>{{$payment_student->description}}</td>
    <td style="font-weight: bolder; background-color: #D0DEF6;">{{ number_format($payment_student->student->student_account->sum('Debit_feeInvoice') - $payment_student->student->student_account->sum('credit_receipt') - $payment_student->student->student_account->sum('credit_processing')  ) }} ريال </td>
    <td>{{$payment_student->date}}</td>
    <td>{{$payment_student->create_by}}</td>
        <td>
            <div class="btn-group">
            <a href="{{route('Payments.edit',$payment_student->id)}}" style="margin: 3px;" title="تعديل" class="btn btn-info btn-sm" role="button" aria-pressed="true">تعديل</a>
            <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" title="حذف"  data-toggle="modal" data-target="#Delete_receipt{{$payment_student->id}}" >حذف</button>
            </div>
        </td>
    </tr>

    @include('pages.Payments.Delete')
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
@extends('layouts.master')
@section('css')

@section('title')
الإشـعـارات
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    تسـديـد رسـوم</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   الإشـعـار</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    الإشـعـار
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<br>
<div class="table-responsive">
    <table class="table table-hover table-sm table-bordered p-0" style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;" >أسم الطـالـب</th>
            <th style="text-align: center; background-color: #D0DEF6;" >المبلغ</th>
            <th style="text-align: center; background-color: #D0DEF6;" >البيان</th>
            <th style="text-align: center; background-color: #D0DEF6;" > تاريخ السداد</th>
            <th style="text-align: center; background-color: #D0DEF6;" >الرصيد المتبقي</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $Receipts->student->name }}</td>
                <td>{{ number_format($Receipts->Debit) }} ريال </td>
                <td>{{$Receipts->description}}</td>
                <td>{{$Receipts->date}}</td>
                <td>{{ number_format( auth()->user()->student_account->sum('Debit_feeInvoice') - auth()->user()->student_account->sum('credit_receipt') ) }} ريال </td>
                
            </tr>
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
<!-- row closed -->

@endsection
@section('js')

@endsection

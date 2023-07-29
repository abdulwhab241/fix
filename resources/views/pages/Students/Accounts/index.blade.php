@extends('layouts.master')
@section('css')

@section('title')
بيـانـات الـرسـوم
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    بيـانـات الـرسـوم</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   بيـانـات الـرسـوم</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    بيـانـات الـرسـوم
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
<br>
@if(count($FeeInvoices) > 0)
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="text-align: center" data-page-length="50">
                <thead>
                <tr class="alert-info">
                    <th style="text-align: center; background-color: #E7EEFB;" >الـرسـوم الدراسيـة</th>
                    <th style="text-align: center; background-color: #E7EEFB;" >المبـلغ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($FeeInvoices as $FeeInvoices)
                    <tr>
                        <td>{{ $FeeInvoices->description }}</td>
                        <td>{{  number_format($FeeInvoices->amount) }} ريال </td>
        
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    <div class="col-md-6">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="text-align: center" data-page-length="50">
        <thead>
        <tr class="alert-info">
            <th style="text-align: center; background-color: #E7EEFB;" > الرسـوم المـدفوعـة</th>
            <th style="text-align: center; background-color: #E7EEFB;" >المبـلغ</th>
            <th style="text-align: center; background-color: #E7EEFB;" >تاريـخ السـداد</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($ReceiptStudent as $Receipt )
            <tr>
                <td>{{ $Receipt->description }}</td>
                <td>{{  number_format($Receipt->Debit) }} ريال </td>
                <td>{{$Receipt->date}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
<br>


<div class="box-body">
    <div class="row">

<div class="col-md-4">
    <label style="text-align: center;">إجمالـي الـرسـوم الدراسيـة</label>
    <input  class="form-control" style="font-weight: bolder; font-size:15px; text-align: center; color:blue;" value="{{ number_format(auth()->user()->student_account->sum('Debit_feeInvoice') ) }} ريال " type="text" readonly>
</div>

<div class="col-md-4">
    <label style="text-align: center;">إجمالـي الـرسـوم المـدفوعـة</label>
    <input  class="form-control" style="font-weight: bolder; font-size:15px; text-align: center; color:green;" value="{{ number_format(auth()->user()->student_account->sum('credit_receipt') ) }} ريال " type="text" readonly>
</div>

<div class="col-md-4">
    <label style="text-align: center;">إجمالـي الـرسـوم المتبـقيـة</label>
    <input  class="form-control" style="font-weight: bolder; font-size:15px; text-align: center; color:red;" value="{{ number_format( auth()->user()->student_account->sum('Debit_feeInvoice') - auth()->user()->student_account->sum('credit_receipt') ) }} ريال " type="text" readonly>
</div>

</div>

@else
<h1 style="margin: 10px; padding:10px; font-weight: bold; text-align: center; background-color:#85A8CF; ">
    <marquee direction="right">
        <b style="font-weight: bold; font-size:larger; color:white; margin: 10px;">
            عـذراً لـم يتـم تسجيـلك لـهذي السـنة الـدراسيـة راجـع الإدارة 
        </b>
    </marquee>
    </h1>
@endif

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- row closed -->

{{-- 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
بيـانـات الـرسـوم  
</h1>
<ol class="breadcrumb">
<li><a href="{{ route('dashboard.Students') }}"><i class="fa fa-home"></i> الرئيسيـة</a></li>
<li class="active">بيـانـات الـرسـوم</li>
</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-xs-12">
<div class="box">

    @if(count($FeeInvoices) > 0)
<div class="box-body">
<div class="row">
    <div class="col-md-6">
        <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover" style="text-align: center" >

                    <thead>
                    <tr>
                       
                    </tr>
                    </thead>
                    <tbody>

            </tbody>
            </table>

        </div>

    </div>

    <div class="col-md-6">
        <div class="box-body table-responsive no-padding">
            <table class="table table-bordered table-hover" style="text-align: center" >

            <thead>
                <tr>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
            </div>

    </div>

    </div>
    </div><br>


<div class="box-body">
    <div class="row">

<div class="col-md-4">
    <label style="text-align: center;">إجمالـي الـرسـوم الدراسيـة</label>
    <input  class="form-control" style="font-weight: bolder; font-size:15px; text-align: center; color:blue;" value="{{ number_format(auth()->user()->student_account->sum('Debit_feeInvoice') ) }} ريال " type="text" readonly>
</div>

<div class="col-md-4">
    <label style="text-align: center;">إجمالـي الـرسـوم المـدفوعـة</label>
    <input  class="form-control" style="font-weight: bolder; font-size:15px; text-align: center; color:green;" value="{{ number_format(auth()->user()->student_account->sum('credit_receipt') ) }} ريال " type="text" readonly>
</div>

<div class="col-md-4">
    <label style="text-align: center;">إجمالـي الـرسـوم المتبـقيـة</label>
    <input  class="form-control" style="font-weight: bolder; font-size:15px; text-align: center; color:red;" value="{{ number_format( auth()->user()->student_account->sum('Debit_feeInvoice') - auth()->user()->student_account->sum('credit_receipt') ) }} ريال " type="text" readonly>
</div>

</div>

@else
<h1 style="margin: 10px; padding:10px; font-weight: bold; text-align: center; background-color:#85A8CF; ">
    <marquee direction="right">
        <b style="font-weight: bold; font-size:larger; color:white; margin: 10px;">
            عـذراً لـم يتـم تسجيـلك لـهذي السـنة الـدراسيـة راجـع الإدارة 
        </b>
    </marquee>
    </h1>
@endif

</div>


</div>
</div>
</div>

</section> --}}

@endsection
@section('js')

@endsection

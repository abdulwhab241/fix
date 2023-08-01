@extends('layouts.master')
@section('css')

@section('title')
الصنـدوق
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    الصنـدوق</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   الصنـدوق</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    الصنـدوق
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
<a href="{{ route('export_Boxes') }}" class="btn btn-info btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">    <i class="fas fa-file-download"></i> تصـديـر إكسـيل</a>


<br><br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-dark">
            <th style="text-align: center; background-color: #86B9D4;" >#</th>
            <th style="text-align: center; background-color: #86B9D4;" >أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center; background-color: #86B9D4;" >العملـيات</th>
            <th style="text-align: center; background-color: #86B9D4;" >الفواتير الدراسية</th>
            <th style="text-align: center; background-color: #86B9D4;" >المبلغ </th>
            <th style="text-align: center; background-color: #86B9D4;" >سندات القبض</th>
            <th style="text-align: center; background-color: #86B9D4;" >المبلغ </th>
            <th style="text-align: center; background-color: #86B9D4;" > معالجة الرسوم</th>
            <th style="text-align: center; background-color: #86B9D4;" >المبلغ </th>
            <th style="text-align: center; background-color: #86B9D4;" > سندات الصرف</th>
            <th style="text-align: center; background-color: #86B9D4;" >المبلغ </th>
            <th style="text-align: center; background-color: #86B9D4;" > تاريخ العمليات</th>
            <th style="text-align: center; background-color: #86B9D4;">تم بواسطة</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach($Boxes as $box)
                <tr>
                <?php $i++; ?>
                <td>{{ $i }}</td>
                <td>{{$box->student->name}}</td>
                <td>{{$box->type}}</td>
                <td>{{$box->fee_invoice}}</td>
                <td>{{ number_format($box->Debit_feeInvoice) }} ريال </td>
                <td>{{$box->receipt}}</td>
                <td>{{ number_format($box->credit_receipt) }} ريال </td>
                <td>{{$box->processing}}</td>
                <td>{{ number_format($box->credit_processing) }} ريال </td>
                <td>{{$box->payment}}</td>
                <td>{{ number_format($box->Debit_payment) }} ريال </td>
                <td>{{$box->date}}</td>
                <td>{{ $box->create_by }}</td>
                </tr>
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
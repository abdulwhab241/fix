@extends('layouts.master')
@section('css')

@section('title')
سندات القبض
@stop
@endsection



@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة سندات القبض</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة سندات القبض</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة سندات القبض
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
    <a href="{{route('Receipts.create')}}" class="btn btn-success btn-sm" style="margin: 5px; padding: 5px;" role="button"
    aria-pressed="true">اضافة سنـد تسديـد </a>
    <a class="btn btn-primary btn-sm" style="margin: 5px; padding: 5px;" title="تصـديـر إكسـيل" href="{{ route('export_receipts') }}">
        <i class="fas fa-file-download"></i>  تصـديـر إكسـيل
    </a>
</div>
<br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center;" class="alert-info">الرسوم</th>
            <th style="text-align: center;" class="alert-info">مبلغ السداد</th>
            <th style="text-align: center;" class="alert-info">البيان</th>
            <th style="text-align: center;" class="alert-info">رصـيد المتبقي</th>
            <th style="text-align: center;" class="alert-info">تاريخ السداد</th>
            <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($receipt_students as $receipt_student)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$receipt_student->student->name}}</td>
            <td>{{ number_format($receipt_student->student->student_account->sum('Debit_feeInvoice')) }} ريال </td>
            <td>{{ number_format($receipt_student->Debit) }} ريال </td>
            <td>{{$receipt_student->description}}</td>
            <td>{{ number_format($receipt_student->student->student_account->sum('Debit_feeInvoice')  - $receipt_student->student->student_account->sum('credit_receipt') - $receipt_student->student->student_account->sum('credit_processing') ) }} ريال </td>
            <td>{{$receipt_student->date}}</td>
            <td>{{$receipt_student->create_by}}</td>
                <td>
                    <div class="btn-group">
                    <a href="{{route('Receipts.edit',$receipt_student->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" aria-pressed="true">تعديل</a>
                    <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#Delete_receipt{{$receipt_student->id}}" >حذف</button>
                    </div>
                </td>
            </tr>
            @include('pages.Receipts.Delete')
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
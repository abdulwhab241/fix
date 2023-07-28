@extends('layouts.master')
@section('css')

@section('title')
معالجات الرسوم الدراسية
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة معالجات الرسوم الدراسية</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة معالجات الرسوم الدراسية</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة معالجات الرسوم الدراسية
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
        <a href="{{route('ProcessingFee.create')}}" class="btn btn-success btn-sm" style="margin: 5px; padding:5px;" role="button"
        aria-pressed="true">إضـافـة سـند  </a>
        <a class="btn btn-primary btn-sm" style="margin: 5px; padding:5px;" title="تصـديـر إكسـيل" href="{{ route('export_process') }}">
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
            <th style="text-align: center;" class="alert-info">رصيد الطالب</th>
            <th style="text-align: center;" class="alert-info">تاريخ المعالجة</th>
            <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($ProcessingFees as $ProcessingFee)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$ProcessingFee->student->name}}</td>
            <td>{{ number_format($ProcessingFee->amount) }} ريال </td>
            <td>{{$ProcessingFee->description}}</td>
            <td>{{ number_format($ProcessingFee->student->student_account->sum('Debit_feeInvoice')  - $ProcessingFee->student->student_account->sum('credit_receipt') - $ProcessingFee->student->student_account->sum('credit_processing') ) }} ريال </td>
            <td>{{$ProcessingFee->date}}</td>
            <td>{{$ProcessingFee->create_by}}</td>
                <td>
                    <div class="btn-group">
                    <a href="{{route('ProcessingFee.edit',$ProcessingFee->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" aria-pressed="true">تعديل</i></a>
                    <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#Delete_receipt{{$ProcessingFee->id}}" >حذف</button>
                    </div>
                </td>
            </tr>
            @include('pages.ProcessingFee.Delete')
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
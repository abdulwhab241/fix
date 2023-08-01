@extends('layouts.master')
@section('css')

@section('title')
الفواتير الدراسية
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة الفواتير الدراسية</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة الفواتير الدراسية</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة الفواتير الدراسية
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
        <a href="{{route('Fees_Invoices.create')}}" style="margin: 5px; padding:5px;" class="btn btn-success btn-sm" role="button"
        aria-pressed="true">اضافة فـاتـورة جديدة</a>
        <a class="btn btn-primary btn-flat" style="margin: 5px; padding:5px;" title="تصـديـر إكسـيل" href="{{ route('export_fee_invoices') }}">
            <i class="fas fa-file-download"></i>   تصـديـر إكسـيل
        </a>
    </div>
<br><br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">المرحلة الدراسية</th>
            <th style="text-align: center;" class="alert-info">الصف الدراسي</th>
            <th style="text-align: center;" class="alert-info">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center;" class="alert-info">نوع الرسوم</th>
            <th style="text-align: center;" class="alert-info">المبلغ</th>
            <th style="text-align: center;" class="alert-info">البيان</th>
            <th style="text-align: center;" class="alert-info">تاريخ الفاتورة</th>
            <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach($Fee_invoices as $Fee_invoice)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$Fee_invoice->grade->name}}</td>
                <td>{{$Fee_invoice->classroom->name_class}}</td>
                <td>{{$Fee_invoice->student->name}}</td>
                <td>{{$Fee_invoice->fees->fee_type}}</td>
                <td>{{ number_format($Fee_invoice->amount) }} ريال </td>
                <td>{{$Fee_invoice->description}}</td>
                <td>{{$Fee_invoice->invoice_date}}</td>
                <td>{{ $Fee_invoice->create_by }}</td>
                <td>
                    <div class="btn-group">
                    <a href="{{route('Fees_Invoices.edit',$Fee_invoice->id)}}" style="margin: 3px;" title="تعديل" class="btn btn-info btn-sm" role="button" aria-pressed="true">تعديل</a>
                    <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" title="حـذف" data-toggle="modal" data-target="#Delete_Fee_invoice{{$Fee_invoice->id}}" >حـذف</button>
                    </div>                       
                </td>
            </tr>
            @include('pages.Fees_Invoices.Delete')
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
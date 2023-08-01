@extends('layouts.master')
@section('css')

@section('title')
قائمة الترقيات
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة الترقيات</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة الترقيات</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة الترقيات
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

<a href="{{route('Upgrades.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة ترقيـة جديدة</a><br><br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #A8DBFA;" >#</th>
            <th style="text-align: center; background-color: #A8DBFA;" >أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center; background-color: #A8DBFA;" >المرحلة الدراسية السابقة</th>
            <th style="text-align: center; background-color: #A8DBFA;" >السنة الدراسية</th>
            <th style="text-align: center; background-color: #A8DBFA;" >الصف الدراسي السابق</th>
            <th style="text-align: center; background-color: #E7EEFB;">المرحلة الدراسية الحالي</th>
            <th style="text-align: center; background-color: #E7EEFB;">السنة الدراسية الحالية</th>
            <th style="text-align: center; background-color: #E7EEFB;">الصف الدراسي الحالي</th>
            <th style="text-align: center; background-color: #E7EEFB;"> تـم الترقيـة بواسطـة</th>
            <th style="text-align: center; background-color: #FEC868;">العمليات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($promotions as $promotion)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td scope="row">{{$promotion->student->name}}</td>
                <td scope="row">{{$promotion->f_grade->name}}</td>
                <td scope="row">{{$promotion->academic_year}}</td>
                <td scope="row">{{$promotion->f_classroom->name_class}}</td>
            
                <td>{{$promotion->t_grade->name}}</td>
                <td>{{$promotion->academic_year_new}}</td>
                <td>{{$promotion->t_classroom->name_class}}</td>
            
                <td>{{$promotion->create_by}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#Delete_one{{ $promotion->id }}" title="إرجاع الطالب">إرجاع الطالب</button>
                    </div>
                </td>
            </tr>
            @include('pages.Upgrades.Delete_all')
            @include('pages.Upgrades.Delete_one')
            @endforeach
        </tbody>
        </table>
        @isset($promotion)
        <div class="footer">
        <button type="button" 
        class="btn btn-danger btn-block"
        style="margin: 10px; padding:5px;" data-toggle="modal" data-target="#Delete_all">
            إرجـاع الكل
        </button>
        </div>
        @endisset
    </div>
    <div class="footer">
        <a href="{{ route('promotion.print') }}" style="margin: 10px; padding:5px;" class="btn btn-info pull-left">
            <i class="fa fa-print" aria-hidden="true"></i>  طبـاعـة  </a>
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
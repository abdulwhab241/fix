@extends('layouts.master')
@section('css')
    
@section('title')
    قائمة الـمستخـدميـن
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة الـمستخـدميـن</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة الـمستخـدميـن</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة الـمستخـدميـن
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
<a href="{{route('Users.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة مستخدم جديد</a><br><br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">أسم مستـخـم</th>
            <th style="text-align: center;" class="alert-info">رقـم الـهاتـف</th>
            <th  style="text-align: center;  background-color: #D0DEF6;">النوع</th>
            <th style="text-align: center;" class="alert-info">العـنوان</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach($Users as $User)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$User->name}}</td>
            <td>{{$User->phone_number}}</td>
            <th style="text-align: center;  background-color: #D0DEF6;">{{$User->job}}</th>
            <td>{{$User->address}}</td>
            
                <td>
                    <div class="btn-group">
                        <a href="#" style="margin: 3px;" class="btn btn-info btn-sm" title="تعديل" role="button" aria-pressed="true">تعديل</a>
                    {{-- <a href="{{route('Users.edit',$User->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" title="تعديل" role="button" aria-pressed="true">تعديل</a>
                    <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#delete_User{{ $User->id }}" title="حذف"><i class="fa fa-trash"></i></button> --}}
                    </div>
                </td>
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
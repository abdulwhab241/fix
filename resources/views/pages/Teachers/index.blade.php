@extends('layouts.master')
@section('css')

@section('title')
المعلمين
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة المعلمين</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة المعلمين</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة المعلمين
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

<a href="{{route('Teachers.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة معلم جديد</a><br><br>
<div class="table-responsive">
<table id="datatable" class="table  table-hover table-sm table-bordered p-0"
    data-page-length="50"
    style="text-align: center">
<thead>
<tr class="alert-success">
    <th style="text-align: center;" class="alert-info">#</th>
    <th style="text-align: center;" class="alert-info">أسم المعلم</th>
    <th style="text-align: center;" class="alert-info">الهاتف</th>
    <th style="text-align: center;" class="alert-info">النوع</th>
    <th style="text-align: center;" class="alert-info">تاريخ التعيين</th>
    <th style="text-align: center;" class="alert-info">التخصص</th>
    <th style="text-align: center;" class="alert-info"> العنوان</th>
    <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
    <th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>
<?php $i = 0; ?>
@foreach($Teachers as $Teacher)
<tr>
    <?php $i++; ?>
    <td>{{ $i }}</td>
    <td>{{$Teacher->name}}</td>
    <td>{{$Teacher->phone_number}}</td>
    <td>{{$Teacher->genders->name}}</td>
    <td>{{$Teacher->joining_date}}</td>
    <td>{{$Teacher->specializations->name}}</td>
    <td>{{$Teacher->address}}</td>
    <td>{{ $Teacher->create_by }}</td>
        <td>
            <div class="btn-group">
            <a href="{{route('Teachers.edit',$Teacher->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" aria-pressed="true" title="تعديل">تعديل</a>
            <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#delete_Teacher{{ $Teacher->id }}" title="حذف">حذف</button>
            </div>
        </td>
        
</tr>

<div class="modal fade" id="delete_Teacher{{$Teacher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
        <form action="{{route('Teachers.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حذف معلم</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
            </div>
            <div class="modal-body">
                <p> هل انت متاكد من عملية حذف المعلم</p>
                <input type="hidden" name="id"  value="{{$Teacher->id}}">
                <input  type="text" style="font-weight: bolder; font-size:20px;"
                name="Name_Section"
                class="form-control"
                value="{{ $Teacher->name }}"
                disabled>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline"
                        data-dismiss="modal">إغلاق</button>
                <button type="submit"
                        class="btn btn-danger">حذف البيانات</button>
            </div>
        </div>
        </form>
    </div>
</div>

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
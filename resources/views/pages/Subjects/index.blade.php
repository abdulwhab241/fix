@extends('layouts.master')
@section('css')

@section('title')
قائمة المواد الدراسية
@stop
@endsection



@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">    قائمة المواد الدراسية</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active">   قائمة المواد الدراسية</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
قائمة المواد الدراسية
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<a href="{{route('Subjects.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة مادة دراسية جديدة</a><br><br>
<div class="table-responsive">
<table id="data" class="table  table-hover table-sm table-bordered p-0"
data-page-length="50"
style="text-align: center">
<thead>
<tr class="alert-success">
<th style="text-align: center;" class="alert-info">#</th>
<th style="text-align: center;" class="alert-info">أسم المادة</th>
<th style="text-align: center;" class="alert-info">المرحلة الدراسية</th>
<th style="text-align: center;" class="alert-info">الصف الدراسي</th>
<th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
<th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>
<?php $i = 0; ?>
@foreach($subjects as $subject)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$subject->name}}</td>
<td>{{$subject->grade->name}}</td>
<td>{{$subject->classroom->name_class}}</td>
<td>{{ $subject->create_by }}</td>
<td>
    <div class="btn-group">
    <a href="{{route('Subjects.edit',$subject->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" title="تعديل" role="button" aria-pressed="true">تعديل</a>
    <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#delete_subject{{ $subject->id }}" title="حذف">حذف</button>
    </div>
</td>
</tr>

<div class="modal fade" id="delete_subject{{$subject->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
        <form action="{{route('Subjects.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حـذف مـادة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
            </div>
            <div class="modal-body">
                <p> هل انت متاكد من عملية حذف المـادة </p>
                <input type="hidden" name="id"  value="{{$subject->id}}">
                <input  type="text" style="font-weight: bolder; font-size:20px;"
                name="Name_Section"
                class="form-control"
                value="{{$subject->name}}"
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
<!-- row closed -->
@endsection
@section('js')

@endsection
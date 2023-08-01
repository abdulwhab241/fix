@extends('layouts.master')

@section('css')

@section('title')
الأقسـام
@stop
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0"> الأقسـام</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active">الأقسـام</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
الأقسـام
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
<a class="btn btn-success btn-sm" href="#" data-toggle="modal" style="padding:5px; margin: 5px;" data-target="#exampleModal">
اضافة قسـم</a>
<br><br>
@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif


<div class="card card-statistics h-100">
<div class="card-body">
<div class="accordion gray plus-icon round">

@foreach ($Grades as $Grade)

<div class="acd-group">
<a href="#" class="acd-heading">{{ $Grade->name }}</a>
<div class="acd-des">

<div class="row">
<div class="col-xl-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<div class="d-block d-md-flex justify-content-between">
<div class="d-block">
</div>
</div>
<div class="table-responsive mt-15">
<table class="table table-hover table-sm table-bordered p-0" style="text-align: center">
<thead>
<tr class="text-dark">
<th style="text-align: center;" class="alert-info">#</th>
<th style="text-align: center;" class="alert-info"> المرحلـة</th>
<th style="text-align: center;" class="alert-info"> الصـف</th>
<th style="text-align: center;" class="alert-info"> القسـم</th>
<th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
<th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>
<?php $i = 0; ?>
@foreach ($Grade->Sections as $list_Sections)
<tr>
<?php $i++; ?>
<td>{{ $i }}</td>
<td>{{ $list_Sections->Grades->name }}</td>
<td>{{ $list_Sections->My_Classes->name_class }}</td>
<td style="font-weight: bold; font-size: 20px;">{{ $list_Sections->name_section }}</td>
<td>{{ $list_Sections->create_by }}</td>
<td>
<div class="btn-group">
<button type="button" style="margin: 3px;" class="btn btn-info btn-sm" data-toggle="modal"
data-target="#edit{{ $list_Sections->id }}"
title="تعديل">تعديل</button>
<button type="button" style="margin: 3px;" class="btn btn-danger btn-sm" data-toggle="modal"
data-target="#delete_section{{ $list_Sections->id }}"
title="حذف">حذف</button>
</div>
</td>
</tr>

<!--تعديل قسم جديد -->
<div class="modal fade"
id="edit{{ $list_Sections->id }}"
tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-success" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title"
style="font-family: 'Cairo', sans-serif; font-weidth:bold; font-size:20;" 
id="exampleModalLabel">
تعديل قسـم
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">

<form class="form-horizontal" action="{{ route('Sections.update', 'test') }}" method="POST">
{{ method_field('patch') }}
{{ csrf_field() }}

<div class="box-body">
<div class="row">

<div class="col-md-4">
<label >المرحـلة الدراسيـة</label>
<select name="Grade_id" class="custom-select">
<option value="{{ $Grade->id }}"> {{ $Grade->name }} </option>
@foreach ($list_Grades as $list_Grade)
<option value="{{ $list_Grade->id }}">{{ $list_Grade->name }}</option>
@endforeach    
</select>
</div>

<div class="col-md-4">
<label >الصــف الدراسـي</label>
<select name="Classroom_id" class="custom-select">
<option value="{{ $list_Sections->My_Classes->id }}">
{{ $list_Sections->My_Classes->name_class }}
</option>

</select>
</div>

<div class="col-md-4">
<label >القسـم</label>
<select class="custom-select" name="Name_Section">
<option >{{$list_Sections->name_section}}</option>
<option value="أ">أ</option>
<option value="ب">ب</option>
<option value="ج">ج</option>
</select>

<input id="id"
type="hidden"
name="id"
class="form-control"
value="{{ $list_Sections->id }}">
</div>
</div><br>
<div class="row">
<div class="col-md-6">
<label >المعلـم</label>
<select name="teacher_id[]" class="form-control" id="exampleFormControlSelect2" multiple="multiple">
@foreach($list_Sections->teachers as $teacher)
<option selected value="{{$teacher['id']}}">{{$teacher['name']}}</option>
@endforeach

@foreach($teachers as $teacher)
<option value="{{$teacher->id}}">{{$teacher->name}}</option>
@endforeach
</select>
</div>
</div><br>


</div>
<div class="modal-footer">

<button type="submit"
class="btn btn-success btn-block">تعديل البيانات</button>
</div>

</form>
</div>
</div>
</div>
</div>

<!-- delete_modal_Section -->
<div class="modal fade" id="delete_section{{ $list_Sections->id }}" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-danger" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
id="exampleModalLabel">
حـذف قسـم
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
</div>
<div class="modal-body">
<form action="{{ route('Sections.destroy', 'test') }}" method="post">
{{ method_field('Delete') }}
@csrf
هل انت متاكد من عملية حـذف القسـم ؟
<input id="Name" type="text" name="Name"
class="form-control"
value="{{ $list_Sections->name_section }}"
disabled style="text-align: center; font-weidth:bolder; font-size:20px;">
<input id="id" type="hidden" name="id" class="form-control"
    value="{{ $list_Sections->id }}">
    <div class="modal-footer">
        <button type="button" class="btn btn-outline"
                data-dismiss="modal">إغلاق</button>
        <button type="submit"
                class="btn btn-danger">حذف البيانات</button>
    </div>
</form>
</div>
</div>
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
@endforeach
</div>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>


<!--اضافة قسم جديد -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-success" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" style="font-family: 'Cairo', sans-serif;" id="exampleModalLabel">
اضافة قسـم
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">

<form class="form-horizontal" action="{{ route('Sections.store') }}" method="POST">
{{ csrf_field() }}
<div class="box-body">

<div class="row">

<div class="col-md-4">
<label >المرحـلة الدراسيـة</label>
<select name="Grade_id" class="custom-select">
<option selected disabled>اختـر من القائمة...</option>
@foreach ($Grades as $list_Grade)
<option value="{{ $list_Grade->id }}"> {{ $list_Grade->name }}
</option>
@endforeach
</select>
</div>

<div class="col-md-4">
<label >الصــف الدراسـي</label>
<select name="Classroom_id" class="custom-select">

</select>
</div>

<div class="col-md-4">
<label >القسـم</label>
<select class="custom-select" name="Name_Section">
<option selected disabled>اختـر من القائمة...</option>
<option value="أ">أ</option>
<option value="ب">ب</option>
<option value="ج">ج</option>
</select>
</div>

</div><br>
<div class="row">
<div class="col-md-6">
<label >المعلـم</label>
<select name="teacher_id[]" class="form-control" id="exampleFormControlSelect1" multiple="multiple">
@foreach ($teachers as $teacher)
<option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
@endforeach
</select>
</div>
</div><br>

</div>

<div class="modal-footer">
<button type="submit"
class="btn btn-success btn-block">حفظ البيانات</button>
</div>


</form>

</div>
</div>
</div>

</div>
<!-- row closed -->


@endsection
@section('js')

@endsection

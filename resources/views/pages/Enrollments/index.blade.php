@extends('layouts.master')
@section('css')

@section('title')
قـائمـة تسجيـل الطـلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">    قـائمـة تسجيـل الطـلاب</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
    <li class="breadcrumb-item active">   قـائمـة تسجيـل الطـلاب</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
قـائمـة تسجيـل الطـلاب
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
<a href="{{route('Enrollments.create')}}" class="btn btn-success btn-flat" role="button"
aria-pressed="true">تسـجيـل الطـلاب </a>
<button type="button" class="btn btn-info btn-flat" title="تسجيل الطالب الذي تم إلغاء تسجيله" style="margin: 5px; padding: 5px;" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-user-plus" aria-hidden="true"></i> تسجيل الطالب الذي تم إلغاء تسجيله
</button>
</div>
<br><br>
<div class="table-responsive">
<table id="datatable" class="table  table-hover table-sm table-bordered p-0"
data-page-length="50"
style="text-align: center">
<thead>
<tr class="alert-success">
<th style="text-align: center;" class="alert-info">#</th>
<th style="text-align: center;" class="alert-info">السنة الدراسية</th>
<th style="text-align: center;" class="alert-info">أسـم الطـالـب</th>
<th style="text-align: center;" class="alert-info">المرحلـة الدراسيـة</th>
<th style="text-align: center;" class="alert-info">الصـف الدراسـي</th>
<th style="text-align: center;" class="alert-info">الشعـبة</th>
<th style="text-align: center;" class="alert-success"> تـاريـخ التسجيل</th>
<th style="text-align: center;" class="alert-success"> تم بواسطـة</th>
<th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>
@foreach($Enrollments as $Enrollment)
<tr>
<td>{{ $loop->index+1 }}</td>
<td>{{$Enrollment->year }}</td>
<td>{{$Enrollment->student->name}}</td>

<td>{{$Enrollment->grade->name}}</td>
<td>{{$Enrollment->classroom->name_class}}</td>
<td>{{$Enrollment->section->name_section}}</td>
<td>{{$Enrollment->date }}</td>
<td>{{ $Enrollment->create_by }}</td>
    <td>
        <div class="btn-group">
        <button type="button" style="margin: 3px;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $Enrollment->id }}" title="إلـغاء تسجيـل الطالب">إلـغاء تسجيـل الطالب </button>
        </div>
    </td>
</tr>

<!-- Deleted inFormation Student -->
<div class="modal fade" id="delete{{$Enrollment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-warning">
<div class="modal-content">
<div class="modal-header">
    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">إلـغاء تسجيـل الطـالـب</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
    <form action="{{route('Enrollments.destroy','test')}}" method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{$Enrollment->id}}}">
        <h5 style="font-family: 'Cairo', sans-serif; font-size:20px;">هل انت متاكد من عملية الغاء تسجيـل الطـالـب ؟</h5>
        <input type="text" readonly value="{{$Enrollment->student->name}}" style=" font-weight: bolder; font-size:20px; text-align: center;" class="form-control">

        <div class="modal-footer">
            <button type="button" class="btn btn-outline"
                    data-dismiss="modal">إغلاق</button>
            <button type="submit"
                    class="btn btn-danger">تـأكيـد </button>
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
</div>
</div>
<!-- row closed -->


@endsection
@section('js')

@endsection
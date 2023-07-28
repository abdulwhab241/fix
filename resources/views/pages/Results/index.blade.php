@extends('layouts.master')
@section('css')

@section('title')
قائمة النتـائـج
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">    قائمة النتـائـج الشـهـريـة</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
    <li class="breadcrumb-item active">   قائمة النتـائـج الشـهـريـة</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
قائمة النتـائـج الشـهـريـة
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
<a href="{{route('Results.create')}}" class="btn btn-success btn-sm" style="margin: 5px; padding: 5px;" role="button"
aria-pressed="true">اضافة نتيـجـة</a>
<a class="btn btn-primary btn-sm" style="margin: 5px; padding: 5px;" title="تصـديـر إكسـيل" href="{{ route('export_results') }}">
<i class="fas fa-file-download"></i>  تصـديـر إكسـيل
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
<th style="text-align: center;" class="alert-info">الفصـل الدراسي</th>
<th style="text-align: center;" class="alert-info"> نتيـجة شهـر</th>
<th style="text-align: center;" class="alert-info"> المـادة</th>
<th style="text-align: center;" class="alert-info">أسـم الطـالـب \ الطـالبـة </th>
<th style="text-align: center;" class="alert-info">الدرجـة التي حصـل عليـها </th>
<th style="text-align: center;" class="alert-info">التقـديـر</th>
<th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
<th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>
<?php $i = 0; ?>
@foreach ($Results as $Result)
    <tr>
        <?php $i++; ?>
        <td>{{ $i }}</td>
        <td>{{ $Result->semester->name }}</td>
        <td>{{$Result->month->name}}</td>
        <td>{{ $Result->exam->subject->name }}</td>
        <td>{{ $Result->student->name }}</td>
        <td>{{$Result->marks_obtained}}</td>
        <td>{{$Result->appreciation}}</td>
        <td>{{ $Result->create_by }}</td>
        <td>
            <div class="btn-group">
            <a href="{{route('Results.edit',$Result->id)}}" style="margin: 3px;" title="تعديل" class="btn btn-info btn-sm" role="button" aria-pressed="true">تعديل</a>
            <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#delete_Result{{ $Result->id }}" title="حذف">حذف</button>
            </div>
        </td>
    </tr>

<!-- Delete modal -->
<div class="modal fade" id="delete_Result{{$Result->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-danger" role="document">
<form action="{{route('Results.destroy','test')}}" method="post">
{{method_field('delete')}}
{{csrf_field()}}
<div class="modal-content">
<div class="modal-header">
    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
        حـذف نتيـجة الطـالـب <label style="color: #5686E0; font-weight:bolder; font-size: 20px;">{{ $Result->student->name }}</label>
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
    <p> هل انت متاكد من عملية حذف نتيجـة الطـالـب  </p>
    <input type="hidden" name="id"  value="{{$Result->id}}">
    <input  type="text" style="font-weight: bolder; font-size:20px;"
    name="Name_Section"
    class="form-control"
    value="{{$Result->student->name}}"
    disabled>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline"
            data-dismiss="modal">إغلاق</button>
    <button type="submit"
            class="btn btn-danger">تـأكـيد</button>
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
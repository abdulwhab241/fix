@extends('layouts.master')
@section('css')

@section('title')
جدول حصـص المعلمين
@stop
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة جدول حصـص المعلمين</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة جدول حصـص المعلمين</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة جدول حصـص المعلمين
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
<a href="{{route('Classes_Teacher.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة جدول حصـص المعلمين</a><br><br>
<div class="table-responsive">
<table id="data" class="table  table-hover table-sm table-bordered p-0"
    data-page-length="50"
    style="text-align: center">
<thead>
<tr class="alert-success">
    <th style="text-align: center;" class="alert-info">اليوم</th>
    <th style="text-align: center;" class="alert-info">الأستاذ</th>
    <th style="text-align: center;" class="alert-info"> الحصـة الأولـى</th>
    <th style="text-align: center;" class="alert-info"> الحصـة الثـانيـة</th>
    <th style="text-align: center;" class="alert-info"> الحصـة الثـالثـة</th>
    <th style="text-align: center;" class="alert-info"> الحصـة الرابعـة</th>
    <th style="text-align: center;" class="alert-info">  الحصـة الخـامسـة</th>
    <th style="text-align: center;" class="alert-info">  الحصـة السـادسـة</th>
    <th style="text-align: center;" class="alert-info">  الحصـة السـابعـة</th>
    <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
    <th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>
    @foreach ($teacher_classes as $TeacherClass)
    <tr>
        <td>{{ $TeacherClass->day }}</td>
        <td>{{ $TeacherClass->teacher->name }}</td>
        <td>{{ $TeacherClass->first }}</td>
        <td>{{ $TeacherClass->second }}</td>
        <td>{{ $TeacherClass->third }}</td>
        <td>{{ $TeacherClass->fourth }}</td>
        <td>{{ $TeacherClass->fifth }}</td>
        <td>{{ $TeacherClass->sixth }}</td>
        <td>{{ $TeacherClass->seventh }}</td>
        <td>{{ $TeacherClass->create_by }}</td>
        <td>
            <div class="btn-group">
                <a href="{{route('Classes_Teacher.edit',$TeacherClass->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" aria-pressed="true" title="تعديل">تعديل</a>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" style="margin: 3px;" data-target="#delete{{ $TeacherClass->id }}" title="حذف">حذف</button>
            </div>
        </td>
    </tr>

<div class="modal fade" id="delete{{$TeacherClass->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-danger" role="document">
    <form action="{{route('Classes_Teacher.destroy','test')}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حـذف جدول حصـص المعلـم</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
        </div>
        <div class="modal-body">
            <p>  هل انت متاكد من عملية حذف بيانـات جدول حصـص الأستاذ  </p>
            <input type="hidden" name="id"  value="{{$TeacherClass->id}}">
            <input  type="text" style="font-weight: bolder; font-size:20px;"
            name="Name_Section"
            class="form-control"
            value="{{$TeacherClass->teacher->name}}"
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
<div class="footer">
    <a href="{{ route('TeacherClasses.print') }}" style="margin: 10px; padding:5px;" class="btn .btn.bg-navy  pull-left">
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
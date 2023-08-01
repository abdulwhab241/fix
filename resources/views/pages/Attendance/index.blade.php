@extends('layouts.master')
@section('css')

@section('title')
قائمة الحضور والغياب للطلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">    قائمة الحضور والغياب للطلاب</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active">   قائمة الحضور والغياب للطلاب</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
قائمة الحضور والغياب للطلاب
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
<a href="{{route('Attendance.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">تحضيـر</a>
<br><br>
<div class="table-responsive">
<table id="datatable" class="table  table-hover table-sm table-bordered p-0"
        data-page-length="50"
        style="text-align: center">
    <thead>
    <tr class="alert-success">
        <th style="text-align: center;" class="alert-info">#</th>
        <th style="text-align: center;" class="alert-info">اليـوم</th>
        <th style="text-align: center;" class="alert-info">أسـم الطـالـب \ الطـالبـة</th>
        <th style="text-align: center;" class="alert-info">الصـف الـدراسـي</th>
        <th style="text-align: center;" class="alert-info">الشـعبـة</th>
        <th style="text-align: center;" class="alert-info">الحـالـة</th>
        <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
        <th style="text-align: center;" class="alert-warning">العمليات</th>
    </tr>
    </thead>
    <tbody>
        @foreach($Attendances as $Attendance)
        <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{$Attendance->day}}</td>
        <td>{{$Attendance->students->name }} </td>
        <td>{{$Attendance->classroom->name_class}}</td>
        <td >{{$Attendance->section->name_section}}</td>
        <td style=" background-color: #D0DEF6; font-weight:bolder;">{{$Attendance->attendance_status}}</td>
        <td>{{ $Attendance->create_by }}</td>
            <td>
                <div class="btn-group">
                <a href="{{route('Attendance.edit',$Attendance->id)}}" style="margin: 3px;" title="تعديل" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                <button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#Delete_Attendance{{ $Attendance->id }}" title="حـذف"><i class="fa fa-trash"></i></button>
                </div>
            </td>
        </tr>
    
    
    <!-- delete_modal_Grade -->
    <div class="modal fade" id="Delete_Attendance{{ $Attendance->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
        id="exampleModalLabel">
        حـذف تحضـير الطـالـب <label style="color: #5686E0; font-weight:bolder; font-size: 20px;">{{ $Attendance->students->name }}</label>
    </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
    </div>
    <div class="modal-body">
        <form action="{{ route('Attendance.destroy', 'test') }}" method="post">
            {{ method_field('Delete') }}
            @csrf
            <h5 style="font-family: 'Cairo', sans-serif;"> هل انت متاكد من عملية حـذف تحضيـر الطـالـب ؟ </h5>
            <input id="Name" type="text" name="Name"
            class="form-control" style="text-align: center; font-weight:bolder; font-size: 20px;"
            value="{{ $Attendance->students->name }}"
            disabled>
            <input id="id" type="hidden" name="id" class="form-control"
                value="{{ $Attendance->id }}">
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline "
                            data-dismiss="modal">إغلاق</button>
                    <button type="submit"
                            class="btn btn-danger">تـأكـيد</button>
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
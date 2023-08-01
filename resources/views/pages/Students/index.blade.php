@extends('layouts.master')
@section('css')
    
@section('title')
    قائمة الطـلاب
@stop
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة الطـلاب</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة الطـلاب</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة الطـلاب
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
<a href="{{route('Students.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة طـالـب</a>
<a class="btn btn-primary btn-sm" title="تصـديـر إكسـيل" href="{{ route('export_students') }}">
    <i class="fas fa-file-download"></i>   تصـديـر إكسـيل
</a>
<br><br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center;" class="alert-info"> الجنـس</th>
            <th style="text-align: center;" class="alert-info"> الـمؤهـل</th>
            <th style="text-align: center;" class="alert-info">المرحلة الدراسية</th>
            <th style="text-align: center;" class="alert-info">الصف الدراسي</th>
            <th style="text-align: center;" class="alert-info"> الشعـبة</th>
            <th style="text-align: center;" class="alert-info">أسـم الأب </th>
            <th style="text-align: center;"  class="alert-success"> انشـئ بواسطـة</th>
            <th style="text-align: center;" class="alert-warning"> العمليات</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($Students as $Student)
                <tr>
                    <?php $i++; ?>
                    <td>{{ $i }}</td>
                    <td>{{ $Student->name }}</td>
                    <td>{{ $Student->gender->name }}</td>
                    <td>{{ $Student->qualification }}</td>
                    <td>{{$Student->grade->name}}</td>
                    <td>{{$Student->classroom->name_class}}</td>
                    <td style="font-weight: bolder;">{{$Student->section->name_section}}</td>
                    <td>{{ $Student->father_name }}</td>
                    <td > {{ $Student->create_by }}</td>
                    <td>
                        <div class="dropdown show">
                            <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                العمليات
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('Students.show',$Student->id)}}" >عـرض بيـانـات الطـالب</a>
                            <a class="dropdown-item" href="{{route('Students.edit',$Student->id)}}">تـعديـل</a>
                            <a class="dropdown-item btn" data-toggle="modal" data-target="#delete_Student{{ $Student->id }}">حـذف</a>
                            </div>
                        </div><!-- /btn-group -->
                    </td>
                </tr>
        
        
        <div class="modal fade" id="delete_Student{{$Student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-danger" role="document">
                <form action="{{route('Students.destroy','test')}}" method="post">
                    {{method_field('delete')}}
                    {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حـذف طـالـب</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                    
                    </div>
                    <div class="modal-body">
                        <p> هل انت متاكد من عملية حذف الطـالـب </p>
                        <input type="hidden" name="id"  value="{{$Student->id}}">
                        <input  type="text" style="font-weight: bolder; font-size:20px;"
                        name="Name_Section"
                        class="form-control"
                        value="{{$Student->name}}"
                        disabled>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline"
                                data-dismiss="modal">إغلاق</button>
                        <button type="submit"
                                class="btn btn-danger">حذف </button>
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
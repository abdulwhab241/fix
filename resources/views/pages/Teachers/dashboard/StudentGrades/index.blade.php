@extends('layouts.master')
@section('css')

@section('title')
كشـف درجـات الطـلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة كشـف درجـات الطـلاب</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة كشـف درجـات الطـلاب</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة كشـف درجـات الطـلاب
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
<a href="{{route('Teacher_Grades.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة كشـف الـدرجـات</a><br><br>
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

@foreach ($Classrooms as $Classroom)

<div class="acd-group">
<a href="#" class="acd-heading">
    {{ $Classroom->My_Classes->name_class }} , الـشـعبـة: {{ $Classroom->name_section }} 
</a>
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
    <th style="text-align: center; background-color: #D0DEF6;">الفـصل</th>
    <th style="text-align: center; background-color: yellow;" >محصـلـة شهـر</th>
    <th style="text-align: center; background-color: #D0DEF6;">المادة</th>
    <th style="text-align: center; background-color: #D0DEF6;">أسـم الطـالـب \ الطـالبـة</th>
    <th style="text-align: center; background-color: #D0DEF6;">واجبـات</th>
    <th style="text-align: center; background-color: #D0DEF6;">شفهـي</th>
    <th style="text-align: center; background-color: #D0DEF6;">مـواظبـة</th>
    <th style="text-align: center; background-color: #E7EEFB;">تحريري</th>
    <th style="text-align: center; background-color: #FFC0D6;"> المحصـلة</th>
    <th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>
    @foreach($Classroom->StudentGrades as $Student_Grade)
    <tr>
        <td>{{$Student_Grade->semester->name}}</td>
        <td style="background-color: yellow; font-weight:bolder;">{{ $Student_Grade->month->name }}</td>
        <td>{{$Student_Grade->subject->name}}</td>
        <td>{{$Student_Grade->student->name}}</td>
        <td>{{$Student_Grade->homework }}</td>
        <td>{{$Student_Grade->verbal}}</td>
        <td>{{ $Student_Grade->attendance }}</td>
        <td style="background-color: #E7EEFB; font-weight:bolder;">{{ $Student_Grade->result }}</td>
        <td style="background-color: #FFC0D6; font-weight:bolder;">{{ $Student_Grade->total }}</td>
        <td>
            <div class="btn-group">
            <a href="{{route('Teacher_Grades.edit',$Student_Grade->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" aria-pressed="true" title="تعديل">تعديل</a>
            <button type="button" style="margin: 3px;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_result{{ $Student_Grade->id }}" title="حذف">حذف</button>
            </div>
        </td>
    </tr>

<!-- Delete modal -->
<div class="modal fade" id="delete_result{{$Student_Grade->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-danger" role="document">
<form action="{{route('Teacher_Grades.destroy',$Student_Grade->id)}}" method="post">
{{method_field('delete')}}
{{csrf_field()}}
<div class="modal-content">
<div class="modal-header">
    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حـذف محصلة الطالب</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
    <p> هل انت متاكد من عملية حذف محصلة الطـالـب  </p>
    <input type="hidden" name="id"  value="{{$Student_Grade->id}}">
    <input  type="text" style="font-weight: bolder; font-size:20px;"
    name="Name_Section"
    class="form-control"
    value="{{$Student_Grade->student->name}}"
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
    <a href="{{ route('Teacher_Grades.print',$Classroom->id) }}" style="margin: 10px; padding:5px;" class="btn btn-info pull-left">
        <i class="fa fa-print" aria-hidden="true"></i>  طبـاعـة  </a>
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
<!-- row closed -->
@endsection
@section('js')

@endsection
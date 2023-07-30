@extends('layouts.master')
@section('css')

@section('title')
قائمة النتـائـج الشـهـريـة
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
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
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
<a href="{{route('TeacherResult.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة نتيجـة شهرية جديدة</a>
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

@foreach ($results as $result)

<div class="acd-group">
<a href="#" class="acd-heading">
    {{ $result->My_Classes->name_class }} , الـشـعبـة: {{ $result->name_section }} 
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
    <th style="text-align: center; background-color: #D0DEF6;">أسـم الطـالـب \ الطـالبـة </th>
    <th style="text-align: center;  background-color: #D0DEF6;" > المـادة</th>
    <th style="text-align: center;  background-color: yellow; font-weight:bolder;" >نتيـجـة إختبـار شهـر </th>
    <th style="text-align: center;  background-color: #D0DEF6;" >الدرجـة التي حصـل عليـها </th>
    <th style="text-align: center;  background-color: #D0DEF6;" >التقـديـر </th>
    <th style="text-align: center;" class="alert-warning">العمليـات</th>
</tr>
</thead>
<tbody>
    @foreach($result->Results as $Result)
        <tr>

            <td>{{$Result->student->name}}</td>
            <td>{{$Result->exam->subject->name}}</td>
            <td style="background-color: yellow; font-weight:bolder;">{{$Result->month->name}}</td>
            <td>{{$Result->marks_obtained}}</td>
            <td style="font-weight: bolder; background-color: #D0DEF6;">{{$Result->appreciation}}</td>
            <td>
                <div class="btn-group">
                <button type="button" style="margin: 3px;" class="btn btn-info btn-sm" data-toggle="modal"
                data-target="#edit{{ $Result->id }}"
                title="تعديل">تعديل</button>
                <button type="button" style="margin: 3px;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_result{{ $Result->id }}" title="حذف">حذف</button>
                </div>
            </td>
        </tr>

<!-- edit_modal_Grade -->
<div class="modal fade" id="edit{{ $Result->id }}" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-primary" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
id="exampleModalLabel">
تعديل نتيجـة الطـالـب {{$Result->student->name}}
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
<!-- add_form -->
<form class="form-horizontal"  action="{{ route('TeacherResult.update','test' ) }}" method="post">
{{ method_field('patch') }}
@csrf
<div class="box-body">

    <div class="row">
        <div class="col-md-6">
            <label >الفصل الدراسي</label>
            <select class="form-control form-control-lg" name="Semester_id">
                <option value="{{ $Result->semester_id }}"> {{ $Result->semester->name }} </option>
                @foreach ($Semesters as $Semester)
                <option value="{{ $Semester->id }}">
                    {{ $Semester->name }}
                </option>
            @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label >إختبـار شهـر</label>
            <select class="form-control form-control-lg" name="Result_name">
                <option value="{{ $Result->month_id }}"> {{ $Result->month->name }} </option>
                @foreach ($Months as $Month)
                <option value="{{ $Month->id }}">
                    {{ $Month->name }}
                </option>
            @endforeach
            </select>
        </div>
    </div><br>

<div class="row">
    <div class="col-md-6"> 
        <label>أسـم الطـالـب \ الطـالبـة </label>
        <input id="id" type="hidden" name="id" class="form-control"
        value="{{ $Result->id }}">
        <select class="form-control form-control-lg" name="Student_id">
            <option value="{{ $Result->student_id }}">
                {{ $Result->student->name }}
            </option>

        </select>
    </div>

    <div class="col-md-6"> 
        <label>المـادة</label>
        <select class="form-control form-control-lg" name="Exam_id">
            <option value="{{ $Result->exam_id }}">
                {{ $Result->exam->subject->name }}
            </option>
            @foreach ($exams as $Exam)
            <option value="{{ $Exam->subject_id }}">
                {{ $Exam->subject->name }}
            </option>
        @endforeach
        </select>
    </div>
</div><br>


<div class="row">

<div class="col-md-6">
<label>الدرجـة التي حصـل عليـها</label>
<input type="number" value="{{ $Result->marks_obtained }}" name="Marks" class="form-control">
</div>

<div class="col-md-6">
    <label >التقـديـر</label>
    <select class="form-control form-control-lg" name="Appreciation">
        <option >{{$Result->appreciation }}</option>
        <option value="ممـتـاز">ممـتـاز</option>
        <option value="جيـد جـداً">جيـد جـداً</option>
        <option value="جيـد">جيـد</option>
        <option value="مقبـول">مقبـول</option>
        <option value="ضعيـف">ضعيـف</option>
    </select>  
</div>

</div><br>


</div>
<div class="modal-footer">
<button type="submit"
class="btn btn-info btn-block">تـعديـل البيانات</button>
</div>

</form>

</div>
</div>
</div>
</div>

<!-- Delete modal -->
<div class="modal fade" id="delete_result{{$Result->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-danger" role="document">
<form action="{{route('TeacherResult.destroy',$Result->id)}}" method="post">
{{method_field('delete')}}
{{csrf_field()}}
<div class="modal-content">
<div class="modal-header">
    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حـذف نتيجـة</h5>
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
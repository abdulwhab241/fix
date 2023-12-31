@extends('layouts.master')
@section('css')

@section('title')
قائمة الأختبـارات
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة الأختبـارات</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة الأختبـارات</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة الأختبـارات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">


<button type="button" style="margin: 5px; padding: 5px;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
    اضافة إختبـار
</button>
<br><br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: yellow; font-weight:bolder;" >أختـبار شهـر</th>
            <th style="text-align: center;  background-color: #D0DEF6;" > المـادة</th>
            <th style="text-align: center;  background-color: #D0DEF6;" >الصـف الدراسـي </th>
            <th style="text-align: center;  background-color: #D0DEF6;" >الأستـاذ </th>
            <th style="text-align: center; background-color: #D0DEF6;">الـدرجـة</th>
            <th style="text-align: center;" class="alert-warning">العمليـات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($exams as $exam)
            <tr>
                <td style="background-color: yellow; font-weight:bolder;">{{ $exam->month->name }}</td>
                <td>{{$exam->subject->name}}</td>
                <td>{{$exam->classroom->name_class}}</td>
                <td>{{$exam->teacher->name}}</td>
                <td>{{$exam->total_marks}}</td>
                <td>
                    <div class="btn-group">
                    <button type="button" style="margin: 3px;" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#edit{{ $exam->id }}"
                    title="تعديل">تعديل</button>
                    <button type="button" style="margin: 3px;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Exam{{ $exam->id }}" title="حذف">حذف</button>
                    </div>
                </td>
            </tr>

                
    <!-- edit_modal_Grade -->
<div class="modal fade" id="edit{{ $exam->id }}" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-primary" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
id="exampleModalLabel">
تعديل إختبـار {{$exam->subject->name}}
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
<!-- add_form -->
<form class="form-horizontal"  action="{{ route('TeacherExams.update', 'test') }}" method="post">
{{ method_field('patch') }}
@csrf
<div class="box-body">
<div class="row">

    <div class="col-md-6"> 
        <label>الصـف الدراسي</label>
        <input id="id" type="hidden" name="id" class="form-control"
        value="{{ $exam->id }}">
        <select class="form-control form-control-lg" name="Classroom_id">
            <option value="{{ $exam->classroom->id }}">
                {{ $exam->classroom->name_class }}
            </option>
            @foreach ($Classrooms as $Classroom)
                <option value="{{  $Classroom->My_Classes->id }}">
                    {{  $Classroom->My_Classes->name_class }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6"> 
        <label>المـادة</label>
        <select class="form-control form-control-lg" name="Subject_id">
            <option value="{{ $exam->subject->id }}">
                {{ $exam->subject->name }}
            </option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->subject_id }}">
                    {{ $subject->subject->name }}
                </option>
            @endforeach
        </select>
    </div>

</div><br>

<div class="row">

    <div class="col-md-6"> 
        <label>أختـبار شـهر</label>
        <select class="form-control form-control-lg" name="Exam_Date">
        <option value="{{ $exam->month_id }}"> {{ $exam->month->name }} </option>
        @foreach ($Months as $Month)
            <option value="{{ $Month->id }}">
            {{ $Month->name }}
            </option>
        @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label>الـدرجـة</label>
        <input type="number" value="{{ $exam->total_marks }}" name="Total" class="form-control">
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
<div class="modal fade" id="delete_Exam{{$exam->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-danger" role="document">
<form action="{{route('TeacherExams.destroy',$exam->id)}}" method="post">
{{method_field('delete')}}
{{csrf_field()}}
<div class="modal-content">
<div class="modal-header">
    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حـذف إختبـار</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
    <p> هل انت متاكد من عملية حذف إختبـار مـادة </p>
    <input type="hidden" name="id"  value="{{$exam->id}}">
    <input  type="text" style="font-weight: bolder; font-size:20px;"
    name="Name_Section"
    class="form-control"
    value="{{$exam->subject->name}}"
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

    <!-- add_modal_class -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-primary" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
        اضافة إختبـار
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">

<form class="form-horizontal" action="{{ route('TeacherExams.store') }}" method="POST">
@csrf

<div class="box-body">
<div class="row">

    <div class="col-md-6"> 
        <label>الصـف الدراسي</label>
        <select class="form-control form-control-lg" name="Classroom_id">
            <option  selected disabled>أختـر من القائمة...</option>
            @foreach ($Classrooms as $Classroom)
                <option  value="{{ $Classroom->My_Classes->id }}" >{{ $Classroom->My_Classes->name_class }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6"> 
        <label>المـادة</label>
        <select class="form-control form-control-lg" name="Subject_id">
            <option  selected disabled>حدد المادة الدراسية...</option>
            @foreach ($subjects as $subject)
                <option  value="{{ $subject->subject_id }}" >{{ $subject->subject->name }}</option>
            @endforeach
        </select>
    </div>

</div><br>

<div class="row">
    <div class="col-md-6"> 
        <label>أختـبار شـهر</label>
        <select class="form-control form-control-lg" name="Exam_Date">
        <option  selected disabled>أختـر من القائمة...</option>
        @foreach ($Months as $Month)
            <option value="{{ $Month->id }}">
            {{ $Month->name }}
            </option>
        @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label>الـدرجـة</label>
        <input type="number" value="{{ old('Total') }}" name="Total" class="form-control">
    </div>
</div><br>

</div>

<div class="modal-footer">
<button type="submit" class="btn btn-info btn-block">حفظ البيانات</button>
</div>


</form>
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
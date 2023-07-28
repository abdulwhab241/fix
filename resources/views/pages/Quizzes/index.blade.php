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
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
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
<div class="col-xl-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<a href="{{route('Quizzes.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">إضـافـة إختبـار  </a>
<br><br>
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">الصـف الدراسـي </th>
            <th style="text-align: center;" class="alert-info"> المـادة</th>
            <th style="text-align: center;" class="alert-info">الأستـاذ </th>
            <th style="text-align: center;" class="alert-info">الـدرجـة</th>
            <th style="text-align: center; background-color: yellow; font-weight:bolder;" >أختـبار شهـر</th>
            <th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($Exams as $Exam)
                <tr>
                    <?php $i++; ?>
                    <td>{{ $i }}</td>
                    <td>{{ $Exam->classroom->name_class }}</td>
                    <td>{{ $Exam->subject->name }}</td>
                    <td>{{$Exam->teacher->name}}</td>
                    <td>{{$Exam->total_marks}}</td>
                    <td style="background-color: yellow; font-weight:bolder;">{{ $Exam->month->name }}</td>
                    <td>{{ $Exam->create_by }}</td>
                    <td>
                        <div class="btn-group">
                        <a href="{{route('Quizzes.edit',$Exam->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" aria-pressed="true">تعديل</a>
                        <button type="button" style="margin: 3px;" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_Exam{{ $Exam->id }}" title="حذف">حذف</button>
                        </div>
                    </td>
                </tr>

                <!-- Delete modal -->
<div class="modal fade" id="delete_Exam{{$Exam->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
        <form action="{{route('Quizzes.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حـذف إختبـار</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p> هل انت متاكد من عملية حذف إختبـار مـادة </p>
                <input type="hidden" name="id"  value="{{$Exam->id}}">
                <input  type="text" style="font-weight: bolder; font-size:20px;"
                name="Name_Section"
                class="form-control"
                value="{{$Exam->subject->name}}"
                disabled>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline"
                        data-dismiss="modal">إغلاق</button>
                <button type="submit"
                        class="btn btn-danger">حذف البيانات</button>
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
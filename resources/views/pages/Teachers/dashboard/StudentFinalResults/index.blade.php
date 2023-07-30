@extends('layouts.master')
@section('css')

@section('title')
نـتائـج إختبـارات الـترم الثـانـي
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    قائمة نـتائـج إختبـارات الـترم الثـانـي</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   قائمة نـتائـج إختبـارات الـترم الثـانـي</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    قائمة نـتائـج إختبـارات الـترم الثـانـي
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
<a href="{{route('StudentFinalResults.create')}}" class="btn btn-success btn-sm" role="button"
style="margin: 5px; padding: 5px;" aria-pressed="true">اضافة نتيـجة الـترم الثـانـي</a><br><br>
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center; background-color: #D0DEF6;">#</th>
            <th style="text-align: center; background-color: #D0DEF6;">الصـف الدراسي</th>
            <th style="text-align: center; background-color: #D0DEF6;">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center; background-color: #D0DEF6;">المادة</th>
            <th style="text-align: center; background-color: #D0DEF6;">المحصلة </th>
            <th style="text-align: center; background-color: #D0DEF6;">الاختبار </th>
            <th style="text-align: center; background-color: #D0DEF6;">المجموع </th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($Final_Results as $Final_Result)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$Final_Result->classroom->name_class}}</td>
                <td>{{$Final_Result->student->name}}</td>
                <td>{{$Final_Result->subject->name}}</td>
                <td>{{ $Final_Result->result }}</td>
                <td>{{ $Final_Result->final_exam }}</td>
                <td>{{ $Final_Result->total }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('StudentFinalResults.edit',$Final_Result->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" title="تعديل" aria-pressed="true">تعديل</a>
                    </div>
                </td>
            </tr>
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
@extends('layouts.master')
@section('css')

@section('title')
    طبـاعـة
@stop
@endsection



@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    طبـاعـة</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   طبـاعـة</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    طبـاعـة
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
<br>
<div class="table-responsive"  id="print">
    <table class="table table-hover table-sm table-bordered p-0" style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;">#</th>
            <th style="text-align: center;">أسم الطالب</th>
            <th style="text-align: center;"> النوع</th>
            <th style="text-align: center;">المرحلة الدراسية</th>
            <th style="text-align: center;">الصف الدراسي</th>
            <th style="text-align: center;"> الشعـبة</th>
            <th style="text-align: center;">أسـم الأب </th>
            <th style="text-align: center;"> هاتف الاب</th>
            <th style="text-align: center;"> الوظيـفة</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($Student as $Student)
                <tr>
                    <?php $i++; ?>
                    <td>{{ $i }}</td>
                    <td>{{ $Student->name }}</td>
                    <td>{{ $Student->gender->name }}</td>
                    <td>{{$Student->grade->name}}</td>
                    <td>{{$Student->classroom->name_class}}</td>
                    <td style="font-weight: bolder;">{{$Student->section->name_section}}</td>
                    <td>{{ $Student->father_name }}</td>
                    <td>{{ $Student->father_phone }}</td>
                    <td > {{ $Student->father_job }}</td>
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
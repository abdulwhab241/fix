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
<br>
<div class="table-responsive" id="print">
    <table class="table  table-hover table-sm table-bordered p-0" style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;">#</th>
            <th style="text-align: center;">الفـصل الدراسي</th>
            <th style="text-align: center;">الأستـاذ</th>
            <th style="text-align: center;">المادة</th>
            <th style="text-align: center; background-color: yellow; font-weight:bolder;" >محصـلـة شهـر</th>
            <th style="text-align: center;">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center;">واجبـات</th>
            <th style="text-align: center;">شفهـي</th>
            <th style="text-align: center;">مـواظبـة</th>
            <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">تحريري</th>
            <th style="text-align: center; background-color: #FFC0D6; font-weight:bolder;"> المحصـلة</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($StudentGrade as $StudentGrade)
                <tr>
                    <?php $i++; ?>
                    <td>{{ $i }}</td>
                    <td>{{$StudentGrade->semester->name}}</td>
                    <td>{{$StudentGrade->teacher->name}}</td>
                    <td>{{$StudentGrade->subject->name}}</td>
                    <td style="background-color: yellow; font-weight:bolder;">{{ $StudentGrade->month->name }}</td>
                    <td>{{$StudentGrade->student->name}}</td>
                    <td>{{$StudentGrade->homework }}</td>
                    <td>{{$StudentGrade->verbal}}</td>
                    <td>{{ $StudentGrade->attendance }}</td>
                    <td style="background-color: #E7EEFB; font-weight:bolder;">{{ $StudentGrade->result }}</td>
                    <td style="background-color: #FFC0D6; font-weight:bolder;">{{ $StudentGrade->total }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="footer">
        <button class="btn .btn.bg-navy  pull-left" id="print_Button" onclick="printDiv()"> 
        <i class="fa fa-print" aria-hidden="true"></i> طباعة  </button>
    </div>
</div>
</div>
</div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
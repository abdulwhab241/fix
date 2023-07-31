@extends('layouts.master')
@section('css')

<style>
    @media print {
        #print_Button {
            display: none;
        }
    }

</style>


@section('title')
    طبـاعـة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">    طبـاعـة التـرقـيـات</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">   طبـاعـة التـرقـيـات</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    طبـاعـة التـرقـيـات
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
<div class="card-body" id="print">
    <div class="box-header" style="margin: 20px;">

        <div class="row">
            
        <div class="col-md-4 text-center">            
        <p style="font-weight: bolder;">الجمهورية اليمنية</p>
        <p style="font-weight: bolder;">وزارة التربية والتعليم</p>
        <p style="font-weight: bolder;">مكتب التربية والتعليم بالأمانة قطاع التعليم الأهلي</p>
        <p style="font-weight: bolder;">مديرية معين التعليمية</p>
        <p style="font-weight: bolder;">مدارس.............. الأهلية</p>
        </div>
        
        <div class="col-md-4 text-center">
        <p style="font-weight: bolder; font-size:20px;">بسم الله الرحمن الرحيم </p>
        </div>

        <div class="col-md-4 text-center">            
            <img src="/images/Emblem.png" style="width: 40%;" class="img-fluid  border-0">
        </div>

        </div>
    </div>
    
<br>
<div class="table-responsive" >
    <h4 style="color: cornflowerblue; font-family: Cairo; font-weight: bold; text-align: center; margin: 10px;">قـائـمـة تـرقـيات الـطـلاب</h4>
    <table class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;">#</th>
            <th style="text-align: center;">أسـم الطالـب</th>
            <th style="text-align: center;"> المرحلة الدراسية السابقة</th>
            <th style="text-align: center;">الصف الدراسي السابق</th>
            <th style="text-align: center;">السنة الدراسية السابقة</th>
            <th style="text-align: center;"> المرحلة الدراسية الحالية</th>
            <th style="text-align: center;">الصف الدراسي الحالي </th>
            <th style="text-align: center;"> السنة الدراسية الحالية</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($Promotions as $Promotion)
                <tr>
                    <?php $i++; ?>
                    <td>{{ $i }}</td>
                    <td scope="row">{{$Promotion->student->name}}</td>
                    <td scope="row">{{$Promotion->f_grade->name}}</td>
                    <td scope="row">{{$Promotion->academic_year}}</td>
                    <td scope="row">{{$Promotion->f_classroom->name_class}}</td>
        
                    <td>{{$Promotion->t_grade->name}}</td>
                    <td>{{$Promotion->academic_year_new}}</td>
                    <td>{{$Promotion->t_classroom->name_class}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="footer">
        <button class="btn btn-info pull-left" id="print_Button" onclick="printDiv()"> 
        <i class="fa fa-print" aria-hidden="true"></i> طباعة  </button>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- row closed -->

{{-- @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
    طبـاعـة
</h1>
<ol class="breadcrumb">
<li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> الرئيسيـة</a></li>
<li><a href="{{route('Upgrades.index')}}"><i class="fa fa-refresh"></i> قائمـة الترقيـات </a></li>
<li class="active">طبـاعـة</li>
</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-xs-12">
<div class="box">

<div class="box-body" >
<div class="box-body table-responsive no-padding" id="print">
    <table  class="table" style="width:100%; text-align: center;">
<thead>
<tr>


</tr>
</thead>
<tbody>



@endforeach
</tbody>
</table>

</div>
</div>



</div>
</div>
</div>

<!-- row closed -->
</section> --}}


@endsection
@section('js')

@endsection
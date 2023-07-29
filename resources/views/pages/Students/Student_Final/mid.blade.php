@extends('layouts.master')
@section('css')

@section('title')
نتيجـة التـرم الأول
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
    <h4 class="mb-0">    نتيجـة الطـالـب للـترم الأول</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.Students') }}" class="default-color">الرئيسية</a></li>
        <li class="breadcrumb-item active">   نتيجـة الطـالـب للـترم الأول</li>
    </ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
نتيجـة الطـالـب للـترم الأول
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
@if(count($Mid_Results) > 0)
<div class="box-header">

<div class="row">
<div class="col-md-4 text-center">            
<p style="font-weight: bolder;">الجمهورية اليمنية</p>
<p style="font-weight: bolder;">وزارة التربية والتعليم</p>
<p style="font-weight: bolder;">مكتب التربية والتعليم بالأمانة قطاع التعليم الأهلي</p>
<p style="font-weight: bolder;">مديرية معين التعليمية</p>
<p style="font-weight: bolder;">مدارس.............. الأهلية</p>
</div>

<div class="col-md-4 text-center">
    <p style="font-weight: bolder;">بسم الله الرحمن الرحيم </p>
    <img src="/images/Emblem.png" style="width: 50%;" class="img-fluid  border-0">
</div>

<div class="col-md-4 text-center">
    <p style="font-weight: bolder;">أسـم الطـالـب: {{ $Student_Name->student->name }} </p>
    <p style="font-weight: bolder;">المرحلة الدراسية: {{ $Student_Name->student->grade->name }} </p>
    <p style="font-weight: bolder;">الصـف: {{ $Student_Name->student->classroom->name_class }} </p>
    <p style="font-weight: bolder;">الشعبـة: {{ $Student_Name->student->section->name_section }} </p>
    <p style="font-weight: bolder;">تـاريـخ المـيلاد: {{ $Student_Name->student->birth_date }} </p>
</div>

</div><br>

<div class="row">
<div class="col-md-4 text-center">
        <img src="/images/Emblem.png" style="width: 20%;" class="img-fluid border-0">
</div>

<div class="col-md-4 text-center">
        <h4>شهادة تقويم أعمال نـصـف السنة الدراسية:   {{ date("Y") }}  </h4>
</div>

<div class="col-md-4 text-center">
        <img src="/images/Emblem.png" style="width: 20%;" class="img-fluid border-0">
</div>

</div><br>


</div>
<br>
<div class="table-responsive">
<table class="table  table-hover table-sm table-bordered p-0"
    data-page-length="50"
    style="text-align: center">
<thead>
<tr class="alert-success">
    <th style="text-align: center; background-color: #D0DEF6;">المادة</th>
    <th style="text-align: center; background-color: #D0DEF6;"> المحـصلـة</th>
    <th style="text-align: center; background-color: #D0DEF6;">إمتحـان نهـايـة الفـصل الاول</th>
    <th style="text-align: center; background-color: #D0DEF6;">المـجموع </th>
</tr>
</thead>
<tbody>
    @foreach($Mid_Results as $student)
    <tr>
    
        <td>{{$student->subject->name}}</td>
        <td>{{$student->result }}</td>
        <td>{{ $student->mid_exam }}</td>
        <td>{{ $student->total }}</td>
    
    </tr>
    @endforeach
    </tbody>
    
    <tfoot>
    @php $type = ''; @endphp
    <tr>
        <th style="text-align: center; background-color: #D0DEF6;" colspan="2">المجمـوع النـهائـي     <label style="color: black; margin:5px;"> {{ $Mid_Results->sum('total') }}</label>  </th>    
    
        @if ($Mid_Results->count('subject_id') == 7)
        <!-- start if 7 -->
        @if ($Mid_Results->sum('total') < 175)
        @php
            $type = 'راسب';
        @endphp
        @else
        @php
            $type = 'ناجح';
        @endphp
        @endif
        <!-- end if 7 -->
        
        @else
    
        @if ($Mid_Results->count('subject_id') == 11)
            <!-- start if 11 -->
            @if ($Mid_Results->sum('total') < 275)
            @php
                $type = 'راسب';
            @endphp
            @else
            @php
                $type = 'ناجح';
            @endphp
            @endif
            <!-- end if 11 -->
        @endif
    
        @endif
        <th style="text-align: center; background-color: #D0DEF6;" colspan="2">النتيجـة النـهائيـة     <label style="color: black; margin:5px;"> {{ $type }} </label>   </th>
    
    </tr>
    </tfoot>
    
    </table>
</div>
@else

<h1 style="margin: 10px; padding:10px; font-weight: bold; text-align: center; background-color:#85A8CF; ">
<marquee direction="right">
<b style="font-weight: bold; font-size:larger; color:white; margin: 10px;">
    عـذراً لـم يتـم تسليـم نـتائـج التـرم الأول حـالياً 
</b>
</marquee>
</h1>
@endif
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
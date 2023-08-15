@extends('layouts.master')
@section('css')

@section('title')
    طبـاعـة نتيجـة الطـالـب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> طبـاعـة نتيجـة الطـالـب</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active"> طبـاعـة نتيجـة الطـالـب</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    نتيجـة الطـالـب {{ $Final_Result->student->name }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
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
                            <p style="font-weight: bolder;">أسـم الطـالـب: {{ $Final_Result->student->name }} </p>
                            <p style="font-weight: bolder;">المرحلة الدراسية: {{ $Final_Result->student->grade->name }}
                            </p>
                            <p style="font-weight: bolder;">الصـف: {{ $Final_Result->student->classroom->name_class }}
                            </p>
                            <p style="font-weight: bolder;">الشعبـة: {{ $Final_Result->student->section->name_section }}
                            </p>
                            <p style="font-weight: bolder;">تـاريـخ المـيلاد: {{ $Final_Result->student->birth_date }}
                            </p>
                        </div>

                    </div><br><br>

                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="/images/Print.png" style="width: 20%;" class="img-fluid border-0">
                        </div>

                        <div class="col-md-4 text-center">
                            <h3>شهادة تقويم أعمال السنة الدراسية: {{ date('Y') }} </h3>
                        </div>

                        <div class="col-md-4 text-center">
                            <img src="/images/Print.png" style="width: 20%;" class="img-fluid border-0">
                        </div>

                    </div><br><br>
                    <br><br>

                </div>
                <br><br>
                <div class="table-responsive" id="print">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                        style="text-align: center">
                        <thead>
                            <tr class="alert-success">
                                <th style="text-align: center; background-color: #D0DEF6;">المادة</th>
                                <th style="text-align: center; background-color: #D0DEF6;">درجات الفصل الاول (رقـماً)
                                    50% </th>
                                <th style="text-align: center; background-color: #D0DEF6;">(كتـابـة) 50%</th>
                                <th style="text-align: center; background-color: #D0DEF6;">درجات الفصل الثـانـي (رقـماً)
                                    50% </th>
                                <th style="text-align: center; background-color: #D0DEF6;">(كتـابـة) 50%</th>
                                <th style="text-align: center; background-color: #D0DEF6;">المـجموع 100</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($Results as $student)
                                <tr>

                                    <td>{{ $student->subject->name }}</td>
                                    <td>{{ $student->f_total_number }}</td>
                                    <td>{{ $student->f_total_write }}</td>
                                    <td>{{ $student->s_total_number }}</td>
                                    <td>{{ $student->s_total_write }}</td>
                                    <td>{{ $student->total }}</td>

                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            @php $type = ''; @endphp
                            <tr>
                                <th style="text-align: center; background-color: #D0DEF6;">المجمـوع النـهائـي</th>
                                <th style="text-align: center;">{{ $Results->sum('total') }}</th>

                                @if ($Results->count('subject_id') == 7)
                                    <!-- start if 7 -->
                                    @if ($Results->sum('total') < 360)
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
                                    @if ($Results->count('subject_id') == 11)
                                        <!-- start if 11 -->
                                        @if ($Results->sum('total') < 560)
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
                                <th style="text-align: center; background-color: #D0DEF6;">النتيجـة النـهائيـة</th>
                                <th style="text-align:center;">{{ $type }}</th>

                                <th></th>
                                @php $total = 0; @endphp
                                @php
                                    
                                    $sub_total = round($Results->sum('total') / $Results->count('subject_id'), 2);
                                    $total += $sub_total;
                                @endphp
                                <th style="text-align: center;">{{ $sub_total }} %</th>
                            </tr>
                        </tfoot>

                    </table>
                </div>

                <div class="footer">
                    <button class="btn .btn.bg-navy  pull-left" id="print_Button" onclick="printDiv()">
                        <i class="fa fa-print" aria-hidden="true"></i> طباعة </button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection

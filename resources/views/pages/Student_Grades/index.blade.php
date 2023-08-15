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
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
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
<div class="box-body">
    <a href="{{route('Student_Grades.create')}}" class="btn btn-success btn-sm" style="margin: 5px; padding: 5px;" role="button"
aria-pressed="true">اضافة كشـف الـدرجـات</a>
    <a class="btn btn-primary btn-sm" style="margin: 5px; padding: 5px;" title="تصـديـر إكسـيل" href="{{ route('export_student_grades') }}">
        <i class="fas fa-file-download"></i>   تصـديـر إكسـيل
    </a>
</div>
<br>
<div class="table-responsive">
    <table id="data" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr class="alert-success">
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">الفـصل الدراسي</th>
            <th style="text-align: center;" class="alert-info">الـصـف الـدراسي</th>
            <th style="text-align: center;" class="alert-info">أسـم الطـالـب \ الطـالبـة</th>
            <th style="text-align: center;" class="alert-info">الأستـاذ</th>
            <th style="text-align: center;" class="alert-info">المادة</th>
            <th style="text-align: center; background-color: yellow; font-weight:bolder;" >محصـلـة شهـر</th>
            <th style="text-align: center; background-color: #D0DEF6;" colspan="6">الـدرجـات</th>
            <th style="text-align: center; background-color: #E7EEFB; font-weight:bolder;">تحريري</th>
            <th style="text-align: center; background-color: #FFC0D6; font-weight:bolder;"> المحصـلة</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach($Student_Grades as $Student_Grade)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$Student_Grade->semester->name}}</td>
            <td>{{$Student_Grade->student->classroom->name_class}}</td>
            <td>{{$Student_Grade->student->name}}</td>
            <td>{{$Student_Grade->teacher->name}}</td>
            <td>{{$Student_Grade->subject->name}}</td>
            <td style="background-color: yellow; font-weight:bolder;">{{ $Student_Grade->month->name }}</td>
            <th style="background-color: #D0DEF6;">واجبـات</th>
            <td>{{$Student_Grade->homework }}</td>
            <th style="background-color: #D0DEF6;">شفهـي</th>
            <td>{{$Student_Grade->verbal}}</td>
            <th style="background-color: #D0DEF6;">مـواظبـة</th>
            <td>{{ $Student_Grade->attendance }}</td>
            <td style="background-color: #E7EEFB; font-weight:bolder;">{{ $Student_Grade->result }}</td>
            <td style="background-color: #FFC0D6; font-weight:bolder;">{{ $Student_Grade->total }}</td>
            
            
            <td>
                <div class="dropdown show">
                    <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        العمليات
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('Student_Grades.edit',$Student_Grade->id)}}">تـعديـل</a>
                        <a class="dropdown-item btn" data-toggle="modal" data-target="#delete_Student_Grades{{ $Student_Grade->id }}">حـذف</a>
                    </div>
                </div><!-- /btn-group -->
            </td>
            </tr>

            <div class="modal fade" id="delete_Student_Grades{{$Student_Grade->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{route('Student_Grades.destroy','test')}}" method="post">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حـذف محصـلـة الطـالـب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p> هل انت متاكد من عملية حذف محصلـة الطـالـب </p>
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
                                    class="btn btn-danger">حـذف</button>
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
        <a href="{{ route('StudentGrades.print') }}" style="margin: 10px; padding:5px;" class="btn .btn.bg-navy  pull-left">
            <i class="fa fa-print" aria-hidden="true"></i>  طبـاعـة  </a>
    </div>
</div>
</div>
</div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
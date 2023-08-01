@extends('layouts.master')
@section('css')

@section('title')
النـتائـج النـهائـية للطـلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">    قائمة النـتائـج النـهائـية للطـلاب</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active">   قائمة النـتائـج النـهائـية للطـلاب</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
قائمة النـتائـج النـهائـية للطـلاب
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
<div class="box-body">
<a href="{{route('Final_Results.create')}}" style="padding: 5px; margin:5px;" class="btn btn-success btn-sm" role="button"  
aria-pressed="true">اضافة نتيـجة طـالـب</a>
<a class="btn btn-primary btn-sm" title="تصـديـر إكسـيل" style="padding: 5px; margin:5px;" href="{{ route('export_finals') }}">
<i class="fas fa-file-download"></i>  تصـديـر إكسـيل
</a>
<button type="button" class="btn btn-info btn-sm" style="padding: 5px; margin:5px;" title="عـرض نتـيجـة طـالـب"  data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-eye" aria-hidden="true"></i> عـرض نتـيجـة طـالـب
</button>
<button type="button" class="btn btn-default btn-sm" style="padding: 5px; margin:5px;" title="إرسـال الـنتـائـج النهـائـية إاـى الـطـلاب"  data-toggle="modal" data-target="#Send_Final_Result">
<i class="fa fa-paper-plane"  aria-hidden="true"></i> إرسـال الـنتـائـج النهـائـية إاـى جمـيع الـطـلاب
</button>

</div>
<br><br>
<div class="table-responsive">
<table id="data" class="table  table-hover table-sm table-bordered p-0"
data-page-length="50"
style="text-align: center">
<thead>
<tr class="alert-success">
<th style="text-align: center; background-color: #D0DEF6;">الصـف الدراسي</th>
<th style="text-align: center; background-color: #D0DEF6;">أسـم الطـالـب \ الطـالبـة</th>
<th style="text-align: center; background-color: #D0DEF6;">المادة</th>
<th style="text-align: center; background-color: #D0DEF6;" colspan="6">درجات الفصل الاول 50% </th>
<th style="text-align: center; background-color: #D0DEF6;" colspan="6">درجات الفصل الثـانـي 50% </th>
<th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>
@foreach($Final_Results as $Final_Result)
<tr>
<td>{{$Final_Result->classroom->name_class}}</td>
<td>{{$Final_Result->student->name}}</td>
<td>{{$Final_Result->subject->name}}</td>
<th>المحصلة</th>
<td>{{ $Final_Result->mid->result }}</td>
<th>الاختبار</th>
<td>{{ $Final_Result->mid->mid_exam }}</td>
<th>المجموع</th>
<td>{{ $Final_Result->mid->total }}</td>
<th>المحصلة</th>
<td>{{ $Final_Result->result }}</td>
<th>الاختبار</th>
<td>{{ $Final_Result->final_exam }}</td>
<th>المجموع</th>
<td>{{ $Final_Result->total }}</td>
<td>
<div class="btn-group">
<a href="{{route('Final_Results.edit',$Final_Result->id)}}" style="margin: 3px;" class="btn btn-info btn-sm" role="button" title="تعديل" aria-pressed="true">تعديل</a>
<button type="button" class="btn btn-danger btn-sm" style="margin: 3px;" data-toggle="modal" data-target="#delete_Final_Results{{ $Final_Result->id }}" title="حذف">حذف</button>
</div>
</td>
</tr>


<div class="modal fade" id="delete_Final_Results{{$Final_Result->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-warning" role="document">
<form action="{{route('Final_Results.destroy','test')}}" method="post">
{{method_field('delete')}}
{{csrf_field()}}
<div class="modal-content">
<div class="modal-header">
<h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
    حـذف نتيـجـة الطـالـب   <label style="color: black; font-size:20px;">{{$Final_Result->mid->student->name}}</label>
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
<p> هل انت متاكد من عملية حذف نتيـجـة  الـمادة </p>
<input type="hidden" name="id"  value="{{$Final_Result->id}}">
<input  type="text" style="font-weight: bolder; font-size:20px;"
name="Name_Section"
class="form-control"
value="{{$Final_Result->mid->subject->name}}"
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
</div>
</div>
</div>
</div>
</div>
</div>


<!-- add_modal_class -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-primary"  role="document">
<div class="modal-content">
<div class="modal-header">
<h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
عـرض نتـيجـة طـالـب            
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">

<form class="form-horizontal" action="{{ route('find_student_final') }}" method="POST">
@csrf

<div class="box-body">

<div class="form-group">
<label >أسـم الطـالـب</label>
<select class="form-control form-control-lg" name="Student_id">
<option  selected disabled>أختـر من القائمة...</option>
@foreach ($Students as $Student)
<option value="{{$Student->student_id}}" >{{$Student->student->name}}</option>
@endforeach
</select>
</div>

<br>

</div>

<div class="modal-footer">
<button type="submit"
class="btn btn-info btn-block">تـأكيـد </button>
</div>

</form>
</div>
</div>
</div>
</div>

<!-- add_modal_class -->
<div class="modal fade" id="Send_Final_Result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-info"  role="document">
<div class="modal-content">
<div class="modal-header">
<h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
إرسـال الـنتـائـج النهـائـية إاـى الـطـلاب            
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">

<form class="form-horizontal" action="{{ route('send_final_result') }}" method="POST">
@csrf

<div class="box-body">

<div class="form-group">
<label >الـصـف الـدراسـي</label>
<select class="form-control form-control-lg" name="Classroom_id">
<option  selected disabled>أختـر من القائمة...</option>
@foreach ($Classrooms as $Classroom)
<option value="{{$Classroom->id}}" >{{$Classroom->name_class}}</option>
@endforeach
</select>
</div>

<br>

</div>

<div class="modal-footer">
<button type="submit"
class="btn btn-primary btn-block">إرسـال </button>
</div>

</form>
</div>
</div>
</div>
</div>

</div>
<!-- row closed -->

@endsection
@section('js')

@endsection
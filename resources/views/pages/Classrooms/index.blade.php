@extends('layouts.master')
@section('css')

@section('title')
الصفـوف الدراسيـة
@stop
@endsection

@section('page-header')

<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0"> الصفـوف الدراسيـة</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active">الصفـوف الدراسيـة</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
الصفـوف الدراسيـة
@stop
<!-- breadcrumb -->
@endsection

@section('content')

<!-- row -->
<div class="row">

<div class="col-xl-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<button type="button" class="btn btn-success x-small" style="margin: 5px; padding: 5px;" data-toggle="modal" data-target="#exampleModal">
إضافة صـف
</button>

<br><br>


<div class="table-responsive">
<table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
style="text-align: center">
<thead>
<tr>
<th style="text-align: center;" class="alert-info">#</th>
<th style="text-align: center;" class="alert-info">اسم الصف</th>
<th style="text-align: center;" class="alert-info">اسم المرحلة</th>
<th style="text-align: center;" class="alert-success"> انشـئ بواسطـة</th>
<th style="text-align: center;" class="alert-warning">العمليات</th>
</tr>
</thead>
<tbody>

<?php $i = 0; ?>

@foreach ($My_Classes as $My_Class)
<tr>
<?php $i++; ?>
<td>{{ $i }}</td>
<td>{{ $My_Class->name_class }}</td>
<td>{{ $My_Class->Grades->name }}</td>
<td>{{ $My_Class->create_by }}</td>
<td>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal"
data-target="#edit{{ $My_Class->id }}" style="margin: 3px;"
title="تعديل">تعديل</button>
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
data-target="#delete{{ $My_Class->id }}" style="margin: 3px;"
title="حذف">حذف</button>
</td>
</tr>

<!-- edit_modal_Grade -->
<div class="modal fade" id="edit{{ $My_Class->id }}" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
            id="exampleModalLabel">
            تعديل الصف 
        </h5>
        <button type="button" class="close" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <!-- add_form -->
        <form action="{{ route('Classrooms.update', 'test') }}" method="post">
            {{ method_field('patch') }}
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label
                        for="exampleFormControlTextarea1">المرحلة الدراسية
                        :</label>
                    <select class="form-control form-control-lg" name="Grade_id" id="exampleFormControlSelect1">
                        <option value="{{ $My_Class->grades->id }}">
                            {{ $My_Class->grades->name }}
                        </option>
                        @foreach ($Grades as $Grade)
                            <option value="{{ $Grade->id }}">
                                {{ $Grade->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="Name"
                        class="mr-sm-2">أسم الصف
                        :</label>
                    <input id="Name" type="text" name="Name"
                        class="form-control"
                        value="{{ $My_Class->name_class }}"
                        required>
                    <input id="id" type="hidden" name="id" class="form-control"
                        value="{{ $My_Class->id }}">
                </div>
            </div>
        
            <br><br>

            <div class="modal-footer">
                <button type="submit"
                    class="btn btn-success btn-block">حفظ البيانات</button>
            </div>
        </form>

    </div>
</div>
</div>
</div>

<!-- delete_modal_Grade -->
<div class="modal fade" id="delete{{ $My_Class->id }}" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
            id="exampleModalLabel">
            حذف صف
        </h5>
        <button type="button" class="close" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('Classrooms.destroy', 'test') }}" method="post">
            {{ method_field('Delete') }}
            @csrf
                هل انت متاكد من حذف الصف
            <input id="Name" type="text" name="Name"
            class="form-control"
            value="{{ $My_Class->name_class }}"
            disabled>
            <input id="id" type="hidden" name="id" class="form-control"
                value="{{ $My_Class->id }}">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">إغلاق</button>
                <button type="submit"
                    class="btn btn-danger">حذف</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endforeach
</table>
</div>
</div>
</div>
</div>


<!-- add_modal_Grade -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content ">
<div class="modal-header">
<h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
    id="exampleModalLabel">
    إضافة صف
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<!-- add_form -->
<form action="{{ route('Classrooms.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="Name">المرحلـة الـدراسيـة
                :</label>
                    <select class="form-control form-control-lg" name="Grade_id">
                        <option selected disabled>أختـر من القائمة...</option>
                        @foreach ($Grades as $Grade)
                            <option value="{{ $Grade->id }}">{{ $Grade->name }}</option>
                        @endforeach
                    </select>
        </div>

    <div class="col-md-6">
        <label >أسـم الصـف</label>
        <input  type="text" name="Name" class="form-control"  required>
    </div>
</div>
    <br><br>
</div>
<div class="modal-footer">
<button type="submit"
        class="btn btn-success btn-block">حفظ البيانات</button>
</div>
</form>

</div>
</div>
</div>


</div>
<!-- row closed -->

@endsection
@section('js')


<script type="text/javascript">
$(function() {
$("#btn_delete_all").click(function() {
    var selected = new Array();
    $("#datatable input[type=checkbox]:checked").each(function() {
        selected.push(this.value);
    });
    if (selected.length > 0) {
        $('#delete_all').modal('show')
        $('input[id="delete_all_id"]').val(selected);
    }
});
});
</script>


@endsection

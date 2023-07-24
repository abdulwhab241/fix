@extends('layouts.master')

@section('css')

@section('title')
المراحـل الدراسيـة
@stop
@endsection

@section('page-header')

<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0"> المراحـل الدراسيـة</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active">المراحـل الدراسيـة</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
المراحـل الدراسيـة
@stop
<!-- breadcrumb -->
@endsection

@section('content')

<!-- row -->
<div class="row" style="font-family: 'Cairo', sans-serif; font-weight: bolder">

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

<button type="button" class="btn btn-success x-small" data-toggle="modal" data-target="#exampleModal">
        إضافة مرحلة 
</button>
<br><br>

<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
            data-page-length="50"
            style="text-align: center">
        <thead>
        <tr>
            <th style="text-align: center;" class="alert-info">#</th>
            <th style="text-align: center;" class="alert-info">أسـم المرحلـة</th>
            <th style="text-align: center;" class="alert-info">الملاحظـات</th>
            <th style="text-align: center;" class="alert-success">انشـئ بواسطـة</th>
            <th style="text-align: center;" class="alert-warning">العمليات</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        @foreach ($grades as $grade)
        <tr>
        <?php $i++; ?>
        <td>{{ $i }}</td>
        <td>{{ $grade->name }}</td>
        <td>{{ $grade->notes }}</td>
        <td>{{ $grade->create_by }}</td>
                <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                            data-target="#edit{{ $grade->id }}" style="margin: 3px;"
                            title="تعديل">تعديل</button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#delete{{ $grade->id }}" style="margin: 3px;"
                            title="حذف">حذف</button>
                </td>
            </tr>

            <!-- edit_modal_Grade -->
            <div class="modal fade" id="edit{{ $grade->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                id="exampleModalLabel">
                                تعديل مرحلة  
                            </h5>
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- add_form -->
                            <form action="{{route('Grades.update','test')}}" method="post">
                                {{method_field('patch')}}
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label for="Name"
                                                class="mr-sm-2">أسـم المرحلـة
                                            :</label>
                                        <input id="Name" type="text" name="Name"
                                                class="form-control"
                                                value="{{$grade->name }}"
                                                required>
                                        <input id="id" type="hidden" name="id" class="form-control"
                                                value="{{ $grade->id }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="exampleFormControlTextarea1">الملاحظة
                                        :</label>
                                    <textarea class="form-control" name="Notes"
                                                id="exampleFormControlTextarea1"
                                                rows="3">{{ $grade->notes }}</textarea>
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
            <div class="modal fade" id="delete{{ $grade->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                id="exampleModalLabel">
                                حذف المرحلة الدراسية
                            </h5>
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('Grades.destroy','test')}}" method="post">
                                {{method_field('Delete')}}
                                @csrf
                                هل انت متأكد من حذف
                                <input id="id" type="test" name="Name" class="form-control"
                                        value="{{ $grade->name }}" disabled>
                                <input id="id" type="hidden" name="id" class="form-control"
                                        value="{{ $grade->id }}">
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
        إضافة مرحلة دراسية
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <!-- add_form -->
    <form action="{{ route('Grades.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="Name"
                        class="mr-sm-2">أسم المرحلة
                    :</label>
                <input id="Name" type="text" name="Name" class="form-control">
            </div>

        <div class="col-md-6">
            <label
                for="exampleFormControlTextarea1">الملاحظة
                :</label>
            <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
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

@endsection
@section('js')
@toastr_js
@toastr_render

@endsection

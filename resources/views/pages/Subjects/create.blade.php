@extends('layouts.master')
@section('css')

@section('title')
اضافة مادة دراسية
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  اضافة مادة دراسية جديدة</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
    <li class="breadcrumb-item active"> اضافة مادة دراسية جديدة</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة مادة دراسية جديدة
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
    <div class="card-body">

        <form  action="{{route('Subjects.store','test')}}"  method="POST" >
            @csrf
            <div class="box-body">
            <div class="row">
                <div class="col-md-4"> 
                    <label>أسم المادة</label>
                    <input type="text" value="{{ old('Name') }}" name="Name" class="form-control">
                    @error('Name')
                    <div class=" alert-danger">
                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label>المرحلـة الدراسيـة</label>
                    <select class="form-control form-control-lg" name="Grade_id">
                        <option selected disabled>أختـر من القائمة...</option>
                        @foreach($grades as $grade)
                            <option value="{{$grade->id}}">{{$grade->name}}</option>
                        @endforeach
                    </select>                        
                    @error('Grade_id')
                    <div class=" alert-danger">
                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                    </div>
                    @enderror
                </div>
            </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label>الصـف الدراسـي</label>
                    <select class="form-control form-control-lg" name="Classroom_id">
            
                    </select>                       
                    @error('Classroom_id')
                    <div class=" alert-danger">
                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                    </div>
                    @enderror
                </div>
            </div>
            </div><br>
            
            
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

@endsection
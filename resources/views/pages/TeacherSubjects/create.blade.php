@extends('layouts.master')
@section('css')

@section('title')
اضافة مادة لمعلم
@stop
@endsection



@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
    <h4 class="mb-0">  اضافة مادة لمعلم</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
        <li class="breadcrumb-item active"> اضافة مادة لمعلم</li>
    </ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة مادة لمعلم
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<form  action="{{route('TeacherSubjects.store','test')}}"  method="POST" >
@csrf
<div class="box-body">
<div class="row">
<div class="col-md-6"> 
    <label>أسم المعلم</label>
    <select class="form-control form-control-lg" name="Teacher_id">
        <option selected disabled>أختـر من القائمة...</option>
        @foreach($Teachers as $Teacher)
            <option value="{{$Teacher->id}}">{{$Teacher->name}}</option>
        @endforeach
    </select>   
    @error('Teacher_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>
<div class="col-md-6">
    <label>المادة</label>
    <select class="form-control form-control-lg" name="Subject_id">
        <option selected disabled>أختـر من القائمة...</option>
        @foreach($Subjects as $Subject)
            <option value="{{$Subject->id}}">{{$Subject->name}}</option>
        @endforeach
    </select>                        
    @error('Subject_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
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
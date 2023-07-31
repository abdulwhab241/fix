@extends('layouts.master')
@section('css')

@section('title')
الملـف الشـخـصـي
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
    <h4 class="mb-0">    الملـف الشـخـصـي</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
        <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
        <li class="breadcrumb-item active">   الملـف الشـخـصـي</li>
    </ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
الملـف الشـخـصـي
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<div class="row">
<div class="col-md-6" style="padding: 30px;">
<div class="box box-info">
<div class="box-header with-border">
<form action="{{route('TeacherImage.editImage',$information->id)}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="box-body">
<div class="card-body text-center">
    <img src="{{ asset('/attachments/Profile/' . Auth::user()->image ) }}"
    class="rounded-circle img-fluid" style="width: 150px; margin-bottom: 10px;" alt="{{ Auth::user()->name }}" >
    <h4 style="font-family: 'Cairo', sans-serif" class="margin">{{Auth::user()->name}}</h4>
    <h5 style="font-family: 'Cairo', sans-serif" class="margin">  {{ Auth::user()->phone_number }} </h5>
    <p class="margin">   {{ Auth::user()->specializations->name }}  </p>
</div>
</div>

<div class=" text-center">
    <label  style="font-weight:bold; color:blue;">إختر صورة: </label>
    <input type="hidden" name="Name" value="{{ Auth::user()->name  }}">
        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
    <input type="file" accept="image/*" style="position: center;" name="photos" >

</div><br>
    <div class="modal-footer ">
        <button type="submit" class="btn btn-info btn-block">تعـديـل الصـورة</button>
    </div><!-- /.box-footer -->

</form>
</div>
</div>
</div>

<div class="col-md-6" style="padding: 30px;">

    <div class="box box-info">
    <div class="box-header with-border">
        <form action="{{route('TeacherProfile.update',$information->id)}}" method="post">
        @csrf
        <div class="box-body">
    
            
        <div class="form-group">
            <label class=" control-label">أسـم المستخدم</label>
            
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <input type="text" style="text-align: center; font-weight: bolder; font-size: 20px; background-color: #D0DEF6;" disabled class="form-control" value="{{ Auth::user()->name }}">
        </div>
    
            <div class="form-group">
                <label class=" control-label">كلمـة المـرور</label>
                    <input  type="password" required
                    style="font-weight: bolder; font-size: 20px; background-color: #D0DEF6;" class="form-control" id="password" name="password">
            </div>
            <div class="form-group text-center">
                <input type="checkbox" class="form-check-input" onclick="myFunction()"
                id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">اظهار كلمة المرور</label>
            </div>
        <br>
    </div>
    <div class="modal-footer ">
        <button type="submit" class="btn btn-primary btn-block">تـعديـل البيانات</button>
    </div><!-- /.box-footer -->
    
    
    </form>
    </div>
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

<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@endsection
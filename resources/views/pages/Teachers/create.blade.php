@extends('layouts.master')
@section('css')

@section('title')
إضافة معلم
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
    <h4 class="mb-0">  اضافة معلم جديد</h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
        <li class="breadcrumb-item active"> اضافة معلم جديد</li>
    </ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة معلم جديد
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">
<form  action="{{route('Teachers.store')}}"  method="POST" enctype="multipart/form-data">
@csrf
<div class="box-body">
<div class="row">

        <div class="col-md-6" >
            <label>أسم المعلـم</label>
        <input type="text" value="{{ old('Name') }}" name="Name" class="form-control">
    
        @error('Name')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
        
</div>

        <div class="col-md-6">
        <label>رقـم الهاتـف</label>
        <input type="text" value="{{ old('Phone_Number') }}" name="Phone_Number" class="form-control ">
        @error('Phone_Number')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div>
    </div>
    <br>

<div class="row">
    <div class=" col-md-4">
        <label>التخصـص</label>
        <select class="form-control form-control-lg" name="Specialization_id">
            <option selected disabled>حـدد التخصـص...</option>
            @foreach($specializations as $specialization)
                        <option value="{{$specialization->id}}">{{$specialization->name}}</option>
            @endforeach
        </select>                        
        @error('Specialization_id')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label>النـوع</label>
        <select class="form-control form-control-lg" name="Gender_id">
            <option selected disabled>حـدد النـوع...</option>
            @foreach($genders as $gender)
            <option value="{{$gender->id}}">{{$gender->name}}</option>
            @endforeach
        </select>                       
        @error('Gender_id')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label >تاريخ التعيين</label>
        <input type="text"  id="datepicker-action" value="{{ old('Joining_Date') }}" data-date-format="yyyy-mm-dd" name="Joining_Date" class="form-control">
        @error('Joining_Date')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div>
</div>
<br>

<div class="form-group">
    <label>العنوان</label>
    <textarea class="form-control" name="Address" rows="4">{{ old('Address') }}</textarea>
    @error('Address')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>
<br>

<div class="col">
    <label for="photos" style="font-weight:bold; color:blue;">إختر صورة للمعلم: </label>
    <input type="file" accept="image/*" name="photos[]" multiple>
</div>
<br>

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
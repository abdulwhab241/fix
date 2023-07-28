@extends('layouts.master')
@section('css')

@section('title')
اضافة النـتائـج النـهائـية للطـلاب
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  اضافة النـتائـج النـهائـية للطـلاب</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> اضافة النـتائـج النـهائـية للطـلاب</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة النـتائـج النـهائـية للطـلاب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">


<form  action="{{route('Final_Results.store')}}"  method="POST" >
@csrf
<div class="box-body">
<div class="row">
<div class="col-md-4">
    <label>أسـم الطـالـب \ الطـالبـة</label>
    <select class="form-control form-control-lg" name="Student_id">
        <option selected disabled>أختـر من القائمة...</option>
        @foreach($Students as $Student)
            <option value="{{$Student->student_id}}">{{$Student->student->name}}</option>
        @endforeach
    </select>                        
    @error('Student_id')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

<div class="col-md-4">
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

<div class="col-md-4">
    <label>درجـة الإختبـار</label>
    <input type="number" value="{{ old('Degree') }}" name="Degree" class="form-control">
    @error('Degree')
    <div class=" alert-danger">
    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
    </div>
    @enderror
</div>

</div><br>


</div>
<div class="modal-footer">
<button type="submit"
class="btn btn-success btn-block">تـأكيـد</button>
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
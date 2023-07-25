@extends('layouts.master')
@section('css')

@section('title')
اضافة طـالـب
@stop
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  اضافة طـالـب جديد</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> اضافة طـالـب جديد</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة طـالـب جديد
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <form class="form-horizontal"  action="{{route('Students.store')}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        
                        <h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الطـالـب</h5>
                            <div class="row">
                                <div class="col-md-3"> 
                                    <label>أسم الطـالـب</label>
                                    <input type="text" value="{{ old('Name') }}" name="Name" class="form-control">
                                    @error('Name')
                                    <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                    </div>
                                    @enderror
                                </div>
                    
                                <div class="col-md-3">
                                    <label>تاريخ الميلاد</label>
                                    <input type="text"  id="datepicker-action" value="{{ old('Date_Birth') }}" data-date-format="yyyy-mm-dd" name="Date_Birth" class="form-control">
                                    @error('Date_Birth')
                                    <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                    </div>
                                    @enderror
                                </div>
                    
                                <div class="col-md-3">
                        
                                    <label>الجـنس</label>
                                    <select class="form-control form-control-lg" name="Gender_id">
                                        <option selected disabled>أختـر من القائمة...</option>
                                        @foreach($Genders as $Gender)
                                        <option value="{{$Gender->id}}">{{$Gender->name}}</option>
                                    @endforeach
                                    </select>                        
                                    @error('Gender_id')
                                    <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                    </div>
                                    @enderror
                                </div>
                    
                                <div class="col-md-3">
                                    <label>السنة الدراسية</label>
                                    <select class="form-control form-control-lg" name="academic_year">
                                    <option selected>أختـر من القائمة...</option>
                                    @php
                                    $current_year = date("Y");
                                    @endphp
                                    @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                        <option value="{{ $year}}">{{ $year }}</option>
                                    @endfor
                                    </select>
                                    @error('academic_year')
                                    <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                    </div>
                                    @enderror
                            </div>
                        
                        
                            </div><br>
                    
                            <div class="row">
                    
                                <div class="col-md-3">
                                
                                    <label>المرحلة الدراسية</label>
                                    <select class="form-control form-control-lg" name="Grade_id">
                                        <option selected>أختـر من القائمة...</option>
                                        @foreach($Grades as $Grade)
                                            <option value="{{$Grade->id}}">{{$Grade->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Grade_id')
                                    <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                    </div>
                                    @enderror
                                </div>
                        
                    
                                <div class="col-md-3">
                                
                                    <label>الصـف الدراسي</label>
                                    <select class="form-control form-control-lg" name="Classroom_id">
                    
                                    </select>
                                    @error('Classroom_id')
                                    <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                    </div>
                                    @enderror
                                </div>
                        
                    
                                <div class="col-md-3">
                                
                                    <label>الشـعبة</label>
                                    <select class="form-control form-control-lg" name="Section_id">
                                        
                                    </select>
                                    @error('Section_id')
                                    <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                    </div>
                                    @enderror
                                </div>
                        
                                <div class="col-md-3"> 
                                    <label>المـؤهـل</label>
                                    <textarea class="form-control" name="Qualification" rows="2">{{ old('Qualification') }}</textarea>
                                    @error('Qualification')
                                    <div class=" alert-danger">
                                    <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                    </div>
                                    @enderror
                                </div>
                    
                    
                    
                        </div><br>
                    
                        <h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الأب</h5>
                    
                        <div class="row">
                    
                            <div class="col-md-4">
                                <label>أسم الاب</label>
                                <input type="text" value="{{ old('Father_Name') }}" name="Father_Name"  class="form-control">
                                @error('Father_Name')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                    
                            <div class="col-md-4">
                                <label>جهة العمل</label>
                                <input type="text" value="{{ old('Employer') }}" name="Employer" class="form-control" >
                                @error('Employer')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                    
                            <div class="col-md-4">
                                <label>الوظيفة</label>
                                <input type="text" value="{{ old('Father_Job') }}" name="Father_Job" class="form-control" >
                                @error('Father_Job')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                    
                        </div><br>
                    
                        <div class="row">
                    
                            <div class="col-md-4">
                                <label>الهاتف الشخصي</label>
                                <input type="text" value="{{ old('Father_Phone') }}" name="Father_Phone" class="form-control" >
                                @error('Father_Phone')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>هاتف العمل</label>
                                <input type="text" value="{{ old('Job_Phone') }}" name="Job_Phone" class="form-control">
                                @error('Job_Phone')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>هاتف المنزل</label>
                                <input type="text" value="{{ old('Home_Phone') }}" name="Home_Phone" class="form-control">
                                @error('Home_Phone')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                    
                        </div><br>
                       
                            <label >العنوان</label>
                            <textarea class="form-control" name="Address" rows="4">{{ old('Address') }}</textarea>
                            @error('Address')
                            <div class=" alert-danger">
                            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div><br>
                        <h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الأم</h5>
                    
                        <div class="row">
                    
                            <div class="col-md-4">
                                <label>أسم الام</label>
                                <input type="text" value="{{ old('Mother_Name') }}" name="Mother_Name" class="form-control">
                                @error('Mother_Name')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>الوظيفة</label>
                                <input type="text" value="{{ old('Mother_Job') }}" name="Mother_Job" class="form-control">
                                @error('Mother_Job')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>الهاتف</label>
                                <input type="text" value="{{ old('Mother_Phone') }}" name="Mother_Phone" class="form-control">
                                @error('Mother_Phone')
                                <div class=" alert-danger">
                                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                                </div>
                                @enderror
                            </div>
                    
                        </div>
                        <br>
                        <div class="col">
                            <label style="font-weight:bold; color:blue;">إختر صورة للطـالـب: </label>
                            <input type="file" accept="image/*" name="photos[]" multiple>
                        </div>
                    <br>
                    </div>
                    <div class="modal-footer">
                    <button type="submit"
                        class="btn btn-success btn-block">حفظ البيانات</button>
                    </div>
                    
                    </form>


                {{-- <form method="post" action="{{ route('Users.store') }}" autocomplete="off">
                    @csrf
                    <div class="row">

                        <div class="col-md-3"> 
                            <label>أسم المستخدم</label>
                            <input type="text" value="{{ old('Name') }}" name="Name" class="form-control">
                            @error('Name')
                            <div class=" alert-danger">
                            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <label>النوع</label>
                            <select class="form-control form-control-lg" name="Job">
                                <option value="1" selected disabled>أختـر من القائمة...</option>
                                <option value="ادمن">ادمن</option>
                                <option value="محاسب">محاسب</option>
                                <option value="سكرتارية">سكرتارية</option>
                            </select>
                            @error('Job')
                            <div class=" alert-danger">
                            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <label>رقم الهاتف</label>
                            <input type="text" value="{{ old('Phone_Number') }}" name="Phone_Number" class="form-control">                     
                            @error('Phone_Number')
                            <div class=" alert-danger">
                            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                            </div>
                            @enderror
                    </div>
                
                    <div class="col-md-3">
                        <label for="inputAddress">العنوان</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="Address" rows="2">{{ old('Address') }}</textarea>
                        @error('Address')
                        <div class=" alert-danger">
                        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                        </div>
                        @enderror
                    </div>



                    <br><br>
                </div>
                <div class="modal-footer">
                    <button type="submit"
                            class="btn btn-success btn-block">حفظ البيانات</button>
                </div>

                </form> --}}

            </div>
        </div>
    </div>
</div>
<!-- row closed -->


{{-- @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
اضافة طـالـب
</h1>
<ol class="breadcrumb">
<li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> الرئيسيـة</a></li>
<li><a href="{{route('Students.index')}}"><i class="fa fa-users"></i> قائمـة الطـلاب </a></li>
<li class="active">اضافة طـالـب</li>
</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-xs-12">
<div class="box">
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('error') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
</div><!-- /.box-header -->

<form class="form-horizontal"  action="{{route('Students.store')}}"  method="POST" enctype="multipart/form-data">
@csrf
<div class="box-body">
    
    <h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الطـالـب</h5>
        <div class="row">
            <div class="col-md-3"> 
                <label>أسم الطـالـب</label>
                <input type="text" value="{{ old('Name') }}" name="Name" class="form-control">
                @error('Name')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>

            <div class="col-md-3">
                <label>تاريخ الميلاد</label>
                <input type="date" value="{{ old('Date_Birth') }}" data-date-format="yyyy-mm-dd" name="Date_Birth" class="form-control">
                @error('Date_Birth')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>

            <div class="col-md-3">
    
                <label>الجـنس</label>
                <select class="form-control form-control-lg" name="Gender_id">
                    <option selected disabled>أختـر من القائمة...</option>
                    @foreach($Genders as $Gender)
                    <option value="{{$Gender->id}}">{{$Gender->name}}</option>
                @endforeach
                </select>                        
                @error('Gender_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>

            <div class="col-md-3">
                <label>السنة الدراسية</label>
                <select class="form-control form-control-lg" name="academic_year">
                <option selected>أختـر من القائمة...</option>
                @php
                $current_year = date("Y");
                @endphp
                @for($year=$current_year; $year<=$current_year +1 ;$year++)
                    <option value="{{ $year}}">{{ $year }}</option>
                @endfor
                </select>
                @error('academic_year')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
        </div>
    
    
        </div><br>

        <div class="row">

            <div class="col-md-3">
            
                <label>المرحلة الدراسية</label>
                <select class="form-control form-control-lg" name="Grade_id">
                    <option selected>أختـر من القائمة...</option>
                    @foreach($Grades as $Grade)
                        <option value="{{$Grade->id}}">{{$Grade->name}}</option>
                    @endforeach
                </select>
                @error('Grade_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
    

            <div class="col-md-3">
            
                <label>الصـف الدراسي</label>
                <select class="form-control form-control-lg" name="Classroom_id">

                </select>
                @error('Classroom_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
    

            <div class="col-md-3">
            
                <label>الشـعبة</label>
                <select class="form-control form-control-lg" name="Section_id">
                    
                </select>
                @error('Section_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
    
            <div class="col-md-3"> 
                <label>المـؤهـل</label>
                <textarea class="form-control" name="Qualification" rows="2">{{ old('Qualification') }}</textarea>
                @error('Qualification')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>



    </div><br>

    <h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الأب</h5>

    <div class="row">

        <div class="col-md-4">
            <label>أسم الاب</label>
            <input type="text" value="{{ old('Father_Name') }}" name="Father_Name"  class="form-control">
            @error('Father_Name')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>

        <div class="col-md-4">
            <label>جهة العمل</label>
            <input type="text" value="{{ old('Employer') }}" name="Employer" class="form-control" >
            @error('Employer')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>

        <div class="col-md-4">
            <label>الوظيفة</label>
            <input type="text" value="{{ old('Father_Job') }}" name="Father_Job" class="form-control" >
            @error('Father_Job')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>

    </div><br>

    <div class="row">

        <div class="col-md-4">
            <label>الهاتف الشخصي</label>
            <input type="text" value="{{ old('Father_Phone') }}" name="Father_Phone" class="form-control" >
            @error('Father_Phone')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>
        <div class="col-md-4">
            <label>هاتف العمل</label>
            <input type="text" value="{{ old('Job_Phone') }}" name="Job_Phone" class="form-control">
            @error('Job_Phone')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>
        <div class="col-md-4">
            <label>هاتف المنزل</label>
            <input type="text" value="{{ old('Home_Phone') }}" name="Home_Phone" class="form-control">
            @error('Home_Phone')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>

    </div><br>
   
        <label >العنوان</label>
        <textarea class="form-control" name="Address" rows="4">{{ old('Address') }}</textarea>
        @error('Address')
        <div class=" alert-danger">
        <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
        </div>
        @enderror
    </div><br>
    <h5 style="text-align: center; color:blue; font-weight: bold;"> معلومات الأم</h5>

    <div class="row">

        <div class="col-md-4">
            <label>أسم الام</label>
            <input type="text" value="{{ old('Mother_Name') }}" name="Mother_Name" class="form-control">
            @error('Mother_Name')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>
        <div class="col-md-4">
            <label>الوظيفة</label>
            <input type="text" value="{{ old('Mother_Job') }}" name="Mother_Job" class="form-control">
            @error('Mother_Job')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>
        <div class="col-md-4">
            <label>الهاتف</label>
            <input type="text" value="{{ old('Mother_Phone') }}" name="Mother_Phone" class="form-control">
            @error('Mother_Phone')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>

    </div>
    <br>
    <div class="col">
        <label style="font-weight:bold; color:blue;">إختر صورة للطـالـب: </label>
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
</section><!-- /.content --> --}}

@endsection
@section('js')
@toastr_js
@toastr_render

@endsection
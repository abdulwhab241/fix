@extends('layouts.master')
@section('css')

@section('title')
تعديل جدول الحصـص
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  تعديل جدول الحصـص</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> تعديل جدول الحصـص</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تعديل جدول الحصـص
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">


    <form action="{{route('Classes.update','test')}}" method="post">
        @method('PUT')
        @csrf
    
    
    <div class="box-body">
        <div class="row">
            <div class="col-md-2"> 
                <div class="form-group">
                <label >الـيوم</label>
                <input type="hidden" name="id" value="{{ $StudentClasses->id }}">
                <select class="form-control form-control-lg" name="Day_id">
                    <option > {{ $StudentClasses->day }} </option>
                    <option value="السبت">السبت</option>
                    <option value="الاحد">الاحد</option>
                    <option value="الاثنين">الاثنين</option>
                    <option value="الثلاثاء">الثلاثاء</option>
                    <option value="الاربعاء">الاربعاء</option>
                </select>
                @error('Day_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                <label >المرحلـة الدراسيـة</label>
                <select class="form-control form-control-lg" name="Grade_id">
                    @foreach($Grades as $Grade)
                    <option
                        value="{{$Grade->id}}" {{$Grade->id == $StudentClasses->grade_id ?'selected':''}}>{{$Grade->name }}</option>
                    @endforeach
                </select>                
                @error('Grade_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                <label >الصـف الدراسـي</label>
                <select class="form-control form-control-lg" name="Classroom_id">
                    @foreach($Classrooms as $Classroom)
                    <option
                        value="{{$Classroom->id}}" {{$Classroom->id == $StudentClasses->classroom_id ?'selected':''}}>{{$Classroom->name_class }}</option>
                    @endforeach
                </select>                        
                @error('Classroom_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                <label >الشعبـة</label>
                <select class="form-control form-control-lg" name="Section_id">
                    <option value="{{ $StudentClasses->section_id }}"> {{ $StudentClasses->section->name_section }} </option>
    
                </select>
                @error('Section_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                <label >الحصـة الاولى</label>
                <select class="form-control form-control-lg" name="First">
                    <option > {{ $StudentClasses->first }} </option>
                    <option value="القرأن الكريم">القرأن الكريم</option>
                    <option value="التربيــة الإسلاميــة">التربيــة الإسلاميــة</option>
                    <option value="اللغه العربيه">اللغه العربيه</option>
                    <option value="اللغه الانجليزيه">اللغه الانجليزيه</option>
                    <option value="المجتمع المدني">المجتمع المدني</option>
                    <option value="الكيمياء">الكيمياء</option>
                    <option value="الفيزياء">الفيزياء</option>
                    <option value="الاحياء">الاحياء</option>
                    <option value="التاريخ">التاريخ</option>
                    <option value="الجغرافيه">الجغرافيه</option>
                    <option value="حاسوب">حاسوب</option>
                    <option value="العلوم">العلوم</option>
                    <option value="الرياضيات">الرياضيات</option>
                    <option value="رياضة">رياضة</option>
                    <option value="فنية">فنية</option>
                    <option value="مكتبة">مكتبة</option>
                    <option value="الإجتماعيات">الإجتماعيات</option>
                </select>
                @error('First')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
    
            <div class="col-md-2">
                <div class="form-group">
                <label >الحصـة الـثانيـة</label>
                <select class="form-control form-control-lg" name="Second">
                    <option > {{ $StudentClasses->second }} </option>
                    <option value="القرأن الكريم">القرأن الكريم</option>
                    <option value="التربيــة الإسلاميــة">التربيــة الإسلاميــة</option>
                    <option value="اللغه العربيه">اللغه العربيه</option>
                    <option value="اللغه الانجليزيه">اللغه الانجليزيه</option>
                    <option value="المجتمع المدني">المجتمع المدني</option>
                    <option value="الكيمياء">الكيمياء</option>
                    <option value="الفيزياء">الفيزياء</option>
                    <option value="الاحياء">الاحياء</option>
                    <option value="التاريخ">التاريخ</option>
                    <option value="الجغرافيه">الجغرافيه</option>
                    <option value="حاسوب">حاسوب</option>
                    <option value="العلوم">العلوم</option>
                    <option value="الرياضيات">الرياضيات</option>
                    <option value="رياضة">رياضة</option>
                    <option value="فنية">فنية</option>
                    <option value="مكتبة">مكتبة</option>
                    <option value="الإجتماعيات">الإجتماعيات</option>
                </select>
                @error('Second')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
        </div><br>
    
        <div class="row">
    
            <div class="col-md-2">
                <div class="form-group">
                <label >الحصـة الثـالثـة</label>
                <select class="form-control form-control-lg" name="Third">
                    <option > {{ $StudentClasses->third }} </option>
                    <option value="القرأن الكريم">القرأن الكريم</option>
                    <option value="التربيــة الإسلاميــة">التربيــة الإسلاميــة</option>
                    <option value="اللغه العربيه">اللغه العربيه</option>
                    <option value="اللغه الانجليزيه">اللغه الانجليزيه</option>
                    <option value="المجتمع المدني">المجتمع المدني</option>
                    <option value="الكيمياء">الكيمياء</option>
                    <option value="الفيزياء">الفيزياء</option>
                    <option value="الاحياء">الاحياء</option>
                    <option value="التاريخ">التاريخ</option>
                    <option value="الجغرافيه">الجغرافيه</option>
                    <option value="حاسوب">حاسوب</option>
                    <option value="العلوم">العلوم</option>
                    <option value="الرياضيات">الرياضيات</option>
                    <option value="رياضة">رياضة</option>
                    <option value="فنية">فنية</option>
                    <option value="مكتبة">مكتبة</option>
                    <option value="الإجتماعيات">الإجتماعيات</option>
                </select>
                @error('Third')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
    
            <div class="col-md-2">
                <div class="form-group">
                <label >الحصـة الرابعـة</label>
                <select class="form-control form-control-lg" name="Fourth">
                    <option > {{ $StudentClasses->fourth }} </option>
                    <option value="القرأن الكريم">القرأن الكريم</option>
                    <option value="التربيــة الإسلاميــة">التربيــة الإسلاميــة</option>
                    <option value="اللغه العربيه">اللغه العربيه</option>
                    <option value="اللغه الانجليزيه">اللغه الانجليزيه</option>
                    <option value="المجتمع المدني">المجتمع المدني</option>
                    <option value="الكيمياء">الكيمياء</option>
                    <option value="الفيزياء">الفيزياء</option>
                    <option value="الاحياء">الاحياء</option>
                    <option value="التاريخ">التاريخ</option>
                    <option value="الجغرافيه">الجغرافيه</option>
                    <option value="حاسوب">حاسوب</option>
                    <option value="العلوم">العلوم</option>
                    <option value="الرياضيات">الرياضيات</option>
                    <option value="رياضة">رياضة</option>
                    <option value="فنية">فنية</option>
                    <option value="مكتبة">مكتبة</option>
                    <option value="الإجتماعيات">الإجتماعيات</option>
                </select>
                @error('Fourth')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
    
            <div class="col-md-2">
                <div class="form-group">
                <label >الحصـة الخـامسـة</label>
                <select class="form-control form-control-lg" name="Fifth">
                    <option > {{ $StudentClasses->fifth }} </option>
                    <option value="القرأن الكريم">القرأن الكريم</option>
                    <option value="التربيــة الإسلاميــة">التربيــة الإسلاميــة</option>
                    <option value="اللغه العربيه">اللغه العربيه</option>
                    <option value="اللغه الانجليزيه">اللغه الانجليزيه</option>
                    <option value="المجتمع المدني">المجتمع المدني</option>
                    <option value="الكيمياء">الكيمياء</option>
                    <option value="الفيزياء">الفيزياء</option>
                    <option value="الاحياء">الاحياء</option>
                    <option value="التاريخ">التاريخ</option>
                    <option value="الجغرافيه">الجغرافيه</option>
                    <option value="حاسوب">حاسوب</option>
                    <option value="العلوم">العلوم</option>
                    <option value="الرياضيات">الرياضيات</option>
                    <option value="رياضة">رياضة</option>
                    <option value="فنية">فنية</option>
                    <option value="مكتبة">مكتبة</option>
                    <option value="الإجتماعيات">الإجتماعيات</option>
                </select>
                @error('Fifth')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
    
            <div class="col-md-2">
                <div class="form-group">
                <label >الحصـة السـادسـة</label>
                <select class="form-control form-control-lg" name="Sixth">
                    <option > {{ $StudentClasses->sixth }} </option>
                    <option value="القرأن الكريم">القرأن الكريم</option>
                    <option value="التربيــة الإسلاميــة">التربيــة الإسلاميــة</option>
                    <option value="اللغه العربيه">اللغه العربيه</option>
                    <option value="اللغه الانجليزيه">اللغه الانجليزيه</option>
                    <option value="المجتمع المدني">المجتمع المدني</option>
                    <option value="الكيمياء">الكيمياء</option>
                    <option value="الفيزياء">الفيزياء</option>
                    <option value="الاحياء">الاحياء</option>
                    <option value="التاريخ">التاريخ</option>
                    <option value="الجغرافيه">الجغرافيه</option>
                    <option value="حاسوب">حاسوب</option>
                    <option value="العلوم">العلوم</option>
                    <option value="الرياضيات">الرياضيات</option>
                    <option value="رياضة">رياضة</option>
                    <option value="فنية">فنية</option>
                    <option value="مكتبة">مكتبة</option>
                    <option value="الإجتماعيات">الإجتماعيات</option>
                </select>
                @error('Sixth')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
    
            <div class="col-md-2">
                <div class="form-group">
                <label >الحصـة السـابعـة</label>
                <select class="form-control form-control-lg" name="Seventh">
                    <option > {{ $StudentClasses->seventh }} </option>
                    <option value="القرأن الكريم">القرأن الكريم</option>
                    <option value="التربيــة الإسلاميــة">التربيــة الإسلاميــة</option>
                    <option value="اللغه العربيه">اللغه العربيه</option>
                    <option value="اللغه الانجليزيه">اللغه الانجليزيه</option>
                    <option value="المجتمع المدني">المجتمع المدني</option>
                    <option value="الكيمياء">الكيمياء</option>
                    <option value="الفيزياء">الفيزياء</option>
                    <option value="الاحياء">الاحياء</option>
                    <option value="التاريخ">التاريخ</option>
                    <option value="الجغرافيه">الجغرافيه</option>
                    <option value="حاسوب">حاسوب</option>
                    <option value="العلوم">العلوم</option>
                    <option value="الرياضيات">الرياضيات</option>
                    <option value="رياضة">رياضة</option>
                    <option value="فنية">فنية</option>
                    <option value="مكتبة">مكتبة</option>
                    <option value="الإجتماعيات">الإجتماعيات</option>
                </select>
                @error('Seventh')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
            </div>
        </div>
            <br>
    
    </div>
    
    <div class="modal-footer">
    <button type="submit"
        class="btn btn-success btn-block">تـعديـل البيانات</button>
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
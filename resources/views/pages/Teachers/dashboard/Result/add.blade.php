@extends('layouts.master')
@section('css')

@section('title')
اضـافـة النتـائـج الشـهريـة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  اضـافـة النتـائـج الشـهريـة</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
    <li class="breadcrumb-item"><a href="{{ url('/teacher/dashboard') }}" class="default-color">الرئيسية</a></li>
    <li class="breadcrumb-item active"> اضـافـة النتـائـج الشـهريـة</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضـافـة النتـائـج الشـهريـة
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

    <form class="form-horizontal" action="{{ route('TeacherResult.store') }}" method="POST">
        @csrf
        
        <div class="box-body">
        <div class="row">
            <div class="col-md-4"> 
                <label>الفـصل الـدراسـي</label>
                <select class="form-control form-control-lg" name="Semester_id">
                    <option  selected disabled>أختـر من القائمة...</option>
                    @foreach ($Semesters as $Semester)
                        <option value="{{ $Semester->id }}">
                            {{ $Semester->name }}
                        </option>
                    @endforeach
                </select>
                @error('Semester_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
        
            <div class="col-md-4">
                <label >نتيـجة شهـر</label>
                <select class="form-control form-control-lg" name="Result_name">
                    <option  selected disabled>أختـر من القائمة...</option>
                    @foreach ($Months as $Month)
                    <option value="{{ $Month->id }}">
                        {{ $Month->name }}
                    </option>
                @endforeach
                </select>   
                @error('Result_name')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror     
            </div>
        
            <div class="col-md-4"> 
                <label>المـادة</label>
                <select class="form-control form-control-lg" name="Exam_id">
                    <option  selected disabled>أختـر من القائمة...</option>
                    @foreach ($exams as $Exam)
                        <option value="{{ $Exam->subject_id }}">
                            {{ $Exam->subject->name }}
                        </option>
                    @endforeach
                </select>
                @error('Exam_id')
                <div class=" alert-danger">
                <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
                </div>
                @enderror
            </div>
        
        </div><br>
        
        <div class="row">
        
        <div class="col-md-4"> 
            <label>أسـم الطـالـب \ الطـالبـة</label>
            <select class="form-control form-control-lg" name="Student_id">
                <option  selected disabled>أختـر من القائمة...</option>
                @foreach ($students as $Student)
                    <option value="{{ $Student->student_id }}">
                        {{ $Student->student->name }}
                    </option>
                @endforeach
            </select>
            @error('Student_id')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>
        
        <div class="col-md-4"> 
            
            <label>الدرجـة التي حصـل عليـها</label>
            <input type="number" value="{{ old('Marks') }}" name="Marks" class="form-control">
            @error('Marks')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>
        
        <div class="col-md-4">
            <label >التقـديـر</label>
            <select class="form-control form-control-lg" name="Appreciation">
                <option  selected disabled>أختـر من القائمة...</option>
                <option value="ممـتـاز">ممـتـاز</option>
                <option value="جيـد جـداً">جيـد جـداً</option>
                <option value="جيـد">جيـد</option>
                <option value="مقبـول">مقبـول</option>
                <option value="ضعيـف">ضعيـف</option>
            </select>  
            @error('Appreciation')
            <div class=" alert-danger">
            <span style="text-align: center; font-weight: bold;"><h3 style="text-align: center font-weight: bold;"> {{ $message }}</h3></span>
            </div>
            @enderror
        </div>
        
        </div><br>
        
        </div>
        
        <div class="modal-footer">
            <button type="submit"
            class="btn btn-info btn-block">تـأكيـد</button>
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
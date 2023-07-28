@extends('layouts.master')
@section('css')
@section('title')
تـعديـل نتيـجة
@stop
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
<div class="col-sm-6">
<h4 class="mb-0">  تـعديـل نتيـجة الطـالـب</h4>
</div>
<div class="col-sm-6">
<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
<li class="breadcrumb-item active"> تـعديـل نتيـجة الطـالـب</li>
</ol>
</div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
تـعديـل نتيـجة الطـالـب    
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

<form class="form-horizontal"  action="{{ route('Results.update', 'test') }}" method="post">
{{ method_field('patch') }}
@csrf
<div class="box-body">
<div class="row">
    <div class="col-md-4"> 
        <label>الفـصل الـدراسـي</label>
        <select class="form-control form-control-lg" name="Semester_id">
            <option value="{{ $Result->semester->id }}">
                {{ $Result->semester->name }}
            </option>
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
            <option value="{{ $Result->month->id }}">
                {{ $Result->month->name }}
            </option>
            @foreach ($Months as $Month)
            <option value="{{ $Month->id }}">
                {{ $Month->name }}
            </option>
        @endforeach
        </select>
    </div>

    <div class="col-md-4"> 
        <label>المـادة</label>
        <select class="form-control form-control-lg" name="Exam_id">
            <option value="{{ $Result->exam->subject->id }}">
                {{ $Result->exam->subject->name }}
            </option>
            @foreach ($Exams as $Exam)
            <option value="{{ $Exam->id }}">
                {{ $Exam->subject->name }}
            </option>
        @endforeach
        </select>
    </div>

</div><br>

<div class="row">
<div class="col-md-4"> 
    <label>أسـم الطـالـب \ الطـالبـة </label>
    <select class="form-control form-control-lg" name="Student_id">
        <option value="{{ $Result->student->id }}">
            {{ $Result->student->name }}
        </option>
        @foreach ($Students as $Student)
        <option value="{{ $Student->student_id }}">
            {{ $Student->student->name }}
        </option>
    @endforeach
    </select>
</div>

<div class="col-md-4">
<label>الدرجـة التي حصـل عليـها</label>
<input type="hidden" name="id" value="{{$Result->id}}">
<input type="number" value="{{ $Result->marks_obtained }}" name="Marks" class="form-control">
</div>

<div class="col-md-4">
    <label >التقـديـر</label>
    <select class="form-control form-control-lg" name="Appreciation">
        <option >{{$Result->appreciation }}</option>
        <option value="ممـتـاز">ممـتـاز</option>
        <option value="جيـد جـداً">جيـد جـداً</option>
        <option value="جيـد">جيـد</option>
        <option value="مقبـول">مقبـول</option>
        <option value="ضعيـف">ضعيـف</option>
    </select> 
</div>

</div>

</div><br>
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
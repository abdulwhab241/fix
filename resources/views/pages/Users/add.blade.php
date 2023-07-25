@extends('layouts.master')
@section('css')

@section('title')
اضافة مسـتخـدم جديد
@stop
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0">  اضافة مسـتخـدم جديد</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
            <li class="breadcrumb-item active"> اضافة مسـتخـدم جديد</li>
        </ol>
    </div>
</div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
اضافة مسـتخـدم جديد
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">


                <form method="post" action="{{ route('Users.store') }}" autocomplete="off">
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

                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->

@endsection
@section('js')

@endsection
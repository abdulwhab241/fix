<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="برنامج عبدالوهاب لإدارة المدارس" />
    <meta name="copyright" content="Abdulwhab Mohammed" />
    <meta name="keywords" content="HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>برنامج عبدالوهاب لادارة المدارس</title>

    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <!-- css -->
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
</head>

<body>



    <div class="wrapper">

        <!--=================================
preloader -->

        <div id="pre-loader">
            <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div>

        <!--=================================
preloader -->

        <!--=================================
login-->

        <section class="height-100vh d-flex align-items-center page-section-ptb login "
            style="background-image: url('{{ asset('assets/images/school.jpg') }}'); padding:10px; font-weight: bolder;">
            <div class="container">
                <div class="row justify-content-center no-gutters vertical-align">

                    <div class="col-lg-4 col-md-6 bg-white">
                        <div class="login-fancy pb-40 clearfix">
                            @if ($type == 'student')
                                <h3 style="font-family: 'Cairo', sans-serif; font-weight: bolder;" class="mb-40">تسجيل
                                    دخول طالب</h3>
                            @elseif($type == 'teacher')
                                <h3 style="font-family: 'Cairo', sans-serif; font-weight: bolder;" class="mb-40">تسجيل
                                    دخول معلم</h3>
                            @else
                                <h3 style="font-family: 'Cairo', sans-serif; font-weight: bolder;" class="mb-40">تسجيل
                                    دخول ادمن</h3>
                            @endif
                            <h5 class="text-center" style="color: cornflowerblue; font-weight: bolder; margin: 5px;">
                                مرحباً بـك في مـدارس .............. الأهلية </h5>
                            <marquee direction="right" scrollamount="3">
                                <p class="text-center"
                                    style="margin: 5px; font-size:15px; font-weight: bolder; color:cornflowerblue;">إذا
                                    كنت مسجل بنظام المدرسة يمكنك تسجيل اسمك ,<br />
                                    وكلمة المرور رقم هـاتـفـك

                                </p>
                            </marquee>
                            <br><br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label class=" control-label" style="font-weight: bolder;">
                                        <i class="fa fa-user fa-fw"></i>
                                        أسـم المستخدم</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <input type="hidden" value="{{ $type }}" name="type">

                                </div>
                                <div class="form-group">
                                    <label class="mb-10" style="font-weight: bolder;" for="Password">
                                        <i class="fa fa-key fa-fw"></i>
                                        كلمة المرور </label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <button class="button btn-block"><span>دخول</span><i class="fa fa-check"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>



    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
    <!-- plugin_path -->
    <script>
        var plugin_path = 'js/';
    </script>

    <!-- chart -->
    <script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
    <!-- calendar -->
    <script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
    <!-- charts sparkline -->
    <script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
    <!-- charts morris -->
    <script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
    <!-- sweetalert2 -->
    <script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
    <!-- toastr -->
    @yield('js')
    <script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
    <!-- validation -->
    <script src="{{ URL::asset('assets/js/validation.js') }}"></script>
    <!-- lobilist -->
    <script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
    <!-- custom -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
</body>

</html>

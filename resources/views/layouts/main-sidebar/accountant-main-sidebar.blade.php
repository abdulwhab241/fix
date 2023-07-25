<div class="scrollbar side-menu-bg" style="overflow: scroll; font-family: 'Cairo', sans-serif">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">الرئيسية</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">برنامج عبدالوهاب لإدارة المدارس </li>

        <!-- Accounts-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                <div class="pull-left"><i class="fa fa-dollar highlight-icon" aria-hidden="true"></i><span
                        class="right-nav-text">الحسابات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Fees_Invoices.index')}}"> الفـواتيـر الدراسيـة</a></li>
                <li><a href="{{ route('Receipts.index') }}"> سندات القبض (تسـديـد رسـوم)</a></li>
                <li><a href="{{route('ProcessingFee.index')}}"> أستبـعاد رسـوم طـالـب </a></li>
                <li><a href="{{route('Payments.index')}}"> سـندات الصـرف </a></li>
            </ul>
        </li>




    </ul>
</div>



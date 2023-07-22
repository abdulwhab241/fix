

@if (auth('web')->check())
@include('layouts.main-header.admin-header')
@endif

@if (auth('student')->check())
@include('layouts.main-header.student-header')
@endif

@if (auth('teacher')->check())
@include('layouts.main-header.teacher-header')
@endif

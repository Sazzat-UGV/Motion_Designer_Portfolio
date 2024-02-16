<div class="nav-header">
    <a href="{{ route('admin.dashboard') }}" class="brand-logo">

        @php
$favicon = \App\Models\Setting::findOrFail(1)->pluck('favicon')->first();
@endphp
<img class="logo-abbr" width="39" height="23" src="{{ asset('uploads/setting/favicon') }}/{{ $favicon }}" alt="">
        <h4 class="brand-title text-white">Admin</h4>
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
</div>

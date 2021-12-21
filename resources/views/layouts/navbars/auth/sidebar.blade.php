<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
            <img src="../assets/img/logo-app.png" class="navbar-brand-img h-100" alt="...">
{{--            <span class="ms-1 font-weight-bold">Dashboard</span>--}}
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    @php print_r(Auth::user()->name) @endphp
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        @if(Auth::user()->role == '1')
            <x-dashboard.admin></x-dashboard.admin>
        @endif
        @if(Auth::user()->role == '2')
            <x-dashboard.migrant></x-dashboard.migrant>
        @endif
        @if(Auth::user()->role == '0')
            <x-dashboard.org></x-dashboard.org>
        @endif

    </div>
</aside>

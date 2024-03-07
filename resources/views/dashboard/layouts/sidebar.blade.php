<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">MonJaTir</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">MJT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fas fa-columns"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown {{ Request::is('dashboard/*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.controls.index') }}" class="nav-link"><i class="far fa-calendar-alt"></i>
                    <span>Rekap Monitoring</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
    </aside>
</div>

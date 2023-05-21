<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">

                <h5 class="mt-auto mb-auto">Gamvote</h5>

            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
                    <a href="{{ route('admin.home') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs('admin.calon') ? 'active' : '' }}">
                    <a href="{{ route('admin.calon') }}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Tambah Kandidat</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs('register') ? 'active' : '' }}">
                    <a href="{{ route('register') }}" class='sidebar-link'>
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Tambah Pemilih</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs('admin.addAdmin') ? 'active' : '' }}">
                    <a href="{{ route('admin.addAdmin') }}" class='sidebar-link'>
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Tambah Admin</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs('admin.pemilih') ? 'active' : '' }}">
                    <a href="{{ route('admin.pemilih') }}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Data Pemilih</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs('logout') ? 'active' : '' }}">
                    <a href="{{ route('logout') }}" class="sidebar-link"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

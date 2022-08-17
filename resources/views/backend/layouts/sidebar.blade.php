<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active dashboard-color text-white' : '' }}"
                    aria-current="page" href="/dashboard">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active dashboard-color text-white' : '' }}"
                    href="/dashboard/posts">
                    <i class="bi bi-file-earmark-text"></i>
                    Postingan Kegiatan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/strukturs*') ? 'active dashboard-color text-white' : '' }}"
                    href="/dashboard/strukturs">
                    <i class="bi bi-person-badge"></i>
                    Struktur Anggota
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/divisi*') ? 'active dashboard-color text-white' : '' }}"
                    href="/dashboard/divisi">
                    <i class="bi bi-building"></i>
                    Divisi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/category*') ? 'active dashboard-color text-white' : '' }}"
                    href="/dashboard/category">
                    <i class="bi bi-grid-3x3"></i>
                    Category
                </a>
            </li>
        </ul>

    </div>
</nav>
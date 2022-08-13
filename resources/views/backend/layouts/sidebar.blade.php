<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active bg-dark text-white' : '' }}"
                    aria-current="page" href="/dashboard">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active bg-dark text-white' : '' }}"
                    href="/dashboard/posts">
                    <i class="bi bi-file-earmark-text"></i>
                    My Post
                </a>
            </li>
        </ul>

    </div>
</nav>
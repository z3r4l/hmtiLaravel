<!--**********************************
            Sidebar start
        ***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li class="mega-menu mega-menu-lg">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="mdi mdi-view-dashboard"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="{{ Request::is('dashboard') ? 'active dashboard-color text-white' : '' }}"
                            aria-current="page" href="/dashboard">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a></li>

                </ul>
            </li>



            <li class="nav-label">Postingan</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-collage"></i>
                    <span class="nav-text">Postingan</span></a>
                <ul aria-expanded="false">
                    <li><a class="{{ Request::is('dashboard/posts*') ? 'active dashboard-color text-white' : '' }}"
                            href="/dashboard/posts">
                            <i class="bi bi-file-earmark-text"></i>
                            Postingan Kegiatan
                        </a>
                    </li>
                    <li> <a class="nav-link {{ Request::is('dashboard/category*') ? 'active dashboard-color text-white' : '' }}"
                            href="/dashboard/category">
                            <i class="bi bi-grid-3x3"></i>
                            Category
                        </a>
                    </li>
                </ul>
            </li>




            <li class="nav-label">Struktur</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-collage"></i>
                    <span class="nav-text">Struktur Anggota</span></a>
                <ul aria-expanded="false">
                    <li><a class="{{ Request::is('dashboard/strukturs*') ? 'active dashboard-color text-white' : '' }}"
                            href="/dashboard/strukturs">
                            <i class="bi bi-person-badge"></i>
                            Anggota
                        </a>
                    </li>

                </ul>
            </li>


            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-collage"></i>
                    <span class="nav-text">Divisi</span></a>
                <ul aria-expanded="false">
                    <li> <a class="{{ Request::is('dashboard/divisi*') ? 'active dashboard-color text-white' : '' }}"
                            href="/dashboard/divisi">
                            <i class="bi bi-building"></i>
                            Divisi
                        </a>
                    </li>
                </ul>
            </li>








        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
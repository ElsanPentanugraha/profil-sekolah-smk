<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ url('/admin/dashboard') }}">SMKN</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0 d-flex justify-content-end">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                {{-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li> --}}
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-house-chimney"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Master Data</div>
                    {{-- <a class="nav-link" href="{{ url('/admin/school-profile') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                        Kelola Profil Sekolah
                    </a> --}}
                    <a class="nav-link" href="{{ url('/admin/major-management') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-person-chalkboard"></i></div>
                        Kelola Jurusan
                    </a>
                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Kelola Pengumuman
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ url('/admin/information-management') }}">Pengumuman</a>
                            <a class="nav-link" href="{{ url('/admin/category-management') }}">Kategori</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="{{ url('/admin/message-management') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-envelope"></i></div>
                        Pesan
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                        Kelola Galeri
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ url('/admin/photo-gallery') }}">Gambar</a>
                            {{-- <a class="nav-link" href="{{ url('/admin/video-gallery') }}">Video</a> --}}
                        </nav>
                    </div>
                    <a class="nav-link" href="{{ url('/admin/contact-management') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                        Kelola Kontak
                    </a>
                    <div class="sb-sidenav-menu-heading">Admin Management</div>
                    <a class="nav-link" href="{{ url('/admin/user-management') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        User
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <strong>{{ Auth::user()->name }}</strong>
            </div>
        </nav>
    </div>

<header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('storage/logo/LogoSMK2.jpg') }}" alt="" class="logo">
            <div class="school-info">
                <span class="school-name">SMKN 1 Tamiang Layang</span>
                <span class="motto">Menciptakan Insan Cerdas, Kreatif, Religius, dan Siap Kerja</span>
            </div>
        </a>

        <nav class="nav navbar order-last order-lg-0" id="navbar">
            <ul>
                <li><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                <li class="dropdown"><a href="{{ url('/profile') }}"><span>Profil</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('/profile#profile') }}">Tentang</a></li>
                        <li><a href="{{ url('/profile#visi') }}">Visi & Misi</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="{{ url('/e-learning') }}">E-Learning</a></li>
                <li><a class="nav-link" href="{{ url('/ppdb') }}">PPDB</a></li>
                <li class="dropdown"><a href="{{ url('/major') }}"><span>Program Keahlian</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach ($majorId as $item)
                            <li><a href="{{ url('/major', $item->id) }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ url('/information') }}"><span>Informasi</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('/information/announcement') }}">Pengumuman</a></li>
                        <li><a href="{{ url('/information/news') }}">Berita</a></li>
                        <li><a href="{{ url('/information/article') }}">Artikel</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span>Lainnya</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('/gallery') }}">Galeri</a></li>
                        <li><a href="{{ url('/contact') }}">Kontak</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

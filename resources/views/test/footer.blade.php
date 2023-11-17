<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-info">
                        <h3>Alamat</h3>
                        <p>
                            {{ $contact->address }}<br><br>
                            <strong>Phone :</strong> {{ $contact->phone }} <br><br>
                            <strong>Email :</strong> {{ $contact->email }}<br><br>
                            <strong>Website :</strong> {{ $contact->website }}<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-menus">
                    <h4>Menu</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Beranda</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/profile') }}">Profil</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">E-Learning</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">PPDB</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/information') }}">Informasi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/gallery') }}">Galeri</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/contact') }}">Hubungi Kami</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-menus">
                    <h4>Program Keahlian</h4>
                    <ul>
                        @foreach ($majorId as $item)
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/major', $item->id) }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-bottom">
        <div class="copyright d-flex justify-content-center">
            &copy; Copyright <strong><span>SMKN 1 Tamiang Layang</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>

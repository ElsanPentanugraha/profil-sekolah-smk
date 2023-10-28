@extends('landing.app')

@section('title', 'Beranda')

@section('content')

    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-sekolah.jpg)">
                    <div class="container">
                        <h2>Selamat Datang di <span>SMKN 1 Tamiang layang</span></h2>
                        <p>Selamat datang di website resmi SMKN 1 Tamiang Layang. Website ini dikelola oleh Tim IT SMKN 1
                            Tamiang Layang.</p>
                        {{-- <a href="#about" class="btn-get-started scrollto">Read More</a> --}}
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-tkro.jpg)">
                    <div class="container">
                        <h2>Teknik Otomotif (TKRO)</h2>
                        <p>Teknik Kendaraan Ringan adalah ilmu yang mempelajari tentang alat-alat transportasi darat yang
                            menggunakan mesin, terutama mobil yang mulai berkembang sebagai cabang ilmu seiring dengan
                            diciptakannya mesin mobil.</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-elektro.jpg)">
                    <div class="container">
                        <h2>Teknik Elektronika</h2>
                        <p>Teknik Elektronika merupakan salah satu jurusan di SMK Negeri 1 Tamiang Layang. Jurusan Teknik
                            Elektronika Audio Video dibuka pada tahun 2011.</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-multimedia.jpg)">
                    <div class="container">
                        <h2>Teknik Multimedia</h2>
                        <p>Multimedia merupakan salah satu kompetensi keahlian di SMK yang termasuk dalam rumpun bidang
                            keahlian Teknik Komputer dan Informatika. Kompetensi keahlian ini cukup banyak diminati oleh
                            siswa lho..</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-otkp.jpg)">
                    <div class="container">
                        <h2>Otomatisasi dan Tata Kelola Perkantoran (OTKP)</h2>
                        <p>Jurusan Otomatisasi dan Tata Kelola Perkantoran (OTKP) merupakan salah salah satu jurusan di
                            Sekolah Menengah Kejuruan (SMK) yang memberikan bekal tentang pengetahuan, keterampilan, dan
                            sikap dalam menyelesaikan pekerjaan-pekerjaan perusahaan atau kantor.</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>

@endsection

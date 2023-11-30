@extends('landing.userApp')

@section('title', 'Home')

@section('content')
    <section id="slider">
        <div id="sliderCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="slider-carousel-indicators"></ol>

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
                        {{-- <a href="#about" class="btn-slider scrollto">Read More</a> --}}
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-elektro.jpg)">
                    <div class="container">
                        <h2>Teknik Elektronika</h2>
                        <p>Teknik Elektronika merupakan salah satu jurusan di SMK Negeri 1 Tamiang Layang. Jurusan Teknik
                            Elektronika Audio Video dibuka pada tahun 2011.</p>
                        {{-- <a href="#about" class="btn-slider scrollto">Read More</a> --}}
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-multimedia.jpg)">
                    <div class="container">
                        <h2>Teknik Multimedia</h2>
                        <p>Multimedia merupakan salah satu kompetensi keahlian di SMK yang termasuk dalam rumpun bidang
                            keahlian Teknik Komputer dan Informatika. Kompetensi keahlian ini cukup banyak diminati oleh
                            siswa lho..</p>
                        {{-- <a href="#about" class="btn-slider scrollto">Read More</a> --}}
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-otkp.jpg)">
                    <div class="container">
                        <h2>Otomatisasi dan Tata Kelola Perkantoran (OTKP)</h2>
                        <p>Jurusan Otomatisasi dan Tata Kelola Perkantoran (OTKP) merupakan salah salah satu jurusan di
                            Sekolah Menengah Kejuruan (SMK) yang memberikan bekal tentang pengetahuan, keterampilan, dan
                            sikap dalam menyelesaikan pekerjaan-pekerjaan perusahaan atau kantor.</p>
                        {{-- <a href="#about" class="btn-slider scrollto">Read More</a> --}}
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#sliderCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#sliderCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>

    <section id="mainContent">
        <div class="container home-posts">
            <div class="row mt-5">
                <div class="home-post-items col-lg-8 col-md-12">
                    <h3>Recent Posts</h3>
                    <hr>
                    @foreach ($posts as $post)
                        <div class="card card-post mb-3 mt-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->name }}</h5>
                                <hr>
                                <p class="card-text">{!! Str::limit($post->description, 200) !!}</p>
                                <div class="post-info d-flex justify-content-start mt-3">
                                    <div class="d-flex">
                                        <i class="bi bi-calendar-event px-2"> </i>
                                        <p> {{ date('d F Y', strtotime($post->created_at)) }} </p>
                                    </div>
                                    <div class="d-flex px-3">
                                        <i class="bi bi-person px-2"> </i>
                                        <p> {{ $post->write_by }}</p>
                                    </div>
                                    <div class="d-flex px-3">
                                        <i class="bi bi-tags px-2"></i>
                                        @foreach ($post->category as $item)
                                            <p>{{ $item->name }}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <a href="{{ url('/detail-post', $post->id) }}" class="btn btn-post">Read More</a>
                            </div>
                        </div>
                    @endforeach

                    <div class="my-5">
                        {!! $posts->withQueryString()->links() !!}
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 px-3">
                    <div class="searchbar-feature">
                        <form class="d-flex" action="" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" name="keyword"
                                aria-label="Search">
                            <button class="btn btn-search" type="submit">Search</button>
                        </form>
                    </div>

                    {{-- sambutan kepala sekolah bisa ditambahkan --}}


                    {{-- buat arsip berdasarkan bulan tahun berjalan --}}
                    <div class="archives mt-4 px-3">
                        <h2>Arsip</h2>
                        <div class="archive-menu">
                            @foreach ($archives as $archive)
                                @php
                                    $formattedMonth = strftime('%B', mktime(0, 0, 0, $archive['month'], 1, $archive['year']));
                                @endphp

                                <a href="{{ route('information.archive', ['year' => $archive['year'], 'month' => $archive['month']]) }}"
                                    class="archive-link my-3">
                                    {{ $formattedMonth }} {{ $archive['year'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="contact-info mt-4 px-3">
                        <div class="contact-information-detail">
                            <h3>Kontak</h3>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-house-chimney"></i>
                                    <span>Alamat :</span>
                                    <p>{{ $contact->address }}</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <span>Telepon :</span>
                                    <p>{{ $contact->phone }}<br></p>
                                    <p>{{ $contact->telephone }}</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>Email :</span>
                                    <p>{{ $contact->email }}</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-globe"></i>
                                    <span>Website :</span>
                                    <p>{{ $contact->website }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media-info mt-5">
                            <h3>Media Sosial</h3>
                            <ul>
                                <li>
                                    <i class="fa-brands fa-facebook"></i>
                                    <span>Facebook :</span>
                                    <p>{{ $contact->facebook }}</p>
                                </li>
                                <li>
                                    <i class="fa-brands fa-instagram"></i>
                                    <span>Instagram :</span>
                                    <p>{{ $contact->instagram }}</p>
                                </li>
                                <li>
                                    <i class="fa-brands fa-youtube"></i>
                                    <span>Youtube :</span>
                                    <p>{{ $contact->youtube }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

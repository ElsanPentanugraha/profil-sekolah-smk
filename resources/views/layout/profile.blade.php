@extends('landing.app')

@section('title', 'Profil')

@section('content')

    <section id="profile" class="about">
        <div class="container mt-5" data-aos="fade-up">

            <div class="section-title">
                <h2><br>PROFIL SEKOLAH</h2>
            </div>

            <div class="row">
                <div class="col-lg-8" data-aos="fade-right">
                    <h6>Tentang</h6>
                    <img src="assets/img/profile/profile-sekolah.jpg" class="img-profile" alt="">

                    <div class="mt-4">
                        <p>Nama : SMKN 1 TAMIANG LAYANG <br>
                            NPSN : 30205277 <br>
                            Alamat : AHMAD YANI <br>
                            Kode Pos : 73611 <br>
                            Desa/Kelurahan : Tamiang Layang <br>
                            Kecamatan/Kota (LN) : Kec. Dusun Timur <br>
                            Kab.-Kota/Negara (LN) : Kab. Barito Timur <br>
                            Propinsi/Luar Negeri (LN) : Prov. Kalimantan Tengah <br>
                            Status Sekolah : NEGERI <br>
                            Waktu Penyelenggaraan : Sehari Penuh/5 hari <br>
                            Jenjang Pendidikan : SMK <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h6>Informasi Kontak</h6>
                    <ul>
                        <li><i class="bi bi-phone"></i><span>Phone :</span> +62 8888888</li>
                        <li><i class="bi bi-envelope"></i><span>Email :</span> admin@localhost.com</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section id="visi" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-8">
                    <img src="assets/img/profile/profile-sekolah.jpg" class="img-profile" alt="">

                    <div class="mt-4">
                        <h6>Visi & Misi</h6>
                        <span>Visi :</span>
                        <p>
                            “Terwujudnya Peserta Didik yang Bertaqwa, Cerdas, Terampil, Mandiri, dan Berwawasan Global”
                        </p>
                        <span>Misi :</span>
                        <ul>
                            <li>Menanamkan keimanan dan ketaqwaan melalui pengamalan ajaran agama.</li>
                            <li>Menanamkan akhlak mulia melalui sikap dan tingkah laku.</li>
                            <li>Mengoptimalkan proses belajar dan bimbingan.</li>
                            <li>Mengembangkan bidang ilmu pengetahuan dan teknologi berdasarkan minat, bakat, dan potensi
                                peserta didik yang berwawasan global.</li>
                            <li>Membina kemandirian peserta didik melalui kegiatan pembiasaan, kewirausahaan, dan
                                pengembangan
                                diri yang terencana dan berkesinambungan.</li>
                            <li>Menjalin kerja sama yang harmonis antarwarga sekolah, masyarakat, dan lembaga lain yang
                                terkait.
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-4">

                </div>
            </div>
        </div>
    </section>

@endsection

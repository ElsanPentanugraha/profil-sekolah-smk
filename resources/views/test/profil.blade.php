@extends('landing.userApp')

@section('title', 'Profil')

@section('content')
    <section id="profile">
        <div class="container mt-5">
            <h2>Tentang Sekolah</h2>
            <br>
            <img src="{{ asset('assets/img/profile/profile-sekolah.jpg') }}" class="img-fluid profile-image" alt="">
            <p class="mt-4">
                Nama : SMKN 1 TAMIANG LAYANG <br>
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
            <br>
            <img src="{{ asset('assets/img/profile/profile-sekolah.jpg') }}" class="img-fluid profile-image" alt="">
        </div>
    </section>
    <section id="visi">
        <div class="container">
            <h2>Visi & Misi</h2>
            <p>
                <strong>Visi :</strong> <br>
                “Terwujudnya Peserta Didik yang Bertaqwa, Cerdas, Terampil, Mandiri, dan Berwawasan Global”
            </p>
            <strong>Misi :</strong>
            <ol>
                <li>Menanamkan keimanan dan ketaqwaan melalui pengamalan ajaran agama.</li>
                <li>Menanamkan akhlak mulia melalui sikap dan tingkah laku.</li>
                <li>Mengoptimalkan proses belajar dan bimbingan.</li>
                <li>Mengembangkan bidang ilmu pengetahuan dan teknologi berdasarkan minat, bakat, dan potensi peserta didik
                    yang berwawasan global.</li>
                <li>Membina kemandirian peserta didik melalui kegiatan pembiasaan, kewirausahaan, dan pengembangan diri yang
                    terencana dan berkesinambungan.</li>
                <li>Menjalin kerja sama yang harmonis antarwarga sekolah, masyarakat, dan lembaga lain yang terkait.</li>
            </ol>
        </div>
    </section>
@endsection

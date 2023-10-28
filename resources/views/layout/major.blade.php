@extends('landing.app')

@section('title', 'Jurusan')

{{-- buat card jurusan yang detail menggunakan modal --}}
@section('content')
<section id="major" class="majors section-bg  mt-4">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2><br>Program Keahlian</h2>
        <p>
            SMKN 1 Tamiang Layang adalah tempat di mana pendidikan bertemu dengan praktik. Kami memahami bahwa setiap siswa memiliki minat dan bakat unik, itulah mengapa kami menawarkan berbagai pilihan jurusan yang relevan dengan kebutuhan industri dan pasar kerja.
        </p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="majoring" data-aos="fade-up" data-aos-delay="100">
            <div class="majoring-img">
              <img src="assets/img/majors/major-tkro.jpg" class="img-fluid" alt="">
              <div class="read-more">
                <a href="">Read More <i class="bi bi-box-arrow-up-right"></i></a>
              </div>
            </div>
            <div class="majoring-info">
              <h4>Teknik Otomotif (TKRO)</h4>
              {{-- <span>Chief Medical Officer</span> --}}
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="majoring" data-aos="fade-up" data-aos-delay="200">
            <div class="majoring-img">
              <img src="assets/img/majors/major-elektro.jpg" class="img-fluid" alt="">
              <div class="read-more">
                <a href="">Read More <i class="bi bi-box-arrow-up-right"></i></a>
              </div>
            </div>
            <div class="majoring-info">
              <h4>Teknik Elektronika</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="majoring" data-aos="fade-up" data-aos-delay="300">
            <div class="majoring-img">
              <img src="assets/img/majors/major-multimedia.jpg" class="img-fluid" alt="">
              <div class="read-more">
                <a href="">Read More <i class="bi bi-box-arrow-up-right"></i></a>
              </div>
            </div>
            <div class="majoring-info">
              <h4>Teknik Multimedia</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="majoring" data-aos="fade-up" data-aos-delay="400">
            <div class="majoring-img">
              <img src="assets/img/majors/major-otkp.jpg" class="img-fluid" alt="">
              <div class="read-more">
                <a href="">Read More <i class="bi bi-box-arrow-up-right"></i></a>
              </div>
            </div>
            <div class="majoring-info">
              <h4>Otomatisasi dan Tata Kelola Perkantoran (OTKP)</h4>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


@endsection

@extends('landing.app')

@section('title', 'Informasi')

@section('content')
    <section id="information" class="information">
        <div class="container mt-5" data-aos="fade-up">

            <div class="section-title">
                <h2><br>Informasi</h2>
            </div>


            <div class="row">
                <div class="col-lg-6 col-md-12 d-flex align-items-stretch">

                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="information-img">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="card-img-top"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> <a
                                        href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

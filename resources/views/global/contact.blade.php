@extends('landing.userApp')

@section('title', 'Kontak')

@section('content')
    <section id="contact-informations">
        <div class="container contact-page mt-5">
            <div class="contacts-info">
                <h2>Informasi Kontak</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <ul>
                            <li>
                                <i class="fa-solid fa-house-chimney"></i>
                                <strong>Alamat :</strong>
                                <p>{{ $contact->address }}</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <strong>Telepon :</strong>
                                <p>{{ $contact->phone }}<br></p>
                                <p>{{ $contact->telephone }}</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <strong>Email :</strong>
                                <p>{{ $contact->email }}</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-globe"></i>
                                <strong>Website :</strong>
                                <p>{{ $contact->website }}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <ul>
                            <li>
                                <i class="fa-brands fa-facebook"></i>
                                <strong>Facebook :</strong>
                                <p>smkn</p>
                            </li>
                            <li>
                                <i class="fa-brands fa-instagram"></i>
                                <strong>Instagram :</strong>
                                <p>smkn</p>
                            </li>
                            <li>
                                <i class="fa-brands fa-youtube"></i>
                                <strong>Youtube :</strong>
                                <p>smkn</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="contact-form">
        <div class="container mt-5">
            <div class="email-forms">
                <h2>Hubungi Kami</h2>
                @if (Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form action="contact/send-mail">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-5">
                                <input class="form-control" id="name" type="text" name='name' placeholder="Nama"
                                    required />
                                <label for="Nama">Nama</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-5">
                                <input class="form-control" id="email" type="email" name='email'
                                    placeholder="example@mail.com" required />
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-5">
                        <input class="form-control" id="subject" type="text" name='subject' placeholder="subject"
                            required />
                        <label for="subject">Subject</label>
                    </div>
                    <div class="form-floating mb-5">
                        <textarea cols="30" rows="20" class="form-control" id="message" type="text" name='mail_message'
                            placeholder="Tulis Pesan"></textarea>

                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@extends('landing.adminApp')

@section('title', 'Admin | Add Contact')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Tambah Data Kontak</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/admin/contact-management') }}">Informasi Kontak</a></li>
                    <li class="breadcrumb-item active">Add Kontak</li>
                </ol>
                <hr>

                <div class="container">
                    <div class="card shadow-lg border-0 rounded-lg mt-4">
                        <div class="card-header">
                            <h4 class="text-center font-weight-light my-4">Buat Data Kontak</h4>
                        </div>
                        <div class="card-body">
                            <form action="store-contact" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h6 class="text-center font-weight-light my-4">Informasi Kontak & Alamat</h6>
                                        <hr>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="phone" type="text" placeholder="Telepon"
                                                        name="phone" />
                                                    <label for="phone">Telepon</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="telephone" type="text" placeholder="Telepon tambahan"
                                                        name="telephone" />
                                                    <label for="telephone">Telepon lainnya</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" />
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="website" type="text" placeholder="website.sch.id"
                                                        name="website" />
                                                    <label for="website">Alamat Website</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea cols="30" rows="20" class="form-control" id="address" type="text" name='address'
                                                placeholder="Alamat"></textarea>
                                            <label for="address">Alamat</label>
                                        </div>
                                    </div>

                                    {{-- social media input --}}
                                    <div class="col-lg-4">
                                        <h6 class="text-center font-weight-light my-4">Informasi Sosial Media</h6>
                                        <hr>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="facebook" type="text" placeholder="Facebook" name="facebook" />
                                            <label for="facebook">Facebook</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="instagram" type="text" placeholder="Instagram"
                                                name="instagram" />
                                            <label for="instagram">Instagram</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="youtube" type="text" placeholder="Youtube" name="youtube" />
                                            <label for="youtube">Youtube</label>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

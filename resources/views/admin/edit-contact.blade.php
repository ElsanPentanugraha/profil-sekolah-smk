@extends('landing.adminApp')

@section('title', 'Admin | Edit Contact')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Edit Data Kontak</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/admin/contact-management') }}">Informasi Kontak</a></li>
                    <li class="breadcrumb-item active">Edit Kontak</li>
                </ol>
                <hr>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4">Edit Data Kontak</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/admin/contact-update/{{ $contact->id }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="phone" type="text" value="{{ $contact->phone }}"
                                                        placeholder="Telepon" name="phone" />
                                                    <label for="phone">Telepon</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="telephone" type="text" value="{{ $contact->telephone }}"
                                                        placeholder="Telepon tambahan" name="telephone" />
                                                    <label for="telephone">Telepon lainnya</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="email" type="email" name="email" value="{{ $contact->email }}"
                                                        placeholder="name@example.com" />
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="website" type="text" value="{{ $contact->website }}"
                                                        placeholder="website.sch.id" name="website" />
                                                    <label for="website">Alamat Website</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea cols="30" rows="20" class="form-control" id="address" type="text" name='address'
                                            placeholder="Alamat">{!! $contact->address !!}</textarea>
                                            <label for="address">Alamat</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

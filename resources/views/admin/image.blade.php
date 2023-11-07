@extends('landing.adminApp')

@section('title', 'Admin | Add Image')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Unggah Foto Kegiatan</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kelola Foto Kegiatan</li>
                </ol>
                <hr>
                @if (Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4">Unggah Foto Kegiatan</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/upload-images" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name='name'
                                                placeholder="Nama Kegiatan" />
                                            <label for="name">Nama Kegiatan</label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="photo">Pilih Gambar (Multiple)</label>
                                            <input type="file" class="form-control" id="photo" name="photo"
                                                accept="image/*" multiple>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Upload Gambar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-5">
                        <hr>
                        <h4 class="text-center font-weight-light my-4">Galeri Kegiatan</h4>
                        @foreach ($photos as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('storage/gallery/' . $item->image) }}" class="card-img-top" alt="">
                                <div class="card-body d-flex justify-content-between">
                                    <p class="card-text">{{ $item->name }}</p>
                                    <form action="/delete-photo/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-icon-split btn-sm">
                                            <span class="icon text-white">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text text-white">Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </main>
    @endsection

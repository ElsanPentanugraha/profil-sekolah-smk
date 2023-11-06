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

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4">Unggah Foto Kegiatan</h4>
                                </div>
                                <div class="card-body">
                                    <form action="upload-images" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name='name'
                                                placeholder="Nama Kegiatan" />
                                            <label for="name">Nama Kegiatan</label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="images">Pilih Gambar (Multiple)</label>
                                            <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary">Upload Gambar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

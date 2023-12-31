@extends('landing.adminApp')

@section('title', 'Admin | Add Major')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Tambah Data Program Keahlian</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/admin/user-management') }}">Program Keahlian</a></li>
                    <li class="breadcrumb-item active">Tambah Program Keahlian</li>
                </ol>
                <hr>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4">Buat Informasi Program Keahlian</h4>
                                </div>
                                <div class="card-body">
                                    <form action="store-major" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name='name'
                                                placeholder="Nama Program Keahlian" />
                                            <label for="name">Nama Program Keahlian</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="photo" name="photo"
                                                    aria-label="Upload">
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea cols="30" rows="20" class="form-control" id="description" type="text" name='description'
                                                placeholder="Deskripsi"></textarea>
                                            
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

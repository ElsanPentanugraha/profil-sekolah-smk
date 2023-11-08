@extends('landing.adminApp')

@section('title', 'Admin | Edit Category')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Edit Data Kategori</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/admin/category-management') }}">Kategori</a></li>
                    <li class="breadcrumb-item active">Edit Kategori</li>
                </ol>
                <hr>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4">Edit Kategori</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/admin/category-update/{{ $category->id }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name='name' value="{{ $category->name }}"
                                                placeholder="Kategori" />
                                            <label for="name">Kategori</label>
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

@extends('landing.adminApp')

@section('title', 'Admin | Detail Informasi')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Detail Pengumuman, Informasi, & Artikel</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin/information-management">Informasi</a></li>
                    <li class="breadcrumb-item active">Detail Informasi</li>
                </ol>
                <hr>
                @if (Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary d-md-inline">Detail Informasi Pengumuman & Berita
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h4>{{ $information->name }}</h4>
                        </div>

                        <div class="d-flex mt-3">
                            <p>
                                Posted on {{ $information->created_at }}
                                by <span>{{ $information->write_by }}</span>
                            </p>
                        </div>
                        <div class="d-flex ">
                            <img src="{{ asset('storage/image/' . $information->image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="d-flex mt-3">
                            <p class="text-justify">
                                {{ $information->description }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    @endsection

@extends('landing.adminApp')

@section('title', 'Admin | Detail Informasi')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Detail Pengumuman, Informasi, & Artikel</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/admin/information-management') }}">Informasi</a></li>
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
                            <h2>{{ $information->name }}</h2>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('storage/postimage/' . $information->image) }}" class="img-fluid"
                                style="max-width: 1100px; max-height: 850px;" alt="">
                        </div>

                        <div class="text-justify mt-2">
                            {!! $information->description !!}
                            {{-- <p class="text-justify">
                                {{ $information->description }}
                            </p> --}}
                        </div>

                        <div class="d-flex justify-content-start mt-3">
                            <div class="d-flex">
                                <i class="bi bi-calendar-event px-2"> </i>
                                <p> {{ $datearticle }} </p>
                            </div>
                            <div class="d-flex px-3">
                                <i class="bi bi-person px-2"> </i> <p> {{ $information->write_by }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    @endsection

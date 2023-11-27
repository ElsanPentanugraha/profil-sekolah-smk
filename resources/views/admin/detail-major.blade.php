@extends('landing.adminApp')

@section('title', 'Admin | Detail Jurusan')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Detail Program Keahlian</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/admin/major-management') }}">Program Keahlian</a></li>
                    <li class="breadcrumb-item active">Detail Program Keahlian</li>
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
                            <h6 class="m-0 font-weight-bold text-primary d-md-inline">Detail Program Keahlian
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h2>{{ $major->name }}</h2>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <img src="{{ asset('storage/majors/' . $major->image) }}" class="img-fluid"
                                style="max-width: 1100px; max-height: 850px;" alt="">
                        </div>

                        <div class="text-justify mt-2">
                            {!! $major->description !!}
                        </div>
                    </div>
                </div>

            </div>
        </main>
    @endsection

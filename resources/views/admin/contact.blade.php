@extends('landing.adminApp')

@section('title', 'Admin | Kontak')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Kelola Informasi Kontak</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kontak</li>
                </ol>
                <hr>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary d-md-inline">Data Informasi Kontak</h6>
                            @if ($contactlist->isEmpty())
                                <a href="/admin/add-contact" class="btn btn-success btn-icon-split float-right btn-sm">
                                    <span class="icon text-white">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah Data</span>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body contact-info">
                        <div class="row">
                            @foreach ($contactlist as $contact)
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
                                <div class="d-flex justify-content-center">
                                    <div id="action-button">
                                        <a href="/admin/edit-contact/{{ $contact->id }}"
                                            class="btn btn-warning btn-icon-split btn-sm">
                                            <span class="icon text-white">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text text-white">Edit</span>
                                        </a>
                                    </div>
                                    <div id="action-button">
                                        <form action="/admin/delete-contact/{{ $contact->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-icon-split btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this item?');">
                                                <span class="icon text-white">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text text-white">Hapus</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </main>
    @endsection

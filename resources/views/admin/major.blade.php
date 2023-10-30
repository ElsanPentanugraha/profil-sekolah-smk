@extends('landing.adminApp')

@section('title', 'Admin | Jurusan')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Kelola Informasi Program Keahlian</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Program Keahlian</li>
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
                            <h6 class="m-0 font-weight-bold text-primary d-md-inline">Data Informasi Program Keahlian</h6>
                            <a href="/admin/add-major" class="btn btn-success btn-icon-split float-right btn-sm">
                                <span class="icon text-white">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jurusan</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($majorlist as $major)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $major->name }}</td>
                                        <td>{{ $major->description }}</td>
                                        <td>{{ $major->image }}</td>
                                        <td>
                                            <a href="/admin/edit-major/{{ $major->id }}"
                                                class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="icon text-white">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text text-white">Edit</span>
                                            </a>
                                            <form action="/admin/delete-major/{{ $major->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-icon-split btn-sm">
                                                    <span class="icon text-white">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text text-white">Hapus</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    @endsection

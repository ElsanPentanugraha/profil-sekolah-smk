@extends('landing.adminApp')

@section('title', 'Admin | Kontak')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Kelola Informasi Kontak</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kontak</li>
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
                            <h6 class="m-0 font-weight-bold text-primary d-md-inline">Data Informasi Kontak</h6>
                            <a href="/admin/add-contact" class="btn btn-success btn-icon-split float-right btn-sm">
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
                                    <th>Website</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Telephone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactlist as $contact)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contact->website }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->telephone }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td>
                                            <a href="/admin/edit-contact/{{ $contact->id }}"
                                                class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="icon text-white">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text text-white">Edit</span>
                                            </a>
                                            <form action="/admin/delete-contact/{{ $contact->id }}" method="post">
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
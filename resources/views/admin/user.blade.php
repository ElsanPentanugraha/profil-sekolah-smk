@extends('landing.adminApp')

@section('title', 'Admin | User Management')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Kelola Data User</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
                <hr>

                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary d-md-inline">Data Akun</h6>
                            <a href="/admin/add-user" class="btn btn-success btn-icon-split float-right btn-sm">
                                <span class="icon text-white-50">
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
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userlist as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="/admin/edit-user/{{ $user->id }}" class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="" class="btn btn-danger btn-icon-split btn-sm">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Hapus</span>
                                            </a>
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

@extends('landing.adminApp')

@section('title', 'Admin | Add User')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Tambah Data User</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin/user-management">User</a></li>
                    <li class="breadcrumb-item active">Add User</li>
                </ol>
                <hr>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4">Buat Akun Pengelola</h4>
                                </div>
                                <div class="card-body">
                                    <form action="store-user" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name='name'
                                                placeholder="Username" />
                                            <label for="name">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" type="email" name="email"
                                                placeholder="name@example.com" />
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="password" name="password"
                                                placeholder="Create a password" />
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Buat Akun</button>
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

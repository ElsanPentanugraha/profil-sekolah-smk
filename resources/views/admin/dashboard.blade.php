@extends('landing.adminApp')

@section('title', 'Dashboard')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h3 class="mt-4">Dashboard</h3>
                Welcome back, <strong>{{ Auth::user()->name }}</strong>
                <hr>
                <div class="dashboard-content mt-5">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <h3 class="text-white-75 small">Pesan</h3>
                                        <div class="text-lg fw-bold">{{ $message }}</div>
                                    </div>
                                    <div>
                                        <i class="fas fa-envelope" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url('/admin/message-management') }}">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <h3 class="text-white-75 small">Pengumuman</h3>
                                        <div class="text-lg fw-bold">{{ $post }}</div>
                                    </div>
                                    <div>
                                        <i class="fas fa-newspaper" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url('/admin/information-management') }}">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <h3 class="text-white-75 small">Kategori Informasi</h3>
                                        <div class="text-lg fw-bold">{{ $category }}</div>
                                    </div>
                                    <div>
                                        <i class="fas fa-list" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url('/admin/category-management') }}">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <h3 class="text-white-75 small">Jurusan</h3>
                                        <div class="text-lg fw-bold">{{ $major }}</div>
                                    </div>
                                    <div>
                                        <i class="fas fa-person-chalkboard" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url('/admin/major-management') }}">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <h3 class="text-white-75 small">Galeri</h3>
                                        <div class="text-lg fw-bold">{{ $gallery }}</div>
                                    </div>
                                    <div>
                                        <i class="fas fa-images" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url('/admin/photo-gallery') }}">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="me-3">
                                        <h3 class="text-white-75 small">Akun Admin</h3>
                                        <div class="text-lg fw-bold">{{ $user }}</div>
                                    </div>
                                    <div>
                                        <i class="fas fa-users" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url('/admin/user-management') }}">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection

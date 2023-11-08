@extends('landing.adminApp')

@section('title', 'Admin | Video')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Kelola Video</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Video</li>
                </ol>
                
            </div>
        </main>
@endsection
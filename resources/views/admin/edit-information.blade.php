@extends('landing.adminApp')

@section('title', 'Admin | Edit Information')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Edit Pengumuman</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/admin/information-management') }}">Informasi</a></li>
                    <li class="breadcrumb-item active">Edit Informasi</li>
                </ol>
                <hr>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4">Edit Pengumuman</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/admin/information-update/{{ $information->id }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" name='name'
                                                value="{{ $information->name }}" placeholder="Judul" />
                                            <label for="name">Judul</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="write_by" type="text"
                                                        name='write_by' value="{{ $information->write_by }}"
                                                        placeholder="Penulis" />
                                                    <label for="write_by">Penulis</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <select name="category_id" id="category"
                                                        class="selectpicker form-control">
                                                        <label for="category">Kategori</label>
                                                        @foreach ($information->category as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @if ($item->id === 1)
                                                                <option value="2">
                                                                    {{ $item->where('id', 2)->first()->name }}
                                                                </option>
                                                                <option value="3">
                                                                    {{ $item->where('id', 3)->first()->name }}
                                                                </option>
                                                            @elseif ($item->id === 2)
                                                                <option value="1">
                                                                    {{ $item->where('id', 1)->first()->name }}
                                                                </option>
                                                                <option value="3">
                                                                    {{ $item->where('id', 3)->first()->name }}
                                                                </option>
                                                            @elseif ($item->id === 3)
                                                                <option value="1">
                                                                    {{ $item->where('id', 1)->first()->name }}
                                                                </option>
                                                                <option value="2">
                                                                    {{ $item->where('id', 2)->first()->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="photo" name="photo"
                                                    aria-label="Upload" onchange="displayFileName(this)">
                                            </div>
                                            @if ($information->image)
                                                <small class="px-2 mt-3">File saat ini: {{ $information->image }}</small>
                                            @endif
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea cols="30" rows="20" class="form-control" id="description" type="text" name='description'
                                                placeholder="Deskripsi">{!! $information->description !!}</textarea>

                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Simpan</button>
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

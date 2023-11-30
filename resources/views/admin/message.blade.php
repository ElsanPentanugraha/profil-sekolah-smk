@extends('landing.adminApp')

@section('title', 'Kelola Pesan')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h3 class="mt-4">Kelola Email</h3>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pesan</li>
                </ol>
                <hr>

                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary d-md-inline">Data Pesan Masuk</h6>

                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Subjek</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($message as $mail)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mail->subject }}</td>
                                        <td>{{ $mail->email }}</td>
                                        <td>{!! Str::limit($mail->mail_message, 50) !!}</td>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <a href="/admin/send-replymail/{{ $mail->id }}"
                                                        class="btn btn-primary btn-icon-split btn-sm me-2">
                                                        <span class="icon text-white">
                                                            <i class="fas fa-reply"></i>
                                                        </span>
                                                        <span class="text text-white">Reply</span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="/admin/detail-mail/{{ $mail->id }}"
                                                        class="btn btn-info btn-icon-split btn-sm me-2">
                                                        <span class="icon text-white">
                                                            <i class="fas fa-circle-info"></i>
                                                        </span>
                                                        <span class="text text-white">Detail</span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <form action="/admin/delete-mail/{{ $mail->id }}" method="post">
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

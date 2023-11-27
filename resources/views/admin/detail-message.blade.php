@extends('landing.adminApp')

@section('title', 'Detail Email')
    
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4">Detail Email</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/admin/message-management') }}">Pesan</a></li>
                <li class="breadcrumb-item active">Detail Email</li>
            </ol>
            <hr>
            @if (Session::has('status'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-center align-items-center">
                        <h3 class="m-0 font-weight-bold text-primary d-md-inline">{{ $mail->subject }}
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="m-0 font-weight-bold text-primary d-md-inline">{{ $mail->name }}</h5>
                            <p>kepada saya <i class="bi bi-chevron-down"></i></p>
                        </div>
                        
                        <a href="/admin/send-replymail/{{ $mail->id }}"
                            class="btn btn-primary btn-icon-split btn-sm me-2">
                            <span class="icon text-white">
                                <i class="fas fa-reply"></i>
                            </span>
                            <span class="text text-white">Reply</span>
                        </a>
                    </div>
                    <div class="text-justify mt-2">
                        {!! $mail->mail_message !!}
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
@extends('landing.adminApp')

@section('title', 'Admin | User Management')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h4 class="mt-4">Kelola Data User</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
                <hr>

                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary d-md-inline">Data Akun</h6>
                            <a href="/admin/add-user" class="btn btn-success btn-icon-split float-right btn-sm">
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userlist as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <div id="action-button">
                                                    <a href="/admin/edit-user/{{ $user->id }}"
                                                        class="btn btn-warning btn-icon-split btn-sm">
                                                        <span class="icon text-white">
                                                            <i class="fas fa-edit"></i>
                                                        </span>
                                                        <span class="text text-white">Edit</span>
                                                    </a>
                                                </div>
                                                <div id="action-button">
                                                    <form action="{{ url('/admin/delete-user', $user->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <button class="delete-button btn btn-danger btn-icon-split btn-sm"
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

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <i class="fa-solid fa-circle-exclamation mb-4" style="font-size: 80px; color:#f8c464;"></i>
                        <h4>Anda yakin ingin menghapus Akun?</h4>
                        <p>Anda tidak akan dapat mengembalikan ini!</p>
                    </div>
                    <div class="modal-footer text-align-center">
                        <form id="deleteForm" action="/admin/delete-user/{{ $user->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-primary">Ya, hapus!</button>
                        </form>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>





        {{-- <script>
           
            function confirmDelete(event, id) {
                console.log("User ID:", id);
                event.preventDefault();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Submit the form if the user confirms
                        document.getElementById('deleteForm').submit();
                    }
                });
            }
        </script> --}}

    @endsection

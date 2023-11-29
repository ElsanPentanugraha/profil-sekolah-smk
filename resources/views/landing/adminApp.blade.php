<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="{{ asset('assets-adm/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('admin.sidebar')
    @yield('content')
    @include('admin.footer')


    <!-- Pertama, letakkan jQuery di atas Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <!-- Selanjutnya, tambahkan skrip Select2 dan CKEditor -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

    <!-- Chart.js dan Simple DataTables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>

    <!-- Skrip aplikasi Anda -->
    <script src="{{ asset('assets-adm/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets-adm/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('assets-adm/js/datatables-simple-demo.js') }}"></script>
    <script src="{{ asset('assets-adm/js/scripts.js') }}"></script>

    <!-- SweetAlert untuk Laravel -->
    @include('sweetalert::alert')

    <!-- Select2 initialization -->
    <script>
        $(document).ready(function() {
            $('#category').select2();
        });
    </script>

    <!-- CKEditor initialization -->
    <script>
        CKEDITOR.replace('description');
    </script>

    <!-- SweetAlert confirmation dialog -->
    {{-- <script>
        function confirmDelete(userId) {
            console.log('User ID:', userId);

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Ini akan dihapus secara permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then(function(result) {
                if (result.isConfirmed) {
                    // Submit the form for deletion
                    var form = document.getElementById('deleteForm');
                    form.submit();
                }
            }).catch(function(error) {
                console.error('SweetAlert error:', error);
            });
        }
    </script> --}}

    



</body>

</html>

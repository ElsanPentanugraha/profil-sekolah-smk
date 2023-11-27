<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Admin SMK</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <main class="authenticationForm">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="floatAuthentication col-lg-5 shadow-lg border-0 rounded-lg mt-5">
                    <div class="row justify-content-center">
                        <div class=" d-flex col-lg-5">
                            <div class="login-brand">
                                <img src="{{ asset('storage/logo/LogoSMK2.jpg') }}"
                                    style="max-height: 220px; max-width:200px;" alt="" class="logo">
                            </div>
                            <div class="login-title">
                                <h1>Login</h1>
                                <h6>Admin SMK</h6>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @if (Session::has('status'))
                        <div class="alert alert-warning" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <form action="{{ url('/secret/auth') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="email" name="email"
                                placeholder="Email@localhost.com" />
                            <label for="inputEmail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                            <label for="inputPassword">Password</label>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Vendor JS File -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>

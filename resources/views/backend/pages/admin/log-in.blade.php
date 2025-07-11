<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backend/dist/css/adminlte.min2167.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="javascript:;" class="h1"><b>{{ env('APP_NAME') }}</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Connectez-vous pour commencer votre session</p>

            <form action="{{ route('admin.login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/backend/dist/js/adminlte.min2167.js')}}"></script>
<!-- SWEET ALERT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Valide',
            text: "{!! session('success') !!}"
        });
    </script>
@elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: "{!! session('error') !!}"
        });
    </script>
@elseif(session()->has('warning'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Votre attention',
            text: "{!! session('warning') !!}"
        });
    </script>
@elseif(session()->has('info'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Information',
            text: "{!! session('info') !!}"
        });
    </script>
@elseif($errors->any())
    <script>
        var errorMessages = "<ul>";
        @foreach ($errors->all() as $error)
            errorMessages += "<li>{{ $error }}</li>";
        @endforeach
            errorMessages += "</ul>";

        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            html: errorMessages
        });
    </script>
@endif
</body>
</html>

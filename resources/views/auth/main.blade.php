<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <title>SMPN 1 Sumenep</title>
    <link href="{{ asset('assets-login/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets-login/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets-login/css/ruang-admin.css') }}" rel="stylesheet">
    <script src="{{ asset('assets-login/js/jquery.js') }}"></script>
</head>

<body>
    @yield('content')
    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('assets-login/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-login/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-login/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets-login/js/ruang-admin.min.js') }}"></script>
</body>

</html>

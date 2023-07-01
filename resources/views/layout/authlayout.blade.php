<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" href={{ url('images/logobem.png') }} type="image/x-icon">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/vendor/bootstrap/css/bootstrap.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href={{ url('loginregis/fonts/iconic/css/material-design-iconic-font.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/vendor/animate/animate.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/vendor/css-hamburgers/hamburgers.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/vendor/animsition/css/animsition.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/vendor/select2/select2.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/vendor/daterangepicker/daterangepicker.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/css/util.css') }}>
    <link rel="stylesheet" type="text/css" href={{ url('loginregis/css/main.css') }}>
    <!--===============================================================================================-->

    {{-- SWEET ALERT 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    {{-- BOOTSTRAP 5 ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    @yield('content')

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src={{ url('loginregis/vendor/jquery/jquery-3.2.1.min.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ url('loginregis/vendor/animsition/js/animsition.min.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ url('loginregis/vendor/bootstrap/js/popper.js') }}></script>
    <script src={{ url('loginregis/vendor/bootstrap/js/bootstrap.min.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ url('loginregis/vendor/select2/select2.min.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ url('loginregis/vendor/daterangepicker/moment.min.js') }}></script>
    <script src={{ url('loginregis/vendor/daterangepicker/daterangepicker.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ url('loginregis/vendor/countdowntime/countdowntime.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ url('loginregis/js/main.js') }}></script>

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}', '', 'error')
        </script>
    @endif

    @if ($message = Session::get('success'))
        <script>
            Swal.fire('{{ $message }}', '', 'success')
        </script>
    @endif
</body>

</html>

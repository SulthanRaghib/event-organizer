@extends('layout.authlayout')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <p style="text-align: right">
                    <a href={{ url('/home') }} style="color: white">
                        <i class="bi bi-arrow-bar-left"></i> Kembali Home</a>
                </p>
                <form class="login100-form validate-form" action={{ route('login-proses') }} method="post">
                    @csrf
                    <span class="login100-form-logo">
                        <img src={{ url('/images/logo-bem.png') }} width="80%">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#x2709;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <span class="txt1" style="color: black">Belum Memiliki Akun?</span>
                        <b><a class="txt1" href={{ url('/register') }}>
                                Register
                            </a></b>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

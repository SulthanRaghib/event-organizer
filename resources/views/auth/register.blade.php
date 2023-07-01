@extends('layout.authlayout')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action={{ route('register-proses') }} method="post">
                    @csrf
                    <span class="login100-form-logo">
                        <img src={{ url('/images/logobem.png') }} width="80%">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Register
                    </span>

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#x2709;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="name" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    {{--
                    <div class="wrap-input100 validate-input" data-validate="Enter telephone">
                        <input class="input100" type="number" name="no_telp" placeholder="Number Telephone">
                        <span class="focus-input100" data-placeholder="&#x2706;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter address">
                        <input class="input100" type="text" name="alamat" placeholder="Address">
                        <span class="focus-input100" data-placeholder="&#x1F3D8;"></span>
                    </div> --}}

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <span class="txt1" style="color: black">Sudah Memiliki Akun?</span>
                        <b><a class="txt1" href={{ url('login') }}>
                                Login
                            </a></b>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

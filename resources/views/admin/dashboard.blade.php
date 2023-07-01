{{--
    jika admin belum login maka akan diarahkan ke halaman login
    jika admin sudah login maka akan diarahkan ke halaman home dan tombol login akan diganti dengan tombol logout
--}}
@if (Auth::guest())
    <a href="{{ url('/login') }}">Login</a>
@else
    <form action="{{ url('/logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endif
dashboard admin
selamat datang {{ Auth::user()->name }} di halaman admin

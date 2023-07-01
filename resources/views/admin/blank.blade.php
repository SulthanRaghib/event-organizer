@extends('layout.backend')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

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
@endsection

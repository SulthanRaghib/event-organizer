@extends('frontend.layout')

@section('content')
    @if (Auth::guest())
        <a href="{{ url('/login') }}">Login</a>
    @else
        <form action="{{ url('/logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endif

    welcome {{ Auth::user()->name }}
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home')->with('success', 'Selamat datang');
            }
        } else {
            return redirect()->route('index')->with('failed', 'Email atau password salah');
        }
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function registerProses(Request $request)
    {

        $messages = [
            'email.unique' => 'Maaf Email sudah terdaftar',
        ];

        $request->validate([
            'email' => 'required|unique:users',
        ], $messages);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);

        if ($user) {
            return redirect()->route('index')->with('success', 'Berhasil mendaftar, silahkan login');
        } else {
            return redirect()->route('register')->with('failed', 'Gagal mendaftar, silahkan coba lagi');
        }
    }

    public function logout()
    {
        if (auth()->user()->role == 'admin') {
            auth()->logout();
            return redirect()->route('home')->with('success', 'Terima kasih atas kerja keras anda');
        } else {
            auth()->logout();
            return redirect()->route('home')->with('success', 'Terima kasih atas penggunaan layanan kami');
        }
    }
}

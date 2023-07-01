<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome()
    {
        // send title and content to view
        return view('user.home', [
            'title' => 'Home',
        ]);
    }

    public function events()
    {
        // $data = Event::latest()->paginate(2);
        $data = Event::all();
        return view('events.index', [
            'title' => 'Events',
            'data' => $data
        ]);
    }

    public function detailEvent($id)
    {
        $data = Event::find($id);
        return view('events.detail', [
            'title' => 'Detail Event',
            'data' => $data
        ]);
    }

    public function registerEvent($id)
    {
        $data = Event::find($id);
        return view('events.register', [
            'title' => 'Register Event',
            'data' => $data
        ]);
    }

    public function registerEventProses(Request $request, $id)
    {
        $message = [
            'nama_kampus.required' => 'Nama kampus harus diisi',
            'status_pendaftaran.required' => 'Status pendaftaran harus ceklis',
        ];

        $request->validate([
            'nama_kampus' => 'required',
            'status_pendaftaran' => 'required',
        ], $message);

        Pendaftaran::create([
            'event_id' => $id,
            'user_id' => auth()->user()->id,
            'status_pendaftaran' => $request->status_pendaftaran,
            'nama_kampus' => $request->nama_kampus,
        ]);

        return redirect()->route('events')->with('success', 'Telah berhasil Mendaftarkan Event');
    }
}

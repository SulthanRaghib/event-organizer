<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data = Event::all();

        return view('admin.event', [
            'title' => 'Event',
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('admin.event.create', [
            'title' => 'Tambah Event'
        ]);
    }

    public function addEvent(Request $request)
    {
        $message = [
            'judul_event.required' => 'Judul event harus diisi',
            'pembicara.required' => 'Pembicara harus diisi',
            'tanggal_event.required' => 'Tanggal event harus diisi',
            'tanggal_event.after' => 'Tanggal event harus sebelum tanggal sekarang',
            'jam_mulai.required' => 'Jam mulai harus diisi',
            'jam_selesai.required' => 'Jam selesai harus diisi',
            'jam_selesai.after' => 'Jam selesai harus lebih besar dari jam mulai',
            'tempat_event.required' => 'Tempat event harus diisi',
            'deskripsi_event.required' => 'Deskripsi event harus diisi',
        ];

        $request->validate([
            'judul_event' => 'required',
            'pembicara' => 'required',
            'tanggal_event' => 'required|after:tanggal_dibuat',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required|after:jam_mulai',
            'tempat_event' => 'required',
            'deskripsi_event' => 'required',
        ], $message);

        Event::create([
            'judul_event' => $request->judul_event,
            'pembicara' => $request->pembicara,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tanggal_event' => $request->tanggal_event,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'tempat_event' => $request->tempat_event,
            'deskripsi_event' => $request->deskripsi_event,
            'status_event' => 'Belum Terlaksana'
        ]);

        return redirect()->route('event')->with('success', 'Event berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Event::find($id);

        return view('admin.event.edit', [
            'title' => 'Edit Event',
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $message = [
            'judul_event.required' => 'Judul event harus diisi',
            'pembicara.required' => 'Pembicara harus diisi',
            'tanggal_event.required' => 'Tanggal event harus diisi',
            'tanggal_event.after' => 'Tanggal event harus sebelum tanggal sekarang',
            'jam_mulai.required' => 'Jam mulai harus diisi',
            'jam_selesai.required' => 'Jam selesai harus diisi',
            'jam_selesai.after' => 'Jam selesai harus lebih besar dari jam mulai',
            'tempat_event.required' => 'Tempat event harus diisi',
            'deskripsi_event.required' => 'Deskripsi event harus diisi',
        ];

        $request->validate([
            'judul_event' => 'required',
            'pembicara' => 'required',
            'tanggal_event' => 'required|after:tanggal_dibuat',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required|after:jam_mulai',
            'tempat_event' => 'required',
            'deskripsi_event' => 'required',
        ], $message);

        Event::where('id_event', $id)->update([
            'judul_event' => $request->judul_event,
            'pembicara' => $request->pembicara,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tanggal_event' => $request->tanggal_event,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'tempat_event' => $request->tempat_event,
            'deskripsi_event' => $request->deskripsi_event,
            'status_event' => 'Belum Terlaksana'
        ]);

        return redirect()->route('event')->with('success', 'Event berhasil diupdate');
    }

    public function delete($id)
    {
        Event::where('id_event', $id)->delete();

        return redirect()->route('event')->with('success', 'Event berhasil dihapus');
    }

    public function detail($id)
    {
        $data = Event::find($id);

        return view('admin.event.detail', [
            'title' => 'Detail Event',
            'data' => $data
        ]);
    }
}

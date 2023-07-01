@extends('layout.frontend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h1 class="mb-3">Detail Event : {{ $data->judul_event }}</h1>
                    <a href="{{ route('event') }}" class="btn btn-outline-primary mb-3"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <p class="font-weight-bold">Judul Event</p>
                                <p class="font-weight-bold">Pembicara</p>
                                <p class="font-weight-bold">Tanggal Dibuat</p>
                                <p class="font-weight-bold">Tanggal Event</p>
                                <p class="font-weight-bold">Jam Mulai</p>
                                <p class="font-weight-bold">Jam Selesai</p>
                                <p class="font-weight-bold">Tempat Event</p>
                                <p class="font-weight-bold">Deskripsi</p>
                                <p class="font-weight-bold">Status</p>
                            </div>
                            <div class="col-9">
                                <p>{{ $data->judul_event }}</p>
                                <p>{{ $data->pembicara }}</p>
                                <p>{{ $data->tanggal_dibuat }}</p>
                                <p>{{ $data->tanggal_event }}</p>
                                <p>{{ $data->jam_mulai }}</p>
                                <p>{{ $data->jam_selesai }}</p>
                                <p>{{ $data->tempat_event }}</p>
                                <p>{{ $data->deskripsi_event }}</p>
                                <p>
                                    @if ($data->tanggal_event > $data->tanggal_dibuat)
                                        <span class="badge bg-success text-white">Upcoming</span>
                                    @elseif($data->tanggal_event == $data->tanggal_dibuat)
                                        <span class="badge bg-warning text-white">On Going</span>
                                    @else
                                        <span class="badge bg-danger text-white">Done</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <h1 class="mb-3">Daftar Event: </h1>

                            <form action={{ route('events.register-proses', $data->id_event) }} method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control mb-3" id="name" name="name"
                                        placeholder="Masukkan Username" value="{{ Auth::user()->name }}" readonly>
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama_kampus">Nama Kampus</label>
                                    <input type="text" class="form-control mb-3" id="nama_kampus" name="nama_kampus"
                                        placeholder="Bersal Dari Kampus Mana Nihh" value="{{ old('nama_kampus') }}">
                                </div>
                                @error('nama_kampus')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                {{-- buatkan checkbox --}}
                                <div class="form-group">
                                    <input type="checkbox" name="status_pendaftaran" id="status_pendaftaran" value="setuju"
                                        class="form-check-input" style="margin-right: 10px">Saya setuju
                                    mengikuti event ini
                                </div>
                                @error('status_pendaftaran')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <button type="submit" class="btn btn-success float-end">Daftar Event</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

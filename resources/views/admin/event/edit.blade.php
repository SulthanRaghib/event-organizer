@extends('layout.backend')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-4 text-gray-800">Edit Event : {{ $data->judul_event }}</h1>

        <a href="{{ route('event') }}" class="btn btn-outline-primary mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
    <form action="{{ route('event.update', $data->id_event) }} " method="POST">
        @csrf
        <div class="form-group">
            <label for="judul_event">Judul Event</label>
            <input type="text" class="form-control" id="judul_event" name="judul_event" placeholder="Masukkan Judul Event"
                value="{{ $data->judul_event }}">
        </div>
        @error('judul_event')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="pembicara">Pembicara</label>
            <input type="text" class="form-control" id="pembicara" name="pembicara" placeholder="Masukkan Pembicara"
                value="{{ $data->pembicara }}">
        </div>
        @error('pembicara')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="tanggal_dibuat">Tanggal Dibuat (Tanggal Sekarang)</label>
            <input type="date" class="form-control" id="tanggal_dibuat" name="tanggal_dibuat"
                value="{{ $data->tanggal_dibuat }}" readonly>
        </div>

        <div class="form-group">
            <label for="tanggal_event">Tanggal Event</label>
            <input type="date" class="form-control" id="tanggal_event" name="tanggal_event"
                placeholder="Masukkan Tanggal Event" value="{{ $data->tanggal_event }}">
        </div>
        @error('tanggal_event')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="jam_mulai">Jam Mulai</label>
            <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" value="{{ $data->jam_mulai }}">
        </div>
        @error('jam_mulai')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="jam_selesai">Jam Selesai</label>
            <input type="time" class="form-control" id="jam_selesai" name="jam_selesai"
                value="{{ $data->jam_selesai }}">
        </div>
        @error('jam_selesai')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="tempat_event">Tempat Event</label>
            <input type="text" class="form-control" id="tempat_event" name="tempat_event"
                placeholder="Masukkan Tempat Event" value="{{ $data->tempat_event }}">
        </div>
        @error('tempat_event')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="deskripsi_event">Deskripsi</label>
            <textarea class="form-control" id="deskripsi_event" name="deskripsi_event" rows="3"
                placeholder="Masukkan Deskripsi">{{ $data->deskripsi_event }}</textarea>
        </div>
        @error('deskripsi_event')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Edit Event</button>
    </form>
@endsection

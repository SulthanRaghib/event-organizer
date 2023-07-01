@extends('layout.backend')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-4 text-gray-800">Detail Event</h1>

        <a href="{{ route('event') }}" class="btn btn-outline-primary mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
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
@endsection

@extends('layout.backend')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Page Peserta Pendaftaran Event</h1>


    @if ($data->isEmpty())
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Nothing Pendaftaran</h4>
            <p>Tidak ada pendaftaran yang tersedia</p>
        </div>
    @else
        <table class="table table-hover ml-3">
            <thead>
                <tr>
                    <th scope="col">Judul Event</th>
                    <th scope="col">Tanggal Event</th>
                    <th scope="col">Username</th>
                    <th scope="col">Asal Kampus</th>
                    <th scope="col">Tempat Event</th>
                    <th scope="col">Status</th>
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->judul_event }}</td>
                        <td>{{ $item->tanggal_event }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->nama_kampus }}</td>
                        <td>{{ $item->tempat_event }}</td>
                        <td><span class="badge bg-success text-white">{{ $item->status_pendaftaran }}</span></td>
                        {{-- <td>
                            <a href="{{ route('event.detail', $item->id_pendaftaran) }}" class="btn btn-info mr-2">
                                <i class="fas fa-info-circle mr-2"></i>Detail
                            </a>
                            <a href="{{ route('event.edit', $item->id_pendaftaran) }}" class="btn btn-warning mr-2">
                                <i class="fas fa-edit mr-2"></i>Edit
                            </a>
                            <form action="{{ route('event.delete', $item->id_pendaftaran) }}" method="POST"
                                class="d-inline">
                                @csrf
                                <input type="hidden" name="id_event" value="{{ $item->id_pendaftaran }}">
                                <button type="submit" class="btn btn-danger mr-2"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus event ini?')">
                                    <i class="fas fa-trash mr-2"></i>Delete
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}', '', 'error')
        </script>
    @endif

    @if ($message = Session::get('success'))
        <script>
            Swal.fire('{{ $message }}', '', 'success')
        </script>
    @endif


@endsection

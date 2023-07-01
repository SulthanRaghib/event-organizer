@extends('layout.backend')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Event Page</h1>

    @if ($data->isEmpty() == false)
        <a href="{{ route('event.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Event</a>
        </div>
    @endif

    @if ($data->isEmpty())
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Nothing Event</h4>
            <p>Tidak ada event yang tersedia, silahkan tambahkan event terlebih dahulu.</p>
            <hr>
            <a href="{{ route('event.create') }}" class="btn btn-primary">Tambah Event</a>
        </div>
    @else
        <table class="table table-hover ml-3">
            <thead>
                <tr>
                    <th scope="col">Judul Event</th>
                    <th scope="col">Pembicara</th>
                    <th scope="col">Tanggal Event</th>
                    <th scope="col">Tempat Event</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->judul_event }}</td>
                        <td>{{ $item->pembicara }}</td>
                        <td>{{ $item->tanggal_event }}</td>
                        <td>{{ $item->tempat_event }}</td>
                        <td>
                            @if ($item->tanggal_event > $item->tanggal_dibuat)
                                <span class="badge bg-success text-white">Upcoming</span>
                            @elseif($item->tanggal_event == $item->tanggal_dibuat)
                                <span class="badge bg-warning text-white">On Going</span>
                            @else
                                <span class="badge bg-danger text-white">Done</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('event.detail', $item->id_event) }}" class="btn btn-info mr-2">
                                <i class="fas fa-info-circle mr-2"></i>Detail
                            </a>
                            <a href="{{ route('event.edit', $item->id_event) }}" class="btn btn-warning mr-2">
                                <i class="fas fa-edit mr-2"></i>Edit
                            </a>
                            <form action="{{ route('event.delete', $item->id_event) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="id_event" value="{{ $item->id_event }}">
                                <button type="submit" class="btn btn-danger mr-2"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus event ini?')">
                                    <i class="fas fa-trash mr-2"></i>Delete
                                </button>
                            </form>
                        </td>
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

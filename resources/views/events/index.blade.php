@extends('layout.frontend')
@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="events">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center mb-4">
                    <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Upcoming University Events</h5>
                    <p class="mb-3">Executive Trade International is an University Application Centre, guiding
                        Bangladeshi students to Australian, British, Canadian and Irish universities!</p>
                </div>
            </div>
            <div class="row flex-center h-100">
                <div class="col-xl-9">
                    <div class="carousel slide" id="carouselEvents" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row h-100 justify-content-center">
                                    @if ($data->isEmpty())
                                        <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Nothing Event</h4>
                                            <p>Tidak ada event yang tersedia, silahkan tambahkan event terlebih dahulu.</p>
                                            <hr>
                                            <a href="{{ route('event.create') }}" class="btn btn-primary">Tambah Event</a>
                                        </div>
                                    @else
                                        @foreach ($data as $item)
                                            <div class="col-md-6 mb-4">
                                                <div class="card h-100 shadow px-2 px-lg-3 card-span pt-4">
                                                    <div class="text-center text-md-start card-hover">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1">
                                                                    <span class="fw-medium fs-1 mb-2">
                                                                        {{ date('d', strtotime($item->tanggal_event)) }}
                                                                    </span>
                                                                    <br>
                                                                    {{ date('M', strtotime($item->tanggal_event)) }}
                                                                    <br>
                                                                    {{ date('Y', strtotime($item->tanggal_event)) }}
                                                                </span>
                                                                <h6 class="fw-light fs-1 fs-lg-2 text-start ms-3">
                                                                    {{ $item->judul_event }}
                                                                </h6>
                                                            </div>
                                                            <p class="mt-4 mb-md-0 mb-lg-3 fw-light lh-base text-start">
                                                                {{ $item->deskripsi_event }}</p>
                                                            <div class="d-flex flex-between-center">
                                                                <div class="d-flex align-items-center">
                                                                    <a class="btn btn-lg ps-0 text-primary fw-light fs--1"
                                                                        href="{{ route('events.details', $item->id_event) }}">Read
                                                                        More
                                                                        <svg class="bi bi-arrow-right-short"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="25" height="25"
                                                                            fill="currentColor" viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                                            </path>
                                                                        </svg></a>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <svg class="bi bi-alarm me-2"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z">
                                                                        </path>
                                                                    </svg>
                                                                    <p class="mb-0 fw-light text-dark fs--1">
                                                                        {{ date('H:i', strtotime($item->jam_mulai)) }} -
                                                                        {{ date('H:i', strtotime($item->jam_selesai)) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                {{-- <div class="container">
                                    <nav aria-label="pagination">
                                        <ul class="pagination" style="justify-content: center"
                                            data-bs-target="#carouselEvents" data-bs-slide-to="0">
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->


    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
@endsection

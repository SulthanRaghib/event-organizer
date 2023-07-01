@extends('layout.frontend')
@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100 py-5">

        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto align-items-center text-center">
                    <h6 class="mb-4 text-uppercase fw-light fs-1 mb-6">Featured Universities</h6>
                    <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row h-100 justify-content-center">
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/mac-uni.png') }}" alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/charles-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/newcastle-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/la-trobe-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row h-100 justify-content-center">
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/mac-uni.png') }}" alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/charles-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/newcastle-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/la-trobe-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="1000">
                                <div class="row h-100 justify-content-center">
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/mac-uni.png') }}" alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/charles-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/newcastle-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/la-trobe-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row h-100 justify-content-center">
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/mac-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/charles-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4"
                                            src="{{ url('frontend/assets/img/gallery/newcastle-uni.png') }}"
                                            alt="universities" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 flex-center">
                            <div class="col-auto position-relative z-index-2">
                                <ol class="carousel-indicators">
                                    <li class="active mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                                    <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                    <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                                    <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center my-5">
                    <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-4">News</h5>
                    <p class="mb-3">Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae
                        praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse
                        vult.</p>
                </div>
            </div>
            <div class="row flex-center h-100">
                <div class="col-xl-9">
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow card-span"><img class="card-img-top"
                                    src="{{ url('frontend/assets/img/gallery/news-1.png') }}" alt="news" />
                                <div class="card-body">
                                    <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="12" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                        </path>
                                        <path
                                            d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                        </path>
                                    </svg><span class="fs--1">17 April 2021</span>
                                    <h5 class="fs-lg-1 my-3">Come On In. The Water’s Fine (Mostly).</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow card-span"><img class="card-img-top"
                                    src="{{ url('frontend/assets/img/gallery/news-2.png') }}" alt="news" />
                                <div class="card-body">
                                    <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="12" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                        </path>
                                        <path
                                            d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                        </path>
                                    </svg><span class="fs--1">17 April 2021</span>
                                    <h5 class="fs-lg-1 my-3">Trump Lays Plans to Reverse Obama’s Climate Change</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow card-span"><img class="card-img-top"
                                    src="{{ url('frontend/assets/img/gallery/news-3.png') }}" alt="news" />
                                <div class="card-body">
                                    <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="12" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                        </path>
                                        <path
                                            d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                        </path>
                                    </svg><span class="fs--1">17 April 2021</span>
                                    <h5 class="fs-lg-1 my-3">How a Little Bit of Hydra Regrows a Whole Animal</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center my-3">
                    <button class="btn btn-lg btn-primary fw-light" type="submit">Join Here
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25"
                            height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
@endsection

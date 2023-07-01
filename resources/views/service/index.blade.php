@extends('layout.frontend')
@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="services">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center mb-4">
                    <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Our Services</h5>
                    <p class="mb-5">Executive Trade International is an University Application Centre, guiding
                        Bangladeshi students to Australian, British, Canadian and Irish universities!</p>
                </div>
            </div>
            <div class="row flex-center h-100">
                <div class="col-xl-9">
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                                <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                        src="{{ url('frontend/assets/img/icons/career.png') }}" height="60"
                                        alt="services" />
                                    <div class="card-body">
                                        <h6 class="fw-light fs-1 heading-color">Career Counselling</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis
                                            fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a
                                            class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn
                                            more
                                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg"
                                                width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                                <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                        src="{{ url('frontend/assets/img/icons/admission.png') }}" height="60"
                                        alt="services" />
                                    <div class="card-body">
                                        <h6 class="fw-light fs-1 heading-color">University Admissions</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis
                                            fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a
                                            class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn
                                            more
                                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg"
                                                width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                                <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                        src="{{ url('frontend/assets/img/icons/visa.png') }}" height="60"
                                        alt="services" />
                                    <div class="card-body">
                                        <h6 class="fw-light fs-1 heading-color">Visa COnsultancy</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis
                                            fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a
                                            class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn
                                            more
                                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg"
                                                width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                                <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                        src="{{ url('frontend/assets/img/icons/accommodation.png') }}" height="60"
                                        alt="services" />
                                    <div class="card-body">
                                        <h6 class="fw-light fs-1 heading-color">Accommodation</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis
                                            fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a
                                            class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn
                                            more
                                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg"
                                                width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                                <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                        src="{{ url('frontend/assets/img/icons/departure.png') }}" height="60"
                                        alt="services" />
                                    <div class="card-body">
                                        <h6 class="fw-light fs-1 heading-color">Pre-Departure Briefing</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-3">Maiores voluptas laboriosam non dolorum perferendis
                                            fuga repellat aut. Blanditiis quos in minus. Voluptatum </p><a
                                            class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn
                                            more
                                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg"
                                                width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
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

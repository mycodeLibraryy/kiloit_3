@extends('layouts.app')
@section('head')
    <title>Teams</title>
@endsection

@section('content')
    <div class="breadcrumb">
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">
                    Our Teams
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="#">Team</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid fact py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-white mt-1">
                            Success in getting happy customer
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-white mt-1">
                            Thousands of successful business
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">
                            Total clients who love KiloIT
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">
                            Stars reviews given by satisfied clients.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 fade-right" style="max-width: 600px;">
                <h5 class="text-primary">
                    Our Teams
                </h5>
                <h1 class="mb-3">
                    Meet our expert Teams
                </h1>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rounded-team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="/assets/img/team-1.jpg" alt="team-1"
                                            class="img-fluid w-100 rounded-circle">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4>Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="/assets/img/team-2.jpg" alt="team-2"
                                            class="img-fluid w-100 rounded-circle">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4>Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="/assets/img/team-3.jpg" alt="team-3"
                                            class="img-fluid w-100 rounded-circle">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4>Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-team-item">
                            <div class="team-content">
                                <div class="team-img-icon">
                                    <div class="team-img rounded-circle">
                                        <img src="/assets/img/team-4.jpg" alt="team-4"
                                            class="img-fluid w-100 rounded-circle">
                                    </div>
                                    <div class="team-name text-center py-3">
                                        <h4>Full Name</h4>
                                        <p class="m-0">Designation</p>
                                    </div>
                                    <div class="team-icon d-flex justify-content-center pb-4">
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a class="btn btn-square text-white rounded-circle m-1" href="#">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>
@endsection
